<?php
include "../lib/processor.php";

$con = new DB_con();

$id_menu=$_REQUEST['menu_id'];
$delete_category=$con->delete('menu',$id_menu);
if($delete_category)
{
  $msg="Sukses, Category sudah Dihapus";
  header("location:". $_SERVER['HTTP_REFERER']."&msg=".$msg);
}

 ?>
