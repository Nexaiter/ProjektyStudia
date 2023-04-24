<?php
/* Smarty version 4.3.0, created on 2023-04-24 11:42:01
  from 'C:\xampp\htdocs\projekt_01\files\calcView.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64464ee99726f5_35689878',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ce34ceea3b000c5ae2c189b9db1541f0f6a1366' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt_01\\files\\calcView.html',
      1 => 1682329319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64464ee99726f5_35689878 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_188297823764464ee99564c5_57764054', 'content');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'content'} */
class Block_188297823764464ee99564c5_57764054 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_188297823764464ee99564c5_57764054',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h2> Kalkulator delty </h2>

<form class="pure-form pure-form-stacked" action = "<?php echo $_smarty_tpl->tpl_vars['config']->value->app_url;?>
/files/calc.php" method="post">

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

<div class="messages">

<?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?> 
    <h4>Wystąpiły błędy: </h4>
	<ol class="err">
     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msg']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
     <li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
     <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ol>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>
	<h4>Informacje: </h4>
	<ol class="inf">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msg']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ol>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['result']->value->delta))) {?>
    <h4>Delta:</h4>
    <p class="res">
    <?php echo $_smarty_tpl->tpl_vars['result']->value->delta;?>

    </p>
<?php }
if ((isset($_smarty_tpl->tpl_vars['result']->value->x1))) {?>
    <h4>Pierwsze miejsce zerowe:</h4>
    <p class="res">
    <?php echo $_smarty_tpl->tpl_vars['result']->value->x1;?>

    </p>
<?php }
if ((isset($_smarty_tpl->tpl_vars['result']->value->x2))) {?>
    <h4>Drugie miejsce zerowe:</h4>
    <p class="res">
    <?php echo $_smarty_tpl->tpl_vars['result']->value->x2;?>

    </p>
<?php }?>

</div>
<?php
}
}
/* {/block 'content'} */
}
