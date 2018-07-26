<?php
include "../lib/processor.php";

$con = new DB_con();
$id=$_REQUEST['id'];

$bank_victoria=$_REQUEST['bank_victoria'];
$bank_victoria_syariah=$_REQUEST['bank_victoria_syariah'];
$victoria_investama=$_REQUEST['victoria_investama'];
$victoria_insurance=$_REQUEST['victoria_insurance'];
$victoria_securities=$_REQUEST['victoria_securities'];
$vmi=$_REQUEST['vmi'];

$table="company_link";
$value="
bank_victoria='".$bank_victoria."',
victoria_investama='".$victoria_investama."',
bank_victoria_syariah='".$bank_victoria_syariah."',
victoria_insurance='".$victoria_insurance."',
victoria_securities='".$victoria_securities."',
vmi='".$vmi."'

";

$update_link=$con->update($table,$value,$id);
if($update_link)
{
  $msg="Sukses, Company Link sudah diupdate";
  header("location:../index.php?page=company-link-setting&msg=".$msg);
}

?>
