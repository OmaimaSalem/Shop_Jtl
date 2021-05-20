<?php
/* Smarty version 3.1.38, created on 2021-05-07 10:27:41
  from 'C:\xampp\htdocs\shop\templates\NOVA\page\404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6094f9fd08b750_60770199',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71ca6244410537f16c7619f3913e36ca2aed4ff5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\templates\\NOVA\\page\\404.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:page/sitemap.tpl' => 1,
  ),
),false)) {
function content_6094f9fd08b750_60770199 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20741663706094f9fd088c87_91585765', 'page-404');
?>

<?php }
/* {block 'page-404-include-sitemap'} */
class Block_7543448186094f9fd089938_45210070 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:page/sitemap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'page-404-include-sitemap'} */
/* {block 'page-404'} */
class Block_20741663706094f9fd088c87_91585765 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page-404' => 
  array (
    0 => 'Block_20741663706094f9fd088c87_91585765',
  ),
  'page-404-include-sitemap' => 
  array (
    0 => 'Block_7543448186094f9fd089938_45210070',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="page-not-found">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7543448186094f9fd089938_45210070', 'page-404-include-sitemap', $this->tplIndex);
?>

    </div>
<?php
}
}
/* {/block 'page-404'} */
}
