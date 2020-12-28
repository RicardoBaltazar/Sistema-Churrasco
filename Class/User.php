<?php
require_once 'Insert.php';

Class User{
    
    private $insert;

    public function Add($name, $beverage, $guest, $nameGuest, $beverageGuest, $totalvalue, $beverageValue, $foodValue){
       $this->insert = new insert;
       $this->insert->InsertDatabase($name, $beverage, $guest, $nameGuest, $beverageGuest, $totalvalue, $beverageValue, $foodValue);
    }

}