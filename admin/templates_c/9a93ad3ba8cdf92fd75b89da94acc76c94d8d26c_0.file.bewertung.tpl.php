<?php
/* Smarty version 3.1.38, created on 2021-05-07 11:45:33
  from 'C:\xampp\htdocs\shop\admin\templates\bootstrap\bewertung.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60950c3d7957f0_22721711',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a93ad3ba8cdf92fd75b89da94acc76c94d8d26c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\admin\\templates\\bootstrap\\bewertung.tpl',
      1 => 1612177964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/header.tpl' => 1,
    'file:tpl_inc/bewertung_uebersicht.tpl' => 1,
    'file:tpl_inc/bewertung_editieren.tpl' => 1,
    'file:tpl_inc/footer.tpl' => 1,
  ),
),false)) {
function content_60950c3d7957f0_22721711 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:tpl_inc/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['step']->value === 'bewertung_uebersicht') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/bewertung_uebersicht.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['step']->value === 'bewertung_editieren') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/bewertung_editieren.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
$_smarty_tpl->_subTemplateRender('file:tpl_inc/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
