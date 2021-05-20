<?php
/* Smarty version 3.1.38, created on 2021-05-19 15:00:22
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\productlist\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a50be62edc31_14265234',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b47fbf8e492f4c170c088415e2c3343e940e75d5' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\productlist\\header.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/extension.tpl' => 1,
    'file:snippets/image.tpl' => 1,
    'file:selectionwizard/index.tpl' => 1,
    'file:snippets/product_slider.tpl' => 2,
    'file:snippets/productlist_page_nav.tpl' => 1,
    'file:snippets/filter/active_filter.tpl' => 1,
  ),
),false)) {
function content_60a50be62edc31_14265234 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_210158140060a50be5ed5747_18481068', 'productlist-header');
?>

<?php }
/* {block 'productlist-header-heading'} */
class Block_21371497160a50be5ee10f5_32342474 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="h1"><?php echo $_smarty_tpl->tpl_vars['Suchergebnisse']->value->getSearchTermWrite();?>
</div>
        <?php
}
}
/* {/block 'productlist-header-heading'} */
/* {block 'productlist-header-alert'} */
class Block_200098665860a50be600e8c8_38561816 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_block_plugin52 = isset($_smarty_tpl->smarty->registered_plugins['block']['alert'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['alert'][0][0] : null;
if (!is_callable(array($_block_plugin52, 'render'))) {
throw new SmartyException('block tag \'alert\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('alert', array('variant'=>"info"));
$_block_repeat=true;
echo $_block_plugin52->render(array('variant'=>"info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'noResults','section'=>'productOverview'),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin52->render(array('variant'=>"info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php
}
}
/* {/block 'productlist-header-alert'} */
/* {block 'productlist-header-form-search'} */
class Block_985053060a50be6012643_32809395 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_block_plugin53 = isset($_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0] : null;
if (!is_callable(array($_block_plugin53, 'render'))) {
throw new SmartyException('block tag \'form\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('id'=>"suche2",'action'=>$_smarty_tpl->tpl_vars['ShopURL']->value,'method'=>"get",'slide'=>true));
$_block_repeat=true;
echo $_block_plugin53->render(array('id'=>"suche2",'action'=>$_smarty_tpl->tpl_vars['ShopURL']->value,'method'=>"get",'slide'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <fieldset>
                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'searchText'),$_smarty_tpl ) );
$_prefixVariable21=ob_get_clean();
$_block_plugin54 = isset($_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0] : null;
if (!is_callable(array($_block_plugin54, 'render'))) {
throw new SmartyException('block tag \'formgroup\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('formgroup', array('label-for'=>"searchkey",'label'=>$_prefixVariable21));
$_block_repeat=true;
echo $_block_plugin54->render(array('label-for'=>"searchkey",'label'=>$_prefixVariable21), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php ob_start();
if ($_smarty_tpl->tpl_vars['Suchergebnisse']->value->getSearchTerm()) {
echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['Suchergebnisse']->value->getSearchTerm(), ENT_QUOTES, 'utf-8', true), "HTML-ENTITIES", 'utf-8');
}
$_prefixVariable22=ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"text",'name'=>"suchausdruck",'value'=>$_prefixVariable22,'id'=>"searchkey"),$_smarty_tpl ) );?>

                    <?php $_block_repeat=false;
echo $_block_plugin54->render(array('label-for'=>"searchkey",'label'=>$_prefixVariable21), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php $_block_plugin55 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin55, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('variant'=>"primary",'type'=>"submit",'value'=>"1"));
$_block_repeat=true;
echo $_block_plugin55->render(array('variant'=>"primary",'type'=>"submit",'value'=>"1"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'searchAgain','section'=>'productOverview'),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin55->render(array('variant'=>"primary",'type'=>"submit",'value'=>"1"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                </fieldset>
            <?php $_block_repeat=false;
echo $_block_plugin53->render(array('id'=>"suche2",'action'=>$_smarty_tpl->tpl_vars['ShopURL']->value,'method'=>"get",'slide'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php
}
}
/* {/block 'productlist-header-form-search'} */
/* {block 'productlist-header-include-extension'} */
class Block_79667257460a50be60b9283_44871619 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:snippets/extension.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'productlist-header-include-extension'} */
/* {block 'productlist-header-description-heading'} */
class Block_99170021360a50be60eca79_22607590 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <h1 class="h2"><?php echo $_smarty_tpl->tpl_vars['oNavigationsinfo']->value->getName();?>
</h1>
                <?php
}
}
/* {/block 'productlist-header-description-heading'} */
/* {block 'productlist-header-description-category'} */
class Block_36866835860a50be60f8aa9_43075575 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div class="desc">
                    <p><?php echo $_smarty_tpl->tpl_vars['oNavigationsinfo']->value->getCategory()->cBeschreibung;?>
</p>
                </div>
            <?php
}
}
/* {/block 'productlist-header-description-category'} */
/* {block 'productlist-header-description-manufacturers'} */
class Block_36197865060a50be610bd12_83219689 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div class="desc">
                    <p><?php echo $_smarty_tpl->tpl_vars['oNavigationsinfo']->value->getManufacturer()->cBeschreibung;?>
</p>
                </div>
            <?php
}
}
/* {/block 'productlist-header-description-manufacturers'} */
/* {block 'productlist-header-description-attributes'} */
class Block_60596331760a50be6132c15_62718712 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div class="desc">
                    <p><?php echo $_smarty_tpl->tpl_vars['oNavigationsinfo']->value->getCharacteristicValue()->cBeschreibung;?>
