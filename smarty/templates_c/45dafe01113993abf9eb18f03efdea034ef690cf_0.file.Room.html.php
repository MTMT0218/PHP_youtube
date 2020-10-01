<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-29 16:22:01
  from 'C:\xampp\htdocs\youtube\github\Room.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f734309681982_76213946',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45dafe01113993abf9eb18f03efdea034ef690cf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\youtube\\github\\Room.html',
      1 => 1601209929,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f734309681982_76213946 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
<meta content="text/html; charset=utf-8" />
<link rel="stylesheet" href="Home.css">
<title>YouTube部屋</title>  
</head>
<body>

<ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['VIDEOS']->value, 'V');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['V']->value) {
?>

<li><?php echo $_smarty_tpl->tpl_vars['V']->value['video_name'];?>

<br>
<iframe width="560" height="315" 
src="https://www.youtube.com/embed/<?php echo $_smarty_tpl->tpl_vars['V']->value['video_id'];?>
" 
frameborder="0" allow="accelerometer; autoplay; 
clipboard-write; encrypted-media; gyroscope; 
picture-in-picture" allowfullscreen>
</iframe>
</li>
<br>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<br>



<a href= "home.php" target="_blank">
    ホームに戻る </a><br>
<form method="POST">
<input type=submit name="del_room" value="削除">
</form>
</body>
</html><?php }
}
