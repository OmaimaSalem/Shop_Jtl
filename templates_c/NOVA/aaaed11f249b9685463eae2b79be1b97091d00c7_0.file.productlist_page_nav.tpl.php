<?php
/* Smarty version 3.1.38, created on 2021-05-04 14:13:37
  from 'C:\xampp\htdocs\shop\templates\NOVA\snippets\productlist_page_nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60913a715045b9_24889493',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aaaed11f249b9685463eae2b79be1b97091d00c7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\templates\\NOVA\\snippets\\productlist_page_nav.tpl',
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
function content_60913a715045b9_24889493 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_197213138760913a714a4312_68072805', 'snippets-productlist-page-nav');
?>

<?php }
/* {block 'snippets-productlist-page-nav-hr-top'} */
class Block_159130908060913a714a8dd5_83486378 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <hr class="productlist-page-nav-top">
            <?php
}
}
/* {/block 'snippets-productlist-page-nav-hr-top'} */
/* {block 'snippets-productlist-page-nav-include-result-options'} */
class Block_7306080560913a714b1025_08342401 extends Smarty_Internal_Block
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
class Block_124329083760913a714c31b6_32585865 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'sorting','section'=>'productOverview'),$_smarty_tpl ) );
$_prefixVariable17=ob_get_clean();
$_block_plugin39 = isset($_smarty_tpl->smarty->registered_plugins['block']['dropdown'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['dropdown'][0][0] : null;
if (!is_callable(array($_block_plugin39, 'render'))) {
throw new SmartyException('block tag \'dropdown\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dropdown', array('class'=>"filter-type-FilterItemSort btn-group",'variant'=>"outline-secondary",'text'=>$_prefixVariable17));
$_block_repeat=true;
echo $_block_plugin39->render(array('class'=>"filter-type-FilterItemSort btn-group",'variant'=>"outline-secondary",'text'=>$_prefixVariable17), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Suchergebnisse']->value->getSortingOptions(), 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
                                            <?php $_block_plugin40 = isset($_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0] : null;
if (!is_callable(array($_block_plugin40, 'render'))) {
throw new SmartyException('block tag \'dropdownitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dropdownitem', array('rel'=>"nofollow",'href'=>$_smarty_tpl->tpl_vars['option']->value->getURL(),'class'=>"page-nav-filter-item",'active'=>$_smarty_tpl->tpl_vars['option']->value->isActive()));
$_block_repeat=true;
echo $_block_plugin40->render(array('rel'=>"nofollow",'href'=>$_smarty_tpl->tpl_vars['option']->value->getURL(),'class'=>"page-nav-filter-item",'active'=>$_smarty_tpl->tpl_vars['option']->value->isActive()), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                <?php echo $_smarty_tpl->tpl_vars['option']->value->getName();?>

                                            <?php $_block_repeat=false;
echo $_block_plugin40->render(array('rel'=>"nofollow",'href'=>$_smarty_tpl->tpl_vars['option']->value->getURL(),'class'=>"page-nav-filter-item",'active'=>$_smarty_tpl->tpl_vars['option']->value->isActive()), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php $_block_repeat=false;
echo $_block_plugin39->render(array('class'=>"filter-type-FilterItemSort btn-group",'variant'=>"outline-secondary",'text'=>$_prefixVariable17), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php
}
}
/* {/block 'snippets-productlist-page-nav-actions-sort'} */
/* {block 'snippets-productlist-page-nav-actions-items'} */
class Block_115636330360913a714cd7c0_91717472 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'productsPerPage','section'=>'productOverview'),$_smarty_tpl ) );
$_prefixVariable18=ob_get_clean();
$_block_plugin41 = isset($_smarty_tpl->smarty->registered_plugins['block']['dropdown'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['dropdown'][0][0] : null;
if (!is_callable(array($_block_plugin41, 'render'))) {
throw new SmartyException('block tag \'dropdown\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dropdown', array('class'=>"filter-type-FilterItemLimits btn-group",'variant'=>"outline-secondary",'text'=>$_prefixVariable18));
$_block_repeat=true;
echo $_block_plugin41->render(array('class'=>"filter-type-FilterItemLimits btn-group",'variant'=>"outline-secondary",'text'=>$_prefixVariable18), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Suchergebnisse']->value->getLimitOptions(), 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
                                            <?php $_block_plugin42 = isset($_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0] : null;
if (!is_callable(array($_block_plugin42, 'render'))) {
throw new SmartyException('block tag \'dropdownitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dropdownitem', array('rel'=>"nofollow",'href'=>$_smarty_tpl->tpl_vars['option']->value->getURL(),'class'=>"page-nav-filter-item",'active'=>$_smarty_tpl->tpl_vars['option']->value->isActive()));
$_block_repeat=true;
echo $_block_plugin42->render(array('rel'=>"nofollow",'href'=>$_smarty_tpl->tpl_vars['option']->value->getURL(),'class'=>"page-nav-filter-item",'active'=>$_smarty_tpl->tpl_vars['option']->value->isActive()), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                <?php echo $_smarty_tpl->tpl_vars['option']->value->getName();?>

                                            <?php $_block_repeat=false;
echo $_block_plugin42->render(array('rel'=>"nofollow",'href'=>$_smarty_tpl->tpl_vars['option']->value->getURL(),'class'=>"page-nav-filter-item",'active'=>$_smarty_tpl->tpl_vars['option']->value->isActive()), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php $_block_repeat=false;
echo $_block_plugin41->render(array('class'=>"filter-type-FilterItemLimits btn-group",'variant'=>"outline-secondary",'text'=>$_prefixVariable18), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php
}
}
/* {/block 'snippets-productlist-page-nav-actions-items'} */
/* {block 'snippets-productlist-page-nav-include-layout-options'} */
class Block_149380747960913a714d6b12_29283601 extends Smarty_Internal_Block
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
class Block_139911677360913a714c12f5_69524087 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_124329083760913a714c31b6_32585865', 'snippets-productlist-page-nav-actions-sort', $this->tplIndex);
?>

                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_115636330360913a714cd7c0_91717472', 'snippets-productlist-page-nav-actions-items', $this->tplIndex);
?>

                                <?php if (!$_smarty_tpl->tpl_vars['isMobile']->value) {?>
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_149380747960913a714d6b12_29283601', 'snippets-productlist-page-nav-include-layout-options', $this->tplIndex);
?>

                                <?php }?>
                            <?php
}
}
/* {/block 'snippets-productlist-page-nav-actions'} */
/* {block 'snippets-productlist-page-nav-result-options-sort'} */
class Block_210381012560913a714af1d3_55303449 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_block_plugin38 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin38, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'xl'=>"auto",'class'=>"displayoptions"));
$_block_repeat=true;
echo $_block_plugin38->render(array('cols'=>12,'xl'=>"auto",'class'=>"displayoptions"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7306080560913a714b1025_08342401', 'snippets-productlist-page-nav-include-result-options', $this->tplIndex);
?>

                        <?php if (!$_smarty_tpl->tpl_vars['isMobile']->value || $_smarty_tpl->tpl_vars['isTablet']->value) {?>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_139911677360913a714c12f5_69524087', 'snippets-productlist-page-nav-actions', $this->tplIndex);
?>

                        <?php }?>
                    <?php $_block_repeat=false;
echo $_block_plugin38->render(array('cols'=>12,'xl'=>"auto",'class'=>"displayoptions"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php
}
}
/* {/block 'snippets-productlist-page-nav-result-options-sort'} */
/* {block 'snippets-productlist-page-nav-current-page-count'} */
class Block_104217487360913a714da133_20217069 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php ob_start();
if ($_smarty_tpl->tpl_vars['Suchergebnisse']->value->getPages()->getMaxPage() > 1) {
echo "productlist-item-border";
}
$_prefixVariable19=ob_get_clean();
$_block_plugin43 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin43, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>"auto",'class'=>"productlist-item-info ".$_prefixVariable19));
$_block_repeat=true;
echo $_block_plugin43->render(array('cols'=>"auto",'class'=>"productlist-item-info ".$_prefixVariable19), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"products"),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['Suchergebnisse']->value->getOffsetStart();?>
 - <?php echo $_smarty_tpl->tpl_vars['Suchergebnisse']->value->getOffsetEnd();?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'of','section'=>'productOverview'),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['Suchergebnisse']->value->getProductCount();?>

                <?php $_block_repeat=false;
echo $_block_plugin43->render(array('cols'=>"auto",'class'=>"productlist-item-info ".$_prefixVariable19), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
}
}
/* {/block 'snippets-productlist-page-nav-current-page-count'} */
/* {block 'snippets-productlist-page-nav-first-page'} */
class Block_59360428460913a714e6cf7_05128756 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <li class="page-item<?php if ($_smarty_tpl->tpl_vars['Suchergebnisse']->value->getPages()->getCurrentPage() == 1) {?> disabled<?php }?>">
                                        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'previous','section'=>'productOverview'),$_smarty_tpl ) );
