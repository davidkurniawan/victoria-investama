<?php
include "../lib/processor.php";

$con = new DB_con();

$prt_id=$_REQUEST['id'];
$delete_prt=$con->delete('prospectus',$prt_id);
if($delete_prt)
{
  $msg="Sukses, Prospectus sudah Dihapus";
    header("location:". $_SERVER['HTTP_REFERER']."&msg=".$msg);
}

 ?>
