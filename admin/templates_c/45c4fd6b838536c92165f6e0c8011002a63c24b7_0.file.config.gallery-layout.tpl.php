<?php
/* Smarty version 3.1.38, created on 2021-05-07 10:22:00
  from 'C:\xampp\htdocs\shop\admin\opc\tpl\config\config.gallery-layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6094f8a8903b61_91766830',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45c4fd6b838536c92165f6e0c8011002a63c24b7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\admin\\opc\\tpl\\config\\config.gallery-layout.tpl',
      1 => 1612177965,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6094f8a8903b61_91766830 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('options', array('grid','alternate','columns'));?>

<?php if (empty($_smarty_tpl->tpl_vars['propval']->value)) {?>
    <?php $_smarty_tpl->_assignInScope('propval', 'grid');
}?>

<label><?php echo $_smarty_tpl->tpl_vars['propdesc']->value['label'];?>
</label>

<div class="conf-gallery-layout">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['options']->value, 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
        <label>
            <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['option']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['propval']->value === $_smarty_tpl->tpl_vars['option']->value) {?>checked<?php }?>
                   class="gallery-layout-option-<?php echo $_smarty_tpl->tpl_vars['option']->value;?>
">
            <span><?php echo __($_smarty_tpl->tpl_vars['option']->value);?>
</span>
        </label>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div><?php }
}
