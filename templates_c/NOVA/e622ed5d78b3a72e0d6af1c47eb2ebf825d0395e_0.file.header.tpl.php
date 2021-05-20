<?php
/* Smarty version 3.1.38, created on 2021-05-19 14:58:35
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\layout\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a50b7bb31a63_96585566',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e622ed5d78b3a72e0d6af1c47eb2ebf825d0395e' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\layout\\header.tpl',
      1 => 1621327767,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/header_top_bar.tpl' => 2,
    'file:snippets/search_form.tpl' => 2,
    'file:snippets/language_dropdown.tpl' => 1,
    'file:layout/header_nav_icons.tpl' => 1,
    'file:snippets/categories_mega.tpl' => 1,
    'file:snippets/banner.tpl' => 1,
    'file:snippets/slider.tpl' => 1,
    'file:layout/breadcrumb.tpl' => 1,
    'file:snippets/alert_list.tpl' => 1,
  ),
),false)) {
function content_60a50b7bb31a63_96585566 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_83496410360a50b7b6a28a7_06168116', 'layout-header');
?>

<?php }
/* {block 'layout-header-doctype'} */
class Block_152529611360a50b7b6a35a9_95536555 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html><?php
}
}
/* {/block 'layout-header-doctype'} */
/* {block 'layout-header-html-attributes'} */
class Block_141048160860a50b7b6b1727_93742115 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
lang="<?php echo $_smarty_tpl->tpl_vars['meta_language']->value;?>
" itemscope <?php if ($_smarty_tpl->tpl_vars['nSeitenTyp']->value === (defined('URLART_ARTIKEL') ? constant('URLART_ARTIKEL') : null)) {?>itemtype="http://schema.org/ItemPage"
          <?php } elseif ($_smarty_tpl->tpl_vars['nSeitenTyp']->value === (defined('URLART_KATEGORIE') ? constant('URLART_KATEGORIE') : null)) {?>itemtype="http://schema.org/CollectionPage"
          <?php } else { ?>itemtype="http://schema.org/WebPage"<?php }
}
}
/* {/block 'layout-header-html-attributes'} */
/* {block 'layout-header-head-meta-description'} */
class Block_194524370260a50b7b6d11b8_50837976 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
"<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['meta_description']->value,1000,'',true ));
}
}
/* {/block 'layout-header-head-meta-description'} */
/* {block 'layout-header-head-meta-keywords'} */
class Block_12616425960a50b7b6daac3_07079191 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['meta_keywords']->value,255,'',true ));
}
}
/* {/block 'layout-header-head-meta-keywords'} */
/* {block 'layout-header-head-theme-color'} */
class Block_46881914260a50b7b6fcc92_16412789 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <meta name="theme-color" content="<?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['theme_default'] === 'clear') {?>#f8bf00<?php } else { ?>#1C1D2C<?php }?>">
            <?php
}
}
/* {/block 'layout-header-head-theme-color'} */
/* {block 'layout-header-head-meta'} */
class Block_173000277260a50b7b6cf3b9_58733319 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <meta http-equiv="content-type" content="text/html; charset=<?php echo (defined('JTL_CHARSET') ? constant('JTL_CHARSET') : null);?>
">
            <meta name="description" itemprop="description" content=<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_194524370260a50b7b6d11b8_50837976', 'layout-header-head-meta-description', $this->tplIndex);
?>
">
            <?php if (!empty($_smarty_tpl->tpl_vars['meta_keywords']->value)) {?>
                <meta name="keywords" itemprop="keywords" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12616425960a50b7b6daac3_07079191', 'layout-header-head-meta-keywords', $this->tplIndex);
?>
">
            <?php }?>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <?php $_smarty_tpl->_assignInScope('noindex', $_smarty_tpl->tpl_vars['bNoIndex']->value === true || ((isset($_smarty_tpl->tpl_vars['Link']->value)) && $_smarty_tpl->tpl_vars['Link']->value->getNoFollow() === true));?>
            <meta name="robots" content="<?php if ($_smarty_tpl->tpl_vars['robotsContent']->value) {
echo $_smarty_tpl->tpl_vars['robotsContent']->value;
} elseif ($_smarty_tpl->tpl_vars['noindex']->value) {?>noindex<?php } else { ?>index, follow<?php }?>">

            <meta itemprop="url" content="<?php echo $_smarty_tpl->tpl_vars['cCanonicalURL']->value;?>
"/>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_46881914260a50b7b6fcc92_16412789', 'layout-header-head-theme-color', $this->tplIndex);
?>

            <meta property="og:type" content="website" />
            <meta property="og:site_name" content="<?php echo $_smarty_tpl->tpl_vars['meta_title']->value;?>
" />
            <meta property="og:title" content="<?php echo $_smarty_tpl->tpl_vars['meta_title']->value;?>
" />
            <meta property="og:description" content="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['meta_description']->value,1000,'',true ));?>
" />
            <meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['cCanonicalURL']->value;?>
