<?php
include "../lib/processor.php";

$con = new DB_con();

$id=$_REQUEST['account_id'];
$delete=$con->delete('account',$id);
if($delete)
{
  $msg="Sukses, account sudah Dihapus";
  header("location:". $_SERVER['HTTP_REFERER']."&msg=".$msg);
}

 ?>
