<?php
// SUBSCRIBE
$subscribe = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assign POST variables
    $subscribe = mysqli_real_escape_string($db, $_POST['Subscribe_btn']);
    // $subscribe = $_POST['Subscribe_btn'];
    //insert data into the database
    $subscribesql = "INSERT INTO subscribers_table (subscriber_email) VALUES ('$subscribe')";
    if (mysqli_query($db, $subscribesql)) {

    } else {
        echo "Error: " . $subscribesql . "<br>" . mysqli_error($db);
    }

    // Close connection
    mysqli_close($db);

    header('Location: '.$_SERVER['REQUEST_URI']); //refresh page itself
}
?>