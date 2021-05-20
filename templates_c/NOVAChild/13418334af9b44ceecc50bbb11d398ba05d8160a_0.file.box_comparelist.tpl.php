<?php
/* Smarty version 3.1.38, created on 2021-05-20 10:02:54
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\boxes\box_comparelist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a617ae086c40_76410232',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13418334af9b44ceecc50bbb11d398ba05d8160a' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\boxes\\box_comparelist.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/image.tpl' => 1,
  ),
),false)) {
function content_60a617ae086c40_76410232 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_80932649160a617adc36857_36672431', 'boxes-box-comparelist');
?>

<?php }
/* {block 'boxes-box-comparelist-toggle-title'} */
class Block_150693153260a617adc3fe90_71480884 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_block_plugin23 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin23, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('id'=>"crd-hdr-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'href'=>"#crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'data'=>array("toggle"=>"collapse"),'role'=>"button",'aria'=>array("expanded"=>"false","controls"=>"crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID())),'class'=>"box-normal-link dropdown-toggle"));
$_block_repeat=true;
echo $_block_plugin23->render(array('id'=>"crd-hdr-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'href'=>"#crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'data'=>array("toggle"=>"collapse"),'role'=>"button",'aria'=>array("expanded"=>"false","controls"=>"crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID())),'class'=>"box-normal-link dropdown-toggle"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'compare'),$_smarty_tpl ) );?>

                    <?php $_block_repeat=false;
echo $_block_plugin23->render(array('id'=>"crd-hdr-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'href'=>"#crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'data'=>array("toggle"=>"collapse"),'role'=>"button",'aria'=>array("expanded"=>"false","controls"=>"crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID())),'class'=>"box-normal-link dropdown-toggle"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php
}
}
/* {/block 'boxes-box-comparelist-toggle-title'} */
/* {block 'boxes-box-comparelist-title'} */
class Block_127396794660a617adc4b517_74234546 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="productlist-filter-headline align-items-center-util d-none d-md-flex">
                        <i class='fas fa-list icon-mr-2'></i>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'compare'),$_smarty_tpl ) );?>

                    </div>
                <?php
}
}
/* {/block 'boxes-box-comparelist-title'} */
/* {block 'boxes-box-comparelist-dropdown-products-image'} */
class Block_149810179860a617add10b82_50155941 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                            <?php $_block_plugin27 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin27, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['product']->value->cURLFull));
$_block_repeat=true;
echo $_block_plugin27->render(array('href'=>$_smarty_tpl->tpl_vars['product']->value->cURLFull), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                                <?php $_smarty_tpl->_subTemplateRender('file:snippets/image.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('item'=>$_smarty_tpl->tpl_vars['product']->value,'square'=>false,'srcSize'=>'xs','sizes'=>'45px'), 0, true);
?>
                                                            <?php $_block_repeat=false;
echo $_block_plugin27->render(array('href'=>$_smarty_tpl->tpl_vars['product']->value->cURLFull), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                        <?php
}
}
/* {/block 'boxes-box-comparelist-dropdown-products-image'} */
/* {block 'boxes-box-comparelist-dropdown-products-title'} */
class Block_130820418360a617add1a279_16713203 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                            <?php $_block_plugin29 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin29, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['product']->value->cURLFull));
$_block_repeat=true;
echo $_block_plugin29->render(array('href'=>$_smarty_tpl->tpl_vars['product']->value->cURLFull), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value->cName,40,'...' ));
$_block_repeat=false;
echo $_block_plugin29->render(array('href'=>$_smarty_tpl->tpl_vars['product']->value->cURLFull), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                        <?php
}
}
/* {/block 'boxes-box-comparelist-dropdown-products-title'} */
/* {block 'boxes-box-comparelist-dropdown-products-image-title'} */
class Block_84154657360a617add0db60_32005876 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                <?php $_block_plugin25 = isset($_smarty_tpl->smarty->registered_plugins['block']['formrow'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['formrow'][0][0] : null;
if (!is_callable(array($_block_plugin25, 'render'))) {
throw new SmartyException('block tag \'formrow\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('formrow', array('class'=>"align-items-center-util"));
$_block_repeat=true;
echo $_block_plugin25->render(array('class'=>"align-items-center-util"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <?php $_block_plugin26 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin26, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('class'=>"col-auto"));
$_block_repeat=true;
echo $_block_plugin26->render(array('class'=>"col-auto"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_149810179860a617add10b82_50155941', 'boxes-box-comparelist-dropdown-products-image', $this->tplIndex);
?>

                                                    <?php $_block_repeat=false;
echo $_block_plugin26->render(array('class'=>"col-auto"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                    <?php $_block_plugin28 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin28, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array());
$_block_repeat=true;
echo $_block_plugin28->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_130820418360a617add1a279_16713203', 'boxes-box-comparelist-dropdown-products-title', $this->tplIndex);
?>

                                                    <?php $_block_repeat=false;
echo $_block_plugin28->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                <?php $_block_repeat=false;
echo $_block_plugin25->render(array('class'=>"align-items-center-util"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            <?php
}
}
/* {/block 'boxes-box-comparelist-dropdown-products-image-title'} */
/* {block 'boxes-box-comparelist-dropdown-products-remove'} */
class Block_146958211160a617add21376_57892525 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('section'=>"comparelist",'key'=>"removeFromCompareList"),$_smarty_tpl ) );
$_prefixVariable6=ob_get_clean();
ob_start();?>{<?php $_prefixVariable7=ob_get_clean();
ob_start();?>}<?php $_prefixVariable8=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('section'=>"comparelist",'key'=>"removeFromCompareList"),$_smarty_tpl ) );
$_prefixVariable9 = ob_get_clean();
$_block_plugin30 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin30, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['product']->value->cURLDEL,'class'=>"remove",'title'=>$_prefixVariable6,'data'=>array("name"=>"Vergleichsliste.remove","toggle"=>"product-actions","value"=>$_prefixVariable7.((string)$_smarty_tpl->tpl_vars['id']->value).":".((string)$_smarty_tpl->tpl_vars['product']->value->kArtikel).$_prefixVariable8),'aria'=>array("label"=>$_prefixVariable9)));
$_block_repeat=true;
echo $_block_plugin30->render(array('href'=>$_smarty_tpl->tpl_vars['product']->value->cURLDEL,'class'=>"remove",'title'=>$_prefixVariable6,'data'=>array("name"=>"Vergleichsliste.remove","toggle"=>"product-actions","value"=>$_prefixVariable7.((string)$_smarty_tpl->tpl_vars['id']->value).":".((string)$_smarty_tpl->tpl_vars['product']->value->kArtikel).$_prefixVariable8),'aria'=>array("label"=>$_prefixVariable9)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <span class="fas fa-times"></span>
                                                <?php $_block_repeat=false;
echo $_block_plugin30->render(array('href'=>$_smarty_tpl->tpl_vars['product']->value->cURLDEL,'class'=>"remove",'title'=>$_prefixVariable6,'data'=>array("name"=>"Vergleichsliste.remove","toggle"=>"product-actions","value"=>$_prefixVariable7.((string)$_smarty_tpl->tpl_vars['id']->value).":".((string)$_smarty_tpl->tpl_vars['product']->value->kArtikel).$_prefixVariable8),'aria'=>array("label"=>$_prefixVariable9)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            <?php
}
}
/* {/block 'boxes-box-comparelist-dropdown-products-remove'} */
/* {block 'boxes-box-comparelist-products'} */
class Block_136101456760a617adce6065_44361657 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <table class="table table-vertical-middle table-striped table-img">
                                <tbody>
                                    <?php $_smarty_tpl->_assignInScope('id', htmlspecialchars('"a"', ENT_QUOTES, 'utf-8', true));?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oBox']->value->getProducts(), 'product');
$_smarty_tpl->tpl_vars['product']->iteration = 0;
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->tpl_vars['product']->iteration++;
$__foreach_product_2_saved = $_smarty_tpl->tpl_vars['product'];
?>
                                        <?php if ($_smarty_tpl->tpl_vars['product']->iteration > $_smarty_tpl->tpl_vars['maxItems']->value) {?>
                                            <?php break 1;?>
                                        <?php }?>
                                        <tr>
                                        <td class="w-100-util" data-id=<?php echo $_smarty_tpl->tpl_vars['product']->value->kArtikel;?>
>
                                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_84154657360a617add0db60_32005876', 'boxes-box-comparelist-dropdown-products-image-title', $this->tplIndex);
?>

                                        </td>
                                        <td class="box-delete-button">
                                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_146958211160a617add21376_57892525', 'boxes-box-comparelist-dropdown-products-remove', $this->tplIndex);
?>

                                        </td>
                                    <?php
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_2_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </tbody>
                            </table>
                        <?php
}
}
/* {/block 'boxes-box-comparelist-products'} */
/* {block 'boxes-box-comparelist-link'} */
class Block_128771982260a617ae06c168_69417202 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <hr class="hr-no-top">
                                <?php ob_start();
if ($_smarty_tpl->tpl_vars['Einstellungen']->value['vergleichsliste']['vergleichsliste_target'] === 'popup') {
echo " popup";
}
$_prefixVariable10=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'vergleichsliste.php'),$_smarty_tpl ) );
$_prefixVariable11=ob_get_clean();
ob_start();
if ($_smarty_tpl->tpl_vars['Einstellungen']->value['vergleichsliste']['vergleichsliste_target'] === 'blank') {
echo "_blank";
} else {
echo "_self";
}
$_prefixVariable12=ob_get_clean();
$_block_plugin31 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin31, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('class'=>"btn btn-outline-primary btn-sm btn-block".$_prefixVariable10,'href'=>$_prefixVariable11,'target'=>$_prefixVariable12));
$_block_repeat=true;
echo $_block_plugin31->render(array('class'=>"btn btn-outline-primary btn-sm btn-block".$_prefixVariable10,'href'=>$_prefixVariable11,'target'=>$_prefixVariable12), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                   <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'gotToCompare'),$_smarty_tpl ) );?>

                                <?php $_block_repeat=false;
