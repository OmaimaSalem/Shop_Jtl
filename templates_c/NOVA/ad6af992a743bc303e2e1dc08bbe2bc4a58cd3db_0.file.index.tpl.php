<?php
/* Smarty version 3.1.38, created on 2021-05-19 14:58:33
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\layout\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a50b793cdf94_34460900',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad6af992a743bc303e2e1dc08bbe2bc4a58cd3db' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\layout\\index.tpl',
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
function content_60a50b793cdf94_34460900 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9999269360a50b792cd447_33025331', 'layout-index');
?>

<?php }
/* {block 'layout-index-plugin-template'} */
class Block_129572542560a50b792d18e2_37751482 extends Smarty_Internal_Block
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
class Block_197942393160a50b792d3ec0_81296891 extends Smarty_Internal_Block
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
class Block_173952069660a50b792dff75_86810520 extends Smarty_Internal_Block
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
class Block_36863165060a50b792f9ad7_02091330 extends Smarty_Internal_Block
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
class Block_62035910460a50b792fc112_94294182 extends Smarty_Internal_Block
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
class Block_120467477460a50b7930b212_48997492 extends Smarty_Internal_Block
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
class Block_71167319060a50b79326345_56250843 extends Smarty_Internal_Block
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
class Block_184796079960a50b79345db4_72312928 extends Smarty_Internal_Block
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
class Block_152752214060a50b79352551_56567614 extends Smarty_Internal_Block
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
class Block_120560125960a50b79366c75_70686794 extends Smarty_Internal_Block
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
class Block_152511774960a50b793799d6_84527301 extends Smarty_Internal_Block
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
class Block_190360944260a50b793810e6_59956564 extends Smarty_Internal_Block
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
class Block_63702620660a50b7938f006_24984217 extends Smarty_Internal_Block
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
class Block_81547286160a50b79393e69_06998302 extends Smarty_Internal_Block
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
class Block_206178959460a50b79399c34_96668601 extends Smarty_Internal_Block
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
class Block_54607810660a50b793b0da8_89256441 extends Smarty_Internal_Block
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
class Block_142902119760a50b793b60a9_53298919 extends Smarty_Internal_Block
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
class Block_50138871260a50b793bc5c8_31358688 extends Smarty_Internal_Block
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
class Block_182254365160a50b793c44a3_68871461 extends Smarty_Internal_Block
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
class Block_7250610560a50b79302e06_04745677 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if ($_smarty_tpl->tpl_vars['Link']->value->getLinkType() === (defined('LINKTYP_AGB') ? constant('LINKTYP_AGB') : null)) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_120467477460a50b7930b212_48997492', 'layout-index-link-type-tos', $this->tplIndex);
?>

                <?php } elseif ($_smarty_tpl->tpl_vars['Link']->value->getLinkType() === (defined('LINKTYP_WRB') ? constant('LINKTYP_WRB') : null)) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_71167319060a50b79326345_56250843', 'layout-index-link-type-revocation', $this->tplIndex);
?>

                <?php } elseif ($_smarty_tpl->tpl_vars['Link']->value->getLinkType() === (defined('LINKTYP_WRB_FORMULAR') ? constant('LINKTYP_WRB_FORMULAR') : null)) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_184796079960a50b79345db4_72312928', 'layout-index-link-type-revocation-form', $this->tplIndex);
?>

                <?php } elseif ($_smarty_tpl->tpl_vars['Link']->value->getLinkType() === (defined('LINKTYP_DATENSCHUTZ') ? constant('LINKTYP_DATENSCHUTZ') : null)) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_152752214060a50b79352551_56567614', 'layout-index-link-type-data-privacy', $this->tplIndex);
?>

                <?php } elseif ($_smarty_tpl->tpl_vars['Link']->value->getLinkType() === (defined('LINKTYP_STARTSEITE') ? constant('LINKTYP_STARTSEITE') : null)) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_120560125960a50b79366c75_70686794', 'layout-index-include-index', $this->tplIndex);
?>

                <?php } elseif ($_smarty_tpl->tpl_vars['Link']->value->getLinkType() === (defined('LINKTYP_VERSAND') ? constant('LINKTYP_VERSAND') : null)) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_152511774960a50b793799d6_84527301', 'layout-index-include-shipping', $this->tplIndex);
?>

                <?php } elseif ($_smarty_tpl->tpl_vars['Link']->value->getLinkType() === (defined('LINKTYP_LIVESUCHE') ? constant('LINKTYP_LIVESUCHE') : null)) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_190360944260a50b793810e6_59956564', 'layout-index-include-livesearch', $this->tplIndex);
?>

                <?php } elseif ($_smarty_tpl->tpl_vars['Link']->value->getLinkType() === (defined('LINKTYP_HERSTELLER') ? constant('LINKTYP_HERSTELLER') : null)) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_63702620660a50b7938f006_24984217', 'layout-index-include-manufacturers', $this->tplIndex);
?>

                <?php } elseif ($_smarty_tpl->tpl_vars['Link']->value->getLinkType() === (defined('LINKTYP_NEWSLETTERARCHIV') ? constant('LINKTYP_NEWSLETTERARCHIV') : null)) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_81547286160a50b79393e69_06998302', 'layout-index-include-newsletter-archive', $this->tplIndex);
?>

                <?php } elseif ($_smarty_tpl->tpl_vars['Link']->value->getLinkType() === (defined('LINKTYP_SITEMAP') ? constant('LINKTYP_SITEMAP') : null)) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_206178959460a50b79399c34_96668601', 'layout-index-include-sitemap', $this->tplIndex);
