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
  
  <style>
    /* column 2 */

    body{
    height:100vh;
    display: flex;
    justify-content: center;
    align-items:center;
    background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('test2.jpg');
      /* background-image: url('head.png'); */
      background-position: top;
      background-size: cover;
      background-repeat: no-repeat;}
    
    .hc_row2 {
      width: 28%;
      min-height: 80vh;
      margin: 0 auto;
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
		padding:10rem 0 !important;
    }


    .hc_row2 input {
		margin: .5rem auto;
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
    
    @media(max-width:900px){
    .hc_row2 {
      width: 50%;
    }
    }
     @media(max-width:540px){
    .hc_row2 {
      width: 90%;
    }
    }

  </style>

  <title>MockExam - Prepare for your next exam!</title>
</head>

<body >
   <div class="hc_row2 ">
              <form action="signup_process.php" method="POST">
                <table>
                  <tr>
                    <td class="pt-2">
                      <p class=" h-text">Sign up</p>
                    </td>
                  </tr>
                  <tr>
                    <td class="px-4"><input type="email" name="my_email" placeholder="E-Mail" required autofocus></td>
                  </tr>
                   <tr>
                    <td class="px-4"><input type="text" name="my_name" placeholder="Username" required ></td>
                  </tr>
                  <tr>
                    <td class="px-4"><input type="password" name="password" placeholder="Password" required ></td>
                  </tr>
                  <tr>
                    <td class="">
                      <p class="mt-3 text-light" align="center" style="letter-spacing: .7px;">You are already member? <a href="index.php">click here</a></p>
                    </td>
                  </tr>
                  <tr>
                    <td align="center" class="pb-4"><button class="btn btn-primary btn-lg">Sign up</button></td>
                  </tr>
                </table>
              </form>
            </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>