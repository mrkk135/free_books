<?php 
error_reporting(0);
include('db/config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="web/css/form.css">
    <link rel="stylesheet" href="web/css/show.css">
</head>
<body>
<from>
    <section class="from" >
    <button onclick="history.back()" >back</button>
    <center>

    <h1>Records in Database</h1>
        <table width=95%>
            <tr>
                <th>Sr no.</th>
                <th>Books name</th>
                <th>Subject Code</th>
                <th>Categorie</th>
                <th>File Path</th>
                <th>Image Path</th>
                <th>Writer</th>
                <th></th>
            </tr>
            <?php 
    $code = "select * from books_store ";
    $run = mysqli_query($conn, $code);
    $i=0;
    $number= 1;
    if (mysqli_num_rows($run) > 0)
    {
        while ($row = mysqli_fetch_assoc($run))
        { 
            $name[$i] = $row['b_name'];
            $price[$i] = $row['price'];
            $categories[$i] = $row['categories'];
            $path[$i] = $row['path'];
            $img[$i] = $row['img'];
            $wirter[$i] = $row['writer'];
            if ($i < 5){
                echo "<tr><td>$number</td>";
                echo "<td>".$name[$i],"</td>";
                echo "<td>".$price[$i]."</td>";
                echo "<td>".$categories[$i]."</td>";
                echo "<td>".$path[$i]."</td>";
                echo "<td>".$img[$i]."</td>";
                echo "<td>".$wirter[$i]."</td>";
            }?><td><button type="button">hello</button></td></tr> <?php
        $number++;
        $i++; 
        }
    } ?>
        </table>
    </center>
    </section>
</from>
</body>
</html>
