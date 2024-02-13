<?php
include '../inc/fonction.php';
$date = $_GET["date"];
$montantRestant = getPoidsRestantRehetra($date);
echo json_encode($montantRestant);
