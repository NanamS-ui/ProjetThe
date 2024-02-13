<?php 
include "../inc/fonction.php";

$id=$_GET["id"];

$parcelle = getParcelleParId($id);

echo json_encode($parcelle);
?>
