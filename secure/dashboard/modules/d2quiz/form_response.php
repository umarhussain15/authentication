<?php

if(isset($_POST['submit']))
{
	$con=mysqli_connect('localhost','root','','project');
	$password=$_POST['password'];
	$username=$_POST['username'];
	$message="loggedin";
	$count=0;
	$s=0;

	if(!$con)
		{
			die( 'Could not connect.');
		}
	else
		{
			$query="SELECT username,pass FROM login";
			$result=mysqli_query($con,$query);
			if(!$result)
	 		{
				die( 'Could not connect.');
			}
			else 
			{
				while($row=mysqli_fetch_assoc($result))
				{
					if( $row['username'] === $username and $row['pass'] === $password )//student found
					{
						$count = 0;
						header("Location: form.php");
						break;
					}
					else
					{
						$count++;
					}
				}
				if( $count > 0 )//student not found
				{
					$username=$_POST['username'];
					$message ="invalid";
				}						
			}	
							
			}
		
}
		
else
{
	$message=" ";
	$username=" ";
	$password=" ";
}

?>
<html lang="en">
<head>
<title> untitled </title>
</head>
<body>
<form action="form_response.php" method="post">
<?php
 echo $message;
echo "<br><br>";
 ?>
Username:<input type="text" name="username" value="<?php echo $username;?>"/><br><br>
Password:<input type="text" name="password" value="<?php echo $password;?>"/><br></br>
<input type="submit" name="submit" value"submit" />

</form>
</body>
</html>
<?php
	mysqli_close($con);
?>