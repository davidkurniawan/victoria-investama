<?php
include "../lib/processor.php";

$con = new DB_con();
$target_dir = "../../assets/img/slider/";

$image_url="/assets/img/slider/";

$filename=$_FILES["image"]["name"];
$fileName = preg_replace('#[^a-z.0-9]#i', '', $filename);
$nama_file = explode(".", $fileName);

$new_filename= date("dmY_hms")."_".$nama_file[0].".".$nama_file[1];

$url_image=$image_url.$new_filename;

$slider_id=$_REQUEST['slider_id'];
$image_title=$_REQUEST['image_title'];
$image_alt=$_REQUEST['image_alt'];

$new_fileloc=$target_dir.$new_filename;
$fileTmpLoc = $_FILES["image"]["tmp_name"];
if (!$fileTmpLoc) { // if file not chosen
  $msg="Gagal, Gambar Slider Belum Diset";
  header("location:../index.php?page=add-image-slider&msg=".$msg);
}
else {
  $value="'','$slider_id','$image_title','$url_image','$image_alt'";
  $moveResult = move_uploaded_file($fileTmpLoc, $new_fileloc);
  if ($moveResult != true) {
      echo "ERROR: File not uploaded. Try again.";
      exit();
  }
}

  $save_slider=$con->insert("SliderImageContent",$value);
  if($save_slider)
  {
    $msg="Sukses, Slider sudah di tambahkan";
    header("location:../index.php?page=slider&slider_id=".$slider_id."&msg=".$msg);
  }

?>
