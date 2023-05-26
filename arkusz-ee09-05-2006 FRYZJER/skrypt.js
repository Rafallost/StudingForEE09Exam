function plik(){

    var short = document.getElementById("short");
    var medium = document.getElementById("medium");
    var halflong = document.getElementById("halflong");
    var long = document.getElementById("long");
    var wynik;


    
    if(short.checked)
    
       wynik = "Cena strzyżenia: "+ short.value;
    
    else if(medium.checked)
    
        wynik = "Cena strzyżenia: "+ medium.value;    
    
    else if(halflong.checked)

        wynik = "Cena strzyżenia: "+ halflong.value; 

    else

    wynik = "Cena strzyżenia: "+ long.value; 


    document.getElementById("out").innerHTML = wynik;


}