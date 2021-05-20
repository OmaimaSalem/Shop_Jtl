<?php
/* Smarty version 3.1.38, created on 2021-05-17 11:16:07
  from 'C:\xampp\htdocs\shop\admin\templates\bootstrap\links.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a234574a67c8_92186379',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b3c1104b1be9697aa7e3576add8e05df899fc45' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\admin\\templates\\bootstrap\\links.tpl',
      1 => 1612177964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/header.tpl' => 1,
    'file:tpl_inc/links_uebersicht.tpl' => 1,
    'file:tpl_inc/links_neue_linkgruppe.tpl' => 1,
    'file:tpl_inc/links_neuer_link.tpl' => 1,
    'file:tpl_inc/links_loesch_confirm.tpl' => 1,
    'file:tpl_inc/footer.tpl' => 1,
  ),
),false)) {
function content_60a234574a67c8_92186379 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:tpl_inc/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if ($_smarty_tpl->tpl_vars['step']->value === 'uebersicht') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/links_uebersicht.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['step']->value === 'neue Linkgruppe') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/links_neue_linkgruppe.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['step']->value === 'neuer Link') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/links_neuer_link.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['step']->value === 'linkgruppe_loeschen_confirm') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/links_loesch_confirm.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
$_smarty_tpl->_subTemplateRender('file:tpl_inc/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
