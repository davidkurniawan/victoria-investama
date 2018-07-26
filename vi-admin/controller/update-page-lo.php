<?php
include "../lib/processor.php";

$con = new DB_con();
$page_id=$_REQUEST['page_id'];
$menu_id=$_REQUEST['menu_id'];

$title_id=$_REQUEST['title_id'];
$content_id=$_REQUEST['content_id'];

$title_en=$_REQUEST['title_en'];
$content_en=$_REQUEST['content_en'];

$category_page=$_REQUEST['category_page'];
$menu_name_en=$_REQUEST['page_name_en'];
$menu_name_id=$_REQUEST['page_name_id'];

$url=str_replace(' ', '_', strtolower($menu_name_en));

$table="content";
$value="
Title_en='".$title_en."',
Title_id='".$title_id."',
BodyText_id='".$content_id."',
BodyText_en='".$content_en."'
";

$table2="menu";
$value2="
MenuName='".$menu_name_en."',
MenuNameID='".$menu_name_id."'
";

$update_page=$con->update($table,$value,$page_id);
$update_page_name=$con->update($table2,$value2,$menu_id);

$update_category=$con->update_category($menu_id,$category_page);
if($update_page or $update_category or $update_page_name)
{
  $msg="Sukses, Halaman sudah diedit";
  header("location:../index.php?page=page-manager&msg=".$msg);
}

?>
