<?php
	class UserAdapter
	{

		private $lastErrorMessage;

		public function GetLastErrorMessage()
		{
			return $this->lastErrorMessage;
		}

		public function GetDataAsObject ($mysqli)
		{
			$data = null;
			$query = "SELECT IdUser,Nama,JenisKelamin,Alamat,Telepon,Email,Username,Password,Level FROM user";
			$result = $mysqli->query($query);
			if($result)
			{
				$data = array();

				while($row = $result->fetch_assoc())
				{
					$obj = new User();
					$obj->SetIdUser($row["IdUser"]);
					$obj->SetNama($row["Nama"]);
					$obj->SetJenisKelamin($row["JenisKelamin"]);
					$obj->SetAlamat($row["Alamat"]);
					$obj->SetTelepon($row["Telepon"]);
					$obj->SetEmail($row["Email"]);
					$obj->SetUsername($row["Username"]);
					$obj->SetPassword($row["Password"]);
					$obj->SetLevel($row["Level"]);
					array_push($data,$obj);
				}
			}
			else
				$this->lastErrorMessage = $stmt->error;

			return $data;
		}

		public function GetDataAsXML ($mysqli)
		{
			$data = $this->GetDataAsObject($mysqli);

			$doc = new DOMDocument();
			$doc->formatOutput = true;

			$r = $doc->createElement('Data');
			$doc->appendChild($r);

			foreach($data as $obj)
			{
				$User = $doc->createElement('User');

				$IdUser = $doc->createElement('IdUser');
				$IdUser->appendChild($doc->createTextNode($obj->GetIdUser()));
				$User->appendChild($IdUser);

				$Nama = $doc->createElement('Nama');
				$Nama->appendChild($doc->createTextNode($obj->GetNama()));
				$User->appendChild($Nama);

				$JenisKelamin = $doc->createElement('JenisKelamin');
				$JenisKelamin->appendChild($doc->createTextNode($obj->GetJenisKelamin()));
				$User->appendChild($JenisKelamin);

				$Alamat = $doc->createElement('Alamat');
				$Alamat->appendChild($doc->createTextNode($obj->GetAlamat()));
				$User->appendChild($Alamat);

				$Telepon = $doc->createElement('Telepon');
				$Telepon->appendChild($doc->createTextNode($obj->GetTelepon()));
				$User->appendChild($Telepon);

				$Email = $doc->createElement('Email');
				$Email->appendChild($doc->createTextNode($obj->GetEmail()));
				$User->appendChild($Email);

				$Username = $doc->createElement('Username');
				$Username->appendChild($doc->createTextNode($obj->GetUsername()));
				$User->appendChild($Username);

				$Password = $doc->createElement('Password');
				$Password->appendChild($doc->createTextNode($obj->GetPassword()));
				$User->appendChild($Password);

				$Level = $doc->createElement('Level');
				$Level->appendChild($doc->createTextNode($obj->GetLevel()));
				$User->appendChild($Level);

				$r->appendChild($User);
			}
			
			return $doc->saveXML();
		}

		public function SearchDataAsObject($IdUser,$mysqli)
		{
			$data = null;
			$query = "SELECT IdUser,Nama,JenisKelamin,Alamat,Telepon,Email,Username,Password,Level FROM user WHERE IdUser = ?";
			$stmt = $mysqli->prepare($query);
			$stmt->bind_param('s',$IdUser);

			if($stmt->execute())
			{
				$stmt->store_result();
				$stmt->bind_result($IdUser,$Nama,$JenisKelamin,$Alamat,$Telepon,$Email,$Username,$Password,$Level);
				$stmt->fetch();
				if($stmt->num_rows != 0)
				{
					$data = new User();
					$data->SetIdUser($IdUser);
					$data->SetNama($Nama);
					$data->SetJenisKelamin($JenisKelamin);
					$data->SetAlamat($Alamat);
					$data->SetTelepon($Telepon);
					$data->SetEmail($Email);
					$data->SetUsername($Username);
					$data->SetPassword($Password);
					$data->SetLevel($Level);
				}
			}
			else
				$this->lastErrorMessage = $stmt->error;

			$stmt->close();

			return $data;
		}

		public function SearchDataAsXML($IdUser,$mysqli)
		{
			$data = $this->SearchDataAsObject($IdUser,$mysqli);

			$doc = new DOMDocument();
			$doc->formatOutput = true;

			$r = $doc->createElement('Data');
			$doc->appendChild($r);

			if($data != null)
			{
				$User = $doc->createElement('User');

				$IdUser = $doc->createElement('IdUser');
				$IdUser->appendChild($doc->createTextNode($data->GetIdUser()));
				$User->appendChild($IdUser);

				$Nama = $doc->createElement('Nama');
				$Nama->appendChild($doc->createTextNode($data->GetNama()));
				$User->appendChild($Nama);

				$JenisKelamin = $doc->createElement('JenisKelamin');
				$JenisKelamin->appendChild($doc->createTextNode($data->GetJenisKelamin()));
				$User->appendChild($JenisKelamin);

				$Alamat = $doc->createElement('Alamat');
				$Alamat->appendChild($doc->createTextNode($data->GetAlamat()));
				$User->appendChild($Alamat);

				$Telepon = $doc->createElement('Telepon');
				$Telepon->appendChild($doc->createTextNode($data->GetTelepon()));
				$User->appendChild($Telepon);

				$Email = $doc->createElement('Email');
				$Email->appendChild($doc->createTextNode($data->GetEmail()));
				$User->appendChild($Email);

				$Username = $doc->createElement('Username');
				$Username->appendChild($doc->createTextNode($data->GetUsername()));
				$User->appendChild($Username);

				$Password = $doc->createElement('Password');
				$Password->appendChild($doc->createTextNode($data->GetPassword()));
				$User->appendChild($Password);

				$Level = $doc->createElement('Level');
				$Level->appendChild($doc->createTextNode($data->GetLevel()));
				$User->appendChild($Level);

				$r->appendChild($User);
			}
			
			return $doc->saveXML();
		}

		public function InsertData ($User,$mysqli)
		{
			$affected_rows = 0;
			$query = "INSERT INTO user (IdUser,Nama,JenisKelamin,Alamat,Telepon,Email,Username,Password,Level) VALUES (?,?,?,?,?,?,?,?,?)";
			$stmt = $mysqli->prepare($query);
			$stmt->bind_param('sssssssss',$User->GetIdUser(),$User->GetNama(),$User->GetJenisKelamin(),$User->GetAlamat(),$User->GetTelepon(),$User->GetEmail(),$User->GetUsername(),$User->GetPassword(),$User->GetLevel());

			if(!$stmt->execute())
				$this->lastErrorMessage = $stmt->error;

			$affected_rows = $stmt->affected_rows;
			$stmt->close();

			return $affected_rows;
		}

		public function DeleteData ($IdUser,$mysqli)
		{
			$affected_rows = 0;
			$query = "DELETE FROM user WHERE IdUser = ?";
			$stmt = $mysqli->prepare($query);
			$stmt->bind_param('s',$IdUser);

			if(!$stmt->execute())
				$this->lastErrorMessage = $stmt->error;

			$affected_rows = $stmt->affected_rows;
			$stmt->close();

			return $affected_rows;
		}

		public function UpdateData ($User,$mysqli)
		{
			$affected_rows = 0;
			$query = "UPDATE user SET Nama = ?, JenisKelamin = ?, Alamat = ?, Telepon = ?, Email = ?, Username = ?, Password = ?, Level = ? WHERE IdUser = ?";
			$stmt = $mysqli->prepare($query);
			$stmt->bind_param('sssssssss',$User->GetNama(),$User->GetJenisKelamin(),$User->GetAlamat(),$User->GetTelepon(),$User->GetEmail(),$User->GetUsername(),$User->GetPassword(),$User->GetLevel(),$User->GetIdUser());

			if(!$stmt->execute())
				$this->lastErrorMessage = $stmt->error;

			$affected_rows = $stmt->affected_rows;
			$stmt->close();
			return $affected_rows;
		}

        public static function IsValidLogin($username,$password,$mysqli)
		{
			//$Password = md5($Password);
			$query = "SELECT IdUser,Nama,JenisKelamin,Alamat,Telepon,Email,Username,Password,Level FROM user WHERE Username = ? AND Password = ? ";

                        $stmt = $mysqli->prepare($query);
			$stmt->bind_param('ss',$username,$password);

			if($stmt->execute())
			{
				$stmt->store_result();
				$stmt->bind_result($IdUser,$Nama,$JenisKelamin,$Alamat,$Telepon,$Email,$Username,$Password,$Level);
				$stmt->fetch();
				if($stmt->num_rows != 0)
				{
					$data = new User();
					$data->SetIdUser($IdUser);
					$data->SetNama($Nama);
					$data->SetJenisKelamin($JenisKelamin);
					$data->SetAlamat($Alamat);
					$data->SetTelepon($Telepon);
                                        $data->SetEmail($Email);
					$data->SetUsername($Username);
					$data->SetPassword($Password);
					$data->SetLevel($Level);

                                        return true;
				}return false;
			}
			else
				$this->lastErrorMessage = $stmt->error;

			$stmt->close();

			return $data;
		}

		public function SearchDataForSession($Username,$Password,$mysqli)
		{
			$data = null;
			$query = "SELECT IdUser,Nama,JenisKelamin,Alamat,Telepon,Email,Username,Password,Level FROM user WHERE Username = ? AND Password = ?";
			$stmt = $mysqli->prepare($query);
			$stmt->bind_param('ss',$Username,$Password);

			if($stmt->execute())
			{
				$stmt->store_result();
				$stmt->bind_result($IdUser,$Nama,$JenisKelamin,$Alamat,$Telepon,$Email,$Username,$Password,$Level);
				$stmt->fetch();
				if($stmt->num_rows != 0)
				{
					$data = new User();
					$data->SetIdUser($IdUser);
					$data->SetNama($Nama);
					$data->SetJenisKelamin($JenisKelamin);
					$data->SetAlamat($Alamat);
					$data->SetTelepon($Telepon);
					$data->SetEmail($Email);
					$data->SetUsername($Username);
					$data->SetPassword($Password);
					$data->SetLevel($Level);
				}
			}
			else
				$this->lastErrorMessage = $stmt->error;

			$stmt->close();

			return $data;
		}

	}
?>
