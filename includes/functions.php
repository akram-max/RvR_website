<?php 


if (!function_exists('not_empty')) {

	function not_empty($fields=[]){
		if (count($fields)!=0) {
					# code...

			foreach ($fields as $field) {
				if (empty($_POST[$field]) || (trim($_POST[$field])==false)) {
					 
					return false;
				}
			}

		return true;


		}
 
	}
}
if (!function_exists('is_already_in_use')) {
	function is_already_in_use($field,$value,$table){
			global $db;
			$q = $db->prepare("SELECT id FROM $table WHERE $field= ?");
			$q->execute([$value]);
			$count=$q->rowCount();
			$q->closeCursor();
			return $count;


}

}

if (!function_exists('e')) {
	function e($string){
		if ($string) {
			
			return htmlspecialchars($string);
			

		}

	}
}

if (!function_exists('set_flash')) {
	function set_flash($message,$type='info'){
		$_SESSION['notification']['message']= $message;
		$_SESSION['notification']['type']= $type;
		

	}
}
if (!function_exists('redirect')) {
	function redirect($page){
		header('Location:'.$page);
		exit();
		

	}
}

if (!function_exists('save_input_data')) {
	function save_input_data(){
		foreach ($_POST as $key => $value) {
		
			if (( strpos($key, 'mdp')===false) && ( strpos($key, 'cmdp')===false)) {

				$_SESSION['input'][$key] = $value ;
				
			}
			
		}
		

	}
}

if (!function_exists('get_input')) {
	function get_input($key){
		if (!empty($_SESSION['input'][$key])) {
			
			return e($_SESSION['input'][$key]);

		}else{
			
			return NULL;

		}

		
		

	}
}
//is_logged_in
if (!function_exists('is_logged_in')) {
	function is_logged_in(){
		return isset($_SESSION['user_id'])||isset($_SESSION['pseudo']);

		
		

	}
}

if (!function_exists('clear_input_data')) {
	function clear_input_data(){
		if (isset($_SESSION['input'])) {
			
			$_SESSION['input']=[];


		}

	}
}

//find_user_by_id
if (!function_exists('find_user_by_id')) {
	function find_user_by_id($id){
		global $db;
		$q=$db->prepare('SELECT id, nom, prenom, pseudo, mail, password, active, created_at, city, country, sexe, linkedin, github, biography, disponible FROM users WHERE id=?');
		$q->execute([$id]);
		$data=$q->fetch(PDO::FETCH_OBJ);
		$q->closeCursor();
		return $data;

	}
}

if (!function_exists('get_session')) {
	function get_session($key){
		if ($key) {
			
			if (!empty($_SESSION[$key])) {
			
			return e($_SESSION[$key]);

		}else{
			
			return NULL;

		}
			

		}

	}
}

if (!function_exists('set_active')) {
	function set_active($file){

		//$page=array_pop(explode('/', $_SERVER['SCRIPT_NAME']));
		$page=trim(strrchr($_SERVER['SCRIPT_NAME'], '/'),'/');

		if ($page==$file.'.php') {
			return "active" ;
		}else{
			return "" ;
		}

	}
}

//Get avatar URL
if (!function_exists('get_avatar_url')) {
	function get_avatar_url($email_){
		return "http://gravatar.com/avatar/".md5(strtolower(trim(e($email_))));
	}
}
?>