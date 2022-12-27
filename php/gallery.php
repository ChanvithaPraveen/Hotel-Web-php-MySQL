<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Page</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <script src="../js/functions.js"></script>

    <!-- This is the content of the page -->
    <section class="main">

        <!-- ******************************* Navigation Bar ******************************* -->

        <!-- Navigation bar section -->
        <div class="nav-section">
            <!-- logo -->
            <a href="#" class="logo">
                <img src="../images/Hotel_Indigo_logo.png" alt="logo">
            </a>

            <!-- navigation links -->
            <nav>
                <ul>
                    <li><a href="http://localhost/Hotel-Web-php-MySQL/index.php">Home</a></li>
                    <li><a href="http://localhost/Hotel-Web-php-MySQL/php/about.php">About</a></li>
                    <li><a class="active" href="http://localhost/Hotel-Web-php-MySQL/php/gallery.php">Gallery</a></li>
                    <li><a href="http://localhost/Hotel-Web-php-MySQL/php/offers.php">Offers</a></li>
                    <!-- <li><a href="http://localhost/Hotel-Web-php-MySQL/php/reservations.php">Reservations</a></li> -->
                    <?php if (isset($_SESSION['email'])) {
                        echo '<li><a href="http://localhost/Hotel-Web-php-MySQL/php/reservations.php">Reservations</a></li>';
                        
                    } ?>
                    <li><a href="http://localhost/Hotel-Web-php-MySQL/php/location.php">Location</a></li>
                    <li><a href="http://localhost/Hotel-Web-php-MySQL/php/contact.php">Contact</a></li>
                    <!-- <li><a href="http://localhost/Hotel-Web-php-MySQL/php/logout.php">Logout</a></li> -->
                    <?php if (isset($_SESSION['email'])) {
                        echo '<li><a href="http://localhost/Hotel-Web-php-MySQL/php/logout.php">Logout</a></li>';
                        
                    } ?>
                    <?php if (! (isset($_SESSION['email']))) {
                        echo '<li><a href="http://localhost/Hotel-Web-php-MySQL/php/login.php">Login</a></li>';
                        
                    } ?>
                </ul>
            </nav>
        </div>


        <!-- *******************************Image slide show ******************************* -->

        <!-- load default image when reload -->
        <script>
            window.addEventListener("load", function () {
                currentSlide(1);
            });
        </script>

        <div class="slideshow-container">
            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="../images/img1.jpg" style="width:100%">
                <div class="text">Welcome to Sri Lanka</div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="../images/img2.jpg" style="width:100%;">
                <div class="text">Hotel Asia !</div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="../images/img3.jpg" style="width:100%">
                <div class="text">About Us</div>
            </div>

            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>
        </div>
        <br>
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>


        <!-- ******************************* Gallery ******************************* -->

        <div class="top-topics">
            <h1>Image Gallery</h1>
        </div>
        <br><br>

        <div class="gallery">
            <?php
            // (B) GET IMAGES IN GALLERY FOLDER
            $dir = __DIR__ . DIRECTORY_SEPARATOR . "../images" . DIRECTORY_SEPARATOR;
            $images = glob("$dir*.{jpg,jpeg,gif,bmp,webp}", GLOB_BRACE);

            // (C) OUTPUT IMAGES
            foreach ($images as $i) {
                printf("<img src='../images/%s'>", rawurlencode(basename($i)));
            }
            ?>
        </div>

        <script>
            window.addEventListener("DOMContentLoaded", () => {
                // (A) GET ALL IMAGES
                var all = document.querySelectorAll(".gallery img");

                // (B) CLICK ON IMAGE TO TOGGLE FULLSCREEN
                if (all.length > 0) {
                    for (let img of all) {
                        img.onclick = () => { img.classList.toggle("full"); };
                    }
                }
            });
        </script>

        <br><br>

        <!-- ******************************* Footer ******************************* -->

        <hr>
        <br><br>
        <div class="footer-container">
            <!-- footer landscape image -->
            <div class="footer-image">
                <img src="../images/img5.jpg" alt="footer-image" width="100%" height="200px">
            </div>

            <!-- footer content -->
            <div class="footer-content">
                <img src="../images/Hotel_Indigo_logo.png" alt="logo">
                <ul>
                    <li><a href="http://localhost/Hotel-Web-php-MySQL/php/about.php">About Us</a></li>
                    <li><a href="http://localhost/Hotel-Web-php-MySQL/php/gallery.php">Gallery</a></li>
                    <li><a href="http://localhost/Hotel-Web-php-MySQL/php/contact.php">Contact Us</a></li>
                    <li><a href="http://localhost/Hotel-Web-php-MySQL/php/location.php">Location</a></li>
                    <li>
                        <div class="subscribe">
                            <p>Subscribe to get Latest Offers</p>
                            <input type="text" placeholder="Enter Your Email">
                        </div>
                    </li>
                </ul>
            </div>

            <!-- copyright -->
            <div class="copyright">
                <p>Copyright 2022 - HotelIndigo / hotelindigo@gmail.com</p>
            </div>
        </div>
    </section>