<?php
/* Smarty version 3.1.38, created on 2021-05-07 10:39:18
  from 'C:\xampp\htdocs\shop\admin\opc\tpl\config\config.video.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6094fcb643b8d8_13676815',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bd62f23bc56a41a33e6520f798cb33eccb92237' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\admin\\opc\\tpl\\config\\config.video.tpl',
      1 => 1612177965,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6094fcb643b8d8_13676815 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('previewVidUrl', (($tmp = $_smarty_tpl->tpl_vars['propval']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['portlet']->value->getDefaultPreviewImageUrl() : $tmp));?>

<div class='form-group'>
    <label for="config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['propdesc']->value['label'];?>
</label>
    <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['propval']->value, ENT_QUOTES, 'utf-8', true);?>
">
    <button type="button" class="btn btn-default video-btn" onclick="opc.selectVideoProp('<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
')">
        <video width="300" height="160" controlsList="nodownload" id="cont-preview-vid-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
">
            <source src="<?php echo $_smarty_tpl->tpl_vars['previewVidUrl']->value;?>
" id="preview-vid-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
" type="video/mp4">
            <?php echo __('videoTagNotSupported');?>

        </video>
    </button>
</div><?php }
}
