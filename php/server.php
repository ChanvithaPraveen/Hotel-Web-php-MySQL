<?php
session_start();

// initializing variables
$username = "";
$email = "";
$password = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'db_hotel_management');

// REGISTER USER
if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password_1)) {
        array_push($errors, "Password is required");
    }

    // Validate password strength
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number = preg_match('@[0-9]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);

    if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
        array_push($errors, 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.');
    }
    if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
    }
    if (($password === 'password') || ($password === 'PASSWORD')) {
        array_push($errors, 'Password cannot be password');
    }

    // first check the database to make sure 
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM login_table WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
        if ($user['username'] === $username) {
            array_push($errors, "Username already exists");
        }

        if ($user['email'] === $email) {
            array_push($errors, "email already exists");
        }
    }

    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        $password = md5($password_1); //encrypt the password before saving in the database

        $query = "INSERT INTO login_table (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
        mysqli_query($db, $query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: ../index.php');
    }
}


// LOGIN USER
if (isset($_POST['login_user'])) {
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
    
    // if (last_name.value.length <= 6) {
    //     array_push($errors, 'Password must be longer than 6 characters')
    //   }

    //   if (last_name.value.length >= 20) {
    //     array_push($errors, 'Password must be less than 20 characters')
    //   }



    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM login_table WHERE email='$email' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['email'] = $email;
            $_SESSION['success'] = "You are now logged in";
            echo "<h1><center> Login successful </center></h1>";
            header('location: ../index.php');

            if ($email === 'admin@gmail.com' && $password === '0e7517141fb53f21ee439b355b5a1d0a') {
                header('location: ../php/admin/index.php');
            }
        } else {
            array_push($errors, "Wrong username/password combination");
            header('location: ./login.php');
        }
    }

    //     //to prevent from mysqli injection  
//     $password = md5($password);
//     // $username = stripcslashes($email);  
//     // $password = stripcslashes($password);  
//     $username = mysqli_real_escape_string($db, $email);  
//     $password = mysqli_real_escape_string($db, $password);  

    //     $sql = "select * from login_table where email = '$email' and password = '$password'";  
//     $result = mysqli_query($db, $sql);  
//     $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
//     $count = mysqli_num_rows($result);  

    //     if($count == 1){  
//         echo "<h1><center> Login successful </center></h1>";  
//         echo $email;
//         echo $password;
//     }  
//     else{  
//         echo "<h1> Login failed. Invalid username or password.</h1>";
//     }
}


// RESERVATION
$first_name = '';
$last_name = '';

if (isset($_POST['Reserve'])) {
    $first_name = mysqli_real_escape_string($db, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($db, $_POST['last_name']);

    if (empty($first_name)) {
        array_push($errors, "First name is required");
    }
    if (empty($last_name)) {
        array_push($errors, "Last name is required");
    }
}



// SUBSCRIBE
// $subscribe = "";

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Assign POST variables
//     $subscribe = mysqli_real_escape_string($db, $_POST['Subscribe_btn']);
//     // $subscribe = $_POST['Subscribe_btn'];
//     //insert data into the database
//     $subscribesql = "INSERT INTO subscribers_table (subscriber_email) VALUES ('$subscribe')";
//     if (mysqli_query($db, $subscribesql)) {

//     } else {
//         echo "Error: " . $subscribesql . "<br>" . mysqli_error($db);
//     }

//     // Close connection
//     mysqli_close($db);

//     header('Location: '.$_SERVER['REQUEST_URI']); //refresh page itself
// }

?>