<?php
/* Smarty version 3.1.38, created on 2021-05-18 11:16:16
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVAChild\layout\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a385e0f3c695_52333497',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e645df8de938c7c4a3bf3c42219ff976a7911c2b' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVAChild\\layout\\header.tpl',
      1 => 1621328036,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/header_nav_icons.tpl' => 1,
  ),
),false)) {
function content_60a385e0f3c695_52333497 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_129726758260a385e0ed2594_81985433', 'layout-header-head-resources');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_52536505960a385e0f070c5_62780185', 'layout-header-header');
}
/* {block 'layout-header-head-resources-crit'} */
class Block_153918365160a385e0ed6917_43435723 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php echo file_get_contents(((string)$_smarty_tpl->tpl_vars['currentThemeDir']->value).((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['theme_default'])."_crit.css");?>

                <?php
}
}
/* {/block 'layout-header-head-resources-crit'} */
/* {block 'layout-header-head-resources'} */
class Block_129726758260a385e0ed2594_81985433 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout-header-head-resources' => 
  array (
    0 => 'Block_129726758260a385e0ed2594_81985433',
  ),
  'layout-header-head-resources-crit' => 
  array (
    0 => 'Block_153918365160a385e0ed6917_43435723',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if (empty($_smarty_tpl->tpl_vars['parentTemplateDir']->value)) {?>
                <?php $_smarty_tpl->_assignInScope('templateDir', $_smarty_tpl->tpl_vars['currentTemplateDir']->value);?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('templateDir', $_smarty_tpl->tpl_vars['parentTemplateDir']->value);?>
            <?php }?>
            <style id="criticalCSS">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_153918365160a385e0ed6917_43435723', 'layout-header-head-resources-crit', $this->tplIndex);
?>

            </style>
                        <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['general']['use_minify'] === 'N') {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cCSS_arr']->value, 'cCSS');
$_smarty_tpl->tpl_vars['cCSS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cCSS']->value) {
$_smarty_tpl->tpl_vars['cCSS']->do_else = false;
?>
                    <link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['cCSS']->value;?>
?v=<?php echo $_smarty_tpl->tpl_vars['nTemplateVersion']->value;?>
" as="style"
                          onload="this.onload=null;this.rel='stylesheet'">
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php if ((isset($_smarty_tpl->tpl_vars['cPluginCss_arr']->value))) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cPluginCss_arr']->value, 'cCSS');
$_smarty_tpl->tpl_vars['cCSS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cCSS']->value) {
$_smarty_tpl->tpl_vars['cCSS']->do_else = false;
?>
                        <link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['cCSS']->value;?>
?v=<?php echo $_smarty_tpl->tpl_vars['nTemplateVersion']->value;?>
" as="style"
                              onload="this.onload=null;this.rel='stylesheet'">
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>

                <noscript>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cCSS_arr']->value, 'cCSS');
$_smarty_tpl->tpl_vars['cCSS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cCSS']->value) {
$_smarty_tpl->tpl_vars['cCSS']->do_else = false;
?>
                        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['cCSS']->value;?>
?v=<?php echo $_smarty_tpl->tpl_vars['nTemplateVersion']->value;?>
">
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['cPluginCss_arr']->value))) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cPluginCss_arr']->value, 'cCSS');
$_smarty_tpl->tpl_vars['cCSS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cCSS']->value) {
$_smarty_tpl->tpl_vars['cCSS']->do_else = false;
?>
                            <link href="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['cCSS']->value;?>
?v=<?php echo $_smarty_tpl->tpl_vars['nTemplateVersion']->value;?>
" rel="stylesheet">
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php }?>
                </noscript>
            <?php } else { ?>
                <link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['combinedCSS']->value;?>
" as="style" onload="this.onload=null;this.rel='stylesheet'">
                <noscript>
                    <link href="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['combinedCSS']->value;?>
" rel="stylesheet">
                </noscript>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['opc']->value->isEditMode() === false && $_smarty_tpl->tpl_vars['opc']->value->isPreviewMode() === false && \JTL\Shop::isAdmin(true)) {?>
                <link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/admin/opc/css/startmenu.css" as="style"
                      onload="this.onload=null;this.rel='stylesheet'">
                <noscript>
                    <link type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/admin/opc/css/startmenu.css" rel="stylesheet">
                </noscript>
            <?php }?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['opcPageService']->value->getCurPage()->getCssList($_smarty_tpl->tpl_vars['opc']->value->isEditMode()), 'cssTrue', false, 'cssFile');
