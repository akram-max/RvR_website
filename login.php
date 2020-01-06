
 <?php
session_start();



include('filters/guest_filter.php');
require('config/database.php');
require('includes/functions.php');
require('includes/constants.php');





if (isset($_POST['login'])) {

	if (not_empty(['identifiant','mdp'])) {
		extract($_POST);
		$q = $db->prepare("SELECT id, pseudo FROM users 
			WHERE (pseudo=:identifiant
			OR mail=:identifiant)
			AND password=:mdp
			AND active= '1'"); 
		$q->execute(['identifiant'=>$identifiant,
					 'mdp'=> sha1($mdp) ]);
		$userHaseenFound=$q->rowCount();
		if ($userHaseenFound) {

			$user=$q->fetch(PDO::FETCH_OBJ);
			

			$_SESSION['user_id']=$user->id ;
			$_SESSION['pseudo_id']=$user->pseudo ;
			redirect("profile.php?id=".$user->id);
		}else{
			

			set_flash("Combinaison password/identifiant incorrecte",'danger');
			save_input_data();
		}


	}
}else{

	  clear_input_data();
}

 ?>



<?php include('views/login.view.php') ; ?>

   
