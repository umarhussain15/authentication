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
	.title h1{
		box-shadow: 0px 0px 0px 3px #dd3333;
		text-align: center;
		margin: 0;
    padding: 0;
    color:white;
    font: inherit;
    vertical-align: baseline;
	}
	.row{
		zoom:1;
	}
	.container{
		background-color: white;
	}
	.back{
		 width:100%;
		font-size: 80px;
		background-color: #dd3333;
		border: 10px solid white;
		border-spacing: 5px
	}
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
	      <a class="navbar-brand" href="index.php">Frendo</a>
	    </div>
	    <div>
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="index.php">Home</a></li>
	        <li><a href="#">About Us</a></li>
	        <li><a href="sell.php">Submit Ad</a></li>
<!--	        <li><a href="sponsor_ad.php">Sponsored Ad</a></li>  -->


	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
	      </ul>
	    </div>
	  </div>
	</nav>


		<div class = "container-fluid " >
	

			<!--Simple Grid for images -->
			<div class = "row imgback">

				<div class = "back"  >
					<div class = "title">
					<h1>Hey Admin, Welcome to your page </h1>
					</div>
				</div>

				<?php
			include('config.php');
			$result = mysql_query("SELECT * FROM photos");
			while($row = mysql_fetch_array($result))
			{?>
		
				 <a href = "delete.php/?id=<?php echo $row['id']; ?> ">  
				 	
					<div class ="col-sm-2 figure">
					<p><img style = "border-radius:50%;width:200px;height:190px" src="<?php echo $row['location'] ?>"></p>
						<p id="caption"> <?php echo $row['caption'] ?></p>
						<p id="price"> <?php echo $row['price'] ?></p>

					</div>
				</a>
			
			<?php }
			?>

			</div>

		</div>


	</body>
</html>