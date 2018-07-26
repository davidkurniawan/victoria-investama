<?php
include "../lib/processor.php";

$con = new DB_con();

$fr_id=$_REQUEST['id'];
$delete_fr=$con->delete('FinancialRatio',$fr_id);
if($delete_fr)
{
  $msg="Sukses, Financial ratio sudah Dihapus";
  header("location:". $_SERVER['HTTP_REFERER']."&msg=".$msg);
}

 ?>
