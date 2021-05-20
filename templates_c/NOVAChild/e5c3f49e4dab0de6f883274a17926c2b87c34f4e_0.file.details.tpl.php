<?php
/* Smarty version 3.1.38, created on 2021-05-18 11:41:11
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\productdetails\details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a38bb741a484_89979839',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5c3f49e4dab0de6f883274a17926c2b87c34f4e' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\productdetails\\details.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:productdetails/pushed_success.tpl' => 1,
    'file:productdetails/image.tpl' => 1,
    'file:productdetails/rating.tpl' => 1,
    'file:productdetails/variation.tpl' => 1,
    'file:productdetails/price.tpl' => 1,
    'file:productdetails/stock.tpl' => 1,
    'file:productdetails/warehouse.tpl' => 1,
    'file:snippets/uploads.tpl' => 1,
    'file:productdetails/config_container.tpl' => 1,
    'file:productdetails/basket.tpl' => 1,
    'file:productdetails/matrix.tpl' => 1,
    'file:productdetails/tabs.tpl' => 1,
    'file:snippets/product_slider.tpl' => 4,
    'file:productdetails/bundle.tpl' => 1,
    'file:productdetails/popups.tpl' => 1,
  ),
),false)) {
function content_60a38bb741a484_89979839 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_49618957160a38bb72b71f5_57369993', 'productdetails-details');
?>

<?php }
/* {block 'productdetails-details-include-pushed-success'} */
class Block_21695006660a38bb72c2ee5_78025701 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:productdetails/pushed_success.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('card'=>true), 0, false);
?>
            <?php
}
}
/* {/block 'productdetails-details-include-pushed-success'} */
/* {block 'productdetails-details-alert-product-note'} */
class Block_62636560060a38bb72c60b1_46859163 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo $_smarty_tpl->tpl_vars['alertList']->value->displayAlertByKey('productNote');?>

            <?php
}
}
/* {/block 'productdetails-details-alert-product-note'} */
/* {block 'productdetails-details-include-image'} */
class Block_118319493460a38bb72d5ea2_43457188 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_block_plugin5 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin5, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'lg'=>6,'class'=>"product-gallery"));
$_block_repeat=true;
echo $_block_plugin5->render(array('cols'=>12,'lg'=>6,'class'=>"product-gallery"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_gallery'),$_smarty_tpl ) );?>

                            <?php $_smarty_tpl->_subTemplateRender('file:productdetails/image.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_after_gallery'),$_smarty_tpl ) );?>

                        <?php $_block_repeat=false;
echo $_block_plugin5->render(array('cols'=>12,'lg'=>6,'class'=>"product-gallery"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php
}
}
/* {/block 'productdetails-details-include-image'} */
/* {block 'productdetails-details-info-product-title'} */
class Block_120542498760a38bb72dce46_77181740 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_headline'),$_smarty_tpl ) );?>

                                    <h1 class="product-title h2" itemprop="name"><?php echo $_smarty_tpl->tpl_vars['Artikel']->value->cName;?>
</h1>
                                <?php
}
}
/* {/block 'productdetails-details-info-product-title'} */
/* {block 'productdetails-details-include-rating'} */
class Block_97018675760a38bb72ec7a5_47619605 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'Votes'),$_smarty_tpl ) );
$_prefixVariable1 = ob_get_clean();
$_block_plugin7 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin7, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>((string)$_smarty_tpl->tpl_vars['Artikel']->value->cURLFull)."#tab-votes",'id'=>"jump-to-votes-tab",'aria'=>array("label"=>$_prefixVariable1)));
$_block_repeat=true;
echo $_block_plugin7->render(array('href'=>((string)$_smarty_tpl->tpl_vars['Artikel']->value->cURLFull)."#tab-votes",'id'=>"jump-to-votes-tab",'aria'=>array("label"=>$_prefixVariable1)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <?php $_smarty_tpl->_subTemplateRender('file:productdetails/rating.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stars'=>$_smarty_tpl->tpl_vars['Artikel']->value->Bewertungen->oBewertungGesamt->fDurchschnitt,'total'=>$_smarty_tpl->tpl_vars['Artikel']->value->Bewertungen->oBewertungGesamt->nAnzahl), 0, false);
?>
                                                    (<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->Bewertungen->oBewertungGesamt->nAnzahl;?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'rating'),$_smarty_tpl ) );?>
)
                                                <?php $_block_repeat=false;
echo $_block_plugin7->render(array('href'=>((string)$_smarty_tpl->tpl_vars['Artikel']->value->cURLFull)."#tab-votes",'id'=>"jump-to-votes-tab",'aria'=>array("label"=>$_prefixVariable1)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            <?php
}
}
/* {/block 'productdetails-details-include-rating'} */
/* {block 'productdetails-details-info-rating-wrapper'} */
class Block_103814269560a38bb72e8ba5_99729837 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <div class="rating-wrapper" itemprop="aggregateRating" itemscope="true" itemtype="http://schema.org/AggregateRating">
                                            <meta itemprop="ratingValue" content="<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->Bewertungen->oBewertungGesamt->fDurchschnitt;?>
"/>
                                            <meta itemprop="bestRating" content="5"/>
                                            <meta itemprop="worstRating" content="1"/>
                                            <meta itemprop="reviewCount" content="<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->Bewertungen->oBewertungGesamt->nAnzahl;?>
"/>
                                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_97018675760a38bb72ec7a5_47619605', 'productdetails-details-include-rating', $this->tplIndex);
?>

                                        </div>
                                    <?php
}
}
/* {/block 'productdetails-details-info-rating-wrapper'} */
/* {block 'productdetails-details-info-item-id'} */
class Block_159040768360a38bb72fb0f9_84955521 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <?php if ((isset($_smarty_tpl->tpl_vars['Artikel']->value->cArtNr))) {?>
                                                <li class="product-sku">
                                                    <strong>
                                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'sortProductno'),$_smarty_tpl ) );?>
