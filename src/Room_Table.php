<?php

class Room_Table{
    public $mysqli;

    public function __construct($mysqli){
        $this->mysqli=$mysqli;
    }

    
    public function insert($name){
        sleep(1); 

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
        sleep(1); 

        $sql = 'SELECT * FROM room';
        $res = $this->mysqli->query($sql);
        $temp="";
		if($res){
		$temp = $res->fetch_all(MYSQLI_ASSOC);
		}
		
        printf("Read failed room: %s\n",$this->mysqli->error);
        return $temp;
    }

    
    //削除
    public function delete($room_id){
        sleep(1); 

        $sql="DELETE FROM room WHERE id=".$room_id;
        $res = $this->mysqli->query($sql);
        print( $this->mysqli->error);
    }
}
?>