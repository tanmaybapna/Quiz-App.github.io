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

        .topic_container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(auto, 340px));
            justify-content: center;
            align-items: center;
            gap: 2rem;
            color: #000;
          margin-left:3%;
        }

        .topic_box {
            padding: 2rem 0 ;
            width: 100%;
            height: 190px;
            box-shadow: -10px 10px 14px 5px #111;
            font-weight: 600;
            border-radius: 1rem;
            background-color: #222;
            text-align: center;
        }


        .topic_box p {
            width: 100%;
            color: #fff;
            text-decoration: none;
            font-size: 1.1rem;
            margin: 0;
        }
        .topic_box a{
            text-decoration: none;
            color: #fff;
        }
        .topic_box a:hover{
            text-decoration: none;
            color: #54B4D3;
        }
    </style>
</head>

<body>
    <?php include('navbar.php');?>

    <h1 class="bg-primary py-4 text-center text-light">Contact with us</h1>

    <div class="container my-5 mx-auto d-flex" style="min-height:60.34vh;">
        <div class="w-100 mx-auto my-5 topic_container">
        
            <div class="topic_box">
                <h3 style="width: 101%; margin-left:-3px;" class="pl-3 bg-primary py-2 text-light mb-2">Design and Developed By</h3>
                <p>Tanmay Bapna</p>
            </div>
            
        </div>
    </div>

<?php include("footer.php");?>

</body>

</html>
