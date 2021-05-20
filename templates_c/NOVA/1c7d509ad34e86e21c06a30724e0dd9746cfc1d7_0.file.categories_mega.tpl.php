<?php
/* Smarty version 3.1.38, created on 2021-05-04 11:46:22
  from 'C:\xampp\htdocs\shop\templates\NOVA\snippets\categories_mega.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_609117eec36d81_28808292',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c7d509ad34e86e21c06a30724e0dd9746cfc1d7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\templates\\NOVA\\snippets\\categories_mega.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/categories_mega_recursive.tpl' => 1,
    'file:snippets/image.tpl' => 1,
    'file:snippets/linkgroup_list.tpl' => 1,
  ),
),false)) {
function content_609117eec36d81_28808292 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1952696586609117eeb63d30_79713727', 'snippets-categories-mega');
?>

<?php }
/* {block 'snippets-categories-mega-category-child-body-include-categories-mega-recursive'} */
class Block_1693415822609117eeba4577_54776911 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:snippets/categories_mega_recursive.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('mainCategory'=>$_smarty_tpl->tpl_vars['sub']->value,'firstChild'=>true,'subCategory'=>$_smarty_tpl->tpl_vars['i']->value+1), 0, true);
}
}
/* {/block 'snippets-categories-mega-category-child-body-include-categories-mega-recursive'} */
/* {block 'snippets-categories-mega-sub-categories'} */
class Block_2001908304609117eeb9a242_62581625 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['category']->value->hasChildren()) {
if (!empty($_smarty_tpl->tpl_vars['category']->value->getChildren())) {
$_smarty_tpl->_assignInScope('sub_categories', $_smarty_tpl->tpl_vars['category']->value->getChildren());
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_category_array'][0], array( array('categoryId'=>$_smarty_tpl->tpl_vars['category']->value->getID(),'assign'=>'sub_categories'),$_smarty_tpl ) );
}
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sub_categories']->value, 'sub');
$_smarty_tpl->tpl_vars['sub']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sub']->value) {
$_smarty_tpl->tpl_vars['sub']->do_else = false;
ob_start();
if ($_smarty_tpl->tpl_vars['sub']->value->hasChildren()) {
echo "dropdown";
}
$_prefixVariable44=ob_get_clean();
$_block_plugin60 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin60, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('lg'=>4,'xl'=>3,'class'=>"nav-item-lg-m nav-item ".$_prefixVariable44));
$_block_repeat=true;
echo $_block_plugin60->render(array('lg'=>4,'xl'=>3,'class'=>"nav-item-lg-m nav-item ".$_prefixVariable44), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1693415822609117eeba4577_54776911', 'snippets-categories-mega-category-child-body-include-categories-mega-recursive', $this->tplIndex);
$_block_repeat=false;
echo $_block_plugin60->render(array('lg'=>4,'xl'=>3,'class'=>"nav-item-lg-m nav-item ".$_prefixVariable44), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
/* {/block 'snippets-categories-mega-sub-categories'} */
/* {block 'snippets-categories-mega-category-child'} */
class Block_857846014609117eeb89071_92586935 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<li class="nav-item nav-scrollbar-item dropdown dropdown-full<?php if ($_smarty_tpl->tpl_vars['category']->value->getID() === $_smarty_tpl->tpl_vars['activeId']->value || (((isset($_smarty_tpl->tpl_vars['activeParent']->value)) && (isset($_smarty_tpl->tpl_vars['activeParent']->value->kKategorie))) && $_smarty_tpl->tpl_vars['activeParent']->value->kKategorie == $_smarty_tpl->tpl_vars['category']->value->getID())) {?> active<?php }?>"><?php $_block_plugin55 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin55, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['category']->value->getURL(),'title'=>$_smarty_tpl->tpl_vars['category']->value->getName(),'class'=>"nav-link dropdown-toggle",'target'=>"_self"));
$_block_repeat=true;
echo $_block_plugin55->render(array('href'=>$_smarty_tpl->tpl_vars['category']->value->getURL(),'title'=>$_smarty_tpl->tpl_vars['category']->value->getName(),'class'=>"nav-link dropdown-toggle",'target'=>"_self"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><span class="nav-mobile-heading"><?php echo $_smarty_tpl->tpl_vars['category']->value->getName();?>
</span><?php $_block_repeat=false;
echo $_block_plugin55->render(array('href'=>$_smarty_tpl->tpl_vars['category']->value->getURL(),'title'=>$_smarty_tpl->tpl_vars['category']->value->getName(),'class'=>"nav-link dropdown-toggle",'target'=>"_self"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?><div class="dropdown-menu"><div class="dropdown-body"><?php $_block_plugin56 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin56, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array('class'=>"subcategory-wrapper"));
$_block_repeat=true;
echo $_block_plugin56->render(array('class'=>"subcategory-wrapper"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_plugin57 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin57, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('class'=>"lg-row-lg nav"));
$_block_repeat=true;
echo $_block_plugin57->render(array('class'=>"lg-row-lg nav"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_plugin58 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin58, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('lg'=>4,'xl'=>3,'class'=>"nav-item-lg-m nav-item dropdown d-lg-none"));
$_block_repeat=true;
echo $_block_plugin58->render(array('lg'=>4,'xl'=>3,'class'=>"nav-item-lg-m nav-item dropdown d-lg-none"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_plugin59 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin59, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['category']->value->getURL(),'rel'=>"nofollow"));
$_block_repeat=true;
echo $_block_plugin59->render(array('href'=>$_smarty_tpl->tpl_vars['category']->value->getURL(),'rel'=>"nofollow"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><strong class="nav-mobile-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'menuShow','printf'=>$_smarty_tpl->tpl_vars['category']->value->getName()),$_smarty_tpl ) );?>
</strong><?php $_block_repeat=false;
echo $_block_plugin59->render(array('href'=>$_smarty_tpl->tpl_vars['category']->value->getURL(),'rel'=>"nofollow"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_repeat=false;
echo $_block_plugin58->render(array('lg'=>4,'xl'=>3,'class'=>"nav-item-lg-m nav-item dropdown d-lg-none"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2001908304609117eeb9a242_62581625', 'snippets-categories-mega-sub-categories', $this->tplIndex);
$_block_repeat=false;
echo $_block_plugin57->render(array('class'=>"lg-row-lg nav"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_repeat=false;
echo $_block_plugin56->render(array('class'=>"subcategory-wrapper"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></div></div></li><?php
}
}
/* {/block 'snippets-categories-mega-category-child'} */
/* {block 'snippets-categories-mega-category-no-child'} */
class Block_2125970924609117eebabd25_18674195 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
ob_start();
if ($_smarty_tpl->tpl_vars['category']->value->getID() === $_smarty_tpl->tpl_vars['activeId']->value) {
echo "active";
}
$_prefixVariable45=ob_get_clean();
$_block_plugin61 = isset($_smarty_tpl->smarty->registered_plugins['block']['navitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['navitem'][0][0] : null;
if (!is_callable(array($_block_plugin61, 'render'))) {
throw new SmartyException('block tag \'navitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('navitem', array('href'=>$_smarty_tpl->tpl_vars['category']->value->getURL(),'title'=>$_smarty_tpl->tpl_vars['category']->value->getName(),'class'=>"nav-scrollbar-item ".$_prefixVariable45));
$_block_repeat=true;
echo $_block_plugin61->render(array('href'=>$_smarty_tpl->tpl_vars['category']->value->getURL(),'title'=>$_smarty_tpl->tpl_vars['category']->value->getName(),'class'=>"nav-scrollbar-item ".$_prefixVariable45), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><span class="text-truncate d-block"><?php echo $_smarty_tpl->tpl_vars['category']->value->getShortName();?>
</span><?php $_block_repeat=false;
echo $_block_plugin61->render(array('href'=>$_smarty_tpl->tpl_vars['category']->value->getURL(),'title'=>$_smarty_tpl->tpl_vars['category']->value->getName(),'class'=>"nav-scrollbar-item ".$_prefixVariable45), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'snippets-categories-mega-category-no-child'} */
/* {block 'snippets-categories-mega-categories'} */
class Block_78382145609117eeb81ba3_43462498 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
if ((isset($_smarty_tpl->tpl_vars['activeParents']->value)) && is_array($_smarty_tpl->tpl_vars['activeParents']->value) && (isset($_smarty_tpl->tpl_vars['activeParents']->value[$_smarty_tpl->tpl_vars['i']->value]))) {
$_smarty_tpl->_assignInScope('activeParent', $_smarty_tpl->tpl_vars['activeParents']->value[$_smarty_tpl->tpl_vars['i']->value]);
}
if ($_smarty_tpl->tpl_vars['category']->value->hasChildren()) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_857846014609117eeb89071_92586935', 'snippets-categories-mega-category-child', $this->tplIndex);
} else {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2125970924609117eebabd25_18674195', 'snippets-categories-mega-category-no-child', $this->tplIndex);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
/* {/block 'snippets-categories-mega-categories'} */
/* {block 'snippets-categories-mega-categories'} */
class Block_1171232716609117eeb66ee2_01998133 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['megamenu']['show_categories'] !== 'N' && ($_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_sichtbarkeit'] != 3 || \JTL\Session\Frontend::getCustomer()->getID() > 0)) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_category_array'][0], array( array('categoryId'=>0,'assign'=>'categories'),$_smarty_tpl ) );
if (!empty($_smarty_tpl->tpl_vars['categories']->value)) {
if (!(isset($_smarty_tpl->tpl_vars['activeId']->value))) {
if ($_smarty_tpl->tpl_vars['NaviFilter']->value->hasCategory()) {
$_smarty_tpl->_assignInScope('activeId', $_smarty_tpl->tpl_vars['NaviFilter']->value->getCategory()->getValue());
} elseif ($_smarty_tpl->tpl_vars['nSeitenTyp']->value === (defined('PAGE_ARTIKEL') ? constant('PAGE_ARTIKEL') : null) && (isset($_smarty_tpl->tpl_vars['Artikel']->value))) {
$_smarty_tpl->_assignInScope('activeId', $_smarty_tpl->tpl_vars['Artikel']->value->gibKategorie());
} elseif ($_smarty_tpl->tpl_vars['nSeitenTyp']->value === (defined('PAGE_ARTIKEL') ? constant('PAGE_ARTIKEL') : null) && (isset($_SESSION['LetzteKategorie']))) {
$_smarty_tpl->_assignInScope('activeId', $_SESSION['LetzteKategorie']);
} else {
$_smarty_tpl->_assignInScope('activeId', 0);
}
}
if (!(isset($_smarty_tpl->tpl_vars['activeParents']->value)) && ($_smarty_tpl->tpl_vars['nSeitenTyp']->value === (defined('PAGE_ARTIKEL') ? constant('PAGE_ARTIKEL') : null) || $_smarty_tpl->tpl_vars['nSeitenTyp']->value === (defined('PAGE_ARTIKELLISTE') ? constant('PAGE_ARTIKELLISTE') : null))) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_category_parents'][0], array( array('categoryId'=>$_smarty_tpl->tpl_vars['activeId']->value,'assign'=>'activeParents'),$_smarty_tpl ) );
}
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_78382145609117eeb81ba3_43462498', 'snippets-categories-mega-categories', $this->tplIndex);
}
}
}
}
/* {/block 'snippets-categories-mega-categories'} */
/* {block 'snippets-categories-mega-manufacturers-header'} */
class Block_415197159609117eebd8805_52840368 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_block_plugin66 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin66, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>((string)$_smarty_tpl->tpl_vars['manufacturerOverview']->value->getURL()),'rel'=>"nofollow"));
$_block_repeat=true;
echo $_block_plugin66->render(array('href'=>((string)$_smarty_tpl->tpl_vars['manufacturerOverview']->value->getURL()),'rel'=>"nofollow"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><strong class="nav-mobile-heading"><?php if (!empty($_smarty_tpl->tpl_vars['manufacturerOverview']->value->getName())) {
$_smarty_tpl->_assignInScope('manufacturerTitle', $_smarty_tpl->tpl_vars['manufacturerOverview']->value->getName());
} else {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'manufacturers'),$_smarty_tpl ) );
$_prefixVariable48 = ob_get_clean();
$_smarty_tpl->_assignInScope('manufacturerTitle', $_prefixVariable48);
}
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'menuShow','printf'=>$_smarty_tpl->tpl_vars['manufacturerTitle']->value),$_smarty_tpl ) );?>
</strong><?php $_block_repeat=false;
echo $_block_plugin66->render(array('href'=>((string)$_smarty_tpl->tpl_vars['manufacturerOverview']->value->getURL()),'rel'=>"nofollow"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'snippets-categories-mega-manufacturers-header'} */
/* {block 'snippets-categories-mega-manufacturers-link'} */
class Block_745807513609117eebe3ad9_99238041 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_block_plugin68 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin68, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['mft']->value->cURLFull,'title'=>$_smarty_tpl->tpl_vars['mft']->value->cSeo,'class'=>'submenu-headline submenu-headline-toplevel nav-link '));
$_block_repeat=true;
echo $_block_plugin68->render(array('href'=>$_smarty_tpl->tpl_vars['mft']->value->cURLFull,'title'=>$_smarty_tpl->tpl_vars['mft']->value->cSeo,'class'=>'submenu-headline submenu-headline-toplevel nav-link '), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['megamenu']['show_manufacturer_images'] !== 'N' && (!$_smarty_tpl->tpl_vars['isMobile']->value || $_smarty_tpl->tpl_vars['isTablet']->value)) {
$_smarty_tpl->_subTemplateRender('file:snippets/image.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class'=>'submenu-headline-image','item'=>$_smarty_tpl->tpl_vars['mft']->value,'square'=>false,'srcSize'=>'sm'), 0, true);
}
echo $_smarty_tpl->tpl_vars['mft']->value->getName();
$_block_repeat=false;
echo $_block_plugin68->render(array('href'=>$_smarty_tpl->tpl_vars['mft']->value->cURLFull,'title'=>$_smarty_tpl->tpl_vars['mft']->value->cSeo,'class'=>'submenu-headline submenu-headline-toplevel nav-link '), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'snippets-categories-mega-manufacturers-link'} */
/* {block 'snippets-categories-mega-manufacturers-inner'} */
class Block_1847268349609117eebc95f4_21228089 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<li class="nav-item nav-scrollbar-item dropdown dropdown-full <?php if ($_smarty_tpl->tpl_vars['nSeitenTyp']->value === (defined('PAGE_HERSTELLER') ? constant('PAGE_HERSTELLER') : null)) {?>active<?php }?>"><?php ob_start();
if ($_smarty_tpl->tpl_vars['manufacturerOverview']->value !== null) {
echo (string)$_smarty_tpl->tpl_vars['manufacturerOverview']->value->getURL();
} else {
echo "#";
}
$_prefixVariable46=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'manufacturers'),$_smarty_tpl ) );
$_prefixVariable47 = ob_get_clean();
$_block_plugin62 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin62, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_prefixVariable46,'title'=>$_prefixVariable47,'class'=>"nav-link dropdown-toggle",'target'=>"_self"));
$_block_repeat=true;
echo $_block_plugin62->render(array('href'=>$_prefixVariable46,'title'=>$_prefixVariable47,'class'=>"nav-link dropdown-toggle",'target'=>"_self"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><span class="text-truncate"><?php if ($_smarty_tpl->tpl_vars['manufacturerOverview']->value !== null && !empty($_smarty_tpl->tpl_vars['manufacturerOverview']->value->getName())) {
echo $_smarty_tpl->tpl_vars['manufacturerOverview']->value->getName();
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'manufacturers'),$_smarty_tpl ) );
}?></span><?php $_block_repeat=false;
echo $_block_plugin62->render(array('href'=>$_prefixVariable46,'title'=>$_prefixVariable47,'class'=>"nav-link dropdown-toggle",'target'=>"_self"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?><div class="dropdown-menu"><div class="dropdown-body"><?php $_block_plugin63 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin63, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array());
$_block_repeat=true;
echo $_block_plugin63->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_plugin64 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin64, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('class'=>"lg-row-lg nav"));
$_block_repeat=true;
echo $_block_plugin64->render(array('class'=>"lg-row-lg nav"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['manufacturerOverview']->value !== null) {
$_block_plugin65 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin65, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('lg'=>4,'xl'=>3,'class'=>"nav-item-lg-m nav-item d-lg-none"));
$_block_repeat=true;
echo $_block_plugin65->render(array('lg'=>4,'xl'=>3,'class'=>"nav-item-lg-m nav-item d-lg-none"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_415197159609117eebd8805_52840368', 'snippets-categories-mega-manufacturers-header', $this->tplIndex);
$_block_repeat=false;
echo $_block_plugin65->render(array('lg'=>4,'xl'=>3,'class'=>"nav-item-lg-m nav-item d-lg-none"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['manufacturers']->value, 'mft');
$_smarty_tpl->tpl_vars['mft']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mft']->value) {
$_smarty_tpl->tpl_vars['mft']->do_else = false;
$_block_plugin67 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin67, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('lg'=>4,'xl'=>3,'class'=>'nav-item-lg-m nav-item'));
$_block_repeat=true;
echo $_block_plugin67->render(array('lg'=>4,'xl'=>3,'class'=>'nav-item-lg-m nav-item'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_745807513609117eebe3ad9_99238041', 'snippets-categories-mega-manufacturers-link', $this->tplIndex);
$_block_repeat=false;
echo $_block_plugin67->render(array('lg'=>4,'xl'=>3,'class'=>'nav-item-lg-m nav-item'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_block_repeat=false;
echo $_block_plugin64->render(array('class'=>"lg-row-lg nav"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_repeat=false;
echo $_block_plugin63->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></div></div></li><?php
}
}
/* {/block 'snippets-categories-mega-manufacturers-inner'} */
/* {block 'snippets-categories-mega-manufacturers'} */
class Block_1087648082609117eebbd141_74850008 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['megamenu']['show_manufacturers'] !== 'N' && ($_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_sichtbarkeit'] != 3 || (isset($_SESSION['Kunde']->kKunde)) && $_SESSION['Kunde']->kKunde != 0)) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_manufacturers'][0], array( array('assign'=>'manufacturers'),$_smarty_tpl ) );
if (!empty($_smarty_tpl->tpl_vars['manufacturers']->value)) {
$_smarty_tpl->_assignInScope('manufacturerOverview', null);
if ((isset($_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_HERSTELLER') ? constant('LINKTYP_HERSTELLER') : null)]))) {
$_smarty_tpl->_assignInScope('manufacturerOverview', $_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_HERSTELLER') ? constant('LINKTYP_HERSTELLER') : null)]);
}
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1847268349609117eebc95f4_21228089', 'snippets-categories-mega-manufacturers-inner', $this->tplIndex);
}
}
}
}
/* {/block 'snippets-categories-mega-manufacturers'} */
/* {block 'snippets-categories-mega-include-linkgroup-list'} */
class Block_1947178261609117eebf2016_73466482 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:snippets/linkgroup_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('linkgroupIdentifier'=>'megamenu','dropdownSupport'=>true,'tplscope'=>'megamenu'), 0, false);
}
}
/* {/block 'snippets-categories-mega-include-linkgroup-list'} */
/* {block 'snippets-categories-mega-top-links-hr'} */
class Block_857771361609117eebf5a38_02411760 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<li class="d-lg-none"><hr></li><?php
}
}
/* {/block 'snippets-categories-mega-top-links-hr'} */
/* {block 'snippets-categories-mega-top-links'} */
class Block_1719127064609117eec10fe6_23019973 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['linkgroups']->value->getLinkGroupByTemplate('Kopf')->getLinks(), 'Link');
$_smarty_tpl->tpl_vars['Link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Link']->value) {
$_smarty_tpl->tpl_vars['Link']->do_else = false;
$_block_plugin73 = isset($_smarty_tpl->smarty->registered_plugins['block']['navitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['navitem'][0][0] : null;
if (!is_callable(array($_block_plugin73, 'render'))) {
throw new SmartyException('block tag \'navitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('navitem', array('class'=>"nav-scrollbar-item",'active'=>$_smarty_tpl->tpl_vars['Link']->value->getIsActive(),'href'=>$_smarty_tpl->tpl_vars['Link']->value->getURL(),'title'=>$_smarty_tpl->tpl_vars['Link']->value->getTitle()));
$_block_repeat=true;
echo $_block_plugin73->render(array('class'=>"nav-scrollbar-item",'active'=>$_smarty_tpl->tpl_vars['Link']->value->getIsActive(),'href'=>$_smarty_tpl->tpl_vars['Link']->value->getURL(),'title'=>$_smarty_tpl->tpl_vars['Link']->value->getTitle()), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['Link']->value->getName();
$_block_repeat=false;
echo $_block_plugin73->render(array('class'=>"nav-scrollbar-item",'active'=>$_smarty_tpl->tpl_vars['Link']->value->getIsActive(),'href'=>$_smarty_tpl->tpl_vars['Link']->value->getURL(),'title'=>$_smarty_tpl->tpl_vars['Link']->value->getTitle()), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
/* {/block 'snippets-categories-mega-top-links'} */
/* {block 'layout-header-top-bar-user-settings-currency-link'} */
class Block_1070406270609117eec1eb09_31484045 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'currency'),$_smarty_tpl ) );
$_prefixVariable51 = ob_get_clean();
$_block_plugin74 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin74, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('id'=>'currency-dropdown','href'=>'#','title'=>$_prefixVariable51,'class'=>"nav-link dropdown-toggle",'target'=>"_self"));
$_block_repeat=true;
echo $_block_plugin74->render(array('id'=>'currency-dropdown','href'=>'#','title'=>$_prefixVariable51,'class'=>"nav-link dropdown-toggle",'target'=>"_self"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'currency'),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin74->render(array('id'=>'currency-dropdown','href'=>'#','title'=>$_prefixVariable51,'class'=>"nav-link dropdown-toggle",'target'=>"_self"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'layout-header-top-bar-user-settings-currency-link'} */
/* {block 'layout-header-top-bar-user-settings-currency-header'} */
class Block_1600416405609117eec256b2_39556404 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<strong class="nav-mobile-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'currency'),$_smarty_tpl ) );?>
</strong><?php
}
}
/* {/block 'layout-header-top-bar-user-settings-currency-header'} */
/* {block 'layout-header-top-bar-user-settings-currency-header-items'} */
class Block_905918155609117eec2a071_17037469 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_block_plugin79 = isset($_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0] : null;
if (!is_callable(array($_block_plugin79, 'render'))) {
throw new SmartyException('block tag \'dropdownitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dropdownitem', array('href'=>$_smarty_tpl->tpl_vars['currency']->value->getURLFull(),'rel'=>"nofollow",'active'=>($_SESSION['Waehrung']->getName() === $_smarty_tpl->tpl_vars['currency']->value->getName())));
$_block_repeat=true;
echo $_block_plugin79->render(array('href'=>$_smarty_tpl->tpl_vars['currency']->value->getURLFull(),'rel'=>"nofollow",'active'=>($_SESSION['Waehrung']->getName() === $_smarty_tpl->tpl_vars['currency']->value->getName())), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['currency']->value->getName();
$_block_repeat=false;
echo $_block_plugin79->render(array('href'=>$_smarty_tpl->tpl_vars['currency']->value->getURLFull(),'rel'=>"nofollow",'active'=>($_SESSION['Waehrung']->getName() === $_smarty_tpl->tpl_vars['currency']->value->getName())), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'layout-header-top-bar-user-settings-currency-header-items'} */
/* {block 'layout-header-top-bar-user-settings-currency-body'} */
class Block_774915942609117eec22a75_53777639 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="dropdown-menu"><div class="dropdown-body"><?php $_block_plugin75 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin75, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array());
$_block_repeat=true;
echo $_block_plugin75->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_plugin76 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin76, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('class'=>"lg-row-lg nav"));
$_block_repeat=true;
echo $_block_plugin76->render(array('class'=>"lg-row-lg nav"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_plugin77 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin77, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('lg'=>4,'xl'=>3,'class'=>"nav-item-lg-m nav-item dropdown d-lg-none"));
$_block_repeat=true;
echo $_block_plugin77->render(array('lg'=>4,'xl'=>3,'class'=>"nav-item-lg-m nav-item dropdown d-lg-none"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1600416405609117eec256b2_39556404', 'layout-header-top-bar-user-settings-currency-header', $this->tplIndex);
$_block_repeat=false;
echo $_block_plugin77->render(array('lg'=>4,'xl'=>3,'class'=>"nav-item-lg-m nav-item dropdown d-lg-none"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_SESSION['Waehrungen'], 'currency');
$_smarty_tpl->tpl_vars['currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->do_else = false;
$_block_plugin78 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin78, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('lg'=>4,'xl'=>3,'class'=>'nav-item-lg-m nav-item'));
$_block_repeat=true;
echo $_block_plugin78->render(array('lg'=>4,'xl'=>3,'class'=>'nav-item-lg-m nav-item'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_905918155609117eec2a071_17037469', 'layout-header-top-bar-user-settings-currency-header-items', $this->tplIndex);
$_block_repeat=false;
echo $_block_plugin78->render(array('lg'=>4,'xl'=>3,'class'=>'nav-item-lg-m nav-item'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_block_repeat=false;
echo $_block_plugin76->render(array('class'=>"lg-row-lg nav"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_repeat=false;
echo $_block_plugin75->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></div></div><?php
}
}
/* {/block 'layout-header-top-bar-user-settings-currency-body'} */
/* {block 'layout-header-top-bar-user-settings-currency'} */
class Block_521180270609117eec1b408_66983021 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_SESSION['Waehrungen'])) && count($_SESSION['Waehrungen']) > 1) {?><li class="currency-nav-scrollbar-item nav-item nav-scrollbar-item dropdown dropdown-full"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1070406270609117eec1eb09_31484045', 'layout-header-top-bar-user-settings-currency-link', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_774915942609117eec22a75_53777639', 'layout-header-top-bar-user-settings-currency-body', $this->tplIndex);
?>
</li><?php }
}
}
/* {/block 'layout-header-top-bar-user-settings-currency'} */
/* {block 'layout-header-top-bar-user-settings'} */
class Block_838166538609117eec1a9d0_16288325 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_521180270609117eec1b408_66983021', 'layout-header-top-bar-user-settings-currency', $this->tplIndex);
}
}
/* {/block 'layout-header-top-bar-user-settings'} */
/* {block 'snippets-categories-mega'} */
class Block_1952696586609117eeb63d30_79713727 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-categories-mega' => 
  array (
    0 => 'Block_1952696586609117eeb63d30_79713727',
  ),
  'snippets-categories-mega-categories' => 
  array (
    0 => 'Block_1171232716609117eeb66ee2_01998133',
    1 => 'Block_78382145609117eeb81ba3_43462498',
  ),
  'snippets-categories-mega-category-child' => 
  array (
    0 => 'Block_857846014609117eeb89071_92586935',
  ),
  'snippets-categories-mega-sub-categories' => 
  array (
    0 => 'Block_2001908304609117eeb9a242_62581625',
  ),
  'snippets-categories-mega-category-child-body-include-categories-mega-recursive' => 
  array (
    0 => 'Block_1693415822609117eeba4577_54776911',
  ),
  'snippets-categories-mega-category-no-child' => 
  array (
    0 => 'Block_2125970924609117eebabd25_18674195',
  ),
  'snippets-categories-mega-manufacturers' => 
  array (
    0 => 'Block_1087648082609117eebbd141_74850008',
  ),
  'snippets-categories-mega-manufacturers-inner' => 
  array (
    0 => 'Block_1847268349609117eebc95f4_21228089',
  ),
  'snippets-categories-mega-manufacturers-header' => 
  array (
    0 => 'Block_415197159609117eebd8805_52840368',
  ),
  'snippets-categories-mega-manufacturers-link' => 
  array (
    0 => 'Block_745807513609117eebe3ad9_99238041',
  ),
  'snippets-categories-mega-include-linkgroup-list' => 
  array (
    0 => 'Block_1947178261609117eebf2016_73466482',
  ),
  'snippets-categories-mega-top-links-hr' => 
  array (
    0 => 'Block_857771361609117eebf5a38_02411760',
  ),
  'snippets-categories-mega-top-links' => 
  array (
    0 => 'Block_1719127064609117eec10fe6_23019973',
  ),
  'layout-header-top-bar-user-settings' => 
  array (
    0 => 'Block_838166538609117eec1a9d0_16288325',
  ),
  'layout-header-top-bar-user-settings-currency' => 
  array (
    0 => 'Block_521180270609117eec1b408_66983021',
  ),
  'layout-header-top-bar-user-settings-currency-link' => 
  array (
    0 => 'Block_1070406270609117eec1eb09_31484045',
  ),
  'layout-header-top-bar-user-settings-currency-body' => 
  array (
    0 => 'Block_774915942609117eec22a75_53777639',
  ),
  'layout-header-top-bar-user-settings-currency-header' => 
  array (
    0 => 'Block_1600416405609117eec256b2_39556404',
  ),
  'layout-header-top-bar-user-settings-currency-header-items' => 
  array (
    0 => 'Block_905918155609117eec2a071_17037469',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (!(isset($_smarty_tpl->tpl_vars['i']->value))) {
$_smarty_tpl->_assignInScope('i', 0);
}
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1171232716609117eeb66ee2_01998133', 'snippets-categories-mega-categories', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1087648082609117eebbd141_74850008', 'snippets-categories-mega-manufacturers', $this->tplIndex);
?>
     <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['megamenu']['show_pages'] !== 'N') {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1947178261609117eebf2016_73466482', 'snippets-categories-mega-include-linkgroup-list', $this->tplIndex);
}
if ($_smarty_tpl->tpl_vars['isMobile']->value) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_857771361609117eebf5a38_02411760', 'snippets-categories-mega-top-links-hr', $this->tplIndex);
if ($_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_wunschliste_anzeigen'] === 'Y') {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'wunschliste.php'),$_smarty_tpl ) );
$_prefixVariable49=ob_get_clean();
$_block_plugin69 = isset($_smarty_tpl->smarty->registered_plugins['block']['navitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['navitem'][0][0] : null;
if (!is_callable(array($_block_plugin69, 'render'))) {
throw new SmartyException('block tag \'navitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('navitem', array('href'=>$_prefixVariable49,'class'=>"wl-nav-scrollbar-item nav-scrollbar-item"));
$_block_repeat=true;
echo $_block_plugin69->render(array('href'=>$_prefixVariable49,'class'=>"wl-nav-scrollbar-item nav-scrollbar-item"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'wishlist'),$_smarty_tpl ) );
$_block_plugin70 = isset($_smarty_tpl->smarty->registered_plugins['block']['badge'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['badge'][0][0] : null;
if (!is_callable(array($_block_plugin70, 'render'))) {
throw new SmartyException('block tag \'badge\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('badge', array('id'=>"badge-wl-count",'variant'=>"primary",'class'=>"product-count"));
$_block_repeat=true;
echo $_block_plugin70->render(array('id'=>"badge-wl-count",'variant'=>"primary",'class'=>"product-count"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ((isset($_SESSION['Wunschliste'])) && !empty(count($_SESSION['Wunschliste']->CWunschlistePos_arr))) {
echo count($_SESSION['Wunschliste']->CWunschlistePos_arr);
} else { ?>0<?php }
$_block_repeat=false;
echo $_block_plugin70->render(array('id'=>"badge-wl-count",'variant'=>"primary",'class'=>"product-count"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_repeat=false;
echo $_block_plugin69->render(array('href'=>$_prefixVariable49,'class'=>"wl-nav-scrollbar-item nav-scrollbar-item"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'vergleichsliste.php'),$_smarty_tpl ) );
$_prefixVariable50=ob_get_clean();
$_block_plugin71 = isset($_smarty_tpl->smarty->registered_plugins['block']['navitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['navitem'][0][0] : null;
if (!is_callable(array($_block_plugin71, 'render'))) {
throw new SmartyException('block tag \'navitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('navitem', array('href'=>$_prefixVariable50,'class'=>"comparelist-nav-scrollbar-item nav-scrollbar-item"));
$_block_repeat=true;
echo $_block_plugin71->render(array('href'=>$_prefixVariable50,'class'=>"comparelist-nav-scrollbar-item nav-scrollbar-item"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'compare'),$_smarty_tpl ) );
$_block_plugin72 = isset($_smarty_tpl->smarty->registered_plugins['block']['badge'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['badge'][0][0] : null;
if (!is_callable(array($_block_plugin72, 'render'))) {
throw new SmartyException('block tag \'badge\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('badge', array('id'=>"comparelist-badge",'variant'=>"primary",'class'=>"product-count"));
$_block_repeat=true;
echo $_block_plugin72->render(array('id'=>"comparelist-badge",'variant'=>"primary",'class'=>"product-count"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if (!empty($_SESSION['Vergleichsliste']->oArtikel_arr)) {
echo count($_SESSION['Vergleichsliste']->oArtikel_arr);
} else { ?>0<?php }
$_block_repeat=false;
echo $_block_plugin72->render(array('id'=>"comparelist-badge",'variant'=>"primary",'class'=>"product-count"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_repeat=false;
echo $_block_plugin71->render(array('href'=>$_prefixVariable50,'class'=>"comparelist-nav-scrollbar-item nav-scrollbar-item"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
if ($_smarty_tpl->tpl_vars['linkgroups']->value->getLinkGroupByTemplate('Kopf') !== null) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1719127064609117eec10fe6_23019973', 'snippets-categories-mega-top-links', $this->tplIndex);
}
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_838166538609117eec1a9d0_16288325', 'layout-header-top-bar-user-settings', $this->tplIndex);
}
}
}
/* {/block 'snippets-categories-mega'} */
}
