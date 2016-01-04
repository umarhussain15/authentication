  <?php


$dbh2 = new mysqli("localhost", "root", "seecs@123", "test1");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if ($resulta = $dbh2->query("SELECT sum(amount_required) as total from schools")) 
{


while ($row = mysqli_fetch_assoc($resulta))
{ 
   $count = $row['total'];
}

    /* determine number of rows result set */
  /*  $count = $resulta->num_rows; */

    /* close result set */
    $resulta->close();
}


if ($result1a = $dbh2->query("SELECT sum(amount_gathered) as total1 from schools")) 
{

while ($row = mysqli_fetch_assoc($result1a))
{ 
   $count1 = $row['total1'];
}



    /* close result set */
    $result1a->close();
}

/* close connection */


					    $json2= json_encode(array('cols' => array(array('id' => '', 'Label' => 'Total amount required' , 'patttern' => '' , 'type' => 'string'), 
						array ('id' => '', 'Label' => 'Total amount gathered' , 'patttern' => '' , 'type' => 'number')),
						'rows' => array(array('c' => array(
						array('v' => 'Total Amount Required', 'f' => 'Total Amount Required'),
						array("v" => ($count), "f" => "null" ))), array('c' => array(array('v' => 'Total Amount Gathered', 'f' => 'Total Amount Gathered'), array("v" => ($count1), "f" => "null" ))))));
			
                // latitude, longitude, id etc.
           $jsonFile2 = "test5.json";
    $fh3 = fopen($jsonFile2, 'w');
    fwrite($fh3, $json2);





if ($resulta5 = $dbh2->query("SELECT avg(student_expense) as total3 from expenses")) 
{


while ($row = mysqli_fetch_assoc($resulta5))
{ 
   $count = $row['total3'];
}

    /* determine number of rows result set */
  /*  $count = $resulta->num_rows; */

    /* close result set */
    $resulta5->close();
}


if ($result1a = $dbh2->query("SELECT avg(teachers_salary) as total4 from expenses")) 
{

while ($row = mysqli_fetch_assoc($result1a))
{ 
   $count1 = $row['total4'];
}



    /* close result set */
    $result1a->close();
}
if ($result1a3 = $dbh2->query("SELECT avg(staff_salary) as total5 from expenses")) 
{

while ($row = mysqli_fetch_assoc($result1a3))
{ 
   $count3 = $row['total5'];
}



    /* close result set */
    $result1a3->close();
}



	$json= json_encode(array('cols' => array(array('id' => '', 'Label' => 'Student Expenses' , 'patttern' => '' , 'type' => 'string'), 
						array ('id' => '', 'Label' => 'Teacher Salary' , 'patttern' => '' , 'type' => 'number')),
						'rows' => array(array('c' => array(
						array('v' => 'Student Expenses', 'f' => 'Student Expenses'),
						array("v" => ($count), "f" => "null" ))), array('c' => array(array('v' => 'Teacher Salary', 'f' => 'Teacher Salary'), array("v" => ($count1), "f" => "null" ))), array('c' => array(array('v' => 'Staff Salary', 'f' => 'Staff Salaray'), array("v" => ($count3), "f" => "null" ))))));
			
                // latitude, longitude, id etc.
           $jsonFile1 = "test7.json";
    $fh2 = fopen($jsonFile1, 'w');
    fwrite($fh2, $json);









/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}









if ($resultaz = $dbh2->query("SELECT * from cw_users")) 
{

    /* determine number of rows result set */
    $count = $resultaz->num_rows;

    /* close result set */
    $resultaz->close();
}


if ($result1az = $dbh2->query("SELECT * from cw_users where isdonor =1 ")) 
{

    /* determine number of rows result set */
    $count1 = $result1az->num_rows;


    /* close result set */
    $result1az->close();
}

if ($result1ax = $dbh2->query("SELECT * from cw_users where isdonor =0 ")) 
{

    /* determine number of rows result set */
    $count2 = $result1ax->num_rows;


    /* close result set */
    $result1ax->close();
}

