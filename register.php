 <?php
session_start();



include('filters/guest_filter.php');
require('config/database.php');
require('includes/functions.php');
require('includes/constants.php');





if (isset($_POST['register'])) {

	if (not_empty(['nom','pseudo','prenom','mail','mdp','cmdp'])) {

		
		
		$errors=[];
		extract($_POST);
		if (mb_strlen($pseudo)<3) {
			$errors[]="Pseudo minimum 3 caractères";
		}
		if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
			$errors[]="Adresse email non valide .";
		}
		if (mb_strlen($mdp)<6 ) {
			$errors[]="Password minimum 6 caractère .";
		}else{ 
				if ($mdp!==$cmdp) {
					$errors[]="Les deux mots de passe ne concordent pas .";
				}

		}
		if (is_already_in_use('pseudo',$pseudo, 'users')) {
			$errors[]="Pseudonyme déjà utilisé .";
		}
		if (is_already_in_use('mail',$mail, 'users')) {
			$errors[]="Email déjà utilisé .";
		}
		if (count($errors)==0) {

			//mail d activation
			//messages de verifier le mail
			$to=$mail;
			$subject= WEBSITE_NAME." - ACTIVATION DE COMPTE";
			$mdp=sha1($mdp);
			$token=sha1($pseudo.$mail.$mdp);
			ob_start(); 
			require('templates/emails/activation.tmpl.php');
			$content=ob_get_clean(); 

			$headers = 'MIME-Version: 1.0' . "\r\n" ;
			$headers.= 'Content-type: text/html; charset=iso-8859-1' . "\r\n" ;
			
			mail($to, $subject, $content, $headers);

			set_flash('Mail d activation envoyé !','success');
			//header('Location: index.php');
			$q=$db->prepare('INSERT INTO users (nom, prenom,pseudo,mail,password) VALUES (:nom,:prenom,:pseudo,:mail,:mdp)');
			$q->execute([
				 'nom'=>$nom, 
				 'prenom'=>$prenom,
				 'pseudo'=>$pseudo,
				 'mail'=>$mail,
				 'mdp'=> $mdp,
				 
			]);


			redirect('index.php');
			     		
		}else{
			save_input_data();
		}


	}else{

		$errors[]="Veuillez SVP remplir tous les champs du formulaire";
		save_input_data();
	}
}else{

	  clear_input_data();
}

 ?>



<?php include('views/register.view.php') ; ?>

   
