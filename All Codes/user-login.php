
<?php
session_start();

 ?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>WatcHive-Login</title>
    <link rel="stylesheet" href="user-login.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  </head>
  <body>
    <header>
      <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark" style="margin-left: -15px; width:102%;" >
            <a href="login.php" class="navbar-brand"> <img src="images/Logo3.png" alt=""> </a>
            <span class="navbar-text">WatcHive</span>

            <ul class="navbar-nav">
              <li class="nav-item"> <a href="test.php" class="nav-link"> Sign Up</a> </li>

            </ul>

        </nav>

        <div class="container">

          <div class="jumbotron">
            <h1>Login to your account</h1> <br>
            <form class="" action="Plogin.php" method="POST"> <br><br>
              <input type="email" class="form-control" placeholder="Usename/ Email Address" name="mail" value="">
              <br>
              <input type="password" class="form-control" placeholder="Password" name="pass" value="">
              <br><br>

              <div class="loginbutton">
                <button type="submit" class="btn btn-success btn-lg" name="login">Login</button>

              </div>
              </form>

              </div>


          </div>
        </div>

  </header>
  <footer class="page-footer font-small blue">

    <div class="footer-copyright text-center py-3">© 2024 Copyright:
      <a href=""> ___WatcHive___</a>
    </div>

  </footer>
  </body>

</html>
