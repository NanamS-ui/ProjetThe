<?php
include "../inc/fonction.php";
$salaire = getpoidsMinimumJournalier();
echo json_encode($salaire);
