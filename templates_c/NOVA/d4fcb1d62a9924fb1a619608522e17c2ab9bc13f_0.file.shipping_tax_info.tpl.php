<?php
/* Smarty version 3.1.38, created on 2021-05-19 15:10:15
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\snippets\shipping_tax_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a50e37b0ffc9_87295550',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4fcb1d62a9924fb1a619608522e17c2ab9bc13f' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\snippets\\shipping_tax_info.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a50e37b0ffc9_87295550 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2694328860a50e37a21b90_07195757', 'snippets-shipping-tax-info');
?>

<?php }
/* {block 'snippets-shipping-tax-info-tax-data'} */
class Block_47663513160a50e37a363a4_08683655 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if (!empty($_smarty_tpl->tpl_vars['taxdata']->value['text'])) {
echo $_smarty_tpl->tpl_vars['taxdata']->value['text'];
} else {
if ($_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_ust_auszeichnung'] === 'auto') {
if ($_smarty_tpl->tpl_vars['taxdata']->value['net']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'excl','section'=>'productDetails'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'incl','section'=>'productDetails'),$_smarty_tpl ) );
}?>&nbsp;<?php echo $_smarty_tpl->tpl_vars['taxdata']->value['tax'];?>
% <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'vat','section'=>'productDetails'),$_smarty_tpl ) );
} elseif ($_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_ust_auszeichnung'] === 'endpreis') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'finalprice','section'=>'productDetails'),$_smarty_tpl ) );
}
}?>
        <?php
}
}
/* {/block 'snippets-shipping-tax-info-tax-data'} */
/* {block 'snippets-shipping-tax-info-zzgl-comma'} */
class Block_125805844360a50e37a569d6_78025780 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                ,
                <?php
}
}
/* {/block 'snippets-shipping-tax-info-zzgl-comma'} */
/* {block 'snippets-shipping-tax-info-zzgl-show-shipping-free-D'} */
class Block_210186167260a50e37a87943_60881936 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php ob_start();
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['taxdata']->value['countries'], 'country', false, 'cISO');
$_smarty_tpl->tpl_vars['country']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cISO']->value => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->do_else = false;
echo "<abbr title='";
echo (string)$_smarty_tpl->tpl_vars['country']->value;
echo "'>";
echo (string)$_smarty_tpl->tpl_vars['cISO']->value;
echo "</abbr>&nbsp;";
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable10=ob_get_clean();
$_smarty_tpl->_assignInScope('countries', $_prefixVariable10);?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'noShippingcostsTo'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'noShippingCostsAtExtended','section'=>'basket','printf'=>$_smarty_tpl->tpl_vars['countries']->value),$_smarty_tpl ) );?>

                                <?php ob_start();
