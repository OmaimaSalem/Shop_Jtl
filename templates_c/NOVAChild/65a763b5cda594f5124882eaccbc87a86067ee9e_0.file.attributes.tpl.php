<?php
/* Smarty version 3.1.38, created on 2021-05-18 11:41:24
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\productdetails\attributes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a38bc4913f26_73031698',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65a763b5cda594f5124882eaccbc87a86067ee9e' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\productdetails\\attributes.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/image.tpl' => 1,
  ),
),false)) {
function content_60a38bc4913f26_73031698 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_176617875460a38bc48a1e53_55457023', 'productdetails-attributes');
?>

<?php }
/* {block 'productdetails-attributes-badge'} */
class Block_22088614760a38bc48b1355_41927155 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_block_plugin122 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin122, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['characteristicValue']->value->cURLFull,'class'=>"badge badge-light"));
$_block_repeat=true;
echo $_block_plugin122->render(array('href'=>$_smarty_tpl->tpl_vars['characteristicValue']->value->cURLFull,'class'=>"badge badge-light"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['characteristicValue']->value->cWert, ENT_QUOTES, 'utf-8', true);
$_block_repeat=false;
echo $_block_plugin122->render(array('href'=>$_smarty_tpl->tpl_vars['characteristicValue']->value->cURLFull,'class'=>"badge badge-light"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'productdetails-attributes-badge'} */
/* {block 'productdetails-attributes-image'} */
class Block_39615187560a38bc48b6d98_20810389 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_block_plugin123 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin123, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['characteristicValue']->value->cURLFull,'class'=>"text-decoration-none-util",'data'=>array('toggle'=>'tooltip','placement'=>'top','boundary'=>'window'),'title'=>htmlspecialchars($_smarty_tpl->tpl_vars['characteristicValue']->value->cWert, ENT_QUOTES, 'utf-8', true),'aria'=>array("label"=>htmlspecialchars($_smarty_tpl->tpl_vars['characteristicValue']->value->cWert, ENT_QUOTES, 'utf-8', true))));
$_block_repeat=true;
echo $_block_plugin123->render(array('href'=>$_smarty_tpl->tpl_vars['characteristicValue']->value->cURLFull,'class'=>"text-decoration-none-util",'data'=>array('toggle'=>'tooltip','placement'=>'top','boundary'=>'window'),'title'=>htmlspecialchars($_smarty_tpl->tpl_vars['characteristicValue']->value->cWert, ENT_QUOTES, 'utf-8', true),'aria'=>array("label"=>htmlspecialchars($_smarty_tpl->tpl_vars['characteristicValue']->value->cWert, ENT_QUOTES, 'utf-8', true))), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->_assignInScope('img', $_smarty_tpl->tpl_vars['characteristicValue']->value->getImage(\JTL\Media\Image::SIZE_XS));
if ($_smarty_tpl->tpl_vars['img']->value !== null && strpos($_smarty_tpl->tpl_vars['img']->value,(defined('BILD_KEIN_MERKMALBILD_VORHANDEN') ? constant('BILD_KEIN_MERKMALBILD_VORHANDEN') : null)) === false && strpos($_smarty_tpl->tpl_vars['img']->value,(defined('BILD_KEIN_ARTIKELBILD_VORHANDEN') ? constant('BILD_KEIN_ARTIKELBILD_VORHANDEN') : null)) === false) {
$_smarty_tpl->_subTemplateRender('file:snippets/image.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('item'=>$_smarty_tpl->tpl_vars['characteristicValue']->value,'square'=>false,'srcSize'=>'xs','sizes'=>'40px','alt'=>$_smarty_tpl->tpl_vars['characteristicValue']->value->cWert), 0, true);
} else {
$_block_plugin124 = isset($_smarty_tpl->smarty->registered_plugins['block']['badge'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['badge'][0][0] : null;
if (!is_callable(array($_block_plugin124, 'render'))) {
throw new SmartyException('block tag \'badge\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('badge', array('variant'=>"light"));
$_block_repeat=true;
echo $_block_plugin124->render(array('variant'=>"light"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['characteristicValue']->value->cWert, ENT_QUOTES, 'utf-8', true);
$_block_repeat=false;
echo $_block_plugin124->render(array('variant'=>"light"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
$_block_repeat=false;
echo $_block_plugin123->render(array('href'=>$_smarty_tpl->tpl_vars['characteristicValue']->value->cURLFull,'class'=>"text-decoration-none-util",'data'=>array('toggle'=>'tooltip','placement'=>'top','boundary'=>'window'),'title'=>htmlspecialchars($_smarty_tpl->tpl_vars['characteristicValue']->value->cWert, ENT_QUOTES, 'utf-8', true),'aria'=>array("label"=>htmlspecialchars($_smarty_tpl->tpl_vars['characteristicValue']->value->cWert, ENT_QUOTES, 'utf-8', true))), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'productdetails-attributes-image'} */
/* {block 'productdetails-attributes-characteristics'} */
class Block_209693618560a38bc48a5ec7_18484664 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Artikel']->value->oMerkmale_arr, 'characteristic');
$_smarty_tpl->tpl_vars['characteristic']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['characteristic']->value) {
$_smarty_tpl->tpl_vars['characteristic']->do_else = false;
?>
                        <tr>
                            <td class="h6"><?php echo $_smarty_tpl->tpl_vars['characteristic']->value->cName;?>
:</td>
                            <td class="attr-characteristic">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['characteristic']->value->oMerkmalWert_arr, 'characteristicValue');
$_smarty_tpl->tpl_vars['characteristicValue']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['characteristicValue']->value) {
$_smarty_tpl->tpl_vars['characteristicValue']->do_else = false;
if ($_smarty_tpl->tpl_vars['characteristic']->value->cTyp === 'TEXT' || $_smarty_tpl->tpl_vars['characteristic']->value->cTyp === 'SELECTBOX' || $_smarty_tpl->tpl_vars['characteristic']->value->cTyp === '') {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_22088614760a38bc48b1355_41927155', 'productdetails-attributes-badge', $this->tplIndex);
} else {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_39615187560a38bc48b6d98_20810389', 'productdetails-attributes-image', $this->tplIndex);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </td>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php
}
}
/* {/block 'productdetails-attributes-characteristics'} */
/* {block 'productdetails-attributes-shipping-weight'} */
class Block_115405453260a38bc48cf497_35703644 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <tr>
                        <td class="h6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'shippingWeight'),$_smarty_tpl ) );?>
:</td>
                        <td class="weight-unit">
                            <?php echo $_smarty_tpl->tpl_vars['Artikel']->value->cGewicht;?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'weightUnit'),$_smarty_tpl ) );?>

                        </td>
                    </tr>
                <?php
}
}
/* {/block 'productdetails-attributes-shipping-weight'} */
/* {block 'productdetails-attributes-product-weight'} */
class Block_66498415660a38bc48d63c0_55298721 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <tr class="attr-weight">
                        <td class="h6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'productWeight'),$_smarty_tpl ) );?>
:</td>
                        <td class="weight-unit" itemprop="weight" itemscope itemtype="http://schema.org/QuantitativeValue">
                            <span itemprop="value"><?php echo $_smarty_tpl->tpl_vars['Artikel']->value->cArtikelgewicht;?>
</span> <span itemprop="unitText"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'weightUnit'),$_smarty_tpl ) );?>

                        </td>
                    </tr>
                <?php
}
}
/* {/block 'productdetails-attributes-product-weight'} */
/* {block 'productdetails-attributes-unit'} */
class Block_22072807560a38bc48e4966_32835920 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <tr class="attr-contents">
                        <td class="h6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'contents','section'=>'productDetails'),$_smarty_tpl ) );?>
