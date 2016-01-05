<?php

if(isset($_POST['submit']))
{
	$con=mysqli_connect('localhost','root','seecs@123','test1');
	$password=$_POST['password'];
	$username=$_POST['username'];
	$message="loggedin";
	$count=0;
	$s=0;
	$adminuser="admin";
	$adminpass="admin";
	if(!$con)
		{
			die( 'Could not connect.');
		}
	else
		{
			$query="SELECT username,password FROM login";
			$result=mysqli_query($con,$query);
			if(!$result)
	 		{
				die( 'Could not connect.');
			}
			else 
			{
				while($row=mysqli_fetch_assoc($result))
				{
					if( $row['username'] === $username and $row['password'] === $password )//student found
					{
						if($row['username'] === $adminuser and $row['password'] === $adminpass) 
						{
							SESSION_START();
							echo "ff";
							$_SESSION['username']=$adminuser;
							$_SESSION['password']=$adminpass;
							header("Location: admin/dashboard.html");
							break;
						}								
						SESSION_START();
						$_SESSION['username']=$username;
						$_SESSION['password']=$password;
							header("Location: user/mainresponse.php");
						$count = 0;
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


<?php
if(isset($_POST['submit1']))
{
	$con=mysqli_connect('localhost','root','seecs@123','end_project');

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
	$email	=$_POST['email'];
/* it ends here*/
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
				//echo"idhr aa raha hy";
				//header("Location: www.google.com");
				//exit;		
			}
			else 
			{
				echo "Cold not put new user in database..";
			}
//		}
}

?>












<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Talha" >
    <link rel="shortcut icon" href="asets/ico/favicon.png">

    <title>EXAMLY-Your Personal Mentor For Entrance Exams</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="assets/css/moiz.css" rel="stylesheet">

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
          <a class="navbar-brand" href="works.php">EXAMLY</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">HOME</a></li>
            <li><a href="about.html">ABOUT</a></li>
 
            <li class="active"><a href="works.php">LOGIN</a></li>
            <li><a data-toggle="modal" data-target="#myModal" href="#myModal"><i class="fa fa-envelope-o"></i></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

	<div id="blue">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-8 col-lg-offset-2">
				<h4>WE WORK HARD TO ACHIEVE EXCELLENCE!</h4>
				<p>SIGNUP NOW TO GET FREE ACCESS TO POOL OF PRACTICE MCQS</p>
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div><!--  bluewrap -->
	
	
	<!-- CUSTOM CODE STARTS HERE!-->
	    <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div  class="panel-heading">
                        <div class="panel-title">Sign In</div>
                        </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal" role="form" method="post" action="works.php" >
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email">                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                                    </div>
                                    

                                
                            <div class="input-group">
                                      <div class="checkbox">
                                        <label>
                                          <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                        </label>
                                      </div>
                                    </div>


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      <input class="btn btn-success btn-lg" style="background-color:#27ae60;" type="submit" name="submit" value"submit">
                                   

                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            Don't have an account! 
                                        <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()" style="color:#428bca;">
                                            <b>Sign Up Here</b>
                                        </a>
                                        </div>
                                    </div>
                                </div>    
                            </form>     



                        </div>                     
                    </div>  
        </div>
        <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Sign Up</div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>
                        </div>  
                        <div class="panel-body" >
                            <form id="signupform" class="form-horizontal"  method="post" action="works.php?">
                                
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
                                    
                                
                                  
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="email" placeholder="Email Address">
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">First Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="firstname" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lastname" class="col-md-3 control-label">Last Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="lastname" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="passwd" placeholder="Password">
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Confirm Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="confirmpasswd" placeholder="Confirm Password">
                                    </div>
                                </div>
								
                                     <div class="form-group">
                                    <label for="username" class="col-md-3 control-label">User Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="username" placeholder="User Name">
                                    </div>
                                </div>
								 <div class="form-group">
                                    <label for="address" class="col-md-3 control-label">Address</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="address" placeholder="Address">
                                    </div>
                                </div>
								
								<div class="form-group">
                                    <label for="city" class="col-md-3 control-label">City</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="city" placeholder="City">
                                    </div>
                                </div>
                                
								<div class="form-group">
                                    <label for="address" class="col-md-3 control-label">Phone</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="phone" placeholder="Phone">
                                    </div>
                                </div>	
                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                    			 <input  class="btn btn-success btn-lg" style="background-color:#27ae60" type="submit" name="submit1" value"submit"/>
                                     
                                     </div>
                                </div>
                                
                               
                                
                                
                                
                            </form>
                         </div>
                    </div>

               
               
                
         </div> 
    </div>
    <!-- CUSTOM CODE ENDS HERE -->

		
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
