<?php 
		$title = "Inscription"; 
?>
<?php include('partials/_header.php') ; ?>

<div id="main-content">
	

		<main role="main" class="container">

			  <div class="jumbotron">
			    <h1 class="text-center lead ">✍ Devenez dès à présent membres ! ✍</h1>
			    	<?php
			    	include('partials/_errors.php') ;

			    	?>

				   <form method="post" class="well col-md-6 col-md-offset-3">
				   			<small id="emailHelp" class="form-text text-muted">Nous respectons vos informations personnelles.</small>

				   			<div class="form-group">
    						<label for="nom">Nom </label>
    						<input type="text" value="<?= get_input('nom'); ?>" class="form-control" id="nom"  name="nom"
    						required="required">
 							 </div>

 							 <div class="form-group">
    						<label for="prenom">Prénom </label>
    						<input type="text" value="<?= get_input('prenom') ;?>" class="form-control" id="prenom"  name="prenom" required="required" >
 							 </div>

				   			<div class="form-group">
    						<label for="exampleInputEmail1">Adresse mail</label>
    						<input type="email" value="<?= get_input('mail') ;?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez votre email" required="required" name="mail">
    						
  								</div> 
  							<div class="form-group">
    						<label for="exampleInputPassword1">Mot de passe</label>
    						<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Choisissez votre mot de passe" value="<?= get_input('mdp') ;?>" required="required" name="mdp">
 							 </div>
                            <div class="form-group">
    						<label for="confirmInputPassword1">Confirmation du mot de passe</label>
    						<input type="password" class="form-control" id="confirm InputPassword1" placeholder="Confirmer votre mot de passe" value="<?= get_input('cmdp') ;?>" required="required" name="cmdp" >
 							 </div>

 							 <div class="form-group">
    						<label for="pseudo">Pseudo</label>
    						<input type="text" value="<?= get_input('pseudo') ;?>" class="form-control" id="pseudo" aria-describedby="pseudo" placeholder="Pseudo" required="required" name="pseudo">
    						
  								</div>
  							
<!--
  							<div class="form-check">
    						<input type="checkbox" class="form-check-input" id="exampleCheck1">
   							<label class="form-check-label" for="exampleCheck1">Etudiant à EILCO </label>
  							</div>

  							<div class="dropdown">

______________________________________________________________________________________________________________________________
  								<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	   								 Etudiant à EILCO
	 						    </button>
	  								
	  								<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
	    <a class="dropdown-item" href="#">ING1/a>
	    <a class="dropdown-item" href="#">ING2</a>
	    <a class="dropdown-item" href="#">ING3</a>
	  								</div>
								</div>


  							<div class="dropdown">
  								<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownM" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	   								 Je ne suis pas étudiant à EILCO
	 						    </button>
	  								<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
	    <a class="dropdown-item" href="#">Collège/a>
	    <a class="dropdown-item" href="#">Lycée</a>
	    <a class="dropdown-item" href="#">Autres</a>
	  								</div>
								</div>
							-->
  							

  							<input  type="submit" value="Inscription" class="btn btn-primary " name="register">
				   	
				   </form>
			  </div>

		</main>

</div>



<?php include('partials/_footer.php') ; ?>

   
