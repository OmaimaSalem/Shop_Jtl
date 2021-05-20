<?php
/* Smarty version 3.1.38, created on 2021-05-07 10:27:35
  from 'C:\xampp\htdocs\shop\templates\NOVA\boxes\box_filter_search_special.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6094f9f7c1ab07_38543471',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc5ceeeb3337ed4d8da2bb500d1c581f0a04d4ae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\templates\\NOVA\\boxes\\box_filter_search_special.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/filter/genericFilterItem.tpl' => 1,
  ),
),false)) {
function content_6094f9f7c1ab07_38543471 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1026903426094f9f7b9cdb8_25502095', 'boxes-box-filter-search-special');
?>

<?php }
/* {block 'boxes-box-filter-search-special-content'} */
class Block_1712068306094f9f7c11392_19703258 extends Smarty_Internal_Block
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
class Block_17053672946094f9f7c187b4_31955563 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <hr class="box-filter-hr">
                <?php
}
}
/* {/block 'boxes-box-filter-search-special-hr'} */
/* {block 'boxes-box-filter-search-special'} */
class Block_1026903426094f9f7b9cdb8_25502095 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'boxes-box-filter-search-special' => 
  array (
    0 => 'Block_1026903426094f9f7b9cdb8_25502095',
  ),
  'boxes-box-filter-search-special-content' => 
  array (
    0 => 'Block_1712068306094f9f7c11392_19703258',
  ),
  'boxes-box-filter-search-special-hr' => 
  array (
    0 => 'Block_17053672946094f9f7c187b4_31955563',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_assignInScope('ssf', $_smarty_tpl->tpl_vars['NaviFilter']->value->getSearchSpecialFilter());?>
    <?php if ($_smarty_tpl->tpl_vars['bBoxenFilterNach']->value && $_smarty_tpl->tpl_vars['ssf']->value->getVisibility() !== \JTL\Filter\Visibility::SHOW_NEVER && $_smarty_tpl->tpl_vars['ssf']->value->getVisibility() !== \JTL\Filter\Visibility::SHOW_CONTENT && (!empty($_smarty_tpl->tpl_vars['Suchergebnisse']->value->getSearchSpecialFilterOptions()) || $_smarty_tpl->tpl_vars['ssf']->value->isInitialized()) && !($_smarty_tpl->tpl_vars['isMobile']->value || $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['productlist']['filter_placement'] === 'modal')) {?>
        <?php if ($_smarty_tpl->tpl_vars['nSeitenTyp']->value === (defined('PAGE_ARTIKELLISTE') ? constant('PAGE_ARTIKELLISTE') : null)) {?>
            <div id="sidebox<?php echo $_smarty_tpl->tpl_vars['oBox']->value->getID();?>
" class="box box-filter-special d-none d-lg-block">
                <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('variant'=>"link",'class'=>"btn-filter-box dropdown-toggle",'block'=>true,'role'=>"button",'data'=>array("toggle"=>"collapse","target"=>"#cllps-box".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()))));
$_block_repeat=true;
echo $_block_plugin1->render(array('variant'=>"link",'class'=>"btn-filter-box dropdown-toggle",'block'=>true,'role'=>"button",'data'=>array("toggle"=>"collapse","target"=>"#cllps-box".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()))), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <span class="text-truncate">
                        <?php echo $_smarty_tpl->tpl_vars['ssf']->value->getFrontendName();?>

                    </span>
                <?php $_block_repeat=false;
echo $_block_plugin1->render(array('variant'=>"link",'class'=>"btn-filter-box dropdown-toggle",'block'=>true,'role'=>"button",'data'=>array("toggle"=>"collapse","target"=>"#cllps-box".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()))), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'render'))) {
throw new SmartyException('block tag \'collapse\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('collapse', array('id'=>"cllps-box".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'visible'=>$_smarty_tpl->tpl_vars['ssf']->value->isActive() || $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['productlist']['filter_items_always_visible'] === 'Y'));
$_block_repeat=true;
echo $_block_plugin2->render(array('id'=>"cllps-box".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'visible'=>$_smarty_tpl->tpl_vars['ssf']->value->isActive() || $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['productlist']['filter_items_always_visible'] === 'Y'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1712068306094f9f7c11392_19703258', 'boxes-box-filter-search-special-content', $this->tplIndex);
?>

                <?php $_block_repeat=false;
echo $_block_plugin2->render(array('id'=>"cllps-box".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'visible'=>$_smarty_tpl->tpl_vars['ssf']->value->isActive() || $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['productlist']['filter_items_always_visible'] === 'Y'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17053672946094f9f7c187b4_31955563', 'boxes-box-filter-search-special-hr', $this->tplIndex);
?>

            </div>
        <?php }?>
    <?php }
}
}
/* {/block 'boxes-box-filter-search-special'} */
}
