`cd ~/"My Documents"/projects/myfirstwebsite/web`

Login to Server
ssh jamie@138.68.177.154

Setup Server - follow this: https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu-16-04

Options for getting code on the server:
scp or rsync, web directory to server document root
or git pull on server to pull 


ssh jamie@138.68.177.154 "cd /var/www/html" && git pull"

sftp -t jamie@138.68.177.154 'cd /var/www/html && exec bash -l'
