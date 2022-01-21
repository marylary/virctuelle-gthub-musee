<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>REGISTER</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/style.css">
</head>

<?php  require_once ("bdd.inc.php"); 
 require_once ("fonction.inc.php");

if(isset($_REQUEST['submit']))
   {

	if(isset($_POST['username']) && !empty($_POST['username']))
	{
		if(isset($_POST['mymail']) && !empty($_POST['mymail']))
		{
			if(isset($_POST['monpasse']) && !empty($_POST['monpasse']))
			{
				if(isset($_POST['myconfirm']) && !empty($_POST['myconfirm']))
				{
					if(filter_input(INPUT_POST, 'mymail', FILTER_VALIDATE_EMAIL))
					{
						$username =  filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
						$mymail =  filter_input(INPUT_POST, 'mymail', FILTER_SANITIZE_EMAIL);
						$monpasse =  filter_input(INPUT_POST, 'monpasse', FILTER_SANITIZE_STRING);
						$myconfirm =  filter_input(INPUT_POST, 'myconfirm', FILTER_SANITIZE_STRING);

						$sql = "SELECT * FROM inscription WHERE username = :username OR mymail = :mymail";
						$reponse = $bdd->prepare($sql);
						$reponse->execute (array(
							"username" => $username,
							"mymail" => $mymail ));

							$info = $reponse->fetch();
							if(($info) == 0  )
							{

								if($monpasse == $myconfirm)
								{
									$sql = "INSERT INTO inscription (username, mymail, monpasse  ) VALUE (:username, :mymail, :monpasse)";
									$reponse = $bdd->prepare($sql);
									$reponse->execute (array(
									 "username" => $username,
									 "mymail" => $mymail,
									 "monpasse" => $monpasse
								 
								  
									));
							 
									if($reponse->rowCount()== 1){
									 ?>
												 
										 <script>window.location.href='liste_musee.page.php';</script>
							 
									 <?php
											 
									}else{
										print("ERREUR D'INSCRIPTION!!! ");
									}
								}
								else{
									$error = 'LES MOTS DE PASSE NE SONT PAS CONFORME!!';
								}
							}
							else{
								$error ="L'UTILISATEUR EXISTE DEJA!!!";
							}
					}
					else{
						$error = "DESOLER VOTRE MAIL N'EST PAS VALIDE!!!";
					}
				}
				else{
					$error= 'DESOLER LE CHAMPS MYCONFIRM EST VIDE!!';
				}
			}else{
				$error= 'DESOLER LE CHAMPS MONPASSE EST VIDE!!';
			}

		}else{
			$error= 'DESOLER LE CHAMPS MYMAIL EST VIDE!!';
		}

	}else{
		$error= 'DESOLER LE CHAMPS USERNAME EST VIDE!!';
	}
      

   }

  

?>
   <div class="d-flex justify-content-center links">
	    <p class="acc">  Retournez à la page d'acceuil en cliquant sur <a href="index.page.php">ACCEUIL</a></p>
		<p> ou  Connectez-vous en cliquant sur  <a href="login.page.php">LOGIN</a></p>	
	</div>

<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header" >
				<h3 class="log"><em>REGISTER</em></h3>
			<div class="error">
					<?php 
				if(isset($error))
				{
					print $error;
				}
				?>
			</div>
			
		</div>
			<div class="card-body" >
				<form action="" method="POST">
					
				<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input id="username" name="username" type="text" class="form-control" placeholder="username" required>
						
					</div>


					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input id="mymail" name="mymail" type="text" class="form-control" placeholder="email" required>
						
					</div>

					
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input id="monpasse" name="monpasse" type="password" class="form-control" placeholder="passeword" required>
						
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input id="myconfirm" name="myconfirm" type="password" class="form-control" placeholder="confirm password" required>
						
					</div>
				
					
					<div class="text" class="form-group">
						<input type="submit"  name="submit" value="Register" class="cou" class="btn  float-right login_btn">
					</div>
				</form>
			</div>
	
			
				
				
		
		</div>
	</div>
</div>
             

   
<script src="bootstrap/js/bootstrap.bundle.js" ></script>
</body>
</html>