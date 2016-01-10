<!--Momina Ramzan, 05259, BESE-4A  Web Engineering-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Food Sustenance</title>
    <!-- give options to select from -->
	
	<!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	
    <![endif]-->
	
	
	<style>
	body 
	{	//font-family: "Urdu Typesetting", Arial, Serif;
		font-size: xx-large;
		//font-weight: 900;
	}
	.carousel-inner > .item > img {
    margin: 0 auto;
	}
	
	label, input {
	font-weight: small;
	
	}
	#elements {
		font-size: 25px;
		font-weight: small;
	}
	
	.form-group,label {
	//direction = rtl;
	text-align:right;
	
	}
	h, h2 {
	text-align: left;
	
	}
	p{
	direction: rtl;
	text-align:justify;
	}
	#accordion {
	direction: rtl;
	text-align:centre;	}
	
	#side-pane {
	
	font-size: medium;
	}
	
	/*label, input, select {
		display:block;
	}
	input, select {
		margin-bottom: 1em;
	}
	fieldset {
		margin-bottom: 2em;
		padding: 1em;
		align:left;
	}
	fieldset fieldset {
		margin-top: 1em;
		margin-bottom: 1em;
		align:left;
	}
	input[type="checkbox"] {
		display:inline;
	}
	.range {
		margin-bottom:1em;
	}	
	.disease-type input, .disease-type label {
		display:inline-block;
	}
	
	label, textarea {
	
	align: left;
	}*/
	</style>
	
  </head>
  <body>
	<header>
		<div class="navbar navbar-default">
			<div class="container">
				<div class="navbar navbar-right">
					<div class="navbar-header">
					<a href="" class="navbar-brand">Food Sustenance via Livestock and Poultry</a>
					</div>
				</div>
								

			</div>
			</div>	
		</header>
		
		<div class="container">
			<ul class="nav nav-pills nav-justified">
				<li><a href="#Upload" data-toggle="tab">اپلوڈ کريں</a></li>
				<li><a href="#Poultry" data-toggle="tab">    پولٹری اور لائيوسٹاک</a></li>
				<li class="active"><a href="#Home" data-toggle="tab">ہوم</a></li>



			</ul>
			
			<div class="tab-content"> 
				<div class="tab-pane active" id="Home">


				
					<div class="container">
						<div class="carousel-slide" data-ride="carousel" id="carousel-ex">
							<ol class="carousel-indicators">
								<li data-target="#carousel-ex" data-slide-to="0" class="active"></li>
								<li data-target="#carousel-ex" data-slide-to="1"></li>
								<li data-target="#carousel-ex" data-slide-to="1"></li>

							</ol>
							
							<div class="carousel-inner">
								<div class="item active">
									<img src="chicken.png" alt="image">
								</div>
								
								<div class="item">
									<img src="livestock.jpg" alt="image">
								</div>
									
								<div class="item">
									<img src="ducks2.jpg" alt="image">
								</div>

								<div class="item">
									<img src="turkeys2.jpg" alt="image">
								</div>					
							</div>
							
						</div>
					</div>
					
					
					
					
									
				
				<div class="container">
						<div class="panel panel-default panel-info">
						
<!--							<div class="panel-heading"><h3 class="panel-title"></h3></div>-->
							<div class="panel-body">
								<p>
								<?php
									/* for db connection | parameters */
									$servername = "localhost";
									$username = "root";
									$password = "seecs@123";
									$dbname = "test1";

									// Create connection with the database
									$conn = new mysqli($servername, $username, $password, $dbname);
									// Check connection
									if ($conn->connect_error) {
										die("Connection failed: " . $conn->connect_error);
									}

									// retrieve role from here
									mysqli_query($conn, "SET NAMES 'utf8'");
									$query = "SELECT title, cat_id, article from content";
									$result = mysqli_query($conn, $query);

									while($row = mysqli_fetch_array($result)) {
										$title = $row['title'];
										$article = $row['article'];
										echo $title;
										echo"<br>";
										echo $article;
										echo"<br>";
										echo "\n";
										} 
										
									$conn->close();
									?>
								</p>	
					
							</div>