/* close connection */


					$json= json_encode(array('cols' => array(array('id' => '', 'Label' => 'Donors Registred' , 'patttern' => '' , 'type' => 'string'), 
						array ('id' => '', 'Label' => 'Blood Required by Persons' , 'patttern' => '' , 'type' => 'number')),
						'rows' => array(array('c' => array(
						array('v' => 'Total Users', 'f' => 'Total Users'),
						array("v" => ($count), "f" => "null" ))), array('c' => array(array('v' => 'Donor', 'f' => 'Donors'), array("v" => ($count1), "f" => "null" ))), array('c' => array(array('v' => 'Needy', 'f' => 'Needy'), array("v" => ($count2), "f" => "null" ))))));
			
                // latitude, longitude, id etc.
           $jsonFile1 = "test6.json";
    $fh2 = fopen($jsonFile1, 'w');
    fwrite($fh2, $json);










/*

$string = file_get_contents('test.json');
$json = json_decode($string, true);
//echo '<pre>' . print_r($json, true) . '</pre>';
$req_count = $json['result'][0]['request_count'];
$don_count = $json['result'][1]['donation_count'];
//echo $temperatureMin;
    $json= json_encode(array('type' => 'bar',
	'title' => array(
	'text' => 'Bar Chart'),
    'scale-x' => array(
            'label' => array(
			"text" => "Scholarships"),
            'labels' => array("Req_count","Donation_Count")
            ), // geometry
            'series' => array(
			array( "values" => array($req_count,0)),
			array( "values" => array(0,$don_count))
			)
			
                // latitude, longitude, id etc.
            ));

 $jsonFile = "test1.json";
    $fh = fopen($jsonFile, 'w');
    fwrite($fh, $json);
	*/


/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if ($result = $dbh2->query("SELECT * FROM comment")) 
{

    /* determine number of rows result set */
    $count = $result->num_rows;

    /* close result set */
    $result->close();
}


if ($result1 = $dbh2->query("SELECT * FROM content")) 
{

    /* determine number of rows result set */
    $count1 = $result1->num_rows;


    /* close result set */
    $result1->close();
}
if ($result2 = $dbh2->query("SELECT * FROM disease")) 
{

    /* determine number of rows result set */
    $count2 = $result2->num_rows;

  

    /* close result set */
    $result2->close();
}

/* close connection */


					    $json1= json_encode(array('cols' => array(array('id' => '', 'Label' => 'Content' , 'patttern' => '' , 'type' => 'string'), 
						array ('id' => '', 'Label' => 'Comment' , 'patttern' => '' , 'type' => 'number')),
						'rows' => array(array('c' => array(
						array('v' => 'content', 'f' => 'content'),
						array("v" => ($count1), "f" => "null" ))), array('c' => array(array('v' => 'comment', 'f' => 'comment'), array("v" => ($count), "f" => "null" ))), array('c' => array(array('v' => 'diease', 'f' => 'diease'), array("v" => ($count2), "f" => "null" ))))));
			
                // latitude, longitude, id etc.
           $jsonFile1 = "test2.json";
    $fh1 = fopen($jsonFile1, 'w');
    fwrite($fh1, $json1);

	
	

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if ($result4 = $dbh2->query("SELECT * FROM blood_req")) 
{

    /* determine number of rows result set */
    $count = $result4->num_rows;


    /* close result set */
    $result4->close();
}


if ($result5 = $dbh2->query("SELECT * FROM donor_reg")) 
{

    /* determine number of rows result set */
    $count1 = $result5->num_rows;

    /* close result set */
    $result5->close();
}
if ($result6 = $dbh2->query("SELECT * FROM member_reg")) 
{

    /* determine number of rows result set */
    $count2 = $result6->num_rows;

  
    /* close result set */
    $result6->close();
}

