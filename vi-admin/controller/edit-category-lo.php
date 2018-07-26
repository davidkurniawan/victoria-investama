<?php
include "../lib/processor.php";

$con = new DB_con();
$category_id=$_REQUEST['name_category_id'];
$category_en=$_REQUEST['name_category_en'];
$menu_id=$_REQUEST['menu_id'];
$url=str_replace(' ', '_', strtolower($category_en));

$table="menu";
$value="MenuName='".$category_en."',MenuNameID='".$category_id."'";
$update_category=$con->update($table,$value,$menu_id);
if($update_category)
{
  $msg="Sukses, Category sudah diudpate";
  header("location:../index.php?page=category-manager#?msg=".$msg);
}

?>
