<?php
/* Smarty version 3.1.38, created on 2021-05-19 15:00:17
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\productlist\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a50be1b6b6a6_26462431',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25e7c87e0a6efbce29295c9bdf76309b2575e1e8' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\productlist\\index.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/header.tpl' => 1,
    'file:productlist/header.tpl' => 1,
    'file:snippets/product_slider.tpl' => 1,
    'file:productlist/item_list.tpl' => 1,
    'file:productlist/item_box.tpl' => 1,
    'file:productlist/footer.tpl' => 1,
    'file:layout/footer.tpl' => 1,
  ),
),false)) {
function content_60a50be1b6b6a6_26462431 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_183951954660a50be1b058d0_55739444', 'productlist-index');
?>

<?php }
/* {block 'productlist-index-include-header'} */
class Block_179795096460a50be1b0adb9_36170088 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if (!(isset($_smarty_tpl->tpl_vars['bAjaxRequest']->value)) || !$_smarty_tpl->tpl_vars['bAjaxRequest']->value) {?>
            <?php $_smarty_tpl->_subTemplateRender('file:layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>
    <?php
}
}
/* {/block 'productlist-index-include-header'} */
/* {block 'productlist-index-include-productlist-header'} */
class Block_152231970860a50be1b11e47_56145739 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:productlist/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php
}
}
/* {/block 'productlist-index-include-productlist-header'} */
/* {block 'productlist-index-alert'} */
class Block_84118568160a50be1b34b77_23953469 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_block_plugin49 = isset($_smarty_tpl->smarty->registered_plugins['block']['alert'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['alert'][0][0] : null;
if (!is_callable(array($_block_plugin49, 'render'))) {
throw new SmartyException('block tag \'alert\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('alert', array('variant'=>"danger"));
$_block_repeat=true;
echo $_block_plugin49->render(array('variant'=>"danger"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['Suchergebnisse']->value->getError();
$_block_repeat=false;
echo $_block_plugin49->render(array('variant'=>"danger"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php
}
}
/* {/block 'productlist-index-alert'} */
/* {block 'productlist-index-include-product-slider'} */
class Block_153263978160a50be1b3d076_31689627 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_bestseller'),$_smarty_tpl ) );?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'bestseller','section'=>'global','assign'=>'slidertitle'),$_smarty_tpl ) );?>

                    <?php $_smarty_tpl->_subTemplateRender('file:snippets/product_slider.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>'slider-top-products','productlist'=>$_smarty_tpl->tpl_vars['oBestseller_arr']->value,'title'=>$_smarty_tpl->tpl_vars['slidertitle']->value), 0, false);
?>
                <?php
}
}
/* {/block 'productlist-index-include-product-slider'} */
/* {block 'productlist-index-include-item-list'} */
class Block_169095424760a50be1b5c938_12079341 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_smarty_tpl->_subTemplateRender('file:productlist/item_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tplscope'=>$_smarty_tpl->tpl_vars['style']->value), 0, true);
?>
                                <?php
}
}
/* {/block 'productlist-index-include-item-list'} */
/* {block 'productlist-index-include-item-box'} */
class Block_72839658860a50be1b602d1_01506949 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_smarty_tpl->_subTemplateRender('file:productlist/item_box.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tplscope'=>$_smarty_tpl->tpl_vars['style']->value), 0, true);
?>
                                <?php
}
}
/* {/block 'productlist-index-include-item-box'} */
/* {block 'productlist-index-products'} */
class Block_87116435860a50be1b41f95_95806440 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if (count($_smarty_tpl->tpl_vars['Suchergebnisse']->value->getProducts()) > 0) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_products'),$_smarty_tpl ) );?>

                <?php $_block_plugin50 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin50, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('class'=>"product-list layout-".((string)$_smarty_tpl->tpl_vars['style']->value),'id'=>"product-list",'itemprop'=>"mainEntity",'itemscope'=>true,'itemtype'=>"http://schema.org/ItemList"));
