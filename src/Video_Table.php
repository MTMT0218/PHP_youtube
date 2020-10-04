<?php
class Video_Table {
public $mysqli;

public function __construct($mysql){
    $this->mysqli=$mysql;
    }

    //入力
    public function insert($room_id,$video_name,$video_id){
      $sql = "INSERT INTO video(
            room_id,video_name,video_id
            )VALUES ('$room_id','$video_name','$video_id')";
        $res = $this->mysqli->query($sql);
        print( $this->mysqli->error);
    }

    //読み込み
    public function read($room_id){
        $sql = 'SELECT * FROM video 
        WHERE room_id='.$room_id;
        $res = $this->mysqli->query($sql);
        $temp="";
		if($res){
            $temp = $res->fetch_all(MYSQLI_ASSOC);
		}
        print( $this->mysqli->error);
       return $temp;
    }

    public function All_read(){
        $sql = 'SELECT * FROM video';
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
        $sql="DELETE FROM video WHERE room_id=".$room_id;
        $res = $this->mysqli->query($sql);
        print( $this->mysqli->error);
    }

}
?>