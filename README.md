Learning php on PHP2 course by Albert Stepantsev (https://pr-of-it.ru/)

Start on the 4th of March 2019. 

Condition after the 4th lesson. 

25-03-2019

Changes in Nginx_1.14_vhost.conf

    location / {
        root       "%hostdir%";
        index      index.php;
        try_files $uri $uri/ /index.php?$args /admin/index.php?$args;
    }   
    
