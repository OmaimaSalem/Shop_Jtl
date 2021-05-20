<?php
/* Smarty version 3.1.38, created on 2021-05-18 11:16:33
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVAChild\layout\header_nav_icons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a385f1451368_78145049',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea583b93f72f81b2b68459c676371696ad52bc50' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVAChild\\layout\\header_nav_icons.tpl',
      1 => 1621245337,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:basket/cart_dropdown_label.tpl' => 1,
    'file:layout/header_shop_nav_account.tpl' => 1,
  ),
),false)) {
function content_60a385f1451368_78145049 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_138260099060a385f14474e0_72509474', 'layout-header-nav-icons');
?>

<?php }
/* {block 'layout-header-nav-icons-include-header-nav-search'} */
class Block_17311108760a385f14482b2_76255126 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php
}
}
/* {/block 'layout-header-nav-icons-include-header-nav-search'} */
/* {block 'layout-header-nav-icons-include-cart-dropdown-label'} */
class Block_67168208660a385f14496b7_72212715 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:basket/cart_dropdown_label.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'layout-header-nav-icons-include-cart-dropdown-label'} */
/* {block 'layout-header-nav-icons-include-header-shop-nav-account'} */
class Block_87121702960a385f144b4f3_05851485 extends Smarty_Internal_Block
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
class Block_53532821560a385f144e2f4_87224492 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block 'layout-header-nav-icons-include-header-shop-nav-compare'} */
/* {block 'layout-header-nav-icons-include-header-shop-nav-wish'} */
class Block_177623543660a385f144f501_76347911 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block 'layout-header-nav-icons-include-header-shop-nav-wish'} */
/* {block 'layout-header-nav-icons'} */
class Block_138260099060a385f14474e0_72509474 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout-header-nav-icons' => 
  array (
    0 => 'Block_138260099060a385f14474e0_72509474',
  ),
  'layout-header-nav-icons-include-header-nav-search' => 
  array (
    0 => 'Block_17311108760a385f14482b2_76255126',
  ),
  'layout-header-nav-icons-include-cart-dropdown-label' => 
  array (
    0 => 'Block_67168208660a385f14496b7_72212715',
  ),
  'layout-header-nav-icons-include-header-shop-nav-account' => 
  array (
    0 => 'Block_87121702960a385f144b4f3_05851485',
  ),
  'layout-header-nav-icons-include-header-shop-nav-compare' => 
  array (
    0 => 'Block_53532821560a385f144e2f4_87224492',
  ),
  'layout-header-nav-icons-include-header-shop-nav-wish' => 
  array (
    0 => 'Block_177623543660a385f144f501_76347911',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17311108760a385f14482b2_76255126', 'layout-header-nav-icons-include-header-nav-search', $this->tplIndex);
?>

    
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_67168208660a385f14496b7_72212715', 'layout-header-nav-icons-include-cart-dropdown-label', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_87121702960a385f144b4f3_05851485', 'layout-header-nav-icons-include-header-shop-nav-account', $this->tplIndex);
?>


    <?php if (!($_smarty_tpl->tpl_vars['isMobile']->value)) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_53532821560a385f144e2f4_87224492', 'layout-header-nav-icons-include-header-shop-nav-compare', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_177623543660a385f144f501_76347911', 'layout-header-nav-icons-include-header-shop-nav-wish', $this->tplIndex);
?>

    <?php }
}
}
/* {/block 'layout-header-nav-icons'} */
}
