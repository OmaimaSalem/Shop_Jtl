<?php
/* Smarty version 3.1.38, created on 2021-05-04 11:46:23
  from 'C:\xampp\htdocs\shop\templates\NOVA\snippets\linkgroup_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_609117ef5af864_92240388',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2c86e87168319084b6056057f976953bbd6fcbf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\templates\\NOVA\\snippets\\linkgroup_list.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609117ef5af864_92240388 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_668678704609117ef570448_33288786', 'snippets-linkgroup-list');
?>

<?php }
/* {block 'snippets-linkgroup-list-links-header'} */
class Block_77981196609117ef58f6f5_76534498 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_block_plugin84 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin84, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['li']->value->getURL(),'title'=>$_smarty_tpl->tpl_vars['li']->value->getName()));
$_block_repeat=true;
echo $_block_plugin84->render(array('href'=>$_smarty_tpl->tpl_vars['li']->value->getURL(),'title'=>$_smarty_tpl->tpl_vars['li']->value->getName()), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><strong class="nav-mobile-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'menuShow','printf'=>$_smarty_tpl->tpl_vars['li']->value->getName()),$_smarty_tpl ) );?>
</strong><?php $_block_repeat=false;
echo $_block_plugin84->render(array('href'=>$_smarty_tpl->tpl_vars['li']->value->getURL(),'title'=>$_smarty_tpl->tpl_vars['li']->value->getName()), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'snippets-linkgroup-list-links-header'} */
/* {block 'snippets-linkgroup-list-links-sublinks'} */
class Block_861706674609117ef59afe3_66753903 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if (!empty($_smarty_tpl->tpl_vars['subli']->value->getName())) {
ob_start();
if ($_smarty_tpl->tpl_vars['subli']->value->getNoFollow()) {
echo "nofollow";
}
$_prefixVariable52=ob_get_clean();
$_block_plugin86 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin86, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['subli']->value->getURL(),'rel'=>$_prefixVariable52,'class'=>"submenu-headline submenu-headline-toplevel nav-link"));
$_block_repeat=true;
echo $_block_plugin86->render(array('href'=>$_smarty_tpl->tpl_vars['subli']->value->getURL(),'rel'=>$_prefixVariable52,'class'=>"submenu-headline submenu-headline-toplevel nav-link"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['subli']->value->getName();
$_block_repeat=false;
echo $_block_plugin86->render(array('href'=>$_smarty_tpl->tpl_vars['subli']->value->getURL(),'rel'=>$_prefixVariable52,'class'=>"submenu-headline submenu-headline-toplevel nav-link"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
/* {/block 'snippets-linkgroup-list-links-sublinks'} */
/* {block 'snippets-linkgroup-list-links-dropdown'} */
class Block_401996438609117ef587267_01511631 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<li class="link-group-item nav-item nav-scrollbar-item dropdown dropdown-full<?php if ($_smarty_tpl->tpl_vars['activeId']->value == $_smarty_tpl->tpl_vars['li']->value->getId()) {?> active<?php }?>"><?php $_block_plugin80 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin80, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['li']->value->getURL(),'title'=>$_smarty_tpl->tpl_vars['li']->value->getName(),'class'=>"nav-link dropdown-toggle",'target'=>"_self"));
$_block_repeat=true;
echo $_block_plugin80->render(array('href'=>$_smarty_tpl->tpl_vars['li']->value->getURL(),'title'=>$_smarty_tpl->tpl_vars['li']->value->getName(),'class'=>"nav-link dropdown-toggle",'target'=>"_self"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><span class="text-truncate"><?php echo $_smarty_tpl->tpl_vars['li']->value->getName();?>
</span><?php $_block_repeat=false;
echo $_block_plugin80->render(array('href'=>$_smarty_tpl->tpl_vars['li']->value->getURL(),'title'=>$_smarty_tpl->tpl_vars['li']->value->getName(),'class'=>"nav-link dropdown-toggle",'target'=>"_self"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?><div class="dropdown-menu"><div class="dropdown-body"><?php $_block_plugin81 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin81, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array());
$_block_repeat=true;
echo $_block_plugin81->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_plugin82 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin82, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('class'=>"lg-row-lg nav"));
$_block_repeat=true;
echo $_block_plugin82->render(array('class'=>"lg-row-lg nav"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_plugin83 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin83, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('lg'=>4,'xl'=>3,'class'=>"nav-item-lg-m nav-item dropdown d-lg-none"));
$_block_repeat=true;
echo $_block_plugin83->render(array('lg'=>4,'xl'=>3,'class'=>"nav-item-lg-m nav-item dropdown d-lg-none"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_77981196609117ef58f6f5_76534498', 'snippets-linkgroup-list-links-header', $this->tplIndex);
$_block_repeat=false;
echo $_block_plugin83->render(array('lg'=>4,'xl'=>3,'class'=>"nav-item-lg-m nav-item dropdown d-lg-none"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['li']->value->getChildLinks(), 'subli');
$_smarty_tpl->tpl_vars['subli']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subli']->value) {
$_smarty_tpl->tpl_vars['subli']->do_else = false;
$_block_plugin85 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin85, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('lg'=>4,'xl'=>3,'class'=>'nav-item-lg-m nav-item'));
$_block_repeat=true;
echo $_block_plugin85->render(array('lg'=>4,'xl'=>3,'class'=>'nav-item-lg-m nav-item'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_861706674609117ef59afe3_66753903', 'snippets-linkgroup-list-links-sublinks', $this->tplIndex);
$_block_repeat=false;
echo $_block_plugin85->render(array('lg'=>4,'xl'=>3,'class'=>'nav-item-lg-m nav-item'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_block_repeat=false;
echo $_block_plugin82->render(array('class'=>"lg-row-lg nav"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_repeat=false;
echo $_block_plugin81->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></div></div></li><?php
}
}
/* {/block 'snippets-linkgroup-list-links-dropdown'} */
/* {block 'snippets-linkgroup-list-links-navitem'} */
class Block_112837222609117ef5a5797_52815196 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
ob_start();
if ($_smarty_tpl->tpl_vars['activeId']->value == $_smarty_tpl->tpl_vars['li']->value->getId()) {
echo "active";
}
$_prefixVariable53=ob_get_clean();
ob_start();
if ($_smarty_tpl->tpl_vars['tplscope']->value == 'sitemap') {
echo "nice-deco";
}
$_prefixVariable54=ob_get_clean();
$_block_plugin87 = isset($_smarty_tpl->smarty->registered_plugins['block']['navitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['navitem'][0][0] : null;
if (!is_callable(array($_block_plugin87, 'render'))) {
throw new SmartyException('block tag \'navitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('navitem', array('href'=>$_smarty_tpl->tpl_vars['li']->value->getURL(),'nofollow'=>$_smarty_tpl->tpl_vars['li']->value->getNoFollow(),'class'=>"nav-scrollbar-item ".$_prefixVariable53,'router-class'=>$_prefixVariable54));
$_block_repeat=true;
echo $_block_plugin87->render(array('href'=>$_smarty_tpl->tpl_vars['li']->value->getURL(),'nofollow'=>$_smarty_tpl->tpl_vars['li']->value->getNoFollow(),'class'=>"nav-scrollbar-item ".$_prefixVariable53,'router-class'=>$_prefixVariable54), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['li']->value->getName();
$_block_repeat=false;
echo $_block_plugin87->render(array('href'=>$_smarty_tpl->tpl_vars['li']->value->getURL(),'nofollow'=>$_smarty_tpl->tpl_vars['li']->value->getNoFollow(),'class'=>"nav-scrollbar-item ".$_prefixVariable53,'router-class'=>$_prefixVariable54), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'snippets-linkgroup-list-links-navitem'} */
/* {block 'snippets-linkgroup-list-links'} */
class Block_1417594971609117ef581cc7_58939212 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['links']->value, 'li');
$_smarty_tpl->tpl_vars['li']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['li']->value) {
$_smarty_tpl->tpl_vars['li']->do_else = false;
if ($_smarty_tpl->tpl_vars['li']->value->getChildLinks()->count() > 0 && (isset($_smarty_tpl->tpl_vars['dropdownSupport']->value))) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_401996438609117ef587267_01511631', 'snippets-linkgroup-list-links-dropdown', $this->tplIndex);
} else {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_112837222609117ef5a5797_52815196', 'snippets-linkgroup-list-links-navitem', $this->tplIndex);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
/* {/block 'snippets-linkgroup-list-links'} */
/* {block 'snippets-linkgroup-list'} */
class Block_668678704609117ef570448_33288786 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-linkgroup-list' => 
  array (
    0 => 'Block_668678704609117ef570448_33288786',
  ),
  'snippets-linkgroup-list-links' => 
  array (
    0 => 'Block_1417594971609117ef581cc7_58939212',
  ),
  'snippets-linkgroup-list-links-dropdown' => 
  array (
    0 => 'Block_401996438609117ef587267_01511631',
  ),
  'snippets-linkgroup-list-links-header' => 
  array (
    0 => 'Block_77981196609117ef58f6f5_76534498',
  ),
  'snippets-linkgroup-list-links-sublinks' => 
  array (
    0 => 'Block_861706674609117ef59afe3_66753903',
  ),
  'snippets-linkgroup-list-links-navitem' => 
  array (
    0 => 'Block_112837222609117ef5a5797_52815196',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ((isset($_smarty_tpl->tpl_vars['linkgroupIdentifier']->value))) {?>
    <?php $_smarty_tpl->_assignInScope('checkLinkParents', false);
if ((isset($_smarty_tpl->tpl_vars['Link']->value)) && $_smarty_tpl->tpl_vars['Link']->value->getID() > 0) {
$_smarty_tpl->_assignInScope('activeId', $_smarty_tpl->tpl_vars['Link']->value->getID());
} elseif (JTL\Shop::$kLink > 0) {
$_smarty_tpl->_assignInScope('activeId', JTL\Shop::$kLink);
$_smarty_tpl->_assignInScope('Link', JTL\Shop::Container()->getLinkService()->getLinkByID($_smarty_tpl->tpl_vars['activeId']->value));
}
if (!(isset($_smarty_tpl->tpl_vars['activeParents']->value)) && ((isset($_smarty_tpl->tpl_vars['Link']->value)))) {
$_smarty_tpl->_assignInScope('activeParents', JTL\Shop::Container()->getLinkService()->getParentIDs($_smarty_tpl->tpl_vars['activeId']->value));
$_smarty_tpl->_assignInScope('checkLinkParents', true);
}
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_navigation'][0], array( array('linkgroupIdentifier'=>$_smarty_tpl->tpl_vars['linkgroupIdentifier']->value,'assign'=>'links'),$_smarty_tpl ) );
if (!empty($_smarty_tpl->tpl_vars['links']->value)) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1417594971609117ef581cc7_58939212', 'snippets-linkgroup-list-links', $this->tplIndex);
}?>
    <?php }
}
}
/* {/block 'snippets-linkgroup-list'} */
}
