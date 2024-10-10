<?php
include('config.php');

if(isset($_POST['save']))
{

    $bno         = $_POST['bno'];
    $bname       = $_POST['bname'];
    $price       = $_POST['price'];
    $categories  = $_POST['categories'];
    $writer      = $_POST['writer'];

    $pdf = $_FILES['pdf']['name'];
    $temp_pdf = $_FILES['pdf']['tmp_name'];
    $pdf_folder = "book/books_file/".$pdf;
    copy($temp_pdf, $pdf_folder);
    
    $img =  $_FILES["filename"]['name'];
    $temp_img =  $_FILES["filename"]['tmp_name'];
    $img_folder = "book/image/".$img;
    copy($temp_img, $img_folder);



    
    $sql = "INSERT INTO books_store VALUES('$bno','$bname','$price','$categories' , '$pdf_folder','$img_folder','$writer')";
    $data = mysqli_query($conn, $sql);
    if($data)
    {
        echo "inserted";
    }else{
        echo "not inserted";
    }
}


?>