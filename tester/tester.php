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

    <title>Manager</title>
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
          <a href="./record-NewTest-view.php" class=" offset-md-0 col-md-12">Record New Test</a>

          <hr>
          <!-- <a [routerLink]='[{ outlets: { managerRouter: ["recordTester"] } }]' class=" offset-md-0 col-md-12">Record Tester</a> -->
          <a href="./update-TestResult-view.php" class=" offset-md-0 col-md-12">Update Test Result</a>
          <hr>
        </div>
      </div>
    </div>

    <!-- Start: Main Content  -->
    <div class="main-content offset-md-0 col-md-8 offset-0 col-12 offset-sm-1 col-sm-10 offset-lg-1 col-lg-8">

    </div>
  </body>
</html>
