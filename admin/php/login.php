<?php 
$username = $_POST['username'];
$pawd = $_POST['password'];

if($username == "root"){
    if($pawd == '2022'){
        echo "<script>window.location.href = 'http://localhost/project/admin/dashboard.php';</script>";
    }else{
        echo "<script>alert('Incorrect Password !');</script>"; 
        echo "<script>history.back();</script>"; 
    }
}else{
    echo "<script>alert('Incorrect Username !');</script>"; 
    echo "<script>history.back();</script>"; 
}

?>