if ((isset($_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_VERSAND') ? constant('LINKTYP_VERSAND') : null)]))) {
echo (string)$_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_VERSAND') ? constant('LINKTYP_VERSAND') : null)]->getURL();
echo "?shipping_calculator=0";
}
$_prefixVariable11=ob_get_clean();
$_block_plugin38 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin38, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_prefixVariable11,'rel'=>"nofollow",'class'=>"shipment popup"));
$_block_repeat=true;
echo $_block_plugin38->render(array('href'=>$_prefixVariable11,'rel'=>"nofollow",'class'=>"shipment popup"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'shipping','section'=>'basket'),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin38->render(array('href'=>$_prefixVariable11,'rel'=>"nofollow",'class'=>"shipment popup"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php
}
}
/* {/block 'snippets-shipping-tax-info-zzgl-show-shipping-free-D'} */
/* {block 'snippets-shipping-tax-info-zzgl-show-shipping-free-free-link'} */
class Block_203299550760a50e37ab54e7_53850984 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'else'),$_smarty_tpl ) );
$_prefixVariable12=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'plus','section'=>'basket'),$_smarty_tpl ) );
$_prefixVariable13=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'shipping','section'=>'basket'),$_smarty_tpl ) );
$_prefixVariable14=ob_get_clean();
$_block_plugin39 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin39, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>((string)$_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_VERSAND') ? constant('LINKTYP_VERSAND') : null)]->getURL())."?shipping_calculator=0",'rel'=>"nofollow",'class'=>"shipment popup",'data-toggle'=>"tooltip",'data-placement'=>"left",'title'=>((string)$_smarty_tpl->tpl_vars['taxdata']->value['shippingFreeCountries']).", ".$_prefixVariable12." ".$_prefixVariable13." ".$_prefixVariable14));
$_block_repeat=true;
echo $_block_plugin39->render(array('href'=>((string)$_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_VERSAND') ? constant('LINKTYP_VERSAND') : null)]->getURL())."?shipping_calculator=0",'rel'=>"nofollow",'class'=>"shipment popup",'data-toggle'=>"tooltip",'data-placement'=>"left",'title'=>((string)$_smarty_tpl->tpl_vars['taxdata']->value['shippingFreeCountries']).", ".$_prefixVariable12." ".$_prefixVariable13." ".$_prefixVariable14), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'noShippingcostsTo'),$_smarty_tpl ) );?>

                                <?php $_block_repeat=false;
echo $_block_plugin39->render(array('href'=>((string)$_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_VERSAND') ? constant('LINKTYP_VERSAND') : null)]->getURL())."?shipping_calculator=0",'rel'=>"nofollow",'class'=>"shipment popup",'data-toggle'=>"tooltip",'data-placement'=>"left",'title'=>((string)$_smarty_tpl->tpl_vars['taxdata']->value['shippingFreeCountries']).", ".$_prefixVariable12." ".$_prefixVariable13." ".$_prefixVariable14), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php
}
}
/* {/block 'snippets-shipping-tax-info-zzgl-show-shipping-free-free-link'} */
/* {block 'snippets-shipping-tax-info-zzgl-show-shipping-free'} */
class Block_28938013360a50e37a613f0_73886397 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_versandkostenfrei_darstellung'] === 'D') {?>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_210186167260a50e37a87943_60881936', 'snippets-shipping-tax-info-zzgl-show-shipping-free-D', $this->tplIndex);
?>

                        <?php } elseif ((isset($_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_VERSAND') ? constant('LINKTYP_VERSAND') : null)]))) {?>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_203299550760a50e37ab54e7_53850984', 'snippets-shipping-tax-info-zzgl-show-shipping-free-free-link', $this->tplIndex);
?>

                        <?php }?>
                    <?php
}
}
/* {/block 'snippets-shipping-tax-info-zzgl-show-shipping-free'} */
/* {block 'snippets-shipping-tax-info-zzgl-special-page'} */
class Block_9954697060a50e37acadf2_71664014 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'plus','section'=>'basket'),$_smarty_tpl ) );?>

                        <?php $_block_plugin40 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin40, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>((string)$_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_VERSAND') ? constant('LINKTYP_VERSAND') : null)]->getURL())."?shipping_calculator=0",'rel'=>"nofollow",'class'=>"shipment popup"));
$_block_repeat=true;
echo $_block_plugin40->render(array('href'=>((string)$_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_VERSAND') ? constant('LINKTYP_VERSAND') : null)]->getURL())."?shipping_calculator=0",'rel'=>"nofollow",'class'=>"shipment popup"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'shipping','section'=>'basket'),$_smarty_tpl ) );?>

                        <?php $_block_repeat=false;
echo $_block_plugin40->render(array('href'=>((string)$_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_VERSAND') ? constant('LINKTYP_VERSAND') : null)]->getURL())."?shipping_calculator=0",'rel'=>"nofollow",'class'=>"shipment popup"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php
}
}
/* {/block 'snippets-shipping-tax-info-zzgl-special-page'} */
/* {block 'snippets-shipping-tax-info-zzgl'} */
class Block_97687756260a50e37a55c80_49770500 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125805844360a50e37a569d6_78025780', 'snippets-shipping-tax-info-zzgl-comma', $this->tplIndex);
?>

                <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_versandfrei_anzeigen'] === 'Y' && $_smarty_tpl->tpl_vars['taxdata']->value['shippingFreeCountries']) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_28938013360a50e37a613f0_73886397', 'snippets-shipping-tax-info-zzgl-show-shipping-free', $this->tplIndex);
?>

                <?php } elseif ((isset($_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_VERSAND') ? constant('LINKTYP_VERSAND') : null)]))) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9954697060a50e37acadf2_71664014', 'snippets-shipping-tax-info-zzgl-special-page', $this->tplIndex);
?>

                <?php }?>
            <?php
}
}
/* {/block 'snippets-shipping-tax-info-zzgl'} */
/* {block 'snippets-shipping-tax-info-inkl'} */
class Block_51554243660a50e37af34a0_05424049 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                , <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'incl','section'=>'productDetails'),$_smarty_tpl ) );?>
 <?php ob_start();
