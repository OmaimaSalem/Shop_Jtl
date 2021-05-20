<?php
/* Smarty version 3.1.38, created on 2021-05-19 15:00:12
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\boxes\box_filter_rating.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a50bdcf35ba5_92010637',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b19776c6c42d0f731f6316398f29453f4610f76' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\boxes\\box_filter_rating.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/filter/genericFilterItem.tpl' => 1,
  ),
),false)) {
function content_60a50bdcf35ba5_92010637 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3820687160a50bdcf0eba5_18723180', 'boxes-box-filter-rating');
?>

<?php }
/* {block 'boxes-box-filter-rating-content'} */
class Block_49936733760a50bdcf2f477_97226425 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:snippets/filter/genericFilterItem.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('filter'=>$_smarty_tpl->tpl_vars['oBox']->value->getItems()), 0, false);
?>
                <?php
}
}
/* {/block 'boxes-box-filter-rating-content'} */
/* {block 'boxes-box-filter-rating-hr'} */
class Block_195005702260a50bdcf33b60_16460791 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <hr class="box-filter-hr">
            <?php
}
}
/* {/block 'boxes-box-filter-rating-hr'} */
/* {block 'boxes-box-filter-rating'} */
class Block_3820687160a50bdcf0eba5_18723180 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'boxes-box-filter-rating' => 
  array (
    0 => 'Block_3820687160a50bdcf0eba5_18723180',
  ),
  'boxes-box-filter-rating-content' => 
  array (
    0 => 'Block_49936733760a50bdcf2f477_97226425',
  ),
  'boxes-box-filter-rating-hr' => 
  array (
    0 => 'Block_195005702260a50bdcf33b60_16460791',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['nSeitenTyp']->value === (defined('PAGE_ARTIKELLISTE') ? constant('PAGE_ARTIKELLISTE') : null) && !($_smarty_tpl->tpl_vars['isMobile']->value || $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['productlist']['filter_placement'] === 'modal')) {?>
        <div id="sidebox<?php echo $_smarty_tpl->tpl_vars['oBox']->value->getID();?>
" class="box box-filter-rating d-none d-lg-block">
            <?php $_block_plugin27 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin27, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('variant'=>"link",'class'=>"btn-filter-box dropdown-toggle",'block'=>true,'role'=>"button",'data'=>array("toggle"=>"collapse","target"=>"#cllps-box".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()))));
$_block_repeat=true;
echo $_block_plugin27->render(array('variant'=>"link",'class'=>"btn-filter-box dropdown-toggle",'block'=>true,'role'=>"button",'data'=>array("toggle"=>"collapse","target"=>"#cllps-box".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()))), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <span class="text-truncate">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'Votes'),$_smarty_tpl ) );?>

                </span>
            <?php $_block_repeat=false;
echo $_block_plugin27->render(array('variant'=>"link",'class'=>"btn-filter-box dropdown-toggle",'block'=>true,'role'=>"button",'data'=>array("toggle"=>"collapse","target"=>"#cllps-box".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()))), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php $_block_plugin28 = isset($_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0] : null;
if (!is_callable(array($_block_plugin28, 'render'))) {
throw new SmartyException('block tag \'collapse\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('collapse', array('id'=>"cllps-box".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'visible'=>$_smarty_tpl->tpl_vars['oBox']->value->getItems()->isActive() || $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['productlist']['filter_items_always_visible'] === 'Y'));
$_block_repeat=true;
echo $_block_plugin28->render(array('id'=>"cllps-box".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'visible'=>$_smarty_tpl->tpl_vars['oBox']->value->getItems()->isActive() || $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['productlist']['filter_items_always_visible'] === 'Y'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_49936733760a50bdcf2f477_97226425', 'boxes-box-filter-rating-content', $this->tplIndex);
?>

            <?php $_block_repeat=false;
echo $_block_plugin28->render(array('id'=>"cllps-box".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'visible'=>$_smarty_tpl->tpl_vars['oBox']->value->getItems()->isActive() || $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['productlist']['filter_items_always_visible'] === 'Y'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_195005702260a50bdcf33b60_16460791', 'boxes-box-filter-rating-hr', $this->tplIndex);
?>

        </div>
    <?php }
}
}
/* {/block 'boxes-box-filter-rating'} */
}
