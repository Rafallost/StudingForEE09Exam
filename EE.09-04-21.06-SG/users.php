<!DOCTYPE html>
<head>

    <meta charset="utf-8">
    <title>Panel administratora</title>
    <link rel="stylesheet" href="styl4.css">

</head>
<body>

    <section id="benner">
        <h3>Portal Społecznościowy - panel administratora</h3>
    </section>

    <section id="lewy">
        <h4>Użytkownicy</h4>


        <?php
        $db = new mysqli("localhost","root","","users");

        $result = $db->query("SELECT id, imie, nazwisko, rok_urodzenia, zdjecie FROM osoby LIMIT 30");

        while($wynik=mysqli_fetch_array($result))
        {
            $wiek = date("Y") - $wynik['rok_urodzenia'];
            echo $wynik['id'].". ".$wynik['imie']." ".$wynik['nazwisko'].", ".$wiek."  lat<br>";
        }


        $db->close();
        ?>
                <a href="settings.html">Inne ustawienia</a>
    </section>

    <section id="prawy">
        <h4>Podaj id użytkownika</h4>
        <form method="POST" action="users.php">
            <input type="number" name="ciekawe">
            <input type="submit" id="bingus" value="ZOBACZ">
        </form>
        <hr>
        <?php
                $db = new mysqli("localhost","root","","users");
                
                $id=$_POST['ciekawe'];

                if($id<2 || $id>42)
                {
                    echo "Nie ma takiej osoby";
                }
                else
                {
                    $result = $db->query("SELECT imie, nazwisko, rok_urodzenia, opis, zdjecie, nazwa from osoby inner join hobby on osoby.Hobby_id = hobby.id where osoby.id = ".$id.";");

                    $wynik=$result->fetch_array();
                    
                        echo "<h2>".$id.". ".$wynik['imie']." ".$wynik['nazwisko']."</h2>";
                        echo "<img src='".$wynik['zdjecie']."' alt='".$id."'>";
                        echo "<p>rok urodzenia:".$wynik['rok_urodzenia']."</p>";
                        echo "<p>opis:".$wynik['opis']."</p>";
                        echo "<p>Hobby:".$wynik['nazwa']."</p>";
                }

                $db->close();
        ?>
    </section>

</body>
<footer>
    Stronę wykonał: 00000000000
</footer>