$_prefixVariable20 = ob_get_clean();
$_block_plugin45 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin45, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('class'=>"page-link js-pagination-ajax",'href'=>$_smarty_tpl->tpl_vars['filterPagination']->value->getPrev()->getURL(),'aria'=>array('label'=>$_prefixVariable20)));
$_block_repeat=true;
echo $_block_plugin45->render(array('class'=>"page-link js-pagination-ajax",'href'=>$_smarty_tpl->tpl_vars['filterPagination']->value->getPrev()->getURL(),'aria'=>array('label'=>$_prefixVariable20)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><i class="fas fa-long-arrow-alt-left"></i><?php $_block_repeat=false;
echo $_block_plugin45->render(array('class'=>"page-link js-pagination-ajax",'href'=>$_smarty_tpl->tpl_vars['filterPagination']->value->getPrev()->getURL(),'aria'=>array('label'=>$_prefixVariable20)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    </li>
                                <?php
}
}
/* {/block 'snippets-productlist-page-nav-first-page'} */
/* {block 'snippets-productlist-page-nav-button'} */
class Block_8870387960913a714eca89_93229227 extends Smarty_Internal_Block
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
class Block_207938238360913a714efaf8_40486725 extends Smarty_Internal_Block
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
                                                    <?php $_block_plugin46 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin46, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('class'=>"page-link js-pagination-ajax",'href'=>$_smarty_tpl->tpl_vars['page']->value->getURL()));
$_block_repeat=true;
echo $_block_plugin46->render(array('class'=>"page-link js-pagination-ajax",'href'=>$_smarty_tpl->tpl_vars['page']->value->getURL()), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><span class="pagination-site"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'page'),$_smarty_tpl ) );?>
</span> <?php echo $_smarty_tpl->tpl_vars['page']->value->getPageNumber();
$_block_repeat=false;
echo $_block_plugin46->render(array('class'=>"page-link js-pagination-ajax",'href'=>$_smarty_tpl->tpl_vars['page']->value->getURL()), ob_get_clean(), $_smarty_tpl, $_block_repeat);
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
class Block_2532834660913a714f8885_76488771 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <li class="page-item<?php if ($_smarty_tpl->tpl_vars['Suchergebnisse']->value->getPages()->getCurrentPage() == $_smarty_tpl->tpl_vars['Suchergebnisse']->value->getPages()->getMaxPage()) {?> disabled<?php }?>">
                                        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'next','section'=>'productOverview'),$_smarty_tpl ) );
