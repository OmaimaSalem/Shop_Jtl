<?php
/* Smarty version 3.1.38, created on 2021-05-20 17:13:14
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\snippets\pagination.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a67c8aaff951_81183021',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd24e92814159f4af236258ecd7d6aea9c34517ef' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\snippets\\pagination.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a67c8aaff951_81183021 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_114598393460a67c89e704c4_62539364', 'snippets-pagination');
?>

<?php }
/* {block 'snippets-pagination-page-link-previous'} */
class Block_11338354560a67c8a3eb7e2_78838580 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <li class="page-item">
                                                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'previous'),$_smarty_tpl ) );
$_prefixVariable6 = ob_get_clean();
$_block_plugin5 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin5, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('class'=>"page-link",'href'=>((string)$_smarty_tpl->tpl_vars['cThisUrl']->value)."?".((string)$_smarty_tpl->tpl_vars['oPagination']->value->getId())."_nPage=".((string)$_smarty_tpl->tpl_vars['oPagination']->value->getPrevPage()).((string)$_smarty_tpl->tpl_vars['cUrlAppend']->value).((string)$_smarty_tpl->tpl_vars['cAnchor']->value),'aria'=>array("label"=>$_prefixVariable6)));
$_block_repeat=true;
echo $_block_plugin5->render(array('class'=>"page-link",'href'=>((string)$_smarty_tpl->tpl_vars['cThisUrl']->value)."?".((string)$_smarty_tpl->tpl_vars['oPagination']->value->getId())."_nPage=".((string)$_smarty_tpl->tpl_vars['oPagination']->value->getPrevPage()).((string)$_smarty_tpl->tpl_vars['cUrlAppend']->value).((string)$_smarty_tpl->tpl_vars['cAnchor']->value),'aria'=>array("label"=>$_prefixVariable6)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <i class="fas fa-long-arrow-alt-left"></i>
                                                <?php $_block_repeat=false;
echo $_block_plugin5->render(array('class'=>"page-link",'href'=>((string)$_smarty_tpl->tpl_vars['cThisUrl']->value)."?".((string)$_smarty_tpl->tpl_vars['oPagination']->value->getId())."_nPage=".((string)$_smarty_tpl->tpl_vars['oPagination']->value->getPrevPage()).((string)$_smarty_tpl->tpl_vars['cUrlAppend']->value).((string)$_smarty_tpl->tpl_vars['cAnchor']->value),'aria'=>array("label"=>$_prefixVariable6)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            </li>
                                        <?php
}
}
/* {/block 'snippets-pagination-page-link-previous'} */
/* {block 'snippets-pagination-page-link-next'} */
class Block_87985758560a67c8a748940_33498151 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'next'),$_smarty_tpl ) );
$_prefixVariable8 = ob_get_clean();
$_block_plugin9 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin9, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('class'=>"page-link",'href'=>((string)$_smarty_tpl->tpl_vars['cThisUrl']->value)."?".((string)$_smarty_tpl->tpl_vars['oPagination']->value->getId())."_nPage=".((string)$_smarty_tpl->tpl_vars['oPagination']->value->getNextPage()).((string)$_smarty_tpl->tpl_vars['cUrlAppend']->value).((string)$_smarty_tpl->tpl_vars['cAnchor']->value),'aria'=>array("label"=>$_prefixVariable8)));
$_block_repeat=true;
echo $_block_plugin9->render(array('class'=>"page-link",'href'=>((string)$_smarty_tpl->tpl_vars['cThisUrl']->value)."?".((string)$_smarty_tpl->tpl_vars['oPagination']->value->getId())."_nPage=".((string)$_smarty_tpl->tpl_vars['oPagination']->value->getNextPage()).((string)$_smarty_tpl->tpl_vars['cUrlAppend']->value).((string)$_smarty_tpl->tpl_vars['cAnchor']->value),'aria'=>array("label"=>$_prefixVariable8)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <i class="fas fa-long-arrow-alt-right"></i>
                                                <?php $_block_repeat=false;
echo $_block_plugin9->render(array('class'=>"page-link",'href'=>((string)$_smarty_tpl->tpl_vars['cThisUrl']->value)."?".((string)$_smarty_tpl->tpl_vars['oPagination']->value->getId())."_nPage=".((string)$_smarty_tpl->tpl_vars['oPagination']->value->getNextPage()).((string)$_smarty_tpl->tpl_vars['cUrlAppend']->value).((string)$_smarty_tpl->tpl_vars['cAnchor']->value),'aria'=>array("label"=>$_prefixVariable8)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            <?php
}
}
/* {/block 'snippets-pagination-page-link-next'} */
/* {block 'snippets-pagination-page-count-multiple'} */
class Block_21793459160a67c8a351ad4_01216375 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php if (in_array('label',$_smarty_tpl->tpl_vars['parts']->value)) {?>
                            <?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>"auto",'class'=>"font-weight-bold-util"));
$_block_repeat=true;
echo $_block_plugin2->render(array('cols'=>"auto",'class'=>"font-weight-bold-util"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php ob_start();
echo $_smarty_tpl->tpl_vars['oPagination']->value->getFirstPageItem()+1;
$_prefixVariable2 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['oPagination']->value->getFirstPageItem()+$_smarty_tpl->tpl_vars['oPagination']->value->getPageItemCount();
$_prefixVariable3 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['oPagination']->value->getItemCount();
$_prefixVariable4 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'paginationEntryPagination','printf'=>(((($_prefixVariable2).(':::')).($_prefixVariable3)).(':::')).($_prefixVariable4)),$_smarty_tpl ) );?>

                            <?php $_block_repeat=false;
