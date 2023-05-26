
<?php
$id =@$_POST['id'];
$nazwa_klasy =@$_POST['nazwa_klasy'];


if(!$id || !$nazwa_klasy )
{
	echo 'nie podano wszystkich danych';
	exit;
}



$db = new mysqli ('localhost', 'root', '', 'szkola2');



if(mysqli_connect_errno())
{
	echo 'Blad: Nie udało się połączyć z bazą danych';
	exit;
}



$wstaw="INSERT INTO klasa VALUES ('$id', '$nazwa_klasy')";





$wynik = $db->query($wstaw);
if($wynik)
{
echo $db->affected_rows. 'klasa dodana';}
	else{
	echo 'nie dodano, blad';}

 
 
 
 echo '<br>--------------------------------------------------------------------------------------------------------------------------------------------<br>';
 $wynik2 = $db->query('select * from klasa');
 if ($wynik2->num_rows> 0){

	 while($row = $wynik2->fetch_assoc())
 {
 echo "<br>"."id".$row["id"].$row["nazwa"]."<br>";
}}
?>