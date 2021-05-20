<?php
/* Smarty version 3.1.38, created on 2021-05-20 10:02:51
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\boxes\box_filter_search_special.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a617abe715b4_02756002',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb7adc6396e88aea1b56330f1513696e52b9a7b5' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\boxes\\box_filter_search_special.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/filter/genericFilterItem.tpl' => 1,
  ),
),false)) {
function content_60a617abe715b4_02756002 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_108637624160a617abe047b9_83031852', 'boxes-box-filter-search-special');
?>

<?php }
/* {block 'boxes-box-filter-search-special-content'} */
class Block_178413318760a617abe6c673_09801554 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:snippets/filter/genericFilterItem.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('filter'=>$_smarty_tpl->tpl_vars['ssf']->value), 0, false);
?>
                    <?php
}
}
/* {/block 'boxes-box-filter-search-special-content'} */
/* {block 'boxes-box-filter-search-special-hr'} */
class Block_8763403460a617abe6f298_77841075 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <hr class="box-filter-hr">
                <?php
}
}
/* {/block 'boxes-box-filter-search-special-hr'} */
/* {block 'boxes-box-filter-search-special'} */
class Block_108637624160a617abe047b9_83031852 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'boxes-box-filter-search-special' => 
  array (
    0 => 'Block_108637624160a617abe047b9_83031852',
  ),
  'boxes-box-filter-search-special-content' => 
  array (
    0 => 'Block_178413318760a617abe6c673_09801554',
  ),
  'boxes-box-filter-search-special-hr' => 
  array (
    0 => 'Block_8763403460a617abe6f298_77841075',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_assignInScope('ssf', $_smarty_tpl->tpl_vars['NaviFilter']->value->getSearchSpecialFilter());?>
    <?php if ($_smarty_tpl->tpl_vars['bBoxenFilterNach']->value && $_smarty_tpl->tpl_vars['ssf']->value->getVisibility() !== \JTL\Filter\Visibility::SHOW_NEVER && $_smarty_tpl->tpl_vars['ssf']->value->getVisibility() !== \JTL\Filter\Visibility::SHOW_CONTENT && (!empty($_smarty_tpl->tpl_vars['Suchergebnisse']->value->getSearchSpecialFilterOptions()) || $_smarty_tpl->tpl_vars['ssf']->value->isInitialized()) && !($_smarty_tpl->tpl_vars['isMobile']->value || $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['productlist']['filter_placement'] === 'modal')) {?>
        <?php if ($_smarty_tpl->tpl_vars['nSeitenTyp']->value === (defined('PAGE_ARTIKELLISTE') ? constant('PAGE_ARTIKELLISTE') : null)) {?>
            <div id="sidebox<?php echo $_smarty_tpl->tpl_vars['oBox']->value->getID();?>
" class="box box-filter-special d-none d-lg-block">
                <?php $_block_plugin8 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin8, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('variant'=>"link",'class'=>"btn-filter-box dropdown-toggle",'block'=>true,'role'=>"button",'data'=>array("toggle"=>"collapse","target"=>"#cllps-box".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()))));
$_block_repeat=true;
echo $_block_plugin8->render(array('variant'=>"link",'class'=>"btn-filter-box dropdown-toggle",'block'=>true,'role'=>"button",'data'=>array("toggle"=>"collapse","target"=>"#cllps-box".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()))), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <span class="text-truncate">
                        <?php echo $_smarty_tpl->tpl_vars['ssf']->value->getFrontendName();?>

                    </span>
                <?php $_block_repeat=false;
echo $_block_plugin8->render(array('variant'=>"link",'class'=>"btn-filter-box dropdown-toggle",'block'=>true,'role'=>"button",'data'=>array("toggle"=>"collapse","target"=>"#cllps-box".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()))), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php $_block_plugin9 = isset($_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0] : null;
if (!is_callable(array($_block_plugin9, 'render'))) {
throw new SmartyException('block tag \'collapse\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('collapse', array('id'=>"cllps-box".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'visible'=>$_smarty_tpl->tpl_vars['ssf']->value->isActive() || $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['productlist']['filter_items_always_visible'] === 'Y'));
$_block_repeat=true;
echo $_block_plugin9->render(array('id'=>"cllps-box".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'visible'=>$_smarty_tpl->tpl_vars['ssf']->value->isActive() || $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['productlist']['filter_items_always_visible'] === 'Y'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_178413318760a617abe6c673_09801554', 'boxes-box-filter-search-special-content', $this->tplIndex);
?>

                <?php $_block_repeat=false;
echo $_block_plugin9->render(array('id'=>"cllps-box".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'visible'=>$_smarty_tpl->tpl_vars['ssf']->value->isActive() || $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['productlist']['filter_items_always_visible'] === 'Y'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8763403460a617abe6f298_77841075', 'boxes-box-filter-search-special-hr', $this->tplIndex);
?>

            </div>
        <?php }?>
    <?php }
}
}
/* {/block 'boxes-box-filter-search-special'} */
}
