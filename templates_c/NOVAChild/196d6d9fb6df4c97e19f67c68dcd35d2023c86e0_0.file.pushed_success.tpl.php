<?php
/* Smarty version 3.1.38, created on 2021-05-20 16:41:02
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\productdetails\pushed_success.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a674fe00f844_14707448',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '196d6d9fb6df4c97e19f67c68dcd35d2023c86e0' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\productdetails\\pushed_success.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/image.tpl' => 1,
    'file:productdetails/rating.tpl' => 1,
    'file:snippets/product_slider.tpl' => 1,
  ),
),false)) {
function content_60a674fe00f844_14707448 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_176690093560a674fdcec2e9_25828324', 'productdetails-pushed-success');
?>

<?php }
/* {block 'productdetails-pushed-success-cart-note-heading'} */
class Block_148422573660a674fdd473a7_04342317 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div class="card-header alert-success">
                    <?php if ((isset($_smarty_tpl->tpl_vars['cartNote']->value))) {?>
                        <?php echo $_smarty_tpl->tpl_vars['cartNote']->value;?>

                    <?php }?>
                </div>
            <?php
}
}
/* {/block 'productdetails-pushed-success-cart-note-heading'} */
/* {block 'productdetails-pushed-success-product-cell-subheading'} */
class Block_24702163760a674fdd79533_23677022 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <div class="productbox-title subheadline"><?php echo $_smarty_tpl->tpl_vars['pushedArtikel']->value->cName;?>
</div>
                                    <?php
}
}
/* {/block 'productdetails-pushed-success-product-cell-subheading'} */
/* {block 'productdetails-pushed-success-product-cell-image'} */
class Block_73293830960a674fdd7d5d8_46393907 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <?php $_smarty_tpl->_subTemplateRender('file:snippets/image.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('item'=>$_smarty_tpl->tpl_vars['pushedArtikel']->value,'square'=>false,'class'=>'image','srcSize'=>'sm'), 0, false);
?>
                                    <?php
}
}
/* {/block 'productdetails-pushed-success-product-cell-image'} */
/* {block 'productdetails-pushed-success-characteristics'} */
class Block_187678482960a674fddbcef7_04795772 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pushedArtikel']->value->oMerkmale_arr, 'oMerkmal', true);
$_smarty_tpl->tpl_vars['oMerkmal']->iteration = 0;
$_smarty_tpl->tpl_vars['oMerkmal']->index = -1;
$_smarty_tpl->tpl_vars['oMerkmal']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oMerkmal']->value) {
$_smarty_tpl->tpl_vars['oMerkmal']->do_else = false;
$_smarty_tpl->tpl_vars['oMerkmal']->iteration++;
$_smarty_tpl->tpl_vars['oMerkmal']->index++;
$_smarty_tpl->tpl_vars['oMerkmal']->last = $_smarty_tpl->tpl_vars['oMerkmal']->iteration === $_smarty_tpl->tpl_vars['oMerkmal']->total;
$__foreach_oMerkmal_2_saved = $_smarty_tpl->tpl_vars['oMerkmal'];
?>
                                                                    <?php echo $_smarty_tpl->tpl_vars['oMerkmal']->value->cName;?>

                                                                    <?php if ($_smarty_tpl->tpl_vars['oMerkmal']->index === 10 && !$_smarty_tpl->tpl_vars['oMerkmal']->last) {?>&hellip;<?php break 1;
}?>
                                                                    <?php if (!$_smarty_tpl->tpl_vars['oMerkmal']->last) {?>, <?php }?>
                                                                <?php
