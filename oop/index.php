<?php 
    require_once('animal.php');
    require_once('frog.php');
    require_once('ape.php');
    $sheep = new Animal("shaun");

    echo "Name: $sheep->name <br>"; // "shaun"
    echo "legs: $sheep->legs <br>"; // 4
    echo "cold blooded: $sheep->cold_blooded <br><br>"; // "no"

    
    $kodok = new Frog("buduk");
    echo "Name: $kodok->name <br>"; // "buduk"
    echo "legs: $kodok->legs <br>"; //4
    echo "cold blooded: $kodok->cold_blooded <br>"; // "no"
    echo "Jump:  " . $kodok->jump(); // "hop hop"

    
    $sungokong = new Ape("kera sakti");
    echo "<br><br> Name: $sungokong->name <br>"; // "kera sakti"
    echo "legs: $sungokong->legs <br>"; //2
    echo "cold blooded: $sungokong->cold_blooded <br>"; // "no"
    echo "Yell: " . $sungokong->yell();// "Auooo"
?>