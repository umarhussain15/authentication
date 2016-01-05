<?php 
$con=mysqli_connect('localhost','root','','project');
if(!$con)
{
		die( 'Could not connect.');
}
else {
	$query="SELECT * FROM result";
	$result=mysqli_query($con,$query);
	if(!$result)
	 {
		die( 'Could not connect.');
	}
	
}

?>


<html>
<?php
	while($row=mysqli_fetch_assoc($result))
	{
		echo $row['login']."<br/><br/>";
		echo $row['test_id']."<br/><br/>";
		echo $row['score']."<br/><br/>";
		echo $row['test_date']."<br/><br/>";
			
			echo "</hr>";	
	}

?>

</html>

<?php
	mysqli_close($con);
?>
