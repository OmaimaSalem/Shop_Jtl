<?php
/* Smarty version 3.1.38, created on 2021-05-17 15:05:45
  from 'C:\xampp\htdocs\shop\templates\NOVA\snippets\extension.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a26a295f6b92_87171289',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '061126beba414e98d95bd9f1dc41af83be34f716' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\templates\\NOVA\\snippets\\extension.tpl',
      1 => 1621256278,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/banner.tpl' => 1,
    'file:snippets/slider.tpl' => 1,
  ),
),false)) {
function content_60a26a295f6b92_87171289 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_22640869860a26a295c0389_78014872', 'snippets-extension');
?>

<?php }
/* {block 'snippets-extension-include-banner'} */
class Block_29301813860a26a295cd6f2_04032044 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:snippets/banner.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('isFluid'=>false), 0, false);
?>
        <?php
}
}
/* {/block 'snippets-extension-include-banner'} */
/* {block 'snippets-extension-include-slider'} */
class Block_212878679660a26a295f3fe1_04873148 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:snippets/slider.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('isFluid'=>false), 0, false);
?>
        <?php
}
}
/* {/block 'snippets-extension-include-slider'} */
/* {block 'snippets-extension'} */
class Block_22640869860a26a295c0389_78014872 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-extension' => 
  array (
    0 => 'Block_22640869860a26a295c0389_78014872',
  ),
  'snippets-extension-include-banner' => 
  array (
    0 => 'Block_29301813860a26a295cd6f2_04032044',
  ),
  'snippets-extension-include-slider' => 
  array (
    0 => 'Block_212878679660a26a295f3fe1_04873148',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_assignInScope('isFluidBanner', $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['banner_full_width'] === 'Y' && (isset($_smarty_tpl->tpl_vars['oImageMap']->value)));?>
    <?php if (!$_smarty_tpl->tpl_vars['isFluidBanner']->value) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_29301813860a26a295cd6f2_04032044', 'snippets-extension-include-banner', $this->tplIndex);
?>

    <?php }?>

    <?php $_smarty_tpl->_assignInScope('isFluidSlider', $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['slider_full_width'] === 'Y' && (isset($_smarty_tpl->tpl_vars['oSlider']->value)) && count($_smarty_tpl->tpl_vars['oSlider']->value->getSlides()) > 0);?>
    <?php if (!$_smarty_tpl->tpl_vars['isFluidSlider']->value) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_212878679660a26a295f3fe1_04873148', 'snippets-extension-include-slider', $this->tplIndex);
?>

    <?php }
}
}
/* {/block 'snippets-extension'} */
}
