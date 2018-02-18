<?php
class Dao {
	private $host = "us-cdbr-iron-east-05.cleardb.net";
	private $db = "heroku_d417b8df002fb68";
	private $user = "bbaac7e7ce49c5";
	private $pass = "807aaa72";
	public function getConnection () {
		return
			new PDO("mysql:host={$this->host};dbname={$this->db}", $user, $pass);
	}
}
