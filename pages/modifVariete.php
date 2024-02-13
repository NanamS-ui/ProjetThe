<?php 
include "../inc/fonction.php";

$id=$_GET["id"];

$parcelle = getVarieteDeThe($id);

echo json_encode($parcelle);
?>
