<?php include('./server.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
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
                        echo '<li><a class="active" href="http://localhost/Hotel-Web-php-MySQL/php/admin/reservations.php">Reservations</a></li>';

                    } ?>
                    <?php if (!isset($_SESSION['email'])) {
                        echo '<li><a href="http://localhost/Hotel-Web-php-MySQL/php/admin/subscribers.php">Subscribers</a></li>';
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
                <h1>User Reservation Information</h1>
                <p>Welcome to the hotel reservation manager! From here, you can view, edit, and manage all of your
                    hotel's reservations. Use the search bar to filter the list by reservation number, guest name, or
                    arrival date. You can also click on a reservation to view its detailed information, or use the
                    action buttons to cancel or confirm the reservation.
                </p>
            </div>
        </div>

        <div class="search-section">
            <form name="form1" action="searchreservations.php" method="post">
                <input type="text" name="search" id="search" maxlength="40" placeholder="Customer's UserName or Email">
                <input type="submit" name="searchbtn" value="Search" id="searchbtn" />
            </form>
        </div>

        <section>
            <!-- TABLE CONSTRUCTION -->
            <table>
                <tr>
                    <th>Res. Id</th>
                    <th>Arrival</th>
                    <th>Departure</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email Address</th>
                    <th>Phone No</th>
                    <th>No. of Adults</th>
                    <th>No. of Children</th>
                    <th>Room Type</th>
                    <th>User Message</th>
                </tr>
                <!-- PHP CODE TO FETCH DATA FROM ROWS -->
                <?php

                // LOOP TILL END OF DATA
                while ($rows = $result_two->fetch_assoc()) {
                ?>
                <tr>
                    <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                    <td>
                        <?php echo $rows['reservation_id']; ?>
                    </td>
                    <td>
                        <?php echo $rows['arrival']; ?>
                    </td>
                    <td>
                        <?php echo $rows['departure']; ?>
                    </td>
                    <td>
                        <?php echo $rows['first_name']; ?>
                    </td>
                    <td>
                        <?php echo $rows['last_name']; ?>
                    </td>
                    <td>
                        <?php echo $rows['email']; ?>
                    </td>
                    <td>
                        <?php echo $rows['phone']; ?>
                    </td>
                    <td>
                        <?php echo $rows['adults']; ?>
                    </td>
                    <td>
                        <?php echo $rows['children']; ?>
                    </td>
                    <td>
                        <?php echo $rows['room_pref']; ?>
                    </td>
                    <td>
                        <?php echo $rows['user_query']; ?>
                    </td>
                </tr>
                <?php
                }
                ?>


                <?php
// (B) PROCESS SEARCH WHEN FORM SUBMITTED
if (isset($_POST["search"])) {
    // (B1) SEARCH FOR USERS
    require "3-search.php";

    // (C) SEARCH
    $stmt = $pdo->prepare("SELECT * FROM `reservations_table` WHERE `first_name` LIKE ? OR `last_name` LIKE ? `email` LIKE ? OR `phone` LIKE ? ");
    $stmt->execute(["%" . $_POST["search"] . "%", "%" . $_POST["search"] . "%"]);
    $results = $stmt->fetchAll();
    if (isset($_POST["ajax"])) {
        echo json_encode($results);
    }

    // (B2) DISPLAY RESULTS
    if (count($results) > 0) {
        foreach ($results as $r) {
?>
                <tr>
                    <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                    <td>
                        <?php echo $rows['reservation_id']; ?>
                    </td>
                    <td>
                        <?php echo $rows['arrival']; ?>
                    </td>
                    <td>
                        <?php echo $rows['departure']; ?>
                    </td>
                    <td>
                        <?php echo $rows['first_name']; ?>
                    </td>
                    <td>
                        <?php echo $rows['last_name']; ?>
                    </td>
                    <td>
                        <?php echo $rows['email']; ?>
                    </td>
                    <td>
                        <?php echo $rows['phone']; ?>
                    </td>
                    <td>
                        <?php echo $rows['adults']; ?>
                    </td>
                    <td>
                        <?php echo $rows['children']; ?>
                    </td>
                    <td>
                        <?php echo $rows['room_pref']; ?>
                    </td>
                    <td>
                        <?php echo $rows['user_query']; ?>
                    </td>
                </tr>
                <!-- printf("<div>%s - %s</div>", $r["username"],  $r["email"]); -->
                <?php
        }
    } else {
        echo "No results found";
    }
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