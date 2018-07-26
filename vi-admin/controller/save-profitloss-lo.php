<?php
include "../lib/processor.php";

$con = new DB_con();

$year=$_REQUEST['Year'];
$Revenue=$_REQUEST['Revenue'];
$OperatingExpenses=$_REQUEST['OperatingExpenses'];
$OperatingIncome=$_REQUEST['OperatingIncome'];
$OtherIncome=$_REQUEST['OtherIncome'];
$IncomeBeforeTax=$_REQUEST['IncomeBeforeTax'];
$IncomeYear=$_REQUEST['IncomeYear'];
$IncomeOwner=$_REQUEST['IncomeOwner'];
$IncomeShareHolder=$_REQUEST['IncomeShareHolder'];
$ComprehensiveIncomeYear=$_REQUEST['ComprehensiveIncomeYear'];
$ComprehensiveIncomeOwner=$_REQUEST['ComprehensiveIncomeOwner'];
$ComprehensiveIncomeShareholders=$_REQUEST['ComprehensiveIncomeShareholders'];
$EarningBasic=$_REQUEST['EarningBasic'];
$EarningDiluted=$_REQUEST['EarningDiluted'];

$query="insert into ProfitLoss values(
'',
'$year',
'$Revenue',
'$OperatingExpenses',
'$OperatingIncome',
'$OtherIncome',
'$IncomeBeforeTax',
'$IncomeYear',
'$IncomeOwner',
'$IncomeShareHolder',
'$ComprehensiveIncomeYear',
'$ComprehensiveIncomeOwner',
'$ComprehensiveIncomeShareholders',
'$EarningBasic',
'$EarningDiluted'

)";
  $save_balance_sheet=mysql_query($query);
  if($save_balance_sheet)
  {
    $msg="Sukses, Profit and Loss sudah di tambahkan";
    header("location:../index.php?page=profit-lost&msg=".$msg);
  }

?>
