<?php
    $server='localhost';
		$uzivatel="root";
		$heslo="";
		$databaze="itsd_info";
		$dblink = mysqli_connect($server,$uzivatel,$heslo,$databaze)
					or die("Server nenalezen");
          mysqli_query($dblink, "SET NAMES utf8");
?>    