<?php session_start();
include('config.php');

if (isset($_GET['name'])) {
    $delete_topic = $_GET['name'];
   

    $query = mysqli_query($con, "DELETE FROM `topics` WHERE topic = '$delete_topic'");
    if ($query) {
        header(" location:admin_topic.php");
    }
    else{
        echo "error";
    }
}

?>