<?php
/* Smarty version 3.1.38, created on 2021-05-04 14:13:38
  from 'C:\xampp\htdocs\shop\templates\NOVA\snippets\filter\active_filter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60913a7210a375_33892491',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0380fbcc985a6e0eeb5d985f0767c96ef430a13b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\templates\\NOVA\\snippets\\filter\\active_filter.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60913a7210a375_33892491 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27254705060913a720e6853_25610345', 'snippets-filter-active-filter');
?>

<?php }
/* {block 'snippets-filter-active-filter-values'} */
class Block_193554494360913a720f4ce9_10830555 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'delete'),$_smarty_tpl ) );
$_prefixVariable22=ob_get_clean();
$_block_plugin48 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin48, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['activeFilter']->value->getUnsetFilterURL($_smarty_tpl->tpl_vars['filterOption']->value->getValue()),'rel'=>"nofollow",'title'=>"Filter ".$_prefixVariable22,'class'=>"btn btn-outline-secondary btn-sm filter-type-".((string)$_smarty_tpl->tpl_vars['activeFilter']->value->getNiceName())." snippets-filter-item js-filter-item"));
$_block_repeat=true;
echo $_block_plugin48->render(array('href'=>$_smarty_tpl->tpl_vars['activeFilter']->value->getUnsetFilterURL($_smarty_tpl->tpl_vars['filterOption']->value->getValue()),'rel'=>"nofollow",'title'=>"Filter ".$_prefixVariable22,'class'=>"btn btn-outline-secondary btn-sm filter-type-".((string)$_smarty_tpl->tpl_vars['activeFilter']->value->getNiceName())." snippets-filter-item js-filter-item"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php echo $_smarty_tpl->tpl_vars['filterOption']->value->getFrontendName();?>
<span class="fa fa-times snippets-filter-item-icon-left"></span>
                                <?php $_block_repeat=false;
echo $_block_plugin48->render(array('href'=>$_smarty_tpl->tpl_vars['activeFilter']->value->getUnsetFilterURL($_smarty_tpl->tpl_vars['filterOption']->value->getValue()),'rel'=>"nofollow",'title'=>"Filter ".$_prefixVariable22,'class'=>"btn btn-outline-secondary btn-sm filter-type-".((string)$_smarty_tpl->tpl_vars['activeFilter']->value->getNiceName())." snippets-filter-item js-filter-item"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php
}
}
/* {/block 'snippets-filter-active-filter-values'} */
/* {block 'snippets-filter-active-filter-value'} */
class Block_204717047660913a720fc199_87102404 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'delete'),$_smarty_tpl ) );
$_prefixVariable23=ob_get_clean();
$_block_plugin49 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin49, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['activeFilter']->value->getUnsetFilterURL($_smarty_tpl->tpl_vars['activeFilter']->value->getValue()),'rel'=>"nofollow",'title'=>"Filter ".$_prefixVariable23,'class'=>"btn btn-outline-secondary btn-sm filter-type-".((string)$_smarty_tpl->tpl_vars['activeFilter']->value->getNiceName())." snippets-filter-item js-filter-item"));
$_block_repeat=true;
echo $_block_plugin49->render(array('href'=>$_smarty_tpl->tpl_vars['activeFilter']->value->getUnsetFilterURL($_smarty_tpl->tpl_vars['activeFilter']->value->getValue()),'rel'=>"nofollow",'title'=>"Filter ".$_prefixVariable23,'class'=>"btn btn-outline-secondary btn-sm filter-type-".((string)$_smarty_tpl->tpl_vars['activeFilter']->value->getNiceName())." snippets-filter-item js-filter-item"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php echo $_smarty_tpl->tpl_vars['activeValues']->value->getFrontendName();?>
<span class="fa fa-times snippets-filter-item-icon-left"></span>
                            <?php $_block_repeat=false;
echo $_block_plugin49->render(array('href'=>$_smarty_tpl->tpl_vars['activeFilter']->value->getUnsetFilterURL($_smarty_tpl->tpl_vars['activeFilter']->value->getValue()),'rel'=>"nofollow",'title'=>"Filter ".$_prefixVariable23,'class'=>"btn btn-outline-secondary btn-sm filter-type-".((string)$_smarty_tpl->tpl_vars['activeFilter']->value->getNiceName())." snippets-filter-item js-filter-item"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php
}
}
/* {/block 'snippets-filter-active-filter-value'} */
/* {block 'snippets-filter-active-filter-remove'} */
class Block_205881410060913a72104cd3_26454848 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'removeFilters'),$_smarty_tpl ) );
$_prefixVariable24=ob_get_clean();
$_block_plugin50 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin50, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['NaviFilter']->value->getURL()->getUnsetAll(),'title'=>$_prefixVariable24,'class'=>'snippets-filter-item-all js-filter-item'));
$_block_repeat=true;
echo $_block_plugin50->render(array('href'=>$_smarty_tpl->tpl_vars['NaviFilter']->value->getURL()->getUnsetAll(),'title'=>$_prefixVariable24,'class'=>'snippets-filter-item-all js-filter-item'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'removeFilters'),$_smarty_tpl ) );?>

                    <?php $_block_repeat=false;
