<?php
/* Smarty version 3.1.38, created on 2021-05-18 11:41:18
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\snippets\uploads.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a38bbe96a7b8_26280327',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b440e518e1681508d1ffc1f41d7a366ea767e42' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\snippets\\uploads.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a38bbe96a7b8_26280327 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_154060647560a38bbe85ad53_51452158', 'snippets-uploads');
?>

<?php }
/* {block 'snippets-uploads-subheading-product'} */
class Block_82818776860a38bbe8661a4_94011087 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div class="h3 section-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'uploadHeadline'),$_smarty_tpl ) );?>
</div>
            <?php
}
}
/* {/block 'snippets-uploads-subheading-product'} */
/* {block 'snippets-uploads-alert-product'} */
class Block_18489431860a38bbe8681a9_08949701 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_block_plugin55 = isset($_smarty_tpl->smarty->registered_plugins['block']['alert'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['alert'][0][0] : null;
if (!is_callable(array($_block_plugin55, 'render'))) {
throw new SmartyException('block tag \'alert\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('alert', array('variant'=>"info"));
$_block_repeat=true;
echo $_block_plugin55->render(array('variant'=>"info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'maxUploadSize'),$_smarty_tpl ) );?>
: <strong><?php echo $_smarty_tpl->tpl_vars['cMaxUploadSize']->value;?>
</strong>
                <?php $_block_repeat=false;
echo $_block_plugin55->render(array('variant'=>"info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
}
}
/* {/block 'snippets-uploads-alert-product'} */
/* {block 'snippets-uploads-scheme-product-name'} */
class Block_188349005060a38bbe8a1da9_43334373 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php $_block_plugin57 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin57, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12));
$_block_repeat=true;
echo $_block_plugin57->render(array('cols'=>12), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['oUploadSchema']->value->cName)) {?>
                                        <div class="h6 upload_title"><?php echo $_smarty_tpl->tpl_vars['oUploadSchema']->value->cName;?>
</div>
                                    <?php }?>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['oUploadSchema']->value->cBeschreibung)) {?>
                                        <p class="upload_desc"><?php echo $_smarty_tpl->tpl_vars['oUploadSchema']->value->cBeschreibung;?>
</p>
                                    <?php }?>
                                <?php $_block_repeat=false;
echo $_block_plugin57->render(array('cols'=>12), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php
}
}
/* {/block 'snippets-uploads-scheme-product-name'} */
/* {block 'snippets-uploads-scheme-product-input'} */
class Block_65839742860a38bbe8ae092_10693796 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <div class="text-center-util
                                        <?php if ((isset($_GET['fillOut'])) && $_GET['fillOut'] == 12 && ($_smarty_tpl->tpl_vars['oUploadSchema']->value->nPflicht && !$_smarty_tpl->tpl_vars['oUploadSchema']->value->bVorhanden)) {?> upload-error<?php }?>"
                                         id="upload-<?php echo $_smarty_tpl->tpl_vars['oUploadSchema']->index;?>
">
                                        <input id="fileinput<?php echo $_smarty_tpl->tpl_vars['oUploadSchema']->index;?>
"
                                               type="file" class="file-upload file-loading" />
                                        <div id="kv-error-<?php echo $_smarty_tpl->tpl_vars['oUploadSchema']->index;?>
