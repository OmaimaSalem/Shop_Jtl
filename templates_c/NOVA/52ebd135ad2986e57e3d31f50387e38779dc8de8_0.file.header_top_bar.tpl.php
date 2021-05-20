<?php
/* Smarty version 3.1.38, created on 2021-05-19 14:58:44
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\layout\header_top_bar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a50b8439a461_13354412',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52ebd135ad2986e57e3d31f50387e38779dc8de8' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\layout\\header_top_bar.tpl',
      1 => 1621252433,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/language_dropdown.tpl' => 1,
  ),
),false)) {
function content_60a50b8439a461_13354412 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_140717725960a50b8432ae95_12553571', 'layout-header-top-bar');
?>

<?php }
/* {block 'layout-header-top-bar-user-settings-currency'} */
class Block_110168213160a50b84335401_23173417 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_SESSION['Waehrungen'])) && count($_SESSION['Waehrungen']) > 1) {
$_block_plugin28 = isset($_smarty_tpl->smarty->registered_plugins['block']['navitemdropdown'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['navitemdropdown'][0][0] : null;
if (!is_callable(array($_block_plugin28, 'render'))) {
throw new SmartyException('block tag \'navitemdropdown\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('navitemdropdown', array('class'=>"currency-dropdown",'right'=>true,'text'=>$_SESSION['Waehrung']->getName()));
$_block_repeat=true;
echo $_block_plugin28->render(array('class'=>"currency-dropdown",'right'=>true,'text'=>$_SESSION['Waehrung']->getName()), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_SESSION['Waehrungen'], 'currency');
$_smarty_tpl->tpl_vars['currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->do_else = false;
$_block_plugin29 = isset($_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0] : null;
if (!is_callable(array($_block_plugin29, 'render'))) {
throw new SmartyException('block tag \'dropdownitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dropdownitem', array('href'=>$_smarty_tpl->tpl_vars['currency']->value->getURLFull(),'rel'=>"nofollow",'active'=>($_SESSION['Waehrung']->getName() === $_smarty_tpl->tpl_vars['currency']->value->getName())));
$_block_repeat=true;
echo $_block_plugin29->render(array('href'=>$_smarty_tpl->tpl_vars['currency']->value->getURLFull(),'rel'=>"nofollow",'active'=>($_SESSION['Waehrung']->getName() === $_smarty_tpl->tpl_vars['currency']->value->getName())), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['currency']->value->getName();
$_block_repeat=false;
echo $_block_plugin29->render(array('href'=>$_smarty_tpl->tpl_vars['currency']->value->getURLFull(),'rel'=>"nofollow",'active'=>($_SESSION['Waehrung']->getName() === $_smarty_tpl->tpl_vars['currency']->value->getName())), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_block_repeat=false;
echo $_block_plugin28->render(array('class'=>"currency-dropdown",'right'=>true,'text'=>$_SESSION['Waehrung']->getName()), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
/* {/block 'layout-header-top-bar-user-settings-currency'} */
/* {block 'layout-header-top-bar-user-settings-include-language-dropdown'} */
class Block_113359894960a50b84356d06_69220631 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:snippets/language_dropdown.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'layout-header-top-bar-user-settings-include-language-dropdown'} */
/* {block 'layout-header-top-bar-user-settings'} */
class Block_198015258760a50b843346f3_39694059 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_110168213160a50b84335401_23173417', 'layout-header-top-bar-user-settings-currency', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_113359894960a50b84356d06_69220631', 'layout-header-top-bar-user-settings-include-language-dropdown', $this->tplIndex);
}
}
/* {/block 'layout-header-top-bar-user-settings'} */
/* {block 'layout-header-top-bar-cms-pages'} */
class Block_91882855060a50b84375f06_15211317 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['linkgroups']->value->getLinkGroupByTemplate('Kopf')->getLinks(), 'Link');
$_smarty_tpl->tpl_vars['Link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Link']->value) {
$_smarty_tpl->tpl_vars['Link']->do_else = false;
$_block_plugin30 = isset($_smarty_tpl->smarty->registered_plugins['block']['navitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['navitem'][0][0] : null;
if (!is_callable(array($_block_plugin30, 'render'))) {
throw new SmartyException('block tag \'navitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('navitem', array('active'=>$_smarty_tpl->tpl_vars['Link']->value->getIsActive(),'href'=>$_smarty_tpl->tpl_vars['Link']->value->getURL(),'title'=>$_smarty_tpl->tpl_vars['Link']->value->getTitle()));
$_block_repeat=true;
echo $_block_plugin30->render(array('active'=>$_smarty_tpl->tpl_vars['Link']->value->getIsActive(),'href'=>$_smarty_tpl->tpl_vars['Link']->value->getURL(),'title'=>$_smarty_tpl->tpl_vars['Link']->value->getTitle()), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['Link']->value->getName();
$_block_repeat=false;
echo $_block_plugin30->render(array('active'=>$_smarty_tpl->tpl_vars['Link']->value->getIsActive(),'href'=>$_smarty_tpl->tpl_vars['Link']->value->getURL(),'title'=>$_smarty_tpl->tpl_vars['Link']->value->getTitle()), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
/* {/block 'layout-header-top-bar-cms-pages'} */
/* {block 'layout-header-top-bar-note'} */
class Block_20050674760a50b84391ce4_26390934 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'topbarNote'),$_smarty_tpl ) );
$_prefixVariable4 = ob_get_clean();
$_smarty_tpl->_assignInScope('topbarLang', $_prefixVariable4);
if ($_smarty_tpl->tpl_vars['topbarLang']->value !== '') {
$_block_plugin31 = isset($_smarty_tpl->smarty->registered_plugins['block']['nav'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['nav'][0][0] : null;
if (!is_callable(array($_block_plugin31, 'render'))) {
throw new SmartyException('block tag \'nav\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('nav', array('tag'=>'ul','class'=>'topbar-note nav-dividers'));
$_block_repeat=true;
echo $_block_plugin31->render(array('tag'=>'ul','class'=>'topbar-note nav-dividers'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_plugin32 = isset($_smarty_tpl->smarty->registered_plugins['block']['navitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['navitem'][0][0] : null;
if (!is_callable(array($_block_plugin32, 'render'))) {
throw new SmartyException('block tag \'navitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('navitem', array('id'=>"topbarNote"));
$_block_repeat=true;
echo $_block_plugin32->render(array('id'=>"topbarNote"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['topbarLang']->value;
$_block_repeat=false;
echo $_block_plugin32->render(array('id'=>"topbarNote"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_repeat=false;
echo $_block_plugin31->render(array('tag'=>'ul','class'=>'topbar-note nav-dividers'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
/* {/block 'layout-header-top-bar-note'} */
/* {block 'layout-header-top-bar'} */
class Block_140717725960a50b8432ae95_12553571 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout-header-top-bar' => 
  array (
    0 => 'Block_140717725960a50b8432ae95_12553571',
  ),
  'layout-header-top-bar-user-settings' => 
  array (
    0 => 'Block_198015258760a50b843346f3_39694059',
  ),
  'layout-header-top-bar-user-settings-currency' => 
  array (
    0 => 'Block_110168213160a50b84335401_23173417',
  ),
  'layout-header-top-bar-user-settings-include-language-dropdown' => 
  array (
    0 => 'Block_113359894960a50b84356d06_69220631',
  ),
  'layout-header-top-bar-cms-pages' => 
  array (
    0 => 'Block_91882855060a50b84375f06_15211317',
  ),
  'layout-header-top-bar-note' => 
  array (
    0 => 'Block_20050674760a50b84391ce4_26390934',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_block_plugin27 = isset($_smarty_tpl->smarty->registered_plugins['block']['nav'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['nav'][0][0] : null;
if (!is_callable(array($_block_plugin27, 'render'))) {
throw new SmartyException('block tag \'nav\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('nav', array('tag'=>'ul','class'=>'topbar-main nav-dividers'));
$_block_repeat=true;
echo $_block_plugin27->render(array('tag'=>'ul','class'=>'topbar-main nav-dividers'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ((isset($_SESSION['Waehrungen'])) && count($_SESSION['Waehrungen']) > 1 || (isset($_SESSION['Sprachen'])) && count($_SESSION['Sprachen']) > 1) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_198015258760a50b843346f3_39694059', 'layout-header-top-bar-user-settings', $this->tplIndex);
}
if ($_smarty_tpl->tpl_vars['linkgroups']->value->getLinkGroupByTemplate('Kopf') !== null && $_smarty_tpl->tpl_vars['nSeitenTyp']->value !== (defined('PAGE_BESTELLVORGANG') ? constant('PAGE_BESTELLVORGANG') : null)) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_91882855060a50b84375f06_15211317', 'layout-header-top-bar-cms-pages', $this->tplIndex);
}
$_block_repeat=false;
echo $_block_plugin27->render(array('tag'=>'ul','class'=>'topbar-main nav-dividers'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
if ($_smarty_tpl->tpl_vars['nSeitenTyp']->value !== (defined('PAGE_BESTELLVORGANG') ? constant('PAGE_BESTELLVORGANG') : null)) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20050674760a50b84391ce4_26390934', 'layout-header-top-bar-note', $this->tplIndex);
}
}
}
/* {/block 'layout-header-top-bar'} */
}
