<?php
include "../lib/processor.php";

$con = new DB_con();

$slider_id=$_REQUEST['slider_id'];
$delete_slider=$con->delete('SliderImage',$slider_id);
if($delete_slider)
{
  $msg="Sukses, Slider sudah Dihapus";
    header("location:". $_SERVER['HTTP_REFERER']."&msg=".$msg);
}

 ?>
