<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "books";
$conn = mysqli_connect($db_host ,$db_user,$db_password) or die("Error : not connected");
mysqli_select_db($conn , $db_name);

function readNameFromFile(){

    $f = fopen('web/php/login.txt','r');
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

function insertdata($username ,$email, $pawd){
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "books";
    $conn = mysqli_connect($db_host ,$db_user,$db_password) or die("Error : not connected");
    mysqli_select_db($conn , $db_name);
      $insertuser = "INSERT INTO users VALUES(null, '$username','$email','$pawd'); ";
      $r = mysqli_query($conn, $insertuser) or die("Error to insert");



    if($r){
      writeInFile($username);
       echo "<script>window.location.href = 'http://localhost/project/';</script>"; 
      
    }else{
      echo "<script>alert('Sigin again!');</script>"; 
      echo "<script>history.back();</script>"; 
    }

}

  

