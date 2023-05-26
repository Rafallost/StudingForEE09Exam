<?php
$baza=new mysqli('localhost','root','','wedkowanie2');

$lowisko=$_POST['lowisko'];
$data=$_POST['data'];
$sedzia=$_POST['sedzia'];

$wynik=$baza->query("INSERT INTO zawody_wedkarskie(Karty_wedkarskie_id,Lowisko_id,data_zawodow,sedzia) values(0, '$lowisko', '$data', '$sedzia');");

if($wynik)
echo 'Dodało:'.$baza->affected_rows.' wiersz';
else
echo' ALE NIE ZROBIłO SIĘ';

$baza->close();

?>