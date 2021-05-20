<?php
/* Smarty version 3.1.38, created on 2021-05-17 13:53:38
  from 'C:\xampp\htdocs\shop\templates\NOVA\layout\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a25942a2adf9_81486444',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6c3f07841c017789042c6954437fc4f7d34b856' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\templates\\NOVA\\layout\\header.tpl',
      1 => 1621252302,
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
function content_60a25942a2adf9_81486444 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_82312870360a259428c7a92_08446195', 'layout-header');
?>

<?php }
/* {block 'layout-header-doctype'} */
class Block_132169521460a259428ccb85_36660856 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html><?php
}
}
/* {/block 'layout-header-doctype'} */
/* {block 'layout-header-html-attributes'} */
class Block_59905988860a259428ce0a3_44521705 extends Smarty_Internal_Block
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
class Block_15989526860a259428e03e0_80140667 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
"<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['meta_description']->value,1000,'',true ));
}
}
/* {/block 'layout-header-head-meta-description'} */
/* {block 'layout-header-head-meta-keywords'} */
class Block_78804609960a259428e8680_66422487 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['meta_keywords']->value,255,'',true ));
}
}
/* {/block 'layout-header-head-meta-keywords'} */
/* {block 'layout-header-head-theme-color'} */
class Block_65879141760a259428f2c26_60767032 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <meta name="theme-color" content="<?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['theme_default'] === 'clear') {?>#f8bf00<?php } else { ?>#1C1D2C<?php }?>">
            <?php
}
}
/* {/block 'layout-header-head-theme-color'} */
/* {block 'layout-header-head-meta'} */
class Block_157017477960a259428de949_00621440 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <meta http-equiv="content-type" content="text/html; charset=<?php echo (defined('JTL_CHARSET') ? constant('JTL_CHARSET') : null);?>
">
            <meta name="description" itemprop="description" content=<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15989526860a259428e03e0_80140667', 'layout-header-head-meta-description', $this->tplIndex);
?>
">
            <?php if (!empty($_smarty_tpl->tpl_vars['meta_keywords']->value)) {?>
                <meta name="keywords" itemprop="keywords" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_78804609960a259428e8680_66422487', 'layout-header-head-meta-keywords', $this->tplIndex);
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_65879141760a259428f2c26_60767032', 'layout-header-head-theme-color', $this->tplIndex);
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
class Block_49372647860a2594290bb27_82138994 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['meta_title']->value;
}
}
/* {/block 'layout-header-head-title'} */
/* {block 'layout-header-head-base'} */
class Block_169069464560a2594290ea49_69320111 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'layout-header-head-base'} */
/* {block 'layout-header-head-icons'} */
class Block_11034317360a2594290f743_14905426 extends Smarty_Internal_Block
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
class Block_54689101060a25942913c21_00054178 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php echo file_get_contents(((string)$_smarty_tpl->tpl_vars['currentThemeDir']->value).((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['theme_default'])."_crit.css");?>

                <?php
}
}
/* {/block 'layout-header-head-resources-crit'} */
/* {block 'layout-header-head-resources'} */
class Block_67887113160a25942910a96_22367221 extends Smarty_Internal_Block
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54689101060a25942913c21_00054178', 'layout-header-head-resources-crit', $this->tplIndex);
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
class Block_35103538060a259429572b3_62357401 extends Smarty_Internal_Block
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
class Block_133542775860a259428ddf64_68578682 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <head>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_157017477960a259428de949_00621440', 'layout-header-head-meta', $this->tplIndex);
?>


        <title itemprop="name"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_49372647860a2594290bb27_82138994', 'layout-header-head-title', $this->tplIndex);
?>
</title>

        <?php if (!empty($_smarty_tpl->tpl_vars['cCanonicalURL']->value) && !$_smarty_tpl->tpl_vars['noindex']->value) {?>
            <link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['cCanonicalURL']->value;?>
">
        <?php }?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169069464560a2594290ea49_69320111', 'layout-header-head-base', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11034317360a2594290f743_14905426', 'layout-header-head-icons', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_67887113160a25942910a96_22367221', 'layout-header-head-resources', $this->tplIndex);