</p>
                </div>
            <?php
}
}
/* {/block 'productlist-header-description-attributes'} */
/* {block 'productlist-header-description'} */
class Block_89448407460a50be60bb299_69418527 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ($_smarty_tpl->tpl_vars['oNavigationsinfo']->value->getImageURL() !== (defined('BILD_KEIN_KATEGORIEBILD_VORHANDEN') ? constant('BILD_KEIN_KATEGORIEBILD_VORHANDEN') : null) && $_smarty_tpl->tpl_vars['oNavigationsinfo']->value->getImageURL() !== 'gfx/keinBild_kl.gif' && $_smarty_tpl->tpl_vars['oNavigationsinfo']->value->getImageURL() !== ($_smarty_tpl->tpl_vars['imageBaseURL']->value).((defined('BILD_KEIN_KATEGORIEBILD_VORHANDEN') ? constant('BILD_KEIN_KATEGORIEBILD_VORHANDEN') : null))) {?>
            <?php if ($_smarty_tpl->tpl_vars['oNavigationsinfo']->value->getCategory() !== null) {?>
                <?php $_smarty_tpl->_assignInScope('navData', $_smarty_tpl->tpl_vars['oNavigationsinfo']->value->getCategory());?>
            <?php } elseif ($_smarty_tpl->tpl_vars['oNavigationsinfo']->value->getManufacturer() !== null) {?>
                <?php $_smarty_tpl->_assignInScope('navData', $_smarty_tpl->tpl_vars['oNavigationsinfo']->value->getManufacturer());?>
            <?php } elseif ($_smarty_tpl->tpl_vars['oNavigationsinfo']->value->getCharacteristicValue() !== null) {?>
                <?php $_smarty_tpl->_assignInScope('navData', $_smarty_tpl->tpl_vars['oNavigationsinfo']->value->getCharacteristicValue());?>
            <?php }?>
            <?php $_smarty_tpl->_subTemplateRender('file:snippets/image.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class'=>'productlist-header-description-image','item'=>$_smarty_tpl->tpl_vars['navData']->value,'square'=>false,'alt'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['navData']->value->cBeschreibung),50 ))), 0, false);
?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['oNavigationsinfo']->value->getName()) {?>
            <div class="title">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_heading'),$_smarty_tpl ) );?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_99170021360a50be60eca79_22607590', 'productlist-header-description-heading', $this->tplIndex);
?>

            </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['navigationsfilter']['kategorie_beschreibung_anzeigen'] === 'Y' && $_smarty_tpl->tpl_vars['oNavigationsinfo']->value->getCategory() !== null && strlen($_smarty_tpl->tpl_vars['oNavigationsinfo']->value->getCategory()->cBeschreibung) > 0) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36866835860a50be60f8aa9_43075575', 'productlist-header-description-category', $this->tplIndex);
?>

        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['navigationsfilter']['hersteller_beschreibung_anzeigen'] === 'Y' && $_smarty_tpl->tpl_vars['oNavigationsinfo']->value->getManufacturer() !== null && strlen($_smarty_tpl->tpl_vars['oNavigationsinfo']->value->getManufacturer()->cBeschreibung) > 0) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36197865060a50be610bd12_83219689', 'productlist-header-description-manufacturers', $this->tplIndex);
?>

        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['navigationsfilter']['merkmalwert_beschreibung_anzeigen'] === 'Y' && $_smarty_tpl->tpl_vars['oNavigationsinfo']->value->getCharacteristicValue() !== null && strlen($_smarty_tpl->tpl_vars['oNavigationsinfo']->value->getCharacteristicValue()->cBeschreibung) > 0) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_60596331760a50be6132c15_62718712', 'productlist-header-description-attributes', $this->tplIndex);
