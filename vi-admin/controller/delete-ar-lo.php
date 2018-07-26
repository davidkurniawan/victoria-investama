<?php
include "../lib/processor.php";

$con = new DB_con();

$ar_id=$_REQUEST['id'];
$delete_ar=$con->delete('annual_report',$ar_id);
if($delete_ar)
{
  $msg="Sukses, Annual report sudah Dihapus";
  header("location:". $_SERVER['HTTP_REFERER']."&msg=".$msg);
}

 ?>
