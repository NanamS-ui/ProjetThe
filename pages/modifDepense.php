<?php 
include "../inc/fonction.php";

$id=$_GET["id"];

$parcelle = getDepense($id);

echo json_encode($parcelle);
?>