?>

                <?php } elseif ($_smarty_tpl->tpl_vars['Link']->value->getLinkType() === (defined('LINKTYP_GRATISGESCHENK') ? constant('LINKTYP_GRATISGESCHENK') : null)) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54607810660a50b793b0da8_89256441', 'layout-index-include-free-gift', $this->tplIndex);
?>

                <?php } elseif ($_smarty_tpl->tpl_vars['Link']->value->getLinkType() === (defined('LINKTYP_PLUGIN') ? constant('LINKTYP_PLUGIN') : null) && empty($_smarty_tpl->tpl_vars['nFullscreenTemplate']->value)) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_142902119760a50b793b60a9_53298919', 'layout-index-include-plugin', $this->tplIndex);
?>

                <?php } elseif ($_smarty_tpl->tpl_vars['Link']->value->getLinkType() === (defined('LINKTYP_AUSWAHLASSISTENT') ? constant('LINKTYP_AUSWAHLASSISTENT') : null)) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_50138871260a50b793bc5c8_31358688', 'layout-index-include-selection-wizard', $this->tplIndex);
?>

                <?php } elseif ($_smarty_tpl->tpl_vars['Link']->value->getLinkType() === (defined('LINKTYP_404') ? constant('LINKTYP_404') : null)) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_182254365160a50b793c44a3_68871461', 'layout-index-include-404', $this->tplIndex);
?>

                <?php }?>
            <?php
}
}
/* {/block 'layout-index-link-types'} */
/* {block 'layout-index-content'} */
class Block_205309009860a50b792df2d2_63623862 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_173952069660a50b792dff75_86810520', 'layout-index-heading', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36863165060a50b792f9ad7_02091330', 'layout-index-include-extension', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_62035910460a50b792fc112_94294182', 'layout-index-link-content', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7250610560a50b79302e06_04745677', 'layout-index-link-types', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'layout-index-content'} */
/* {block 'layout-index-include-footer'} */
class Block_76050765460a50b793c8114_53951534 extends Smarty_Internal_Block
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
class Block_9999269360a50b792cd447_33025331 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout-index' => 
  array (
    0 => 'Block_9999269360a50b792cd447_33025331',
  ),
  'layout-index-plugin-template' => 
  array (
    0 => 'Block_129572542560a50b792d18e2_37751482',
  ),
  'layout-index-include-header' => 
  array (
    0 => 'Block_197942393160a50b792d3ec0_81296891',
  ),
  'layout-index-content' => 
  array (
    0 => 'Block_205309009860a50b792df2d2_63623862',
  ),
  'layout-index-heading' => 
  array (
    0 => 'Block_173952069660a50b792dff75_86810520',
  ),
  'layout-index-include-extension' => 
  array (
    0 => 'Block_36863165060a50b792f9ad7_02091330',
  ),
  'layout-index-link-content' => 
  array (
    0 => 'Block_62035910460a50b792fc112_94294182',
  ),
  'layout-index-link-types' => 
  array (
    0 => 'Block_7250610560a50b79302e06_04745677',
  ),
  'layout-index-link-type-tos' => 
  array (
    0 => 'Block_120467477460a50b7930b212_48997492',
  ),
  'layout-index-link-type-revocation' => 
  array (
    0 => 'Block_71167319060a50b79326345_56250843',
  ),
  'layout-index-link-type-revocation-form' => 
  array (
    0 => 'Block_184796079960a50b79345db4_72312928',
  ),
  'layout-index-link-type-data-privacy' => 
  array (
    0 => 'Block_152752214060a50b79352551_56567614',
  ),
  'layout-index-include-index' => 
  array (
    0 => 'Block_120560125960a50b79366c75_70686794',
  ),
  'layout-index-include-shipping' => 
  array (
    0 => 'Block_152511774960a50b793799d6_84527301',
  ),
  'layout-index-include-livesearch' => 
  array (
    0 => 'Block_190360944260a50b793810e6_59956564',
  ),
  'layout-index-include-manufacturers' => 
  array (
    0 => 'Block_63702620660a50b7938f006_24984217',
  ),
  'layout-index-include-newsletter-archive' => 
  array (
    0 => 'Block_81547286160a50b79393e69_06998302',
  ),
  'layout-index-include-sitemap' => 
  array (
    0 => 'Block_206178959460a50b79399c34_96668601',
  ),
  'layout-index-include-free-gift' => 
  array (
    0 => 'Block_54607810660a50b793b0da8_89256441',
  ),
  'layout-index-include-plugin' => 
  array (
    0 => 'Block_142902119760a50b793b60a9_53298919',
  ),
  'layout-index-include-selection-wizard' => 
  array (
    0 => 'Block_50138871260a50b793bc5c8_31358688',
  ),
  'layout-index-include-404' => 
  array (
    0 => 'Block_182254365160a50b793c44a3_68871461',
  ),
  'layout-index-include-footer' => 
  array (
    0 => 'Block_76050765460a50b793c8114_53951534',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ((isset($_smarty_tpl->tpl_vars['nFullscreenTemplate']->value)) && $_smarty_tpl->tpl_vars['nFullscreenTemplate']->value == 1) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_129572542560a50b792d18e2_37751482', 'layout-index-plugin-template', $this->tplIndex);
?>

    <?php } else { ?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_197942393160a50b792d3ec0_81296891', 'layout-index-include-header', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205309009860a50b792df2d2_63623862', 'layout-index-content', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_76050765460a50b793c8114_53951534', 'layout-index-include-footer', $this->tplIndex);
?>

    <?php }
}
}
/* {/block 'layout-index'} */
}
