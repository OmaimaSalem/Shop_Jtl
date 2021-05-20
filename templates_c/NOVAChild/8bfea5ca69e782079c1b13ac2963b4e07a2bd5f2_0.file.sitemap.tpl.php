<?php
/* Smarty version 3.1.38, created on 2021-05-20 10:02:57
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\page\sitemap.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a617b15f2710_10578702',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8bfea5ca69e782079c1b13ac2963b4e07a2bd5f2' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\page\\sitemap.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/linkgroup_list.tpl' => 1,
  ),
),false)) {
function content_60a617b15f2710_10578702 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13646010660a617b11f94c6_40207755', 'page-sitemap');
?>

<?php }
/* {block 'page-sitemap-include-linkgroup-list'} */
class Block_9675379460a617b120dcd3_50417243 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                <?php $_smarty_tpl->_subTemplateRender('file:snippets/linkgroup_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('linkgroupIdentifier'=>$_smarty_tpl->tpl_vars['linkgroup']->value->getTemplate(),'tplscope'=>'sitemap'), 0, true);
?>
                                            <?php
}
}
/* {/block 'page-sitemap-include-linkgroup-list'} */
/* {block 'page-sitemap-pages-content'} */
class Block_146097853960a617b1203968_02500217 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_block_plugin37 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin37, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array());
$_block_repeat=true;
echo $_block_plugin37->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['linkgroups']->value, 'linkgroup');
$_smarty_tpl->tpl_vars['linkgroup']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['linkgroup']->value) {
$_smarty_tpl->tpl_vars['linkgroup']->do_else = false;
?>
                                <?php if (!empty($_smarty_tpl->tpl_vars['linkgroup']->value->getName()) && $_smarty_tpl->tpl_vars['linkgroup']->value->getName() !== 'hidden' && !empty($_smarty_tpl->tpl_vars['linkgroup']->value->getLinks())) {?>
                                    <?php $_block_plugin38 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin38, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'md'=>4,'lg'=>3));
