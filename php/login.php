<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
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
                    <li><a href="http://localhost/Hotel-Web-php-MySQL/php/offers.php">Offers</a></li>
                    <li><a href="http://localhost/Hotel-Web-php-MySQL/php/location.php">Location</a></li>
                    <li><a href="http://localhost/Hotel-Web-php-MySQL/php/contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>


        <!-- *******************************Login Interface ******************************* -->

        <div class="bg-img">
            <div id="frm">
                <h1>Login</h1>
                <form name="f1" action="login.php" onsubmit="return validation()" method="POST">
                    <?php include('errors.php'); ?>
                    <p>
                        <label for="email">Email:</label>
                    <div class="field">
                        <i class="fas fa-user"></i>
                        <input id="email" type="email" name="email" placeholder="Enter your email address"
                            value="<?php echo $email; ?>">
                    </div>
                    </p>
                    <p>
                        <label for="password">Password:</label>
                    <div class="field">
                        <i class="fas fa-key"></i>
                        <input id="password" type="password" name="password" placeholder="Enter your password">
                    </div>
                    </p>
                    <p>
                        <input type="submit" id="btn" name="login_user" value="Login" />
                    </p>

                    <p>
                        Not yet a member? <a href="register.php">Sign up</a>
                    </p>
                </form>
            </div>
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