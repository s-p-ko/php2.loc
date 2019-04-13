Learning php on PHP2 course by Albert Stepantsev (https://pr-of-it.ru/)

Start on the 4th of March 2019. 

Condition after the homework #7 of the 7th lesson. 


14-04-2019


**Домашнее задание №7**

Информация для проверяющего:


По п.**1. Реализацию смотреть**: class **Db** (App/Db.php), abstract class 
**Model** 
(App/Model.php): public static function findAll() и public static function 
findAllLast(int $limit = 3)

По п.**2. Реализацию смотреть**: класс **AdminDataTable** в  App/AdminDataTable
.php

По п.**3. Реализацию смотреть**: templates/admin/index.php, 
templates/admin/admindatatable.php, functions/adminDataTableFunctions.php


**Задания:**

1. Примените генератор в классе Db. У вас уже есть метод, называющийся как-то вроде query(), который использует fetchAll() из PDO. Сделайте метод-копию queryEach(), который будет генерировать запись за записью из ответа сервера базы данных, не делая fetchAll(), а построчно исполняя fetch(). Проверьте работу этого метода, использовав его в программе.

2. Создайте класс AdminDataTable. 

    2.1. Его конструктор принимает на вход массив моделей (это будут строки таблицы) и массив функций (это будут столбцы)
    Метод render() отображает таблицу следующим образом:
    
    2.2. Для каждой записи (это строка таблицы) последовательно вызываются функции (каждая - это столбец таблицы), в них передается запись (модель)
    
    2.3. То, что вернула функция - становится значением ячейки таблицы

3. Примените этот класс в своей админ-панели



**Settings** in Nginx_1.14_vhost.conf

    location / {
        root       "%hostdir%";
        index      index.php;
        try_files $uri $uri/ /index.php$args;
    }
    
    # admin links
    location /admin {
     try_files $uri $uri/ /admin/index.php$args;
    } 
    
