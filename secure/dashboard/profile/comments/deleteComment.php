<?php  
		$servername = "localhost";
		$username = "root";
		$password = "";
		$db="testdabase";
		// Create connection
		$conn = mysqli_connect($servername, $username, $password,$db);
		
		$current_user_id=$_SESSION["id"]; //To be get from session management system
		
		if (isset($_POST['to_be_deleted'])) {

        $rowToDelete = intval($_POST['to_be_deleted']);
		
		$query= "DELETE FROM comment WHERE comment_id=$rowToDelete";
        $result = mysqli_query($conn, $query);
		
        header('Location: comments.php'); // Obviously, replace with the location of the page that you need it to redirect to.
    }

?>
	