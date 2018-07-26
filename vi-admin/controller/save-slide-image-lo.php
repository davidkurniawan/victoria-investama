<?php
include "../lib/processor.php";

$con = new DB_con();

$slider_name=$_REQUEST['slider_name'];
$page_target=$_REQUEST['page_target'];

$query="insert into SliderImage values(
'',
'$slider_name',
'$page_target'

)";
  $save_slider=mysql_query($query);
  if($save_slider)
  {
    $msg="Sukses, Slider Image sudah di tambahkan";
    header("location:../index.php?page=slide-show&msg=".$msg);
  }

?>
