<?php
/* Smarty version 3.1.38, created on 2021-05-19 14:58:47
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\includes\vendor\jtlshop\scc\src\scc\templates\input.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a50b87c0e210_56858946',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a45537d5a5aff17efd0b9b64ce50926c608b61c2' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\includes\\vendor\\jtlshop\\scc\\src\\scc\\templates\\input.tpl',
      1 => 1612177977,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a50b87c0e210_56858946 (Smarty_Internal_Template $_smarty_tpl) {
?><input
    type="<?php echo $_smarty_tpl->tpl_vars['params']->value['type']->getValue();?>
"
    class="form-control <?php echo $_smarty_tpl->tpl_vars['params']->value['class']->getValue();
if ($_smarty_tpl->tpl_vars['params']->value['size-class']->hasValue()) {?> form-control-<?php echo $_smarty_tpl->tpl_vars['params']->value['size-class']->getValue();
}?>"
    <?php if ($_smarty_tpl->tpl_vars['params']->value['placeholder']->hasValue()) {?>placeholder="<?php echo $_smarty_tpl->tpl_vars['params']->value['placeholder']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['readonly']->getValue() === true) {?> readonly<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['id']->hasValue()) {?> id="<?php echo $_smarty_tpl->tpl_vars['params']->value['id']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['required']->getValue() === true) {?> required<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['disabled']->getValue() === true) {?> disabled<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['style']->hasValue()) {?>style="<?php echo $_smarty_tpl->tpl_vars['params']->value['style']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['value']->hasValue()) {?>value="<?php echo $_smarty_tpl->tpl_vars['params']->value['value']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['min']->hasValue()) {?>min="<?php echo $_smarty_tpl->tpl_vars['params']->value['min']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['max']->hasValue()) {?>max="<?php echo $_smarty_tpl->tpl_vars['params']->value['max']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['size']->hasValue()) {?>size="<?php echo $_smarty_tpl->tpl_vars['params']->value['size']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['maxlength']->hasValue()) {?>maxlength="<?php echo $_smarty_tpl->tpl_vars['params']->value['maxlength']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['step']->hasValue()) {?>step="<?php echo $_smarty_tpl->tpl_vars['params']->value['step']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['name']->hasValue()) {?>name="<?php echo $_smarty_tpl->tpl_vars['params']->value['name']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['autocomplete']->hasValue()) {?>autocomplete="<?php echo $_smarty_tpl->tpl_vars['params']->value['autocomplete']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['itemprop']->hasValue()) {?>itemprop="<?php echo $_smarty_tpl->tpl_vars['params']->value['itemprop']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['itemscope']->getValue() === true) {?>itemscope <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['itemtype']->hasValue()) {?>itemtype="<?php echo $_smarty_tpl->tpl_vars['params']->value['itemtype']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['itemid']->hasValue()) {?>itemid="<?php echo $_smarty_tpl->tpl_vars['params']->value['itemid']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['role']->hasValue()) {?>role="<?php echo $_smarty_tpl->tpl_vars['params']->value['role']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['title']->hasValue()) {?> title="<?php echo $_smarty_tpl->tpl_vars['params']->value['title']->getValue();?>
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
>
<?php }
}
