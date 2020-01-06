

<?php

if (!isset($_SESSION['user_id']) || (!isset($_SESSION['pseudo_id']))) {
	header('Location: login.php');
	exit();
}
?>