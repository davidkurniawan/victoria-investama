<?php
include "../lib/processor.php";

$con = new DB_con();
$id=$_REQUEST['id'];

$symbol=$_REQUEST['symbol'];

$table="Stock_Widget";
$value="
symbol='".$symbol."'

";

$update_stock=$con->update($table,$value,$id);
if($update_stock)
{
  $msg="Sukses, Stock Exchange sudah diupdate";
  header("location:../index.php?page=stock-setting&msg=".$msg);
}

?>
