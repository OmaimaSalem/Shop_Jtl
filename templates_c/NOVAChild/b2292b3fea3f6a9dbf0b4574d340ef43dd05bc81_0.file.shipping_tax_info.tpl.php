<?php
/* Smarty version 3.1.38, created on 2021-05-18 11:41:16
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\snippets\shipping_tax_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a38bbc464c80_39536514',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2292b3fea3f6a9dbf0b4574d340ef43dd05bc81' => 
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
function content_60a38bbc464c80_39536514 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_91320263760a38bbc412e28_65532614', 'snippets-shipping-tax-info');
?>

<?php }
/* {block 'snippets-shipping-tax-info-tax-data'} */
class Block_127580134160a38bbc414649_82464948 extends Smarty_Internal_Block
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
class Block_112870508660a38bbc4253d5_62898167 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                ,
                <?php
}
}
/* {/block 'snippets-shipping-tax-info-zzgl-comma'} */
/* {block 'snippets-shipping-tax-info-zzgl-show-shipping-free-D'} */
class Block_124798710560a38bbc42aa47_30354351 extends Smarty_Internal_Block
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
$_prefixVariable23=ob_get_clean();
$_smarty_tpl->_assignInScope('countries', $_prefixVariable23);?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'noShippingcostsTo'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'noShippingCostsAtExtended','section'=>'basket','printf'=>$_smarty_tpl->tpl_vars['countries']->value),$_smarty_tpl ) );?>

                                <?php ob_start();
if ((isset($_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_VERSAND') ? constant('LINKTYP_VERSAND') : null)]))) {
echo (string)$_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_VERSAND') ? constant('LINKTYP_VERSAND') : null)]->getURL();
echo "?shipping_calculator=0";
}
$_prefixVariable24=ob_get_clean();
$_block_plugin41 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin41, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_prefixVariable24,'rel'=>"nofollow",'class'=>"shipment popup"));
$_block_repeat=true;
echo $_block_plugin41->render(array('href'=>$_prefixVariable24,'rel'=>"nofollow",'class'=>"shipment popup"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'shipping','section'=>'basket'),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin41->render(array('href'=>$_prefixVariable24,'rel'=>"nofollow",'class'=>"shipment popup"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php
}
}
/* {/block 'snippets-shipping-tax-info-zzgl-show-shipping-free-D'} */
/* {block 'snippets-shipping-tax-info-zzgl-show-shipping-free-free-link'} */
class Block_185608409760a38bbc43e0e2_42385991 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'else'),$_smarty_tpl ) );
$_prefixVariable25=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'plus','section'=>'basket'),$_smarty_tpl ) );
$_prefixVariable26=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'shipping','section'=>'basket'),$_smarty_tpl ) );
$_prefixVariable27=ob_get_clean();
$_block_plugin42 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin42, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>((string)$_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_VERSAND') ? constant('LINKTYP_VERSAND') : null)]->getURL())."?shipping_calculator=0",'rel'=>"nofollow",'class'=>"shipment popup",'data-toggle'=>"tooltip",'data-placement'=>"left",'title'=>((string)$_smarty_tpl->tpl_vars['taxdata']->value['shippingFreeCountries']).", ".$_prefixVariable25." ".$_prefixVariable26." ".$_prefixVariable27));
$_block_repeat=true;
echo $_block_plugin42->render(array('href'=>((string)$_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_VERSAND') ? constant('LINKTYP_VERSAND') : null)]->getURL())."?shipping_calculator=0",'rel'=>"nofollow",'class'=>"shipment popup",'data-toggle'=>"tooltip",'data-placement'=>"left",'title'=>((string)$_smarty_tpl->tpl_vars['taxdata']->value['shippingFreeCountries']).", ".$_prefixVariable25." ".$_prefixVariable26." ".$_prefixVariable27), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'noShippingcostsTo'),$_smarty_tpl ) );?>

                                <?php $_block_repeat=false;
echo $_block_plugin42->render(array('href'=>((string)$_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_VERSAND') ? constant('LINKTYP_VERSAND') : null)]->getURL())."?shipping_calculator=0",'rel'=>"nofollow",'class'=>"shipment popup",'data-toggle'=>"tooltip",'data-placement'=>"left",'title'=>((string)$_smarty_tpl->tpl_vars['taxdata']->value['shippingFreeCountries']).", ".$_prefixVariable25." ".$_prefixVariable26." ".$_prefixVariable27), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php
}
}
/* {/block 'snippets-shipping-tax-info-zzgl-show-shipping-free-free-link'} */
/* {block 'snippets-shipping-tax-info-zzgl-show-shipping-free'} */
class Block_101128748960a38bbc4289e9_78126785 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_versandkostenfrei_darstellung'] === 'D') {?>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_124798710560a38bbc42aa47_30354351', 'snippets-shipping-tax-info-zzgl-show-shipping-free-D', $this->tplIndex);
?>

                        <?php } elseif ((isset($_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_VERSAND') ? constant('LINKTYP_VERSAND') : null)]))) {?>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_185608409760a38bbc43e0e2_42385991', 'snippets-shipping-tax-info-zzgl-show-shipping-free-free-link', $this->tplIndex);
?>

                        <?php }?>
                    <?php
}
}
/* {/block 'snippets-shipping-tax-info-zzgl-show-shipping-free'} */
/* {block 'snippets-shipping-tax-info-zzgl-special-page'} */
class Block_172115223060a38bbc44bf02_13948997 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'plus','section'=>'basket'),$_smarty_tpl ) );?>

                        <?php $_block_plugin43 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin43, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>((string)$_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_VERSAND') ? constant('LINKTYP_VERSAND') : null)]->getURL())."?shipping_calculator=0",'rel'=>"nofollow",'class'=>"shipment popup"));
$_block_repeat=true;
echo $_block_plugin43->render(array('href'=>((string)$_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_VERSAND') ? constant('LINKTYP_VERSAND') : null)]->getURL())."?shipping_calculator=0",'rel'=>"nofollow",'class'=>"shipment popup"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'shipping','section'=>'basket'),$_smarty_tpl ) );?>

                        <?php $_block_repeat=false;
echo $_block_plugin43->render(array('href'=>((string)$_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_VERSAND') ? constant('LINKTYP_VERSAND') : null)]->getURL())."?shipping_calculator=0",'rel'=>"nofollow",'class'=>"shipment popup"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php
}
}
/* {/block 'snippets-shipping-tax-info-zzgl-special-page'} */
/* {block 'snippets-shipping-tax-info-zzgl'} */
class Block_67210089260a38bbc4248c4_44383367 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_112870508660a38bbc4253d5_62898167', 'snippets-shipping-tax-info-zzgl-comma', $this->tplIndex);
?>

                <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_versandfrei_anzeigen'] === 'Y' && $_smarty_tpl->tpl_vars['taxdata']->value['shippingFreeCountries']) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_101128748960a38bbc4289e9_78126785', 'snippets-shipping-tax-info-zzgl-show-shipping-free', $this->tplIndex);
?>

                <?php } elseif ((isset($_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_VERSAND') ? constant('LINKTYP_VERSAND') : null)]))) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_172115223060a38bbc44bf02_13948997', 'snippets-shipping-tax-info-zzgl-special-page', $this->tplIndex);
?>

                <?php }?>
            <?php
}
}
/* {/block 'snippets-shipping-tax-info-zzgl'} */
/* {block 'snippets-shipping-tax-info-inkl'} */
class Block_134073243360a38bbc454bd6_42104583 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                , <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'incl','section'=>'productDetails'),$_smarty_tpl ) );?>
 <?php ob_start();
