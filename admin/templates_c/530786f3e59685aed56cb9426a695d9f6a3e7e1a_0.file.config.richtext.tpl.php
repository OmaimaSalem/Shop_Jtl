<?php
/* Smarty version 3.1.38, created on 2021-05-07 10:45:01
  from 'C:\xampp\htdocs\shop\admin\opc\tpl\config\config.richtext.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6094fe0d89dfe6_42166796',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '530786f3e59685aed56cb9426a695d9f6a3e7e1a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\admin\\opc\\tpl\\config\\config.richtext.tpl',
      1 => 1612177965,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6094fe0d89dfe6_42166796 (Smarty_Internal_Template $_smarty_tpl) {
?><div class='form-group'>
    <label for="config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['propdesc']->value['label'];?>
</label>
    <textarea name="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
" id="textarea-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
" class="form-control" <?php if ($_smarty_tpl->tpl_vars['required']->value) {?>required<?php }?>>
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['propval']->value);?>

    </textarea>
    <?php echo '<script'; ?>
>
        var adminLang = '<?php echo Shop::Container()->getGetText()->getLanguage();?>
'.toLowerCase();

        if(!CKEDITOR.lang.languages.hasOwnProperty(adminLang)) {
            adminLang = adminLang.split('-')[0]
        }

        CKEDITOR.replace(
            'textarea-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
',
            {
                baseFloatZIndex: 9000,
                language: adminLang,
                filebrowserBrowseUrl: 'elfinder.php?ckeditor=1&token=' + JTL_TOKEN + '&mediafilesType=image',
            },
        );

        opc.once('save-config', () => {
            $('#textarea-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
').val(CKEDITOR.instances['textarea-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
'].getData());
        });
    <?php echo '</script'; ?>
>
</div><?php }
}
