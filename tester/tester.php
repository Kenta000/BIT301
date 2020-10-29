<?php session_start(); ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="../style/managerPage.css">
    <!-- SNS icon -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <link rel="stylesheet"

      href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>
    <script type="text/javascript"

      src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript"

      src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js">
    </script>

    <title>Tester</title>
    <style>
    body{background-color: #E8F3F9;}


    </style>


  </head>

  <body class="container-fluid">
      <header class="row">
        <a href="../home.html" title="Log Out!" class="offset-md-0 col-md-4 offset-1 col-10 offset-sm-0 col-sm-6 offset-lg-0 col-lg-3"> <h2 >Co - Tracker Ltd.</h2> </a>
        <h4 class="offset-md-4 col-md-2 offset-0 col-6 offset-sm-0 col-sm-3 offset-lg-5 col-lg-2">Tester</h4>
        <h4 class="offset-md-0 col-md-2 offset-0 col-6 offset-sm-0 col-sm-3 offset-lg-0 col-lg-2">username</h4>
      </header>

    <!-- START: left-Side Menu -->
    <div class="row">
      <div class="offset-md-0 col-md-4 offset-1 col-10 offset-sm-2 col-sm-8 offset-lg-0 col-lg-3">
        <div class="btn-panel row ">
          <!-- <a [routerLink]='[{ outlets: { managerRouter: ["generateReport"] } }]' class=" offset-md-0 col-md-12">Generate Test Report</a> -->
          <a href="#" class=" offset-md-0 col-md-12">Generate Test Report</a>

          <hr>
          <!-- <a [routerLink]='[{ outlets: { managerRouter: ["registerTestCenter"] } }]' class=" offset-md-0 col-md-12">Register Test Center</a> -->
          <a href="./view-Record-NewTest.php" class=" offset-md-0 col-md-12">Record New Test</a>

          <hr>
          <!-- <a [routerLink]='[{ outlets: { managerRouter: ["recordTester"] } }]' class=" offset-md-0 col-md-12">Record Tester</a> -->
          <a href="./view-Update-TestResult.php" class=" offset-md-0 col-md-12">Update Test Result</a>
          <hr>
        </div>
      </div>


      <!-- Start: Main Content  -->
      <div style="margin-top:5vh;" class="main-content offset-md-0 col-md-8 offset-0 col-12 offset-sm-1 col-sm-10 offset-lg-0 col-lg-9">
        <div class="table-responsive">
          <table id="myTable" class="display table" width="100%" >
            <thead>
              <tr>
                <th>PatientID</th>
                <th>Type</th>
                <th>Test Center</th>
                <th>Status</th>
                <th>Result</th>
                <th>Test Date</th>
              </tr>
            </thead>
            <tbody>
              <?php

                $id = $_SESSION['userID'];
                $conn = mysqli_connect("localhost", "root", "", "cotracker");
                $script = "select * from tests where testerID='$id';";
                $result = mysqli_query($conn, $script);


                while ($row = $result -> fetch_assoc()) {

               ?>
               <tr>
                 <td><?php
                  echo $row['patientID'];
                  ?></td>
                  <td><?php
                    $patient = $row['patientID'];
                    $scriptThis = "select patientType from users where userID='$patient';";
                    $resultThis = mysqli_query($conn, $scriptThis);
                    $rowForThis = $resultThis->fetch_assoc();
                    echo $rowForThis['patientType'];
                  ?>
                  </td>
                 <td><?php
                      $scriptThis = "select centerID from users where userID='$id';";
                      $resultThis = mysqli_query($conn, $scriptThis);
                      $rowForThis = $resultThis->fetch_assoc();
                      echo $rowForThis['centerID']; ?>
                 </td>
                 <td><?php echo $row['status'] ?></td>
                 <td><?php echo $row['result'] ?></td>
                 <td><?php echo $row['testDate'] ?></td>
               </tr>
              <?php } ?>
            </tbody>


          </table>
        </div>
      </div>
    </div>
  </body>
  <script>
    $(document).ready(function(){
        $('#myTable').dataTable();
    });
  </script>
</html>
