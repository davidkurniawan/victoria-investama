<?php
include "../lib/processor.php";

$con = new DB_con();

$div_id=$_REQUEST['id'];
$delete_div=$con->delete('dividend_history',$div_id);
if($delete_div)
{
  $msg="Sukses, Dividen sudah Dihapus";
  header("location:". $_SERVER['HTTP_REFERER']."&msg=".$msg);
}

 ?>