echo $_block_plugin31->render(array('class'=>"btn btn-outline-primary btn-sm btn-block".$_prefixVariable10,'href'=>$_prefixVariable11,'target'=>$_prefixVariable12), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php
}
}
/* {/block 'boxes-box-comparelist-link'} */
/* {block 'boxes-box-comparelist-collapse'} */
class Block_187568208760a617adc4d4d8_25952871 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_block_plugin24 = isset($_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0] : null;
if (!is_callable(array($_block_plugin24, 'render'))) {
throw new SmartyException('block tag \'collapse\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('collapse', array('class'=>"d-md-block",'visible'=>false,'id'=>"crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'aria'=>array("labelledby"=>"crd-hdr-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()))));
$_block_repeat=true;
echo $_block_plugin24->render(array('class'=>"d-md-block",'visible'=>false,'id'=>"crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'aria'=>array("labelledby"=>"crd-hdr-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()))), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136101456760a617adce6065_44361657', 'boxes-box-comparelist-products', $this->tplIndex);
?>

                        <?php if ($_smarty_tpl->tpl_vars['itemCount']->value > 1) {?>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_128771982260a617ae06c168_69417202', 'boxes-box-comparelist-link', $this->tplIndex);
?>

                        <?php }?>
                    <?php $_block_repeat=false;
echo $_block_plugin24->render(array('class'=>"d-md-block",'visible'=>false,'id'=>"crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'aria'=>array("labelledby"=>"crd-hdr-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()))), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php
}
}
/* {/block 'boxes-box-comparelist-collapse'} */
/* {block 'boxes-box-comparelist-content'} */
class Block_206800950960a617adc3f1f4_49688263 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_150693153260a617adc3fe90_71480884', 'boxes-box-comparelist-toggle-title', $this->tplIndex);
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_127396794660a617adc4b517_74234546', 'boxes-box-comparelist-title', $this->tplIndex);
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_187568208760a617adc4d4d8_25952871', 'boxes-box-comparelist-collapse', $this->tplIndex);
?>

            <?php
}
}
/* {/block 'boxes-box-comparelist-content'} */
/* {block 'boxes-box-comparelist-hr-end'} */
class Block_138620735560a617ae077020_07687295 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <hr class="box-normal-hr">
            <?php
}
}
/* {/block 'boxes-box-comparelist-hr-end'} */
/* {block 'blog-preview-no-items'} */
class Block_162266825560a617ae081d18_40712163 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <section class="d-none box-compare" id="sidebox<?php echo $_smarty_tpl->tpl_vars['oBox']->value->getID();?>
"></section>
        <?php
}
}
/* {/block 'blog-preview-no-items'} */
/* {block 'boxes-box-comparelist'} */
class Block_80932649160a617adc36857_36672431 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'boxes-box-comparelist' => 
  array (
    0 => 'Block_80932649160a617adc36857_36672431',
  ),
  'boxes-box-comparelist-content' => 
  array (
    0 => 'Block_206800950960a617adc3f1f4_49688263',
  ),
  'boxes-box-comparelist-toggle-title' => 
  array (
    0 => 'Block_150693153260a617adc3fe90_71480884',
  ),
  'boxes-box-comparelist-title' => 
  array (
    0 => 'Block_127396794660a617adc4b517_74234546',
  ),
  'boxes-box-comparelist-collapse' => 
  array (
    0 => 'Block_187568208760a617adc4d4d8_25952871',
  ),
  'boxes-box-comparelist-products' => 
  array (
    0 => 'Block_136101456760a617adce6065_44361657',
  ),
  'boxes-box-comparelist-dropdown-products-image-title' => 
  array (
    0 => 'Block_84154657360a617add0db60_32005876',
  ),
  'boxes-box-comparelist-dropdown-products-image' => 
  array (
    0 => 'Block_149810179860a617add10b82_50155941',
  ),
  'boxes-box-comparelist-dropdown-products-title' => 
  array (
    0 => 'Block_130820418360a617add1a279_16713203',
  ),
  'boxes-box-comparelist-dropdown-products-remove' => 
  array (
    0 => 'Block_146958211160a617add21376_57892525',
  ),
  'boxes-box-comparelist-link' => 
  array (
    0 => 'Block_128771982260a617ae06c168_69417202',
  ),
  'boxes-box-comparelist-hr-end' => 
  array (
    0 => 'Block_138620735560a617ae077020_07687295',
  ),
  'blog-preview-no-items' => 
  array (
    0 => 'Block_162266825560a617ae081d18_40712163',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_assignInScope('maxItems', $_smarty_tpl->tpl_vars['oBox']->value->getItemCount());?>
    <?php $_smarty_tpl->_assignInScope('itemCount', count($_smarty_tpl->tpl_vars['oBox']->value->getProducts()));?>
    <?php if ($_smarty_tpl->tpl_vars['itemCount']->value > 0) {?>
        <?php $_block_plugin22 = isset($_smarty_tpl->smarty->registered_plugins['block']['card'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['card'][0][0] : null;
if (!is_callable(array($_block_plugin22, 'render'))) {
throw new SmartyException('block tag \'card\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('card', array('class'=>"box box-compare box-normal",'id'=>"sidebox".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID())));
$_block_repeat=true;
echo $_block_plugin22->render(array('class'=>"box box-compare box-normal",'id'=>"sidebox".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID())), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_206800950960a617adc3f1f4_49688263', 'boxes-box-comparelist-content', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_138620735560a617ae077020_07687295', 'boxes-box-comparelist-hr-end', $this->tplIndex);
?>

        <?php $_block_repeat=false;
echo $_block_plugin22->render(array('class'=>"box box-compare box-normal",'id'=>"sidebox".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID())), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php } else { ?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_162266825560a617ae081d18_40712163', 'blog-preview-no-items', $this->tplIndex);
?>

    <?php }
}
}
/* {/block 'boxes-box-comparelist'} */
}
