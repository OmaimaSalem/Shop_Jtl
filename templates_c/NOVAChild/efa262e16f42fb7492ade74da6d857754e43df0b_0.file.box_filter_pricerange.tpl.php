<?php
/* Smarty version 3.1.38, created on 2021-05-07 10:27:35
  from 'C:\xampp\htdocs\shop\templates\NOVA\boxes\box_filter_pricerange.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6094f9f7ef69c0_28402877',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'efa262e16f42fb7492ade74da6d857754e43df0b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\templates\\NOVA\\boxes\\box_filter_pricerange.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/filter/price_slider.tpl' => 1,
  ),
),false)) {
function content_6094f9f7ef69c0_28402877 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17484509376094f9f7ede411_26308118', 'boxes-box-filter-pricerange');
?>

<?php }
/* {block 'boxes-box-filter-pricerange-include-price-slider'} */
class Block_456906896094f9f7ef2b72_96136558 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:snippets/filter/price_slider.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>'price-slider-box'), 0, false);
?>
                    <?php
}
}
/* {/block 'boxes-box-filter-pricerange-include-price-slider'} */
/* {block 'boxes-box-filter-pricerange-hr'} */
class Block_5595156266094f9f7ef4c56_03360634 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <hr class="box-filter-hr">
                <?php
}
}
/* {/block 'boxes-box-filter-pricerange-hr'} */
/* {block 'boxes-box-filter-pricerange-content'} */
class Block_12266179346094f9f7ee45f2_06419392 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="sidebox<?php echo $_smarty_tpl->tpl_vars['oBox']->value->getID();?>
" class="box box-filter-price d-none d-lg-block js-price-range-box">
                <?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('variant'=>"link",'class'=>"btn-filter-box dropdown-toggle",'block'=>true,'role'=>"button",'data'=>array("toggle"=>"collapse","target"=>"#cllps-box".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()))));
$_block_repeat=true;
echo $_block_plugin3->render(array('variant'=>"link",'class'=>"btn-filter-box dropdown-toggle",'block'=>true,'role'=>"button",'data'=>array("toggle"=>"collapse","target"=>"#cllps-box".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()))), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <span class="text-truncate">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'rangeOfPrices'),$_smarty_tpl ) );?>

                    </span>
                <?php $_block_repeat=false;
echo $_block_plugin3->render(array('variant'=>"link",'class'=>"btn-filter-box dropdown-toggle",'block'=>true,'role'=>"button",'data'=>array("toggle"=>"collapse","target"=>"#cllps-box".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()))), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php $_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'render'))) {
throw new SmartyException('block tag \'collapse\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('collapse', array('class'=>"box-filter-price-collapse",'id'=>"cllps-box".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'visible'=>true));
$_block_repeat=true;
echo $_block_plugin4->render(array('class'=>"box-filter-price-collapse",'id'=>"cllps-box".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'visible'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_456906896094f9f7ef2b72_96136558', 'boxes-box-filter-pricerange-include-price-slider', $this->tplIndex);
?>

                <?php $_block_repeat=false;
echo $_block_plugin4->render(array('class'=>"box-filter-price-collapse",'id'=>"cllps-box".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'visible'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5595156266094f9f7ef4c56_03360634', 'boxes-box-filter-pricerange-hr', $this->tplIndex);
?>

            </div>
        <?php
}
}
/* {/block 'boxes-box-filter-pricerange-content'} */
/* {block 'boxes-box-filter-pricerange'} */
class Block_17484509376094f9f7ede411_26308118 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'boxes-box-filter-pricerange' => 
  array (
    0 => 'Block_17484509376094f9f7ede411_26308118',
  ),
  'boxes-box-filter-pricerange-content' => 
  array (
    0 => 'Block_12266179346094f9f7ee45f2_06419392',
  ),
  'boxes-box-filter-pricerange-include-price-slider' => 
  array (
    0 => 'Block_456906896094f9f7ef2b72_96136558',
  ),
  'boxes-box-filter-pricerange-hr' => 
  array (
    0 => 'Block_5595156266094f9f7ef4c56_03360634',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (!empty($_smarty_tpl->tpl_vars['oBox']->value->getItems()->getOptions()) && $_smarty_tpl->tpl_vars['nSeitenTyp']->value === (defined('PAGE_ARTIKELLISTE') ? constant('PAGE_ARTIKELLISTE') : null) && !($_smarty_tpl->tpl_vars['isMobile']->value || $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['productlist']['filter_placement'] === 'modal')) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12266179346094f9f7ee45f2_06419392', 'boxes-box-filter-pricerange-content', $this->tplIndex);
?>

    <?php }
}
}
/* {/block 'boxes-box-filter-pricerange'} */
}
