<?php

class Room_Table{
    public $mysqli;

    public function __construct($mysqli){
        $this->mysqli=$mysqli;
    }

    
    public function insert($name){
        $now = date('Y-m-d H:i:s');
        $sql = "INSERT INTO room(
            room_name,time
            )VALUES ('$name','$now')";
        $res = $this->mysqli->query($sql);
        print( $this->mysqli->error);
        #作ったルームのidを取得
        $sql ='SELECT LAST_INSERT_ID()';
        $res = $this->mysqli->query($sql);
        $temp = $res->fetch_all();
        return $temp;

    }

	public function read(){
        $sql = 'SELECT * FROM room';
        $res = $this->mysqli->query($sql);
        $temp="";
		if($res){
		$temp = $res->fetch_all(MYSQLI_ASSOC);
		}
		return $temp;
		print( $this->mysqli->error);
    }

    
    //削除
    public function delete($room_id){
        $sql="DELETE FROM room WHERE id=".$room_id;
        $res = $this->mysqli->query($sql);
        print( $this->mysqli->error);
    }
}
?>