if ((isset($_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_VERSAND') ? constant('LINKTYP_VERSAND') : null)]))) {
echo (string)$_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_VERSAND') ? constant('LINKTYP_VERSAND') : null)]->getURL();
}
$_prefixVariable28=ob_get_clean();
$_block_plugin44 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin44, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_prefixVariable28,'rel'=>"nofollow",'class'=>"shipment"));
$_block_repeat=true;
echo $_block_plugin44->render(array('href'=>$_prefixVariable28,'rel'=>"nofollow",'class'=>"shipment"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'shipping','section'=>'basket'),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin44->render(array('href'=>$_prefixVariable28,'rel'=>"nofollow",'class'=>"shipment"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
}
}
/* {/block 'snippets-shipping-tax-info-inkl'} */
/* {block 'snippets-shipping-tax-info-content'} */
class Block_180874928660a38bbc413b88_78834812 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_127580134160a38bbc414649_82464948', 'snippets-shipping-tax-info-tax-data', $this->tplIndex);
?>

        <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_versandhinweis'] === 'zzgl') {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_67210089260a38bbc4248c4_44383367', 'snippets-shipping-tax-info-zzgl', $this->tplIndex);
?>

        <?php } elseif ($_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_versandhinweis'] === 'inkl') {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_134073243360a38bbc454bd6_42104583', 'snippets-shipping-tax-info-inkl', $this->tplIndex);
?>

        <?php }?>
    <?php
}
}
/* {/block 'snippets-shipping-tax-info-content'} */
/* {block 'snippets-shipping-tax-info-shipping-class'} */
class Block_1448702960a38bbc45e2d1_96916959 extends Smarty_Internal_Block
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
class Block_91320263760a38bbc412e28_65532614 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-shipping-tax-info' => 
  array (
    0 => 'Block_91320263760a38bbc412e28_65532614',
  ),
  'snippets-shipping-tax-info-content' => 
  array (
    0 => 'Block_180874928660a38bbc413b88_78834812',
  ),
  'snippets-shipping-tax-info-tax-data' => 
  array (
    0 => 'Block_127580134160a38bbc414649_82464948',
  ),
  'snippets-shipping-tax-info-zzgl' => 
  array (
    0 => 'Block_67210089260a38bbc4248c4_44383367',
  ),
  'snippets-shipping-tax-info-zzgl-comma' => 
  array (
    0 => 'Block_112870508660a38bbc4253d5_62898167',
  ),
  'snippets-shipping-tax-info-zzgl-show-shipping-free' => 
  array (
    0 => 'Block_101128748960a38bbc4289e9_78126785',
  ),
  'snippets-shipping-tax-info-zzgl-show-shipping-free-D' => 
  array (
    0 => 'Block_124798710560a38bbc42aa47_30354351',
  ),
  'snippets-shipping-tax-info-zzgl-show-shipping-free-free-link' => 
  array (
    0 => 'Block_185608409760a38bbc43e0e2_42385991',
  ),
  'snippets-shipping-tax-info-zzgl-special-page' => 
  array (
    0 => 'Block_172115223060a38bbc44bf02_13948997',
  ),
  'snippets-shipping-tax-info-inkl' => 
  array (
    0 => 'Block_134073243360a38bbc454bd6_42104583',
  ),
  'snippets-shipping-tax-info-shipping-class' => 
  array (
    0 => 'Block_1448702960a38bbc45e2d1_96916959',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_180874928660a38bbc413b88_78834812', 'snippets-shipping-tax-info-content', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1448702960a38bbc45e2d1_96916959', 'snippets-shipping-tax-info-shipping-class', $this->tplIndex);
?>

<?php
}
}
/* {/block 'snippets-shipping-tax-info'} */
}
