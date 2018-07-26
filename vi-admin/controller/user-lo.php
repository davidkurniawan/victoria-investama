<?php
include "../lib/processor.php";

$con = new DB_con();
$boc=$con->select_where('account','id',$_SESSION['login_id']);


?>
