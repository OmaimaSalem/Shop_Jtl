<?php
/* Smarty version 3.1.38, created on 2021-05-04 14:26:55
  from 'C:\xampp\htdocs\shop\includes\vendor\jtlshop\scc\src\scc\templates\button.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60913d8f102cc8_59374000',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0fce5d1986ce1da45de7ec40f8aa167e8bc26255' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\includes\\vendor\\jtlshop\\scc\\src\\scc\\templates\\button.tpl',
      1 => 1612177977,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60913d8f102cc8_59374000 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['params']->value['variant']->hasValue()) {?>
    <?php $_smarty_tpl->_assignInScope('class', ((('btn ').($_smarty_tpl->tpl_vars['params']->value['class'])).(' btn-')).($_smarty_tpl->tpl_vars['params']->value['variant']));
} else { ?>
    <?php $_smarty_tpl->_assignInScope('class', ('btn ').($_smarty_tpl->tpl_vars['params']->value['class']));
}?>

<?php if ($_smarty_tpl->tpl_vars['params']->value['href']->hasValue()) {?>
    <?php $_smarty_tpl->_assignInScope('tag', 'a');
} else { ?>
    <?php $_smarty_tpl->_assignInScope('tag', 'button');
}?>

<<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>

    <?php if ($_smarty_tpl->tpl_vars['tag']->value == 'button') {?>type="<?php echo $_smarty_tpl->tpl_vars['params']->value['type'];?>
"<?php }?>
    class="<?php echo $_smarty_tpl->tpl_vars['class']->value;
if ($_smarty_tpl->tpl_vars['params']->value['size']->hasValue()) {?> btn-<?php echo $_smarty_tpl->tpl_vars['params']->value['size']->getValue();
}
if ($_smarty_tpl->tpl_vars['params']->value['block']->getValue() === true) {?> btn-block<?php }?>"
    <?php if ($_smarty_tpl->tpl_vars['params']->value['id']->hasValue()) {?>id="<?php echo $_smarty_tpl->tpl_vars['params']->value['id']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['href']->hasValue()) {?>href="<?php echo $_smarty_tpl->tpl_vars['params']->value['href']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['target']->hasValue()) {?>target="<?php echo $_smarty_tpl->tpl_vars['params']->value['target']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['style']->hasValue()) {?>style="<?php echo $_smarty_tpl->tpl_vars['params']->value['style']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['title']->hasValue()) {?>title="<?php echo $_smarty_tpl->tpl_vars['params']->value['title']->getValue();?>
" <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['name']->hasValue()) {?>name="<?php echo $_smarty_tpl->tpl_vars['params']->value['name']->getValue();?>
" <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['value']->hasValue()) {?>value="<?php echo $_smarty_tpl->tpl_vars['params']->value['value']->getValue();?>
" <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['disabled']->getValue() === true) {?>disabled<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['itemprop']->hasValue()) {?>itemprop="<?php echo $_smarty_tpl->tpl_vars['params']->value['itemprop']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['itemscope']->getValue() === true) {?>itemscope <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['itemtype']->hasValue()) {?>itemtype="<?php echo $_smarty_tpl->tpl_vars['params']->value['itemtype']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['itemid']->hasValue()) {?>itemid="<?php echo $_smarty_tpl->tpl_vars['params']->value['itemid']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['role']->hasValue()) {?>role="<?php echo $_smarty_tpl->tpl_vars['params']->value['role']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['aria']->hasValue()) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['params']->value['aria']->getValue(), 'ariaVal', false, 'ariaKey');
$_smarty_tpl->tpl_vars['ariaVal']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ariaKey']->value => $_smarty_tpl->tpl_vars['ariaVal']->value) {
$_smarty_tpl->tpl_vars['ariaVal']->do_else = false;
?>aria-<?php echo $_smarty_tpl->tpl_vars['ariaKey']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['ariaVal']->value;?>
" <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['data']->hasValue()) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['params']->value['data']->getValue(), 'dataVal', false, 'dataKey');
$_smarty_tpl->tpl_vars['dataVal']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dataKey']->value => $_smarty_tpl->tpl_vars['dataVal']->value) {
$_smarty_tpl->tpl_vars['dataVal']->do_else = false;
?>data-<?php echo $_smarty_tpl->tpl_vars['dataKey']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['dataVal']->value;?>
" <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['type'] === 'submit' && $_smarty_tpl->tpl_vars['params']->value['formnovalidate']->getValue() === true) {?>formnovalidate<?php }?>>
    <?php echo $_smarty_tpl->tpl_vars['blockContent']->value;?>

</<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
>
<?php }
}
