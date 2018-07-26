<?php
include "../lib/processor.php";

$con = new DB_con();
$id=$_REQUEST['contact_id'];

$company=$_REQUEST['company'];
$address=$_REQUEST['address'];
$phone=$_REQUEST['phone'];
$fax=$_REQUEST['fax'];
$email=$_REQUEST['mail'];
$inbox_mail=$_REQUEST['inbox_mail'];


$table="contact_us";
$value="
company_name='".$company."',
address='".$address."',
phone='".$phone."',
fax='".$fax."',
email='".$email."',
mailbox_address='".$inbox_mail."'

";

$update_balance=$con->update($table,$value,$id);
if($update_balance)
{
  $msg="Sukses, Contact sudah diupdate";
  header("location:../index.php?page=contact-setting&msg=".$msg);
}

?>
