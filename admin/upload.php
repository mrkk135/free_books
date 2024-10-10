<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="web/css/form.css">

</head>
<body>

<section class="from" >
<button onclick="history.back()" >back</button>
<center>
<h1>Insert book into Database</h1>
</center>
<form action="db/insert.php" method="post"enctype="multipart/form-data" >
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
</section>
</body>
</html>
<style>
    /* Style the form */

</style>