/* close connection */


					    $json= json_encode(array('cols' => array(array('id' => '', 'Label' => 'Donors Registred' , 'patttern' => '' , 'type' => 'string'), 
						array ('id' => '', 'Label' => 'Blood Required by Persons' , 'patttern' => '' , 'type' => 'number')),
						'rows' => array(array('c' => array(
						array('v' => 'donor_reg', 'f' => 'Donor Registred'),
						array("v" => ($count1), "f" => "null" ))), array('c' => array(array('v' => 'blood_req', 'f' => 'Blood Required by Persons'), array("v" => ($count), "f" => "null" ))), array('c' => array(array('v' => 'member_reg', 'f' => 'Total Number of Registred Members'), array("v" => ($count2), "f" => "null" ))))));
			
                // latitude, longitude, id etc.
           $jsonFile = "test3.json";
    $fh = fopen($jsonFile, 'w');
    fwrite($fh, $json);
					
					
?>




<html>
  <head>
    <!--Script Reference[1]-->
   
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/master-ui.css">
        <!--    <link rel="stylesheet" href="css/bootstrap-theme.min.css">-->
      <!--  <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/signin.css">
        <link rel="stylesheet" href="css/hover.css">
		
		-->
<!--        <script src="//npmcdn.com/api-check@latest/dist/api-check.js"></script>-->
<!--        <script src="js/angular.min.js"></script>-->
<!--        <script src="js/file_upload.js"></script>-->
        
<!--            <script src="js/ui-bootstrap.min.js"></script>-->
<!--        <script src="js/ng-intl-tel-input.js"></script>-->
<!--        <script src="js/ng-flow-standalone.min.js"></script>-->
        <!-- This is the current state of master for formly core. -->
<!--        <script src="//npmcdn.com/angular-formly@latest/dist/formly.js"></script>-->
        <!-- This is the current state of master for the bootstrap templates -->
<!--        <script src="//npmcdn.com/angular-formly-templates-bootstrap@latest/dist/angular-formly-templates-bootstrap.js"></script>-->
		
		
		
		
		
		
		
		
		  <script type="text/javascript" src="https://www.google.com/jsapi"></script>
<!--    <script src="css/master-ui1.css"></script>-->
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>


    <script type="text/javascript" src="script.js"></script>
      <script>
	

  
  	google.load('visualization', '1', {
    'packages': ['corechart']
});

// Set a callback to run when the Google Visualization API is loaded.
google.setOnLoadCallback(drawChart1);

google.setOnLoadCallback(drawChart2);
google.setOnLoadCallback(drawChart3);
google.setOnLoadCallback(drawChart4);
google.setOnLoadCallback(drawChart5);






function drawChart5() {
    var jsonData = $.ajax({
        url: "getData5.php",
        dataType: "json",
        async: false
    }).responseText;

    // Create our data table out of JSON data loaded from server.
    var data = new google.visualization.DataTable(jsonData);

    
    // Selsct Chart Type
    var chart_type = document.getElementsByName("chart1type")[0].value;
    
    if(chart_type == "ColumnChart"){
        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.ColumnChart(document.getElementById('char1div'));
        chart.draw(data, {
            title: "Data Visualization",
            width: "100%",
            height: 400
        });
    }
    
    else if(chart_type == "BarChart"){
        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.BarChart(document.getElementById('char1div'));
        chart.draw(data, {
            title: "Data Visualization",
            width: "100%",
            height: 400
        });
    }
    
    else if(chart_type == "LineChart"){
        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.LineChart(document.getElementById('char1div'));
        chart.draw(data, {
            title: "Data Visualization",
            width: "100%",
            height: 400
        });
    }


}









function drawChart4() {
    var jsonData = $.ajax({
        url: "getData4.php",
        dataType: "json",
        async: false
    }).responseText;

    // Create our data table out of JSON data loaded from server.
    var data = new google.visualization.DataTable(jsonData);

    
    // Selsct Chart Type
    var chart_type = document.getElementsByName("chartztype")[0].value;
    
    if(chart_type == "ColumnChart"){
        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.ColumnChart(document.getElementById('charzdiv'));
        chart.draw(data, {
            title: "Data Visualization",
            width: "100%",
            height: 400
        });
    }
    
    else if(chart_type == "BarChart"){
        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.BarChart(document.getElementById('charzdiv'));
        chart.draw(data, {
            title: "Data Visualization",
            width: "100%",
            height: 400
        });
    }
    
    else if(chart_type == "LineChart"){
        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.LineChart(document.getElementById('charzdiv'));
        chart.draw(data, {
            title: "Data Visualization",
            width: "100%",
            height: 400
        });
    }
	    else if(chart_type == "PieChart"){
        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('charzdiv'));
        chart.draw(data, {
            title: "Data Visualization",
            width: "100%",
            height: 400
        });
    }

}












