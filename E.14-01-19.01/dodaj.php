<?php

$db = new mysqli("localhost:3306", "root", "", "fotograf");

if(mysqli_connect_errno())
{
echo "nie ma połączenia z bazą danych";
exit;
}

$tytul= @$_POST['tytul'];
$gatunek = @$_POST['gatunek'];
$rok = @$_POST['rok'];
$ocena = @$_POST['ocena'];

$wynik = $db->query("insert into filmy(tytul, gatunki_id, rok, ocena)values('".$tytul."',".$gatunek.", ".$rok.",".$ocena.");");

echo "Film ".$tytul." został dodany do bazy";

$db->close();

?>