echo $_block_plugin2->render(array('cols'=>"auto",'class'=>"font-weight-bold-util"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php }?>
                        <?php ob_start();
if ($_smarty_tpl->tpl_vars['showFilter']->value === true && (in_array('count',$_smarty_tpl->tpl_vars['parts']->value) || in_array('sort',$_smarty_tpl->tpl_vars['parts']->value))) {
echo "border-md-right";
}
$_prefixVariable5=ob_get_clean();
$_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>"auto",'class'=>"ml-auto-util ".$_prefixVariable5));
$_block_repeat=true;
echo $_block_plugin3->render(array('cols'=>"auto",'class'=>"ml-auto-util ".$_prefixVariable5), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php $_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['nav'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['nav'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'render'))) {
throw new SmartyException('block tag \'nav\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('nav', array('tag'=>'nav','aria'=>array("label"=>"pagination")));
$_block_repeat=true;
echo $_block_plugin4->render(array('tag'=>'nav','aria'=>array("label"=>"pagination")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <ul class="pagination">
                                <?php if (in_array('pagi',$_smarty_tpl->tpl_vars['parts']->value)) {?>
                                    <?php if ($_smarty_tpl->tpl_vars['oPagination']->value->getPage() > 0) {?>
                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11338354560a67c8a3eb7e2_78838580', 'snippets-pagination-page-link-previous', $this->tplIndex);
?>

                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['oPagination']->value->getLeftRangePage() > 0) {?>
                                        <li class="page-item">
                                            <?php $_block_plugin6 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin6, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('class'=>"page-link",'href'=>((string)$_smarty_tpl->tpl_vars['cThisUrl']->value)."?".((string)$_smarty_tpl->tpl_vars['oPagination']->value->getId())."_nPage=0".((string)$_smarty_tpl->tpl_vars['cUrlAppend']->value).((string)$_smarty_tpl->tpl_vars['cAnchor']->value)));
$_block_repeat=true;
echo $_block_plugin6->render(array('class'=>"page-link",'href'=>((string)$_smarty_tpl->tpl_vars['cThisUrl']->value)."?".((string)$_smarty_tpl->tpl_vars['oPagination']->value->getId())."_nPage=0".((string)$_smarty_tpl->tpl_vars['cUrlAppend']->value).((string)$_smarty_tpl->tpl_vars['cAnchor']->value)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                1
                                            <?php $_block_repeat=false;
echo $_block_plugin6->render(array('class'=>"page-link",'href'=>((string)$_smarty_tpl->tpl_vars['cThisUrl']->value)."?".((string)$_smarty_tpl->tpl_vars['oPagination']->value->getId())."_nPage=0".((string)$_smarty_tpl->tpl_vars['cUrlAppend']->value).((string)$_smarty_tpl->tpl_vars['cAnchor']->value)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        </li>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['oPagination']->value->getLeftRangePage() > 1) {?>
                                        <li class="page-item">
                                            <span class="page-text">&hellip;</span>
                                        </li>
                                    <?php }?>
                                    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['oPagination']->value->getRightRangePage()+1 - ($_smarty_tpl->tpl_vars['oPagination']->value->getLeftRangePage()) : $_smarty_tpl->tpl_vars['oPagination']->value->getLeftRangePage()-($_smarty_tpl->tpl_vars['oPagination']->value->getRightRangePage())+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['oPagination']->value->getLeftRangePage(), $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                        <li class="page-item <?php if ($_smarty_tpl->tpl_vars['oPagination']->value->getPage() === $_smarty_tpl->tpl_vars['i']->value) {?>active<?php }?>">
                                            <?php ob_start();
if ($_smarty_tpl->tpl_vars['oPagination']->value->getPage() === $_smarty_tpl->tpl_vars['i']->value) {
echo "active";
} elseif ($_smarty_tpl->tpl_vars['i']->value > 0 && $_smarty_tpl->tpl_vars['i']->value < $_smarty_tpl->tpl_vars['oPagination']->value->getPageCount()-1) {
echo "d-none d-sm-block";
}
$_prefixVariable7=ob_get_clean();
$_block_plugin7 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin7, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('class'=>"page-link ".$_prefixVariable7,'href'=>((string)$_smarty_tpl->tpl_vars['cThisUrl']->value)."?".((string)$_smarty_tpl->tpl_vars['oPagination']->value->getId())."_nPage=".((string)$_smarty_tpl->tpl_vars['i']->value).((string)$_smarty_tpl->tpl_vars['cUrlAppend']->value).((string)$_smarty_tpl->tpl_vars['cAnchor']->value)));
$_block_repeat=true;
echo $_block_plugin7->render(array('class'=>"page-link ".$_prefixVariable7,'href'=>((string)$_smarty_tpl->tpl_vars['cThisUrl']->value)."?".((string)$_smarty_tpl->tpl_vars['oPagination']->value->getId())."_nPage=".((string)$_smarty_tpl->tpl_vars['i']->value).((string)$_smarty_tpl->tpl_vars['cUrlAppend']->value).((string)$_smarty_tpl->tpl_vars['cAnchor']->value)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                <?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>

                                            <?php $_block_repeat=false;
echo $_block_plugin7->render(array('class'=>"page-link ".$_prefixVariable7,'href'=>((string)$_smarty_tpl->tpl_vars['cThisUrl']->value)."?".((string)$_smarty_tpl->tpl_vars['oPagination']->value->getId())."_nPage=".((string)$_smarty_tpl->tpl_vars['i']->value).((string)$_smarty_tpl->tpl_vars['cUrlAppend']->value).((string)$_smarty_tpl->tpl_vars['cAnchor']->value)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        </li>
                                    <?php }
}
?>
                                    <?php if ($_smarty_tpl->tpl_vars['oPagination']->value->getRightRangePage() < $_smarty_tpl->tpl_vars['oPagination']->value->getPageCount()-2) {?>
                                        <li class="page-item">
                                            <span class="page-text">&hellip;</span>
                                        </li>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['oPagination']->value->getRightRangePage() < $_smarty_tpl->tpl_vars['oPagination']->value->getPageCount()-1) {?>
                                        <li class="page-item">
                                            <?php $_block_plugin8 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin8, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('class'=>"page-link",'href'=>((string)$_smarty_tpl->tpl_vars['cThisUrl']->value)."?".((string)$_smarty_tpl->tpl_vars['oPagination']->value->getId())."_nPage=".((string)($_smarty_tpl->tpl_vars['oPagination']->value->getPageCount()-1)).((string)$_smarty_tpl->tpl_vars['cUrlAppend']->value).((string)$_smarty_tpl->tpl_vars['cAnchor']->value)));
$_block_repeat=true;
echo $_block_plugin8->render(array('class'=>"page-link",'href'=>((string)$_smarty_tpl->tpl_vars['cThisUrl']->value)."?".((string)$_smarty_tpl->tpl_vars['oPagination']->value->getId())."_nPage=".((string)($_smarty_tpl->tpl_vars['oPagination']->value->getPageCount()-1)).((string)$_smarty_tpl->tpl_vars['cUrlAppend']->value).((string)$_smarty_tpl->tpl_vars['cAnchor']->value)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                <?php echo $_smarty_tpl->tpl_vars['oPagination']->value->getPageCount();?>

                                            <?php $_block_repeat=false;
echo $_block_plugin8->render(array('class'=>"page-link",'href'=>((string)$_smarty_tpl->tpl_vars['cThisUrl']->value)."?".((string)$_smarty_tpl->tpl_vars['oPagination']->value->getId())."_nPage=".((string)($_smarty_tpl->tpl_vars['oPagination']->value->getPageCount()-1)).((string)$_smarty_tpl->tpl_vars['cUrlAppend']->value).((string)$_smarty_tpl->tpl_vars['cAnchor']->value)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        </li>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['oPagination']->value->getPage() < $_smarty_tpl->tpl_vars['oPagination']->value->getPageCount()-1) {?>
                                        <li class="page-item">
                                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_87985758560a67c8a748940_33498151', 'snippets-pagination-page-link-next', $this->tplIndex);
?>

                                        </li>
                                    <?php }?>
                                <?php }?>
                            </ul>
                            <?php $_block_repeat=false;
echo $_block_plugin4->render(array('tag'=>'nav','aria'=>array("label"=>"pagination")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php $_block_repeat=false;
echo $_block_plugin3->render(array('cols'=>"auto",'class'=>"ml-auto-util ".$_prefixVariable5), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php
}
}
/* {/block 'snippets-pagination-page-count-multiple'} */
/* {block 'snippets-pagination-page-count-one'} */
class Block_195946135460a67c8a758481_89262001 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_block_plugin10 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin10, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>"auto",'class'=>"pagination-entries"));
$_block_repeat=true;
echo $_block_plugin10->render(array('cols'=>"auto",'class'=>"pagination-entries"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'paginationTotalEntries'),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['oPagination']->value->getItemCount();?>

                    <?php $_block_repeat=false;
echo $_block_plugin10->render(array('cols'=>"auto",'class'=>"pagination-entries"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php
}
}
/* {/block 'snippets-pagination-page-count-one'} */
/* {block 'snippets-pagination-form-hidden'} */
class Block_52567799960a67c8a837736_94216122 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cParam_arr']->value, 'cParamValue', false, 'cParamName');
$_smarty_tpl->tpl_vars['cParamValue']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cParamName']->value => $_smarty_tpl->tpl_vars['cParamValue']->value) {
$_smarty_tpl->tpl_vars['cParamValue']->do_else = false;
?>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"hidden",'name'=>$_smarty_tpl->tpl_vars['cParamName']->value,'value'=>$_smarty_tpl->tpl_vars['cParamValue']->value),$_smarty_tpl ) );?>

                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php
}
}
/* {/block 'snippets-pagination-form-hidden'} */
/* {block 'snippets-pagination-form-items-pre-page'} */
class Block_134027466760a67c8a8cf900_85538303 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'paginationEntriesPerPage'),$_smarty_tpl ) );
$_prefixVariable9=ob_get_clean();
$_block_plugin15 = isset($_smarty_tpl->smarty->registered_plugins['block']['select'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['select'][0][0] : null;
if (!is_callable(array($_block_plugin15, 'render'))) {
throw new SmartyException('block tag \'select\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('select', array('class'=>"pagination-selects-entries custom-select",'name'=>((string)$_smarty_tpl->tpl_vars['oPagination']->value->getId())."_nItemsPerPage",'id'=>((string)$_smarty_tpl->tpl_vars['oPagination']->value->getId())."_nItemsPerPage",'title'=>$_prefixVariable9));
$_block_repeat=true;
echo $_block_plugin15->render(array('class'=>"pagination-selects-entries custom-select",'name'=>((string)$_smarty_tpl->tpl_vars['oPagination']->value->getId())."_nItemsPerPage",'id'=>((string)$_smarty_tpl->tpl_vars['oPagination']->value->getId())."_nItemsPerPage",'title'=>$_prefixVariable9), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                <option disabled><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'paginationEntriesPerPage'),$_smarty_tpl ) );?>
</option>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oPagination']->value->getItemsPerPageOptions(), 'nItemsPerPageOption');
$_smarty_tpl->tpl_vars['nItemsPerPageOption']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['nItemsPerPageOption']->value) {
$_smarty_tpl->tpl_vars['nItemsPerPageOption']->do_else = false;
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['nItemsPerPageOption']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['oPagination']->value->getItemsPerPage() == $_smarty_tpl->tpl_vars['nItemsPerPageOption']->value) {?> selected="selected"<?php }?>>
                                                        <?php echo $_smarty_tpl->tpl_vars['nItemsPerPageOption']->value;?>

                                                    </option>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                <option value="-1"<?php if ($_smarty_tpl->tpl_vars['oPagination']->value->getItemsPerPage() == -1) {?> selected="selected"<?php }?>>
                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'showAll'),$_smarty_tpl ) );?>

                                                </option>
                                            <?php $_block_repeat=false;
echo $_block_plugin15->render(array('class'=>"pagination-selects-entries custom-select",'name'=>((string)$_smarty_tpl->tpl_vars['oPagination']->value->getId())."_nItemsPerPage",'id'=>((string)$_smarty_tpl->tpl_vars['oPagination']->value->getId())."_nItemsPerPage",'title'=>$_prefixVariable9), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        <?php
}
}
/* {/block 'snippets-pagination-form-items-pre-page'} */
/* {block 'snippets-pagination-form-sort'} */
class Block_111981615360a67c8aadd8d4_05863037 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'sorting','section'=>'productOverview'),$_smarty_tpl ) );
$_prefixVariable10=ob_get_clean();
$_block_plugin17 = isset($_smarty_tpl->smarty->registered_plugins['block']['select'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['select'][0][0] : null;
if (!is_callable(array($_block_plugin17, 'render'))) {
throw new SmartyException('block tag \'select\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('select', array('class'=>"custom-select pagination-selects-sort col-md-auto",'name'=>((string)$_smarty_tpl->tpl_vars['oPagination']->value->getId())."_nSortByDir",'id'=>((string)$_smarty_tpl->tpl_vars['oPagination']->value->getId())."_nSortByDir",'title'=>$_prefixVariable10));
$_block_repeat=true;
echo $_block_plugin17->render(array('class'=>"custom-select pagination-selects-sort col-md-auto",'name'=>((string)$_smarty_tpl->tpl_vars['oPagination']->value->getId())."_nSortByDir",'id'=>((string)$_smarty_tpl->tpl_vars['oPagination']->value->getId())."_nSortByDir",'title'=>$_prefixVariable10), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                <option disabled><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'sorting','section'=>'productOverview'),$_smarty_tpl ) );?>
</option>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oPagination']->value->getSortByOptions(), 'cSortByOption', false, 'i');
$_smarty_tpl->tpl_vars['cSortByOption']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['cSortByOption']->value) {
$_smarty_tpl->tpl_vars['cSortByOption']->do_else = false;
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value*2;?>
"
                                                            <?php if ($_smarty_tpl->tpl_vars['i']->value*2 == $_smarty_tpl->tpl_vars['oPagination']->value->getSortByDir()) {?> selected="selected"<?php }?>>
                                                        <?php echo $_smarty_tpl->tpl_vars['cSortByOption']->value[1];?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'asc'),$_smarty_tpl ) );?>

                                                    </option>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value*2+1;?>
