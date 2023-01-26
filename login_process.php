<?php
session_start();
include('config.php');

$email = $_POST['email'];
$password = $_POST['password'];

$query = mysqli_query($con, "SELECT * from user where email = '$email' and password = '$password'");
if (mysqli_num_rows($query) > 0) {
    while ($row = mysqli_fetch_assoc($query)) {
        // $_SESSION['status'] = 'loggedin';
        $_SESSION['active_id'] = $row['id'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['username'] = $row['user_name'];
        $_SESSION['status'] = 'active';
    }
    header("location:index.php");
} else {
    echo '<script>
        window.alert("You are not registered user!")
        window.location.href="index.php";
        </script>';
}
