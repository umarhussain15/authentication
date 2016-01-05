<?php
//seesion verfication if user already login
session_start();
//            $_SESSION["user_id"] = $qry->insert_id;
if (!isset($_SESSION["session_name"])) {
     
    header("Location:../../../portal.php");
    exit();   
}

?>

<?php
// composer autoloader
require_once 'vendor/autoload.php';

$stripe = [
    'publishable' => 'pk_test_sPnAMEXENK1ycxsZwj4NlPrb',
    'private' => 'sk_test_BvefXDnddo5SyQMM2XgNTMhV'
];

Stripe::setApiKey($stripe['private']);
?>


