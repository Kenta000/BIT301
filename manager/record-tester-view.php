<?php


 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="../style/managerPage.css">
    <!-- SNS icon -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Manager</title>
    <style>
    body{background-color: #E8F3F9;}


    </style>


  </head>

  <body class="container-fluid">
      <header class="row">
        <a href="../home.html" title="Log Out!" class="offset-md-0 col-md-4 offset-1 col-10 offset-sm-0 col-sm-6 offset-lg-0 col-lg-3"> <h2 >Co - Tracker Ltd.</h2> </a>
        <h4 class="offset-md-4 col-md-2 offset-0 col-6 offset-sm-0 col-sm-3 offset-lg-5 col-lg-2">Manager</h4>
        <h4 class="offset-md-0 col-md-2 offset-0 col-6 offset-sm-0 col-sm-3 offset-lg-0 col-lg-2">username</h4>
      </header>

    <!-- START: left-Side Menu -->
    <div class="row">
      <div class="offset-md-0 col-md-4 offset-1 col-10 offset-sm-2 col-sm-8 offset-lg-0 col-lg-3">
        <div class="btn-panel row ">
          <!-- <a [routerLink]='[{ outlets: { managerRouter: ["generateReport"] } }]' class=" offset-md-0 col-md-12">Generate Test Report</a> -->
          <a href="./manager.php" class=" offset-md-0 col-md-12">Generate Test Report</a>

          <hr>
          <!-- <a [routerLink]='[{ outlets: { managerRouter: ["registerTestCenter"] } }]' class=" offset-md-0 col-md-12">Register Test Center</a> -->
          <a href="./register-center-view.html" class=" offset-md-0 col-md-12">Register Test Center</a>

          <hr>
          <!-- <a [routerLink]='[{ outlets: { managerRouter: ["recordTester"] } }]' class=" offset-md-0 col-md-12">Record Tester</a> -->
          <a href="./record-tester-view.php" class=" offset-md-0 col-md-12">Record Tester</a>
          <hr>
          <!-- <a [routerLink]='[{ outlets: { managerRouter: ["manageTestKitStock"] } }]' class="offset-md-0 col-md-12">Manage Test Kit stocks</a> -->
          <a href="./record-kit-view.php" class="offset-md-0 col-md-12">Manage Test Kit stocks</a>

          <hr>
        </div>
      </div>


    <!-- Start: Main Content  -->
      <div class="main-content offset-md-0 col-md-8 offset-0 col-12 offset-sm-1 col-sm-10 offset-lg-1 col-lg-8">
        <form style="margin-top:5vh;" method="post" action="./record-tester-action.php" class="row">

          <div class="form-group offset-2 col-8 offset-md-0 col-md-5 col-lg-5">
            <!-- <label for="">Tester's Username:</label> <br> -->
            <input class="form-control-lg" style="width:100%" type="text" placeholder="Tester's Username" class="form-control"  name="testerUsername" required>
          </div>
          <div class="form-group offset-2 col-8 offset-md-0 col-md-5 col-lg-5">
            <input class="form-control-lg" style="width:100%" placeholder="Tester's Password" type="password" name="testerPassword" required>
          </div>
          <div class="form-group offset-2 col-8 offset-md-0 col-md-5 offset-lg-0 col-lg-5">
            <input class="form-control-lg" style="width:100%" placeholder="Tester's Name" type="text" name="testerName" required>
          </div>
          <div appearance="fill" class="form-group offset-2 col-8 offset-md-0 col-md-5 col-lg-5" >

            <select class="form-control-lg" style="width:100%" name="centerName" required>
              <?php
                session_start();
                $id = $_SESSION['userID'];
                $conn = mysqli_connect("localhost", "root", "", "cotracker");
                $script = "select * from testcenters where officerID='$id'";
                $result = mysqli_query($conn, $script);

                while ($row = $result -> fetch_assoc()) {

               ?>
                <option value="<?php echo $row['centerID']; ?>"><?php echo $row['name']; ?></mat-option>
              <?php } ?>
            </select>
          </div>

          <div class="col-7"></div>
          <button class="offset-3 col-6 offset-md-4 col-md-4 offset-lg-4 col-lg-2 btn btn-success btn-lg btn-block"
            type="submit" style="margin-top: 1rem;">Submit</button>

        </form>
      </div>
    </div>
  </body>
</html>
