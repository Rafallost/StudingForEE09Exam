<!DOCTYPE html>
<head>
    <meta charest="UTF-8">
    <title>Lista przyjaciół</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>

<section id="baner">
    <h1>Portal Społecznościowy - moje konto</h1>
</section>

<section id="glowny">
    <h2>Moje zainsteresowania</h2>

    <ul>
        <li>muzyka</li>
        <li>film</li>
        <li>komputery</li>
    </ul>

    <h2>Moi znajomi</h2>

    <?php

    $db = new mysqli("localhost","root","","dane");

    $zapytanie = $db->query("SELECT imie, nazwisko, opis, zdjecie from osoby where Hobby_id=1 or Hobby_id=2 or Hobby_id=6");

    while($result=$zapytanie->fetch_array())
    {
    echo "<section class='zdjecie'><img src='".$result['zdjecie']."' alt='przyjaciel'></section>";

    echo "<section class='opis'>";
    echo "<h3>".$result['imie']." ".$result['nazwisko']."</h3>";
    echo "<p>ostatni wpis: ".$result['opis']."</p></section>";
    
    echo "<section class='linia'><hr></section>";
    }

    $db->close();

    ?>

</section>

<section id="stopka1">
    Stronę wykonał: 1902741247123
</section>

<section id="stopka2">
<a href="mailto:ja@portal.pl">napisz do mnie</a>
</section>

</body>