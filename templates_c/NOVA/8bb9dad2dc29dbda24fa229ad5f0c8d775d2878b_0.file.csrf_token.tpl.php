<?php
/* Smarty version 3.1.38, created on 2021-05-04 11:46:17
  from 'C:\xampp\htdocs\shop\includes\vendor\jtlshop\scc\src\scc\templates\csrf_token.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_609117e9ec2150_06464620',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8bb9dad2dc29dbda24fa229ad5f0c8d775d2878b' => 
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
function content_609117e9ec2150_06464620 (Smarty_Internal_Template $_smarty_tpl) {
?><input type="hidden" class="jtl_token" name="jtl_token" value="<?php echo $_SESSION['jtl_token'];?>
" />
<?php }
}