$_smarty_tpl->tpl_vars['oMerkmal'] = $__foreach_oMerkmal_2_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                            <?php
}
}
/* {/block 'productdetails-pushed-success-characteristics'} */
/* {block 'productdetails-pushed-success-include-rating'} */
class Block_54099728960a674fdf0da28_75844451 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                                <?php $_smarty_tpl->_subTemplateRender('file:productdetails/rating.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stars'=>$_smarty_tpl->tpl_vars['pushedArtikel']->value->fDurchschnittsBewertung), 0, false);
?>
                                                            <?php
}
}
/* {/block 'productdetails-pushed-success-include-rating'} */
/* {block 'productdetails-pushed-success-product-cell-details'} */
class Block_23261255860a674fdd9a225_37850984 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <?php $_block_plugin7 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin7, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array());
$_block_repeat=true;
echo $_block_plugin7->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php $_block_plugin8 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin8, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12));
$_block_repeat=true;
echo $_block_plugin8->render(array('cols'=>12), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                <dl class="form-row">
                                                    <dt class="col-6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'productNo'),$_smarty_tpl ) );?>
:</dt>
                                                    <dd class="col-6"><?php echo $_smarty_tpl->tpl_vars['pushedArtikel']->value->cArtNr;?>
</dd>
                                                    <?php if (!empty($_smarty_tpl->tpl_vars['pushedArtikel']->value->cHersteller)) {?>
                                                        <dt class="col-6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'manufacturer','section'=>'productDetails'),$_smarty_tpl ) );?>
:</dt>
                                                        <dd class="col-6"><?php echo $_smarty_tpl->tpl_vars['pushedArtikel']->value->cHersteller;?>
</dd>
                                                    <?php }?>
                                                    <?php if (!empty($_smarty_tpl->tpl_vars['pushedArtikel']->value->oMerkmale_arr)) {?>
                                                        <dt class="col-6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'variationsIn','section'=>'productOverview'),$_smarty_tpl ) );?>
:</dt>
                                                        <dd class="col-6 attr-characteristic">
                                                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_187678482960a674fddbcef7_04795772', 'productdetails-pushed-success-characteristics', $this->tplIndex);
?>

                                                        </dd>
                                                    <?php }?>
                                                    <?php if ((isset($_smarty_tpl->tpl_vars['pushedArtikel']->value->dMHD)) && (isset($_smarty_tpl->tpl_vars['pushedArtikel']->value->dMHD_de))) {?>
                                                        <dt class="col-6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'productMHDTool'),$_smarty_tpl ) );?>
:</dt>
                                                        <dd class="col-6"><?php echo $_smarty_tpl->tpl_vars['pushedArtikel']->value->dMHD_de;?>
</dd>
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeluebersicht']['artikeluebersicht_gewicht_anzeigen'] === 'Y' && (isset($_smarty_tpl->tpl_vars['pushedArtikel']->value->cGewicht)) && $_smarty_tpl->tpl_vars['pushedArtikel']->value->fGewicht > 0) {?>
                                                        <dt class="col-6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'shippingWeight'),$_smarty_tpl ) );?>
:</dt>
                                                        <dd class="col-6"><?php echo $_smarty_tpl->tpl_vars['pushedArtikel']->value->cGewicht;?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'weightUnit'),$_smarty_tpl ) );?>
</dd>
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeluebersicht']['artikeluebersicht_artikelgewicht_anzeigen'] === 'Y' && (isset($_smarty_tpl->tpl_vars['pushedArtikel']->value->cArtikelgewicht)) && $_smarty_tpl->tpl_vars['pushedArtikel']->value->fArtikelgewicht > 0) {?>
                                                        <dt class="col-6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'productWeight'),$_smarty_tpl ) );?>
:</dt>
                                                        <dd class="col-6"><?php echo $_smarty_tpl->tpl_vars['pushedArtikel']->value->cArtikelgewicht;?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'weightUnit'),$_smarty_tpl ) );?>
</dd>
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['bewertung']['bewertung_anzeigen'] === 'Y' && (int)$_smarty_tpl->tpl_vars['pushedArtikel']->value->fDurchschnittsBewertung !== 0) {?>
                                                        <dt class="col-6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'ratingAverage'),$_smarty_tpl ) );?>
:</dt>
                                                        <dd class="col-6">
                                                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54099728960a674fdf0da28_75844451', 'productdetails-pushed-success-include-rating', $this->tplIndex);
?>

                                                        </dd>
                                                    <?php }?>
                                                </dl>
                                            <?php $_block_repeat=false;
