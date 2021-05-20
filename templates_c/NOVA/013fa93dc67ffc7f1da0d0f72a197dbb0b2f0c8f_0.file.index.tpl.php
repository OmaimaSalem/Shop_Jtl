<?php
/* Smarty version 3.1.38, created on 2021-05-04 11:46:08
  from 'C:\xampp\htdocs\shop\templates\NOVA\layout\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_609117e05670c2_62414296',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '013fa93dc67ffc7f1da0d0f72a197dbb0b2f0c8f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\templates\\NOVA\\layout\\index.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/header.tpl' => 1,
    'file:layout/modal_header.tpl' => 1,
    'file:snippets/extension.tpl' => 1,
    'file:page/index.tpl' => 1,
    'file:page/shipping.tpl' => 1,
    'file:page/livesearch.tpl' => 1,
    'file:page/manufacturers.tpl' => 1,
    'file:page/newsletter_archive.tpl' => 1,
    'file:page/sitemap.tpl' => 1,
    'file:page/free_gift.tpl' => 1,
    'file:selectionwizard/index.tpl' => 1,
    'file:page/404.tpl' => 1,
    'file:layout/footer.tpl' => 1,
    'file:layout/modal_footer.tpl' => 1,
  ),
),false)) {
function content_609117e05670c2_62414296 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_188551792609117e0334d34_07713835', 'layout-index');
?>

<?php }
/* {block 'layout-index-plugin-template'} */
class Block_1098683797609117e03375b8_27254943 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['cPluginTemplate']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        <?php
}
}
/* {/block 'layout-index-plugin-template'} */
/* {block 'layout-index-include-header'} */
class Block_86462980609117e03395b1_42323862 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if (!(isset($_smarty_tpl->tpl_vars['bAjaxRequest']->value)) || !$_smarty_tpl->tpl_vars['bAjaxRequest']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender('file:layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php } else { ?>
                <?php $_smarty_tpl->_subTemplateRender('file:layout/modal_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php }?>
        <?php
}
}
/* {/block 'layout-index-include-header'} */
/* {block 'layout-index-heading'} */
class Block_673123142609117e0340423_25864579 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if (!empty($_smarty_tpl->tpl_vars['Link']->value->getTitle())) {?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_heading','inContainer'=>false),$_smarty_tpl ) );?>

                    <?php $_block_plugin7 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin7, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array('class'=>"index-heading-wrapper"));
$_block_repeat=true;
echo $_block_plugin7->render(array('class'=>"index-heading-wrapper"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <h1><?php echo $_smarty_tpl->tpl_vars['Link']->value->getTitle();?>
</h1>
                    <?php $_block_repeat=false;
echo $_block_plugin7->render(array('class'=>"index-heading-wrapper"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php } elseif ((isset($_smarty_tpl->tpl_vars['bAjaxRequest']->value)) && $_smarty_tpl->tpl_vars['bAjaxRequest']->value) {?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_heading','inContainer'=>false),$_smarty_tpl ) );?>

                    <?php $_block_plugin8 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin8, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array('class'=>"index-heading-wrapper"));
$_block_repeat=true;
echo $_block_plugin8->render(array('class'=>"index-heading-wrapper"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <h1><?php if (!empty($_smarty_tpl->tpl_vars['Link']->value->getMetaTitle())) {
echo $_smarty_tpl->tpl_vars['Link']->value->getMetaTitle();
} else {
echo $_smarty_tpl->tpl_vars['Link']->value->getName();
}?></h1>
                    <?php $_block_repeat=false;
echo $_block_plugin8->render(array('class'=>"index-heading-wrapper"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php }?>
            <?php
}
}
/* {/block 'layout-index-heading'} */
/* {block 'layout-index-include-extension'} */
class Block_525227139609117e034f1d5_35352031 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:snippets/extension.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php
}
}
/* {/block 'layout-index-include-extension'} */
/* {block 'layout-index-link-content'} */
class Block_927720159609117e0350ca6_34913763 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if (!empty($_smarty_tpl->tpl_vars['Link']->value->getContent())) {?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_content','inContainer'=>false),$_smarty_tpl ) );?>

                    <?php $_block_plugin9 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin9, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array('class'=>"link-content"));
$_block_repeat=true;
echo $_block_plugin9->render(array('class'=>"link-content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php echo $_smarty_tpl->tpl_vars['Link']->value->getContent();?>

                    <?php $_block_repeat=false;
echo $_block_plugin9->render(array('class'=>"link-content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php }?>
            <?php
}
}
/* {/block 'layout-index-link-content'} */
/* {block 'layout-index-link-type-tos'} */
class Block_1997903259609117e03fd785_81376060 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div id="tos" class="well well-sm">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_tos','inContainer'=>false),$_smarty_tpl ) );?>

                            <?php if ($_smarty_tpl->tpl_vars['AGB']->value !== false) {?>
                                <?php $_block_plugin10 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin10, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array());
$_block_repeat=true;
echo $_block_plugin10->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php if ($_smarty_tpl->tpl_vars['AGB']->value->cAGBContentHtml) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['AGB']->value->cAGBContentHtml;?>

                                    <?php } elseif ($_smarty_tpl->tpl_vars['AGB']->value->cAGBContentText) {?>
                                        <?php echo nl2br($_smarty_tpl->tpl_vars['AGB']->value->cAGBContentText);?>

                                    <?php }?>
                                <?php $_block_repeat=false;
echo $_block_plugin10->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php }?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_after_tos','inContainer'=>false),$_smarty_tpl ) );?>

                        </div>
                    <?php
}
}
/* {/block 'layout-index-link-type-tos'} */
/* {block 'layout-index-link-type-revocation'} */
class Block_1589578577609117e0510124_36949029 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div id="revocation-instruction" class="well well-sm">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_revocation','inContainer'=>false),$_smarty_tpl ) );?>

                            <?php if ($_smarty_tpl->tpl_vars['WRB']->value !== false) {?>
                                <?php $_block_plugin11 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin11, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array());
$_block_repeat=true;
echo $_block_plugin11->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php if ($_smarty_tpl->tpl_vars['WRB']->value->cWRBContentHtml) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['WRB']->value->cWRBContentHtml;?>

                                    <?php } elseif ($_smarty_tpl->tpl_vars['WRB']->value->cWRBContentText) {?>
                                        <?php echo nl2br($_smarty_tpl->tpl_vars['WRB']->value->cWRBContentText);?>

                                    <?php }?>
                                <?php $_block_repeat=false;