$_block_repeat=true;
echo $_block_plugin50->render(array('class'=>"product-list layout-".((string)$_smarty_tpl->tpl_vars['style']->value),'id'=>"product-list",'itemprop'=>"mainEntity",'itemscope'=>true,'itemtype'=>"http://schema.org/ItemList"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Suchergebnisse']->value->getProducts(), 'Artikel');
$_smarty_tpl->tpl_vars['Artikel']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Artikel']->value) {
$_smarty_tpl->tpl_vars['Artikel']->do_else = false;
?>
                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['grid']->value;
$_prefixVariable17 = ob_get_clean();
ob_start();
if ((isset($_smarty_tpl->tpl_vars['gridmd']->value))) {
echo (string)$_smarty_tpl->tpl_vars['gridmd']->value;
}
$_prefixVariable18=ob_get_clean();
ob_start();
if ((isset($_smarty_tpl->tpl_vars['gridsm']->value))) {
echo (string)$_smarty_tpl->tpl_vars['gridsm']->value;
}
$_prefixVariable19=ob_get_clean();
ob_start();
if ((isset($_smarty_tpl->tpl_vars['gridxl']->value))) {
echo (string)$_smarty_tpl->tpl_vars['gridxl']->value;
}
$_prefixVariable20=ob_get_clean();
$_block_plugin51 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin51, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>$_prefixVariable17,'md'=>$_prefixVariable18,'sm'=>$_prefixVariable19,'xl'=>$_prefixVariable20,'class'=>"product-wrapper",'itemprop'=>"itemListElement",'itemscope'=>true,'itemtype'=>"http://schema.org/Product"));
$_block_repeat=true;
echo $_block_plugin51->render(array('cols'=>$_prefixVariable17,'md'=>$_prefixVariable18,'sm'=>$_prefixVariable19,'xl'=>$_prefixVariable20,'class'=>"product-wrapper",'itemprop'=>"itemListElement",'itemscope'=>true,'itemtype'=>"http://schema.org/Product"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php if ($_smarty_tpl->tpl_vars['style']->value === 'list' && !$_smarty_tpl->tpl_vars['isMobile']->value) {?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169095424760a50be1b5c938_12079341', 'productlist-index-include-item-list', $this->tplIndex);
?>

                            <?php } else { ?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_72839658860a50be1b602d1_01506949', 'productlist-index-include-item-box', $this->tplIndex);
?>

                            <?php }?>
                        <?php $_block_repeat=false;
echo $_block_plugin51->render(array('cols'=>$_prefixVariable17,'md'=>$_prefixVariable18,'sm'=>$_prefixVariable19,'xl'=>$_prefixVariable20,'class'=>"product-wrapper",'itemprop'=>"itemListElement",'itemscope'=>true,'itemtype'=>"http://schema.org/Product"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php $_block_repeat=false;
echo $_block_plugin50->render(array('class'=>"product-list layout-".((string)$_smarty_tpl->tpl_vars['style']->value),'id'=>"product-list",'itemprop'=>"mainEntity",'itemscope'=>true,'itemtype'=>"http://schema.org/ItemList"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php }?>
            <?php
}
}
/* {/block 'productlist-index-products'} */
/* {block 'productlist-index-include-productlist-footer'} */
class Block_96686310460a50be1b649e2_53254268 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:productlist/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php
}
}
/* {/block 'productlist-index-include-productlist-footer'} */
/* {block 'productlist-index-content'} */
class Block_75585620360a50be1b11259_88348260 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div id="result-wrapper" data-wrapper="true">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_152231970860a50be1b11e47_56145739', 'productlist-index-include-productlist-header', $this->tplIndex);
?>

                        <?php if ((!empty($_smarty_tpl->tpl_vars['AktuelleKategorie']->value->categoryFunctionAttributes['darstellung']) && $_smarty_tpl->tpl_vars['AktuelleKategorie']->value->categoryFunctionAttributes['darstellung'] == 1) || (empty($_smarty_tpl->tpl_vars['AktuelleKategorie']->value->categoryFunctionAttributes['darstellung']) && ((!empty($_smarty_tpl->tpl_vars['oErweiterteDarstellung']->value->nDarstellung) && $_smarty_tpl->tpl_vars['oErweiterteDarstellung']->value->nDarstellung == 1) || (empty($_smarty_tpl->tpl_vars['oErweiterteDarstellung']->value->nDarstellung) && (isset($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeluebersicht']['artikeluebersicht_erw_darstellung_stdansicht'])) && $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeluebersicht']['artikeluebersicht_erw_darstellung_stdansicht'] == 1)))) {?>
                <?php $_smarty_tpl->_assignInScope('style', 'list');?>
                <?php $_smarty_tpl->_assignInScope('grid', '6');?>
                <?php $_smarty_tpl->_assignInScope('gridmd', '12');?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('style', 'gallery');?>
                <?php $_smarty_tpl->_assignInScope('grid', '6');?>
                <?php $_smarty_tpl->_assignInScope('gridsm', '6');?>
                <?php $_smarty_tpl->_assignInScope('gridmd', '4');?>
                <?php $_smarty_tpl->_assignInScope('gridxl', '3');?>
                <?php if (!$_smarty_tpl->tpl_vars['bExclusive']->value || empty($_smarty_tpl->tpl_vars['boxes']->value['left'])) {?>
                    <?php $_smarty_tpl->_assignInScope('gridmd', '4');?>
                <?php }?>
            <?php }?>

            <?php if (!empty($_smarty_tpl->tpl_vars['Suchergebnisse']->value->getError())) {?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_84118568160a50be1b34b77_23953469', 'productlist-index-alert', $this->tplIndex);
?>

            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['oBestseller_arr']->value)) && count($_smarty_tpl->tpl_vars['oBestseller_arr']->value) > 0) {?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_153263978160a50be1b3d076_31689627', 'productlist-index-include-product-slider', $this->tplIndex);
?>

            <?php }?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_87116435860a50be1b41f95_95806440', 'productlist-index-products', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_96686310460a50be1b649e2_53254268', 'productlist-index-include-productlist-footer', $this->tplIndex);
