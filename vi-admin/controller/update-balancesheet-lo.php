<?php
include "../lib/processor.php";

$con = new DB_con();
$id=$_REQUEST['balance_id'];

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


$table="FinancialBalanceSheet";
$value="
Year='".$year."',
TotalAssets='".$total_assets."',
CurrentAssets='".$current_assets."',
NoncurrentAssets='".$NonCurrentAssets."',
TotalLiabilities='".$TotalLiabilities."',
CurrentLiabilities='".$CurrentLiabilities."',
NoncurrentLiabilities='".$NoncurrentLiabilities."',
TotalShareholdersEquity='".$TotalShareholdersEquity."',
AttributableOwnerParents='".$AttributableOwnerParents."',
AttributableNoncontrollingInterests='".$AttributableNoncontrollingInterests."'

";

$update_balance=$con->update($table,$value,$id);
if($update_balance)
{
  $msg="Sukses, Balance Sheet sudah diupdate";
  header("location:../index.php?page=balance-sheet&msg=".$msg);
}

?>
