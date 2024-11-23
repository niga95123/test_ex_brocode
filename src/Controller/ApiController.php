<?php

namespace App\Controller;

use App\Entity\Developer;
use App\Entity\Project;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Validator\Constraints\Regex;

#[Route('/api')]
class ApiController extends AbstractController
{
    private ValidatorInterface $validator;

    public function __construct(ValidatorInterface $validator)
    {
        $this->validator = $validator;
    }

    #[Route('/recruitDev', name: 'app_recruit_developer', methods: ['POST'])]
    #[\OpenApi\Attributes\Response(response: 400, description: 'При ошибке будет JSON ответ с пояснением')]
    #[\OpenApi\Attributes\Response(response: 200, description: 'Разработчик успешно нанят')]
    public function recruitDev(Request $request, EntityManagerInterface $entityManager, ValidatorInterface $validator): JsonResponse
    {
        //Дополнительное убеждаемся что обращение идет постом
        if (!$request->isMethod('POST')) {
            return new JsonResponse(['error' => 'Method not allowed'], 405);
        }

        $status = 'error';
        $message = '';
        $responseStatus = Response::HTTP_BAD_REQUEST;

        //Получаем данные с POST
        $data = json_decode($request->getContent(), true);

        if (empty($data)) {
            $message = 'Проверьте отправляемые данные!';
            return $this->json(['status' => $status, 'message' => $message], $responseStatus);
        }

        //Получаем столбцы сущности разработчик
        $classMetadata = $entityManager->getClassMetadata(Developer::class);
        $fieldNames = $classMetadata->getFieldNames();
        unset($fieldNames[0]);

        //Проверяем наличие нужных столбцов
        $missingCol = $this->validateArrayKeys($data, $fieldNames);

        //Проверяем есть ли отсутствующие столбцы
        if (empty($missingCol)) {
            foreach ($data as $key => $value) {
                $violations = $validator->validate($value, [
                    new NotBlank(),
                ]);
                if (count($violations) > 0) {
                    $message = 'Проверьте заполненность полей!';
                    break;
                }
            }

            //Проверяемвсе ли поля заполненны
            if (empty($message)) {
                $responseData = $this->validateData($this->validator, $data['email'], $data['phone']);

                //Проверяем введенную почту и номер на валидность
                if ($responseData['code'] === 'success') {
                    $developerRepository = $entityManager->getRepository(Developer::class);
                    $developerByEmail = $developerRepository->findOneBy(['email' => $data['email']]);
                    $developerByPhone = $developerRepository->findOneBy(['phone' => $data['phone']]);
                    $developerName = $developerRepository->findOneBy(['fullName' => $data['fullName']]);

                    //Проверяем существует ли такой разработчик или дубляжи почты или номера
                    if ($developerByEmail !== null || $developerByPhone !== null || $developerName !== null) {
                        $message = 'Разработчик уже нанят!';
                    } else {
                        //Добавляем разраба
                        $developer = (new Developer())
                            ->setFullName($data['fullName'])
                            ->setPosition($data['position'])
                            ->setEmail($data['email'])
                            ->setPhone($data['phone'])
                            ->setAge($data['age'])
                            ->setSalary($data['salary']);

                        $entityManager->persist($developer);
                        $entityManager->flush();
                        $status = 'success';
                        $message = 'Разработчик успешно нанят!';
                        $responseStatus = Response::HTTP_OK;
                    }
                } else {
                    $message = $responseData['message'];
                }
            }

        } else {
            $message = 'Нехватает поля: ';
            foreach ($missingCol as $key => $colName) {
                $message .= $colName . ' ';
            }
        }

        return $this->json(['status' => $status, 'message' => $message], $responseStatus);
    }

