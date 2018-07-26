<?php
include "../lib/processor.php";

$con = new DB_con();

$gms_id=$_REQUEST['id'];
$delete_gms=$con->delete('general_meeting_shareholder',$gms_id);
if($delete_gms)
{
  $msg="Sukses, General Meeting Of Shareholder sudah Dihapus";
  header("location:". $_SERVER['HTTP_REFERER']."&msg=".$msg);
}

 ?>
