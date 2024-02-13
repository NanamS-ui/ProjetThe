<?php
include '../inc/fonction.php';
if (isset($_GET['mois'])) {
    enleverLaRegenerationDeTousLesMois();
    $moisSelectionnes = $_GET['mois'];
    for ($i = 0; $i < count($moisSelectionnes); $i++) {
        $reponse = regenerationDuLeMois($moisSelectionnes[$i]);
    }
} else {
    $reponse = "Aucun mois sélectionné.";
}
header("Location: regenerer.php?message=" . urlencode($reponse));
