<!doctype html>
<head>
    <meta  charset="UTF-8">
    <title>Wedkujemy</title>
    <link rel="stylesheet" href="styl_1.css">
</head>
<body>

<header>
    <h1>Portal dla wendkarzy</h1>
</header>

<section id="lewy">
    <h2>Ryby drapieżne naszych wód</h2>

    <ul>

    <?php
 $db = new mysqli('localhost:3306','root','','wendkowanie');
    
    if(mysqli_connect_errno())
    {
        echo 'Blad: Polaczenie z baza danych nie powiodlo się';
        exit;
    }

    $score = $db->query("select nazwa, wystepowanie from ryby;");
    
    while($row = $score->fetch_array())
        echo "<li>".$row["nazwa"].", występowanie: ".$row["wystepowanie"]."</li>";
    

    $db->close();
?>
</ul>

</section>

<section id="prawy">
    <img src="ryba1.jpg" alt="Sum"><br>
    <a href="kwerendy.txt" download="kwerendy.txt">Pobierz kwerendy</a>
</section>



</body>

<footer>
<p>Stronę wykonał: 12312345657</p>
</footer>