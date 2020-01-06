
 <?php
session_start();
//$_SESSION=[];


include('config/database.php');

include('filters/auth_filter.php');
require('includes/functions.php');
require('includes/constants.php');

if (!empty($_GET['id'])) {
	$user=find_user_by_id($_GET['id']);
	if (!$user) {
		redirect('index.php');
	}
}else{
	redirect('profile.php?id='.get_session('user_id'));
}

if (isset($_POST['update'])) {

	$errors = [];

	if (not_empty(['nom','Sexe','city','country','bio'])) {
		extract($_POST);
		$q = $db->prepare("UPDATE users SET nom=:nom,city=:city,country=:country,sexe=:sexe,linkedin=:linkedin,github=:github,biography=:biography, disponible=:disponible WHERE id=:id"); 
		$q->execute(['nom'=>$nom,
					 'city'=> $city,
					 'country'=> $country,
					 'sexe'=> $Sexe,
					 'linkedin'=> $linkedin,
					 'github'=> $github,
					 'biography'=> $bio,
					 'disponible' => !empty($disponibilite)? '1' : '0',
					 'id' => get_session('user_id'),
		]);
        
		set_flash("Félicitations, votre profil a été mis à jour! ");
		redirect("profile.php");
	}
	else {
		save_input_data();
		$errors[] = "Veuillez remplir tous les champs";
	}
}else{

	  clear_input_data();
}




 include('views/profile.view.php') ; ?>

   
