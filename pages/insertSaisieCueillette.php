<?php
include "../inc/fonction.php";

$date = $_GET['date'];
$cueilleur = $_GET['cueilleur'];
$parcelle = $_GET['parcelle'];
$poids = $_GET['poids'];

$message = insertCueillette($date, $cueilleur, $parcelle, $poids);

header("Location: saisieCueillette.php?message=" . urlencode($message));
