<html>
	<head>
	    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	    
	    <title> </title>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
	   <link rel = "stylesheet" href ="css/style.css">
	<style>
	
	
	div.figure {
  border: thin silver solid;
  margin: 0.5em;
  padding: 0.5em;
}
div.figure p {
	color:white;
  text-align: center;
  font-style: italic;
  font-size: smaller;
  text-indent: 0;
}
.image{
	width:80%;
	height:400px;

}

	.carousel-inner > .item > img,
  	.carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
	}

	</style>
	</head>

	<body >


	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="../index.php">Frendo</a>
	    </div>
	    <div>
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="../index.php">Home</a></li>
	       
	        <li><a href="#">About Us</a></li>
	        <li><a href="../sell.php">Submit Ad</a></li>
<!--	        <li><a href="sponsor_ad.php">Sponsored Ad</a></li>  -->


	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="../admin.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
	      </ul>
	    </div>
	  </div>
	</nav>

		


		<div class = "container-fluid " >


			

		
				<?php
			include('config.php');
			$id = $_GET['id'];
			$sql = mysql_query("DELETE FROM photos WHERE id = ".$id);
			echo('<script>alert("Entry Deleted Successfully!");window.location = "../admin.php";</script>');
			?>
			

			

		</div>
		
		

	</body>
</html>
