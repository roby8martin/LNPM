<?php
  //$ip=exec("ifconfig | grep -Eo 'inet (addr:)?([0-9]*\.){3}[0-9]*' | grep -Eo '([0-9]*\.){3}[0-9]*' | grep -v '127.0.0.1'");
  $ip='192.168.1.118';
?>
<!doctype html>
<html lang="it">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#212529">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-utilities.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="../css/all.min.css">
    <!-- Dark Mode Bootstrap -->
    <link href="../css/dark-mode.css" rel="stylesheet">
    <link href="../css/switch-darkmode.css" rel="stylesheet">

    <title>Index</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="../img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="../img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon/favicon-16x16.png">
    <link rel="manifest" href="../img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
  </head>
  
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="..\index.php">Hello World</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../index.php">I tuoi siti Web <i class="fas fa-home"></i></a>
          </li>
        </ul>
        <form class="d-flex">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <?php echo $ip;?> <i class="fas fa-qrcode"></i>
          </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Indirizzo IP del Web Server</h5>
                  <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal" aria-label="Chiudi"><i class="fas fa-times"></i></button>
                </div>
                <div class="modal-body">
                  Usa questo indirizzo IP per accedere al server <b><?php echo $ip;?></b>
                  <br>
                  <b>Oppure usa il QR Code <i class="fas fa-qrcode"></i></b><br><br>
                  <div align="center">
                    <img src="https://chart.apis.google.com/chart?cht=qr&chs=390x350&chl=http://<?php echo $ip;?>/" alt="Il QR Code non viene visualizzato perchè non si è connessi ad internet per utilizzare API di Google per creare il QR Code">
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Chiudi</button>
                </div>
              </div>
            </div>
          </div>

          
          &nbsp;<a class="btn btn-light" href="../settings/index.php"><i class="fas fa-cog"></i></a>
        </form>
      </div>
    </div>
  </nav>


    <div class="container">
      <div class="row">
        <div class="col-12"> 
          <h1>Impostazioni sito <i class="fas fa-cog fa-spin"></i></h1> 
        </div>
      </div>
      
      <div class="row">
        <div class="col-12">
          <div align="center">  
            <br>
            <input type="checkbox" id="darkSwitch">
            <label for="darkSwitch">Night</label> 
            <h4>Attiva la Dark Mode<h4> 
            <font color="#ffffff"><h1> WOW LA MODALITÀ NOTTEO </h1></font>
            <br><h1>Crediti 🧑‍💻</h1>
          </div>
          <h4>Sito Web sviluppato con:</h4>
          <ul>
            <li><a href="https://getbootstrap.com/docs/5.1/getting-started/introduction/" target="_blank"><h5><b>Bootstrap 5.1 <i class="fas fa-external-link-alt"></i></b></h5></a></li>
            <li><a href="https://fontawesome.com/" target="_blank"><h5><b>Font Awesome 5.15 <i class="fab fa-font-awesome"></i> <i class="fas fa-external-link-alt"></i></b></h5></a></li>
            <li><a href="https://www.php.net/" target="_blank"><h5><b>PHP <i class="fab fa-php"></i> <i class="fas fa-external-link-alt"></i></b></h5></a></li>
          </ul>

          <h4>Sorgente di questo Sito Web:</h4>
          <a href="https://github.com/roby8martin/LNPM/tree/main/index" target="_blank"><h5><b>Github di Index <i class="fab fa-github-square"></i> <i class="fas fa-external-link-alt"></i></b></h5></a>
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

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.bundle.js"></script>
  <!-- Switch-Dark-Mode JS -->
  <script src="../js/dark-mode-switch.min.js"></script>
  </body>
</html>
