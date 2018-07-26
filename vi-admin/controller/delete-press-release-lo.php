<?php
include "../lib/processor.php";

$con = new DB_con();

$press_id=$_REQUEST['press_id'];
$delete_press=$con->delete('press_release',$press_id);
if($delete_press)
{
  $msg="Sukses, Press Release sudah Dihapus";
    header("location:". $_SERVER['HTTP_REFERER']."&msg=".$msg);
}

 ?>
