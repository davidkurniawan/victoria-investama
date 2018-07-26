<?php
include "../lib/processor.php";

$con = new DB_con();
$id=$_REQUEST['profitloss_id'];

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


$table="ProfitLoss";
$value="
Year='".$year."',
Revenue='".$Revenue."',
OperatingExpenses='".$OperatingExpenses."',
OperatingIncome='".$OperatingIncome."',
OtherIncome='".$OtherIncome."',
IncomeBeforeTax='".$IncomeBeforeTax."',
IncomeYear='".$IncomeYear."',
IncomeOwner='".$IncomeOwner."',
IncomeShareHolder='".$IncomeShareHolder."',
ComprehensiveIncomeYear='".$ComprehensiveIncomeYear."',
ComprehensiveIncomeOwner='".$ComprehensiveIncomeOwner."',
ComprehensiveIncomeShareholders='".$ComprehensiveIncomeShareholders."',
EarningBasic='".$EarningBasic."',
EarningDiluted='".$EarningDiluted."'

";

$update_balance=$con->update($table,$value,$id);
if($update_balance)
{
  $msg="Sukses, Profit and Loss sudah diupdate";
  header("location:../index.php?page=profit-lost&msg=".$msg);
}

?>
