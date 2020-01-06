<?php 
		$title = "Connexion"; 
?>
<?php include('partials/_header.php') ; ?>

<div id="main-content">
	

		<main role="main" class="container">

			  <div class="jumbotron">
			    <h1 class="text-center lead " ><b> Connexion :</b></h1>
			    	<?php
			    	include('partials/_errors.php') ;

			    	?>

				   <form method="post" class="well col-md-6 col-md-offset-3">
				   			

				   			<div class="form-group">
    						<label for="identifiant">Pseudo ou adresse email :</label>
    						<input type="text" value="<?= get_input('identifiant'); ?>" class="form-control" id="identifiant"  name="identifiant"
    						required="required">
 							 </div>

 							 
  							<div class="form-group">
    						<label for="exampleInputPassword1">Mot de passe</label>
    						<input type="password" class="form-control" id="exampleInputPassword1" value="<?= get_input('mdp') ;?>" required="required" name="mdp">
 							 </div>
                           

  							<input  type="submit" value="Connexion" class="btn btn-primary " name="login">
				   	
				   </form>
			  </div>

		</main>

</div>



<?php include('partials/_footer.php') ; ?>

   
