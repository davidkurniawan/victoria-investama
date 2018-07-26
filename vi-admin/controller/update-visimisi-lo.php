<?php
include "../lib/processor.php";

$con = new DB_con();
$id_content=$_REQUEST['id_content'];

$title_id=$_REQUEST['title_id'];
$content_id=$_REQUEST['content_id'];

$title_en=$_REQUEST['title_en'];
$content_en=$_REQUEST['content_en'];

$table="VisiMisi";
$value="Title_en='".$title_en."',Title_id='".$title_id."',ContentEn='".$content_en."',ContentId='".$content_id."'";
$update_category=$con->update($table,$value,$id_content);
if($update_category)
{
  $msg="Sukses, Category sudah diudpate";
  header("location:../index.php?page=visi-misi#?msg=".$msg);
}

?>
