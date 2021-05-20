<?php
/* Smarty version 3.1.38, created on 2021-05-07 11:03:44
  from 'C:\xampp\htdocs\shop\admin\opc\tpl\config\config.search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60950270b8ca81_98814963',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f50c79a15f489ff8aa87893dc82eafe6d8442fa7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\admin\\opc\\tpl\\config\\config.search.tpl',
      1 => 1612177965,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60950270b8ca81_98814963 (Smarty_Internal_Template $_smarty_tpl) {
?><div class='form-group'>
    <label for="config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
">&nbsp;</label>
    <input type="search" class="form-control" id="config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
"
           <?php if (!empty($_smarty_tpl->tpl_vars['propdesc']->value['placeholder'])) {?>placeholder="&#xF002; <?php echo $_smarty_tpl->tpl_vars['propdesc']->value['placeholder'];?>
"<?php }?>>
</div><?php }
}
