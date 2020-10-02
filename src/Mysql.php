<?php
include("Room_Table.php");
include("Video_Table.php");
include("Register_Table.php");

class Mysql{
	public $host;
	public $user;
	public $pass;
	public $db_name;
	public $mysqli;
    public $video_table;
	public $register_table;
    public $room_table;
	
	public function __construct(){
		$this->$db_name =getenv("DB_DATABASE");
		$this->host =getenv("DB_HOST");
		$this->user =getenv("DB_USERNAME");
		$this->pass =getenv("DB_PASSWORD");
		}


	public function connect_mysqli(){
		$this->mysqli = new mysqli($this->host,$this->user,$this->pass,$this->db_name);
		$this->mysqli->set_charset('utf8');
		if( $this->mysqli->connect_errno ) {
			die(sprintf("Connect failed: %s\n", $this->mysqli->connect_error));
		}
        $sql = 'CREATE TABLE IF NOT EXISTS room(
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        room_name VARCHAR(30),
        time DATETIME
        ) engine=innodb default charset=utf8';
        if( $this->mysqli->connect_errno ) {
			die(sprintf("Connect failed: %s\n", $this->mysqli->connect_error));
		}
	}
	
	public function Escape($word){
		return $this->mysqli->real_escape_string($word);
	}
    
    public function create_room_table(){
        $this->room_table  = new room_table($this->mysqli);
    }
	
	public function create_register_table(){
        $this->register_table  = new register_table($this->mysqli);
    }
    

	public function create_video_table(){
        $this->video_table  = new video_table($this->mysqli);
    }
    
}

?>