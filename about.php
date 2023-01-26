<?php session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Poor+Story&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@600;700&family=Poor+Story&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@700&display=swap" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!-- <link href="signin.css" rel="stylesheet"> -->

    <title>MockExam - Prepare for your next exam!</title>

    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
    </style>
</head>

<body>
<?php include('navbar.php');?>


    <div class="container my-5">
        <div class="row">
            <div class="col-sm-6">
                <div class="card" style="border:none;">
                    <div class="card-body">
                        <h3 class="card-title">About MockExam</h3>
                        <p class="card-text text-justify">The concept of online exams has become more widespread to oblige everyone to education and to spread equal and high-quality opportunities that the learner deserves, anywhere and anytime.<br><br>
                            Now, online tests have spread and are used in a large number of fields, universities, schools and training centers, and in some cases are used in job interviews and scholarships.<br><br>
                            The objectives of online examination system or rather any other exam (purpose of online examination system) is to make sure that the student is thoroughly ware of the course curriculum and that the exam reflects the course content he/she has studied.<br><br>
                            Mapping your course content and exam questions is paramount to teaching and education. It’s what gives us the satisfaction that we’re on track and that what was intended to be taught and addressed in questions is actually done.<br><br>
                            That’s why having structured courses, e.g., credit hours or weight, and item mapping to establish the best designed exam questions is one of the top advantages of online examination for students and teachers both.</p>
                        <a href="signup.php" class="btn btn-primary btn-lg">Join with us</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 py-5">
                <img src="test2.jpg" alt="" style="width: 100%; height:100%;">
            </div>
        </div>
    </div>


    <?php include('footer.php');?>



</body>

</html>