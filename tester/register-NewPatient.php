<?php
  session_start();
  $con = mysqli_connect("localhost", "root", "", "cotracker");

  $_SESSION['isExistMessage'] = ""; // error message

  $SQLlast = "select userID from users order by userID desc limit 1;";
  $lastResult = mysqli_query($con, $SQLlast);
  if (mysqli_num_rows($lastResult) == 0) {
    $id = "U001";
  }
  else {
    $lastRow = $lastResult->fetch_assoc();
    $num = ltrim((string)$lastRow['userID'], 'U');
    $num = (int)$num + 1;
    if ((int)$num < 10) {
      $id = 'U00'.$num;
    }
    elseif ($num < 100) {
      $id = 'U0'.$num;
    }
    else {
      $id = 'U'.$num;
    }
  }

  // generate test id
  $SQLlastTest = "select testID from tests order by testID desc limit 1;";
  $lastResultTest = mysqli_query($con, $SQLlastTest);
  if (mysqli_num_rows($lastResultTest) == 0) {
    $tid = "T001";
  }
  else {
    $lastRowTest = $lastResultTest->fetch_assoc();
    $numT = ltrim((string)$lastRowTest['testID'], 'T');
    $numT = (int)$numT + 1;
    if ((int)$numT < 10) {
      $tid = 'T00'.$numT;
    }
    elseif ($num < 100) {
      $tid = 'T0'.$numT;
    }
    else {
      $tid = 'T'.$numT;
    }
  }

// Insert user
  $pu = $_POST['pUsername'];
  $pp = $_POST['pPassword'];
  $pn = $_POST['pName'];
  $type = $_POST['newPType'];
  $symp = $_POST['newPsymptoms'];
//Insert tester
  $testerID = $_SESSION['userID'];
  $genDate = date("Y-m-d");
  $status = "Pending";


  $qu ="SELECT * FROM users WHERE username='$pu';";
  $check = mysqli_query($con,$qu);
   if(mysqli_num_rows($check)==0){ // create patient
     $script = "insert into users values ('$id','$pn','$pu','$pp','Patient',null,'$type','$symp')";
     $result = mysqli_query($con, $script);
     $scriptTes = "insert into tests values ('$tid','$id','$testerID','$genDate',null,null,'$status')";
     $resultTes = mysqli_query($con, $scriptTes);




   }
   else{ // do not create patient, make alert message to be displayed in view
     $_SESSION['isExistMessage'] = '<script>alert("Failed, this Username already exists. Please, use another username!");</script>';
   }
   header('location: ./view-Record-NewTest.php');

?>
