<!doctype html>
<html>
<?php include 'head.php';?>

<body>

<?php include 'header.php';?>

<?php
session_start();
if (!isset($_SESSION["session_name"])){
    header("Location:../index.php");
  exit();
}
else{
	$id = $_SESSION["session_name"];
    require_once 'db_functions.php';
	$db = new db_functions();
	$user_profile = $db->FindUser($id);	
}
?>

<div class="row">
	<div class="col-sm-5 col-sm-offset-1">
		<div class="flip">
			<div class="card" >
				<div class="face front" 
				style="  background-image: url('images/androids.jpg'); background-size: 100% 100%; background-repeat: no-repeat;" > </div>
				<div class="face back" style="border-bottom: 13px solid #283848"> 
				<span style="font-family:Arial, Helvetica, sans-serif">
					<h2 style="font-family: Gill Sans , Gill Sans MT, sans-serif;color: #283848">Introduction to Android Development</h2>
					<h4 style=" font-family:Arial, Helvetica, sans-serif;; color:#404040; align:left;"> &nbsp  Learn the basics of Android and Java programming, and take the first step on your journey to becoming an Android developer!</h4>
					<span style="position: absolute; margin-top:-5vw;margin-left:5vw;"><a class="btn btn-warning " href="<?php 	if($user_profile["role"] == "instructor")
	{
		echo "course_videos.php?course_id=1";	
	} else { echo "course_detail.php?course_id=1"; } ?>" style="font-size:0.4em">Learn More</a></span>
					<span style="font-style:bold; font-size:0.5em; color:#404040">Course duration: 7 weeks </span> </span> </div>
			</div>
		</div>
	</div>
	<div class="col-sm-5 ">
		<div class="flip">
			<div class="card" >
				<div class="face front" 
				style="  background-image: url('images/bad1.png'); background-size: 100% 100%; background-repeat: no-repeat;"> </div>
				<div class="face back" style="border-bottom: 13px solid #005266">
				 <span style="font-family:Arial, Helvetica, sans-serif">
					<h2 style="font-family: Gill Sans , Gill Sans MT, sans-serif;color: #005266">SQL Server</h2>
					<h4 style=" font-family:Arial, Helvetica, sans-serif; color:#404040; align:left;"><br> &nbsp  Microsoft SQL Server is an
					 application used to create computer databases for the Microsoft Windows family of server operating systems. Learn managing SQL server!</h4>
					<span style="position: absolute; margin-top:-5vw;margin-left:5vw;"><a class="btn btn-warning " href="<?php 	if($user_profile["role"] == "instructor")
	{
		echo "course_videos.php?course_id=2";	
	} else { echo "course_detail.php?course_id=2"; } ?>" style="font-size:0.4em">Learn More</a></span>
					<span style="font-style:bold; font-size:0.5em; color:#404040">Course duration: 5 weeks </span> </span> </div>
			</div>
		</div>
	</div>
</div>

<?php include 'footer.php';?>

<script src="js/jquery.js"></script> 
<script>
/* card flip */
$(".flip").hover(function(){
  $(this).find(".card").toggleClass("flipped");
});
</script>
</body>
</html>