"/>

            <?php if ($_smarty_tpl->tpl_vars['nSeitenTyp']->value === (defined('PAGE_ARTIKEL') ? constant('PAGE_ARTIKEL') : null) && !empty($_smarty_tpl->tpl_vars['Artikel']->value->Bilder)) {?>
                <meta itemprop="image" content="<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->Bilder[0]->cURLGross;?>
" />
                <meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->Bilder[0]->cURLGross;?>
">
            <?php } elseif ($_smarty_tpl->tpl_vars['nSeitenTyp']->value === (defined('PAGE_NEWSDETAIL') ? constant('PAGE_NEWSDETAIL') : null) && !empty($_smarty_tpl->tpl_vars['newsItem']->value->getPreviewImage())) {?>
                <meta itemprop="image" content="<?php echo $_smarty_tpl->tpl_vars['imageBaseURL']->value;
echo $_smarty_tpl->tpl_vars['newsItem']->value->getPreviewImage();?>
" />
                <meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['imageBaseURL']->value;
echo $_smarty_tpl->tpl_vars['newsItem']->value->getPreviewImage();?>
" />
            <?php } else { ?>
                <meta itemprop="image" content="<?php echo $_smarty_tpl->tpl_vars['ShopLogoURL']->value;?>
" />
                <meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['ShopLogoURL']->value;?>
" />
            <?php }?>
        <?php
}
}
/* {/block 'layout-header-head-meta'} */
/* {block 'layout-header-head-title'} */
class Block_70967243660a50b7b740ef1_12939538 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['meta_title']->value;
}
}
/* {/block 'layout-header-head-title'} */
/* {block 'layout-header-head-base'} */
class Block_187046276260a50b7b7457d2_39079560 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'layout-header-head-base'} */
/* {block 'layout-header-head-icons'} */
class Block_104641513760a50b7b746a94_47204442 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <link type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['shopFaviconURL']->value;?>
" rel="icon">
        <?php
}
}
/* {/block 'layout-header-head-icons'} */
/* {block 'layout-header-head-resources-crit'} */
class Block_40485490660a50b7b753880_33010706 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php echo file_get_contents(((string)$_smarty_tpl->tpl_vars['currentThemeDir']->value).((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['theme_default'])."_crit.css");?>

                <?php
}
}
/* {/block 'layout-header-head-resources-crit'} */
/* {block 'layout-header-head-resources'} */
class Block_27762585560a50b7b74a6a8_66373163 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if (empty($_smarty_tpl->tpl_vars['parentTemplateDir']->value)) {?>
                <?php $_smarty_tpl->_assignInScope('templateDir', $_smarty_tpl->tpl_vars['currentTemplateDir']->value);?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('templateDir', $_smarty_tpl->tpl_vars['parentTemplateDir']->value);?>
            <?php }?>
            <style id="criticalCSS">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_40485490660a50b7b753880_33010706', 'layout-header-head-resources-crit', $this->tplIndex);
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
/* {block 'layout-header-prev-next'} */
class Block_190586977660a50b7b7c8ff1_53071770 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if ($_smarty_tpl->tpl_vars['Suchergebnisse']->value->getPages()->getCurrentPage() > 1) {?>
                    <link rel="prev" href="<?php echo $_smarty_tpl->tpl_vars['filterPagination']->value->getPrev()->getURL();?>
">
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['Suchergebnisse']->value->getPages()->getCurrentPage() < $_smarty_tpl->tpl_vars['Suchergebnisse']->value->getPages()->getMaxPage()) {?>
                    <link rel="next" href="<?php echo $_smarty_tpl->tpl_vars['filterPagination']->value->getNext()->getURL();?>
">
                <?php }?>
            <?php
}
}
/* {/block 'layout-header-prev-next'} */
/* {block 'layout-header-head'} */
class Block_195175927960a50b7b6ce6b2_66767001 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <head>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_173000277260a50b7b6cf3b9_58733319', 'layout-header-head-meta', $this->tplIndex);
?>


        <title itemprop="name"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_70967243660a50b7b740ef1_12939538', 'layout-header-head-title', $this->tplIndex);
?>
</title>

        <?php if (!empty($_smarty_tpl->tpl_vars['cCanonicalURL']->value) && !$_smarty_tpl->tpl_vars['noindex']->value) {?>
            <link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['cCanonicalURL']->value;?>
">
        <?php }?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_187046276260a50b7b7457d2_39079560', 'layout-header-head-base', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_104641513760a50b7b746a94_47204442', 'layout-header-head-icons', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27762585560a50b7b74a6a8_66373163', 'layout-header-head-resources', $this->tplIndex);
?>


        <?php if ((isset($_smarty_tpl->tpl_vars['Suchergebnisse']->value)) && $_smarty_tpl->tpl_vars['Suchergebnisse']->value->getPages()->getMaxPage() > 1) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_190586977660a50b7b7c8ff1_53071770', 'layout-header-prev-next', $this->tplIndex);
?>

        <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['dbgBarHead']->value;?>


        <?php echo '<script'; ?>
>
            window.lazySizesConfig = window.lazySizesConfig || {};
            window.lazySizesConfig.expand  = 50;
        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['templateDir']->value;?>
