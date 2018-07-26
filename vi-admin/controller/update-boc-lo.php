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

$id_boc=$_REQUEST['boc_id'];
$name=$_REQUEST['boc_name'];
$position_id=strip_tags($_REQUEST['boc_position_id']);
$boc_desc_id=strip_tags($_REQUEST['boc_desc_id']);

$position_en=strip_tags($_REQUEST['boc_position_en']);
$boc_desc_en=strip_tags($_REQUEST['boc_desc_en']);

$new_fileloc=$target_dir.$new_filename;
$fileTmpLoc = $_FILES["photo"]["tmp_name"];
if (!$fileTmpLoc) { // if file not chosen
  $query="update boc set Name='".$name."',Position='".$position_en."', PositionID='".$position_id."',DescriptionID='".$boc_desc_id."',DescriptionEN='".$boc_desc_en."' where id='$id_boc'";

}
else {
  $query="update boc set Name='".$name."',Position='".$position_en."', PositionID='".$position_id."',DescriptionID='".$boc_desc_id."',DescriptionEN='".$boc_desc_en."',Photo='".$url_image."' where id='$id_boc'";
  $moveResult = move_uploaded_file($fileTmpLoc, $new_fileloc);
  if ($moveResult != true) {
      echo "ERROR: File not uploaded. Try again.";
      exit();
  }
}

  $update_boc=mysql_query($query);
  if($update_boc)
  {
    $msg="Sukses, Boc sudah di update";
    header("location:../index.php?page=boc&msg=".$msg);
  }

?>
