<?php
/* Smarty version 3.1.38, created on 2021-05-04 14:18:42
  from 'C:\xampp\htdocs\shop\admin\templates\bootstrap\tpl_inc\shoptemplate_detail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60913ba28377e2_36187583',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '272f9ebafee0a14d0ef1b2c4cb0e33a7931fad9f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\admin\\templates\\bootstrap\\tpl_inc\\shoptemplate_detail.tpl',
      1 => 1612177964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/option_select.tpl' => 1,
    'file:tpl_inc/option_optgroup.tpl' => 1,
    'file:snippets/colorpicker.tpl' => 1,
    'file:tpl_inc/option_number.tpl' => 1,
    'file:tpl_inc/option_radio.tpl' => 1,
    'file:tpl_inc/option_textarea.tpl' => 1,
    'file:tpl_inc/option_upload.tpl' => 1,
    'file:tpl_inc/option_generic.tpl' => 1,
  ),
),false)) {
function content_60913ba28377e2_36187583 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="shoptemplate.php" method="post" enctype="multipart/form-data" id="form_settings">
    <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

    <div id="settings" class="settings">
        <?php if ($_smarty_tpl->tpl_vars['template']->value->getType() === 'admin' || ($_smarty_tpl->tpl_vars['template']->value->getType() !== 'mobil' && $_smarty_tpl->tpl_vars['template']->value->isResponsive())) {?>
            <input type="hidden" name="eTyp" value="<?php if (!empty($_smarty_tpl->tpl_vars['template']->value->getType())) {
echo $_smarty_tpl->tpl_vars['template']->value->getType();
} else { ?>standard<?php }?>" />
        <?php } else { ?>
            <div class="card">
                <div class="card-header">
                    <div class="subheading1"><?php echo __('mobile');?>
</div>
                    <hr class="mb-n3">
                </div>
                <div class="card-body">
                    <?php if ($_smarty_tpl->tpl_vars['template']->value->getType() === 'mobil' && $_smarty_tpl->tpl_vars['template']->value->isResponsive()) {?>
                        <div class="alert alert-warning"><?php echo __('warning_responsive_mobile');?>
</div>
                    <?php }?>
                    <div class="item form-group form-row align-items-center">
                        <label class="col col-sm-4 col-form-label text-sm-right" for="eTyp"><?php echo __('standardTemplateMobil');?>
</label>
                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                            <select class="custom-select" name="eTyp" id="eTyp">
                                <option value="standard" <?php if ($_smarty_tpl->tpl_vars['template']->value->getType() === 'standard') {?>selected="selected"<?php }?>>
                                    <?php echo __('optimizeBrowser');?>

                                </option>
                                <option value="mobil" <?php if ($_smarty_tpl->tpl_vars['template']->value->getType() === 'mobil') {?>selected="selected"<?php }?>>
                                    <?php echo __('optimizeMobile');?>

                                </option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        <?php }?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['templateConfig']->value, 'section');
$_smarty_tpl->tpl_vars['section']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->do_else = false;
?>
            <div class="card">
                <div class="card-header">
                    <div class="subheading1"><?php echo __($_smarty_tpl->tpl_vars['section']->value->name);?>
</div>
                    <hr class="mb-n3">
                </div>
                <div class="card-body">
                    <div class="row">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section']->value->settings, 'setting');
$_smarty_tpl->tpl_vars['setting']->iteration = 0;
$_smarty_tpl->tpl_vars['setting']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['setting']->value) {
$_smarty_tpl->tpl_vars['setting']->do_else = false;
$_smarty_tpl->tpl_vars['setting']->iteration++;
$__foreach_setting_1_saved = $_smarty_tpl->tpl_vars['setting'];
?>
                            <?php if ($_smarty_tpl->tpl_vars['setting']->value->key === 'theme_default' && (isset($_smarty_tpl->tpl_vars['themePreviews']->value)) && $_smarty_tpl->tpl_vars['themePreviews']->value !== null) {?>
                                <div class="col-sm-8 ml-auto">
                                    <div class="item form-group form-row align-items-center" id="theme-preview-wrap" style="display: none;">
                                        <span class="input-group-addon"><strong><?php echo __('preview');?>
</strong></span>
                                        <img id="theme-preview" alt="" />
                                    </div>
                                    <?php echo '<script'; ?>
 type="text/javascript">
                                        var previewJSON = <?php echo $_smarty_tpl->tpl_vars['themePreviewsJSON']->value;?>
;
                                        
                                        setPreviewImage = function () {
                                            var currentTheme = $('#theme-theme_default').val(),
                                                previewImage = $('#theme-preview'),
                                                previewImageWrap = $('#theme-preview-wrap');
                                            if (typeof previewJSON[currentTheme] !== 'undefined') {
                                                previewImage.attr('src', previewJSON[currentTheme]);
                                                previewImageWrap.show();
                                            } else {
                                                previewImageWrap.hide();
                                            }
                                        };
                                        $(document).ready(function () {
                                            setPreviewImage();
                                            $('#theme-theme_default').on('change', function () {
                                                setPreviewImage();
                                            });
                                        });
                                        
                                    <?php echo '</script'; ?>
>
                                </div>
                            <?php }?>
                            <div class="col-xs-12 col-md-12">
                                <div class="item form-group form-row align-items-center">
                                    <?php if ($_smarty_tpl->tpl_vars['setting']->value->isEditable) {?>
                                        <label class="col col-sm-4 col-form-label text-sm-right" for="<?php echo $_smarty_tpl->tpl_vars['setting']->value->elementID;?>
"><?php echo __($_smarty_tpl->tpl_vars['setting']->value->name);?>
:</label>
                                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                                            <?php if ($_smarty_tpl->tpl_vars['setting']->value->cType === 'select') {?>
                                                <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/option_select.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('setting'=>$_smarty_tpl->tpl_vars['setting']->value,'section'=>$_smarty_tpl->tpl_vars['section']->value), 0, true);
?>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['setting']->value->cType === 'optgroup') {?>
                                                <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/option_optgroup.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('setting'=>$_smarty_tpl->tpl_vars['setting']->value,'section'=>$_smarty_tpl->tpl_vars['section']->value), 0, true);
?>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['setting']->value->cType === 'colorpicker') {?>
                                                <?php $_smarty_tpl->_subTemplateRender('file:snippets/colorpicker.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cpID'=>((string)$_smarty_tpl->tpl_vars['setting']->value->elementID),'cpName'=>((string)$_smarty_tpl->tpl_vars['setting']->value->elementID),'cpValue'=>$_smarty_tpl->tpl_vars['setting']->value->value), 0, true);
?>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['setting']->value->cType === 'number') {?>
                                                <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/option_number.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('setting'=>$_smarty_tpl->tpl_vars['setting']->value,'section'=>$_smarty_tpl->tpl_vars['section']->value), 0, true);
?>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['setting']->value->cType === 'radio') {?>
                                                <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/option_radio.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('setting'=>$_smarty_tpl->tpl_vars['setting']->value,'section'=>$_smarty_tpl->tpl_vars['section']->value), 0, true);
?>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['setting']->value->cType === 'textarea') {?>
                                                <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/option_textarea.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('setting'=>$_smarty_tpl->tpl_vars['setting']->value,'section'=>$_smarty_tpl->tpl_vars['section']->value), 0, true);
?>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['setting']->value->cType === 'upload' && (isset($_smarty_tpl->tpl_vars['setting']->value->rawAttributes['target']))) {?>
                                                <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/option_upload.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('setting'=>$_smarty_tpl->tpl_vars['setting']->value,'section'=>$_smarty_tpl->tpl_vars['section']->value,'iteration'=>$_smarty_tpl->tpl_vars['setting']->iteration), 0, true);
?>
                                            <?php } else { ?>
                                                <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/option_generic.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('setting'=>$_smarty_tpl->tpl_vars['setting']->value,'section'=>$_smarty_tpl->tpl_vars['section']->value,'iteration'=>$_smarty_tpl->tpl_vars['setting']->iteration), 0, true);
?>
                                            <?php }?>
                                        </div>
                                    <?php } else { ?>
                                        <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['setting']->value->elementID;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['setting']->value->value, ENT_QUOTES, 'utf-8', true);?>
" />
                                    <?php }?>
                                </div>
                            </div>
                        <?php
$_smarty_tpl->tpl_vars['setting'] = $__foreach_setting_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>                </div>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <div class="save-wrapper">
            <div class="row">
                <div class="ml-auto col-sm-6 col-xl-auto">
                    <a class="btn btn-outline-primary btn-block" href="shoptemplate.php">
                        <?php echo __('cancelWithIcon');?>

                    </a>
                </div>
                <div class="col-sm-6 col-xl-auto">
                    <?php if ((isset($_GET['activate']))) {?>
                        <input type="hidden" name="activate" value="1" />
                        <input type="hidden" name="action" value="activate" />
                    <?php } else { ?>
                        <input type="hidden" name="action" value="save-config" />
                    <?php }?>
                    <input type="hidden" name="type" value="settings" />
                    <input type="hidden" name="dir" value="<?php echo $_smarty_tpl->tpl_vars['template']->value->getDir();?>
" />
                    <input type="hidden" name="admin" value="0" />
                    <button type="submit" class="btn btn-primary btn-block">
                        <?php if ((isset($_GET['activate']))) {?><i class="fa fa-share"></i> <?php echo __('activateTemplate');
} else {
echo __('saveWithIcon');
}?>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
<?php }
}
