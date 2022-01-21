<?php
   session_start();
   
?>
<?php include 'header.inc.php' ?>
<?php  require_once ("bdd.inc.php"); 
 require_once ("fonction.inc.php");



    print_r($_POST);

if( $_POST['transaction-status'] =='approuved' && $_POST['amount'] == 100000  ){
    
	$sql = "SELECT * FROM transation WHERE tansation_id = ?";
    $reponse = $bdd->prepare($sql);
		$reponse->execute (array(
		"transation_id" => $_POST['transaction-id']
				          
		));



        $tableau =$reponse->fetch() ;
				

				
				
				if(empty($tableau))

				{
					$sql = "INSERT INTO transation (transation_id,amount, username, agercy, statut ) VALUE (?,?,?,?,?)";
					$reponse = $bdd->prepare($sql);
					$reponse->execute (array(intval($_POST['transaction-id']),intval($_POST['amount']),$_SESSION['username'],"fedapay",$_POST['transaction-status']				  
					));
					print_r(array(
						"transation_id" => intval($_POST['transaction-id']),
					 "amount" => intval($_POST['amount']),
					 "username" => $_SESSION['username'],
					 "agercy" => "fedapay",
					"statut"  => $_POST['transaction-status']	 
								  
					));
					echo($reponse->rowCount()== 1);

                    if($reponse->rowCount()== 1){
                        ?>
                                    
                            <script>window.location.href='visiteAC.page.php';</script>
                
                           <?php
                    }       
				}

				else{
					$error = "PAYMENT IS  NOT FUND";
					print $error;
				}

}
?>
