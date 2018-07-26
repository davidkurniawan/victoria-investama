<?php
include "../lib/processor.php";

$con = new DB_con();

$boc_id=$_REQUEST['id'];
$delete_category=$con->delete('boc',$boc_id);
if($delete_category)
{
  $msg="Sukses, Board of director sudah Dihapus";
  header("location:". $_SERVER['HTTP_REFERER']."&msg=".$msg);
}

 ?>