echo $_block_plugin11->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php }?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_after_revocation','inContainer'=>false),$_smarty_tpl ) );?>

                        </div>
                    <?php
}
}
/* {/block 'layout-index-link-type-revocation'} */
/* {block 'layout-index-link-type-revocation-form'} */
class Block_2123719311609117e051a3e2_63981478 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div id="revocation-form" class="well well-sm">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_revocation_form','inContainer'=>false),$_smarty_tpl ) );?>

                            <?php if ($_smarty_tpl->tpl_vars['WRB']->value !== false) {?>
                                <?php $_block_plugin12 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin12, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array());
$_block_repeat=true;
echo $_block_plugin12->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php if ($_smarty_tpl->tpl_vars['WRB']->value->cWRBFormContentHtml) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['WRB']->value->cWRBFormContentHtml;?>

                                    <?php } elseif ($_smarty_tpl->tpl_vars['WRB']->value->cWRBFormContentText) {?>
                                        <?php echo nl2br($_smarty_tpl->tpl_vars['WRB']->value->cWRBFormContentText);?>

                                    <?php }?>
                                <?php $_block_repeat=false;
echo $_block_plugin12->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php }?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_after_revocation_form','inContainer'=>false),$_smarty_tpl ) );?>

                        </div>
                    <?php
}
}
/* {/block 'layout-index-link-type-revocation-form'} */
/* {block 'layout-index-link-type-data-privacy'} */
class Block_1716950751609117e0524464_88398308 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div id="data-privacy" class="well well-sm">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_data_privacy','inContainer'=>false),$_smarty_tpl ) );?>

                            <?php if ($_smarty_tpl->tpl_vars['WRB']->value !== false) {?>
                                <?php $_block_plugin13 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin13, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array());
