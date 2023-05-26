<?php
	$baza=mysqli_connect("localhost", "root", "", "ratownictwo");
	if(isset($_POST["zglos"])){
		$date=date('H:i:s');
		$wynik=$baza->query("INSERT INTO zgloszenia(ratownicy_id, dyspozytorzy_id, adres, pilne, czas_zgloszenia) VALUES('${_POST["zespolid"]}', '${_POST["dyspozytorzyid"]}', '${_POST["adres"]}', 0, '$date')");
		if($wynik)
		{
			$liczba=$baza->affected_rows;
			echo "Dodano $liczba wierszy.";
		}
		else
		{
			echo $baza->error;
		}
	}
	mysqli_close($baza);
?>