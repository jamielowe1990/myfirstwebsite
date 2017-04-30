USEFUL COMMNANDS AND STUFF:

Login to Server
ssh jamie@138.68.177.154

Setup Server - follow this: https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu-16-04

Deploy code to website:
sftp jamie@138.68.177.154 
cd /var/www/html
lcd ~/"My Documents"/projects/myfirstwebsite/web (for pages)
put index.php (replace index.php will appropriate file name)
lcd ~/"My Documents"/projects/myfirstwebsite/img (for images)
put sm.png (file name w/ extension eg. jpg)
exit - close session

OTHER SFTP COMMANDS:
LCD - Change working directory on local machine
LPWD - Print working directory on local machine
LLS - Take a look around in current directory on local machine

Commands on Remote server are the same as above without the prepended "l".
When deploying code, change local directory to location of file and change remote server to website root (/var/www/html)

Remove file: rm file_name