
<?php
require_once "../smarty/libs/Smarty.class.php";
$smarty=new Smarty;
$smarty->template_dir = "../smarty/templates/";
$smarty->compile_dir = "../smarty/templates_c/";

include("Mysql.php");
$mysql=new Mysql();
$mysql->connect_mysqli();
$mysql->create_room_table();
$mysql->create_video_table();
$room_table=$mysql->room_table;
$video_table=$mysql->video_table;

$rooms=$room_table->read();
$videos=array();


foreach($rooms as $r){
  try{
  array_push($videos,$video_table->read($r["id"]));
}
catch(Exception $e){
  continue;
}
}

$smarty->assign("ROOMS_DATA",$rooms);
$smarty->assign("VIDEOS_DATA",$videos);
$smarty->display("Home.html");



?>


