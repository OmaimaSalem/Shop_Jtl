<?php
/* Smarty version 3.1.38, created on 2021-05-04 11:46:27
  from 'C:\xampp\htdocs\shop\templates\NOVA\layout\breadcrumb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_609117f31f3886_94231552',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6f6ddea1dd7d61b5950fbb63e5b325a90a5c3ac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\templates\\NOVA\\layout\\breadcrumb.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609117f31f3886_94231552 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1426590020609117f319ea73_08836457', 'layout-breadcrumb');
?>

<?php }
/* {block 'layout-breadcrumb-sm-back'} */
class Block_1502525527609117f31aaa28_63983706 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('parent', $_smarty_tpl->tpl_vars['Brotnavi']->value[max((count($_smarty_tpl->tpl_vars['Brotnavi']->value)-2),0)]);
if ($_smarty_tpl->tpl_vars['parent']->value !== null) {
$_block_plugin95 = isset($_smarty_tpl->smarty->registered_plugins['block']['breadcrumbitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbitem'][0][0] : null;
if (!is_callable(array($_block_plugin95, 'render'))) {
throw new SmartyException('block tag \'breadcrumbitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('breadcrumbitem', array('class'=>"breadcrumb-arrow",'href'=>$_smarty_tpl->tpl_vars['parent']->value->getURLFull(),'title'=>htmlspecialchars($_smarty_tpl->tpl_vars['parent']->value->getName(), ENT_QUOTES, 'utf-8', true)));
$_block_repeat=true;
echo $_block_plugin95->render(array('class'=>"breadcrumb-arrow",'href'=>$_smarty_tpl->tpl_vars['parent']->value->getURLFull(),'title'=>htmlspecialchars($_smarty_tpl->tpl_vars['parent']->value->getName(), ENT_QUOTES, 'utf-8', true)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><span itemprop="name"><?php echo $_smarty_tpl->tpl_vars['parent']->value->getName();?>
</span><?php $_block_repeat=false;
echo $_block_plugin95->render(array('class'=>"breadcrumb-arrow",'href'=>$_smarty_tpl->tpl_vars['parent']->value->getURLFull(),'title'=>htmlspecialchars($_smarty_tpl->tpl_vars['parent']->value->getName(), ENT_QUOTES, 'utf-8', true)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
/* {/block 'layout-breadcrumb-sm-back'} */
/* {block 'layout-breadcrumb-first-item'} */
class Block_1494117195609117f31b8350_99446618 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_block_plugin96 = isset($_smarty_tpl->smarty->registered_plugins['block']['breadcrumbitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbitem'][0][0] : null;
if (!is_callable(array($_block_plugin96, 'render'))) {
throw new SmartyException('block tag \'breadcrumbitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('breadcrumbitem', array('class'=>"first",'router-tag-itemprop'=>"url",'href'=>$_smarty_tpl->tpl_vars['oItem']->value->getURLFull(),'title'=>htmlspecialchars($_smarty_tpl->tpl_vars['oItem']->value->getName(), ENT_QUOTES, 'utf-8', true),'itemprop'=>"itemListElement",'itemscope'=>true,'itemtype'=>"http://schema.org/ListItem"));
$_block_repeat=true;
echo $_block_plugin96->render(array('class'=>"first",'router-tag-itemprop'=>"url",'href'=>$_smarty_tpl->tpl_vars['oItem']->value->getURLFull(),'title'=>htmlspecialchars($_smarty_tpl->tpl_vars['oItem']->value->getName(), ENT_QUOTES, 'utf-8', true),'itemprop'=>"itemListElement",'itemscope'=>true,'itemtype'=>"http://schema.org/ListItem"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oItem']->value->getName(), ENT_QUOTES, 'utf-8', true);?>
</span><meta itemprop="item" content="<?php echo $_smarty_tpl->tpl_vars['oItem']->value->getURLFull();?>
" /><meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['oItem']->iteration;?>
" /><?php $_block_repeat=false;
echo $_block_plugin96->render(array('class'=>"first",'router-tag-itemprop'=>"url",'href'=>$_smarty_tpl->tpl_vars['oItem']->value->getURLFull(),'title'=>htmlspecialchars($_smarty_tpl->tpl_vars['oItem']->value->getName(), ENT_QUOTES, 'utf-8', true),'itemprop'=>"itemListElement",'itemscope'=>true,'itemtype'=>"http://schema.org/ListItem"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'layout-breadcrumb-first-item'} */
/* {block 'layout-breadcrumb-last-item'} */
class Block_1803240780609117f31c4090_41105710 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
ob_start();
if ($_smarty_tpl->tpl_vars['oItem']->value->getHasChild() === true) {
echo (string)$_smarty_tpl->tpl_vars['oItem']->value->getURLFull();
}
$_prefixVariable57=ob_get_clean();
$_block_plugin97 = isset($_smarty_tpl->smarty->registered_plugins['block']['breadcrumbitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbitem'][0][0] : null;
if (!is_callable(array($_block_plugin97, 'render'))) {
throw new SmartyException('block tag \'breadcrumbitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('breadcrumbitem', array('class'=>"last active",'router-tag-itemprop'=>"url",'href'=>$_prefixVariable57,'title'=>htmlspecialchars($_smarty_tpl->tpl_vars['oItem']->value->getName(), ENT_QUOTES, 'utf-8', true),'itemprop'=>"itemListElement",'itemscope'=>true,'itemtype'=>"http://schema.org/ListItem"));
$_block_repeat=true;
echo $_block_plugin97->render(array('class'=>"last active",'router-tag-itemprop'=>"url",'href'=>$_prefixVariable57,'title'=>htmlspecialchars($_smarty_tpl->tpl_vars['oItem']->value->getName(), ENT_QUOTES, 'utf-8', true),'itemprop'=>"itemListElement",'itemscope'=>true,'itemtype'=>"http://schema.org/ListItem"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><span itemprop="name"><?php if ($_smarty_tpl->tpl_vars['oItem']->value->getName() !== null) {
echo $_smarty_tpl->tpl_vars['oItem']->value->getName();
} elseif (!empty($_smarty_tpl->tpl_vars['Suchergebnisse']->value->getSearchTermWrite())) {
echo $_smarty_tpl->tpl_vars['Suchergebnisse']->value->getSearchTermWrite();
}?></span><meta itemprop="item" content="<?php echo $_smarty_tpl->tpl_vars['oItem']->value->getURLFull();?>
" /><meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['oItem']->iteration;?>
" /><?php $_block_repeat=false;
echo $_block_plugin97->render(array('class'=>"last active",'router-tag-itemprop'=>"url",'href'=>$_prefixVariable57,'title'=>htmlspecialchars($_smarty_tpl->tpl_vars['oItem']->value->getName(), ENT_QUOTES, 'utf-8', true),'itemprop'=>"itemListElement",'itemscope'=>true,'itemtype'=>"http://schema.org/ListItem"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'layout-breadcrumb-last-item'} */
/* {block 'layout-breadcrumb-item'} */
class Block_17929237609117f31d3e37_67907493 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_block_plugin98 = isset($_smarty_tpl->smarty->registered_plugins['block']['breadcrumbitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbitem'][0][0] : null;
if (!is_callable(array($_block_plugin98, 'render'))) {
throw new SmartyException('block tag \'breadcrumbitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('breadcrumbitem', array('router-tag-itemprop'=>"url",'href'=>$_smarty_tpl->tpl_vars['oItem']->value->getURLFull(),'title'=>htmlspecialchars($_smarty_tpl->tpl_vars['oItem']->value->getName(), ENT_QUOTES, 'utf-8', true),'itemprop'=>"itemListElement",'itemscope'=>true,'itemtype'=>"http://schema.org/ListItem"));
$_block_repeat=true;
echo $_block_plugin98->render(array('router-tag-itemprop'=>"url",'href'=>$_smarty_tpl->tpl_vars['oItem']->value->getURLFull(),'title'=>htmlspecialchars($_smarty_tpl->tpl_vars['oItem']->value->getName(), ENT_QUOTES, 'utf-8', true),'itemprop'=>"itemListElement",'itemscope'=>true,'itemtype'=>"http://schema.org/ListItem"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><span itemprop="name"><?php echo $_smarty_tpl->tpl_vars['oItem']->value->getName();?>
</span><meta itemprop="item" content="<?php echo $_smarty_tpl->tpl_vars['oItem']->value->getURLFull();?>
" /><meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['oItem']->iteration;?>
" /><?php $_block_repeat=false;
echo $_block_plugin98->render(array('router-tag-itemprop'=>"url",'href'=>$_smarty_tpl->tpl_vars['oItem']->value->getURLFull(),'title'=>htmlspecialchars($_smarty_tpl->tpl_vars['oItem']->value->getName(), ENT_QUOTES, 'utf-8', true),'itemprop'=>"itemListElement",'itemscope'=>true,'itemtype'=>"http://schema.org/ListItem"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'layout-breadcrumb-item'} */
/* {block 'layout-breadcrumb-items'} */
class Block_956616515609117f31b5862_64711166 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Brotnavi']->value, 'oItem', true);
$_smarty_tpl->tpl_vars['oItem']->iteration = 0;
$_smarty_tpl->tpl_vars['oItem']->index = -1;
$_smarty_tpl->tpl_vars['oItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oItem']->value) {
$_smarty_tpl->tpl_vars['oItem']->do_else = false;
$_smarty_tpl->tpl_vars['oItem']->iteration++;
$_smarty_tpl->tpl_vars['oItem']->index++;
$_smarty_tpl->tpl_vars['oItem']->first = !$_smarty_tpl->tpl_vars['oItem']->index;
$_smarty_tpl->tpl_vars['oItem']->last = $_smarty_tpl->tpl_vars['oItem']->iteration === $_smarty_tpl->tpl_vars['oItem']->total;
$__foreach_oItem_43_saved = $_smarty_tpl->tpl_vars['oItem'];
if ($_smarty_tpl->tpl_vars['oItem']->first) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1494117195609117f31b8350_99446618', 'layout-breadcrumb-first-item', $this->tplIndex);
} elseif ($_smarty_tpl->tpl_vars['oItem']->last) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1803240780609117f31c4090_41105710', 'layout-breadcrumb-last-item', $this->tplIndex);
} else {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17929237609117f31d3e37_67907493', 'layout-breadcrumb-item', $this->tplIndex);
}
$_smarty_tpl->tpl_vars['oItem'] = $__foreach_oItem_43_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
/* {/block 'layout-breadcrumb-items'} */
/* {block 'layout-header-product-pagination'} */
class Block_1868575924609117f31e25b6_13843758 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['NavigationBlaettern']->value->naechsterArtikel->kArtikel))) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('section'=>'productDetails','key'=>'nextProduct'),$_smarty_tpl ) );
$_prefixVariable58=ob_get_clean();
$_block_plugin100 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin100, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('variant'=>"link",'href'=>$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->naechsterArtikel->cURLFull,'title'=>$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->naechsterArtikel->cName,'aria'=>array("label"=>$_prefixVariable58.": ".((string)$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->naechsterArtikel->cName))));
$_block_repeat=true;
echo $_block_plugin100->render(array('variant'=>"link",'href'=>$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->naechsterArtikel->cURLFull,'title'=>$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->naechsterArtikel->cName,'aria'=>array("label"=>$_prefixVariable58.": ".((string)$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->naechsterArtikel->cName))), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><span class="fa fa-chevron-right"></span><?php $_block_repeat=false;
echo $_block_plugin100->render(array('variant'=>"link",'href'=>$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->naechsterArtikel->cURLFull,'title'=>$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->naechsterArtikel->cName,'aria'=>array("label"=>$_prefixVariable58.": ".((string)$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->naechsterArtikel->cName))), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
if ((isset($_smarty_tpl->tpl_vars['NavigationBlaettern']->value->vorherigerArtikel->kArtikel))) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('section'=>'productDetails','key'=>'previousProduct'),$_smarty_tpl ) );
$_prefixVariable59=ob_get_clean();
$_block_plugin101 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin101, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('variant'=>"link",'href'=>$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->vorherigerArtikel->cURLFull,'title'=>$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->vorherigerArtikel->cName,'aria'=>array("label"=>$_prefixVariable59.": ".((string)$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->vorherigerArtikel->cName))));
$_block_repeat=true;
echo $_block_plugin101->render(array('variant'=>"link",'href'=>$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->vorherigerArtikel->cURLFull,'title'=>$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->vorherigerArtikel->cName,'aria'=>array("label"=>$_prefixVariable59.": ".((string)$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->vorherigerArtikel->cName))), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><span class="fa fa-chevron-left"></span><?php $_block_repeat=false;
echo $_block_plugin101->render(array('variant'=>"link",'href'=>$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->vorherigerArtikel->cURLFull,'title'=>$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->vorherigerArtikel->cName,'aria'=>array("label"=>$_prefixVariable59.": ".((string)$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->vorherigerArtikel->cName))), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
/* {/block 'layout-header-product-pagination'} */
/* {block 'layout-breadcrumb'} */
class Block_1426590020609117f319ea73_08836457 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout-breadcrumb' => 
  array (
    0 => 'Block_1426590020609117f319ea73_08836457',
  ),
  'layout-breadcrumb-sm-back' => 
  array (
    0 => 'Block_1502525527609117f31aaa28_63983706',
  ),
  'layout-breadcrumb-items' => 
  array (
    0 => 'Block_956616515609117f31b5862_64711166',
  ),
  'layout-breadcrumb-first-item' => 
  array (
    0 => 'Block_1494117195609117f31b8350_99446618',
  ),
  'layout-breadcrumb-last-item' => 
  array (
    0 => 'Block_1803240780609117f31c4090_41105710',
  ),
  'layout-breadcrumb-item' => 
  array (
    0 => 'Block_17929237609117f31d3e37_67907493',
  ),
  'layout-header-product-pagination' => 
  array (
    0 => 'Block_1868575924609117f31e25b6_13843758',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['has_boxes'][0], array( array('position'=>'left','assign'=>'hasLeftBox'),$_smarty_tpl ) );
if (!empty($_smarty_tpl->tpl_vars['Brotnavi']->value) && !$_smarty_tpl->tpl_vars['bExclusive']->value && !$_smarty_tpl->tpl_vars['bAjaxRequest']->value && $_smarty_tpl->tpl_vars['nSeitenTyp']->value !== (defined('PAGE_STARTSEITE') ? constant('PAGE_STARTSEITE') : null) && $_smarty_tpl->tpl_vars['nSeitenTyp']->value !== (defined('PAGE_BESTELLVORGANG') ? constant('PAGE_BESTELLVORGANG') : null) && $_smarty_tpl->tpl_vars['nSeitenTyp']->value !== (defined('PAGE_BESTELLSTATUS') ? constant('PAGE_BESTELLSTATUS') : null)) {
$_block_plugin92 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin92, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('no-gutters'=>true,'class'=>"breadcrumb-wrapper"));
$_block_repeat=true;
echo $_block_plugin92->render(array('no-gutters'=>true,'class'=>"breadcrumb-wrapper"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_plugin93 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin93, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>"auto"));
$_block_repeat=true;
echo $_block_plugin93->render(array('cols'=>"auto"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_plugin94 = isset($_smarty_tpl->smarty->registered_plugins['block']['breadcrumb'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['breadcrumb'][0][0] : null;
if (!is_callable(array($_block_plugin94, 'render'))) {
throw new SmartyException('block tag \'breadcrumb\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('breadcrumb', array('id'=>"breadcrumb",'itemprop'=>"breadcrumb",'itemscope'=>true,'itemtype'=>"http://schema.org/BreadcrumbList"));
$_block_repeat=true;
echo $_block_plugin94->render(array('id'=>"breadcrumb",'itemprop'=>"breadcrumb",'itemscope'=>true,'itemtype'=>"http://schema.org/BreadcrumbList"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1502525527609117f31aaa28_63983706', 'layout-breadcrumb-sm-back', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_956616515609117f31b5862_64711166', 'layout-breadcrumb-items', $this->tplIndex);
$_block_repeat=false;
echo $_block_plugin94->render(array('id'=>"breadcrumb",'itemprop'=>"breadcrumb",'itemscope'=>true,'itemtype'=>"http://schema.org/BreadcrumbList"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_repeat=false;
echo $_block_plugin93->render(array('cols'=>"auto"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin99 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin99, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('class'=>'navigation-arrows'));
$_block_repeat=true;
echo $_block_plugin99->render(array('class'=>'navigation-arrows'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if (!empty($_smarty_tpl->tpl_vars['NavigationBlaettern']->value)) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1868575924609117f31e25b6_13843758', 'layout-header-product-pagination', $this->tplIndex);
}
$_block_repeat=false;
echo $_block_plugin99->render(array('class'=>'navigation-arrows'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_repeat=false;
echo $_block_plugin92->render(array('no-gutters'=>true,'class'=>"breadcrumb-wrapper"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
/* {/block 'layout-breadcrumb'} */
}
