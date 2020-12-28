<?php
require_once 'Class/Delete.php';

$id = $_GET['id'];
$beverage = $_GET['beverage'];
$beverageGuest = 0;
$guest = 0;
$total = 0;
$food = 10;
$beverageValue = 0; 

if($beverage == 1){
    $total = 20;
} else {
    $total = 10;
}

if($beverage == 1){
    $beverageValue = 10;
} else {
    $beverageValue = 0;
}

$delete = new Delete;
$delete->deleteGuest($id, $guest, $beverageGuest, $food, $total, $beverageValue);