<!--							<div class="panel-footer"> </div>-->
						</div>
					
					</div>
				</div>
				<div class="tab-pane" id="Poultry">
					<div class="container">
    <hr class="">
    <div class="row">

        <div class="col-md-9">
            <div class="panel panel-default">
<!--
                <div class="panel-heading">
                    <h3 class=""></h3>
                </div>
-->
                <div class="panel-body"><p id="poultry">
							<?php
								/* for db connection | parameters */
								$servername = "localhost";
								$username = "root";
								$password = "seecs@123";
								$dbname = "test1";

								// Create connection with the database
								$conn = new mysqli($servername, $username, $password, $dbname);
								// Check connection
								if ($conn->connect_error) {
									die("Connection failed: " . $conn->connect_error);
								}

								// retrieve role from here
								mysqli_query($conn, "SET NAMES 'utf8'");
								$query = "SELECT  name, definition, cause, transmission, symptoms, postmortem_exam, diagnosis, treatment, prevention from disease"; // orderby date_published
								$result = mysqli_query($conn, $query);
								while($row = mysqli_fetch_array($result)) {
//									$category = $row['category'];
									$name = $row['name'];
									$def = $row['definition'];
									$cause = $row['cause'];
									$transmission = $row['transmission'];
									$symptoms = $row['symptoms'];
									$postmortem_examination = $row['postmortem_exam'];
									$diagnosis = $row['diagnosis'];
									$treatment = $row['treatment'];
									$prevention = $row['prevention'];
//									$publication = $row['publication_date'];

									echo "$name<br>$def<br>$cause<br>$transmission<br>$symptoms<br>$postmortem_examination<br>$diagnosis<br>$treatment<br>$prevention<br>";
									} 
								$conn->close();
								?>	
									
							</p>	
							
					
				</div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-default">
<!--
                <div class="panel-heading">
                    <h3 class=""></h3>
                </div>
-->
                <div class="panel-body">
				
				<p>

						<div class="panel-group" id="accordion">
							<div class="panel panel-info">
								<div class="panel-heading">
									
										<a href="#collpaseone" data-toggle="collapse" data-parent="accordion">
										 2015</a>
									
								
								</div>
							
								<div id="collpaseone" class="panel-collapse collapse in">
									<div class="panel-body">
									
									</div>
								
								</div>
							
							</div>
						</div>

					
					
						<div class="panel-group" id="accordion">
							<div class="panel panel-info">
								<div class="panel-heading">
									
										<a href="#collpasetwo" data-toggle="collapse" data-parent="accordion">
										2016 </a>
									
								
								</div>
							
								<div id="collpasetwo" class="panel-collapse collapse">
									<div class="panel-body">
										<p id="side-pane"> 
										<?php
										/* for db connection | parameters */
											$servername = "localhost";
											$username = "root";
											$password = "seecs@123";
											$dbname = "test1";

											// Create connection with the database
											$conn = new mysqli($servername, $username, $password, $dbname);
											// Check connection
											if ($conn->connect_error) {
												die("Connection failed: " . $conn->connect_error);
											}

											// retrieve role from here
											mysqli_query($conn, "SET NAMES 'utf8'");
											$query = "SELECT id, name from disease where YEAR(publication_date) = 2016"; 
											$result = mysqli_query($conn, $query);
											while($row = mysqli_fetch_array($result)) {
												$id = $row['id'];
												$name = $row['name'];
										
												echo "<a href='#' id ='$id' onclick='reterive_info(id)'>$name</a><br>";
																		
											} 

											$conn->close();
										
										?>

										
										</p>
									</div>
								
								</div>
							
							</div>
						</div>
						
				</p>
					
				</div>
            </div>
        </div>
    </div>

