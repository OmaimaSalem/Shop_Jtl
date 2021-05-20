<?php
/* Smarty version 3.1.38, created on 2021-05-19 15:00:24
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\snippets\productlist_page_nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a50be88311d0_44844295',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd6b32dbad182b46c3d7693f42a0b9335c90ec65' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\snippets\\productlist_page_nav.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:productlist/result_options.tpl' => 1,
    'file:productlist/layout_options.tpl' => 1,
  ),
),false)) {
function content_60a50be88311d0_44844295 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132377190060a50be8717ec9_26773552', 'snippets-productlist-page-nav');
?>

<?php }
/* {block 'snippets-productlist-page-nav-hr-top'} */
class Block_128621348260a50be8732600_18330274 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <hr class="productlist-page-nav-top">
            <?php
}
}
/* {/block 'snippets-productlist-page-nav-hr-top'} */
/* {block 'snippets-productlist-page-nav-include-result-options'} */
class Block_180058166460a50be87401a4_15438823 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php if (count($_smarty_tpl->tpl_vars['Suchergebnisse']->value->getProducts()) > 0) {?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_result_options'),$_smarty_tpl ) );?>

                            <?php }?>
                            <?php $_smarty_tpl->_assignInScope('filterPlacement', '');?>
                            <?php if ($_smarty_tpl->tpl_vars['isMobile']->value && !$_smarty_tpl->tpl_vars['isTablet']->value) {?>
                                <?php $_smarty_tpl->_assignInScope('filterPlacement', "collapse");?>
                            <?php } elseif ($_smarty_tpl->tpl_vars['isTablet']->value || $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['productlist']['filter_placement'] === 'modal') {?>
                                <?php $_smarty_tpl->_assignInScope('filterPlacement', "modal");?>
                            <?php }?>
                            <div id="improve_search" class="result-option-wrapper <?php if ($_smarty_tpl->tpl_vars['filterPlacement']->value !== 'collapse') {?>d-inline-block btn-group<?php }?> <?php if ($_smarty_tpl->tpl_vars['filterPlacement']->value === '') {?>d-lg-none<?php }?>">
                                <?php $_smarty_tpl->_subTemplateRender('file:productlist/result_options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('itemCount'=>$_smarty_tpl->tpl_vars['Suchergebnisse']->value->getProductCount(),'filterPlacement'=>$_smarty_tpl->tpl_vars['filterPlacement']->value), 0, false);
?>
                            </div>
                        <?php
}
}
/* {/block 'snippets-productlist-page-nav-include-result-options'} */
/* {block 'snippets-productlist-page-nav-actions-sort'} */
class Block_60484673460a50be8756d71_49964215 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'sorting','section'=>'productOverview'),$_smarty_tpl ) );
$_prefixVariable24=ob_get_clean();
$_block_plugin63 = isset($_smarty_tpl->smarty->registered_plugins['block']['dropdown'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['dropdown'][0][0] : null;
if (!is_callable(array($_block_plugin63, 'render'))) {
throw new SmartyException('block tag \'dropdown\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dropdown', array('class'=>"filter-type-FilterItemSort btn-group",'variant'=>"outline-secondary",'text'=>$_prefixVariable24));
$_block_repeat=true;
echo $_block_plugin63->render(array('class'=>"filter-type-FilterItemSort btn-group",'variant'=>"outline-secondary",'text'=>$_prefixVariable24), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Suchergebnisse']->value->getSortingOptions(), 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
                                            <?php $_block_plugin64 = isset($_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0] : null;
if (!is_callable(array($_block_plugin64, 'render'))) {
throw new SmartyException('block tag \'dropdownitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dropdownitem', array('rel'=>"nofollow",'href'=>$_smarty_tpl->tpl_vars['option']->value->getURL(),'class'=>"page-nav-filter-item",'active'=>$_smarty_tpl->tpl_vars['option']->value->isActive()));
$_block_repeat=true;
echo $_block_plugin64->render(array('rel'=>"nofollow",'href'=>$_smarty_tpl->tpl_vars['option']->value->getURL(),'class'=>"page-nav-filter-item",'active'=>$_smarty_tpl->tpl_vars['option']->value->isActive()), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                <?php echo $_smarty_tpl->tpl_vars['option']->value->getName();?>

                                            <?php $_block_repeat=false;
echo $_block_plugin64->render(array('rel'=>"nofollow",'href'=>$_smarty_tpl->tpl_vars['option']->value->getURL(),'class'=>"page-nav-filter-item",'active'=>$_smarty_tpl->tpl_vars['option']->value->isActive()), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php $_block_repeat=false;
echo $_block_plugin63->render(array('class'=>"filter-type-FilterItemSort btn-group",'variant'=>"outline-secondary",'text'=>$_prefixVariable24), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php
}
}
/* {/block 'snippets-productlist-page-nav-actions-sort'} */
/* {block 'snippets-productlist-page-nav-actions-items'} */
class Block_133612756160a50be8789605_36988002 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'productsPerPage','section'=>'productOverview'),$_smarty_tpl ) );
$_prefixVariable25=ob_get_clean();
$_block_plugin65 = isset($_smarty_tpl->smarty->registered_plugins['block']['dropdown'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['dropdown'][0][0] : null;
if (!is_callable(array($_block_plugin65, 'render'))) {
throw new SmartyException('block tag \'dropdown\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dropdown', array('class'=>"filter-type-FilterItemLimits btn-group",'variant'=>"outline-secondary",'text'=>$_prefixVariable25));
$_block_repeat=true;
echo $_block_plugin65->render(array('class'=>"filter-type-FilterItemLimits btn-group",'variant'=>"outline-secondary",'text'=>$_prefixVariable25), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Suchergebnisse']->value->getLimitOptions(), 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
                                            <?php $_block_plugin66 = isset($_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0] : null;
if (!is_callable(array($_block_plugin66, 'render'))) {
throw new SmartyException('block tag \'dropdownitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dropdownitem', array('rel'=>"nofollow",'href'=>$_smarty_tpl->tpl_vars['option']->value->getURL(),'class'=>"page-nav-filter-item",'active'=>$_smarty_tpl->tpl_vars['option']->value->isActive()));
$_block_repeat=true;
echo $_block_plugin66->render(array('rel'=>"nofollow",'href'=>$_smarty_tpl->tpl_vars['option']->value->getURL(),'class'=>"page-nav-filter-item",'active'=>$_smarty_tpl->tpl_vars['option']->value->isActive()), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                <?php echo $_smarty_tpl->tpl_vars['option']->value->getName();?>

                                            <?php $_block_repeat=false;
echo $_block_plugin66->render(array('rel'=>"nofollow",'href'=>$_smarty_tpl->tpl_vars['option']->value->getURL(),'class'=>"page-nav-filter-item",'active'=>$_smarty_tpl->tpl_vars['option']->value->isActive()), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php $_block_repeat=false;
echo $_block_plugin65->render(array('class'=>"filter-type-FilterItemLimits btn-group",'variant'=>"outline-secondary",'text'=>$_prefixVariable25), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php
}
}
/* {/block 'snippets-productlist-page-nav-actions-items'} */
/* {block 'snippets-productlist-page-nav-include-layout-options'} */
class Block_79094645160a50be8798279_06258272 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <?php $_smarty_tpl->_subTemplateRender('file:productlist/layout_options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                    <?php
}
}
/* {/block 'snippets-productlist-page-nav-include-layout-options'} */
/* {block 'snippets-productlist-page-nav-actions'} */
class Block_142264532860a50be8756165_41133162 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_60484673460a50be8756d71_49964215', 'snippets-productlist-page-nav-actions-sort', $this->tplIndex);
?>

                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_133612756160a50be8789605_36988002', 'snippets-productlist-page-nav-actions-items', $this->tplIndex);
?>

                                <?php if (!$_smarty_tpl->tpl_vars['isMobile']->value) {?>
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_79094645160a50be8798279_06258272', 'snippets-productlist-page-nav-include-layout-options', $this->tplIndex);
?>

                                <?php }?>
                            <?php
}
}
/* {/block 'snippets-productlist-page-nav-actions'} */
/* {block 'snippets-productlist-page-nav-result-options-sort'} */
class Block_97835215460a50be873d4a4_46118039 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_block_plugin62 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin62, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'xl'=>"auto",'class'=>"displayoptions"));
$_block_repeat=true;
echo $_block_plugin62->render(array('cols'=>12,'xl'=>"auto",'class'=>"displayoptions"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_180058166460a50be87401a4_15438823', 'snippets-productlist-page-nav-include-result-options', $this->tplIndex);
?>

                        <?php if (!$_smarty_tpl->tpl_vars['isMobile']->value || $_smarty_tpl->tpl_vars['isTablet']->value) {?>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_142264532860a50be8756165_41133162', 'snippets-productlist-page-nav-actions', $this->tplIndex);
?>

                        <?php }?>
                    <?php $_block_repeat=false;
echo $_block_plugin62->render(array('cols'=>12,'xl'=>"auto",'class'=>"displayoptions"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php
}
}
/* {/block 'snippets-productlist-page-nav-result-options-sort'} */
/* {block 'snippets-productlist-page-nav-current-page-count'} */
class Block_54862648160a50be87a76e9_58482517 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php ob_start();
if ($_smarty_tpl->tpl_vars['Suchergebnisse']->value->getPages()->getMaxPage() > 1) {
echo "productlist-item-border";
}
$_prefixVariable26=ob_get_clean();
$_block_plugin67 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin67, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>"auto",'class'=>"productlist-item-info ".$_prefixVariable26));
$_block_repeat=true;
echo $_block_plugin67->render(array('cols'=>"auto",'class'=>"productlist-item-info ".$_prefixVariable26), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"products"),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['Suchergebnisse']->value->getOffsetStart();?>
 - <?php echo $_smarty_tpl->tpl_vars['Suchergebnisse']->value->getOffsetEnd();?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'of','section'=>'productOverview'),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['Suchergebnisse']->value->getProductCount();?>

                <?php $_block_repeat=false;
echo $_block_plugin67->render(array('cols'=>"auto",'class'=>"productlist-item-info ".$_prefixVariable26), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
}
}
/* {/block 'snippets-productlist-page-nav-current-page-count'} */
/* {block 'snippets-productlist-page-nav-first-page'} */
class Block_158286643160a50be87ccb42_84047900 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <li class="page-item<?php if ($_smarty_tpl->tpl_vars['Suchergebnisse']->value->getPages()->getCurrentPage() == 1) {?> disabled<?php }?>">
                                        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'previous','section'=>'productOverview'),$_smarty_tpl ) );
