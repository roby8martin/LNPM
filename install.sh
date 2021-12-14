#!/bin/bash
echo 'Stai per installare i seguenti servizi:'
echo '\nNginx, Php 7.4, MySQL e PhpMyAdmin 5.1.1\n\n'
echo 'Continuare? (Y/n):'

read RISPOSTA

if [ ${RISPOSTA} = "y" ]
then
  # Aggiorna i repositori
  echo '\nSto aggiornando i repositori\n'
  apt update -y
  apt upgrade -y

  printf '\nInstallo Nginx\n'
  apt install nginx -y 

  printf '\nInstallo Php 7.4\n'
  apt install php7.4-fpm php7.4-mysql php7.4-mbstring php7.4-xml -y 

  printf '\nInstallo MariaDB (MySQL)\n'
  apt install mariadb-server -y

  # Modifica i file di configurazione di Nginx
  printf '\nCreo un backup per il file di configurazione di Nginx\n'
  cp /etc/nginx/sites-available/default /etc/nginx/sites-available/default_backup

  printf '\nCopio file di confiugrazione per Nginx\n'
  cp -r conf/nginx/default.conf /etc/nginx/sites-available/default

  # Modifica i file di configurazione di Php
  printf '\nCreo un backup per il file di configurazione di Php\n'
  cp /etc/php/7.4/fpm/php.ini /etc/php/7.4/fpm/php_backup.ini

  printf '\nCopio file di confiugrazione per Php\n'
  cp -r conf/php7.4/php.ini /etc/php/7.4/fpm/php.ini

  printf '\nRiavvio Web Server Nginx\n'
  /etc/init.d/nginx reload

  # Installo PhpMyAdmin
  printf '\nSto installando PhpMyAdmin\n'
  cp -r phpmyadmin/ /var/www/html/phpmyadmin

  printf '\nCreo cartella tmp e do i permessi di lettura e scrittura per PhpMyAdmin\n'
  mkdir /var/www/html/phpmyadmin/tmp
  chmod 077 /var/www/html/phpmyadmin/tmp

else
  echo ''
  echo "Ok Ciao"
fi


