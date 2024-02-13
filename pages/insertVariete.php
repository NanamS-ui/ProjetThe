<?php
include "../inc/fonction.php";

$nom = $_POST['nom'];
$occupation = $_POST['occupation'];
$rendement = $_POST['rendement'];
$prix = $_POST['prix'];

$message = insereVarieteDetThe($nom, $occupation, $rendement, $prix);

header("Location: variete.php?message=" . urlencode($message));
