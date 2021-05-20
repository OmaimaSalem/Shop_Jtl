<?php
/* Smarty version 3.1.38, created on 2021-05-18 11:16:42
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\snippets\product_slider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a385fadc19c4_97679500',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36eddec674caf8cc8000f2fd6c4f678dc9788336' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\snippets\\product_slider.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/slider_items.tpl' => 2,
  ),
),false)) {
function content_60a385fadc19c4_97679500 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_204836409760a385fad7efc1_07348407', 'snippets-product-slider');
?>

<?php }
/* {block 'snippets-product-slider-box-title'} */
class Block_105005745160a385fad93e65_35654647 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="productlist-filter-headline"><?php echo $_smarty_tpl->tpl_vars['title']->value;
if (!empty($_smarty_tpl->tpl_vars['moreLink']->value)) {
$_block_plugin103 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin103, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('class'=>"more float-right",'href'=>$_smarty_tpl->tpl_vars['moreLink']->value,'title'=>$_smarty_tpl->tpl_vars['moreTitle']->value,'data-toggle'=>"tooltip",'data'=>array("placement"=>"auto right"),'aria'=>array("label"=>((string)$_smarty_tpl->tpl_vars['moreTitle']->value))));
$_block_repeat=true;
echo $_block_plugin103->render(array('class'=>"more float-right",'href'=>$_smarty_tpl->tpl_vars['moreLink']->value,'title'=>$_smarty_tpl->tpl_vars['moreTitle']->value,'data-toggle'=>"tooltip",'data'=>array("placement"=>"auto right"),'aria'=>array("label"=>((string)$_smarty_tpl->tpl_vars['moreTitle']->value))), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><i class="fa fa-arrow-circle-right"></i><?php $_block_repeat=false;
echo $_block_plugin103->render(array('class'=>"more float-right",'href'=>$_smarty_tpl->tpl_vars['moreLink']->value,'title'=>$_smarty_tpl->tpl_vars['moreTitle']->value,'data-toggle'=>"tooltip",'data'=>array("placement"=>"auto right"),'aria'=>array("label"=>((string)$_smarty_tpl->tpl_vars['moreTitle']->value))), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?></div><?php
}
}
/* {/block 'snippets-product-slider-box-title'} */
/* {block 'product-box-slider-class'} */
class Block_177727359960a385fad9cf74_66028624 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
box-slider<?php
}
}
/* {/block 'product-box-slider-class'} */
/* {block 'snippets-product-slider-box-products'} */
class Block_208373526160a385fad9c489_32456026 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="slick-slider-mb slick-smooth-loading carousel carousel-arrows-inside slick-lazy slick-type-box" data-slick-type="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_177727359960a385fad9cf74_66028624', 'product-box-slider-class', $this->tplIndex);
?>
"><?php $_smarty_tpl->_subTemplateRender('file:snippets/slider_items.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->tpl_vars['productlist']->value,'type'=>'product'), 0, false);
?></div><?php
}
}
/* {/block 'snippets-product-slider-box-products'} */
/* {block 'snippets-product-slider-box'} */
class Block_11201948860a385fad86fc6_40924082 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
ob_start();
if ($_smarty_tpl->tpl_vars['tplscope']->value === 'box') {
echo " box box-slider";
}
$_prefixVariable59=ob_get_clean();
ob_start();
if ((isset($_smarty_tpl->tpl_vars['class']->value)) && strlen($_smarty_tpl->tpl_vars['class']->value) > 0) {
echo " ";
echo (string)$_smarty_tpl->tpl_vars['class']->value;
}
$_prefixVariable60=ob_get_clean();
ob_start();
if ((isset($_smarty_tpl->tpl_vars['id']->value)) && strlen($_smarty_tpl->tpl_vars['id']->value) > 0) {
echo (string)$_smarty_tpl->tpl_vars['id']->value;
}
$_prefixVariable61=ob_get_clean();
$_block_plugin102 = isset($_smarty_tpl->smarty->registered_plugins['block']['card'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['card'][0][0] : null;
if (!is_callable(array($_block_plugin102, 'render'))) {
throw new SmartyException('block tag \'card\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('card', array('class'=>$_prefixVariable59.$_prefixVariable60,'id'=>$_prefixVariable61));
$_block_repeat=true;
echo $_block_plugin102->render(array('class'=>$_prefixVariable59.$_prefixVariable60,'id'=>$_prefixVariable61), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if (!empty($_smarty_tpl->tpl_vars['title']->value)) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_105005745160a385fad93e65_35654647', 'snippets-product-slider-box-title', $this->tplIndex);
}
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_208373526160a385fad9c489_32456026', 'snippets-product-slider-box-products', $this->tplIndex);
$_block_repeat=false;
echo $_block_plugin102->render(array('class'=>$_prefixVariable59.$_prefixVariable60,'id'=>$_prefixVariable61), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'snippets-product-slider-box'} */
/* {block 'snippets-product-slider-other-title'} */
class Block_62902814960a385fada9bd1_24697026 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ((($tmp = $_smarty_tpl->tpl_vars['titleContainer']->value ?? null)===null||$tmp==='' ? false : $tmp)) {?><div class="container slick-slider-other-container"><?php }?><div class="hr-sect h2"><?php if (!empty($_smarty_tpl->tpl_vars['moreLink']->value)) {
$_block_plugin104 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin104, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('class'=>"text-decoration-none-util",'href'=>$_smarty_tpl->tpl_vars['moreLink']->value,'title'=>$_smarty_tpl->tpl_vars['moreTitle']->value,'data-toggle'=>"tooltip",'data'=>array("placement"=>"auto right"),'aria'=>array("label"=>$_smarty_tpl->tpl_vars['moreTitle']->value)));
$_block_repeat=true;
echo $_block_plugin104->render(array('class'=>"text-decoration-none-util",'href'=>$_smarty_tpl->tpl_vars['moreLink']->value,'title'=>$_smarty_tpl->tpl_vars['moreTitle']->value,'data-toggle'=>"tooltip",'data'=>array("placement"=>"auto right"),'aria'=>array("label"=>$_smarty_tpl->tpl_vars['moreTitle']->value)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['title']->value;
$_block_repeat=false;
echo $_block_plugin104->render(array('class'=>"text-decoration-none-util",'href'=>$_smarty_tpl->tpl_vars['moreLink']->value,'title'=>$_smarty_tpl->tpl_vars['moreTitle']->value,'data-toggle'=>"tooltip",'data'=>array("placement"=>"auto right"),'aria'=>array("label"=>$_smarty_tpl->tpl_vars['moreTitle']->value)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
} else {
echo $_smarty_tpl->tpl_vars['title']->value;
}?></div><?php if ((($tmp = $_smarty_tpl->tpl_vars['titleContainer']->value ?? null)===null||$tmp==='' ? false : $tmp)) {?></div><?php }
}
}
/* {/block 'snippets-product-slider-other-title'} */
/* {block 'product-slider-class'} */
class Block_55287104660a385fadb9c76_78501263 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'product-slider-class'} */
/* {block 'snippets-product-slider-other-products'} */
class Block_104134322660a385fadb6364_26284790 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
ob_start();
if ($_smarty_tpl->tpl_vars['tplscope']->value === 'half') {
echo "slick-type-half";
} else {
echo "slick-type-product";
}
$_prefixVariable62=ob_get_clean();
ob_start();
if ($_smarty_tpl->tpl_vars['tplscope']->value === 'half') {
echo "slider-half";
} else {
echo "product-slider";
}
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_55287104660a385fadb9c76_78501263', 'product-slider-class', $this->tplIndex);
$_prefixVariable63=ob_get_clean();
$_block_plugin105 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin105, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('class'=>"slick-lazy slick-smooth-loading carousel carousel-arrows-inside ".$_prefixVariable62,'data'=>array("slick-type"=>$_prefixVariable63)));
$_block_repeat=true;
echo $_block_plugin105->render(array('class'=>"slick-lazy slick-smooth-loading carousel carousel-arrows-inside ".$_prefixVariable62,'data'=>array("slick-type"=>$_prefixVariable63)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->_subTemplateRender('file:snippets/slider_items.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->tpl_vars['productlist']->value,'type'=>'product'), 0, true);
$_block_repeat=false;
echo $_block_plugin105->render(array('class'=>"slick-lazy slick-smooth-loading carousel carousel-arrows-inside ".$_prefixVariable62,'data'=>array("slick-type"=>$_prefixVariable63)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'snippets-product-slider-other-products'} */
/* {block 'snippets-product-slider-other'} */
class Block_23337460360a385fada0f51_25547232 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="slick-slider-other<?php if (!$_smarty_tpl->tpl_vars['isOPC']->value) {?> is-not-opc<?php }
if ((isset($_smarty_tpl->tpl_vars['class']->value)) && strlen($_smarty_tpl->tpl_vars['class']->value) > 0) {?> <?php echo $_smarty_tpl->tpl_vars['class']->value;
}?>"<?php if ((isset($_smarty_tpl->tpl_vars['id']->value)) && strlen($_smarty_tpl->tpl_vars['id']->value) > 0) {?> id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"<?php }?>><?php if (!empty($_smarty_tpl->tpl_vars['title']->value)) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_62902814960a385fada9bd1_24697026', 'snippets-product-slider-other-title', $this->tplIndex);
}
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_104134322660a385fadb6364_26284790', 'snippets-product-slider-other-products', $this->tplIndex);
?>
</div><?php
}
}
/* {/block 'snippets-product-slider-other'} */
/* {block 'snippets-product-slider'} */
class Block_204836409760a385fad7efc1_07348407 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-product-slider' => 
  array (
    0 => 'Block_204836409760a385fad7efc1_07348407',
  ),
  'snippets-product-slider-box' => 
  array (
    0 => 'Block_11201948860a385fad86fc6_40924082',
  ),
  'snippets-product-slider-box-title' => 
  array (
    0 => 'Block_105005745160a385fad93e65_35654647',
  ),
  'snippets-product-slider-box-products' => 
  array (
    0 => 'Block_208373526160a385fad9c489_32456026',
  ),
  'product-box-slider-class' => 
  array (
    0 => 'Block_177727359960a385fad9cf74_66028624',
  ),
  'snippets-product-slider-other' => 
  array (
    0 => 'Block_23337460360a385fada0f51_25547232',
  ),
  'snippets-product-slider-other-title' => 
  array (
    0 => 'Block_62902814960a385fada9bd1_24697026',
  ),
  'snippets-product-slider-other-products' => 
  array (
    0 => 'Block_104134322660a385fadb6364_26284790',
  ),
  'product-slider-class' => 
  array (
    0 => 'Block_55287104660a385fadb9c76_78501263',
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11201948860a385fad86fc6_40924082', 'snippets-product-slider-box', $this->tplIndex);
} else {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_23337460360a385fada0f51_25547232', 'snippets-product-slider-other', $this->tplIndex);
}
}
}
}
/* {/block 'snippets-product-slider'} */
}
