<!DOCTYPE html>
<head>

    <meta charset="UTF-8">
    <title>Rozgrywki futbolowe</title>
    <link rel="stylesheet" href="styl.css">

</head>
<body>

    <section id="banner">
        <h2>Światowe rozgrywki piłkarskie</h2>
        <img src="obraz1.jpg" alt="boisko">
    </section>

    <section id="skrypt">

    <?php
    $db = new mysqli('localhost','root', '' ,'futbol');

    $zapytanie = mysqli_query($db,"select zespol1, zespol2, wynik, data_rozgrywki from rozgrywka where zespol1='EVG';"); 
   
    while($wynik=mysqli_fetch_array($zapytanie))
    {
       echo '<section id=mecze>';
    echo '<h3>'.$wynik['zespol1'].'-'.$wynik['zespol2'].'</h3>';
    echo '<h4>'.$wynik['wynik'].'</h4>';
    echo '<p>'.' w dniu '.$wynik['data_rozgrywki'].'</p>';
        echo '</section>';
    }
  
    $db->close();
    ?>
    </section>

    <section id="blok_glowny">
        <h2>Reprezentakcja Polski</h2>
    </section>

    <section id="lewy">
        <p>Podaj pozycję zawodnikow (1-bramkarze, 2-obrońcy, 3-pomocnicy, 4-napastnicy):</p>
        <form action="futbol.php" method="POST">
            <input type="number" name="choice">
            <input type="submit" value="Sprawdź">
        </form>
        <?php 
            $db = mysqli_connect('localhost','root', '' ,'futbol');
            $choice = @$_POST['choice'];
            if(!empty($_POST['choice']))
            {
                $zapytanie2=$db->query("SELECT imie, nazwisko FROM zawodnik WHERE pozycja_id = $choice;");

                while($result=mysqli_fetch_array($zapytanie2))
                {
                    echo '<table>'.'<ul>'.'<li>'.'<p>'.$result['imie'].' '.$result['nazwisko'].'</p>'.'</li>'.'</ul>'.'</table>';
                }
            }
            else
            {
                echo " ";
            }


            $db->close();
        ?>

    </section>

    <section id="prawy"> 
        <img src="zad1.png" alt="piłkarz"><br>
        <p>Autor:0000000000000</p>
    </section>

</body>