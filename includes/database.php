<?php
require_once("config.php");
class Database{
	public $database_server;
	public $database_user;
	public $database_password;
	public $database_name;
	public $connection;
	
	public function __construct(){
		$this->database_server=DB_SERVER;
		$this->database_user=DB_USER;
		$this->database_password=DB_PASS;
		$this->database_name=DB_NAME;
		$this->connectToDB();
		
	}
	public function connectToDB(){
		$this->connection = mysqli_connect($this->database_server,$this->database_user,$this->database_password,$this->database_name);
	}
	public function closeConnection(){
		mysqli_close($this->connection);
	}
		
}
$database=new Database();
?>