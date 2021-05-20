<?php
/* Smarty version 3.1.38, created on 2021-05-04 11:46:09
  from 'C:\xampp\htdocs\shop\templates\NOVA\layout\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_609117e1d08bf8_81939945',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76e5d1018ea3c89bf826136f6a8f569a8183e9e8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\templates\\NOVA\\layout\\header.tpl',
      1 => 1612177967,
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
function content_609117e1d08bf8_81939945 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_371189809609117e1842411_16602358', 'layout-header');
?>

<?php }
/* {block 'layout-header-doctype'} */
class Block_1192326139609117e1843046_54266132 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html><?php
}
}
/* {/block 'layout-header-doctype'} */
/* {block 'layout-header-html-attributes'} */
class Block_2019073460609117e1844114_51541049 extends Smarty_Internal_Block
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
class Block_1950583690609117e184b6a8_31817541 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
"<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['meta_description']->value,1000,'',true ));
}
}
/* {/block 'layout-header-head-meta-description'} */
/* {block 'layout-header-head-meta-keywords'} */
class Block_682099900609117e184f6b0_43221719 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['meta_keywords']->value,255,'',true ));
}
}
/* {/block 'layout-header-head-meta-keywords'} */
/* {block 'layout-header-head-theme-color'} */
class Block_1672858903609117e1858613_93431482 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <meta name="theme-color" content="<?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['theme_default'] === 'clear') {?>#f8bf00<?php } else { ?>#1C1D2C<?php }?>">
            <?php
}
}
/* {/block 'layout-header-head-theme-color'} */
/* {block 'layout-header-head-meta'} */
class Block_608638444609117e1849a85_30797386 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <meta http-equiv="content-type" content="text/html; charset=<?php echo (defined('JTL_CHARSET') ? constant('JTL_CHARSET') : null);?>
">
            <meta name="description" itemprop="description" content=<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1950583690609117e184b6a8_31817541', 'layout-header-head-meta-description', $this->tplIndex);
?>
">
            <?php if (!empty($_smarty_tpl->tpl_vars['meta_keywords']->value)) {?>
                <meta name="keywords" itemprop="keywords" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_682099900609117e184f6b0_43221719', 'layout-header-head-meta-keywords', $this->tplIndex);
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1672858903609117e1858613_93431482', 'layout-header-head-theme-color', $this->tplIndex);
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
class Block_332495115609117e186a149_93671842 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['meta_title']->value;
}
}
/* {/block 'layout-header-head-title'} */
/* {block 'layout-header-head-base'} */
class Block_1624951627609117e186d229_98732037 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'layout-header-head-base'} */
/* {block 'layout-header-head-icons'} */
class Block_2140395320609117e186dff2_18043159 extends Smarty_Internal_Block
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
class Block_1671307469609117e1875335_53731080 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php echo file_get_contents(((string)$_smarty_tpl->tpl_vars['currentThemeDir']->value).((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['theme_default'])."_crit.css");?>

                <?php
}
}
/* {/block 'layout-header-head-resources-crit'} */
/* {block 'layout-header-head-resources'} */
class Block_118160451609117e186f3e1_43832156 extends Smarty_Internal_Block
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1671307469609117e1875335_53731080', 'layout-header-head-resources-crit', $this->tplIndex);
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
class Block_19901799609117e18a43c5_41916813 extends Smarty_Internal_Block
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
class Block_540770356609117e1848d89_76029549 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <head>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_608638444609117e1849a85_30797386', 'layout-header-head-meta', $this->tplIndex);
?>


        <title itemprop="name"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_332495115609117e186a149_93671842', 'layout-header-head-title', $this->tplIndex);
?>
</title>

        <?php if (!empty($_smarty_tpl->tpl_vars['cCanonicalURL']->value) && !$_smarty_tpl->tpl_vars['noindex']->value) {?>
            <link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['cCanonicalURL']->value;?>
">
        <?php }?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1624951627609117e186d229_98732037', 'layout-header-head-base', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2140395320609117e186dff2_18043159', 'layout-header-head-icons', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_118160451609117e186f3e1_43832156', 'layout-header-head-resources', $this->tplIndex);