echo $_block_plugin50->render(array('href'=>$_smarty_tpl->tpl_vars['NaviFilter']->value->getURL()->getUnsetAll(),'title'=>$_prefixVariable24,'class'=>'snippets-filter-item-all js-filter-item'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php
}
}
/* {/block 'snippets-filter-active-filter-remove'} */
/* {block 'snippets-filter-active-filter-content'} */
class Block_55363437860913a720e8b97_06938562 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="active-filters">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['NaviFilter']->value->getActiveFilters(), 'activeFilter');
$_smarty_tpl->tpl_vars['activeFilter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['activeFilter']->value) {
$_smarty_tpl->tpl_vars['activeFilter']->do_else = false;
?>
                <?php $_smarty_tpl->_assignInScope('activeFilterValue', $_smarty_tpl->tpl_vars['activeFilter']->value->getValue());?>
                <?php $_smarty_tpl->_assignInScope('activeValues', $_smarty_tpl->tpl_vars['activeFilter']->value->getActiveValues());?>
                <?php if ($_smarty_tpl->tpl_vars['activeFilterValue']->value !== null) {?>
                    <?php if (is_array($_smarty_tpl->tpl_vars['activeValues']->value)) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['activeValues']->value, 'filterOption');
$_smarty_tpl->tpl_vars['filterOption']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filterOption']->value) {
$_smarty_tpl->tpl_vars['filterOption']->do_else = false;
?>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_193554494360913a720f4ce9_10830555', 'snippets-filter-active-filter-values', $this->tplIndex);
?>

                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php } else { ?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_204717047660913a720fc199_87102404', 'snippets-filter-active-filter-value', $this->tplIndex);
?>

                    <?php }?>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php if ($_smarty_tpl->tpl_vars['NaviFilter']->value->getURL()->getUnsetAll() !== null) {?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205881410060913a72104cd3_26454848', 'snippets-filter-active-filter-remove', $this->tplIndex);
?>

            <?php }?>
        </div>
    <?php
}
}
/* {/block 'snippets-filter-active-filter-content'} */
/* {block 'snippets-filter-active-filter'} */
class Block_27254705060913a720e6853_25610345 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-filter-active-filter' => 
  array (
    0 => 'Block_27254705060913a720e6853_25610345',
  ),
  'snippets-filter-active-filter-content' => 
  array (
    0 => 'Block_55363437860913a720e8b97_06938562',
  ),
  'snippets-filter-active-filter-values' => 
  array (
    0 => 'Block_193554494360913a720f4ce9_10830555',
  ),
  'snippets-filter-active-filter-value' => 
  array (
    0 => 'Block_204717047660913a720fc199_87102404',
  ),
  'snippets-filter-active-filter-remove' => 
  array (
    0 => 'Block_205881410060913a72104cd3_26454848',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['NaviFilter']->value->getFilterCount() > 0) {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_55363437860913a720e8b97_06938562', 'snippets-filter-active-filter-content', $this->tplIndex);
?>

<?php }
}
}
/* {/block 'snippets-filter-active-filter'} */
}
