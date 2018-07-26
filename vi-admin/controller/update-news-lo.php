<?php
include "../lib/processor.php";

$con = new DB_con();
$id=$_REQUEST['id'];

$date_post=date_create($_REQUEST['date_post']);
$date=date_format($date_post,"Y-m-d");
$title_id=$_REQUEST['title_id'];
$content_id=$_REQUEST['content_id'];

$title_en=$_REQUEST['title_en'];
$content_en=$_REQUEST['content_en'];

$author=$_REQUEST['author'];
$source=$_REQUEST['source'];
$menu_name_id=$_REQUEST['page_name_id'];

$table="news";
$value="
date_created='".$date."',
title_id='".$title_id."',
title_en='".$title_en."',
content_id='".$content_id."',
content_en='".$content_en."',
source='".$source."',
author='".$author."'
";

$update_news=$con->update($table,$value,$id);
if($update_news)
{
  $msg="Sukses, News sudah diupdates";
  header("location:../index.php?page=news-manager&msg=".$msg);
}


?>
