<?php
/* Smarty version 3.1.38, created on 2021-05-04 11:46:18
  from 'C:\xampp\htdocs\shop\templates\NOVA\layout\header_nav_icons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_609117ea159664_75288492',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7647ab355d55ed8dbe2692e17c63c8c3c1f91be5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\templates\\NOVA\\layout\\header_nav_icons.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/header_nav_search.tpl' => 1,
    'file:layout/header_shop_nav_account.tpl' => 1,
    'file:layout/header_shop_nav_compare.tpl' => 1,
    'file:layout/header_shop_nav_wish.tpl' => 1,
    'file:basket/cart_dropdown_label.tpl' => 1,
  ),
),false)) {
function content_609117ea159664_75288492 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1923883873609117ea13efe8_82803051', 'layout-header-nav-icons');
?>

<?php }
/* {block 'layout-header-nav-icons-include-header-nav-search'} */
class Block_1890338738609117ea13fb93_75214704 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:layout/header_nav_search.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'layout-header-nav-icons-include-header-nav-search'} */
/* {block 'layout-header-nav-icons-include-header-shop-nav-account'} */
class Block_2042680081609117ea151cf6_43977070 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:layout/header_shop_nav_account.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'layout-header-nav-icons-include-header-shop-nav-account'} */
/* {block 'layout-header-nav-icons-include-header-shop-nav-compare'} */
class Block_1078431096609117ea154558_83914993 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:layout/header_shop_nav_compare.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'layout-header-nav-icons-include-header-shop-nav-compare'} */
/* {block 'layout-header-nav-icons-include-header-shop-nav-wish'} */
class Block_339077317609117ea155df3_00255577 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:layout/header_shop_nav_wish.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'layout-header-nav-icons-include-header-shop-nav-wish'} */
/* {block 'layout-header-nav-icons-include-cart-dropdown-label'} */
class Block_1807615690609117ea1578f1_67251085 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:basket/cart_dropdown_label.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'layout-header-nav-icons-include-cart-dropdown-label'} */
/* {block 'layout-header-nav-icons'} */
class Block_1923883873609117ea13efe8_82803051 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout-header-nav-icons' => 
  array (
    0 => 'Block_1923883873609117ea13efe8_82803051',
  ),
  'layout-header-nav-icons-include-header-nav-search' => 
  array (
    0 => 'Block_1890338738609117ea13fb93_75214704',
  ),
  'layout-header-nav-icons-include-header-shop-nav-account' => 
  array (
    0 => 'Block_2042680081609117ea151cf6_43977070',
  ),
  'layout-header-nav-icons-include-header-shop-nav-compare' => 
  array (
    0 => 'Block_1078431096609117ea154558_83914993',
  ),
  'layout-header-nav-icons-include-header-shop-nav-wish' => 
  array (
    0 => 'Block_339077317609117ea155df3_00255577',
  ),
  'layout-header-nav-icons-include-cart-dropdown-label' => 
  array (
    0 => 'Block_1807615690609117ea1578f1_67251085',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1890338738609117ea13fb93_75214704', 'layout-header-nav-icons-include-header-nav-search', $this->tplIndex);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2042680081609117ea151cf6_43977070', 'layout-header-nav-icons-include-header-shop-nav-account', $this->tplIndex);
?>

    <?php if (!($_smarty_tpl->tpl_vars['isMobile']->value)) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1078431096609117ea154558_83914993', 'layout-header-nav-icons-include-header-shop-nav-compare', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_339077317609117ea155df3_00255577', 'layout-header-nav-icons-include-header-shop-nav-wish', $this->tplIndex);
?>

    <?php }?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1807615690609117ea1578f1_67251085', 'layout-header-nav-icons-include-cart-dropdown-label', $this->tplIndex);
?>

<?php
}
}
/* {/block 'layout-header-nav-icons'} */
}
