<?php include('php/server.php') ?>
<?php include('php/subscribe.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emerald Bay Inn</title>
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>
    <script src="js/functions.js"></script>

    <!-- This is the content of the page -->
    <section class="main">

        <!-- ******************************* Navigation Bar ******************************* -->

        <!-- Navigation bar section -->
        <div class="nav-section">
            <!-- logo -->
            <a href="http://localhost/Hotel-Web-php-MySQL/index.php" class="logo">
                <img src="images/Hotel_Indigo_logo.png" alt="logo">
            </a>

            <!-- navigation links -->
            <nav>
                <!-- <input type="checkbox" id="check"> -->
                <label for="check" class="checkbutton">
                    <i class="fas fa-bars"></i>
                </label>
                <ul>
                    <li><a class="active" href="http://localhost/Hotel-Web-php-MySQL/index.php">Home</a></li>
                    <li><a href="http://localhost/Hotel-Web-php-MySQL/php/about.php">About</a></li>
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
                currentSlide(1);
            });
        </script>

        <div class="slideshow-container">
            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="images/img1.jpg" style="width:100%">
                <div class="text">Welcome to Sri Lanka</div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="images/img2.jpg" style="width:100%;">
                <div class="text">Emerald Bay Inn !</div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="images/img3.jpg" style="width:100%">
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
                <h1>Emerald Bay Inn</h1>

                <h2><strong>Emerald Bay Inn is a 5-star hotel located in Trincomalee, Sri Lanka. It is a 5-minute
                        walk from
                        the famous Galle Face Green and the National Museum. The hotel is 1.5 km from the Trincomalee Fort
                        Railway Station and 1.6 km from the Trincomalee National Hospital. The Trincomalee International
                        Airport is 35 km away. The hotel offers free WiFi in all areas. The rooms are equipped with a
                        flat-screen TV with satellite channels, a kettle, a shower, a hairdryer and a desk. The rooms
                        are
                        equipped with a private bathroom with a bath. All rooms have a wardrobe. The hotel offers a
                        24-hour
                        front desk, room service and currency exchange for guests. The hotel also offers car rental. The
                        hotel has a restaurant. The nearest airport is Trincomalee International Airport, 35 km from
                        Emerald Bay Inn </strong></h2>
                <p> Emerald Bay Inn is a boutique hotel brand that is part of the InterContinental Hotels Group
                    (IHG). The Emerald Bay Inn brand is known for its unique and locally inspired design, with each hotel
                    featuring a different theme that reflects the culture and history of its location. Hotel Indigo
                    hotels are typically smaller in size than traditional hotels, and offer a more personalized and
                    intimate experience for guests.

                    A Emerald Bay Inn website would typically include information about the brand's philosophy and values,
                    as well as details about the various Emerald Bay Inn locations around the world. The website might also
                    include features such as a reservation system, a loyalty program, and information about amenities
                    and services offered at the hotels.

                    Overall, a Emerald Bay Inn website would be designed to appeal to travelers who are looking for a more
                    unique and personalized hotel experience, and who value design and local culture. It would likely
                    have a modern and stylish aesthetic, with a focus on visuals and imagery to showcase the brand's
                    design philosophy and the various Emerald Bay Inn locations.</p>
            </div>

            <hr>

            <div class="top-topics">
                <h1>Hotel Accomodation Types</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat voluptatibus at assumenda, unde
                    error, illum laudantium, perferendis sed aut asperiores quisquam qui voluptate voluptatum suscipit
                    quis expedita doloribus quaerat non?</p>
            </div>
        </div>

        <!-- ******************************* Image Cards ******************************* -->

        <div class="card-container">
            <div class="card">
                <div class="image">
                    <img src="./images/img20.jpg">
                </div>
                <div class="title">
                    <h1>Standard Accomodation</h1>
                </div>
                <div class="des">
                    <p>Book your stay at least 30 days in
                        advance and receive a 10% discount on your room rate.</p>
                    <button><a href="./php/roomdetails.php">Read More...</a></button>
                </div>
            </div>
            <!--cards -->

            <div class="card">
                <div class="image">
                    <img src="./images/img18.jpg">
                </div>
                <div class="title">
                    <h1>Deluxe Accomodation</h1>
                </div>
                <div class="des">
                    <p>Stay with us for 5 nights or more
                        and receive a 15% discount on your room rate.</p>
                    <button><a href="./php/roomdetails.php">Read More...</a></button>
                </div>
            </div>
            <!--cards -->

            <div class="card">
                <div class="image">
                    <img src="./images/img19.jpg">
                </div>
                <div class="title">
                    <h1>Suite Accomodation</h1>
                </div>
                <div class="des">
                    <p>Enjoy a relaxing weekend at our hotel and
                        receive a 20% discount on your room rate.</p>
                    <button><a href="./php/roomdetails.php">Read More...</a></button>
                </div>
            </div>
            <!--cards -->

            <div class="card">
                <div class="image">
                    <img src="./images/img17.jpg">
                </div>
                <div class="title">
                    <h1>Royal Accomodation</h1>
                </div>
                <div class="des">
                    <p>Bring the whole family along and receive a 25%
                        discount on your room rate for up to 2 children under the age of 12.</p>
                    <button><a href="./php/roomdetails.php">Read More...</a></button>
                </div>
            </div>
            <!--cards -->
        </div>

        <hr>


        <!-- ******************************* Footer ******************************* -->


        <div class="footer-container">
            <!-- footer landscape image -->
            <div class="footer-image">
                <img src="images/img5.jpg" alt="footer-image" width="100%" height="200px">
            </div>

            <!-- footer content -->
            <div class="footer-content">
                <img src="images/Hotel_Indigo_logo.png" alt="logo">
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
                <p>Copyright 2022 - EmeraldBayInn / emeraldbayinn@gmail.com</p>
            </div>
        </div>