<?php
/* Smarty version 3.1.38, created on 2021-05-04 12:21:42
  from 'C:\xampp\htdocs\shop\admin\templates\bootstrap\news.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_609120364b98a7_81963357',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9fda124d0e5aa1b43fddd082e2872b69d8deda47' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\admin\\templates\\bootstrap\\news.tpl',
      1 => 1612177964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/header.tpl' => 1,
    'file:tpl_inc/news_erstellen.tpl' => 1,
    'file:tpl_inc/news_kategorie_erstellen.tpl' => 1,
    'file:tpl_inc/news_uebersicht.tpl' => 1,
    'file:tpl_inc/news_vorschau.tpl' => 1,
    'file:tpl_inc/news_kommentar_editieren.tpl' => 1,
    'file:tpl_inc/news_kommentar_antwort_editieren.tpl' => 1,
    'file:tpl_inc/footer.tpl' => 1,
  ),
),false)) {
function content_609120364b98a7_81963357 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:tpl_inc/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if ($_smarty_tpl->tpl_vars['step']->value === 'news_erstellen' || $_smarty_tpl->tpl_vars['step']->value === 'news_editieren') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/news_erstellen.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['step']->value === 'news_kategorie_erstellen') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/news_kategorie_erstellen.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['step']->value === 'news_uebersicht') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/news_uebersicht.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['step']->value === 'news_vorschau') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/news_vorschau.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['step']->value === 'news_kommentar_editieren') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/news_kommentar_editieren.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['step']->value === 'news_kommentar_antwort_editieren') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/news_kommentar_antwort_editieren.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
$_smarty_tpl->_subTemplateRender('file:tpl_inc/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