$_smarty_tpl->tpl_vars['cssTrue']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cssFile']->value => $_smarty_tpl->tpl_vars['cssTrue']->value) {
$_smarty_tpl->tpl_vars['cssTrue']->do_else = false;
?>
                <link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['cssFile']->value;?>
" as="style" data-opc-portlet-css-link="true"
                      onload="this.onload=null;this.rel='stylesheet'">
                <noscript>
                    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['cssFile']->value;?>
">
                </noscript>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php echo '<script'; ?>
>
                /*! loadCSS rel=preload polyfill. [c]2017 Filament Group, Inc. MIT License */
                (function (w) {
                    "use strict";
                    if (!w.loadCSS) {
                        w.loadCSS = function (){};
                    }
                    var rp = loadCSS.relpreload = {};
                    rp.support                  = (function () {
                        var ret;
                        try {
                            ret = w.document.createElement("link").relList.supports("preload");
                        } catch (e) {
                            ret = false;
                        }
                        return function () {
                            return ret;
                        };
                    })();
                    rp.bindMediaToggle          = function (link) {
                        var finalMedia = link.media || "all";

                        function enableStylesheet() {
                            if (link.addEventListener) {
                                link.removeEventListener("load", enableStylesheet);
                            } else if (link.attachEvent) {
                                link.detachEvent("onload", enableStylesheet);
                            }
                            link.setAttribute("onload", null);
                            link.media = finalMedia;
                        }

                        if (link.addEventListener) {
                            link.addEventListener("load", enableStylesheet);
                        } else if (link.attachEvent) {
                            link.attachEvent("onload", enableStylesheet);
                        }
                        setTimeout(function () {
                            link.rel   = "stylesheet";
                            link.media = "only x";
                        });
                        setTimeout(enableStylesheet, 3000);
                    };

                    rp.poly = function () {
                        if (rp.support()) {
                            return;
                        }
                        var links = w.document.getElementsByTagName("link");
                        for (var i = 0; i < links.length; i++) {
                            var link = links[i];
                            if (link.rel === "preload" && link.getAttribute("as") === "style" && !link.getAttribute("data-loadcss")) {
                                link.setAttribute("data-loadcss", true);
                                rp.bindMediaToggle(link);
                            }
                        }
                    };

                    if (!rp.support()) {
                        rp.poly();

                        var run = w.setInterval(rp.poly, 500);
                        if (w.addEventListener) {
                            w.addEventListener("load", function () {
                                rp.poly();
                                w.clearInterval(run);
                            });
                        } else if (w.attachEvent) {
                            w.attachEvent("onload", function () {
                                rp.poly();
                                w.clearInterval(run);
                            });
                        }
                    }

                    if (typeof exports !== "undefined") {
                        exports.loadCSS = loadCSS;
                    }
                    else {
                        w.loadCSS = loadCSS;
                    }
                }(typeof global !== "undefined" ? global : this));
            <?php echo '</script'; ?>
>
                        <?php if ((isset($_smarty_tpl->tpl_vars['Einstellungen']->value['rss']['rss_nutzen'])) && $_smarty_tpl->tpl_vars['Einstellungen']->value['rss']['rss_nutzen'] === 'Y') {?>
                <link rel="alternate" type="application/rss+xml" title="Newsfeed <?php echo $_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_shopname'];?>
"
                      href="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/rss.xml">
            <?php }?>
                        <?php if (!empty($_SESSION['Sprachen']) && count($_SESSION['Sprachen']) > 1) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_SESSION['Sprachen'], 'oSprache');
$_smarty_tpl->tpl_vars['oSprache']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oSprache']->value) {
$_smarty_tpl->tpl_vars['oSprache']->do_else = false;
?>
                    <link rel="alternate" hreflang="<?php echo $_smarty_tpl->tpl_vars['oSprache']->value->cISO639;?>