function drawChart3() {
    var jsonData = $.ajax({
        url: "getData3.php",
        dataType: "json",
        async: false
    }).responseText;

    // Create our data table out of JSON data loaded from server.
    var data = new google.visualization.DataTable(jsonData);

    
    // Selsct Chart Type
    var chart_type = document.getElementsByName("chart^type")[0].value;
    
    if(chart_type == "ColumnChart"){
        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.ColumnChart(document.getElementById('char--div'));
        chart.draw(data, {
            title: "Data Visualization",
            width: "100%",
            height: 400
        });
    }
    
    else if(chart_type == "BarChart"){
        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.BarChart(document.getElementById('char--div'));
        chart.draw(data, {
            title: "Data Visualization",
            width: "100%",
            height: 400
        });
    }
    
    else if(chart_type == "LineChart"){
        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.LineChart(document.getElementById('char--div'));
        chart.draw(data, {
            title: "Data Visualization",
            width: "100%",
            height: 400
        });
    }
  else if(chart_type == "PieChart"){
        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('char--div'));
        chart.draw(data, {
            title: "Data Visualization",
            width: "100%",
            height: 400
        });
    }
}






function drawChart2() {
    var jsonData = $.ajax({
        url: "getData2.php",
        dataType: "json",
        async: false
    }).responseText;

    // Create our data table out of JSON data loaded from server.
    var data = new google.visualization.DataTable(jsonData);

    
    // Selsct Chart Type
    var chart_type = document.getElementsByName("chart-type")[0].value;
    
    if(chart_type == "ColumnChart"){
        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.ColumnChart(document.getElementById('char-div'));
        chart.draw(data, {
            title: "Data Visualization",
            width: "100%",
            height: 400
        });
    }
    
    else if(chart_type == "BarChart"){
        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.BarChart(document.getElementById('char-div'));
        chart.draw(data, {
            title: "Data Visualization",
            width: "100%",
            height: 400
        });
    }
    
    else if(chart_type == "LineChart"){
        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.LineChart(document.getElementById('char-div'));
        chart.draw(data, {
            title: "Data Visualization",
            width: "100%",
            height: 400
        });
    }

}







function drawChart1() {
    var jsonData = $.ajax({
        url: "getData1.php",
        dataType: "json",
        async: false
    }).responseText;

    // Create our data table out of JSON data loaded from server.
    var data = new google.visualization.DataTable(jsonData);

    
    // Selsct Chart Type
    var chart_type = document.getElementsByName("charttype")[0].value;
    
    if(chart_type == "ColumnChart"){
        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.ColumnChart(document.getElementById('chardiv'));
        chart.draw(data, {
            title: "Data Visualization",
            width: "100%",
            height: 400
        });
    }
    
    else if(chart_type == "BarChart"){
        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.BarChart(document.getElementById('chardiv'));
        chart.draw(data, {
            title: "Data Visualization",
            width: "100%",
            height: 400
        });
    }
    
    else if(chart_type == "LineChart"){
        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.LineChart(document.getElementById('chardiv'));
        chart.draw(data, {
            title: "Data Visualization",
            width: "100%",
            height: 400
        });
    }
	    else if(chart_type == "PieChart"){
        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chardiv'));
        chart.draw(data, {
            title: "Data Visualization",
            width: "100%",
            height: 400
        });
    }
}
	
	
	</script>
  </head>
  <body style="

		background: #ffffff; /* Old browsers */
