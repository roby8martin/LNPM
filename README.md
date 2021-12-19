# **L**inux **N**ginx **P**hp **M**ySQL 🐧🗺️🐘🗂️

<a href="https://github.com/roby8martin/LNPM/releases"><img src="https://img.shields.io/github/release/roby8martin/LNPM?style=flat-square"></a>

## ⚙️ Funzioni
Questo repository se clonato su una macchina linux basato sul packet manger **APT** permette di installare con un solo comando un WebServer con:
  - [Nging](https://www.nginx.com/) 
  - [Php 7.4](https://www.php.net/)
  - [MySQL](https://mariadb.org/) (MariaDB)
  - [PhpMyAdmin](https://www.phpmyadmin.net/)

## 🧑‍💻 Requisiti
Una Macchina Linux con:
  - Packet manger **APT**
  - **Git** installato:
  ```
  sudo apt install git
  ```
  - Utente **root abilitato**:
  ```
  sudo passwd root
  ```
  - **Accesso da terminale dell'utente root**:
  ```
  su
  ```
  
## 🖥️ Come installarlo
Una volta **soddisfatti i requisiti**:
  - Usare il seguente script per l'installazione **automatica**:
  ```
  git clone https://github.com/roby8martin/LNPM && cd LNPM && ./install.sh -y
  ```
  
  
  - Oppure eseguire lo script **manualmente**:
    - Clonate questo repository 
    ```
    git clone https://github.com/roby8martin/LNPM
    ```

    - Entrate dentro la cartella LNPM
    ```
    cd LNPM
    ```

    - Eseguite il file ./install.sh
    ```
    ./install.sh
    ```
    - Premere Y e Invio per iniziare l'installazione
    ```
    Linux Nginx Php MySQL 🐧 🌍 🐘 🗂️   V.1.0
    Benvenuto sull' installazione di un Web Server con i seguenti servizi:
    Nginx, Php 7.4, MySQL e PhpMyAdmin 5.1.1

    Continuare? (Y/n):
    Y
    ```

## 🧑‍💻 Come usarlo
Per usarlo potete:
  - Acedere ai siti Web che si trovano nella cartella:
  ```
  cd /var/www/html/
  ```
  - Per visualizare i siti andare su: [http://localhost/](http://localhost/)
  - Per accedere ai database usare [PhpMyAdmin](http://localhost/phpmyadmin) inserendo le seguenti credenziali:
    -  **Username**: admin
    -  **Password**: admin
    
