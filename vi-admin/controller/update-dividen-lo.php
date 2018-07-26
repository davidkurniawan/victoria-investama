<?php
include "../lib/processor.php";

$con = new DB_con();
$id=$_REQUEST['div_id'];

$year=$_REQUEST['Year'];
$TotalDivident=$_REQUEST['TotalDivident'];
$NoOfSharesAsDec31=$_REQUEST['NoOfSharesAsDec31'];
$NetIncome=$_REQUEST['NetIncome'];
$DividentPayoutRatio=$_REQUEST['DividentPayoutRatio'];


$table="dividend_history";
$value="
Year='".$year."',
TotalDivident='".$TotalDivident."',
NoOfSharesAsDec31='".$NoOfSharesAsDec31."',
NetIncome='".$NetIncome."',
DividentPayoutRatio='".$DividentPayoutRatio."'

";

$update_dividen=$con->update($table,$value,$id);
if($update_dividen)
{
  $msg="Sukses, Dividen sudah diupdate";
  header("location:../index.php?page=dividen-history&msg=".$msg);
}

?>
