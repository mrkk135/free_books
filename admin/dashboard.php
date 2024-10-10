<?php 
include('php/config.php');
$count  = "select b_name from books_store";
$r = mysqli_query($conn, $count);
$c= 0;
        
if (mysqli_num_rows($r) > 0)
        {
            while ($row = mysqli_fetch_assoc($r))
            { 
                $c++;
            }
        }


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="left-bar">
        <div class="Admin-name">
            <label class="name">Admin panel</label>
        </div>
        <div class="btn">
            <div>
                <button class="active"><a href="#dashboard"> Dashboard</a></button>
                <button><a href="#book-list"> Records</a></button>
                <button><a href="#add-books"> Add Books</a></button>
                <button class="logout"><a href="#user-list"> Logout</a></button>
            </div>
        </div>
    </div>

    <div class="right-main">
        <div class="dashboard" id="dashboard">
            <div>
             
                <div class="books">
                    <label>Books Avaible</label>
                    <samp><?php echo $c; ?></samp>
                </div>
                <div class="books">
                    <label>No. of User</label>
                    <samp><?php echo numberofuser(); ?></samp>
                </div>
                
            </div>
            <div class="book-list" id="book-list">
                <h2>Book List</h2>
                <table width=95%>
                    <tr>
                        <th>Sr no.</th>
                        <th>Books name</th>
                        <th>Subject Code</th>
                        <th>Categorie</th>
                        <th>Writer</th>
                    </tr>
                    <?php 
                        $code = "select * from books_store ";
                        $run = mysqli_query($conn, $code);
                        $i=0;
                        $number= 1;
                        if (mysqli_num_rows($run) > 0){
                            while ($row = mysqli_fetch_assoc($run)){ 
                                $names[$i] = $row['b_name'];
                                $price[$i] = $row['price'];
                                $categories[$i] = $row['categories'];
                                $path[$i] = $row['path'];
                                $img[$i] = $row['img'];
                                $wirter[$i] = $row['writer'];
                                {
                                    echo "<tr><td>$number</td>";
                                    echo "<td>".$names[$i],"</td>";
                                    echo "<td>".$price[$i]."</td>";
                                    echo "<td>".$categories[$i]."</td>";
                                    echo "<td>".$wirter[$i]."</td>";
                                }
                            $number++;
                            $i++; 
                            }
                        } ?>
                </table>
            </div>
            <div class="add-books" id="add-books">
                <h2>Add Books</h2>
                <br><br>
                <form action="php/insert.php" method="post"enctype="multipart/form-data" >
                    <table>
                        <tr>
                            <td>Book Code(Number):</td>
                            <td><input type="text" name="bno"><sup>(For Example : 101)</sup></td>
                        </tr>
                        <tr>
                            <td>Book Name:</td>
                            <td><input type="text" name="bname"></td>
                        </tr>
                        <tr>
                            <td>Price:</td>
                            <td> <input type="text" name="price"></td>
                        </tr>
                        <tr>
                            <td>Categorie:</td>
                            <td><input type="text" name="categories"></td>
                        </tr>
                        <tr>
                            <td>Writer:</td>
                            <td><input type="text" name="writer"></td>
                        </tr>
                        <tr>
                            <td>Book file(.PDF):</td>
                            <td><input type="file" class="input" name="pdf"></td>
                        </tr>
                        <tr>
                            <td>Profile image:</td>
                            <td><input type="file" class="input" name="filename"><sup>(For display image in website)</sup></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="save"></td>
                        </tr>
                    </table>
                    </form>
                
            </div>
                        
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>

<style>
    /* Global Styles */

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    body {
        background-color: #87CEEB;
        /* Light blue background color */
    }

    /* Left Bar Styles */

    .left-bar {
        position: fixed;
        top: 0;
        left: 0;
        width: 250px;
        height: 100vh;
        background-color: #3498db;
        /* Changed to a bright blue-green color */
        color: #fff;
        padding: 20px;
    }

    .Admin-name {
        margin-bottom: 20px;
    }

    .name {
        font-size: 24px;
        font-weight: bold;
    }

    .btn {
        margin-top: 20px;
    }

    button {
        width: 100%;
        padding: 10px;
        background-color: #005eff;
        border: none;
        border-radius: 5px;
        color: #fff;
        cursor: pointer;
        margin-bottom: 10px;
    }

    button:hover {
        background-color: #87CEEB;
        /* Light blue background color */

    }

    button.active {
        background: #2495eb;

    }

    .logout {
        background-color: #ff0000;
        color: #fff;
    }

    .logout:hover {
        background-color: #ff3333;
    }

    /* Right Main Styles */

    .right-main {
        margin-left: 250px;
        padding: 20px;
    }

    .dashboard {
        background-color: #fff;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .dashboard>div {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: center;
    }

    .user,
    .books {
        flex-basis: 45%;
        margin: 20px;
        padding: 20px;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .user label,
    .books label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
        color: #333;
    }

    .user samp,
    .books samp {
        font-size: 24px;
        font-weight: bold;
        color: #666;
    }

    /* Animation for the numbers */
    .user samp,
    .books samp {
        animation: countUp 2s ease-in-out;
    }

    @keyframes countUp {
        0% {
            transform: scale(0.5);
            opacity: 0;
        }

        100% {
            transform: scale(1);
            opacity: 1;
        }
    }

    .book-list {
        margin-top: 20px;
    }

    .book-list table {
        width: 100%;
        border-collapse: collapse;
    }

    .book-list th,
    .book-list td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: left;
    }

    .book-list th {
        background-color: #f0f0f0;
    }



    .add-books {
        padding: 20px;
        color: #333;
        margin-left: 10%;
    }

    .add-books form {
        display: flex;
        height :100%; 
        flex-direction: column;
    }

    .add-books label {
        margin-bottom: 10px;
    }

    .add-books input {
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    .add-books button {
        background-color: #005eff;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .add-books button:hover {
        background-color: #87CEEB;
    }


    /* Active Tab Styles */

    #dashboard:target,
    #records:target,
    #add-books:target,
    #user-list:target {
        display: block;
    }

    .left-bar a {
        text-decoration: none;
        color: #ffffff;
    }


/* Style the table */
table {
    margin-top :50px ;
  width: 90%;
  border-collapse: collapse;

}

/* Style the table rows */
tr {
  border-bottom: 1px solid #ccc;
}

/* Style the table data */
td {
  padding: 5px;
  vertical-align: top;
}

/* Style the input fields */
input[type="text"], input[type="file"] {
  width: 100%;
  height: 50px;
  margin-bottom: 20px;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
}

/* Style the input fields on focus */
input[type="text"]:focus, input[type="file"]:focus {
  border-color: #aaa;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

/* Style the submit button */
input[type="submit"] {
  width: 100%;
  height: 40px;
  background-color: #4CAF50;
  color: #fff;
  padding: 10px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
}

/* Style the submit button on hover */
input[type="submit"]:hover {
  background-color: #3e8e41;
}

/* Style the sup element */
sup {
  font-size: 12px;
  color: #666;
  vertical-align: super;
}

/* Add some responsive design */
@media only screen and (max-width: 768px) {
  form {
    padding: 10px;
  }
  table {
    margin-bottom: 10px;
  }
  input[type="text"], input[type="file"] {
    height: 30px;
    margin-bottom: 10px;
  }
  input[type="submit"] {
    height: 30px;
  }
}
</style>