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

  $userNasme = $_POST['pList'];
  $pID = "select userID from users where username = '$userNasme';";

//Insert tester

  $genDate = date("Y-m-d");

  $scriptTes = "insert into tests values ('$tid','$pID','$testerID','$genDate',null,null)";
  $resultTes = mysqli_query($con, $scriptTes);

  header('location: view-Record-NewTest.php');

?>
