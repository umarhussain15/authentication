	<script>

	function check_length(commentBox)
	{
		max = 250; // max number of characters allowed
		if (commentBox.content.value.length >= max) {
			commentBox.content.value = commentBox.content.value.substring(0, max);
			document.getElementById("limit").style.color = "#e74c3c";
		}
		else{ 
			commentBox.text_num.value = max - commentBox.content.value.length;
		}
	}
</script>

  <div class="container-fluid">
    <div class="commentSystem">
	<div class="comment">
	<form class="commentBox" action="comments/commentPost.php" method="post">
		<input type="hidden" name="page_name" value="user_<?php echo $_SESSION['session_name']; ?>">
		<div class="form-group">
			<textarea class="form-control" rows=3 name="content" onKeyPress=check_length(this.form); onKeyDown=check_length(this.form);
			placeholder="Write a Comment..."></textarea>	 
		</div>
		Characters Left:<input type="number" id="limit" size=1 value=250 name=text_num style="width:45px; text-align:center;border:none; color:#1abc9c">
		<input type="submit" class="btn btn-primary pull-right" value="Done">
	</form>
	
	<div class="oldPost"><br><br>
	<?php
		
		$sql = "SELECT * FROM comments join profile_users on comments.user_id = profile_users.user_id where page_name = 'user_".$_SESSION['session_name']."'";
		$result = mysqli_query($conn, $sql);
		
		$current_user_id = $_SESSION["session_name"]; //To be get from session management system
		//$sql = "SELECT username FROM session_users";
		//$username=mysqli_query($conn, $sql);
		
		if(mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				if($current_user_id==$row['user_id']){
				echo "<br><br><span class='glyphicon glyphicon-user' aria-hidden='true'></span>
					  <span style='padding-left:15px;'>
					  <b>".$row['name']."</b></span>
					  <form action='deleteComment.php' method='post'>
                      <input type='hidden' value='".$row['id']."' name='to_be_deleted'>
                      <input type='submit' value='Delete' class='btn btn-default btn-sm pull-right' style='width:53px;'>
					  </form>
					  <form action='edit.php' method='post'>
                      <input type='hidden' value='".$row['id']."' name='to_be_edited'>
                      <input type='submit' value='Edit' class='btn btn-default btn-sm pull-right' style='width:50px;'>
					  </form>
					  ".
					 "<div style='padding-left:30px; color:#95a5a6;'>".$row['content']."</div>";	
				}
				else{
				echo "<span class='glyphicon glyphicon-user' aria-hidden='true'></span>
				      <span style='padding-left:15px;'><b>".$row['name']."</b></span>
					 <br>
					 <div style='padding-left:30px; color:#95a5a6;'>".$row['content']."</div>";
				}
			}
		}
		
	?>
	</div>
	</div>
	</div>
  </div>