js/jquery-3.5.1.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['templateDir']->value;?>
js/lazysizes.min.js"><?php echo '</script'; ?>
>

        <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['general']['use_minify'] === 'N') {?>
            <?php if ((isset($_smarty_tpl->tpl_vars['cPluginJsHead_arr']->value))) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cPluginJsHead_arr']->value, 'cJS');
$_smarty_tpl->tpl_vars['cJS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cJS']->value) {
$_smarty_tpl->tpl_vars['cJS']->do_else = false;
?>
                    <?php echo '<script'; ?>
 defer src="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['cJS']->value;?>
?v=<?php echo $_smarty_tpl->tpl_vars['nTemplateVersion']->value;?>
"><?php echo '</script'; ?>
>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cJS_arr']->value, 'cJS');
$_smarty_tpl->tpl_vars['cJS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cJS']->value) {
$_smarty_tpl->tpl_vars['cJS']->do_else = false;
?>
                <?php echo '<script'; ?>
 defer src="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['cJS']->value;?>
?v=<?php echo $_smarty_tpl->tpl_vars['nTemplateVersion']->value;?>
"><?php echo '</script'; ?>
>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cPluginJsBody_arr']->value, 'cJS');
$_smarty_tpl->tpl_vars['cJS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cJS']->value) {
$_smarty_tpl->tpl_vars['cJS']->do_else = false;
?>
                <?php echo '<script'; ?>
 defer src="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['cJS']->value;?>
?v=<?php echo $_smarty_tpl->tpl_vars['nTemplateVersion']->value;?>
"><?php echo '</script'; ?>
>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php } else { ?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['minifiedJS']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <?php echo '<script'; ?>
 defer src="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
"><?php echo '</script'; ?>
>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>

        <?php if (file_exists(($_smarty_tpl->tpl_vars['currentTemplateDirFullPath']->value).('js/custom.js'))) {?>
            <?php echo '<script'; ?>
 defer src="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['currentTemplateDir']->value;?>
js/custom.js?v=<?php echo $_smarty_tpl->tpl_vars['nTemplateVersion']->value;?>
"><?php echo '</script'; ?>
>
        <?php }?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getUploaderLang'][0], array( array('iso'=>(($tmp = $_SESSION['currentLanguage']->cISO639 ?? null)===null||$tmp==='' ? '' : $tmp),'assign'=>'uploaderLang'),$_smarty_tpl ) );?>


        <link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['templateDir']->value;?>
themes/base/fontawesome/webfonts/fa-solid-900.woff2" as="font" crossorigin/>
        <link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['templateDir']->value;?>
themes/base/fontawesome/webfonts/fa-regular-400.woff2" as="font" crossorigin/>
        <link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['templateDir']->value;?>
themes/base/fonts/opensans/open-sans-600.woff2" as="font" crossorigin/>
        <link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['templateDir']->value;?>
themes/base/fonts/opensans/open-sans-regular.woff2" as="font" crossorigin/>
        <link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['templateDir']->value;?>
themes/base/fonts/montserrat/Montserrat-SemiBold.woff2" as="font" crossorigin/>
        <link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['templateDir']->value;?>
js/app/globals.js" as="script" crossorigin>
        <link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['templateDir']->value;?>
js/app/snippets/form-counter.js" as="script" crossorigin>
        <link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['templateDir']->value;?>
js/app/plugins/navscrollbar.js" as="script" crossorigin>
        <link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['templateDir']->value;?>
js/app/plugins/tabdrop.js" as="script" crossorigin>
        <link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['templateDir']->value;?>
js/app/views/header.js" as="script" crossorigin>
        <link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['templateDir']->value;?>
js/app/views/productdetails.js" as="script" crossorigin>
        
        <?php if (!empty($_smarty_tpl->tpl_vars['oUploadSchema_arr']->value)) {?>
            <?php echo '<script'; ?>
 defer src="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['templateDir']->value;?>
js/fileinput/fileinput.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 defer src="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['templateDir']->value;?>
js/fileinput/themes/fas/theme.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 defer src="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['templateDir']->value;?>
js/fileinput/locales/<?php echo $_smarty_tpl->tpl_vars['uploaderLang']->value;?>
.js"><?php echo '</script'; ?>
>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['preisverlauf']['preisverlauf_anzeigen'] === 'Y' && !empty($_smarty_tpl->tpl_vars['bPreisverlauf']->value)) {?>
            <?php echo '<script'; ?>
 defer src="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['templateDir']->value;?>
js/Chart.bundle.min.js"><?php echo '</script'; ?>
>
        <?php }?>
        <?php echo '<script'; ?>
 type="module" src="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['templateDir']->value;?>
js/app/app.js"><?php echo '</script'; ?>
>
    </head>
    <?php
}
}
/* {/block 'layout-header-head'} */
/* {block 'layout-header-body-tag'} */
class Block_110947266160a50b7b8645b3_64901650 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <body class="<?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['button_animated'] === 'Y') {?>btn-animated<?php }?>
                     <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['wish_compare_animation'] === 'mobile' || $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['wish_compare_animation'] === 'both') {?>wish-compare-animation-mobile<?php }?>
                     <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['wish_compare_animation'] === 'desktop' || $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['wish_compare_animation'] === 'both') {?>wish-compare-animation-desktop<?php }?>
                     <?php if ($_smarty_tpl->tpl_vars['isMobile']->value) {?>is-mobile<?php }?>
                     <?php if ($_smarty_tpl->tpl_vars['nSeitenTyp']->value === (defined('PAGE_BESTELLVORGANG') ? constant('PAGE_BESTELLVORGANG') : null)) {?> is-checkout<?php }?>"
              data-page="<?php echo $_smarty_tpl->tpl_vars['nSeitenTyp']->value;?>
