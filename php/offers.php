<?php include('server.php') ?>
<?php include('subscribe.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offers</title>
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
                    <li><a href="http://localhost/Hotel-Web-php-MySQL/php/gallery.php">Gallery</a></li>
                    <li><a class="active" href="http://localhost/Hotel-Web-php-MySQL/php/offers.php">Offers</a></li>
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
                    <?php if (!(isset($_SESSION['email']))) {
                        echo '<li><a href="http://localhost/Hotel-Web-php-MySQL/php/login.php">Login</a></li>';

                    } ?>
                </ul>
            </nav>
        </div>


        <!-- *******************************Image slide show ******************************* -->

        <!-- load default image when reload -->
        <script>
            window.addEventListener("load", function () {
                currentSlide(3);
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


        <!-- ******************************* Hotel Asia Body ******************************* -->

        <div>
            <div class="top-topics">
                <h1>Exclusive Offers</h1>
                <p><strong>"Welcome to our special offers page! We have a variety of exciting promotions and discounts
                        available
                        for our guests. Take a look at what we have on offer, and book your stay with us today to take
                        advantage of these great deals.</strong></br>
                </p>

                <ul>
                    <li>Early Bird Special:&nbsp;&nbsp;&nbsp; Book your stay at least 30 days in
                        advance and receive a 10% discount on your room rate.</li>
                    <li>Stay Longer:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Stay with us for 5
                        nights or more
                        and receive a 15% discount on your room rate.</li>
                    <li>Weekend Getaway:&nbsp;&nbsp;Enjoy a relaxing weekend at our hotel and
                        receive a 20% discount on your room rate.
                    </li>
                    <li>Family Fun:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bring the
                        whole family along and receive a 25%
                        discount on your room rate for up to 2 children under the age of 12.</li>
                </ul>
                <br>

                <p>
                    These are just a few of the special offers that we have available. Be sure to check back often, as
                    we are constantly adding new promotions and discounts. We look forward to welcoming you to our hotel
                    and providing you with an unforgettable stay."
                </p>
            </div>
        </div>

        <!-- ******************************* Image Cards ******************************* -->

        <div class="card-container">
            <div class="card">
                <div class="image">
                    <img src="../images/img13.jpg">
                </div>
                <div class="title">
                    <h1>Early Bird Special</h1>
                </div>
                <div class="des">
                    <p>Book your stay at least 30 days in
                        advance and receive a 10% discount on your room rate.</p>
                    <button><a href="../php/offerdetails.php">Read More...</a></button>
                </div>
            </div>
            <!--cards -->

            <div class="card">
                <div class="image">
                    <img src="../images/img14.png">
                </div>
                <div class="title">
                    <h1>Stay Longer</h1>
                </div>
                <div class="des">
                    <p>Stay with us for 5 nights or more
                        and receive a 15% discount on your room rate.</p>
                    <button><a href="../php/offerdetails.php">Read More...</a></button>
                </div>
            </div>
            <!--cards -->

            <div class="card">
                <div class="image">
                    <img src="../images/img15.jpg">
                </div>
                <div class="title">
                    <h1>Weekend Getaway</h1>
                </div>
                <div class="des">
                    <p>Enjoy a relaxing weekend at our hotel and
                        receive a 20% discount on your room rate.</p>
                    <button><a href="../php/offerdetails.php">Read More...</a></button>
                </div>
            </div>
            <!--cards -->

            <div class="card">
                <div class="image">
                    <img src="../images/img16.jpg">
                </div>
                <div class="title">
                    <h1>Family Fun</h1>
                </div>
                <div class="des">
                    <p>Bring the whole family along and receive a 25%
                        discount on your room rate for up to 2 children under the age of 12.</p>
                    <button><a href="../php/offerdetails.php">Read More...</a></button>
                </div>
            </div>
            <!--cards -->

            <div class="card">
                <div class="image">
                    <img src="../images/img15.jpg">
                </div>
                <div class="title">
                    <h1>Write title Here</h1>
                </div>
                <div class="des">
                    <p>You can Add Desccription Here...</p>
                    <button><a href="../php/offerdetails.php">Read More...</a></button>
                </div>
            </div>
            <!--cards -->

            <div class="card">
                <div class="image">
                    <img src="../images/img14.png">
                </div>
                <div class="title">
                    <h1>Write title Here</h1>
                </div>
                <div class="des">
                    <p>You can Add Desccription Here...</p>
                    <button><a href="../php/offerdetails.php">Read More...</a></button>
                </div>
            </div>
            <!--cards -->

            <div class="card">
                <div class="image">
                    <img src="../images/img13.jpg">
                </div>
                <div class="title">
                    <h1>Write title Here</h1>
                </div>
                <div class="des">
                    <p>You can Add Desccription Here...</p>
                    <button><a href="../php/offerdetails.php">Read More...</a></button>
                </div>
            </div>
            <!--cards -->
        </div>

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
                            <form <?php echo $_SERVER['PHP_SELF']; ?> method="POST">
                                <input type="email" class="inptfld" name="Subscribe_btn" placeholder=" Your Email"
                                    required>
                                <input type="submit" class="subscribebtn" name="Subscribe">
                            </form>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- copyright -->
            <div class="copyright">
                <p>Copyright 2022 - HotelIndigo / hotelindigo@gmail.com</p>
            </div>
        </div>