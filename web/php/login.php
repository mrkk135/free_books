<?php 
include('config.php');

function database($t_email ,$t_pawsd){
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "books";
    $conn = mysqli_connect($db_host ,$db_user,$db_password) or die("Error : not connected");
    mysqli_select_db($conn , $db_name);
    $sql = "SELECT u_email , passd FROM users where  'u_email' ='$t_email' and passd ='$t_pawsd' ; ";
    $result = mysqli_query($conn,$sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $c_email = $row['u_email'];
            $c_passd = $row['passd'];
        }
        if ($c_email == $t_email) {
            if ($c_passd == $t_pawsd) {
                echo "<script>window.location.href = 'http://localhost/project/';</script>";    
            }
        }

    }
}

$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "books";
$conn = mysqli_connect($db_host ,$db_user,$db_password) or die("Error : not connected");
mysqli_select_db($conn , $db_name);


$username = $_POST['username'];
$pawd = $_POST['password'];

$sql1 = "SELECT  * FROM users where u_name ='$username' ; ";
$result1 = mysqli_query($conn,$sql1);
if (mysqli_num_rows($result1) > 0) {
    while ($r = mysqli_fetch_assoc($result1)) {
        $c_user = $r['u_name'];
        $c_passd = $r['passd'];
    }
    
    if($c_user == $username)
    {
        if($c_passd == $pawd)
        {
            writeInFile($c_user);
            echo "<script>window.location.href = 'http://localhost/project/';</script>";
        }
        else
        {
            echo "<script>alert('Incorrect Password !');</script>"; 
            echo "<script>history.back();</script>"; 
        }
    }
    else
    {
        echo "<script>alert('Incorrect Username !');</script>"; 
        echo "<script>history.back();</script>"; 
    }

}

?>