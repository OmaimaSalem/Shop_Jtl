<?php
/* Smarty version 3.1.38, created on 2021-05-19 15:00:27
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\productlist\layout_options.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a50bebee3595_89718566',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa2fe1d3bfb774cb0f8ccc73411edd9d01271aab' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\productlist\\layout_options.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a50bebee3595_89718566 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_201573295460a50bebebd975_99068163', 'productlist-layout-options');
?>

<?php }
/* {block 'productlist-layout-options-quare'} */
class Block_79440579760a50bebec4379_74418149 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php ob_start();
if ($_smarty_tpl->tpl_vars['oErweiterteDarstellung']->value->nDarstellung === (defined('ERWDARSTELLUNG_ANSICHT_LISTE') ? constant('ERWDARSTELLUNG_ANSICHT_LISTE') : null)) {
echo " active";
}
$_prefixVariable30=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'list','section'=>'productOverview'),$_smarty_tpl ) );
$_prefixVariable31=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'list','section'=>'productOverview'),$_smarty_tpl ) );
$_prefixVariable32 = ob_get_clean();
$_block_plugin77 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin77, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['oErweiterteDarstellung']->value->cURL_arr[(defined('ERWDARSTELLUNG_ANSICHT_LISTE') ? constant('ERWDARSTELLUNG_ANSICHT_LISTE') : null)],'id'=>"ed_list",'class'=>"btn btn-outline-secondary btn-option ed list".$_prefixVariable30,'role'=>"button",'title'=>$_prefixVariable31,'aria'=>array("label"=>$_prefixVariable32)));
$_block_repeat=true;
echo $_block_plugin77->render(array('href'=>$_smarty_tpl->tpl_vars['oErweiterteDarstellung']->value->cURL_arr[(defined('ERWDARSTELLUNG_ANSICHT_LISTE') ? constant('ERWDARSTELLUNG_ANSICHT_LISTE') : null)],'id'=>"ed_list",'class'=>"btn btn-outline-secondary btn-option ed list".$_prefixVariable30,'role'=>"button",'title'=>$_prefixVariable31,'aria'=>array("label"=>$_prefixVariable32)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <span class="fa fa-th-list d-none d-md-inline-flex"></span><span class="fa fa-square d-inline-flex d-md-none"></span>
                <?php $_block_repeat=false;
echo $_block_plugin77->render(array('href'=>$_smarty_tpl->tpl_vars['oErweiterteDarstellung']->value->cURL_arr[(defined('ERWDARSTELLUNG_ANSICHT_LISTE') ? constant('ERWDARSTELLUNG_ANSICHT_LISTE') : null)],'id'=>"ed_list",'class'=>"btn btn-outline-secondary btn-option ed list".$_prefixVariable30,'role'=>"button",'title'=>$_prefixVariable31,'aria'=>array("label"=>$_prefixVariable32)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
}
}
/* {/block 'productlist-layout-options-quare'} */
/* {block 'productlist-layout-options-list'} */
class Block_17227138260a50bebed3302_00098855 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php ob_start();
if ($_smarty_tpl->tpl_vars['oErweiterteDarstellung']->value->nDarstellung === (defined('ERWDARSTELLUNG_ANSICHT_GALERIE') ? constant('ERWDARSTELLUNG_ANSICHT_GALERIE') : null)) {
echo " active";
}
$_prefixVariable33=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'gallery','section'=>'productOverview'),$_smarty_tpl ) );
$_prefixVariable34=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'gallery','section'=>'productOverview'),$_smarty_tpl ) );
$_prefixVariable35 = ob_get_clean();
$_block_plugin78 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin78, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['oErweiterteDarstellung']->value->cURL_arr[(defined('ERWDARSTELLUNG_ANSICHT_GALERIE') ? constant('ERWDARSTELLUNG_ANSICHT_GALERIE') : null)],'id'=>"ed_gallery",'class'=>"btn btn-outline-secondary btn-option ed gallery".$_prefixVariable33,'role'=>"button",'title'=>$_prefixVariable34,'aria'=>array("label"=>$_prefixVariable35)));
$_block_repeat=true;
echo $_block_plugin78->render(array('href'=>$_smarty_tpl->tpl_vars['oErweiterteDarstellung']->value->cURL_arr[(defined('ERWDARSTELLUNG_ANSICHT_GALERIE') ? constant('ERWDARSTELLUNG_ANSICHT_GALERIE') : null)],'id'=>"ed_gallery",'class'=>"btn btn-outline-secondary btn-option ed gallery".$_prefixVariable33,'role'=>"button",'title'=>$_prefixVariable34,'aria'=>array("label"=>$_prefixVariable35)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <span class="fa fa-th-large"></span>
                <?php $_block_repeat=false;
echo $_block_plugin78->render(array('href'=>$_smarty_tpl->tpl_vars['oErweiterteDarstellung']->value->cURL_arr[(defined('ERWDARSTELLUNG_ANSICHT_GALERIE') ? constant('ERWDARSTELLUNG_ANSICHT_GALERIE') : null)],'id'=>"ed_gallery",'class'=>"btn btn-outline-secondary btn-option ed gallery".$_prefixVariable33,'role'=>"button",'title'=>$_prefixVariable34,'aria'=>array("label"=>$_prefixVariable35)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
}
}
/* {/block 'productlist-layout-options-list'} */
/* {block 'productlist-layout-options'} */
class Block_201573295460a50bebebd975_99068163 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'productlist-layout-options' => 
  array (
    0 => 'Block_201573295460a50bebebd975_99068163',
  ),
  'productlist-layout-options-quare' => 
  array (
    0 => 'Block_79440579760a50bebec4379_74418149',
  ),
  'productlist-layout-options-list' => 
  array (
    0 => 'Block_17227138260a50bebed3302_00098855',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ((isset($_smarty_tpl->tpl_vars['oErweiterteDarstellung']->value->nDarstellung)) && $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeluebersicht']['artikeluebersicht_erw_darstellung'] === 'Y' && empty($_smarty_tpl->tpl_vars['AktuelleKategorie']->value->categoryFunctionAttributes['darstellung']) && $_smarty_tpl->tpl_vars['navid']->value === 'header') {?>
        <?php $_block_plugin76 = isset($_smarty_tpl->smarty->registered_plugins['block']['buttongroup'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['buttongroup'][0][0] : null;
if (!is_callable(array($_block_plugin76, 'render'))) {
throw new SmartyException('block tag \'buttongroup\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('buttongroup', array());
$_block_repeat=true;
echo $_block_plugin76->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_79440579760a50bebec4379_74418149', 'productlist-layout-options-quare', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17227138260a50bebed3302_00098855', 'productlist-layout-options-list', $this->tplIndex);
?>

        <?php $_block_repeat=false;
echo $_block_plugin76->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php }
}
}
/* {/block 'productlist-layout-options'} */
}
