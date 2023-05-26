function klik()
{
    var rodzaj = typ.value;
    var litr = 0;

    if(rodzaj == 1)
        litr = 4;
    else if(rodzaj == 2)
        litr = 3.5;

    var koszt = litr * litry.value;

    output.innerHTML = "koszt paliwa: " + koszt + "zł";
}