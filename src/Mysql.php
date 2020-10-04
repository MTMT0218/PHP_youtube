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

	public function __destruct()
		{// DB接続を閉じる
			$this->mysqli->close();
		}

	public function connect_mysqli(){
		$this->mysqli = new mysqli($this->host,$this->user,$this->pass,$this->db_name);
		$this->mysqli->set_charset('utf8');
		if( $this->mysqli->connect_errno ) {
			printf("Connect failed: %s\n", $this->mysqli->connect_error);
    		exit();
		}
		else {
			$this->mysqli->set_charset("utf8");
		}
		var_dump($this->mysqli);
		$sql = 'CREATE TABLE IF NOT EXISTS video(
			id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			room_id INT(11),
			video_name VARCHAR(100),
			video_id VARCHAR(100),
			thumbnails VARCHAR(100)
			) engine=innodb default charset=utf8';
			var_dump($this->mysqli);
			$res = $this->mysqli->query($sql);
			var_dump($this->mysqli);
			if(!$res){
				printf( "Error message:%s<br>",$this->mysqli->error);
			}    

	}
	
	public function Escape($word){
		return $this->mysqli->real_escape_string($word);
	}
    
    public function create_room_table(){
        $this->room_table  = new Room_Table($this->mysqli);
    }
	
	public function create_register_table(){
        $this->register_table  = new Register_Table($this->mysqli);
    }
    

	public function create_video_table(){
        $this->video_table  = new Video_Table($this->mysqli);
    }
    
}

?>