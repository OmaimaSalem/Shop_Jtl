<?php
/* Smarty version 3.1.38, created on 2021-05-04 14:27:08
  from 'C:\xampp\htdocs\shop\templates\NOVA\layout\breadcrumb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60913d9c6cf4c3_30181494',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d6022d870c72113c2dd4badfd96560d2905e472' => 
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
function content_60913d9c6cf4c3_30181494 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_180873325760913d9c5e4070_72583301', 'layout-breadcrumb');
?>

<?php }
/* {block 'layout-breadcrumb-sm-back'} */
class Block_99627881660913d9c5f1d73_38472517 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('parent', $_smarty_tpl->tpl_vars['Brotnavi']->value[max((count($_smarty_tpl->tpl_vars['Brotnavi']->value)-2),0)]);
if ($_smarty_tpl->tpl_vars['parent']->value !== null) {
$_block_plugin127 = isset($_smarty_tpl->smarty->registered_plugins['block']['breadcrumbitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbitem'][0][0] : null;
if (!is_callable(array($_block_plugin127, 'render'))) {
throw new SmartyException('block tag \'breadcrumbitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('breadcrumbitem', array('class'=>"breadcrumb-arrow",'href'=>$_smarty_tpl->tpl_vars['parent']->value->getURLFull(),'title'=>htmlspecialchars($_smarty_tpl->tpl_vars['parent']->value->getName(), ENT_QUOTES, 'utf-8', true)));
$_block_repeat=true;
echo $_block_plugin127->render(array('class'=>"breadcrumb-arrow",'href'=>$_smarty_tpl->tpl_vars['parent']->value->getURLFull(),'title'=>htmlspecialchars($_smarty_tpl->tpl_vars['parent']->value->getName(), ENT_QUOTES, 'utf-8', true)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><span itemprop="name"><?php echo $_smarty_tpl->tpl_vars['parent']->value->getName();?>
</span><?php $_block_repeat=false;
echo $_block_plugin127->render(array('class'=>"breadcrumb-arrow",'href'=>$_smarty_tpl->tpl_vars['parent']->value->getURLFull(),'title'=>htmlspecialchars($_smarty_tpl->tpl_vars['parent']->value->getName(), ENT_QUOTES, 'utf-8', true)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
/* {/block 'layout-breadcrumb-sm-back'} */
/* {block 'layout-breadcrumb-first-item'} */
class Block_205143535060913d9c62af73_86310774 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_block_plugin128 = isset($_smarty_tpl->smarty->registered_plugins['block']['breadcrumbitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbitem'][0][0] : null;
if (!is_callable(array($_block_plugin128, 'render'))) {
throw new SmartyException('block tag \'breadcrumbitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('breadcrumbitem', array('class'=>"first",'router-tag-itemprop'=>"url",'href'=>$_smarty_tpl->tpl_vars['oItem']->value->getURLFull(),'title'=>htmlspecialchars($_smarty_tpl->tpl_vars['oItem']->value->getName(), ENT_QUOTES, 'utf-8', true),'itemprop'=>"itemListElement",'itemscope'=>true,'itemtype'=>"http://schema.org/ListItem"));
$_block_repeat=true;
echo $_block_plugin128->render(array('class'=>"first",'router-tag-itemprop'=>"url",'href'=>$_smarty_tpl->tpl_vars['oItem']->value->getURLFull(),'title'=>htmlspecialchars($_smarty_tpl->tpl_vars['oItem']->value->getName(), ENT_QUOTES, 'utf-8', true),'itemprop'=>"itemListElement",'itemscope'=>true,'itemtype'=>"http://schema.org/ListItem"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oItem']->value->getName(), ENT_QUOTES, 'utf-8', true);?>
</span><meta itemprop="item" content="<?php echo $_smarty_tpl->tpl_vars['oItem']->value->getURLFull();?>
" /><meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['oItem']->iteration;?>
" /><?php $_block_repeat=false;
echo $_block_plugin128->render(array('class'=>"first",'router-tag-itemprop'=>"url",'href'=>$_smarty_tpl->tpl_vars['oItem']->value->getURLFull(),'title'=>htmlspecialchars($_smarty_tpl->tpl_vars['oItem']->value->getName(), ENT_QUOTES, 'utf-8', true),'itemprop'=>"itemListElement",'itemscope'=>true,'itemtype'=>"http://schema.org/ListItem"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'layout-breadcrumb-first-item'} */
/* {block 'layout-breadcrumb-last-item'} */
class Block_22309795960913d9c63f039_90695460 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
ob_start();
if ($_smarty_tpl->tpl_vars['oItem']->value->getHasChild() === true) {
echo (string)$_smarty_tpl->tpl_vars['oItem']->value->getURLFull();
}
$_prefixVariable61=ob_get_clean();
$_block_plugin129 = isset($_smarty_tpl->smarty->registered_plugins['block']['breadcrumbitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbitem'][0][0] : null;
if (!is_callable(array($_block_plugin129, 'render'))) {
throw new SmartyException('block tag \'breadcrumbitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('breadcrumbitem', array('class'=>"last active",'router-tag-itemprop'=>"url",'href'=>$_prefixVariable61,'title'=>htmlspecialchars($_smarty_tpl->tpl_vars['oItem']->value->getName(), ENT_QUOTES, 'utf-8', true),'itemprop'=>"itemListElement",'itemscope'=>true,'itemtype'=>"http://schema.org/ListItem"));
$_block_repeat=true;
echo $_block_plugin129->render(array('class'=>"last active",'router-tag-itemprop'=>"url",'href'=>$_prefixVariable61,'title'=>htmlspecialchars($_smarty_tpl->tpl_vars['oItem']->value->getName(), ENT_QUOTES, 'utf-8', true),'itemprop'=>"itemListElement",'itemscope'=>true,'itemtype'=>"http://schema.org/ListItem"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><span itemprop="name"><?php if ($_smarty_tpl->tpl_vars['oItem']->value->getName() !== null) {
echo $_smarty_tpl->tpl_vars['oItem']->value->getName();
} elseif (!empty($_smarty_tpl->tpl_vars['Suchergebnisse']->value->getSearchTermWrite())) {
echo $_smarty_tpl->tpl_vars['Suchergebnisse']->value->getSearchTermWrite();
}?></span><meta itemprop="item" content="<?php echo $_smarty_tpl->tpl_vars['oItem']->value->getURLFull();?>
" /><meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['oItem']->iteration;?>
" /><?php $_block_repeat=false;
echo $_block_plugin129->render(array('class'=>"last active",'router-tag-itemprop'=>"url",'href'=>$_prefixVariable61,'title'=>htmlspecialchars($_smarty_tpl->tpl_vars['oItem']->value->getName(), ENT_QUOTES, 'utf-8', true),'itemprop'=>"itemListElement",'itemscope'=>true,'itemtype'=>"http://schema.org/ListItem"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'layout-breadcrumb-last-item'} */
/* {block 'layout-breadcrumb-item'} */
class Block_58132634160913d9c65f1e9_32868855 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_block_plugin130 = isset($_smarty_tpl->smarty->registered_plugins['block']['breadcrumbitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbitem'][0][0] : null;
if (!is_callable(array($_block_plugin130, 'render'))) {
throw new SmartyException('block tag \'breadcrumbitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('breadcrumbitem', array('router-tag-itemprop'=>"url",'href'=>$_smarty_tpl->tpl_vars['oItem']->value->getURLFull(),'title'=>htmlspecialchars($_smarty_tpl->tpl_vars['oItem']->value->getName(), ENT_QUOTES, 'utf-8', true),'itemprop'=>"itemListElement",'itemscope'=>true,'itemtype'=>"http://schema.org/ListItem"));
$_block_repeat=true;
echo $_block_plugin130->render(array('router-tag-itemprop'=>"url",'href'=>$_smarty_tpl->tpl_vars['oItem']->value->getURLFull(),'title'=>htmlspecialchars($_smarty_tpl->tpl_vars['oItem']->value->getName(), ENT_QUOTES, 'utf-8', true),'itemprop'=>"itemListElement",'itemscope'=>true,'itemtype'=>"http://schema.org/ListItem"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><span itemprop="name"><?php echo $_smarty_tpl->tpl_vars['oItem']->value->getName();?>
</span><meta itemprop="item" content="<?php echo $_smarty_tpl->tpl_vars['oItem']->value->getURLFull();?>
" /><meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['oItem']->iteration;?>
" /><?php $_block_repeat=false;
echo $_block_plugin130->render(array('router-tag-itemprop'=>"url",'href'=>$_smarty_tpl->tpl_vars['oItem']->value->getURLFull(),'title'=>htmlspecialchars($_smarty_tpl->tpl_vars['oItem']->value->getName(), ENT_QUOTES, 'utf-8', true),'itemprop'=>"itemListElement",'itemscope'=>true,'itemtype'=>"http://schema.org/ListItem"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'layout-breadcrumb-item'} */
/* {block 'layout-breadcrumb-items'} */
class Block_32535340460913d9c628583_87423666 extends Smarty_Internal_Block
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
$__foreach_oItem_77_saved = $_smarty_tpl->tpl_vars['oItem'];
if ($_smarty_tpl->tpl_vars['oItem']->first) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205143535060913d9c62af73_86310774', 'layout-breadcrumb-first-item', $this->tplIndex);
} elseif ($_smarty_tpl->tpl_vars['oItem']->last) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_22309795960913d9c63f039_90695460', 'layout-breadcrumb-last-item', $this->tplIndex);
} else {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_58132634160913d9c65f1e9_32868855', 'layout-breadcrumb-item', $this->tplIndex);
}
$_smarty_tpl->tpl_vars['oItem'] = $__foreach_oItem_77_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
/* {/block 'layout-breadcrumb-items'} */
/* {block 'layout-header-product-pagination'} */
class Block_107810494160913d9c66ec46_99708588 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['NavigationBlaettern']->value->naechsterArtikel->kArtikel))) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('section'=>'productDetails','key'=>'nextProduct'),$_smarty_tpl ) );
$_prefixVariable62=ob_get_clean();
$_block_plugin132 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin132, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('variant'=>"link",'href'=>$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->naechsterArtikel->cURLFull,'title'=>$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->naechsterArtikel->cName,'aria'=>array("label"=>$_prefixVariable62.": ".((string)$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->naechsterArtikel->cName))));
$_block_repeat=true;
echo $_block_plugin132->render(array('variant'=>"link",'href'=>$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->naechsterArtikel->cURLFull,'title'=>$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->naechsterArtikel->cName,'aria'=>array("label"=>$_prefixVariable62.": ".((string)$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->naechsterArtikel->cName))), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><span class="fa fa-chevron-right"></span><?php $_block_repeat=false;
echo $_block_plugin132->render(array('variant'=>"link",'href'=>$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->naechsterArtikel->cURLFull,'title'=>$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->naechsterArtikel->cName,'aria'=>array("label"=>$_prefixVariable62.": ".((string)$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->naechsterArtikel->cName))), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
if ((isset($_smarty_tpl->tpl_vars['NavigationBlaettern']->value->vorherigerArtikel->kArtikel))) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('section'=>'productDetails','key'=>'previousProduct'),$_smarty_tpl ) );
$_prefixVariable63=ob_get_clean();
$_block_plugin133 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin133, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('variant'=>"link",'href'=>$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->vorherigerArtikel->cURLFull,'title'=>$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->vorherigerArtikel->cName,'aria'=>array("label"=>$_prefixVariable63.": ".((string)$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->vorherigerArtikel->cName))));
$_block_repeat=true;
echo $_block_plugin133->render(array('variant'=>"link",'href'=>$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->vorherigerArtikel->cURLFull,'title'=>$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->vorherigerArtikel->cName,'aria'=>array("label"=>$_prefixVariable63.": ".((string)$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->vorherigerArtikel->cName))), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><span class="fa fa-chevron-left"></span><?php $_block_repeat=false;
echo $_block_plugin133->render(array('variant'=>"link",'href'=>$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->vorherigerArtikel->cURLFull,'title'=>$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->vorherigerArtikel->cName,'aria'=>array("label"=>$_prefixVariable63.": ".((string)$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->vorherigerArtikel->cName))), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
/* {/block 'layout-header-product-pagination'} */
/* {block 'layout-breadcrumb'} */
class Block_180873325760913d9c5e4070_72583301 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout-breadcrumb' => 
  array (
    0 => 'Block_180873325760913d9c5e4070_72583301',
  ),
  'layout-breadcrumb-sm-back' => 
  array (
    0 => 'Block_99627881660913d9c5f1d73_38472517',
  ),
  'layout-breadcrumb-items' => 
  array (
    0 => 'Block_32535340460913d9c628583_87423666',
  ),
  'layout-breadcrumb-first-item' => 
  array (
    0 => 'Block_205143535060913d9c62af73_86310774',
  ),
  'layout-breadcrumb-last-item' => 
  array (
    0 => 'Block_22309795960913d9c63f039_90695460',
  ),
  'layout-breadcrumb-item' => 
  array (
    0 => 'Block_58132634160913d9c65f1e9_32868855',
  ),
  'layout-header-product-pagination' => 
  array (
    0 => 'Block_107810494160913d9c66ec46_99708588',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['has_boxes'][0], array( array('position'=>'left','assign'=>'hasLeftBox'),$_smarty_tpl ) );
if (!empty($_smarty_tpl->tpl_vars['Brotnavi']->value) && !$_smarty_tpl->tpl_vars['bExclusive']->value && !$_smarty_tpl->tpl_vars['bAjaxRequest']->value && $_smarty_tpl->tpl_vars['nSeitenTyp']->value !== (defined('PAGE_STARTSEITE') ? constant('PAGE_STARTSEITE') : null) && $_smarty_tpl->tpl_vars['nSeitenTyp']->value !== (defined('PAGE_BESTELLVORGANG') ? constant('PAGE_BESTELLVORGANG') : null) && $_smarty_tpl->tpl_vars['nSeitenTyp']->value !== (defined('PAGE_BESTELLSTATUS') ? constant('PAGE_BESTELLSTATUS') : null)) {
$_block_plugin124 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin124, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('no-gutters'=>true,'class'=>"breadcrumb-wrapper"));
$_block_repeat=true;
echo $_block_plugin124->render(array('no-gutters'=>true,'class'=>"breadcrumb-wrapper"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_plugin125 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin125, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>"auto"));
$_block_repeat=true;
echo $_block_plugin125->render(array('cols'=>"auto"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_plugin126 = isset($_smarty_tpl->smarty->registered_plugins['block']['breadcrumb'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['breadcrumb'][0][0] : null;
if (!is_callable(array($_block_plugin126, 'render'))) {
throw new SmartyException('block tag \'breadcrumb\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('breadcrumb', array('id'=>"breadcrumb",'itemprop'=>"breadcrumb",'itemscope'=>true,'itemtype'=>"http://schema.org/BreadcrumbList"));
$_block_repeat=true;
echo $_block_plugin126->render(array('id'=>"breadcrumb",'itemprop'=>"breadcrumb",'itemscope'=>true,'itemtype'=>"http://schema.org/BreadcrumbList"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_99627881660913d9c5f1d73_38472517', 'layout-breadcrumb-sm-back', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_32535340460913d9c628583_87423666', 'layout-breadcrumb-items', $this->tplIndex);
$_block_repeat=false;
echo $_block_plugin126->render(array('id'=>"breadcrumb",'itemprop'=>"breadcrumb",'itemscope'=>true,'itemtype'=>"http://schema.org/BreadcrumbList"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_repeat=false;
echo $_block_plugin125->render(array('cols'=>"auto"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin131 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin131, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('class'=>'navigation-arrows'));
$_block_repeat=true;
echo $_block_plugin131->render(array('class'=>'navigation-arrows'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if (!empty($_smarty_tpl->tpl_vars['NavigationBlaettern']->value)) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_107810494160913d9c66ec46_99708588', 'layout-header-product-pagination', $this->tplIndex);
}
$_block_repeat=false;
echo $_block_plugin131->render(array('class'=>'navigation-arrows'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_repeat=false;
echo $_block_plugin124->render(array('no-gutters'=>true,'class'=>"breadcrumb-wrapper"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
/* {/block 'layout-breadcrumb'} */
}
