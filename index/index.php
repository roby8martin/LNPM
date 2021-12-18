<!doctype html>
<html lang="it">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#212529">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-utilities.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Dark Mode Bootstrap -->
    <link href="css/dark-mode.css" rel="stylesheet">
    <link href="css/switch-darkmode.css" rel="stylesheet">

    <title>Index</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
  </head>
  
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Hello World</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">I tuoi siti Web <i class="fas fa-home"></i></a>
          </li>
        </ul>
        <form class="d-flex">
          <?php
            $ip=exec("ifconfig | grep -Eo 'inet (addr:)?([0-9]*\.){3}[0-9]*' | grep -Eo '([0-9]*\.){3}[0-9]*' | grep -v '127.0.0.1'");
            echo "Indirizzo IP:".$ip;
          ?>
          <a class="btn btn-outline-light" href="settings/index.php"><i class="fas fa-cog"></i></a>
        </form>
      </div>
    </div>
  </nav>


  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Lista cartelle dei tuoi siti web</h1>
        <b class="text-danger">Per aprire un sito web premi sopra il nome oppure sul pulsante <a href="info/flappy_bird" class="btn btn-primary btn-sm"><i class="fas fa-external-link-alt"></i></a></i></b> 
        <br><br>
        <h4>Link Utili</h4> 
        <a href="/phpmyadmin" target="_blank" class="btn btn-warning text-dark"><b>PhpMyAdmin</b> <i class="fas fa-external-link-alt"></i></a> <a href="info/index.php" target="_blank" class="btn btn-primary"><b><i class="fab fa-php"></i> Info</b> <i class="fas fa-external-link-alt"></i></a>
        <?php 
          $cerca = exec('dir');
          //$cerca = 'phpmyadmin ciao come test';
          $lista = explode(" ", $cerca);
          //echo $lista[1];
          echo' 
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Nome Cartella</th>
                  <th scope="col">Apri</th>
                </tr>
              </thead>
              <tbody>';
                foreach($lista as $cerca){
                  echo' 
                    <tr>
                      <th><a href="/'.$cerca.'">'.$cerca.'</a></th>
                      <td><a href="/'.$cerca.'" class="btn btn-primary btn-sm"><i class="fas fa-external-link-alt"></i></a></td>
                    </tr>
                  ';
                }
              echo'  
              </tbody>
            </table>
          '
        ?>
      </div>
    </div>
  </div>



  <!-- Footer -->
  <footer>
    <div class="container">
      <hr>
        <p class="text-muted" aligne="centre">
          <em>
            Web site developed by <a href="https://github.com/roby8martin/" target=”_blank”>Roby8martin</a>
          </em> 
        </p>
      </hr>
    </div>
  </footer>

  <!-- Switch Dark Mode Nascosto -->
  <div class="col-sm">
    <div align="center">
      <input type="checkbox" id="darkSwitch" hidden> 
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.js"></script>

  <!-- Switch-Dark-Mode JS -->
  <script src="js/dark-mode-switch.min.js"></script>

  </body>
</html>