:
                                                    </strong>
                                                    <span itemprop="sku"><?php echo $_smarty_tpl->tpl_vars['Artikel']->value->cArtNr;?>
</span>
                                                </li>
                                            <?php }?>
                                        <?php
}
}
/* {/block 'productdetails-details-info-item-id'} */
/* {block 'productdetails-details-info-mhd'} */
class Block_121987125960a38bb72ffaa6_46928479 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <?php if ((isset($_smarty_tpl->tpl_vars['Artikel']->value->dMHD)) && (isset($_smarty_tpl->tpl_vars['Artikel']->value->dMHD_de))) {?>
                                                <li class="product-mhd">
                                                    <strong title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'productMHDTool'),$_smarty_tpl ) );?>
">
                                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'productMHD'),$_smarty_tpl ) );?>
:
                                                    </strong>
                                                    <span itemprop="best-before"><?php echo $_smarty_tpl->tpl_vars['Artikel']->value->dMHD_de;?>
</span>
                                                </li>
                                            <?php }?>
                                        <?php
}
}
/* {/block 'productdetails-details-info-mhd'} */
/* {block 'productdetails-details-info-gtin'} */
class Block_47362207560a38bb73096f3_13872596 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <?php if (!empty($_smarty_tpl->tpl_vars['Artikel']->value->cBarcode) && ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['gtin_display'] === 'details' || $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['gtin_display'] === 'always')) {?>
                                                <li class="product-ean">
                                                    <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'ean'),$_smarty_tpl ) );?>
:</strong>
                                                    <span itemprop="<?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'count_characters' ][ 0 ], array( $_smarty_tpl->tpl_vars['Artikel']->value->cBarcode )) === 8) {?>gtin8<?php } else { ?>gtin13<?php }?>"><?php echo $_smarty_tpl->tpl_vars['Artikel']->value->cBarcode;?>
</span>
                                                </li>
                                            <?php }?>
                                        <?php
}
}
/* {/block 'productdetails-details-info-gtin'} */
/* {block 'productdetails-details-info-isbn'} */
class Block_176585866360a38bb7317847_87114454 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <?php if (!empty($_smarty_tpl->tpl_vars['Artikel']->value->cISBN) && ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['isbn_display'] === 'D' || $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['isbn_display'] === 'DL')) {?>
                                                <li class="product-isbn">
                                                    <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'isbn'),$_smarty_tpl ) );?>
:</strong>
                                                    <span itemprop="gtin13"><?php echo $_smarty_tpl->tpl_vars['Artikel']->value->cISBN;?>
</span>
                                                </li>
                                            <?php }?>
                                        <?php
}
}
/* {/block 'productdetails-details-info-isbn'} */
/* {block 'productdetails-details-info-category'} */
class Block_115261088460a38bb732a672_43239554 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                    <li class="product-category word-break">
                                                        <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'category'),$_smarty_tpl ) );?>
: </strong>
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['Brotnavi']->value[$_smarty_tpl->tpl_vars['cidx']->value]->getURLFull();?>
" itemprop="category"><?php echo $_smarty_tpl->tpl_vars['Brotnavi']->value[$_smarty_tpl->tpl_vars['cidx']->value]->getName();?>
</a>
                                                    </li>
                                                <?php
}
}
/* {/block 'productdetails-details-info-category'} */
/* {block 'productdetails-details-info-category-wrapper'} */
class Block_11250944360a38bb731f650_79554010 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <?php $_smarty_tpl->_assignInScope('cidx', (count($_smarty_tpl->tpl_vars['Brotnavi']->value))-2);?>
                                            <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_kategorie_anzeigen'] === 'Y' && (isset($_smarty_tpl->tpl_vars['Brotnavi']->value[$_smarty_tpl->tpl_vars['cidx']->value]))) {?>
                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_115261088460a38bb732a672_43239554', 'productdetails-details-info-category', $this->tplIndex);
?>

                                            <?php }?>
                                        <?php
}
}
/* {/block 'productdetails-details-info-category-wrapper'} */
/* {block 'productdetails-details-product-info-manufacturer'} */
class Block_213226224360a38bb73346d0_10904228 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                    <li  class="product-manufacturer" itemprop="brand" itemscope="true" itemtype="http://schema.org/Organization">
                                                        <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'manufacturers'),$_smarty_tpl ) );?>
:</strong>
                                                        <a href="<?php if (!empty($_smarty_tpl->tpl_vars['Artikel']->value->cHerstellerHomepage)) {
echo $_smarty_tpl->tpl_vars['Artikel']->value->cHerstellerHomepage;
} else {
echo $_smarty_tpl->tpl_vars['Artikel']->value->cHerstellerSeo;
}?>"
                                                            <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_hersteller_anzeigen'] === 'B') {?>
                                                                data-toggle="tooltip"
                                                                data-placement="left"
                                                                title="<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->cHersteller;?>
"
                                                            <?php }?>
                                                           itemprop="url">
                                                            <?php if (($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_hersteller_anzeigen'] === 'B' || $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_hersteller_anzeigen'] === 'BT') && !empty($_smarty_tpl->tpl_vars['Artikel']->value->cHerstellerBildURLKlein)) {?>
                                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0], array( array('lazy'=>true,'webp'=>true,'src'=>$_smarty_tpl->tpl_vars['Artikel']->value->cHerstellerBildURLKlein,'alt'=>$_smarty_tpl->tpl_vars['Artikel']->value->cHersteller,'width'=>"35px"),$_smarty_tpl ) );?>

                                                                <meta itemprop="image" content="<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->cHerstellerBildURLKlein;?>
">
                                                            <?php }?>
                                                            <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_hersteller_anzeigen'] !== 'B') {?>
                                                                <span itemprop="name"><?php echo $_smarty_tpl->tpl_vars['Artikel']->value->cHersteller;?>
