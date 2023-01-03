<?php include('server.php') ?>
<?php include('subscribe.php') ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offer Details</title>
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
                <h1>About Family Fun Offer Facilities</h1>

                <img src="../images/img13.jpg" height="30%" width="30%" alt="image">

                <br><br>
                <p><strong>Welcome to our luxurious hotel, where we strive to provide our guests with the ultimate
                        in
                        comfort
                        and sophistication. Located in the heart of the city, our hotel offers easy access to all of
                        the
                        best attractions and amenities. Our guest rooms and suites are impeccably appointed, with
                        sumptuous
                        beds, fine linens, and state-of-the-art amenities. We also offer a range of dining options,
                        from
                        casual cafes to fine dining restaurants, as well as a full-service spa and fitness center.
                        Whether
                        you're in town for business or pleasure, we have everything you need to make your stay with
                        us
                        truly
                        memorable.</strong>
                    <br /><br />
                    We are located in the heart of Trincomalee, Sri Lanka's vibrant capital city. Our hotel offers easy
                    access to
                    all of the best attractions and amenities, including shopping centers, cultural sites, and
                    dining
                    options. Our guest rooms and suites are impeccably appointed, with sumptuous beds, fine linens,
                    and
                    state-of-the-art amenities. We also offer a range of dining options, from casual cafes to fine
                    dining restaurants, as well as a full-service spa and fitness center. Whether you're in town for
                    business or pleasure, we have everything you need to make your stay with us truly memorable and
                    comfortable.
                    <br /><br />
                    Our luxurious hotel has a rich history dating back over 100 years. During that time, we have
                    established ourselves as a premier destination for travelers seeking the ultimate in comfort and
                    sophistication. Our hotel has received numerous accolades and awards over the years, including a
                    5-star rating from AAA and a spot on Condé Nast Traveler's list of the top hotels in the world.
                    Our
                    guest rooms and suites are impeccably appointed, with sumptuous beds, fine linens, and
                    state-of-the-art amenities. We also offer a range of dining options, from casual cafes to fine
                    dining restaurants, as well as a full-service spa and fitness center. We invite you to
                    experience
                    the rich history and unparalleled luxury of our hotel for yourself.
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