$_block_repeat=true;
echo $_block_plugin13->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php if ($_smarty_tpl->tpl_vars['WRB']->value->cDSEContentHtml) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['WRB']->value->cDSEContentHtml;?>

                                    <?php } elseif ($_smarty_tpl->tpl_vars['WRB']->value->cDSEContentText) {?>
                                        <?php echo nl2br($_smarty_tpl->tpl_vars['WRB']->value->cDSEContentText);?>

                                    <?php }?>
                                <?php $_block_repeat=false;
echo $_block_plugin13->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php }?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_after_data_privacy','inContainer'=>false),$_smarty_tpl ) );?>

                        </div>
                    <?php
}
}
/* {/block 'layout-index-link-type-data-privacy'} */
/* {block 'layout-index-include-index'} */
class Block_153378098609117e0531a19_53730860 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:page/index.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php
}
}
/* {/block 'layout-index-include-index'} */
/* {block 'layout-index-include-shipping'} */
class Block_2037001063609117e0535418_62893117 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:page/shipping.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php
}
}
/* {/block 'layout-index-include-shipping'} */
/* {block 'layout-index-include-livesearch'} */
class Block_1131550202609117e0539009_10307108 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:page/livesearch.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php
}
}
/* {/block 'layout-index-include-livesearch'} */
/* {block 'layout-index-include-manufacturers'} */
class Block_1109170401609117e0541cc4_37164014 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:page/manufacturers.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php
}
}
/* {/block 'layout-index-include-manufacturers'} */
/* {block 'layout-index-include-newsletter-archive'} */
class Block_1225210593609117e0545b91_24160823 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:page/newsletter_archive.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php
}
}
/* {/block 'layout-index-include-newsletter-archive'} */
/* {block 'layout-index-include-sitemap'} */
class Block_1238913216609117e0549806_83638978 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:page/sitemap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php
}
}
/* {/block 'layout-index-include-sitemap'} */
/* {block 'layout-index-include-free-gift'} */
class Block_1491867805609117e054d536_38316883 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:page/free_gift.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php
}
}
/* {/block 'layout-index-include-free-gift'} */
/* {block 'layout-index-include-plugin'} */
class Block_56320024609117e0551c77_71636692 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['cPluginTemplate']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                    <?php
}
}
/* {/block 'layout-index-include-plugin'} */
/* {block 'layout-index-include-selection-wizard'} */
class Block_1394888704609117e0557457_08731915 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:selectionwizard/index.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php
}
}
/* {/block 'layout-index-include-selection-wizard'} */
/* {block 'layout-index-include-404'} */
class Block_1539705689609117e055b189_83516170 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:page/404.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php
}
}
/* {/block 'layout-index-include-404'} */
/* {block 'layout-index-link-types'} */
class Block_1405413773609117e0356534_58310330 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if ($_smarty_tpl->tpl_vars['Link']->value->getLinkType() === (defined('LINKTYP_AGB') ? constant('LINKTYP_AGB') : null)) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1997903259609117e03fd785_81376060', 'layout-index-link-type-tos', $this->tplIndex);
?>

                <?php } elseif ($_smarty_tpl->tpl_vars['Link']->value->getLinkType() === (defined('LINKTYP_WRB') ? constant('LINKTYP_WRB') : null)) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1589578577609117e0510124_36949029', 'layout-index-link-type-revocation', $this->tplIndex);
?>

                <?php } elseif ($_smarty_tpl->tpl_vars['Link']->value->getLinkType() === (defined('LINKTYP_WRB_FORMULAR') ? constant('LINKTYP_WRB_FORMULAR') : null)) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2123719311609117e051a3e2_63981478', 'layout-index-link-type-revocation-form', $this->tplIndex);
