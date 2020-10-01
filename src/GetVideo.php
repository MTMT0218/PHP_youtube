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
echo "aaa";
}
if(isset($videos)){
$smarty->assign("VIDEOS",$videos);
}
$smarty->display("GetVideo.html");



?>


