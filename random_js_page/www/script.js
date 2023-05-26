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

    if(a>b)
    {
        if(a>c)
        {
            wypisz.innerHTML=a;
        }
    }
    else if(b>a)
    {
        if(b>c)
        {
            wypisz.innerHTML=b;
        }
    }
    else if(c>a) 
    {
        if(c>b)
        {
        wypisz.innerHTML=c;
        }
    }
    else{
        wypisz.innerHTML=a;
        alert("Średnie są równe ");
    }
    
  

}