"
                                                            <?php if ($_smarty_tpl->tpl_vars['i']->value*2+1 == $_smarty_tpl->tpl_vars['oPagination']->value->getSortByDir()) {?> selected="selected"<?php }?>>
                                                        <?php echo $_smarty_tpl->tpl_vars['cSortByOption']->value[1];?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'desc'),$_smarty_tpl ) );?>

                                                    </option>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            <?php $_block_repeat=false;
echo $_block_plugin17->render(array('class'=>"custom-select pagination-selects-sort col-md-auto",'name'=>((string)$_smarty_tpl->tpl_vars['oPagination']->value->getId())."_nSortByDir",'id'=>((string)$_smarty_tpl->tpl_vars['oPagination']->value->getId())."_nSortByDir",'title'=>$_prefixVariable10), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        <?php
}
}
/* {/block 'snippets-pagination-form-sort'} */
/* {block 'snippets-pagination-form-content'} */
class Block_105458698360a67c8a7cdcd5_49154039 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php $_block_plugin13 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin13, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array());
$_block_repeat=true;
echo $_block_plugin13->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_52567799960a67c8a837736_94216122', 'snippets-pagination-form-hidden', $this->tplIndex);
?>

                                <?php if (in_array('count',$_smarty_tpl->tpl_vars['parts']->value)) {?>
                                    <?php $_block_plugin14 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin14, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'md'=>'auto'));
