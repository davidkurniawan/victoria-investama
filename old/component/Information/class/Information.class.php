<?php
	class Information
	{
		private $NewsId;
		private $Type;
		private $Title;
		private $Content;
		private $Date;

		public function SetNewsId ($xNewsId)
		{
			$this->NewsId = $xNewsId;
		}

		public function GetNewsId ()
		{
			return $this->NewsId;
		}

		public function SetType ($xType)
		{
			$this->Type = $xType;
		}

		public function GetType ()
		{
			return $this->Type;
		}

		public function SetTitle ($xTitle)
		{
			$this->Title = $xTitle;
		}

		public function GetTitle ()
		{
			return $this->Title;
		}

		public function SetContent ($xContent)
		{
			$this->Content = $xContent;
		}

		public function GetContent ()
		{
			return $this->Content;
		}

		public function SetDate ($xDate)
		{
			$this->Date = $xDate;
		}

		public function GetDate ()
		{
			return $this->Date;
		}
	}
?>
