<?php
include "../lib/processor.php";

$con = new DB_con();
$id=$_REQUEST['fr_id'];

$year=$_REQUEST['Year'];
$RevenueGrowth=$_REQUEST['RevenueGrowth'];
$NetIncomeGrowth=$_REQUEST['NetIncomeGrowth'];
$ComprehensiveIncomeYear=$_REQUEST['ComprehensiveIncomeYear'];
$ReturnOnAssets=$_REQUEST['ReturnOnAssets'];
$ReturnOnEquity=$_REQUEST['ReturnOnEquity'];
$NetIncomeMargin=$_REQUEST['NetIncomeMargin'];
$CurrentRatio=$_REQUEST['CurrentRatio'];
$LiabilitiesToEquityRatio=$_REQUEST['LiabilitiesToEquityRatio'];
$LiabilitiesToTotalAssets=$_REQUEST['LiabilitiesToTotalAssets'];


$table="FinancialRatio";
$value="
Year='".$year."',
RevenueGrowth='".$RevenueGrowth."',
NetIncomeGrowth='".$NetIncomeGrowth."',
ComprehensiveIncomeYear='".$ComprehensiveIncomeYear."',
ReturnOnAssets='".$ReturnOnAssets."',
ReturnOnEquity='".$ReturnOnEquity."',
NetIncomeMargin='".$NetIncomeMargin."',
CurrentRatio='".$CurrentRatio."',
LiabilitiesToEquityRatio='".$LiabilitiesToEquityRatio."',
LiabilitiesToTotalAssets='".$LiabilitiesToTotalAssets."'

";

$update_balance=$con->update($table,$value,$id);
if($update_balance)
{
  $msg="Sukses, Financial Ratio sudah diupdate";
  header("location:../index.php?page=financial-ratio&msg=".$msg);
}

?>