?>


        <?php if ((isset($_smarty_tpl->tpl_vars['Suchergebnisse']->value)) && $_smarty_tpl->tpl_vars['Suchergebnisse']->value->getPages()->getMaxPage() > 1) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19901799609117e18a43c5_41916813', 'layout-header-prev-next', $this->tplIndex);
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
class Block_300748866609117e1c1b891_59212367 extends Smarty_Internal_Block
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
class Block_507609607609117e1c2db93_98404436 extends Smarty_Internal_Block
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
class Block_1561322721609117e1c32cd2_43981137 extends Smarty_Internal_Block
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
class Block_1101170142609117e1c36da4_57599379 extends Smarty_Internal_Block
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
class Block_615251606609117e1c48566_86573097 extends Smarty_Internal_Block
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
class Block_926752189609117e1c4b222_77681348 extends Smarty_Internal_Block
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
class Block_2096781416609117e1c5a008_10293916 extends Smarty_Internal_Block
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
class Block_1106485749609117e1c60264_27122900 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <i class="fas fa-lock icon-mr-2"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'secureCheckout','section'=>'checkout'),$_smarty_tpl ) );?>

                                        <?php
}
}
/* {/block 'layout-header-secure-checkout-title'} */
/* {block 'layout-header-secure-include-header-top-bar'} */
class Block_396955974609117e1c62a47_19338699 extends Smarty_Internal_Block
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
class Block_903058533609117e1c5f873_31367823 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <div class="secure-checkout-icon ml-auto-util ml-lg-0">
                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1106485749609117e1c60264_27122900', 'layout-header-secure-checkout-title', $this->tplIndex);
?>

                                    </div>
                                    <div class="secure-checkout-topbar ml-auto-util d-none d-lg-block">
                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_396955974609117e1c62a47_19338699', 'layout-header-secure-include-header-top-bar', $this->tplIndex);
?>

                                    </div>
                                <?php
}
}
/* {/block 'layout-header-secure-checkout'} */
/* {block 'layout-header-branding-shop-nav-include-language-dropdown'} */
class Block_1178331268609117e1c67056_80465840 extends Smarty_Internal_Block
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
class Block_960041512609117e1c64fc8_07904767 extends Smarty_Internal_Block
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1178331268609117e1c67056_80465840', 'layout-header-branding-shop-nav-include-language-dropdown', $this->tplIndex);
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
class Block_442098042609117e1c6d0e3_24380468 extends Smarty_Internal_Block
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
class Block_481646691609117e1c6fb26_20107281 extends Smarty_Internal_Block
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
class Block_837291826609117e1c6aba1_11039527 extends Smarty_Internal_Block
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_442098042609117e1c6d0e3_24380468', 'layout-header-include-categories-mega-toggler', $this->tplIndex);
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_481646691609117e1c6fb26_20107281', 'layout-header-include-categories-mega-back', $this->tplIndex);
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
class Block_568497645609117e1c761e8_70936643 extends Smarty_Internal_Block
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
class Block_1734820945609117e1c74ad1_47580845 extends Smarty_Internal_Block
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_568497645609117e1c761e8_70936643', 'layout-header-include-include-categories-mega', $this->tplIndex);
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
class Block_803876945609117e1c6a227_30413142 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <div id="mainNavigation" class="collapse navbar-collapse nav-scrollbar">
                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_837291826609117e1c6aba1_11039527', 'layout-header-include-include-categories-header', $this->tplIndex);
?>

                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1734820945609117e1c74ad1_47580845', 'layout-header-include-include-categories-body', $this->tplIndex);