$_prefixVariable27 = ob_get_clean();
$_block_plugin69 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin69, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('class'=>"page-link js-pagination-ajax",'href'=>$_smarty_tpl->tpl_vars['filterPagination']->value->getPrev()->getURL(),'aria'=>array('label'=>$_prefixVariable27)));
$_block_repeat=true;
echo $_block_plugin69->render(array('class'=>"page-link js-pagination-ajax",'href'=>$_smarty_tpl->tpl_vars['filterPagination']->value->getPrev()->getURL(),'aria'=>array('label'=>$_prefixVariable27)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><i class="fas fa-long-arrow-alt-left"></i><?php $_block_repeat=false;
echo $_block_plugin69->render(array('class'=>"page-link js-pagination-ajax",'href'=>$_smarty_tpl->tpl_vars['filterPagination']->value->getPrev()->getURL(),'aria'=>array('label'=>$_prefixVariable27)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    </li>
                                <?php
}
}
/* {/block 'snippets-productlist-page-nav-first-page'} */
/* {block 'snippets-productlist-page-nav-button'} */
class Block_204126458960a50be87d65e2_71928061 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="pagination-site"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'page'),$_smarty_tpl ) );?>
</span> <?php echo $_smarty_tpl->tpl_vars['Suchergebnisse']->value->getPages()->getCurrentPage();?>

                                        </button>
                                    <?php
}
}
/* {/block 'snippets-productlist-page-nav-button'} */
/* {block 'snippets-productlist-page-nav-pages'} */
class Block_77313013660a50be87dbb82_24686535 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filterPagination']->value->getPages(), 'page');
$_smarty_tpl->tpl_vars['page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->do_else = false;
?>
                                                <div class="dropdown-item page-item<?php if ($_smarty_tpl->tpl_vars['page']->value->isActive()) {?> active<?php }?>">
                                                    <?php $_block_plugin70 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin70, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('class'=>"page-link js-pagination-ajax",'href'=>$_smarty_tpl->tpl_vars['page']->value->getURL()));
