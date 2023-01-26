<?php session_start();
include('config.php');

if (isset($_GET['id'])) {
    $delete_id = $_GET['id'];

    $query = mysqli_query($con, "DELETE FROM `user` WHERE id = '$delete_id'");
    if ($query) {
        header("location:user_display.php");
    }

}
?>





