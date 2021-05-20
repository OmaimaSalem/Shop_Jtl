<?php
/* Smarty version 3.1.38, created on 2021-05-19 15:00:29
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\productlist\item_box.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a50beda4f0d3_96385437',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b41539df62d7a44e5bc3a7401a3675d7c1d001eb' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\productlist\\item_box.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/ribbon.tpl' => 1,
    'file:productlist/productlist_actions.tpl' => 1,
    'file:productdetails/rating.tpl' => 1,
    'file:productdetails/price.tpl' => 1,
  ),
),false)) {
function content_60a50beda4f0d3_96385437 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_161568394860a50bed822380_31399202', 'productlist-item-box');
?>

<?php }
/* {block 'productlist-item-box-include-ribbon'} */
class Block_198589317760a50bed9ac097_11239543 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_smarty_tpl->_subTemplateRender('file:snippets/ribbon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                <?php
}
}
/* {/block 'productlist-item-box-include-ribbon'} */
/* {block "productlist-item-list-image"} */
class Block_209127670460a50bed9b0b80_65996828 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <?php $_smarty_tpl->_assignInScope('image', $_smarty_tpl->tpl_vars['Artikel']->value->Bilder[0]);?><div class="productbox-image square square-image first-wrapper"><div class="inner"><?php ob_start();
if (!$_smarty_tpl->tpl_vars['isMobile']->value && !empty($_smarty_tpl->tpl_vars['Artikel']->value->Bilder[1])) {
echo " first";
}
$_prefixVariable39=ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0], array( array('alt'=>$_smarty_tpl->tpl_vars['alt']->value,'fluid'=>true,'webp'=>true,'lazy'=>true,'src'=>((string)$_smarty_tpl->tpl_vars['image']->value->cURLKlein),'srcset'=>((string)$_smarty_tpl->tpl_vars['image']->value->cURLMini)." ".((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_artikel_mini_breite'])."w,
                                                         ".((string)$_smarty_tpl->tpl_vars['image']->value->cURLKlein)." ".((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_artikel_klein_breite'])."w,
                                                         ".((string)$_smarty_tpl->tpl_vars['image']->value->cURLNormal)." ".((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_artikel_normal_breite'])."w",'sizes'=>"auto",'data'=>array("id"=>$_smarty_tpl->tpl_vars['imgcounter']->value),'class'=>$_prefixVariable39),$_smarty_tpl ) );?>
</div></div><?php if (!$_smarty_tpl->tpl_vars['isMobile']->value && !empty($_smarty_tpl->tpl_vars['Artikel']->value->Bilder[1])) {?><div class="productbox-image square square-image second-wrapper"><div class="inner"><?php $_smarty_tpl->_assignInScope('image', $_smarty_tpl->tpl_vars['Artikel']->value->Bilder[1]);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0], array( array('alt'=>$_smarty_tpl->tpl_vars['alt']->value,'fluid'=>true,'webp'=>true,'lazy'=>true,'src'=>((string)$_smarty_tpl->tpl_vars['image']->value->cURLKlein),'srcset'=>((string)$_smarty_tpl->tpl_vars['image']->value->cURLMini)." ".((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_artikel_mini_breite'])."w,
                                                                 ".((string)$_smarty_tpl->tpl_vars['image']->value->cURLKlein)." ".((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_artikel_klein_breite'])."w,
                                                                 ".((string)$_smarty_tpl->tpl_vars['image']->value->cURLNormal)." ".((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_artikel_normal_breite'])."w",'sizes'=>"auto",'data'=>array("id"=>($_smarty_tpl->tpl_vars['imgcounter']->value).("_2nd")),'class'=>'second'),$_smarty_tpl ) );?>
</div></div><?php }?>
                                    <?php
}
}
/* {/block "productlist-item-list-image"} */
/* {block 'productlist-item-box-image'} */
class Block_81075483660a50bed842f27_12969953 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\includes\\vendor\\smarty\\smarty\\libs\\plugins\\function.counter.php','function'=>'smarty_function_counter',),));
?>

                            <?php echo smarty_function_counter(array('assign'=>'imgcounter','print'=>0),$_smarty_tpl);?>

                            <?php if ((isset($_smarty_tpl->tpl_vars['Artikel']->value->oSuchspecialBild))) {?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_198589317760a50bed9ac097_11239543', 'productlist-item-box-include-ribbon', $this->tplIndex);
?>

                            <?php }?>
                            <div class="productbox-images list-gallery">
                                <?php $_block_plugin84 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin84, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['Artikel']->value->cURLFull));
$_block_repeat=true;
echo $_block_plugin84->render(array('href'=>$_smarty_tpl->tpl_vars['Artikel']->value->cURLFull), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_209127670460a50bed9b0b80_65996828', "productlist-item-list-image", $this->tplIndex);
?>

                                <?php $_block_repeat=false;
echo $_block_plugin84->render(array('href'=>$_smarty_tpl->tpl_vars['Artikel']->value->cURLFull), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php if (!empty($_smarty_tpl->tpl_vars['Artikel']->value->Bilder[0]->cURLNormal)) {?>
                                    <meta itemprop="image" content="<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->Bilder[0]->cURLNormal;?>
">
                                <?php }?>
                            </div>
                        <?php
}
}
/* {/block 'productlist-item-box-image'} */
/* {block 'productlist-item-badge-yousave'} */
class Block_196949379860a50beda234e5_69714225 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <div class="productbox-sale-percentage">
                                    <div class="ribbon ribbon-7 productbox-ribbon"><?php echo $_smarty_tpl->tpl_vars['Artikel']->value->SieSparenX->nProzent;?>
%</div>
                                </div>
                            <?php
}
}
/* {/block 'productlist-item-badge-yousave'} */
/* {block 'productlist-item-box-include-productlist-actions'} */
class Block_148128169560a50beda26867_05010966 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <div class="productbox-quick-actions productbox-onhover d-none d-md-flex">
                                <?php $_smarty_tpl->_subTemplateRender('file:productlist/productlist_actions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            </div>
                        <?php
}
}
/* {/block 'productlist-item-box-include-productlist-actions'} */
/* {block 'productlist-item-box-caption-short-desc'} */
class Block_136681744060a50beda2a2e9_63547529 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <div class="productbox-title" itemprop="name">
                                <?php $_block_plugin86 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin86, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['Artikel']->value->cURLFull,'class'=>"text-clamp-2"));
