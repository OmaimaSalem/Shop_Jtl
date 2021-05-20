<?php
/* Smarty version 3.1.38, created on 2021-05-17 13:07:43
  from 'C:\xampp\htdocs\shop\templates\NOVAChild\layout\header_nav_icons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a24e7f2b1095_49004961',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f8f18088a2d6193606c2b5ece9e7ad5725a352c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\templates\\NOVAChild\\layout\\header_nav_icons.tpl',
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
function content_60a24e7f2b1095_49004961 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_133122723660a24e7f2a0960_66997158', 'layout-header-nav-icons');
?>

<?php }
/* {block 'layout-header-nav-icons-include-header-nav-search'} */
class Block_5614416660a24e7f2a37d0_75675185 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php
}
}
/* {/block 'layout-header-nav-icons-include-header-nav-search'} */
/* {block 'layout-header-nav-icons-include-cart-dropdown-label'} */
class Block_91107752160a24e7f2a4af2_77139818 extends Smarty_Internal_Block
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
class Block_206324057060a24e7f2a6436_12093352 extends Smarty_Internal_Block
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
class Block_40365953360a24e7f2ae784_65835658 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block 'layout-header-nav-icons-include-header-shop-nav-compare'} */
/* {block 'layout-header-nav-icons-include-header-shop-nav-wish'} */
class Block_30240772960a24e7f2af862_25090805 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block 'layout-header-nav-icons-include-header-shop-nav-wish'} */
/* {block 'layout-header-nav-icons'} */
class Block_133122723660a24e7f2a0960_66997158 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout-header-nav-icons' => 
  array (
    0 => 'Block_133122723660a24e7f2a0960_66997158',
  ),
  'layout-header-nav-icons-include-header-nav-search' => 
  array (
    0 => 'Block_5614416660a24e7f2a37d0_75675185',
  ),
  'layout-header-nav-icons-include-cart-dropdown-label' => 
  array (
    0 => 'Block_91107752160a24e7f2a4af2_77139818',
  ),
  'layout-header-nav-icons-include-header-shop-nav-account' => 
  array (
    0 => 'Block_206324057060a24e7f2a6436_12093352',
  ),
  'layout-header-nav-icons-include-header-shop-nav-compare' => 
  array (
    0 => 'Block_40365953360a24e7f2ae784_65835658',
  ),
  'layout-header-nav-icons-include-header-shop-nav-wish' => 
  array (
    0 => 'Block_30240772960a24e7f2af862_25090805',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5614416660a24e7f2a37d0_75675185', 'layout-header-nav-icons-include-header-nav-search', $this->tplIndex);
?>

    
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_91107752160a24e7f2a4af2_77139818', 'layout-header-nav-icons-include-cart-dropdown-label', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_206324057060a24e7f2a6436_12093352', 'layout-header-nav-icons-include-header-shop-nav-account', $this->tplIndex);
?>


    <?php if (!($_smarty_tpl->tpl_vars['isMobile']->value)) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_40365953360a24e7f2ae784_65835658', 'layout-header-nav-icons-include-header-shop-nav-compare', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_30240772960a24e7f2af862_25090805', 'layout-header-nav-icons-include-header-shop-nav-wish', $this->tplIndex);
?>

    <?php }
}
}
/* {/block 'layout-header-nav-icons'} */
}
