<?php
include "../inc/fonction.php";
$salaire = getMalus();
echo json_encode($salaire);