"
                                             style="margin-top:10px; display:none;"></div>
                                    </div>
                                <?php
}
}
/* {/block 'snippets-uploads-scheme-product-input'} */
/* {block 'snippets-uploads-scheme-product-script'} */
class Block_64298782260a38bbe8b7651_74461780 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\includes\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

                                    <?php $_block_plugin59 = isset($_smarty_tpl->smarty->registered_plugins['block']['inline_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['inline_script'][0][0] : null;
if (!is_callable(array($_block_plugin59, 'inlineScript'))) {
throw new SmartyException('block tag \'inline_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo $_block_plugin59->inlineScript(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
                                        var clientUploadErrorIsActive = false;
                                        $(function () {
                                            var $el =  $('#fileinput<?php echo $_smarty_tpl->tpl_vars['oUploadSchema']->index;?>
');
                                            $el.fileinput({
                                                uploadUrl:             '<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo (defined('PFAD_UPLOAD_CALLBACK') ? constant('PFAD_UPLOAD_CALLBACK') : null);?>
',
                                                uploadAsync:           false,
                                                showPreview:           true,
                                                showUpload:            false,
                                                showRemove:            false,
                                                browseClass:           'btn btn-light',
                                                fileActionSettings:    {
                                                    showZoom: false,
                                                    showRemove: false
                                                },
                                                allowedFileExtensions: [<?php echo (smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['oUploadSchema']->value->cDateiListe,'*.','\''),';','\',')).('\'');?>
],
                                                language:              '<?php echo $_smarty_tpl->tpl_vars['uploaderLang']->value;?>
',
                                                theme:                 'fas',
                                                browseOnZoneClick:     true,
                                                uploadExtraData:       {
                                                    sid:        "<?php echo $_smarty_tpl->tpl_vars['cSessionID']->value;?>
",
                                                    kUploadSchema:"<?php echo $_smarty_tpl->tpl_vars['oUploadSchema']->value->kUploadSchema;?>
",
                                                    jtl_token:  "<?php echo $_SESSION['jtl_token'];?>
",
                                                    uniquename: "<?php echo $_smarty_tpl->tpl_vars['oUploadSchema']->value->cUnique;?>
",
                                                    uploader:   "4.00",
                                                    prodID:     "<?php echo $_smarty_tpl->tpl_vars['oUploadSchema']->value->prodID;?>
",
                                                    cname:      "<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['Artikel']->value->cName," ","_");?>
_<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['oUploadSchema']->value->cName," ","_");?>
"
                                                    <?php if (!empty($_smarty_tpl->tpl_vars['oUploadSchema']->value->WarenkorbPosEigenschaftArr)) {?>,
                                                    variation:  "<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oUploadSchema']->value->WarenkorbPosEigenschaftArr, 'Variation', false, NULL, 'variationen', array (
));
$_smarty_tpl->tpl_vars['Variation']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Variation']->value) {
$_smarty_tpl->tpl_vars['Variation']->do_else = false;
?>_<?php echo smarty_modifier_replace(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trans' ][ 0 ], array( $_smarty_tpl->tpl_vars['Variation']->value->cEigenschaftWertName ))," ","_");
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>"
                                                    <?php }?>
                                                },
                                                maxFileSize:           <?php echo $_smarty_tpl->tpl_vars['nMaxUploadSize']->value/1024;?>
,
                                                elErrorContainer:      false,
                                                maxFilesNum:           1
                                            }).on("filebrowse", function(event, files) {
                                                clientUploadErrorIsActive = false;
                                                $el.fileinput('clear');
                                            }).on("filebatchselected", function(event, files) {
                                                $el.fileinput("upload");
                                            }).on('filebatchuploadsuccess', function(event, data) {
                                                clientUploadErrorIsActive = false;
                                                let msgField = $('#queue<?php echo $_smarty_tpl->tpl_vars['oUploadSchema']->index;?>
 .current-upload'),
                                                    uploadMsgField = $('.uploadifyMsg');
                                                msgField.removeClass('text-danger').addClass('text-success');
                                                if (typeof data.response !== 'undefined' && typeof data.response.cName !== 'undefined') {
                                                    msgField.removeClass('text-danger').addClass('text-success');
                                                    msgField.html('<i class="fas fa-check" aria-hidden="true"></i>' + data.response.cName + ' (' + data.response.cKB + ' KB)');
                                                } else {
                                                    msgField.removeClass('text-success').addClass('text-danger');
                                                    msgField.html('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'uploadError'),$_smarty_tpl ) );?>
');
                                                    msgField.removeClass('text-success').addClass('text-danger');
                                                    $el.fileinput('clear');
                                                }
                                                $('#msgWarning').hide();
                                                uploadMsgField.find('.alert-danger').hide();
                                                $('#buy-form').find('.upload-error').removeClass('upload-error');
                                            }).on('filebatchuploaderror', function(event, data, msg) {
                                                if(clientUploadErrorIsActive === false){
                                                    let msgField = $('#queue<?php echo $_smarty_tpl->tpl_vars['oUploadSchema']->index;?>
 .current-upload');
                                                    let message  = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'uploadError'),$_smarty_tpl ) );?>
';
                                                    let status;
                                                    try{
                                                        let response =JSON.parse(msg);
                                                        status = response.status;
                                                    }catch(e){
                                                        status = 'response_error';
                                                    }
                                                    switch(status){
                                                        case 'reached_limit_per_hour':
                                                            message = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'uploadErrorReachedLimitPerHour'),$_smarty_tpl ) );?>
';
                                                            break;
                                                        case 'filetype_forbidden':
                                                            message = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'uploadErrorFiletypeForbidden'),$_smarty_tpl ) );?>
';
                                                            break;
                                                        case 'extension_not_listed':
                                                            message = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'uploadErrorExtensionNotListed'),$_smarty_tpl ) );?>
