<?php 
$id=$_POST["id_parcelle"];
$surface=$_POST['surface'];
$var=$_POST["var"];
$message = updateParcelle($id,$surface,$var);
header("Location: parcelle.php?message=" . urlencode($message));
?>