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
        </style>
    </head>

    <body>



        <table class=" table table-info table-striped" cellspacing="0" cellspadding="0" cellpadding="15">
            <thead class="thead-dark">
                <tr>
                    <th>Sr. No.</th>
                    <th>Username</th>
                    <th>Email</th>
					<th>Delete</th>
              </tr>
            </thead>
            </div><?php
                    $c = 0;
                    $user_list = mysqli_query($con, "SELECT * from user");
                    if (mysqli_num_rows($user_list) > 0) {
                        while ($row = mysqli_fetch_array($user_list)) {
                            $c++;
                    ?><tbody>
                        <tr>
                            <td><?php echo $c; ?>.</td>
                            <td><?php echo $row['user_name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
							<td><a class="btn btn-danger" href="user_delete.php?id=<?php echo $row['id']; ?>">X</a></td>

                        </tr>
                    </tbody><?php
                        }
                    } else {
                        echo "<script>alert('No User Exist!');
        window.location.href('admin_users.php');
        </script>";
                    }
                } ?>
        </table>
    </body>

    </html>