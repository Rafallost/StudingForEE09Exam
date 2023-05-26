<?php
    $db = new mysqli("localhost","root","","restaurant");

    $date = $_POST['date'];
    $people = $_POST['people'];
    $phone = $_POST['phone'];
    $check = @$_POST['check'];

        

        if($result = $db->query("INSERT INTO rezerwacje(data_rez,liczba_osob,telefon) values('$date','$people','$phone')"))
        {
            echo "dodano rezerwacje do bazy";
        }
        else
        {
            echo "NIE dodano rezerwacji";
        }

    $db->close();
?>