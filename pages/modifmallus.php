<?php
include "../inc/fonction.php";
$salaire = $_POST['mallus'];
$message = updatemalus($salaire);

header("Location: salaire.php?message=" . urlencode($message));
