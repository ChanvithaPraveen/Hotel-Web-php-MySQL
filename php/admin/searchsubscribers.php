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
                        echo '<li><href="http://localhost/Hotel-Web-php-MySQL/php/admin/users.php">Users</a></li>';

                    } ?>
                    <?php if (!isset($_SESSION['email'])) {
                        echo '<li><a href="http://localhost/Hotel-Web-php-MySQL/php/admin/reservations.php">Reservations</a></li>';

                    } ?>
                    <?php if (!isset($_SESSION['email'])) {
                        echo '<li><a a class="active" href="http://localhost/Hotel-Web-php-MySQL/php/admin/subscribers.php">Subscribers</a></li>';
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
                <h1>User Registration Information</h1>
                <p>Below is a list of all hotel users, including guests and staff members. You can use the search bar to
                    filter the list by name, email, or user telephone. You can also click on a user's name to view their
                    detailed profile, or use the action buttons to edit or delete their account.
                </p>
            </div>
        </div>

        <div class="search-section">
            <form name="form1" action="searchsubscribers.php" method="post">
                <input type="text" name="search" id="search" maxlength="40" placeholder="Customer's UserName or Email">
                <input type="submit" name="searchbtn" value="Search" id="searchbtn" />
            </form>
        </div>

        <section>
            <!-- TABLE CONSTRUCTION -->
            <table>
                <tr>
                    <th>Subscriber Id</th>
                    <th>Subscriber Email Address</th>
                </tr>
                <?php
                // (B) PROCESS SEARCH WHEN FORM SUBMITTED
                if (isset($_POST["search"])) {
                    // (B1) SEARCH FOR USERS
                    require "3-search.php";

                    // (C) SEARCH
                    $stmt = $pdo->prepare("SELECT * FROM `subscribers_table` WHERE `subscriber_id` LIKE ? OR `subscriber_email` LIKE ?");
                    $stmt->execute(["%" . $_POST["search"] . "%", "%" . $_POST["search"] . "%"]);
                    $results = $stmt->fetchAll();
                    if (isset($_POST["ajax"])) {
                        echo json_encode($results);
                    }

                    // (B2) DISPLAY RESULTS
                    if (count($results) > 0) {
                        foreach ($results as $r) { ?>
                <tr>
                    <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                    <td>
                        <?php echo $r['subscriber_id']; ?>
                    </td>
                    <td>
                        <?php echo $r['subscriber_email']; ?>
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