background: -moz-linear-gradient(top, #ffffff 0%, #f1f1f1 50%, #e1e1e1 51%, #f6f6f6 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(50%,#f1f1f1), color-stop(51%,#e1e1e1), color-stop(100%,#f6f6f6)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top, #ffffff 0%,#f1f1f1 50%,#e1e1e1 51%,#f6f6f6 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top, #ffffff 0%,#f1f1f1 50%,#e1e1e1 51%,#f6f6f6 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top, #ffffff 0%,#f1f1f1 50%,#e1e1e1 51%,#f6f6f6 100%); /* IE10+ */
background: linear-gradient(to bottom, #ffffff 0%,#f1f1f1 50%,#e1e1e1 51%,#f6f6f6 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#f6f6f6',GradientType=0 ); /* IE6-9 */
">


<div id="custom-bootstrap-menu" class="navbar navbar-default " role="navigation">
    <div class="container-fluid">
        <div class="navbar-header"><a class="navbar-brand" href="#">Web Project </a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse navbar-menubuilder">
            <ul class="nav navbar-nav navbar-left">
			<li><a href="../">Home</a>
                </li>
                <li><a href="index.php">Visualization</a>
                </li>
                <li><a href="charts.php">Charts</a>
                </li>
                
            </ul>
        </div>
    </div>
</div>
		
		
		
		
		
						<div class=' text-center page-header' >
<h2>School Management</h2>
		<p>SELECT CHART TYPE</p>
    <select name="chart1type" onchange="drawChart5();">
	<option value="ColumnChart">Column Chart</option>
	<option value="BarChart">Bar Chart</option>

        <option value="LineChart">Line Chart</option>
		
			
    </select>
	
	</div>
		
		<div id="char1div"></div>
		
		
		
		
		
		
					<div class=' text-center page-header' >
<h2>Problem Sharing</h2>
		<p>SELECT CHART TYPE</p>
    <select name="chartztype" onchange="drawChart4();">
	<option value="PieChart">Pie Chart</option>
        <option value="ColumnChart">Column Chart</option>
        <option value="BarChart">Bar Chart</option>
        <option value="LineChart">Line Chart</option>
		
			
    </select>
	</div>
	<div id="charzdiv"></div>
				<div class=' margin-150t text-center page-header' >
<h2>School Renovation</h2>
		<p>SELECT CHART TYPE</p>
    <select name="chart^type" onchange="drawChart3();">
		<option value="BarChart">Bar Chart</option>
        <option value="ColumnChart">Column Chart</option>
        <option value="LineChart">Line Chart</option>
			
    </select>
	</div>
	<div id="char--div"></div>
    <!--Div that will hold the pie chart-->
    
		
		<div class=' margin-150t text-center page-header' >
<h2>Academic Scholarships</h2>
		<p>SELECT CHART TYPE</p>
    <select name="chart-type" onchange="drawChart2();">
        <option value="ColumnChart">Column Chart</option>
        <option value="BarChart">Bar Chart</option>
        <option value="LineChart">Line Chart</option>
    </select>
	</div>
	
	
    <!--Div that will hold the pie chart-->
   <div id="char-div"></div> 
		<div class=' margin-150t text-center page-header' >
<h2>Blood Donation </h2>
		<p>SELECT CHART TYPE</p>
    <select name="charttype" onchange="drawChart1();">
	 <option value="LineChart">Line Chart</option>
        <option value="ColumnChart">Column Chart</option>
        <option value="BarChart">Bar Chart</option>
       
		<option value="PieChart">Pie Chart</option>
    </select>
	</div>
    <!--Div that will hold the pie chart-->
    <div id="chardiv"></div>
	
		
		
		
		
		
		
		
<div class=' margin-150t text-center page-header' >
<h2>Food Sustance </h2>
    SELECT CHART TYPE 
  
    <select name="chart_type" onchange="drawChart();">
        <option value="ColumnChart">Column Chart</option>
        <option value="BarChart">Bar Chart</option>
        <option value="LineChart">Line Chart</option>
			<option value="PieChart">Pie Chart</option>
    </select>
	</div>
    <!--Div that will hold the pie chart-->
    <div id="chartdiv"></div>
	

	
	  <?php
      include '_header.html';
     // session_start();
	

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

//	$dbh1= mysql_connect("localhost","root","seecs@123") or die("No Connection");
//	mysql_select_db("test", $dbh1) or die("No Database name"); 
  ?>