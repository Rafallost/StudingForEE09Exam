function count()
{
    var a=polak.value;
    var b=nowak.value;
    var c=rysik.value;

    var tab=[a,b,c];

    for(var i=0; i<tab.length; i++){

        if(tab[i].length==0 || isNaN(tab[i])){
            alert("Wpisz poprawne dane!"); 
            return 0;
        }
    }

        a=parseFloat(a);
        b=parseFloat(b);
        c=parseFloat(c);
        var score=(a+b+c)/3;
        output.innerHTML=score;
 
}