"
              <?php if ((isset($_smarty_tpl->tpl_vars['Link']->value)) && !empty($_smarty_tpl->tpl_vars['Link']->value->getIdentifier())) {?> id="<?php echo $_smarty_tpl->tpl_vars['Link']->value->getIdentifier();?>
"<?php }?>>
    <?php
}
}
/* {/block 'layout-header-body-tag'} */
/* {block 'layout-header-maintenance-alert'} */
class Block_123719621660a50b7b89da82_32578087 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_block_plugin14 = isset($_smarty_tpl->smarty->registered_plugins['block']['alert'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['alert'][0][0] : null;
if (!is_callable(array($_block_plugin14, 'render'))) {
throw new SmartyException('block tag \'alert\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('alert', array('show'=>true,'variant'=>"warning",'id'=>"maintenance-mode",'dismissible'=>true));
$_block_repeat=true;
echo $_block_plugin14->render(array('show'=>true,'variant'=>"warning",'id'=>"maintenance-mode",'dismissible'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'adminMaintenanceMode'),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin14->render(array('show'=>true,'variant'=>"warning",'id'=>"maintenance-mode",'dismissible'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
}
}
/* {/block 'layout-header-maintenance-alert'} */
/* {block 'layout-header-safemode-alert'} */
class Block_144114160260a50b7b8a7255_39497758 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_block_plugin15 = isset($_smarty_tpl->smarty->registered_plugins['block']['alert'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['alert'][0][0] : null;
if (!is_callable(array($_block_plugin15, 'render'))) {
throw new SmartyException('block tag \'alert\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('alert', array('show'=>true,'variant'=>"warning",'id'=>"safe-mode",'dismissible'=>true));
$_block_repeat=true;
echo $_block_plugin15->render(array('show'=>true,'variant'=>"warning",'id'=>"safe-mode",'dismissible'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'safeModeActive'),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin15->render(array('show'=>true,'variant'=>"warning",'id'=>"safe-mode",'dismissible'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
}
}
/* {/block 'layout-header-safemode-alert'} */
/* {block 'layout-header-branding-top-bar'} */
class Block_60212108660a50b7b91c4b4_15328053 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if (!$_smarty_tpl->tpl_vars['isMobile']->value) {?>
                    <div id="header-top-bar" class="d-none topbar-wrapper <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['megamenu']['header_full_width'] === 'Y') {?>is-fullwidth<?php }?> <?php if ($_smarty_tpl->tpl_vars['nSeitenTyp']->value !== (defined('PAGE_BESTELLVORGANG') ? constant('PAGE_BESTELLVORGANG') : null)) {?>d-lg-flex<?php }?>">
                        <div class="container-fluid <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['megamenu']['header_full_width'] === 'N') {?>container-fluid-xl<?php }?> <?php if ($_smarty_tpl->tpl_vars['nSeitenTyp']->value !== (defined('PAGE_BESTELLVORGANG') ? constant('PAGE_BESTELLVORGANG') : null)) {?>d-lg-flex flex-row-reverse<?php }?>">
                            <?php $_smarty_tpl->_subTemplateRender('file:layout/header_top_bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        </div>
                    </div>
                <?php }?>
            <?php
}
}
/* {/block 'layout-header-branding-top-bar'} */
/* {block 'layout-header-navbar-toggle'} */
class Block_68948780660a50b7b9394c6_74135767 extends Smarty_Internal_Block
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
class Block_60813291960a50b7b93cf32_12121557 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <div id="logo" class="logo-wrapper" itemprop="publisher" itemscope itemtype="http://schema.org/Organization">
                                    <span itemprop="name" class="d-none"><?php echo $_smarty_tpl->tpl_vars['meta_publisher']->value;?>
</span>
                                    <meta itemprop="url" content="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
">
                                    <meta itemprop="logo" content="<?php echo $_smarty_tpl->tpl_vars['ShopLogoURL']->value;?>
">
                                    <?php $_block_plugin16 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin16, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('class'=>"navbar-brand",'href'=>$_smarty_tpl->tpl_vars['ShopURL']->value,'title'=>$_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_shopname']));
$_block_repeat=true;
echo $_block_plugin16->render(array('class'=>"navbar-brand",'href'=>$_smarty_tpl->tpl_vars['ShopURL']->value,'title'=>$_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_shopname']), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['ShopLogoURL']->value))) {?>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0], array( array('src'=>$_smarty_tpl->tpl_vars['ShopLogoURL']->value,'alt'=>$_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_shopname'],'id'=>"shop-logo"),$_smarty_tpl ) );?>

                                    <?php } else { ?>
                                        <span class="h1"><?php echo $_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_shopname'];?>
</span>
                                    <?php }?>
                                    <?php $_block_repeat=false;
echo $_block_plugin16->render(array('class'=>"navbar-brand",'href'=>$_smarty_tpl->tpl_vars['ShopURL']->value,'title'=>$_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_shopname']), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                </div>
                            <?php
}
}
/* {/block 'layout-header-logo'} */
/* {block 'layout-header-search'} */
class Block_163169924660a50b7b95a289_44333578 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['mobile_search_type'] === 'fixed') {?>
                                    <div class="d-lg-none search-form-wrapper-fixed container-fluid container-fluid-xl order-1">
                                        <?php $_smarty_tpl->_subTemplateRender('file:snippets/search_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>'search-header-mobile-top'), 0, false);
?>
                                    </div>
                                <?php }?>
                            <?php
}
}
/* {/block 'layout-header-search'} */
/* {block 'layout-header-secure-checkout-title'} */
class Block_121508599560a50b7b963b89_10348141 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <i class="fas fa-lock icon-mr-2"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'secureCheckout','section'=>'checkout'),$_smarty_tpl ) );?>

                                        <?php
}
}
/* {/block 'layout-header-secure-checkout-title'} */
/* {block 'layout-header-secure-include-header-top-bar'} */
class Block_12805872760a50b7b966ba7_61288969 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <?php $_smarty_tpl->_subTemplateRender('file:layout/header_top_bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                        <?php
}
}
/* {/block 'layout-header-secure-include-header-top-bar'} */
/* {block 'layout-header-secure-checkout'} */
class Block_144718599860a50b7b963050_34640899 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <div class="secure-checkout-icon ml-auto-util ml-lg-0">
                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121508599560a50b7b963b89_10348141', 'layout-header-secure-checkout-title', $this->tplIndex);
?>

                                    </div>
                                    <div class="secure-checkout-topbar ml-auto-util d-none d-lg-block">
                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12805872760a50b7b966ba7_61288969', 'layout-header-secure-include-header-top-bar', $this->tplIndex);
