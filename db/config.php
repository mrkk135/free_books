<?php

$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "books";
$conn = mysqli_connect($db_host ,$db_user,$db_password) or die("Error : not connected");
mysqli_select_db($conn , $db_name);

function readNameFromFile(){

    $f = fopen('login.txt','r');
    while ($line = fgets($f)) {
      $name =  $line;
    }
    fclose($f);
    return $name;
}

function writeInFile($text){    

    $name = $text;
    $f = fopen('login.txt','w');
    fwrite($f,$name);
    fclose($f);
}