?>


        <?php if ((isset($_smarty_tpl->tpl_vars['Suchergebnisse']->value)) && $_smarty_tpl->tpl_vars['Suchergebnisse']->value->getPages()->getMaxPage() > 1) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_35103538060a259429572b3_62357401', 'layout-header-prev-next', $this->tplIndex);
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
class Block_29533711760a2594298d722_29943928 extends Smarty_Internal_Block
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
class Block_63925662860a259429a3263_68561995 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['alert'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['alert'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'render'))) {
throw new SmartyException('block tag \'alert\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('alert', array('show'=>true,'variant'=>"warning",'id'=>"maintenance-mode",'dismissible'=>true));
$_block_repeat=true;
echo $_block_plugin1->render(array('show'=>true,'variant'=>"warning",'id'=>"maintenance-mode",'dismissible'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'adminMaintenanceMode'),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin1->render(array('show'=>true,'variant'=>"warning",'id'=>"maintenance-mode",'dismissible'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
}
}
/* {/block 'layout-header-maintenance-alert'} */
/* {block 'layout-header-safemode-alert'} */
class Block_153179914160a259429ad144_84048679 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['alert'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['alert'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'render'))) {
throw new SmartyException('block tag \'alert\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('alert', array('show'=>true,'variant'=>"warning",'id'=>"safe-mode",'dismissible'=>true));
$_block_repeat=true;
echo $_block_plugin2->render(array('show'=>true,'variant'=>"warning",'id'=>"safe-mode",'dismissible'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'safeModeActive'),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin2->render(array('show'=>true,'variant'=>"warning",'id'=>"safe-mode",'dismissible'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
}
}
/* {/block 'layout-header-safemode-alert'} */
/* {block 'layout-header-branding-top-bar'} */
class Block_145584634860a259429b10b2_43254795 extends Smarty_Internal_Block
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
class Block_185465728760a259429c7ef7_77219157 extends Smarty_Internal_Block
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
class Block_129006115860a259429ca929_73270725 extends Smarty_Internal_Block
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
                                    <?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('class'=>"navbar-brand",'href'=>$_smarty_tpl->tpl_vars['ShopURL']->value,'title'=>$_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_shopname']));
$_block_repeat=true;
echo $_block_plugin3->render(array('class'=>"navbar-brand",'href'=>$_smarty_tpl->tpl_vars['ShopURL']->value,'title'=>$_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_shopname']), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['ShopLogoURL']->value))) {?>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0], array( array('src'=>$_smarty_tpl->tpl_vars['ShopLogoURL']->value,'alt'=>$_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_shopname'],'id'=>"shop-logo"),$_smarty_tpl ) );?>

                                    <?php } else { ?>
                                        <span class="h1"><?php echo $_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_shopname'];?>
</span>
                                    <?php }?>
                                    <?php $_block_repeat=false;
echo $_block_plugin3->render(array('class'=>"navbar-brand",'href'=>$_smarty_tpl->tpl_vars['ShopURL']->value,'title'=>$_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_shopname']), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                </div>
                            <?php
}
}
/* {/block 'layout-header-logo'} */
/* {block 'layout-header-search'} */
class Block_113891198860a259429d6429_26347781 extends Smarty_Internal_Block
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
class Block_89698755160a259429db5a0_05703346 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <i class="fas fa-lock icon-mr-2"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'secureCheckout','section'=>'checkout'),$_smarty_tpl ) );?>

                                        <?php
}
}
/* {/block 'layout-header-secure-checkout-title'} */
/* {block 'layout-header-secure-include-header-top-bar'} */
class Block_166296583460a259429dcf69_68022881 extends Smarty_Internal_Block
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
class Block_192728120360a259429dac96_02048583 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <div class="secure-checkout-icon ml-auto-util ml-lg-0">
                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_89698755160a259429db5a0_05703346', 'layout-header-secure-checkout-title', $this->tplIndex);
?>

                                    </div>
                                    <div class="secure-checkout-topbar ml-auto-util d-none d-lg-block">
                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_166296583460a259429dcf69_68022881', 'layout-header-secure-include-header-top-bar', $this->tplIndex);
