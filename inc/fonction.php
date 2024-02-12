<?php
include 'connection.php';
function isAdmin($login)
{
	//verifiction si c'est un admin return bollean
	$reponse = false;
	$db = dbconnect();
	$query = "select * from user where login = '$login' and type = 'admin'";
	$resultat = mysqli_query($db, $query);
	$nombre  = mysqli_num_rows($resultat);
	if ($nombre > 0) {
		$reponse = true;
	}
	return $reponse;
}
function verificationUserExiste($login)
{
	//verifiction si c'est un user return bollean
	$reponse = false;
	$db = dbconnect();
	$query = "select * from user where login = '$login'";
	$resultat = mysqli_query($db, $query);
	$nombre  = mysqli_num_rows($resultat);
	if ($nombre > 0) {
		$reponse = true;
	}
	return $reponse;
}
function verificationLogin($login, $password)
{
	//verifie si le loggin est errone return true s'il n' est pas errone
	$reponse = false;
	$db = dbconnect();
	$query = "select * from user where login = '$login' and pw = '$password'";
	$resultat = mysqli_query($db, $query);
	$nombre  = mysqli_num_rows($resultat);
	if ($nombre > 0) {
		$reponse = true;
	}
	return $reponse;
}
function getUser($login, $password)
{
	//return un table admin s' il exist
	$db = dbconnect();
	$query = "select * from user where login = '$login' and pw = '$password'";
	$resultat = mysqli_query($db, $query);
	$nombre  = mysqli_num_rows($resultat);
	$user = array();
	if ($nombre > 0) {
		while ($donnees = mysqli_fetch_assoc($resultat)) {
			$user[] = array('id' => $donnees['id'], 'login' => $donnees['login'], 'pw' => $donnees['pw'], 'type' => $donnees['type']);
		}
	}
	return $user;
}
function getAllVarieteDeThe()
{
	//prend tous les variete de the
	$db = dbconnect();
	$query = "select * from variete_du_the ";
	$resultat = mysqli_query($db, $query);
	$nombre  = mysqli_num_rows($resultat);
	$variete_du_the = array();
	if ($nombre > 0) {
		while ($donnees = mysqli_fetch_assoc($resultat)) {
			$variete_du_the[] = array('id' => $donnees['id'], 'nom' => $donnees['nom'], 'occupation' => $donnees['occupation'], 'rendement' => $donnees['rendement']);
		}
	}
	return $variete_du_the;
}
function getIdVarieteDeThe($varieteDeThe)
{
	//return l'id du variete du the
	return $varieteDeThe['id'];
}
function insereVarieteDetThe($nom, $occupation, $rendement)
{
	//insertion d' un variete de the
	$db = dbconnect();
	$query = "insert into variete_du_the values(null,'$nom','$occupation','$rendement')";
	mysqli_query($db, $query);
	return "insertion effectuer avec succes";
}
function updateVarieteDeThe($id, $nom, $occupation, $rendement)
{
	//update d' un variete de the
	$db = dbconnect();
	$query = "update variete_du_the set nom='$nom', occupation='$occupation', rendement='$rendement' where id = '$id'";
	mysqli_query($db, $query);
	return "update avec succes";
}