$_block_repeat=true;
echo $_block_plugin14->render(array('cols'=>12,'md'=>'auto'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_134027466760a67c8a8cf900_85538303', 'snippets-pagination-form-items-pre-page', $this->tplIndex);
?>

                                    <?php $_block_repeat=false;
echo $_block_plugin14->render(array('cols'=>12,'md'=>'auto'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php }?>
                                <?php if (count($_smarty_tpl->tpl_vars['oPagination']->value->getSortByOptions()) > 0 && in_array('sort',$_smarty_tpl->tpl_vars['parts']->value)) {?>
                                    <?php $_block_plugin16 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin16, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'md'=>'auto'));
$_block_repeat=true;
echo $_block_plugin16->render(array('cols'=>12,'md'=>'auto'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_111981615360a67c8aadd8d4_05863037', 'snippets-pagination-form-sort', $this->tplIndex);
?>

                                    <?php $_block_repeat=false;
echo $_block_plugin16->render(array('cols'=>12,'md'=>'auto'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php }?>
                                <?php $_block_repeat=false;
echo $_block_plugin13->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php
}
}
/* {/block 'snippets-pagination-form-content'} */
/* {block 'snippets-pagination-form'} */
class Block_214352200460a67c8a7bbc53_10723304 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_block_plugin11 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin11, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>"12",'md'=>"auto",'class'=>"pagination-selects"));
$_block_repeat=true;
echo $_block_plugin11->render(array('cols'=>"12",'md'=>"auto",'class'=>"pagination-selects"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php $_block_plugin12 = isset($_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0] : null;
if (!is_callable(array($_block_plugin12, 'render'))) {
throw new SmartyException('block tag \'form\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('action'=>((string)$_smarty_tpl->tpl_vars['cThisUrl']->value).((string)$_smarty_tpl->tpl_vars['cAnchor']->value),'method'=>"get"));
$_block_repeat=true;
echo $_block_plugin12->render(array('action'=>((string)$_smarty_tpl->tpl_vars['cThisUrl']->value).((string)$_smarty_tpl->tpl_vars['cAnchor']->value),'method'=>"get"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_105458698360a67c8a7cdcd5_49154039', 'snippets-pagination-form-content', $this->tplIndex);
?>

                        <?php $_block_repeat=false;
echo $_block_plugin12->render(array('action'=>((string)$_smarty_tpl->tpl_vars['cThisUrl']->value).((string)$_smarty_tpl->tpl_vars['cAnchor']->value),'method'=>"get"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php $_block_repeat=false;
echo $_block_plugin11->render(array('cols'=>"12",'md'=>"auto",'class'=>"pagination-selects"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php
}
}
/* {/block 'snippets-pagination-form'} */
/* {block 'snippets-pagination-content'} */
class Block_33690728160a67c8a2380b6_96824370 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php ob_start();
if ($_smarty_tpl->tpl_vars['noWrapper']->value === true) {
echo "pagination-no-wrapper";
}
$_prefixVariable1=ob_get_clean();
$_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('class'=>$_prefixVariable1." pagination-wrapper clearfix"));
$_block_repeat=true;
echo $_block_plugin1->render(array('class'=>$_prefixVariable1." pagination-wrapper clearfix"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php if ($_smarty_tpl->tpl_vars['oPagination']->value->getPageCount() > 1) {?>
                <?php if (in_array('label',$_smarty_tpl->tpl_vars['parts']->value) || in_array('pagi',$_smarty_tpl->tpl_vars['parts']->value)) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21793459160a67c8a351ad4_01216375', 'snippets-pagination-page-count-multiple', $this->tplIndex);
?>

                <?php }?>
            <?php } else { ?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_195946135460a67c8a758481_89262001', 'snippets-pagination-page-count-one', $this->tplIndex);
?>

            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['showFilter']->value === true && (in_array('count',$_smarty_tpl->tpl_vars['parts']->value) || in_array('sort',$_smarty_tpl->tpl_vars['parts']->value))) {?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_214352200460a67c8a7bbc53_10723304', 'snippets-pagination-form', $this->tplIndex);
?>

            <?php }?>
        <?php $_block_repeat=false;
echo $_block_plugin1->render(array('class'=>$_prefixVariable1." pagination-wrapper clearfix"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php
}
}
/* {/block 'snippets-pagination-content'} */
/* {block 'snippets-pagination'} */
class Block_114598393460a67c89e704c4_62539364 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-pagination' => 
  array (
    0 => 'Block_114598393460a67c89e704c4_62539364',
  ),
  'snippets-pagination-content' => 
  array (
    0 => 'Block_33690728160a67c8a2380b6_96824370',
  ),
  'snippets-pagination-page-count-multiple' => 
  array (
    0 => 'Block_21793459160a67c8a351ad4_01216375',
  ),
  'snippets-pagination-page-link-previous' => 
  array (
    0 => 'Block_11338354560a67c8a3eb7e2_78838580',
  ),
  'snippets-pagination-page-link-next' => 
  array (
    0 => 'Block_87985758560a67c8a748940_33498151',
  ),
  'snippets-pagination-page-count-one' => 
  array (
    0 => 'Block_195946135460a67c8a758481_89262001',
  ),
  'snippets-pagination-form' => 
  array (
    0 => 'Block_214352200460a67c8a7bbc53_10723304',
  ),
  'snippets-pagination-form-content' => 
  array (
    0 => 'Block_105458698360a67c8a7cdcd5_49154039',
  ),
  'snippets-pagination-form-hidden' => 
  array (
    0 => 'Block_52567799960a67c8a837736_94216122',
  ),
  'snippets-pagination-form-items-pre-page' => 
  array (
    0 => 'Block_134027466760a67c8a8cf900_85538303',
  ),
  'snippets-pagination-form-sort' => 
  array (
    0 => 'Block_111981615360a67c8aadd8d4_05863037',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_assignInScope('cParam_arr', (($tmp = $_smarty_tpl->tpl_vars['cParam_arr']->value ?? null)===null||$tmp==='' ? array() : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('noWrapper', (($tmp = $_smarty_tpl->tpl_vars['noWrapper']->value ?? null)===null||$tmp==='' ? false : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('cUrlAppend', http_build_query($_smarty_tpl->tpl_vars['cParam_arr']->value));?>
        <?php $_smarty_tpl->_assignInScope('parts', (($tmp = $_smarty_tpl->tpl_vars['parts']->value ?? null)===null||$tmp==='' ? array('label','pagi','count','sort') : $tmp));?>

    <?php if (!empty($_smarty_tpl->tpl_vars['cAnchor']->value)) {?>
        <?php $_smarty_tpl->_assignInScope('cAnchor', ('#').($_smarty_tpl->tpl_vars['cAnchor']->value));?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('cAnchor', '');?>
    <?php }?>
    <?php $_smarty_tpl->_assignInScope('showFilter', (($tmp = $_smarty_tpl->tpl_vars['showFilter']->value ?? null)===null||$tmp==='' ? true : $tmp));?>

    <?php if (!empty($_smarty_tpl->tpl_vars['cUrlAppend']->value)) {?>
        <?php $_smarty_tpl->_assignInScope('cUrlAppend', ('&').($_smarty_tpl->tpl_vars['cUrlAppend']->value));?>
    <?php }?>

    <?php $_smarty_tpl->_assignInScope('cThisUrl', (($tmp = $_smarty_tpl->tpl_vars['cThisUrl']->value ?? null)===null||$tmp==='' ? '' : $tmp));?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>$_smarty_tpl->tpl_vars['cThisUrl']->value,'assign'=>'cThisUrl'),$_smarty_tpl ) );?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_33690728160a67c8a2380b6_96824370', 'snippets-pagination-content', $this->tplIndex);
?>

<?php
}
}
/* {/block 'snippets-pagination'} */
}
