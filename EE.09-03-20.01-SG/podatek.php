<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form action="podatek.php" method="POST">
        cena początkowa: <input type="number" id="no" name="hell"><br>
        <input type="radio" name="xd" id="raz" value="0.8" >obniżono o 20%<br>
        <input type="radio" name="xd" id="dwa" value="1.23"">podwyż o vat (23%)<br>
        <input type="checkbox">akceptuje cenę<br>
        <input type="submit" value="PHP">
        <input type="button" value="JS" onclick="siema(raz, dwa, no)"><br>
        <span id="tutaj"></span>
    </form>
    <?php
        $tax=@$_POST['hell'];
        $radio=@$_POST['xd'];

        if($radio)
        {
            echo "WYNIK PHP".$radio;
        }
        
    ?>

    <script>
        function siema(a,b,c){
            if(a.checked){

                var wynik = parseFloat(a.value)*parseFloat(c.value);
                document.getElementById("tutaj").innerHTML = "WYNIK JS"+wynik;
            }
            if(b.checked){
                
                var wynik = parseFloat(b.value)*parseFloat(c.value);
                document.getElementById("tutaj").innerHTML = "WYNIK JS"+wynik;
            }
        }
    </script>
</body>
