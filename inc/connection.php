<?php
	function dbconnect()
	{
		 $bdd =null;
    		if ($bdd===null) {
        		$bdd=mysqli_connect('localhost','root','','projetThe');
    		}
    		return $bdd;
	}
?>