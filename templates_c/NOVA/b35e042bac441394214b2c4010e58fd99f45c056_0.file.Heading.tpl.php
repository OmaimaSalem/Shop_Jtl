<?php
/* Smarty version 3.1.38, created on 2021-05-04 11:46:26
  from 'C:\xampp\htdocs\shop\includes\src\OPC\Portlets\Heading\Heading.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_609117f28e7fa7_33970171',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b35e042bac441394214b2c4010e58fd99f45c056' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\includes\\src\\OPC\\Portlets\\Heading\\Heading.tpl',
      1 => 1612177966,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609117f28e7fa7_33970171 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('htag', ('h').($_smarty_tpl->tpl_vars['instance']->value->getProperty('level')));?>

<<?php echo $_smarty_tpl->tpl_vars['htag']->value;?>
 style="<?php echo $_smarty_tpl->tpl_vars['instance']->value->getStyleString();?>
 text-align:<?php echo $_smarty_tpl->tpl_vars['instance']->value->getProperty('align');?>
"
         class="<?php echo $_smarty_tpl->tpl_vars['instance']->value->getAnimationClass();?>
 <?php echo $_smarty_tpl->tpl_vars['instance']->value->getStyleClasses();?>
"
         <?php echo $_smarty_tpl->tpl_vars['instance']->value->getAnimationDataAttributeString();?>
>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['instance']->value->getProperty('text'), ENT_QUOTES, 'utf-8', true);?>

</<?php echo $_smarty_tpl->tpl_vars['htag']->value;?>
><?php }
}
