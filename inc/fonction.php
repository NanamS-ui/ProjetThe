<?php
	include 'connection.php';
	function isAdmin($login){
		//verifiction si c'est un admin return bollean
		$reponse = false;
		$db = dbconnect();
		$query = "select * from user where login = '$login' and type = 'admin'";
		$resultat = mysqli_query($db,$query);
		$nombre  = mysqli_num_rows($resultat);
		if($nombre>0){
			$reponse = true;
		}
		return $reponse;
	}
	function verificationUserExiste($login){
		//verifiction si c'est un user return bollean
		$reponse = false;
		$db = dbconnect();
		$query = "select * from user where login = '$login'";
		$resultat = mysqli_query($db,$query);
		$nombre  = mysqli_num_rows($resultat);
		if($nombre>0){
			$reponse = true;
		}
		return $reponse;
	}
	function verificationLogin($login,$password){
		//verifie si le loggin est errone return true s'il n' est pas errone
		$reponse = false;
		$db = dbconnect();
		$query = "select * from user where login = '$login' and pw = '$password'";
		$resultat = mysqli_query($db,$query);
		$nombre  = mysqli_num_rows($resultat);
		if ($nombre>0) {
			$reponse = true;	
		}
		return $reponse;
	}
	function getUser($login,$password){
		//return un table admin s' il exist
		$db = dbconnect();
		$query = "select * from user where login = '$login' and pw = '$password'";
		$resultat = mysqli_query($db,$query);
		$nombre  = mysqli_num_rows($resultat);
		$user = array();
		if ($nombre>0) {
			while ($donnees = mysqli_fetch_assoc($resultat)) {
			$user[] = $donnees;
			}
		}
		return $user;
	}
?>