: </td>
                        <td class="attr-value">
                            <?php echo $_smarty_tpl->tpl_vars['Artikel']->value->cMassMenge;?>
 <?php echo $_smarty_tpl->tpl_vars['Artikel']->value->cMasseinheitName;?>

                        </td>
                    </tr>
                <?php
}
}
/* {/block 'productdetails-attributes-unit'} */
/* {block 'productdetails-attributes-dimensions'} */
class Block_7852804260a38bc48f3ac8_71741970 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_assignInScope('dimensionArr', $_smarty_tpl->tpl_vars['Artikel']->value->getDimensionLocalized());?>
                    <?php if (count($_smarty_tpl->tpl_vars['dimensionArr']->value) > 0) {?>
                        <tr class="attr-dimensions">
                            <td class="h6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'dimensions','section'=>'productDetails'),$_smarty_tpl ) );?>

                                (<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dimensionArr']->value, 'dim', true, 'dimkey');
$_smarty_tpl->tpl_vars['dim']->iteration = 0;
$_smarty_tpl->tpl_vars['dim']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dimkey']->value => $_smarty_tpl->tpl_vars['dim']->value) {
$_smarty_tpl->tpl_vars['dim']->do_else = false;
$_smarty_tpl->tpl_vars['dim']->iteration++;
$_smarty_tpl->tpl_vars['dim']->last = $_smarty_tpl->tpl_vars['dim']->iteration === $_smarty_tpl->tpl_vars['dim']->total;
$__foreach_dim_42_saved = $_smarty_tpl->tpl_vars['dim'];
?>
                                    <?php echo $_smarty_tpl->tpl_vars['dimkey']->value;
if (!$_smarty_tpl->tpl_vars['dim']->last) {?> &times; <?php }?>
                                <?php
$_smarty_tpl->tpl_vars['dim'] = $__foreach_dim_42_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>):
                            </td>
                            <td class="attr-value">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dimensionArr']->value, 'dim', true);
$_smarty_tpl->tpl_vars['dim']->iteration = 0;
$_smarty_tpl->tpl_vars['dim']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dim']->value) {
$_smarty_tpl->tpl_vars['dim']->do_else = false;
$_smarty_tpl->tpl_vars['dim']->iteration++;
$_smarty_tpl->tpl_vars['dim']->last = $_smarty_tpl->tpl_vars['dim']->iteration === $_smarty_tpl->tpl_vars['dim']->total;
$__foreach_dim_43_saved = $_smarty_tpl->tpl_vars['dim'];
?>
                                    <?php echo $_smarty_tpl->tpl_vars['dim']->value;
if ($_smarty_tpl->tpl_vars['dim']->last) {?> cm <?php } else { ?> &times; <?php }?>
                                <?php
$_smarty_tpl->tpl_vars['dim'] = $__foreach_dim_43_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </td>
                        </tr>
                    <?php }?>
                <?php
}
}
/* {/block 'productdetails-attributes-dimensions'} */
/* {block 'productdetails-attributes-shop-attributes'} */
class Block_103591013560a38bc4908473_98964233 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Artikel']->value->Attribute, 'Attribut');
$_smarty_tpl->tpl_vars['Attribut']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Attribut']->value) {
$_smarty_tpl->tpl_vars['Attribut']->do_else = false;
?>
                        <tr class="attr-custom">
                            <td class="h6"><?php echo $_smarty_tpl->tpl_vars['Attribut']->value->cName;?>
