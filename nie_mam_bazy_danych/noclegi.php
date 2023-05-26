<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Wakacje marzeń</title>
    <link rel="stylesheet" href="styl_1.css">
</head>
<body>

<section id="gorny1">

    <img src="logo.png" alt="nasze logo">

</section>

<section id="gorny2">

    <h1>Biuro Turystyczne - Wakacje marzeń</h1>

</section>

<section id="banner">

    <h1>Na tej stronie znajdziesz noclegi w wybranej miejscowosci</h1>

</section>

<section id="glowny1">

    <img src="morze.jpg" alt="wybrzeże" id="lewy">
    
    <table>
        <tr>
            <td><h3>miejscowość</h3></td>
            <td><h3>rodzaj noclegu</h3></td>
        </tr>
        <tr>
            <td>
                <?php

                    $db = new mysqli("localhost","root","","egzamin 2");

                    $zapytanie = $db->query("SELECT * FROM miejscowosc");
                    
                    while($result = $zapytanie->fetch_array())
                    {
                        echo $result['id'].". ".$result['nazwa']."<br>";
                    }


                ?>   
            </td>
            <td>
                <?php


                $zapytanie2 = $db->query("SELECT * FROM rodzaj");

                while($result = $zapytanie2->fetch_array())
                {
                    echo $result['id'].". ".$result['nazwa']."<br>";
                }



                ?>
            </td>
        </tr>
    </table>

    <form action="noclegi.php" method="POST">
    <input type="submit" class="button" value="Wersja dla słabowidzących" id="bruh" name="action">
    </form>

    <?php

    if(isset($_POST['action']))
    {
        echo "<style>
        #banner{
            background-color: white;
        }
        #gorny1{
            background-color: white;
        }
        #gorny2{
            background-color: white;
        }
        #glowny2{
            background-color: white;
        }
        #glowny1{
            background-color: white;
        }
        #stopka{
            background-color: white;
        }

        h1{
            color: black;
        }

        </style>";
    }


    ?>

</section>

<section id="glowny2">

    <img src="góry.jpg" alt="góry" id="prawy">

    <form action="noclegi.php" method="POST">
    <h4>Wpisz poniżej numery</h4>
    miejscowości<input type="number" name="place" ><br>
    rodzaju noclegu<input type="number" name="type" ><br>
    <input type="submit" value="WYBIERZ">
    <input type="reset" value="WYCZYŚĆ">    
    </form>

    <?php
        $place = @$_POST['place'];
        $type = @$_POST['type'];

           
            if(isset($place)&&isset($type))
            {
                
                $zapytanie3 = $db->query("SELECT cena FROM cennik WHERE miejscowosc_id='".$place."' and rodzaj_id='".$type."'");


                $wynik=$zapytanie3->fetch_assoc();

                echo "<b>Cena noclegu dla jednej osoby: ".$wynik['cena']."</b>";

            }
  
        $db->close();
    ?>

</section>

<section id="stopka">

    adres: ul. Wakacyjna 12 Wrocław, telefon: 123123123, e-mail: biuro.turystyczne@wp.pl

</section>




</body>