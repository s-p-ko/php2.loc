Learning php on PHP2 course by Albert Stepantsev (https://pr-of-it.ru/)

Start on the 4th of March 2019. 

Condition after the homework 5 of the 5th lesson. 

05-04-2019

Домашнее задание №5

1. Добавьте в свой проект класс исключений, возникающих при работе с базой данных. Придумайте - где их можно бросать? Как вариант - нет соединения с БД, ошибка в запросе.
2. Ловите исключения из пункта 1 во фронт-контроллере, поймав же, выдавайте пользователю красивую страницу с сообщением об ошибке.
3. Добавьте класс исключений, означающих "Ошибка 404 - не найдено". Бросайте такое исключение в ситуациях, когда вы не можете найти в базе запрашиваемую запись. Добавьте обработку исключений этого типа во фронт-контроллер.
4. Добавьте в базовую модель метод fill(array $data), который заполняет свойства модели данными из массива, валидируя их. Примените в этом методе паттерн "Мультиисключение".
5* Добавьте в свой проект класс-логгер. Его задача - записывать в текстовый лог информацию об ошибках - когда и где возникла ошибка, какая. Логируйте исключения из пунктов 1 и 3.



Settings in Nginx_1.14_vhost.conf

    location / {
        root       "%hostdir%";
        index      index.php;
        try_files $uri $uri/ /index.php$args;
    }
    
    # admin links
    location /admin {
     try_files $uri $uri/ /admin/index.php$args;
    } 
    
