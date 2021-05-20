<?php
/* Smarty version 3.1.38, created on 2021-05-20 15:28:45
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\admin\templates\bootstrap\versandarten.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a6640d810165_67979090',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f5139dd4501a7a73a1222e0e8cc3c26b023672f' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\admin\\templates\\bootstrap\\versandarten.tpl',
      1 => 1612177964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/header.tpl' => 1,
    'file:tpl_inc/versandarten_uebersicht.tpl' => 1,
    'file:tpl_inc/versandarten_neue_Versandart.tpl' => 1,
    'file:tpl_inc/versandarten_zuschlagsliste.tpl' => 1,
    'file:tpl_inc/footer.tpl' => 1,
  ),
),false)) {
function content_60a6640d810165_67979090 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:tpl_inc/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if ($_smarty_tpl->tpl_vars['step']->value === 'uebersicht') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/versandarten_uebersicht.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['step']->value === 'neue Versandart') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/versandarten_neue_Versandart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['step']->value === 'Zuschlagsliste') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/versandarten_zuschlagsliste.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
$_smarty_tpl->_subTemplateRender('file:tpl_inc/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