</span>
                                                            <?php }?>
                                                        </a>
                                                    </li>
                                                <?php
}
}
/* {/block 'productdetails-details-product-info-manufacturer'} */
/* {block 'productdetails-details-info-manufacturer-wrapper'} */
class Block_93481538060a38bb7330f02_04011809 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_hersteller_anzeigen'] !== 'N' && (isset($_smarty_tpl->tpl_vars['Artikel']->value->cHersteller))) {?>
                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_213226224360a38bb73346d0_10904228', 'productdetails-details-product-info-manufacturer', $this->tplIndex);
?>

                                            <?php }?>
                                        <?php
}
}
/* {/block 'productdetails-details-info-manufacturer-wrapper'} */
/* {block 'productdetails-details-hazard-info'} */
class Block_142072630060a38bb7348640_65239173 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <?php if (!empty($_smarty_tpl->tpl_vars['Artikel']->value->cUNNummer) && !empty($_smarty_tpl->tpl_vars['Artikel']->value->cGefahrnr) && ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['adr_hazard_display'] === 'D' || $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['adr_hazard_display'] === 'DL')) {?>
                                                <li class="product-hazard">
                                                    <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'adrHazardSign'),$_smarty_tpl ) );?>
:</strong>
                                                    <table class="adr-table">
                                                        <tr>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['Artikel']->value->cGefahrnr;?>
</td>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['Artikel']->value->cUNNummer;?>
</td>
                                                        </tr>
                                                    </table>
                                                </li>
                                            <?php }?>
                                        <?php
}
}
/* {/block 'productdetails-details-hazard-info'} */
/* {block 'productdetails-details-info-essential'} */
class Block_69459012360a38bb72fa5e0_73843782 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <ul class="info-essential list-unstyled">
                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_159040768360a38bb72fb0f9_84955521', 'productdetails-details-info-item-id', $this->tplIndex);
?>

                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121987125960a38bb72ffaa6_46928479', 'productdetails-details-info-mhd', $this->tplIndex);
?>

                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_47362207560a38bb73096f3_13872596', 'productdetails-details-info-gtin', $this->tplIndex);
?>

                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_176585866360a38bb7317847_87114454', 'productdetails-details-info-isbn', $this->tplIndex);
?>

                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11250944360a38bb731f650_79554010', 'productdetails-details-info-category-wrapper', $this->tplIndex);
?>

                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_93481538060a38bb7330f02_04011809', 'productdetails-details-info-manufacturer-wrapper', $this->tplIndex);
?>

                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_142072630060a38bb7348640_65239173', 'productdetails-details-hazard-info', $this->tplIndex);
?>

                                    </ul>
                                <?php
}
}
/* {/block 'productdetails-details-info-essential'} */
/* {block 'productdetails-details-info-essential-wrapper'} */
class Block_176186526460a38bb72dff14_19631183 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php if (($_smarty_tpl->tpl_vars['Artikel']->value->Bewertungen->oBewertungGesamt->nAnzahl > 0) || (isset($_smarty_tpl->tpl_vars['Artikel']->value->cArtNr))) {?>
                                <?php if (($_smarty_tpl->tpl_vars['Einstellungen']->value['bewertung']['bewertung_anzeigen'] === 'Y' && $_smarty_tpl->tpl_vars['Artikel']->value->Bewertungen->oBewertungGesamt->nAnzahl > 0)) {?>
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_103814269560a38bb72e8ba5_99729837', 'productdetails-details-info-rating-wrapper', $this->tplIndex);
?>

                                <?php }?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_69459012360a38bb72fa5e0_73843782', 'productdetails-details-info-essential', $this->tplIndex);
?>

                            <?php }?>
                            <?php
}
}
/* {/block 'productdetails-details-info-essential-wrapper'} */
/* {block 'productdetails-details-info-description'} */
class Block_185529209260a38bb7356b81_02059148 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_short_desc'),$_smarty_tpl ) );?>

                                    <div class="shortdesc" itemprop="description">
                                        <?php echo $_smarty_tpl->tpl_vars['Artikel']->value->cKurzBeschreibung;?>

                                    </div>
                                <?php
}
}
/* {/block 'productdetails-details-info-description'} */
/* {block 'productdetails-details-info-description-wrapper'} */
class Block_123392142660a38bb7353ae6_56445913 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_kurzbeschreibung_anzeigen'] === 'Y' && $_smarty_tpl->tpl_vars['Artikel']->value->cKurzBeschreibung) {?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_185529209260a38bb7356b81_02059148', 'productdetails-details-info-description', $this->tplIndex);
?>

                            <?php }?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_after_short_desc'),$_smarty_tpl ) );?>

                            <?php
}
}
/* {/block 'productdetails-details-info-description-wrapper'} */
/* {block 'productdetails-details-info-hidden'} */
class Block_177460188160a38bb735e298_81884262 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php if (!($_smarty_tpl->tpl_vars['Artikel']->value->Preise->fVKNetto == 0 && $_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_preis0'] === 'N')) {?>
                                        <meta itemprop="url" content="<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->cURLFull;?>
">
                                        <link itemprop="businessFunction" href="http://purl.org/goodrelations/v1#Sell" />
                                    <?php }?>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"hidden",'name'=>"inWarenkorb",'value'=>"1"),$_smarty_tpl ) );?>

                                    <?php if ($_smarty_tpl->tpl_vars['Artikel']->value->kArtikelVariKombi > 0) {?>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"hidden",'name'=>"aK",'value'=>$_smarty_tpl->tpl_vars['Artikel']->value->kArtikelVariKombi),$_smarty_tpl ) );?>

                                    <?php }?>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['Artikel']->value->kVariKindArtikel))) {?>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"hidden",'name'=>"VariKindArtikel",'value'=>$_smarty_tpl->tpl_vars['Artikel']->value->kVariKindArtikel),$_smarty_tpl ) );?>

                                    <?php }?>
                                    <?php if ((isset($_GET['ek']))) {?>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"hidden",'name'=>"ek",'value'=>intval($_GET['ek'])),$_smarty_tpl ) );?>

                                    <?php }?>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"hidden",'name'=>"a",'class'=>"current_article",'value'=>$_smarty_tpl->tpl_vars['Artikel']->value->kArtikel),$_smarty_tpl ) );?>

                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"hidden",'name'=>"wke",'value'=>"1"),$_smarty_tpl ) );?>

                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"hidden",'name'=>"show",'value'=>"1"),$_smarty_tpl ) );?>

                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"hidden",'name'=>"kKundengruppe",'value'=>$_SESSION['Kundengruppe']->getID()),$_smarty_tpl ) );?>

                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"hidden",'name'=>"kSprache",'value'=>$_SESSION['kSprache']),$_smarty_tpl ) );?>

                                <?php
}
}
/* {/block 'productdetails-details-info-hidden'} */
/* {block 'productdetails-details-include-variation'} */
class Block_51793450160a38bb73857b2_87587733 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <!-- VARIATIONEN -->
                                    <?php $_smarty_tpl->_subTemplateRender('file:productdetails/variation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('simple'=>$_smarty_tpl->tpl_vars['Artikel']->value->isSimpleVariation,'showMatrix'=>$_smarty_tpl->tpl_vars['showMatrix']->value), 0, false);
?>
                                <?php
}
}
/* {/block 'productdetails-details-include-variation'} */
/* {block 'productdetails-details-include-price'} */
class Block_51809546160a38bb73893e0_19249223 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <?php $_block_plugin9 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin9, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array());
$_block_repeat=true;
echo $_block_plugin9->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php $_smarty_tpl->_subTemplateRender('file:productdetails/price.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('Artikel'=>$_smarty_tpl->tpl_vars['Artikel']->value,'tplscope'=>'detail','priceLarge'=>true), 0, false);
?>
                                        <?php $_block_repeat=false;
echo $_block_plugin9->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    <?php
}
}
/* {/block 'productdetails-details-include-price'} */
/* {block 'productdetails-details-include-stock'} */
class Block_128733170360a38bb7392351_91881431 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                        <?php $_smarty_tpl->_subTemplateRender('file:productdetails/stock.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                                    <?php
}
}
/* {/block 'productdetails-details-include-stock'} */
/* {block 'productdetails-details-question-on-item'} */
class Block_3841992760a38bb73953a6_51499663 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                        <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_fragezumprodukt_anzeigen'] === 'P') {?>
                                                            <button type="button" id="z<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->kArtikel;?>
