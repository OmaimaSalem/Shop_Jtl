<?php
/* Smarty version 3.1.38, created on 2021-05-19 17:27:10
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVAChild\productdetails\price.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a52e4e8204e1_26981712',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '560ece350327bc1cbd1f877aa8892ae73bd447fb' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVAChild\\productdetails\\price.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/shipping_tax_info.tpl' => 1,
  ),
),false)) {
function content_60a52e4e8204e1_26981712 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_31992179860a52e4e6db7a5_35840816', 'productdetails-price');
?>

<?php }
/* {block 'productdetails-price-out-of-stock'} */
class Block_4199298960a52e4e6edf52_14875406 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <span class="price_label price_out_of_stock"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'productOutOfStock','section'=>'productDetails'),$_smarty_tpl ) );?>
</span>
                <?php
}
}
/* {/block 'productdetails-price-out-of-stock'} */
/* {block 'productdetails-price-as-configured'} */
class Block_69485157460a52e4e6f6706_12690979 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <span class="price_label price_as_configured"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'priceAsConfigured','section'=>'productDetails'),$_smarty_tpl ) );?>
</span> <span class="price"></span>
                <?php
}
}
/* {/block 'productdetails-price-as-configured'} */
/* {block 'productdetails-price-on-application'} */
class Block_139917748460a52e4e6fb3e5_97114724 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <span class="price_label price_on_application"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'priceOnApplication'),$_smarty_tpl ) );?>
</span>
                <?php
}
}
/* {/block 'productdetails-price-on-application'} */
/* {block 'productdetails-price-label'} */
class Block_36529845560a52e4e6fd587_32981224 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php if (($_smarty_tpl->tpl_vars['tplscope']->value !== 'detail' && $_smarty_tpl->tpl_vars['Artikel']->value->Preise->oPriceRange->isRange() && $_smarty_tpl->tpl_vars['Artikel']->value->Preise->oPriceRange->rangeWidth() > $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeluebersicht']['articleoverview_pricerange_width']) || ($_smarty_tpl->tpl_vars['tplscope']->value === 'detail' && ($_smarty_tpl->tpl_vars['Artikel']->value->nVariationsAufpreisVorhanden == 1 || $_smarty_tpl->tpl_vars['Artikel']->value->bHasKonfig) && $_smarty_tpl->tpl_vars['Artikel']->value->kVaterArtikel == 0)) {?>
                        <span class="price_label pricestarting"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'priceStarting'),$_smarty_tpl ) );?>
 </span>
                    <?php } elseif ($_smarty_tpl->tpl_vars['Artikel']->value->Preise->rabatt > 0) {?>
                        <span class="price_label nowonly"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'nowOnly'),$_smarty_tpl ) );?>
 </span>
                    <?php }?>
                <?php
}
}
/* {/block 'productdetails-price-label'} */
/* {block 'productdetails-range'} */
class Block_37322178660a52e4e70fb20_49761896 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <span<?php if ($_smarty_tpl->tpl_vars['Artikel']->value->Preise->oPriceRange->isRange() && $_smarty_tpl->tpl_vars['tplscope']->value !== 'box') {?> itemprop="priceSpecification" itemscope itemtype="http://schema.org/UnitPriceSpecification"<?php }?>>
                        <?php if ($_smarty_tpl->tpl_vars['tplscope']->value !== 'detail' && $_smarty_tpl->tpl_vars['Artikel']->value->Preise->oPriceRange->isRange()) {?>
                            <?php if ($_smarty_tpl->tpl_vars['Artikel']->value->Preise->oPriceRange->rangeWidth() <= $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeluebersicht']['articleoverview_pricerange_width']) {?>
                                <?php $_smarty_tpl->_assignInScope('rangePrices', $_smarty_tpl->tpl_vars['Artikel']->value->Preise->oPriceRange->getLocalizedArray($_smarty_tpl->tpl_vars['NettoPreise']->value));?>
                                <span class="first-range-price"><?php echo $_smarty_tpl->tpl_vars['rangePrices']->value[0];?>
 - </span><span class="second-range-price"><?php echo $_smarty_tpl->tpl_vars['rangePrices']->value[1];?>
 <?php if ($_smarty_tpl->tpl_vars['tplscope']->value !== 'detail') {?> <span class="footnote-reference">*</span><?php }?></span>
                            <?php } else { ?>
                                <?php echo $_smarty_tpl->tpl_vars['Artikel']->value->Preise->oPriceRange->getMinLocalized($_smarty_tpl->tpl_vars['NettoPreise']->value);?>
 <span class="footnote-reference">*</span>
                            <?php }?>
                        <?php } else { ?>
                            <?php if ($_smarty_tpl->tpl_vars['Artikel']->value->Preise->oPriceRange->isRange() && ($_smarty_tpl->tpl_vars['Artikel']->value->nVariationsAufpreisVorhanden == 1 || $_smarty_tpl->tpl_vars['Artikel']->value->bHasKonfig) && $_smarty_tpl->tpl_vars['Artikel']->value->kVaterArtikel == 0) {
echo $_smarty_tpl->tpl_vars['Artikel']->value->Preise->oPriceRange->getMinLocalized($_smarty_tpl->tpl_vars['NettoPreise']->value);
} else {
echo $_smarty_tpl->tpl_vars['Artikel']->value->Preise->cVKLocalized[$_smarty_tpl->tpl_vars['NettoPreise']->value];
}?>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['Artikel']->value->Preise->oPriceRange->isRange() && $_smarty_tpl->tpl_vars['tplscope']->value !== 'box') {?>
                            <meta itemprop="priceCurrency" content="<?php echo $_SESSION['Waehrung']->getName();?>
">
                            <meta itemprop="minPrice" content="<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->Preise->oPriceRange->minBruttoPrice;?>
">
                            <meta itemprop="maxPrice" content="<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->Preise->oPriceRange->maxBruttoPrice;?>
">
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['tplscope']->value !== 'detail' && !$_smarty_tpl->tpl_vars['Artikel']->value->Preise->oPriceRange->isRange()) {?> <span class="footnote-reference">*</span><?php }?>
                    <?php
}
}
/* {/block 'productdetails-range'} */
/* {block 'productdetails-price-snippets'} */
class Block_135833179860a52e4e738406_53221283 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php if ($_smarty_tpl->tpl_vars['tplscope']->value !== 'box') {?>
                            <meta itemprop="price" content="<?php if ($_smarty_tpl->tpl_vars['Artikel']->value->Preise->oPriceRange->isRange()) {
echo $_smarty_tpl->tpl_vars['Artikel']->value->Preise->oPriceRange->minBruttoPrice;
} else {
echo $_smarty_tpl->tpl_vars['Artikel']->value->Preise->fVKBrutto;
}?>">
                            <meta itemprop="priceCurrency" content="<?php echo $_SESSION['Waehrung']->getName();?>