?>

        <?php }?>
    <?php
}
}
/* {/block 'productlist-header-description'} */
/* {block 'productlist-header-subcategories-image'} */
class Block_125636023160a50be61c5100_12196220 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_block_plugin58 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin58, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['subCategory']->value->getURL()));
$_block_repeat=true;
echo $_block_plugin58->render(array('href'=>$_smarty_tpl->tpl_vars['subCategory']->value->getURL()), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <div class="subcategories-image d-none d-md-flex">
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0], array( array('fluid'=>true,'lazy'=>true,'webp'=>true,'src'=>$_smarty_tpl->tpl_vars['subCategory']->value->getImage(\JTL\Media\Image::SIZE_SM),'alt'=>$_smarty_tpl->tpl_vars['subCategory']->value->getName()),$_smarty_tpl ) );?>

                                        </div>
                                    <?php $_block_repeat=false;
echo $_block_plugin58->render(array('href'=>$_smarty_tpl->tpl_vars['subCategory']->value->getURL()), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php
}
}
/* {/block 'productlist-header-subcategories-image'} */
/* {block 'productlist-header-subcategories-link'} */
class Block_117910952060a50be61d8646_90301935 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <div class="caption">
                                            <?php $_block_plugin59 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin59, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['subCategory']->value->getURL()));
$_block_repeat=true;
echo $_block_plugin59->render(array('href'=>$_smarty_tpl->tpl_vars['subCategory']->value->getURL()), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                <?php echo $_smarty_tpl->tpl_vars['subCategory']->value->getName();?>

                                            <?php $_block_repeat=false;
echo $_block_plugin59->render(array('href'=>$_smarty_tpl->tpl_vars['subCategory']->value->getURL()), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        </div>
                                    <?php
}
}
/* {/block 'productlist-header-subcategories-link'} */
/* {block 'productlist-header-subcategories-description'} */
class Block_133323834560a50be61f2de4_88224494 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <p class="item_desc small text-muted-util d-none d-md-block">
                                            <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['subCategory']->value->getDescription()),68 ));?>

                                        </p>
                                    <?php
}
}
/* {/block 'productlist-header-subcategories-description'} */
/* {block 'productlist-header-subcategories-list'} */
class Block_99492149260a50be61fb738_61052394 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <hr class="d-none d-md-block">
                                            <ul class="d-none d-md-block">
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subCategory']->value->getChildren(), 'subChild');
$_smarty_tpl->tpl_vars['subChild']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subChild']->value) {
$_smarty_tpl->tpl_vars['subChild']->do_else = false;
?>
                                                    <li>
                                                        <?php $_block_plugin60 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin60, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['subChild']->value->getURL(),'title'=>$_smarty_tpl->tpl_vars['subChild']->value->getName()));
$_block_repeat=true;
echo $_block_plugin60->render(array('href'=>$_smarty_tpl->tpl_vars['subChild']->value->getURL(),'title'=>$_smarty_tpl->tpl_vars['subChild']->value->getName()), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['subChild']->value->getName();
$_block_repeat=false;
echo $_block_plugin60->render(array('href'=>$_smarty_tpl->tpl_vars['subChild']->value->getURL(),'title'=>$_smarty_tpl->tpl_vars['subChild']->value->getName()), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                    </li>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </ul>
                                        <?php
}
}
/* {/block 'productlist-header-subcategories-list'} */
/* {block 'productlist-header-subcategories'} */
class Block_155178274660a50be61b91b9_70781652 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['navigationsfilter']['artikeluebersicht_bild_anzeigen'] !== 'N' && count($_smarty_tpl->tpl_vars['oUnterKategorien_arr']->value) > 0) {?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_subcategories'),$_smarty_tpl ) );?>

            <?php $_block_plugin56 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin56, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('class'=>"row-eq-height content-cats-small"));
$_block_repeat=true;
echo $_block_plugin56->render(array('class'=>"row-eq-height content-cats-small"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oUnterKategorien_arr']->value, 'subCategory');
$_smarty_tpl->tpl_vars['subCategory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subCategory']->value) {
$_smarty_tpl->tpl_vars['subCategory']->do_else = false;
?>
                    <?php $_block_plugin57 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin57, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'md'=>4,'lg'=>3));
