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
.back{
	color:white;
		text-align: center;
		 width:100%;
		font-size: 80px;
		background-color: #527F76;
		border: 5px solid white;
		border-spacing: 5px
	}

.container-fluid {
    padding-right: 0px; 
    padding-left: 0px; 
    margin-right: auto;
    margin-left: auto;
}
.row{
	margin-left: 0px;
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
	        <li><a href="admin.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
	      </ul>
	    </div>
	  </div>
	</nav>

		


		<div class = "container-fluid " >

			<!-- Slider code for sponsored ad images-->

			<div id="myCarousel" class="carousel slide" data-ride="carousel">
			    <!-- Indicators -->
			    <ol class="carousel-indicators">
			      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			      <li data-target="#myCarousel" data-slide-to="1"></li>
			      <li data-target="#myCarousel" data-slide-to="2"></li>
			      <li data-target="#myCarousel" data-slide-to="3"></li>
			    </ol>

			    <!-- Wrapper for slides -->
			    <div  class="carousel-inner" role="listbox">

			    	<?php
						include('config.php');
						$result = mysql_query("SELECT * FROM photos where sponsored = 1");
						$first=true;
						while($row = mysql_fetch_array($result))
						{ ?>

			      <div  class="item <?if($first) echo 'active'; ?> ">
			      		
				        <a href = "page.php/?id=<?php echo $row['id']; ?>">
				        <img style = "width:300px;height:300px" src="<?php echo $row['location'] ?>">	
					        <div class="carousel-caption">
					          <h3 style = "color:red" id="price"> <?php echo $row['price'] ?> </h3>
					         <p style = "color:red" id="title"> <?php echo $row['title'] ?></p>
					        </div>
					    </a>
					     
				  </div>

				  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>

				  <?php $first = false;?>
				  <?php } ?>

  			</div>
    		
		</div>
	
			<!-- End of slider images -->

			<!--slideshow for headings-->

			<div id="myCarousel" class="carousel slide" data-ride="carousel">
			    <!-- Indicators -->
			    <ol class="carousel-indicators">
			      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			      <li data-target="#myCarousel" data-slide-to="1"></li>
			      <li data-target="#myCarousel" data-slide-to="2"></li>
			      <li data-target="#myCarousel" data-slide-to="3"></li>
			    </ol>

			    <!-- Wrapper for slides -->
			    <div  class="carousel-inner" role="listbox">

			    	<div class="item active back">

					<h1>Click on Items for Details </h1>

					</div>

					<div style = "background-color:#42426F" class="item back">

						<h1>Contact customers for items</h1>

					</div>
    			

					<div style = "background-color:red" class="item back">

						<h1>Get sponsored Ads</h1>

					</div>

					<div style = "background-color:#5959AB" class="item back">

						<h1>Place where buyer meets artists</h1>

					</div>    		
				        
					     
			</div>

				  
    		
		</div>

	</div>

			<!-- end of slideshow for headings-->




			<!--Simple Grid for images -->
			<div class = "row imgback">

				<?php
			
			$result = mysql_query("SELECT * FROM photos");
			while($row = mysql_fetch_array($result))
			{?>
				<a href = "page.php/?id=<?php echo $row['id']; ?>">
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