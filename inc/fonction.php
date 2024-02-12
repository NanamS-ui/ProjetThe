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
			$user[] = array('id'=>$donnees['id'],'login'=>$donnees['login'],'pw'=>$donnees['pw'],'type'=>$donnees['type']);
			}
		}
		return $user;
	}
	function getAllVarieteDeThe(){
		//prend tous les variete de the
		$db = dbconnect();
		$query = "select * from variete_du_the ";
		$resultat = mysqli_query($db,$query);
		$nombre  = mysqli_num_rows($resultat);
		$variete_du_the = array();
		if ($nombre>0) {
			while ($donnees = mysqli_fetch_assoc($resultat)) {
			$variete_du_the[] = array('id'=>$donnees['id'],'nom'=>$donnees['nom'],'occupation'=>$donnees['occupation'],'rendement'=>$donnees['rendement']);
			}
		}
		return $variete_du_the;
	}
	function getIdVarieteDeThe($varieteDeThe){
		//return l'id du variete du the
		return $varieteDeThe['id'];
	}
	function deleteVarieteDeThe($id){
		//suppresion d' un variete de the
		$db = dbconnect();
		$query = "delete from variete_du_the where id = '$id'";
		mysqli_query($db,$query);
		return "suppression avec succes";
	}
	function insereVarieteDetThe($nom,$occupation,$rendement){
		//insertion d' un variete de the
		$db = dbconnect();
		$query = "insert into variete_du_the values(null,'$nom','$occupation','$rendement')";
		mysqli_query($db,$query);
		return "achat effectuer avec succes";
	}
	function updateVarieteDeThe($id,$nom,$occupation,$rendement){
		//update d' un variete de the
		$db = dbconnect();
		$query = "update variete_du_the set nom='$nom', occupation='$occupation', rendement='$rendement' where id = '$id'";
		mysqli_query($db,$query);
		return "update avec succes";
	}


	function getAllParcelle(){
		//prend tous les Partielle
		$db = dbconnect();
		$query = "select * from parcelle ";
		$resultat = mysqli_query($db,$query);
		$nombre  = mysqli_num_rows($resultat);
		$parcelle = array();
		if ($nombre>0) {
			while ($donnees = mysqli_fetch_assoc($resultat)) {
			$parcelle[] = array('id'=>$donnees['id'],'surface'=>$donnees['surface'],'idVarieteDuThe'=>$donnees['idVarieteDuThe']);
			}
		}
		return $parcelle;
	}
	function getIdParcelle($parcelle){
		//return l'id du variete du the
		return $parcelle['id'];
	}
	function deleteParcelle($id){
		//suppresion d' un variete de the
		$db = dbconnect();
		$query = "delete from parcelle where id = '$id'";
		mysqli_query($db,$query);
		return "suppression avec succes";
	}
	function insereParcelle($surface,$idVarieteDuThe){
		//insertion d' un variete de the
		$db = dbconnect();
		$query = "insert into parcelle values(null,'$surface','$idVarieteDuThe')";
		mysqli_query($db,$query);
		return "achat effectuer avec succes";
	}
	function updateParcelle($id,$surface,$idVarieteDuThe){
		//update d' un variete de the
		$db = dbconnect();
		$query = "update parcelle set surface='$surface', idVarieteDuThe='$idVarieteDuThe' where id = '$id'";
		mysqli_query($db,$query);
		return "update avec succes";
	}



	function getAllParcelle(){
		//prend tous les cueilleur
		$db = dbconnect();
		$query = "select * from cueilleur ";
		$resultat = mysqli_query($db,$query);
		$nombre  = mysqli_num_rows($resultat);
		$cueilleur = array();
		if ($nombre>0) {
			while ($donnees = mysqli_fetch_assoc($resultat)) {
			$cueilleur[] = array('id'=>$donnees['id'],'nom'=>$donnees['nom'],'genre'=>$donnees['genre']);
			}
		}
		return $cueilleur;
	}
	function getIdCueilleur($cueilleur){
		//return l'id du cueilleur
		return $cueilleur['id'];
	}
	function deleteCueilleur($id){
		//suppresion d' un cueilleur
		$db = dbconnect();
		$query = "delete from cueilleur where id = '$id'";
		mysqli_query($db,$query);
		return "suppression avec succes";
	}
	function insereCueilleur($nom,$genre){
		//insertion d' un cueilleur
		$db = dbconnect();
		$query = "insert into cueilleur values(null,'$nom','$genre')";
		mysqli_query($db,$query);
		return "achat effectuer avec succes";
	}
	function updateCueilleur($id,$nom,$genre){
		//update d' un cueilleur
		$db = dbconnect();
		$query = "update cueilleur set nom='$nom', genre='$genre' where id = '$id'";
		mysqli_query($db,$query);
		return "update avec succes";
	}


	function getAllDepense(){
		//prend tous les cueilleur
		$db = dbconnect();
		$query = "select * from depense ";
		$resultat = mysqli_query($db,$query);
		$nombre  = mysqli_num_rows($resultat);
		$depense = array();
		if ($nombre>0) {
			while ($donnees = mysqli_fetch_assoc($resultat)) {
			$depense[] = array('id'=>$donnees['id'],'date_depense'=>$donnees['date_depense'],'description'=>$donnees['description'],'valeur'=>$donnees['valeur']);
			}
		}
		return $depense;
	}
	function getIddepense($depense){
		//return l'id du depense
		return $depense['id'];
	}
	function deletedepense($id){
		//suppresion d' un depense
		$db = dbconnect();
		$query = "delete from depense where id = '$id'";
		mysqli_query($db,$query);
		return "suppression avec succes";
	}
	function inseredepense($date_depense,$description,$valeur){
		//insertion d' un depense
		$db = dbconnect();
		$query = "insert into depense values(null,'$date_depense','$description','$valeur')";
		mysqli_query($db,$query);
		return "achat effectuer avec succes";
	}
	function updatedepense($id,$date_depense,$description,$valeur){
		//update d' un depense
		$db = dbconnect();
		$query = "update depense set date_depense='$date_depense', description='$description', valeur='$valeur' where id = '$id'";
		mysqli_query($db,$query);
		return "update avec succes";
	}

	function udpdateSalaire($montant){
		$db = dbconnect();
		$query = "update salaire set montant='$montant'";
		mysqli_query($db,$query);
		return "update avec succes";
	}

?>