$_block_repeat=true;
echo $_block_plugin57->render(array('cols'=>12,'md'=>4,'lg'=>3), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <div class="sub-categories">
                            <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['navigationsfilter']['artikeluebersicht_bild_anzeigen'] !== 'Y') {?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125636023160a50be61c5100_12196220', 'productlist-header-subcategories-image', $this->tplIndex);
?>

                            <?php }?>
                            <div>
                                <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['navigationsfilter']['artikeluebersicht_bild_anzeigen'] !== 'B') {?>
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_117910952060a50be61d8646_90301935', 'productlist-header-subcategories-link', $this->tplIndex);
?>

                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['navigationsfilter']['unterkategorien_beschreibung_anzeigen'] === 'Y' && !empty($_smarty_tpl->tpl_vars['subCategory']->value->getDescription())) {?>
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_133323834560a50be61f2de4_88224494', 'productlist-header-subcategories-description', $this->tplIndex);
?>

                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['navigationsfilter']['unterkategorien_lvl2_anzeigen'] === 'Y') {?>
                                    <?php if ($_smarty_tpl->tpl_vars['subCategory']->value->hasChildren()) {?>
                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_99492149260a50be61fb738_61052394', 'productlist-header-subcategories-list', $this->tplIndex);
?>

                                    <?php }?>
                                <?php }?>
                            </div>
                        </div>
                    <?php $_block_repeat=false;
echo $_block_plugin57->render(array('cols'=>12,'md'=>4,'lg'=>3), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php $_block_repeat=false;
echo $_block_plugin56->render(array('class'=>"row-eq-height content-cats-small"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php }?>
    <?php
}
}
/* {/block 'productlist-header-subcategories'} */
/* {block 'productlist-header-include-selection-wizard'} */
class Block_144232506860a50be6211ff1_81977265 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:selectionwizard/index.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('container'=>false), 0, false);
?>
    <?php
}
}
/* {/block 'productlist-header-include-selection-wizard'} */
/* {block 'productlist-header-include-product-slider-top'} */
class Block_25396588860a50be621a956_33123489 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_category_top'),$_smarty_tpl ) );?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'topOffer','assign'=>'slidertitle'),$_smarty_tpl ) );?>

                <?php $_smarty_tpl->_subTemplateRender('file:snippets/product_slider.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>'slider-top-products','productlist'=>$_smarty_tpl->tpl_vars['KategorieInhalt']->value->TopArtikel->elemente,'title'=>$_smarty_tpl->tpl_vars['slidertitle']->value), 0, false);
?>
            <?php
}
}
/* {/block 'productlist-header-include-product-slider-top'} */
/* {block 'productlist-header-include-product-slider-bestseller'} */
class Block_200543213660a50be6226700_00544529 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_category_bestseller'),$_smarty_tpl ) );?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'bestsellers','assign'=>'slidertitle'),$_smarty_tpl ) );?>

                <?php $_smarty_tpl->_subTemplateRender('file:snippets/product_slider.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>'slider-bestseller-products','productlist'=>$_smarty_tpl->tpl_vars['KategorieInhalt']->value->BestsellerArtikel->elemente,'title'=>$_smarty_tpl->tpl_vars['slidertitle']->value), 0, true);
?>
            <?php
}
}
/* {/block 'productlist-header-include-product-slider-bestseller'} */
/* {block 'productlist-header-include-productlist-page-nav'} */
class Block_25446460060a50be62429a1_35571267 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:snippets/productlist_page_nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('navid'=>'header'), 0, false);
?>
    <?php
}
}
/* {/block 'productlist-header-include-productlist-page-nav'} */
/* {block 'productlist-header-include-active-filter'} */
class Block_202499875660a50be62bb198_69493894 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ($_smarty_tpl->tpl_vars['NaviFilter']->value->getFilterCount() > 0) {?>
            <?php echo $_smarty_tpl->tpl_vars['alertList']->value->displayAlertByKey('noFilterResults');?>

