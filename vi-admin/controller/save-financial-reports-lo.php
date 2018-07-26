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

$filename_financial=$_FILES["ar-file"]["name"];
$fileName_financial = preg_replace('#[^a-z.0-9]#i', '', $filename_financial);
$nama_file_financial = explode(".", $fileName_financial);

$new_filename_financial= date("dmY_hms")."_".$nama_file_financial[0].".".$nama_file_financial[1];

$url_cover=$cover_url.$new_filename_cover;
$url_file=$file_url.$new_filename_financial;


$year=$_REQUEST['financial_report_year'];
$desc_id=$_REQUEST['financial_report_info_id'];
$desc_en=$_REQUEST['financial_report_info_en'];


$new_fileloc_cover=$target_dir_cover.$new_filename_cover;
$new_fileloc_financial=$target_dir_file.$new_filename_financial;

$fileTmpLoc_cover = $_FILES["cover"]["tmp_name"];
$fileTmpLoc_financial = $_FILES["financial-report-file"]["tmp_name"];

move_uploaded_file($fileTmpLoc_cover, $new_fileloc_cover);
move_uploaded_file($fileTmpLoc_financial, $new_fileloc_financial);

$query="insert into financial_report values('','$desc_en','$desc_id','$year','$url_file','$url_cover')";

  $update_financial=mysql_query($query);
  if($update_financial)
  {
    $msg="Sukses, Financial report sudah di tambahkan";
    header("location:../index.php?page=financial-reports&msg=".$msg);
  }

?>
