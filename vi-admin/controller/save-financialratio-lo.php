<?php
include "../lib/processor.php";

$con = new DB_con();

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

$query="insert into FinancialRatio values(
'',
'$year',
'$RevenueGrowth',
'$NetIncomeGrowth',
'$ComprehensiveIncomeYear',
'$ReturnOnAssets',
'$ReturnOnEquity',
'$NetIncomeMargin',
'$CurrentRatio',
'$LiabilitiesToEquityRatio',
'$LiabilitiesToTotalAssets'

)";
  $save_financial_sheet=mysql_query($query);
  if($save_financial_sheet)
  {
    $msg="Sukses, Financial Ratio sudah di tambahkan";
    header("location:../index.php?page=financial-ratio&msg=".$msg);
  }

?>
