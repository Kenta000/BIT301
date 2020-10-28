<?php
  session_start();
  $con = mysqli_connect("localhost", "root", "", "cotracker");

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

// get pID
  $pName = $_POST['pList'];
  $getID = "select userID from users where username ='$pName';";
  $res = mysqli_query($con, $getID);
  $pID = ($res->fetch_assoc())['userID'];

// Update patient symptoms and Type
  $type = $_POST['pType'];
  $symp = $_POST['symptoms'];
  $sql = "update users set patientType='$type', symptoms='$symp' where userID='$pID';";
  $resUpde = mysqli_query($con, $sql);


//Insert tester
  $testerID = $_SESSION['userID'];
  $genDate = date("Y-m-d");
  $status = "Pending";

  $scriptTes = "insert into tests values ('$tid','$pID','$testerID','$genDate',null,null,'$status')";
  $resultTes = mysqli_query($con, $scriptTes);


  header('location: view-Record-NewTest.php');

?>
