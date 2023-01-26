<?php
session_start();
include('config.php');

$my_email = $_POST['my_email'];
$password = $_POST['password'];
$my_name = $_POST['my_name'];





// checking is user already exist or not 
$check_email = $con->query("SELECT * FROM user  WHERE email='$my_email'");
if (mysqli_num_rows($check_email) > 0) {
    echo '<script>
    window.alert("User already exist, Please try to signin!");
    window.location.href="index.php";
    </script>';
} else {
    $query = mysqli_query($con, "INSERT INTO user(`user_name`, `email`, `password`) values('$my_name', '$my_email', '$password')");
    if ($query) {
        $check = $con->query("SELECT * FROM user  WHERE email='$my_email'");
        while ($row = mysqli_fetch_assoc($check)) {
            // $_SESSION['status'] = 'loggedin';
            $_SESSION['active_id'] = $row['id'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['username'] = $row['user_name'];
            $_SESSION['status'] = 'active';
        }
        echo '<script>
            window.alert("Successfully Signin!");
        </script';
        header("location:index.php");
    }
}
