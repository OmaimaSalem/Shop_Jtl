<?php
/* Smarty version 3.1.38, created on 2021-05-04 14:13:33
  from 'C:\xampp\htdocs\shop\templates\NOVA\boxes\box_comparelist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60913a6d7372a1_18370806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7d658767a345b2e3eba42f583621b9bb2573846' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\templates\\NOVA\\boxes\\box_comparelist.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/image.tpl' => 1,
  ),
),false)) {
function content_60913a6d7372a1_18370806 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_147552860460913a6d6ac6b7_07481311', 'boxes-box-comparelist');
?>

<?php }
/* {block 'boxes-box-comparelist-toggle-title'} */
class Block_145774566160913a6d6b3af8_51283298 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_block_plugin16 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin16, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('id'=>"crd-hdr-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'href'=>"#crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'data'=>array("toggle"=>"collapse"),'role'=>"button",'aria'=>array("expanded"=>"false","controls"=>"crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID())),'class'=>"box-normal-link dropdown-toggle"));
$_block_repeat=true;
echo $_block_plugin16->render(array('id'=>"crd-hdr-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'href'=>"#crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'data'=>array("toggle"=>"collapse"),'role'=>"button",'aria'=>array("expanded"=>"false","controls"=>"crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID())),'class'=>"box-normal-link dropdown-toggle"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'compare'),$_smarty_tpl ) );?>

                    <?php $_block_repeat=false;
echo $_block_plugin16->render(array('id'=>"crd-hdr-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'href'=>"#crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'data'=>array("toggle"=>"collapse"),'role'=>"button",'aria'=>array("expanded"=>"false","controls"=>"crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID())),'class'=>"box-normal-link dropdown-toggle"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php
}
}
/* {/block 'boxes-box-comparelist-toggle-title'} */
/* {block 'boxes-box-comparelist-title'} */
class Block_38480608460913a6d6bc2a2_70655703 extends Smarty_Internal_Block
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
class Block_211405792460913a6d6cb861_75332374 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                            <?php $_block_plugin20 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin20, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['product']->value->cURLFull));
$_block_repeat=true;
echo $_block_plugin20->render(array('href'=>$_smarty_tpl->tpl_vars['product']->value->cURLFull), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                                <?php $_smarty_tpl->_subTemplateRender('file:snippets/image.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('item'=>$_smarty_tpl->tpl_vars['product']->value,'square'=>false,'srcSize'=>'xs','sizes'=>'45px'), 0, true);
?>
                                                            <?php $_block_repeat=false;
echo $_block_plugin20->render(array('href'=>$_smarty_tpl->tpl_vars['product']->value->cURLFull), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                        <?php
}
}
/* {/block 'boxes-box-comparelist-dropdown-products-image'} */
/* {block 'boxes-box-comparelist-dropdown-products-title'} */
class Block_140537428160913a6d6d1ce2_20106341 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                            <?php $_block_plugin22 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin22, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['product']->value->cURLFull));
$_block_repeat=true;
echo $_block_plugin22->render(array('href'=>$_smarty_tpl->tpl_vars['product']->value->cURLFull), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value->cName,40,'...' ));
$_block_repeat=false;
echo $_block_plugin22->render(array('href'=>$_smarty_tpl->tpl_vars['product']->value->cURLFull), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                        <?php
}
}
/* {/block 'boxes-box-comparelist-dropdown-products-title'} */
/* {block 'boxes-box-comparelist-dropdown-products-image-title'} */
class Block_21790805660913a6d6c9664_69687437 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                <?php $_block_plugin18 = isset($_smarty_tpl->smarty->registered_plugins['block']['formrow'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['formrow'][0][0] : null;
if (!is_callable(array($_block_plugin18, 'render'))) {
throw new SmartyException('block tag \'formrow\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('formrow', array('class'=>"align-items-center-util"));
$_block_repeat=true;
echo $_block_plugin18->render(array('class'=>"align-items-center-util"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <?php $_block_plugin19 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin19, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('class'=>"col-auto"));
$_block_repeat=true;
echo $_block_plugin19->render(array('class'=>"col-auto"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_211405792460913a6d6cb861_75332374', 'boxes-box-comparelist-dropdown-products-image', $this->tplIndex);
?>

                                                    <?php $_block_repeat=false;
echo $_block_plugin19->render(array('class'=>"col-auto"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                    <?php $_block_plugin21 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin21, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array());
$_block_repeat=true;
echo $_block_plugin21->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_140537428160913a6d6d1ce2_20106341', 'boxes-box-comparelist-dropdown-products-title', $this->tplIndex);
?>

                                                    <?php $_block_repeat=false;
echo $_block_plugin21->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                <?php $_block_repeat=false;
echo $_block_plugin18->render(array('class'=>"align-items-center-util"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            <?php
}
}
/* {/block 'boxes-box-comparelist-dropdown-products-image-title'} */
/* {block 'boxes-box-comparelist-dropdown-products-remove'} */
class Block_164277038160913a6d6d6b68_41451571 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('section'=>"comparelist",'key'=>"removeFromCompareList"),$_smarty_tpl ) );
$_prefixVariable3=ob_get_clean();
ob_start();?>{<?php $_prefixVariable4=ob_get_clean();
ob_start();?>}<?php $_prefixVariable5=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('section'=>"comparelist",'key'=>"removeFromCompareList"),$_smarty_tpl ) );
$_prefixVariable6 = ob_get_clean();
$_block_plugin23 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin23, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['product']->value->cURLDEL,'class'=>"remove",'title'=>$_prefixVariable3,'data'=>array("name"=>"Vergleichsliste.remove","toggle"=>"product-actions","value"=>$_prefixVariable4.((string)$_smarty_tpl->tpl_vars['id']->value).":".((string)$_smarty_tpl->tpl_vars['product']->value->kArtikel).$_prefixVariable5),'aria'=>array("label"=>$_prefixVariable6)));
$_block_repeat=true;
echo $_block_plugin23->render(array('href'=>$_smarty_tpl->tpl_vars['product']->value->cURLDEL,'class'=>"remove",'title'=>$_prefixVariable3,'data'=>array("name"=>"Vergleichsliste.remove","toggle"=>"product-actions","value"=>$_prefixVariable4.((string)$_smarty_tpl->tpl_vars['id']->value).":".((string)$_smarty_tpl->tpl_vars['product']->value->kArtikel).$_prefixVariable5),'aria'=>array("label"=>$_prefixVariable6)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <span class="fas fa-times"></span>
                                                <?php $_block_repeat=false;
echo $_block_plugin23->render(array('href'=>$_smarty_tpl->tpl_vars['product']->value->cURLDEL,'class'=>"remove",'title'=>$_prefixVariable3,'data'=>array("name"=>"Vergleichsliste.remove","toggle"=>"product-actions","value"=>$_prefixVariable4.((string)$_smarty_tpl->tpl_vars['id']->value).":".((string)$_smarty_tpl->tpl_vars['product']->value->kArtikel).$_prefixVariable5),'aria'=>array("label"=>$_prefixVariable6)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            <?php
}
}
/* {/block 'boxes-box-comparelist-dropdown-products-remove'} */
/* {block 'boxes-box-comparelist-products'} */
class Block_71968908860913a6d6c3605_38187290 extends Smarty_Internal_Block
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
$__foreach_product_1_saved = $_smarty_tpl->tpl_vars['product'];
?>
                                        <?php if ($_smarty_tpl->tpl_vars['product']->iteration > $_smarty_tpl->tpl_vars['maxItems']->value) {?>
                                            <?php break 1;?>
                                        <?php }?>
                                        <tr>
                                        <td class="w-100-util" data-id=<?php echo $_smarty_tpl->tpl_vars['product']->value->kArtikel;?>
>
                                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21790805660913a6d6c9664_69687437', 'boxes-box-comparelist-dropdown-products-image-title', $this->tplIndex);
?>

                                        </td>
                                        <td class="box-delete-button">
                                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_164277038160913a6d6d6b68_41451571', 'boxes-box-comparelist-dropdown-products-remove', $this->tplIndex);
?>

                                        </td>
                                    <?php
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </tbody>
                            </table>
                        <?php
}
}
/* {/block 'boxes-box-comparelist-products'} */
/* {block 'boxes-box-comparelist-link'} */
class Block_112293633660913a6d72ad57_63933439 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <hr class="hr-no-top">
                                <?php ob_start();
if ($_smarty_tpl->tpl_vars['Einstellungen']->value['vergleichsliste']['vergleichsliste_target'] === 'popup') {
echo " popup";
}
$_prefixVariable7=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'vergleichsliste.php'),$_smarty_tpl ) );
$_prefixVariable8=ob_get_clean();
ob_start();
if ($_smarty_tpl->tpl_vars['Einstellungen']->value['vergleichsliste']['vergleichsliste_target'] === 'blank') {
echo "_blank";
} else {
echo "_self";
}
$_prefixVariable9=ob_get_clean();
$_block_plugin24 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin24, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('class'=>"btn btn-outline-primary btn-sm btn-block".$_prefixVariable7,'href'=>$_prefixVariable8,'target'=>$_prefixVariable9));
$_block_repeat=true;
echo $_block_plugin24->render(array('class'=>"btn btn-outline-primary btn-sm btn-block".$_prefixVariable7,'href'=>$_prefixVariable8,'target'=>$_prefixVariable9), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                   <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'gotToCompare'),$_smarty_tpl ) );?>

                                <?php $_block_repeat=false;
