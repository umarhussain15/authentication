<!--php-->
<?php
include("../connection.php");

if (isset($_POST['submit']))
{


$test_id2 = $_POST['test_id2'];
$ques_desc = $_POST['ques_desc'];
$ans1 = $_POST['ans1'];
$ans2 = $_POST['ans2'];
$ans3 = $_POST['ans3'];
$ans4 = $_POST['ans4'];
$true_ans = $_POST['true_ans'];
$test_id1=0;
$query = "select test_id from test_info where sub_id in ( select sub_id from subject_info where subject_name = '{$test_id2}')";
$result = mysqli_query($con,$query);
 if($result)
{
	while($row=mysqli_fetch_assoc($result))
	{
			$test_id1= $row['test_id'];
			
	}	
}

else{
die ("data base query failed you might have enteretd the wrng TEST ID Please try again " . mysqli_error($con));
} 



$query1 = "INSERT into question_info(test_id, ques_desc) values ('$test_id1','$ques_desc')";
$result1 = mysqli_query($con,$query1);


 if($result1)
{

}

else{
die ("data base query failed you might have enteretd the wrong TEST ID Please try again " . mysqli_error($con));
} 
$query = "INSERT into answer_info( ans1, ans2, ans3, ans4, true_ans) values ('$ans1','$ans2','$ans3','$ans4','$true_ans')";
$result = mysqli_query($con,$query);
if ($result)
{
?>
<br><br>
<center><h3"> Congratulations! successfully added to database. </h3></center>
<center><a href="insert_question.php"><button> Add more questions </button></a></center>

<?php
}

else 
{

die ("data base query failed :/ " . mysqli_error($con));
}

}
?>

<!--php ends -->


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Talha" >
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>EXAMLY-Your Personal Mentor For Entrance Exams</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
           <a class="navbar-brand" href="index.php">EXAMLY</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="dashboard.php">HOME</a></li>
            <li><a href="about.html">ABOUT</a></li>
      
            <li><a href="index.php">LOGOUT</a></li>
			
			
            <li><a data-toggle="modal" data-target="#myModal" href="#myModal"><i class="fa fa-envelope-o"></i></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

<!--php code-->
<br><br>
<?php
if (!isset($_POST['submit']))
{
?>
<div class="container">
<div class="col-md-4 col-md-offset-4">
<div class= "text-center">
<FORM NAME ="question" METHOD ="POST" ACTION = "">


<label>Please enter the Subject Name</label>
<INPUT class="form-control" TYPE = "text" value "" Name="test_id2" required autofocus>
<br>
<label>Please enter the Actual Ques </label>
<INPUT class="form-control" TYPE = "text" value "" Name="ques_desc" required>
<br>

<label>Please enter the Option 1</label>
<INPUT class="form-control" TYPE = "text" value "" Name="ans1" required>
<br>
<label>Please enter the Option 2</label>
<INPUT class="form-control" TYPE = "text" value "" Name="ans2" required>
<br>
<label>Please enter the Option 3</label>
<INPUT class="form-control" TYPE = "text" value "" Name="ans3" required>
<br>
<label>Please enter the Option 4</label>
<INPUT class="form-control" TYPE = "text" value "" Name="ans4" required>

<br>
<label>Please enter the  correct Option </label>
<INPUT class="form-control" TYPE = "number" value "" Name="true_ans" min="1" max="4" required >
 <br>
<input class="btn btn-success btn-lg" style="background-color:#27ae60;" name="submit" type="submit" />
</br>  </br>
</FORM>
</div>
</div>
</div>
<?php
}
?>
<!--php code ends here-->

	
	
	<div id="r">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-8 col-lg-offset-2">
					<h4>WE ARE A GROUP OF STUDENTS, TRYING TO HELP OTHER STUDENTS!</h4>
					<p>All the MCQS has been designed for students seeking admissions in engineering colleges / universities. These tests can also help professionals to improve Or re-test their intermediate knowledge about the subject.

We have numerous of Mathematics, Physics and Chemistry MCQS in our data bank. And every day we are adding more questions.</p>
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div><! -- r wrap -->
	
	
	<!-- FOOTER -->
	<div id="f">
		<div class="container">
			<div class="row centered">
				<a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-dribbble"></i></a>
		
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- Footer -->


	<!-- MODAL FOR CONTACT -->
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        <h4 class="modal-title" id="myModalLabel">contact us</h4>
	      </div>
	      <div class="modal-body">
		        <div class="row centered">
		        	<p>We are available 24/7, so don't hesitate to contact us.</p>
		        	<p>
		        		NUST,H-12<br/>
						Islamabad, Pakistan.<br/>
						+092 -90078601<br/>
						support@examly.com
		        	</p>
		        	<div id="mapwrap">
		<iframe height="300" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.es/maps?t=m&amp;ie=UTF8&amp;ll=52.752693,22.791016&amp;spn=67.34552,156.972656&amp;z=2&amp;output=embed"></iframe>
					</div>	
		        </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-danger" data-dismiss="modal">Save & Go</button>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>