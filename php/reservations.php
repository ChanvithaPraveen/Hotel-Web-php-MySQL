<?php
// Output messages
$responses = [];
// Check if the form was submitted
if (isset($_POST['arrival'], $_POST['departure'], $_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['phone'], $_POST['adults'], $_POST['children'], $_POST['room_pref'])) {
    // Process form data
    // Assign POST variables
    $arrival = htmlspecialchars($_POST['arrival'], ENT_QUOTES);
    $departure = htmlspecialchars($_POST['departure'], ENT_QUOTES);
    $first_name = htmlspecialchars($_POST['first_name'], ENT_QUOTES);
    $last_name = htmlspecialchars($_POST['last_name'], ENT_QUOTES);
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES);
    $phone = htmlspecialchars($_POST['phone'], ENT_QUOTES);
    $adults = htmlspecialchars($_POST['adults'], ENT_QUOTES);
    $children = htmlspecialchars($_POST['children'], ENT_QUOTES);
    $room_pref = htmlspecialchars($_POST['room_pref'], ENT_QUOTES);
}

// Validate email adress
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $responses[] = 'Email is not valid!';
}
// First name must contain only alphabet characters.
if (!preg_match('/^[a-zA-Z]+$/', $first_name)) {
    $responses[] = 'First name must contain only characters!';
}
// Last name must contain only alphabet characters.
if (!preg_match('/^[a-zA-Z]+$/', $last_name)) {
    $responses[] = 'Last name must contain only characters!';
}

// If there are no errors
if (!$responses) {
    // Where to send the mail? It should be your email address
    $to = 'reservations@yourwebsite.com';
    // Mail from
    $from = 'noreply@yourwebsite.com';
    // Mail subject
    $subject = 'A guest has booked a reservation';
    // Mail headers
    $headers = 'From: ' . $from . "\r\n" . 'Reply-To: ' . $from . "\r\n" . 'Return-Path: ' . $from . "\r\n" . 'X-Mailer: PHP/' . phpversion() . "\r\n" . 'MIME-Version: 1.0' . "\r\n" . 'Content-Type: text/html; charset=UTF-8' . "\r\n";
    // Capture the email template file as a string
    ob_start();
    include 'email-template.php';
    $email_template = ob_get_clean();
    // Try to send the mail
    if (mail($to, $subject, $email_template, $headers)) {
        // Success
        $responses[] = 'Thank you for your reservation!';
    } else {
        // Fail; problem with the mail server...
        $responses[] = 'Message could not be sent! Please check your mail server settings!';
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Page</title>
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
                    <li><a class="active"
                            href="http://localhost/Hotel-Web-php-MySQL/php/reservations.php">Reservations</a></li>
                    <li><a href="http://localhost/Hotel-Web-php-MySQL/php/location.php">Location</a></li>
                    <li><a href="http://localhost/Hotel-Web-php-MySQL/php/contact.php">Contact</a></li>
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
                <img src="../images/img7.jpg" style="width:100%;">
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
                <h1>Reserve Your Vacation Today</h1>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when
                    looking at its layout.
                    The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
                    opposed to using 'Content here, content here', making it look like readable English.
                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model
                    text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
                    Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected
                    humour and the like).
                </p>
            </div>
        </div>

        <div class="booking-box">
            <header>
                <h1><i class="far fa-calendar-alt"></i>Confirm & Checkout Your Reservation</h1>
            </header>

            <form class="hotel-reservation-form" method="post" action="">
                <div class="fields">
                    <!-- Input Elements -->
                    <div class="wrapper">
                        <div>
                            <label for="arrival">Arrival</label>
                            <div class="field">
                                <input id="arrival" type="date" name="arrival" required>
                            </div>
                        </div>
                        <div class="gap"></div>
                        <div>
                            <label for="departure">Departure</label>
                            <div class="field">
                                <input id="departure" type="date" name="departure" required>
                            </div>
                        </div>
                    </div>


                    <div class="wrapper">
                        <div>
                            <label for="first_name">First Name</label>
                            <div class="field">
                                <i class="fas fa-user"></i>
                                <input id="first_name" type="text" name="first_name" placeholder="First Name" required>
                            </div>
                        </div>
                        <div class="gap"></div>
                        <div>
                            <label for="last_name">Last Name</label>
                            <div class="field">
                                <i class="fas fa-user"></i>
                                <input id="last_name" type="text" name="last_name" placeholder="Last Name" required>
                            </div>
                        </div>
                    </div>


                    <label for="email">Email</label>
                    <div class="field">
                        <i class="fas fa-envelope"></i>
                        <input id="email" type="email" name="email" placeholder="Your Email" required>
                    </div>


                    <label for="phone">Phone</label>
                    <div class="field">
                        <i class="fas fa-phone"></i>
                        <input id="phone" type="tel" name="phone" placeholder="Your Phone Number" required>
                    </div>


                    <div class="wrapper">
                        <div>
                            <label for="adults">Adults</label>
                            <div class="field">
                                <select id="adults" name="adults" required>
                                    <option disabled selected value="">--</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                        </div>
                        <div class="gap"></div>
                        <div>
                            <label for="children">Children</label>
                            <div class="field">
                                <select id="children" name="children" required>
                                    <option disabled selected value="">--</option>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <option value="5">5</option>


                    <label for="room_pref">Room Preference</label>
                    <div class="field">
                        <select id="room_pref" name="room_pref" required>
                            <option disabled selected value="">--</option>
                            <option value="Standard">Standard</option>
                            <option value="Deluxe">Deluxe</option>
                            <option value="Suite">Suite</option>
                        </select>
                    </div>


                    <?php if ($responses): ?>
                    <p class="responses">
                        <?php echo implode('<br>', $responses); ?>
                    </p>
                    <?php endif; ?>
                    <input type="submit" value="Reserve">






                </div>
            </form>





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