?>

                                    </div>
                                <?php
}
}
/* {/block 'layout-header-include-categories-mega'} */
/* {block 'layout-header-category-nav'} */
class Block_1706530662609117e1c47ab3_33556819 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div class="toggler-logo-wrapper">
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_615251606609117e1c48566_86573097', 'layout-header-navbar-toggle', $this->tplIndex);
?>


                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_926752189609117e1c4b222_77681348', 'layout-header-logo', $this->tplIndex);
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2096781416609117e1c5a008_10293916', 'layout-header-search', $this->tplIndex);
?>


                            <?php if ($_smarty_tpl->tpl_vars['nSeitenTyp']->value === (defined('PAGE_BESTELLVORGANG') ? constant('PAGE_BESTELLVORGANG') : null)) {?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_903058533609117e1c5f873_31367823', 'layout-header-secure-checkout', $this->tplIndex);
?>

                            <?php } else { ?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_960041512609117e1c64fc8_07904767', 'layout-header-branding-shop-nav', $this->tplIndex);
?>


                                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_803876945609117e1c6a227_30413142', 'layout-header-include-categories-mega', $this->tplIndex);
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
class Block_441456564609117e1c44444_09135373 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="container-fluid <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['megamenu']['header_full_width'] === 'N') {?>container-fluid-xl<?php }?>">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1706530662609117e1c47ab3_33556819', 'layout-header-category-nav', $this->tplIndex);
?>

                    </div>
                <?php
}
}
/* {/block 'layout-header-container-inner'} */
/* {block 'layout-header-search-fixed'} */
class Block_1115086528609117e1c7a5c5_13991190 extends Smarty_Internal_Block
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
class Block_646109498609117e1c36437_46676012 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1101170142609117e1c36da4_57599379', 'layout-header-branding-top-bar', $this->tplIndex);
?>

            <header class="d-print-none <?php if (!$_smarty_tpl->tpl_vars['isMobile']->value || $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['mobile_search_type'] !== 'fixed') {?>sticky-top<?php }?> fixed-navbar" id="jtl-nav-wrapper">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_441456564609117e1c44444_09135373', 'layout-header-container-inner', $this->tplIndex);
?>

            </header>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1115086528609117e1c7a5c5_13991190', 'layout-header-search-fixed', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'layout-header-header'} */
/* {block 'layout-header-main-wrapper-starttag'} */
class Block_375022973609117e1c7ecf1_10698282 extends Smarty_Internal_Block
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
class Block_1652968513609117e1c88994_61710287 extends Smarty_Internal_Block
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
class Block_949176167609117e1c904c4_65383435 extends Smarty_Internal_Block
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
class Block_600421091609117e1c820b3_12582193 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_assignInScope('isFluidBanner', $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['banner_full_width'] === 'Y' && (isset($_smarty_tpl->tpl_vars['oImageMap']->value)));?>
        <?php if ($_smarty_tpl->tpl_vars['isFluidBanner']->value) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1652968513609117e1c88994_61710287', 'layout-header-fluid-banner-include-banner', $this->tplIndex);
?>

        <?php }?>
        <?php $_smarty_tpl->_assignInScope('isFluidSlider', $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['slider_full_width'] === 'Y' && (isset($_smarty_tpl->tpl_vars['oSlider']->value)) && count($_smarty_tpl->tpl_vars['oSlider']->value->getSlides()) > 0);?>
        <?php if ($_smarty_tpl->tpl_vars['isFluidSlider']->value) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_949176167609117e1c904c4_65383435', 'layout-header-fluid-banner-include-slider', $this->tplIndex);
?>

        <?php }?>
    <?php
}
}
/* {/block 'layout-header-fluid-banner'} */
/* {block 'layout-header-content-wrapper-starttag'} */
class Block_1097179829609117e1c93639_05633376 extends Smarty_Internal_Block
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
class Block_834726177609117e1c97168_97398430 extends Smarty_Internal_Block
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
class Block_1443009745609117e1c9b171_15545225 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="content">
        <?php
}
}
/* {/block 'layout-header-content-starttag'} */
/* {block 'layout-header-content-productlist-starttags'} */
class Block_880110478609117e1d024d1_96834557 extends Smarty_Internal_Block
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
class Block_1641728978609117e1d05551_57920617 extends Smarty_Internal_Block
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
class Block_2011230437609117e1c92cb3_18686162 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1097179829609117e1c93639_05633376', 'layout-header-content-wrapper-starttag', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_834726177609117e1c97168_97398430', 'layout-header-breadcrumb', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1443009745609117e1c9b171_15545225', 'layout-header-content-starttag', $this->tplIndex);
?>


        <?php if (!$_smarty_tpl->tpl_vars['bExclusive']->value && !empty(trim(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['boxes']->value['left']))) && (defined('PAGE_ARTIKELLISTE') ? constant('PAGE_ARTIKELLISTE') : null) === $_smarty_tpl->tpl_vars['nSeitenTyp']->value) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_880110478609117e1d024d1_96834557', 'layout-header-content-productlist-starttags', $this->tplIndex);
