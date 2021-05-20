<?php
/* Smarty version 3.1.38, created on 2021-05-18 11:16:40
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\snippets\extension.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a385f8b30947_45220791',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8023283506378844f0350fcda01326641f41599' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\snippets\\extension.tpl',
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
function content_60a385f8b30947_45220791 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_23699085460a385f8b20906_77930572', 'snippets-extension');
?>

<?php }
/* {block 'snippets-extension-include-banner'} */
class Block_27259131560a385f8b25508_45711265 extends Smarty_Internal_Block
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
class Block_145370931260a385f8b2dca5_16996011 extends Smarty_Internal_Block
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
class Block_23699085460a385f8b20906_77930572 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-extension' => 
  array (
    0 => 'Block_23699085460a385f8b20906_77930572',
  ),
  'snippets-extension-include-banner' => 
  array (
    0 => 'Block_27259131560a385f8b25508_45711265',
  ),
  'snippets-extension-include-slider' => 
  array (
    0 => 'Block_145370931260a385f8b2dca5_16996011',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_assignInScope('isFluidBanner', $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['banner_full_width'] === 'Y' && (isset($_smarty_tpl->tpl_vars['oImageMap']->value)));?>
    <?php if (!$_smarty_tpl->tpl_vars['isFluidBanner']->value) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27259131560a385f8b25508_45711265', 'snippets-extension-include-banner', $this->tplIndex);
?>

    <?php }?>

    <?php $_smarty_tpl->_assignInScope('isFluidSlider', $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['slider_full_width'] === 'Y' && (isset($_smarty_tpl->tpl_vars['oSlider']->value)) && count($_smarty_tpl->tpl_vars['oSlider']->value->getSlides()) > 0);?>
    <?php if (!$_smarty_tpl->tpl_vars['isFluidSlider']->value) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_145370931260a385f8b2dca5_16996011', 'snippets-extension-include-slider', $this->tplIndex);
?>

    <?php }
}
}
/* {/block 'snippets-extension'} */
}
