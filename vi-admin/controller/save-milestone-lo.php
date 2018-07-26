<?php
include "../lib/processor.php";

$con = new DB_con();



$year=$_REQUEST['milestone-year'];
$desc_id=$_REQUEST['milestone_info_id'];
$desc_en=$_REQUEST['milestone_info_en'];

$query="insert into milestone values('','$year','$desc_en','$desc_id')";

  $update_milestone=mysql_query($query);
  if($update_milestone)
  {
    $msg="Sukses, Milestone sudah di tambahkan";
    header("location:../index.php?page=milestone&msg=".$msg);
  }

?>
