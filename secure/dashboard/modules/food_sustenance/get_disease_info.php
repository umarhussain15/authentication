<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
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
	input, p{
	direction: rtl;
	text-align:justify;
	}
	#accordion {
	direction: rtl;
	text-align:centre;	}
	
	#side-pane {
	
	font-size: medium;
	}
	</style>
	
  </head>
  <body>
	<p>
		<?php
			$q = intval($_GET['q']);

			//for db connection | parameters
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
			$query = "SELECT category, name, definition, cause, transmission, symptoms, postmortem_exam, diagnosis, treatment, prevention, publication_date from disease where id = '$q'"; // orderby date_published
			$result = mysqli_query($conn, $query);
			while($row = mysqli_fetch_array($result)) {
				$category = $row['category'];
				$name = $row['name'];
				$def = $row['definition'];
				$cause = $row['cause'];
				$transmission = $row['transmission'];
				$symptoms = $row['symptoms'];
				$postmortem_examination = $row['postmortem_exam'];
				$diagnosis = $row['diagnosis'];
				$treatment = $row['treatment'];
				$prevention = $row['prevention'];
				$publication = $row['publication_date'];

				echo "$category<br>$name<br>$def<br>$cause<br>$transmission<br>$symptoms<br>$postmortem_examination<br>$diagnosis<br>$treatment<br>$prevention<br>$publication<br>";
				} 
			$conn->close();
		?>
	</p>
  </body>
 </html>