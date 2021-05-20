<?php
/* Smarty version 3.1.38, created on 2021-05-04 14:26:52
  from 'C:\xampp\htdocs\shop\templates\NOVA\layout\header_top_bar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60913d8c9dd606_96140430',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04f19146cd36f0a58f4dfa0564c102f112f2f85e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\templates\\NOVA\\layout\\header_top_bar.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/language_dropdown.tpl' => 1,
  ),
),false)) {
function content_60913d8c9dd606_96140430 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_71838603260913d8c9a1500_48228555', 'layout-header-top-bar');
?>

<?php }
/* {block 'layout-header-top-bar-user-settings-currency'} */
class Block_75961627360913d8c9aa539_55597221 extends Smarty_Internal_Block
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
class Block_93921596160913d8c9bfef8_31665952 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:snippets/language_dropdown.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'layout-header-top-bar-user-settings-include-language-dropdown'} */
/* {block 'layout-header-top-bar-user-settings'} */
class Block_4398821460913d8c9a99f5_43382043 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_75961627360913d8c9aa539_55597221', 'layout-header-top-bar-user-settings-currency', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_93921596160913d8c9bfef8_31665952', 'layout-header-top-bar-user-settings-include-language-dropdown', $this->tplIndex);
}
}
/* {/block 'layout-header-top-bar-user-settings'} */
/* {block 'layout-header-top-bar-cms-pages'} */
class Block_183420323460913d8c9c5786_75167968 extends Smarty_Internal_Block
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
class Block_46450284660913d8c9d1379_11334376 extends Smarty_Internal_Block
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
class Block_71838603260913d8c9a1500_48228555 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout-header-top-bar' => 
  array (
    0 => 'Block_71838603260913d8c9a1500_48228555',
  ),
  'layout-header-top-bar-user-settings' => 
  array (
    0 => 'Block_4398821460913d8c9a99f5_43382043',
  ),
  'layout-header-top-bar-user-settings-currency' => 
  array (
    0 => 'Block_75961627360913d8c9aa539_55597221',
  ),
  'layout-header-top-bar-user-settings-include-language-dropdown' => 
  array (
    0 => 'Block_93921596160913d8c9bfef8_31665952',
  ),
  'layout-header-top-bar-cms-pages' => 
  array (
    0 => 'Block_183420323460913d8c9c5786_75167968',
  ),
  'layout-header-top-bar-note' => 
  array (
    0 => 'Block_46450284660913d8c9d1379_11334376',
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4398821460913d8c9a99f5_43382043', 'layout-header-top-bar-user-settings', $this->tplIndex);
}
if ($_smarty_tpl->tpl_vars['linkgroups']->value->getLinkGroupByTemplate('Kopf') !== null && $_smarty_tpl->tpl_vars['nSeitenTyp']->value !== (defined('PAGE_BESTELLVORGANG') ? constant('PAGE_BESTELLVORGANG') : null)) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_183420323460913d8c9c5786_75167968', 'layout-header-top-bar-cms-pages', $this->tplIndex);
}
$_block_repeat=false;
echo $_block_plugin27->render(array('tag'=>'ul','class'=>'topbar-main nav-dividers'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
if ($_smarty_tpl->tpl_vars['nSeitenTyp']->value !== (defined('PAGE_BESTELLVORGANG') ? constant('PAGE_BESTELLVORGANG') : null)) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_46450284660913d8c9d1379_11334376', 'layout-header-top-bar-note', $this->tplIndex);
}
}
}
/* {/block 'layout-header-top-bar'} */
}
