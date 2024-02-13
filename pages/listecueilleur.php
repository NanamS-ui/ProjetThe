<?php 
include "../inc/fonction.php";
$parcelles=getAllCueilleur();
echo json_encode($parcelles);

?>