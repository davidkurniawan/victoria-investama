<?php
include "../lib/processor.php";

$con = new DB_con();

$milestone_id=$_REQUEST['id'];
$delete_gms=$con->delete('milestone',$milestone_id);
if($delete_gms)
{
  $msg="Sukses, milestone sudah Dihapus";
  header("location:". $_SERVER['HTTP_REFERER']."&msg=".$msg);
}

 ?>
