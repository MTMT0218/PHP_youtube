<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-27 14:28:54
  from 'C:\xampp\htdocs\ABC\ver5\Home.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f70858620dda0_70992867',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e1c0efbcb7c8a88ac6ffee696dfd85bbb1024f0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ABC\\ver5\\Home.html',
      1 => 1601209732,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f70858620dda0_70992867 (Smarty_Internal_Template $_smarty_tpl) {
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
