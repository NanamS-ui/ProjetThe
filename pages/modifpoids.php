<?php
include "../inc/fonction.php";
$salaire = $_POST['poids'];
$message = updatepoidsMinimumJournalier($salaire);

header("Location: salaire.php?message=" . urlencode($message));
