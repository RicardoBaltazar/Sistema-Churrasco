<?php

if(isset($_POST['action'])){
    if(!empty($_POST['name'])){
        $name = $_POST['name'];
        $beverage = $_POST['beverage'];
        $guest = $_POST['guest'];
        $nameGuest = $_POST['name-guest'];
        $beverageGuest = $_POST['beverage-guest'];

        echo $name;
        echo "<br>";
        echo $beverage;
        echo "<br>";
        echo $guest;
        echo "<br>";
        echo $nameGuest;
        echo "<br>";
        echo $beverageGuest;
        echo "<br>";

        
        
    }
}