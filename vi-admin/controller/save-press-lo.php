<?php
include "../lib/processor.php";

$con = new DB_con();
$date_post=date_create($_REQUEST['date_post']);
$date=date_format($date_post,"Y-m-d");
$title_id=$_REQUEST['title_id'];
$content_id=$_REQUEST['content_id'];

$title_en=$_REQUEST['title_en'];
$content_en=$_REQUEST['content_en'];

$author=$_REQUEST['author'];
$source=$_REQUEST['source'];
$menu_name_id=$_REQUEST['page_name_id'];

$query="insert into press_release values(
'',
'$date',
'$title_id',
'$title_en',
'$content_id',
'$content_en',
'$source',
'$author',
'')";
  $save_news=mysql_query($query);
if($save_news)
{
  $msg="Sukses, Press Release sudah dibuat";
  header("location:../index.php?page=press-release-manager&msg=".$msg);
}


?>
