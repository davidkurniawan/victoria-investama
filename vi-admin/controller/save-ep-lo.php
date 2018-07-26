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

$filename_ep=$_FILES["ep-file"]["name"];
$fileName_ep = preg_replace('#[^a-z.0-9]#i', '', $filename_ep);
$nama_file_ep = explode(".", $fileName_ep);

$new_filename_ep= date("dmY_hms")."_".$nama_file_ep[0].".".$nama_file_ep[1];

$url_cover=$cover_url.$new_filename_cover;
$url_file=$file_url.$new_filename_ep;


$year=$_REQUEST['ep_year'];
$desc_id=$_REQUEST['ep_info_id'];
$desc_en=$_REQUEST['ep_info_en'];


$new_fileloc_cover=$target_dir_cover.$new_filename_cover;
$new_fileloc_ar=$target_dir_file.$new_filename_ep;

$fileTmpLoc_cover = $_FILES["cover"]["tmp_name"];
$fileTmpLoc_ar = $_FILES["ep-file"]["tmp_name"];

move_uploaded_file($fileTmpLoc_cover, $new_fileloc_cover);
move_uploaded_file($fileTmpLoc_ep, $new_fileloc_ep);

$query="insert into event_presentation values('','$desc_en','$desc_id','$year','$url_file','$url_cover')";

  $update_ep=mysql_query($query);
  if($update_ep)
  {
    $msg="Sukses, Event Presentation sudah di tambahkan";
    header("location:../index.php?page=events-presentation&msg=".$msg);
  }

?>
