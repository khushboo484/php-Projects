# php-Projects
How to Download and install full web server ( Apache, php, MySQL, phpMyAdmin )

1. Download and Install Apache using following link : https://www.apachelounge.com/download/
   Download zip file and extract it
   copy Apache24 file and paste to your C drive

2. Download php using link : http://windows.php.net/download/
    Download php Thread safe zip file
   Make a folder named as php in C drive and extract downloaded file inside this folder

3. Go to file  C:\Apache24\conf
  open this file and edit 
  Add the line to the bottom of file :

LoadModule php_module "C:\php\php8apache2_4.dll"
AddHandler application/x-httpd-php .php
#configure the path to php.ini
PHPIniDir "C:/php" 

and then Save it

4. In the same file Find - "DirectoryIndex"
      change "index.html" to "index.php"
 Now again Find - "ServerName"
	change  "www.example.com:80"   to "localhost"

And then save it and exit

5. Click on start, write cmd and open it (run as administrator)
 type following command :
   C:\Apache24\bin\httpd -k install

when done minimize it

6. Now change the Environment Settings 
Right click on mypc and click on properties option
Advanced system settings ->   Environment Variables  
  
Under system variables , select Path variable and click on edit button
Click on New and type :  C:\Apache24
Again click on New and type : C:\Apache24\bin
Again click on New and type : C:\php
Move the php to top of the apache 

Press ok 

7. go to cmd and type C:\Apache24\bin\httpd -S
then go to C:\php and rename the file  "php.ini-devlopment" to "php.ini"

now open this file and Find -> "Extension-dir"
Remove the (;) of the extension_dir - "ext"

Again Find -> "php mysql.dll"
remove the (;) of extension-php_mysql.dll   and extension-php_mysql.dll

and save it 

Open cmd  and type :  C:\php 
hit enter and then type php -n
php successfully installed


8. Now open a folder C:\Apache24\htdocs
here , create a new text file and rename it as info.php and open it and type 

<?php  phpinfo(); ?>

save it 

Restart your pc and browse localhost 

9. Download MySQL and click on Community edition 
     Download MSI  Installer using the link :   https://dev.mysql.com/downloads
     install MySql

10. Download zip file of phpMyAdmin from the link  :   https://www.phpmyadmin.net/
    unzip the file and put it inside  C:\Apache24\htdocs  folder


Your localhost is ready to work ..
