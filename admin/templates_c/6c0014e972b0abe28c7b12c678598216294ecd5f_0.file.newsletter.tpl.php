<?php
/* Smarty version 3.1.38, created on 2021-05-04 12:21:18
  from 'C:\xampp\htdocs\shop\admin\templates\bootstrap\newsletter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6091201e0ca953_35130686',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c0014e972b0abe28c7b12c678598216294ecd5f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\admin\\templates\\bootstrap\\newsletter.tpl',
      1 => 1612177964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/header.tpl' => 1,
    'file:tpl_inc/newsletter_uebersicht.tpl' => 1,
    'file:tpl_inc/newsletter_vorlage_erstellen.tpl' => 1,
    'file:tpl_inc/newsletter_vorlage_std_erstellen.tpl' => 1,
    'file:tpl_inc/newsletter_anzeigen.tpl' => 1,
    'file:tpl_inc/newsletter_vorlagenvorschau_vorbereitung.tpl' => 1,
    'file:tpl_inc/newsletter_vorlagenvorschau.tpl' => 1,
    'file:tpl_inc/footer.tpl' => 1,
  ),
),false)) {
function content_6091201e0ca953_35130686 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['step']->value !== 'vorlage_vorschau') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
if ($_smarty_tpl->tpl_vars['step']->value === 'uebersicht') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/newsletter_uebersicht.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['step']->value === 'vorlage_erstellen') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/newsletter_vorlage_erstellen.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['step']->value === 'vorlage_std_erstellen') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/newsletter_vorlage_std_erstellen.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['step']->value === 'history_anzeigen') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/newsletter_anzeigen.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['step']->value === 'vorlage_vorschau_iframe') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/newsletter_vorlagenvorschau_vorbereitung.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['step']->value === 'vorlage_vorschau') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/newsletter_vorlagenvorschau.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
if ($_smarty_tpl->tpl_vars['step']->value !== 'vorlage_vorschau') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
}
