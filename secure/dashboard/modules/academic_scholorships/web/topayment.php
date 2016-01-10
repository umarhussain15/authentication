<?php

session_start();
$amount_entered = $_GET['amount'];
$_SESSION['don_id']=$_GET['don_id'];

?>

<script src="js/jquery.min.js"></script>
<script>
$(document).ready(function() { sendData(); });



function sendData(){
	
 /* var loc = window.location.pathname;
var dir = loc.substring(0, loc.lastIndexOf('/'));
var dir = dir.substring(0, dir.lastIndexOf('/'));*/
      $('#target').empty();
        var url = "payment.php"; // the script where you handle the form input.
        var noteUrl = <?php echo $amount_entered;
        ?>;

        var request = $.ajax({
           type: "POST",
           url: url,
           data: {amount: noteUrl}
        });

        request.done(function(data) {
            $('#target').append(data);
        });
}
	</script>
    <head>
    <title> Checkout </title>
    <link rel="stylesheet" type="text/css" href="css/master-ui.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>

  
    <body>  <div id='target'></div></body>