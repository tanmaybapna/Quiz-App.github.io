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
    </style>
</head>

<body>
    <?php include('navbar.php'); ?>
    <section>
        <a href="index.php" class="btn btn-dark mx-4 my-3">⬅back</a>
    </section>

    <section class="m-auto d-flex justify-content-center align-items-center" style=" height:60vh; ">

        <div class="d-flex align-items-center justify-content-center" style="min-width:50%; min-height:50%; padding:2rem; box-shadow: 0 0 4px black;">

            <div>

                <form action="#" method="post">

                    <div>
                        <h2 class="mb-4">Add New Topic</h2>
                        <input class="w-100 form-control" type="text" placeholder="Enter Topic/Subject" name="topic"><br>
                        <input class="w-100 btn btn-lg btn-info btn-block " type="submit" value="Add" id="submit" name="submit">
                    </div>
                </form>

                <?php
                if (isset($_POST['submit'])) {
                    $topic = $_POST['topic'];
                    if (isset($_POST['topic']) && !empty($topic)) {
                        $check = mysqli_query($con, "SELECT * from topics where topic = '$topic'");
                        if (mysqli_num_rows($check) > 0) { ?>
                            <script>
                                alert("Topic name already exist!");
                                window.location.href = 'admin_topic.php';
                            </script>
                            <?php
                        } else {
                            $query = mysqli_query($con, "INSERT INTO `topics`(`topic`) VALUES ('$topic')");
                            if ($query) {
                            ?>
                                <div class=" mt-4 alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong><?php echo $topic; ?></strong> added Successfully!
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                        <?php
                            }
                        }
                    } else {
                        ?>
                        <div class="mt-4 alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>ERROR! <?php echo $topic; ?></strong> Empty Value!
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

    <main class="w-50 mx-auto topics_display mb-5 pt-3" style="box-shadow:0 0 4px black;">
        <h2 align="center">All Topics</h2>
        <div class="container d-flex justify-content-around">
            <p><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Topics</b></p>
            <p><b>&nbsp;&nbsp;&nbsp;Delete</b></p>
        </div>
        <?php
        $c = 0;
        $topics_list = mysqli_query($con, "SELECT * from topics");
        if (mysqli_num_rows($topics_list) > 0) {
            while ($row = mysqli_fetch_array($topics_list)) {
                $c++;
        ?>
                <div class="container d-flex justify-content-around">
                    <p><?php echo $c; ?>. &nbsp; <?php echo $row['topic']; ?></p>
                    <a href="topic_delete.php?name=<?php echo $row['topic']; ?>"><p class="btn btn-danger"><b>X</b></p></a>
                </div>
        <?php
            }
        }
        ?>
    </main>

<?php include('footer.php'); ?>

<?php
} else {
    header('location:admin_login.php');
} ?>
</body>

</html>