<?php
/* Smarty version 3.1.38, created on 2021-05-19 14:55:51
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\admin\templates\bootstrap\tpl_inc\option_select.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a50ad7817a63_45948178',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34264dcb8a3c4b0dc54222805329af464710411f' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\admin\\templates\\bootstrap\\tpl_inc\\option_select.tpl',
      1 => 1612177964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a50ad7817a63_45948178 (Smarty_Internal_Template $_smarty_tpl) {
?><select class="custom-select" name="<?php echo $_smarty_tpl->tpl_vars['setting']->value->elementID;?>
" id="<?php echo $_smarty_tpl->tpl_vars['setting']->value->elementID;?>
">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['setting']->value->options, 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['option']->value->value;?>
" <?php if ($_smarty_tpl->tpl_vars['option']->value->value == $_smarty_tpl->tpl_vars['setting']->value->value) {?>selected="selected"<?php }?>><?php echo __($_smarty_tpl->tpl_vars['option']->value->name);?>
</option>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</select>
<?php }
}
