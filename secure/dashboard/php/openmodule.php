<?php
session_start();
if (!isset($_SESSION["session_name"]) ){
    header("Location:./index.php");
  exit(); 
}
$_POST = json_decode(file_get_contents('php://input'), true);

    $response=array();
    $response["success"]=-1;
    $response["errors"]=array();
if (isset($_POST["url"])){
    
if (preg_match('/\s/',$_POST["url"])){
    
}
    require_once __DIR__ . '/db_connect.php';
    $_ID=$_SESSION["session_name"];
    $url=$_POST["url"];
    if ($url=="./maps" || $url=="./vizs"){
         $response["success"]=1;
       $response["redirect"]="./modules/".stripslashes($url);
        echo json_encode($response);
        exit();
    }
    
//    $url=addslashes($url);
    $db= new DB_CONNECT();
    $db_c= $db->connect("userdata");
    if($url=="./p2p_ecommerce"){
        $qry= $db_c->prepare("SELECT * from hw_users where  user_id=?");
    // fist argument tells format of each parameter
        $qry->bind_param("s",$_ID);
        $qry->execute();
        $result=$qry->get_result();
    //    echo $_ID;
        if(mysqli_num_rows($result) == 1){
               $row = mysqli_fetch_array($result);
            if($row['isadmin']==1){
                $_SESSION['hw_user_chk']=1;
            }
        }
    }
    $qry= $db_c->prepare("SELECT * from registered_modules where  user_id=? AND module_id=?");
    // fist argument tells format of each parameter
    $qry->bind_param("ss",$_ID,$url);
    $qry->execute();
    $result=$qry->get_result();
//    echo $_ID;
    if(mysqli_num_rows($result) == 1){
        
//        if ()
//        $qry= $db_c->prepare("SELECT * from registered_modules where  user_id=? AND module_id=?");
        
        $response["success"]=1;
       $response["redirect"]="./modules/".stripslashes($url);
    }
    else{
        $str = file_get_contents('../modules/cw_fields.json');
        $str =json_decode($str);
        $str=$str->item;
        $response["success"]=1;
        foreach($str as $obj)
            {
//        echo stripos($key,$search);
                if($obj->url==$url ){
                   $response["fields"]=$obj->fields;
                    $response["name"]=$obj->name;
//                    $qry= $db_c->prepare("INSERT INTO registered_modules (user_id,module_id) VALUES (?,?)");
//                    // fist argument tells format of each parameter
//                    $qry->bind_param("ss",$ID,$url);
//                    $qry->execute();
                    break;
                }
        }
//        $response["fields"]=$str[$url];
    }
    mysqli_close($db_c);
}
 echo json_encode($response);
?>