: </td>
                            <td class="attr-value"><?php echo $_smarty_tpl->tpl_vars['Attribut']->value->cWert;?>
</td>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php
}
}
/* {/block 'productdetails-attributes-shop-attributes'} */
/* {block 'productdetails-attributes-table'} */
class Block_147548226060a38bc48a3709_42107213 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <table class="table table-sm table-striped table-bordered-outline">
            <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['merkmale_anzeigen'] === 'Y') {?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_209693618560a38bc48a5ec7_18484664', 'productdetails-attributes-characteristics', $this->tplIndex);
?>

            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['showShippingWeight']->value) {?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_115405453260a38bc48cf497_35703644', 'productdetails-attributes-shipping-weight', $this->tplIndex);
?>

            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['showProductWeight']->value) {?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_66498415660a38bc48d63c0_55298721', 'productdetails-attributes-product-weight', $this->tplIndex);
?>

            <?php }?>

            <?php if ((isset($_smarty_tpl->tpl_vars['Artikel']->value->cMasseinheitName)) && (isset($_smarty_tpl->tpl_vars['Artikel']->value->fMassMenge)) && $_smarty_tpl->tpl_vars['Artikel']->value->fMassMenge > 0 && $_smarty_tpl->tpl_vars['Artikel']->value->cTeilbar !== 'Y' && ($_smarty_tpl->tpl_vars['Artikel']->value->fAbnahmeintervall == 0 || $_smarty_tpl->tpl_vars['Artikel']->value->fAbnahmeintervall == 1) && (isset($_smarty_tpl->tpl_vars['Artikel']->value->cMassMenge))) {?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_22072807560a38bc48e4966_32835920', 'productdetails-attributes-unit', $this->tplIndex);
?>

            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['dimension']->value && $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_abmessungen_anzeigen'] === 'Y') {?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7852804260a38bc48f3ac8_71741970', 'productdetails-attributes-dimensions', $this->tplIndex);
