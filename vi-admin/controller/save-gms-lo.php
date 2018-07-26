<?php
include "../lib/processor.php";

$con = new DB_con();
$target_dir_file = "../../assets/content_download/";
$file_url="/assets/content_download/";


$filename_gms=$_FILES["gms-file"]["name"];
$fileName_gms = preg_replace('#[^a-z.0-9]#i', '', $filename_gms);
$nama_file_gms = explode(".", $fileName_gms);

$new_filename_gms= date("dmY_hms")."_".$nama_file_gms[0].".".$nama_file_gms[1];

$url_file=$file_url.$new_filename_gms;


$year=$_REQUEST['gms-year'];
$desc_id=$_REQUEST['gms_info_id'];
$desc_en=$_REQUEST['gms_info_en'];

$new_fileloc_gms=$target_dir_file.$new_filename_gms;

$fileTmpLoc_gms = $_FILES["gms-file"]["tmp_name"];

move_uploaded_file($fileTmpLoc_gms, $new_fileloc_gms);

$query="insert into general_meeting_shareholder values('','$year','$desc_en','$desc_id','$url_file')";

  $update_gms=mysql_query($query);
  if($update_gms)
  {
    $msg="Sukses, General Meeting Of Shareholder sudah di tambahkan";
    header("location:../index.php?page=general-meetings-of-shareholders&msg=".$msg);
  }

?>
