<?php
/* Smarty version 3.1.38, created on 2021-05-18 13:23:06
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\admin\templates\bootstrap\tpl_inc\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a3a39aaede35_74962847',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cda5ccdabad9ea8247d8987053bdb3b5d48db4a1' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\admin\\templates\\bootstrap\\tpl_inc\\footer.tpl',
      1 => 1612177964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a3a39aaede35_74962847 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['account']->value) {?>
        <button class="navbar-toggler sidebar-toggler collapsed" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        </div>
    </div>
</div>
<?php echo '<script'; ?>
>
    if(typeof CKEDITOR !== 'undefined') {
        CKEDITOR.editorConfig = function(config) {
            config.language = '<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
';
            config.removeDialogTabs = 'link:upload;image:Upload';
            config.defaultLanguage = 'en';
            config.startupMode = '<?php if ((isset($_smarty_tpl->tpl_vars['Einstellungen']->value['global']['admin_ckeditor_mode'])) && $_smarty_tpl->tpl_vars['Einstellungen']->value['global']['admin_ckeditor_mode'] === 'Q') {?>source<?php } else { ?>wysiwyg<?php }?>';
            config.htmlEncodeOutput = false;
            config.basicEntities = false;
            config.htmlEncodeOutput = false;
            config.allowedContent = true;
            config.enterMode = CKEDITOR.ENTER_P;
            config.entities = false;
            config.entities_latin = false;
            config.entities_greek = false;
            config.ignoreEmptyParagraph = false;
            config.filebrowserBrowseUrl      = 'elfinder.php?ckeditor=1&mediafilesType=misc&token=<?php echo $_SESSION['jtl_token'];?>
';
            config.filebrowserImageBrowseUrl = 'elfinder.php?ckeditor=1&mediafilesType=image&token=<?php echo $_SESSION['jtl_token'];?>
';
            config.filebrowserFlashBrowseUrl = 'elfinder.php?ckeditor=1&mediafilesType=video&token=<?php echo $_SESSION['jtl_token'];?>
';
            config.filebrowserUploadUrl      = 'elfinder.php?ckeditor=1&mediafilesType=misc&token=<?php echo $_SESSION['jtl_token'];?>
';
            config.filebrowserImageUploadUrl = 'elfinder.php?ckeditor=1&mediafilesType=image&token=<?php echo $_SESSION['jtl_token'];?>
';
            config.filebrowserFlashUploadUrl = 'elfinder.php?ckeditor=1&mediafilesType=video&token=<?php echo $_SESSION['jtl_token'];?>
';
            config.extraPlugins = 'codemirror';
            config.fillEmptyBlocks = false;
            config.autoParagraph = false;
        };
        CKEDITOR.editorConfig(CKEDITOR.config);
        $.each(CKEDITOR.dtd.$removeEmpty, function (i, value) {
            CKEDITOR.dtd.$removeEmpty[i] = false;
        });
    }
    $('.select2').select2();
    $(function() {
        ioCall('notificationAction', ['update'], undefined, undefined, undefined, true);
    });
<?php echo '</script'; ?>
>

<?php }?>
</body></html>
<?php }
}