?>

            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_attribute_anhaengen'] === 'Y' || (($tmp = $_smarty_tpl->tpl_vars['Artikel']->value->FunktionsAttribute[(defined('FKT_ATTRIBUT_ATTRIBUTEANHAENGEN') ? constant('FKT_ATTRIBUT_ATTRIBUTEANHAENGEN') : null)] ?? null)===null||$tmp==='' ? 0 : $tmp) == 1) {?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_103591013560a38bc4908473_98964233', 'productdetails-attributes-shop-attributes', $this->tplIndex);
?>

            <?php }?>
        </table>
    <?php
}
}
/* {/block 'productdetails-attributes-table'} */
/* {block 'productdetails-attributes'} */
class Block_176617875460a38bc48a1e53_55457023 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'productdetails-attributes' => 
  array (
    0 => 'Block_176617875460a38bc48a1e53_55457023',
  ),
  'productdetails-attributes-table' => 
  array (
    0 => 'Block_147548226060a38bc48a3709_42107213',
  ),
  'productdetails-attributes-characteristics' => 
  array (
    0 => 'Block_209693618560a38bc48a5ec7_18484664',
  ),
  'productdetails-attributes-badge' => 
  array (
    0 => 'Block_22088614760a38bc48b1355_41927155',
  ),
  'productdetails-attributes-image' => 
  array (
    0 => 'Block_39615187560a38bc48b6d98_20810389',
  ),
  'productdetails-attributes-shipping-weight' => 
  array (
    0 => 'Block_115405453260a38bc48cf497_35703644',
  ),
  'productdetails-attributes-product-weight' => 
  array (
    0 => 'Block_66498415660a38bc48d63c0_55298721',
  ),
  'productdetails-attributes-unit' => 
  array (
    0 => 'Block_22072807560a38bc48e4966_32835920',
  ),
  'productdetails-attributes-dimensions' => 
  array (
    0 => 'Block_7852804260a38bc48f3ac8_71741970',
  ),
  'productdetails-attributes-shop-attributes' => 
  array (
    0 => 'Block_103591013560a38bc4908473_98964233',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['showAttributesTable']->value) {?>
    <div class="product-attributes">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_147548226060a38bc48a3709_42107213', 'productdetails-attributes-table', $this->tplIndex);
?>

    </div>
<?php }
}
}
/* {/block 'productdetails-attributes'} */
}
