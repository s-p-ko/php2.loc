# Training php project during studying at the course "PHP-2: PROFESSIONAL PROGRAMMING" by Albert Stepantsev [ProfIT](https://pr-of-it.ru/)


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
    
