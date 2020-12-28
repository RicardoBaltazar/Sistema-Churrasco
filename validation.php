<?php

require_once 'Class/User.php';

if(isset($_POST['action'])){
    if(!empty($_POST['name'])){
        $name = $_POST['name'];
        $beverage = $_POST['beverage'];
        $guest = $_POST['guest'];
        $nameGuest = $_POST['name-guest'];
        $beverageGuest = $_POST['beverage-guest'];
        $totalvalue = 10;
        $beverageValue = 0;
        $foodValue = 10;

        $name = strtolower($name);
        $nameGuest = strtolower($nameGuest);


        if($beverage == '1'){
            $beverage = 1;
            $totalvalue += 10;
            $beverageValue += 10;
        } else {
            $beverage = 0;
        }

        if($guest == '1'){
            $guest = 1;
            $totalvalue += 10;
            $foodValue += 10;
        } else {
            $guest = 0;
            $nameGuest = NULL;
        }

        if($beverageGuest == '1'){
            $beverageGuest = 1;
            $totalvalue += 10;
            $beverageValue += 10;   
        } else {
            $beverageGuest = 0;
        }


        $user = new User;
        $user->Add($name, $beverage, $guest, $nameGuest, $beverageGuest, $totalvalue, $beverageValue, $foodValue);

        
    }
}