$_block_repeat=true;
echo $_block_plugin70->render(array('class'=>"page-link js-pagination-ajax",'href'=>$_smarty_tpl->tpl_vars['page']->value->getURL()), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><span class="pagination-site"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'page'),$_smarty_tpl ) );?>
</span> <?php echo $_smarty_tpl->tpl_vars['page']->value->getPageNumber();
$_block_repeat=false;
echo $_block_plugin70->render(array('class'=>"page-link js-pagination-ajax",'href'=>$_smarty_tpl->tpl_vars['page']->value->getURL()), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                </div>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        <?php
}
}
/* {/block 'snippets-productlist-page-nav-pages'} */
/* {block 'snippets-productlist-page-nav-last-page'} */
class Block_27361077360a50be87f3715_67747126 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <li class="page-item<?php if ($_smarty_tpl->tpl_vars['Suchergebnisse']->value->getPages()->getCurrentPage() == $_smarty_tpl->tpl_vars['Suchergebnisse']->value->getPages()->getMaxPage()) {?> disabled<?php }?>">
                                        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'next','section'=>'productOverview'),$_smarty_tpl ) );
$_prefixVariable28 = ob_get_clean();
$_block_plugin71 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin71, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('class'=>"page-link js-pagination-ajax",'href'=>$_smarty_tpl->tpl_vars['filterPagination']->value->getNext()->getURL(),'aria'=>array('label'=>$_prefixVariable28)));
$_block_repeat=true;
echo $_block_plugin71->render(array('class'=>"page-link js-pagination-ajax",'href'=>$_smarty_tpl->tpl_vars['filterPagination']->value->getNext()->getURL(),'aria'=>array('label'=>$_prefixVariable28)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><i class="fas fa-long-arrow-alt-right"></i><?php $_block_repeat=false;
echo $_block_plugin71->render(array('class'=>"page-link js-pagination-ajax",'href'=>$_smarty_tpl->tpl_vars['filterPagination']->value->getNext()->getURL(),'aria'=>array('label'=>$_prefixVariable28)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    </li>
                                <?php
}
}
/* {/block 'snippets-productlist-page-nav-last-page'} */
/* {block 'snippets-productlist-page-nav-page-nav'} */
class Block_173234046160a50be87c9f31_86150610 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_block_plugin68 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin68, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'md'=>"auto",'class'=>"productlist-pagination"));
$_block_repeat=true;
echo $_block_plugin68->render(array('cols'=>12,'md'=>"auto",'class'=>"productlist-pagination"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <nav class="navbar-pagination" aria-label="Productlist Navigation">
                            <ul class="pagination">
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_158286643160a50be87ccb42_84047900', 'snippets-productlist-page-nav-first-page', $this->tplIndex);
?>

                                <li class="page-item dropdown">
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_204126458960a50be87d65e2_71928061', 'snippets-productlist-page-nav-button', $this->tplIndex);
?>

                                    <div class="dropdown-menu shadow-none">
                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_77313013660a50be87dbb82_24686535', 'snippets-productlist-page-nav-pages', $this->tplIndex);
?>

                                    </div>
                                </li>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27361077360a50be87f3715_67747126', 'snippets-productlist-page-nav-last-page', $this->tplIndex);
?>

                            </ul>
                        </nav>
                    <?php $_block_repeat=false;
echo $_block_plugin68->render(array('cols'=>12,'md'=>"auto",'class'=>"productlist-pagination"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php
}
}
/* {/block 'snippets-productlist-page-nav-page-nav'} */
/* {block 'snippets-productlist-page-nav-hr-bottom'} */
class Block_194890537760a50be882ee71_69469554 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <hr class="productlist-page-nav-bottom">
        <?php
}
}
/* {/block 'snippets-productlist-page-nav-hr-bottom'} */
/* {block 'snippets-productlist-page-nav'} */
class Block_132377190060a50be8717ec9_26773552 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-productlist-page-nav' => 
  array (
    0 => 'Block_132377190060a50be8717ec9_26773552',
  ),
  'snippets-productlist-page-nav-hr-top' => 
  array (
    0 => 'Block_128621348260a50be8732600_18330274',
  ),
  'snippets-productlist-page-nav-result-options-sort' => 
  array (
    0 => 'Block_97835215460a50be873d4a4_46118039',
  ),
  'snippets-productlist-page-nav-include-result-options' => 
  array (
    0 => 'Block_180058166460a50be87401a4_15438823',
  ),
  'snippets-productlist-page-nav-actions' => 
  array (
    0 => 'Block_142264532860a50be8756165_41133162',
  ),
  'snippets-productlist-page-nav-actions-sort' => 
  array (
    0 => 'Block_60484673460a50be8756d71_49964215',
  ),
  'snippets-productlist-page-nav-actions-items' => 
  array (
    0 => 'Block_133612756160a50be8789605_36988002',
  ),
  'snippets-productlist-page-nav-include-layout-options' => 
  array (
    0 => 'Block_79094645160a50be8798279_06258272',
  ),
  'snippets-productlist-page-nav-current-page-count' => 
  array (
    0 => 'Block_54862648160a50be87a76e9_58482517',
  ),
  'snippets-productlist-page-nav-page-nav' => 
  array (
    0 => 'Block_173234046160a50be87c9f31_86150610',
  ),
  'snippets-productlist-page-nav-first-page' => 
  array (
    0 => 'Block_158286643160a50be87ccb42_84047900',
  ),
  'snippets-productlist-page-nav-button' => 
  array (
    0 => 'Block_204126458960a50be87d65e2_71928061',
  ),
  'snippets-productlist-page-nav-pages' => 
  array (
    0 => 'Block_77313013660a50be87dbb82_24686535',
  ),
  'snippets-productlist-page-nav-last-page' => 
  array (
    0 => 'Block_27361077360a50be87f3715_67747126',
  ),
  'snippets-productlist-page-nav-hr-bottom' => 
  array (
    0 => 'Block_194890537760a50be882ee71_69469554',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['Suchergebnisse']->value->getProductCount() > 0) {?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>('opc_before_page_nav_').($_smarty_tpl->tpl_vars['navid']->value)),$_smarty_tpl ) );?>


        <?php if ((($tmp = $_smarty_tpl->tpl_vars['hrTop']->value ?? null)===null||$tmp==='' ? false : $tmp) === true) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_128621348260a50be8732600_18330274', 'snippets-productlist-page-nav-hr-top', $this->tplIndex);
