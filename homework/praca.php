<?php

    $date=$_POST['date'];
    $number=$_POST['number'];
    $choice=@$_POST['choice'];
    $company=@$_POST['company'];

    if(!isset($choice))
    echo "Data:".$date."<br>number faktury: ".$number."<br>".$company;
    else
    echo "Data:".$date."<br>number faktury: ".$number."<br>".$company."<br>poproszę wydrukować";
?>