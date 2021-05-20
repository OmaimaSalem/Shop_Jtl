<?php
/* Smarty version 3.1.38, created on 2021-05-19 14:58:25
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\boxes\box_linkgroups.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a50b7101b7e3_09975683',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2de1e785253bfb2ed0387c12732c22b5532c336d' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\boxes\\box_linkgroups.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/linkgroup_recursive.tpl' => 1,
  ),
),false)) {
function content_60a50b7101b7e3_09975683 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_49770733160a50b70b04a05_38711777', 'boxes-box-linkgroups');
?>

<?php }
/* {block 'boxes-box-linkgroups-toggle-title'} */
class Block_18170143060a50b70f0f4a2_01699029 extends Smarty_Internal_Block
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
class Block_208768614860a50b70f31f88_36160385 extends Smarty_Internal_Block
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
class Block_23957865460a50b70f3f614_92384123 extends Smarty_Internal_Block
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
class Block_93714391760a50b70f34785_02735676 extends Smarty_Internal_Block
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_23957865460a50b70f3f614_92384123', 'boxes-box-linkgroups-include-linkgroups-recursive', $this->tplIndex);
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
class Block_167312052960a50b71016d66_33359530 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <hr class="box-normal-hr">
    <?php
}
}
/* {/block 'boxes-box-linkgroups-hr-end'} */
/* {block 'boxes-box-linkgroups'} */
class Block_49770733160a50b70b04a05_38711777 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'boxes-box-linkgroups' => 
  array (
    0 => 'Block_49770733160a50b70b04a05_38711777',
  ),
  'boxes-box-linkgroups-toggle-title' => 
  array (
    0 => 'Block_18170143060a50b70f0f4a2_01699029',
  ),
  'boxes-box-linkgroups-title' => 
  array (
    0 => 'Block_208768614860a50b70f31f88_36160385',
  ),
  'boxes-box-linkgroups-content' => 
  array (
    0 => 'Block_93714391760a50b70f34785_02735676',
  ),
  'boxes-box-linkgroups-include-linkgroups-recursive' => 
  array (
    0 => 'Block_23957865460a50b70f3f614_92384123',
  ),
  'boxes-box-linkgroups-hr-end' => 
  array (
    0 => 'Block_167312052960a50b71016d66_33359530',
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18170143060a50b70f0f4a2_01699029', 'boxes-box-linkgroups-toggle-title', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_208768614860a50b70f31f88_36160385', 'boxes-box-linkgroups-title', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_93714391760a50b70f34785_02735676', 'boxes-box-linkgroups-content', $this->tplIndex);
?>

    <?php $_block_repeat=false;
echo $_block_plugin1->render(array('class'=>"box box-linkgroup box-normal text-left-util",'id'=>"box".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'no-body'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_167312052960a50b71016d66_33359530', 'boxes-box-linkgroups-hr-end', $this->tplIndex);
?>

<?php
}
}
/* {/block 'boxes-box-linkgroups'} */
}