';
                                                            break;
                                                    }
                                                    msgField.html(message);
                                                    msgField.removeClass('text-success').addClass('text-danger');
                                                    $el.fileinput('clear');
                                                }
                                            }).on('fileuploaderror', function(event, data, msg) {
                                                clientUploadErrorIsActive = true;
                                                let msgField = $('#queue<?php echo $_smarty_tpl->tpl_vars['oUploadSchema']->index;?>
 .current-upload');
                                                msgField.html(msg);
                                                msgField.removeClass('text-success').addClass('text-danger');
                                                $el.fileinput('clear');
                                                $('#upload-<?php echo $_smarty_tpl->tpl_vars['oUploadSchema']->index;?>
 .fileinput-upload').addClass('disabled');
                                            }).on('fileloaded', function() {
                                                $('#upload-<?php echo $_smarty_tpl->tpl_vars['oUploadSchema']->index;?>
 .fileinput-upload').removeClass('disabled');
                                            });
                                        });
                                    <?php echo '</script'; ?>
><?php $_block_repeat=false;
echo $_block_plugin59->inlineScript(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php
}
}
/* {/block 'snippets-uploads-scheme-product-script'} */
/* {block 'snippets-uploads-scheme-product-data-main'} */
class Block_2278091460a38bbe8ab135_47196484 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php $_block_plugin58 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin58, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12));
$_block_repeat=true;
echo $_block_plugin58->render(array('cols'=>12), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_65839742860a38bbe8ae092_10693796', 'snippets-uploads-scheme-product-input', $this->tplIndex);
?>

                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_64298782260a38bbe8b7651_74461780', 'snippets-uploads-scheme-product-script', $this->tplIndex);
?>

                            <?php $_block_repeat=false;
echo $_block_plugin58->render(array('cols'=>12), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php
}
}
/* {/block 'snippets-uploads-scheme-product-data-main'} */
/* {block 'snippets-uploads-scheme-product-filedata'} */
class Block_12317037160a38bbe8f3249_55185053 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php $_block_plugin60 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin60, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'class'=>"word-break text-right-util"));
$_block_repeat=true;
echo $_block_plugin60->render(array('cols'=>12,'class'=>"word-break text-right-util"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <div id="queue<?php echo $_smarty_tpl->tpl_vars['oUploadSchema']->index;?>
" style="margin-bottom: 15px;" class="uploadifyMsg">
                                    <span class="current-upload small text-success">
                                        <?php if ($_smarty_tpl->tpl_vars['oUploadSchema']->value->bVorhanden) {?>
                                            <i class="fas fa-check" aria-hidden="true"></i>
                                            <?php echo $_smarty_tpl->tpl_vars['oUploadSchema']->value->cDateiname;?>
 (<?php echo $_smarty_tpl->tpl_vars['oUploadSchema']->value->cDateigroesse;?>
)
                                        <?php }?>
                                    </span>
                                </div>
                            <?php $_block_repeat=false;
echo $_block_plugin60->render(array('cols'=>12,'class'=>"word-break text-right-util"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php
}
}
/* {/block 'snippets-uploads-scheme-product-filedata'} */
/* {block 'snippets-uploads-schemes-product'} */
class Block_188545406160a38bbe89a5a6_43624299 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oUploadSchema_arr']->value, 'oUploadSchema');
$_smarty_tpl->tpl_vars['oUploadSchema']->index = -1;
$_smarty_tpl->tpl_vars['oUploadSchema']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oUploadSchema']->value) {
$_smarty_tpl->tpl_vars['oUploadSchema']->do_else = false;
$_smarty_tpl->tpl_vars['oUploadSchema']->index++;
$__foreach_oUploadSchema_22_saved = $_smarty_tpl->tpl_vars['oUploadSchema'];
?>
                    <?php $_block_plugin56 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin56, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('class'=>"upload-scheme-product"));
$_block_repeat=true;
echo $_block_plugin56->render(array('class'=>"upload-scheme-product"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php if (!empty($_smarty_tpl->tpl_vars['oUploadSchema']->value->cName) || !empty($_smarty_tpl->tpl_vars['oUploadSchema']->value->cBeschreibung)) {?>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_188349005060a38bbe8a1da9_43334373', 'snippets-uploads-scheme-product-name', $this->tplIndex);
?>

                        <?php }?>

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2278091460a38bbe8ab135_47196484', 'snippets-uploads-scheme-product-data-main', $this->tplIndex);
?>

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12317037160a38bbe8f3249_55185053', 'snippets-uploads-scheme-product-filedata', $this->tplIndex);
?>

                    <?php $_block_repeat=false;
echo $_block_plugin56->render(array('class'=>"upload-scheme-product"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php
$_smarty_tpl->tpl_vars['oUploadSchema'] = $__foreach_oUploadSchema_22_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php
}
}
/* {/block 'snippets-uploads-schemes-product'} */
/* {block 'snippets-uploads-subheading'} */
class Block_104435444660a38bbe8fc822_54175599 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div class="h3 section-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'uploadHeadline'),$_smarty_tpl ) );?>
</div>
                <hr class="upload-scheme-cart-hr-before">
            <?php
}
}
/* {/block 'snippets-uploads-subheading'} */
/* {block 'snippets-uploads-scheme-name'} */
class Block_213994236960a38bbe900513_19216058 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <p>
                                <span class="upload-scheme-cart-name">
                                    <?php echo $_smarty_tpl->tpl_vars['oUploadSchema']->value->cName;?>

                                    <?php if (!empty($_smarty_tpl->tpl_vars['oUploadSchema']->value->WarenkorbPosEigenschaftArr)) {?>
                                        <small>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oUploadSchema']->value->WarenkorbPosEigenschaftArr, 'Variation', false, NULL, 'variationen', array (
));
$_smarty_tpl->tpl_vars['Variation']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Variation']->value) {
$_smarty_tpl->tpl_vars['Variation']->do_else = false;
?>
                                                - <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trans' ][ 0 ], array( $_smarty_tpl->tpl_vars['Variation']->value->cEigenschaftName ));?>
