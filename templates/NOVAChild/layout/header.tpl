{block name='layout-header-head-resources'}
            {if empty($parentTemplateDir)}
                {$templateDir = $currentTemplateDir}
            {else}
                {$templateDir = $parentTemplateDir}
            {/if}
            <style id="criticalCSS">
                {block name='layout-header-head-resources-crit'}
                    {file_get_contents("{$currentThemeDir}{$Einstellungen.template.theme.theme_default}_crit.css")}
                {/block}
            </style>
            {* css *}
            {if $Einstellungen.template.general.use_minify === 'N'}
                {foreach $cCSS_arr as $cCSS}
                    <link rel="preload" href="{$ShopURL}/{$cCSS}?v={$nTemplateVersion}" as="style"
                          onload="this.onload=null;this.rel='stylesheet'">
                {/foreach}
                {if isset($cPluginCss_arr)}
                    {foreach $cPluginCss_arr as $cCSS}
                        <link rel="preload" href="{$ShopURL}/{$cCSS}?v={$nTemplateVersion}" as="style"
                              onload="this.onload=null;this.rel='stylesheet'">
                    {/foreach}
                {/if}

                <noscript>
                    {foreach $cCSS_arr as $cCSS}
                        <link rel="stylesheet" href="{$ShopURL}/{$cCSS}?v={$nTemplateVersion}">
                    {/foreach}
                    {if isset($cPluginCss_arr)}
                        {foreach $cPluginCss_arr as $cCSS}
                            <link href="{$ShopURL}/{$cCSS}?v={$nTemplateVersion}" rel="stylesheet">
                        {/foreach}
                    {/if}
                </noscript>
            {else}
                <link rel="preload" href="{$ShopURL}/{$combinedCSS}" as="style" onload="this.onload=null;this.rel='stylesheet'">
                <noscript>
                    <link href="{$ShopURL}/{$combinedCSS}" rel="stylesheet">
                </noscript>
            {/if}

            {if $opc->isEditMode() === false && $opc->isPreviewMode() === false && \JTL\Shop::isAdmin(true)}
                <link rel="preload" href="{$ShopURL}/admin/opc/css/startmenu.css" as="style"
                      onload="this.onload=null;this.rel='stylesheet'">
                <noscript>
                    <link type="text/css" href="{$ShopURL}/admin/opc/css/startmenu.css" rel="stylesheet">
                </noscript>
            {/if}
            {foreach $opcPageService->getCurPage()->getCssList($opc->isEditMode()) as $cssFile => $cssTrue}
                <link rel="preload" href="{$cssFile}" as="style" data-opc-portlet-css-link="true"
                      onload="this.onload=null;this.rel='stylesheet'">
                <noscript>
                    <link rel="stylesheet" href="{$cssFile}">
                </noscript>
            {/foreach}
            <script>
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
            </script>
            {* RSS *}
            {if isset($Einstellungen.rss.rss_nutzen) && $Einstellungen.rss.rss_nutzen === 'Y'}
                <link rel="alternate" type="application/rss+xml" title="Newsfeed {$Einstellungen.global.global_shopname}"
                      href="{$ShopURL}/rss.xml">
            {/if}
            {* Languages *}
            {if !empty($smarty.session.Sprachen) && count($smarty.session.Sprachen) > 1}
                {foreach item=oSprache from=$smarty.session.Sprachen}
                    <link rel="alternate" hreflang="{$oSprache->cISO639}" href="{$oSprache->cURLFull}">
                {/foreach}
            {/if}
        {/block}

