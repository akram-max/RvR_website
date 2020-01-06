<?php 
		$title = "Page de profil"; 
?>
<?php include('partials/_header.php') ; ?>

<div id="main-content">
	

		<div  class="container">
			<div class="row">

				<div class="col-md-6">
					
						<div class="panel panel-default">
						  <div class="panel-heading">
						    <h3 class="panel-title">Profil de <?= e($user->pseudo) ?></h3>
						  </div>
						  <div class="panel-body">
						  
						    <div class="row">
						    	<div class="col-md-5">
						  				  		<img class="img-circle"  src="<?= get_avatar_url($user->mail) ?>" alt="Image de profil de <?= e($user->pseudo) ?> "/>

						    	</div>
						    	<div class="col-md-7">
						    		
						    	</div>


						    </div>
						    <div class="row">
						    	<div class="col-sm-6">
			  				  		<strong><?= e($user->pseudo) ?></strong><br>
			  				  		<a href="mailto:<?= e($user->mail) ?>"><?= e($user->mail) ?></a><br>
			  				  		<?=
			  				  		$user->city && $user->country  ? e($user->city).'-'.e($user->country) : "";
						    	 	?>
						    	 	<br>
						    	 	<a href="https://www.google.com/maps?q=<?=e($user->city).' '.e($user->country)?>" target="_blank" > Voir sur google Maps</a>

						    	</div>
						    	<div class="col-sm-6">
						    		<?=
			  				  		$user->linkedin ? '<a href="//linkedin.com/in/'.e($user->linkedin).'"> linkedin: @'.e($user->linkedin).'</a><br>' : "";
						    	 	?>
						    	 	<?=
			  				  		$user->github ? '<a href="//github.com/'.e($user->github).'"> github   : @'.e($user->github).'</a><br>' : "";
						    	 	?>

						    	 	<?=
			  				  		$user->disponible ? 'Disponible pour un projet' : "Non disponible pour un projet";
						    	 	?>
						    	</div>
						    	<div class="row" >
						    		<div class="col-md-12 well" >
						    			<h5>Petite biographie de <?= e($user->pseudo) ?> </h5>
						    			<p>
						    				<?=
			  				  					$user->biography ? nl2br(e($user->biography)) : "Aucune biographie pour le moment";
						    	 			?>
						    			</p>
						    			
						    		</div>
						    		
						    	</div>


						    </div>
						   

						    
						  </div>
						</div>

				</div>

				<div class="col-md-6">
							
			    
						<div class="panel panel-default">
						  <div class="panel-heading">
						    <h3 class="panel-title">Compléter mon profil :</h3>
						  </div>
						  <div class="panel-body">
						  	<?php include("partials/_errors.php") ?>
								    		<form data-parsely-validate method="post" autocomplete="off">
								     <div class="form-row">
								    <div class="form-group col-md-6">
								      <label for="nom">Nom</label>
								      <input type="text" class="form-control" id="nom" name="nom" required="required" value="<?= get_input("nom") ? get_input("nom") :e($user->nom) ?>" >
								    </div>
								    <div class="form-group col-md-6">
								      <label for="sexe">Sexe</label>
										<select class="form-control" id="select" name="Sexe">
										      <option value="H" <?=$user->sexe=="H" ? "selected" : "" ?> >Homme</option>
										      <option value="F" <?=$user->sexe=="F" ? "selected" : "" ?>>Femme</option>
										      
										    </select>								    
									</div>						

								   <div class="form-row">
									    <div class="form-group col-md-6">
									      <label for="City">Ville</label>
									      <input type="text" class="form-control" id="City" name="city" required="required" value="<?= get_input("City") ? get_input("city") : e($user->city) ?>">
									    </div>
									    <div class="form-group col-md-6">
									      <label for="Country">Pays</label>
									      <input type="text" class="form-control" name="country" id="Country" required="required" value="<?= get_input("country") ? get_input("country") : e($user->country) ?>">
									    </div>
								  </div>

								   <div class="form-row">
									    <div class="form-group col-md-6">
									      <label for="Linkedin">Linkedin</label>
									      <input type="text" class="form-control" name="linkedin" id="Linkedin" value="<?= get_input("linkedin") ? get_input("linkedin") : e($user->linkedin) ?>">
									    </div>
									    <div class="form-group col-md-6">
									      <label for="Github">Github</label>
									      <input type="text" class="form-control" name="github" id="Github" value="<?= e($user->github) ?>">
									    </div>
								  </div>

								  <div class="form-row col-md-12">
								  	<label for="bio">Biographie</label>
								    <textarea id="bio" class="form-control" name="bio" cols="14" rows="5"  ><?= get_input("biography") ? get_input("biography") :  e($user->biography) ?></textarea>
								 </div>
					 
								  <div class="form-group col-md-12">
								    <div class="form-check">
								      <input class="form-check-input" name="disponibilite" type="checkbox" id="disponibilite" <?= $user->disponible ? "checked" : "" ?>>
								      <label class="form-check-label" for="gridCheck">
								        Disponible ?
								      </label>
								    </div>
								  </div>
								  <button type="submit" class="btn btn-primary" name="update">Valider</button>
								</form>
						  </div>
					

			  			</div>
					
				</div>
				
			</div>
		</div>
</div>



<?php include('partials/_footer.php') ; ?>

   
