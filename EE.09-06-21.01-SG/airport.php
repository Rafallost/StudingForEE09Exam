<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Odloty samolotów</title>
    <link rel="stylesheet" href="styl6.css">
</head>
<body>

    <section id="banner1">

        <h2>Odloty z lotniska</h2>

    </section>

    <section id="banner2">

        <img src="zad6.png" alt="logotyp">

    </section>

    <section id="glowny">

        <h4>Tabela odlotów</h4>

        <table>
            <tr>
                <th>LP.</th>
                <th>NUMER REJSU</th>
                <th>CZAS</th>
                <th>KIERUNEK</th>
                <th>STATUS</th>
            </tr>
            <?php

                $db = new mysqli("localhost","root","","lotnisko");

                $zapytanie = $db->query("SELECT id, nr_rejsu, czas, kierunek, status_lotu from odloty order by czas DESC");

                while($result = $zapytanie->fetch_array())
                {
                    echo "<tr>";
                    echo "<td>".$result['id']."</td>";
                    echo "<td>".$result['nr_rejsu']."</td>";
                    echo "<td>".$result['czas']."</td>";
                    echo "<td>".$result['kierunek']."</td>";
                    echo "<td>".$result['status_lotu']."</td>";
                    echo "</tr>";
                }

                $db->close();

            ?>
        </table>

    </section>

    <section id="stopka1">

        <a href="kw1.jpg" target="_blank">Pobierz obraz</a>

    </section>

    <section id="stopka2">

        <?php
                $name="a";
                $value="b";
                $time=time()+(3600);
                $range="/";

                if(!isset($_COOKIE[$name]))
                echo "<p><i>Dzień dobry!Sprawdź regulamin naszej strony</i></p>";
                else
                echo "<p><b>Miło nam, że znowu nas odwiedziłeś</b></p>";

                setcookie($name, $value, $time,$range);



 
        ?>

    </section>

    <section id="stopka3">

        Autor: 10381724642

    </section>

</body>