echo $_block_plugin24->render(array('class'=>"btn btn-outline-primary btn-sm btn-block".$_prefixVariable7,'href'=>$_prefixVariable8,'target'=>$_prefixVariable9), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php
}
}
/* {/block 'boxes-box-comparelist-link'} */
/* {block 'boxes-box-comparelist-collapse'} */
class Block_76040184360913a6d6bdfd0_01206621 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_block_plugin17 = isset($_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0] : null;
if (!is_callable(array($_block_plugin17, 'render'))) {
throw new SmartyException('block tag \'collapse\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('collapse', array('class'=>"d-md-block",'visible'=>false,'id'=>"crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'aria'=>array("labelledby"=>"crd-hdr-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()))));
$_block_repeat=true;
echo $_block_plugin17->render(array('class'=>"d-md-block",'visible'=>false,'id'=>"crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'aria'=>array("labelledby"=>"crd-hdr-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()))), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_71968908860913a6d6c3605_38187290', 'boxes-box-comparelist-products', $this->tplIndex);
?>

                        <?php if ($_smarty_tpl->tpl_vars['itemCount']->value > 1) {?>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_112293633660913a6d72ad57_63933439', 'boxes-box-comparelist-link', $this->tplIndex);
?>

                        <?php }?>
                    <?php $_block_repeat=false;
echo $_block_plugin17->render(array('class'=>"d-md-block",'visible'=>false,'id'=>"crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'aria'=>array("labelledby"=>"crd-hdr-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()))), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php
}
}
/* {/block 'boxes-box-comparelist-collapse'} */
/* {block 'boxes-box-comparelist-content'} */
class Block_74427681660913a6d6b31d8_25025643 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_145774566160913a6d6b3af8_51283298', 'boxes-box-comparelist-toggle-title', $this->tplIndex);
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_38480608460913a6d6bc2a2_70655703', 'boxes-box-comparelist-title', $this->tplIndex);
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_76040184360913a6d6bdfd0_01206621', 'boxes-box-comparelist-collapse', $this->tplIndex);
?>

            <?php
}
}
/* {/block 'boxes-box-comparelist-content'} */
/* {block 'boxes-box-comparelist-hr-end'} */
class Block_206979610560913a6d733310_11043466 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <hr class="box-normal-hr">
            <?php
}
}
/* {/block 'boxes-box-comparelist-hr-end'} */
/* {block 'blog-preview-no-items'} */
class Block_146622923260913a6d734980_85716798 extends Smarty_Internal_Block
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
class Block_147552860460913a6d6ac6b7_07481311 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'boxes-box-comparelist' => 
  array (
    0 => 'Block_147552860460913a6d6ac6b7_07481311',
  ),
  'boxes-box-comparelist-content' => 
  array (
    0 => 'Block_74427681660913a6d6b31d8_25025643',
  ),
  'boxes-box-comparelist-toggle-title' => 
  array (
    0 => 'Block_145774566160913a6d6b3af8_51283298',
  ),
  'boxes-box-comparelist-title' => 
  array (
    0 => 'Block_38480608460913a6d6bc2a2_70655703',
  ),
  'boxes-box-comparelist-collapse' => 
  array (
    0 => 'Block_76040184360913a6d6bdfd0_01206621',
  ),
  'boxes-box-comparelist-products' => 
  array (
    0 => 'Block_71968908860913a6d6c3605_38187290',
  ),
  'boxes-box-comparelist-dropdown-products-image-title' => 
  array (
    0 => 'Block_21790805660913a6d6c9664_69687437',
  ),
  'boxes-box-comparelist-dropdown-products-image' => 
  array (
    0 => 'Block_211405792460913a6d6cb861_75332374',
  ),
  'boxes-box-comparelist-dropdown-products-title' => 
  array (
    0 => 'Block_140537428160913a6d6d1ce2_20106341',
  ),
  'boxes-box-comparelist-dropdown-products-remove' => 
  array (
    0 => 'Block_164277038160913a6d6d6b68_41451571',
  ),
  'boxes-box-comparelist-link' => 
  array (
    0 => 'Block_112293633660913a6d72ad57_63933439',
  ),
  'boxes-box-comparelist-hr-end' => 
  array (
    0 => 'Block_206979610560913a6d733310_11043466',
  ),
  'blog-preview-no-items' => 
  array (
    0 => 'Block_146622923260913a6d734980_85716798',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_assignInScope('maxItems', $_smarty_tpl->tpl_vars['oBox']->value->getItemCount());?>
    <?php $_smarty_tpl->_assignInScope('itemCount', count($_smarty_tpl->tpl_vars['oBox']->value->getProducts()));?>
    <?php if ($_smarty_tpl->tpl_vars['itemCount']->value > 0) {?>
        <?php $_block_plugin15 = isset($_smarty_tpl->smarty->registered_plugins['block']['card'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['card'][0][0] : null;
if (!is_callable(array($_block_plugin15, 'render'))) {
throw new SmartyException('block tag \'card\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('card', array('class'=>"box box-compare box-normal",'id'=>"sidebox".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID())));
$_block_repeat=true;
echo $_block_plugin15->render(array('class'=>"box box-compare box-normal",'id'=>"sidebox".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID())), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_74427681660913a6d6b31d8_25025643', 'boxes-box-comparelist-content', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_206979610560913a6d733310_11043466', 'boxes-box-comparelist-hr-end', $this->tplIndex);
?>

        <?php $_block_repeat=false;
echo $_block_plugin15->render(array('class'=>"box box-compare box-normal",'id'=>"sidebox".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID())), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php } else { ?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_146622923260913a6d734980_85716798', 'blog-preview-no-items', $this->tplIndex);
?>

    <?php }
}
}
/* {/block 'boxes-box-comparelist'} */
}
