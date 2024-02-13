<?php
include "../inc/fonction.php";
$date = $_GET['date'];
$prevision = getListPrevision($date);
echo json_encode($prevision);
