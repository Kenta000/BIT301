<?php
  session_start();
  $con = mysqli_connect("localhost", "root", "", "cotracker");

  $SQLlast = "select userID from users order by userID desc limit 1;";
  $lastResult = mysqli_query($con, $SQLlast);
  if (mysqli_num_rows($lastResult) == 0) {
    $id = "U1";
  }
  else {
    $lastRow = $lastResult->fetch_assoc();
    $num = ltrim((string)$lastRow['userID'], 'U');
    $num = (int)$num + 1;
    $id = 'U'.$num;
  }

  // generate test id
  $SQLlastTest = "select testID from tests order by testID desc limit 1;";
  $lastResultTest = mysqli_query($con, $SQLlastTest);
  if (mysqli_num_rows($lastResultTest) == 0) {
    $tid = "T1";
  }
  else {
    $lastRowTest = $lastResultTest->fetch_assoc();
    $numT = ltrim((string)$lastRowTest['testID'], 'T');
    $numT = (int)$numT + 1;
    $tid = 'T'.$numT;
  }

// Insert user
  $pu = $_POST['pUsername'];
  $pp = $_POST['pPassword'];
  $pn = $_POST['pName'];
  $type = $_POST['newPType'];
  $symp = $_POST['newPsymptoms'];

  $script = "insert into users values ('$id','$pn','$pu','$pp','Patient',null,'$type','$symp')";
  $result = mysqli_query($con, $script);

//Insert tester
  $testerID = $_SESSION['userID'];
  $genDate = date("Y-m-d");
  $status = "Pending";

  $scriptTes = "insert into tests values ('$tid','$id','$testerID','$genDate',null,null,'$status')";
  $resultTes = mysqli_query($con, $scriptTes);


  header('location: view-Record-NewTest.php');

?>