$_block_repeat=true;
echo $_block_plugin86->render(array('href'=>$_smarty_tpl->tpl_vars['Artikel']->value->cURLFull,'class'=>"text-clamp-2"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php echo $_smarty_tpl->tpl_vars['Artikel']->value->cKurzbezeichnung;?>

                                <?php $_block_repeat=false;
echo $_block_plugin86->render(array('href'=>$_smarty_tpl->tpl_vars['Artikel']->value->cURLFull,'class'=>"text-clamp-2"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            </div>
                        <?php
}
}
/* {/block 'productlist-item-box-caption-short-desc'} */
/* {block 'productlist-item-box-meta'} */
class Block_174134029360a50beda2e5f4_44739483 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php if ($_smarty_tpl->tpl_vars['Artikel']->value->cName !== $_smarty_tpl->tpl_vars['Artikel']->value->cKurzbezeichnung) {?>
                                <meta itemprop="alternateName" content="<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->cName;?>
">
                            <?php }?>
                            <meta itemprop="url" content="<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->cURLFull;?>
">
                        <?php
}
}
/* {/block 'productlist-item-box-meta'} */
/* {block 'productlist-index-include-rating'} */
class Block_76866599460a50beda42016_92836486 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['bewertung']['bewertung_anzeigen'] === 'Y' && $_smarty_tpl->tpl_vars['Artikel']->value->fDurchschnittsBewertung > 0) {?>
                                <?php $_smarty_tpl->_subTemplateRender('file:productdetails/rating.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stars'=>$_smarty_tpl->tpl_vars['Artikel']->value->fDurchschnittsBewertung,'link'=>$_smarty_tpl->tpl_vars['Artikel']->value->cURLFull), 0, false);