{block name='layout-header-header'}

            {block name='layout-header-branding-top-bar'}
                
            {/block}
            <header class="d-print-none {if !$isMobile || $Einstellungen.template.theme.mobile_search_type !== 'fixed'}sticky-top{/if} fixed-navbar" id="jtl-nav-wrapper">
                {block name='layout-header-container-inner'}
                    <div class="container-fluid {if $Einstellungen.template.megamenu.header_full_width === 'N'}container-fluid-xl{/if}" id="head">
                    {block name='layout-header-category-nav'}
                        <div class="toggler-logo-wrapper">
                            {block name='layout-header-navbar-toggle'}
                                <button id="burger-menu" class="burger-menu-wrapper navbar-toggler collapsed {if $nSeitenTyp === $smarty.const.PAGE_BESTELLVORGANG}d-none{/if}" type="button" data-toggle="collapse" data-target="#mainNavigation" aria-controls="mainNavigation" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                            {/block}

                            {block name='layout-header-logo'}
                                
                            {/block}
                        </div>
                        {navbar toggleable=true fill=true type="expand-lg" class="justify-content-start {if $nSeitenTyp === $smarty.const.PAGE_BESTELLVORGANG}align-items-center-util{else}align-items-lg-end{/if}"}
                           {block name='layout-header-search'}
                                
                            {/block}

                            {if $nSeitenTyp === $smarty.const.PAGE_BESTELLVORGANG}
                                {block name='layout-header-secure-checkout'}
                                    <div class="secure-checkout-icon ml-auto-util ml-lg-0">
                                        {block name='layout-header-secure-checkout-title'}
                                            <i class="fas fa-lock icon-mr-2"></i>{lang key='secureCheckout' section='checkout'}
                                        {/block}
                                    </div>
                                   
                                {/block}
                            {else}
                                {block name='layout-header-branding-shop-nav'}
                                    {nav id="shop-nav" right=true class="nav-right order-lg-last nav-icons"}
                                        {block name='layout-header-branding-shop-nav-include-language-dropdown'}
                                        {/block}
                                        {include file='layout/header_nav_icons.tpl'}
                                    {/nav}
                                {/block}

                                {*categories*}
                                {block name='layout-header-include-categories-mega'}
                                    <div id="mainNavigation" class="collapse navbar-collapse nav-scrollbar">
                                        {block name='layout-header-include-include-categories-header'}
                                            <div class="nav-mobile-header d-lg-none">
                                                {row class="align-items-center-util"}
                                                    {col class="nav-mobile-header-toggler"}
                                                        {block name='layout-header-include-categories-mega-toggler'}
                                                            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#mainNavigation" aria-controls="mainNavigation" aria-expanded="false" aria-label="Toggle navigation">
                                                                <span class="navbar-toggler-icon"></span>
                                                            </button>
                                                        {/block}
                                                    {/col}
                                                    {col class="col-auto nav-mobile-header-name ml-auto-util"}
                                                        <span class="nav-offcanvas-title">{lang key='menuName'}</span>
                                                        {block name='layout-header-include-categories-mega-back'}
                                                            {link href="#" class="nav-offcanvas-title d-none" data=["menu-back"=>""]}
                                                                <span class="fas fa-chevron-left icon-mr-2"></span>
                                                                <span>{lang key='back'}</span>
                                                            {/link}
                                                        {/block}
                                                    {/col}
                                                {/row}
                                                <hr class="nav-mobile-header-hr" />
                                            </div>
                                        {/block}
                                        {block name='layout-header-include-include-categories-body'}
                                            <div class="nav-mobile-body">
                                                {navbarnav class="nav-scrollbar-inner mr-auto"}
                                                    {block name='layout-header-include-include-categories-mega'}
                                                    {/block}
                                                {/navbarnav}
                                            </div>
                                        {/block}
                                    </div>
                                {/block}
                            {/if}
                        {/navbar}
                    {/block}
                    </div>
                {/block}
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
            {block name='layout-header-search-fixed'}
                {if $Einstellungen.template.theme.mobile_search_type === 'fixed' && $isMobile}
                    <div class="container-fluid container-fluid-xl fixed-search fixed-top smoothscroll-top-search d-lg-none d-none">
                    <h1>hhhe</h1>
                    </div>
                {/if}
            {/block}
        {/block}