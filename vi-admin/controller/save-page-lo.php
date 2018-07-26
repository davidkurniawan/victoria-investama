<?php
include "../lib/processor.php";

$con = new DB_con();
$title_id=$_REQUEST['title_id'];
$content_id=$_REQUEST['content_id'];

$title_en=$_REQUEST['title_en'];
$content_en=$_REQUEST['content_en'];

$category_page=$_REQUEST['category_page'];
$menu_name_en=$_REQUEST['page_name_en'];
$menu_name_id=$_REQUEST['page_name_id'];

$url=str_replace(' ', '_', strtolower($menu_name_en));

$data_page=$con->save_page('content',$title_id,$title_en,$content_id,$content_en,$url,'','','','');
$set_menu=$con->page_name($menu_name_id,$menu_name_en,$category_page,$url);
if($data_page)
{
  $msg="Sukses, Halaman sudah dibuat";
  header("location:../index.php?page=page-manager&msg=".$msg);
}


?>
