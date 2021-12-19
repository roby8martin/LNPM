#!/bin/bash
bold=$(tput bold)
normal=$(tput sgr0)

if (( $EUID != 0 )); then
  clear -x
  printf "\\e[0;41m${bold}Attenzione! Per eseguire questo script suserve i privilegi di ROOT!${normal}\\e[0m\n\n"
  exit
fi

clear -x
printf "\\e[0;41mLinux\\e[0m \\e[0;42mNginx\\e[0m \\e[0;45mPhp\\e[0m \\e[0;43mMySQL\\e[0m 🐧 🌍 🐘 🗂️   V.1.0\n"
printf "Benvenuto sull' installazione di un Web Server con i seguenti servizi:"
printf '\nNginx, Php 7.4, MySQL e PhpMyAdmin 5.1.1\n\n'
echo 'Continuare? (Y/n):'

read RISPOSTA

if [ ${RISPOSTA} = "y" ] || [ ${RISPOSTA} = "Y" ]; then
  # Aggiorna i repositori
  printf '\nSto aggiornando i repositori\n'
  apt update -y
  apt upgrade -y

  printf '\nInstallo Nginx\n'
  apt install nginx -y 

  printf '\nInstallo Php 7.4\n'
  apt install php7.4-fpm php7.4-mysql php7.4-mbstring php7.4-xml -y 

  printf '\nInstallo MariaDB (MySQL)\n'
  apt install mariadb-server -y

  # Modifica i file di configurazione di Nginx
  clear -x
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

  printf "\nCreo utente default admin per l'accesso del database MySql\n"
  mysql -e "CREATE USER 'admin'@'localhost' IDENTIFIED BY 'admin';"
  mysql -e "CREATE USER 'admin'@'%' IDENTIFIED BY 'admin';"
  mysql -e "GRANT ALL PRIVILEGES ON  *.* TO 'admin'@'localhost' REQUIRE NONE WITH GRANT OPTION MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;"
  mysql -e "GRANT ALL PRIVILEGES ON  *.* TO 'admin'@'%' REQUIRE NONE WITH GRANT OPTION MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;"
  
  printf '\nCopio sito Bello :-)\n'
  cp -r index/ /var/www/html/
  mv /var/www/html/index/redirect.php /var/www/html/index.php

  clear -x
  printf "\\e[0;42m${bold}Installazione completata con successo ☑️  !${normal}\\e[0m\n\n"
  printf "${bold}Per accedere a MySQL o \e]8;;http://localhost/phpmyadmin\e\\PhpMyAdmin\e]8;;\e\\ usare${normal}:\n${bold}Username${normal}: admin \n${bold}Password${normal}: admin \n\n"

  printf "${bold}Per accedere al Web Server apri su un browser: ${normal} \n\e]8;;http://localhost\e\\http://localhost/\e]8;;\e\\ \n \n"

  printf "${bold}Developed by  \e]8;;https://github.com/roby8martin\e\\ \\e[0;34mroby8martin\\e[0m \e]8;;\e\\  for developers ${normal} \n\n"

else
  printf "\n\n\\e[0;41m${bold}Installazione ANNULLATA con successo ⚠️!${normal}\\e[0m\n\n"
  printf "${bold}Ciao👋!${normal}\n\n"
fi