">
                            <?php if ($_smarty_tpl->tpl_vars['Artikel']->value->Preise->Sonderpreis_aktiv && $_smarty_tpl->tpl_vars['Artikel']->value->dSonderpreisStart_en !== null && $_smarty_tpl->tpl_vars['Artikel']->value->dSonderpreisEnde_en !== null) {?>
                                <meta itemprop="validFrom" content="<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->dSonderpreisStart_en;?>
">
                                <meta itemprop="validThrough" content="<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->dSonderpreisEnde_en;?>
">
                                <meta itemprop="priceValidUntil" content="<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->dSonderpreisEnde_en;?>
">
                            <?php }?>
                        <?php }?>
                    <?php
}
}
/* {/block 'productdetails-price-snippets'} */
/* {block 'productdetails-price-label-per-unit'} */
class Block_176189069860a52e4e751967_66469472 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <span class="price_label per_unit"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'vpePer'),$_smarty_tpl ) );?>
 1 <?php echo $_smarty_tpl->tpl_vars['Artikel']->value->cEinheit;?>
</span>
                                <?php
}
}
/* {/block 'productdetails-price-label-per-unit'} */
/* {block 'productdetails-price-detail-base-price'} */
class Block_116075261360a52e4e758525_78504152 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\includes\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
?>

                                    <div class="base-price text-nowrap-util" itemprop="priceSpecification" itemscope itemtype="http://schema.org/UnitPriceSpecification">
                                        <meta itemprop="price" content="<?php if ($_smarty_tpl->tpl_vars['Artikel']->value->Preise->oPriceRange->isRange()) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'string_format' ][ 0 ], array( ($_smarty_tpl->tpl_vars['Artikel']->value->Preise->oPriceRange->minBruttoPrice/$_smarty_tpl->tpl_vars['Artikel']->value->fVPEWert),"%.2f" ));
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'string_format' ][ 0 ], array( ($_smarty_tpl->tpl_vars['Artikel']->value->Preise->fVKBrutto/$_smarty_tpl->tpl_vars['Artikel']->value->fVPEWert),"%.2f" ));
}?>">
                                        <meta itemprop="priceCurrency" content="<?php echo $_SESSION['Waehrung']->getName();?>