function getAllParcelle()
{
	//prend tous les Partielle
	$db = dbconnect();
	$query = "select parcelle.id as id,surface,variete_du_the.nom as nom from parcelle join variete_du_the on variete_du_the.id= parcelle.idVarieteDuThe";
	$resultat = mysqli_query($db, $query);
	$nombre  = mysqli_num_rows($resultat);
	$parcelle = array();
	if ($nombre > 0) {
		while ($donnees = mysqli_fetch_assoc($resultat)) {
			$parcelle[] = array('id' => $donnees['id'], 'surface' => $donnees['surface'], 'nom' => $donnees['nom']);
		}
	}
	return $parcelle;
}
function getIdParcelle($parcelle)
{
	//return l'id du parcelle du the
	return $parcelle['id'];
}
function deleteParcelle($id)
{
	//suppresion d' un parcelle de the
	$db = dbconnect();
	$query = "delete from parcelle where id = '$id'";
	mysqli_query($db, $query);
	return "suppression avec succes";
}
function insertParcelle($surface, $idVarieteDuThe)
{
	//insertion d' un parcelle de the
	$db = dbconnect();
	$query = "insert into parcelle values(null,'$surface','$idVarieteDuThe')";
	mysqli_query($db, $query);
	return "insertion effectuer avec succes";
}
function updateParcelle($id, $surface, $idVarieteDuThe)
{
	//update d' un parcelle de the
	$db = dbconnect();
	$query = "update parcelle set surface='$surface', idVarieteDuThe='$idVarieteDuThe' where id = '$id'";
	mysqli_query($db, $query);
	return "update avec succes";
}



function getAllCueilleur()
{
	//prend tous les cueilleur
	$db = dbconnect();
	$query = "select * from cueilleur ";
	$resultat = mysqli_query($db, $query);
	$nombre  = mysqli_num_rows($resultat);
	$cueilleur = array();
	if ($nombre > 0) {
		while ($donnees = mysqli_fetch_assoc($resultat)) {
			$cueilleur[] = array('id' => $donnees['id'], 'nom' => $donnees['nom'], 'genre' => $donnees['genre'], 'date_naissance' => $donnees['date_naissance']);
		}
	}
	return $cueilleur;
}
function getIdCueilleur($cueilleur)
{
	//return l'id du cueilleur
	return $cueilleur['id'];
}
function deleteCueilleur($id)
{
	//suppresion d' un cueilleur
	$db = dbconnect();
	$query = "delete from cueilleur where id = '$id'";
	mysqli_query($db, $query);
	return "suppression avec succes";
}
function insertCueilleur($nom, $genre, $dateDeNaissance)
{
	//insertion d' un cueilleur
	$db = dbconnect();
	$query = "insert into cueilleur values(null,'$nom','$genre','$dateDeNaissance')";
	mysqli_query($db, $query);
	return "insertion effectuer avec succes";
}
function updateCueilleur($id, $nom, $genre, $dateDeNaissance)
{
	//update d' un cueilleur
	$db = dbconnect();
	$query = "update cueilleur set nom='$nom', genre='$genre',date_naissance='$dateDeNaissance' where id = '$id'";
	mysqli_query($db, $query);
	return "update avec succes";
}


function getAllDepense()
{
	//prend tous les cueilleur
	$db = dbconnect();
	$query = "select depense.id as id,date_depense,categorieDepense.categorie as description,valeur from depense join categorieDepense on categorieDepense.id = depense.id_categorie";
	$resultat = mysqli_query($db, $query);
	$nombre  = mysqli_num_rows($resultat);
	$depense = array();
	if ($nombre > 0) {
		while ($donnees = mysqli_fetch_assoc($resultat)) {
			$depense[] = array('id' => $donnees['id'], 'date_depense' => $donnees['date_depense'], 'description' => $donnees['description'], 'valeur' => $donnees['valeur']);
		}
	}
	return $depense;
}
function getIddepense($depense)
{
	//return l'id du depense
	return $depense['id'];
}
function deletedepense($id)
{
	//suppresion d' un depense
	$db = dbconnect();
	$query = "delete from depense where id = '$id'";
	mysqli_query($db, $query);
	return "suppression avec succes";
}
function insertdepense($date_depense, $description, $valeur)
{
	//insertion d' un depense
	$db = dbconnect();
	$query = "insert into depense values(null,'$date_depense','$description','$valeur')";
	mysqli_query($db, $query);
	return "insertion effectuer avec succes";
}
function updatedepense($id, $date_depense, $description, $valeur)
{
	//update d' un depense
	$db = dbconnect();
	$query = "update depense set date_depense='$date_depense', description='$description', valeur='$valeur' where id = '$id'";
	mysqli_query($db, $query);
	return "update avec succes";
}

