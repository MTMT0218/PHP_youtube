<?php
class Video_Table {
public $mysqli;

public function __construct($mysql){
    $this->mysqli=$mysql;
    }

    //入力
    public function insert($room_id,$video_name,$video_id){
        sleep(1); 
      $sql = sprintf("INSERT INTO %s.video(
            room_id,video_name,video_id
            )VALUES ('$room_id','$video_name','$video_id')",getenv("DB_DATABASE"));
        $res = $this->mysqli->query($sql);
        print( $this->mysqli->error);
    }

    //読み込み
    public function read($room_id){
        sleep(1); 

        $sql = sprintf('SELECT * FROM %s.video 
        WHERE room_id='.$room_id,getenv("DB_DATABASE"));
        $res = $this->mysqli->query($sql);
        $temp="";
		if($res){
            $temp = $res->fetch_all(MYSQLI_ASSOC);
        }
        if(!$temp){
        printf("Read failed video: %s\n",$this->mysqli->error);
        }
        return $temp;
    }

    public function All_read(){
        $sql = spritf('SELECT * FROM %s.video',getenv("DB_DATABASE"));
        $res = $this->mysqli->query($sql);
        $temp="";
		if($res){
            $temp = $res->fetch_all(MYSQLI_ASSOC);
		}
        print( $this->mysqli->error);
        return $temp;
    }
   

    //削除
     public function delete($room_id){
        $sql=sprintf("DELETE FROM %s.video WHERE room_id=".$room_id,getenv("DB_DATABASE"));
        $res = $this->mysqli->query($sql);
        print( $this->mysqli->error);
    }

}
?>