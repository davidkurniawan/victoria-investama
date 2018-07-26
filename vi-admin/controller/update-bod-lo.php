<?php
include "../lib/processor.php";

$con = new DB_con();
$target_dir = "../../assets/img/user/";

$image_url="/assets/img/user/";

$filename=$_FILES["photo"]["name"];
$fileName = preg_replace('#[^a-z.0-9]#i', '', $filename);
$nama_file = explode(".", $fileName);

$new_filename= date("dmY_hms")."_".$nama_file[0].".".$nama_file[1];

$url_image=$image_url.$new_filename;

$id_bod=$_REQUEST['bod_id'];
$name=$_REQUEST['bod_name'];
$position_id=strip_tags($_REQUEST['bod_position_id']);
$bod_desc_id=strip_tags($_REQUEST['bod_desc_id']);

$position_en=strip_tags($_REQUEST['bod_position_en']);
$bod_desc_en=strip_tags($_REQUEST['bod_desc_en']);

$new_fileloc=$target_dir.$new_filename;
$fileTmpLoc = $_FILES["photo"]["tmp_name"];
if (!$fileTmpLoc) { // if file not chosen
  $query="update bod set Name='".$name."',Position='".$position_en."', PositionID='".$position_id."',DescriptionID='".$bod_desc_id."',DescriptionEN='".$bod_desc_en."' where id='$id_bod'";

}
else {
  $query="update bod set Name='".$name."',Position='".$position_en."', PositionID='".$position_id."',DescriptionID='".$bod_desc_id."',DescriptionEN='".$bod_desc_en."',Photo='".$url_image."' where id='$id_bod'";
  $moveResult = move_uploaded_file($fileTmpLoc, $new_fileloc);
  if ($moveResult != true) {
      echo "ERROR: File not uploaded. Try again.";
      exit();
  }
}

  $update_bod=mysql_query($query);
  if($update_bod)
  {
    $msg="Sukses, Bod sudah di update";
    header("location:../index.php?page=bod&msg=".$msg);
  }

?>
