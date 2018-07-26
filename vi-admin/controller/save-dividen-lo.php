<?php
include "../lib/processor.php";

$con = new DB_con();

$year=$_REQUEST['dividen-year'];
$TotalDivident=$_REQUEST['TotalDividen'];
$NoOfSharesAsDec31=$_REQUEST['NoOfSharesAsDec31'];
$NetIncome=$_REQUEST['NetIncome'];
$DividentPayoutRatio=$_REQUEST['DividentPayoutRatio'];
$query="insert into dividend_history values('','$year','$TotalDivident','$NoOfSharesAsDec31','$NetIncome','$DividentPayoutRatio')";
  $save_divident=mysql_query($query);
  if($save_divident)
  {
    $msg="Sukses, Dividen sudah di tambahkan";
    header("location:../index.php?page=dividen-history&msg=".$msg);
  }

?>
