<?php
/* Smarty version 3.1.38, created on 2021-05-19 14:54:15
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\admin\templates\bootstrap\tpl_inc\shoptemplate_upload.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a50a77a9f021_69708834',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f05b69dcef58de23fc1a3df91bcbbfa5575479b7' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\admin\\templates\\bootstrap\\tpl_inc\\shoptemplate_upload.tpl',
      1 => 1612177964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/fileupload.tpl' => 1,
  ),
),false)) {
function content_60a50a77a9f021_69708834 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card" id="upload">
    <div class="card-header"><?php echo __('uploadTemplateHeading');?>
</div>
    <div class="card-body">
        <form enctype="multipart/form-data">
            <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

            <div class="form-group">
                <?php ob_start();
echo __('successTemplateUpload');
$_prefixVariable4=ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:tpl_inc/fileupload.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('fileID'=>'template-install-upload','fileUploadUrl'=>((string)$_smarty_tpl->tpl_vars['adminURL']->value)."/shoptemplate.php",'fileBrowseClear'=>true,'fileUploadAsync'=>true,'fileAllowedExtensions'=>"['zip']",'fileMaxSize'=>100000,'fileOverwriteInitial'=>false,'filePreview'=>false,'fileShowUpload'=>true,'fileShowRemove'=>true,'fileDefaultBatchSelectedEvent'=>false,'fileSuccessMsg'=>$_prefixVariable4), 0, false);
?>
            </div>
            <hr>
        </form>
    </div>

    <?php echo '<script'; ?>
>
        let defaultError   = '<?php echo __('errorTemplateUpload');?>
',
            defaultSuccess = '<?php echo __('successTemplateUpload');?>
'
            $fi            = $('#template-install-upload');
        
        $fi.on('fileuploaded', function(event, data, previewId, index) {
            var response = data.response;
            if (response.status === 'OK' && response.html) {
                var replace = $(response.html.id);
                if (replace.length > 0) {
                    replace.html(response.html.content);
                    var succ =  $('#alert-upload-success'),
                        alert = $('#alert-upload-error');
                    alert.hide();
                    succ.html(defaultSuccess);
                    succ.show();
                }
            } else {
                var alert = $('#alert-upload-error');
                if (response.errorMessage !== null && response.errorMessage.length > 0) {
                    alert.html(response.errorMessage);
                } else {
                    alert.html(defaultError);
                }
                alert.show();
            }
            $fi.fileinput('reset');
            $fi.fileinput('clear');
            $fi.fileinput('refresh');
            $fi.fileinput('enable');
        });
        
    <?php echo '</script'; ?>
>
</div>
<?php }
}
