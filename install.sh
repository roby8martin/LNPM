echo 'Stai per nstallare i seguenti servizi:'
echo ''
echo 'Nginx, Php, MySQL e PhpMyAdmin'
echo -n 'Continuare? (Y/n)'

read RISPOSTA

if [${RISPOSTA} = "y"]
then
  LIST_WEB_SERVICE="nginx php7.3-fpm php7.3-mysql php7.3-mbstring mariadb-server"

  # Aggiorna i repositori
  apt update  
  apt upgrade

  apt install -y $LIST_OF_APPS

else
  echo ''
  echo "Ok Ciao"
fi


