<?php
	class InformationAdapter
	{

		private $lastErrorMessage;

		public function GetLastErrorMessage()
		{
			return $this->lastErrorMessage;
		}

		public function GetDataAsObject ($mysqli)
		{
			$data = null;
			$query = "SELECT NewsId,Type,Title,Content,Date FROM information ORDER BY Date DESC";
			$result = $mysqli->query($query);
			if($result)
			{
				$data = array();

				while($row = $result->fetch_assoc())
				{
					$obj = new Information();
					$obj->SetNewsId($row["NewsId"]);
					$obj->SetType($row["Type"]);
					$obj->SetTitle($row["Title"]);
					$obj->SetContent($row["Content"]);
					$obj->SetDate($row["Date"]);
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
				$Information = $doc->createElement('Information');

				$NewsId = $doc->createElement('NewsId');
				$NewsId->appendChild($doc->createTextNode($obj->GetNewsId()));
				$Information->appendChild($NewsId);

				$Type = $doc->createElement('Type');
				$Type->appendChild($doc->createTextNode($obj->GetType()));
				$Information->appendChild($Type);

				$Title = $doc->createElement('Title');
				$Title->appendChild($doc->createTextNode($obj->GetTitle()));
				$Information->appendChild($Title);

				$Content = $doc->createElement('Content');
				$Content->appendChild($doc->createTextNode($obj->GetContent()));
				$Information->appendChild($Content);

				$Date = $doc->createElement('Date');
				$Date->appendChild($doc->createTextNode($obj->GetDate()));
				$Information->appendChild($Date);

				$r->appendChild($Information);
			}
			
			return $doc->saveXML();
		}

		public function SearchDataAsObject($NewsId,$mysqli)
		{
			$data = null;
			$query = "SELECT NewsId,Type,Title,Content,Date FROM information WHERE NewsId = ?";
			$stmt = $mysqli->prepare($query);
			$stmt->bind_param('s',$NewsId);

			if($stmt->execute())
			{
				$stmt->store_result();
				$stmt->bind_result($NewsId,$Type,$Title,$Content,$Date);
				$stmt->fetch();
				if($stmt->num_rows != 0)
				{
					$data = new Information();
					$data->SetNewsId($NewsId);
					$data->SetType($Type);
					$data->SetTitle($Title);
					$data->SetContent($Content);
					$data->SetDate($Date);
				}
			}
			else
				$this->lastErrorMessage = $stmt->error;

			$stmt->close();

			return $data;
		}

		public function SearchDataAsXML($NewsId,$mysqli)
		{
			$data = $this->SearchDataAsObject($NewsId,$mysqli);

			$doc = new DOMDocument();
			$doc->formatOutput = true;

			$r = $doc->createElement('Data');
			$doc->appendChild($r);

			if($data != null)
			{
				$Information = $doc->createElement('Information');

				$NewsId = $doc->createElement('NewsId');
				$NewsId->appendChild($doc->createTextNode($data->GetNewsId()));
				$Information->appendChild($NewsId);

				$Type = $doc->createElement('Type');
				$Type->appendChild($doc->createTextNode($data->GetType()));
				$Information->appendChild($Type);

				$Title = $doc->createElement('Title');
				$Title->appendChild($doc->createTextNode($data->GetTitle()));
				$Information->appendChild($Title);

				$Content = $doc->createElement('Content');
				$Content->appendChild($doc->createTextNode($data->GetContent()));
				$Information->appendChild($Content);

				$Date = $doc->createElement('Date');
				$Date->appendChild($doc->createTextNode($data->GetDate()));
				$Information->appendChild($Date);

				$r->appendChild($Information);
			}
			
			return $doc->saveXML();
		}

		public function InsertData ($Information,$mysqli)
		{
			$affected_rows = 0;
			$query = "INSERT INTO information (NewsId,Type,Title,Content,Date) VALUES (?,?,?,?,?)";
			$stmt = $mysqli->prepare($query);
			$stmt->bind_param('sssss',$Information->GetNewsId(),$Information->GetType(),$Information->GetTitle(),$Information->GetContent(),$Information->GetDate());

			if(!$stmt->execute())
				$this->lastErrorMessage = $stmt->error;

			$affected_rows = $stmt->affected_rows;
			$stmt->close();

			return $affected_rows;
		}

		public function DeleteData ($NewsId,$mysqli)
		{
			$affected_rows = 0;
			$query = "DELETE FROM information WHERE NewsId = ?";
			$stmt = $mysqli->prepare($query);
			$stmt->bind_param('s',$NewsId);

			if(!$stmt->execute())
				$this->lastErrorMessage = $stmt->error;

			$affected_rows = $stmt->affected_rows;
			$stmt->close();

			return $affected_rows;
		}

		public function UpdateData ($Information,$mysqli)
		{
			$affected_rows = 0;
			$query = "UPDATE information SET Type = ?, Title = ?, Content = ?, Date = ? WHERE NewsId = ?";
			$stmt = $mysqli->prepare($query);
			$stmt->bind_param('sssss',$Information->GetType(),$Information->GetTitle(),$Information->GetContent(),$Information->GetDate(),$Information->GetNewsId());

			if(!$stmt->execute())
				$this->lastErrorMessage = $stmt->error;

			$affected_rows = $stmt->affected_rows;
			$stmt->close();
			return $affected_rows;
		}
	}
?>
