<?php
/* Smarty version 3.1.38, created on 2021-05-19 14:59:07
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\snippets\categories_mega.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a50b9b6a73c6_08450596',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0453cddf97befb9cfdbae4148c7bfb5e502fec7f' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\snippets\\categories_mega.tpl',
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
function content_60a50b9b6a73c6_08450596 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4433902060a50b9b3f1af1_39241499', 'snippets-categories-mega');
?>

<?php }
/* {block 'snippets-categories-mega-category-child-body-include-categories-mega-recursive'} */
class Block_421817160a50b9b4dc224_93606690 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:snippets/categories_mega_recursive.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('mainCategory'=>$_smarty_tpl->tpl_vars['sub']->value,'firstChild'=>true,'subCategory'=>$_smarty_tpl->tpl_vars['i']->value+1), 0, true);
}
}
/* {/block 'snippets-categories-mega-category-child-body-include-categories-mega-recursive'} */
/* {block 'snippets-categories-mega-sub-categories'} */
class Block_19170890360a50b9b4a3584_75636916 extends Smarty_Internal_Block
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
$_prefixVariable48=ob_get_clean();
$_block_plugin92 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin92, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('lg'=>4,'xl'=>3,'class'=>"nav-item-lg-m nav-item ".$_prefixVariable48));
$_block_repeat=true;
echo $_block_plugin92->render(array('lg'=>4,'xl'=>3,'class'=>"nav-item-lg-m nav-item ".$_prefixVariable48), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_421817160a50b9b4dc224_93606690', 'snippets-categories-mega-category-child-body-include-categories-mega-recursive', $this->tplIndex);
$_block_repeat=false;
echo $_block_plugin92->render(array('lg'=>4,'xl'=>3,'class'=>"nav-item-lg-m nav-item ".$_prefixVariable48), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
/* {/block 'snippets-categories-mega-sub-categories'} */
/* {block 'snippets-categories-mega-category-child'} */
class Block_85548120360a50b9b46a8e2_69279190 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<li class="nav-item nav-scrollbar-item dropdown dropdown-full<?php if ($_smarty_tpl->tpl_vars['category']->value->getID() === $_smarty_tpl->tpl_vars['activeId']->value || (((isset($_smarty_tpl->tpl_vars['activeParent']->value)) && (isset($_smarty_tpl->tpl_vars['activeParent']->value->kKategorie))) && $_smarty_tpl->tpl_vars['activeParent']->value->kKategorie == $_smarty_tpl->tpl_vars['category']->value->getID())) {?> active<?php }?>"><?php $_block_plugin87 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin87, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['category']->value->getURL(),'title'=>$_smarty_tpl->tpl_vars['category']->value->getName(),'class'=>"nav-link dropdown-toggle",'target'=>"_self"));
$_block_repeat=true;
echo $_block_plugin87->render(array('href'=>$_smarty_tpl->tpl_vars['category']->value->getURL(),'title'=>$_smarty_tpl->tpl_vars['category']->value->getName(),'class'=>"nav-link dropdown-toggle",'target'=>"_self"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><span class="nav-mobile-heading"><?php echo $_smarty_tpl->tpl_vars['category']->value->getName();?>
</span><?php $_block_repeat=false;
echo $_block_plugin87->render(array('href'=>$_smarty_tpl->tpl_vars['category']->value->getURL(),'title'=>$_smarty_tpl->tpl_vars['category']->value->getName(),'class'=>"nav-link dropdown-toggle",'target'=>"_self"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?><div class="dropdown-menu"><div class="dropdown-body"><?php $_block_plugin88 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin88, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array('class'=>"subcategory-wrapper"));
$_block_repeat=true;
echo $_block_plugin88->render(array('class'=>"subcategory-wrapper"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_plugin89 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin89, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('class'=>"lg-row-lg nav"));
$_block_repeat=true;
echo $_block_plugin89->render(array('class'=>"lg-row-lg nav"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_plugin90 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin90, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('lg'=>4,'xl'=>3,'class'=>"nav-item-lg-m nav-item dropdown d-lg-none"));
$_block_repeat=true;
echo $_block_plugin90->render(array('lg'=>4,'xl'=>3,'class'=>"nav-item-lg-m nav-item dropdown d-lg-none"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_plugin91 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin91, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['category']->value->getURL(),'rel'=>"nofollow"));
$_block_repeat=true;
echo $_block_plugin91->render(array('href'=>$_smarty_tpl->tpl_vars['category']->value->getURL(),'rel'=>"nofollow"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><strong class="nav-mobile-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'menuShow','printf'=>$_smarty_tpl->tpl_vars['category']->value->getName()),$_smarty_tpl ) );?>
</strong><?php $_block_repeat=false;
echo $_block_plugin91->render(array('href'=>$_smarty_tpl->tpl_vars['category']->value->getURL(),'rel'=>"nofollow"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_repeat=false;
echo $_block_plugin90->render(array('lg'=>4,'xl'=>3,'class'=>"nav-item-lg-m nav-item dropdown d-lg-none"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19170890360a50b9b4a3584_75636916', 'snippets-categories-mega-sub-categories', $this->tplIndex);
$_block_repeat=false;
echo $_block_plugin89->render(array('class'=>"lg-row-lg nav"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_repeat=false;
echo $_block_plugin88->render(array('class'=>"subcategory-wrapper"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></div></div></li><?php
}
}
/* {/block 'snippets-categories-mega-category-child'} */
/* {block 'snippets-categories-mega-category-no-child'} */
class Block_21837554660a50b9b4e56b9_96108802 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
ob_start();
if ($_smarty_tpl->tpl_vars['category']->value->getID() === $_smarty_tpl->tpl_vars['activeId']->value) {
echo "active";
}
$_prefixVariable49=ob_get_clean();
$_block_plugin93 = isset($_smarty_tpl->smarty->registered_plugins['block']['navitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['navitem'][0][0] : null;
if (!is_callable(array($_block_plugin93, 'render'))) {
throw new SmartyException('block tag \'navitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('navitem', array('href'=>$_smarty_tpl->tpl_vars['category']->value->getURL(),'title'=>$_smarty_tpl->tpl_vars['category']->value->getName(),'class'=>"nav-scrollbar-item ".$_prefixVariable49));
$_block_repeat=true;
echo $_block_plugin93->render(array('href'=>$_smarty_tpl->tpl_vars['category']->value->getURL(),'title'=>$_smarty_tpl->tpl_vars['category']->value->getName(),'class'=>"nav-scrollbar-item ".$_prefixVariable49), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><span class="text-truncate d-block"><?php echo $_smarty_tpl->tpl_vars['category']->value->getShortName();?>
</span><?php $_block_repeat=false;
echo $_block_plugin93->render(array('href'=>$_smarty_tpl->tpl_vars['category']->value->getURL(),'title'=>$_smarty_tpl->tpl_vars['category']->value->getName(),'class'=>"nav-scrollbar-item ".$_prefixVariable49), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'snippets-categories-mega-category-no-child'} */
/* {block 'snippets-categories-mega-categories'} */
class Block_21833310860a50b9b461779_09487398 extends Smarty_Internal_Block
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_85548120360a50b9b46a8e2_69279190', 'snippets-categories-mega-category-child', $this->tplIndex);
} else {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21837554660a50b9b4e56b9_96108802', 'snippets-categories-mega-category-no-child', $this->tplIndex);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
/* {/block 'snippets-categories-mega-categories'} */
/* {block 'snippets-categories-mega-categories'} */
class Block_142255638360a50b9b3f75e4_76047752 extends Smarty_Internal_Block
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21833310860a50b9b461779_09487398', 'snippets-categories-mega-categories', $this->tplIndex);
}
}
}
}
/* {/block 'snippets-categories-mega-categories'} */
/* {block 'snippets-categories-mega-manufacturers-header'} */
class Block_160971561260a50b9b569861_77883708 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_block_plugin98 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin98, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>((string)$_smarty_tpl->tpl_vars['manufacturerOverview']->value->getURL()),'rel'=>"nofollow"));
$_block_repeat=true;
echo $_block_plugin98->render(array('href'=>((string)$_smarty_tpl->tpl_vars['manufacturerOverview']->value->getURL()),'rel'=>"nofollow"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><strong class="nav-mobile-heading"><?php if (!empty($_smarty_tpl->tpl_vars['manufacturerOverview']->value->getName())) {
$_smarty_tpl->_assignInScope('manufacturerTitle', $_smarty_tpl->tpl_vars['manufacturerOverview']->value->getName());
} else {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'manufacturers'),$_smarty_tpl ) );
$_prefixVariable52 = ob_get_clean();
$_smarty_tpl->_assignInScope('manufacturerTitle', $_prefixVariable52);
}
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'menuShow','printf'=>$_smarty_tpl->tpl_vars['manufacturerTitle']->value),$_smarty_tpl ) );?>
</strong><?php $_block_repeat=false;
echo $_block_plugin98->render(array('href'=>((string)$_smarty_tpl->tpl_vars['manufacturerOverview']->value->getURL()),'rel'=>"nofollow"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'snippets-categories-mega-manufacturers-header'} */
/* {block 'snippets-categories-mega-manufacturers-link'} */
class Block_126420322660a50b9b584c25_63475722 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_block_plugin100 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin100, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['mft']->value->cURLFull,'title'=>$_smarty_tpl->tpl_vars['mft']->value->cSeo,'class'=>'submenu-headline submenu-headline-toplevel nav-link '));
$_block_repeat=true;
echo $_block_plugin100->render(array('href'=>$_smarty_tpl->tpl_vars['mft']->value->cURLFull,'title'=>$_smarty_tpl->tpl_vars['mft']->value->cSeo,'class'=>'submenu-headline submenu-headline-toplevel nav-link '), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['megamenu']['show_manufacturer_images'] !== 'N' && (!$_smarty_tpl->tpl_vars['isMobile']->value || $_smarty_tpl->tpl_vars['isTablet']->value)) {
$_smarty_tpl->_subTemplateRender('file:snippets/image.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class'=>'submenu-headline-image','item'=>$_smarty_tpl->tpl_vars['mft']->value,'square'=>false,'srcSize'=>'sm'), 0, true);
}
echo $_smarty_tpl->tpl_vars['mft']->value->getName();
$_block_repeat=false;
echo $_block_plugin100->render(array('href'=>$_smarty_tpl->tpl_vars['mft']->value->cURLFull,'title'=>$_smarty_tpl->tpl_vars['mft']->value->cSeo,'class'=>'submenu-headline submenu-headline-toplevel nav-link '), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'snippets-categories-mega-manufacturers-link'} */
/* {block 'snippets-categories-mega-manufacturers-inner'} */
class Block_212431836660a50b9b54f6f2_52174461 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<li class="nav-item nav-scrollbar-item dropdown dropdown-full <?php if ($_smarty_tpl->tpl_vars['nSeitenTyp']->value === (defined('PAGE_HERSTELLER') ? constant('PAGE_HERSTELLER') : null)) {?>active<?php }?>"><?php ob_start();
if ($_smarty_tpl->tpl_vars['manufacturerOverview']->value !== null) {
echo (string)$_smarty_tpl->tpl_vars['manufacturerOverview']->value->getURL();
} else {
echo "#";
}
$_prefixVariable50=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'manufacturers'),$_smarty_tpl ) );
$_prefixVariable51 = ob_get_clean();
$_block_plugin94 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin94, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_prefixVariable50,'title'=>$_prefixVariable51,'class'=>"nav-link dropdown-toggle",'target'=>"_self"));
$_block_repeat=true;
echo $_block_plugin94->render(array('href'=>$_prefixVariable50,'title'=>$_prefixVariable51,'class'=>"nav-link dropdown-toggle",'target'=>"_self"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><span class="text-truncate"><?php if ($_smarty_tpl->tpl_vars['manufacturerOverview']->value !== null && !empty($_smarty_tpl->tpl_vars['manufacturerOverview']->value->getName())) {
echo $_smarty_tpl->tpl_vars['manufacturerOverview']->value->getName();
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'manufacturers'),$_smarty_tpl ) );
}?></span><?php $_block_repeat=false;
echo $_block_plugin94->render(array('href'=>$_prefixVariable50,'title'=>$_prefixVariable51,'class'=>"nav-link dropdown-toggle",'target'=>"_self"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?><div class="dropdown-menu"><div class="dropdown-body"><?php $_block_plugin95 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin95, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array());
$_block_repeat=true;
echo $_block_plugin95->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_plugin96 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin96, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('class'=>"lg-row-lg nav"));
$_block_repeat=true;
echo $_block_plugin96->render(array('class'=>"lg-row-lg nav"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['manufacturerOverview']->value !== null) {
$_block_plugin97 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin97, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('lg'=>4,'xl'=>3,'class'=>"nav-item-lg-m nav-item d-lg-none"));
$_block_repeat=true;
echo $_block_plugin97->render(array('lg'=>4,'xl'=>3,'class'=>"nav-item-lg-m nav-item d-lg-none"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_160971561260a50b9b569861_77883708', 'snippets-categories-mega-manufacturers-header', $this->tplIndex);
$_block_repeat=false;
echo $_block_plugin97->render(array('lg'=>4,'xl'=>3,'class'=>"nav-item-lg-m nav-item d-lg-none"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['manufacturers']->value, 'mft');
$_smarty_tpl->tpl_vars['mft']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mft']->value) {
$_smarty_tpl->tpl_vars['mft']->do_else = false;
$_block_plugin99 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin99, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('lg'=>4,'xl'=>3,'class'=>'nav-item-lg-m nav-item'));
$_block_repeat=true;
echo $_block_plugin99->render(array('lg'=>4,'xl'=>3,'class'=>'nav-item-lg-m nav-item'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_126420322660a50b9b584c25_63475722', 'snippets-categories-mega-manufacturers-link', $this->tplIndex);
$_block_repeat=false;
echo $_block_plugin99->render(array('lg'=>4,'xl'=>3,'class'=>'nav-item-lg-m nav-item'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_block_repeat=false;
echo $_block_plugin96->render(array('class'=>"lg-row-lg nav"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_repeat=false;
echo $_block_plugin95->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></div></div></li><?php
}
}
/* {/block 'snippets-categories-mega-manufacturers-inner'} */
/* {block 'snippets-categories-mega-manufacturers'} */
class Block_52451932460a50b9b524048_26744166 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['megamenu']['show_manufacturers'] !== 'N' && ($_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_sichtbarkeit'] != 3 || (isset($_SESSION['Kunde']->kKunde)) && $_SESSION['Kunde']->kKunde != 0)) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_manufacturers'][0], array( array('assign'=>'manufacturers'),$_smarty_tpl ) );
if (!empty($_smarty_tpl->tpl_vars['manufacturers']->value)) {
$_smarty_tpl->_assignInScope('manufacturerOverview', null);
if ((isset($_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_HERSTELLER') ? constant('LINKTYP_HERSTELLER') : null)]))) {
$_smarty_tpl->_assignInScope('manufacturerOverview', $_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_HERSTELLER') ? constant('LINKTYP_HERSTELLER') : null)]);
}
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_212431836660a50b9b54f6f2_52174461', 'snippets-categories-mega-manufacturers-inner', $this->tplIndex);
}
}
}
}
/* {/block 'snippets-categories-mega-manufacturers'} */
/* {block 'snippets-categories-mega-include-linkgroup-list'} */
class Block_47565833260a50b9b61a7b1_80692311 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:snippets/linkgroup_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('linkgroupIdentifier'=>'megamenu','dropdownSupport'=>true,'tplscope'=>'megamenu'), 0, false);
}
}
/* {/block 'snippets-categories-mega-include-linkgroup-list'} */
/* {block 'snippets-categories-mega-top-links-hr'} */
class Block_58474912160a50b9b61ea04_14299511 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<li class="d-lg-none"><hr></li><?php
}
}
/* {/block 'snippets-categories-mega-top-links-hr'} */
/* {block 'snippets-categories-mega-top-links'} */
class Block_200656836360a50b9b65d817_31050905 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['linkgroups']->value->getLinkGroupByTemplate('Kopf')->getLinks(), 'Link');
$_smarty_tpl->tpl_vars['Link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Link']->value) {
$_smarty_tpl->tpl_vars['Link']->do_else = false;
$_block_plugin105 = isset($_smarty_tpl->smarty->registered_plugins['block']['navitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['navitem'][0][0] : null;
if (!is_callable(array($_block_plugin105, 'render'))) {
throw new SmartyException('block tag \'navitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('navitem', array('class'=>"nav-scrollbar-item",'active'=>$_smarty_tpl->tpl_vars['Link']->value->getIsActive(),'href'=>$_smarty_tpl->tpl_vars['Link']->value->getURL(),'title'=>$_smarty_tpl->tpl_vars['Link']->value->getTitle()));
$_block_repeat=true;
echo $_block_plugin105->render(array('class'=>"nav-scrollbar-item",'active'=>$_smarty_tpl->tpl_vars['Link']->value->getIsActive(),'href'=>$_smarty_tpl->tpl_vars['Link']->value->getURL(),'title'=>$_smarty_tpl->tpl_vars['Link']->value->getTitle()), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['Link']->value->getName();
$_block_repeat=false;
echo $_block_plugin105->render(array('class'=>"nav-scrollbar-item",'active'=>$_smarty_tpl->tpl_vars['Link']->value->getIsActive(),'href'=>$_smarty_tpl->tpl_vars['Link']->value->getURL(),'title'=>$_smarty_tpl->tpl_vars['Link']->value->getTitle()), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
/* {/block 'snippets-categories-mega-top-links'} */
/* {block 'layout-header-top-bar-user-settings-currency-link'} */
class Block_51968463760a50b9b66e631_38094847 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'currency'),$_smarty_tpl ) );
$_prefixVariable55 = ob_get_clean();
$_block_plugin106 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin106, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('id'=>'currency-dropdown','href'=>'#','title'=>$_prefixVariable55,'class'=>"nav-link dropdown-toggle",'target'=>"_self"));
$_block_repeat=true;
echo $_block_plugin106->render(array('id'=>'currency-dropdown','href'=>'#','title'=>$_prefixVariable55,'class'=>"nav-link dropdown-toggle",'target'=>"_self"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'currency'),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin106->render(array('id'=>'currency-dropdown','href'=>'#','title'=>$_prefixVariable55,'class'=>"nav-link dropdown-toggle",'target'=>"_self"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'layout-header-top-bar-user-settings-currency-link'} */
/* {block 'layout-header-top-bar-user-settings-currency-header'} */
class Block_42958487360a50b9b68b409_80480988 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<strong class="nav-mobile-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'currency'),$_smarty_tpl ) );?>
</strong><?php
}
}
/* {/block 'layout-header-top-bar-user-settings-currency-header'} */
/* {block 'layout-header-top-bar-user-settings-currency-header-items'} */
class Block_27070850660a50b9b697874_29646840 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_block_plugin111 = isset($_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0] : null;
if (!is_callable(array($_block_plugin111, 'render'))) {
throw new SmartyException('block tag \'dropdownitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dropdownitem', array('href'=>$_smarty_tpl->tpl_vars['currency']->value->getURLFull(),'rel'=>"nofollow",'active'=>($_SESSION['Waehrung']->getName() === $_smarty_tpl->tpl_vars['currency']->value->getName())));
$_block_repeat=true;
echo $_block_plugin111->render(array('href'=>$_smarty_tpl->tpl_vars['currency']->value->getURLFull(),'rel'=>"nofollow",'active'=>($_SESSION['Waehrung']->getName() === $_smarty_tpl->tpl_vars['currency']->value->getName())), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['currency']->value->getName();
$_block_repeat=false;
echo $_block_plugin111->render(array('href'=>$_smarty_tpl->tpl_vars['currency']->value->getURLFull(),'rel'=>"nofollow",'active'=>($_SESSION['Waehrung']->getName() === $_smarty_tpl->tpl_vars['currency']->value->getName())), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'layout-header-top-bar-user-settings-currency-header-items'} */
/* {block 'layout-header-top-bar-user-settings-currency-body'} */
class Block_16454324160a50b9b678563_31778022 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="dropdown-menu"><div class="dropdown-body"><?php $_block_plugin107 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin107, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array());
$_block_repeat=true;
echo $_block_plugin107->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_plugin108 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin108, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('class'=>"lg-row-lg nav"));
$_block_repeat=true;
echo $_block_plugin108->render(array('class'=>"lg-row-lg nav"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_plugin109 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin109, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('lg'=>4,'xl'=>3,'class'=>"nav-item-lg-m nav-item dropdown d-lg-none"));
$_block_repeat=true;
echo $_block_plugin109->render(array('lg'=>4,'xl'=>3,'class'=>"nav-item-lg-m nav-item dropdown d-lg-none"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_42958487360a50b9b68b409_80480988', 'layout-header-top-bar-user-settings-currency-header', $this->tplIndex);
$_block_repeat=false;
echo $_block_plugin109->render(array('lg'=>4,'xl'=>3,'class'=>"nav-item-lg-m nav-item dropdown d-lg-none"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_SESSION['Waehrungen'], 'currency');
$_smarty_tpl->tpl_vars['currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->do_else = false;
$_block_plugin110 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin110, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('lg'=>4,'xl'=>3,'class'=>'nav-item-lg-m nav-item'));
$_block_repeat=true;
echo $_block_plugin110->render(array('lg'=>4,'xl'=>3,'class'=>'nav-item-lg-m nav-item'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27070850660a50b9b697874_29646840', 'layout-header-top-bar-user-settings-currency-header-items', $this->tplIndex);
$_block_repeat=false;
echo $_block_plugin110->render(array('lg'=>4,'xl'=>3,'class'=>'nav-item-lg-m nav-item'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_block_repeat=false;
echo $_block_plugin108->render(array('class'=>"lg-row-lg nav"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_repeat=false;
echo $_block_plugin107->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></div></div><?php
}
}
/* {/block 'layout-header-top-bar-user-settings-currency-body'} */
/* {block 'layout-header-top-bar-user-settings-currency'} */
class Block_204189158160a50b9b667cd0_04448081 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_SESSION['Waehrungen'])) && count($_SESSION['Waehrungen']) > 1) {?><li class="currency-nav-scrollbar-item nav-item nav-scrollbar-item dropdown dropdown-full"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_51968463760a50b9b66e631_38094847', 'layout-header-top-bar-user-settings-currency-link', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16454324160a50b9b678563_31778022', 'layout-header-top-bar-user-settings-currency-body', $this->tplIndex);
?>
</li><?php }
}
}
/* {/block 'layout-header-top-bar-user-settings-currency'} */
/* {block 'layout-header-top-bar-user-settings'} */
class Block_31489176660a50b9b667132_73093308 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_204189158160a50b9b667cd0_04448081', 'layout-header-top-bar-user-settings-currency', $this->tplIndex);
}
}
/* {/block 'layout-header-top-bar-user-settings'} */
/* {block 'snippets-categories-mega'} */
class Block_4433902060a50b9b3f1af1_39241499 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-categories-mega' => 
  array (
    0 => 'Block_4433902060a50b9b3f1af1_39241499',
  ),
  'snippets-categories-mega-categories' => 
  array (
    0 => 'Block_142255638360a50b9b3f75e4_76047752',
    1 => 'Block_21833310860a50b9b461779_09487398',
  ),
  'snippets-categories-mega-category-child' => 
  array (
    0 => 'Block_85548120360a50b9b46a8e2_69279190',
  ),
  'snippets-categories-mega-sub-categories' => 
  array (
    0 => 'Block_19170890360a50b9b4a3584_75636916',
  ),
  'snippets-categories-mega-category-child-body-include-categories-mega-recursive' => 
  array (
    0 => 'Block_421817160a50b9b4dc224_93606690',
  ),
  'snippets-categories-mega-category-no-child' => 
  array (
    0 => 'Block_21837554660a50b9b4e56b9_96108802',
  ),
  'snippets-categories-mega-manufacturers' => 
  array (
    0 => 'Block_52451932460a50b9b524048_26744166',
  ),
  'snippets-categories-mega-manufacturers-inner' => 
  array (
    0 => 'Block_212431836660a50b9b54f6f2_52174461',
  ),
  'snippets-categories-mega-manufacturers-header' => 
  array (
    0 => 'Block_160971561260a50b9b569861_77883708',
  ),
  'snippets-categories-mega-manufacturers-link' => 
  array (
    0 => 'Block_126420322660a50b9b584c25_63475722',
  ),
  'snippets-categories-mega-include-linkgroup-list' => 
  array (
    0 => 'Block_47565833260a50b9b61a7b1_80692311',
  ),
  'snippets-categories-mega-top-links-hr' => 
  array (
    0 => 'Block_58474912160a50b9b61ea04_14299511',
  ),
  'snippets-categories-mega-top-links' => 
  array (
    0 => 'Block_200656836360a50b9b65d817_31050905',
  ),
  'layout-header-top-bar-user-settings' => 
  array (
    0 => 'Block_31489176660a50b9b667132_73093308',
  ),
  'layout-header-top-bar-user-settings-currency' => 
  array (
    0 => 'Block_204189158160a50b9b667cd0_04448081',
  ),
  'layout-header-top-bar-user-settings-currency-link' => 
  array (
    0 => 'Block_51968463760a50b9b66e631_38094847',
  ),
  'layout-header-top-bar-user-settings-currency-body' => 
  array (
    0 => 'Block_16454324160a50b9b678563_31778022',
  ),
  'layout-header-top-bar-user-settings-currency-header' => 
  array (
    0 => 'Block_42958487360a50b9b68b409_80480988',
  ),
  'layout-header-top-bar-user-settings-currency-header-items' => 
  array (
    0 => 'Block_27070850660a50b9b697874_29646840',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (!(isset($_smarty_tpl->tpl_vars['i']->value))) {
$_smarty_tpl->_assignInScope('i', 0);
}
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_142255638360a50b9b3f75e4_76047752', 'snippets-categories-mega-categories', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_52451932460a50b9b524048_26744166', 'snippets-categories-mega-manufacturers', $this->tplIndex);
?>
     <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['megamenu']['show_pages'] !== 'N') {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_47565833260a50b9b61a7b1_80692311', 'snippets-categories-mega-include-linkgroup-list', $this->tplIndex);
}
if ($_smarty_tpl->tpl_vars['isMobile']->value) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_58474912160a50b9b61ea04_14299511', 'snippets-categories-mega-top-links-hr', $this->tplIndex);
if ($_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_wunschliste_anzeigen'] === 'Y') {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'wunschliste.php'),$_smarty_tpl ) );
$_prefixVariable53=ob_get_clean();
$_block_plugin101 = isset($_smarty_tpl->smarty->registered_plugins['block']['navitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['navitem'][0][0] : null;
if (!is_callable(array($_block_plugin101, 'render'))) {
throw new SmartyException('block tag \'navitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('navitem', array('href'=>$_prefixVariable53,'class'=>"wl-nav-scrollbar-item nav-scrollbar-item"));
$_block_repeat=true;
echo $_block_plugin101->render(array('href'=>$_prefixVariable53,'class'=>"wl-nav-scrollbar-item nav-scrollbar-item"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'wishlist'),$_smarty_tpl ) );
$_block_plugin102 = isset($_smarty_tpl->smarty->registered_plugins['block']['badge'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['badge'][0][0] : null;
if (!is_callable(array($_block_plugin102, 'render'))) {
throw new SmartyException('block tag \'badge\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('badge', array('id'=>"badge-wl-count",'variant'=>"primary",'class'=>"product-count"));
$_block_repeat=true;
echo $_block_plugin102->render(array('id'=>"badge-wl-count",'variant'=>"primary",'class'=>"product-count"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ((isset($_SESSION['Wunschliste'])) && !empty(count($_SESSION['Wunschliste']->CWunschlistePos_arr))) {
echo count($_SESSION['Wunschliste']->CWunschlistePos_arr);
} else { ?>0<?php }
$_block_repeat=false;
echo $_block_plugin102->render(array('id'=>"badge-wl-count",'variant'=>"primary",'class'=>"product-count"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_repeat=false;
echo $_block_plugin101->render(array('href'=>$_prefixVariable53,'class'=>"wl-nav-scrollbar-item nav-scrollbar-item"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'vergleichsliste.php'),$_smarty_tpl ) );
$_prefixVariable54=ob_get_clean();
$_block_plugin103 = isset($_smarty_tpl->smarty->registered_plugins['block']['navitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['navitem'][0][0] : null;
if (!is_callable(array($_block_plugin103, 'render'))) {
throw new SmartyException('block tag \'navitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('navitem', array('href'=>$_prefixVariable54,'class'=>"comparelist-nav-scrollbar-item nav-scrollbar-item"));
$_block_repeat=true;
echo $_block_plugin103->render(array('href'=>$_prefixVariable54,'class'=>"comparelist-nav-scrollbar-item nav-scrollbar-item"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'compare'),$_smarty_tpl ) );
$_block_plugin104 = isset($_smarty_tpl->smarty->registered_plugins['block']['badge'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['badge'][0][0] : null;
if (!is_callable(array($_block_plugin104, 'render'))) {
throw new SmartyException('block tag \'badge\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('badge', array('id'=>"comparelist-badge",'variant'=>"primary",'class'=>"product-count"));
$_block_repeat=true;
echo $_block_plugin104->render(array('id'=>"comparelist-badge",'variant'=>"primary",'class'=>"product-count"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if (!empty($_SESSION['Vergleichsliste']->oArtikel_arr)) {
echo count($_SESSION['Vergleichsliste']->oArtikel_arr);
} else { ?>0<?php }
$_block_repeat=false;
echo $_block_plugin104->render(array('id'=>"comparelist-badge",'variant'=>"primary",'class'=>"product-count"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_repeat=false;
echo $_block_plugin103->render(array('href'=>$_prefixVariable54,'class'=>"comparelist-nav-scrollbar-item nav-scrollbar-item"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
if ($_smarty_tpl->tpl_vars['linkgroups']->value->getLinkGroupByTemplate('Kopf') !== null) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_200656836360a50b9b65d817_31050905', 'snippets-categories-mega-top-links', $this->tplIndex);
}
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_31489176660a50b9b667132_73093308', 'layout-header-top-bar-user-settings', $this->tplIndex);
}
}
}
/* {/block 'snippets-categories-mega'} */
}
