<?php
/* Smarty version 3.1.38, created on 2021-05-20 16:12:50
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVAChild\page\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a66e62b8eee3_85774231',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7286b8f27fdab509a1a4f0cb36e4c721bdfe4dfb' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVAChild\\page\\index.tpl',
      1 => 1621519954,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:selectionwizard/index.tpl' => 1,
    'file:customs/gallery.tpl' => 2,
    'file:snippets/product_slider.tpl' => 1,
    'file:snippets/slider_items.tpl' => 1,
  ),
),false)) {
function content_60a66e62b8eee3_85774231 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_37055706260a66e628cd989_99149800', 'page-index');
?>

    <?php $_smarty_tpl->_subTemplateRender("file:customs/gallery.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
/* {block 'page-index-include-selection-wizard'} */
class Block_130593312460a66e628d3ce9_63478877 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:selectionwizard/index.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'page-index-include-selection-wizard'} */
/* {block 'page-index-include-product-slider'} */
class Block_102117267860a66e62b4ee95_51866959 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array('class'=>"product-slider-wrapper",'fluid'=>true));
$_block_repeat=true;
echo $_block_plugin1->render(array('class'=>"product-slider-wrapper",'fluid'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php $_smarty_tpl->_subTemplateRender('file:snippets/product_slider.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('productlist'=>$_smarty_tpl->tpl_vars['Box']->value->Artikel->elemente,'title'=>$_smarty_tpl->tpl_vars['title']->value,'hideOverlays'=>true,'moreLink'=>$_smarty_tpl->tpl_vars['moreLink']->value,'moreTitle'=>$_smarty_tpl->tpl_vars['moreTitle']->value,'titleContainer'=>true), 0, true);
?>
                        <?php $_block_repeat=false;
echo $_block_plugin1->render(array('class'=>"product-slider-wrapper",'fluid'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php
}
}
/* {/block 'page-index-include-product-slider'} */
/* {block 'page-index-boxes'} */
class Block_2510163460a66e62a8b612_29169417 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['StartseiteBoxen']->value, 'Box');
$_smarty_tpl->tpl_vars['Box']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Box']->value) {
$_smarty_tpl->tpl_vars['Box']->do_else = false;
?>
                <?php if ((isset($_smarty_tpl->tpl_vars['Box']->value->Artikel->elemente)) && count($_smarty_tpl->tpl_vars['Box']->value->Artikel->elemente) > 0 && (isset($_smarty_tpl->tpl_vars['Box']->value->cURL))) {?>
                    <?php if ($_smarty_tpl->tpl_vars['Box']->value->name === 'TopAngebot') {?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'topOffer','assign'=>'title'),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'showAllTopOffers','assign'=>'moreTitle'),$_smarty_tpl ) );?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['Box']->value->name === 'Sonderangebote') {?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'specialOffer','assign'=>'title'),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'showAllSpecialOffers','assign'=>'moreTitle'),$_smarty_tpl ) );?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['Box']->value->name === 'NeuImSortiment') {?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'newProducts','assign'=>'title'),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'showAllNewProducts','assign'=>'moreTitle'),$_smarty_tpl ) );?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['Box']->value->name === 'Bestseller') {?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'bestsellers','assign'=>'title'),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'showAllBestsellers','assign'=>'moreTitle'),$_smarty_tpl ) );?>

                    <?php }?>
                    <?php $_smarty_tpl->_assignInScope('moreLink', $_smarty_tpl->tpl_vars['Box']->value->cURL);?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_102117267860a66e62b4ee95_51866959', 'page-index-include-product-slider', $this->tplIndex);
?>

                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php
}
}
/* {/block 'page-index-boxes'} */
/* {block 'page-index-subheading-news'} */
class Block_168221085460a66e62b6a883_22002165 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div class="blog-header">
                            <div class="hr-sect h2">
                                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'news.php'),$_smarty_tpl ) );
