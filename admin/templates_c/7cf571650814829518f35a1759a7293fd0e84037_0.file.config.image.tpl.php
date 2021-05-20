<?php
/* Smarty version 3.1.38, created on 2021-05-07 10:34:47
  from 'C:\xampp\htdocs\shop\admin\opc\tpl\config\config.image.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6094fba743a395_87527974',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7cf571650814829518f35a1759a7293fd0e84037' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\admin\\opc\\tpl\\config\\config.image.tpl',
      1 => 1612177965,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6094fba743a395_87527974 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form-group">
    <label for="config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
">
        <?php if (!empty($_smarty_tpl->tpl_vars['propdesc']->value['label'])) {
echo $_smarty_tpl->tpl_vars['propdesc']->value['label'];
}?>
    </label>

    <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['propval']->value, ENT_QUOTES, 'utf-8', true);?>
">
    <?php if (empty($_smarty_tpl->tpl_vars['propval']->value)) {?>
        <?php $_smarty_tpl->_assignInScope('imgsrc', 'opc/gfx/upload-stub.png');?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('imgsrc', (((\JTL\Shop::getURL()).('/')).((defined('STORAGE_OPC') ? constant('STORAGE_OPC') : null))).($_smarty_tpl->tpl_vars['propval']->value));?>
    <?php }?>
    <button type="button" class="image-btn" onclick="opc.selectImageProp('<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
')">
        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['imgsrc']->value, ENT_QUOTES, 'utf-8', true);?>
"
             alt="Chosen image" id="preview-img-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
" class="<?php if (!empty($_smarty_tpl->tpl_vars['propdesc']->value['thumb'])) {?>thumb<?php }?>">
    </button>
</div>
<?php }
}