?>

                <?php } elseif ($_smarty_tpl->tpl_vars['Link']->value->getLinkType() === (defined('LINKTYP_DATENSCHUTZ') ? constant('LINKTYP_DATENSCHUTZ') : null)) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1716950751609117e0524464_88398308', 'layout-index-link-type-data-privacy', $this->tplIndex);
?>

                <?php } elseif ($_smarty_tpl->tpl_vars['Link']->value->getLinkType() === (defined('LINKTYP_STARTSEITE') ? constant('LINKTYP_STARTSEITE') : null)) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_153378098609117e0531a19_53730860', 'layout-index-include-index', $this->tplIndex);
?>

                <?php } elseif ($_smarty_tpl->tpl_vars['Link']->value->getLinkType() === (defined('LINKTYP_VERSAND') ? constant('LINKTYP_VERSAND') : null)) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2037001063609117e0535418_62893117', 'layout-index-include-shipping', $this->tplIndex);
?>

                <?php } elseif ($_smarty_tpl->tpl_vars['Link']->value->getLinkType() === (defined('LINKTYP_LIVESUCHE') ? constant('LINKTYP_LIVESUCHE') : null)) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1131550202609117e0539009_10307108', 'layout-index-include-livesearch', $this->tplIndex);
?>

                <?php } elseif ($_smarty_tpl->tpl_vars['Link']->value->getLinkType() === (defined('LINKTYP_HERSTELLER') ? constant('LINKTYP_HERSTELLER') : null)) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1109170401609117e0541cc4_37164014', 'layout-index-include-manufacturers', $this->tplIndex);
?>

                <?php } elseif ($_smarty_tpl->tpl_vars['Link']->value->getLinkType() === (defined('LINKTYP_NEWSLETTERARCHIV') ? constant('LINKTYP_NEWSLETTERARCHIV') : null)) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1225210593609117e0545b91_24160823', 'layout-index-include-newsletter-archive', $this->tplIndex);
?>

                <?php } elseif ($_smarty_tpl->tpl_vars['Link']->value->getLinkType() === (defined('LINKTYP_SITEMAP') ? constant('LINKTYP_SITEMAP') : null)) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1238913216609117e0549806_83638978', 'layout-index-include-sitemap', $this->tplIndex);
?>

                <?php } elseif ($_smarty_tpl->tpl_vars['Link']->value->getLinkType() === (defined('LINKTYP_GRATISGESCHENK') ? constant('LINKTYP_GRATISGESCHENK') : null)) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1491867805609117e054d536_38316883', 'layout-index-include-free-gift', $this->tplIndex);
?>

                <?php } elseif ($_smarty_tpl->tpl_vars['Link']->value->getLinkType() === (defined('LINKTYP_PLUGIN') ? constant('LINKTYP_PLUGIN') : null) && empty($_smarty_tpl->tpl_vars['nFullscreenTemplate']->value)) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_56320024609117e0551c77_71636692', 'layout-index-include-plugin', $this->tplIndex);
?>

                <?php } elseif ($_smarty_tpl->tpl_vars['Link']->value->getLinkType() === (defined('LINKTYP_AUSWAHLASSISTENT') ? constant('LINKTYP_AUSWAHLASSISTENT') : null)) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1394888704609117e0557457_08731915', 'layout-index-include-selection-wizard', $this->tplIndex);
?>

                <?php } elseif ($_smarty_tpl->tpl_vars['Link']->value->getLinkType() === (defined('LINKTYP_404') ? constant('LINKTYP_404') : null)) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1539705689609117e055b189_83516170', 'layout-index-include-404', $this->tplIndex);