?>

                                    </div>
                                <?php
}
}
/* {/block 'layout-header-secure-checkout'} */
/* {block 'layout-header-branding-shop-nav-include-language-dropdown'} */
class Block_188435301460a50b7b96ccd5_80035890 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <?php $_smarty_tpl->_subTemplateRender('file:snippets/language_dropdown.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dropdownClass'=>'d-flex d-lg-none'), 0, false);
?>
                                        <?php
}
}
/* {/block 'layout-header-branding-shop-nav-include-language-dropdown'} */
/* {block 'layout-header-branding-shop-nav'} */
class Block_72587520360a50b7b969788_18142879 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_block_plugin18 = isset($_smarty_tpl->smarty->registered_plugins['block']['nav'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['nav'][0][0] : null;
if (!is_callable(array($_block_plugin18, 'render'))) {
throw new SmartyException('block tag \'nav\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('nav', array('id'=>"shop-nav",'right'=>true,'class'=>"nav-right order-lg-last nav-icons"));
$_block_repeat=true;
echo $_block_plugin18->render(array('id'=>"shop-nav",'right'=>true,'class'=>"nav-right order-lg-last nav-icons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_188435301460a50b7b96ccd5_80035890', 'layout-header-branding-shop-nav-include-language-dropdown', $this->tplIndex);
?>

                                        <?php $_smarty_tpl->_subTemplateRender('file:layout/header_nav_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                    <?php $_block_repeat=false;
echo $_block_plugin18->render(array('id'=>"shop-nav",'right'=>true,'class'=>"nav-right order-lg-last nav-icons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php
}
}
/* {/block 'layout-header-branding-shop-nav'} */
/* {block 'layout-header-include-categories-mega-toggler'} */
class Block_13548670860a50b7b9836c7_79946648 extends Smarty_Internal_Block
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
class Block_180761631260a50b7b986dc5_15201140 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                            <?php $_block_plugin22 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin22, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>"#",'class'=>"nav-offcanvas-title d-none",'data'=>array("menu-back"=>'')));
$_block_repeat=true;
echo $_block_plugin22->render(array('href'=>"#",'class'=>"nav-offcanvas-title d-none",'data'=>array("menu-back"=>'')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                                <span class="fas fa-chevron-left icon-mr-2"></span>
                                                                <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'back'),$_smarty_tpl ) );?>
</span>
                                                            <?php $_block_repeat=false;
echo $_block_plugin22->render(array('href'=>"#",'class'=>"nav-offcanvas-title d-none",'data'=>array("menu-back"=>'')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                        <?php
}
}
/* {/block 'layout-header-include-categories-mega-back'} */
/* {block 'layout-header-include-include-categories-header'} */
class Block_113893621060a50b7b97a280_97967539 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <div class="nav-mobile-header d-lg-none">
                                                <?php $_block_plugin19 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin19, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('class'=>"align-items-center-util"));
$_block_repeat=true;
echo $_block_plugin19->render(array('class'=>"align-items-center-util"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <?php $_block_plugin20 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin20, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('class'=>"nav-mobile-header-toggler"));
$_block_repeat=true;
echo $_block_plugin20->render(array('class'=>"nav-mobile-header-toggler"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13548670860a50b7b9836c7_79946648', 'layout-header-include-categories-mega-toggler', $this->tplIndex);
?>

                                                    <?php $_block_repeat=false;
echo $_block_plugin20->render(array('class'=>"nav-mobile-header-toggler"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                    <?php $_block_plugin21 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin21, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('class'=>"col-auto nav-mobile-header-name ml-auto-util"));
$_block_repeat=true;
echo $_block_plugin21->render(array('class'=>"col-auto nav-mobile-header-name ml-auto-util"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                        <span class="nav-offcanvas-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'menuName'),$_smarty_tpl ) );?>
</span>
                                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_180761631260a50b7b986dc5_15201140', 'layout-header-include-categories-mega-back', $this->tplIndex);
?>

                                                    <?php $_block_repeat=false;
echo $_block_plugin21->render(array('class'=>"col-auto nav-mobile-header-name ml-auto-util"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                <?php $_block_repeat=false;
echo $_block_plugin19->render(array('class'=>"align-items-center-util"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                <hr class="nav-mobile-header-hr" />
                                            </div>
                                        <?php
}
}
/* {/block 'layout-header-include-include-categories-header'} */
/* {block 'layout-header-include-include-categories-mega'} */
class Block_68490368360a50b7b9a62c4_75688608 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                        <?php $_smarty_tpl->_subTemplateRender('file:snippets/categories_mega.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                                    <?php
}
}
/* {/block 'layout-header-include-include-categories-mega'} */
/* {block 'layout-header-include-include-categories-body'} */
class Block_150275819960a50b7b998d21_83380404 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <div class="nav-mobile-body">
                                                <?php $_block_plugin23 = isset($_smarty_tpl->smarty->registered_plugins['block']['navbarnav'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['navbarnav'][0][0] : null;
if (!is_callable(array($_block_plugin23, 'render'))) {
throw new SmartyException('block tag \'navbarnav\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('navbarnav', array('class'=>"nav-scrollbar-inner mr-auto"));
$_block_repeat=true;
echo $_block_plugin23->render(array('class'=>"nav-scrollbar-inner mr-auto"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_68490368360a50b7b9a62c4_75688608', 'layout-header-include-include-categories-mega', $this->tplIndex);
?>

                                                <?php $_block_repeat=false;
echo $_block_plugin23->render(array('class'=>"nav-scrollbar-inner mr-auto"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            </div>
                                        <?php
}
}
/* {/block 'layout-header-include-include-categories-body'} */
/* {block 'layout-header-include-categories-mega'} */
class Block_211096459060a50b7b979313_46194185 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <div id="mainNavigation" class="collapse navbar-collapse nav-scrollbar">
                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_113893621060a50b7b97a280_97967539', 'layout-header-include-include-categories-header', $this->tplIndex);
?>

                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_150275819960a50b7b998d21_83380404', 'layout-header-include-include-categories-body', $this->tplIndex);
?>

                                    </div>
                                <?php
}
}
/* {/block 'layout-header-include-categories-mega'} */
/* {block 'layout-header-category-nav'} */
class Block_134016836860a50b7b9386a9_15503081 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div class="toggler-logo-wrapper">
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_68948780660a50b7b9394c6_74135767', 'layout-header-navbar-toggle', $this->tplIndex);
?>


                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_60813291960a50b7b93cf32_12121557', 'layout-header-logo', $this->tplIndex);
?>

                        </div>
                        <?php ob_start();
if ($_smarty_tpl->tpl_vars['nSeitenTyp']->value === (defined('PAGE_BESTELLVORGANG') ? constant('PAGE_BESTELLVORGANG') : null)) {
echo "align-items-center-util";
} else {
echo "align-items-lg-end";
}
$_prefixVariable3=ob_get_clean();
$_block_plugin17 = isset($_smarty_tpl->smarty->registered_plugins['block']['navbar'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['navbar'][0][0] : null;
if (!is_callable(array($_block_plugin17, 'render'))) {
throw new SmartyException('block tag \'navbar\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('navbar', array('toggleable'=>true,'fill'=>true,'type'=>"expand-lg",'class'=>"justify-content-start ".$_prefixVariable3));
$_block_repeat=true;
echo $_block_plugin17->render(array('toggleable'=>true,'fill'=>true,'type'=>"expand-lg",'class'=>"justify-content-start ".$_prefixVariable3), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                           <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_163169924660a50b7b95a289_44333578', 'layout-header-search', $this->tplIndex);
?>


                            <?php if ($_smarty_tpl->tpl_vars['nSeitenTyp']->value === (defined('PAGE_BESTELLVORGANG') ? constant('PAGE_BESTELLVORGANG') : null)) {?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_144718599860a50b7b963050_34640899', 'layout-header-secure-checkout', $this->tplIndex);
?>

                            <?php } else { ?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_72587520360a50b7b969788_18142879', 'layout-header-branding-shop-nav', $this->tplIndex);
?>


                                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_211096459060a50b7b979313_46194185', 'layout-header-include-categories-mega', $this->tplIndex);
?>

                            <?php }?>
                        <?php $_block_repeat=false;
echo $_block_plugin17->render(array('toggleable'=>true,'fill'=>true,'type'=>"expand-lg",'class'=>"justify-content-start ".$_prefixVariable3), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php
}
}
/* {/block 'layout-header-category-nav'} */
/* {block 'layout-header-container-inner'} */
class Block_141374190160a50b7b92c286_47970544 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="container-fluid <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['megamenu']['header_full_width'] === 'N') {?>container-fluid-xl<?php }?>">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_134016836860a50b7b9386a9_15503081', 'layout-header-category-nav', $this->tplIndex);
?>

                    </div>
                <?php
}
}
/* {/block 'layout-header-container-inner'} */
/* {block 'layout-header-search-fixed'} */
class Block_36888391160a50b7b9ac3b9_65975443 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['mobile_search_type'] === 'fixed' && $_smarty_tpl->tpl_vars['isMobile']->value) {?>
                    <div class="container-fluid container-fluid-xl fixed-search fixed-top smoothscroll-top-search d-lg-none d-none">
                        <?php $_smarty_tpl->_subTemplateRender('file:snippets/search_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>'search-header-mobile-fixed'), 0, true);
?>
                    </div>
                <?php }?>
            <?php
}
}
/* {/block 'layout-header-search-fixed'} */
/* {block 'layout-header-header'} */
class Block_199313377460a50b7b8e5593_76067680 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_60212108660a50b7b91c4b4_15328053', 'layout-header-branding-top-bar', $this->tplIndex);
?>

            <header class="d-print-none <?php if (!$_smarty_tpl->tpl_vars['isMobile']->value || $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['mobile_search_type'] !== 'fixed') {?>sticky-top<?php }?> fixed-navbar" id="jtl-nav-wrapper">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_141374190160a50b7b92c286_47970544', 'layout-header-container-inner', $this->tplIndex);
?>

            </header>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36888391160a50b7b9ac3b9_65975443', 'layout-header-search-fixed', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'layout-header-header'} */
/* {block 'layout-header-main-wrapper-starttag'} */
class Block_44715634760a50b7b9be478_21635584 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <main id="main-wrapper" class="<?php if ($_smarty_tpl->tpl_vars['bExclusive']->value) {?> exclusive<?php }
if ($_smarty_tpl->tpl_vars['hasLeftPanel']->value) {?> aside-active<?php }?>">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_main','inContainer'=>false),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'layout-header-main-wrapper-starttag'} */
/* {block 'layout-header-fluid-banner-include-banner'} */
class Block_114344708860a50b7b9ea068_95161025 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:snippets/banner.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('isFluid'=>true), 0, false);
?>
            <?php
}
}
/* {/block 'layout-header-fluid-banner-include-banner'} */
/* {block 'layout-header-fluid-banner-include-slider'} */
class Block_146899043360a50b7b9fd697_61188932 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:snippets/slider.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('isFluid'=>true), 0, false);
?>
            <?php
}
}
/* {/block 'layout-header-fluid-banner-include-slider'} */
/* {block 'layout-header-fluid-banner'} */
class Block_72563594760a50b7b9d6282_75433297 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_assignInScope('isFluidBanner', $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['banner_full_width'] === 'Y' && (isset($_smarty_tpl->tpl_vars['oImageMap']->value)));?>
        <?php if ($_smarty_tpl->tpl_vars['isFluidBanner']->value) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_114344708860a50b7b9ea068_95161025', 'layout-header-fluid-banner-include-banner', $this->tplIndex);
?>

        <?php }?>
        <?php $_smarty_tpl->_assignInScope('isFluidSlider', $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['slider_full_width'] === 'Y' && (isset($_smarty_tpl->tpl_vars['oSlider']->value)) && count($_smarty_tpl->tpl_vars['oSlider']->value->getSlides()) > 0);?>
        <?php if ($_smarty_tpl->tpl_vars['isFluidSlider']->value) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_146899043360a50b7b9fd697_61188932', 'layout-header-fluid-banner-include-slider', $this->tplIndex);
?>

        <?php }?>
    <?php
}
}
/* {/block 'layout-header-fluid-banner'} */
/* {block 'layout-header-content-wrapper-starttag'} */
class Block_74990917260a50b7ba01663_99160334 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="content-wrapper"
                 class="<?php if ((defined('PAGE_ARTIKELLISTE') ? constant('PAGE_ARTIKELLISTE') : null) === $_smarty_tpl->tpl_vars['nSeitenTyp']->value) {?>is-item-list container-fluid container-fluid-xl<?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['isFluidBanner']->value || $_smarty_tpl->tpl_vars['isFluidSlider']->value) {?> has-fluid<?php }?>">
        <?php
}
}
/* {/block 'layout-header-content-wrapper-starttag'} */
/* {block 'layout-header-breadcrumb'} */
class Block_132494425660a50b7ba08b69_73088735 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_block_plugin24 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin24, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array('fluid'=>((defined('PAGE_ARTIKELLISTE') ? constant('PAGE_ARTIKELLISTE') : null) === $_smarty_tpl->tpl_vars['nSeitenTyp']->value),'class'=>"breadcrumb-container"));
$_block_repeat=true;
echo $_block_plugin24->render(array('fluid'=>((defined('PAGE_ARTIKELLISTE') ? constant('PAGE_ARTIKELLISTE') : null) === $_smarty_tpl->tpl_vars['nSeitenTyp']->value),'class'=>"breadcrumb-container"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_smarty_tpl->_subTemplateRender('file:layout/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php $_block_repeat=false;
echo $_block_plugin24->render(array('fluid'=>((defined('PAGE_ARTIKELLISTE') ? constant('PAGE_ARTIKELLISTE') : null) === $_smarty_tpl->tpl_vars['nSeitenTyp']->value),'class'=>"breadcrumb-container"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php
}
}
/* {/block 'layout-header-breadcrumb'} */
/* {block 'layout-header-content-starttag'} */
class Block_137948843460a50b7ba0d934_39109261 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="content">
        <?php
}
}
/* {/block 'layout-header-content-starttag'} */
/* {block 'layout-header-content-productlist-starttags'} */
class Block_96800072260a50b7bb2c664_89603875 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div class="row">
                    <div class="col-lg-8 col-xl-9 ml-auto-util order-lg-1">
            <?php
}
}
/* {/block 'layout-header-content-productlist-starttags'} */
/* {block 'layout-header-alert'} */
class Block_133627607060a50b7bb2dfb9_09491242 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:snippets/alert_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'layout-header-alert'} */
/* {block 'layout-header-content-all-starttags'} */
class Block_29344965260a50b7ba00b53_79116520 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_74990917260a50b7ba01663_99160334', 'layout-header-content-wrapper-starttag', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132494425660a50b7ba08b69_73088735', 'layout-header-breadcrumb', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_137948843460a50b7ba0d934_39109261', 'layout-header-content-starttag', $this->tplIndex);
?>


        <?php if (!$_smarty_tpl->tpl_vars['bExclusive']->value && !empty(trim(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['boxes']->value['left']))) && (defined('PAGE_ARTIKELLISTE') ? constant('PAGE_ARTIKELLISTE') : null) === $_smarty_tpl->tpl_vars['nSeitenTyp']->value) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_96800072260a50b7bb2c664_89603875', 'layout-header-content-productlist-starttags', $this->tplIndex);
