<?php
/* Smarty version 3.1.38, created on 2021-05-19 14:58:53
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\layout\header_nav_icons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a50b8d9655d3_63812189',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb20c218bdf022aee728aecd0124671cd60f6eef' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\layout\\header_nav_icons.tpl',
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
function content_60a50b8d9655d3_63812189 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_210835395260a50b8d950535_12176750', 'layout-header-nav-icons');
?>

<?php }
/* {block 'layout-header-nav-icons-include-header-nav-search'} */
class Block_82923766660a50b8d9512f0_34362424 extends Smarty_Internal_Block
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
class Block_85331735860a50b8d953903_86687203 extends Smarty_Internal_Block
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
class Block_105760088660a50b8d956811_59023944 extends Smarty_Internal_Block
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
class Block_54101909960a50b8d959260_48962139 extends Smarty_Internal_Block
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
class Block_48573885260a50b8d95ed13_04015299 extends Smarty_Internal_Block
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
class Block_210835395260a50b8d950535_12176750 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout-header-nav-icons' => 
  array (
    0 => 'Block_210835395260a50b8d950535_12176750',
  ),
  'layout-header-nav-icons-include-header-nav-search' => 
  array (
    0 => 'Block_82923766660a50b8d9512f0_34362424',
  ),
  'layout-header-nav-icons-include-header-shop-nav-account' => 
  array (
    0 => 'Block_85331735860a50b8d953903_86687203',
  ),
  'layout-header-nav-icons-include-header-shop-nav-compare' => 
  array (
    0 => 'Block_105760088660a50b8d956811_59023944',
  ),
  'layout-header-nav-icons-include-header-shop-nav-wish' => 
  array (
    0 => 'Block_54101909960a50b8d959260_48962139',
  ),
  'layout-header-nav-icons-include-cart-dropdown-label' => 
  array (
    0 => 'Block_48573885260a50b8d95ed13_04015299',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_82923766660a50b8d9512f0_34362424', 'layout-header-nav-icons-include-header-nav-search', $this->tplIndex);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_85331735860a50b8d953903_86687203', 'layout-header-nav-icons-include-header-shop-nav-account', $this->tplIndex);
?>

    <?php if (!($_smarty_tpl->tpl_vars['isMobile']->value)) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_105760088660a50b8d956811_59023944', 'layout-header-nav-icons-include-header-shop-nav-compare', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54101909960a50b8d959260_48962139', 'layout-header-nav-icons-include-header-shop-nav-wish', $this->tplIndex);
?>

    <?php }?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_48573885260a50b8d95ed13_04015299', 'layout-header-nav-icons-include-cart-dropdown-label', $this->tplIndex);
?>

<?php
}
}
/* {/block 'layout-header-nav-icons'} */
}
