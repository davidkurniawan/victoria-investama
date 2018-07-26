<?php
	class User
	{
		private $IdUser;
		private $Nama;
		private $JenisKelamin;
		private $Alamat;
		private $Telepon;
		private $Email;
		private $Username;
		private $Password;
		private $Level;

		public function SetIdUser ($xIdUser)
		{
			$this->IdUser = $xIdUser;
		}

		public function GetIdUser ()
		{
			return $this->IdUser;
		}

		public function SetNama ($xNama)
		{
			$this->Nama = $xNama;
		}

		public function GetNama ()
		{
			return $this->Nama;
		}

		public function SetJenisKelamin ($xJenisKelamin)
		{
			$this->JenisKelamin = $xJenisKelamin;
		}

		public function GetJenisKelamin ()
		{
			return $this->JenisKelamin;
		}

		public function SetAlamat ($xAlamat)
		{
			$this->Alamat = $xAlamat;
		}

		public function GetAlamat ()
		{
			return $this->Alamat;
		}

		public function SetTelepon ($xTelepon)
		{
			$this->Telepon = $xTelepon;
		}

		public function GetTelepon ()
		{
			return $this->Telepon;
		}

		public function SetEmail ($xEmail)
		{
			$this->Email = $xEmail;
		}

		public function GetEmail ()
		{
			return $this->Email;
		}

		public function SetUsername ($xUsername)
		{
			$this->Username = $xUsername;
		}

		public function GetUsername ()
		{
			return $this->Username;
		}

		public function SetPassword ($xPassword)
		{
			$this->Password = $xPassword;
		}

		public function GetPassword ()
		{
			return $this->Password;
		}

		public function SetLevel ($xLevel)
		{
			$this->Level = $xLevel;
		}

		public function GetLevel ()
		{
			return $this->Level;
		}
	}
?>
