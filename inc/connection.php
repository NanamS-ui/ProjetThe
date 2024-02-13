<?php
function dbconnect()
{
	$bdd = null;
	if ($bdd === null) {
		$bdd = mysqli_connect('172.20.0.167', 'ETU002471', 'cwPgyO28x9f0', 'db_p16_ETU002471');
	}
	return $bdd;
}
