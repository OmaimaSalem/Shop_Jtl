<?php
/* Smarty version 3.1.38, created on 2021-05-04 14:18:43
  from 'C:\xampp\htdocs\shop\admin\templates\bootstrap\tpl_inc\option_generic.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60913ba343e170_90712846',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1210b4e96431b1cc99fa6be050d22e5e5edefca6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\admin\\templates\\bootstrap\\tpl_inc\\option_generic.tpl',
      1 => 1612177964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60913ba343e170_90712846 (Smarty_Internal_Template $_smarty_tpl) {
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
