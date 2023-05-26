<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Warzywniak</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>

<section id="lewy">

    <h1>Internetowy sklep z eko-warzywami</h1>

</section>

<section id="prawy">

    <ol>
        <li>warzywa</li>
        <li>owoce</li>
        <li><a href="https://terapiasokami.pl/" target="_blank">soki</a></li>
    </ol>

</section>

<section id="glowny">

<?php

    $db = new mysqli("localhost","root","","sklep");

    $result = $db->query("select nazwa, ilosc, opis, cena, zdjecie from produkty where rodzaje_id=1 || rodzaje_id=2;");

    while($wynik = $result->fetch_array())
    {
        echo "<section class='produkt'>";
        echo "<img src=".$wynik["zdjecie"]." alt='warzywniak'>";
        echo "<h5>".$wynik["nazwa"]."</h5>";
        echo "<p>opis: ".$wynik["opis"]."</p>";
        echo "<p>na stanie: ".$wynik["ilosc"]."</p>";
        echo "<h2>".$wynik["cena"]."</h2>";
        echo "</section>";

    }
?>

</section>

<section id="stopka">

    <form action="sklep.php" method="POST">
    Nazwa: <input type="text" name="nazwa">
    Cena: <input type="text" name="prize">
    <input type="submit" value="Dodaj produkt" name="jorge">
    </form>

    <?php

    $nazwa=@$_POST["nazwa"];
    $cena=@$_POST["prize"];


    
      if(null!==@$_POST["jorge"])
       {
           $xd = $db->query("insert into produkty(Rodzaje_id,Producenci_id,nazwa,ilosc,cena,zdjecie) values(1,2,'".$nazwa."',10,".$cena.",'owoce.jpg')");
       }
        

        $db->close();
    ?>

    Stronę wykonał: 00000000000

</section>

</body>