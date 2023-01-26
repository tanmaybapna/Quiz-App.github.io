<?php session_start(); 
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
    </style>
</head>

<body>
    <?php include('navbar.php'); ?>

    <style>
        a:hover {
            text-decoration: none !important;
        }

        .topic_container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            justify-items: center;
            align-items: center;
            /* gap: 1rem; */
        }

        .topic_box {
            height: 15rem;
            width: 16rem;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 2rem;
            font-weight: 600;
            border-radius: 1rem;
            color: #fff;
            text-align: center;
        }

        .topic_box:hover {
            transform: scale(1.1);
            transition: all 1.2s;

        }
    </style>
    <div class="w-75 mx-auto mt-5">
        <center>
            <h1>Welcome Admin!</h1>
        </center>
        <h3 class="mt-5 ">Select the Option</h3>
        <div class="w-100  my-5 topic_container">
            <a href="admin_question.php">
                <p class="topic_box bg-info ">Add New Question</p>
            </a>
            <a href="admin_topic.php">
                <p class="topic_box bg-info ">Add New Topic/Category</p>
            </a>
           <a href="admin_users.php">
                <p class="topic_box bg-info ">All Users</p>
            </a>
        </div>
    </div>

  <?php include('footer.php'); ?>

  
<?php
} else {
    echo '<script>window.alert("Login Error!");
    </script>';
    header('location:admin_login.php');
} ?>

</body>
</html>