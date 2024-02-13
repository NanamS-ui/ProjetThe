<?php 
include "../inc/fonction.php";
$id=$_GET['id'];
$restant=kiloParParcelle($id);
echo json_encode($restant);
?>