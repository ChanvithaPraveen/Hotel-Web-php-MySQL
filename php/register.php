<?php include('server.php') ?>

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
                    <li><a href="http://localhost/Hotel-Web-php-MySQL/php/location.php">Location</a></li>
                    <li><a href="http://localhost/Hotel-Web-php-MySQL/php/contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>


        <!-- ******************************* Signup Interface ******************************* -->

        <div id="frm">
            <h1>Register</h1>
            <form name="f2" action="register.php" onsubmit="return validation()" method="POST">
                <?php include('errors.php'); ?>

                <p>
                    <label for="username">UserName:</label>
                <div class="field">
                    <i class="fas fa-user"></i>
                    <input id="user" type="email" name="user" placeholder="Enter your email address" required>
                </div>
                </p>
                <p>
                    <label for="password">Password:</label>
                <div class="field">
                    <i class="fas fa-key"></i>
                    <input id="pass" type="password" name="password_1" placeholder="Enter your password" required>
                </div>
                </p>
                <p>
                    <label for="password">Confirm Password:</label>
                <div class="field">
                    <i class="fas fa-key"></i>
                    <input id="pass" type="password" name="password_2" placeholder="Enter your password" required>
                </div>
                </p>
                <p>
                    <input type="submit" id="btn" name="reg_user" value="Register" />
                </p>

                <p>
                    Alredy a member? <a href="login.php">LogIn</a>
                </p>
            </form>
        </div>

        <!-- user data validation -->
        <script>
            function validation() {
                var id = document.f1.user.value;
                var ps = document.f1.pass.value;
                if (id.length == "" && ps.length == "") {
                    alert("User Name and Password fields are empty");
                    return false;
                }
                else {
                    if (id.length == "") {
                        alert("User Name is empty");
                        return false;
                    }
                    if (ps.length == "") {
                        alert("Password field is empty");
                        return false;
                    }
                }
            }  
        </script>


        <!-- ******************************* Hotel Asia Body ******************************* -->

        <div>
            <div class="top-topics">
                <h1>Exclusive Offers</h1>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when
                    looking at its layout.
                    The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
                    opposed to using 'Content here, content here', making it look like readable English.
                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model
                    text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
                    Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected
                    humour and the like).</p>
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
                    <img src="../images/img5.jpg">
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