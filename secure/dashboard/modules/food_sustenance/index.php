<?php
$response=array();
    $response["success"]=-1;
session_start();
if (!isset($_SESSION["session_name"])){
    header("Location:../index.php");
  exit();
}
else{
  header("Location:./start_up.php");
  exit();
}
//echo json_encode($response);
?>
