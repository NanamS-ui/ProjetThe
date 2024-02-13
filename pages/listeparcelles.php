<?php 
include "../inc/fonction.php";
$parcelles=getAllParcelle();
echo json_encode($parcelles);

?>