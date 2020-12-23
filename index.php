<?php

header('location:pages/home.html');
exit();
/*
if($_SERVER['REQUEST_URI']){
    $url = $_SERVER['REQUEST_URI'];
    $template = file_get_contents($url);
    
} else {
    
}
*/
/*
$template = file_get_contents("pages/home.html");

echo $template;