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
			$variete_du_the[] = array('id' => $donnees['id'], 'nom' => $donnees['nom'], 'occupation' => $donnees['occupation'], 'rendement' => $donnees['rendement'], 'prixDeVente' => $donnees['prixDeVente']);
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
/*function insereVarieteDetThe($nom, $occupation, $rendement,$prixDeVente)
{
	//insertion d' un variete de the
	$db = dbconnect();
	$query = "insert into variete_du_the values(null,'$nom','$occupation','$rendement','$prixDeVente')";
	mysqli_query($db, $query);
	return "insertion effectuer avec succes";
}*/
function updateVarieteDeThe($id, $nom, $occupation, $rendement, $prixDeVente)
{
	//update d' un variete de the
	$db = dbconnect();
	$query = "update variete_du_the set nom='$nom', occupation='$occupation', rendement='$rendement',prixDeVente = '$prixDeVente' where id = '$id'";
	mysqli_query($db, $query);
	return "update avec succes";
}
function getVarieteDeThe($id)
{
	//prend tous les variete de the
	$db = dbconnect();
	$query = "select * from variete_du_the where id='$id'";
	$resultat = mysqli_query($db, $query);
	$nombre  = mysqli_num_rows($resultat);
	$variete_du_the = array();
	if ($nombre > 0) {
		while ($donnees = mysqli_fetch_assoc($resultat)) {
			$variete_du_the[] = array('id' => $donnees['id'], 'nom' => $donnees['nom'], 'occupation' => $donnees['occupation'], 'rendement' => $donnees['rendement'], 'prixDeVente' => $donnees['prixDeVente']);
		}
	}
	return $variete_du_the[0];
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
function getCueilleur($id)
{
	//prend tous les variete de the
	$db = dbconnect();
	$query = "select * from cueilleur where id='$id'";
	$resultat = mysqli_query($db, $query);
	$nombre  = mysqli_num_rows($resultat);
	$cueilleur = array();
	if ($nombre > 0) {
		while ($donnees = mysqli_fetch_assoc($resultat)) {
			$cueilleur[] = array('id' => $donnees['id'], 'nom' => $donnees['nom'], 'genre' => $donnees['genre'], 'date_naissance' => $donnees['date_naissance']);
		}
	}
	return $cueilleur[0];
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
function getDepense($id)
{
	//prend tous les cueilleur
	$db = dbconnect();
	$query = "select depense.id as id,date_depense,categorieDepense.categorie as description,valeur from depense join categorieDepense on categorieDepense.id = depense.id_categorie where depense.id = '$id'";
	$resultat = mysqli_query($db, $query);
	$nombre  = mysqli_num_rows($resultat);
	$depense = array();
	if ($nombre > 0) {
		while ($donnees = mysqli_fetch_assoc($resultat)) {
			$depense[] = array('id' => $donnees['id'], 'date_depense' => $donnees['date_depense'], 'description' => $donnees['description'], 'valeur' => $donnees['valeur']);
		}
	}
	return $depense[0];
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
function updateSalaire($montant)
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
function kiloParParcelleDepuisLaRegeneration($id, $date)
{ //maka nombre de kilo par parcelle depuis la regeneration
	$parcelle = getParcelleParId($id);
	$nombreDemois = getNombreDeMois($date);
	$variete_du_the = getVarieteDuTheParId($parcelle['idVarieteDuThe']);
	$surfacePied = $variete_du_the['occupation'];
	$surfaceParcelle = $parcelle['surface'];
	$nombreDePied = $surfaceParcelle / $surfacePied;
	$rendement = $variete_du_the['rendement'];
	return  $rendement * $nombreDePied * $nombreDemois;
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
function kiloCueilliDepuisLaRegeneration($idParcelle, $date)
{
	//kilo cuilli depuis la derniere date de regeneration
	$dateObj = new DateTime($date);
	$debut_du_mois = getLaDateDeRegenererFarany($date);
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
	//$kiloRehetra = kiloParParcelle($idParcelle, $date);
	//$kiloCueilli = kiloCueilli($idParcelle, $date);
	$kiloRehetra = kiloParParcelleDepuisLaRegeneration($idParcelle, $date);
	$kiloCueilli = kiloCueilliDepuisLaRegeneration($idParcelle, $date);
	return $kiloRehetra - $kiloCueilli;
}


function getMontantPoidsRestant($date)
{
	//maka le montant amle sary io
	$parcelles = getAllParcelle();
	$somme = 0;
	for ($i = 0; $i < count($parcelles); $i++) {
		$somme += kiloRestant($parcelles[$i]['id'], $date) * prixDeVenteParParcelle($parcelles[$i]['id']);
	}
	return $somme;
}

function getListPrevision($date)
{
	//list provision
	$parcelles = getAllParcelle();
	$resultat = array();
	for ($i = 0; $i < count($parcelles); $i++) {
		$resultat[] = array('id' => $parcelles[$i]['id'], 'image' => imageParParcelle($parcelles[$i]['id']), 'poidsRestant' => kiloRestant($parcelles[$i]['id'], $date), 'nombreDePied' => getNombreDePied($parcelles[$i]['id']), 'nomVarieteDuThe' => $parcelles[$i]['nom'], 'surface' => $parcelles[$i]['surface']);
	}
	return $resultat;
}
function getNombreDePied($id)
{
	$parcelle = getParcelleParId($id);
	$variete_du_the = getVarieteDuTheParId($parcelle['idVarieteDuThe']);
	$surfacePied = $variete_du_the['occupation'];
	$surfaceParcelle = $parcelle['surface'];
	$nombreDePied = $surfaceParcelle / $surfacePied;
	return $nombreDePied;
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
		$somme += kiloParParcelleDepuisLaRegeneration($parcelles[$i]['id'], $date);
	}
	return $somme;
}

function getPoidsRestantRehetra($date)
{
	//$date = date("Y-m-d");
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
function getRegenerationAll()
{
	//maka ny mois regeneration rehetra
	$db = dbconnect();
	$query = "select * from moisDeRegeneration";
	$resultat = mysqli_query($db, $query);
	$nombre  = mysqli_num_rows($resultat);
	$moisDeRegeneration = array();
	if ($nombre > 0) {
		while ($donnees = mysqli_fetch_assoc($resultat)) {
			$moisDeRegeneration[] = array('id' => $donnees['id'], 'moisDeRegeneration' => $donnees['moisDeRegeneration'], 'isRegenerer' => $donnees['isRegenerer']);
		}
	}
	return $moisDeRegeneration;
}
function getMoisDeRegeneration()
{
	//maka ny mois regeneration rehetra- izay mi regenerer iany
	$db = dbconnect();
	$query = "select * from moisDeRegeneration where isRegenerer = 1";
	$resultat = mysqli_query($db, $query);
	$nombre  = mysqli_num_rows($resultat);
	$moisDeRegeneration = array();
	if ($nombre > 0) {
		while ($donnees = mysqli_fetch_assoc($resultat)) {
			$moisDeRegeneration[] = array('id' => $donnees['id'], 'moisDeRegeneration' => $donnees['moisDeRegeneration'], 'isRegenerer' => $donnees['isRegenerer']);
		}
	}
	return $moisDeRegeneration;
}
function regenerationDuLeMois($id)
{
	//avadika miregenerer le mois
	$db = dbconnect();
	$query = "update moisDeRegeneration set isRegenerer=1 where id = '$id'";
	mysqli_query($db, $query);
	return "regeneration avec succes";
}
function enleverLaRegeneration($id)
{
	//avadika tsy miregenerer le mois
	$db = dbconnect();
	$query = "update moisDeRegeneration set isRegenerer=0 where id = '$id'";
	mysqli_query($db, $query);
}
function enleverLaRegenerationDeTousLesMois()
{
	//avadika tsy miregener daoly le mois
	$mois = getRegenerationAll();
	for ($i = 0; $i < count($mois); $i++) {
		enleverLaRegeneration($mois[$i]['id']);
	}
}
function makaMoisDeregenerationAvant($date)
{
	//makaMoisDeRegenerationTeoAloha
	$mois = date("n", strtotime($date));
	$db = dbconnect();
	$query = "select max(id) as id from moisDeRegeneration where id<='$mois' and isRegenerer = 1";
	$resultat = mysqli_query($db, $query);
	$nombre  = mysqli_num_rows($resultat);
	if ($nombre > 0) {
		while ($donnees = mysqli_fetch_assoc($resultat)) {
			$moisAvant = $donnees['id'];
		}
		return $moisAvant;
	} else {
		$query = "select max(id) as id from moisDeRegeneration where id>'$mois' and isRegenerer = 1";
		$resultat = mysqli_query($db, $query);
		$nombre  = mysqli_num_rows($resultat);
		if ($nombre > 0) {
			while ($donnees = mysqli_fetch_assoc($resultat)) {
				$moisAvant = $donnees['id'];
			}
			return $moisAvant;
		}
	}
}
function getLaDateDeRegenererFarany($date)
{
	//maka date farany de regeneration
	$moisFarany = makaMoisDeregenerationAvant($date);
	$mois = date("n", strtotime($date));
	$jours = 01;
	if ($moisFarany <= $mois) {
		$annee = date("Y", strtotime($date));

		$dateTimestamp = mktime(0, 0, 0, $moisFarany, $jours, $annee);
		$dateFarany = date("Y-m-d", $dateTimestamp);
		//return $dateFarany;
	} else {
		$annee = date("Y", strtotime($date)) - 1;

		$dateTimestamp = mktime(0, 0, 0, $moisFarany, $jours, $annee);
		$dateFarany = date("Y-m-d", $dateTimestamp);
		//return $dateFarany;
	}
	$jourVoalohany = 01;
	$moisVoalohany = 01;
	$anneeVoalohany = 2023;
	$dateTimestampVoalohany = mktime(0, 0, 0, $moisVoalohany, $jourVoalohany, $anneeVoalohany);
	$dateVoalohany = date("Y-m-d", $dateTimestampVoalohany);
	if ($dateFarany < $dateVoalohany) {
		$dateFarany = $dateVoalohany;
	}
	return $dateFarany;
}
function getNombreDeMois($date)
{
	//maka nombre de mois depuis la regeneration
	$dateFarany = getLaDateDeRegenererFarany($date);
	$db = dbconnect();
	$query = "select timestampdiff(month,'$dateFarany','$date')as difference;";
	$resultat = mysqli_query($db, $query);
	$nombre  = mysqli_num_rows($resultat);
	if ($nombre > 0) {
		while ($donnees = mysqli_fetch_assoc($resultat)) {
			$nombreDemois[] = $donnees['difference'];
		}
	}
	if ($nombreDemois[0] == 0) {
		return 1;
	}
	return $nombreDemois[0];
}
function getpoidsMinimumJournalier()
{ //maka poidsMinimumJournalier
	$db = dbconnect();
	$query = "select * from poidsMinimumJournalier ";
	$resultat = mysqli_query($db, $query);
	$nombre  = mysqli_num_rows($resultat);
	if ($nombre > 0) {
		while ($donnees = mysqli_fetch_assoc($resultat)) {
			$valiny = $donnees['poids'];
		}
	}
	return $valiny;
}
function updatepoidsMinimumJournalier($poids)
{
	//update poidsMinimumJournalier
	$db = dbconnect();
	$query = "update poidsMinimumJournalier set poids='$poids'";
	mysqli_query($db, $query);
	return "update avec succes";
}

function getmalus()
{ //maka malus
	$db = dbconnect();
	$query = "select * from malus ";
	$resultat = mysqli_query($db, $query);
	$nombre  = mysqli_num_rows($resultat);
	if ($nombre > 0) {
		while ($donnees = mysqli_fetch_assoc($resultat)) {
			$valiny = $donnees['pourcentage'];
		}
	}
	return $valiny;
}
function updatemalus($pourcentage)
{
	//update malus
	$db = dbconnect();
	$query = "update malus set pourcentage='$pourcentage'";
	mysqli_query($db, $query);
	return "update avec succes";
}

function getbonus()
{ //maka bonus
	$db = dbconnect();
	$query = "select * from bonus ";
	$resultat = mysqli_query($db, $query);
	$nombre  = mysqli_num_rows($resultat);
	if ($nombre > 0) {
		while ($donnees = mysqli_fetch_assoc($resultat)) {
			$valiny = $donnees['pourcentage'];
		}
	}
	return $valiny;
}
function updatebonus($pourcentage)
{
	//update bonus
	$db = dbconnect();
	$query = "update bonus set pourcentage='$pourcentage'";
	mysqli_query($db, $query);
	return "update avec succes";
}
function getSommeCuilletteEnUnJours($idCueilleur, $date)
{
	//maka poids cueillit en une journee
	$db = dbconnect();
	$query = "select date_de_cueillette,sum(poids_cueilli) as somme from cueillette where id_cueilleur='$idCueilleur' and date_de_cueillette ='$date'";
	$resultat = mysqli_query($db, $query);
	$nombre  = mysqli_num_rows($resultat);
	$cueillette = array();
	if ($nombre > 0) {
		while ($donnees = mysqli_fetch_assoc($resultat)) {
			$cueillette = array('date_de_cueillette' => $donnees['date_de_cueillette'], 'somme' => $donnees['somme'],);
		}
	}
	return $cueillette;
}
function getPaiementParJoursCueilleur($idCueilleur, $date)
{
	//maka list cueillit en une journee
	$sommeCueillette = getSommeCuilletteEnUnJours($idCueilleur, $date);
	$poidsMin = getpoidsMinimumJournalier();
	$salaire = getSalaire();
	$bonus = getbonus();
	$malus = getmalus();
	$cueilleur = getCueilleur($idCueilleur);
	if ($sommeCueillette['somme'] < $poidsMin) {
		$anesorana = $salaire * $malus / 100;
		$resultat = array('date' => $sommeCueillette['date_de_cueillette'], 'nomCueilleur' => $cueilleur['nom'], 'poids' => $sommeCueillette['somme'], 'bonus' => 0, 'malus' => $anesorana, 'montantPaiement' => $salaire - $anesorana);
		return $resultat;
	} else if ($sommeCueillette['somme'] > $poidsMin) {
		$anampiana = $salaire * $bonus / 100;
		$resultat = array('date' => $sommeCueillette['date_de_cueillette'], 'nomCueilleur' => $cueilleur['nom'], 'poids' => $sommeCueillette['somme'], 'bonus' => $anampiana, 'malus' => 0, 'montantPaiement' => $salaire + $anampiana);
		return $resultat;
	} else {
		$resultat = array('date' => $sommeCueillette['date_de_cueillette'], 'nomCueilleur' => $cueilleur['nom'], 'poids' => $sommeCueillette['somme'], 'bonus' => 0, 'malus' => 0, 'montantPaiement' => $salaire);
		return $resultat;
	}
}
function getAllListPaiementDeChaqueCueilleur($idCueilleur, $dateDebut, $dateFin)
{
	//get listPaiement pour chaque utilisateur
	$resultat = array();
	$date = strtotime($dateDebut);
	$dateFin = strtotime($dateFin);
	while ($date <= $dateFin) {
		$resultat[] = getPaiementParJoursCueilleur($idCueilleur, date("Y-m-d", $date));
		$date = strtotime("+1 days", $date);
	}
	return $resultat;
}
function getSommePaiementParCueilleur($idCueilleur, $dateDebut, $dateFin)
{
	//maka somme anle resulat paiement
	$resultat = getAllListPaiementDeChaqueCueilleur($idCueilleur, $dateDebut, $dateFin);
	$sommeBonus = 0;
	$sommeMalus = 0;
	$sommePaiement = 0;
	$sommePoids = 0;
	for ($i = 0; $i < count($resultat); $i++) {
		$sommeBonus += $resultat[$i]['bonus'];
		$sommeMalus += $resultat[$i]['malus'];
		$sommePaiement += $resultat[$i]['montantPaiement'];
		$sommePoids += $resultat[$i]['poids'];
	}
	if ($sommePaiement < 0) {
		$sommePaiement = 0;
	}
	$valiny = array('date' => 'Total', 'nomCueilleur' => $resultat[0]['nomCueilleur'], 'poids' => $sommePoids, 'bonus' => $sommeBonus, 'malus' => $sommeMalus, 'montantPaiement' => $sommePaiement);
	return $valiny;
}
function p($dateDebut, $dateFin)
{
	$resultat = array();
	$date = strtotime($dateDebut);
	$dateFin2 = strtotime($dateFin);
	$cueilleurs = getAllCueilleur();
	for ($i = 0; $i < count($cueilleurs); $i++) {
		while ($date <= $dateFin2) {
			$resultat[] = getPaiementParJoursCueilleur($cueilleurs[$i]['id'], date("Y-m-d", $date));
			$date = strtotime("+1 days", $date);
		}
		$resultat[] = getSommePaiementParCueilleur($cueilleurs[$i]['id'], $dateDebut, $dateFin);
	}

	return $resultat;
}
function nombreSaison()
{
	//get nombre de moiss de regeneration dans une annee
	$db = dbconnect();
	$query = "select sum(isRegenerer)  as somme from moisDeRegeneration ";
	$resultat = mysqli_query($db, $query);
	$nombre  = mysqli_num_rows($resultat);
	if ($nombre > 0) {
		while ($donnees = mysqli_fetch_assoc($resultat)) {
			$valiny = $donnees['sommme'];
		}
	}
	return $valiny;
}
function etatMois($dateDebut, $dateFin)
{
	$mois = date("n", strtotime($dateDebut));
	$mois2 = date("n", strtotime($dateFin));
	if ($mois < $mois2) {
		return -1;
	} else if ($mois == $mois2) {
		return 0;
	} else {
		return 1;
	}
}
function nombreAnnee($dateDebut, $dateFin)
{
	$db = dbconnect();
	$query = "select timestampdiff(year,'$dateDebut','$dateDebut')as differnce ";
	$resultat = mysqli_query($db, $query);
	$nombre  = mysqli_num_rows($resultat);
	if ($nombre > 0) {
		while ($donnees = mysqli_fetch_assoc($resultat)) {
			$valiny = $donnees['differnce'];
		}
	}
	return $valiny;
}
function getNombreDeRegenerationEntre2Mois($dateDebut, $dateFin)
{
	$mois = date("n", strtotime($dateDebut));
	$mois2 = date("n", strtotime($dateFin));
	$valiny = 0;
	if (etatMois($dateDebut, $dateFin) == -1) {
		$db = dbconnect();
		$query = "select sum(isRegenerer)  as somme from moisDeRegeneration where id >='$mois' and id<='$mois2'";
		$resultat = mysqli_query($db, $query);
		$nombre  = mysqli_num_rows($resultat);
		if ($nombre > 0) {
			while ($donnees = mysqli_fetch_assoc($resultat)) {
				$valiny = $donnees['somme'];
			}
		}
	} else if (etatMois($dateDebut, $dateFin) == 0) {
		$valiny = 1;
	}
	if (etatMois($dateDebut, $dateFin) == 1) {
		$db = dbconnect();
		$query = "select sum(isRegenerer)  as somme from moisDeRegeneration where id >='$mois' and id<='12'";
		$resultat = mysqli_query($db, $query);
		$nombre  = mysqli_num_rows($resultat);
		if ($nombre > 0) {
			while ($donnees = mysqli_fetch_assoc($resultat)) {
				$valiny = $donnees['somme'];
			}
		}
		$query = "select sum(isRegenerer)  as somme from moisDeRegeneration where id <='$mois2' and id>='1'";
		$resultat = mysqli_query($db, $query);
		$nombre  = mysqli_num_rows($resultat);
		if ($nombre > 0) {
			while ($donnees = mysqli_fetch_assoc($resultat)) {
				$valiny += $donnees['somme'];
			}
		}
	}
	if (nombreAnnee($dateDebut, $dateFin) > 0) {
		$nombreDeSaison = nombreSaison();
	} else {
		$nombreDeSaison = 0;
	}
	return $nombreDeSaison + $valiny;
}
function getMontantDeVenteParParcelle($id, $dateDebut, $dateFin)
{
	//maka montant des ventes par parcelle
	$nombreDeMois = getNombreDeRegenerationEntre2Mois($dateDebut, $dateFin);
	$parcelle = getParcelleParId($id);
	$variete_du_the = getVarieteDuTheParId($parcelle['idVarieteDuThe']);
	$surfacePied = $variete_du_the['occupation'];
	$surfaceParcelle = $parcelle['surface'];
	$nombreDePied = $surfaceParcelle / $surfacePied;
	$rendement = $variete_du_the['rendement'];
	return  $rendement * $nombreDePied * $nombreDemois;
}
function prixDeVenteParParcelle($idParcelle)
{
	$db = dbconnect();
	$query = "select parcelle.id,prixDeVente from variete_du_the join parcelle on parcelle.idVarieteDuThe=variete_du_the.id where parcelle.id = '$idParcelle'";
	$resultat = mysqli_query($db, $query);
	$nombre  = mysqli_num_rows($resultat);
	if ($nombre > 0) {
		while ($donnees = mysqli_fetch_assoc($resultat)) {
			$cueillette = $donnees['prixDeVente'];
		}
	}
	return $cueillette;
}
function imageParParcelle($idParcelle)
{
	$db = dbconnect();
	$query = "select parcelle.id,image from variete_du_the join parcelle on parcelle.idVarieteDuThe=variete_du_the.id where parcelle.id = '$idParcelle'";
	$resultat = mysqli_query($db, $query);
	$nombre  = mysqli_num_rows($resultat);
	if ($nombre > 0) {
		while ($donnees = mysqli_fetch_assoc($resultat)) {
			$cueillette = $donnees['image'];
		}
	}
	return $cueillette;
}
function getMontantDeVenteTotal($dateDebut, $dateFin)
{
	//maka montant des vente total entre 2 date
	$parcelles = getAllParcelle();
	$somme = 0;
	for ($i = 0; $i < count($parcelles); $i++) {
		$somme += kiloParParcelleDepuisLaRegeneration($parcelles[$i]['id'], $dateDebut, $dateFin) * prixDeVenteParParcelle($parcelles[$i]['id']);
	}
	return $somme;
}
function getBenefice($dateDebut, $dateFin)
{
	$sommeDepense = getSommeDepense($dateDebut, $dateFin);
	$prixDeVente = getMontantDeVenteTotal($dateDebut, $dateFin);
	return $prixDeVente - $sommeDepense;
}
