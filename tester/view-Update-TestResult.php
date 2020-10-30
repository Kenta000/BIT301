<?php
session_start();
 ?>
 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="../style/managerPage.css">
    <!-- SNS icon -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Tester</title>
    <style>
    body{background-color: #E8F3F9;}


    </style>


  </head>

  <body class="container-fluid">
      <header class="row" >
        <a href="../home.html" title="Log Out!" class="offset-md-0 col-md-4 offset-1 col-10 offset-sm-0 col-sm-6 offset-lg-0 col-lg-3"> <h2 >Co - Tracker Ltd.</h2> </a>
        <h4 class="offset-md-4 col-md-2 offset-0 col-6 offset-sm-0 col-sm-3 offset-lg-5 col-lg-2">Position: Tester</h4>
        <h4 class="offset-md-0 col-md-2 offset-0 col-6 offset-sm-0 col-sm-3 offset-lg-0 col-lg-2"><?php echo $_SESSION['username'] ?></h4>
      </header>

    <!-- START: left-Side Menu -->
    <div class="row">
      <div class="offset-md-0 col-md-4 offset-1 col-10 offset-sm-2 col-sm-8 offset-lg-0 col-lg-3">
        <div class="btn-panel row ">
          <!-- <a [routerLink]='[{ outlets: { managerRouter: ["generateReport"] } }]' class=" offset-md-0 col-md-12">Generate Test Report</a> -->
          <a href="./tester.php" class=" offset-md-0 col-md-12">Generate Test Report</a>

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
    <div style="margin-top:5vh;" class="main-content offset-md-0 col-md-8 offset-0 col-12 offset-sm-1 col-sm-10 offset-lg-1 col-lg-8">
      <div class="col-12 col-md-10 col-lg-10">
        <form  method="post" action="actionUpdateResult.php">
          <div class="  form-group" >
            <div class="" style="text-align: center;">
              <label for="pendingList">Select Test</label>
              <select id="pendingList" name="pendingList" class="form-control" onChange="openUpdateResult()" style="margin:auto;" required>
                <option selected hidden value="">Choose...</option>
                <?php
                  $id = $_SESSION['userID'];
                  $status = "Pending";
                  $con = mysqli_connect("localhost", "root", "", "cotracker");
                  $script = "select * from tests where testerID = '$id' and status = '$status'";
                  $result = mysqli_query($con, $script);
                  while ($row = $result -> fetch_assoc()) {
                 ?>
                 <option value="<?php echo $row['testID']; ?>"><?php echo $row['testID']; ?></option>
               <?php } ?>
              </select>
            </div>
          </div>
          <div class="" id="addResult" style="display:none;">
              <div class="form-group" style="text-align: center;">
                <label for="result">Select Patient Type</label>
                <select id="result" name="result" class="form-control" style="margin:auto;" required>
                  <option selected hidden value="">Choose...</option>
                  <option>Negative</option>
                  <option>Positive</option>

                </select>
                <br>
                <div class="row justify-content-end ">
                  <div class="col-4"  >
                    <button type="submit" class="btn btn-primary" style="width:100%;" >Submit</button>
                  </div>
                  <div class="col-4">
                    <button type="button" class="btn btn-danger"  onclick="location.href= 'view-Update-TestResult.php'">Cancel</button>
                  </div>

                </div>

            </div>
          </div>
        </form>
      </div>
    </div>
    </div>

    <script type="text/javascript">
    // when test list selected then show form for result update
    function openUpdateResult(){
      document.getElementById('addResult').style.display = 'block';
    }

    function hideAddResult(){
      document.getElementById('addResult').style.display = 'none';
      // alert('Result Updated');
    }


    </script>
  </body>
</html>
