<?php
include "../lib/processor.php";

$con = new DB_con();
$id=$_REQUEST['account_id'];

$name=$_REQUEST['name'];
$username=$_REQUEST['username'];
if($_REQUEST['password']!="")
{
  $password=md5($_REQUEST['password']);
}



$table="account";

if($_REQUEST['password']=="")
{
  $value="
  Name='".$name."',
  username='".$username."'
  ";
}
else {
  $value="
  Name='".$name."',
  username='".$username."',
  password='".$password."'
  ";
}


$update_account=$con->update($table,$value,$id);
if($update_account)
{
  $msg="Sukses, Account sudah diupdate";
  header("location:../index.php?page=user-management&msg=".$msg);
}

?>
