<?php
/* Smarty version 4.3.0, created on 2023-04-24 11:41:04
  from 'C:\xampp\htdocs\projekt_01\files\calcView.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64464eb08703d5_78620599',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '395f47799ee85045cd7cc70dcd0f9273091166a2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt_01\\files\\calcView.html',
      1 => 1682329263,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64464eb08703d5_78620599 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_126461782364464eb08536c3_46919263', 'content');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'content'} */
class Block_126461782364464eb08536c3_46919263 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_126461782364464eb08536c3_46919263',
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
    <?php echo $_smarty_tpl->tpl_vars['result']->value->{$_smarty_tpl->tpl_vars['x1']->value};?>

    </p>
<?php }
if ((isset($_smarty_tpl->tpl_vars['result']->value->x2))) {?>
    <h4>Drugie miejsce zerowe:</h4>
    <p class="res">
    <?php echo $_smarty_tpl->tpl_vars['result']->value->{$_smarty_tpl->tpl_vars['x2']->value};?>

    </p>
<?php }?>

</div>
<?php
}
}
/* {/block 'content'} */
}