?>

                                    </div>
                                <?php
}
}
/* {/block 'layout-header-secure-checkout'} */
/* {block 'layout-header-branding-shop-nav-include-language-dropdown'} */
class Block_39574922860a259429e0e62_53788273 extends Smarty_Internal_Block
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
class Block_1198869860a259429df056_28159377 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_block_plugin5 = isset($_smarty_tpl->smarty->registered_plugins['block']['nav'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['nav'][0][0] : null;
if (!is_callable(array($_block_plugin5, 'render'))) {
throw new SmartyException('block tag \'nav\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('nav', array('id'=>"shop-nav",'right'=>true,'class'=>"nav-right order-lg-last nav-icons"));
$_block_repeat=true;
echo $_block_plugin5->render(array('id'=>"shop-nav",'right'=>true,'class'=>"nav-right order-lg-last nav-icons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_39574922860a259429e0e62_53788273', 'layout-header-branding-shop-nav-include-language-dropdown', $this->tplIndex);
?>

                                        <?php $_smarty_tpl->_subTemplateRender('file:layout/header_nav_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                    <?php $_block_repeat=false;
echo $_block_plugin5->render(array('id'=>"shop-nav",'right'=>true,'class'=>"nav-right order-lg-last nav-icons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php
}
}
/* {/block 'layout-header-branding-shop-nav'} */
/* {block 'layout-header-include-categories-mega-toggler'} */
class Block_198935240760a259429e6880_02597075 extends Smarty_Internal_Block
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
class Block_193182308160a259429e8fe7_59511767 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                            <?php $_block_plugin9 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin9, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>"#",'class'=>"nav-offcanvas-title d-none",'data'=>array("menu-back"=>'')));
$_block_repeat=true;
echo $_block_plugin9->render(array('href'=>"#",'class'=>"nav-offcanvas-title d-none",'data'=>array("menu-back"=>'')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                                <span class="fas fa-chevron-left icon-mr-2"></span>
                                                                <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'back'),$_smarty_tpl ) );?>
</span>
                                                            <?php $_block_repeat=false;
echo $_block_plugin9->render(array('href'=>"#",'class'=>"nav-offcanvas-title d-none",'data'=>array("menu-back"=>'')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                        <?php
}
}
/* {/block 'layout-header-include-categories-mega-back'} */
/* {block 'layout-header-include-include-categories-header'} */
class Block_117711088860a259429e46d7_61788624 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <div class="nav-mobile-header d-lg-none">
                                                <?php $_block_plugin6 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin6, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('class'=>"align-items-center-util"));
$_block_repeat=true;
echo $_block_plugin6->render(array('class'=>"align-items-center-util"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <?php $_block_plugin7 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin7, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('class'=>"nav-mobile-header-toggler"));
$_block_repeat=true;
echo $_block_plugin7->render(array('class'=>"nav-mobile-header-toggler"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_198935240760a259429e6880_02597075', 'layout-header-include-categories-mega-toggler', $this->tplIndex);
?>

                                                    <?php $_block_repeat=false;
echo $_block_plugin7->render(array('class'=>"nav-mobile-header-toggler"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                    <?php $_block_plugin8 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin8, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('class'=>"col-auto nav-mobile-header-name ml-auto-util"));
$_block_repeat=true;
echo $_block_plugin8->render(array('class'=>"col-auto nav-mobile-header-name ml-auto-util"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                        <span class="nav-offcanvas-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'menuName'),$_smarty_tpl ) );?>
</span>
                                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_193182308160a259429e8fe7_59511767', 'layout-header-include-categories-mega-back', $this->tplIndex);
?>

                                                    <?php $_block_repeat=false;
echo $_block_plugin8->render(array('class'=>"col-auto nav-mobile-header-name ml-auto-util"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                <?php $_block_repeat=false;
echo $_block_plugin6->render(array('class'=>"align-items-center-util"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                <hr class="nav-mobile-header-hr" />
                                            </div>
                                        <?php
}
}
/* {/block 'layout-header-include-include-categories-header'} */
/* {block 'layout-header-include-include-categories-mega'} */
class Block_152330979060a259429ef435_42286845 extends Smarty_Internal_Block
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
class Block_31833098360a259429eddf4_92895148 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <div class="nav-mobile-body">
                                                <?php $_block_plugin10 = isset($_smarty_tpl->smarty->registered_plugins['block']['navbarnav'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['navbarnav'][0][0] : null;
if (!is_callable(array($_block_plugin10, 'render'))) {
throw new SmartyException('block tag \'navbarnav\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('navbarnav', array('class'=>"nav-scrollbar-inner mr-auto"));
$_block_repeat=true;
echo $_block_plugin10->render(array('class'=>"nav-scrollbar-inner mr-auto"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_152330979060a259429ef435_42286845', 'layout-header-include-include-categories-mega', $this->tplIndex);
?>

                                                <?php $_block_repeat=false;
echo $_block_plugin10->render(array('class'=>"nav-scrollbar-inner mr-auto"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            </div>
                                        <?php
}
}
/* {/block 'layout-header-include-include-categories-body'} */
/* {block 'layout-header-include-categories-mega'} */
class Block_165058466660a259429e3de6_32375930 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <div id="mainNavigation" class="collapse navbar-collapse nav-scrollbar">
                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_117711088860a259429e46d7_61788624', 'layout-header-include-include-categories-header', $this->tplIndex);
?>

                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_31833098360a259429eddf4_92895148', 'layout-header-include-include-categories-body', $this->tplIndex);
?>

                                    </div>
                                <?php
}
}
/* {/block 'layout-header-include-categories-mega'} */
/* {block 'layout-header-category-nav'} */
class Block_19475677760a259429c7515_27857756 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div class="toggler-logo-wrapper">
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_185465728760a259429c7ef7_77219157', 'layout-header-navbar-toggle', $this->tplIndex);
?>


                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_129006115860a259429ca929_73270725', 'layout-header-logo', $this->tplIndex);
?>

                        </div>
                        <?php ob_start();
if ($_smarty_tpl->tpl_vars['nSeitenTyp']->value === (defined('PAGE_BESTELLVORGANG') ? constant('PAGE_BESTELLVORGANG') : null)) {
echo "align-items-center-util";
} else {
echo "align-items-lg-end";
}
$_prefixVariable1=ob_get_clean();
$_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['navbar'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['navbar'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'render'))) {
throw new SmartyException('block tag \'navbar\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('navbar', array('toggleable'=>true,'fill'=>true,'type'=>"expand-lg",'class'=>"justify-content-start ".$_prefixVariable1));
$_block_repeat=true;
echo $_block_plugin4->render(array('toggleable'=>true,'fill'=>true,'type'=>"expand-lg",'class'=>"justify-content-start ".$_prefixVariable1), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                           <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_113891198860a259429d6429_26347781', 'layout-header-search', $this->tplIndex);
?>


                            <?php if ($_smarty_tpl->tpl_vars['nSeitenTyp']->value === (defined('PAGE_BESTELLVORGANG') ? constant('PAGE_BESTELLVORGANG') : null)) {?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_192728120360a259429dac96_02048583', 'layout-header-secure-checkout', $this->tplIndex);
?>

                            <?php } else { ?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1198869860a259429df056_28159377', 'layout-header-branding-shop-nav', $this->tplIndex);
?>


                                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_165058466660a259429e3de6_32375930', 'layout-header-include-categories-mega', $this->tplIndex);
?>

                            <?php }?>
                        <?php $_block_repeat=false;
echo $_block_plugin4->render(array('toggleable'=>true,'fill'=>true,'type'=>"expand-lg",'class'=>"justify-content-start ".$_prefixVariable1), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php
}
}
/* {/block 'layout-header-category-nav'} */
/* {block 'layout-header-container-inner'} */
class Block_175981472060a259429c3d22_06264118 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="container-fluid <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['megamenu']['header_full_width'] === 'N') {?>container-fluid-xl<?php }?>">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19475677760a259429c7515_27857756', 'layout-header-category-nav', $this->tplIndex);
?>

                    </div>
                <?php
}
}
/* {/block 'layout-header-container-inner'} */
/* {block 'layout-header-search-fixed'} */
class Block_191528156060a259429f3347_92793744 extends Smarty_Internal_Block
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
class Block_35375219760a259429b0782_84001953 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_145584634860a259429b10b2_43254795', 'layout-header-branding-top-bar', $this->tplIndex);
?>

            <header class="d-print-none <?php if (!$_smarty_tpl->tpl_vars['isMobile']->value || $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['mobile_search_type'] !== 'fixed') {?>sticky-top<?php }?> fixed-navbar" id="jtl-nav-wrapper">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_175981472060a259429c3d22_06264118', 'layout-header-container-inner', $this->tplIndex);
?>

            </header>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_191528156060a259429f3347_92793744', 'layout-header-search-fixed', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'layout-header-header'} */
/* {block 'layout-header-main-wrapper-starttag'} */
class Block_142949762860a259429f8488_93900785 extends Smarty_Internal_Block
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
class Block_176253648660a25942a0b0c7_77897154 extends Smarty_Internal_Block
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
class Block_91475615560a25942a11716_23472588 extends Smarty_Internal_Block
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
class Block_198448410460a25942a06718_74487627 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_assignInScope('isFluidBanner', $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['banner_full_width'] === 'Y' && (isset($_smarty_tpl->tpl_vars['oImageMap']->value)));?>
        <?php if ($_smarty_tpl->tpl_vars['isFluidBanner']->value) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_176253648660a25942a0b0c7_77897154', 'layout-header-fluid-banner-include-banner', $this->tplIndex);
?>

        <?php }?>
        <?php $_smarty_tpl->_assignInScope('isFluidSlider', $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['slider_full_width'] === 'Y' && (isset($_smarty_tpl->tpl_vars['oSlider']->value)) && count($_smarty_tpl->tpl_vars['oSlider']->value->getSlides()) > 0);?>
        <?php if ($_smarty_tpl->tpl_vars['isFluidSlider']->value) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_91475615560a25942a11716_23472588', 'layout-header-fluid-banner-include-slider', $this->tplIndex);
?>

        <?php }?>
    <?php
}
}
/* {/block 'layout-header-fluid-banner'} */
/* {block 'layout-header-content-wrapper-starttag'} */
class Block_51511127260a25942a145c4_64078724 extends Smarty_Internal_Block
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
class Block_145963226360a25942a17d05_88555360 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_block_plugin11 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin11, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array('fluid'=>((defined('PAGE_ARTIKELLISTE') ? constant('PAGE_ARTIKELLISTE') : null) === $_smarty_tpl->tpl_vars['nSeitenTyp']->value),'class'=>"breadcrumb-container"));
$_block_repeat=true;
echo $_block_plugin11->render(array('fluid'=>((defined('PAGE_ARTIKELLISTE') ? constant('PAGE_ARTIKELLISTE') : null) === $_smarty_tpl->tpl_vars['nSeitenTyp']->value),'class'=>"breadcrumb-container"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_smarty_tpl->_subTemplateRender('file:layout/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php $_block_repeat=false;
echo $_block_plugin11->render(array('fluid'=>((defined('PAGE_ARTIKELLISTE') ? constant('PAGE_ARTIKELLISTE') : null) === $_smarty_tpl->tpl_vars['nSeitenTyp']->value),'class'=>"breadcrumb-container"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php
}
}
/* {/block 'layout-header-breadcrumb'} */
/* {block 'layout-header-content-starttag'} */
class Block_177152394060a25942a1c3d1_08451850 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="content">
        <?php
}
}
/* {/block 'layout-header-content-starttag'} */
/* {block 'layout-header-content-productlist-starttags'} */
class Block_143619472060a25942a26bf4_84640273 extends Smarty_Internal_Block
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
class Block_20153622860a25942a28049_73461200 extends Smarty_Internal_Block
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
class Block_98152167260a25942a13cd5_08117617 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_51511127260a25942a145c4_64078724', 'layout-header-content-wrapper-starttag', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_145963226360a25942a17d05_88555360', 'layout-header-breadcrumb', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_177152394060a25942a1c3d1_08451850', 'layout-header-content-starttag', $this->tplIndex);
?>


        <?php if (!$_smarty_tpl->tpl_vars['bExclusive']->value && !empty(trim(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['boxes']->value['left']))) && (defined('PAGE_ARTIKELLISTE') ? constant('PAGE_ARTIKELLISTE') : null) === $_smarty_tpl->tpl_vars['nSeitenTyp']->value) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_143619472060a25942a26bf4_84640273', 'layout-header-content-productlist-starttags', $this->tplIndex);
?>

        <?php }?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20153622860a25942a28049_73461200', 'layout-header-alert', $this->tplIndex);
?>


    <?php
}
}
/* {/block 'layout-header-content-all-starttags'} */
/* {block 'layout-header'} */
class Block_82312870360a259428c7a92_08446195 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout-header' => 
  array (
    0 => 'Block_82312870360a259428c7a92_08446195',
  ),
  'layout-header-doctype' => 
  array (
    0 => 'Block_132169521460a259428ccb85_36660856',
  ),
  'layout-header-html-attributes' => 
  array (
    0 => 'Block_59905988860a259428ce0a3_44521705',
  ),
  'layout-header-head' => 
  array (
    0 => 'Block_133542775860a259428ddf64_68578682',
  ),
  'layout-header-head-meta' => 
  array (
    0 => 'Block_157017477960a259428de949_00621440',
  ),
  'layout-header-head-meta-description' => 
  array (
    0 => 'Block_15989526860a259428e03e0_80140667',
  ),
  'layout-header-head-meta-keywords' => 
  array (
    0 => 'Block_78804609960a259428e8680_66422487',
  ),
  'layout-header-head-theme-color' => 
  array (
    0 => 'Block_65879141760a259428f2c26_60767032',
  ),
  'layout-header-head-title' => 
  array (
    0 => 'Block_49372647860a2594290bb27_82138994',
  ),
  'layout-header-head-base' => 
  array (
    0 => 'Block_169069464560a2594290ea49_69320111',
  ),
  'layout-header-head-icons' => 
  array (
    0 => 'Block_11034317360a2594290f743_14905426',
  ),
  'layout-header-head-resources' => 
  array (
    0 => 'Block_67887113160a25942910a96_22367221',
  ),
  'layout-header-head-resources-crit' => 
  array (
    0 => 'Block_54689101060a25942913c21_00054178',
  ),
  'layout-header-prev-next' => 
  array (
    0 => 'Block_35103538060a259429572b3_62357401',
  ),
  'layout-header-body-tag' => 
  array (
    0 => 'Block_29533711760a2594298d722_29943928',
  ),
  'layout-header-maintenance-alert' => 
  array (
    0 => 'Block_63925662860a259429a3263_68561995',
  ),
  'layout-header-safemode-alert' => 
  array (
    0 => 'Block_153179914160a259429ad144_84048679',
  ),
  'layout-header-header' => 
  array (
    0 => 'Block_35375219760a259429b0782_84001953',
  ),
  'layout-header-branding-top-bar' => 
  array (
    0 => 'Block_145584634860a259429b10b2_43254795',
  ),
  'layout-header-container-inner' => 
  array (
    0 => 'Block_175981472060a259429c3d22_06264118',
  ),
  'layout-header-category-nav' => 
  array (
    0 => 'Block_19475677760a259429c7515_27857756',
  ),
  'layout-header-navbar-toggle' => 
  array (
    0 => 'Block_185465728760a259429c7ef7_77219157',
  ),
  'layout-header-logo' => 
  array (
    0 => 'Block_129006115860a259429ca929_73270725',
  ),
  'layout-header-search' => 
  array (
    0 => 'Block_113891198860a259429d6429_26347781',
  ),
  'layout-header-secure-checkout' => 
  array (
    0 => 'Block_192728120360a259429dac96_02048583',
  ),
  'layout-header-secure-checkout-title' => 
  array (
    0 => 'Block_89698755160a259429db5a0_05703346',
  ),
  'layout-header-secure-include-header-top-bar' => 
  array (
    0 => 'Block_166296583460a259429dcf69_68022881',
  ),
  'layout-header-branding-shop-nav' => 
  array (
    0 => 'Block_1198869860a259429df056_28159377',
  ),
  'layout-header-branding-shop-nav-include-language-dropdown' => 
  array (
    0 => 'Block_39574922860a259429e0e62_53788273',
  ),
  'layout-header-include-categories-mega' => 
  array (
    0 => 'Block_165058466660a259429e3de6_32375930',
  ),
  'layout-header-include-include-categories-header' => 
  array (
    0 => 'Block_117711088860a259429e46d7_61788624',
  ),
  'layout-header-include-categories-mega-toggler' => 
  array (
    0 => 'Block_198935240760a259429e6880_02597075',
  ),
  'layout-header-include-categories-mega-back' => 
  array (
    0 => 'Block_193182308160a259429e8fe7_59511767',
  ),
  'layout-header-include-include-categories-body' => 
  array (
    0 => 'Block_31833098360a259429eddf4_92895148',
  ),
  'layout-header-include-include-categories-mega' => 
  array (
    0 => 'Block_152330979060a259429ef435_42286845',
  ),
  'layout-header-search-fixed' => 
  array (
    0 => 'Block_191528156060a259429f3347_92793744',
  ),
  'layout-header-main-wrapper-starttag' => 
  array (
    0 => 'Block_142949762860a259429f8488_93900785',
  ),
  'layout-header-fluid-banner' => 
  array (
    0 => 'Block_198448410460a25942a06718_74487627',
  ),
  'layout-header-fluid-banner-include-banner' => 
  array (
    0 => 'Block_176253648660a25942a0b0c7_77897154',
  ),
  'layout-header-fluid-banner-include-slider' => 
  array (
    0 => 'Block_91475615560a25942a11716_23472588',
  ),
  'layout-header-content-all-starttags' => 
  array (
    0 => 'Block_98152167260a25942a13cd5_08117617',
  ),
  'layout-header-content-wrapper-starttag' => 
  array (
    0 => 'Block_51511127260a25942a145c4_64078724',
  ),
  'layout-header-breadcrumb' => 
  array (
    0 => 'Block_145963226360a25942a17d05_88555360',
  ),
  'layout-header-content-starttag' => 
  array (
    0 => 'Block_177152394060a25942a1c3d1_08451850',
  ),
  'layout-header-content-productlist-starttags' => 
  array (
    0 => 'Block_143619472060a25942a26bf4_84640273',
  ),
  'layout-header-alert' => 
  array (
    0 => 'Block_20153622860a25942a28049_73461200',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132169521460a259428ccb85_36660856', 'layout-header-doctype', $this->tplIndex);
?>

    <html <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59905988860a259428ce0a3_44521705', 'layout-header-html-attributes', $this->tplIndex);
?>
>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_133542775860a259428ddf64_68578682', 'layout-header-head', $this->tplIndex);
?>


    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['has_boxes'][0], array( array('position'=>'left','assign'=>'hasLeftPanel'),$_smarty_tpl ) );?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_29533711760a2594298d722_29943928', 'layout-header-body-tag', $this->tplIndex);
?>

    <?php if (!$_smarty_tpl->tpl_vars['bExclusive']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['opcDir']->value).('tpl/startmenu.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

        <?php if ($_smarty_tpl->tpl_vars['bAdminWartungsmodus']->value) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_63925662860a259429a3263_68561995', 'layout-header-maintenance-alert', $this->tplIndex);
?>

        <?php }?>
        <?php if ((defined('SAFE_MODE') ? constant('SAFE_MODE') : null) === true) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_153179914160a259429ad144_84048679', 'layout-header-safemode-alert', $this->tplIndex);
?>

        <?php }?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_35375219760a259429b0782_84001953', 'layout-header-header', $this->tplIndex);
?>

    <?php }?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_142949762860a259429f8488_93900785', 'layout-header-main-wrapper-starttag', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_198448410460a25942a06718_74487627', 'layout-header-fluid-banner', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_98152167260a25942a13cd5_08117617', 'layout-header-content-all-starttags', $this->tplIndex);
}
}
/* {/block 'layout-header'} */
}
