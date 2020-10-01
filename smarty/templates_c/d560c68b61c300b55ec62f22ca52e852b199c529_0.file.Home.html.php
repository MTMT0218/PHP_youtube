<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-29 16:21:57
  from 'C:\xampp\htdocs\youtube\github\Home.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f73430557cfd0_54717391',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd560c68b61c300b55ec62f22ca52e852b199c529' => 
    array (
      0 => 'C:\\xampp\\htdocs\\youtube\\github\\Home.html',
      1 => 1601209732,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f73430557cfd0_54717391 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
<meta content="text/html; charset=utf-8" />
<link rel="stylesheet" href="Home.css">
<title>YouTube機能色々</title>  
</head>
<body>
<h1>ようこそ</h1>
<h2>下部ルーム作成よりYOUTUBE動画を指定してください</h2>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ROOMS_DATA']->value, 'r');
$_smarty_tpl->tpl_vars['r']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->index++;
$__foreach_r_0_saved = $_smarty_tpl->tpl_vars['r'];
?>
        <div>
<ul>
        
        <li><a href= "room.php?room_id=<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
" target="_blank">
            <?php echo $_smarty_tpl->tpl_vars['r']->value['room_name'];?>
 
        </a>
        </br>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['VIDEOS_DATA']->value[$_smarty_tpl->tpl_vars['r']->index], 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <img
            src="http://img.youtube.com/vi/<?php echo $_smarty_tpl->tpl_vars['v']->value['video_id'];?>
/default.jpg"
            alt=""
            width="112"
            height="65"/>    
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>    
        </br>
    <?php
$_smarty_tpl->tpl_vars['r'] = $__foreach_r_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

         
  <form method="POST" action="GetVideo.php">
  <input type="submit"  value="ルーム作成">
  </form>
</body>
</html>
<?php }
}
