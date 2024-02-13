<?php 
include "../inc/fonction.php";
$variete=getAllVarieteDeThe();
echo json_encode($variete);

?>