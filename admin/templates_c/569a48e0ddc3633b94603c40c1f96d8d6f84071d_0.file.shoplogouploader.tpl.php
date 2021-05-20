<?php
/* Smarty version 3.1.38, created on 2021-05-04 12:17:38
  from 'C:\xampp\htdocs\shop\admin\templates\bootstrap\shoplogouploader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60911f422a11e6_72378679',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '569a48e0ddc3633b94603c40c1f96d8d6f84071d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\admin\\templates\\bootstrap\\shoplogouploader.tpl',
      1 => 1612177964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/header.tpl' => 1,
    'file:tpl_inc/seite_header.tpl' => 1,
    'file:tpl_inc/fileupload.tpl' => 1,
    'file:tpl_inc/footer.tpl' => 1,
  ),
),false)) {
function content_60911f422a11e6_72378679 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:tpl_inc/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:tpl_inc/seite_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cTitel'=>__('shoplogouploader'),'cBeschreibung'=>__('shoplogouploaderDesc'),'cDokuURL'=>__('shoplogouploaderURL')), 0, false);
?>
<div id="content">
    <form name="uploader" method="post" action="shoplogouploader.php" enctype="multipart/form-data">
        <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

        <div class="card">
            <div class="card-header">
                <span class="subheading1"><?php echo __('yourLogo');?>
</span>
            </div>
            <div class="card-body">
                <input type="hidden" name="upload" value="1" />
                <?php $_smarty_tpl->_assignInScope('allowedExtensions', array('jpg','jpeg','jpe','gif','png','bmp','svg','webp'));?>
                <div class="col-xs-12">
                    <?php ob_start();
echo __('successLogoUpload');
$_prefixVariable1=ob_get_clean();
ob_start();
echo __('errorLogoUpload',implode(', ',$_smarty_tpl->tpl_vars['allowedExtensions']->value),(defined('PFAD_SHOPLOGO') ? constant('PFAD_SHOPLOGO') : null));
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:tpl_inc/fileupload.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('fileAllowedExtensions'=>$_smarty_tpl->tpl_vars['allowedExtensions']->value,'fileID'=>'shoplogo-upload','fileName'=>'shopLogo','fileUploadUrl'=>((string)$_smarty_tpl->tpl_vars['adminURL']->value)."/shoplogouploader.php?token=".((string)$_SESSION['jtl_token']),'fileDeleteUrl'=>((string)$_smarty_tpl->tpl_vars['adminURL']->value)."/shoplogouploader.php?token=".((string)$_SESSION['jtl_token']),'fileBrowseClear'=>true,'fileSuccessMsg'=>$_prefixVariable1,'fileErrorMsg'=>$_prefixVariable2,'fileInitialPreview'=>"[
                                '<img src=\"".((string)$_smarty_tpl->tpl_vars['ShopLogoURL']->value)."\" class=\"file-preview-image img-fluid\" alt=\"Logo\" title=\"Logo\" />'
                            ]",'fileInitialPreviewConfig'=>"[
                                "."{
                                    "."url: '".((string)$_smarty_tpl->tpl_vars['adminURL']->value)."/shoplogouploader.php',
                                    extra: "."{
                                    "."action: 'deleteLogo',
                                    logo: '".((string)$_smarty_tpl->tpl_vars['ShopLogo']->value)."',
                                    jtl_token: '".((string)$_SESSION['jtl_token'])."'
                                    }
                                }
                            ]"), 0, false);
?>
                </div>
            </div>
        </div>
    </form>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
