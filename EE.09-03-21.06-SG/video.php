<!DOCTYPe html>
<head>
    <meta charset="utf-8">
    <title>Video On Demand</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>

<section id="banner1">
    <h1>Internetowa wypożyczalnia filmów</h1>
</section>

<section id="banner2">
    <table>
    <tr>
            <td>kryminał</td>
            <td>horror</td>
            <td>przygodowy</td>
    </tr>
    <tr>
             <td>20</td>
             <td>30</td>
             <td>20</td>
    </tr>
    </table>
</section>

<section id="polecamy">
    <h3>Polecamy</h3>
    
    <?php
        $db = new mysqli("localhost","root","","filmy");

        $zapytanie = $db->query("select id, nazwa, opis, zdjecie from produkty where id = 18 || id = 22 || id = 23 || id = 25;");

        $ile = mysqli_num_rows($zapytanie);
        for($i=0; $i<$ile; $i++)
        {
            $wynik = $zapytanie->fetch_array();
            echo "<section class=nowe><h4>".$wynik["id"].". ".$wynik["nazwa"]."<img src='".$wynik["zdjecie"]."' alt='film'> </h4>";
            echo "<p>".$wynik["opis"]."</p></section>";
        }
    ?>

</section>

<section id="filmy">

    <h3>Filmy fantastyczne</h3>
     
    <?php 

    $zapytanie2 = $db->query("SELECT id, nazwa, opis, zdjecie from produkty where Rodzaje_id = 12;");

    while($result = $zapytanie2->fetch_array())
    {
        echo "<section class=nowe><h4>".$wynik["id"].". ".$wynik["nazwa"]."<img src=".$wynik["zdjecie"]." alt='film'></h4>";
        echo "<p>".$wynik["opis"]."</p></section>";
    }

    ?>

</section>

<footer>

    <form action="video.php" method="POST">
    Usuń film nr:<input type="number" name="nr"><input type="submit" value="Usuń film">
    </form>

    <?php
        $id = @$_POST['nr'];

        $usun = $db->query("DELETE from produkty where id = ".$id.";");

        $db->close();
    ?>

Stronę wykonał: <a href="mailo:ja@poczta.com">1203213121</a>

</footer>
</body>
