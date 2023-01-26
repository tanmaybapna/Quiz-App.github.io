<?php
session_start();
include('config.php');

$marks = 0;

for ($j = 1; $j < $_SESSION['q_count'] + 1; $j++) {
    // if ($_REQUEST['ans' . $j]) {
    $answer = $_REQUEST['ans' . $j];
    // }
    if (!empty($_POST['selected_option' . $j])) {
        $selected = $_POST['selected_option' . $j];
        if ($answer == $selected) {
            $marks += 1;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="7, URL='index.php'">

    <title>Document</title>
    <style>
        
        .emoji {
            font-size: 4rem;
        }
    </style>
</head>

<body>

    <?php include('navbar.php'); ?>

        <section class="text-center m-auto d-flex justify-content-center align-items-center" style="height:85vh;">

            <div class="bg-dark text-light" style="box-shadow: 0 0 10px 10px #54B4D3; padding:3rem;">

                <div class="my-4 ">
                    <?php
                    if (isset($_SESSION['active_id'])) {
                    ?>
                        <h1>Thank You <?php
                                        if (isset($_SESSION['username'])) {
                                            echo $_SESSION['username'];
                                        } ?>!</h1>
                    <?php } else { ?>
                        <h1>Thank You Guest!</h1>
                    <?php } ?>
                </div>

                <div>
                    <h3>
                        <?php
                        if ($marks == $_SESSION['q_count']) {
                        ?>
                            <div><span class="emoji">🎉</span><br>Well Done!<div><br>
                                <?php
                            } elseif ($marks >= $_SESSION['q_count'] / 2 && $marks < $_SESSION['q_count']) {
                                ?>
                                    <div><span class="emoji">👍</span><br>Good Try!</div><br>
                                <?php
                            } elseif ($marks < $_SESSION['q_count'] / 2) {
                                ?>
                                    <div><span class="emoji">😔</span><br>Bad Score, Try Again!</div><br>
                                <?php
                            }

                            echo "Your Score : ", $marks, "/", $_SESSION['q_count'];
                            ?>
                    </h3>
                </div>
            </div>
        </section>
          
          <?php include('footer.php'); ?>
</body>

</html>