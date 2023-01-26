<?php
session_start();
include('config.php');

$topic = $_POST['topic'];
$question = $_POST['question'];
$answer = $_POST['answer'];
$option1 = $_POST['option1'];
$option2 = $_POST['option2'];
$option3 = $_POST['option3'];
$option4 = $_POST['option4'];


$ques = mysqli_query($con, "INSERT INTO `questions`(`question`, `answer`, `category`) VALUES ('$question', '$answer', '$topic')");
$row = mysqli_fetch_assoc($ques);
$q_id = $row['id'];
if ($ques) {
   
$opt = mysqli_query($con, "INSERT INTO `options`(`q_id`, `option1`, `option2`, `option3`, `option4`) VALUES ('$q_id', '$option1', '$option2', '$option3', '$option')");
if ($opt) {
    header("location:index.php");
}
}

