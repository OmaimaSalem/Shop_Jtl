<?php
/* Smarty version 3.1.38, created on 2021-05-19 14:55:52
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\admin\templates\bootstrap\tpl_inc\option_generic.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a50ad8752630_37743372',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5b42ca52b3a460c3742e65552252da3c3762a9a' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\admin\\templates\\bootstrap\\tpl_inc\\option_generic.tpl',
      1 => 1612177964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a50ad8752630_37743372 (Smarty_Internal_Template $_smarty_tpl) {
?><input class="form-control" type="<?php echo $_smarty_tpl->tpl_vars['setting']->value->cType;?>
" name="<?php echo $_smarty_tpl->tpl_vars['setting']->value->elementID;?>
"
    id="<?php echo $_smarty_tpl->tpl_vars['setting']->value->elementID;?>
"
    value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['setting']->value->value, ENT_QUOTES, 'utf-8', true);?>
"
    placeholder="<?php echo __($_smarty_tpl->tpl_vars['setting']->value->cPlaceholder);?>
"
    <?php if ($_smarty_tpl->tpl_vars['setting']->value->cType === 'checkbox' && $_smarty_tpl->tpl_vars['setting']->value->value === '1') {?> checked<?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['setting']->value->rawAttributes['step']))) {?> step="<?php echo $_smarty_tpl->tpl_vars['setting']->value->rawAttributes['step'];?>
"<?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['setting']->value->rawAttributes['min']))) {?> min="<?php echo $_smarty_tpl->tpl_vars['setting']->value->rawAttributes['min'];?>
"<?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['setting']->value->rawAttributes['max']))) {?> max="<?php echo $_smarty_tpl->tpl_vars['setting']->value->rawAttributes['max'];?>
"<?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['setting']->value->rawAttributes['maxlength']))) {?> maxlength="<?php echo $_smarty_tpl->tpl_vars['setting']->value->rawAttributes['maxlength'];?>
"<?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['setting']->value->rawAttributes['pattern']))) {?> pattern="<?php echo $_smarty_tpl->tpl_vars['setting']->value->rawAttributes['pattern'];?>
"<?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['setting']->value->rawAttributes['step']))) {?> step="<?php echo $_smarty_tpl->tpl_vars['setting']->value->rawAttributes['step'];?>
"<?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['setting']->value->rawAttributes['size']))) {?> size="<?php echo $_smarty_tpl->tpl_vars['setting']->value->rawAttributes['size'];?>
"<?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['setting']->value->rawAttributes['required']))) {?> required="<?php echo $_smarty_tpl->tpl_vars['setting']->value->rawAttributes['required'];?>
"<?php }?>
/>
<?php }
}
