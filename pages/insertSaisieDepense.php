<?php
include "../inc/fonction.php";

$date = $_GET['date'];
$categorie = $_GET['categorie'];
$montant = $_GET['montant'];

$message = insertdepense($date, $categorie, $montant);

header("Location: saisieDepense.php?message=" . urlencode($message));
