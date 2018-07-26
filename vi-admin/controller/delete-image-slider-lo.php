<?php
include "../lib/processor.php";

$con = new DB_con();

$image_id=$_REQUEST['image_id'];
$slider_id=$_REQUEST['slider_id'];
$delete_slider=$con->delete('SliderImageContent',$image_id);
if($delete_slider)
{
  $msg="Sukses, Image sudah Dihapus";
  header("location:". $_SERVER['HTTP_REFERER']."&slider_id=".$slider_id."&msg=".$msg);
}

 ?>
