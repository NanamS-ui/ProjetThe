<?php 
include "../inc/fonction.php";
$salaire=getSalaire();
echo json_encode($salaire);
?>