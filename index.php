<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Indigo</title>
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <script src="js/functions.js"></script>

    <!-- This is the content of the page -->
    <section class="main">

        <!-- ******************************* Navigation Bar ******************************* -->

        <!-- Navigation bar section -->
        <div class="nav-section">
            <!-- logo -->
            <a href="#" class="logo">
                <img src="images/Hotel_Indigo_logo.png" alt="logo">
            </a>

            <!-- navigation links -->
            <nav>
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
                <img src="images/img1.jpg" style="width:100%">
                <div class="text">Welcome to Sri Lanka</div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="images/img2.jpg" style="width:100%;">
                <div class="text">Hotel Asia !</div>
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


        <!-- ******************************* Hotel Asia Body ******************************* -->

        <div>
            <div class="top-topics">
                <h1>Hotel Indigo</h1>

                <h2><strong>Hotel Asia is a 3-star hotel located in the heart of Colombo, Sri Lanka. It is a 5-minute
                        walk from
                        the famous Galle Face Green and the National Museum. The hotel is 1.5 km from the Colombo Fort
                        Railway Station and 1.6 km from the Colombo National Hospital. The Bandaranaike International
                        Airport is 35 km away. The hotel offers free WiFi in all areas. The rooms are equipped with a
                        flat-screen TV with satellite channels, a kettle, a shower, a hairdryer and a desk. The rooms
                        are
                        equipped with a private bathroom with a bath. All rooms have a wardrobe. The hotel offers a
                        24-hour
                        front desk, room service and currency exchange for guests. The hotel also offers car rental. The
                        hotel has a restaurant. The nearest airport is Bandaranaike International Airport, 35 km from
                        Hotel
                        Asia. </strong></h2>
                <p> Hotel Indigo is a boutique hotel brand that is part of the InterContinental Hotels Group
                    (IHG). The Hotel Indigo brand is known for its unique and locally inspired design, with each hotel
                    featuring a different theme that reflects the culture and history of its location. Hotel Indigo
                    hotels are typically smaller in size than traditional hotels, and offer a more personalized and
                    intimate experience for guests.

                    A Hotel Indigo website would typically include information about the brand's philosophy and values,
                    as well as details about the various Hotel Indigo locations around the world. The website might also
                    include features such as a reservation system, a loyalty program, and information about amenities
                    and services offered at the hotels.

                    Overall, a Hotel Indigo website would be designed to appeal to travelers who are looking for a more
                    unique and personalized hotel experience, and who value design and local culture. It would likely
                    have a modern and stylish aesthetic, with a focus on visuals and imagery to showcase the brand's
                    design philosophy and the various Hotel Indigo locations.</p>
            </div>

            <hr>

            <div class="top-topics">
                <h1>Exclusive Offers</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat voluptatibus at assumenda, unde
                    error, illum laudantium, perferendis sed aut asperiores quisquam qui voluptate voluptatum suscipit
                    quis expedita doloribus quaerat non?</p>
            </div>
        </div>

        <!-- ******************************* Image Cards ******************************* -->

        <div class="card-container">
            <div class="card">
                <div class="image">
                    <img
                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Gfp-missouri-st-louis-clubhouse-pond-and-scenery.jpg/1199px-Gfp-missouri-st-louis-clubhouse-pond-and-scenery.jpg">
                </div>
                <div class="title">
                    <h1>Write title Here</h1>
                </div>
                <div class="des">
                    <p>You can Add Desccription Here...</p>
                    <button>Read More...</button>
                </div>
            </div>
            <!--cards -->

            <div class="card">
                <div class="image">
                    <img
                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Gfp-missouri-st-louis-clubhouse-pond-and-scenery.jpg/1199px-Gfp-missouri-st-louis-clubhouse-pond-and-scenery.jpg">
                </div>
                <div class="title">
                    <h1>Write title Here</h1>
                </div>
                <div class="des">
                    <p>You can Add Desccription Here...</p>
                    <button>Read More...</button>
                </div>
            </div>
            <!--cards -->

            <div class="card">
                <div class="image">
                    <img src="images/img5.jpg">
                </div>
                <div class="title">
                    <h1>Write title Here</h1>
                </div>
                <div class="des">
                    <p>You can Add Desccription Here...</p>
                    <button>Read More...</button>
                </div>
            </div>
            <!--cards -->

            <div class="card">
                <div class="image">
                    <img
                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Gfp-missouri-st-louis-clubhouse-pond-and-scenery.jpg/1199px-Gfp-missouri-st-louis-clubhouse-pond-and-scenery.jpg">
                </div>
                <div class="title">
                    <h1>Write title Here</h1>
                </div>
                <div class="des">
                    <p>You can Add Desccription Here...</p>
                    <button>Read More...</button>
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