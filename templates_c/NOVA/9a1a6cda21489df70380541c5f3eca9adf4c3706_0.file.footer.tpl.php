<?php
/* Smarty version 3.1.38, created on 2021-05-04 14:13:38
  from 'C:\xampp\htdocs\shop\templates\NOVA\productlist\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60913a72457461_87919675',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a1a6cda21489df70380541c5f3eca9adf4c3706' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\templates\\NOVA\\productlist\\footer.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/productlist_page_nav.tpl' => 1,
  ),
),false)) {
function content_60913a72457461_87919675 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_213540641960913a72451c45_43571677', 'productlist-footer');
?>

<?php }
/* {block 'productlist-footer-include-productlist-page-nav'} */
class Block_118104683360913a72454157_16505527 extends Smarty_Internal_Block
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
class Block_213540641960913a72451c45_43571677 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'productlist-footer' => 
  array (
    0 => 'Block_213540641960913a72451c45_43571677',
  ),
  'productlist-footer-include-productlist-page-nav' => 
  array (
    0 => 'Block_118104683360913a72454157_16505527',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_assignInScope('Suchergebnisse', $_smarty_tpl->tpl_vars['NaviFilter']->value->getSearchResults(false));?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_118104683360913a72454157_16505527', 'productlist-footer-include-productlist-page-nav', $this->tplIndex);
?>

<?php
}
}
/* {/block 'productlist-footer'} */
}
