<?php
/* Smarty version 4.3.1, created on 2023-05-15 20:10:48
  from 'C:\xampp\htdocs\projekt_06\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_646275a8127687_37220264',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f20248eb7880051d4fdcfbf1902b8cb2ffa0d49d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt_06\\app\\views\\templates\\main.tpl',
      1 => 1684169318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646275a8127687_37220264 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta charset="utf-8" />
	<title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł" ?? null : $tmp);?>
</title>
	<link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style.css" />
</head>
<body>
	<div style="margin: 1em;">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1977513891646275a81262f2_18426778', 'content');
?>

	</div>
</body>
</html><?php }
/* {block 'content'} */
class Block_1977513891646275a81262f2_18426778 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1977513891646275a81262f2_18426778',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 zawartosc maina <?php
}
}
/* {/block 'content'} */
}