?>

        </div>
    <?php
}
}
/* {/block 'productlist-index-content'} */
/* {block 'productlist-index-include-footer'} */
class Block_66344776660a50be1b67422_53927932 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if (!(isset($_smarty_tpl->tpl_vars['bAjaxRequest']->value)) || !$_smarty_tpl->tpl_vars['bAjaxRequest']->value) {?>
            <?php $_smarty_tpl->_subTemplateRender('file:layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>
    <?php
}
}
/* {/block 'productlist-index-include-footer'} */
/* {block 'productlist-index'} */
class Block_183951954660a50be1b058d0_55739444 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'productlist-index' => 
  array (
    0 => 'Block_183951954660a50be1b058d0_55739444',
  ),
  'productlist-index-include-header' => 
  array (
    0 => 'Block_179795096460a50be1b0adb9_36170088',
  ),
  'productlist-index-content' => 
  array (
    0 => 'Block_75585620360a50be1b11259_88348260',
  ),
  'productlist-index-include-productlist-header' => 
  array (
    0 => 'Block_152231970860a50be1b11e47_56145739',
  ),
  'productlist-index-alert' => 
  array (
    0 => 'Block_84118568160a50be1b34b77_23953469',
  ),
  'productlist-index-include-product-slider' => 
  array (
    0 => 'Block_153263978160a50be1b3d076_31689627',
  ),
  'productlist-index-products' => 
  array (
    0 => 'Block_87116435860a50be1b41f95_95806440',
  ),
  'productlist-index-include-item-list' => 
  array (
    0 => 'Block_169095424760a50be1b5c938_12079341',
  ),
  'productlist-index-include-item-box' => 
  array (
    0 => 'Block_72839658860a50be1b602d1_01506949',
  ),
  'productlist-index-include-productlist-footer' => 
  array (
    0 => 'Block_96686310460a50be1b649e2_53254268',
  ),
  'productlist-index-include-footer' => 
  array (
    0 => 'Block_66344776660a50be1b67422_53927932',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_179795096460a50be1b0adb9_36170088', 'productlist-index-include-header', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_75585620360a50be1b11259_88348260', 'productlist-index-content', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_66344776660a50be1b67422_53927932', 'productlist-index-include-footer', $this->tplIndex);
?>

<?php
}
}
/* {/block 'productlist-index'} */
}
