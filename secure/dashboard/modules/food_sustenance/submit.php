<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
<!--
    <style>
	body 
	{	//font-family: "Urdu Typesetting", Arial, Serif;
		font-size: xx-large;
		//font-weight: 900;
	}
	.carousel-inner > .item > img {
    margin: 0 auto;
	}
	
	.form-group, h2, label {
	text-align:right;
	
	}
	input{
	direction: rtl;
	text-align:justify;
	}
	#accordion {
	direction: rtl;
	text-align:centre;	}
	
	#post {
	
	text-align:centre;
	}
	#side-pane {
	
	font-size: medium;
	}
	</style>
-->
	
  </head>
  <body>
	<p id="post">

		<?php
			$servername = "localhost";
			$username = "root";
			$password = "seecs@123";
			$dbname = "test1";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
			//echo "connected to database <br>";
			if(ISSET($_POST['submit'])){ // Fetching variables of the form which travels in URL
				$cat_id = $_POST['animaltype'];
				$category = $_POST['agenttype'];
				$name = $_POST['name'];
				$definition = $_POST['definition'];
				$cause = $_POST['cause'];
				$transmission = $_POST['transmission'];
				$symptoms = $_POST['symptoms'];
				$postmortem_examination = $_POST['postmortem_exam'];
				$diagnosis = $_POST['diagnosis'];
				$treatment = $_POST['treatment'];
				$prevention = $_POST['prevention'];
				//Insert Query of SQL
				$query = "INSERT INTO disease (cat_id, category, name, definition, cause, transmission, symptoms, postmortem_exam, diagnosis, treatment, prevention) VALUES ('$cat_id', '$category', '$name', '$definition', '$cause', '$transmission', '$symptoms', '$postmortem_examination', '$diagnosis', '$treatment', '$prevention')";
				if(mysqli_query($conn, $query)){
					echo "<br/><br/><span>Data Inserted successfully!<br/><br/></span>";

				}
				else{
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
				echo "<a href='start_up.php'> Return to main menu </a>";
			}
			$conn->close();
		?>
	</p>
  </body>
 </html>