function getSalaire()
{ //maka salaire
	$db = dbconnect();
	$query = "select * from salaire ";
	$resultat = mysqli_query($db, $query);
	$nombre  = mysqli_num_rows($resultat);
	if ($nombre > 0) {
		while ($donnees = mysqli_fetch_assoc($resultat)) {
			$valiny = $donnees['montant'];
		}
	}
	return $valiny;
}
function udpdateSalaire($montant)
{
	//update salaire
	$db = dbconnect();
	$query = "update salaire set montant='$montant'";
	mysqli_query($db, $query);
	return "update avec succes";
}
function getParcelleParId($id)
{
	//maka parcelle avec un id
	$db = dbconnect();
	$query = "select * from parcelle where id ='$id'";
	$resultat = mysqli_query($db, $query);
	$nombre  = mysqli_num_rows($resultat);
	$parcelle = array();
	if ($nombre > 0) {
		while ($donnees = mysqli_fetch_assoc($resultat)) {
			$parcelle[] = array('id' => $donnees['id'], 'surface' => $donnees['surface'], 'idVarieteDuThe' => $donnees['idVarieteDuThe']);
		}
	}
	return $parcelle[0];
}
function getVarieteDuTheParId($id)
{
	//maka varieteDeThe avec un id
	$db = dbconnect();
	$query = "select * from variete_du_the where id ='$id'";
	$resultat = mysqli_query($db, $query);
	$nombre  = mysqli_num_rows($resultat);
	$varieteDeThe = array();
	if ($nombre > 0) {
		while ($donnees = mysqli_fetch_assoc($resultat)) {
			$varieteDeThe[] = array('id' => $donnees['id'], 'nom' => $donnees['nom'], 'occupation' => $donnees['occupation'], 'rendement' => $donnees['rendement']);
		}
	}
	return $varieteDeThe[0];
}
function getCategorieDepenses()
{
	//maka categorie de depense
	$db = dbconnect();
	$query = "select * from categorieDepense";
	$resultat = mysqli_query($db, $query);
	$nombre  = mysqli_num_rows($resultat);
	$categorieDepense = array();
	if ($nombre > 0) {
		while ($donnees = mysqli_fetch_assoc($resultat)) {
			$categorieDepense[] = array('id' => $donnees['id'], 'categorie' => $donnees['categorie']);
		}
	}
	return $categorieDepense;
}

