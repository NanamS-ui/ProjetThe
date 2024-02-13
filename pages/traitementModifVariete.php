<?php
include '../inc/fonction.php';
$id = $_POST["id"];
$nom = $_POST['nom'];
$occupation = $_POST["occupation"];
$rendement = $_POST["rendement"];
$prix = $_POST["prix"];
$message = updateVarieteDeThe($id, $nom, $occupation, $rendement, $prix);
header("Location: variete.php?message=" . urlencode($message));