?>

                <?php }?>
            <?php
}
}
/* {/block 'layout-index-link-types'} */
/* {block 'layout-index-content'} */
class Block_363087555609117e033f7d9_38575352 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_673123142609117e0340423_25864579', 'layout-index-heading', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_525227139609117e034f1d5_35352031', 'layout-index-include-extension', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_927720159609117e0350ca6_34913763', 'layout-index-link-content', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1405413773609117e0356534_58310330', 'layout-index-link-types', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'layout-index-content'} */
/* {block 'layout-index-include-footer'} */
class Block_2073828724609117e055ee61_92065963 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if (!(isset($_smarty_tpl->tpl_vars['bAjaxRequest']->value)) || !$_smarty_tpl->tpl_vars['bAjaxRequest']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender('file:layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php } else { ?>
                <?php $_smarty_tpl->_subTemplateRender('file:layout/modal_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php }?>
        <?php
}
}
/* {/block 'layout-index-include-footer'} */
/* {block 'layout-index'} */
class Block_188551792609117e0334d34_07713835 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout-index' => 
  array (
    0 => 'Block_188551792609117e0334d34_07713835',
  ),
  'layout-index-plugin-template' => 
  array (
    0 => 'Block_1098683797609117e03375b8_27254943',
  ),
  'layout-index-include-header' => 
  array (
    0 => 'Block_86462980609117e03395b1_42323862',
  ),
  'layout-index-content' => 
  array (
    0 => 'Block_363087555609117e033f7d9_38575352',
  ),
  'layout-index-heading' => 
  array (
    0 => 'Block_673123142609117e0340423_25864579',
  ),
  'layout-index-include-extension' => 
  array (
    0 => 'Block_525227139609117e034f1d5_35352031',
  ),
  'layout-index-link-content' => 
  array (
    0 => 'Block_927720159609117e0350ca6_34913763',
  ),
  'layout-index-link-types' => 
  array (
    0 => 'Block_1405413773609117e0356534_58310330',
  ),
  'layout-index-link-type-tos' => 
  array (
    0 => 'Block_1997903259609117e03fd785_81376060',
  ),
  'layout-index-link-type-revocation' => 
  array (
    0 => 'Block_1589578577609117e0510124_36949029',
  ),
  'layout-index-link-type-revocation-form' => 
  array (
    0 => 'Block_2123719311609117e051a3e2_63981478',
  ),
  'layout-index-link-type-data-privacy' => 
  array (
    0 => 'Block_1716950751609117e0524464_88398308',
  ),
  'layout-index-include-index' => 
  array (
    0 => 'Block_153378098609117e0531a19_53730860',
  ),
  'layout-index-include-shipping' => 
  array (
    0 => 'Block_2037001063609117e0535418_62893117',
  ),
  'layout-index-include-livesearch' => 
  array (
    0 => 'Block_1131550202609117e0539009_10307108',
  ),
  'layout-index-include-manufacturers' => 
  array (
    0 => 'Block_1109170401609117e0541cc4_37164014',
  ),
  'layout-index-include-newsletter-archive' => 
  array (
    0 => 'Block_1225210593609117e0545b91_24160823',
  ),
  'layout-index-include-sitemap' => 
  array (
    0 => 'Block_1238913216609117e0549806_83638978',
  ),
  'layout-index-include-free-gift' => 
  array (
    0 => 'Block_1491867805609117e054d536_38316883',
  ),
  'layout-index-include-plugin' => 
  array (
    0 => 'Block_56320024609117e0551c77_71636692',
  ),
  'layout-index-include-selection-wizard' => 
  array (
    0 => 'Block_1394888704609117e0557457_08731915',
  ),
  'layout-index-include-404' => 
  array (
    0 => 'Block_1539705689609117e055b189_83516170',
  ),
  'layout-index-include-footer' => 
  array (
    0 => 'Block_2073828724609117e055ee61_92065963',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ((isset($_smarty_tpl->tpl_vars['nFullscreenTemplate']->value)) && $_smarty_tpl->tpl_vars['nFullscreenTemplate']->value == 1) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1098683797609117e03375b8_27254943', 'layout-index-plugin-template', $this->tplIndex);
?>

    <?php } else { ?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_86462980609117e03395b1_42323862', 'layout-index-include-header', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_363087555609117e033f7d9_38575352', 'layout-index-content', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2073828724609117e055ee61_92065963', 'layout-index-include-footer', $this->tplIndex);
?>

    <?php }
}
}
/* {/block 'layout-index'} */
}
