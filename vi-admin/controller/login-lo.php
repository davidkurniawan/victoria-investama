<?php
include "../lib/processor.php";
$username=$_REQUEST['username'];
$password=md5($_REQUEST['password']);

$con = new DB_con();
$account_data=$con->select_where('account','username',$username);
$account=mysql_fetch_object($account_data);

if($password==$account->password)
{
  session_start();
  $_SESSION['login_token']=md5($password);
  $_SESSION['login_id']=md5($account->id);
  $_SESSION['user_login']=$account->Name;
  header ("location:../index.php");
}
else {

  $msg="Login Gagal, pastikan username dan password anda benar";
  header("location:../login.php?msg=".$msg);
}
 ?>
