<?php
/* Smarty version 3.1.38, created on 2021-05-19 15:07:58
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\includes\src\OPC\Portlets\Heading\Heading.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a50dae600f15_65420663',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bab4de76c0675422802d23854e7600c2097eb997' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\includes\\src\\OPC\\Portlets\\Heading\\Heading.tpl',
      1 => 1612177966,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a50dae600f15_65420663 (Smarty_Internal_Template $_smarty_tpl) {
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
