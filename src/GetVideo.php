<?php
require_once __DIR__ . '/../vendor/autoload.php';
include("Mysql.php");
require_once "../smarty/libs/Smarty.class.php";
$smarty=new Smarty;
$smarty->template_dir = "../smarty/templates/";
$smarty->compile_dir = "../smarty/templates_c/";

$getvdeos="";
$videos=array();

session_start();
//検索キーワードが入力された場合にapiからデータをもらう
if (isset($_GET['keyword'])){
//AIzaSyA0RcnymjK_VzkoWcgEQfyYYrjkXglzSZo
  //"AIzaSyAWT_BYkZaFQ_iqsq_kaIzaPqBglbM7UHA"
  $DEVELOPER_KEY="AIzaSyB3RBjEPiTqNHVy90_ZIOgM0mYKxDe3VLA";
  $client = new Google_Client();
  $client->setDeveloperKey($DEVELOPER_KEY);
  $youtube = new Google_Service_YouTube($client);
  
  
}
if(isset($videos)){
$smarty->assign("VIDEOS",$videos);
}
$smarty->display("GetVideo.html");



?>


