<?php

namespace App\Tests\Controller;

use App\Entity\Developer;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class DeveloperControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private EntityManagerInterface $manager;
    private EntityRepository $repository;
    private string $path = '/developer/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->manager = static::getContainer()->get('doctrine')->getManager();
        $this->repository = $this->manager->getRepository(Developer::class);

        foreach ($this->repository->findAll() as $object) {
            $this->manager->remove($object);
        }

        $this->manager->flush();
    }

    public function testIndex(): void
    {
        $this->client->followRedirects();
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Developer index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    }

    public function testNew(): void
    {
        $this->markTestIncomplete();
        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        $this->client->submitForm('Save', [
            'developer[fullName]' => 'Testing',
            'developer[position]' => 'Testing',
            'developer[email]' => 'Testing',
            'developer[phone]' => 'Testing',
            'developer[age]' => 'Testing',
            'developer[salary]' => 'Testing',
            'developer[projects]' => 'Testing',
        ]);

        self::assertResponseRedirects($this->path);

        self::assertSame(1, $this->repository->count([]));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Developer();
        $fixture->setFullName('My Title');
        $fixture->setPosition('My Title');
        $fixture->setEmail('My Title');
        $fixture->setPhone('My Title');
        $fixture->setAge('My Title');
        $fixture->setSalary('My Title');
        $fixture->setProjects('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Developer');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Developer();
        $fixture->setFullName('Value');
        $fixture->setPosition('Value');
        $fixture->setEmail('Value');
        $fixture->setPhone('Value');
        $fixture->setAge('Value');
        $fixture->setSalary('Value');
        $fixture->setProjects('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'developer[fullName]' => 'Something New',
            'developer[position]' => 'Something New',
            'developer[email]' => 'Something New',
            'developer[phone]' => 'Something New',
            'developer[age]' => 'Something New',
            'developer[salary]' => 'Something New',
            'developer[projects]' => 'Something New',
        ]);

        self::assertResponseRedirects('/developer/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getFullName());
        self::assertSame('Something New', $fixture[0]->getPosition());
        self::assertSame('Something New', $fixture[0]->getEmail());
        self::assertSame('Something New', $fixture[0]->getPhone());
        self::assertSame('Something New', $fixture[0]->getAge());
        self::assertSame('Something New', $fixture[0]->getSalary());
        self::assertSame('Something New', $fixture[0]->getProjects());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();
        $fixture = new Developer();
        $fixture->setFullName('Value');
        $fixture->setPosition('Value');
        $fixture->setEmail('Value');
        $fixture->setPhone('Value');
        $fixture->setAge('Value');
        $fixture->setSalary('Value');
        $fixture->setProjects('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertResponseRedirects('/developer/');
        self::assertSame(0, $this->repository->count([]));
    }
}
