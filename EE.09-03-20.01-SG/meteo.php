<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Prognoza pogody Poznań</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<body>

    <section id="banner-lewy">

        <p>maj, 2019 r.</p>

    </section>

    <section id="banner-srodkowy">

        <h2>Prognoza dla Poznania</h2>

    </section>

    <section id="banner-prawy">

        <img src="logo.png" alt="prognoza">

    </section>

    <section id="lewy">

        <a href="kwerendy.txt">Kwerendy</a>

    </section>

    <section id="prawy">

        <img src="obraz.jpg" alt="Polska, Poznań">

    </section>

    <section id="glowny">

        <table>
            <tr>
                <th>Lp.</th>
                <th>DATA</th>
                <th>NOC - TEMPERATURA</th>
                <th>DZIEŃ - TEMPERATURA</th>
                <th>OPADY[mm/h]</th>
                <th>CIŚNIENIE[hPa]</th>
            </tr>
                <?php

                    $db = new mysqli("localhost","root","","prognoza");

                    $zapytanie = $db->query("SELECT * from pogoda where miasta_id=2 order by data_prognozy DESC;");

                    $a=1;

                    while($result = $zapytanie->fetch_assoc())
                    {  
                        echo "<tr><td>".$a."</td><td>".$result['data_prognozy']."</td><td>".$result['temperatura_noc']."</td><td>".$result['temperatura_dzien']."</td><td>".$result['opady']."</td><td>".$result['cisnienie']."</td></tr>";
                        $a++;
                    }

                    $db->close();

                ?>
        </table>

    </section>

    <section id="stopka">
        <p>Stronę wykonał: 190231209412</p> 
    </section>

</body>