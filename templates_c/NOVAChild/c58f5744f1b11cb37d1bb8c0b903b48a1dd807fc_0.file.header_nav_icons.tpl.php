<?php
/* Smarty version 3.1.38, created on 2021-05-17 13:56:53
  from 'C:\xampp\htdocs\shop\templates\NOVA\layout\header_nav_icons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a25a054da4b0_70968227',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c58f5744f1b11cb37d1bb8c0b903b48a1dd807fc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\templates\\NOVA\\layout\\header_nav_icons.tpl',
      1 => 1621252469,
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
function content_60a25a054da4b0_70968227 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_122166720960a25a054cf309_50331039', 'layout-header-nav-icons');
?>

<?php }
/* {block 'layout-header-nav-icons-include-header-nav-search'} */
class Block_38433584560a25a054d03c6_58683988 extends Smarty_Internal_Block
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
class Block_94864506160a25a054d2201_85883578 extends Smarty_Internal_Block
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
class Block_154811261060a25a054d4b47_75206352 extends Smarty_Internal_Block
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
class Block_206080532660a25a054d66b5_71460528 extends Smarty_Internal_Block
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
class Block_72661510460a25a054d84c9_15320352 extends Smarty_Internal_Block
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
class Block_122166720960a25a054cf309_50331039 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout-header-nav-icons' => 
  array (
    0 => 'Block_122166720960a25a054cf309_50331039',
  ),
  'layout-header-nav-icons-include-header-nav-search' => 
  array (
    0 => 'Block_38433584560a25a054d03c6_58683988',
  ),
  'layout-header-nav-icons-include-header-shop-nav-account' => 
  array (
    0 => 'Block_94864506160a25a054d2201_85883578',
  ),
  'layout-header-nav-icons-include-header-shop-nav-compare' => 
  array (
    0 => 'Block_154811261060a25a054d4b47_75206352',
  ),
  'layout-header-nav-icons-include-header-shop-nav-wish' => 
  array (
    0 => 'Block_206080532660a25a054d66b5_71460528',
  ),
  'layout-header-nav-icons-include-cart-dropdown-label' => 
  array (
    0 => 'Block_72661510460a25a054d84c9_15320352',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_38433584560a25a054d03c6_58683988', 'layout-header-nav-icons-include-header-nav-search', $this->tplIndex);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_94864506160a25a054d2201_85883578', 'layout-header-nav-icons-include-header-shop-nav-account', $this->tplIndex);
?>

    <?php if (!($_smarty_tpl->tpl_vars['isMobile']->value)) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_154811261060a25a054d4b47_75206352', 'layout-header-nav-icons-include-header-shop-nav-compare', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_206080532660a25a054d66b5_71460528', 'layout-header-nav-icons-include-header-shop-nav-wish', $this->tplIndex);
?>

    <?php }?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_72661510460a25a054d84c9_15320352', 'layout-header-nav-icons-include-cart-dropdown-label', $this->tplIndex);
?>

<?php
}
}
/* {/block 'layout-header-nav-icons'} */
}