echo $_block_plugin8->render(array('cols'=>12), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        <?php $_block_repeat=false;
echo $_block_plugin7->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    <?php
}
}
/* {/block 'productdetails-pushed-success-product-cell-details'} */
/* {block 'productdetails-pushed-success-product-cell-content'} */
class Block_37400509860a674fdd75cb1_20706706 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div class="productbox-inner<?php if ((isset($_smarty_tpl->tpl_vars['class']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['class']->value;
}?>">
                            <?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array());
$_block_repeat=true;
echo $_block_plugin3->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php $_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12));
$_block_repeat=true;
echo $_block_plugin4->render(array('cols'=>12), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_24702163760a674fdd79533_23677022', 'productdetails-pushed-success-product-cell-subheading', $this->tplIndex);
?>

                                <?php $_block_repeat=false;
echo $_block_plugin4->render(array('cols'=>12), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php $_block_plugin5 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin5, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'md'=>4,'class'=>"pushed-success-image-wrapper"));
$_block_repeat=true;
echo $_block_plugin5->render(array('cols'=>12,'md'=>4,'class'=>"pushed-success-image-wrapper"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_73293830960a674fdd7d5d8_46393907', 'productdetails-pushed-success-product-cell-image', $this->tplIndex);
?>

                                <?php $_block_repeat=false;
echo $_block_plugin5->render(array('cols'=>12,'md'=>4,'class'=>"pushed-success-image-wrapper"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php $_block_plugin6 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin6, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array());
$_block_repeat=true;
echo $_block_plugin6->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_23261255860a674fdd9a225_37850984', 'productdetails-pushed-success-product-cell-details', $this->tplIndex);
?>

                                <?php $_block_repeat=false;
echo $_block_plugin6->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php $_block_repeat=false;
echo $_block_plugin3->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        </div>
                    <?php
}
}
/* {/block 'productdetails-pushed-success-product-cell-content'} */
/* {block 'productdetails-pushed-success-product-cell-links'} */
class Block_58946152960a674fdf2a6b0_72847426 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_block_plugin9 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin9, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('class'=>"pushed-success-buttons"));
$_block_repeat=true;
echo $_block_plugin9->render(array('class'=>"pushed-success-buttons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php $_block_plugin10 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin10, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'md'=>6));
$_block_repeat=true;
echo $_block_plugin10->render(array('cols'=>12,'md'=>6), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php ob_start();
if (!$_smarty_tpl->tpl_vars['card']->value) {
echo "modal";
} else {
echo "alert";
}
$_prefixVariable2=ob_get_clean();
$_block_plugin11 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin11, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['pushedArtikel']->value->cURLFull,'class'=>"btn btn-outline-primary btn-block continue-shopping",'data'=>array("dismiss"=>$_prefixVariable2),'aria'=>array("label"=>"Close")));
$_block_repeat=true;
echo $_block_plugin11->render(array('href'=>$_smarty_tpl->tpl_vars['pushedArtikel']->value->cURLFull,'class'=>"btn btn-outline-primary btn-block continue-shopping",'data'=>array("dismiss"=>$_prefixVariable2),'aria'=>array("label"=>"Close")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <i class="fa fa-arrow-circle-right"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'continueShopping','section'=>'checkout'),$_smarty_tpl ) );?>

                                <?php $_block_repeat=false;
