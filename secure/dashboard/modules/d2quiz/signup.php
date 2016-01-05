<?php
include("../connection.php");
?>

<?php
if(isset($_POST['submit1']))
{
	/*getting user id for next signup*/
			$countingid = 0;				
			$rs="select * from login";
			$result=mysqli_query($con,$rs);
			if(!$result)
			{
				echo "Could not fetch users last id from database.";
			}
			else 
			{
				while($row=mysqli_fetch_row($result))
				{
							$countingid++;
				}	
			}
/* it ends here*/
//	$con=mysqli_connect('localhost','root','','end_project');
	$email	=$_POST['email'];
	$firstname	=$_POST['firstname'];
	$lastname	=$_POST['lastname'];
	$password	=$_POST['passwd'];	
	$user_id=$countingid+1;	
	$confirmpass=$_POST['confirmpasswd'] ;
	$address=$_POST['address'];
	$phone=$_POST['phone'];
	$city= $_POST['city'];
	$username=$_POST['username'];
	echo $_POST['username'];
//	if(!$con)
//		{
//			echo "Could not connect.";
//		}
//	else
//		{
			$query1="INSERT INTO user_info(user_id,username,pass,confirm_pass,firstname,lastname,address,city,phone,email) VALUES ({$user_id},'{$username}','{$password}','{$confirmpass}','{$firstname}','{$lastname}','{$address}','{$city}','{$phone}','{$email}')";
			$query2="INSERT INTO login ( username,user_id, password) VALUES ('{$username}',{$user_id},'{$password}')";
			$result1=mysqli_query($con,$query1);
			$result2=mysqli_query($con,$query2);
			if($result1)
			//if(($result1 && $result2)==0)
	 		{
				echo"idhr aa raha hy";
				header("Location: www.google.com");
				exit;		
			}
			else 
			{
				echo "Cold not put new user in database..";
			}
//		}
}

?>

<?php
	mysqli_close($con);
?>