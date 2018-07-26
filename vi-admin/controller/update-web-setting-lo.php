<?php
include "../lib/processor.php";

$con = new DB_con();
$id=$_REQUEST['id'];

$site_name=$_REQUEST['site_name'];
$site_author=$_REQUEST['site_author'];
$site_title=$_REQUEST['site_title'];
$site_tag=$_REQUEST['site_tag'];
$meta_keyword=$_REQUEST['meta_keyword'];
$meta_description=$_REQUEST['meta_description'];

$table="Setting";
$value="
SiteName='".$site_name."',
SiteTag='".$site_tag."',
SiteKeyword='".$meta_keyword."',
SiteDescription='".$meta_description."',
SiteAuthor='".$site_author."',
SiteTitle='".$site_title."'

";

$update_setting=$con->update($table,$value,$id);
if($update_setting)
{
  $msg="Sukses, Web Setting sudah diupdate";
  header("location:../index.php?page=web-setting&msg=".$msg);
}

?>
