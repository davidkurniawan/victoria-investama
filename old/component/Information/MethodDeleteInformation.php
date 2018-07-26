<?php
include_once '../../Conf.php';
include_once 'class/Information.class.php';
include_once 'class/InformationAdapter.class.php';
	if(empty ($_POST["NewsId"])){
		echo "Field Tidak Boleh Kosong Information";
	}else

	$NewsId = strip_tags($_POST["NewsId"]);
	$adapter = new InformationAdapter();

	if($adapter->DeleteData($NewsId, $mysqli))
		echo "Sukses menghapus data Information".$adapter->GetLastErrorMessage();
	else
		echo "Gagal menghapus data Information".$adapter->GetLastErrorMessage()
?>
