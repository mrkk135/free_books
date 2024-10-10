<?php
error_reporting(0);
include("config.php");

$email = $_POST['email'];
$username = $_POST['username'];
$pawd = $_POST['password'];


$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "books";
$conn = mysqli_connect($db_host, $db_user, $db_password) or die("Error : not connected");
mysqli_select_db($conn, $db_name) or die("");


if ($username != null) {
    if ($pawd != null) {

        $sql = "SELECT u_email FROM users;";
        $result = mysqli_query($conn, $sql) or die("");

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $temp = $row['u_email'];
            }
            if ($temp == $email) {
                echo "<script>alert('Already Regesterd !');</script>";
                echo "<script>history.back();</script>";

            } else {
                echo "<script>alert('Regesterd !');</script>";
                insertdata($username, $email, $pawd);
                
            }
        }



    } else {
        echo "<script>alert('Incomplete Password !');</script>";
        echo "<script>history.back();</script>";
    }
} else {
    echo "<script>alert('Please Enter Username !');</script>";
    echo "<script>history.back();</script>";
}

?>