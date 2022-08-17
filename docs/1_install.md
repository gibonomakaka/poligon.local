1. Установка XAMPP (LAMPP)

2. Настройка virtual_hosts XAMPP (LAMPP)
2.1 Активизация virtual_hosts:
 - расположение файла конфигурирования: /opt/lampp/etc/httpd.conf
 - раскомментировать строку Include etc/extra/httpd-vhosts.conf:
   Include etc/extra/httpd-vhosts.conf
2.2 Настройка virtual_hosts:
 - расположение файла настройки : /opt/lampp/etc/extra/httpd-vhosts.conf
 - общий синтаксис:
 <VirtualHost *:80>
     ServerAdmin webmaster@dummy-host2.example.com
     DocumentRoot "/opt/lampp/htdocs/<путь к файлу index.php>"
     ServerName <доменное имя>
     ErrorLog "logs/<имя файла логирования ошибок php>"
     CustomLog "<имя файла логирования ошибок доступа" common
 </VirtualHost> 
 - настройка текущего проекта:
 
   <VirtualHost *:80>
       ServerAdmin webmaster@dummy-host2.example.com
       DocumentRoot "/opt/lampp/htdocs/poligon.local/public"
       ServerName poligon.local
       ErrorLog "logs/poligon.local-error_log"
       CustomLog "logs/poligon.local-access_log" common
   </VirtualHost>
2.3 Настройка hosts системы:
 - расположение файла: /etc/hosts
 - задать доменное имя общий синтаксис: 127.0.1.1 <доменное имя>
 - доменное имя для текущего проекта 127.0.1.1 	poligon.local
2.4 Обязательно: после конфигурирования перезапуск сервера XAMPP.

3. Установка Composer
3.1 Официальный ресурс: https://getcomposer.org/download/
3.2 Скачивание и установка
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"

4. Установка Laravel
4.1 Общий синтаксис: php composer.phar create-project --prefer-dist laravel/laravel blog "5.7.*"
    Установка конкретной версии Laravel: php composer.phar create-project laravel/laravel your-project-name 5.3.*
    или php composer.phar create-project --prefer-dist laravel/laravel=5.7.0
4.2 Установить права 777 на папки проекта: sudo chmod 777 -R storage && sudo chmod 777 -R bootstrap/cache
4.3 Проверить, что в переменной среды PATH прописан путь к php XAMPP (/opt/lampp/bin/).
Просмотр переменной PATH: echo $PATH (источник https://losst.ru/peremennaya-path-v-linux).
4.3.1 Временное добавление пути к php: PATH="/opt/lampp/bin:$PATH"
4.3.2 Постоянное: дописать в файл /etc/.environment путь и п.4.3.1 /opt/lampp/bin


