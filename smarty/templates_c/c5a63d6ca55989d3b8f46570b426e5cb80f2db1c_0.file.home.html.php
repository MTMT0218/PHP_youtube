<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-25 15:31:44
  from 'C:\xampp\htdocs\ABC\ver5\home.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6df14052b436_26089638',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5a63d6ca55989d3b8f46570b426e5cb80f2db1c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ABC\\ver5\\home.html',
      1 => 1601040702,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6df14052b436_26089638 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
  
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ROOMS_DATA']->value, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
?>
    
    <a href= "room.php?room_id=<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
" target="_blank">
        <?php echo $_smarty_tpl->tpl_vars['r']->value['room_name'];?>
 </a>
    
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['VIDEOS_DATA']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    
    
    <?php echo $_smarty_tpl->tpl_vars['v']->value['room_id'];?>
 </a>
    
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
   
  <form method="POST" action="getvideo.php">
  <input type="submit"  value="ルーム作成">
  </form>
  
</html>
<?php }
}
