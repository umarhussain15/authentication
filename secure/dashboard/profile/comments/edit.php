<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Comments</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
	
	<script>

	function check_length(commentBox)
	{
		max = 250; // max number of characters allowed
		if (commentBox.newContent.value.length >= max) {
			commentBox.newContent.value = commentBox.newContent.value.substring(0, max);
			document.getElementById("limit").style.color = "#e74c3c";
		}
		else{ 
			commentBox.text_num.value = max - commentBox.newContent.value.length;
		}
	}
</script>
  </head>
  <body>
  <div class="container-fluid">
    <div class="commentSystem">
	<div class="comment">
	<form class="commentBox" action="editComment.php" method="post" style="border-bottom:1px solid #bdc3c7;padding:40px;">
		<input type="hidden" name="page_name" value="test">
		<div class="form-group">
			<h1 style="text-align:center">Edit Comment</h1><br>
			<textarea class="form-control" rows=15 name="newContent" onKeyPress=check_length(this.form); onKeyDown=check_length(this.form);
			placeholder="Edit Your Comment..." style="background:#ecf0f1;"></textarea><br/>
		</div>
		Characters Left:<input type="number" id="limit" size=1 value=250 name=text_num style="width:45px; text-align:center;border:none;color:#1abc9c"> 
		<?php $to_edit=$_POST["to_be_edited"];
		echo "<input type='hidden' value='".$to_edit."' name='to_editing'>";
		?>
		<input type="submit" class="btn btn-primary pull-right" value="Done Editing" style="background:#16a085;width:200px;height:45px;border-color:#16a085">
	</form>
	</div>
	</div>
  </div>
 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>