<?php
/* Smarty version 3.1.38, created on 2021-05-18 11:16:40
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\layout\breadcrumb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a385f82a4073_40822188',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b07927c83c6971bb6d97853984b491c16c9029e' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\layout\\breadcrumb.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a385f82a4073_40822188 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_100070433860a385f82309d7_91521085', 'layout-breadcrumb');
?>

<?php }
/* {block 'layout-breadcrumb-sm-back'} */
class Block_167665650660a385f8243924_74492188 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('parent', $_smarty_tpl->tpl_vars['Brotnavi']->value[max((count($_smarty_tpl->tpl_vars['Brotnavi']->value)-2),0)]);
if ($_smarty_tpl->tpl_vars['parent']->value !== null) {
$_block_plugin82 = isset($_smarty_tpl->smarty->registered_plugins['block']['breadcrumbitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbitem'][0][0] : null;
if (!is_callable(array($_block_plugin82, 'render'))) {
throw new SmartyException('block tag \'breadcrumbitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('breadcrumbitem', array('class'=>"breadcrumb-arrow",'href'=>$_smarty_tpl->tpl_vars['parent']->value->getURLFull(),'title'=>htmlspecialchars($_smarty_tpl->tpl_vars['parent']->value->getName(), ENT_QUOTES, 'utf-8', true)));
$_block_repeat=true;
echo $_block_plugin82->render(array('class'=>"breadcrumb-arrow",'href'=>$_smarty_tpl->tpl_vars['parent']->value->getURLFull(),'title'=>htmlspecialchars($_smarty_tpl->tpl_vars['parent']->value->getName(), ENT_QUOTES, 'utf-8', true)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><span itemprop="name"><?php echo $_smarty_tpl->tpl_vars['parent']->value->getName();?>
</span><?php $_block_repeat=false;
echo $_block_plugin82->render(array('class'=>"breadcrumb-arrow",'href'=>$_smarty_tpl->tpl_vars['parent']->value->getURLFull(),'title'=>htmlspecialchars($_smarty_tpl->tpl_vars['parent']->value->getName(), ENT_QUOTES, 'utf-8', true)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
/* {/block 'layout-breadcrumb-sm-back'} */
/* {block 'layout-breadcrumb-first-item'} */
class Block_162225565060a385f8260245_27653056 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_block_plugin83 = isset($_smarty_tpl->smarty->registered_plugins['block']['breadcrumbitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbitem'][0][0] : null;
if (!is_callable(array($_block_plugin83, 'render'))) {
throw new SmartyException('block tag \'breadcrumbitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('breadcrumbitem', array('class'=>"first",'router-tag-itemprop'=>"url",'href'=>$_smarty_tpl->tpl_vars['oItem']->value->getURLFull(),'title'=>htmlspecialchars($_smarty_tpl->tpl_vars['oItem']->value->getName(), ENT_QUOTES, 'utf-8', true),'itemprop'=>"itemListElement",'itemscope'=>true,'itemtype'=>"http://schema.org/ListItem"));
$_block_repeat=true;
echo $_block_plugin83->render(array('class'=>"first",'router-tag-itemprop'=>"url",'href'=>$_smarty_tpl->tpl_vars['oItem']->value->getURLFull(),'title'=>htmlspecialchars($_smarty_tpl->tpl_vars['oItem']->value->getName(), ENT_QUOTES, 'utf-8', true),'itemprop'=>"itemListElement",'itemscope'=>true,'itemtype'=>"http://schema.org/ListItem"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oItem']->value->getName(), ENT_QUOTES, 'utf-8', true);?>
</span><meta itemprop="item" content="<?php echo $_smarty_tpl->tpl_vars['oItem']->value->getURLFull();?>
" /><meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['oItem']->iteration;?>
" /><?php $_block_repeat=false;
echo $_block_plugin83->render(array('class'=>"first",'router-tag-itemprop'=>"url",'href'=>$_smarty_tpl->tpl_vars['oItem']->value->getURLFull(),'title'=>htmlspecialchars($_smarty_tpl->tpl_vars['oItem']->value->getName(), ENT_QUOTES, 'utf-8', true),'itemprop'=>"itemListElement",'itemscope'=>true,'itemtype'=>"http://schema.org/ListItem"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'layout-breadcrumb-first-item'} */
/* {block 'layout-breadcrumb-last-item'} */
class Block_64251639260a385f826cea2_76730492 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
ob_start();
if ($_smarty_tpl->tpl_vars['oItem']->value->getHasChild() === true) {
echo (string)$_smarty_tpl->tpl_vars['oItem']->value->getURLFull();
}
$_prefixVariable48=ob_get_clean();
$_block_plugin84 = isset($_smarty_tpl->smarty->registered_plugins['block']['breadcrumbitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbitem'][0][0] : null;
if (!is_callable(array($_block_plugin84, 'render'))) {
throw new SmartyException('block tag \'breadcrumbitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('breadcrumbitem', array('class'=>"last active",'router-tag-itemprop'=>"url",'href'=>$_prefixVariable48,'title'=>htmlspecialchars($_smarty_tpl->tpl_vars['oItem']->value->getName(), ENT_QUOTES, 'utf-8', true),'itemprop'=>"itemListElement",'itemscope'=>true,'itemtype'=>"http://schema.org/ListItem"));
$_block_repeat=true;
echo $_block_plugin84->render(array('class'=>"last active",'router-tag-itemprop'=>"url",'href'=>$_prefixVariable48,'title'=>htmlspecialchars($_smarty_tpl->tpl_vars['oItem']->value->getName(), ENT_QUOTES, 'utf-8', true),'itemprop'=>"itemListElement",'itemscope'=>true,'itemtype'=>"http://schema.org/ListItem"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><span itemprop="name"><?php if ($_smarty_tpl->tpl_vars['oItem']->value->getName() !== null) {
echo $_smarty_tpl->tpl_vars['oItem']->value->getName();
} elseif (!empty($_smarty_tpl->tpl_vars['Suchergebnisse']->value->getSearchTermWrite())) {
echo $_smarty_tpl->tpl_vars['Suchergebnisse']->value->getSearchTermWrite();
}?></span><meta itemprop="item" content="<?php echo $_smarty_tpl->tpl_vars['oItem']->value->getURLFull();?>
" /><meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['oItem']->iteration;?>
" /><?php $_block_repeat=false;
echo $_block_plugin84->render(array('class'=>"last active",'router-tag-itemprop'=>"url",'href'=>$_prefixVariable48,'title'=>htmlspecialchars($_smarty_tpl->tpl_vars['oItem']->value->getName(), ENT_QUOTES, 'utf-8', true),'itemprop'=>"itemListElement",'itemscope'=>true,'itemtype'=>"http://schema.org/ListItem"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'layout-breadcrumb-last-item'} */
/* {block 'layout-breadcrumb-item'} */
class Block_39885260360a385f827f567_55491369 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_block_plugin85 = isset($_smarty_tpl->smarty->registered_plugins['block']['breadcrumbitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbitem'][0][0] : null;
if (!is_callable(array($_block_plugin85, 'render'))) {
throw new SmartyException('block tag \'breadcrumbitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('breadcrumbitem', array('router-tag-itemprop'=>"url",'href'=>$_smarty_tpl->tpl_vars['oItem']->value->getURLFull(),'title'=>htmlspecialchars($_smarty_tpl->tpl_vars['oItem']->value->getName(), ENT_QUOTES, 'utf-8', true),'itemprop'=>"itemListElement",'itemscope'=>true,'itemtype'=>"http://schema.org/ListItem"));
$_block_repeat=true;
echo $_block_plugin85->render(array('router-tag-itemprop'=>"url",'href'=>$_smarty_tpl->tpl_vars['oItem']->value->getURLFull(),'title'=>htmlspecialchars($_smarty_tpl->tpl_vars['oItem']->value->getName(), ENT_QUOTES, 'utf-8', true),'itemprop'=>"itemListElement",'itemscope'=>true,'itemtype'=>"http://schema.org/ListItem"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><span itemprop="name"><?php echo $_smarty_tpl->tpl_vars['oItem']->value->getName();?>
</span><meta itemprop="item" content="<?php echo $_smarty_tpl->tpl_vars['oItem']->value->getURLFull();?>
" /><meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['oItem']->iteration;?>
" /><?php $_block_repeat=false;
echo $_block_plugin85->render(array('router-tag-itemprop'=>"url",'href'=>$_smarty_tpl->tpl_vars['oItem']->value->getURLFull(),'title'=>htmlspecialchars($_smarty_tpl->tpl_vars['oItem']->value->getName(), ENT_QUOTES, 'utf-8', true),'itemprop'=>"itemListElement",'itemscope'=>true,'itemtype'=>"http://schema.org/ListItem"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'layout-breadcrumb-item'} */
/* {block 'layout-breadcrumb-items'} */
class Block_129779226760a385f8252267_43128673 extends Smarty_Internal_Block
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
$__foreach_oItem_60_saved = $_smarty_tpl->tpl_vars['oItem'];
if ($_smarty_tpl->tpl_vars['oItem']->first) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_162225565060a385f8260245_27653056', 'layout-breadcrumb-first-item', $this->tplIndex);
} elseif ($_smarty_tpl->tpl_vars['oItem']->last) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_64251639260a385f826cea2_76730492', 'layout-breadcrumb-last-item', $this->tplIndex);
} else {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_39885260360a385f827f567_55491369', 'layout-breadcrumb-item', $this->tplIndex);
}
$_smarty_tpl->tpl_vars['oItem'] = $__foreach_oItem_60_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
/* {/block 'layout-breadcrumb-items'} */
/* {block 'layout-header-product-pagination'} */
class Block_203573907860a385f828e276_20157056 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['NavigationBlaettern']->value->naechsterArtikel->kArtikel))) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('section'=>'productDetails','key'=>'nextProduct'),$_smarty_tpl ) );
$_prefixVariable49=ob_get_clean();
$_block_plugin87 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin87, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('variant'=>"link",'href'=>$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->naechsterArtikel->cURLFull,'title'=>$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->naechsterArtikel->cName,'aria'=>array("label"=>$_prefixVariable49.": ".((string)$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->naechsterArtikel->cName))));
$_block_repeat=true;
echo $_block_plugin87->render(array('variant'=>"link",'href'=>$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->naechsterArtikel->cURLFull,'title'=>$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->naechsterArtikel->cName,'aria'=>array("label"=>$_prefixVariable49.": ".((string)$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->naechsterArtikel->cName))), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><span class="fa fa-chevron-right"></span><?php $_block_repeat=false;
echo $_block_plugin87->render(array('variant'=>"link",'href'=>$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->naechsterArtikel->cURLFull,'title'=>$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->naechsterArtikel->cName,'aria'=>array("label"=>$_prefixVariable49.": ".((string)$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->naechsterArtikel->cName))), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
if ((isset($_smarty_tpl->tpl_vars['NavigationBlaettern']->value->vorherigerArtikel->kArtikel))) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('section'=>'productDetails','key'=>'previousProduct'),$_smarty_tpl ) );
$_prefixVariable50=ob_get_clean();
$_block_plugin88 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin88, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('variant'=>"link",'href'=>$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->vorherigerArtikel->cURLFull,'title'=>$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->vorherigerArtikel->cName,'aria'=>array("label"=>$_prefixVariable50.": ".((string)$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->vorherigerArtikel->cName))));
$_block_repeat=true;
echo $_block_plugin88->render(array('variant'=>"link",'href'=>$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->vorherigerArtikel->cURLFull,'title'=>$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->vorherigerArtikel->cName,'aria'=>array("label"=>$_prefixVariable50.": ".((string)$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->vorherigerArtikel->cName))), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><span class="fa fa-chevron-left"></span><?php $_block_repeat=false;
echo $_block_plugin88->render(array('variant'=>"link",'href'=>$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->vorherigerArtikel->cURLFull,'title'=>$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->vorherigerArtikel->cName,'aria'=>array("label"=>$_prefixVariable50.": ".((string)$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->vorherigerArtikel->cName))), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
/* {/block 'layout-header-product-pagination'} */
/* {block 'layout-breadcrumb'} */
class Block_100070433860a385f82309d7_91521085 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout-breadcrumb' => 
  array (
    0 => 'Block_100070433860a385f82309d7_91521085',
  ),
  'layout-breadcrumb-sm-back' => 
  array (
    0 => 'Block_167665650660a385f8243924_74492188',
  ),
  'layout-breadcrumb-items' => 
  array (
    0 => 'Block_129779226760a385f8252267_43128673',
  ),
  'layout-breadcrumb-first-item' => 
  array (
    0 => 'Block_162225565060a385f8260245_27653056',
  ),
  'layout-breadcrumb-last-item' => 
  array (
    0 => 'Block_64251639260a385f826cea2_76730492',
  ),
  'layout-breadcrumb-item' => 
  array (
    0 => 'Block_39885260360a385f827f567_55491369',
  ),
  'layout-header-product-pagination' => 
  array (
    0 => 'Block_203573907860a385f828e276_20157056',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['has_boxes'][0], array( array('position'=>'left','assign'=>'hasLeftBox'),$_smarty_tpl ) );
if (!empty($_smarty_tpl->tpl_vars['Brotnavi']->value) && !$_smarty_tpl->tpl_vars['bExclusive']->value && !$_smarty_tpl->tpl_vars['bAjaxRequest']->value && $_smarty_tpl->tpl_vars['nSeitenTyp']->value !== (defined('PAGE_STARTSEITE') ? constant('PAGE_STARTSEITE') : null) && $_smarty_tpl->tpl_vars['nSeitenTyp']->value !== (defined('PAGE_BESTELLVORGANG') ? constant('PAGE_BESTELLVORGANG') : null) && $_smarty_tpl->tpl_vars['nSeitenTyp']->value !== (defined('PAGE_BESTELLSTATUS') ? constant('PAGE_BESTELLSTATUS') : null)) {
$_block_plugin79 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin79, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('no-gutters'=>true,'class'=>"breadcrumb-wrapper"));
$_block_repeat=true;
echo $_block_plugin79->render(array('no-gutters'=>true,'class'=>"breadcrumb-wrapper"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_plugin80 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin80, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>"auto"));
$_block_repeat=true;
echo $_block_plugin80->render(array('cols'=>"auto"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_plugin81 = isset($_smarty_tpl->smarty->registered_plugins['block']['breadcrumb'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['breadcrumb'][0][0] : null;
if (!is_callable(array($_block_plugin81, 'render'))) {
throw new SmartyException('block tag \'breadcrumb\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('breadcrumb', array('id'=>"breadcrumb",'itemprop'=>"breadcrumb",'itemscope'=>true,'itemtype'=>"http://schema.org/BreadcrumbList"));
$_block_repeat=true;
echo $_block_plugin81->render(array('id'=>"breadcrumb",'itemprop'=>"breadcrumb",'itemscope'=>true,'itemtype'=>"http://schema.org/BreadcrumbList"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_167665650660a385f8243924_74492188', 'layout-breadcrumb-sm-back', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_129779226760a385f8252267_43128673', 'layout-breadcrumb-items', $this->tplIndex);
$_block_repeat=false;
echo $_block_plugin81->render(array('id'=>"breadcrumb",'itemprop'=>"breadcrumb",'itemscope'=>true,'itemtype'=>"http://schema.org/BreadcrumbList"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_repeat=false;
echo $_block_plugin80->render(array('cols'=>"auto"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin86 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin86, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('class'=>'navigation-arrows'));
$_block_repeat=true;
echo $_block_plugin86->render(array('class'=>'navigation-arrows'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if (!empty($_smarty_tpl->tpl_vars['NavigationBlaettern']->value)) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_203573907860a385f828e276_20157056', 'layout-header-product-pagination', $this->tplIndex);
}
$_block_repeat=false;
echo $_block_plugin86->render(array('class'=>'navigation-arrows'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_repeat=false;
echo $_block_plugin79->render(array('no-gutters'=>true,'class'=>"breadcrumb-wrapper"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
/* {/block 'layout-breadcrumb'} */
}
