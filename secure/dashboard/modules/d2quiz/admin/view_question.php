
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
<br><br><br><br>
<center><div >
<?php
include("../connection.php");
// if post button is pressed than show this 
if (isset($_POST['submit']))
{

$test_id = $_POST['test_id'];

$query = "select * from question_info q join test_info t join subject_info s WHERE s.subject_name = '{$test_id}'";
$result = mysqli_query($con,$query);

if ($result)
{
echo "<br>"."Here are the list of questions with the mentioned TEST ID "."<br>"."<br>"."<br>";
while($row=mysqli_fetch_assoc($result))
	{	
	?>
	<hr>
	<?php
	echo "Question ID:&nbsp " . $row["que_id"]. "<br>";
	echo "Question:&nbsp &nbsp". $row["ques_desc"]. "<br>";
	?>
	</hr>
	<?php
	}
// *********** NOW process for back button 
	?>

	<br><br>
	<a href= "view_question.php"><button type="button">Back</button></a>
	<br><br>

<?php	
	
}

else 
{

die ("data base query failed " . mysqli_error($con));
}

}
?>

<?php
// if post button is not presses than show this
if (!isset($_POST['submit']))
{
?>
<FORM NAME ="question_delete_test_id" METHOD ="POST" ACTION = "">


<p>Please enter the Test id or the subject whose question you want to view </p>
<INPUT TYPE = "text" value "" Name="test_id" required autofocus>

<br> <br>
<input name="submit" type="submit" />
</br>  </br>
</FORM>


<?php
}
?>
<div> </center>
<br><br><br><br>
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
