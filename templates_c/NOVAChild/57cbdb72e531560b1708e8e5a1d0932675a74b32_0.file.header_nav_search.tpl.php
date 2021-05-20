<?php
/* Smarty version 3.1.38, created on 2021-05-04 14:26:56
  from 'C:\xampp\htdocs\shop\templates\NOVA\layout\header_nav_search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60913d909dad42_99357449',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57cbdb72e531560b1708e8e5a1d0932675a74b32' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\templates\\NOVA\\layout\\header_nav_search.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/search_form.tpl' => 1,
  ),
),false)) {
function content_60913d909dad42_99357449 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_74093145860913d909c4656_91609462', 'layout-header-nav-search');
?>

<?php }
/* {block 'layout-header-nav-search-search'} */
class Block_61223933460913d909c5195_20873958 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <li class="nav-item" id="search">
            <div class="search-wrapper">
                <?php $_block_plugin41 = isset($_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0] : null;
if (!is_callable(array($_block_plugin41, 'render'))) {
throw new SmartyException('block tag \'form\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('action'=>'index.php','method'=>'get'));
$_block_repeat=true;
echo $_block_plugin41->render(array('action'=>'index.php','method'=>'get'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <div class="form-icon">
                        <?php $_block_plugin42 = isset($_smarty_tpl->smarty->registered_plugins['block']['inputgroup'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['inputgroup'][0][0] : null;
if (!is_callable(array($_block_plugin42, 'render'))) {
throw new SmartyException('block tag \'inputgroup\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inputgroup', array());
$_block_repeat=true;
echo $_block_plugin42->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'search'),$_smarty_tpl ) );
$_prefixVariable11=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'search'),$_smarty_tpl ) );
$_prefixVariable12=ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('id'=>"search-header",'name'=>"qs",'type'=>"text",'class'=>"ac_input",'placeholder'=>$_prefixVariable11,'autocomplete'=>"off",'aria'=>array("label"=>$_prefixVariable12)),$_smarty_tpl ) );?>

                            <?php $_block_plugin43 = isset($_smarty_tpl->smarty->registered_plugins['block']['inputgroupaddon'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['inputgroupaddon'][0][0] : null;
if (!is_callable(array($_block_plugin43, 'render'))) {
throw new SmartyException('block tag \'inputgroupaddon\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inputgroupaddon', array('append'=>true));
$_block_repeat=true;
echo $_block_plugin43->render(array('append'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'search'),$_smarty_tpl ) );
$_prefixVariable13 = ob_get_clean();
$_block_plugin44 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin44, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('type'=>"submit",'name'=>'search','variant'=>"secondary",'aria'=>array("label"=>$_prefixVariable13)));
$_block_repeat=true;
echo $_block_plugin44->render(array('type'=>"submit",'name'=>'search','variant'=>"secondary",'aria'=>array("label"=>$_prefixVariable13)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><span class="fas fa-search"></span><?php $_block_repeat=false;
echo $_block_plugin44->render(array('type'=>"submit",'name'=>'search','variant'=>"secondary",'aria'=>array("label"=>$_prefixVariable13)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php $_block_repeat=false;
echo $_block_plugin43->render(array('append'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <span class="form-clear d-none"><i class="fas fa-times"></i></span>
                        <?php $_block_repeat=false;
echo $_block_plugin42->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    </div>
                <?php $_block_repeat=false;
echo $_block_plugin41->render(array('action'=>'index.php','method'=>'get'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            </div>
        </li>
    <?php
}
}
/* {/block 'layout-header-nav-search-search'} */
/* {block 'layout-header-nav-search-search-dropdown'} */
class Block_104251441160913d909d0704_19395655 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['mobile_search_type'] === 'dropdown') {?>
            <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'findProduct'),$_smarty_tpl ) );
$_prefixVariable14 = ob_get_clean();
$_block_plugin45 = isset($_smarty_tpl->smarty->registered_plugins['block']['navitemdropdown'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['navitemdropdown'][0][0] : null;
if (!is_callable(array($_block_plugin45, 'render'))) {
throw new SmartyException('block tag \'navitemdropdown\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('navitemdropdown', array('class'=>'search-wrapper-dropdown d-block d-lg-none','text'=>'<i id="mobile-search-dropdown" class="fas fa-search"></i>','right'=>true,'no-caret'=>true,'router-aria'=>array('label'=>$_prefixVariable14)));
$_block_repeat=true;
echo $_block_plugin45->render(array('class'=>'search-wrapper-dropdown d-block d-lg-none','text'=>'<i id="mobile-search-dropdown" class="fas fa-search"></i>','right'=>true,'no-caret'=>true,'router-aria'=>array('label'=>$_prefixVariable14)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <div class="dropdown-body">
                    <?php $_smarty_tpl->_subTemplateRender('file:snippets/search_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>'search-header-desktop'), 0, false);
?>
                </div>
            <?php $_block_repeat=false;
echo $_block_plugin45->render(array('class'=>'search-wrapper-dropdown d-block d-lg-none','text'=>'<i id="mobile-search-dropdown" class="fas fa-search"></i>','right'=>true,'no-caret'=>true,'router-aria'=>array('label'=>$_prefixVariable14)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php }?>
    <?php
}
}
/* {/block 'layout-header-nav-search-search-dropdown'} */
/* {block 'layout-header-nav-search'} */
class Block_74093145860913d909c4656_91609462 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout-header-nav-search' => 
  array (
    0 => 'Block_74093145860913d909c4656_91609462',
  ),
  'layout-header-nav-search-search' => 
  array (
    0 => 'Block_61223933460913d909c5195_20873958',
  ),
  'layout-header-nav-search-search-dropdown' => 
  array (
    0 => 'Block_104251441160913d909d0704_19395655',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_61223933460913d909c5195_20873958', 'layout-header-nav-search-search', $this->tplIndex);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_104251441160913d909d0704_19395655', 'layout-header-nav-search-search-dropdown', $this->tplIndex);
?>

<?php
}
}
/* {/block 'layout-header-nav-search'} */
}
