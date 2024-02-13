<?php 
include "../inc/fonction.php";
$parcelles=getCategorieDepenses();
echo json_encode($parcelles);

?>