        <?php }?>
        <?php $_smarty_tpl->_subTemplateRender('file:snippets/filter/active_filter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'productlist-header-include-active-filter'} */
/* {block 'productlist-header'} */
class Block_210158140060a50be5ed5747_18481068 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'productlist-header' => 
  array (
    0 => 'Block_210158140060a50be5ed5747_18481068',
  ),
  'productlist-header-heading' => 
  array (
    0 => 'Block_21371497160a50be5ee10f5_32342474',
  ),
  'productlist-header-alert' => 
  array (
    0 => 'Block_200098665860a50be600e8c8_38561816',
  ),
  'productlist-header-form-search' => 
  array (
    0 => 'Block_985053060a50be6012643_32809395',
  ),
  'productlist-header-include-extension' => 
  array (
    0 => 'Block_79667257460a50be60b9283_44871619',
  ),
  'productlist-header-description' => 
  array (
    0 => 'Block_89448407460a50be60bb299_69418527',
  ),
  'productlist-header-description-heading' => 
  array (
    0 => 'Block_99170021360a50be60eca79_22607590',
  ),
  'productlist-header-description-category' => 
  array (
    0 => 'Block_36866835860a50be60f8aa9_43075575',
  ),
  'productlist-header-description-manufacturers' => 
  array (
    0 => 'Block_36197865060a50be610bd12_83219689',
  ),
  'productlist-header-description-attributes' => 
  array (
    0 => 'Block_60596331760a50be6132c15_62718712',
  ),
  'productlist-header-subcategories' => 
  array (
    0 => 'Block_155178274660a50be61b91b9_70781652',
  ),
  'productlist-header-subcategories-image' => 
  array (
    0 => 'Block_125636023160a50be61c5100_12196220',
  ),
  'productlist-header-subcategories-link' => 
  array (
    0 => 'Block_117910952060a50be61d8646_90301935',
  ),
  'productlist-header-subcategories-description' => 
  array (
    0 => 'Block_133323834560a50be61f2de4_88224494',
  ),
  'productlist-header-subcategories-list' => 
  array (
    0 => 'Block_99492149260a50be61fb738_61052394',
  ),
  'productlist-header-include-selection-wizard' => 
  array (
    0 => 'Block_144232506860a50be6211ff1_81977265',
  ),
  'productlist-header-include-product-slider-top' => 
  array (
    0 => 'Block_25396588860a50be621a956_33123489',
  ),
  'productlist-header-include-product-slider-bestseller' => 
  array (
    0 => 'Block_200543213660a50be6226700_00544529',
  ),
  'productlist-header-include-productlist-page-nav' => 
  array (
    0 => 'Block_25446460060a50be62429a1_35571267',
  ),
  'productlist-header-include-active-filter' => 
  array (
    0 => 'Block_202499875660a50be62bb198_69493894',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (!(isset($_smarty_tpl->tpl_vars['oNavigationsinfo']->value)) || (!$_smarty_tpl->tpl_vars['oNavigationsinfo']->value->getManufacturer() && !$_smarty_tpl->tpl_vars['oNavigationsinfo']->value->getCharacteristicValue() && !$_smarty_tpl->tpl_vars['oNavigationsinfo']->value->getCategory())) {?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_heading'),$_smarty_tpl ) );?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21371497160a50be5ee10f5_32342474', 'productlist-header-heading', $this->tplIndex);
?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['Suchergebnisse']->value->getSearchUnsuccessful() == true) {?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_no_results'),$_smarty_tpl ) );?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_200098665860a50be600e8c8_38561816', 'productlist-header-alert', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_985053060a50be6012643_32809395', 'productlist-header-form-search', $this->tplIndex);
?>

    <?php }?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_79667257460a50be60b9283_44871619', 'productlist-header-include-extension', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_89448407460a50be60bb299_69418527', 'productlist-header-description', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_155178274660a50be61b91b9_70781652', 'productlist-header-subcategories', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_144232506860a50be6211ff1_81977265', 'productlist-header-include-selection-wizard', $this->tplIndex);
?>


    <?php if (count($_smarty_tpl->tpl_vars['Suchergebnisse']->value->getProducts()) <= 0 && (isset($_smarty_tpl->tpl_vars['KategorieInhalt']->value))) {?>
        <?php if ((isset($_smarty_tpl->tpl_vars['KategorieInhalt']->value->TopArtikel->elemente)) && count($_smarty_tpl->tpl_vars['KategorieInhalt']->value->TopArtikel->elemente) > 0) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_25396588860a50be621a956_33123489', 'productlist-header-include-product-slider-top', $this->tplIndex);
?>

        <?php }?>

        <?php if ((isset($_smarty_tpl->tpl_vars['KategorieInhalt']->value->BestsellerArtikel->elemente)) && count($_smarty_tpl->tpl_vars['KategorieInhalt']->value->BestsellerArtikel->elemente) > 0) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_200543213660a50be6226700_00544529', 'productlist-header-include-product-slider-bestseller', $this->tplIndex);
?>

        <?php }?>
    <?php }?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_25446460060a50be62429a1_35571267', 'productlist-header-include-productlist-page-nav', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_202499875660a50be62bb198_69493894', 'productlist-header-include-active-filter', $this->tplIndex);
?>

<?php
}
}
/* {/block 'productlist-header'} */
}
