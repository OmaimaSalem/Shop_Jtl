<?php
/* Smarty version 3.1.38, created on 2021-05-18 11:16:38
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\includes\vendor\jtlshop\scc\src\scc\templates\csrf_token.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a385f63d88b3_37254588',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44e2554f9e50306fb1e781bccd11edae6c3cd338' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\includes\\vendor\\jtlshop\\scc\\src\\scc\\templates\\csrf_token.tpl',
      1 => 1612177977,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a385f63d88b3_37254588 (Smarty_Internal_Template $_smarty_tpl) {
?><input type="hidden" class="jtl_token" name="jtl_token" value="<?php echo $_SESSION['jtl_token'];?>
" />
<?php }
}
