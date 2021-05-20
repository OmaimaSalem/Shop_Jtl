<?php
/* Smarty version 3.1.38, created on 2021-05-04 11:46:27
  from 'C:\xampp\htdocs\shop\templates\NOVA\snippets\extension.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_609117f3928707_31525061',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '028797416ebc1363c304779bac476c0c73b68751' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\templates\\NOVA\\snippets\\extension.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/banner.tpl' => 1,
    'file:snippets/slider.tpl' => 1,
  ),
),false)) {
function content_609117f3928707_31525061 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1202323758609117f39182b0_80730456', 'snippets-extension');
?>

<?php }
/* {block 'snippets-extension-include-banner'} */
class Block_875202784609117f391e310_65204263 extends Smarty_Internal_Block
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
class Block_447882614609117f3926127_04699052 extends Smarty_Internal_Block
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
class Block_1202323758609117f39182b0_80730456 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-extension' => 
  array (
    0 => 'Block_1202323758609117f39182b0_80730456',
  ),
  'snippets-extension-include-banner' => 
  array (
    0 => 'Block_875202784609117f391e310_65204263',
  ),
  'snippets-extension-include-slider' => 
  array (
    0 => 'Block_447882614609117f3926127_04699052',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_assignInScope('isFluidBanner', $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['banner_full_width'] === 'Y' && (isset($_smarty_tpl->tpl_vars['oImageMap']->value)));?>
    <?php if (!$_smarty_tpl->tpl_vars['isFluidBanner']->value) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_875202784609117f391e310_65204263', 'snippets-extension-include-banner', $this->tplIndex);
?>

    <?php }?>

    <?php $_smarty_tpl->_assignInScope('isFluidSlider', $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['slider_full_width'] === 'Y' && (isset($_smarty_tpl->tpl_vars['oSlider']->value)) && count($_smarty_tpl->tpl_vars['oSlider']->value->getSlides()) > 0);?>
    <?php if (!$_smarty_tpl->tpl_vars['isFluidSlider']->value) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_447882614609117f3926127_04699052', 'snippets-extension-include-slider', $this->tplIndex);
?>

    <?php }
}
}
/* {/block 'snippets-extension'} */
}