?>

        <?php }?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1641728978609117e1d05551_57920617', 'layout-header-alert', $this->tplIndex);
?>


    <?php
}
}
/* {/block 'layout-header-content-all-starttags'} */
/* {block 'layout-header'} */
class Block_371189809609117e1842411_16602358 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout-header' => 
  array (
    0 => 'Block_371189809609117e1842411_16602358',
  ),
  'layout-header-doctype' => 
  array (
    0 => 'Block_1192326139609117e1843046_54266132',
  ),
  'layout-header-html-attributes' => 
  array (
    0 => 'Block_2019073460609117e1844114_51541049',
  ),
  'layout-header-head' => 
  array (
    0 => 'Block_540770356609117e1848d89_76029549',
  ),
  'layout-header-head-meta' => 
  array (
    0 => 'Block_608638444609117e1849a85_30797386',
  ),
  'layout-header-head-meta-description' => 
  array (
    0 => 'Block_1950583690609117e184b6a8_31817541',
  ),
  'layout-header-head-meta-keywords' => 
  array (
    0 => 'Block_682099900609117e184f6b0_43221719',
  ),
  'layout-header-head-theme-color' => 
  array (
    0 => 'Block_1672858903609117e1858613_93431482',
  ),
  'layout-header-head-title' => 
  array (
    0 => 'Block_332495115609117e186a149_93671842',
  ),
  'layout-header-head-base' => 
  array (
    0 => 'Block_1624951627609117e186d229_98732037',
  ),
  'layout-header-head-icons' => 
  array (
    0 => 'Block_2140395320609117e186dff2_18043159',
  ),
  'layout-header-head-resources' => 
  array (
    0 => 'Block_118160451609117e186f3e1_43832156',
  ),
  'layout-header-head-resources-crit' => 
  array (
    0 => 'Block_1671307469609117e1875335_53731080',
  ),
  'layout-header-prev-next' => 
  array (
    0 => 'Block_19901799609117e18a43c5_41916813',
  ),
  'layout-header-body-tag' => 
  array (
    0 => 'Block_300748866609117e1c1b891_59212367',
  ),
  'layout-header-maintenance-alert' => 
  array (
    0 => 'Block_507609607609117e1c2db93_98404436',
  ),
  'layout-header-safemode-alert' => 
  array (
    0 => 'Block_1561322721609117e1c32cd2_43981137',
  ),
  'layout-header-header' => 
  array (
    0 => 'Block_646109498609117e1c36437_46676012',
  ),
  'layout-header-branding-top-bar' => 
  array (
    0 => 'Block_1101170142609117e1c36da4_57599379',
  ),
  'layout-header-container-inner' => 
  array (
    0 => 'Block_441456564609117e1c44444_09135373',
  ),
  'layout-header-category-nav' => 
  array (
    0 => 'Block_1706530662609117e1c47ab3_33556819',
  ),
  'layout-header-navbar-toggle' => 
  array (
    0 => 'Block_615251606609117e1c48566_86573097',
  ),
  'layout-header-logo' => 
  array (
    0 => 'Block_926752189609117e1c4b222_77681348',
  ),
  'layout-header-search' => 
  array (
    0 => 'Block_2096781416609117e1c5a008_10293916',
  ),
  'layout-header-secure-checkout' => 
  array (
    0 => 'Block_903058533609117e1c5f873_31367823',
  ),
  'layout-header-secure-checkout-title' => 
  array (
    0 => 'Block_1106485749609117e1c60264_27122900',
  ),
  'layout-header-secure-include-header-top-bar' => 
  array (
    0 => 'Block_396955974609117e1c62a47_19338699',
  ),
  'layout-header-branding-shop-nav' => 
  array (
    0 => 'Block_960041512609117e1c64fc8_07904767',
  ),
  'layout-header-branding-shop-nav-include-language-dropdown' => 
  array (
    0 => 'Block_1178331268609117e1c67056_80465840',
  ),
  'layout-header-include-categories-mega' => 
  array (
    0 => 'Block_803876945609117e1c6a227_30413142',
  ),
  'layout-header-include-include-categories-header' => 
  array (
    0 => 'Block_837291826609117e1c6aba1_11039527',
  ),
  'layout-header-include-categories-mega-toggler' => 
  array (
    0 => 'Block_442098042609117e1c6d0e3_24380468',
  ),
  'layout-header-include-categories-mega-back' => 
  array (
    0 => 'Block_481646691609117e1c6fb26_20107281',
  ),
  'layout-header-include-include-categories-body' => 
  array (
    0 => 'Block_1734820945609117e1c74ad1_47580845',
  ),
  'layout-header-include-include-categories-mega' => 
  array (
    0 => 'Block_568497645609117e1c761e8_70936643',
  ),
  'layout-header-search-fixed' => 
  array (
    0 => 'Block_1115086528609117e1c7a5c5_13991190',
  ),
  'layout-header-main-wrapper-starttag' => 
  array (
    0 => 'Block_375022973609117e1c7ecf1_10698282',
  ),
  'layout-header-fluid-banner' => 
  array (
    0 => 'Block_600421091609117e1c820b3_12582193',
  ),
  'layout-header-fluid-banner-include-banner' => 
  array (
    0 => 'Block_1652968513609117e1c88994_61710287',
  ),
  'layout-header-fluid-banner-include-slider' => 
  array (
    0 => 'Block_949176167609117e1c904c4_65383435',
  ),
  'layout-header-content-all-starttags' => 
  array (
    0 => 'Block_2011230437609117e1c92cb3_18686162',
  ),
  'layout-header-content-wrapper-starttag' => 
  array (
    0 => 'Block_1097179829609117e1c93639_05633376',
  ),
  'layout-header-breadcrumb' => 
  array (
    0 => 'Block_834726177609117e1c97168_97398430',
  ),
  'layout-header-content-starttag' => 
  array (
    0 => 'Block_1443009745609117e1c9b171_15545225',
  ),
  'layout-header-content-productlist-starttags' => 
  array (
    0 => 'Block_880110478609117e1d024d1_96834557',
  ),
  'layout-header-alert' => 
  array (
    0 => 'Block_1641728978609117e1d05551_57920617',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1192326139609117e1843046_54266132', 'layout-header-doctype', $this->tplIndex);
?>

    <html <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2019073460609117e1844114_51541049', 'layout-header-html-attributes', $this->tplIndex);
?>
>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_540770356609117e1848d89_76029549', 'layout-header-head', $this->tplIndex);
?>


    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['has_boxes'][0], array( array('position'=>'left','assign'=>'hasLeftPanel'),$_smarty_tpl ) );?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_300748866609117e1c1b891_59212367', 'layout-header-body-tag', $this->tplIndex);
?>

    <?php if (!$_smarty_tpl->tpl_vars['bExclusive']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['opcDir']->value).('tpl/startmenu.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

        <?php if ($_smarty_tpl->tpl_vars['bAdminWartungsmodus']->value) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_507609607609117e1c2db93_98404436', 'layout-header-maintenance-alert', $this->tplIndex);
?>

        <?php }?>
        <?php if ((defined('SAFE_MODE') ? constant('SAFE_MODE') : null) === true) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1561322721609117e1c32cd2_43981137', 'layout-header-safemode-alert', $this->tplIndex);
?>

        <?php }?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_646109498609117e1c36437_46676012', 'layout-header-header', $this->tplIndex);
?>

    <?php }?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_375022973609117e1c7ecf1_10698282', 'layout-header-main-wrapper-starttag', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_600421091609117e1c820b3_12582193', 'layout-header-fluid-banner', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2011230437609117e1c92cb3_18686162', 'layout-header-content-all-starttags', $this->tplIndex);
}
}
/* {/block 'layout-header'} */
}
