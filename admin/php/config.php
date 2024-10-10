<?php

$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "books";
$conn = mysqli_connect($db_host ,$db_user,$db_password) or die("Error : not connected");
mysqli_select_db($conn , $db_name);


function numberofuser(){
    
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "books";
    $conn = mysqli_connect($db_host ,$db_user,$db_password) or die("Error : not connected");
    mysqli_select_db($conn , $db_name);
    
    $count  = "select * from users";
    $r = mysqli_query($conn, $count);
    $c= 0;

    if (mysqli_num_rows($r) > 0)
        {
            while ($row = mysqli_fetch_assoc($r))
            { 
                $c++;
            }
        }
        
    return $c;
}