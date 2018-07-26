<?php
include "../lib/processor.php";

$con = new DB_con();

$news_id=$_REQUEST['news_id'];
$delete_news=$con->delete('news',$news_id);
if($delete_news)
{
  $msg="Sukses, News sudah Dihapus";
  header("location:../index.php?page=news-manager&msg=".$msg);
}

 ?>
