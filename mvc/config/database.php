<?php 
	class Connect {

		protected $server = 'localhost';
		protected $username = 'root';
		protected $password = '';
		protected $database = 'wad_php_1019';

		public function connect() {
			$connect = mysqli_connect($this->server, $this->username, $this->password, $this->database);
			mysqli_set_charset($connect,"utf8");
			return $connect;
		}

	}
?>