"
                                                                    class="btn btn-link question"
                                                                    title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'productQuestion','section'=>'productDetails'),$_smarty_tpl ) );?>
"
                                                                    data-toggle="modal"
                                                                    data-target="#question-popup-<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->kArtikel;?>
">
                                                                <span class="fa fa-question-circle"></span>
                                                                <span class="hidden-xs hidden-sm"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'productQuestion','section'=>'productDetails'),$_smarty_tpl ) );?>
</span>
                                                            </button>
                                                        <?php }?>
                                                    <?php
}
}
/* {/block 'productdetails-details-question-on-item'} */
/* {block 'snippets-stock-note-include-warehouse'} */
class Block_17267753960a38bb739c892_15788708 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                <?php $_smarty_tpl->_subTemplateRender('file:productdetails/warehouse.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                            <?php
}
}
/* {/block 'snippets-stock-note-include-warehouse'} */
/* {block 'productdetails-details-stock'} */
class Block_21918640460a38bb738cae9_41124380 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <?php $_block_plugin10 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin10, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12));
$_block_repeat=true;
echo $_block_plugin10->render(array('cols'=>12), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php ob_start();
if (!(isset($_smarty_tpl->tpl_vars['availability']->value)) && !(isset($_smarty_tpl->tpl_vars['shippingTime']->value))) {
echo "stock-information-p";
}
$_prefixVariable2=ob_get_clean();
$_block_plugin11 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin11, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('no-gutters'=>true,'class'=>"stock-information ".$_prefixVariable2));
$_block_repeat=true;
echo $_block_plugin11->render(array('no-gutters'=>true,'class'=>"stock-information ".$_prefixVariable2), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                <?php $_block_plugin12 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin12, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array());
$_block_repeat=true;
echo $_block_plugin12->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_128733170360a38bb7392351_91881431', 'productdetails-details-include-stock', $this->tplIndex);
?>

                                                <?php $_block_repeat=false;
