<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
//sample for am_users table
    var options={};
options["idam_users"]=135;
options["user_id"]=11;
options["ngoemail"]="meh";
options["phonenumber"]=2342314;
options["ngoname"]="beh";
console.log(options);
var dat = JSON.stringify (options);
console.log(dat);
console.log(JSON.stringify((options)));
$.ajax({
	url:"db.php",
	method:"post",
	data: {
		val:JSON.stringify($(options)),//name-value pair of data to store
		t_name:'am_users',//table name
		operation:'select',//db operation u need. can be insert,select,delete or update
		clause: ' where user_id=19',// where condition if any
		fields: '*'// column names 

		},
	datatype:"JSON",
	success:function(data){
		console.log(data);//response from server if any
	}
})
</script>
</head>
<body>

</body>
</html>

