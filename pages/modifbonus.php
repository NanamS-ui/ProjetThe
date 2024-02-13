<?php
include "../inc/fonction.php";
$salaire = $_POST['bonus'];
$message = updatebonus($salaire);

header("Location: salaire.php?message=" . urlencode($message));
