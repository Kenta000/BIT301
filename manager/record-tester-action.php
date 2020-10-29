<?php
  session_start();
  $conn = mysqli_connect("localhost", "root", "", "cotracker");

  $SQLlast = "select userID from users order by userID desc limit 1;";
  $lastResult = mysqli_query($conn, $SQLlast);
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


  $u = $_POST['testerUsername'];
  $p = $_POST['testerPassword'];
  $n = $_POST['testerName'];
  $tc = $_POST['centerName'];

  $script = "insert into users values ('$id','$n','$u','$p','Tester','$tc',NULL,NULL)";
  $result = mysqli_query($conn, $script);

  header('location: ./manager.php');

?>