">
                                        <span class="value" itemprop="referenceQuantity" itemscope itemtype="http://schema.org/QuantitativeValue">
                                            <?php echo $_smarty_tpl->tpl_vars['Artikel']->value->cLocalizedVPE[$_smarty_tpl->tpl_vars['NettoPreise']->value];?>

                                            <meta itemprop="value" content="<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->fGrundpreisMenge;?>
">
                                            <meta itemprop="unitText" content="<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['Artikel']->value->cVPEEinheit,"/[\d ]/",'');?>
">
                                        </span>
                                    </div>
                                <?php
}
}
/* {/block 'productdetails-price-detail-base-price'} */
/* {block 'productdetails-price-detail-vat-info'} */
class Block_214369551460a52e4e799cd3_51549577 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <span class="vat_info">
                                    <?php $_smarty_tpl->_subTemplateRender('file:snippets/shipping_tax_info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('taxdata'=>$_smarty_tpl->tpl_vars['Artikel']->value->taxData), 0, false);
?>
                                </span>
                            <?php
}
}
/* {/block 'productdetails-price-detail-vat-info'} */
/* {block 'productdetails-price-special-prices-detail'} */
class Block_120947793960a52e4e79c791_53700600 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php if ($_smarty_tpl->tpl_vars['Artikel']->value->Preise->Sonderpreis_aktiv && $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_sonderpreisanzeige'] == 2) {?>
                                    <div class="text-danger text-stroke text-nowrap-util">
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'oldPrice'),$_smarty_tpl ) );?>
: <?php echo $_smarty_tpl->tpl_vars['Artikel']->value->Preise->alterVKLocalized[$_smarty_tpl->tpl_vars['NettoPreise']->value];?>

                                    </div>
                                <?php } elseif (!$_smarty_tpl->tpl_vars['Artikel']->value->Preise->Sonderpreis_aktiv && $_smarty_tpl->tpl_vars['Artikel']->value->Preise->rabatt > 0) {?>
                                    <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_rabattanzeige'] == 3 || $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_rabattanzeige'] == 4) {?>
                                        <div class="text-danger text-stroke text-nowrap-util">
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'oldPrice'),$_smarty_tpl ) );?>
: <?php echo $_smarty_tpl->tpl_vars['Artikel']->value->Preise->alterVKLocalized[$_smarty_tpl->tpl_vars['NettoPreise']->value];?>

                                        </div>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_rabattanzeige'] == 2 || $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_rabattanzeige'] == 4) {?>
                                        <div class="discount"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'discount'),$_smarty_tpl ) );?>
:
                                            <span class="value text-nowrap-util"><?php echo $_smarty_tpl->tpl_vars['Artikel']->value->Preise->rabatt;?>
%</span>
                                        </div>
                                    <?php }?>
                                <?php }?>
                            <?php
}
}
/* {/block 'productdetails-price-special-prices-detail'} */
/* {block 'productdetails-price-uvp'} */
class Block_111541377060a52e4e7b5d88_62571287 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <div class="suggested-price">
                                        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'suggestedPrice','section'=>'productDetails'),$_smarty_tpl ) );?>
</span>:
                                        <span class="value text-nowrap-util"><?php echo $_smarty_tpl->tpl_vars['Artikel']->value->cUVPLocalized;?>
