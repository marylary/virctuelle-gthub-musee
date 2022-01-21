<?php
session_start();
if(!isset($_SESSION['id'])){
echo("<script>window.location.href='login.page.php';</script>");
}
       
   
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/style.css">
    <title>LISTE MUSEE</title>
</head>

<?php  require_once ("bdd.inc.php"); 
 require_once ("fonction.inc.php");

?>
<?php include 'header.inc.php' ?>
<body>



<div class="head">
    <h1 ><em>WELCOME TO HOUSE MUSEUM!!!!!</em></h1>
    <br>
    <h4 class="colo" >Ici nous avons <em>neuf</em> cartégories de musées; chaque musée comporte des images acompagner de les oeuvres!!!</h4> 
    <br>
    <h6 class="colo">Alors faîtes un tour dans nos différentes musées pour en savoir plus!!</h6>
    

</div>

    <div class="liste">
        <h1 class="visi">Musée Archéologie <a href="feda.page.php"  class="badge bg-secondary"  >VISITER</a></h1>
        <h2 class="visi">Musée d'Art Simple <a href="visiteAS.page.php"  class="badge bg-secondary"  >VISITER</a></h2>
        <h3 class="visi">Musée de Beaux-Arts <a href="visiteB.page.php"  class="badge bg-secondary"  >VISITER</a></h3>
        <h4 class="visi">Musée d'Arts Décoratifs <a href="visiteAD.page.php"  class="badge bg-secondary"  >VISITER</a></h4>
        <h5 class="visi">Musée d'Histoire <a href="visiteH.page.php"  class="badge bg-secondary"  >VISITER</a></h5>
        <h6 class="visi">Musée d'Histoire naturelle <a href="visiteHN.page.php"  class="badge bg-secondary"  >VISITER</a></h6>
        <h5 class="visi">Musée de Sciences <a href="visiteS.page.php"  class="badge bg-secondary"  >VISITER</a></h5>
        <h4 class="visi">Musée Technique <a href="visiteT.page.php"  class="badge bg-secondary"  >VISITER</a></h4>
        <h3 class="visi">Musée d'Ethologie <a href="visiteE.page.php"  class="badge bg-secondary"  >VISITER</a></h3>
    </div>




<script src="bootstrap/js/bootstrap.bundle.js" ></script>
</body>
</html>