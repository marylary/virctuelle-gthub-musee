<?php
   session_start();
   
?>



<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
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
  
?>

<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3 class="log"><em>LOGIN</em></h3>
			
			</div>

			<div class = "container form-signin">
         
         <?php


			if(isset($_REQUEST['submit']))
			{
				$sql = "SELECT * FROM inscription WHERE username = :username AND monpasse = :monpasse";
				$reponse = $bdd->prepare($sql);
				$reponse->execute (array(
					"username" => $_POST['username'],
					"monpasse" => $_POST['monpasse']
				          
				));
				$tableau =$reponse->fetch() ;
				print_r($tableau);
				
				if(is_array($tableau) && count($tableau)!=0)

				
				{
					 $_SESSION['id'] = $tableau['id'];
					 $_SESSION['username'] = $tableau['username'];
					 $_SESSION['create_at'] = $tableau['create_at'];
					 ?>
					
					<script>window.location.href='liste_musee.page.php';</script>
                
					<?php
					
				}
				else{
					$error = "ERROR USER NOT FUND";
					print $error;
				}

		           
				   
			}

            
			
         ?>
			<div class="card-body">
				<form class = "form-signin" role = "form" 
                    action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
                    ?>" method = "post">
				    <h4 class = "form-signin-heading"></h4>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input id="username" name="username" type="text" class="form-control" placeholder="username" required>
						
					</div>
					
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input id="monpasse" name="monpasse" type="password" class="form-control" placeholder="passeword" required>
						
					</div>
					
					<div class="text" class="form-group">
						<input name="submit" type="submit" value="Login" class="cou" class="btn  float-right login_btn">
					</div>
				</form>
			</div>
		
				<div class="d-flex justify-content-center links">
			        <p>Inscrivez-vous e en cliquant sur  <a href="registration.page.php">REGISTER</a></p>
				    <p>  Retournez à la page d'acceuil en cliquant sur <a href="index.page.php">ACCEUIL</a></p>	
				</div>
				
			</div>
		</div>
	</div>
</div>




   
   
<script src="bootstrap/js/bootstrap.bundle.js" ></script>
</body>
</html>