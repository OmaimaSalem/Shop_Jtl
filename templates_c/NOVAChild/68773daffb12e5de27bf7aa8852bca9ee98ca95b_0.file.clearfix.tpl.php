<?php
/* Smarty version 3.1.38, created on 2021-05-04 14:27:06
  from 'C:\xampp\htdocs\shop\includes\vendor\jtlshop\scc\src\scc\templates\clearfix.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60913d9a691863_90006249',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68773daffb12e5de27bf7aa8852bca9ee98ca95b' => 
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
function content_60913d9a691863_90006249 (Smarty_Internal_Template $_smarty_tpl) {
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
