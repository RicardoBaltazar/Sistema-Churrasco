<?php

if(isset($_POST['action'])){
    if(!empty($_POST['name'])){
        $name = $_POST['name'];
        $beverage = $_POST['beverage'];
        $guest = $_POST['guest'];
        $nameGuest = $_POST['name-guest'];
        $beverageGuest = $_POST['beverage-guest'];

        $Totalvalue = 10;
        $beverageValue = 0;
        $foodValue = 10;


        if($beverage == '1'){
            $beverage = 1;
            $Totalvalue += 10;
            $beverageValue += 10;
        } else {
            $beverage = 0;
        }

        if($guest == '1'){
            $guest = 1;
            $Totalvalue += 10;
            $foodValue += 10;
        } else {
            $guest = 0;
        }

        if($beverageGuest == '1'){
            $beverageGuest = 1;
            $Totalvalue += 10;
            $beverageValue += 10;   
        } else {
            $beverageGuest = 0;
        }


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
        echo "<br>";
        echo 'Valor total '.$Totalvalue;
        echo "<br>";
        echo "<br>";
        echo 'Valor total da bebida '.$beverageValue;
        echo "<br>";
        echo "<br>";
        echo 'Valor total da comida '.$foodValue;

        
        
    }
}