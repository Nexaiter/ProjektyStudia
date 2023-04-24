<?php
/* Smarty version 4.3.0, created on 2023-04-23 22:38:35
  from 'C:\xampp\htdocs\projekt_01\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6445974bbef560_63731353',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f92187a7e5a3f7673ed264e8b6dc2140e231102' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt_01\\templates\\header.tpl',
      1 => 1682269404,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6445974bbef560_63731353 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="header">
<h1><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</h1>
<h2><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_header']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</h1>
<p>
    <?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? "Opis domyślny" ?? null : $tmp);?>

</p>
</div><?php }
}
