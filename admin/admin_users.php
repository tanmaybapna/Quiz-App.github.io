<?php session_start();
include('config.php');
if ($_SESSION['admin_status'] == 'active') {

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

            .topics_display {
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
            }
            .topics_display table {
                width: 100%;
                margin: 0 auto 2rem;
            }
            .topics_display table td,
            .topics_display table th{
                padding: .4rem .6rem;
            }

            iframe{
                width: 100%;
                height: 50vh;
            }
        </style>
    </head>

    <body>
        <?php include('navbar.php'); ?>
        <section class="topics_display">

            <main class="w-75 mx-auto  mb-5 " style="box-shadow:0 0 4px black; ">
                <h2 align="center" class="py-3 bg-primary text-light">All Users</h2>

            <iframe src="user_display.php" frameborder="0"></iframe>
            
            </main>

        </section>


        <?php include('footer.php'); ?>

    <?php
} else {
    header('location:admin_login.php');
} ?>
    </body>

    </html>