<?php include('./server.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Subscribers</title>
    <link rel="stylesheet" href="./styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

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
                    <li><a href="http://localhost/Hotel-Web-php-MySQL/php/admin/index.php">Dashboard</a>
                    </li>

                    <?php if (!isset($_SESSION['email'])) {
                        echo '<li><a href="http://localhost/Hotel-Web-php-MySQL/php/admin/users.php">Users</a></li>';

                    } ?>
                    <?php if (!isset($_SESSION['email'])) {
                        echo '<li><a href="http://localhost/Hotel-Web-php-MySQL/php/admin/reservations.php">Reservations</a></li>';

                    } ?>
                    <?php if (!isset($_SESSION['email'])) {
                        echo '<li><a class="active" href="http://localhost/Hotel-Web-php-MySQL/php/admin/subscribers.php">Subscribers</a></li>';
                    } ?>

                    <?php if (!isset($_SESSION['email'])) {
                        echo '<li><a href="http://localhost/Hotel-Web-php-MySQL/php/logout.php">Logout</a></li>';

                    } ?>
                    <?php if ((isset($_SESSION['email']))) {
                        echo '<li><a href="http://localhost/Hotel-Web-php-MySQL/php/login.php">Login</a></li>';

                    } ?>
                </ul>
            </nav>
        </div>


        <!-- ******************************* Hotel Asia Body ******************************* -->

        <div>
            <div class="top-topics">
                <h1>About Our Luxury Hotel Facilities</h1>
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


        <section>
            <!-- TABLE CONSTRUCTION -->
            <table>
                <tr>
                    <th>Subscriber Id</th>
                    <th>Subscriber Email Address</th>
                </tr>
                <!-- PHP CODE TO FETCH DATA FROM ROWS -->
                <?php
            // LOOP TILL END OF DATA
            while ($rows = $result_three->fetch_assoc()) {
            ?>
                <tr>
                    <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                    <td>
                        <?php echo $rows['subscriber_id']; ?>
                    </td>
                    <td>
                        <?php echo $rows['subscriber_email']; ?>
                    </td>
                </tr>
                <?php
            }
            ?>
            </table>
        </section>


        <!-- ******************************* Footer ******************************* -->

        <br><br>
        <div class="footer-container">
            <!-- copyright -->
            <div class="copyright">
                <p>Copyright 2022 - HotelIndigo / hotelindigo@gmail.com</p>
            </div>
        </div>