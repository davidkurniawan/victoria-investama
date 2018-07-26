<?php
include "../lib/processor.php";

$con = new DB_con();

$ep_id=$_REQUEST['id'];
$delete_ep=$con->delete('event_presentation',$ep_id);
if($delete_ep)
{
  $msg="Sukses, Evenet Presentation sudah Dihapus";
  header("location:". $_SERVER['HTTP_REFERER']."&msg=".$msg);
}

 ?>
