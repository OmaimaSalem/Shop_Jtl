<?php
/* Smarty version 3.1.38, created on 2021-05-18 11:41:15
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\productdetails\variation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a38bbb263ef5_01330735',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c96b87d82d0b8f8e5153c5de398813571746df77' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\productdetails\\variation.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:productdetails/variation_value.tpl' => 4,
    'file:snippets/image.tpl' => 1,
  ),
),false)) {
function content_60a38bbb263ef5_01330735 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_208489193660a38bbb0689a1_83939414', 'productdetails-variation');
?>

<?php }
/* {block 'productdetails-variation-spinner'} */
class Block_101895502460a38bbb073c94_70146744 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_block_plugin30 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin30, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array());
$_block_repeat=true;
echo $_block_plugin30->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_block_plugin31 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin31, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('class'=>"updatingStockInfo text-center-util d-none"));
$_block_repeat=true;
echo $_block_plugin31->render(array('class'=>"updatingStockInfo text-center-util d-none"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <i class="fa fa-spinner fa-spin" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'updatingStockInformation','section'=>'productDetails'),$_smarty_tpl ) );?>
"></i>
                <?php $_block_repeat=false;
echo $_block_plugin31->render(array('class'=>"updatingStockInfo text-center-util d-none"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php $_block_repeat=false;
echo $_block_plugin30->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php
}
}
/* {/block 'productdetails-variation-spinner'} */
/* {block 'productdetails-variation-select-include-variation-value'} */
class Block_35566426160a38bbb0b4d19_56673634 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
ob_start();
$_smarty_tpl->_subTemplateRender('file:productdetails/variation_value.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->assign('cVariationsWert', ob_get_clean());
}
}
/* {/block 'productdetails-variation-select-include-variation-value'} */
/* {block 'productdetails-variation-select-inner'} */
class Block_176199418860a38bbb0b4087_97560788 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_35566426160a38bbb0b4d19_56673634', 'productdetails-variation-select-include-variation-value', $this->tplIndex);
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['Variationswert']->value->kEigenschaftWert;?>
" class="variation" data-content="<span data-value='<?php echo $_smarty_tpl->tpl_vars['Variationswert']->value->kEigenschaftWert;?>
'><?php echo htmlspecialchars(trim($_smarty_tpl->tpl_vars['cVariationsWert']->value), ENT_QUOTES, 'utf-8', true);
if ($_smarty_tpl->tpl_vars['Variationswert']->value->notExists) {?> <span class='badge badge-danger badge-not-available'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'notAvailableInSelection'),$_smarty_tpl ) );?>
</span><?php } elseif (!$_smarty_tpl->tpl_vars['Variationswert']->value->inStock) {?><span class='badge badge-danger badge-not-available'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'ampelRot'),$_smarty_tpl ) );?>
</span><?php }?></span>"data-type="option" data-original="<?php echo $_smarty_tpl->tpl_vars['Variationswert']->value->cName;?>
"data-key="<?php echo $_smarty_tpl->tpl_vars['Variationswert']->value->kEigenschaft;?>
"data-value="<?php echo $_smarty_tpl->tpl_vars['Variationswert']->value->kEigenschaftWert;?>
"<?php if (!empty($_smarty_tpl->tpl_vars['Variationswert']->value->cBildPfadMini)) {?>data-list='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['prepare_image_details'][0], array( array('item'=>$_smarty_tpl->tpl_vars['Variationswert']->value,'json'=>true),$_smarty_tpl ) );?>
'data-title='<?php echo $_smarty_tpl->tpl_vars['Variationswert']->value->cName;?>
'<?php }
if ((isset($_smarty_tpl->tpl_vars['Variationswert']->value->oVariationsKombi))) {?>data-ref="<?php echo $_smarty_tpl->tpl_vars['Variationswert']->value->oVariationsKombi->kArtikel;?>
"<?php }
if ($_smarty_tpl->tpl_vars['bSelected']->value) {?> selected="selected"<?php }?>><?php echo htmlspecialchars(trim($_smarty_tpl->tpl_vars['cVariationsWert']->value), ENT_QUOTES, 'utf-8', true);?>
</option><?php
}
}
/* {/block 'productdetails-variation-select-inner'} */
/* {block 'productdetails-variation-select-outer'} */
class Block_191754701260a38bbb093732_19250956 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'pleaseChooseVariation','section'=>'productDetails'),$_smarty_tpl ) );
$_prefixVariable20=ob_get_clean();
$_block_plugin34 = isset($_smarty_tpl->smarty->registered_plugins['block']['select'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['select'][0][0] : null;
if (!is_callable(array($_block_plugin34, 'render'))) {
throw new SmartyException('block tag \'select\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('select', array('class'=>'custom-select selectpicker','title'=>$_prefixVariable20,'name'=>"eigenschaftwert[".((string)$_smarty_tpl->tpl_vars['Variation']->value->kEigenschaft)."]",'required'=>!$_smarty_tpl->tpl_vars['showMatrix']->value));
$_block_repeat=true;
echo $_block_plugin34->render(array('class'=>'custom-select selectpicker','title'=>$_prefixVariable20,'name'=>"eigenschaftwert[".((string)$_smarty_tpl->tpl_vars['Variation']->value->kEigenschaft)."]",'required'=>!$_smarty_tpl->tpl_vars['showMatrix']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Variation']->value->Werte, 'Variationswert', false, 'y', 'Variationswerte', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['Variationswert']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['y']->value => $_smarty_tpl->tpl_vars['Variationswert']->value) {
$_smarty_tpl->tpl_vars['Variationswert']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_Variationswerte']->value['index']++;
$_smarty_tpl->_assignInScope('bSelected', false);
if ((isset($_smarty_tpl->tpl_vars['oVariationKombi_arr']->value[$_smarty_tpl->tpl_vars['Variationswert']->value->kEigenschaft]))) {
$_smarty_tpl->_assignInScope('bSelected', in_array($_smarty_tpl->tpl_vars['Variationswert']->value->kEigenschaftWert,$_smarty_tpl->tpl_vars['oVariationKombi_arr']->value[$_smarty_tpl->tpl_vars['Variationswert']->value->kEigenschaft]));
}
if ((isset($_smarty_tpl->tpl_vars['oEigenschaftWertEdit_arr']->value[$_smarty_tpl->tpl_vars['Variationswert']->value->kEigenschaft]))) {
$_smarty_tpl->_assignInScope('bSelected', $_smarty_tpl->tpl_vars['Variationswert']->value->kEigenschaftWert == $_smarty_tpl->tpl_vars['oEigenschaftWertEdit_arr']->value[$_smarty_tpl->tpl_vars['Variationswert']->value->kEigenschaft]->kEigenschaftWert);
}
if (($_smarty_tpl->tpl_vars['Artikel']->value->kVaterArtikel > 0 || $_smarty_tpl->tpl_vars['Artikel']->value->nIstVater == 1) && $_smarty_tpl->tpl_vars['Artikel']->value->nVariationOhneFreifeldAnzahl == 1 && $_smarty_tpl->tpl_vars['Einstellungen']->value['global']['artikeldetails_variationswertlager'] == 3 && !empty($_smarty_tpl->tpl_vars['Artikel']->value->VariationenOhneFreifeld[$_smarty_tpl->tpl_vars['i']->value]->Werte[$_smarty_tpl->tpl_vars['y']->value]->nNichtLieferbar) && $_smarty_tpl->tpl_vars['Artikel']->value->VariationenOhneFreifeld[$_smarty_tpl->tpl_vars['i']->value]->Werte[$_smarty_tpl->tpl_vars['y']->value]->nNichtLieferbar == 1) {
} else {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_176199418860a38bbb0b4087_97560788', 'productdetails-variation-select-inner', $this->tplIndex);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_block_repeat=false;
echo $_block_plugin34->render(array('class'=>'custom-select selectpicker','title'=>$_prefixVariable20,'name'=>"eigenschaftwert[".((string)$_smarty_tpl->tpl_vars['Variation']->value->kEigenschaft)."]",'required'=>!$_smarty_tpl->tpl_vars['showMatrix']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'productdetails-variation-select-outer'} */
/* {block 'productdetails-variation-radio-include-variation-value'} */
class Block_59768282260a38bbb118b95_14505378 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:productdetails/variation_value.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('badgeRight'=>true), 0, true);
if ($_smarty_tpl->tpl_vars['Variationswert']->value->notExists) {
$_block_plugin35 = isset($_smarty_tpl->smarty->registered_plugins['block']['badge'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['badge'][0][0] : null;
if (!is_callable(array($_block_plugin35, 'render'))) {
throw new SmartyException('block tag \'badge\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('badge', array('class'=>'badge-not-available','variant'=>'danger'));
$_block_repeat=true;
echo $_block_plugin35->render(array('class'=>'badge-not-available','variant'=>'danger'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'notAvailableInSelection'),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin35->render(array('class'=>'badge-not-available','variant'=>'danger'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
} elseif (!$_smarty_tpl->tpl_vars['Variationswert']->value->inStock) {
$_block_plugin36 = isset($_smarty_tpl->smarty->registered_plugins['block']['badge'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['badge'][0][0] : null;
if (!is_callable(array($_block_plugin36, 'render'))) {
throw new SmartyException('block tag \'badge\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('badge', array('class'=>'badge-not-available','variant'=>'danger'));
$_block_repeat=true;
echo $_block_plugin36->render(array('class'=>'badge-not-available','variant'=>'danger'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'ampelRot'),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin36->render(array('class'=>'badge-not-available','variant'=>'danger'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
/* {/block 'productdetails-variation-radio-include-variation-value'} */
/* {block 'productdetails-variation-radio-inner'} */
class Block_123366435560a38bbb0f33d4_29000798 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="custom-control custom-radio"><input type="radio" class="custom-control-input" name="eigenschaftwert[<?php echo $_smarty_tpl->tpl_vars['Variation']->value->kEigenschaft;?>
]"id="<?php if ((isset($_smarty_tpl->tpl_vars['smallView']->value)) && $_smarty_tpl->tpl_vars['smallView']->value) {?>a-<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->kArtikel;
}?>vt<?php echo $_smarty_tpl->tpl_vars['Variationswert']->value->kEigenschaftWert;?>
"value="<?php echo $_smarty_tpl->tpl_vars['Variationswert']->value->kEigenschaftWert;?>
"<?php if ($_smarty_tpl->tpl_vars['bSelected']->value) {?>checked="checked"<?php }
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_Variationswerte']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_Variationswerte']->value['index'] : null) === 0 && !$_smarty_tpl->tpl_vars['showMatrix']->value) {?> required<?php }?>><label class="variation custom-control-label d-flex" for="<?php if ((isset($_smarty_tpl->tpl_vars['smallView']->value)) && $_smarty_tpl->tpl_vars['smallView']->value) {?>a-<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->kArtikel;
}?>vt<?php echo $_smarty_tpl->tpl_vars['Variationswert']->value->kEigenschaftWert;?>
"data-type="radio"data-original="<?php echo $_smarty_tpl->tpl_vars['Variationswert']->value->cName;?>
"data-key="<?php echo $_smarty_tpl->tpl_vars['Variationswert']->value->kEigenschaft;?>
"data-value="<?php echo $_smarty_tpl->tpl_vars['Variationswert']->value->kEigenschaftWert;?>
"<?php if (!empty($_smarty_tpl->tpl_vars['Variationswert']->value->cBildPfadMini)) {?>data-list='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['prepare_image_details'][0], array( array('item'=>$_smarty_tpl->tpl_vars['Variationswert']->value,'json'=>true),$_smarty_tpl ) );?>
'data-title='<?php echo $_smarty_tpl->tpl_vars['Variationswert']->value->cName;
if ($_smarty_tpl->tpl_vars['Variationswert']->value->notExists) {?> - <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'notAvailableInSelection'),$_smarty_tpl ) );
} elseif (!$_smarty_tpl->tpl_vars['Variationswert']->value->inStock) {?> - <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'ampelRot'),$_smarty_tpl ) );
}?>'<?php }
if (!$_smarty_tpl->tpl_vars['Variationswert']->value->inStock) {?>data-stock="out-of-stock"<?php }
if ((isset($_smarty_tpl->tpl_vars['Variationswert']->value->oVariationsKombi))) {?>data-ref="<?php echo $_smarty_tpl->tpl_vars['Variationswert']->value->oVariationsKombi->kArtikel;?>
"<?php }?>><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59768282260a38bbb118b95_14505378', 'productdetails-variation-radio-include-variation-value', $this->tplIndex);
?>
</label></div><?php
}
}
/* {/block 'productdetails-variation-radio-inner'} */
/* {block 'productdetails-variation-radio-outer'} */
class Block_6434199060a38bbb0d6694_23365016 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Variation']->value->Werte, 'Variationswert', false, 'y', 'Variationswerte', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['Variationswert']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['y']->value => $_smarty_tpl->tpl_vars['Variationswert']->value) {
$_smarty_tpl->tpl_vars['Variationswert']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_Variationswerte']->value['index']++;
$_smarty_tpl->_assignInScope('bSelected', false);
if ((isset($_smarty_tpl->tpl_vars['oVariationKombi_arr']->value[$_smarty_tpl->tpl_vars['Variationswert']->value->kEigenschaft]))) {
$_smarty_tpl->_assignInScope('bSelected', in_array($_smarty_tpl->tpl_vars['Variationswert']->value->kEigenschaftWert,$_smarty_tpl->tpl_vars['oVariationKombi_arr']->value[$_smarty_tpl->tpl_vars['Variationswert']->value->kEigenschaft]));
}
if ((isset($_smarty_tpl->tpl_vars['oEigenschaftWertEdit_arr']->value[$_smarty_tpl->tpl_vars['Variationswert']->value->kEigenschaft]))) {
$_smarty_tpl->_assignInScope('bSelected', $_smarty_tpl->tpl_vars['Variationswert']->value->kEigenschaftWert == $_smarty_tpl->tpl_vars['oEigenschaftWertEdit_arr']->value[$_smarty_tpl->tpl_vars['Variationswert']->value->kEigenschaft]->kEigenschaftWert);
}
if (($_smarty_tpl->tpl_vars['Artikel']->value->kVaterArtikel > 0 || $_smarty_tpl->tpl_vars['Artikel']->value->nIstVater == 1) && $_smarty_tpl->tpl_vars['Artikel']->value->nVariationOhneFreifeldAnzahl == 1 && $_smarty_tpl->tpl_vars['Einstellungen']->value['global']['artikeldetails_variationswertlager'] == 3 && !empty($_smarty_tpl->tpl_vars['Artikel']->value->VariationenOhneFreifeld[$_smarty_tpl->tpl_vars['i']->value]->Werte[$_smarty_tpl->tpl_vars['y']->value]->nNichtLieferbar) && $_smarty_tpl->tpl_vars['Artikel']->value->VariationenOhneFreifeld[$_smarty_tpl->tpl_vars['i']->value]->Werte[$_smarty_tpl->tpl_vars['y']->value]->nNichtLieferbar == 1) {
} else {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_123366435560a38bbb0f33d4_29000798', 'productdetails-variation-radio-inner', $this->tplIndex);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
/* {/block 'productdetails-variation-radio-outer'} */
/* {block 'productdetails-variation-swatch-include-variation-value'} */
class Block_114453015260a38bbb1f2646_38810025 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:productdetails/variation_value.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('hideVariationValue'=>true), 0, true);
}
}
/* {/block 'productdetails-variation-swatch-include-variation-value'} */
/* {block 'productdetails-variation-swatch-inner'} */
class Block_163958807760a38bbb1c4475_75810201 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_block_plugin38 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin38, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('class'=>'col-auto'));
$_block_repeat=true;
echo $_block_plugin38->render(array('class'=>'col-auto'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><label class="variation swatches <?php if ($_smarty_tpl->tpl_vars['hasImage']->value) {?>swatches-image<?php } else { ?>swatches-text<?php }?> <?php if ($_smarty_tpl->tpl_vars['bSelected']->value) {?>active<?php }?> <?php if ($_smarty_tpl->tpl_vars['Variationswert']->value->notExists) {?>swatches-not-in-stock<?php } elseif (!$_smarty_tpl->tpl_vars['Variationswert']->value->inStock) {?>swatches-sold-out<?php }?>"data-type="swatch"data-original="<?php echo $_smarty_tpl->tpl_vars['Variationswert']->value->cName;?>
"data-key="<?php echo $_smarty_tpl->tpl_vars['Variationswert']->value->kEigenschaft;?>
"data-value="<?php echo $_smarty_tpl->tpl_vars['Variationswert']->value->kEigenschaftWert;?>
"for="<?php if ((isset($_smarty_tpl->tpl_vars['smallView']->value)) && $_smarty_tpl->tpl_vars['smallView']->value) {?>a-<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->kArtikel;
}?>vt<?php echo $_smarty_tpl->tpl_vars['Variationswert']->value->kEigenschaftWert;?>
"<?php if (!empty($_smarty_tpl->tpl_vars['Variationswert']->value->cBildPfadMini)) {?>data-list='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['prepare_image_details'][0], array( array('item'=>$_smarty_tpl->tpl_vars['Variationswert']->value,'json'=>true),$_smarty_tpl ) );?>
'<?php }
if ($_smarty_tpl->tpl_vars['Variationswert']->value->notExists) {?>title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'notAvailableInSelection'),$_smarty_tpl ) );?>
"data-title="<?php echo $_smarty_tpl->tpl_vars['Variationswert']->value->cName;?>
 - <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'notAvailableInSelection'),$_smarty_tpl ) );?>
"data-toggle="tooltip"<?php } elseif ($_smarty_tpl->tpl_vars['Variationswert']->value->inStock) {?>data-title="<?php echo $_smarty_tpl->tpl_vars['Variationswert']->value->cName;?>
"<?php } else { ?>title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'ampelRot'),$_smarty_tpl ) );?>
"data-title="<?php echo $_smarty_tpl->tpl_vars['Variationswert']->value->cName;?>
 - <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'ampelRot'),$_smarty_tpl ) );?>
"data-toggle="tooltip"data-stock="out-of-stock"<?php }
if ((isset($_smarty_tpl->tpl_vars['Variationswert']->value->oVariationsKombi))) {?>data-ref="<?php echo $_smarty_tpl->tpl_vars['Variationswert']->value->oVariationsKombi->kArtikel;?>
"<?php }?>><input type="radio" class="control-hidden" name="eigenschaftwert[<?php echo $_smarty_tpl->tpl_vars['Variation']->value->kEigenschaft;?>
]"id="<?php if ((isset($_smarty_tpl->tpl_vars['smallView']->value)) && $_smarty_tpl->tpl_vars['smallView']->value) {?>a-<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->kArtikel;
}?>vt<?php echo $_smarty_tpl->tpl_vars['Variationswert']->value->kEigenschaftWert;?>
"value="<?php echo $_smarty_tpl->tpl_vars['Variationswert']->value->kEigenschaftWert;?>
"<?php if ($_smarty_tpl->tpl_vars['bSelected']->value) {?>checked="checked"<?php }
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_Variationswerte']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_Variationswerte']->value['index'] : null) === 0 && !$_smarty_tpl->tpl_vars['showMatrix']->value) {?> required<?php }?>/><?php if ($_smarty_tpl->tpl_vars['hasImage']->value) {
$_smarty_tpl->_subTemplateRender('file:snippets/image.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sizes'=>'90px','item'=>$_smarty_tpl->tpl_vars['Variationswert']->value,'srcSize'=>'xs'), 0, true);
} else {
echo $_smarty_tpl->tpl_vars['Variationswert']->value->cName;
}
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_114453015260a38bbb1f2646_38810025', 'productdetails-variation-swatch-include-variation-value', $this->tplIndex);
?>
</label><?php $_block_repeat=false;
echo $_block_plugin38->render(array('class'=>'col-auto'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'productdetails-variation-swatch-inner'} */
/* {block 'productdetails-variation-swatch-outer'} */
class Block_2461695260a38bbb128659_99338875 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo mb_strtolower($_smarty_tpl->tpl_vars['Variation']->value->cTyp, 'utf-8');
$_prefixVariable21=ob_get_clean();
$_block_plugin37 = isset($_smarty_tpl->smarty->registered_plugins['block']['formrow'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['formrow'][0][0] : null;
if (!is_callable(array($_block_plugin37, 'render'))) {
throw new SmartyException('block tag \'formrow\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('formrow', array('class'=>"swatches ".$_prefixVariable21));
$_block_repeat=true;
echo $_block_plugin37->render(array('class'=>"swatches ".$_prefixVariable21), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Variation']->value->Werte, 'Variationswert', false, 'y', 'Variationswerte', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['Variationswert']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['y']->value => $_smarty_tpl->tpl_vars['Variationswert']->value) {
$_smarty_tpl->tpl_vars['Variationswert']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_Variationswerte']->value['index']++;
$_smarty_tpl->_assignInScope('bSelected', false);
$_smarty_tpl->_assignInScope('hasImage', !empty($_smarty_tpl->tpl_vars['Variationswert']->value->getImage(\JTL\Media\Image::SIZE_XS)) && strpos($_smarty_tpl->tpl_vars['Variationswert']->value->getImage(\JTL\Media\Image::SIZE_XS),(defined('BILD_KEIN_ARTIKELBILD_VORHANDEN') ? constant('BILD_KEIN_ARTIKELBILD_VORHANDEN') : null)) === false);
if ((isset($_smarty_tpl->tpl_vars['oVariationKombi_arr']->value[$_smarty_tpl->tpl_vars['Variationswert']->value->kEigenschaft]))) {
$_smarty_tpl->_assignInScope('bSelected', in_array($_smarty_tpl->tpl_vars['Variationswert']->value->kEigenschaftWert,$_smarty_tpl->tpl_vars['oVariationKombi_arr']->value[$_smarty_tpl->tpl_vars['Variationswert']->value->kEigenschaft]));
}
if ((isset($_smarty_tpl->tpl_vars['oEigenschaftWertEdit_arr']->value[$_smarty_tpl->tpl_vars['Variationswert']->value->kEigenschaft]))) {
$_smarty_tpl->_assignInScope('bSelected', ($_smarty_tpl->tpl_vars['Variationswert']->value->kEigenschaftWert == $_smarty_tpl->tpl_vars['oEigenschaftWertEdit_arr']->value[$_smarty_tpl->tpl_vars['Variationswert']->value->kEigenschaft]->kEigenschaftWert));
}
if (($_smarty_tpl->tpl_vars['Artikel']->value->kVaterArtikel > 0 || $_smarty_tpl->tpl_vars['Artikel']->value->nIstVater == 1) && $_smarty_tpl->tpl_vars['Artikel']->value->nVariationOhneFreifeldAnzahl == 1 && $_smarty_tpl->tpl_vars['Einstellungen']->value['global']['artikeldetails_variationswertlager'] == 3 && !empty($_smarty_tpl->tpl_vars['Artikel']->value->VariationenOhneFreifeld[$_smarty_tpl->tpl_vars['i']->value]->Werte[$_smarty_tpl->tpl_vars['y']->value]->nNichtLieferbar) && $_smarty_tpl->tpl_vars['Artikel']->value->VariationenOhneFreifeld[$_smarty_tpl->tpl_vars['i']->value]->Werte[$_smarty_tpl->tpl_vars['y']->value]->nNichtLieferbar == 1) {
} else {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_163958807760a38bbb1c4475_75810201', 'productdetails-variation-swatch-inner', $this->tplIndex);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_block_repeat=false;
echo $_block_plugin37->render(array('class'=>"swatches ".$_prefixVariable21), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'productdetails-variation-swatch-outer'} */
/* {block 'productdetails-variation-textswatch-include-variation-value'} */
class Block_209397059760a38bbb248911_16057401 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:productdetails/variation_value.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('hideVariationValue'=>true), 0, true);
}
}
/* {/block 'productdetails-variation-textswatch-include-variation-value'} */
/* {block 'productdetails-variation-textswatch-inner'} */
class Block_151001273660a38bbb21dae2_99087213 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_block_plugin40 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin40, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('class'=>'col-auto'));
$_block_repeat=true;
echo $_block_plugin40->render(array('class'=>'col-auto'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><label class="variation swatches swatches-text<?php if ($_smarty_tpl->tpl_vars['bSelected']->value) {?> active<?php }?> <?php if ($_smarty_tpl->tpl_vars['Variationswert']->value->notExists) {?>swatches-not-in-stock<?php } elseif (!$_smarty_tpl->tpl_vars['Variationswert']->value->inStock) {?>swatches-sold-out<?php }?>"data-type="swatch"data-original="<?php echo $_smarty_tpl->tpl_vars['Variationswert']->value->cName;?>
"data-key="<?php echo $_smarty_tpl->tpl_vars['Variationswert']->value->kEigenschaft;?>
"data-value="<?php echo $_smarty_tpl->tpl_vars['Variationswert']->value->kEigenschaftWert;?>
"for="<?php if ((isset($_smarty_tpl->tpl_vars['smallView']->value)) && $_smarty_tpl->tpl_vars['smallView']->value) {?>a-<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->kArtikel;
}?>vt<?php echo $_smarty_tpl->tpl_vars['Variationswert']->value->kEigenschaftWert;?>
"<?php if (!empty($_smarty_tpl->tpl_vars['Variationswert']->value->cBildPfadMini)) {?>data-list='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['prepare_image_details'][0], array( array('item'=>$_smarty_tpl->tpl_vars['Variationswert']->value,'json'=>true),$_smarty_tpl ) );?>
'<?php }
if ($_smarty_tpl->tpl_vars['Variationswert']->value->notExists) {?>title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'notAvailableInSelection'),$_smarty_tpl ) );?>
"data-title="<?php echo $_smarty_tpl->tpl_vars['Variationswert']->value->cName;?>
 - <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'notAvailableInSelection'),$_smarty_tpl ) );?>