</div>
					
					
					
					
					
				</div>			

				<div class="tab-pane" id="Upload">
				
					<div class="container">
						<div class="row">
							<div class="col-xs-12" id="output">
							<h2> Fill in the form:</h2>
							<div id="elements">
							<form action="submit.php" method="POST" class="form-horizontal" id="foo">
								<fieldset> 
									<legend><h4>Disease Category</h4></legend>
										<fieldset> 
										  <legend>Animal Type</legend> 
										  <div class="animal-type"> 
											  <input id="poultry" name="animaltype" value="poultry" type="radio"> 
											  <label for="poultry">Poultry</label> 
											  <input id="livestock" name="animaltype" value="livestock" type="radio">
											  <label for="livestock">Livestock</label>
											  <input id="both" name="animaltype" value="both" type="radio">
											  <label for="both">Both</label>
										  </div> 
										</fieldset>
										<fieldset> 
										  <legend>Disease Causative Agent</legend> 
										  <div class="agent-type"> 
											  <input id="virus" name="agenttype" value="virus" type="radio"> 
											  <label for="virus">Virus</label> 
											  <input id="bacteria" name="agenttype" value="bacteria" type="radio">
											  <label for="bacteria">Bacteria</label>
											  <input id="fungus" name="agenttype" value="fungus" type="radio"> 
											  <label for="fungus">Fungus</label> 
											  <input id="parasite" name="agenttype" value="parasite" type="radio">
											  <label for="parasite">Parasite</label>
										  </div> 
										</fieldset>
								</fieldset>
								<fieldset>
									<legend><h3>General Information</h3></legend>
									
										<div> 
											<label>Disease Name
											<input id="name" name="name" type="text" required autofocus> 
											</label>
										</div>
										<div> 
											<label>Definition
											<textarea id="definition" name="definition" rows=5 ></textarea>
											</label>
										</div>
										<div> 
											<label>Incidence
											<textarea id="incidence" name="incidence" rows=5 ></textarea>
											</label>
										</div>
										<div> 
											<label>Cause
											<textarea id="cause" name="cause" rows=5 ></textarea>
											</label>
										</div>
										<div> 
											<label>Transmission
											<textarea id="transmission" name="transmission" rows=5 ></textarea>
											</label>
										</div>
										<div> 
											<label>Symptoms
											<textarea id="symptoms" name="symptoms" rows=5 ></textarea>
											</label>
										</div>
										<div> 
											<label>Postmortem Examination
											<textarea id="postmortem_exam" name="postmortem_exam" rows=5 ></textarea>
											</label>
										</div>
										<div> 
											<label>Diagnosis
											<textarea id="diagnosis" name="diagnosis" rows=5 ></textarea>
											</label>
										</div>
										<div> 
											<label>Treatment
											<textarea id="treatment" name="treatment" rows=5 ></textarea>
											</label>
										</div>
										<div> 
											<label>Prevention
											<textarea id="prevention" name="prevention" rows=5 ></textarea>
											</label>
										</div>
								</fieldset>
								<fieldset> 
									<div> 
										<!--button name="submit" type="submit" onclick='post_to_db()' value="1">Submit</button-->
										<button name="submit" type="submit">Submit</button> 
									</div> 
								</fieldset> 
							</form>
							</div>
							</div>
						</div>
					</div>
								
					
				</div>
			</div>
		</div>
			
<!--
		<footer>
		</footer>
				
-->
				
				
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 
	<script type='text/javascript'>
		function reterive_info(d){
			 if (d=="") {
				document.getElementById('poultry').innerHTML="sorry!";
				return;
			} 
			if (window.XMLHttpRequest) {
				// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp=new XMLHttpRequest();
			} else { // code for IE6, IE5
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange=function() {
				if (xmlhttp.readyState==4 && xmlhttp.status==200) {
				  document.getElementById('poultry').innerHTML=xmlhttp.responseText;
				}
			}
			xmlhttp.open("GET","get_disease_info.php?q="+d,true);
			xmlhttp.send();
		};
/* 		function post_to_db(){
			var param = $("foo").serialize();
			if (param=="") {
				document.getElementById("output").innerHTML="sorry! nothing to save.";
				return;
			} 
			if (window.XMLHttpRequest) {
				// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp=new XMLHttpRequest();
			} else { // code for IE6, IE5
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			
			xmlhttp.open("POST","submit.php",true);
			
			//Send the proper header information along with the request
			http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			http.setRequestHeader("Content-length", param.length);
			http.setRequestHeader("Connection", "close");
			
			xmlhttp.onreadystatechange=function() {
				if (xmlhttp.readyState==4 && xmlhttp.status==200) {
				  document.getElementById("output").innerHTML=xmlhttp.responseText;
				}
			}
			xmlhttp.send(param);
		}; */
	</script>
  </body>
 </html>