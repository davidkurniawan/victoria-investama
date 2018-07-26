<?php
include "../lib/processor.php";

$con = new DB_con();
$id=$_REQUEST['milestone_id'];

$year=$_REQUEST['milestone-year'];
$desc_id=$_REQUEST['milestone_info_id'];
$desc_en=$_REQUEST['milestone_info_en'];


$table="milestone";
$value="Year='".$year."',InformationID='".$desc_id."',InformationEN='".$desc_en."'";
$update_category=$con->update($table,$value,$id);
if($update_category)
{
  $msg="Sukses, milestone sudah diupdate";
  header("location:../index.php?page=milestone&msg=".$msg);
}

?>
