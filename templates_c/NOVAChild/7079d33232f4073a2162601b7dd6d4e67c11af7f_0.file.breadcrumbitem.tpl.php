<?php
/* Smarty version 3.1.38, created on 2021-05-18 11:41:10
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\includes\vendor\jtlshop\scc\src\scc\templates\breadcrumbitem.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a38bb69da7e1_80550586',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7079d33232f4073a2162601b7dd6d4e67c11af7f' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\includes\\vendor\\jtlshop\\scc\\src\\scc\\templates\\breadcrumbitem.tpl',
      1 => 1612177977,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a38bb69da7e1_80550586 (Smarty_Internal_Template $_smarty_tpl) {
?><<?php echo $_smarty_tpl->tpl_vars['params']->value['tag']->getValue();?>

	<?php if ($_smarty_tpl->tpl_vars['params']->value['id']->hasValue()) {?>id="<?php echo $_smarty_tpl->tpl_vars['params']->value['id']->getValue();?>
"<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['params']->value['style']->hasValue()) {?>style="<?php echo $_smarty_tpl->tpl_vars['params']->value['style']->getValue();?>
"<?php }?>
	class="breadcrumb-item<?php if ($_smarty_tpl->tpl_vars['params']->value['class']->hasValue()) {?> <?php echo $_smarty_tpl->tpl_vars['params']->value['class']->getValue();
}?>"
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
	>
	<<?php echo $_smarty_tpl->tpl_vars['params']->value['router-tag']->getValue();?>
 class="breadcrumb-link
	<?php if ($_smarty_tpl->tpl_vars['params']->value['active']->getValue() === true) {?> <?php echo $_smarty_tpl->tpl_vars['params']->value['active-class']->getValue();
}?>
	<?php if ($_smarty_tpl->tpl_vars['params']->value['disabled']->getValue() === true) {?> disabled<?php }?>"
	<?php if ($_smarty_tpl->tpl_vars['params']->value['nofollow']->getValue() === true) {?> rel="nofollow"<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['params']->value['title']->hasValue()) {?> title="<?php echo $_smarty_tpl->tpl_vars['params']->value['title']->getValue();?>
"<?php }?>
	target="<?php echo $_smarty_tpl->tpl_vars['params']->value['target']->getValue();?>
"
	<?php if ($_smarty_tpl->tpl_vars['params']->value['href']->hasValue()) {?>href="<?php echo $_smarty_tpl->tpl_vars['params']->value['href']->getValue();?>
"<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['params']->value['router-tag-itemprop']->hasValue()) {?>itemprop="<?php echo $_smarty_tpl->tpl_vars['params']->value['router-tag-itemprop']->getValue();?>
"<?php }?>
>
<?php echo $_smarty_tpl->tpl_vars['blockContent']->value;?>

</<?php echo $_smarty_tpl->tpl_vars['params']->value['router-tag']->getValue();?>
>
</<?php echo $_smarty_tpl->tpl_vars['params']->value['tag']->getValue();?>
>
<?php }
}