"data-toggle="tooltip"<?php } elseif ($_smarty_tpl->tpl_vars['Variationswert']->value->inStock) {?>data-title="<?php echo $_smarty_tpl->tpl_vars['Variationswert']->value->cName;?>
"<?php } else { ?>title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'ampelRot'),$_smarty_tpl ) );?>
"data-title="<?php echo $_smarty_tpl->tpl_vars['Variationswert']->value->cName;?>
 - <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'ampelRot'),$_smarty_tpl ) );?>
"data-toggle="tooltip"data-stock="out-of-stock"<?php }
if ((isset($_smarty_tpl->tpl_vars['Variationswert']->value->oVariationsKombi))) {?>data-ref="<?php echo $_smarty_tpl->tpl_vars['Variationswert']->value->oVariationsKombi->kArtikel;?>
"<?php }?>><input type="radio" class="control-hidden" name="eigenschaftwert[<?php echo $_smarty_tpl->tpl_vars['Variation']->value->kEigenschaft;?>
]"id="<?php if ((isset($_smarty_tpl->tpl_vars['smallView']->value)) && $_smarty_tpl->tpl_vars['smallView']->value) {?>a-<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->kArtikel;
}?>vt<?php echo $_smarty_tpl->tpl_vars['Variationswert']->value->kEigenschaftWert;?>
"value="<?php echo $_smarty_tpl->tpl_vars['Variationswert']->value->kEigenschaftWert;?>
"<?php if ($_smarty_tpl->tpl_vars['bSelected']->value) {?>checked="checked"<?php }
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_Variationswerte']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_Variationswerte']->value['index'] : null) === 0 && !$_smarty_tpl->tpl_vars['showMatrix']->value) {?> required<?php }?>/><span class="label-variation"><?php echo $_smarty_tpl->tpl_vars['Variationswert']->value->cName;?>
</span><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_209397059760a38bbb248911_16057401', 'productdetails-variation-textswatch-include-variation-value', $this->tplIndex);
?>
</label><?php $_block_repeat=false;
echo $_block_plugin40->render(array('class'=>'col-auto'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'productdetails-variation-textswatch-inner'} */
/* {block 'productdetails-variation-textswatch-outer'} */
class Block_190839381760a38bbb1faad1_81076408 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo mb_strtolower($_smarty_tpl->tpl_vars['Variation']->value->cTyp, 'utf-8');
$_prefixVariable22=ob_get_clean();
$_block_plugin39 = isset($_smarty_tpl->smarty->registered_plugins['block']['formrow'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['formrow'][0][0] : null;
if (!is_callable(array($_block_plugin39, 'render'))) {
throw new SmartyException('block tag \'formrow\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('formrow', array('class'=>"swatches ".$_prefixVariable22));
$_block_repeat=true;
echo $_block_plugin39->render(array('class'=>"swatches ".$_prefixVariable22), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Variation']->value->Werte, 'Variationswert', false, 'y', 'Variationswerte', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['Variationswert']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['y']->value => $_smarty_tpl->tpl_vars['Variationswert']->value) {
$_smarty_tpl->tpl_vars['Variationswert']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_Variationswerte']->value['index']++;
$_smarty_tpl->_assignInScope('bSelected', false);
if ((isset($_smarty_tpl->tpl_vars['oVariationKombi_arr']->value[$_smarty_tpl->tpl_vars['Variationswert']->value->kEigenschaft]))) {
$_smarty_tpl->_assignInScope('bSelected', in_array($_smarty_tpl->tpl_vars['Variationswert']->value->kEigenschaftWert,$_smarty_tpl->tpl_vars['oVariationKombi_arr']->value[$_smarty_tpl->tpl_vars['Variationswert']->value->kEigenschaft]));
}
if ((isset($_smarty_tpl->tpl_vars['oEigenschaftWertEdit_arr']->value[$_smarty_tpl->tpl_vars['Variationswert']->value->kEigenschaft]))) {
$_smarty_tpl->_assignInScope('bSelected', ($_smarty_tpl->tpl_vars['Variationswert']->value->kEigenschaftWert == $_smarty_tpl->tpl_vars['oEigenschaftWertEdit_arr']->value[$_smarty_tpl->tpl_vars['Variationswert']->value->kEigenschaft]->kEigenschaftWert));
}
if (($_smarty_tpl->tpl_vars['Artikel']->value->kVaterArtikel > 0 || $_smarty_tpl->tpl_vars['Artikel']->value->nIstVater == 1) && $_smarty_tpl->tpl_vars['Artikel']->value->nVariationOhneFreifeldAnzahl == 1 && $_smarty_tpl->tpl_vars['Einstellungen']->value['global']['artikeldetails_variationswertlager'] == 3 && !empty($_smarty_tpl->tpl_vars['Artikel']->value->VariationenOhneFreifeld[$_smarty_tpl->tpl_vars['i']->value]->Werte[$_smarty_tpl->tpl_vars['y']->value]->nNichtLieferbar) && $_smarty_tpl->tpl_vars['Artikel']->value->VariationenOhneFreifeld[$_smarty_tpl->tpl_vars['i']->value]->Werte[$_smarty_tpl->tpl_vars['y']->value]->nNichtLieferbar == 1) {
} else {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_151001273660a38bbb21dae2_99087213', 'productdetails-variation-textswatch-inner', $this->tplIndex);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_block_repeat=false;
echo $_block_plugin39->render(array('class'=>"swatches ".$_prefixVariable22), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'productdetails-variation-textswatch-outer'} */
/* {block 'productdetails-variation-info-variation-text'} */
class Block_29531783860a38bbb251e72_34613081 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<label for="vari-<?php echo $_smarty_tpl->tpl_vars['Variation']->value->kEigenschaft;?>
" class="sr-only"><?php echo $_smarty_tpl->tpl_vars['Variation']->value->cName;?>
</label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('id'=>"vari-".((string)$_smarty_tpl->tpl_vars['Variation']->value->kEigenschaft),'name'=>(('eigenschaftwert[').($_smarty_tpl->tpl_vars['Variation']->value->kEigenschaft)).(']'),'value'=>(($tmp = $_smarty_tpl->tpl_vars['oEigenschaftWertEdit_arr']->value[$_smarty_tpl->tpl_vars['Variation']->value->kEigenschaft]->cEigenschaftWertNameLocalized ?? null)===null||$tmp==='' ? '' : $tmp),'data'=>array('key'=>$_smarty_tpl->tpl_vars['Variation']->value->kEigenschaft),'required'=>$_smarty_tpl->tpl_vars['Variation']->value->cTyp === 'PFLICHT-FREIFELD'),$_smarty_tpl ) );
}
}
/* {/block 'productdetails-variation-info-variation-text'} */
/* {block 'productdetails-variation-variation'} */
class Block_10283138160a38bbb078e04_56910127 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php ob_start();
if ($_smarty_tpl->tpl_vars['simple']->value) {
echo "simple";
} else {
echo "switch";
}
$_prefixVariable19=ob_get_clean();
$_block_plugin32 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin32, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('class'=>"variations ".$_prefixVariable19."-variations"));
$_block_repeat=true;
echo $_block_plugin32->render(array('class'=>"variations ".$_prefixVariable19."-variations"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_block_plugin33 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin33, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array());
$_block_repeat=true;
echo $_block_plugin33->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <dl>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Artikel']->value->{$_smarty_tpl->tpl_vars['VariationsSource']->value}, 'Variation', false, 'i', 'Variationen', array (
));
$_smarty_tpl->tpl_vars['Variation']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['Variation']->value) {
$_smarty_tpl->tpl_vars['Variation']->do_else = false;
?>

                    <dt><?php echo $_smarty_tpl->tpl_vars['Variation']->value->cName;?>
&nbsp;<?php if ($_smarty_tpl->tpl_vars['Variation']->value->cTyp === 'IMGSWATCHES') {?><span class="swatches-selected text-success" data-id="<?php echo $_smarty_tpl->tpl_vars['Variation']->value->kEigenschaft;?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Variation']->value->Werte, 'variationValue');
$_smarty_tpl->tpl_vars['variationValue']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variationValue']->value) {
$_smarty_tpl->tpl_vars['variationValue']->do_else = false;
if ((isset($_smarty_tpl->tpl_vars['oVariationKombi_arr']->value[$_smarty_tpl->tpl_vars['variationValue']->value->kEigenschaft])) && in_array($_smarty_tpl->tpl_vars['variationValue']->value->kEigenschaftWert,$_smarty_tpl->tpl_vars['oVariationKombi_arr']->value[$_smarty_tpl->tpl_vars['variationValue']->value->kEigenschaft])) {
echo $_smarty_tpl->tpl_vars['variationValue']->value->cName;
break 1;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></span><?php }?></dt><dd class="form-group text-left-util"><?php if ($_smarty_tpl->tpl_vars['Variation']->value->cTyp === 'SELECTBOX') {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_191754701260a38bbb093732_19250956', 'productdetails-variation-select-outer', $this->tplIndex);
} elseif ($_smarty_tpl->tpl_vars['Variation']->value->cTyp === 'RADIO') {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6434199060a38bbb0d6694_23365016', 'productdetails-variation-radio-outer', $this->tplIndex);
} elseif ($_smarty_tpl->tpl_vars['Variation']->value->cTyp === 'IMGSWATCHES') {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2461695260a38bbb128659_99338875', 'productdetails-variation-swatch-outer', $this->tplIndex);
} elseif ($_smarty_tpl->tpl_vars['Variation']->value->cTyp === 'TEXTSWATCHES') {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_190839381760a38bbb1faad1_81076408', 'productdetails-variation-textswatch-outer', $this->tplIndex);
} elseif ($_smarty_tpl->tpl_vars['Variation']->value->cTyp === 'FREIFELD' || $_smarty_tpl->tpl_vars['Variation']->value->cTyp === 'PFLICHT-FREIFELD') {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_29531783860a38bbb251e72_34613081', 'productdetails-variation-info-variation-text', $this->tplIndex);
}?></dd>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </dl>
                <?php $_block_repeat=false;
echo $_block_plugin33->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php $_block_repeat=false;
echo $_block_plugin32->render(array('class'=>"variations ".$_prefixVariable19."-variations"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php
}
}
/* {/block 'productdetails-variation-variation'} */
/* {block 'productdetails-variation'} */
class Block_208489193660a38bbb0689a1_83939414 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'productdetails-variation' => 
  array (
    0 => 'Block_208489193660a38bbb0689a1_83939414',
  ),
  'productdetails-variation-spinner' => 
  array (
    0 => 'Block_101895502460a38bbb073c94_70146744',
  ),
  'productdetails-variation-variation' => 
  array (
    0 => 'Block_10283138160a38bbb078e04_56910127',
  ),
  'productdetails-variation-select-outer' => 
  array (
    0 => 'Block_191754701260a38bbb093732_19250956',
  ),
  'productdetails-variation-select-inner' => 
  array (
    0 => 'Block_176199418860a38bbb0b4087_97560788',
  ),
  'productdetails-variation-select-include-variation-value' => 
  array (
    0 => 'Block_35566426160a38bbb0b4d19_56673634',
  ),
  'productdetails-variation-radio-outer' => 
  array (
    0 => 'Block_6434199060a38bbb0d6694_23365016',
  ),
  'productdetails-variation-radio-inner' => 
  array (
    0 => 'Block_123366435560a38bbb0f33d4_29000798',
  ),
  'productdetails-variation-radio-include-variation-value' => 
  array (
    0 => 'Block_59768282260a38bbb118b95_14505378',
  ),
  'productdetails-variation-swatch-outer' => 
  array (
    0 => 'Block_2461695260a38bbb128659_99338875',
  ),
  'productdetails-variation-swatch-inner' => 
  array (
    0 => 'Block_163958807760a38bbb1c4475_75810201',
  ),
  'productdetails-variation-swatch-include-variation-value' => 
  array (
    0 => 'Block_114453015260a38bbb1f2646_38810025',
  ),
  'productdetails-variation-textswatch-outer' => 
  array (
    0 => 'Block_190839381760a38bbb1faad1_81076408',
  ),
  'productdetails-variation-textswatch-inner' => 
  array (
    0 => 'Block_151001273660a38bbb21dae2_99087213',
  ),
  'productdetails-variation-textswatch-include-variation-value' => 
  array (
    0 => 'Block_209397059760a38bbb248911_16057401',
  ),
  'productdetails-variation-info-variation-text' => 
  array (
    0 => 'Block_29531783860a38bbb251e72_34613081',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ((isset($_smarty_tpl->tpl_vars['Artikel']->value->Variationen)) && count($_smarty_tpl->tpl_vars['Artikel']->value->Variationen) > 0 && !$_smarty_tpl->tpl_vars['showMatrix']->value) {?>
        <?php $_smarty_tpl->_assignInScope('VariationsSource', 'Variationen');?>
        <?php if ((isset($_smarty_tpl->tpl_vars['ohneFreifeld']->value)) && $_smarty_tpl->tpl_vars['ohneFreifeld']->value) {?>
            <?php $_smarty_tpl->_assignInScope('VariationsSource', 'VariationenOhneFreifeld');?>
        <?php }?>
        <?php $_smarty_tpl->_assignInScope('oVariationKombi_arr', $_smarty_tpl->tpl_vars['Artikel']->value->getChildVariations());?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_101895502460a38bbb073c94_70146744', 'productdetails-variation-spinner', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10283138160a38bbb078e04_56910127', 'productdetails-variation-variation', $this->tplIndex);
?>

    <?php }
}
}
/* {/block 'productdetails-variation'} */
}