</span>
                                    </div>
                                                                        <?php if ((isset($_smarty_tpl->tpl_vars['Artikel']->value->SieSparenX)) && $_smarty_tpl->tpl_vars['Artikel']->value->SieSparenX->anzeigen == 1 && $_smarty_tpl->tpl_vars['Artikel']->value->SieSparenX->nProzent > 0 && !$_smarty_tpl->tpl_vars['NettoPreise']->value && $_smarty_tpl->tpl_vars['Artikel']->value->taxData['tax'] > 0) {?>
                                        <div class="yousave">(<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'youSave','section'=>'productDetails'),$_smarty_tpl ) );?>

                                            <span class="percent"><?php echo $_smarty_tpl->tpl_vars['Artikel']->value->SieSparenX->nProzent;?>
%</span>, <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'thatIs','section'=>'productDetails'),$_smarty_tpl ) );?>

                                            <span class="value text-nowrap-util"><?php echo $_smarty_tpl->tpl_vars['Artikel']->value->SieSparenX->cLocalizedSparbetrag;?>
</span>)
                                        </div>
                                    <?php }?>
                                <?php
}
}
/* {/block 'productdetails-price-uvp'} */
/* {block 'productdetails-price-detail-bulk-price-head'} */
class Block_17345773660a52e4e7c6491_55513581 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                    <tr>
                                                        <th>
                                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'fromDifferential','section'=>'productOverview'),$_smarty_tpl ) );?>

                                                        </th>
                                                        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'pricePerUnit','section'=>'productDetails'),$_smarty_tpl ) );
if ($_smarty_tpl->tpl_vars['Artikel']->value->cEinheit) {?> / <?php echo $_smarty_tpl->tpl_vars['Artikel']->value->cEinheit;
}?>
                                                            <?php if ((isset($_smarty_tpl->tpl_vars['Artikel']->value->cMasseinheitName)) && (isset($_smarty_tpl->tpl_vars['Artikel']->value->fMassMenge)) && $_smarty_tpl->tpl_vars['Artikel']->value->fMassMenge > 0 && $_smarty_tpl->tpl_vars['Artikel']->value->cTeilbar !== 'Y' && ($_smarty_tpl->tpl_vars['Artikel']->value->fAbnahmeintervall == 0 || $_smarty_tpl->tpl_vars['Artikel']->value->fAbnahmeintervall == 1) && (isset($_smarty_tpl->tpl_vars['Artikel']->value->cMassMenge))) {?>
                                                                (<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->cMassMenge;?>
 <?php echo $_smarty_tpl->tpl_vars['Artikel']->value->cMasseinheitName;?>
)
                                                            <?php }?>
                                                        </th>
                                                        <?php if (!empty($_smarty_tpl->tpl_vars['Artikel']->value->staffelPreis_arr[0]['cBasePriceLocalized'])) {?>
                                                        <th>
                                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'basePrice'),$_smarty_tpl ) );?>

                                                        </th>
                                                        <?php }?>
                                                    </tr>
                                                <?php
}
}
/* {/block 'productdetails-price-detail-bulk-price-head'} */
/* {block 'productdetails-price-detail-bulk-price-body'} */
class Block_63410727060a52e4e7d95b6_36865172 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Artikel']->value->staffelPreis_arr, 'bulkPrice');
$_smarty_tpl->tpl_vars['bulkPrice']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['bulkPrice']->value) {
$_smarty_tpl->tpl_vars['bulkPrice']->do_else = false;
?>
                                                        <?php if ($_smarty_tpl->tpl_vars['bulkPrice']->value['nAnzahl'] > 0) {?>
                                                            <tr class="bulk-price-<?php echo $_smarty_tpl->tpl_vars['bulkPrice']->value['nAnzahl'];?>
">
                                                                <td><?php echo $_smarty_tpl->tpl_vars['bulkPrice']->value['nAnzahl'];?>
</td>
                                                                <td>
                                                                    <span class="bulk-price"><?php echo $_smarty_tpl->tpl_vars['bulkPrice']->value['cPreisLocalized'][$_smarty_tpl->tpl_vars['NettoPreise']->value];?>
</span><span class="footnote-reference">*</span>
                                                                </td>
                                                                <?php if (!empty($_smarty_tpl->tpl_vars['bulkPrice']->value['cBasePriceLocalized'])) {?>
                                                                    <td class="bulk-base-price">
                                                                        <?php echo $_smarty_tpl->tpl_vars['bulkPrice']->value['cBasePriceLocalized'][$_smarty_tpl->tpl_vars['NettoPreise']->value];?>

                                                                    </td>
                                                                <?php }?>
                                                            </tr>
                                                        <?php }?>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                <?php
}
}
/* {/block 'productdetails-price-detail-bulk-price-body'} */
/* {block 'productdetails-price-detail-bulk-price'} */
class Block_146747570060a52e4e7c5972_53682936 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <div class="bulk-prices">
                                        <table class="table table-sm table-hover">
                                            <thead>
                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17345773660a52e4e7c6491_55513581', 'productdetails-price-detail-bulk-price-head', $this->tplIndex);