echo $_block_plugin12->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                <?php $_block_plugin13 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin13, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('class'=>"question-on-item col-auto"));
$_block_repeat=true;
echo $_block_plugin13->render(array('class'=>"question-on-item col-auto"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3841992760a38bb73953a6_51499663', 'productdetails-details-question-on-item', $this->tplIndex);
?>

                                                <?php $_block_repeat=false;
echo $_block_plugin13->render(array('class'=>"question-on-item col-auto"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            <?php $_block_repeat=false;
echo $_block_plugin11->render(array('no-gutters'=>true,'class'=>"stock-information ".$_prefixVariable2), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17267753960a38bb739c892_15788708', 'snippets-stock-note-include-warehouse', $this->tplIndex);
?>

                                        <?php $_block_repeat=false;
echo $_block_plugin10->render(array('cols'=>12), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    <?php
}
}
/* {/block 'productdetails-details-stock'} */
/* {block 'productdetails-details-include-uploads'} */
class Block_33922157560a38bb739fad0_36538235 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_smarty_tpl->_subTemplateRender("file:snippets/uploads.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tplscope'=>'product'), 0, false);
?>
                                <?php
}
}
/* {/block 'productdetails-details-include-uploads'} */
/* {block 'productdetails-details-config-button-info'} */
class Block_203190487760a38bb73a7864_24515600 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                    <?php $_block_plugin15 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin15, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'class'=>"js-choose-variations-wrapper"));
$_block_repeat=true;
echo $_block_plugin15->render(array('cols'=>12,'class'=>"js-choose-variations-wrapper"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                        <?php $_block_plugin16 = isset($_smarty_tpl->smarty->registered_plugins['block']['alert'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['alert'][0][0] : null;
if (!is_callable(array($_block_plugin16, 'render'))) {
throw new SmartyException('block tag \'alert\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('alert', array('variation'=>"info",'class'=>"choose-variations"));
$_block_repeat=true;
echo $_block_plugin16->render(array('variation'=>"info",'class'=>"choose-variations"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'chooseVariations','section'=>'messages'),$_smarty_tpl ) );?>

                                                        <?php $_block_repeat=false;
echo $_block_plugin16->render(array('variation'=>"info",'class'=>"choose-variations"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                    <?php $_block_repeat=false;
echo $_block_plugin15->render(array('cols'=>12,'class'=>"js-choose-variations-wrapper"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                <?php
}
}
/* {/block 'productdetails-details-config-button-info'} */
/* {block 'productdetails-details-config-button-button'} */
class Block_197643664560a38bb73ad566_78853211 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                <?php $_block_plugin17 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin17, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'sm'=>6));
$_block_repeat=true;
echo $_block_plugin17->render(array('cols'=>12,'sm'=>6), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'configure'),$_smarty_tpl ) );
$_prefixVariable3=ob_get_clean();
$_block_plugin18 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin18, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('type'=>"button",'class'=>"start-configuration js-start-configuration",'value'=>$_prefixVariable3,'block'=>true,'data'=>array("toggle"=>"modal","target"=>"#cfg-container"),'disabled'=>((isset($_smarty_tpl->tpl_vars['Artikel']->value->Variationen)) && count($_smarty_tpl->tpl_vars['Artikel']->value->Variationen) > 0)));
$_block_repeat=true;
echo $_block_plugin18->render(array('type'=>"button",'class'=>"start-configuration js-start-configuration",'value'=>$_prefixVariable3,'block'=>true,'data'=>array("toggle"=>"modal","target"=>"#cfg-container"),'disabled'=>((isset($_smarty_tpl->tpl_vars['Artikel']->value->Variationen)) && count($_smarty_tpl->tpl_vars['Artikel']->value->Variationen) > 0)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'configure'),$_smarty_tpl ) );?>
</span> <i class="fas fa-cogs"></i>
                                                    <?php $_block_repeat=false;
echo $_block_plugin18->render(array('type'=>"button",'class'=>"start-configuration js-start-configuration",'value'=>$_prefixVariable3,'block'=>true,'data'=>array("toggle"=>"modal","target"=>"#cfg-container"),'disabled'=>((isset($_smarty_tpl->tpl_vars['Artikel']->value->Variationen)) && count($_smarty_tpl->tpl_vars['Artikel']->value->Variationen) > 0)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                <?php $_block_repeat=false;
echo $_block_plugin17->render(array('cols'=>12,'sm'=>6), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            <?php
}
}
/* {/block 'productdetails-details-config-button-button'} */
/* {block 'productdetails-details-config-button'} */
class Block_184696352260a38bb73a36f9_51025668 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <?php $_block_plugin14 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin14, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array());
$_block_repeat=true;
echo $_block_plugin14->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['Artikel']->value->Variationen)) && count($_smarty_tpl->tpl_vars['Artikel']->value->Variationen) > 0) {?>
                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_203190487760a38bb73a7864_24515600', 'productdetails-details-config-button-info', $this->tplIndex);
?>

                                            <?php }?>
                                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_197643664560a38bb73ad566_78853211', 'productdetails-details-config-button-button', $this->tplIndex);
?>

                                        <?php $_block_repeat=false;
echo $_block_plugin14->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    <?php
}
}
/* {/block 'productdetails-details-config-button'} */
/* {block 'productdetails-details-include-config-container'} */
class Block_206545700460a38bb73ba302_68403598 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <?php $_block_plugin19 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin19, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('id'=>"product-configurator"));
$_block_repeat=true;
echo $_block_plugin19->render(array('id'=>"product-configurator"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php $_smarty_tpl->_subTemplateRender('file:productdetails/config_container.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                        <?php $_block_repeat=false;
echo $_block_plugin19->render(array('id'=>"product-configurator"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    <?php
}
}
/* {/block 'productdetails-details-include-config-container'} */
/* {block 'productdetails-details-include-basket'} */
class Block_212521101360a38bb73bd954_50708531 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <?php $_smarty_tpl->_subTemplateRender('file:productdetails/basket.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                    <?php
}
}
/* {/block 'productdetails-details-include-basket'} */
/* {block 'productdetails-details-info'} */
class Block_185031704460a38bb72dc350_47800661 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div class="product-info-inner">
                            <div class="product-headline">
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_120542498760a38bb72dce46_77181740', 'productdetails-details-info-product-title', $this->tplIndex);
?>

                            </div>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_176186526460a38bb72dff14_19631183', 'productdetails-details-info-essential-wrapper', $this->tplIndex);
?>


                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_123392142660a38bb7353ae6_56445913', 'productdetails-details-info-description-wrapper', $this->tplIndex);
?>


                            <div class="product-offer"<?php if (!($_smarty_tpl->tpl_vars['Artikel']->value->Preise->fVKNetto == 0 && $_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_preis0'] === 'N')) {?> itemprop="offers" itemscope itemtype="http://schema.org/Offer"<?php }?>>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_177460188160a38bb735e298_81884262', 'productdetails-details-info-hidden', $this->tplIndex);
?>

                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_51793450160a38bb73857b2_87587733', 'productdetails-details-include-variation', $this->tplIndex);
?>


                                <?php $_block_plugin8 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin8, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array());
$_block_repeat=true;
echo $_block_plugin8->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_51809546160a38bb73893e0_19249223', 'productdetails-details-include-price', $this->tplIndex);
?>

                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21918640460a38bb738cae9_41124380', 'productdetails-details-stock', $this->tplIndex);
?>

                                <?php $_block_repeat=false;
echo $_block_plugin8->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_33922157560a38bb739fad0_36538235', 'productdetails-details-include-uploads', $this->tplIndex);
?>

                                                                <?php if ($_smarty_tpl->tpl_vars['Artikel']->value->bHasKonfig) {?>
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_184696352260a38bb73a36f9_51025668', 'productdetails-details-config-button', $this->tplIndex);
?>

                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_206545700460a38bb73ba302_68403598', 'productdetails-details-include-config-container', $this->tplIndex);
?>

                                <?php } else { ?>
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_212521101360a38bb73bd954_50708531', 'productdetails-details-include-basket', $this->tplIndex);
?>

                                <?php }?>
                            </div>
                        </div>                        <?php
}
}
/* {/block 'productdetails-details-info'} */
/* {block 'productdetails-details-include-matrix'} */
class Block_101029916060a38bb73c1ce7_78228576 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:productdetails/matrix.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php
}
}
/* {/block 'productdetails-details-include-matrix'} */
/* {block 'productdetails-details-form'} */
class Block_20311968660a38bb72c9540_29610339 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_buy_form','inContainer'=>false),$_smarty_tpl ) );?>

        <?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array());
