<?php
/* Smarty version 3.1.38, created on 2021-05-04 11:46:25
  from 'C:\xampp\htdocs\shop\includes\vendor\jtlshop\scc\src\scc\templates\clearfix.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_609117f108af59_22137555',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9409104f9c6e98728416086f9edee6000873a88d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\includes\\vendor\\jtlshop\\scc\\src\\scc\\templates\\clearfix.tpl',
      1 => 1612177977,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609117f108af59_22137555 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['params']->value['visible-size']->hasValue()) {?>
    <?php $_smarty_tpl->_assignInScope('visibleSize', $_smarty_tpl->tpl_vars['params']->value['visible-size']->getValue());?>
    <?php if ($_smarty_tpl->tpl_vars['visibleSize']->value === 'xs') {?>
        <?php $_smarty_tpl->_assignInScope('nextSize', 'sm');?>
    <?php } elseif ($_smarty_tpl->tpl_vars['visibleSize']->value === 'sm') {?>
        <?php $_smarty_tpl->_assignInScope('nextSize', 'md');?>
    <?php } elseif ($_smarty_tpl->tpl_vars['visibleSize']->value === 'md') {?>
        <?php $_smarty_tpl->_assignInScope('nextSize', 'lg');?>
    <?php } elseif ($_smarty_tpl->tpl_vars['visibleSize']->value === 'lg') {?>
        <?php $_smarty_tpl->_assignInScope('nextSize', 'xl');?>
    <?php } elseif ($_smarty_tpl->tpl_vars['visibleSize']->value === 'xl') {?>
        <?php $_smarty_tpl->_assignInScope('nextSize', null);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['visibleSize']->value === 'xs') {?>
        <div class="clearfix d-block d-<?php echo $_smarty_tpl->tpl_vars['nextSize']->value;?>
-none"></div>
    <?php } elseif (!empty($_smarty_tpl->tpl_vars['nextSize']->value)) {?>
        <div class="clearfix d-none d-<?php echo $_smarty_tpl->tpl_vars['visibleSize']->value;?>
-block d-<?php echo $_smarty_tpl->tpl_vars['nextSize']->value;?>
-none"></div>
    <?php } else { ?>
        <div class="clearfix d-none d-<?php echo $_smarty_tpl->tpl_vars['visibleSize']->value;?>
-block"></div>
    <?php }
} else { ?>
    <div class="clearfix"></div>
<?php }
}
}
