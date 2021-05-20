<?php
/* Smarty version 3.1.38, created on 2021-05-19 15:00:06
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\snippets\categories_recursive.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a50bd64646c5_75865129',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43108c7c5c614a9605d1520a6f650ce2b50ad05d' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\snippets\\categories_recursive.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/categories_recursive.tpl' => 3,
  ),
),false)) {
function content_60a50bd64646c5_75865129 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_97226020660a50bd5c91484_12706320', 'snippets-categories-recursive');
?>

<?php }
/* {block 'snippets-categories-recursive-categories-has-items-link'} */
class Block_168934197760a50bd61b7031_85371432 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<span class="nav-link <?php if ($_smarty_tpl->tpl_vars['i']->value !== 0) {?>snippets-categories-nav-link-child<?php }?> dropdown-toggle"data-toggle="collapse"data-target="#category_box_<?php echo $_smarty_tpl->tpl_vars['category']->value->getID();?>
_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"aria-expanded="<?php if ($_smarty_tpl->tpl_vars['category']->value->getID() == $_smarty_tpl->tpl_vars['activeId']->value || (((isset($_smarty_tpl->tpl_vars['activeParent']->value)) && (isset($_smarty_tpl->tpl_vars['activeParent']->value->kKategorie))) && $_smarty_tpl->tpl_vars['activeParent']->value->kKategorie == $_smarty_tpl->tpl_vars['category']->value->getID())) {?>true<?php } else { ?>false<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['category']->value->getURL();?>
" onclick="event.stopPropagation();"><?php echo $_smarty_tpl->tpl_vars['category']->value->getShortName();?>
</a></span><?php
}
}
/* {/block 'snippets-categories-recursive-categories-has-items-link'} */
/* {block 'snippets-categories-recursive-include-categories-recursive'} */
class Block_8793903860a50bd6434f51_75604940 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['category']->value->hasChildren()) {
$_smarty_tpl->_subTemplateRender('file:snippets/categories_recursive.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('i'=>$_smarty_tpl->tpl_vars['i']->value+1,'categories'=>$_smarty_tpl->tpl_vars['category']->value->getChildren(),'limit'=>$_smarty_tpl->tpl_vars['limit']->value,'activeId'=>$_smarty_tpl->tpl_vars['activeId']->value,'activeParents'=>$_smarty_tpl->tpl_vars['activeParents']->value,'id'=>$_smarty_tpl->tpl_vars['id']->value), 0, true);
} else {
$_smarty_tpl->_subTemplateRender('file:snippets/categories_recursive.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('i'=>$_smarty_tpl->tpl_vars['i']->value+1,'categoryId'=>$_smarty_tpl->tpl_vars['category']->value->getID(),'limit'=>$_smarty_tpl->tpl_vars['limit']->value,'categories'=>null,'activeId'=>$_smarty_tpl->tpl_vars['activeId']->value,'activeParents'=>$_smarty_tpl->tpl_vars['activeParents']->value,'id'=>$_smarty_tpl->tpl_vars['id']->value), 0, true);
}
}
}
/* {/block 'snippets-categories-recursive-include-categories-recursive'} */
/* {block 'snippets-categories-recursive-categories-has-items-nav'} */
class Block_73990711160a50bd6421905_42568978 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
ob_start();
if ($_smarty_tpl->tpl_vars['category']->value->getID() == $_smarty_tpl->tpl_vars['activeId']->value || (((isset($_smarty_tpl->tpl_vars['activeParent']->value)) && (isset($_smarty_tpl->tpl_vars['activeParent']->value->kKategorie))) && $_smarty_tpl->tpl_vars['activeParent']->value->kKategorie == $_smarty_tpl->tpl_vars['category']->value->getID())) {
echo "show";
}
$_prefixVariable1=ob_get_clean();
$_block_plugin5 = isset($_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0] : null;
if (!is_callable(array($_block_plugin5, 'render'))) {
throw new SmartyException('block tag \'collapse\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('collapse', array('id'=>"category_box_".((string)$_smarty_tpl->tpl_vars['category']->value->getID())."_".((string)$_smarty_tpl->tpl_vars['i']->value)."-".((string)$_smarty_tpl->tpl_vars['id']->value),'class'=>"snippets-categories-collapse ".$_prefixVariable1));
$_block_repeat=true;
echo $_block_plugin5->render(array('id'=>"category_box_".((string)$_smarty_tpl->tpl_vars['category']->value->getID())."_".((string)$_smarty_tpl->tpl_vars['i']->value)."-".((string)$_smarty_tpl->tpl_vars['id']->value),'class'=>"snippets-categories-collapse ".$_prefixVariable1), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_plugin6 = isset($_smarty_tpl->smarty->registered_plugins['block']['nav'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['nav'][0][0] : null;
if (!is_callable(array($_block_plugin6, 'render'))) {
throw new SmartyException('block tag \'nav\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('nav', array('vertical'=>true));
$_block_repeat=true;
echo $_block_plugin6->render(array('vertical'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8793903860a50bd6434f51_75604940', 'snippets-categories-recursive-include-categories-recursive', $this->tplIndex);
$_block_repeat=false;
echo $_block_plugin6->render(array('vertical'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_repeat=false;
echo $_block_plugin5->render(array('id'=>"category_box_".((string)$_smarty_tpl->tpl_vars['category']->value->getID())."_".((string)$_smarty_tpl->tpl_vars['i']->value)."-".((string)$_smarty_tpl->tpl_vars['id']->value),'class'=>"snippets-categories-collapse ".$_prefixVariable1), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'snippets-categories-recursive-categories-has-items-nav'} */
/* {block 'snippets-categories-recursive-categories-has-items'} */
class Block_59669826260a50bd61a9ea4_57334028 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<li class="nav-item <?php if ($_smarty_tpl->tpl_vars['hasItems']->value) {?>dropdown<?php }?> <?php if ($_smarty_tpl->tpl_vars['category']->value->getID() == $_smarty_tpl->tpl_vars['activeId']->value || (((isset($_smarty_tpl->tpl_vars['activeParent']->value)) && (isset($_smarty_tpl->tpl_vars['activeParent']->value->kKategorie))) && $_smarty_tpl->tpl_vars['activeParent']->value->kKategorie == $_smarty_tpl->tpl_vars['category']->value->getID())) {?>active<?php }?>"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_168934197760a50bd61b7031_85371432', 'snippets-categories-recursive-categories-has-items-link', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_73990711160a50bd6421905_42568978', 'snippets-categories-recursive-categories-has-items-nav', $this->tplIndex);
?>
</li><?php
}
}
/* {/block 'snippets-categories-recursive-categories-has-items'} */
/* {block 'snippets-categories-recursive-has-not-items'} */
class Block_81350862760a50bd6442760_71973777 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
ob_start();
if ($_smarty_tpl->tpl_vars['category']->value->getID() == $_smarty_tpl->tpl_vars['activeId']->value || (((isset($_smarty_tpl->tpl_vars['activeParent']->value)) && (isset($_smarty_tpl->tpl_vars['activeParent']->value->kKategorie))) && $_smarty_tpl->tpl_vars['activeParent']->value->kKategorie == $_smarty_tpl->tpl_vars['category']->value->getID())) {
echo " active";
}
$_prefixVariable2=ob_get_clean();
ob_start();
if ($_smarty_tpl->tpl_vars['i']->value !== 0) {
echo "snippets-categories-nav-link-child";
}
$_prefixVariable3=ob_get_clean();
$_block_plugin7 = isset($_smarty_tpl->smarty->registered_plugins['block']['navitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['navitem'][0][0] : null;
if (!is_callable(array($_block_plugin7, 'render'))) {
throw new SmartyException('block tag \'navitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('navitem', array('class'=>$_prefixVariable2,'href'=>$_smarty_tpl->tpl_vars['category']->value->getURL(),'router-class'=>$_prefixVariable3));
$_block_repeat=true;
echo $_block_plugin7->render(array('class'=>$_prefixVariable2,'href'=>$_smarty_tpl->tpl_vars['category']->value->getURL(),'router-class'=>$_prefixVariable3), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['category']->value->getShortName();
$_block_repeat=false;
echo $_block_plugin7->render(array('class'=>$_prefixVariable2,'href'=>$_smarty_tpl->tpl_vars['category']->value->getURL(),'router-class'=>$_prefixVariable3), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'snippets-categories-recursive-has-not-items'} */
/* {block 'snippets-categories-recursive-categories'} */
class Block_26401359060a50bd5d464f4_94874922 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
$_smarty_tpl->_assignInScope('hasItems', false);
if ($_smarty_tpl->tpl_vars['category']->value->hasChildren() && (($_smarty_tpl->tpl_vars['i']->value+1) < $_smarty_tpl->tpl_vars['limit']->value)) {
$_smarty_tpl->_assignInScope('hasItems', true);
}
if ((isset($_smarty_tpl->tpl_vars['activeParents']->value)) && is_array($_smarty_tpl->tpl_vars['activeParents']->value) && (isset($_smarty_tpl->tpl_vars['activeParents']->value[$_smarty_tpl->tpl_vars['i']->value]))) {
$_smarty_tpl->_assignInScope('activeParent', $_smarty_tpl->tpl_vars['activeParents']->value[$_smarty_tpl->tpl_vars['i']->value]);
}
if ($_smarty_tpl->tpl_vars['hasItems']->value) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59669826260a50bd61a9ea4_57334028', 'snippets-categories-recursive-categories-has-items', $this->tplIndex);
} else {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_81350862760a50bd6442760_71973777', 'snippets-categories-recursive-has-not-items', $this->tplIndex);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
/* {/block 'snippets-categories-recursive-categories'} */
/* {block 'snippets-categories-recursive'} */
class Block_97226020660a50bd5c91484_12706320 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-categories-recursive' => 
  array (
    0 => 'Block_97226020660a50bd5c91484_12706320',
  ),
  'snippets-categories-recursive-categories' => 
  array (
    0 => 'Block_26401359060a50bd5d464f4_94874922',
  ),
  'snippets-categories-recursive-categories-has-items' => 
  array (
    0 => 'Block_59669826260a50bd61a9ea4_57334028',
  ),
  'snippets-categories-recursive-categories-has-items-link' => 
  array (
    0 => 'Block_168934197760a50bd61b7031_85371432',
  ),
  'snippets-categories-recursive-categories-has-items-nav' => 
  array (
    0 => 'Block_73990711160a50bd6421905_42568978',
  ),
  'snippets-categories-recursive-include-categories-recursive' => 
  array (
    0 => 'Block_8793903860a50bd6434f51_75604940',
  ),
  'snippets-categories-recursive-has-not-items' => 
  array (
    0 => 'Block_81350862760a50bd6442760_71973777',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ((!empty($_smarty_tpl->tpl_vars['categories']->value) || (isset($_smarty_tpl->tpl_vars['categoryId']->value))) && (!(isset($_smarty_tpl->tpl_vars['i']->value)) || (isset($_smarty_tpl->tpl_vars['i']->value)) && (isset($_smarty_tpl->tpl_vars['limit']->value)) && $_smarty_tpl->tpl_vars['i']->value < $_smarty_tpl->tpl_vars['limit']->value)) {?>
        <?php if (!(isset($_smarty_tpl->tpl_vars['i']->value))) {
$_smarty_tpl->_assignInScope('i', 0);
}
if (!(isset($_smarty_tpl->tpl_vars['limit']->value))) {
$_smarty_tpl->_assignInScope('limit', 3);
}
if (!(isset($_smarty_tpl->tpl_vars['activeId']->value))) {
$_smarty_tpl->_assignInScope('activeId', 0);
if ($_smarty_tpl->tpl_vars['NaviFilter']->value->hasCategory()) {
$_smarty_tpl->_assignInScope('activeId', $_smarty_tpl->tpl_vars['NaviFilter']->value->getCategory()->getValue());
} elseif ($_smarty_tpl->tpl_vars['nSeitenTyp']->value === (defined('PAGE_ARTIKEL') ? constant('PAGE_ARTIKEL') : null) && (isset($_smarty_tpl->tpl_vars['Artikel']->value))) {
$_smarty_tpl->_assignInScope('activeId', $_smarty_tpl->tpl_vars['Artikel']->value->gibKategorie());
} elseif ($_smarty_tpl->tpl_vars['nSeitenTyp']->value === (defined('PAGE_ARTIKEL') ? constant('PAGE_ARTIKEL') : null) && (isset($_SESSION['LetzteKategorie']))) {
$_smarty_tpl->_assignInScope('activeId', $_SESSION['LetzteKategorie']);
}
}
if (!(isset($_smarty_tpl->tpl_vars['activeParents']->value)) && ($_smarty_tpl->tpl_vars['nSeitenTyp']->value === (defined('PAGE_ARTIKEL') ? constant('PAGE_ARTIKEL') : null) || $_smarty_tpl->tpl_vars['nSeitenTyp']->value === (defined('PAGE_ARTIKELLISTE') ? constant('PAGE_ARTIKELLISTE') : null))) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_category_parents'][0], array( array('categoryId'=>$_smarty_tpl->tpl_vars['activeId']->value,'assign'=>'activeParents'),$_smarty_tpl ) );
}
if (!(isset($_smarty_tpl->tpl_vars['activeParents']->value))) {
$_smarty_tpl->_assignInScope('activeParents', null);
}
if (empty($_smarty_tpl->tpl_vars['categories']->value)) {
if (!(isset($_smarty_tpl->tpl_vars['categoryBoxNumber']->value))) {
$_smarty_tpl->_assignInScope('categoryBoxNumber', null);
}
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_category_array'][0], array( array('categoryId'=>$_smarty_tpl->tpl_vars['categoryId']->value,'categoryBoxNumber'=>$_smarty_tpl->tpl_vars['categoryBoxNumber']->value,'assign'=>'categories'),$_smarty_tpl ) );
}
if (!empty($_smarty_tpl->tpl_vars['categories']->value)) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_26401359060a50bd5d464f4_94874922', 'snippets-categories-recursive-categories', $this->tplIndex);
}?>
    <?php }
}
}
/* {/block 'snippets-categories-recursive'} */
}
