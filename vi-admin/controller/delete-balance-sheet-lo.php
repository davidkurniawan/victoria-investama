<?php
include "../lib/processor.php";

$con = new DB_con();

$bs_id=$_REQUEST['id'];
$delete_bs=$con->delete('FinancialBalanceSheet',$bs_id);
if($delete_bs)
{
  $msg="Sukses, Balance Sheet sudah Dihapus";
  header("location:". $_SERVER['HTTP_REFERER']."&msg=".$msg);
}

 ?>
