<?php
/* Smarty version 3.1.38, created on 2021-05-04 14:26:38
  from 'C:\xampp\htdocs\shop\templates\NOVA\snippets\linkgroup_recursive.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60913d7eb6c3f7_05542205',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06c293669a5093ca6b254db6d087990f708d5a45' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\templates\\NOVA\\snippets\\linkgroup_recursive.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/linkgroup_recursive.tpl' => 3,
  ),
),false)) {
function content_60913d7eb6c3f7_05542205 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_87650619460913d7e9ba714_79037212', 'snippets-linkgroup-recursive');
?>

<?php }
/* {block 'snippets-linkgroup-recursive-link'} */
class Block_165385473960913d7eb36427_89245265 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<a class="nav-link dropdown-toggle" target="_self" href="<?php echo $_smarty_tpl->tpl_vars['li']->value->getURL();?>
" data-toggle="collapse"data-target="#link_box_<?php echo $_smarty_tpl->tpl_vars['li']->value->getID();?>
_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"aria-expanded="<?php if ($_smarty_tpl->tpl_vars['li']->value->getIsActive() || ((isset($_smarty_tpl->tpl_vars['activeParent']->value)) && $_smarty_tpl->tpl_vars['activeParent']->value == $_smarty_tpl->tpl_vars['li']->value->getID())) {?>true<?php } else { ?>false<?php }?>"><?php echo $_smarty_tpl->tpl_vars['li']->value->getName();?>
</a><?php
}
}
/* {/block 'snippets-linkgroup-recursive-link'} */
/* {block 'snippets-linkgroup-recursive-include-linkgroup-recursive'} */
class Block_80532700260913d7eb4a3e7_74746237 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['li']->value->getChildLinks()->count() > 0) {
$_smarty_tpl->_subTemplateRender('file:snippets/linkgroup_recursive.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('i'=>$_smarty_tpl->tpl_vars['i']->value+1,'links'=>$_smarty_tpl->tpl_vars['li']->value->getChildLinks(),'limit'=>$_smarty_tpl->tpl_vars['limit']->value,'activeId'=>$_smarty_tpl->tpl_vars['activeId']->value,'activeParents'=>$_smarty_tpl->tpl_vars['activeParents']->value), 0, true);
} else {
$_smarty_tpl->_subTemplateRender('file:snippets/linkgroup_recursive.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('i'=>$_smarty_tpl->tpl_vars['i']->value+1,'links'=>array($_smarty_tpl->tpl_vars['li']->value),'limit'=>$_smarty_tpl->tpl_vars['limit']->value,'activeId'=>$_smarty_tpl->tpl_vars['activeId']->value,'activeParents'=>$_smarty_tpl->tpl_vars['activeParents']->value), 0, true);
}
}
}
/* {/block 'snippets-linkgroup-recursive-include-linkgroup-recursive'} */
/* {block 'snippets-linkgroup-recursive-has-items-nav'} */
class Block_175597388860913d7eb41048_02354625 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
ob_start();
if ($_smarty_tpl->tpl_vars['li']->value->getID() == $_smarty_tpl->tpl_vars['activeId']->value || (((isset($_smarty_tpl->tpl_vars['activeParent']->value)) && (isset($_smarty_tpl->tpl_vars['activeParent']->value->kLink))) && $_smarty_tpl->tpl_vars['activeParent']->value->kLink == $_smarty_tpl->tpl_vars['li']->value->getID())) {
echo "show";
}
$_prefixVariable1=ob_get_clean();
$_block_plugin5 = isset($_smarty_tpl->smarty->registered_plugins['block']['nav'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['nav'][0][0] : null;
if (!is_callable(array($_block_plugin5, 'render'))) {
throw new SmartyException('block tag \'nav\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('nav', array('vertical'=>true,'class'=>"collapse ".$_prefixVariable1,'id'=>"link_box_".((string)$_smarty_tpl->tpl_vars['li']->value->getID())."_".((string)$_smarty_tpl->tpl_vars['i']->value)));
$_block_repeat=true;
echo $_block_plugin5->render(array('vertical'=>true,'class'=>"collapse ".$_prefixVariable1,'id'=>"link_box_".((string)$_smarty_tpl->tpl_vars['li']->value->getID())."_".((string)$_smarty_tpl->tpl_vars['i']->value)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_80532700260913d7eb4a3e7_74746237', 'snippets-linkgroup-recursive-include-linkgroup-recursive', $this->tplIndex);
$_block_repeat=false;
echo $_block_plugin5->render(array('vertical'=>true,'class'=>"collapse ".$_prefixVariable1,'id'=>"link_box_".((string)$_smarty_tpl->tpl_vars['li']->value->getID())."_".((string)$_smarty_tpl->tpl_vars['i']->value)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'snippets-linkgroup-recursive-has-items-nav'} */
/* {block 'snippets-linkgroup-recursive-has-not-items'} */
class Block_121152721260913d7eb5ac85_84633272 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
ob_start();
if ($_smarty_tpl->tpl_vars['li']->value->getIsActive() || ((isset($_smarty_tpl->tpl_vars['activeParent']->value)) && $_smarty_tpl->tpl_vars['activeParent']->value == $_smarty_tpl->tpl_vars['li']->value->getID())) {
echo " active";
}
$_prefixVariable2=ob_get_clean();
$_block_plugin6 = isset($_smarty_tpl->smarty->registered_plugins['block']['navitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['navitem'][0][0] : null;
if (!is_callable(array($_block_plugin6, 'render'))) {
throw new SmartyException('block tag \'navitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('navitem', array('class'=>$_prefixVariable2,'href'=>$_smarty_tpl->tpl_vars['li']->value->getURL()));
$_block_repeat=true;
echo $_block_plugin6->render(array('class'=>$_prefixVariable2,'href'=>$_smarty_tpl->tpl_vars['li']->value->getURL()), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['li']->value->getName();
$_block_repeat=false;
echo $_block_plugin6->render(array('class'=>$_prefixVariable2,'href'=>$_smarty_tpl->tpl_vars['li']->value->getURL()), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'snippets-linkgroup-recursive-has-not-items'} */
/* {block 'snippets-linkgroup-recursive-list'} */
class Block_143212929760913d7ea842a6_28052162 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['links']->value, 'li');
$_smarty_tpl->tpl_vars['li']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['li']->value) {
$_smarty_tpl->tpl_vars['li']->do_else = false;
$_smarty_tpl->_assignInScope('hasItems', $_smarty_tpl->tpl_vars['li']->value->getChildLinks()->count() > 0 && (($_smarty_tpl->tpl_vars['i']->value+1) < $_smarty_tpl->tpl_vars['limit']->value));
if ((isset($_smarty_tpl->tpl_vars['activeParents']->value)) && is_array($_smarty_tpl->tpl_vars['activeParents']->value) && (isset($_smarty_tpl->tpl_vars['activeParents']->value[$_smarty_tpl->tpl_vars['i']->value]))) {
$_smarty_tpl->_assignInScope('activeParent', $_smarty_tpl->tpl_vars['activeParents']->value[$_smarty_tpl->tpl_vars['i']->value]);
}
if ($_smarty_tpl->tpl_vars['hasItems']->value) {?><li class="link-group-item nav-item <?php if ($_smarty_tpl->tpl_vars['hasItems']->value) {?>dropdown<?php }
if ($_smarty_tpl->tpl_vars['li']->value->getIsActive() || ((isset($_smarty_tpl->tpl_vars['activeParent']->value)) && $_smarty_tpl->tpl_vars['activeParent']->value == $_smarty_tpl->tpl_vars['li']->value->getID())) {?> active<?php }?>"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_165385473960913d7eb36427_89245265', 'snippets-linkgroup-recursive-link', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_175597388860913d7eb41048_02354625', 'snippets-linkgroup-recursive-has-items-nav', $this->tplIndex);
?>
</li><?php } else {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121152721260913d7eb5ac85_84633272', 'snippets-linkgroup-recursive-has-not-items', $this->tplIndex);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
/* {/block 'snippets-linkgroup-recursive-list'} */
/* {block 'snippets-linkgroup-recursive'} */
class Block_87650619460913d7e9ba714_79037212 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-linkgroup-recursive' => 
  array (
    0 => 'Block_87650619460913d7e9ba714_79037212',
  ),
  'snippets-linkgroup-recursive-list' => 
  array (
    0 => 'Block_143212929760913d7ea842a6_28052162',
  ),
  'snippets-linkgroup-recursive-link' => 
  array (
    0 => 'Block_165385473960913d7eb36427_89245265',
  ),
  'snippets-linkgroup-recursive-has-items-nav' => 
  array (
    0 => 'Block_175597388860913d7eb41048_02354625',
  ),
  'snippets-linkgroup-recursive-include-linkgroup-recursive' => 
  array (
    0 => 'Block_80532700260913d7eb4a3e7_74746237',
  ),
  'snippets-linkgroup-recursive-has-not-items' => 
  array (
    0 => 'Block_121152721260913d7eb5ac85_84633272',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ((isset($_smarty_tpl->tpl_vars['linkgroupIdentifier']->value)) && (!(isset($_smarty_tpl->tpl_vars['i']->value)) || (isset($_smarty_tpl->tpl_vars['limit']->value)) && $_smarty_tpl->tpl_vars['i']->value < $_smarty_tpl->tpl_vars['limit']->value)) {?>
        <?php if (!(isset($_smarty_tpl->tpl_vars['i']->value))) {
$_smarty_tpl->_assignInScope('i', 0);
}
if (!(isset($_smarty_tpl->tpl_vars['limit']->value))) {
$_smarty_tpl->_assignInScope('limit', 3);
}
if (!(isset($_smarty_tpl->tpl_vars['activeId']->value))) {
$_smarty_tpl->_assignInScope('activeId', 0);
if ((isset($_smarty_tpl->tpl_vars['Link']->value)) && $_smarty_tpl->tpl_vars['Link']->value->getID() > 0) {
$_smarty_tpl->_assignInScope('activeId', $_smarty_tpl->tpl_vars['Link']->value->getID());
} elseif (JTL\Shop::$kLink > 0) {
$_smarty_tpl->_assignInScope('activeId', JTL\Shop::$kLink);
$_smarty_tpl->_assignInScope('Link', JTL\Shop::Container()->getLinkService()->getLinkByID($_smarty_tpl->tpl_vars['activeId']->value));
}
}
if (!(isset($_smarty_tpl->tpl_vars['activeParents']->value))) {
$_smarty_tpl->_assignInScope('activeParents', JTL\Shop::Container()->getLinkService()->getParentIDs($_smarty_tpl->tpl_vars['activeId']->value));
}
if (!(isset($_smarty_tpl->tpl_vars['links']->value))) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_navigation'][0], array( array('linkgroupIdentifier'=>$_smarty_tpl->tpl_vars['linkgroupIdentifier']->value,'assign'=>'links'),$_smarty_tpl ) );
}
if (!empty($_smarty_tpl->tpl_vars['links']->value)) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_143212929760913d7ea842a6_28052162', 'snippets-linkgroup-recursive-list', $this->tplIndex);
}?>
    <?php }
}
}
/* {/block 'snippets-linkgroup-recursive'} */
}
