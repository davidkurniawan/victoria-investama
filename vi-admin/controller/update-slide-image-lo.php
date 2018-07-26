<?php
include "../lib/processor.php";

$con = new DB_con();
$id=$_REQUEST['id'];

$slide_name=$_REQUEST['slider_name'];
$page_target=$_REQUEST['page_target'];

$table="SliderImage";
$value="
SlideShowName='".$slide_name."',
PageTarget='".$page_target."'

";

$update_slider=$con->update($table,$value,$id);
if($update_slider)
{
  $msg="Sukses, Slider Image sudah diupdate";
  header("location:../index.php?page=slide-show&msg=".$msg);
}

?>
