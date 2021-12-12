echo 'Stai per installare i seguenti servizi:'
echo ''
echo 'Nginx, Php, MySQL e PhpMyAdmin'
echo 'Continuare? (Y/n):'

read RISPOSTA

if [ ${RISPOSTA} = "y" ]
then
  # Aggiorna i repositori
  apt update -y
  apt upgrade -y

  printf '\nInstallo Nginx'
  apt install nginx -y 

  printf '\nInstallo Php'
  apt install php7.4-fpm php7.4-mysql php7.4-mbstring -y 

  printf '\nInstallo MariaDB (MySQL)'
  apt install mariadb-server -y

  # Modifica i file di configurazione di Nginx
  printf '\nCreo un backup per il file di configurazione di Nginx'
  cp /etc/nginx/sites-enabled/default /etc/nginx/sites-enabled/default_backup

  printf '\nCopio file di confiugrazione per Nginx'
  cp conf/nginx/default_mod /etc/nginx/sites-enabled/default

  # Modifica i file di configurazione di Php
  printf '\nCreo un backup per il file di configurazione di Php'
  cp /etc/php/7.4/fpm/php.ini /etc/php/7.3/fpm/php_backup.ini

  printf '\nCopio file di confiugrazione per Php'
  cp conf/php7.4/php.ini /etc/php/7.4/fpm/php.ini

  # Installo PhpMyAdmin
  printf '\nSto installando PhpMyAdmin'
  cp phpmyadmin /var/www/html/phpmyadmin

  printf '\nCreo cartella tmp e do i permessi di lettura e scrittura per PhpMyAdmin'
  mkdir /var/www/html/phpmyadmin/tmp
  chmod 077 /var/www/html/phpmyadmin/tmp

else
  echo ''
  echo "Ok Ciao"
fi


