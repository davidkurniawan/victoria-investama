<?php
include "../lib/processor.php";

$con = new DB_con();

$year=$_REQUEST['Year'];
$total_assets=$_REQUEST['TotalAssets'];
$current_assets=$_REQUEST['CurrentAssets'];
$NonCurrentAssets=$_REQUEST['NonCurrentAssets'];
$TotalLiabilities=$_REQUEST['TotalLiabilities'];
$CurrentLiabilities=$_REQUEST['CurrentLiabilities'];
$NoncurrentLiabilities=$_REQUEST['NonCurrentLiabilities'];
$TotalShareholdersEquity=$_REQUEST['TotalShareholdersEquity'];
$AttributableOwnerParents=$_REQUEST['AttributableOwnerParents'];
$AttributableNoncontrollingInterests=$_REQUEST['AttributableNoncontrollingInterests'];

$query="insert into FinancialBalanceSheet values(
'',
'$year',
'$total_assets',
'$current_assets',
'$NonCurrentAssets',
'$TotalLiabilities',
'$CurrentLiabilities',
'$NoncurrentLiabilities',
'$TotalShareholdersEquity',
'$AttributableOwnerParents',
'$AttributableNoncontrollingInterests'

)";
  $save_balance_sheet=mysql_query($query);
  if($save_balance_sheet)
  {
    $msg="Sukses, Balance Sheet sudah di tambahkan";
    header("location:../index.php?page=balance-sheet&msg=".$msg);
  }

?>