    #[Route('/transferDev', name: 'app_transfer_developer',  methods: ['POST'])]
    #[\OpenApi\Attributes\Response(response: 200, description: 'Разработчик {NAME} добавлен на проект: {PROJECT_NAME}')]
    #[\OpenApi\Attributes\Response(response: 400, description: 'Описание в JSON ответе')]
    public function transferDev(Request $request, EntityManagerInterface $entityManager, ValidatorInterface $validator): JsonResponse
    {
        //Дополнительное убеждаемся что обращение идет постом
        if (!$request->isMethod('POST')) {
            return new JsonResponse(['error' => 'Method not allowed'], 405);
        }

        //Получаем данные с POST
        $data = json_decode($request->getContent(), true);

        if (empty($data)) {
            $message = 'Проверьте отправляемые данные!';
            return $this->json(['status' => $status, 'message' => $message], $responseStatus);
        }

        $status = 'error';
        $message = '';
        $responseStatus = Response::HTTP_BAD_REQUEST;

        $missingCol = $this->validateArrayKeys($data, ['id', 'project_name']);

        if (empty($missingCol)) {
            foreach ($data as $key => $value) {
                $violations = $validator->validate($value, [
                    new NotBlank(),
                ]);
                if (count($violations) > 0) {
                    $message = 'Проверьте заполненность полей!';
                    break;
                }
            }

            if (empty($message)) {
                $developerRepository = $entityManager->getRepository(Developer::class);
                $developerById = $developerRepository->findOneBy(['id' => $data['id']]);

                $projectRepository = $entityManager->getRepository(Project::class);
                $projectByName = $projectRepository->findOneBy(['name' => $data['project_name']]);

                if ($developerById !== null && $projectByName !== null) {
                    if ($projectByName->getDevelopers()->contains($developerById)) {
                        $message = 'Разработчик уже учавствует в проекте!';
                    } else {
                        $developerById->addProject($projectByName);
                        $entityManager->flush();
                        $status = 'success';
                        $message = 'Разработчик ' . $developerById->getFullName() .' добавлен на проект: ' . $data['project_name'];
                        $responseStatus = Response::HTTP_OK;
                    }
                } else {
                    $message = 'Проверьте правильность введенных данных!';
                }
            }

        } else {
            $message = 'Нехватает поля: ';
            foreach ($missingCol as $key => $colName) {
                $message .= $colName . ' ';
            }
        }

        return $this->json(['status' => $status, 'message' => $message], $responseStatus);
    }

    #[Route('/updatePosDev', name: 'app_update_position_developer', methods: ['POST'])]
    #[\OpenApi\Attributes\Response(response: 200, description: 'Должность разработчика {NAME} с {OLD_POS_NAME} изменена на {NEW_POS_NAME}')]
    #[\OpenApi\Attributes\Response(response: 400, description: 'Описание в JSON ответе')]
    public function updatePosDev(Request $request, EntityManagerInterface $entityManager, ValidatorInterface $validator): JsonResponse
    {
        //Дополнительное убеждаемся что обращение идет постом
        if (!$request->isMethod('POST')) {
            return new JsonResponse(['error' => 'Method not allowed'], 405);
        }

        $status = 'error';
        $message = '';
        $responseStatus = Response::HTTP_BAD_REQUEST;

        //Получаем данные с POST
        $data = json_decode($request->getContent(), true);

        if (empty($data)) {
            $message = 'Проверьте отправляемые данные!';
            return $this->json(['status' => $status, 'message' => $message], $responseStatus);
        }

        //Проверяем наличие нужных столбцов
        $missingCol = $this->validateArrayKeys($data, ['id', 'position_name']);

        //Проверяем есть ли отсутствующие столбцы
        if (empty($missingCol)) {
            foreach ($data as $key => $value) {
                $violations = $validator->validate($value, [
                    new NotBlank(),
                ]);
                if (count($violations) > 0) {
                    $message = 'Проверьте заполненность полей!';
                    break;
                }
            }

            if (empty($message)) {
                $developerRepository = $entityManager->getRepository(Developer::class);
                $developerById = $developerRepository->findOneBy(['id' => $data['id']]);

                if ($developerById !== null) {
                    $developerById->setPosition($data['position_name']);
                    $entityManager->flush();
                    $status = 'success';
                    $message = 'Должность разработчика '
                        . $developerById->getFullName() .' с '
                        . $developerById->getPosition() . ' изменена на ' . $data['position_name'];
                    $responseStatus = Response::HTTP_OK;
                } else {
                    $message = 'Проверьте правильность введенных данных!';
                }
            }

        } else {
            $message = 'Нехватает поля: ';
            foreach ($missingCol as $key => $colName) {
                $message .= $colName . ' ';
            }
        }


        return $this->json(['status' => $status, 'message' => $message], $responseStatus);
    }

    #[Route('/fireDev/{id}', name: 'app_fire_developer', requirements: ['id' => '\d+'], methods: ['DELETE'])]
    #[\OpenApi\Attributes\Response(response: 200, description: 'Разработчик успешно уволен')]
    #[\OpenApi\Attributes\Response(response: 400, description: 'Разработчик не найден!')]
    public function fireDev(Developer $developer = null, EntityManagerInterface $entityManager): JsonResponse
    {
        if ($developer === null) {
            return $this->json(['status' => 'error', 'message' => 'Разработчик не найден!'], Response::HTTP_BAD_REQUEST);
        }
        $entityManager->remove($developer);
        $entityManager->flush();

        return $this->json(['status' => 'success', 'message' => 'Разработчик успешно уволен'], Response::HTTP_OK);
    }

