    
<?php 

function histo($pdo, $user, $visit){

 $sql = "INSERT INTO historique(username, musee_visiter) VALUES (:username, :musee_visiter)";
 $reponse = $pdo->prepare($sql);
 $reponse->execute (array(
  "username" => $user,
  "musee_visiter" => $visit


 ));
}


?>