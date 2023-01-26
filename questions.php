<?php
session_start();
include('config.php');
if ($_SESSION['status'] == 'active') {
?>
    <!DOCTYPE html>
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

      <script>
            function startTimer(duration, display) {
                var timer = duration,
                    minutes, seconds;
                setInterval(function() {
                    minutes = parseInt(timer / 60, 10);
                    seconds = parseInt(timer % 60, 10);

                    minutes = minutes < 10 ? "0" + minutes : minutes;
                    seconds = seconds < 10 ? "0" + seconds : seconds;

                    display.textContent = minutes + ":" + seconds;

                    if (--timer < 0) {
                        timer = duration;
                    }
                }, 1000);
            }

            window.onload = function() {
                var fiveMinutes = 60 * 10,
                    display = document.querySelector('#time');
                startTimer(fiveMinutes, display);
            };
        </script>
      
      
        <style>
            .body {
				min-height: 90vh;
                background: #333;
            }

            form {
                width: 100%;
            }

            .option {
                display: flex;
                justify-content: space-between;
                padding-bottom: 1rem;
            }

            * {
                padding: 0;
                margin: 0;
                box-sizing: border-box;
            }

            .quiz_container {
                display: flex;
                justify-content: center;
                align-items: center;

            }

            .quiz_container>div {
                width: 90%;

            }

            .ques_box {
                box-shadow: 0 0 4px 2px #54B4A1;
                padding: 1.5rem;
                margin: 1rem auto;
                background: #333;
                color: #fff;
                font-weight: 600;
            }

            @media screen and (max-width:710px) {
                .option {
                    flex-direction: column;
                }
            }
        </style>
    </head>

    <body>
        <main class="body">
            <b><p class="w-100 bg-dark position-fixed text-light d-flex justify-content-end pr-5 py-3" style="top: 0; letter-spacing:1px;">Time Remaining&nbsp;<span id="time" style="color: red; font-size:1.2rem;">10:00</span>&nbsp;minutes!</p></b>
            <section class="mt-5">
                <a href="index.php" class="btn btn-light mx-4 my-3">⬅back</a>
            </section>
            <main class="quiz_container ">
                <div class="mb-5">
                    <h1 class="text-light"><?php
                                            if (!empty($_GET)) {
                                                echo $_GET['category'];
                                            } ?> Quiz</h1>

                    <!-- getting category name from dynamic url  -->
                    <?php
                    if (!empty($_GET)) {
                        $category =  $_GET['category'];
                    }

                    // db-query to get questions category-wise 
                    $query1 = mysqli_query($con, "SELECT * from questions where category = '$category' ORDER BY id DESC LIMIT 10");
                    ?>
                    <form action="result_process.php" method="POST" id="form">
                        <?php
                        $i = 0;
                        if (mysqli_num_rows($query1) > 0) {
                            foreach ($query1 as $row) {
                                $query2 = mysqli_query($con, "SELECT * from options where q_id = '$row[id]'");
                                $row1 = mysqli_fetch_assoc($query2);

                        ?>
                                <div class="ques_box my-3">

                                    <p> <?php $i += 1;
                                        echo $i, ". "; ?> &nbsp;&nbsp; <?php echo $row['question']; ?></p>
                                    <div class="option">
                                        <div><input type="radio" name="selected_option<?php echo $i; ?>" value="<?php echo $row1['option1']; ?>" class="opt"><span class="ml-2"></span><?php echo $row1['option1']; ?></div>
                                        <div><input type="radio" name="selected_option<?php echo $i; ?>" value="<?php echo $row1['option2']; ?>" class="opt"><span class="ml-2"></span><?php echo $row1['option2']; ?></div>
                                        <div><input type="radio" name="selected_option<?php echo $i; ?>" value="<?php echo $row1['option3']; ?>" class="opt"><span class="ml-2"></span><?php echo $row1['option3']; ?></div>
                                        <div><input type="radio" name="selected_option<?php echo $i; ?>" value="<?php echo $row1['option4']; ?>" class="opt"><span class="ml-2"></span><?php echo $row1['option4']; ?></div>
                                        <div><input hidden type="checkbox" name="ans<?php echo $i; ?>" checked value="<?php echo $row['answer']; ?>"></div>
                                    </div>


                                </div>
                            <?php

                            }
                            ?>
                            <div style="margin: auto; width:100%;">
                                <input class="btn btn-primary my-3 " type="submit" value="Submit" style="font-size: 1.2rem; width:24%; ">
                            </div>

                        <?php
                            // setting a session variable q_count value as $i
                        } else {
                      ?><p class="text-light"> <?php echo 'No Record Found!';?> </p><?php
                        }

                        $_SESSION['q_count'] = $i;
                        ?>
                    </form>
                </div>
            </main>


        </main>

 <?php include('footer.php');?>

</body>
       <script>
        var maxtime = 600000;
        setTimeout(formStop, maxtime);

         function formStop(){
           document.getElementById('form').submit();
         }
</script>

</html>

<?php
}
else{
    header('location:signin.php');
}
?>