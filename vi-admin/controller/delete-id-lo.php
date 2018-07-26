<?php
include "../lib/processor.php";

$con = new DB_con();

$id_id=$_REQUEST['id'];
$delete_id=$con->delete('information_disclosure',$id_id);
if($delete_id)
{
  $msg="Sukses, Information Disclosure sudah Dihapus";
  header("location:". $_SERVER['HTTP_REFERER']."&msg=".$msg);
}

 ?>
