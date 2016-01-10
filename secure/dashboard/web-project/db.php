<?php
$dbhost = "localhost";
$dbpass = "seecs@123";
$dbname = "test1";
$con = mysqli_connect($dbhost,"root","seecs@123",$dbname);
if(mysqli_connect_errno($con)) {
	   die ("Couldnt Establish Connection". 
		   mysqli_connect_error().
		   "(".mysqli_connect_errno().")"
	   );
}
	
	

if ( isset ( $_POST ) ) {
	echo " request intercepted";
	if ( isset ( $_POST['val'] ) ) {
		$val_decode=json_decode($_POST['val'],true);
		echo json_encode($val_decode);
		//echo json_encode(json_decode($_POST['val']));
		$data = $val_decode[0];
	}
/*	if ( isset ( $_POST['clause'] ) ) {
		$clause_decode=json_decode($_POST['clause'],true);
		//echo json_encode(json_decode($_POST['val']));
		$clause = $clause_decode[0];
}*/
	$op = $_POST['operation'];
	echo $op;
	if ( strcmp ( $op , 'insert') == 0 ) {
		echo " in insert";
		$res=dbRowInsert($_POST['t_name'],$data,$con);
		if(!$res){
			die("failed");
		}
		exit;
	}
	if ( strcmp ( $op , 'update') == 0 ) {
		$res=dbRowupdate($_POST['t_name'], $data, $_POST['clause'], $con);
		if(!$res){
			die("failed");
		}
		exit;
	}
	if ( strcmp ( $op , 'delete') == 0 ){
		echo "in delete";
		$res=dbRowDelete($_POST['t_name'], $_POST['clause'], $con);
		if(!$res){
			die("failed");
		}
		exit;
	}
	if ( strcmp ( $op , 'select') == 0 ){
		$res=dbRowSelect($_POST['t_name'], $_POST['fields'], $_POST['clause'], $con);
		if(!$res){
			die("failed");
		}
		else {
			while($r[]=mysqli_fetch_array($res));
			echo json_encode ($r);
		}
		exit;
	}
}


function dbRowSelect($table_name, $fields, $where_clause,$con)
{
   $whereSQL = '';
    if(!empty($where_clause))
    {
        // check to see if the 'where' keyword exists
        if(substr(strtoupper(trim($where_clause)), 0, 5) != 'WHERE')
        {
            // not found, add keyword
            $whereSQL = " WHERE ".$where_clause;
        } else
        {
            $whereSQL = " ".trim($where_clause);
        }
    }
    // build the query
    $sql = "SELECT ".$fields." FROM ".$table_name.$whereSQL;

    // run and return the query result resource
    return mysqli_query($con,$sql);
}


function dbRowInsert($table_name, $form_data,$con)
{
    // retrieve the keys of the array (column titles)
    $fields = array_keys($form_data);

    // build the query
    $sql = "INSERT INTO ".$table_name."
    (`".implode('`,`', $fields)."`)
    VALUES('".implode("','", $form_data)."')";

    // run and return the query result resource
    return mysqli_query($con,$sql);
}


function dbRowUpdate($table_name, $form_data, $where_clause='', $con)
{
    // check for optional where clause
    $whereSQL = '';
    if(!empty($where_clause))
    {
        // check to see if the 'where' keyword exists
        if(substr(strtoupper(trim($where_clause)), 0, 5) != 'WHERE')
        {
            // not found, add key word
            $whereSQL = " WHERE ".$where_clause;
        } else
        {
            $whereSQL = " ".trim($where_clause);
        }
    }
    // start the actual SQL statement
    $sql = "UPDATE ".$table_name." SET ";

    // loop and build the column /
    $sets = array();
    foreach($form_data as $column => $value)
    {
         $sets[] = "`".$column."` = '".$value."'";
    }
    $sql .= implode(', ', $sets);

    // append the where statement
    $sql .= $whereSQL;

    // run and return the query result
    return mysqli_query($con, $sql);
}


// the where clause is left optional incase the user wants to delete every row!
function dbRowDelete($table_name, $where_clause='',$con)
{
    // check for optional where clause
    $whereSQL = '';
    if(!empty($where_clause))
    {
        // check to see if the 'where' keyword exists
        if(substr(strtoupper(trim($where_clause)), 0, 5) != 'WHERE')
        {
            // not found, add keyword
            $whereSQL = " WHERE ".$where_clause;
        } else
        {
            $whereSQL = " ".trim($where_clause);
        }
    }
    // build the query
    $sql = "DELETE FROM ".$table_name.$whereSQL;

    // run and return the query result resource
    return mysqli_query($con,$sql);
}









?>
