<?php
/* Smarty version 3.1.38, created on 2021-05-07 11:45:45
  from 'C:\xampp\htdocs\shop\includes\vendor\jtlshop\scc\src\scc\templates\csrf_token.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60950c49725258_31963168',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e375b5e5953fa51eee2b15b7732f6ef13391798' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\includes\\vendor\\jtlshop\\scc\\src\\scc\\templates\\csrf_token.tpl',
      1 => 1612177977,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60950c49725258_31963168 (Smarty_Internal_Template $_smarty_tpl) {
?><input type="hidden" class="jtl_token" name="jtl_token" value="<?php echo $_SESSION['jtl_token'];?>
" />
<?php }
}
