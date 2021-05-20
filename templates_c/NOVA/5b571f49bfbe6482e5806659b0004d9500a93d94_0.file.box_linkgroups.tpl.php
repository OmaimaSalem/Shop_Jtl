<?php
/* Smarty version 3.1.38, created on 2021-05-04 11:46:05
  from 'C:\xampp\htdocs\shop\templates\NOVA\boxes\box_linkgroups.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_609117dd390b39_08793554',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b571f49bfbe6482e5806659b0004d9500a93d94' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\templates\\NOVA\\boxes\\box_linkgroups.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/linkgroup_recursive.tpl' => 1,
  ),
),false)) {
function content_609117dd390b39_08793554 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1836708852609117dc9c83c6_80872645', 'boxes-box-linkgroups');
?>

<?php }
/* {block 'boxes-box-linkgroups-toggle-title'} */
class Block_791884675609117dcf34608_58351014 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('id'=>"crd-hdr-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'href'=>"#crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'data'=>array("toggle"=>"collapse"),'role'=>"button",'aria'=>array("expanded"=>"false","controls"=>"crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID())),'class'=>"box-normal-link dropdown-toggle"));
$_block_repeat=true;
echo $_block_plugin2->render(array('id'=>"crd-hdr-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'href'=>"#crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'data'=>array("toggle"=>"collapse"),'role'=>"button",'aria'=>array("expanded"=>"false","controls"=>"crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID())),'class'=>"box-normal-link dropdown-toggle"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <span class="text-truncate">
                    <?php echo $_smarty_tpl->tpl_vars['oBox']->value->getTitle();?>

                </span>
            <?php $_block_repeat=false;
echo $_block_plugin2->render(array('id'=>"crd-hdr-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'href'=>"#crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'data'=>array("toggle"=>"collapse"),'role'=>"button",'aria'=>array("expanded"=>"false","controls"=>"crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID())),'class'=>"box-normal-link dropdown-toggle"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php
}
}
/* {/block 'boxes-box-linkgroups-toggle-title'} */
/* {block 'boxes-box-linkgroups-title'} */
class Block_2109632710609117dd234e31_13652754 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="productlist-filter-headline d-none d-md-flex">
                <?php echo $_smarty_tpl->tpl_vars['oBox']->value->getTitle();?>

            </div>
        <?php
}
}
/* {/block 'boxes-box-linkgroups-title'} */
/* {block 'boxes-box-linkgroups-include-linkgroups-recursive'} */
class Block_61040050609117dd23d3f8_33302800 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php $_smarty_tpl->_subTemplateRender('file:snippets/linkgroup_recursive.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('linkgroupIdentifier'=>$_smarty_tpl->tpl_vars['oBox']->value->getLinkGroupTemplate(),'dropdownSupport'=>true,'tplscope'=>'box'), 0, false);
?>
                            <?php
}
}
/* {/block 'boxes-box-linkgroups-include-linkgroups-recursive'} */
/* {block 'boxes-box-linkgroups-content'} */
class Block_830775600609117dd2373a2_46963857 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'render'))) {
throw new SmartyException('block tag \'collapse\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('collapse', array('class'=>"d-md-block",'visible'=>false,'id'=>"crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'aria'=>array("labelledby"=>"crd-hdr-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()))));
$_block_repeat=true;
echo $_block_plugin3->render(array('class'=>"d-md-block",'visible'=>false,'id'=>"crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'aria'=>array("labelledby"=>"crd-hdr-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()))), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <div class="nav-panel box-nav-item">
                        <?php $_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['nav'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['nav'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'render'))) {
throw new SmartyException('block tag \'nav\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('nav', array('vertical'=>true));
$_block_repeat=true;
echo $_block_plugin4->render(array('vertical'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_61040050609117dd23d3f8_33302800', 'boxes-box-linkgroups-include-linkgroups-recursive', $this->tplIndex);
?>

                        <?php $_block_repeat=false;
echo $_block_plugin4->render(array('vertical'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    </div>
            <?php $_block_repeat=false;
echo $_block_plugin3->render(array('class'=>"d-md-block",'visible'=>false,'id'=>"crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'aria'=>array("labelledby"=>"crd-hdr-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()))), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php
}
}
/* {/block 'boxes-box-linkgroups-content'} */
/* {block 'boxes-box-linkgroups-hr-end'} */
class Block_758705518609117dd38f5a3_87516571 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <hr class="box-normal-hr">
    <?php
}
}
/* {/block 'boxes-box-linkgroups-hr-end'} */
/* {block 'boxes-box-linkgroups'} */
class Block_1836708852609117dc9c83c6_80872645 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'boxes-box-linkgroups' => 
  array (
    0 => 'Block_1836708852609117dc9c83c6_80872645',
  ),
  'boxes-box-linkgroups-toggle-title' => 
  array (
    0 => 'Block_791884675609117dcf34608_58351014',
  ),
  'boxes-box-linkgroups-title' => 
  array (
    0 => 'Block_2109632710609117dd234e31_13652754',
  ),
  'boxes-box-linkgroups-content' => 
  array (
    0 => 'Block_830775600609117dd2373a2_46963857',
  ),
  'boxes-box-linkgroups-include-linkgroups-recursive' => 
  array (
    0 => 'Block_61040050609117dd23d3f8_33302800',
  ),
  'boxes-box-linkgroups-hr-end' => 
  array (
    0 => 'Block_758705518609117dd38f5a3_87516571',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['card'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['card'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'render'))) {
throw new SmartyException('block tag \'card\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('card', array('class'=>"box box-linkgroup box-normal text-left-util",'id'=>"box".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'no-body'=>true));
$_block_repeat=true;
echo $_block_plugin1->render(array('class'=>"box box-linkgroup box-normal text-left-util",'id'=>"box".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'no-body'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_791884675609117dcf34608_58351014', 'boxes-box-linkgroups-toggle-title', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2109632710609117dd234e31_13652754', 'boxes-box-linkgroups-title', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_830775600609117dd2373a2_46963857', 'boxes-box-linkgroups-content', $this->tplIndex);
?>

    <?php $_block_repeat=false;
echo $_block_plugin1->render(array('class'=>"box box-linkgroup box-normal text-left-util",'id'=>"box".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'no-body'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_758705518609117dd38f5a3_87516571', 'boxes-box-linkgroups-hr-end', $this->tplIndex);
?>

<?php
}
}
/* {/block 'boxes-box-linkgroups'} */
}