echo $_block_plugin11->render(array('href'=>$_smarty_tpl->tpl_vars['pushedArtikel']->value->cURLFull,'class'=>"btn btn-outline-primary btn-block continue-shopping",'data'=>array("dismiss"=>$_prefixVariable2),'aria'=>array("label"=>"Close")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php $_block_repeat=false;
echo $_block_plugin10->render(array('cols'=>12,'md'=>6), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php $_block_plugin12 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin12, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'md'=>6));
$_block_repeat=true;
echo $_block_plugin12->render(array('cols'=>12,'md'=>6), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'warenkorb.php'),$_smarty_tpl ) );
$_prefixVariable3=ob_get_clean();
$_block_plugin13 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin13, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_prefixVariable3,'class'=>"btn btn-primary btn-basket btn-block"));
$_block_repeat=true;
echo $_block_plugin13->render(array('href'=>$_prefixVariable3,'class'=>"btn btn-primary btn-basket btn-block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <i class="fas fa-shopping-cart"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'gotoBasket'),$_smarty_tpl ) );?>

                                <?php $_block_repeat=false;
echo $_block_plugin13->render(array('href'=>$_prefixVariable3,'class'=>"btn btn-primary btn-basket btn-block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php $_block_repeat=false;
echo $_block_plugin12->render(array('cols'=>12,'md'=>6), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php $_block_repeat=false;
echo $_block_plugin9->render(array('class'=>"pushed-success-buttons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php
}
}
/* {/block 'productdetails-pushed-success-product-cell-links'} */
/* {block 'productdetails-pushed-success-product-cell'} */
class Block_5246223760a674fdd510e4_20533215 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php ob_start();
if ($_smarty_tpl->tpl_vars['showXSellingCart']->value) {
echo "6";
} else {
echo "12";
}
$_prefixVariable1=ob_get_clean();
$_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'md'=>$_prefixVariable1));
$_block_repeat=true;
echo $_block_plugin2->render(array('cols'=>12,'md'=>$_prefixVariable1), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_37400509860a674fdd75cb1_20706706', 'productdetails-pushed-success-product-cell-content', $this->tplIndex);
?>

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_58946152960a674fdf2a6b0_72847426', 'productdetails-pushed-success-product-cell-links', $this->tplIndex);
?>

                <?php $_block_repeat=false;
echo $_block_plugin2->render(array('cols'=>12,'md'=>$_prefixVariable1), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
}
}
/* {/block 'productdetails-pushed-success-product-cell'} */
/* {block 'productdetails-pushed-success-x-sell-heading'} */
class Block_98382790360a674fe0044d6_83019332 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <div class="productbox-title subheadline"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'customerWhoBoughtXBoughtAlsoY','section'=>'productDetails'),$_smarty_tpl ) );?>
</div>
                                <?php
}
}
/* {/block 'productdetails-pushed-success-x-sell-heading'} */
/* {block 'productdetails-pushed-success-include-product-slider'} */
class Block_201506417460a674fe008548_37843745 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_smarty_tpl->_subTemplateRender('file:snippets/product_slider.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>'','productlist'=>$_smarty_tpl->tpl_vars['Xselling']->value->Kauf->Artikel,'title'=>'','tplscope'=>'half'), 0, false);
?>
                                <?php
}
}
/* {/block 'productdetails-pushed-success-include-product-slider'} */
/* {block 'productdetails-pushed-success-x-sell'} */
class Block_155322465960a674fe0007a5_27101187 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if ($_smarty_tpl->tpl_vars['showXSellingCart']->value) {?>
                    <?php $_block_plugin14 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin14, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>6,'class'=>"x-selling"));