function insertCueillette($date, $id_cueilleur, $id_parcelle, $poids)
{
	//insertion d' un depense
	$db = dbconnect();
	$query = "insert into cueillette values(null,'$date','$id_cueilleur','$id_parcelle','$poids')";
	mysqli_query($db, $query);
	return "insertion effectuer avec succes";
}
function kiloParParcelle($id)
{ //maka nombre de kilo par parcelle dans un mois
	$parcelle = getParcelleParId($id);
	$variete_du_the = getVarieteDuTheParId($parcelle['idVarieteDuThe']);
	$surfacePied = $variete_du_the['occupation'];
	$surfaceParcelle = $parcelle['surface'];
	$nombreDePied = $surfaceParcelle / $surfacePied;
	$rendement = $variete_du_the['rendement'];
	return  $rendement * $nombreDePied;
}
function kiloCueilli($idParcelle, $date)
{
	//maka ny kilo rehetre cueillit depuis la date de plantation et la date en parametre
	$dateObj = new DateTime($date);
	$dateObj->modify('first day of this month');
	$debut_du_mois = $dateObj->format('Y-m-d');

	$db = dbconnect();
	$query = " select sum(poids_cueilli) as somme from cueillette where id_parcelle = '$idParcelle' and date_de_cueillette BETWEEN '$debut_du_mois' AND '$date'";
	$resultat = mysqli_query($db, $query);
	$nombre  = mysqli_num_rows($resultat);
	if ($nombre > 0) {
		while ($donnees = mysqli_fetch_assoc($resultat)) {
			$valiny = $donnees['somme'];
		}
	}
	return $valiny;
}
function kiloRestant($idParcelle, $date)
{
	//kilo restant sur cette parcelle en cette date en parametre
	$kiloRehetra = kiloParParcelle($idParcelle, $date);
	$kiloCueilli = kiloCueilli($idParcelle, $date);
	return $kiloRehetra - $kiloCueilli;
}
function getCueilletteAll()
{
	//maka ny cueillette rehetra
	$db = dbconnect();
	$query = "select * from cueillette";
	$resultat = mysqli_query($db, $query);
	$nombre  = mysqli_num_rows($resultat);
	$cueillette = array();
	if ($nombre > 0) {
		while ($donnees = mysqli_fetch_assoc($resultat)) {
			$cueillette[] = array('id' => $donnees['id'], 'date_de_cueillette' => $donnees['date_de_cueillette'], 'id_cueilleur' => $donnees['id_cueilleur'], 'id_parcelle' => $donnees['id_parcelle'], 'poids_cueilli' => $donnees['poids_cueilli']);
		}
	}
	return $cueillette;
}
function getSommeDepense($dateDebut, $dateFin)
{
	//maka somme depense anelanelany reo date reo
	$db = dbconnect();
	$query = " select sum(valeur) as somme from depense where date_depense  BETWEEN '$dateDebut' AND '$dateFin'";
	$resultat = mysqli_query($db, $query);
	$nombre  = mysqli_num_rows($resultat);
	if ($nombre > 0) {
		while ($donnees = mysqli_fetch_assoc($resultat)) {
			$valiny = $donnees['somme'];
		}
	}
	return $valiny;
}
function getSommeDepenseRehetra()
{
	// return somme depense rehetra
	$db = dbconnect();
	$query = " select sum(valeur) as somme from depense";
	$resultat = mysqli_query($db, $query);
	$nombre  = mysqli_num_rows($resultat);
	if ($nombre > 0) {
		while ($donnees = mysqli_fetch_assoc($resultat)) {
			$valiny = $donnees['somme'];
		}
	}
	return $valiny;
}
function getPoidsTotalCueilliRehetra()
{
	//poids cueilli rehetra mintsy
	$db = dbconnect();
	$query = "select sum(poids_cueilli) as somme from cueillette";
	$resultat = mysqli_query($db, $query);
	$nombre  = mysqli_num_rows($resultat);
	if ($nombre > 0) {
		while ($donnees = mysqli_fetch_assoc($resultat)) {
			$somme = $donnees['somme'];
		}
	}
	return $somme;
}
function getPoidsTotalCueilliRehetraEntreDate($dateDebut, $dateFin)
{
	//poids cueilli rehetra entre 2 dates
	$db = dbconnect();
	$query = "select sum(poids_cueilli) as somme from cueillette where date_de_cueillette  BETWEEN '$dateDebut' AND '$dateFin'";
	$resultat = mysqli_query($db, $query);
	$nombre  = mysqli_num_rows($resultat);
	if ($nombre > 0) {
		while ($donnees = mysqli_fetch_assoc($resultat)) {
			$somme = $donnees['somme'];
		}
	}
	return $somme;
}
function getPoidsTotalRehetra()
{
	$date = date("Y-m-d");
	$parcelles = getAllParcelle();
	$somme = 0;
	for ($i = 0; $i < count($parcelles); $i++) {
		$somme += kiloParParcelle($parcelles[$i]['id'], $date);
	}
	return $somme;
}

function getPoidsRestantRehetra()
{
	$date = date("Y-m-d");
	$parcelles = getAllParcelle();
	$somme = 0;
	for ($i = 0; $i < count($parcelles); $i++) {
		$somme += kiloRestant($parcelles[$i]['id'], $date);
	}
	return $somme;
}
function getCoutDeRevient($dateDebut, $dateFin)
{
	$totalCueilli = getPoidsTotalCueilliRehetra($dateDebut, $dateFin);
	$sommeDepense = getSommeDepense($dateDebut, $dateFin);
	return $sommeDepense / $totalCueilli;
}
