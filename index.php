<?php session_start();
include('config.php'); ?>
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
  <link href="signin.css" rel="stylesheet">

  <title>MockExam - Prepare for your next exam!</title>

  <style>
    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }
  </style>

  <style>
    .main_header {
      position: relative;
      top: 0;
      width: 100%;
      min-height: 91.3vh;
      background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('test2.jpg');
      /* background-image: url('head.png'); */
      background-position: top;
      background-size: cover;
      background-repeat: no-repeat;
      display: flex;
      justify-content: center;
      padding: .5rem 1rem;
      /* padding-top: 14%; */
      /* clip-path: polygon(0 0, 100% 0%, 100% 100%, 100% 100%, 100% 90%, 69% 100%, 0% 85%); */
    }

    .header_left {
      width: 40%;
      padding-top: 5%;
      height: fit-content;
      margin: 0 auto;
    }

    .header_left p {
      font-size: 3.8rem;
      color: #fff;
      font-weight: 800;
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;

    }

    a:hover p {
      text-decoration: none;
    }



    .header_right {
      width: 50%;
      height: 75vh;
      display: flex;
      justify-content: center;
      margin-top: -1rem;
    }

    .header_right img {
      width: 100%;
      height: 75vh;
    }

    /* ------------------------- */

    /* column 2 */

    .hc_row2 {
      width: 55%;
      margin: 0 auto;
      margin-top: 3rem;
      /* padding: 0 3rem; */
    }

    .hc_row2 form {
      height: 100%;
      width: 100%;
      /* padding: 20px ; */

    }

    .hc_row2 table {
      background: #111;
      height: 100%;
      width: 100%;
      border-radius: .5rem;
      box-shadow: 0 0 10px black;

    }


    .hc_row2 input {

      width: 100%;
      border: 0;
      color: white;
      /* border: 3px ridge #54B4D3; */
      border-radius: 1rem;
      background: transparent;
      padding: 10px;
      outline: none;
      border-bottom: 3px solid #54B4D3;
    }

    .hc_row2 input::placeholder {
      color: #fff;
    }

    .hc_row2 input:focus {
      background: transparent;
      padding: 10px;
    }


    .hc_row2 button {
      color: #fff;
      padding: 10px;
      width: fit-content;
      border: 0;

    }





    /* ----------  */
    .h-text {
      color: #fff;
      font-size: 1.6rem;
      text-align: center;
      font-weight: 700;
      /* border: 4px ridge #54B4D3; */
      border-radius: .5rem;
      width: 90%;
      margin: auto;
      padding-bottom: .4rem;
    }

    .my_btn {
      font-size: 1.3rem;
      font-weight: 700;

    }


    /*-------------media query-------- */


    @media screen and (max-width:1100px) {

      .header_left {
        width: 50%;
        padding: 0;
        /* padding-top: 10%; */
        margin: 0;
      }

      .header_left p {
        font-size: 3.2rem;
      }

      .header_right {
        padding: 0;
        height: 55vh;
        margin: 0;
      }

      .main_header {
        padding: 0;
        padding: 10% 6% 0 6%;
      }

      .hc_row2 {
        margin-top: 0;
      }
    }

    @media screen and (max-width:940px) {
      .main_header {
        flex-direction: column;
      }

      .header_right {
        width: 90% !important;
        margin: 10% auto;
      }

      .hc_row2 {
        width: 100%;
      }

      .hc_row2 form {
        width: 100%;
      }

      .header_left {
        width: 90%;
        padding: 0;
      }
    }

    @media screen and (max-width:550px) {
      .header_left {
        width: 90%;
        padding: 0;
        padding-left: 1rem;
        margin: 10% 0;

      }

      .header_left p {
        font-size: 3rem;
      }


      .background {
        height: 65vh;
      }


    }
  </style>
</head>

<body style="min-height:100vh;">

  <?php
  // including navbar file 
  include('navbar.php');

  // checking status value is null or not and then comparing its value
  if (isset($_SESSION['status']) == "active") {
  ?>
    <div class="text-light my-5">
      <center>
        <?php
        if (isset($_SESSION['active_id'])) {
        ?>
          <h1 class="bg-primary py-2 text-light">Welcome
            <?php
            if (isset($_SESSION['username'])) {
              echo $_SESSION['username'];
            } ?>
            !</h1>
        <?php } else { ?>
          <h1 class="bg-primary py-2 text-light">Welcome Guest!</h1>
        <?php } ?>

      </center>

      <style>
        a {
          text-decoration: none;
        }

        a:hover {
          text-decoration: none !important;
        }

        .topic_container {
          display: grid;
          grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
          justify-items: center;
          align-items: center;
          /* gap: 1rem; */
        }

        .topic_box {
          height: 10rem;
          width: 12rem;
          display: flex;
          justify-content: center;
          align-items: center;
          font-size: 2rem;
          font-weight: 600;
          border-radius: 1rem;
          color: #fff;
        }

        .topic_box:hover {
          transform: scale(1.1);
          transition: all 1.2s;
          text-decoration: none;
        }
      </style>


      <div class="mx-4" style="min-height:62.96vh;">
        <?php
        $query = mysqli_query($con, "SELECT topic FROM `topics` "); ?>

        <h3 class="mt-5 text-dark">Select your Topic to Start (10 Questions in 10 Minutes)</h3>
        <div class="w-100  my-5 topic_container">
    
          <?php

          if ($query) {
            while ($row = mysqli_fetch_array($query)) {
          ?>

              <a href="questions.php?category=<?php echo $row['topic']; ?>">
                <p class="topic_box bg-primary "><?php echo $row['topic']; ?></p>
              </a>
          <?php
            }
          }
          ?>

        </div>
      </div>
    </div>
  <?php
  } else {
  ?>

    <section>

      <div class="main_header">
        <div class="header_left">
          <p>Mock Exam <br>A Platform To Polish Your Skills</p>
          <a href="signup.php"><button class="my_btn btn btn-primary btn-lg">Join with us</button></a>
        </div>
        <div class="header_right">
          <?php
          if (isset($_SESSION['status']) == "active") {
          ?>
            <img src="img6-removebg.png" alt="">

          <?php
          } else {
          ?>
            <div class="hc_row2 ">
              <form action="login_process.php" method="POST">
                <table>
                  <tr>
                    <td class="pt-2">
                      <p class=" h-text">Sign in</p>
                    </td>
                  </tr>
                  <tr>
                    <td class="px-4"><input type="email" name="email" placeholder="E-Mail"></td>
                  </tr>
                  <tr>
                    <td class="px-4"><input type="password" name="password" placeholder="Password"></td>
                  </tr>
                  <tr>
                    <td class="">
                      <p class="text-light" align="center" style="letter-spacing: 1px;">Don't have an account <a href="signup.php"><u>Sign up</u></a> here</p>
                    </td>
                  </tr>
                  <tr>
                    <td align="center" class="pb-4"><button class="btn btn-primary btn-lg">Sign in</button></td>
                  </tr>
                </table>
              </form>
            </div>
          <?php }
          ?>
        </div>
      </div>

    </section>

  <?php

  } ?>
  <?php include('footer.php'); ?>



</body>

</html>