$_block_repeat=true;
echo $_block_plugin14->render(array('cols'=>6,'class'=>"x-selling"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php $_block_plugin15 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin15, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array());
$_block_repeat=true;
echo $_block_plugin15->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php $_block_plugin16 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin16, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12));
$_block_repeat=true;
echo $_block_plugin16->render(array('cols'=>12), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_98382790360a674fe0044d6_83019332', 'productdetails-pushed-success-x-sell-heading', $this->tplIndex);
?>

                            <?php $_block_repeat=false;
echo $_block_plugin16->render(array('cols'=>12), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php $_block_plugin17 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin17, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12));
$_block_repeat=true;
echo $_block_plugin17->render(array('cols'=>12), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_201506417460a674fe008548_37843745', 'productdetails-pushed-success-include-product-slider', $this->tplIndex);
?>

                            <?php $_block_repeat=false;
echo $_block_plugin17->render(array('cols'=>12), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php $_block_repeat=false;
echo $_block_plugin15->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php $_block_repeat=false;
echo $_block_plugin14->render(array('cols'=>6,'class'=>"x-selling"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php }?>
            <?php
}
}
/* {/block 'productdetails-pushed-success-x-sell'} */
/* {block 'productdetails-pushed-success'} */
class Block_176690093560a674fdcec2e9_25828324 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'productdetails-pushed-success' => 
  array (
    0 => 'Block_176690093560a674fdcec2e9_25828324',
  ),
  'productdetails-pushed-success-cart-note-heading' => 
  array (
    0 => 'Block_148422573660a674fdd473a7_04342317',
  ),
  'productdetails-pushed-success-product-cell' => 
  array (
    0 => 'Block_5246223760a674fdd510e4_20533215',
  ),
  'productdetails-pushed-success-product-cell-content' => 
  array (
    0 => 'Block_37400509860a674fdd75cb1_20706706',
  ),
  'productdetails-pushed-success-product-cell-subheading' => 
  array (
    0 => 'Block_24702163760a674fdd79533_23677022',
  ),
  'productdetails-pushed-success-product-cell-image' => 
  array (
    0 => 'Block_73293830960a674fdd7d5d8_46393907',
  ),
  'productdetails-pushed-success-product-cell-details' => 
  array (
    0 => 'Block_23261255860a674fdd9a225_37850984',
  ),
  'productdetails-pushed-success-characteristics' => 
  array (
    0 => 'Block_187678482960a674fddbcef7_04795772',
  ),
  'productdetails-pushed-success-include-rating' => 
  array (
    0 => 'Block_54099728960a674fdf0da28_75844451',
  ),
  'productdetails-pushed-success-product-cell-links' => 
  array (
    0 => 'Block_58946152960a674fdf2a6b0_72847426',
  ),
  'productdetails-pushed-success-x-sell' => 
  array (
    0 => 'Block_155322465960a674fe0007a5_27101187',
  ),
  'productdetails-pushed-success-x-sell-heading' => 
  array (
    0 => 'Block_98382790360a674fe0044d6_83019332',
  ),
  'productdetails-pushed-success-include-product-slider' => 
  array (
    0 => 'Block_201506417460a674fe008548_37843745',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="pushed-success" <?php if ($_smarty_tpl->tpl_vars['card']->value) {?>role="alert" class="card alert alert-dismissable"<?php }?>>
        <?php if ((isset($_smarty_tpl->tpl_vars['zuletztInWarenkorbGelegterArtikel']->value))) {?>
            <?php $_smarty_tpl->_assignInScope('pushedArtikel', $_smarty_tpl->tpl_vars['zuletztInWarenkorbGelegterArtikel']->value);?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('pushedArtikel', $_smarty_tpl->tpl_vars['Artikel']->value);?>
        <?php }?>
        <?php $_smarty_tpl->_assignInScope('showXSellingCart', (isset($_smarty_tpl->tpl_vars['Xselling']->value->Kauf)) && count($_smarty_tpl->tpl_vars['Xselling']->value->Kauf->Artikel) > 0);?>
        <?php if ($_smarty_tpl->tpl_vars['card']->value) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_148422573660a674fdd473a7_04342317', 'productdetails-pushed-success-cart-note-heading', $this->tplIndex);
?>

            <div class="card-body">
        <?php }?>

        <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array());
$_block_repeat=true;
echo $_block_plugin1->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5246223760a674fdd510e4_20533215', 'productdetails-pushed-success-product-cell', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_155322465960a674fe0007a5_27101187', 'productdetails-pushed-success-x-sell', $this->tplIndex);
?>

        <?php $_block_repeat=false;
echo $_block_plugin1->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php if ($_smarty_tpl->tpl_vars['card']->value) {?></div><?php }?>
    </div>
<?php
}
}
/* {/block 'productdetails-pushed-success'} */
}
