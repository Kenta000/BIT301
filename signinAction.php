<?php
  session_start();
  $servername = "localhost";
  $db_username = "root";
  $db_password = "";
  $dbName = "CoTracker";
  $_SESSION['username'] = $_POST['username'];
  $_SESSION['password'] = $_POST["password"];
  $username = $_SESSION['username'];
  $password = $_SESSION['password'];

  // Create connection
  $con = mysqli_connect($servername, $db_username, $db_password, $dbName);

  $script = "select * from users where username = '$username' and password = '$password'";
  $result = mysqli_query($con, $script);
  $row = $result -> fetch_assoc();
  if($row['userID']!=null){
    $_SESSION['userID'] = $row['userID'];
  }

  if ($row['position'] == 'Patient') {
    header('location: patient.php');
  }
  elseif ($row['position'] == 'Tester') {
    header('location: .tester/tester.php');
  }
  elseif ($row['position'] == 'Manager') {
    header('location: ./manager/manager.php');
  }
  else {
    header("location: signin.php");

  }

 ?>
