<?php
include "../lib/processor.php";

$con = new DB_con();

$bod_id=$_REQUEST['id'];
$delete_category=$con->delete('bod',$bod_id);
if($delete_category)
{
  $msg="Sukses, Board of director sudah Dihapus";
  header("location:". $_SERVER['HTTP_REFERER']."&msg=".$msg);
}

 ?>
