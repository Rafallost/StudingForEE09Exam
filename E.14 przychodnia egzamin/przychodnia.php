<DOCTYPE html>
<head>
    <title>Przychodnia</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <section id="up">
        <img id="strzykawa" src="strzykawka.png">
        <h1><center>Ogólnopolski Próbny Egzamin Zawodowy E14</center><h1>
            <img id="przychodnia" src="przychdnia.png">
    </section>

    <section id="nawi">
    <a href="kwerendy.txt"><button>kwerendy</button></a>
    <a href="przychodnia.sql"><button>Baza danych</button></a>
    </section>

<section id="mein">
    <section id="dwa">

    <?php
        $db  = new mysqli("localhost","root","","przychodnia");

        $result = $db->query("SELECT imie, nazwisko FROM lekarze;");

        while($wynik=$result->fetch_array()){
            echo "Imie i Nazwisko: ".$wynik['imie']." ".$wynik['nazwisko']."<br><br>";
        }
        $db->close();
    ?>
<hr>

    <form method="POST" action="przychodnia.php">
    imie i nazwisko<input type="text" name="names" id="names"><br>
    nr pesel<input type="text" name="pesel" id="pesel" max="99999999999"><br>
    nr telefonu<input type="tel" name="telefon" id="telefon" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}"><br>
    rodzaj wizyty:<br>
    ONZ<input type="radio" name="w"  value="ONZ" id="ONZ"><br>
    Płatna<input type="radio" name="w"  value="platna" id="platna"><br>
    Abonament<input type="radio" name="w"  value="abonament" id="abonament"><br>
    Data wizyty <input type="date" name="wizyta" id="wizyta"><br>
    Lekarz<select name="wybierz">
        <option value="Bingus">Bingus</option>
        <option value="Bongus">Bongus</option>
        <option value="PALANGUS">PALANGUS</option>
    </select><br>
    <input type="checkbox" name="check" id="check"> wyrażam zgodę na przetwarzanie danych osobowych<br> 
    <textarea id="area" name="area" rows="5" cols="20">
    
    </textarea><br>
    <input type="submit" value="rezultat php"><input type="button" value="resultat js" onclick="js(names.value,pesel.value,telefon.value,wizyta.value,area.value,w.value,wybierz.value,check.value)">
    </form>
    </section>
    <section id="cokolwiek">
<?php
    echo "<h3>WYPIS PHP</h3>";
    echo"<br>imie i nazwisko: ".@$_POST["names"];    
    echo"<br>nr pesel: ".@$_POST["pesel"];   
    echo"<br>nr telefonu: ".@$_POST["telefon"];   
    echo"<br>rodziaj wizyty: ";
    switch (@$_POST["w"]){
        case "ONZ":  echo"ONZ";  break;
        case "platna":  echo"platna";  break;
        case "abonament":  echo"abonament";  break;
    }   
    echo"<br>Data wizyty: ".@$_POST["wizyta"]; 
    echo"<br>lekrz: "; 
    switch (@$_POST["wybierz"]){
        case "Bingus":  echo"Bingus";  break;
        case "Bongus":  echo"Bongus";  break;
        case "PALANGUS":  echo"PALANGUS";  break;
    }   
    if(isset($_POST["check"]))
    echo"<br>Czy wyraża zgodzę na przetwarzanie danych osoowych: TAK";
    else
    echo"<br>Czy wyraża zgodzę na przetwarzanie danych osoowych: NIE";
    echo"<br>Uwagi:".@$_POST["area"];   
?>
<h3>WYPIS JS</h3>
Imie i nazwisko :<span id="AA"></span><br>
PESEL :<span id="BB"></span><br>
TELEFON :<span id="CC"></span><br>
RODZAJ WIZYTY :<span id="DD"></span><br>
DATA WIZYTY :<span id="EE"></span><br>
LEKARZ :<span id="FF"></span><br>
CZY JEST ZGODA :<span id="GG"></span><br>
UWAGI:<span id="HH"></span><br>

<script>
    function js(a,b,c,d,e,f,g,h){
        document.getElementById("AA").innerHTML=a;
        document.getElementById("BB").innerHTML=b;
        document.getElementById("CC").innerHTML=c;
        document.getElementById("DD").innerHTML=f;
        document.getElementById("FF").innerHTML=g;

        document.getElementById("EE").innerHTML=d;
        document.getElementById("HH").innerHTML=e;

        

        if(h)
        document.getElementById("GG").innerHTML="TAK";
  
    }
</script>
    </section>

    </section>
</body>
<footer>
    <h3>Autor strony:000000000</h3>
</footer>