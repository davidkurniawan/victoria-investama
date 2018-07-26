<?php
include_once '../../Conf.php';
include_once 'class/User.class.php';
include_once 'class/UserAdapter.class.php';
	if(empty ($_POST["IdUser"])){
		echo "Field Tidak Boleh Kosong User";
	}else

	$IdUser = strip_tags($_POST["IdUser"]);
	$adapter = new UserAdapter();

	if($adapter->DeleteData($IdUser, $mysqli))
		echo "Sukses menghapus data User".$adapter->GetLastErrorMessage();
	else
		echo "Gagal menghapus data User".$adapter->GetLastErrorMessage()
?>
