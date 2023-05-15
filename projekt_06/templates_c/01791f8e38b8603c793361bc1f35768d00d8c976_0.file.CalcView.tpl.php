<?php
/* Smarty version 4.3.1, created on 2023-05-15 20:10:47
  from 'C:\xampp\htdocs\projekt_06\app\views\CalcView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_646275a7958a35_05914763',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01791f8e38b8603c793361bc1f35768d00d8c976' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt_06\\app\\views\\CalcView.tpl',
      1 => 1684169314,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_646275a7958a35_05914763 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2088413021646275a754af52_65721917', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_2088413021646275a754af52_65721917 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2088413021646275a754af52_65721917',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout"  class="pure-menu-heading pure-menu-link">wyloguj</a>
	<span style="float:right;">użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
, rola: <?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>
</span>
</div>   

<h2> Kalkulator delty </h2>

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calcCompute" method="post" class="pure-form pure-form-aligned bottom-margin">

Proszę wpisać wartości a, b, c do obliczenia delty: <br />
    <fieldset>
    <label for="id_a">Liczba a:</label>
    <input id="id_a" type="text" name="a" placeholder="wartość a" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->a;?>
" /><br />

    <label for="id_b">Liczba b:</label>
    <input id="id_b" type="text" name="b" placeholder="wartość b" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->b;?>
" /><br />
    
    <label for="id_c">Liczba c:</label>
    <input id="id_c" type="text" name="c" placeholder="wartość c" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->c;?>
" /><br />
    
    </fieldset>
    <button type="submit" class="pure-button pure-button-primary">Oblicz deltę</button>
</form>

<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ((isset($_smarty_tpl->tpl_vars['res']->value->delta))) {?>
<div class="messages inf">
	Delta: <?php echo $_smarty_tpl->tpl_vars['res']->value->delta;?>

</div>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['res']->value->delta))) {?>
<div class="messages inf">
    Delta: <?php echo $_smarty_tpl->tpl_vars['res']->value->x1;?>

</div>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['res']->value->delta))) {?>
<div class="messages inf">
    Delta: <?php echo $_smarty_tpl->tpl_vars['res']->value->x2;?>

</div>
<?php }?>
    
<?php
}
}
/* {/block 'content'} */
}
