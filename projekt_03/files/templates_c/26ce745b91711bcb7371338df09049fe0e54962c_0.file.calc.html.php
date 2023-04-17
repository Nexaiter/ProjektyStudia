<?php
/* Smarty version 4.3.0, created on 2023-04-17 22:52:35
  from 'C:\xampp\htdocs\projekt_01\files\calc.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_643db193e99627_71461158',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26ce745b91711bcb7371338df09049fe0e54962c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt_01\\files\\calc.html',
      1 => 1681764741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643db193e99627_71461158 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2089199417643db193e5ff92_86381905', 'content');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'content'} */
class Block_2089199417643db193e5ff92_86381905 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2089199417643db193e5ff92_86381905',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h2> Kalkulator delty </h2>

<form class="pure-form pure-form-stacked" action = "<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/files/calc.php" method="post">

    Proszę wpisać wartości a, b, c do obliczenia delty: <br />
    <fieldset>
    <label for="id_a">Liczba a:</label>
    <input id="id_a" type="text" name="a" placeholder="wartość a" value="<?php echo $_smarty_tpl->tpl_vars['a']->value;?>
" /><br />

    <label for="id_b">Liczba b:</label>
    <input id="id_b" type="text" name="b" placeholder="wartość b" value="<?php echo $_smarty_tpl->tpl_vars['b']->value;?>
" /><br />
    
    <label for="id_c">Liczba c:</label>
    <input id="id_c" type="text" name="c" placeholder="wartość c" value="<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
" /><br />
    
    </fieldset>
    <button type="submit" class="pure-button pure-button-primary">Oblicz deltę</button>
</form>

<div class="messages">

<?php if ((isset($_smarty_tpl->tpl_vars['errors']->value))) {?>  
    <?php if (count($_smarty_tpl->tpl_vars['errors']->value) > 0) {?> 
    <h4>Wystąpiły błędy: </h4>
		<ol class="err">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
        <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ol>
	<?php }
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['delta']->value))) {?>
    <h4>Delta:</h4>
    <p class="res">
    <?php echo $_smarty_tpl->tpl_vars['delta']->value;?>

    </p>
<?php }
if ((isset($_smarty_tpl->tpl_vars['x1']->value))) {?>
    <h4>Pierwsze miejsce zerowe:</h4>
    <p class="res">
    <?php echo $_smarty_tpl->tpl_vars['x1']->value;?>

    </p>
<?php }
if ((isset($_smarty_tpl->tpl_vars['x2']->value))) {?>
    <h4>Drugie miejsce zerowe:</h4>
    <p class="res">
    <?php echo $_smarty_tpl->tpl_vars['x2']->value;?>

    </p>
<?php }?>

</div>
<?php
}
}
/* {/block 'content'} */
}
