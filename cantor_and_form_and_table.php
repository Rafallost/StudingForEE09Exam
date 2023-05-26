<!doctype html>
<head>
    <meta charset='utf-8'>
    <style>
        td,tr{
            border: 5px dashed pink;
            border-radius: 5 px;

        }

        table{
            border-collapse: collapse;
        }
    </style>
</head>
<body>

<h1>KANTOR WALUT</h1>

<form method="POST">
<input type="number" name="liczba" id="liczba" onchange="policz(liczba.value, siema)">
<input type="submit"><input type="button" value="prześlij">
</form>


<?php

$liczba=@$_POST['liczba'];

echo "-EURO: ".$liczba*0.22."<br>";
echo "-DOLAR: ".$liczba*0.24."<br>";
echo "-FUNT: ".$liczba*0.18."<br>";
echo "-RUBEL: ".$liczba*17.99."<br>";

?>

<span id="siema">

</span>


<script>

function policz(x, out){

    out.innerHTML = "-EURO: "+x*0.22+"<br>"+"-DOLAR: "+x*0.24+"<br>"+"-FUNT: "+x*0.18+"<br>"+"-RUBEL: "+x*17.99+"<br>";

}

</script>

<?php

$name="user";
$value='1';
$time=time()+5;

setcookie($name,$value,$time,"/");

if(isset($_COOKIE['user']))
{
    echo "jest ciacho";
}
else
{
    echo "nie ma";
}

?>

<hr>

<h1>FORMULARZ ZAPISU</h1>

<form method="POST">
imie i nazwisko <input type="text" name="first_name" id="first_name"><br>
data<input type="date" name="date" id="date"><br>
nr telefonu<input type="tel" name="phone" id="phone" pattern="[0-9]{3}[0-9]{3}[0-9]{3}"><br>
<input type="radio" name="siema" id="raz" value="Pełna opcja płatna"> Pełna opcja płatna<br>
<input type="radio" name="siema" id="dwa" value="Darmowa opcja"> Darmowa opcja<br>
<input type="checkbox" name="akcept" id="akcept"> Akceptuję regulamin siłowni<br>
<input type="checkbox" name="news" id="news"> newslatter<br>

<select name="chose" id="chose">
    <option>rowerek</option>
    <option>bieżnia</option>
    <option>inne</option>
</select>

<input type="submit"><input type="button" value="Prześlij" onclick="make(first_name.value, date.value, phone.value, akcept.checked, news.checked, bruh, this.parentNode.siema, chose.value)">
</form>
<?php

$dane = @$_POST['first_name'];
$data = @$_POST['date'];
$phone = @$_POST['phone'];
$akcept = @$_POST['akcept'];
$news = @$_POST['news'];

if(!empty($dane))
{
    echo "<br>imie i nazwisko: ".$dane;
}

if(!empty($data))
{
    echo "<br>data: ".$data;
}

if(!empty($phone))
{
    echo "<br>telefon: ".$phone;
}

if(!empty($akcept))
{
    echo "<br>Zakakceptowany regulamin";
}

if(!empty($news))
{
    echo "<br>Chce otzymywać wiadomości na Newslatter";
}

echo "<br>".@$_POST['chose'];

?>

<span id="bruh">

</span>

<script>

function make(imie, data, telefon, akcept, news, bruh, radio, chose){

    bruh.innerHTML="imie i naziwsko: "+imie+"<br>data: "+data+"<br>Telefon: "+telefon+"<br>";

    for(var i=0;i<radio.length;i++)
    {
        if(radio[i].checked){
            bruh.innerHTML+=radio[i].value+"<br>";
        }
    }

    if(akcept==true)
    {
        bruh.innerHTML+="zaakceptowałem regulamin<br>";
    }
    else
    {
        bruh.innerHTML+="NIE zaakceptowałem regulaminu<br>";
    }

    if(news==true)
    {
        bruh.innerHTML+="chce otrzymywać newslatter<br>";
    }
    else
    {
        bruh.innerHTML+="NIE chce otrzymywać newslattera<br>";
    }


    bruh.innerHTML+=chose;


}

</script>


<hr>

<h1>tabela</h1>

<table>
    <tr>
        <th>Nr herbaty</th>
        <th>Rodzaj</th>
        <th>Cena za 1dkg</th>
    </tr>
    <tr>
        <td>1</td>
        <td>zielony torf</td>
        <td>5 zł</td>
    </tr>
    <tr>
        <td>2</td>
        <td>biały torf</td>
        <td>7 zł</td>
    </tr>
    <tr>
        <td>3</td>
        <td>czerwony torf</td>
        <td>10 zł</td>
    </tr>
</table>
<br>
<form method="POST">
<big>Nr torfu: </big><input type="numer" name="which" id="which"><br>
<big>ile dag: </big><input type="number" name="how" id="how"><br>
<input type="submit"><input type="button" value="Prześlij" onclick="przelicz(which.value, how.value, cokolwiek)">
</form>
<?php

    $how = @$_POST['how'];
    $which = @$_POST['which'];
    $much;

    if($which==1)
    {
        $much = $how*5;
        echo $much;
    }
    else if($which==2)
    {
        $much = $how*7;
        echo $much;
    }
    else if($which==3)
    {
        $much = $how*10;
        echo $much;
    }
    else{
        echo "<br>podaj dane";
    }

?>

<span id="cokolwiek">

</span>

<script>

function przelicz(x,y,z){

    if(x==1)
    {
        z.innerHTML = y*5;
        
    }
    else if(x==2)
    {
        z.innerHTML = y*7;
        
    }
    else if(x==3)
    {
        z.innerHTML = y*10;
        
    }
    else{
         z.innerHTML = "podaj nr [1-3]";
    }

}

</script>

</body>
</html>