?><br>
                            <?php }?>
                        <?php
}
}
/* {/block 'productlist-index-include-rating'} */
/* {block 'productlist-index-include-price'} */
class Block_115443498360a50beda49eb1_25293845 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                <link itemprop="businessFunction" href="http://purl.org/goodrelations/v1#Sell" />
                                <?php $_smarty_tpl->_subTemplateRender('file:productdetails/price.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('Artikel'=>$_smarty_tpl->tpl_vars['Artikel']->value,'tplscope'=>$_smarty_tpl->tpl_vars['tplscope']->value), 0, false);
?>
                            </div>
                        <?php
}
}
/* {/block 'productlist-index-include-price'} */
/* {block 'productlist-item-box-caption'} */
class Block_201812092560a50beda29745_48500863 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136681744060a50beda2a2e9_63547529', 'productlist-item-box-caption-short-desc', $this->tplIndex);
?>

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_174134029360a50beda2e5f4_44739483', 'productlist-item-box-meta', $this->tplIndex);
?>

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_76866599460a50beda42016_92836486', 'productlist-index-include-rating', $this->tplIndex);
?>

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_115443498360a50beda49eb1_25293845', 'productlist-index-include-price', $this->tplIndex);
?>

                    <?php
}
}
/* {/block 'productlist-item-box-caption'} */
/* {block 'productlist-item-box'} */
class Block_161568394860a50bed822380_31399202 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'productlist-item-box' => 
  array (
    0 => 'Block_161568394860a50bed822380_31399202',
  ),
  'productlist-item-box-image' => 
  array (
    0 => 'Block_81075483660a50bed842f27_12969953',
  ),
  'productlist-item-box-include-ribbon' => 
  array (
    0 => 'Block_198589317760a50bed9ac097_11239543',
  ),
  'productlist-item-list-image' => 
  array (
    0 => 'Block_209127670460a50bed9b0b80_65996828',
  ),
  'productlist-item-badge-yousave' => 
  array (
    0 => 'Block_196949379860a50beda234e5_69714225',
  ),
  'productlist-item-box-include-productlist-actions' => 
  array (
    0 => 'Block_148128169560a50beda26867_05010966',
  ),
  'productlist-item-box-caption' => 
  array (
    0 => 'Block_201812092560a50beda29745_48500863',
  ),
  'productlist-item-box-caption-short-desc' => 
  array (
    0 => 'Block_136681744060a50beda2a2e9_63547529',
  ),
  'productlist-item-box-meta' => 
  array (
    0 => 'Block_174134029360a50beda2e5f4_44739483',
  ),
  'productlist-index-include-rating' => 
  array (
    0 => 'Block_76866599460a50beda42016_92836486',
  ),
  'productlist-index-include-price' => 
  array (
    0 => 'Block_115443498360a50beda49eb1_25293845',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['productlist']['variation_select_productlist'] === 'N' || $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['productlist']['hover_productlist'] !== 'Y') {?>
        <?php $_smarty_tpl->_assignInScope('hasOnlyListableVariations', 0);?>
    <?php } else { ?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hasOnlyListableVariations'][0], array( array('artikel'=>$_smarty_tpl->tpl_vars['Artikel']->value,'maxVariationCount'=>$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['productlist']['variation_select_productlist'],'maxWerteCount'=>$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['productlist']['variation_max_werte_productlist'],'assign'=>'hasOnlyListableVariations'),$_smarty_tpl ) );?>

    <?php }?>
    <div id="result-wrapper_buy_form_<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->kArtikel;?>
" data-wrapper="true"
         class="productbox productbox-column <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['productlist']['hover_productlist'] === 'Y') {?> productbox-hover<?php }
if ((isset($_smarty_tpl->tpl_vars['class']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['class']->value;
}?>">
        <div class="productbox-inner">
            <?php $_block_plugin82 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin82, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array());
$_block_repeat=true;
echo $_block_plugin82->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_block_plugin83 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin83, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12));
$_block_repeat=true;
echo $_block_plugin83->render(array('cols'=>12), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <div class="productbox-image">
                        <?php if ((isset($_smarty_tpl->tpl_vars['Artikel']->value->Bilder[0]->cAltAttribut))) {?>
                            <?php $_smarty_tpl->_assignInScope('alt', htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['Artikel']->value->Bilder[0]->cAltAttribut),60 )), ENT_QUOTES, 'utf-8', true));?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->_assignInScope('alt', $_smarty_tpl->tpl_vars['Artikel']->value->cName);?>
                        <?php }?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_81075483660a50bed842f27_12969953', 'productlist-item-box-image', $this->tplIndex);
?>


                        <?php if ($_SESSION['Kundengruppe']->mayViewPrices() && (isset($_smarty_tpl->tpl_vars['Artikel']->value->SieSparenX)) && $_smarty_tpl->tpl_vars['Artikel']->value->SieSparenX->anzeigen == 1 && $_smarty_tpl->tpl_vars['Artikel']->value->SieSparenX->nProzent > 0 && !$_smarty_tpl->tpl_vars['NettoPreise']->value && $_smarty_tpl->tpl_vars['Artikel']->value->taxData['tax'] > 0) {?>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_196949379860a50beda234e5_69714225', 'productlist-item-badge-yousave', $this->tplIndex);
?>

                        <?php }?>

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_148128169560a50beda26867_05010966', 'productlist-item-box-include-productlist-actions', $this->tplIndex);
?>

                    </div>
                <?php $_block_repeat=false;
echo $_block_plugin83->render(array('cols'=>12), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php $_block_plugin85 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin85, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12));
$_block_repeat=true;
echo $_block_plugin85->render(array('cols'=>12), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_201812092560a50beda29745_48500863', 'productlist-item-box-caption', $this->tplIndex);
?>

                <?php $_block_repeat=false;
echo $_block_plugin85->render(array('cols'=>12), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php $_block_repeat=false;
echo $_block_plugin82->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </div>
    </div>
<?php
}
}
/* {/block 'productlist-item-box'} */
}