: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trans' ][ 0 ], array( $_smarty_tpl->tpl_vars['Variation']->value->cEigenschaftWertName ));?>

                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </small>
                                    <?php }?>
                                </span>
                            </p>
                        <?php
}
}
/* {/block 'snippets-uploads-scheme-name'} */
/* {block 'snippets-uploads-scheme-upload-name-desc'} */
class Block_34589726960a38bbe9135a0_41733357 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <?php $_block_plugin62 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin62, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'md'=>4));
$_block_repeat=true;
echo $_block_plugin62->render(array('cols'=>12,'md'=>4), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                <?php if (!empty($_smarty_tpl->tpl_vars['oUpload']->value->cName)) {?>
                                                    <p class="upload_title"><?php echo $_smarty_tpl->tpl_vars['oUpload']->value->cName;?>
</p>
                                                <?php }?>
                                                <?php if (!empty($_smarty_tpl->tpl_vars['oUpload']->value->cBeschreibung)) {?>
                                                    <p class="upload_desc"><?php echo $_smarty_tpl->tpl_vars['oUpload']->value->cBeschreibung;?>
</p>
                                                <?php }?>
                                            <?php $_block_repeat=false;
echo $_block_plugin62->render(array('cols'=>12,'md'=>4), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        <?php
}
}
/* {/block 'snippets-uploads-scheme-upload-name-desc'} */
/* {block 'snippets-uploads-scheme-upload-filedata'} */
class Block_106820320960a38bbe920a11_55771231 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                <div id="queue<?php echo $_smarty_tpl->tpl_vars['oUploadSchema']->index;
echo $_smarty_tpl->tpl_vars['oUpload']->index;?>
" style="margin-bottom: 15px;" class="uploadifyMsg">
                                                        <span class="current-upload small text-success">
                                                            <?php if ($_smarty_tpl->tpl_vars['oUpload']->value->bVorhanden) {?>
                                                                <i class="fa fa-check" aria-hidden="true"></i>
                                                                <?php echo $_smarty_tpl->tpl_vars['oUpload']->value->cDateiname;?>
 (<?php echo $_smarty_tpl->tpl_vars['oUpload']->value->cDateigroesse;?>
)
                                                            <?php }?>
                                                        </span>
                                                </div>
                                                <div class="text-center-util <?php if ((isset($_GET['fillOut'])) && $_GET['fillOut'] == 12 && ($_smarty_tpl->tpl_vars['oUpload']->value->nPflicht && !$_smarty_tpl->tpl_vars['oUpload']->value->bVorhanden)) {?> upload-error<?php }?>"
                                                     id="upload-<?php echo $_smarty_tpl->tpl_vars['oUploadSchema']->index;
