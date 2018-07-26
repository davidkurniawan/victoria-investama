<?php
include "../lib/processor.php";

$con = new DB_con();
$category_id=$_REQUEST['name_category_id'];
$category_en=$_REQUEST['name_category_en'];
$url=str_replace(' ', '_', strtolower($category_en));

$table="menu";
$value="'','$category_en','$category_id','1','0','$url','',''";
$save_category=$con->insert($table,$value);
if($save_category)
{
  $msg="Sukses, Category sudah dibuat";
  header("location:../index.php?page=category-manager#?msg=".$msg);
}

?>
