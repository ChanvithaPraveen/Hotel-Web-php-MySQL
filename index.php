<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Page</title>
    <link rel="stylesheet" href="css/styles.css" />

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
                <img src="images/4.jpg" alt="logo">
            </a>

            <!-- navigation links -->
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="offers.php">Offers</a></li>
                    <li><a href="reservations.php">Reservations</a></li>
                    <li><a href="location.php">Location</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>


        <!-- *******************************Image slide show ******************************* -->

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
                <h1>Hotel Asia</h1>
                <p>Hotel Asia is a 3-star hotel located in the heart of Colombo, Sri Lanka. It is a 5-minute walk from
                    the famous Galle Face Green and the National Museum. The hotel is 1.5 km from the Colombo Fort
                    Railway Station and 1.6 km from the Colombo National Hospital. The Bandaranaike International
                    Airport is 35 km away. The hotel offers free WiFi in all areas. The rooms are equipped with a
                    flat-screen TV with satellite channels, a kettle, a shower, a hairdryer and a desk. The rooms are
                    equipped with a private bathroom with a bath. All rooms have a wardrobe. The hotel offers a 24-hour
                    front desk, room service and currency exchange for guests. The hotel also offers car rental. The
                    hotel has a restaurant. The nearest airport is Bandaranaike International Airport, 35 km from Hotel
                    Asia.</p>
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

        <div class="card">
            <div class="image">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Gfp-missouri-st-louis-clubhouse-pond-and-scenery.jpg/1199px-Gfp-missouri-st-louis-clubhouse-pond-and-scenery.jpg">
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
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Gfp-missouri-st-louis-clubhouse-pond-and-scenery.jpg/1199px-Gfp-missouri-st-louis-clubhouse-pond-and-scenery.jpg">
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
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Gfp-missouri-st-louis-clubhouse-pond-and-scenery.jpg/1199px-Gfp-missouri-st-louis-clubhouse-pond-and-scenery.jpg">
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
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Gfp-missouri-st-louis-clubhouse-pond-and-scenery.jpg/1199px-Gfp-missouri-st-louis-clubhouse-pond-and-scenery.jpg">
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