$_prefixVariable21 = ob_get_clean();
$_block_plugin47 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin47, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('class'=>"page-link js-pagination-ajax",'href'=>$_smarty_tpl->tpl_vars['filterPagination']->value->getNext()->getURL(),'aria'=>array('label'=>$_prefixVariable21)));
$_block_repeat=true;
echo $_block_plugin47->render(array('class'=>"page-link js-pagination-ajax",'href'=>$_smarty_tpl->tpl_vars['filterPagination']->value->getNext()->getURL(),'aria'=>array('label'=>$_prefixVariable21)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><i class="fas fa-long-arrow-alt-right"></i><?php $_block_repeat=false;
echo $_block_plugin47->render(array('class'=>"page-link js-pagination-ajax",'href'=>$_smarty_tpl->tpl_vars['filterPagination']->value->getNext()->getURL(),'aria'=>array('label'=>$_prefixVariable21)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    </li>
                                <?php
}
}
/* {/block 'snippets-productlist-page-nav-last-page'} */
/* {block 'snippets-productlist-page-nav-page-nav'} */
class Block_46125868360913a714e4ff6_23538208 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_block_plugin44 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin44, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'md'=>"auto",'class'=>"productlist-pagination"));
$_block_repeat=true;
echo $_block_plugin44->render(array('cols'=>12,'md'=>"auto",'class'=>"productlist-pagination"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <nav class="navbar-pagination" aria-label="Productlist Navigation">
                            <ul class="pagination">
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59360428460913a714e6cf7_05128756', 'snippets-productlist-page-nav-first-page', $this->tplIndex);
?>

                                <li class="page-item dropdown">
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8870387960913a714eca89_93229227', 'snippets-productlist-page-nav-button', $this->tplIndex);
?>

                                    <div class="dropdown-menu shadow-none">
                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_207938238360913a714efaf8_40486725', 'snippets-productlist-page-nav-pages', $this->tplIndex);
?>

                                    </div>
                                </li>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2532834660913a714f8885_76488771', 'snippets-productlist-page-nav-last-page', $this->tplIndex);
?>

                            </ul>
                        </nav>
                    <?php $_block_repeat=false;
echo $_block_plugin44->render(array('cols'=>12,'md'=>"auto",'class'=>"productlist-pagination"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php
}
}
/* {/block 'snippets-productlist-page-nav-page-nav'} */
/* {block 'snippets-productlist-page-nav-hr-bottom'} */
class Block_105770348660913a71501dc5_27879449 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <hr class="productlist-page-nav-bottom">
        <?php
}
}
/* {/block 'snippets-productlist-page-nav-hr-bottom'} */
/* {block 'snippets-productlist-page-nav'} */
class Block_197213138760913a714a4312_68072805 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-productlist-page-nav' => 
  array (
    0 => 'Block_197213138760913a714a4312_68072805',
  ),
  'snippets-productlist-page-nav-hr-top' => 
  array (
    0 => 'Block_159130908060913a714a8dd5_83486378',
  ),
  'snippets-productlist-page-nav-result-options-sort' => 
  array (
    0 => 'Block_210381012560913a714af1d3_55303449',
  ),
  'snippets-productlist-page-nav-include-result-options' => 
  array (
    0 => 'Block_7306080560913a714b1025_08342401',
  ),
  'snippets-productlist-page-nav-actions' => 
  array (
    0 => 'Block_139911677360913a714c12f5_69524087',
  ),
  'snippets-productlist-page-nav-actions-sort' => 
  array (
    0 => 'Block_124329083760913a714c31b6_32585865',
  ),
  'snippets-productlist-page-nav-actions-items' => 
  array (
    0 => 'Block_115636330360913a714cd7c0_91717472',
  ),
  'snippets-productlist-page-nav-include-layout-options' => 
  array (
    0 => 'Block_149380747960913a714d6b12_29283601',
  ),
  'snippets-productlist-page-nav-current-page-count' => 
  array (
    0 => 'Block_104217487360913a714da133_20217069',
  ),
  'snippets-productlist-page-nav-page-nav' => 
  array (
    0 => 'Block_46125868360913a714e4ff6_23538208',
  ),
  'snippets-productlist-page-nav-first-page' => 
  array (
    0 => 'Block_59360428460913a714e6cf7_05128756',
  ),
  'snippets-productlist-page-nav-button' => 
  array (
    0 => 'Block_8870387960913a714eca89_93229227',
  ),
  'snippets-productlist-page-nav-pages' => 
  array (
    0 => 'Block_207938238360913a714efaf8_40486725',
  ),
  'snippets-productlist-page-nav-last-page' => 
  array (
    0 => 'Block_2532834660913a714f8885_76488771',
  ),
  'snippets-productlist-page-nav-hr-bottom' => 
  array (
    0 => 'Block_105770348660913a71501dc5_27879449',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['Suchergebnisse']->value->getProductCount() > 0) {?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>('opc_before_page_nav_').($_smarty_tpl->tpl_vars['navid']->value)),$_smarty_tpl ) );?>


        <?php if ((($tmp = $_smarty_tpl->tpl_vars['hrTop']->value ?? null)===null||$tmp==='' ? false : $tmp) === true) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_159130908060913a714a8dd5_83486378', 'snippets-productlist-page-nav-hr-top', $this->tplIndex);