echo $_smarty_tpl->tpl_vars['oUpload']->index;?>
">
                                                    <input id="fileinput<?php echo $_smarty_tpl->tpl_vars['oUploadSchema']->index;
echo $_smarty_tpl->tpl_vars['oUpload']->index;?>
"
                                                           type="file" class="file-upload file-loading"/>
                                                    <div id="kv-error-<?php echo $_smarty_tpl->tpl_vars['oUploadSchema']->index;
echo $_smarty_tpl->tpl_vars['oUpload']->index;?>
"
                                                         style="margin-top:10px; display:none;"></div>
                                                </div>
                                            <?php
}
}
/* {/block 'snippets-uploads-scheme-upload-filedata'} */
/* {block 'snippets-uploads-scheme-script'} */
class Block_71172418660a38bbe932581_34204523 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\includes\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

                                                <?php $_block_plugin64 = isset($_smarty_tpl->smarty->registered_plugins['block']['inline_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['inline_script'][0][0] : null;
if (!is_callable(array($_block_plugin64, 'inlineScript'))) {
throw new SmartyException('block tag \'inline_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo $_block_plugin64->inlineScript(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
                                                    var clientUploadErrorIsActive = false;
                                                    $(function () {
                                                        var $el = $('#fileinput<?php echo $_smarty_tpl->tpl_vars['oUploadSchema']->index;
echo $_smarty_tpl->tpl_vars['oUpload']->index;?>
');
                                                        $el.fileinput({
                                                            uploadUrl:             '<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo (defined('PFAD_UPLOAD_CALLBACK') ? constant('PFAD_UPLOAD_CALLBACK') : null);?>
',
                                                            uploadAsync:           false,
                                                            showPreview:           false,
                                                            showUpload:            false,
                                                            showRemove:            false,
                                                            required:              true,
                                                            browseClass:           'btn btn-light',
                                                            fileActionSettings:    {
                                                                showZoom:   false,
                                                                showRemove: false
                                                            },
                                                            allowedFileExtensions: [<?php echo (smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['oUpload']->value->cDateiListe,'*.','\''),';','\',')).('\'');?>
],
                                                            language:              '<?php echo $_smarty_tpl->tpl_vars['uploaderLang']->value;?>
',
                                                            theme:                 'fas',
                                                            browseOnZoneClick:     true,
                                                            uploadExtraData:       {
                                                                sid:        "<?php echo $_smarty_tpl->tpl_vars['cSessionID']->value;?>
",
                                                                jtl_token:  "<?php echo $_SESSION['jtl_token'];?>
",
                                                                uniquename: "<?php echo $_smarty_tpl->tpl_vars['oUpload']->value->cUnique;?>
",
                                                                uploader:   "4.00",
                                                                kUploadSchema:"<?php echo $_smarty_tpl->tpl_vars['oUpload']->value->kUploadSchema;?>
",
                                                                prodID:     "<?php echo $_smarty_tpl->tpl_vars['oUpload']->value->prodID;?>
",
                                                                cname:      "<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['oUpload']->value->cName," ","_");?>
"
                                                                <?php if (!empty($_smarty_tpl->tpl_vars['oUploadSchema']->value->WarenkorbPosEigenschaftArr)) {?>,
                                                                variation: "<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oUploadSchema']->value->WarenkorbPosEigenschaftArr, 'Variation', false, NULL, 'variationen', array (
));
$_smarty_tpl->tpl_vars['Variation']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Variation']->value) {
$_smarty_tpl->tpl_vars['Variation']->do_else = false;
?>_<?php echo smarty_modifier_replace(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trans' ][ 0 ], array( $_smarty_tpl->tpl_vars['Variation']->value->cEigenschaftWertName ))," ","_");
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>"
                                                                <?php }?>
                                                            },
                                                            maxFileSize:           <?php echo $_smarty_tpl->tpl_vars['nMaxUploadSize']->value/1024;?>
,
                                                            elErrorContainer:      '#kv-error-<?php echo $_smarty_tpl->tpl_vars['oUploadSchema']->index;
echo $_smarty_tpl->tpl_vars['oUpload']->index;?>
',
                                                            maxFilesNum:           1
                                                        }).on("filebrowse", function (event, files) {
                                                            clientUploadErrorIsActive = false;
                                                            $el.fileinput('clear');
                                                        }).on("filebatchselected", function (event, files) {
                                                            $el.fileinput("upload");
                                                        }).on('filebatchuploadsuccess', function (event, data) {
                                                            var msgField       = $('#queue<?php echo $_smarty_tpl->tpl_vars['oUploadSchema']->index;
echo $_smarty_tpl->tpl_vars['oUpload']->index;?>
 .current-upload'),
                                                                uploadMsgField = $('.uploadifyMsg');
                                                            msgField.removeClass('text-danger').addClass('text-success');
                                                            if (typeof data.response !== 'undefined' && typeof data.response.cName !== 'undefined') {
                                                                msgField.removeClass('text-danger').addClass('text-success');
                                                                msgField.html('<i class="fas fa-check" aria-hidden="true"></i>' + data.response.cName + ' (' + data.response.cKB + ' KB)');
                                                            } else {
                                                                msgField.removeClass('text-success').addClass('text-danger');
                                                                msgField.html('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'uploadError'),$_smarty_tpl ) );?>
');
                                                                msgField.removeClass('text-success').addClass('text-danger');
                                                                $el.fileinput('clear');
                                                            }
                                                            $('#msgWarning').hide();
                                                            uploadMsgField.find('.alert-danger').hide();
                                                            $('#buy-form').find('.upload-error').removeClass('upload-error');

                                                        }).on('fileuploaderror', function () {
                                                            $('#upload-<?php echo $_smarty_tpl->tpl_vars['oUploadSchema']->index;
echo $_smarty_tpl->tpl_vars['oUpload']->index;?>
 .fileinput-upload').addClass('disabled');
                                                            clientUploadErrorIsActive = true;
                                                            let msgField = $('#queue<?php echo $_smarty_tpl->tpl_vars['oUploadSchema']->index;
echo $_smarty_tpl->tpl_vars['oUpload']->index;?>
 .current-upload');
                                                            msgField.html(msg);
                                                            msgField.removeClass('text-success').addClass('text-danger');
                                                            $el.fileinput('clear');
                                                            $('#upload-<?php echo $_smarty_tpl->tpl_vars['oUploadSchema']->index;
echo $_smarty_tpl->tpl_vars['oUpload']->index;?>
 .fileinput-upload').addClass('disabled');

                                                        }).on('filebatchuploaderror', function(event, data, msg) {
                                                            if(clientUploadErrorIsActive === false){
                                                                let msgField = $('#queue<?php echo $_smarty_tpl->tpl_vars['oUploadSchema']->index;
echo $_smarty_tpl->tpl_vars['oUpload']->index;?>
 .current-upload');;
                                                                let message  = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'uploadError'),$_smarty_tpl ) );?>
';
                                                                let status;
                                                                try{
                                                                    let response =JSON.parse(msg);
                                                                    status = response.status;
                                                                }catch(e){
                                                                    status = 'response_error';
                                                                }

                                                                switch(status){
                                                                    case 'reached_limit_per_hour':
                                                                        message = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'uploadErrorReachedLimitPerHour'),$_smarty_tpl ) );?>
';
                                                                        break;
                                                                    case 'filetype_forbidden':
                                                                        message = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'uploadErrorFiletypeForbidden'),$_smarty_tpl ) );?>
';
                                                                        break;
                                                                    case 'extension_not_listed':
                                                                        message = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'uploadErrorExtensionNotListed'),$_smarty_tpl ) );?>
';
                                                                        break;
                                                                }
                                                                msgField.html(message);
                                                                msgField.removeClass('text-success').addClass('text-danger');
                                                                $el.fileinput('clear');
                                                            }
                                                        }).on('fileloaded', function () {
                                                            $('#upload-<?php echo $_smarty_tpl->tpl_vars['oUploadSchema']->index;
echo $_smarty_tpl->tpl_vars['oUpload']->index;?>
 .fileinput-upload').removeClass('disabled');
                                                        });
                                                    });
                                                <?php echo '</script'; ?>