$_block_repeat=true;
echo $_block_plugin2->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'render'))) {
throw new SmartyException('block tag \'form\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('id'=>"buy_form",'action'=>$_smarty_tpl->tpl_vars['Artikel']->value->cURLFull,'class'=>"jtl-validate"));
$_block_repeat=true;
echo $_block_plugin3->render(array('id'=>"buy_form",'action'=>$_smarty_tpl->tpl_vars['Artikel']->value->cURLFull,'class'=>"jtl-validate"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('id'=>"product-offer",'class'=>"product-detail"));
$_block_repeat=true;
echo $_block_plugin4->render(array('id'=>"product-offer",'class'=>"product-detail"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_118319493460a38bb72d5ea2_43457188', 'productdetails-details-include-image', $this->tplIndex);
?>

                    <?php $_block_plugin6 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin6, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'lg'=>6,'class'=>"product-info"));
$_block_repeat=true;
echo $_block_plugin6->render(array('cols'=>12,'lg'=>6,'class'=>"product-info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_185031704460a38bb72dc350_47800661', 'productdetails-details-info', $this->tplIndex);
?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_after_product_info'),$_smarty_tpl ) );?>

                    <?php $_block_repeat=false;
echo $_block_plugin6->render(array('cols'=>12,'lg'=>6,'class'=>"product-info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php $_block_repeat=false;
echo $_block_plugin4->render(array('id'=>"product-offer",'class'=>"product-detail"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_101029916060a38bb73c1ce7_78228576', 'productdetails-details-include-matrix', $this->tplIndex);
?>

            <?php $_block_repeat=false;
echo $_block_plugin3->render(array('id'=>"buy_form",'action'=>$_smarty_tpl->tpl_vars['Artikel']->value->cURLFull,'class'=>"jtl-validate"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php $_block_repeat=false;
echo $_block_plugin2->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php
}
}
/* {/block 'productdetails-details-form'} */
/* {block 'productdetails-details-include-tabs'} */
class Block_68664562360a38bb73c5920_20288500 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:productdetails/tabs.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'productdetails-details-include-tabs'} */
/* {block 'productdetails-details-include-product-slider-partslist'} */
class Block_111573181760a38bb73e3232_54321529 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div class="partslist">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'listOfItems','section'=>'global','assign'=>'slidertitle'),$_smarty_tpl ) );?>

                            <?php $_smarty_tpl->_subTemplateRender('file:snippets/product_slider.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>'slider-partslist','productlist'=>$_smarty_tpl->tpl_vars['Artikel']->value->oStueckliste_arr,'title'=>$_smarty_tpl->tpl_vars['slidertitle']->value,'showPartsList'=>true), 0, false);
?>
                        </div>
                    <?php
}
}
/* {/block 'productdetails-details-include-product-slider-partslist'} */
/* {block 'productdetails-details-include-bundle'} */
class Block_34917268060a38bb73ed325_96789844 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div class="bundle">
                            <?php $_smarty_tpl->_subTemplateRender('file:productdetails/bundle.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ProductKey'=>$_smarty_tpl->tpl_vars['Artikel']->value->kArtikel,'Products'=>$_smarty_tpl->tpl_vars['Artikel']->value->oProduktBundle_arr,'ProduktBundle'=>$_smarty_tpl->tpl_vars['Artikel']->value->oProduktBundlePrice,'ProductMain'=>$_smarty_tpl->tpl_vars['Artikel']->value->oProduktBundleMain), 0, false);
?>
                        </div>
                    <?php
}
}
/* {/block 'productdetails-details-include-bundle'} */
/* {block 'productdetails-details-recommendations'} */
class Block_198270304160a38bb73f8775_17841038 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php if ((isset($_smarty_tpl->tpl_vars['Xselling']->value->Standard->XSellGruppen)) && count($_smarty_tpl->tpl_vars['Xselling']->value->Standard->XSellGruppen) > 0) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Xselling']->value->Standard->XSellGruppen, 'Gruppe');
$_smarty_tpl->tpl_vars['Gruppe']->iteration = 0;
$_smarty_tpl->tpl_vars['Gruppe']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Gruppe']->value) {
$_smarty_tpl->tpl_vars['Gruppe']->do_else = false;
$_smarty_tpl->tpl_vars['Gruppe']->iteration++;
$__foreach_Gruppe_4_saved = $_smarty_tpl->tpl_vars['Gruppe'];
?>
                                    <?php $_smarty_tpl->_subTemplateRender('file:snippets/product_slider.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class'=>'x-supplies','id'=>('slider-xsell-group-').($_smarty_tpl->tpl_vars['Gruppe']->iteration),'productlist'=>$_smarty_tpl->tpl_vars['Gruppe']->value->Artikel,'title'=>$_smarty_tpl->tpl_vars['Gruppe']->value->Name), 0, true);