?>

                                            </thead>
                                            <tbody>
                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_63410727060a52e4e7d95b6_36865172', 'productdetails-price-detail-bulk-price-body', $this->tplIndex);
?>

                                            </tbody>
                                        </table>
                                    </div>                                <?php
}
}
/* {/block 'productdetails-price-detail-bulk-price'} */
/* {block 'productdetails-price-detail'} */
class Block_100515174860a52e4e74d2b5_94030570 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div class="price-note">
                            <?php if ($_smarty_tpl->tpl_vars['Artikel']->value->cEinheit && ($_smarty_tpl->tpl_vars['Artikel']->value->fMindestbestellmenge > 1 || $_smarty_tpl->tpl_vars['Artikel']->value->fAbnahmeintervall > 1)) {?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_176189069860a52e4e751967_66469472', 'productdetails-price-label-per-unit', $this->tplIndex);
?>

                            <?php }?>

                                                        <?php if (!empty($_smarty_tpl->tpl_vars['Artikel']->value->cLocalizedVPE)) {?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_116075261360a52e4e758525_78504152', 'productdetails-price-detail-base-price', $this->tplIndex);
?>

                            <?php }?>

                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_214369551460a52e4e799cd3_51549577', 'productdetails-price-detail-vat-info', $this->tplIndex);
?>


                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_120947793960a52e4e79c791_53700600', 'productdetails-price-special-prices-detail', $this->tplIndex);
?>


                            <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_uvp_anzeigen'] === 'Y' && $_smarty_tpl->tpl_vars['Artikel']->value->fUVP > 0) {?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_111541377060a52e4e7b5d88_62571287', 'productdetails-price-uvp', $this->tplIndex);
?>

                            <?php }?>

                                                        <?php if (!empty($_smarty_tpl->tpl_vars['Artikel']->value->staffelPreis_arr)) {?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_146747570060a52e4e7c5972_53682936', 'productdetails-price-detail-bulk-price', $this->tplIndex);
?>

                            <?php }?>
                        </div>                    <?php
}
}
/* {/block 'productdetails-price-detail'} */
/* {block 'productdetails-price-list-base-price'} */
class Block_128751224760a52e4e7f6624_93662912 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\includes\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
?>

                                <div class="base_price" itemprop="priceSpecification" itemscope itemtype="http://schema.org/UnitPriceSpecification">
                                    <meta itemprop="price" content="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'string_format' ][ 0 ], array( ($_smarty_tpl->tpl_vars['Artikel']->value->Preise->fVKBrutto/$_smarty_tpl->tpl_vars['Artikel']->value->fVPEWert),"%.2f" ));?>
">
                                    <meta itemprop="priceCurrency" content="<?php echo $_SESSION['Waehrung']->getName();?>
">
                                    <span class="value" itemprop="referenceQuantity" itemscope itemtype="http://schema.org/QuantitativeValue">
                                    <?php echo $_smarty_tpl->tpl_vars['Artikel']->value->cLocalizedVPE[$_smarty_tpl->tpl_vars['NettoPreise']->value];?>

                                    <meta itemprop="value" content="<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->fGrundpreisMenge;?>
">
                                    <meta itemprop="unitText" content="<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['Artikel']->value->cVPEEinheit,"/[\d ]/",'');?>
">
                                </span>
                                </div>
                            <?php
}
}
/* {/block 'productdetails-price-list-base-price'} */
/* {block 'productdetails-price-special-prices'} */
class Block_142679958860a52e4e8014c0_64911852 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php if ($_smarty_tpl->tpl_vars['Artikel']->value->Preise->Sonderpreis_aktiv && (isset($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeluebersicht'])) && $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeluebersicht']['artikeluebersicht_sonderpreisanzeige'] == 2) {?>
                                <div class="instead-of old-price">
                                    <small class="text-muted-util">
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'oldPrice'),$_smarty_tpl ) );?>
:
                                        <del class="value"><?php echo $_smarty_tpl->tpl_vars['Artikel']->value->Preise->alterVKLocalized[$_smarty_tpl->tpl_vars['NettoPreise']->value];?>