?>

        <?php }?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_133627607060a50b7bb2dfb9_09491242', 'layout-header-alert', $this->tplIndex);
?>


    <?php
}
}
/* {/block 'layout-header-content-all-starttags'} */
/* {block 'layout-header'} */
class Block_83496410360a50b7b6a28a7_06168116 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout-header' => 
  array (
    0 => 'Block_83496410360a50b7b6a28a7_06168116',
  ),
  'layout-header-doctype' => 
  array (
    0 => 'Block_152529611360a50b7b6a35a9_95536555',
  ),
  'layout-header-html-attributes' => 
  array (
    0 => 'Block_141048160860a50b7b6b1727_93742115',
  ),
  'layout-header-head' => 
  array (
    0 => 'Block_195175927960a50b7b6ce6b2_66767001',
  ),
  'layout-header-head-meta' => 
  array (
    0 => 'Block_173000277260a50b7b6cf3b9_58733319',
  ),
  'layout-header-head-meta-description' => 
  array (
    0 => 'Block_194524370260a50b7b6d11b8_50837976',
  ),
  'layout-header-head-meta-keywords' => 
  array (
    0 => 'Block_12616425960a50b7b6daac3_07079191',
  ),
  'layout-header-head-theme-color' => 
  array (
    0 => 'Block_46881914260a50b7b6fcc92_16412789',
  ),
  'layout-header-head-title' => 
  array (
    0 => 'Block_70967243660a50b7b740ef1_12939538',
  ),
  'layout-header-head-base' => 
  array (
    0 => 'Block_187046276260a50b7b7457d2_39079560',
  ),
  'layout-header-head-icons' => 
  array (
    0 => 'Block_104641513760a50b7b746a94_47204442',
  ),
  'layout-header-head-resources' => 
  array (
    0 => 'Block_27762585560a50b7b74a6a8_66373163',
  ),
  'layout-header-head-resources-crit' => 
  array (
    0 => 'Block_40485490660a50b7b753880_33010706',
  ),
  'layout-header-prev-next' => 
  array (
    0 => 'Block_190586977660a50b7b7c8ff1_53071770',
  ),
  'layout-header-body-tag' => 
  array (
    0 => 'Block_110947266160a50b7b8645b3_64901650',
  ),
  'layout-header-maintenance-alert' => 
  array (
    0 => 'Block_123719621660a50b7b89da82_32578087',
  ),
  'layout-header-safemode-alert' => 
  array (
    0 => 'Block_144114160260a50b7b8a7255_39497758',
  ),
  'layout-header-header' => 
  array (
    0 => 'Block_199313377460a50b7b8e5593_76067680',
  ),
  'layout-header-branding-top-bar' => 
  array (
    0 => 'Block_60212108660a50b7b91c4b4_15328053',
  ),
  'layout-header-container-inner' => 
  array (
    0 => 'Block_141374190160a50b7b92c286_47970544',
  ),
  'layout-header-category-nav' => 
  array (
    0 => 'Block_134016836860a50b7b9386a9_15503081',
  ),
  'layout-header-navbar-toggle' => 
  array (
    0 => 'Block_68948780660a50b7b9394c6_74135767',
  ),
  'layout-header-logo' => 
  array (
    0 => 'Block_60813291960a50b7b93cf32_12121557',
  ),
  'layout-header-search' => 
  array (
    0 => 'Block_163169924660a50b7b95a289_44333578',
  ),
  'layout-header-secure-checkout' => 
  array (
    0 => 'Block_144718599860a50b7b963050_34640899',
  ),
  'layout-header-secure-checkout-title' => 
  array (
    0 => 'Block_121508599560a50b7b963b89_10348141',
  ),
  'layout-header-secure-include-header-top-bar' => 
  array (
    0 => 'Block_12805872760a50b7b966ba7_61288969',
  ),
  'layout-header-branding-shop-nav' => 
  array (
    0 => 'Block_72587520360a50b7b969788_18142879',
  ),
  'layout-header-branding-shop-nav-include-language-dropdown' => 
  array (
    0 => 'Block_188435301460a50b7b96ccd5_80035890',
  ),
  'layout-header-include-categories-mega' => 
  array (
    0 => 'Block_211096459060a50b7b979313_46194185',
  ),
  'layout-header-include-include-categories-header' => 
  array (
    0 => 'Block_113893621060a50b7b97a280_97967539',
  ),
  'layout-header-include-categories-mega-toggler' => 
  array (
    0 => 'Block_13548670860a50b7b9836c7_79946648',
  ),
  'layout-header-include-categories-mega-back' => 
  array (
    0 => 'Block_180761631260a50b7b986dc5_15201140',
  ),
  'layout-header-include-include-categories-body' => 
  array (
    0 => 'Block_150275819960a50b7b998d21_83380404',
  ),
  'layout-header-include-include-categories-mega' => 
  array (
    0 => 'Block_68490368360a50b7b9a62c4_75688608',
  ),
  'layout-header-search-fixed' => 
  array (
    0 => 'Block_36888391160a50b7b9ac3b9_65975443',
  ),
  'layout-header-main-wrapper-starttag' => 
  array (
    0 => 'Block_44715634760a50b7b9be478_21635584',
  ),
  'layout-header-fluid-banner' => 
  array (
    0 => 'Block_72563594760a50b7b9d6282_75433297',
  ),
  'layout-header-fluid-banner-include-banner' => 
  array (
    0 => 'Block_114344708860a50b7b9ea068_95161025',
  ),
  'layout-header-fluid-banner-include-slider' => 
  array (
    0 => 'Block_146899043360a50b7b9fd697_61188932',
  ),
  'layout-header-content-all-starttags' => 
  array (
    0 => 'Block_29344965260a50b7ba00b53_79116520',
  ),
  'layout-header-content-wrapper-starttag' => 
  array (
    0 => 'Block_74990917260a50b7ba01663_99160334',
  ),
  'layout-header-breadcrumb' => 
  array (
    0 => 'Block_132494425660a50b7ba08b69_73088735',
  ),
  'layout-header-content-starttag' => 
  array (
    0 => 'Block_137948843460a50b7ba0d934_39109261',
  ),
  'layout-header-content-productlist-starttags' => 
  array (
    0 => 'Block_96800072260a50b7bb2c664_89603875',
  ),
  'layout-header-alert' => 
  array (
    0 => 'Block_133627607060a50b7bb2dfb9_09491242',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_152529611360a50b7b6a35a9_95536555', 'layout-header-doctype', $this->tplIndex);
?>

    <html <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_141048160860a50b7b6b1727_93742115', 'layout-header-html-attributes', $this->tplIndex);
?>
>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_195175927960a50b7b6ce6b2_66767001', 'layout-header-head', $this->tplIndex);
?>


    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['has_boxes'][0], array( array('position'=>'left','assign'=>'hasLeftPanel'),$_smarty_tpl ) );?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_110947266160a50b7b8645b3_64901650', 'layout-header-body-tag', $this->tplIndex);
?>

    <?php if (!$_smarty_tpl->tpl_vars['bExclusive']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['opcDir']->value).('tpl/startmenu.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

        <?php if ($_smarty_tpl->tpl_vars['bAdminWartungsmodus']->value) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_123719621660a50b7b89da82_32578087', 'layout-header-maintenance-alert', $this->tplIndex);
?>

        <?php }?>
        <?php if ((defined('SAFE_MODE') ? constant('SAFE_MODE') : null) === true) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_144114160260a50b7b8a7255_39497758', 'layout-header-safemode-alert', $this->tplIndex);
?>

        <?php }?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_199313377460a50b7b8e5593_76067680', 'layout-header-header', $this->tplIndex);
?>

    <?php }?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_44715634760a50b7b9be478_21635584', 'layout-header-main-wrapper-starttag', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_72563594760a50b7b9d6282_75433297', 'layout-header-fluid-banner', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_29344965260a50b7ba00b53_79116520', 'layout-header-content-all-starttags', $this->tplIndex);
}
}
/* {/block 'layout-header'} */
}