?>
                                <?php
$_smarty_tpl->tpl_vars['Gruppe'] = $__foreach_Gruppe_4_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }?>

                            <?php if ((isset($_smarty_tpl->tpl_vars['Xselling']->value->Kauf->Artikel)) && count($_smarty_tpl->tpl_vars['Xselling']->value->Kauf->Artikel) > 0) {?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'customerWhoBoughtXBoughtAlsoY','section'=>'productDetails','assign'=>'slidertitle'),$_smarty_tpl ) );?>

                                <?php $_smarty_tpl->_subTemplateRender('file:snippets/product_slider.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class'=>'x-sell','id'=>'slider-xsell','productlist'=>$_smarty_tpl->tpl_vars['Xselling']->value->Kauf->Artikel,'title'=>$_smarty_tpl->tpl_vars['slidertitle']->value), 0, true);
?>
                            <?php }?>

                            <?php if ((isset($_smarty_tpl->tpl_vars['oAehnlicheArtikel_arr']->value)) && count($_smarty_tpl->tpl_vars['oAehnlicheArtikel_arr']->value) > 0) {?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'RelatedProducts','section'=>'productDetails','assign'=>'slidertitle'),$_smarty_tpl ) );?>

                                <?php $_smarty_tpl->_subTemplateRender('file:snippets/product_slider.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class'=>'x-related','id'=>'slider-related','productlist'=>$_smarty_tpl->tpl_vars['oAehnlicheArtikel_arr']->value,'title'=>$_smarty_tpl->tpl_vars['slidertitle']->value), 0, true);