" href="<?php echo $_smarty_tpl->tpl_vars['oSprache']->value->cURLFull;?>
">
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
        <?php
}
}
/* {/block 'layout-header-head-resources'} */
/* {block 'layout-header-branding-top-bar'} */
class Block_179183152960a385e0f07c39_01581392 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                
            <?php
}
}
/* {/block 'layout-header-branding-top-bar'} */
/* {block 'layout-header-navbar-toggle'} */
class Block_9377164660a385e0f0e431_39662562 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <button id="burger-menu" class="burger-menu-wrapper navbar-toggler collapsed <?php if ($_smarty_tpl->tpl_vars['nSeitenTyp']->value === (defined('PAGE_BESTELLVORGANG') ? constant('PAGE_BESTELLVORGANG') : null)) {?>d-none<?php }?>" type="button" data-toggle="collapse" data-target="#mainNavigation" aria-controls="mainNavigation" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                            <?php
}
}
/* {/block 'layout-header-navbar-toggle'} */
/* {block 'layout-header-logo'} */
class Block_58565401560a385e0f113b7_66465292 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                
                            <?php
}
}
/* {/block 'layout-header-logo'} */
/* {block 'layout-header-search'} */
class Block_73959271460a385e0f16a28_48144576 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                
                            <?php
}
}
/* {/block 'layout-header-search'} */
/* {block 'layout-header-secure-checkout-title'} */
class Block_74486234260a385e0f19f31_45718797 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <i class="fas fa-lock icon-mr-2"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'secureCheckout','section'=>'checkout'),$_smarty_tpl ) );?>

                                        <?php
}
}
/* {/block 'layout-header-secure-checkout-title'} */
/* {block 'layout-header-secure-checkout'} */
class Block_174059818360a385e0f194a1_95720116 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <div class="secure-checkout-icon ml-auto-util ml-lg-0">
                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_74486234260a385e0f19f31_45718797', 'layout-header-secure-checkout-title', $this->tplIndex);
