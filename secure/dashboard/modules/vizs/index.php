<?php


$dbh2 = new mysqli("localhost", "root", "seecs@123", "test1");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>




<html>
  <head>
    <!--Script Reference[1]-->
   
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/master-ui.css">

		  <script type="text/javascript" src="https://www.google.com/jsapi"></script>
<!--    <script src="css/master-ui1.css"></script>-->
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
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
    <!--Chart Placement[2]-->
  
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
		 <div class= 'col-md-6 col-xs-6 text-center page-header'> <h1>Portal Details</h1></div>
		   <div class="col-lg-4 col-sm-6 col-xs-12 main-widget">
		  
        <div class="main-box infographic-box">
            <i class="fa fa-user green-bg"></i>
			
            <span class="headline">Portal Users</span>
            <span class="value">
                <?php
				
											if ($sql_sel = $dbh2->query("SELECT * FROM user_details ")) 
{

    /* determine number of rows result set */
    $count = $sql_sel->num_rows;
echo $count;
    /* close result set */
    $sql_sel->close();
}
                   
                ?>
            </span>
        </div>
    </div>
	
 <div class="col-md-10 col-md-offset-1">

  <div id="wrapper margin-20L">
    <div id="page-wrapper">
	 <div class= 'col-md-6 col-xs-6 text-center page-header'> <h1>Academic Scholarships </h1></div>
   <div class="col-lg-12">
  
    <div class="col-lg-4 col-sm-6 col-xs-12 main-widget">
        <div class="main-box infographic-box">
            <i class="fa fa-users red-bg"></i>
            <span class="headline">Registered Schools</span>
            <span class="value">
                <?php
				
				
				if ($sql_sel = $dbh2->query("SELECT * FROM sch_school")) 
{

    /* determine number of rows result set */
    $count = $sql_sel->num_rows;
echo $count;
    /* close result set */
    $sql_sel->close();
}
                 
                ?>
            </span>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6 col-xs-12 main-widget">
        <div class="main-box infographic-box">
            <i class="fa fa-users emerald-bg"></i>
            <span class="headline">Registered Authorized Users</span>
            <span class="value">
                <?php
				
				
				
				if ($sql_sel = $dbh2->query("SELECT * FROM sch_users")) 
{

    /* determine number of rows result set */
    $count = $sql_sel->num_rows;
echo $count;
    /* close result set */
    $sql_sel->close();
}
// $dbh2->close();
/*
                    $sql_sel=mysql_query("SELECT * FROM teacher_tbl");
                    $count = mysql_num_rows($sql_sel);
                    echo $count; */
                ?>
            </span>
        </div>
    </div>
    
</div>
      </div> 
    </div>
    </div>
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
  <div class="col-md-10 col-md-offset-1">

  <div id="wrapper margin-20L">
    <div id="page-wrapper">
	 <div class= 'col-md-6 col-xs-6 text-center page-header'> <h1>School Management </h1></div>
   <div class="col-lg-12">
  
    <div class="col-lg-4 col-sm-6 col-xs-12 main-widget">
        <div class="main-box infographic-box">
            <i class="fa fa-users red-bg"></i>
            <span class="headline">Students</span>
            <span class="value">
                <?php
				
				
				if ($sql_sel = $dbh2->query("SELECT * FROM stu_tbl")) 
{

    /* determine number of rows result set */
    $count = $sql_sel->num_rows;
echo $count;
    /* close result set */
    $sql_sel->close();
}
                 
                ?>
            </span>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6 col-xs-12 main-widget">
        <div class="main-box infographic-box">
            <i class="fa fa-users emerald-bg"></i>
            <span class="headline">Teachers</span>
            <span class="value">
                <?php
				
				
				
				if ($sql_sel = $dbh2->query("SELECT * FROM teacher_tbl")) 
{

    /* determine number of rows result set */
    $count = $sql_sel->num_rows;
echo $count;
    /* close result set */
    $sql_sel->close();
}
// $dbh2->close();
/*
                    $sql_sel=mysql_query("SELECT * FROM teacher_tbl");
                    $count = mysql_num_rows($sql_sel);
                    echo $count; */
                ?>
            </span>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6 col-xs-12 main-widget">
        <div class="main-box infographic-box">
            <i class="fa fa-user green-bg"></i>
            <span class="headline">Users</span>
            <span class="value">
                <?php
				
											if ($sql_sel = $dbh2->query("SELECT * FROM users_tbl")) 
{

    /* determine number of rows result set */
    $count = $sql_sel->num_rows;
echo $count;
    /* close result set */
    $sql_sel->close();
}
                   
                ?>
            </span>
        </div>
    </div>
	
	<div class="col-lg-4 col-sm-6 col-xs-12 main-widget">
        <div class="main-box infographic-box">
            <i class="fa fa-star yellow-bg"></i>
            <span class="headline">Subject</span>
            <span class="value">
                <?php
				
					if ($sql_sel = $dbh2->query("SELECT * FROM sub_tbl")) 
{

    /* determine number of rows result set */
    $count = $sql_sel->num_rows;
echo $count;
    /* close result set */
    $sql_sel->close();
}
             
                ?>
            </span>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6 col-xs-12 main-widget">
        <div class="main-box infographic-box">
            <i class="fa fa-fax orange-bg"></i>
            <span class="headline">Faculty</span>
            <span class="value">
                <?php
				
				
				
								if ($sql_sel = $dbh2->query("SELECT * FROM facuties_tbl")) 
{

    /* determine number of rows result set */
    $count = $sql_sel->num_rows;
echo $count;
    /* close result set */
    $sql_sel->close();
}
               $dbh2->close();
                ?>
            </span>
        </div>
    </div>
    
</div>
      </div> 
    </div>
    </div>


    <!--Div that will hold the pie chart-->
   
	

	

  </body>
</html>