?>
                            <?php }?>
                        <?php
}
}
/* {/block 'productdetails-details-recommendations'} */
/* {block 'productdetails-details-include-popups'} */
class Block_61091045460a38bb7416e45_44260746 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="article_popups">
                <?php $_smarty_tpl->_subTemplateRender('file:productdetails/popups.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
        <?php
}
}
/* {/block 'productdetails-details-include-popups'} */
/* {block 'productdetails-details-content-not-quickview'} */
class Block_161902721960a38bb73c4e70_65098027 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_68664562360a38bb73c5920_20288500', 'productdetails-details-include-tabs', $this->tplIndex);
?>


                <?php if ((isset($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_stueckliste_anzeigen'])) && $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_stueckliste_anzeigen'] === 'Y' && (isset($_smarty_tpl->tpl_vars['Artikel']->value->oStueckliste_arr)) && count($_smarty_tpl->tpl_vars['Artikel']->value->oStueckliste_arr) > 0 || (isset($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_produktbundle_nutzen'])) && $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_produktbundle_nutzen'] === 'Y' && (isset($_smarty_tpl->tpl_vars['Artikel']->value->oProduktBundle_arr)) && count($_smarty_tpl->tpl_vars['Artikel']->value->oProduktBundle_arr) > 0 || (isset($_smarty_tpl->tpl_vars['Xselling']->value->Standard->XSellGruppen)) && count($_smarty_tpl->tpl_vars['Xselling']->value->Standard->XSellGruppen) > 0 || (isset($_smarty_tpl->tpl_vars['Xselling']->value->Kauf->Artikel)) && count($_smarty_tpl->tpl_vars['Xselling']->value->Kauf->Artikel) > 0 || (isset($_smarty_tpl->tpl_vars['oAehnlicheArtikel_arr']->value)) && count($_smarty_tpl->tpl_vars['oAehnlicheArtikel_arr']->value) > 0) {?>
            <?php $_block_plugin20 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin20, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array('fluid'=>true));
$_block_repeat=true;
echo $_block_plugin20->render(array('fluid'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php if ((isset($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_stueckliste_anzeigen'])) && $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_stueckliste_anzeigen'] === 'Y' && (isset($_smarty_tpl->tpl_vars['Artikel']->value->oStueckliste_arr)) && count($_smarty_tpl->tpl_vars['Artikel']->value->oStueckliste_arr) > 0) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_111573181760a38bb73e3232_54321529', 'productdetails-details-include-product-slider-partslist', $this->tplIndex);
?>

                <?php }?>

                <?php if ((isset($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_produktbundle_nutzen'])) && $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_produktbundle_nutzen'] === 'Y' && (isset($_smarty_tpl->tpl_vars['Artikel']->value->oProduktBundle_arr)) && count($_smarty_tpl->tpl_vars['Artikel']->value->oProduktBundle_arr) > 0) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_34917268060a38bb73ed325_96789844', 'productdetails-details-include-bundle', $this->tplIndex);
?>

                <?php }?>
                <?php if ((isset($_smarty_tpl->tpl_vars['Xselling']->value->Standard)) || (isset($_smarty_tpl->tpl_vars['Xselling']->value->Kauf)) || (isset($_smarty_tpl->tpl_vars['oAehnlicheArtikel_arr']->value))) {?>
                    <div class="recommendations d-print-none">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_198270304160a38bb73f8775_17841038', 'productdetails-details-recommendations', $this->tplIndex);
?>

                    </div>
                <?php }?>
            <?php $_block_repeat=false;
echo $_block_plugin20->render(array('fluid'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php }?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_61091045460a38bb7416e45_44260746', 'productdetails-details-include-popups', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'productdetails-details-content-not-quickview'} */
/* {block 'productdetails-details'} */
class Block_49618957160a38bb72b71f5_57369993 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'productdetails-details' => 
  array (
    0 => 'Block_49618957160a38bb72b71f5_57369993',
  ),
  'productdetails-details-include-pushed-success' => 
  array (
    0 => 'Block_21695006660a38bb72c2ee5_78025701',
  ),
  'productdetails-details-alert-product-note' => 
  array (
    0 => 'Block_62636560060a38bb72c60b1_46859163',
  ),
  'productdetails-details-form' => 
  array (
    0 => 'Block_20311968660a38bb72c9540_29610339',
  ),
  'productdetails-details-include-image' => 
  array (
    0 => 'Block_118319493460a38bb72d5ea2_43457188',
  ),
  'productdetails-details-info' => 
  array (
    0 => 'Block_185031704460a38bb72dc350_47800661',
  ),
  'productdetails-details-info-product-title' => 
  array (
    0 => 'Block_120542498760a38bb72dce46_77181740',
  ),
  'productdetails-details-info-essential-wrapper' => 
  array (
    0 => 'Block_176186526460a38bb72dff14_19631183',
  ),
  'productdetails-details-info-rating-wrapper' => 
  array (
    0 => 'Block_103814269560a38bb72e8ba5_99729837',
  ),
  'productdetails-details-include-rating' => 
  array (
    0 => 'Block_97018675760a38bb72ec7a5_47619605',
  ),
  'productdetails-details-info-essential' => 
  array (
    0 => 'Block_69459012360a38bb72fa5e0_73843782',
  ),
  'productdetails-details-info-item-id' => 
  array (
    0 => 'Block_159040768360a38bb72fb0f9_84955521',
  ),
  'productdetails-details-info-mhd' => 
  array (
    0 => 'Block_121987125960a38bb72ffaa6_46928479',
  ),
  'productdetails-details-info-gtin' => 
  array (
    0 => 'Block_47362207560a38bb73096f3_13872596',
  ),
  'productdetails-details-info-isbn' => 
  array (
    0 => 'Block_176585866360a38bb7317847_87114454',
  ),
  'productdetails-details-info-category-wrapper' => 
  array (
    0 => 'Block_11250944360a38bb731f650_79554010',
  ),
  'productdetails-details-info-category' => 
  array (
    0 => 'Block_115261088460a38bb732a672_43239554',
  ),
  'productdetails-details-info-manufacturer-wrapper' => 
  array (
    0 => 'Block_93481538060a38bb7330f02_04011809',
  ),
  'productdetails-details-product-info-manufacturer' => 
  array (
    0 => 'Block_213226224360a38bb73346d0_10904228',
  ),
  'productdetails-details-hazard-info' => 
  array (
    0 => 'Block_142072630060a38bb7348640_65239173',
  ),
  'productdetails-details-info-description-wrapper' => 
  array (
    0 => 'Block_123392142660a38bb7353ae6_56445913',
  ),
  'productdetails-details-info-description' => 
  array (
    0 => 'Block_185529209260a38bb7356b81_02059148',
  ),
  'productdetails-details-info-hidden' => 
  array (
    0 => 'Block_177460188160a38bb735e298_81884262',
  ),
  'productdetails-details-include-variation' => 
  array (
    0 => 'Block_51793450160a38bb73857b2_87587733',
  ),
  'productdetails-details-include-price' => 
  array (
    0 => 'Block_51809546160a38bb73893e0_19249223',
  ),
  'productdetails-details-stock' => 
  array (
    0 => 'Block_21918640460a38bb738cae9_41124380',
  ),
  'productdetails-details-include-stock' => 
  array (
    0 => 'Block_128733170360a38bb7392351_91881431',
  ),
  'productdetails-details-question-on-item' => 
  array (
    0 => 'Block_3841992760a38bb73953a6_51499663',
  ),
  'snippets-stock-note-include-warehouse' => 
  array (
    0 => 'Block_17267753960a38bb739c892_15788708',
  ),
  'productdetails-details-include-uploads' => 
  array (
    0 => 'Block_33922157560a38bb739fad0_36538235',
  ),
  'productdetails-details-config-button' => 
  array (
    0 => 'Block_184696352260a38bb73a36f9_51025668',
  ),
  'productdetails-details-config-button-info' => 
  array (
    0 => 'Block_203190487760a38bb73a7864_24515600',
  ),
  'productdetails-details-config-button-button' => 
  array (
    0 => 'Block_197643664560a38bb73ad566_78853211',
  ),
  'productdetails-details-include-config-container' => 
  array (
    0 => 'Block_206545700460a38bb73ba302_68403598',
  ),
  'productdetails-details-include-basket' => 
  array (
    0 => 'Block_212521101360a38bb73bd954_50708531',
  ),
  'productdetails-details-include-matrix' => 
  array (
    0 => 'Block_101029916060a38bb73c1ce7_78228576',
  ),
  'productdetails-details-content-not-quickview' => 
  array (
    0 => 'Block_161902721960a38bb73c4e70_65098027',
  ),
  'productdetails-details-include-tabs' => 
  array (
    0 => 'Block_68664562360a38bb73c5920_20288500',
  ),
  'productdetails-details-include-product-slider-partslist' => 
  array (
    0 => 'Block_111573181760a38bb73e3232_54321529',
  ),
  'productdetails-details-include-bundle' => 
  array (
    0 => 'Block_34917268060a38bb73ed325_96789844',
  ),
  'productdetails-details-recommendations' => 
  array (
    0 => 'Block_198270304160a38bb73f8775_17841038',
  ),
  'productdetails-details-include-popups' => 
  array (
    0 => 'Block_61091045460a38bb7416e45_44260746',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_assignInScope('hasLeftBox', false);?>
    <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array());
$_block_repeat=true;
echo $_block_plugin1->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php if ((isset($_smarty_tpl->tpl_vars['bWarenkorbHinzugefuegt']->value)) && $_smarty_tpl->tpl_vars['bWarenkorbHinzugefuegt']->value) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21695006660a38bb72c2ee5_78025701', 'productdetails-details-include-pushed-success', $this->tplIndex);
?>

        <?php } else { ?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_62636560060a38bb72c60b1_46859163', 'productdetails-details-alert-product-note', $this->tplIndex);
?>

        <?php }?>
    <?php $_block_repeat=false;
echo $_block_plugin1->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20311968660a38bb72c9540_29610339', 'productdetails-details-form', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_161902721960a38bb73c4e70_65098027', 'productdetails-details-content-not-quickview', $this->tplIndex);
?>

<?php
}
}
/* {/block 'productdetails-details'} */
}
