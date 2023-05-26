<?php
    $result=0;
    $a=$_POST["a"];
    $b=$_POST["b"];

   
   
if($_POST["select"]=="kolo")
{
    if(empty($_POST["r"]))
    {
        echo "podaj r:";
    }
    else
    {
        $result=3.14*pow($_POST['r'],2);
        echo "pole koła: ".$result;
    }

}
else
 {
   
    if(empty($a) && empty($b))
    {
        echo "podaj a i b";
    }
    else if(empty($a))
    {
        echo "podaj a";
    }
    else if(empty($b))
    {
        echo "podaj b";
    }
    else
    {
        if($_POST["select"]=="kwadrat")
        {
            $result=pow($a,2);
            echo "pole kwadratu:".$result;
        }
        else if($_POST["select"]=="prostokat")
        {
            $result=$a*$b;
            echo "pole prostokatu:".$result;
        }
    
    }
}

?>

