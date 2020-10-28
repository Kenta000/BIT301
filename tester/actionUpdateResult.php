<?php
  session_start();
  $con = mysqli_connect("localhost", "root", "", "cotracker");



  $tID = $_POST['pendingList'];

  $result = $_POST['result'];
  $status = "Completed";
  $resultDate = date("Y-m-d");

  $sql = "update tests set result='$result', status='$status',
          resultDate = '$resultDate' where testID='$tID';";
  $resUpde = mysqli_query($con, $sql);

  header('location: view-Update-TestResult.php');

?>
