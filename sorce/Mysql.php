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
		$url = parse_url(getenv("mysql://b69a00192bba70:cc2cf84a@us-cdbr-east-02.cleardb.com/heroku_41d67058b7130b9?reconnect=true"));
		
		
		$this->$db_name = substr($url["path"], 1);
		$this->host = $url["host"];
		$this->user = $url["user"];
		$this->pass = $url["pass"];
	}


	public function connect_mysqli(){
		$this->mysqli = new mysqli($this->host,$this->user,$this->pass,$this->db_name);
		$this->mysqli->set_charset('utf8');
		if( $this->mysqli->connect_errno ) {
			printf("Connect failed: %s\n", $this->mysqli->connect_error);
   			exit();
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