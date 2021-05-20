<?php
/* Smarty version 3.1.38, created on 2021-05-19 14:59:14
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\snippets\banner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a50ba2a7a8d5_39490788',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38abe91f600d15cbce9bdecf734fd995ebe51798' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\snippets\\banner.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/image.tpl' => 1,
  ),
),false)) {
function content_60a50ba2a7a8d5_39490788 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_119160035660a50ba24ae8d5_36189387', 'snippets-banner');
?>

<?php }
/* {block 'snippets-banner-image'} */
class Block_8944545060a50ba24b4755_38146645 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0], array( array('fluid'=>true,'lazy'=>true,'src'=>$_smarty_tpl->tpl_vars['oImageMap']->value->cBildPfad,'alt'=>$_smarty_tpl->tpl_vars['oImageMap']->value->cTitel),$_smarty_tpl ) );?>

                <?php
}
}
/* {/block 'snippets-banner-image'} */
/* {block 'snippets-banner-map-area-image'} */
class Block_47850759860a50ba2a6f675_56713057 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="snippets-banner-image"><?php if ($_smarty_tpl->tpl_vars['oArtikel']->value !== null) {
$_smarty_tpl->_subTemplateRender('file:snippets/image.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('item'=>$_smarty_tpl->tpl_vars['oArtikel']->value,'square'=>false), 0, true);
}?></div><?php if (strlen($_smarty_tpl->tpl_vars['oImageMapArea']->value->cBeschreibung) > 0) {?><p class="snippets-banner-desc"><?php echo $_smarty_tpl->tpl_vars['oImageMapArea']->value->cBeschreibung;?>
</p><?php }
}
}
/* {/block 'snippets-banner-map-area-image'} */
/* {block 'snippets-banner-map'} */
class Block_141751585360a50ba24b82b2_49100174 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\includes\\vendor\\smarty\\smarty\\libs\\plugins\\function.math.php','function'=>'smarty_function_math',),));
?>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oImageMap']->value->oArea_arr, 'oImageMapArea');
$_smarty_tpl->tpl_vars['oImageMapArea']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oImageMapArea']->value) {
$_smarty_tpl->tpl_vars['oImageMapArea']->do_else = false;
?>
                        <?php ob_start();
echo smarty_function_math(array('equation'=>"100/bWidth*posX",'bWidth'=>$_smarty_tpl->tpl_vars['oImageMap']->value->fWidth,'posX'=>$_smarty_tpl->tpl_vars['oImageMapArea']->value->oCoords->x),$_smarty_tpl);
$_prefixVariable65=ob_get_clean();
ob_start();
echo smarty_function_math(array('equation'=>"100/bHeight*posY",'bHeight'=>$_smarty_tpl->tpl_vars['oImageMap']->value->fHeight,'posY'=>$_smarty_tpl->tpl_vars['oImageMapArea']->value->oCoords->y),$_smarty_tpl);
$_prefixVariable66=ob_get_clean();
ob_start();
echo smarty_function_math(array('equation'=>"100/bWidth*aWidth",'bWidth'=>$_smarty_tpl->tpl_vars['oImageMap']->value->fWidth,'aWidth'=>$_smarty_tpl->tpl_vars['oImageMapArea']->value->oCoords->w),$_smarty_tpl);
$_prefixVariable67=ob_get_clean();
ob_start();
echo smarty_function_math(array('equation'=>"100/bHeight*aHeight",'bHeight'=>$_smarty_tpl->tpl_vars['oImageMap']->value->fHeight,'aHeight'=>$_smarty_tpl->tpl_vars['oImageMapArea']->value->oCoords->h),$_smarty_tpl);
$_prefixVariable68=ob_get_clean();
ob_start();
echo preg_replace("%(?<!\\\\)'%", "\'",htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['oImageMapArea']->value->cTitel), ENT_QUOTES, 'utf-8', true));
$_prefixVariable69=ob_get_clean();
$_block_plugin135 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin135, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['oImageMapArea']->value->cUrl,'class'=>"area ".((string)$_smarty_tpl->tpl_vars['oImageMapArea']->value->cStyle),'style'=>"left:".$_prefixVariable65."%;top:".$_prefixVariable66."%;width:".$_prefixVariable67."%;height:".$_prefixVariable68."%",'title'=>$_prefixVariable69));
$_block_repeat=true;
echo $_block_plugin135->render(array('href'=>$_smarty_tpl->tpl_vars['oImageMapArea']->value->cUrl,'class'=>"area ".((string)$_smarty_tpl->tpl_vars['oImageMapArea']->value->cStyle),'style'=>"left:".$_prefixVariable65."%;top:".$_prefixVariable66."%;width:".$_prefixVariable67."%;height:".$_prefixVariable68."%",'title'=>$_prefixVariable69), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['oImageMapArea']->value->oArtikel || strlen($_smarty_tpl->tpl_vars['oImageMapArea']->value->cBeschreibung) > 0) {
$_smarty_tpl->_assignInScope('oArtikel', $_smarty_tpl->tpl_vars['oImageMapArea']->value->oArtikel);?><div class="area-desc"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_47850759860a50ba2a6f675_56713057', 'snippets-banner-map-area-image', $this->tplIndex);
?>
</div><?php }
$_block_repeat=false;
echo $_block_plugin135->render(array('href'=>$_smarty_tpl->tpl_vars['oImageMapArea']->value->cUrl,'class'=>"area ".((string)$_smarty_tpl->tpl_vars['oImageMapArea']->value->cStyle),'style'=>"left:".$_prefixVariable65."%;top:".$_prefixVariable66."%;width:".$_prefixVariable67."%;height:".$_prefixVariable68."%",'title'=>$_prefixVariable69), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php
}
}
/* {/block 'snippets-banner-map'} */
/* {block 'snippets-banner'} */
class Block_119160035660a50ba24ae8d5_36189387 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-banner' => 
  array (
    0 => 'Block_119160035660a50ba24ae8d5_36189387',
  ),
  'snippets-banner-image' => 
  array (
    0 => 'Block_8944545060a50ba24b4755_38146645',
  ),
  'snippets-banner-map' => 
  array (
    0 => 'Block_141751585360a50ba24b82b2_49100174',
  ),
  'snippets-banner-map-area-image' => 
  array (
    0 => 'Block_47850759860a50ba2a6f675_56713057',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ((isset($_smarty_tpl->tpl_vars['oImageMap']->value))) {?>
        <?php $_block_plugin134 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin134, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array('fluid'=>$_smarty_tpl->tpl_vars['isFluid']->value));
$_block_repeat=true;
echo $_block_plugin134->render(array('fluid'=>$_smarty_tpl->tpl_vars['isFluid']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_banner'),$_smarty_tpl ) );?>

            <div class="banner snippets-banner">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8944545060a50ba24b4755_38146645', 'snippets-banner-image', $this->tplIndex);
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_141751585360a50ba24b82b2_49100174', 'snippets-banner-map', $this->tplIndex);
?>

            </div>
        <?php $_block_repeat=false;
echo $_block_plugin134->render(array('fluid'=>$_smarty_tpl->tpl_vars['isFluid']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php }
}
}
/* {/block 'snippets-banner'} */
}