</del>
                                    </small>
                                </div>
                            <?php } elseif (!$_smarty_tpl->tpl_vars['Artikel']->value->Preise->Sonderpreis_aktiv && $_smarty_tpl->tpl_vars['Artikel']->value->Preise->rabatt > 0 && (isset($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeluebersicht']))) {?>
                                <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeluebersicht']['artikeluebersicht_rabattanzeige'] == 3 || $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeluebersicht']['artikeluebersicht_rabattanzeige'] == 4) {?>
                                    <div class="old-price">
                                        <small class="text-muted-util">
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'oldPrice'),$_smarty_tpl ) );?>
:
                                            <del class="value text-nowrap-util"><?php echo $_smarty_tpl->tpl_vars['Artikel']->value->Preise->alterVKLocalized[$_smarty_tpl->tpl_vars['NettoPreise']->value];?>
</del>
                                        </small>
                                    </div>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeluebersicht']['artikeluebersicht_rabattanzeige'] == 2 || (isset($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeluebersicht'])) && $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeluebersicht']['artikeluebersicht_rabattanzeige'] == 4) {?>
                                    <div class="discount">
                                        <small class="text-muted-util">
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'discount'),$_smarty_tpl ) );?>
:
                                            <span class="value text-nowrap-util"><?php echo $_smarty_tpl->tpl_vars['Artikel']->value->Preise->rabatt;?>
%</span>
                                        </small>
                                    </div>
                                <?php }?>
                            <?php }?>
                        <?php
}
}
/* {/block 'productdetails-price-special-prices'} */
/* {block 'productdetails-price-price-note'} */
class Block_147910836260a52e4e7f21d6_27848800 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="price-note">
                                                <?php if (!empty($_smarty_tpl->tpl_vars['Artikel']->value->cLocalizedVPE) && !$_smarty_tpl->tpl_vars['Artikel']->value->Preise->oPriceRange->isRange()) {?>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_128751224760a52e4e7f6624_93662912', 'productdetails-price-list-base-price', $this->tplIndex);
?>

                        <?php }?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_142679958860a52e4e8014c0_64911852', 'productdetails-price-special-prices', $this->tplIndex);
?>

                    </div>
                    <?php
}
}
/* {/block 'productdetails-price-price-note'} */
/* {block 'productdetails-price-wrapper'} */
class Block_83725768460a52e4e6eb071_63829887 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if ($_smarty_tpl->tpl_vars['Artikel']->value->getOption('nShowOnlyOnSEORequest',0) === 1) {?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4199298960a52e4e6edf52_14875406', 'productdetails-price-out-of-stock', $this->tplIndex);
?>

            <?php } elseif ($_smarty_tpl->tpl_vars['Artikel']->value->Preise->fVKNetto == 0 && $_smarty_tpl->tpl_vars['Artikel']->value->bHasKonfig) {?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_69485157460a52e4e6f6706_12690979', 'productdetails-price-as-configured', $this->tplIndex);
?>

            <?php } elseif ($_smarty_tpl->tpl_vars['Artikel']->value->Preise->fVKNetto == 0 && $_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_preis0'] === 'N') {?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_139917748460a52e4e6fb3e5_97114724', 'productdetails-price-on-application', $this->tplIndex);
