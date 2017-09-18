<?php
$sql = "SELECT * FROM kontakt";
$vysledek = mysqli_query($dblink,$sql);
if(mysqli_num_rows($vysledek) === 0){
    	  echo 'nic';
		}else{
	 	$radek=mysqli_fetch_array($vysledek,MYSQLI_ASSOC);
          $firma_d = $radek["firma"];
          $adresa_d = $radek["adresa"];
          $mesto_d = $radek["mesto"];
          $stat_d = $radek["stat"];
          $telefon_d = $radek["telefon"];
          $email_d = $radek["email"];
          $ico_d = $radek["ico"];
          $dic_d = $radek["dic"];
          $bankovni_spojeni_d = $radek["bankovni_spojeni"];
        }
?>