><?php $_block_repeat=false;
echo $_block_plugin64->inlineScript(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            <?php
}
}
/* {/block 'snippets-uploads-scheme-script'} */
/* {block 'snippets-uploads-scheme-upload-filedata-main'} */
class Block_72974600360a38bbe91e344_63747779 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <?php $_block_plugin63 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin63, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'md'=>8,'class'=>"word-break text-right-util"));
$_block_repeat=true;
echo $_block_plugin63->render(array('cols'=>12,'md'=>8,'class'=>"word-break text-right-util"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_106820320960a38bbe920a11_55771231', 'snippets-uploads-scheme-upload-filedata', $this->tplIndex);
?>

                                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_71172418660a38bbe932581_34204523', 'snippets-uploads-scheme-script', $this->tplIndex);
?>

                                        <?php $_block_repeat=false;
echo $_block_plugin63->render(array('cols'=>12,'md'=>8,'class'=>"word-break text-right-util"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    <?php
}
}
/* {/block 'snippets-uploads-scheme-upload-filedata-main'} */
/* {block 'snippets-uploads-scheme-uploads'} */
class Block_55126984360a38bbe90b4e5_18645586 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oUploadSchema']->value->oUpload_arr, 'oUpload');
$_smarty_tpl->tpl_vars['oUpload']->index = -1;
$_smarty_tpl->tpl_vars['oUpload']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oUpload']->value) {
$_smarty_tpl->tpl_vars['oUpload']->do_else = false;
$_smarty_tpl->tpl_vars['oUpload']->index++;
$__foreach_oUpload_26_saved = $_smarty_tpl->tpl_vars['oUpload'];
?>
                                <?php $_block_plugin61 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin61, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('class'=>"upload-scheme-cart-upload"));
$_block_repeat=true;
echo $_block_plugin61->render(array('class'=>"upload-scheme-cart-upload"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['oUpload']->value->cName) || !empty($_smarty_tpl->tpl_vars['oUpload']->value->cBeschreibung)) {?>
                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_34589726960a38bbe9135a0_41733357', 'snippets-uploads-scheme-upload-name-desc', $this->tplIndex);
?>

                                    <?php }?>
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_72974600360a38bbe91e344_63747779', 'snippets-uploads-scheme-upload-filedata-main', $this->tplIndex);
?>

                                <?php $_block_repeat=false;
echo $_block_plugin61->render(array('class'=>"upload-scheme-cart-upload"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php
$_smarty_tpl->tpl_vars['oUpload'] = $__foreach_oUpload_26_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php
}
}
/* {/block 'snippets-uploads-scheme-uploads'} */
/* {block 'snippets-uploads-schemes-hr'} */
class Block_18678600260a38bbe967705_95540916 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <hr class="upload-scheme-cart-hr-after">
                <?php
}
}
/* {/block 'snippets-uploads-schemes-hr'} */
/* {block 'snippets-uploads-schemes'} */
class Block_63922119960a38bbe8fe598_09712794 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oUploadSchema_arr']->value, 'oUploadSchema');
$_smarty_tpl->tpl_vars['oUploadSchema']->index = -1;
$_smarty_tpl->tpl_vars['oUploadSchema']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oUploadSchema']->value) {
$_smarty_tpl->tpl_vars['oUploadSchema']->do_else = false;
$_smarty_tpl->tpl_vars['oUploadSchema']->index++;
$__foreach_oUploadSchema_24_saved = $_smarty_tpl->tpl_vars['oUploadSchema'];
?>
                    <div class="upload-scheme-cart">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_213994236960a38bbe900513_19216058', 'snippets-uploads-scheme-name', $this->tplIndex);
