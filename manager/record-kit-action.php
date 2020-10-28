<?php
  session_start();
  $conn = mysqli_connect("localhost", "root", "", "cotracker");

  $SQLlast = "select kitID from kits order by kitID desc limit 1;";
  $lastResult = mysqli_query($conn, $SQLlast);
  if (mysqli_num_rows($lastResult) == 0) {
    $id = "Kit001";
  }
  else {
    $lastRow = $lastResult->fetch_assoc();
    $num = ltrim((string)$lastRow['kitID'], 'Kit');
    $num = (int)$num + 1;
    if ((int)$num < 10) {
      $id = 'Kit00'.$num;
    }
    elseif ($num < 100) {
      $id = 'Kit0'.$num;
    }
    else {
      $id = 'Kit'.$num;
    }

  }

  try {
    $name = $_POST['name'];
    $number = $_POST['numOfStocks'];
    $addNum = $_GET['stockNumber'];
    $managerID = $_SESSION['userID'];
    $kit = $_GET['kit'];
  } catch (\Exception $e) {

  }

  // $name = $_POST['name'];
  // $number = $_POST['numOfStocks'];
  // $addNum = $_GET['stockNumber'];
  // $managerID = $_SESSION['userID'];
  // $kit = $_GET['kit'];
  if ($name!=null) {
    $script = "insert into kits values ('$id','$managerID','$name','$number');";
    $result = mysqli_query($conn, $script);
  }
  else{
    $SQLlast = "select stock from kits where kitID='$kit';";
    $lastResult = mysqli_query($conn, $SQLlast);
    $row = $lastResult -> fetch_assoc();
    $addNum = (int)$addNum + (int)($row['stock']);

    $script = "update kits set stock='$addNum' where kitID='$kit';";
    $result = mysqli_query($conn, $script);
  }
  header('location: ./manager.php');

?>