    #[Route('/createProj', name: 'app_create_project', methods: ['POST'])]
    #[\OpenApi\Attributes\Response(response: 200, description: 'Проект успешно создан!')]
    #[\OpenApi\Attributes\Response(response: 400, description: 'При ошибке будет JSON ответ с пояснением')]
    public function createProj(Request $request, EntityManagerInterface $entityManager, ValidatorInterface $validator): JsonResponse
    {
        //Дополнительное убеждаемся что обращение идет постом
        if (!$request->isMethod('POST')) {
            return new JsonResponse(['error' => 'Method not allowed'], 405);
        }

        $status = 'error';
        $message = '';
        $responseStatus = Response::HTTP_BAD_REQUEST;

        //Получаем данные с POST
        $data = json_decode($request->getContent(), true);

        if (empty($data)) {
            $message = 'Проверьте отправляемые данные!';
            return $this->json(['status' => $status, 'message' => $message], $responseStatus);
        }

        //Проверяем наличие нужных столбцов
        $missingCol = $this->validateArrayKeys($data, ['name', 'customer']);

        //Проверяем есть ли отсутствующие столбцы
        if (empty($missingCol)) {
            foreach ($data as $key => $value) {
                $violations = $validator->validate($value, [
                    new NotBlank(),
                ]);
                if (count($violations) > 0) {
                    $message = 'Проверьте заполненность полей!';
                    break;
                }
            }

            //Проверяем все ли поля заполненны
            if (empty($message)) {
                $projectRepository = $entityManager->getRepository(Project::class);
                $projectByName = $projectRepository->findOneBy(['name' => $data['name']]);

                if ($projectByName !== null) {
                    $message = 'Проект с таким названием уже существует!';
                } else {
                    //Добавляем разраба
                    $project = (new Project())
                        ->setName($data['name'])
                        ->setCustomer($data['customer']);

                    $entityManager->persist($project);
                    $entityManager->flush();
                    $status = 'success';
                    $message = 'Проект успешно создан!';
                    $responseStatus = Response::HTTP_OK;
                }
            }

        } else {
            $message = 'Нехватает поля: ';
            foreach ($missingCol as $key => $colName) {
                $message .= $colName . ' ';
            }
        }

        return $this->json(['status' => $status, 'message' => $message], $responseStatus);
    }

    #[Route('/fireProj/{id}', name: 'app_fire_project', requirements: ['id' => '\d+'], methods: ['DELETE'])]
    #[\OpenApi\Attributes\Response(response: 200, description: 'Проект успешно закрыт')]
    #[\OpenApi\Attributes\Response(response: 400, description: 'Проект не найден!')]
    public function fireProj(Project $project = null, EntityManagerInterface $entityManager): JsonResponse
    {
        if ($project === null) {
            return $this->json(['status' => 'error', 'message' => 'Проект не найден!'], Response::HTTP_BAD_REQUEST);
        }
        $entityManager->remove($project);
        $entityManager->flush();

        return $this->json(['status' => 'success', 'message' => 'Проект успешно закрыт'], Response::HTTP_OK);
    }

    function validateData(ValidatorInterface $validator, $email, $phone): array
    {
        $responseCode = 'error';
        $responseMessage = '';

        $emailViolations = $validator->validate($email, [
            new Email(),
        ]);

        $phoneViolations = $validator->validate($phone, [
            new Regex([
                'pattern' => '/^\+7\d{10}$/',
                'message' => 'Номер недействителен. Он должен начинаться с +7 и содержать после него 10 цифр.',
            ]),
        ]);

        //Проверяем email на валидность
        if (count($emailViolations) > 0) {
            $responseMessage = 'Invalid email';
        } else {
            //Проверка номера телефона
            if (count($phoneViolations) > 0) {
                $responseMessage = 'Invalid phone';
            } else {
                $responseCode = 'success';
                $responseMessage = 'Данные введены верно';
            }

        }

        return ['code' => $responseCode, 'message' => $responseMessage];
    }

    function validateArrayKeys(array $data, array $requiredKeys): array
    {
        $missingKeys = [];

        foreach ($requiredKeys as $key) {
            if (!array_key_exists($key, $data)) {
                $missingKeys[] = $key;
            }
        }

        return $missingKeys;
    }
}