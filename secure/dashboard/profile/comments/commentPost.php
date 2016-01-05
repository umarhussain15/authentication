<?php
include("../conn.php");
session_start();
$content=htmlspecialchars(trim($_POST["content"]));
if($content == "") {
if(isset($_POST['redirect_id']))
	header('Location:../'.$_POST['redirect_id']);
header('Location:../');
}
$page_name=htmlspecialchars(trim($_POST["page_name"]));
$sql = "INSERT INTO comments (user_id, page_name, content) VALUES (".$_SESSION['session_name'].", '$page_name', '$content')";
$result = mysqli_query($conn, $sql);
if(isset($_POST['redirect_id']))
	header('Location:../'.$_POST['redirect_id']);
header('Location:../');
?>

