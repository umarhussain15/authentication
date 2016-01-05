
<?php
if(isset($_POST['submit1']))
{
	$con=mysqli_connect('localhost','root','','end_project');
/*getting user id for next signup*/
			$countingid = 0;				
			$rs="select * from login";
			$result=mysqli_query($con,$rs);
			if(!$result)
			{
				die( 'Could not fetch users last id from database.');
			}
			else 
			{
				while($row=mysqli_fetch_row($result))
				{
							$countingid++;
				}	
			}
/* it ends here*/
	$username=$_POST['username'];
	$pass	=$_POST['password'];	
	$email	=$_POST['email'];
	$confirm	=$_POST['confirmpass'];
	$u=172;	
	

	if(!$con)
		{
			die( 'Could not connect.');
		}
	else
		{
			$query1="INSERT INTO login ( username,user_id, password) VALUES ('{$username}',{$u},'{$pass}')";
			$query2="INSERT INTO user_info(user_id,username,pass,confirm_pass,firstname,lastname,address,city,phone,email) VALUES ({$u},'{$username}','{$pass}','{$confirm}','{$username}','{$username}','{$username}','{$username}','{$username}','{$email}')";
						
			$result1=mysqli_query($con,$query1);
			$result2=mysqli_query($con,$query2);
			if(!$result2)
			{
				echo "erro in user_info" . mysqli_error($con);
			}
			else {
					header("Location: index.html");
					exit;			
			}		
			if($result1)
	 		{
				//header("Location: index.html");
				//exit;		
			}
			else 
			{
				echo "error in login     " . mysqli_error($con);
			}
		
	}
}

?>

<div class="container-fluid" >
    <section class="container">
<form method="post" action="signupmain.php">
						
		<div class="container-page">				
			<div class="col-md-6">
				<h3 class="dark-grey">Registration</h3>
				<div class="form-group col-lg-12">
					<label>Username</label>
					<input type="" name="username" class="form-control" id="" value="">
				</div>
				
				<div class="form-group col-lg-6">
					<label>Password</label>
					<input type="password" name="password" class="form-control" id="" value="">
				</div>
				
				<div class="form-group col-lg-6">
					<label>Repeat Password</label>
					<input type="password" name="confirmpass" class="form-control" id="" value="">
				</div>
								
				<div class="form-group col-lg-6">
					<label>Email Address</label>
					<input type="" name="email" class="form-control" id="" value="">
				</div>
				
			
			</div>
		
			<div class="col-md-6">
				<h3 class="dark-grey">Terms and Conditions</h3>
				<p>
					By clicking on "Register" you agree to The Company's' Terms and Conditions
				</p>
				<p>
					While rare, prices are subject to change based on exchange rate fluctuations - 
					should such a fluctuation happen, we may request an additional payment. You have the option to request a full refund or to pay the new price. (Paragraph 13.5.8)
				</p>
				<p>
					Should there be an error in the description or pricing of a product, we will provide you with a full refund (Paragraph 13.5.6)
				</p>
				<p>
					Acceptance of an order by us is dependent on our suppliers ability to provide the product. (Paragraph 13.5.6)
				</p>
				
				<button type="submit" class="btn btn-primary" name="submit1">Register</button>
			</div>
		</div>
		<form/>
	</section>
</div>