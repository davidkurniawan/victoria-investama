<?php
include "../lib/processor.php";

$con = new DB_con();

$name=$_REQUEST['name'];
$username=$_REQUEST['username'];
$password=md5($_REQUEST['password']);
$user_level=$_REQUEST['user_level'];
$query="insert into account values(
'',
'$username',
'$password',
'$user_level',
'1',
'$name'

)";
  $save_account=mysql_query($query);
  if($save_account)
  {
    $msg="Sukses, Account sudah di tambahkan";
    header("location:../index.php?page=user-management&msg=".$msg);
  }

?>
