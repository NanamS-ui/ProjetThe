<?php
include '../inc/fonction.php';
$date = $_GET["date"];
$montantRestant = getMontantPoidsRestant($date);
echo json_encode($montantRestant);