?>

        <?php }?>
        <?php ob_start();
if ($_smarty_tpl->tpl_vars['navid']->value === 'header') {
echo "productlist-page-nav-header-m";
}
$_prefixVariable23=ob_get_clean();
$_block_plugin61 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin61, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('no-gutters'=>true,'class'=>$_prefixVariable23." productlist-page-nav"));
$_block_repeat=true;
echo $_block_plugin61->render(array('no-gutters'=>true,'class'=>$_prefixVariable23." productlist-page-nav"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php if (count($_smarty_tpl->tpl_vars['NaviFilter']->value->getSearchResults()->getProducts()) > 0 && $_smarty_tpl->tpl_vars['navid']->value === 'header') {?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_97835215460a50be873d4a4_46118039', 'snippets-productlist-page-nav-result-options-sort', $this->tplIndex);
?>

            <?php }?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54862648160a50be87a76e9_58482517', 'snippets-productlist-page-nav-current-page-count', $this->tplIndex);
?>

            <?php if ($_smarty_tpl->tpl_vars['Suchergebnisse']->value->getPages()->getMaxPage() > 1 && !($_smarty_tpl->tpl_vars['isMobile']->value && $_smarty_tpl->tpl_vars['navid']->value === 'header')) {?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_173234046160a50be87c9f31_86150610', 'snippets-productlist-page-nav-page-nav', $this->tplIndex);
?>

            <?php }?>
        <?php $_block_repeat=false;
echo $_block_plugin61->render(array('no-gutters'=>true,'class'=>$_prefixVariable23." productlist-page-nav"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_194890537760a50be882ee71_69469554', 'snippets-productlist-page-nav-hr-bottom', $this->tplIndex);
?>

    <?php }
}
}
/* {/block 'snippets-productlist-page-nav'} */
}