if ((isset($_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_VERSAND') ? constant('LINKTYP_VERSAND') : null)]))) {
echo (string)$_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_VERSAND') ? constant('LINKTYP_VERSAND') : null)]->getURL();
}
$_prefixVariable15=ob_get_clean();
$_block_plugin41 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin41, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_prefixVariable15,'rel'=>"nofollow",'class'=>"shipment"));
$_block_repeat=true;
echo $_block_plugin41->render(array('href'=>$_prefixVariable15,'rel'=>"nofollow",'class'=>"shipment"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'shipping','section'=>'basket'),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin41->render(array('href'=>$_prefixVariable15,'rel'=>"nofollow",'class'=>"shipment"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
}
}
/* {/block 'snippets-shipping-tax-info-inkl'} */
/* {block 'snippets-shipping-tax-info-content'} */
class Block_11007385160a50e37a324b0_38142520 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_47663513160a50e37a363a4_08683655', 'snippets-shipping-tax-info-tax-data', $this->tplIndex);
?>

        <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_versandhinweis'] === 'zzgl') {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_97687756260a50e37a55c80_49770500', 'snippets-shipping-tax-info-zzgl', $this->tplIndex);
?>

        <?php } elseif ($_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_versandhinweis'] === 'inkl') {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_51554243660a50e37af34a0_05424049', 'snippets-shipping-tax-info-inkl', $this->tplIndex);
?>

        <?php }?>
    <?php
}
}
/* {/block 'snippets-shipping-tax-info-content'} */
/* {block 'snippets-shipping-tax-info-shipping-class'} */
class Block_164902779260a50e37b06c07_51739389 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if (!empty($_smarty_tpl->tpl_vars['taxdata']->value['shippingClass']) && $_smarty_tpl->tpl_vars['taxdata']->value['shippingClass'] !== 'standard' && $_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_versandklasse_anzeigen'] === 'Y') {?>
            (<?php echo $_smarty_tpl->tpl_vars['taxdata']->value['shippingClass'];?>
)
        <?php }?>
    <?php
}
}
/* {/block 'snippets-shipping-tax-info-shipping-class'} */
/* {block 'snippets-shipping-tax-info'} */
class Block_2694328860a50e37a21b90_07195757 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-shipping-tax-info' => 
  array (
    0 => 'Block_2694328860a50e37a21b90_07195757',
  ),
  'snippets-shipping-tax-info-content' => 
  array (
    0 => 'Block_11007385160a50e37a324b0_38142520',
  ),
  'snippets-shipping-tax-info-tax-data' => 
  array (
    0 => 'Block_47663513160a50e37a363a4_08683655',
  ),
  'snippets-shipping-tax-info-zzgl' => 
  array (
    0 => 'Block_97687756260a50e37a55c80_49770500',
  ),
  'snippets-shipping-tax-info-zzgl-comma' => 
  array (
    0 => 'Block_125805844360a50e37a569d6_78025780',
  ),
  'snippets-shipping-tax-info-zzgl-show-shipping-free' => 
  array (
    0 => 'Block_28938013360a50e37a613f0_73886397',
  ),
  'snippets-shipping-tax-info-zzgl-show-shipping-free-D' => 
  array (
    0 => 'Block_210186167260a50e37a87943_60881936',
  ),
  'snippets-shipping-tax-info-zzgl-show-shipping-free-free-link' => 
  array (
    0 => 'Block_203299550760a50e37ab54e7_53850984',
  ),
  'snippets-shipping-tax-info-zzgl-special-page' => 
  array (
    0 => 'Block_9954697060a50e37acadf2_71664014',
  ),
  'snippets-shipping-tax-info-inkl' => 
  array (
    0 => 'Block_51554243660a50e37af34a0_05424049',
  ),
  'snippets-shipping-tax-info-shipping-class' => 
  array (
    0 => 'Block_164902779260a50e37b06c07_51739389',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11007385160a50e37a324b0_38142520', 'snippets-shipping-tax-info-content', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_164902779260a50e37b06c07_51739389', 'snippets-shipping-tax-info-shipping-class', $this->tplIndex);
?>

<?php
}
}
/* {/block 'snippets-shipping-tax-info'} */
}
