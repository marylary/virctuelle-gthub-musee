
<?php  require_once ("bdd.php"); 


if(isset($_POST) && count($_POST)!=0){
    print_r($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAYEMENT</title>

    <link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/style.css">
</head>



<body>
    
   <div>
        <div id="embed" class="feda" style="width: 550px; height: 500px "  ></div>

        
<form action="" method="POST">
 
 
 <script
   src="https://cdn.fedapay.com/checkout.js?v=1.1.7"
   data-public-key="pk_sandbox_fpypbcvTub-g1ULocvSM5Rtg"
   data-button-text="Payer 100000"
   data-button-class="button-class"
   data-transaction-amount="100000"
   data-transaction-description="Description de la transaction"
   data-currency-iso="XOF">
 </script>
</form>
   </div>
   


<script src="bootstrap/js/bootstrap.bundle.js" ></script>
</body>
</html>