?>

                                    </div>
                                   
                                <?php
}
}
/* {/block 'layout-header-secure-checkout'} */
/* {block 'layout-header-branding-shop-nav-include-language-dropdown'} */
class Block_78130148260a385e0f1ed18_67394577 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <?php
}
}
/* {/block 'layout-header-branding-shop-nav-include-language-dropdown'} */
/* {block 'layout-header-branding-shop-nav'} */
class Block_171071440660a385e0f1ca22_05623526 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_block_plugin15 = isset($_smarty_tpl->smarty->registered_plugins['block']['nav'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['nav'][0][0] : null;
if (!is_callable(array($_block_plugin15, 'render'))) {
throw new SmartyException('block tag \'nav\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('nav', array('id'=>"shop-nav",'right'=>true,'class'=>"nav-right order-lg-last nav-icons"));
$_block_repeat=true;
echo $_block_plugin15->render(array('id'=>"shop-nav",'right'=>true,'class'=>"nav-right order-lg-last nav-icons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_78130148260a385e0f1ed18_67394577', 'layout-header-branding-shop-nav-include-language-dropdown', $this->tplIndex);
?>

                                        <?php $_smarty_tpl->_subTemplateRender('file:layout/header_nav_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                    <?php $_block_repeat=false;
echo $_block_plugin15->render(array('id'=>"shop-nav",'right'=>true,'class'=>"nav-right order-lg-last nav-icons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php
}
}
/* {/block 'layout-header-branding-shop-nav'} */
/* {block 'layout-header-include-categories-mega-toggler'} */
class Block_99469350360a385e0f25897_74949812 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#mainNavigation" aria-controls="mainNavigation" aria-expanded="false" aria-label="Toggle navigation">
                                                                <span class="navbar-toggler-icon"></span>
                                                            </button>
                                                        <?php
}
}
/* {/block 'layout-header-include-categories-mega-toggler'} */
/* {block 'layout-header-include-categories-mega-back'} */
class Block_3074755960a385e0f29583_20962568 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                            <?php $_block_plugin19 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin19, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>"#",'class'=>"nav-offcanvas-title d-none",'data'=>array("menu-back"=>'')));
$_block_repeat=true;
echo $_block_plugin19->render(array('href'=>"#",'class'=>"nav-offcanvas-title d-none",'data'=>array("menu-back"=>'')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                                <span class="fas fa-chevron-left icon-mr-2"></span>
                                                                <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'back'),$_smarty_tpl ) );?>
</span>
                                                            <?php $_block_repeat=false;
echo $_block_plugin19->render(array('href'=>"#",'class'=>"nav-offcanvas-title d-none",'data'=>array("menu-back"=>'')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                        <?php
}
}
/* {/block 'layout-header-include-categories-mega-back'} */
/* {block 'layout-header-include-include-categories-header'} */
class Block_36500128160a385e0f22e94_16300785 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <div class="nav-mobile-header d-lg-none">
                                                <?php $_block_plugin16 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin16, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('class'=>"align-items-center-util"));
$_block_repeat=true;
echo $_block_plugin16->render(array('class'=>"align-items-center-util"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <?php $_block_plugin17 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin17, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('class'=>"nav-mobile-header-toggler"));
$_block_repeat=true;
echo $_block_plugin17->render(array('class'=>"nav-mobile-header-toggler"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_99469350360a385e0f25897_74949812', 'layout-header-include-categories-mega-toggler', $this->tplIndex);
?>

                                                    <?php $_block_repeat=false;
echo $_block_plugin17->render(array('class'=>"nav-mobile-header-toggler"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                    <?php $_block_plugin18 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin18, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('class'=>"col-auto nav-mobile-header-name ml-auto-util"));
$_block_repeat=true;
echo $_block_plugin18->render(array('class'=>"col-auto nav-mobile-header-name ml-auto-util"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                        <span class="nav-offcanvas-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'menuName'),$_smarty_tpl ) );?>
</span>
                                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3074755960a385e0f29583_20962568', 'layout-header-include-categories-mega-back', $this->tplIndex);
?>

                                                    <?php $_block_repeat=false;
echo $_block_plugin18->render(array('class'=>"col-auto nav-mobile-header-name ml-auto-util"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                <?php $_block_repeat=false;
echo $_block_plugin16->render(array('class'=>"align-items-center-util"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                <hr class="nav-mobile-header-hr" />
                                            </div>
                                        <?php
}
}
/* {/block 'layout-header-include-include-categories-header'} */
/* {block 'layout-header-include-include-categories-mega'} */
class Block_161117658160a385e0f34755_83061589 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                    <?php
}
}
/* {/block 'layout-header-include-include-categories-mega'} */
/* {block 'layout-header-include-include-categories-body'} */
class Block_155971523460a385e0f32c88_12696288 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <div class="nav-mobile-body">
                                                <?php $_block_plugin20 = isset($_smarty_tpl->smarty->registered_plugins['block']['navbarnav'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['navbarnav'][0][0] : null;
if (!is_callable(array($_block_plugin20, 'render'))) {
throw new SmartyException('block tag \'navbarnav\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('navbarnav', array('class'=>"nav-scrollbar-inner mr-auto"));
$_block_repeat=true;
echo $_block_plugin20->render(array('class'=>"nav-scrollbar-inner mr-auto"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_161117658160a385e0f34755_83061589', 'layout-header-include-include-categories-mega', $this->tplIndex);
?>

                                                <?php $_block_repeat=false;
echo $_block_plugin20->render(array('class'=>"nav-scrollbar-inner mr-auto"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            </div>
                                        <?php
}
}
/* {/block 'layout-header-include-include-categories-body'} */
/* {block 'layout-header-include-categories-mega'} */
class Block_159654632360a385e0f22352_21758043 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <div id="mainNavigation" class="collapse navbar-collapse nav-scrollbar">
                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36500128160a385e0f22e94_16300785', 'layout-header-include-include-categories-header', $this->tplIndex);
?>

                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_155971523460a385e0f32c88_12696288', 'layout-header-include-include-categories-body', $this->tplIndex);
?>

                                    </div>
                                <?php
}
}
/* {/block 'layout-header-include-categories-mega'} */
/* {block 'layout-header-category-nav'} */
class Block_120935227360a385e0f0d9b7_05575976 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div class="toggler-logo-wrapper">
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9377164660a385e0f0e431_39662562', 'layout-header-navbar-toggle', $this->tplIndex);
?>


                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_58565401560a385e0f113b7_66465292', 'layout-header-logo', $this->tplIndex);
?>

                        </div>
                        <?php ob_start();
if ($_smarty_tpl->tpl_vars['nSeitenTyp']->value === (defined('PAGE_BESTELLVORGANG') ? constant('PAGE_BESTELLVORGANG') : null)) {
echo "align-items-center-util";
} else {
echo "align-items-lg-end";
}
$_prefixVariable3=ob_get_clean();
$_block_plugin14 = isset($_smarty_tpl->smarty->registered_plugins['block']['navbar'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['navbar'][0][0] : null;
if (!is_callable(array($_block_plugin14, 'render'))) {
throw new SmartyException('block tag \'navbar\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('navbar', array('toggleable'=>true,'fill'=>true,'type'=>"expand-lg",'class'=>"justify-content-start ".$_prefixVariable3));
$_block_repeat=true;
echo $_block_plugin14->render(array('toggleable'=>true,'fill'=>true,'type'=>"expand-lg",'class'=>"justify-content-start ".$_prefixVariable3), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                           <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_73959271460a385e0f16a28_48144576', 'layout-header-search', $this->tplIndex);
?>


                            <?php if ($_smarty_tpl->tpl_vars['nSeitenTyp']->value === (defined('PAGE_BESTELLVORGANG') ? constant('PAGE_BESTELLVORGANG') : null)) {?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_174059818360a385e0f194a1_95720116', 'layout-header-secure-checkout', $this->tplIndex);
?>

                            <?php } else { ?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_171071440660a385e0f1ca22_05623526', 'layout-header-branding-shop-nav', $this->tplIndex);
?>


                                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_159654632360a385e0f22352_21758043', 'layout-header-include-categories-mega', $this->tplIndex);
?>

                            <?php }?>
                        <?php $_block_repeat=false;
echo $_block_plugin14->render(array('toggleable'=>true,'fill'=>true,'type'=>"expand-lg",'class'=>"justify-content-start ".$_prefixVariable3), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php
}
}
/* {/block 'layout-header-category-nav'} */
/* {block 'layout-header-container-inner'} */
class Block_144479855060a385e0f0b269_16298107 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="container-fluid <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['megamenu']['header_full_width'] === 'N') {?>container-fluid-xl<?php }?>" id="head">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_120935227360a385e0f0d9b7_05575976', 'layout-header-category-nav', $this->tplIndex);
?>

                    </div>
                <?php
}
}
/* {/block 'layout-header-container-inner'} */
/* {block 'layout-header-search-fixed'} */
class Block_140100272460a385e0f38937_81113357 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['mobile_search_type'] === 'fixed' && $_smarty_tpl->tpl_vars['isMobile']->value) {?>
                    <div class="container-fluid container-fluid-xl fixed-search fixed-top smoothscroll-top-search d-lg-none d-none">
                    <h1>hhhe</h1>
                    </div>
                <?php }?>
            <?php
}
}
/* {/block 'layout-header-search-fixed'} */
/* {block 'layout-header-header'} */
class Block_52536505960a385e0f070c5_62780185 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout-header-header' => 
  array (
    0 => 'Block_52536505960a385e0f070c5_62780185',
  ),
  'layout-header-branding-top-bar' => 
  array (
    0 => 'Block_179183152960a385e0f07c39_01581392',
  ),
  'layout-header-container-inner' => 
  array (
    0 => 'Block_144479855060a385e0f0b269_16298107',
  ),
  'layout-header-category-nav' => 
  array (
    0 => 'Block_120935227360a385e0f0d9b7_05575976',
  ),
  'layout-header-navbar-toggle' => 
  array (
    0 => 'Block_9377164660a385e0f0e431_39662562',
  ),
  'layout-header-logo' => 
  array (
    0 => 'Block_58565401560a385e0f113b7_66465292',
  ),
  'layout-header-search' => 
  array (
    0 => 'Block_73959271460a385e0f16a28_48144576',
  ),
  'layout-header-secure-checkout' => 
  array (
    0 => 'Block_174059818360a385e0f194a1_95720116',
  ),
  'layout-header-secure-checkout-title' => 
  array (
    0 => 'Block_74486234260a385e0f19f31_45718797',
  ),
  'layout-header-branding-shop-nav' => 
  array (
    0 => 'Block_171071440660a385e0f1ca22_05623526',
  ),
  'layout-header-branding-shop-nav-include-language-dropdown' => 
  array (
    0 => 'Block_78130148260a385e0f1ed18_67394577',
  ),
  'layout-header-include-categories-mega' => 
  array (
    0 => 'Block_159654632360a385e0f22352_21758043',
  ),
  'layout-header-include-include-categories-header' => 
  array (
    0 => 'Block_36500128160a385e0f22e94_16300785',
  ),
  'layout-header-include-categories-mega-toggler' => 
  array (
    0 => 'Block_99469350360a385e0f25897_74949812',
  ),
  'layout-header-include-categories-mega-back' => 
  array (
    0 => 'Block_3074755960a385e0f29583_20962568',
  ),
  'layout-header-include-include-categories-body' => 
  array (
    0 => 'Block_155971523460a385e0f32c88_12696288',
  ),
  'layout-header-include-include-categories-mega' => 
  array (
    0 => 'Block_161117658160a385e0f34755_83061589',
  ),
  'layout-header-search-fixed' => 
  array (
    0 => 'Block_140100272460a385e0f38937_81113357',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_179183152960a385e0f07c39_01581392', 'layout-header-branding-top-bar', $this->tplIndex);
?>

            <header class="d-print-none <?php if (!$_smarty_tpl->tpl_vars['isMobile']->value || $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['mobile_search_type'] !== 'fixed') {?>sticky-top<?php }?> fixed-navbar" id="jtl-nav-wrapper">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_144479855060a385e0f0b269_16298107', 'layout-header-container-inner', $this->tplIndex);
?>

                <div class="navbar navbar-expand-lg navbar-dark .bg-dark.bg-gradient">
                    <div class="container-fluid">
                        
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                All Categories
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                            </li>
                        </ul>
                        </div>
                    </div>
                </div>
            </header>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_140100272460a385e0f38937_81113357', 'layout-header-search-fixed', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'layout-header-header'} */
}
