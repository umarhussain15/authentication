 <?php  
		$servername = "localhost";
		$username = "root";
		$password = "";
		$db="testdabase";
		// Create connection
		$conn = mysqli_connect($servername, $username, $password,$db);
		
		$current_user_id=$_SESSION["id"]; //To be get from session management system
		
		if (isset($_POST['to_editing'])){
		
        $rowToEdit = intval($_POST['to_editing']);
		
		$newContent = $_POST['newContent'];
		
		$query= "UPDATE comment SET content='$newContent' WHERE comment_id=$rowToEdit"; 
        $result = mysqli_query($conn, $query);
		
        header('Location: comments.php');
    }

?>