?>

            <?php } else { ?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36529845560a52e4e6fd587_32981224', 'productdetails-price-label', $this->tplIndex);
?>

                <div class="price <?php if ((($tmp = $_smarty_tpl->tpl_vars['priceLarge']->value ?? null)===null||$tmp==='' ? false : $tmp)) {?>h1<?php } else { ?>productbox-price<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['Artikel']->value->Preise->Sonderpreis_aktiv)) && $_smarty_tpl->tpl_vars['Artikel']->value->Preise->Sonderpreis_aktiv) {?> special-price<?php }?>">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_37322178660a52e4e70fb20_49761896', 'productdetails-range', $this->tplIndex);
?>

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_135833179860a52e4e738406_53221283', 'productdetails-price-snippets', $this->tplIndex);
?>

                </div>
                <?php if ($_smarty_tpl->tpl_vars['tplscope']->value === 'detail') {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_100515174860a52e4e74d2b5_94030570', 'productdetails-price-detail', $this->tplIndex);
?>

                <?php } else { ?>                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_147910836260a52e4e7f21d6_27848800', 'productdetails-price-price-note', $this->tplIndex);
?>

                <?php }?>
            <?php }?>
            <?php
}
}
/* {/block 'productdetails-price-wrapper'} */
/* {block 'price-invisible'} */
class Block_118983029460a52e4e81db79_40332956 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <span class="price_label price_invisible"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'priceHidden'),$_smarty_tpl ) );?>
</span>
        <?php
}
}
/* {/block 'price-invisible'} */
/* {block 'productdetails-price'} */
class Block_31992179860a52e4e6db7a5_35840816 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'productdetails-price' => 
  array (
    0 => 'Block_31992179860a52e4e6db7a5_35840816',
  ),
  'productdetails-price-wrapper' => 
  array (
    0 => 'Block_83725768460a52e4e6eb071_63829887',
  ),
  'productdetails-price-out-of-stock' => 
  array (
    0 => 'Block_4199298960a52e4e6edf52_14875406',
  ),
  'productdetails-price-as-configured' => 
  array (
    0 => 'Block_69485157460a52e4e6f6706_12690979',
  ),
  'productdetails-price-on-application' => 
  array (
    0 => 'Block_139917748460a52e4e6fb3e5_97114724',
  ),
  'productdetails-price-label' => 
  array (
    0 => 'Block_36529845560a52e4e6fd587_32981224',
  ),
  'productdetails-range' => 
  array (
    0 => 'Block_37322178660a52e4e70fb20_49761896',
  ),
  'productdetails-price-snippets' => 
  array (
    0 => 'Block_135833179860a52e4e738406_53221283',
  ),
  'productdetails-price-detail' => 
  array (
    0 => 'Block_100515174860a52e4e74d2b5_94030570',
  ),
  'productdetails-price-label-per-unit' => 
  array (
    0 => 'Block_176189069860a52e4e751967_66469472',
  ),
  'productdetails-price-detail-base-price' => 
  array (
    0 => 'Block_116075261360a52e4e758525_78504152',
  ),
  'productdetails-price-detail-vat-info' => 
  array (
    0 => 'Block_214369551460a52e4e799cd3_51549577',
  ),
  'productdetails-price-special-prices-detail' => 
  array (
    0 => 'Block_120947793960a52e4e79c791_53700600',
  ),
  'productdetails-price-uvp' => 
  array (
    0 => 'Block_111541377060a52e4e7b5d88_62571287',
  ),
  'productdetails-price-detail-bulk-price' => 
  array (
    0 => 'Block_146747570060a52e4e7c5972_53682936',
  ),
  'productdetails-price-detail-bulk-price-head' => 
  array (
    0 => 'Block_17345773660a52e4e7c6491_55513581',
  ),
  'productdetails-price-detail-bulk-price-body' => 
  array (
    0 => 'Block_63410727060a52e4e7d95b6_36865172',
  ),
  'productdetails-price-price-note' => 
  array (
    0 => 'Block_147910836260a52e4e7f21d6_27848800',
  ),
  'productdetails-price-list-base-price' => 
  array (
    0 => 'Block_128751224760a52e4e7f6624_93662912',
  ),
  'productdetails-price-special-prices' => 
  array (
    0 => 'Block_142679958860a52e4e8014c0_64911852',
  ),
  'price-invisible' => 
  array (
    0 => 'Block_118983029460a52e4e81db79_40332956',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_SESSION['Kundengruppe']->mayViewPrices()) {?>
        <div class="price_wrapper">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_83725768460a52e4e6eb071_63829887', 'productdetails-price-wrapper', $this->tplIndex);
?>

        </div>
    <?php } else { ?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_118983029460a52e4e81db79_40332956', 'price-invisible', $this->tplIndex);
?>

    <?php }
}
}
/* {/block 'productdetails-price'} */
}
