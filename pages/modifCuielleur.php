<?php 
include "../inc/fonction.php";

$id=$_GET["id"];

$parcelle = getCueilleur($id);

echo json_encode($parcelle);
?>
