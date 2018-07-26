<?php
include "../lib/processor.php";

$con = new DB_con();
$target_dir_file = "../../assets/content_download/";
$target_dir_cover = "../../assets/img/pdf_thumb/";

$cover_url="/assets/img/pdf_thumb/";
$file_url="/assets/content_download/";

$filename_cover=$_FILES["cover"]["name"];
$fileName_cover = preg_replace('#[^a-z.0-9]#i', '', $filename_cover);
$nama_file_cover = explode(".", $fileName_cover);

$new_filename_cover= date("dmY_hms")."_".$nama_file_cover[0].".".$nama_file_cover[1];

$filename_ar=$_FILES["ar-file"]["name"];
$fileName_ar = preg_replace('#[^a-z.0-9]#i', '', $filename_ar);
$nama_file_ar = explode(".", $fileName_ar);

$new_filename_ar= date("dmY_hms")."_".$nama_file_ar[0].".".$nama_file_ar[1];

$url_cover=$cover_url.$new_filename_cover;
$url_file=$file_url.$new_filename_ar;


$year=$_REQUEST['annual_report_year'];
$desc_id=$_REQUEST['annual_report_info_id'];
$desc_en=$_REQUEST['annual_report_info_en'];


$new_fileloc_cover=$target_dir_cover.$new_filename_cover;
$new_fileloc_ar=$target_dir_file.$new_filename_ar;

$fileTmpLoc_cover = $_FILES["cover"]["tmp_name"];
$fileTmpLoc_ar = $_FILES["ar-file"]["tmp_name"];

move_uploaded_file($fileTmpLoc_cover, $new_fileloc_cover);
move_uploaded_file($fileTmpLoc_ar, $new_fileloc_ar);

$query="insert into annual_report values('','$desc_en','$desc_id','$year','$url_file','$url_cover')";

  $update_ar=mysql_query($query);
  if($update_ar)
  {
    $msg="Sukses, Annual Repost sudah di tambahkan";
    header("location:../index.php?page=annual-reports&msg=".$msg);
  }

?>