$_prefixVariable1=ob_get_clean();
$_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_prefixVariable1));
$_block_repeat=true;
echo $_block_plugin3->render(array('href'=>$_prefixVariable1), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'news','section'=>'news'),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin3->render(array('href'=>$_prefixVariable1), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            </div>
                        </div>
                    <?php
}
}
/* {/block 'page-index-subheading-news'} */
/* {block 'page-index-news'} */
class Block_193441650760a66e62b7e8e9_25701035 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('itemprop'=>"about",'itemscope'=>true,'itemtype'=>"http://schema.org/Blog",'class'=>"slick-smooth-loading carousel carousel-arrows-inside slick-lazy slick-type-news",'data'=>array("slick-type"=>"news-slider")));
$_block_repeat=true;
echo $_block_plugin4->render(array('itemprop'=>"about",'itemscope'=>true,'itemtype'=>"http://schema.org/Blog",'class'=>"slick-smooth-loading carousel carousel-arrows-inside slick-lazy slick-type-news",'data'=>array("slick-type"=>"news-slider")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php $_smarty_tpl->_subTemplateRender('file:snippets/slider_items.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->tpl_vars['oNews_arr']->value,'type'=>'news'), 0, false);
?>
                        <?php $_block_repeat=false;
echo $_block_plugin4->render(array('itemprop'=>"about",'itemscope'=>true,'itemtype'=>"http://schema.org/Blog",'class'=>"slick-smooth-loading carousel carousel-arrows-inside slick-lazy slick-type-news",'data'=>array("slick-type"=>"news-slider")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php
}
}
/* {/block 'page-index-news'} */
/* {block 'page-index-additional-content'} */
class Block_177665906860a66e62b62537_81876979 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ((isset($_smarty_tpl->tpl_vars['oNews_arr']->value)) && count($_smarty_tpl->tpl_vars['oNews_arr']->value) > 0) {?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_news','inContainer'=>false),$_smarty_tpl ) );?>


            <section class="index-news-wrapper">
                <?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array('fluid'=>true));
$_block_repeat=true;
echo $_block_plugin2->render(array('fluid'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_168221085460a66e62b6a883_22002165', 'page-index-subheading-news', $this->tplIndex);
?>

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_193441650760a66e62b7e8e9_25701035', 'page-index-news', $this->tplIndex);
?>

                <?php $_block_repeat=false;
echo $_block_plugin2->render(array('fluid'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            </section>
        <?php }?>
    <?php
}
}
/* {/block 'page-index-additional-content'} */
/* {block 'page-index'} */
class Block_37055706260a66e628cd989_99149800 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page-index' => 
  array (
    0 => 'Block_37055706260a66e628cd989_99149800',
  ),
  'page-index-include-selection-wizard' => 
  array (
    0 => 'Block_130593312460a66e628d3ce9_63478877',
  ),
  'page-index-boxes' => 
  array (
    0 => 'Block_2510163460a66e62a8b612_29169417',
  ),
  'page-index-include-product-slider' => 
  array (
    0 => 'Block_102117267860a66e62b4ee95_51866959',
  ),
  'page-index-additional-content' => 
  array (
    0 => 'Block_177665906860a66e62b62537_81876979',
  ),
  'page-index-subheading-news' => 
  array (
    0 => 'Block_168221085460a66e62b6a883_22002165',
  ),
  'page-index-news' => 
  array (
    0 => 'Block_193441650760a66e62b7e8e9_25701035',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_130593312460a66e628d3ce9_63478877', 'page-index-include-selection-wizard', $this->tplIndex);
?>


        <?php $_smarty_tpl->_subTemplateRender("file:customs/gallery.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
       <?php if ((isset($_smarty_tpl->tpl_vars['StartseiteBoxen']->value)) && count($_smarty_tpl->tpl_vars['StartseiteBoxen']->value) > 0) {?>
        <?php $_smarty_tpl->_assignInScope('moreLink', null);?>
        <?php $_smarty_tpl->_assignInScope('moreTitle', null);?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_boxes','inContainer'=>false),$_smarty_tpl ) );?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2510163460a66e62a8b612_29169417', 'page-index-boxes', $this->tplIndex);
?>

    <?php }?>
  
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_177665906860a66e62b62537_81876979', 'page-index-additional-content', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page-index'} */
}
