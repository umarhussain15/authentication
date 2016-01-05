<?php
include("../connection.php");
?>
<?php 
	session_start();					//taking username and passsword of the sessiom
//	$query = "select * from login where username = ".$_SESSION['username']."and password = ".$_SESSION['password'].";";
//	$result = mysqli_query($con,$query);	
?>
<?php
if(isset($_POST['submit']))
{
$s=0;
$testis=$_SESSION['testd'];
echo $testis;
$user_main=$_SESSION['username'];				// storing user naem of session


/* for getting result_id */	
														$countingid = 0;				
														$rs="select * from result";
														$result=mysqli_query($con,$rs);
														if(!$result)
														{
															echo "Could not fetch result last id from database.";
														}
														else 
														{
																	while($row=mysqli_fetch_row($result))
																	{
																					$countingid++;
																	}	
														}
												/* end */	
			
	$countingid1= $countingid + 1;






$query="SELECT a.true_ans,q.que_id,q.test_id from question_info q join answer_info a on ( q.que_id = a.que_id) where q.test_id=$testis";
$result11=mysqli_query($con,$query);
if(!$result11)
{
	echo "Could not get question of that session selected test.";
}
else 
{
												
	$count=1;				//for total numbe of mcq's
	$score=0;	
	while($row11=mysqli_fetch_row($result11))
	{	
	echo "dd" ;
echo $row11[0];
							
														/* for getting userans_id */	
																		$c = 0;				
																		$rs="select * from useranswer";
																		$result=mysqli_query($con,$rs);
																		if(!$result)
																		{
																								echo "Could not fetch userans last id from database.";
																		}
																		else 
																		{
																			while($row=mysqli_fetch_row($result))
																				{
																					$c++;
																				}	
																			$c++;
																		}
														/* end */	
				
			
			
			$ans=$_POST["mcq_".$count];				//storing the option selected by user
			$user_name=$_SESSION['username'];				// storing user naem of session
			$testid = $_SESSION['testd'];					//storing testid of session
			if($row11[0] == $ans) { $score++;	}			// if ans matches,score increse by one	
			
			$query1="insert into useranswer ( user_name, test_id, que_id, true_ans, your_ans, userans_id) values ('{$user_name}',{$row11[2]},'{$row11[1]}',{$row11[0]},{$ans},{$c}) ";
			$result1=mysqli_query($con,$query1);
			if(!($result1)){echo "not inserting into usernanswer";}
			else { echo "ddddd"; }
			$count++;
			
	}
			$testidmain = $_SESSION['testd'];					//storing testid of session
	$query2= "insert into result (username, test_id, test_date, score, result_id) values ('{$user_main}',{$testidmain}, CURRENT_TIMESTAMP,{$score},{$countingid1})";
	$result2=mysqli_query($con,$query2);
	if($result2)
	{
		header("Location: end_page.php");		
	}
	else { echo "inserting result error";}
}
}
?>
<?php
	mysqli_close($con);
?>