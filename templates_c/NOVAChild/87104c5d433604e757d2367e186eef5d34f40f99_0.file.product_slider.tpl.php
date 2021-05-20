<?php
/* Smarty version 3.1.38, created on 2021-05-19 17:12:55
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVAChild\snippets\product_slider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a52af750b6f7_47921181',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87104c5d433604e757d2367e186eef5d34f40f99' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVAChild\\snippets\\product_slider.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/slider_items.tpl' => 2,
  ),
),false)) {
function content_60a52af750b6f7_47921181 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_200461117760a52af7426dc9_78017124', 'snippets-product-slider');
?>

<?php }
/* {block 'snippets-product-slider-box-title'} */
class Block_61605480160a52af7480245_81995899 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="productlist-filter-headline"><?php echo $_smarty_tpl->tpl_vars['title']->value;
if (!empty($_smarty_tpl->tpl_vars['moreLink']->value)) {
$_block_plugin6 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin6, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('class'=>"more float-right",'href'=>$_smarty_tpl->tpl_vars['moreLink']->value,'title'=>$_smarty_tpl->tpl_vars['moreTitle']->value,'data-toggle'=>"tooltip",'data'=>array("placement"=>"auto right"),'aria'=>array("label"=>((string)$_smarty_tpl->tpl_vars['moreTitle']->value))));
$_block_repeat=true;
echo $_block_plugin6->render(array('class'=>"more float-right",'href'=>$_smarty_tpl->tpl_vars['moreLink']->value,'title'=>$_smarty_tpl->tpl_vars['moreTitle']->value,'data-toggle'=>"tooltip",'data'=>array("placement"=>"auto right"),'aria'=>array("label"=>((string)$_smarty_tpl->tpl_vars['moreTitle']->value))), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><i class="fa fa-arrow-circle-right"></i><?php $_block_repeat=false;
echo $_block_plugin6->render(array('class'=>"more float-right",'href'=>$_smarty_tpl->tpl_vars['moreLink']->value,'title'=>$_smarty_tpl->tpl_vars['moreTitle']->value,'data-toggle'=>"tooltip",'data'=>array("placement"=>"auto right"),'aria'=>array("label"=>((string)$_smarty_tpl->tpl_vars['moreTitle']->value))), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?></div><?php
}
}
/* {/block 'snippets-product-slider-box-title'} */
/* {block 'product-box-slider-class'} */
class Block_192580308860a52af74e1450_41267703 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
box-slider<?php
}
}
/* {/block 'product-box-slider-class'} */
/* {block 'snippets-product-slider-box-products'} */
class Block_136160732460a52af74e0880_42760548 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="slick-slider-mb slick-smooth-loading carousel carousel-arrows-inside slick-lazy slick-type-box" data-slick-type="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_192580308860a52af74e1450_41267703', 'product-box-slider-class', $this->tplIndex);
?>
"><?php $_smarty_tpl->_subTemplateRender('file:snippets/slider_items.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->tpl_vars['productlist']->value,'type'=>'product'), 0, false);
?></div><?php
}
}
/* {/block 'snippets-product-slider-box-products'} */
/* {block 'snippets-product-slider-box'} */
class Block_109173736860a52af742f381_20112561 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
ob_start();
if ($_smarty_tpl->tpl_vars['tplscope']->value === 'box') {
echo " box box-slider";
}
$_prefixVariable2=ob_get_clean();
ob_start();
if ((isset($_smarty_tpl->tpl_vars['class']->value)) && strlen($_smarty_tpl->tpl_vars['class']->value) > 0) {
echo " ";
echo (string)$_smarty_tpl->tpl_vars['class']->value;
}
$_prefixVariable3=ob_get_clean();
ob_start();
if ((isset($_smarty_tpl->tpl_vars['id']->value)) && strlen($_smarty_tpl->tpl_vars['id']->value) > 0) {
echo (string)$_smarty_tpl->tpl_vars['id']->value;
}
$_prefixVariable4=ob_get_clean();
$_block_plugin5 = isset($_smarty_tpl->smarty->registered_plugins['block']['card'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['card'][0][0] : null;
if (!is_callable(array($_block_plugin5, 'render'))) {
throw new SmartyException('block tag \'card\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('card', array('class'=>$_prefixVariable2.$_prefixVariable3,'id'=>$_prefixVariable4));
$_block_repeat=true;
echo $_block_plugin5->render(array('class'=>$_prefixVariable2.$_prefixVariable3,'id'=>$_prefixVariable4), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if (!empty($_smarty_tpl->tpl_vars['title']->value)) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_61605480160a52af7480245_81995899', 'snippets-product-slider-box-title', $this->tplIndex);
}
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136160732460a52af74e0880_42760548', 'snippets-product-slider-box-products', $this->tplIndex);
$_block_repeat=false;
echo $_block_plugin5->render(array('class'=>$_prefixVariable2.$_prefixVariable3,'id'=>$_prefixVariable4), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'snippets-product-slider-box'} */
/* {block 'snippets-product-slider-other-title'} */
class Block_163659521760a52af74ef333_37176698 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ((($tmp = $_smarty_tpl->tpl_vars['titleContainer']->value ?? null)===null||$tmp==='' ? false : $tmp)) {?><div class="container slick-slider-other-container"><?php }?><div class="hr-sect h2"><?php if (!empty($_smarty_tpl->tpl_vars['moreLink']->value)) {
$_block_plugin7 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin7, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('class'=>"text-decoration-none-util",'href'=>$_smarty_tpl->tpl_vars['moreLink']->value,'title'=>$_smarty_tpl->tpl_vars['moreTitle']->value,'data-toggle'=>"tooltip",'data'=>array("placement"=>"auto right"),'aria'=>array("label"=>$_smarty_tpl->tpl_vars['moreTitle']->value)));
$_block_repeat=true;
echo $_block_plugin7->render(array('class'=>"text-decoration-none-util",'href'=>$_smarty_tpl->tpl_vars['moreLink']->value,'title'=>$_smarty_tpl->tpl_vars['moreTitle']->value,'data-toggle'=>"tooltip",'data'=>array("placement"=>"auto right"),'aria'=>array("label"=>$_smarty_tpl->tpl_vars['moreTitle']->value)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['title']->value;
$_block_repeat=false;
echo $_block_plugin7->render(array('class'=>"text-decoration-none-util",'href'=>$_smarty_tpl->tpl_vars['moreLink']->value,'title'=>$_smarty_tpl->tpl_vars['moreTitle']->value,'data-toggle'=>"tooltip",'data'=>array("placement"=>"auto right"),'aria'=>array("label"=>$_smarty_tpl->tpl_vars['moreTitle']->value)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
} else {
echo $_smarty_tpl->tpl_vars['title']->value;
}?></div><?php if ((($tmp = $_smarty_tpl->tpl_vars['titleContainer']->value ?? null)===null||$tmp==='' ? false : $tmp)) {?></div><?php }
}
}
/* {/block 'snippets-product-slider-other-title'} */
/* {block 'product-slider-class'} */
class Block_109199438660a52af7500848_98213463 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'product-slider-class'} */
/* {block 'snippets-product-slider-other-products'} */
class Block_68135902660a52af74fb005_83280230 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
ob_start();
if ($_smarty_tpl->tpl_vars['tplscope']->value === 'half') {
echo "slick-type-half";
} else {
echo "slick-type-product";
}
$_prefixVariable5=ob_get_clean();
ob_start();
if ($_smarty_tpl->tpl_vars['tplscope']->value === 'half') {
echo "slider-half";
} else {
echo "product-slider";
}
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_109199438660a52af7500848_98213463', 'product-slider-class', $this->tplIndex);
$_prefixVariable6=ob_get_clean();
$_block_plugin8 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin8, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('class'=>"slick-lazy slick-smooth-loading carousel carousel-arrows-inside ".$_prefixVariable5,'data'=>array("slick-type"=>$_prefixVariable6)));
$_block_repeat=true;
echo $_block_plugin8->render(array('class'=>"slick-lazy slick-smooth-loading carousel carousel-arrows-inside ".$_prefixVariable5,'data'=>array("slick-type"=>$_prefixVariable6)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->_subTemplateRender('file:snippets/slider_items.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->tpl_vars['productlist']->value,'type'=>'product'), 0, true);
$_block_repeat=false;
echo $_block_plugin8->render(array('class'=>"slick-lazy slick-smooth-loading carousel carousel-arrows-inside ".$_prefixVariable5,'data'=>array("slick-type"=>$_prefixVariable6)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'snippets-product-slider-other-products'} */
/* {block 'snippets-product-slider-other'} */
class Block_195371548360a52af74e71d4_76666950 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="slick-slider-other<?php if (!$_smarty_tpl->tpl_vars['isOPC']->value) {?> is-not-opc<?php }
if ((isset($_smarty_tpl->tpl_vars['class']->value)) && strlen($_smarty_tpl->tpl_vars['class']->value) > 0) {?> <?php echo $_smarty_tpl->tpl_vars['class']->value;
}?>"<?php if ((isset($_smarty_tpl->tpl_vars['id']->value)) && strlen($_smarty_tpl->tpl_vars['id']->value) > 0) {?> id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"<?php }?>><?php if (!empty($_smarty_tpl->tpl_vars['title']->value)) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_163659521760a52af74ef333_37176698', 'snippets-product-slider-other-title', $this->tplIndex);
}
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_68135902660a52af74fb005_83280230', 'snippets-product-slider-other-products', $this->tplIndex);
?>
</div><?php
}
}
/* {/block 'snippets-product-slider-other'} */
/* {block 'snippets-product-slider'} */
class Block_200461117760a52af7426dc9_78017124 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-product-slider' => 
  array (
    0 => 'Block_200461117760a52af7426dc9_78017124',
  ),
  'snippets-product-slider-box' => 
  array (
    0 => 'Block_109173736860a52af742f381_20112561',
  ),
  'snippets-product-slider-box-title' => 
  array (
    0 => 'Block_61605480160a52af7480245_81995899',
  ),
  'snippets-product-slider-box-products' => 
  array (
    0 => 'Block_136160732460a52af74e0880_42760548',
  ),
  'product-box-slider-class' => 
  array (
    0 => 'Block_192580308860a52af74e1450_41267703',
  ),
  'snippets-product-slider-other' => 
  array (
    0 => 'Block_195371548360a52af74e71d4_76666950',
  ),
  'snippets-product-slider-other-title' => 
  array (
    0 => 'Block_163659521760a52af74ef333_37176698',
  ),
  'snippets-product-slider-other-products' => 
  array (
    0 => 'Block_68135902660a52af74fb005_83280230',
  ),
  'product-slider-class' => 
  array (
    0 => 'Block_109199438660a52af7500848_98213463',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_assignInScope('isOPC', (($tmp = $_smarty_tpl->tpl_vars['isOPC']->value ?? null)===null||$tmp==='' ? false : $tmp));
if (count($_smarty_tpl->tpl_vars['productlist']->value) > 0) {
if (!(isset($_smarty_tpl->tpl_vars['tplscope']->value))) {
$_smarty_tpl->_assignInScope('tplscope', 'slider');
}
if ($_smarty_tpl->tpl_vars['tplscope']->value === 'box') {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_109173736860a52af742f381_20112561', 'snippets-product-slider-box', $this->tplIndex);
} else {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_195371548360a52af74e71d4_76666950', 'snippets-product-slider-other', $this->tplIndex);
}
}
}
}
/* {/block 'snippets-product-slider'} */
}
