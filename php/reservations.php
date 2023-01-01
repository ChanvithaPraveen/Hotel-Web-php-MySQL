<?php include('server.php') ?>
<?php include('subscribe.php') ?>

<?php

//connect to the database
$server_name = 'localhost';
$user_name = 'root';
$password = '';
$db_name = 'db_hotel_management';
$conn = mysqli_connect($server_name, $user_name, $password, $db_name);
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}


$arrival = "";
$departure = "";
$first_name = "";
$last_name = "";
$email = "";
$phone = "";
$adults = "";
$children = "";
$room_pref = "";

// Output messages
$responses = [];
// Check if the form was submitted
if (isset($_POST['Reserve'])) {
    // Process form data
    // Assign POST variables
    $arrival = $_POST['arrival'];
    $departure = $_POST['departure'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $adults = $_POST['adults'];
    $children = $_POST['children'];
    $room_pref = $_POST['room_pref'];
    $user_query = $_POST['user_query'];

    //insert data into the database
    $sql = "INSERT INTO reservation_table (arrival, departure, first_name, last_name, email, phone, adults, children, room_pref, user_query) VALUES ('$arrival', '$departure', '$first_name', '$last_name', '$email', '$phone', '$adults', '$children', '$room_pref', '$user_query')";
    if (mysqli_query($conn, $sql)) {

    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // // Close connection
    // mysqli_close($conn);
?>
<script>
    alert("Reservation successful");
</script>
<?php
    header('location: ../php/reservations.php');
} ?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservations</title>
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
                    <li><a href="http://localhost/Hotel-Web-php-MySQL/php/logout.php">Logout</a></li>
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
                <div class="text">Visit Sri Lnaka !</div>
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

            <form class="hotel-reservation-form" method="post" action="reservations.php"
                onsubmit="return validate_reservation()">
                <?php include('errors.php'); ?>

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


                    <label for="room_pref">Room Preference</label>
                    <div class="field">
                        <select id="room_pref" name="room_pref" required>
                            <option disabled selected value="">--</option>
                            <option value="Standard">Standard</option>
                            <option value="Deluxe">Deluxe</option>
                            <option value="Suite">Suite</option>
                            <option value="Royal">Royal</option>
                        </select>
                    </div>

                    <label for="user_query">Message</label>
                    <div class="field">
                        <i class="fas fa-file"></i>
                        <input id="user_query" type="text" name="user_query" placeholder="Your Message Here...">
                    </div>


                    <?php if ($responses): ?>
                    <p class="responses">
                        <?php echo implode('<br>', $responses); ?>
                    </p>
                    <?php endif; ?>

                    <input type="submit" name="Reserve" value="Submit">




                </div>
            </form>
        </div>

        <script>
            function validate_reservation() {

                // Validate email adress
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $responses[] = 'Email is not valid!';
                }
                // First name must contain only alphabet characters.
                if (!preg_match('/^[a-zA-Z]+$/', $first_name)) {
                    $responses[] = 'First name must contain only characters!';
                <?php echo ' First name must contain only characters! '; ?>
                        alert("First name must contain only characters!");
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
                    $headers = 'From: '.$from. "\r\n". 'Reply-To: '.$from. "\r\n". 'Return-Path: '.$from. "\r\n". 'X-Mailer: PHP/'.phpversion(). "\r\n". 'MIME-Version: 1.0'. "\r\n". 'Content-Type: text/html; charset=UTF-8'. "\r\n";
                    // Capture the email template file as a string
                    ob_start();
                include 'email-template.php';
                    $email_template = ob_get_clean();
                    // Try to send the mail
                    // if (mail($to, $subject, $email_template, $headers)) {
                    //     // Success
                    //     $responses[] = 'Thank you for your reservation!';
                    // } else {
                    //     // Fail; problem with the mail server...
                    //     $responses[] = 'Message could not be sent! Please check your mail server settings!';
                    // }
                }
            }

        </script>

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
                <p>Copyright 2022 - EmeraldBayInn / emeraldbayinn@gmail.com</p>
            </div>
        </div>