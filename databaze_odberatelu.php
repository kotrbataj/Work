<?php
			$jmeno_odberatele = $_POST['jmeno_odberatele'];
      $telefon_odberatele = $_POST['telefon_odberatele'];
      $adresa_odberatele = $_POST['adresa_odberatele'];
      $email_odberatele = $_POST['email_odberatele'];
      $mesto_a_psc_odberatele = $_POST['mesto_a_psc_odberatele'];
      $ico_odberatele = $_POST['ico_odberatele'];
      $dic_odberatele = $_POST['dic_odberatele'];
      $statni_prislusnost_odberatele = $_POST['statni_prislusnost_odberatele'];

			$jmeno_odberatele = strip_tags($jmeno_odberatele);
			$jmeno_odberatele = mysqli_real_escape_string($dblink,$jmeno_odberatele);
      $telefon_odberatele = strip_tags($telefon_odberatele);
			$telefon_odberatele = mysqli_real_escape_string($dblink,$telefon_odberatele);
      $adresa_odberatele = strip_tags($adresa_odberatele);
			$adresa_odberatele = mysqli_real_escape_string($dblink,$adresa_odberatele);
      $email_odberatele = strip_tags($email_odberatele);
			$email_odberatele = mysqli_real_escape_string($dblink,$email_odberatele);
      $mesto_a_psc_odberatele = strip_tags($mesto_a_psc_odberatele);
			$mesto_a_psc_odberatele = mysqli_real_escape_string($dblink,$mesto_a_psc_odberatele);
      $ico_odberatele = strip_tags($ico_odberatele);
			$ico_odberatele = mysqli_real_escape_string($dblink,$ico_odberatele);
      $dic_odberatele = strip_tags($dic_odberatele);
			$dic_odberatele = mysqli_real_escape_string($dblink,$dic_odberatele);
      $statni_prislusnost_odberatele = strip_tags($statni_prislusnost_odberatele);
			$statni_prislusnost_odberatele = mysqli_real_escape_string($dblink,$statni_prislusnost_odberatele);
		
		$sql = "INSERT INTO db_odberatele (jmeno_odberatele, telefon_odberatele, adresa_odberatele, email_odberatele, mesto_a_psc_odberatele, ico_odberatele, dic_odberatele, statni_prislusnost_odberatele ) VALUES ('$jmeno_odberatele', '$telefon_odberatele', '$adresa_odberatele', '$email_odberatele', '$mesto_a_psc_odberatele', '$ico_odberatele', '$dic_odberatele', '$statni_prislusnost_odberatele')";

		$vysledek = mysqli_query($dblink, $sql);
	
		if ($vysledek) {
			echo "Nový záznam přidán";
			echo "<meta http-equiv='refresh' content='2;url=index_formular.php' />";
		}  
?>
