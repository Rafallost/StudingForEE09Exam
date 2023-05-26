<!DOCTYPE html>
    <head>
        <meta charset="UTF-8" >
        <title>Wycieczki i urlopy</title>
        <link rel="stylesheet" href="styl3.css">
    </head>
    <body>
        <section id="baner">
            <h1>BIURO PODRÓŻY</h1>
        </section>
        <section id="lewy">
            <h2>Kontakt</h2>
            <a href="mailto:biuro@wycieczki.pl">napisz do nas</a>
            <p>telefon: 555666777</p>
        </section>
        <section id="srodek">
            <h2>GALERIA</h2>
            <?php 
            $mysqli = new mysqli("localhost","root","","wycieczki");

            $zapytanie = $mysqli->query("SELECT nazwaPliku, podpis FROM zdjecia ORDER BY podpis;");

            while($row = $zapytanie->fetch_array()){
                echo "<img src='".$row['nazwaPliku']."' alt='".$row['podpis']."'>";
            }

            ?>
        </section>
        <section id="prawy">
            <h2>PROMOCJE</h2>
            <table>
                <tr>
                    <td>Jesień</td>
                    <td>Grupa 4+</td>
                    <td>Grupa 10+</td>
                </tr>
                <tr>
                    <td>5%</td>
                    <td>10%</td>
                    <td>15%</td>
                </tr>
            </table>
        </section>
        <section id="dane">
            <h2>LISTA WYCIECZEK</h2>
            <?php 
            $mysqli = new mysqli("localhost","root","","wycieczki");

            $zapytanie2 = $mysqli->query("SELECT id, dataWyjazdu, cel, cena FROM wycieczki WHERE dostepna = 1;");

            while($row = $zapytanie2->fetch_array()){
                echo "<section> ".$row['id'].". ".$row['dataWyjazdu'].", ".$row['cel'].", cena: ".$row['cena']."</section>";
            }

            ?>

            <hr>
            <form action = "wycieczki.php" method="POST">
                <select name="hehe">
                    <option value="wlochy">Włochy</option>
                    <option value="POLSKA"><big>POLSKA</big></option>
                    <option value="Francja">Francja</option>
                </select>
                <br>
                <input type="submit">
            </form>
            <?php
            $hehe = @$_POST['hehe'];

            if($hehe=="wlochy")
            {

                $zapytanieW = $mysqli->query("SELECT id, dataWyjazdu, cel, cena FROM wycieczki WHERE dostepna = 1 and cel='Włochy, Wenecja'");

                $ile = $zapytanieW->num_rows;

                while($wlochy = $zapytanieW->fetch_array())
                {
                    echo "<section class='bazinga'> ".$wlochy['id'].". ".$wlochy['dataWyjazdu'].", ".$wlochy['cel'].", cena: ".$wlochy['cena']."</section>";
                }

                echo "Jest ".$ile." lotów do Włoch";

            }
            else if($hehe=="POLSKA")
            {

                $zapytaniePol = $mysqli->query("SELECT id, dataWyjazdu, cel, cena FROM wycieczki WHERE dostepna = 1 and cel='Polska, Warszawa'");

                $ile = $zapytaniePol->num_rows;

                while($polska = $zapytaniePol->fetch_array())
                {
                    echo "<section class='bazinga'> ".$polska['id'].". ".$polska['dataWyjazdu'].", ".$polska['cel'].", cena: ".$polska['cena']."</section>";
                }

                echo "Jest ".$ile." lotów do POLSKI";
            }
            else if($hehe=="Francja"){
  
                $zapytanieFr = $mysqli->query("SELECT id, dataWyjazdu, cel, cena FROM wycieczki WHERE dostepna = 1 and cel='Francja, Paryż'");

                $ile = $zapytanieFr->num_rows;

                while($francja = $zapytanieFr->fetch_array())
                {
                    echo "<section class='bazinga'> ".$francja['id'].". ".$francja['dataWyjazdu'].", ".$francja['cel'].", cena: ".$francja['cena']."</section>";
                }

                echo "Jest ".$ile." lotów do Francji";

            }

            $mysqli->close();
            ?>

            <form method="POST">
            bierzesz wszystkie?<input type="checkbox" name="sprawdzam" ><br>
            A jak nie to ile chcesz?<br>
                <?php
                if($hehe)
                {
                    for($i=0; $i<$ile;$i++)
                    {
                        echo ($i+1).": <input type='radio' value='{$i}' name='ciekawe'><br>";
                    }
                }    

               
                ?>
                <input type="submit">
            </form>
        </section>
        <section id="stopka">
        <p>Strone wykonał: 123124412</p>
        </section>
    </body>

