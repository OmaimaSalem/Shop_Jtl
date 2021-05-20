<?php
/* Smarty version 3.1.38, created on 2021-05-18 13:34:39
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\admin\templates\bootstrap\links.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a3a64fe7ec85_63038132',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a57fa9b9f2e7928c3ce9e0f7bcde5905ab4c184f' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\admin\\templates\\bootstrap\\links.tpl',
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
function content_60a3a64fe7ec85_63038132 (Smarty_Internal_Template $_smarty_tpl) {
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
