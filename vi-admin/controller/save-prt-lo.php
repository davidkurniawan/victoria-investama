<?php
include "../lib/processor.php";

$con = new DB_con();
$target_dir_file = "../../assets/content_download/";
$file_url="/assets/content_download/";


$filename_prt=$_FILES["prt-file"]["name"];
$fileName_prt = preg_replace('#[^a-z.0-9]#i', '', $filename_prt);
$nama_file_prt = explode(".", $fileName_prt);

$new_filename_prt= date("dmY_hms")."_".$nama_file_prt[0].".".$nama_file_prt[1];

$url_file=$file_url.$new_filename_prt;


$year=$_REQUEST['prt-year'];
$desc_id=$_REQUEST['prt_info_id'];
$desc_en=$_REQUEST['prt_info_en'];

$new_fileloc_prt=$target_dir_file.$new_filename_prt;

$fileTmpLoc_prt = $_FILES["prt-file"]["tmp_name"];
move_uploaded_file($fileTmpLoc_prt, $new_fileloc_prt);

$query="insert into prospectus values('','$year','$desc_en','$desc_id','$url_file')";

  $update_prt=mysql_query($query);
  if($update_prt)
  {
    $msg="Sukses, Prospectus sudah di tambahkan";
    header("location:../index.php?page=prospectus&msg=".$msg);
  }

?>
