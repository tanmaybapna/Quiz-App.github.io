<?php
session_start();
include('config.php');

$email = $_POST['email'];
$password = $_POST['password'];

$query = mysqli_query($con, "SELECT * from `admin_user` where email = '$email' and password = '$password'");
if (mysqli_num_rows($query) > 0) {
    while ($row = mysqli_fetch_assoc($query)) {
        // $_SESSION['status'] = 'loggedin';
        $_SESSION['active_id'] = $row['id'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['admin_status'] = 'active';
    }
    echo '<script>
    window.location.href="index.php";
    </script>';
} else {
    echo '<script>
        window.alert("You are not registered user!");
        window.location.href="admin_login.php";
        </script>';
}
