<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-29 16:23:25
  from 'C:\xampp\htdocs\youtube\github\GetVideo.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f73435dd5f348_35785860',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8084cb7d960f42f04b9e92987e42199487ae1fb8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\youtube\\github\\GetVideo.html',
      1 => 1601389242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f73435dd5f348_35785860 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
    <meta content="text/html; charset=utf-8" />
    <title>YouTube検索</title>  
</head>
<?php echo '<script'; ?>
 src="../js/jquery-3.5.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
  type="module" src="../js/node_modules/js-cookie/src/js.cookie.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="GetVideo.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="GetVideo.css">
<body>

    <h1>キーワードを入力して検索してください</h1>
    <div class="Serch_Video">

    <form method="GET">
    <h2>動画検索</h2>
    <input type="search" id="keyword" 
        placeholder="Please Key Word"
        name="keyword"
        <?php if (isset($_SESSION['q_word'])) {?>
        value=<?php echo $_SESSION['q_word'];
}?>
        required>
        <input type="submit" value="検索">
        <br>
        <select name="sort">
        <?php if ($_SESSION['sort'] == "relevance") {?>  
        <option value="relevance" selected="selected">関連性</option>
        <?php } else { ?>
        <option value="relevance">関連性</option>
        <?php }?> 
        
        <?php if ($_SESSION['sort'] == "date") {?>  
        <option value="date" selected="selected">日付</option>
        <?php } else { ?>
        <option value="date">日付</option>
        <?php }?> 

        <?php if ($_SESSION['sort'] == "rating") {?> 
        <option value="rating" selected="selected">評価</option>
        <?php } else { ?>
        <option value="rating">評価</option>
        <?php }?> 

        <?php if ($_SESSION['sort'] == "viewCount") {?> 
        <option value="viewCount" selected="selected">閲覧</option>
        <?php } else { ?>
        <option value="viewCount">閲覧</option>
        <?php }?>      
        </select>
        <input type="number" name="max_results" value="5" min=1 max=50></label>
         
        
        <?php if (isset($_SESSION['type']) && $_SESSION['type'] == "live") {?> 
        <input type="radio" name="type" value="None" >動画
        <input type="radio" name="type" value="live" checked="checked">Live
        <?php } else { ?>
        <input type="radio" name="type" value="None" checked="checked">動画
        <input type="radio" name="type" value="live" >Live
        <?php }?>
        
        
        <br>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['VIDEOS']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?> 
            <?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
<br>
            <iframe width="112" height="63" 
            src="https://www.youtube.com/embed/<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" 
            frameborder="1" >
            </iframe>
            <input type="checkbox" name="video" 
            id="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
"/>
            <br>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    
      
    <?php if ($_smarty_tpl->tpl_vars['VIDEOS']->value != array()) {?>           
        <input type="submit" name="prev" value="前ページ">
        <input type="submit" name="next" value="次ページ">
    <?php }?>  
    
    </form>
    <br>
</div>
      <div class="Get_Videos">
          指定動画:
          <p></p>
      </div>

<div class="Make_Room">
    <form method="POST" action="room.php">
    ルーム名:<br>
    <input type="text" name="room_name" required>
    <input type="submit" name="make_room" value="ルーム作成">
    <input type="checkbox" name=del value=del>   
    </form>
</div>
    
<a href= "home.php" target="_blank">
          ホームに戻る 
</a>
</body>
</html><?php }
}
