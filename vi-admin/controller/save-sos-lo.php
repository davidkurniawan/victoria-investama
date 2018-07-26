<?php
include "../lib/processor.php";

$con = new DB_con();
$target_dir = "../../assets/img/";

$image_url="/assets/img/";

$filename=$_FILES["strukture"]["name"];
$fileName = preg_replace('#[^a-z.0-9]#i', '', $filename);
$nama_file = explode(".", $fileName);

$new_filename= date("dmY_hms")."_".$nama_file[0].".".$nama_file[1];

$url_image=$image_url.$new_filename;

$content_to_save="<img src=$url_image width=85%>";

$query="update content set BodyText_id='".$content_to_save."',BodyText_en='".$content_to_save."' where url='share-ownership-structure'";
$new_fileloc=$target_dir.$new_filename;
$fileTmpLoc = $_FILES["strukture"]["tmp_name"];
$moveResult = move_uploaded_file($fileTmpLoc, $new_fileloc);
// Check to make sure the move result is true before continuing
if ($moveResult != true) {
    echo "ERROR: File not uploaded. Try again.";
    exit();
}
else {
  $update_structure=mysql_query($query);
  if($update_structure)
  {
    $msg="Sukses, Sturcture sudah di update";
    header("location:../index.php?page=share-ownership-structure&msg=".$msg);
  }
}

?>
