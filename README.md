Learning php on PHP2 course by Albert Stepantsev (https://pr-of-it.ru/)

Start on the 4th of March 2019. 

Condition after the homework 6 of the 6th lesson. 

09-04-2019

**Домашнее задание №6**

Информация для проверяющего:

По п.**2**, был выбран пп.**2.4.** - **swiftmailer/swiftmailer**. 
Соответственно, далее и выполнялся пп.**3.4**. 

**Реализацию смотреть**: class Mailer в App/Mailer.php, index.php, admin/index.php, config.php 

Выполнение п.**4*** смотреть на **packagist** по ссылке https://packagist.org/packages/s-p-ko/multiexception
 или на **github:** https://github.com/s-p-ko/multiexception


**Задания:**

1. Проверьте свой код на соответствие стандартам PSR-1 и PSR-2. При необходимости - исправьте.
2. Подключите с помощью composer на выбор к своему проекту одну из указанных библиотек:

    2.1. psr/log
    
    2.2. phpunit/php-timer
    
    2.3. twig/twig
    
    2.4. swiftmailer/swiftmailer
    
3. В зависимости от подключенной библиотеки реализуйте:

    3.1. Собственный класс логгера на основе библиотечного интерфейса. Покажите 
 его использование на примере отлова исключений с ошибками базы данных и исключений "404"
 
    3.2. Счетчик времени и памяти для страниц сайта. Вывод значений счетчика в 
 подвал страниц.
    3.3. Переведите шаблоны страниц сайта (фронт, не админ-панель) на Twig
    
    3.4. Организуйте отправку сообщения администратору сайта письма в случае 
 возникновения проблем с подключением к базе данных
 
4* Выделите в отдельный проект (отдельный репозиторий) библиотеку классов, реализующих концепцию "мультиисключение". Оформите ее как пакет composer.




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
    
