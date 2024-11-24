# Тестовое задание 

## Описание
Данный проект был создан в соответствии с тестовым заданием:

[Тестовое задание](https://docs.google.com/document/d/1YMxzZTCKNVtIR-2Xxw_AU6rKJ5FHxLZtEIQHw71lUJk/edit?pli=1&tab=t.0)

Краткое описание тестового задания:

IT-компания ведет разработку нескольких проектов. В каждом проекте своя команда разработчиков, но некоторые разработчики могут участвовать в нескольких проектах.

Для полноценного тестирования необходимо будет иметь docker desktop.
Так же для удобства тестирования добавил базовые CRUD'ы для сущностей.

Прошу оценить проект по достоинству и дать обратную связь, заранее спасибо, буду очень рад поработать в вашей компании, если представится такая возможность.

## Установка
1. Клонируйте репозиторий:
   ```bash
   git clone https://github.com/ваш_пользователь/test_ex_brocode.git
   
2. Перейдите в папку где хранится установленный проект:
   ```bash
   cd Путь_до_репозитория/test_ex_brocode/
3. Пропишите для запуска докер контейнера:
   ```bash
   docker-compose up -d --build
4. Этой командой загружаем прописанные фикстуры:
   ```bash
   php bin/console doctrine:fixtures:load
   

## SQL - запросы со статистикой

1. Количество проектов
   ```sql
   select count(id) AS count_projects from project;
2. Количество Разработчиков
   ```sql
   select count(id) AS count_developers from developer;
3. Средний возраст сотрудников
   ```sql
   select round(avg(age), 0) as average_age_developers from developer;
4. Средняя зп среди сотрудников
   ```sql
   select round(avg(salary), 2) as average_slary_developers from developer;
5. У какой должности самая большая зарпалата
   ```sql
   SELECT position, MAX(salary) AS highest_salary
   FROM developer
   GROUP BY position
   ORDER BY highest_salary DESC
   LIMIT 1;
6. Получаем среднее количество разработчиков на проектах
   ```sql
   SELECT AVG(developer_count) AS average_developers
   FROM (
   SELECT project_id, COUNT(developer_id) AS developer_count
   FROM developers_projects
   GROUP BY project_id
   ) AS project_developer_counts;



