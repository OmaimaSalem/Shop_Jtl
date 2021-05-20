<?php
/* Smarty version 3.1.38, created on 2021-05-19 15:00:07
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\boxes\box_filter_availability.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a50bd71a8ec4_78185752',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e0dc3ab86eb686d84d7939451e6697b3b124b54' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\boxes\\box_filter_availability.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/filter/genericFilterItem.tpl' => 1,
  ),
),false)) {
function content_60a50bd71a8ec4_78185752 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_51278469560a50bd718b6d6_20518055', 'boxes-box-filter-availability');
?>

<?php }
/* {block 'boxes-box-filter-availability-content'} */
class Block_21455809460a50bd71a3853_67708049 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:snippets/filter/genericFilterItem.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('filter'=>$_smarty_tpl->tpl_vars['oBox']->value->getItems()), 0, false);
?>
                <?php
}
}
/* {/block 'boxes-box-filter-availability-content'} */
/* {block 'boxes-box-filter-availability-hr'} */
class Block_156542266860a50bd71a6de5_17565499 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <hr class="box-filter-hr">
            <?php
}
}
/* {/block 'boxes-box-filter-availability-hr'} */
/* {block 'boxes-box-filter-availability'} */
class Block_51278469560a50bd718b6d6_20518055 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'boxes-box-filter-availability' => 
  array (
    0 => 'Block_51278469560a50bd718b6d6_20518055',
  ),
  'boxes-box-filter-availability-content' => 
  array (
    0 => 'Block_21455809460a50bd71a3853_67708049',
  ),
  'boxes-box-filter-availability-hr' => 
  array (
    0 => 'Block_156542266860a50bd71a6de5_17565499',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['nSeitenTyp']->value === (defined('PAGE_ARTIKELLISTE') ? constant('PAGE_ARTIKELLISTE') : null) && !($_smarty_tpl->tpl_vars['isMobile']->value || $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['productlist']['filter_placement'] === 'modal')) {?>
        <div id="sidebox<?php echo $_smarty_tpl->tpl_vars['oBox']->value->getID();?>
" class="box box-filter-availability d-none d-lg-block">
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
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'filterAvailability'),$_smarty_tpl ) );?>

                </span>
            <?php $_block_repeat=false;
echo $_block_plugin8->render(array('variant'=>"link",'class'=>"btn-filter-box dropdown-toggle",'block'=>true,'role'=>"button",'data'=>array("toggle"=>"collapse","target"=>"#cllps-box".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()))), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php $_block_plugin9 = isset($_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0] : null;
if (!is_callable(array($_block_plugin9, 'render'))) {
throw new SmartyException('block tag \'collapse\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('collapse', array('id'=>"cllps-box".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'visible'=>($_smarty_tpl->tpl_vars['oBox']->value->getItems()->isActive() || $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['productlist']['filter_items_always_visible'] === 'Y')));
$_block_repeat=true;
echo $_block_plugin9->render(array('id'=>"cllps-box".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'visible'=>($_smarty_tpl->tpl_vars['oBox']->value->getItems()->isActive() || $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['productlist']['filter_items_always_visible'] === 'Y')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21455809460a50bd71a3853_67708049', 'boxes-box-filter-availability-content', $this->tplIndex);
?>

            <?php $_block_repeat=false;
echo $_block_plugin9->render(array('id'=>"cllps-box".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'visible'=>($_smarty_tpl->tpl_vars['oBox']->value->getItems()->isActive() || $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['productlist']['filter_items_always_visible'] === 'Y')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_156542266860a50bd71a6de5_17565499', 'boxes-box-filter-availability-hr', $this->tplIndex);
?>

        </div>
    <?php }
}
}
/* {/block 'boxes-box-filter-availability'} */
}
