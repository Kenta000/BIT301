<?php
session_start();

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="../style/userDesign.css">
    <!-- SNS icon -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>User page</title>

    <link rel="stylesheet" href="https://cdn.datatables.net/t/bs-3.3.6/jqc-1.12.0,dt-1.10.11/datatables.min.css"/>
    <script src="https://cdn.datatables.net/t/bs-3.3.6/jqc-1.12.0,dt-1.10.11/datatables.min.js"></script>
    <script>
        jQuery(function($){
            $("#data-table").DataTable({
                pageLength: 5,
                lengthMenu: [5, 10],

            });
        });
    </script>

    <style media="screen">
          .patientWrapper {
          background: url(../style/MedicalPic.jpg) no-repeat center top;
          overflow: hidden;
          background-attachment: relative;
          background-position: center center;
          min-height: 40%;

          /* Add the blur effect */

          width: 100%;
          -webkit-background-size: 100%;
          -moz-background-size: 100%;
          -o-background-size: 100%;
          background-size: 100%;
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;
          z-index: 2;
          }

          /* .patientWrapper:before{
          background: inherit;
          -webkit-filter: blur(5px);
          -moz-filter: blur(5px);
          -o-filter: blur(5px);
          -ms-filter: blur(5px);
          filter: blur(5px);
          top: -5px;
          left: -5px;
          right: -5px;
          bottom: -5px;
          z-index: 1;
          } */

          .bg-text {
          background-color: rgb(22, 22, 22); /* Fallback color */
          background-color: rgba(0, 0, 0, 0.7); /* Black w/opacity/see-through */
          /* color: black; */
          font-weight: bold;
          border: 3px solid #f7f7f7;
          margin: auto;
          margin-top: 1%;
          margin-bottom: 1%;
          z-index: 2;
          width: 80%;
          padding-bottom: 5%;

          text-align: center;
          }


          @media screen and (max-width: 1024px) {
          .patientWrapper {
            min-height: 20%;

          }
          }

          .textFamily{

          font-family: 'Cinzel', serif;
          font-size: 40px;
          font-weight: bold;
          /* color: rgba(21, 0, 114, 0.966); */
          color: rgba(243, 243, 243, 0.966);
          text-shadow: 0 0 10px rgba(0,0,0,.4);
          }
          @media screen and (max-width: 1024px) {
          .textFamily {
            font-size: 30px;

          }
          }
          @media screen and (max-width: 768px) {
          .textFamily {
            font-size: 20px;

          }
          }

          .textFamilyh6{

          font-family: 'Cinzel', serif;
          font-size: 25px;
          font-weight: bold;
          /* color: rgba(21, 0, 114, 0.966); */
          color: rgba(243, 243, 243, 0.966);
          text-shadow: 0 0 10px rgba(0,0,0,.4);
          }
          @media screen and (max-width: 1024px) {
          .textFamilyh6 {
            font-size: 18px;

          }
          }
          @media screen and (max-width: 768px) {
          .textFamilyh6 {
            font-size: 15px;

          }
          }
          /* ------------table-------- */
          h1{
            font-size: 30px;
            text-transform: uppercase;
            font-weight: 300;
            text-align: center;

          }
          table{

            table-layout: fixed;
            background-color: rgba(255,255,255,0.9);
          }

          th{
            /* padding: 40px 0; */
            text-align: left;
            font-weight: 500;
            font-size: 18px;
            text-transform: uppercase;
          }
          td{
            /* padding: 15px; */
            text-align: left;
            vertical-align:middle;
            font-weight: 400;
            font-size: 15px;
            border-bottom: solid 1px rgba(0,0,0,0.3);
          }


          /* table styles */

          @import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
          body{
            /* background: -webkit-linear-gradient(left, #25c481, #25b7c4);
            background: linear-gradient(to right, #25c481, #25b7c4); */
            font-family: 'Roboto', sans-serif;
          }
          .wrapTable{
            background: #8e9eab;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #eef2f3, #8e9eab);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #eef2f3, #8e9eab); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            margin: 20px;
            padding: 20px;
            /* border-radius: 15px; */

            -webkit-box-shadow: 10px 10px 5px 0px rgba(66,66,66,1);
            -moz-box-shadow: 10px 10px 5px 0px rgba(66,66,66,1);
            box-shadow: 10px 10px 5px 0px rgba(66,66,66,1);

          }

          /* for custom scrollbar for webkit browser*/

          ::-webkit-scrollbar {
              width: 10px;
          }
          ::-webkit-scrollbar-track {
              -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
          }
          ::-webkit-scrollbar-thumb {
              -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
          }

    </style>
  </head>
  <body class="" style="background-color: #d9fbff;">
  <div class="wrapper">
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bgcolor" style="margin:0;">
        <a class="logosize" href="../home.html" style="color:white; margin:auto;">Co-Tracker</a>
        <a class="nav-link" href="../home.html" style="color:white;">
        <?php

        ?>
        Sign out</a>
      </nav>

    </header>

    <!-- content -->
    <main style="height: 1000px;">


    <div class="patientWrapper ">
          <div class="row">
            <div class="col-xl-5 bg-text" style="padding-top: 5%;  text-align: center;">

                <h1 class="textFamily">Welcome to Co-Tracker </h1><br>
                <h6 class="textFamilyh6">Check your test progress here</h6>


            </div>

            <!-- <div class="col-xl-7 " >
              <img class="resimg"  alt="" >
            </div> -->

          </div>

      </div>
      <!--  table  -->
      <h1>Check Your result here</h1>
      <div class="wrapTable" >
      <div class="" style="width:90%;margin-left:6%; ">
        <div class="table-responsive" style="">
          <table id="data-table" class="display table"  >
            <thead>
              <tr>
                <th>Test Date</th>
                <th>Result Date</th>
                <th>Result</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $id = $_SESSION['userID'];
                $con = mysqli_connect("localhost", "root", "", "cotracker");
                $sql = "SELECT testDate, resultDate, result, status FROM tests where patientID = '$id'";

                $result = mysqli_query($con, $sql);


                while ($row = $result -> fetch_assoc()) {
               ?>
               <tr>
                 <td><?php echo $row['testDate'] ?></td>
                 <td><?php echo $row['resultDate'] ?></td>
                 <td><?php echo $row['result'] ?></td>
                 <td><?php echo $row['status'] ?></td>
               </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>


      </div>
    </div>
      </main>
    <!-- end of content -->


    <!-- Footer -->
    <footer class="page-footer font-small special-color-dark pt-4" style=" background-color: #1C2331;">

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
      <div class="text-center py-4" style="background-color: #151c29; color:aliceblue;">© 2020 Copyright:
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
  </body>

  </html>