?>

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_55126984360a38bbe90b4e5_18645586', 'snippets-uploads-scheme-uploads', $this->tplIndex);
?>

                    </div>
                <?php
$_smarty_tpl->tpl_vars['oUploadSchema'] = $__foreach_oUploadSchema_24_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18678600260a38bbe967705_95540916', 'snippets-uploads-schemes-hr', $this->tplIndex);
?>

            <?php
}
}
/* {/block 'snippets-uploads-schemes'} */
/* {block 'snippets-uploads'} */
class Block_154060647560a38bbe85ad53_51452158 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-uploads' => 
  array (
    0 => 'Block_154060647560a38bbe85ad53_51452158',
  ),
  'snippets-uploads-subheading-product' => 
  array (
    0 => 'Block_82818776860a38bbe8661a4_94011087',
  ),
  'snippets-uploads-alert-product' => 
  array (
    0 => 'Block_18489431860a38bbe8681a9_08949701',
  ),
  'snippets-uploads-schemes-product' => 
  array (
    0 => 'Block_188545406160a38bbe89a5a6_43624299',
  ),
  'snippets-uploads-scheme-product-name' => 
  array (
    0 => 'Block_188349005060a38bbe8a1da9_43334373',
  ),
  'snippets-uploads-scheme-product-data-main' => 
  array (
    0 => 'Block_2278091460a38bbe8ab135_47196484',
  ),
  'snippets-uploads-scheme-product-input' => 
  array (
    0 => 'Block_65839742860a38bbe8ae092_10693796',
  ),
  'snippets-uploads-scheme-product-script' => 
  array (
    0 => 'Block_64298782260a38bbe8b7651_74461780',
  ),
  'snippets-uploads-scheme-product-filedata' => 
  array (
    0 => 'Block_12317037160a38bbe8f3249_55185053',
  ),
  'snippets-uploads-subheading' => 
  array (
    0 => 'Block_104435444660a38bbe8fc822_54175599',
  ),
  'snippets-uploads-schemes' => 
  array (
    0 => 'Block_63922119960a38bbe8fe598_09712794',
  ),
  'snippets-uploads-scheme-name' => 
  array (
    0 => 'Block_213994236960a38bbe900513_19216058',
  ),
  'snippets-uploads-scheme-uploads' => 
  array (
    0 => 'Block_55126984360a38bbe90b4e5_18645586',
  ),
  'snippets-uploads-scheme-upload-name-desc' => 
  array (
    0 => 'Block_34589726960a38bbe9135a0_41733357',
  ),
  'snippets-uploads-scheme-upload-filedata-main' => 
  array (
    0 => 'Block_72974600360a38bbe91e344_63747779',
  ),
  'snippets-uploads-scheme-upload-filedata' => 
  array (
    0 => 'Block_106820320960a38bbe920a11_55771231',
  ),
  'snippets-uploads-scheme-script' => 
  array (
    0 => 'Block_71172418660a38bbe932581_34204523',
  ),
  'snippets-uploads-schemes-hr' => 
  array (
    0 => 'Block_18678600260a38bbe967705_95540916',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (!empty($_smarty_tpl->tpl_vars['oUploadSchema_arr']->value)) {?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getUploaderLang'][0], array( array('iso'=>(($tmp = $_SESSION['currentLanguage']->cISO639 ?? null)===null||$tmp==='' ? '' : $tmp),'assign'=>'uploaderLang'),$_smarty_tpl ) );?>

        <?php if ($_smarty_tpl->tpl_vars['tplscope']->value === 'product' && !empty($_smarty_tpl->tpl_vars['Artikel']->value) && !($_smarty_tpl->tpl_vars['Artikel']->value->nIstVater || $_smarty_tpl->tpl_vars['Artikel']->value->kVaterArtikel > 0 || $_smarty_tpl->tpl_vars['Artikel']->value->isSimpleVariation || $_smarty_tpl->tpl_vars['Artikel']->value->bHasKonfig)) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_82818776860a38bbe8661a4_94011087', 'snippets-uploads-subheading-product', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18489431860a38bbe8681a9_08949701', 'snippets-uploads-alert-product', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_188545406160a38bbe89a5a6_43624299', 'snippets-uploads-schemes-product', $this->tplIndex);
?>

        <?php } elseif ($_smarty_tpl->tpl_vars['tplscope']->value === 'basket') {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_104435444660a38bbe8fc822_54175599', 'snippets-uploads-subheading', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_63922119960a38bbe8fe598_09712794', 'snippets-uploads-schemes', $this->tplIndex);
?>

        <?php }?>
    <?php }
}
}
/* {/block 'snippets-uploads'} */
}