?>

        <?php }?>
        <?php ob_start();
if ($_smarty_tpl->tpl_vars['navid']->value === 'header') {
echo "productlist-page-nav-header-m";
}
$_prefixVariable16=ob_get_clean();
$_block_plugin37 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin37, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('no-gutters'=>true,'class'=>$_prefixVariable16." productlist-page-nav"));
$_block_repeat=true;
echo $_block_plugin37->render(array('no-gutters'=>true,'class'=>$_prefixVariable16." productlist-page-nav"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php if (count($_smarty_tpl->tpl_vars['NaviFilter']->value->getSearchResults()->getProducts()) > 0 && $_smarty_tpl->tpl_vars['navid']->value === 'header') {?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_210381012560913a714af1d3_55303449', 'snippets-productlist-page-nav-result-options-sort', $this->tplIndex);
?>

            <?php }?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_104217487360913a714da133_20217069', 'snippets-productlist-page-nav-current-page-count', $this->tplIndex);
?>

            <?php if ($_smarty_tpl->tpl_vars['Suchergebnisse']->value->getPages()->getMaxPage() > 1 && !($_smarty_tpl->tpl_vars['isMobile']->value && $_smarty_tpl->tpl_vars['navid']->value === 'header')) {?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_46125868360913a714e4ff6_23538208', 'snippets-productlist-page-nav-page-nav', $this->tplIndex);
?>

            <?php }?>
        <?php $_block_repeat=false;
echo $_block_plugin37->render(array('no-gutters'=>true,'class'=>$_prefixVariable16." productlist-page-nav"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_105770348660913a71501dc5_27879449', 'snippets-productlist-page-nav-hr-bottom', $this->tplIndex);
?>

    <?php }
}
}
/* {/block 'snippets-productlist-page-nav'} */
}
