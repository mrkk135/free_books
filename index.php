<?php
error_reporting(0);
include("web/php/config.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>BOOK STORE WEBSITE</title>
    <link rel="stylesheet" href="web/css/style.css">
    <link rel="stylesheet" href="web/css/show.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />"

</head>

<body>
    <header></header>

    <!-- carousel -->
    <div class="carousel" id="home">
        <!-- list item -->
        <div class="list">
            <div class="item">
                <img src="image/img1.png">
                <div class="content">
                    <div class="author">Free books</div>
                    <div class="title">WELCOME TO</div>
                    <div class="topic">BOOK STORE</div>
                    <div class="des">
                        <!-- for des-->
                    </div>
                    <div class="buttons">
                        <button>SEE MORE</button>
                        <button>SUBSCRIBE</button>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="image/img2.jpg">
                <div class="content">
                    <div class="author">Free books</div>
                    <div class="title">FOR THE</div>
                    <div class="topic">COLLEGE STUDENT'S</div>
                    <div class="des">
                        <!-- for des-->
                    </div>
                    <div class="buttons">
                        <button>SEE MORE</button>
                        <button>SUBSCRIBE</button>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="image/img3.jpg">
                <div class="content">
                    <div class="author">Free books</div>
                    <div class="title">DON'T WORRY</div>
                    <div class="topic">WE HAVE FREE BOOKS</div>
                    <div class="des">
                        <!-- for des-->
                    </div>
                    <div class="buttons">
                        <button>SEE MORE</button>
                        <button>SUBSCRIBE</button>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="image/img4.jpg">
                <div class="content">
                    <div class="author">Free books</div>
                    <div class="title">JUST DO</div>
                    <div class="topic">BETTER LREANING</div>
                    <div class="des">
                        <!-- for des-->
                    </div>
                    <div class="buttons">
                        <button>SEE MORE</button>
                        <button>SUBSCRIBE</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- list thumnail -->
        <div class="thumbnail">
            <div class="item">
                <img src="image/img1.png">
                <div class="content">
                    <div class="title">
                        Name Slider
                    </div>
                    <div class="description">
                        Description
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="image/img2.jpg">
                <div class="content">
                    <div class="title">
                        Name Slider
                    </div>
                    <div class="description">
                        Description
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="image/img3.jpg">
                <div class="content">
                    <div class="title">
                        Name Slider
                    </div>
                    <div class="description">
                        Description
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="image/img4.jpg">
                <div class="content">
                    <div class="title">
                        Name Slider
                    </div>
                    <div class="description">
                        Description
                    </div>
                </div>
            </div>
        </div>
        <!-- next prev -->

        <div class="arrows">
            <button id="prev"><</button>
                <button id="next">></button>
        </div>
        <!-- time running -->
        <div class="time"></div>
    </div>
    <script src="web/js/app.js"></script>


    <!--------------------------------------------------------------------------------------------------------------------->
    <div class="section">
        <nav>
            <div class="logo">
                <img src="admin/book/image/logo1.jpeg">
            </div>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#books">Books</a></li>
                <li><a href="#arrivals">Arrivals</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#about">About</a></li>
            </ul>
            <div class="social_icon">
                <input type="text" placeholder="Search Books...">

                <style>
                    input{
                        border-radius: 20px;
                        padding-left: 20px;
                        height: 25px;
                        width: 250px;
                        position: relative;
                        bottom: 1px;
                    }
                </style>
                <i class="fa-solid fa-magnifying-glass"></i>
                <i class="fa-solid fa-heart"></i>
                <a href="index_login.php" style="color:#000;"><i class="fa-solid fa-user"></i>
                <label>
                    <?php $u_email = readNameFromFile();
                    echo $u_email; ?>
                </label></a>
                <a href="web/php/logout.php" style="color:#000;" ><i class="fa-solid fa-sign-out"></i></a>

            </div>
        </nav>

    </div>
    <!--Books-->

    <section class="books" id="books">
        <div class="featured_books">
            <h1>Featured Books</h1>
            <center><h2>For open the all pdf (login first)</h2></center>
            <div class="featured_books_box">
                <?php
                $code = "select * from books_store";
                $run = mysqli_query($conn, $code);

                if (mysqli_num_rows($run) > 0) {
                    while ($row = mysqli_fetch_assoc($run)) {
                        $names[$i] = $row['b_name'];
                        $price[$i] = $row['price'];
                        $categories[$i] = $row['categories'];
                        $path[$i] = $row['path'];
                        $img[$i] = $row['img'];
                        $wirter[$i] = $row['writer'];
                        if ($i < 5) 
                        {
                        ?>
                            <div class="featured_books_card">
                                <div class='featured_books_img'>
                                    <img src='admin/<?php echo $img[$i]; ?>'>
                                </div>
                                <div class='featured_books_tag'>
                                    <h2><?php echo $names[$i]; ?></h2>
                                    <p class="writer"><?php echo $wirter[$i]; ?></p>
                                    <div class="categories"><?php echo $categories[$i]; ?></div>
                                    <p class="book_price">Free<sub><del><?php echo $price[$i]; ?></del></sub></p>
                                    <?php
                                    if(readNameFromFile() == 0){
                                        echo "<a href='#' class='f_btn'>Open .PDF</a>";
                                    }else{
                                        echo "<a href='admin/$path[$i]' class='f_btn'>Open .PDF</a>";

                                    }
                                    ?>
                            </div>
                        </div>
                <?php }
                    $i++;
                } ?>
            </div>
        </div>
    </section>


    <!--Arrivals-->

    <section class="arrivals" id="arrivals">
        <div class="div">
            <h2>New Arrivals</h2>
        </div>

        <div class="arrivals_box">
            <?php
            $code = "select * from books_store ORDER BY b_no ASC";
            $r = mysqli_query($conn, $code);
            $j = 0;
            if (mysqli_num_rows($r) > 0) {
                while ($row = mysqli_fetch_assoc($r)) {
                    $names[$j] = $row['b_name'];
                    $img[$j] = $row['img'];
                    if ($j < 8) { ?>
                        <div class="arrivals_card">
                            <div class="arrivals_image">
                                <img src="admin/<?php echo $img[$j]; ?>">
                            </div>
                            <div class="arrivals_tag">
                                <p><?php echo $names[$j]; ?></p>
                                <div class="arrivals_icons">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star-half-stroke"></i>
                                </div>
                                <a href="#" class="arrivals_btn">Read More</a>
                            </div>
                        </div><?php }
                    $i++;
                }
            }} ?>
        </div>

    </section>

    <!--Services-->

    <section class="services" id="services">

        <div class="services_box">
            <div class="services_card">
                <i class="fa-sharp fa-solid fa-truck-fast"></i>
                <h3>Fast Delivery</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
            </div>

            <div class="services_card">
                <i class="fa-solid fa-headset"></i></i>
                <h3>24 x 7</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
            </div>

            <div class="services_card">
                <i class="fa-solid fa-tag"></i>
                <h3>Best deal</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
            </div>

            <div class="services_card">
                <i class="fa-solid fa-lock"></i>
                <h3>Secure Payment</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
            </div>
        </div>
    </section>

    <!--About-->

    <section class="about" id="about">

        <div class="about_image">
            <img src="admin/book/image/about.png">
        </div>
        <div class="about_tag">
            <h1>About Us</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt maxime odio tempore deserunt voluptate
                similique, hic suscipit reprehenderit fugit perferendis quam, saepe dolorem labore quae nihil vitae
                iure, voluptas ab!
            </p>
            <a href="#" class="about_btn">Read More</a>
        </div>
    </section>



</body>

</html>