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
  </head>
  <body class="text-center">
    <div class="login_body">

      <form class="form-signin w-50 mx-auto py-5" action="login_process.php" method="POST">
        <p class=" text-white  bg-info" style="font-size: 3rem; font-weight:600;" width="72" height="72">ME</p>
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        <input type="email" id="inputEmail" name="email" class="form-control my-3  " placeholder="Email address" required autofocus>
        <input type="password" id="inputPassword" name="password" class="form-control my-3" placeholder="Password" required>
        
        <button class="btn btn-lg btn-primary btn-block mt-4" type="submit">Sign in</button>
        <p class="mt-3">Don't have account? <a href="signup.php">click here</a></p>
        <p class="mt-5 mb-3 text-muted">&copy; 2022-2023</p>
      </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>