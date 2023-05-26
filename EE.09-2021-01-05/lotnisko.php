 <!DOCTYPE html>
 <head>

    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="styl5.css">

</head>
<body>

<section id="banner1">
    <img src="zad5.png" alt="logo lotnisko">
</section>

<section id="banner2">
    <h1>Przyloty</h1>
</section>

<section id="benner3">
    <h3>przydatne linki</h3><br>
    <a href="kwerendy.txt">Pobierz</a>
</section>

<section id="blok_glowny">
 
<table>
<th> czas </th><th> kierunek </th><th> nr_resju </th><th> status_lotu </th>

<?php

$db = new mysqli("localhost","root","","egzamin");

$result = $db->query("select czas, kierunek, nr_rejsu, status_lotu from przyloty order by czas asc;");

while($row = $result->fetch_array())
{
echo "<tr><td>".$row['czas']."</td>";
echo "<td>".$row['kierunek']."</td>";
echo "<td>".$row['nr_rejsu']."</td>";
echo "<td>".$row['status_lotu']."</td></tr>";
}

$db->close();
?>

</table>
</section>

<section id="stopka1">
    <?php

        if(!isset($_COOKIE['pierwszy']))
        {
            setcookie('pierwszy',"ciastko", time() +(3600*2));
            echo "<p><b>Dzień dobry! Strona lotniska używa ciasteczek</b></p>";
        }
        else
        {
            echo "<p><i>Witaj ponownie na stronie lotnictwa</p></i>";
        }

    ?>  
</section>

<section id="stopka2">
Autor: 120938129048
</section>


</body>
