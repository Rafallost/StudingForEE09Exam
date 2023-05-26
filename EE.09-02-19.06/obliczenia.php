<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Stacja paliw</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <section id="baner-lewy">
        <h1>Stacja Paliw</h1>
    </section>
    <section id="baner-prawy">
        <a href="stacja.html">
            <img src="home.png" >
        </a>
        <a href="obliczenia.php">
            <img src= "znak.png">
        </a>
    </section>

    <section id="main">
        <h3>Oblicz koszt paliwa</h3>

        <form method="POST">
            Rodzaj paliwa (1-benzyna, 2-olej napędowy): <br>
            <input type="number" name="type" id="typ" value="1" min="1"> <br>

            Ile litrów <br>
            <input type="number" name="litry" id="litry" value="1" min="1">  <br>
            <input type="submit" value="Oblicz PHP">
            <button type="button" onclick="klik()">Oblicz JS</button>
        </form>
        <?php
            if(isset($_POST["type"]) && isset($_POST["litry"]))
            {
                if($_POST["type"] == 1)
                    $cena = 4;
                else if($_POST["type"] == 2)
                        $cena = 3.5;
                else
                    $cena = 0;

                $koszt = $_POST["litry"] * $cena;
                echo "PHP: Koszt paliwa: " . $koszt . " zł"; 
            }      
        ?>
        <br> <span id="output"></span>
    </section>

    <section id="lewy">
        <a href="kwerendy.txt">Pobierz kwerendy</a>
    </section>
    <section id="prawy">
        <img src="samochod.png" alt="samochód">
    </section>
    <footer>
        <p>
            Stronę opracował: 0983462820321
        </p>
    </footer>
    <script src="script.js"></script>
</body>