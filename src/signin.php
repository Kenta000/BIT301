<?php
  session_start();

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="style/userDesign.css">
    <!-- SNS icon -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body class="" style="background-color: #456983;">
  <div class="wrapper">
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bgcolor" >
        <a class="logosize" href="home.html" style="color:white; margin:auto;">Co-Tracker</a>
        <a class="nav-link" href="signin.php" style="color:white;">Login</a>
      </nav>

    </header>

    <!-- content -->
      <div class="wrapper-form">

        <form class="form-signin" method="post" action="signinAction.php">
          <h2 class="form-signin-heading" style="text-align:center; color:black; ">Login to your account</h2>

          <input type="text" class="form-control" name="username" id="username" placeholder="Username"  required="" autofocus="" />
          <input type="password" class="form-control" name="password" id="password" placeholder="Password" required=""/>

          <button class="btn btn-lg btn-primary btn-block" type="submit" >Login</button>
        </form>
      </div>
    <!-- end of content -->


    <!-- Footer -->
    <footer class="page-footer font-small special-color-dark pt-4 footer-login" style=" background-color: #1C2331;">

      <!-- Footer Elements -->
        <div class="container linkCenter">

          <ul class="follow-me list-unstyled " >
            <li style=" padding-top:5px;"><a href="https://www.facebook.com"></a></li>
            <li style=" padding-top:5px;"><a href="https://twitter.com"></a></li>
            <li style=" padding-top:5px;"><a href="https://www.instagram.com"></a></li>
            <li style=" padding-top:5px;"><a href="https://www.youtube.com"></a></li>
            <li style=" padding-top:5px;"><a href="https://www.plus.google.com"></a></li>
          </ul>

        </div>


      <!-- Footer Elements -->

      <!-- Copyright -->
      <div class="text-center py-4" style="background-color: #1C2331; color:aliceblue;">© 2020 Copyright:
        <a href="" style="color: aliceblue;"> Co-Tracker.com</a>
      </div>
      <!-- Copyright -->

    </footer>
    <!-- Footer -->

  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <script>
  // function login() {
  // var username = document.getElementById("username").value;
  // var password = document.getElementById("password").value;
  //
  //   if (username == "kenta"){
  //     document.location = "patient.html";
  //   }else if(username == "tester"){
  //     document.location = "tester.html";
  //   }else if(username == "manager"){
  //     document.location = "manager.html";
  //   }else {
  //     document.location = "signin.html"
  //   }
  // }
  </script>

  </body>

  </html>
