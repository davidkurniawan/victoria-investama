<?php
include_once '../../Conf.php';
include_once 'class/User.class.php';
include_once 'class/UserAdapter.class.php';
	if(empty($_POST["IdUser"])||empty($_POST["Nama"])||empty($_POST["JenisKelamin"])||empty($_POST["Alamat"])||empty($_POST["Telepon"])||empty($_POST["Email"])||empty($_POST["Username"])||empty($_POST["Password"]))
		echo "Gagal Update User";
	else 
	{
		$User = new User;

		$User->SetIdUser(strip_tags($_POST["IdUser"]));
		$User->SetNama(strip_tags($_POST["Nama"]));
		$User->SetJenisKelamin(strip_tags($_POST["JenisKelamin"]));
		$User->SetAlamat(strip_tags($_POST["Alamat"]));
		$User->SetTelepon(strip_tags($_POST["Telepon"]));
		$User->SetEmail(strip_tags($_POST["Email"]));
		$User->SetUsername(strip_tags($_POST["Username"]));
		$User->SetPassword(strip_tags($_POST["Password"]));
		$User->SetLevel(strip_tags($_POST["Level"]));

		$adapter = new UserAdapter();

		if($adapter->UpdateData($User, $mysqli))
		echo "Sukses Update User".$adapter->GetLastErrorMessage();
		else
		echo "Gagal Update User".$adapter->GetLastErrorMessage();

	}
?>