$_block_repeat=true;
echo $_block_plugin38->render(array('cols'=>12,'md'=>4,'lg'=>3), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php $_block_plugin39 = isset($_smarty_tpl->smarty->registered_plugins['block']['nav'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['nav'][0][0] : null;
if (!is_callable(array($_block_plugin39, 'render'))) {
throw new SmartyException('block tag \'nav\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('nav', array('vertical'=>true));
$_block_repeat=true;
echo $_block_plugin39->render(array('vertical'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9675379460a617b120dcd3_50417243', 'page-sitemap-include-linkgroup-list', $this->tplIndex);
?>

                                        <?php $_block_repeat=false;
echo $_block_plugin39->render(array('vertical'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    <?php $_block_repeat=false;
echo $_block_plugin38->render(array('cols'=>12,'md'=>4,'lg'=>3), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php $_block_repeat=false;
echo $_block_plugin37->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php
}
}
/* {/block 'page-sitemap-pages-content'} */
/* {block 'page-sitemap-pages'} */
class Block_177367683460a617b11fdba7_84719351 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_pages','inContainer'=>false),$_smarty_tpl ) );?>

            <?php $_block_plugin35 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin35, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array('class'=>"sitemap-wrapper-linkgroup"));
$_block_repeat=true;
echo $_block_plugin35->render(array('class'=>"sitemap-wrapper-linkgroup"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'sitemapSites'),$_smarty_tpl ) );
$_prefixVariable17 = ob_get_clean();
$_block_plugin36 = isset($_smarty_tpl->smarty->registered_plugins['block']['card'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['card'][0][0] : null;
if (!is_callable(array($_block_plugin36, 'render'))) {
throw new SmartyException('block tag \'card\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('card', array('header'=>$_prefixVariable17,'class'=>"sitemap-group"));
$_block_repeat=true;
echo $_block_plugin36->render(array('header'=>$_prefixVariable17,'class'=>"sitemap-group"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_146097853960a617b1203968_02500217', 'page-sitemap-pages-content', $this->tplIndex);
?>

                <?php $_block_repeat=false;
echo $_block_plugin36->render(array('header'=>$_prefixVariable17,'class'=>"sitemap-group"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php $_block_repeat=false;
echo $_block_plugin35->render(array('class'=>"sitemap-wrapper-linkgroup"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php
}
}
/* {/block 'page-sitemap-pages'} */
/* {block 'page-sitemap-categories-content'} */
class Block_166385854460a617b121e3f2_85762770 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_block_plugin42 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin42, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array());
$_block_repeat=true;
echo $_block_plugin42->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oKategorieliste']->value->elemente, 'oKategorie');
$_smarty_tpl->tpl_vars['oKategorie']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oKategorie']->value) {
$_smarty_tpl->tpl_vars['oKategorie']->do_else = false;
?>
                                <?php if (count($_smarty_tpl->tpl_vars['oKategorie']->value->getChildren()) > 0) {?>
                                    <?php $_block_plugin43 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin43, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'md'=>4,'lg'=>3));
$_block_repeat=true;
echo $_block_plugin43->render(array('cols'=>12,'md'=>4,'lg'=>3), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <ul class="list-unstyled">
                                            <li>
                                                <?php $_block_plugin44 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin44, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['oKategorie']->value->getURL(),'title'=>$_smarty_tpl->tpl_vars['oKategorie']->value->getName(),'class'=>"nice-deco"));
$_block_repeat=true;
echo $_block_plugin44->render(array('href'=>$_smarty_tpl->tpl_vars['oKategorie']->value->getURL(),'title'=>$_smarty_tpl->tpl_vars['oKategorie']->value->getName(),'class'=>"nice-deco"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <strong><?php echo $_smarty_tpl->tpl_vars['oKategorie']->value->getShortName();?>
</strong>
                                                <?php $_block_repeat=false;
echo $_block_plugin44->render(array('href'=>$_smarty_tpl->tpl_vars['oKategorie']->value->getURL(),'title'=>$_smarty_tpl->tpl_vars['oKategorie']->value->getName(),'class'=>"nice-deco"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            </li>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oKategorie']->value->getChildren(), 'oSubKategorie');
$_smarty_tpl->tpl_vars['oSubKategorie']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oSubKategorie']->value) {
$_smarty_tpl->tpl_vars['oSubKategorie']->do_else = false;
?>
                                                <li>
                                                    <?php $_block_plugin45 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin45, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['oSubKategorie']->value->getURL(),'title'=>$_smarty_tpl->tpl_vars['oKategorie']->value->getName(),'class'=>"nice-deco"));
$_block_repeat=true;
echo $_block_plugin45->render(array('href'=>$_smarty_tpl->tpl_vars['oSubKategorie']->value->getURL(),'title'=>$_smarty_tpl->tpl_vars['oKategorie']->value->getName(),'class'=>"nice-deco"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                        <?php echo $_smarty_tpl->tpl_vars['oSubKategorie']->value->getShortName();?>

                                                    <?php $_block_repeat=false;
echo $_block_plugin45->render(array('href'=>$_smarty_tpl->tpl_vars['oSubKategorie']->value->getURL(),'title'=>$_smarty_tpl->tpl_vars['oKategorie']->value->getName(),'class'=>"nice-deco"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                </li>
                                                <?php if (count($_smarty_tpl->tpl_vars['oSubKategorie']->value->getChildren()) > 0) {?>
                                                    <li>
                                                        <ul class="sub-categories list-unstyled">
                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oSubKategorie']->value->getChildren(), 'oSubSubKategorie');
$_smarty_tpl->tpl_vars['oSubSubKategorie']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oSubSubKategorie']->value) {
$_smarty_tpl->tpl_vars['oSubSubKategorie']->do_else = false;
?>
                                                                <li>
                                                                    <?php $_block_plugin46 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin46, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['oSubSubKategorie']->value->getURL(),'title'=>$_smarty_tpl->tpl_vars['oKategorie']->value->getName(),'class'=>"nice-deco"));
$_block_repeat=true;
echo $_block_plugin46->render(array('href'=>$_smarty_tpl->tpl_vars['oSubSubKategorie']->value->getURL(),'title'=>$_smarty_tpl->tpl_vars['oKategorie']->value->getName(),'class'=>"nice-deco"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                                        <?php echo $_smarty_tpl->tpl_vars['oSubSubKategorie']->value->getShortName();?>

                                                                    <?php $_block_repeat=false;
echo $_block_plugin46->render(array('href'=>$_smarty_tpl->tpl_vars['oSubSubKategorie']->value->getURL(),'title'=>$_smarty_tpl->tpl_vars['oKategorie']->value->getName(),'class'=>"nice-deco"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                                </li>
                                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                        </ul>
                                                    </li>
                                                <?php }?>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </ul>
                                    <?php $_block_repeat=false;
echo $_block_plugin43->render(array('cols'=>12,'md'=>4,'lg'=>3), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                            <?php $_block_plugin47 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin47, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'md'=>4,'lg'=>3));
$_block_repeat=true;
echo $_block_plugin47->render(array('cols'=>12,'md'=>4,'lg'=>3), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <ul class="list-unstyled">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oKategorieliste']->value->elemente, 'oKategorie');
$_smarty_tpl->tpl_vars['oKategorie']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oKategorie']->value) {
$_smarty_tpl->tpl_vars['oKategorie']->do_else = false;
?>
                                        <?php if (count($_smarty_tpl->tpl_vars['oKategorie']->value->getChildren()) == 0) {?>
                                            <li>
                                                &nbsp;&nbsp;<?php $_block_plugin48 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin48, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['oKategorie']->value->getURL(),'title'=>$_smarty_tpl->tpl_vars['oKategorie']->value->getName(),'class'=>"nice-deco"));
$_block_repeat=true;
echo $_block_plugin48->render(array('href'=>$_smarty_tpl->tpl_vars['oKategorie']->value->getURL(),'title'=>$_smarty_tpl->tpl_vars['oKategorie']->value->getName(),'class'=>"nice-deco"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <?php echo $_smarty_tpl->tpl_vars['oKategorie']->value->getShortName();?>

                                                <?php $_block_repeat=false;
echo $_block_plugin48->render(array('href'=>$_smarty_tpl->tpl_vars['oKategorie']->value->getURL(),'title'=>$_smarty_tpl->tpl_vars['oKategorie']->value->getName(),'class'=>"nice-deco"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            </li>
                                        <?php }?>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </ul>
                            <?php $_block_repeat=false;
echo $_block_plugin47->render(array('cols'=>12,'md'=>4,'lg'=>3), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php $_block_repeat=false;
echo $_block_plugin42->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php
}
}
/* {/block 'page-sitemap-categories-content'} */
/* {block 'page-sitemap-categories'} */
class Block_38651796560a617b1219b54_26311493 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_categories','inContainer'=>false),$_smarty_tpl ) );?>

            <?php $_block_plugin40 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin40, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array('class'=>"sitemap-wrapper-categories"));
$_block_repeat=true;
echo $_block_plugin40->render(array('class'=>"sitemap-wrapper-categories"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'sitemapKats'),$_smarty_tpl ) );
$_prefixVariable18 = ob_get_clean();
$_block_plugin41 = isset($_smarty_tpl->smarty->registered_plugins['block']['card'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['card'][0][0] : null;
if (!is_callable(array($_block_plugin41, 'render'))) {
throw new SmartyException('block tag \'card\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('card', array('header'=>$_prefixVariable18,'class'=>"sitemap-group"));
$_block_repeat=true;
echo $_block_plugin41->render(array('header'=>$_prefixVariable18,'class'=>"sitemap-group"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_166385854460a617b121e3f2_85762770', 'page-sitemap-categories-content', $this->tplIndex);
?>

                <?php $_block_repeat=false;
echo $_block_plugin41->render(array('header'=>$_prefixVariable18,'class'=>"sitemap-group"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php $_block_repeat=false;
echo $_block_plugin40->render(array('class'=>"sitemap-wrapper-categories"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php
}
}
/* {/block 'page-sitemap-categories'} */
/* {block 'page-sitemap-manufacturer-content'} */
class Block_164417773860a617b1253978_94384314 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_block_plugin51 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin51, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array());
$_block_repeat=true;
echo $_block_plugin51->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oHersteller_arr']->value, 'oHersteller');
$_smarty_tpl->tpl_vars['oHersteller']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oHersteller']->value) {
$_smarty_tpl->tpl_vars['oHersteller']->do_else = false;
?>
                                <?php $_block_plugin52 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin52, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'md'=>4,'lg'=>3,'class'=>"sitemap-group-item"));
$_block_repeat=true;
echo $_block_plugin52->render(array('cols'=>12,'md'=>4,'lg'=>3,'class'=>"sitemap-group-item"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php $_block_plugin53 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin53, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['oHersteller']->value->cURL,'class'=>"nice-deco"));
$_block_repeat=true;
echo $_block_plugin53->render(array('href'=>$_smarty_tpl->tpl_vars['oHersteller']->value->cURL,'class'=>"nice-deco"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['oHersteller']->value->cName;
$_block_repeat=false;
echo $_block_plugin53->render(array('href'=>$_smarty_tpl->tpl_vars['oHersteller']->value->cURL,'class'=>"nice-deco"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php $_block_repeat=false;
echo $_block_plugin52->render(array('cols'=>12,'md'=>4,'lg'=>3,'class'=>"sitemap-group-item"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php $_block_repeat=false;
echo $_block_plugin51->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php
}
}
/* {/block 'page-sitemap-manufacturer-content'} */
/* {block 'page-sitemap-manufacturer'} */
class Block_84814544160a617b124ef92_38189558 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_manufacturers','inContainer'=>false),$_smarty_tpl ) );?>

            <?php $_block_plugin49 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin49, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array('class'=>"sitemap-wrapper-manufacturer"));
$_block_repeat=true;
echo $_block_plugin49->render(array('class'=>"sitemap-wrapper-manufacturer"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'sitemapNanufacturer'),$_smarty_tpl ) );
$_prefixVariable19 = ob_get_clean();
$_block_plugin50 = isset($_smarty_tpl->smarty->registered_plugins['block']['card'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['card'][0][0] : null;
if (!is_callable(array($_block_plugin50, 'render'))) {
throw new SmartyException('block tag \'card\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('card', array('header'=>$_prefixVariable19,'class'=>"sitemap-group"));
$_block_repeat=true;
echo $_block_plugin50->render(array('header'=>$_prefixVariable19,'class'=>"sitemap-group"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_164417773860a617b1253978_94384314', 'page-sitemap-manufacturer-content', $this->tplIndex);
?>

                <?php $_block_repeat=false;
echo $_block_plugin50->render(array('header'=>$_prefixVariable19,'class'=>"sitemap-group"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php $_block_repeat=false;
echo $_block_plugin49->render(array('class'=>"sitemap-wrapper-manufacturer"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php
}
}
/* {/block 'page-sitemap-manufacturer'} */
/* {block 'page-sitemap-news-content'} */
class Block_163618261560a617b1269554_30239343 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\includes\\vendor\\smarty\\smarty\\libs\\plugins\\function.math.php','function'=>'smarty_function_math',),));
?>

                        <?php $_block_plugin56 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin56, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array());
$_block_repeat=true;
echo $_block_plugin56->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oNewsMonatsUebersicht_arr']->value, 'oNewsMonatsUebersicht');
$_smarty_tpl->tpl_vars['oNewsMonatsUebersicht']->iteration = 0;
$_smarty_tpl->tpl_vars['oNewsMonatsUebersicht']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oNewsMonatsUebersicht']->value) {
$_smarty_tpl->tpl_vars['oNewsMonatsUebersicht']->do_else = false;
$_smarty_tpl->tpl_vars['oNewsMonatsUebersicht']->iteration++;
$__foreach_oNewsMonatsUebersicht_9_saved = $_smarty_tpl->tpl_vars['oNewsMonatsUebersicht'];
?>
                                <?php if (count($_smarty_tpl->tpl_vars['oNewsMonatsUebersicht']->value->oNews_arr) > 0) {?>
                                    <?php echo smarty_function_math(array('equation'=>'x-y','x'=>$_smarty_tpl->tpl_vars['oNewsMonatsUebersicht']->iteration,'y'=>1,'assign'=>'i'),$_smarty_tpl);?>

                                    <?php $_block_plugin57 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin57, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'md'=>4,'lg'=>3));
$_block_repeat=true;
echo $_block_plugin57->render(array('cols'=>12,'md'=>4,'lg'=>3), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <strong><?php $_block_plugin58 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin58, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['oNewsMonatsUebersicht']->value->cURLFull,'class'=>"nice-deco"));
$_block_repeat=true;
echo $_block_plugin58->render(array('href'=>$_smarty_tpl->tpl_vars['oNewsMonatsUebersicht']->value->cURLFull,'class'=>"nice-deco"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['oNewsMonatsUebersicht']->value->cName;
$_block_repeat=false;
echo $_block_plugin58->render(array('href'=>$_smarty_tpl->tpl_vars['oNewsMonatsUebersicht']->value->cURLFull,'class'=>"nice-deco"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></strong>
                                        <ul class="list-unstyled">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oNewsMonatsUebersicht']->value->oNews_arr, 'oNews');
$_smarty_tpl->tpl_vars['oNews']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oNews']->value) {
$_smarty_tpl->tpl_vars['oNews']->do_else = false;
?>
                                                <li>&nbsp;&nbsp;<?php $_block_plugin59 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin59, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['oNews']->value->cURLFull,'class'=>"nice-deco"));
$_block_repeat=true;
echo $_block_plugin59->render(array('href'=>$_smarty_tpl->tpl_vars['oNews']->value->cURLFull,'class'=>"nice-deco"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['oNews']->value->cBetreff;
$_block_repeat=false;
echo $_block_plugin59->render(array('href'=>$_smarty_tpl->tpl_vars['oNews']->value->cURLFull,'class'=>"nice-deco"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></li>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </ul>
                                    <?php $_block_repeat=false;
echo $_block_plugin57->render(array('cols'=>12,'md'=>4,'lg'=>3), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php }?>
                            <?php
$_smarty_tpl->tpl_vars['oNewsMonatsUebersicht'] = $__foreach_oNewsMonatsUebersicht_9_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php $_block_repeat=false;
echo $_block_plugin56->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php
}
}
/* {/block 'page-sitemap-news-content'} */
/* {block 'page-sitemap-news'} */
class Block_14788023460a617b1263a85_60607172 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_news','inContainer'=>false),$_smarty_tpl ) );?>

            <?php $_block_plugin54 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin54, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array('class'=>"sitemap-wrapper-news"));
$_block_repeat=true;
echo $_block_plugin54->render(array('class'=>"sitemap-wrapper-news"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'sitemapNews'),$_smarty_tpl ) );
$_prefixVariable20 = ob_get_clean();
$_block_plugin55 = isset($_smarty_tpl->smarty->registered_plugins['block']['card'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['card'][0][0] : null;
if (!is_callable(array($_block_plugin55, 'render'))) {
throw new SmartyException('block tag \'card\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('card', array('header'=>$_prefixVariable20,'class'=>"sitemap-group"));
$_block_repeat=true;
echo $_block_plugin55->render(array('header'=>$_prefixVariable20,'class'=>"sitemap-group"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_163618261560a617b1269554_30239343', 'page-sitemap-news-content', $this->tplIndex);
?>

                <?php $_block_repeat=false;
echo $_block_plugin55->render(array('header'=>$_prefixVariable20,'class'=>"sitemap-group"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php $_block_repeat=false;
echo $_block_plugin54->render(array('class'=>"sitemap-wrapper-news"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php
}
}
/* {/block 'page-sitemap-news'} */
/* {block 'page-sitemap-news-categories-content'} */
class Block_59293249160a617b15e0b58_53494969 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_block_plugin62 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin62, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array());
$_block_repeat=true;
echo $_block_plugin62->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oNewsKategorie_arr']->value, 'oNewsKategorie');
$_smarty_tpl->tpl_vars['oNewsKategorie']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oNewsKategorie']->value) {
$_smarty_tpl->tpl_vars['oNewsKategorie']->do_else = false;
?>
                                <?php if (count($_smarty_tpl->tpl_vars['oNewsKategorie']->value->oNews_arr) > 0) {?>
                                    <?php $_block_plugin63 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin63, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'md'=>4,'lg'=>3));
$_block_repeat=true;
echo $_block_plugin63->render(array('cols'=>12,'md'=>4,'lg'=>3), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <strong><?php $_block_plugin64 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin64, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['oNewsKategorie']->value->cURLFull));
$_block_repeat=true;
echo $_block_plugin64->render(array('href'=>$_smarty_tpl->tpl_vars['oNewsKategorie']->value->cURLFull), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['oNewsKategorie']->value->cName;
$_block_repeat=false;
echo $_block_plugin64->render(array('href'=>$_smarty_tpl->tpl_vars['oNewsKategorie']->value->cURLFull), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></strong>
                                        <ul class="list-unstyled">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oNewsKategorie']->value->oNews_arr, 'oNews');
$_smarty_tpl->tpl_vars['oNews']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oNews']->value) {
$_smarty_tpl->tpl_vars['oNews']->do_else = false;
?>
                                                <li>
                                                    &nbsp;&nbsp;<?php $_block_plugin65 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin65, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['oNews']->value->cURLFull,'class'=>"nice-deco"));
$_block_repeat=true;
echo $_block_plugin65->render(array('href'=>$_smarty_tpl->tpl_vars['oNews']->value->cURLFull,'class'=>"nice-deco"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['oNews']->value->cBetreff;
$_block_repeat=false;
echo $_block_plugin65->render(array('href'=>$_smarty_tpl->tpl_vars['oNews']->value->cURLFull,'class'=>"nice-deco"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                </li>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </ul>
                                    <?php $_block_repeat=false;
echo $_block_plugin63->render(array('cols'=>12,'md'=>4,'lg'=>3), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php $_block_repeat=false;
echo $_block_plugin62->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php
}
}
/* {/block 'page-sitemap-news-categories-content'} */
/* {block 'page-sitemap-news-categories'} */
class Block_185153325560a617b15dbe29_28977606 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_news_categories','inContainer'=>false),$_smarty_tpl ) );?>

            <?php $_block_plugin60 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin60, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array('class'=>"sitemap-wrapper-news-categories"));
$_block_repeat=true;
echo $_block_plugin60->render(array('class'=>"sitemap-wrapper-news-categories"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'sitemapNewsCats'),$_smarty_tpl ) );
$_prefixVariable21 = ob_get_clean();
$_block_plugin61 = isset($_smarty_tpl->smarty->registered_plugins['block']['card'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['card'][0][0] : null;
if (!is_callable(array($_block_plugin61, 'render'))) {
throw new SmartyException('block tag \'card\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('card', array('header'=>$_prefixVariable21,'class'=>"sitemap-group"));
$_block_repeat=true;
echo $_block_plugin61->render(array('header'=>$_prefixVariable21,'class'=>"sitemap-group"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59293249160a617b15e0b58_53494969', 'page-sitemap-news-categories-content', $this->tplIndex);
?>

                <?php $_block_repeat=false;
echo $_block_plugin61->render(array('header'=>$_prefixVariable21,'class'=>"sitemap-group"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php $_block_repeat=false;
echo $_block_plugin60->render(array('class'=>"sitemap-wrapper-news-categories"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php
}
}
/* {/block 'page-sitemap-news-categories'} */
/* {block 'page-sitemap'} */
class Block_13646010660a617b11f94c6_40207755 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page-sitemap' => 
  array (
    0 => 'Block_13646010660a617b11f94c6_40207755',
  ),
  'page-sitemap-pages' => 
  array (
    0 => 'Block_177367683460a617b11fdba7_84719351',
  ),
  'page-sitemap-pages-content' => 
  array (
    0 => 'Block_146097853960a617b1203968_02500217',
  ),
  'page-sitemap-include-linkgroup-list' => 
  array (
    0 => 'Block_9675379460a617b120dcd3_50417243',
  ),
  'page-sitemap-categories' => 
  array (
    0 => 'Block_38651796560a617b1219b54_26311493',
  ),
  'page-sitemap-categories-content' => 
  array (
    0 => 'Block_166385854460a617b121e3f2_85762770',
  ),
  'page-sitemap-manufacturer' => 
  array (
    0 => 'Block_84814544160a617b124ef92_38189558',
  ),
  'page-sitemap-manufacturer-content' => 
  array (
    0 => 'Block_164417773860a617b1253978_94384314',
  ),
  'page-sitemap-news' => 
  array (
    0 => 'Block_14788023460a617b1263a85_60607172',
  ),
  'page-sitemap-news-content' => 
  array (
    0 => 'Block_163618261560a617b1269554_30239343',
  ),
  'page-sitemap-news-categories' => 
  array (
    0 => 'Block_185153325560a617b15dbe29_28977606',
  ),
  'page-sitemap-news-categories-content' => 
  array (
    0 => 'Block_59293249160a617b15e0b58_53494969',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['sitemap']['sitemap_seiten_anzeigen'] === 'Y') {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_177367683460a617b11fdba7_84719351', 'page-sitemap-pages', $this->tplIndex);
?>

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['sitemap']['sitemap_kategorien_anzeigen'] === 'Y' && (isset($_smarty_tpl->tpl_vars['oKategorieliste']->value->elemente)) && count($_smarty_tpl->tpl_vars['oKategorieliste']->value->elemente) > 0) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_38651796560a617b1219b54_26311493', 'page-sitemap-categories', $this->tplIndex);
?>

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['sitemap']['sitemap_hersteller_anzeigen'] === 'Y' && count($_smarty_tpl->tpl_vars['oHersteller_arr']->value) > 0) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_84814544160a617b124ef92_38189558', 'page-sitemap-manufacturer', $this->tplIndex);
?>

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['news']['news_benutzen'] === 'Y' && $_smarty_tpl->tpl_vars['Einstellungen']->value['sitemap']['sitemap_news_anzeigen'] === 'Y' && !empty($_smarty_tpl->tpl_vars['oNewsMonatsUebersicht_arr']->value) && count($_smarty_tpl->tpl_vars['oNewsMonatsUebersicht_arr']->value) > 0) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14788023460a617b1263a85_60607172', 'page-sitemap-news', $this->tplIndex);
?>

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['news']['news_benutzen'] === 'Y' && $_smarty_tpl->tpl_vars['Einstellungen']->value['sitemap']['sitemap_newskategorien_anzeigen'] === 'Y' && !empty($_smarty_tpl->tpl_vars['oNewsKategorie_arr']->value) && count($_smarty_tpl->tpl_vars['oNewsKategorie_arr']->value) > 0) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_185153325560a617b15dbe29_28977606', 'page-sitemap-news-categories', $this->tplIndex);
?>

    <?php }
}
}
/* {/block 'page-sitemap'} */
}
