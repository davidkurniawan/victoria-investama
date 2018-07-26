<?php
include "../lib/processor.php";

$con = new DB_con();
$target_dir_file = "../../assets/content_download/";
$file_url="/assets/content_download/";


$filename_id=$_FILES["id-file"]["name"];
$fileName_id = preg_replace('#[^a-z.0-9]#i', '', $filename_id);
$nama_file_id = explode(".", $fileName_id);

$new_filename_id= date("dmY_hms")."_".$nama_file_id[0].".".$nama_file_id[1];

$url_file=$file_url.$new_filename_id;


$year=$_REQUEST['id-year'];
$desc_id=$_REQUEST['id_info_id'];
$desc_en=$_REQUEST['id_info_en'];

$new_fileloc_id=$target_dir_file.$new_filename_id;

$fileTmpLoc_id = $_FILES["id-file"]["tmp_name"];

move_uploaded_file($fileTmpLoc_id, $new_fileloc_id);

$query="insert into information_disclosure values('','$year','$desc_en','$desc_id','$url_file')";

  $update_id=mysql_query($query);
  if($update_id)
  {
    $msg="Sukses, Information Disclosure sudah di tambahkan";
    header("location:../index.php?page=information-disclosure&msg=".$msg);
  }

?>
