<?php session_start();
include('config.php');
if($_SESSION['admin_status'] == 'active'){

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link href="signin.css" rel="stylesheet">

  <title>MockExam - Prepare for your next exam!</title>

  <style>
    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }

    .grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      justify-items: center;
      align-items: center;
      gap: .7rem;
    }
  </style>
</head>

<body>
  <?php include('navbar.php'); ?>
  <section>
    <a href="index.php" class="btn btn-dark mx-4 my-3">⬅back</a>
  </section>

  <section class="mx-auto my-5 d-flex justify-content-center align-items-center" style=" height:60vh; ">
    <div style="min-width:50%; min-height:50%; padding:2rem; box-shadow: 0 0 4px black;">
      <div>
        <form action="#" method="post">

          <div class="grid mb-4">
            <h2>Enter Question</h2>
            <?php
            $top_ic = mysqli_query($con, "SELECT * FROM `topics`");
            ?>
            <select class="form-control" name="topic" id="">
              <option disabled selected>Select Topic</option>
              <?php
              while ($top = mysqli_fetch_array($top_ic)) {
              ?>
                <option value="<?php echo $top['topic']; ?>"><?php echo $top['topic']; ?></option>
              <?php
              }
              ?>
            </select>
            <input class="form-control" type="text" placeholder="Enter Question" name="question">
            <input class="form-control" type="text" placeholder="Enter Answer" name="answer">
          </div>
          <div class="grid">
            <input class="form-control" type="text" placeholder="Enter Option1" name="option1">
            <input class="form-control" type="text" placeholder="Enter Option2" name="option2">
            <input class="form-control" type="text" placeholder="Enter Option3" name="option3">
            <input class="form-control" type="text" placeholder="Enter Option4" name="option4">
          </div>
          <input class="btn btn-lg btn-primary btn-block mt-4" name="submit" type="submit" value="Add">

        </form>

        <?php
        if (isset($_POST['submit'])) {

          $topic = $_POST['topic'];
          $question = $_POST['question'];
          $answer = $_POST['answer'];
          $option1 = $_POST['option1'];
          $option2 = $_POST['option2'];
          $option3 = $_POST['option3'];
          $option4 = $_POST['option4'];


          if (!empty($topic) and !empty($question) and !empty($answer) and !empty($option1) and !empty($option2) and !empty($option3) and !empty($option4)) {
            $ques = mysqli_query($con, "INSERT INTO `questions`( `question`, `answer`, `category`) VALUES ('$question', '$answer', '$topic')");
            if ($ques) {
              $query = mysqli_query($con, "SELECT * from questions ORDER BY id DESC LIMIT 1");
              $row = mysqli_fetch_array($query);
              $q_id = $row['id'];
              $opt = mysqli_query($con, "INSERT INTO `options`(`q_id`, `option1`, `option2`, `option3`, `option4`) VALUES ('$q_id', '$option1', '$option2', '$option3', '$option4')");
        ?>
              
              <div class=" mt-4 alert alert-warning alert-dismissible fade show" role="alert">
                New <strong>Question</strong> added Successfully!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <?php


            }
          } else {
            ?>
            <div class="mt-4 alert alert-warning alert-dismissible fade show" role="alert">
              <strong>ERROR! Input Field</strong> has Empty Value!
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        <?php

          }
        }
        ?>

      </div>
    </div>
  </section>

  
    <?php include('footer.php'); ?>



    <?php
}else{
 header('location:admin_login.php'); 
}?>


</body>

</html>