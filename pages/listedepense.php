<?php 
include "../inc/fonction.php";
$parcelles=getAllDepense();
echo json_encode($parcelles);

?>