<?php
if (isset($errors) && count($errors)!=0) {
			    		echo '<div class="bg-danger">';
			    		foreach($errors as $error) {
			    			echo $error."<br/>";

			    		}
			    		echo '</div>';
			    	}
?>