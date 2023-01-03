<?php include('server.php') ?>
<?php include('subscribe.php') ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Details</title>
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
                    <li><a class="active" href="http://localhost/Hotel-Web-php-MySQL/php/about.php">About</a></li>
                    <li><a href="http://localhost/Hotel-Web-php-MySQL/php/gallery.php">Gallery</a></li>
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
                currentSlide(2);
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
                <div class="text">Emerald Bay Inn !</div>
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


        <!-- ******************************* Emerald Bay Inn Body ******************************* -->

        <div>
            <div class="top-topics">
                <h1>About Standard Accomodation Facilities</h1>

                <img src="../images/img19.jpg" height="30%" width="30%" alt="image">

                <br><br>
                <p><strong>Welcome to our luxurious hotel, where we strive to provide our guests with the ultimate
                        in
                        comfort
                        and sophistication.</strong>
                    <br /><br />
                    Experience the perfect getaway with a stay at this 5-star Emerald Bay Inn Hotel, offering an infinity pool,
                    a fitness centre and a plush spa.<br/><br/>

                    Emerald Bay Inn Hotel offers an outdoor pool, sauna room, massage centre and tennis court. <br/>
                    Try Indian food at the nearby restaurants Flavors (300 m) and Ports of Call (1.1 km).<br/>
                    Enjoy easy connectivity to city attractions via Secretariat Halt Train Station (1.3 km).<br/>
                    Emerald Bay Inn Hotel features 7 on-site restaurants serving a range of local and international dishes.
                    <br /><br />
                    Fee for buffet breakfast: LKR 12 for adults and LKR 6 for children (approximately)|Airport shuttle
                    fee: LKR 5700 per vehicle (one way)|Airport shuttle fee per child: LKR 5700 (one-way), (from 1 to 10
                    years old)|Early check-in is available for a fee (subject to availability)|Late check-out is
                    available for a fee (subject to availability)|Rollaway bed fee: LKR 15.0 per day
                    Extra-person charges may apply and vary depending on property policy|Government-issued photo
                    identification and a credit card, debit card, or cash deposit may be required at check-in for
                    incidental charges|Special requests are subject to availability upon check-in and may incur
                    additional charges; special requests cannot be guaranteed|Safety features at this property include a
                    fire extinguisher, a smoke detector, a security system, and a first aid kit|Be prepared: check the
                    latest COVID-19 travel requirements and measures in place for this destination before you travel.
                </p>

            </div>
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
            </div>
            </li>
            </ul>
        </div>

        <!-- copyright -->
        <div class="copyright">
            <p>Copyright 2022 - EmeraldBayInn / emeraldbayinn@gmail.com</p>
        </div>
        </div>