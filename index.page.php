<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/style.css">
  <title>MUSEE VIRTUELLE</title>
</head>
    <?php  require_once ("bdd.inc.php");
      require_once ("fonction.inc.php");
      
    
    ?>
   <?php include 'header.inc.php' ?>
<body>
  
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
  
      
      <div class="collapse navbar-collapse" id="navbarCollapse">
      
       
      </div>
    </div>
  </nav>
</header>

<main class="mn">

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
        <img src="images/muse/IMAGE1.jpeg" alt="">
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>ENSEMBLE CONSERVONS NOTRE PATRIMOINE!!!</h1>
            <p>N'exiter pas à cliquer sur le bouton pour vous inscrire ou pour vous connecter!!!!</p>
            <p><a class="btn btn-lg btn-primary" href="registration.page.php">INSCRIPTION</a>
               <a class="btn btn-lg btn-primary" href="login.page.php">CONNEXION</a>
          </p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
           <img src="images/muse/musical.jpg" alt="">
        <div class="container">
          <div class="carousel-caption">
            <h1>BIENVENUE Ä LA MAISON MUNICIPAL D'ART ET D'HISTOIRE!!!</h1>
            <p>Alors abonnez-vous ou connectez-vous pour découvrir de nouvelle musée!!!</p>
            <p><a class="btn btn-lg btn-primary" href="registration.page.php">ABONNER</a>
               <a class="btn btn-lg btn-primary" href="login.page.php">CONNECTER</a>
          </p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
        <img src="images/muse/MEDECINE.jpg" alt="">
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>BIENVENUE Ä LA MAISON D'HISTOIRE DE LA MEDECINE!!!</h1>
            <p>Ëtes-vous prêt(e) à créer un compte ou à vous connecter??? juste un clique sur le bouton!!!>
            <p><a class="btn btn-lg btn-primary" href="registration.page.php">COMPTE</a>
              <a class="btn btn-lg btn-primary" href="login.page.php">CONNECTER</a>
          </p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


</main>


    <script src="bootstrap/js/bootstrap.bundle.js" ></script>
</body>
</html>

  
