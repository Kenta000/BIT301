<?php
  // session_start();
  // // echo $_POST['centerName'];
  // $conn = mysqli_connect("localhost", "root", "", "cotracker");
  //
  // // Generate submissionID
  // $SQLlast = "select centerID from testcenters order by centerID desc limit 1;";
  // $lastResult = mysqli_query($conn, $SQLlast);
  // if (mysqli_num_rows($lastResult) == 0) {
  //   $id = "TC1";
  // }
  // else {
  //   $lastRow = $lastResult->fetch_assoc();
  //   $num = ltrim((string)$lastRow['centerID'], 'TC');
  //   $num = (int)$num + 1;
  //   $id = 'TC'.$num;
  // }
  // $name = $_POST['centerName'];
  // $userID = $_SESSION['userID'];
  // $script = "insert into testcenters values('$name', '$userID', '$id')";
  // $result = mysqli_query($conn, $script);
  // header('location: ./manager.php');
?>
