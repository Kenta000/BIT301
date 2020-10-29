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
    <main style="margin-top:5vh;" class="main-content offset-md-0 col-md-8 offset-0 col-12 offset-sm-1 col-sm-10 offset-lg-1 col-lg-8">
      <!-- for record test -->
            <div class="" id="recTest" >
              <div class="row" style="">
                  <form class="col-lg" style="" action="register-existingPTest.php" method="post">
                    <div class="col-12 col-md-10 col-lg-10 form-group" style="">
                      <label for="pList">Select Patient to Update test</label>
                      <select id="pList" name = "pList"  class="form-control" onChange="openAddTestForm()" >
                        <option selected>Choose...</option>
                        <?php
                          $con = mysqli_connect("localhost", "root", "", "cotracker");
                          $script = "select * from users where position = 'Patient'";
                          $result = mysqli_query($con, $script);
                          while ($row = $result -> fetch_assoc()) {
                         ?>
                          <option value="<?php echo $row['username']; ?>"><?php echo $row['username']; ?></option>
                        <?php } ?>
                      </select>
                    </div>
                    <!-- Apper -->
                    <div class="col-12 col-md-10 col-lg-10 form-group" id="addTestForm" style="display:none;">
                      <label for="pType">Select Patient Type</label>
                      <select id="pType" name="pType" class="form-control" >
                        <option selected>Choose...</option>
                        <option>Returneee</option>
                        <option>Quarantined</option>
                        <option>Close Contact</option>
                        <option>Infected</option>
                        <option>Suspected</option>
                      </select>
                      <label for="symptoms">Symptoms</label>
                      <input type="text" class="form-control" name ="symptoms" id="symptoms" aria-describedby="" placeholder="Symptoms" required>
                      <br>
                      <div class="" style="text-align:center;" onclick="hideAddTestForm()">
                        <button type="submit" class="btn btn-primary" style="width:30%;">Submit</button>
                      </div>
                    </div>

                  </form>

        <!-- Add test -->
                  <div class="col-lg" style="text-align:center;" id="btnNewPatient">
                        <label for="">Click Here to Add New Patient</label><br>
                        <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#newPatient" >New Patient?</button>
                  </div>
                </div>
            </div>
    </main>

    <!-- Displays error message -->
    <?php
    try {
      echo $_SESSION['isExistMessage'];
      $_SESSION['isExistMessage'] = "";
    } catch (\Exception $e) {
      return;
    }
     ?>
     <!-- END: Displays error message -->

    <!-- Modal  -->
    <div class="modal fade" id="newPatient" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Record New Patient</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form class="" action="register-NewPatient.php" method="post">
              <div class="modal-body">
                  <div class="form-group">
                    <label for="pUsername">Enter Username</label>
                    <input type="text" class="form-control" name="pUsername" id="pUsername" aria-describedby="" placeholder="Username" required>
                  </div>
                  <div class="form-group">
                    <label for="pPassword">Enter Password</label>
                    <input type="password" class="form-control" name="pPassword" id="pPassword" aria-describedby="" placeholder="Password" required>
                  </div>
                  <div class="form-group">
                    <label for="pName">Enter Name</label>
                    <input type="text" class="form-control" name="pName" id="pName" aria-describedby="" placeholder="Name" required>
                  </div>
                  <div class="form-group">
                    <label for="newPType">Select Patient Type</label>
                    <select name="newPType" id="newPType" class="form-control" >
                      <option selected>Choose...</option>
                      <option>Returneee</option>
                      <option>Quarantined</option>
                      <option>Close Contact</option>
                      <option>Infected</option>
                      <option>Suspected</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="symptoms">Symptoms</label>
                    <input type="text" class="form-control" name="newPsymptoms" id="newPsymptoms" aria-describedby="" placeholder="Symptoms" required>
                  </div>
              </div>
              <div class="modal-footer" >
                <button type="submit" class="btn btn-primary" style="width:30%;" >Submit</button>
              </div>
          </form>
        </div>
      </div>
    </div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script type="text/javascript">
  function openAddTestForm(){
    document.getElementById('btnNewPatient').style.display = 'none';
    document.getElementById('addTestForm').style.display = 'block';
}
//   function hideAddTestForm(){
//     document.getElementById('btnNewPatient').style.display = 'block';
//     document.getElementById('addTestForm').style.display = 'none';
// }


    </script>
</body>
</html>
