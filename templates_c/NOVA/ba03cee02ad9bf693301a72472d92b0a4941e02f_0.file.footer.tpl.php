<?php
/* Smarty version 3.1.38, created on 2021-05-19 15:00:41
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\productlist\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a50bf9781419_71749728',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba03cee02ad9bf693301a72472d92b0a4941e02f' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\productlist\\footer.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/productlist_page_nav.tpl' => 1,
  ),
),false)) {
function content_60a50bf9781419_71749728 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_107427677660a50bf9776560_96581551', 'productlist-footer');
?>

<?php }
/* {block 'productlist-footer-include-productlist-page-nav'} */
class Block_93400625860a50bf977e466_06392698 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:snippets/productlist_page_nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('navid'=>'footer','hrTop'=>true), 0, false);
?>
    <?php
}
}
/* {/block 'productlist-footer-include-productlist-page-nav'} */
/* {block 'productlist-footer'} */
class Block_107427677660a50bf9776560_96581551 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'productlist-footer' => 
  array (
    0 => 'Block_107427677660a50bf9776560_96581551',
  ),
  'productlist-footer-include-productlist-page-nav' => 
  array (
    0 => 'Block_93400625860a50bf977e466_06392698',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_assignInScope('Suchergebnisse', $_smarty_tpl->tpl_vars['NaviFilter']->value->getSearchResults(false));?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_93400625860a50bf977e466_06392698', 'productlist-footer-include-productlist-page-nav', $this->tplIndex);
?>

<?php
}
}
/* {/block 'productlist-footer'} */
}
