<?php
/* Smarty version 3.1.38, created on 2021-05-18 11:41:17
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\productdetails\warehouse.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a38bbde58884_27333072',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6da1fd602f7d7f6740b26edddf8d719a2a0c2d3b' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\productdetails\\warehouse.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a38bbde58884_27333072 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_126428336460a38bbddfc737_47829464', 'productdetails-warehouse');
?>

<?php }
/* {block 'productdetails-warehouse-detail-link'} */
class Block_184481352260a38bbde1da49_40161123 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_block_plugin45 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin45, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('no-gutters'=>true,'class'=>"product-stock-info row"));
$_block_repeat=true;
echo $_block_plugin45->render(array('no-gutters'=>true,'class'=>"product-stock-info row"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_block_plugin46 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin46, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array());
$_block_repeat=true;
echo $_block_plugin46->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php $_block_plugin47 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin47, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('class'=>"product-stock-info-button",'variant'=>"link",'data'=>array("toggle"=>"modal","target"=>"#warehouseAvailability")));
$_block_repeat=true;
echo $_block_plugin47->render(array('class'=>"product-stock-info-button",'variant'=>"link",'data'=>array("toggle"=>"modal","target"=>"#warehouseAvailability")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <span class="fas fa-map-marker-alt icon-mr-2"></span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'warehouseAvailability'),$_smarty_tpl ) );?>

                    <?php $_block_repeat=false;
echo $_block_plugin47->render(array('class'=>"product-stock-info-button",'variant'=>"link",'data'=>array("toggle"=>"modal","target"=>"#warehouseAvailability")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php $_block_repeat=false;
echo $_block_plugin46->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php $_block_repeat=false;
echo $_block_plugin45->render(array('no-gutters'=>true,'class'=>"product-stock-info row"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php
}
}
/* {/block 'productdetails-warehouse-detail-link'} */
/* {block 'productdetails-warehouse-modal-content-header'} */
class Block_110709199260a38bbde2ae80_75211385 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_block_plugin49 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin49, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('class'=>"warehouse-row"));
$_block_repeat=true;
echo $_block_plugin49->render(array('class'=>"warehouse-row"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php $_block_plugin50 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin50, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array());
$_block_repeat=true;
echo $_block_plugin50->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'warehouse'),$_smarty_tpl ) );?>
</strong>
                            <?php $_block_repeat=false;
echo $_block_plugin50->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php $_block_plugin51 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin51, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('class'=>"warehouse-right"));
$_block_repeat=true;
echo $_block_plugin51->render(array('class'=>"warehouse-right"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'status'),$_smarty_tpl ) );?>
</strong>
                            <?php $_block_repeat=false;
echo $_block_plugin51->render(array('class'=>"warehouse-right"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php $_block_repeat=false;
echo $_block_plugin49->render(array('class'=>"warehouse-row"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <hr>
                    <?php
}
}
/* {/block 'productdetails-warehouse-modal-content-header'} */
/* {block 'productdetails-warehouse-modal-content-items'} */
class Block_23478235260a38bbde32d72_92086874 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Artikel']->value->oWarenlager_arr, 'oWarenlager');
$_smarty_tpl->tpl_vars['oWarenlager']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oWarenlager']->value) {
$_smarty_tpl->tpl_vars['oWarenlager']->do_else = false;
?>
                            <?php $_block_plugin52 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin52, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('class'=>"warehouse-row"));
$_block_repeat=true;
echo $_block_plugin52->render(array('class'=>"warehouse-row"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php $_block_plugin53 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin53, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array());
$_block_repeat=true;
echo $_block_plugin53->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <strong><?php echo $_smarty_tpl->tpl_vars['oWarenlager']->value->getName();?>
</strong>
                                <?php $_block_repeat=false;
echo $_block_plugin53->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php $_block_plugin54 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin54, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('class'=>"warehouse-right"));
$_block_repeat=true;
echo $_block_plugin54->render(array('class'=>"warehouse-right"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <span class="signal_image">
                                         <?php if ($_smarty_tpl->tpl_vars['anzeige']->value !== 'nichts' && $_smarty_tpl->tpl_vars['oWarenlager']->value->getBackorderString($_smarty_tpl->tpl_vars['Artikel']->value) !== '' && ($_smarty_tpl->tpl_vars['Artikel']->value->cLagerKleinerNull === 'N' || $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_lieferantenbestand_anzeigen'] === 'U')) {?>
                                             <span class="status-1"><?php echo $_smarty_tpl->tpl_vars['oWarenlager']->value->getBackorderString($_smarty_tpl->tpl_vars['Artikel']->value);?>
</span>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['anzeige']->value === 'verfuegbarkeit' || $_smarty_tpl->tpl_vars['anzeige']->value === 'genau') {?>
                                            <span class="status-<?php echo $_smarty_tpl->tpl_vars['oWarenlager']->value->oLageranzeige->nStatus;?>
"><?php echo $_smarty_tpl->tpl_vars['oWarenlager']->value->oLageranzeige->cLagerhinweis[$_smarty_tpl->tpl_vars['anzeige']->value];?>
</span>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['anzeige']->value === 'ampel') {?>
                                            <span class="status-<?php echo $_smarty_tpl->tpl_vars['oWarenlager']->value->oLageranzeige->nStatus;?>
"><?php echo $_smarty_tpl->tpl_vars['oWarenlager']->value->oLageranzeige->AmpelText;?>
</span>
                                         <?php }?>
                                    </span>
                                <?php $_block_repeat=false;
echo $_block_plugin54->render(array('class'=>"warehouse-right"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php $_block_repeat=false;
echo $_block_plugin52->render(array('class'=>"warehouse-row"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <hr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php
}
}
/* {/block 'productdetails-warehouse-modal-content-items'} */
/* {block 'productdetails-warehouse-modal-content'} */
class Block_205645058960a38bbde2a249_91040371 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_110709199260a38bbde2ae80_75211385', 'productdetails-warehouse-modal-content-header', $this->tplIndex);
?>

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_23478235260a38bbde32d72_92086874', 'productdetails-warehouse-modal-content-items', $this->tplIndex);
?>

                <?php
}
}
/* {/block 'productdetails-warehouse-modal-content'} */
/* {block 'productdetails-warehouse-modal'} */
class Block_116386228360a38bbde261e1_77559504 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'warehouseAvailability'),$_smarty_tpl ) );
$_prefixVariable29=ob_get_clean();
$_block_plugin48 = isset($_smarty_tpl->smarty->registered_plugins['block']['modal'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['modal'][0][0] : null;
if (!is_callable(array($_block_plugin48, 'render'))) {
throw new SmartyException('block tag \'modal\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('modal', array('id'=>"warehouseAvailability",'title'=>$_prefixVariable29,'centered'=>true,'size'=>"lg",'class'=>"fade"));
$_block_repeat=true;
echo $_block_plugin48->render(array('id'=>"warehouseAvailability",'title'=>$_prefixVariable29,'centered'=>true,'size'=>"lg",'class'=>"fade"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205645058960a38bbde2a249_91040371', 'productdetails-warehouse-modal-content', $this->tplIndex);
?>

            <?php $_block_repeat=false;
echo $_block_plugin48->render(array('id'=>"warehouseAvailability",'title'=>$_prefixVariable29,'centered'=>true,'size'=>"lg",'class'=>"fade"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php
}
}
/* {/block 'productdetails-warehouse-modal'} */
/* {block 'productdetails-warehouse'} */
class Block_126428336460a38bbddfc737_47829464 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'productdetails-warehouse' => 
  array (
    0 => 'Block_126428336460a38bbddfc737_47829464',
  ),
  'productdetails-warehouse-detail-link' => 
  array (
    0 => 'Block_184481352260a38bbde1da49_40161123',
  ),
  'productdetails-warehouse-modal' => 
  array (
    0 => 'Block_116386228360a38bbde261e1_77559504',
  ),
  'productdetails-warehouse-modal-content' => 
  array (
    0 => 'Block_205645058960a38bbde2a249_91040371',
  ),
  'productdetails-warehouse-modal-content-header' => 
  array (
    0 => 'Block_110709199260a38bbde2ae80_75211385',
  ),
  'productdetails-warehouse-modal-content-items' => 
  array (
    0 => 'Block_23478235260a38bbde32d72_92086874',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_assignInScope('anzeige', $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikel_lagerbestandsanzeige']);?>
    <?php if ($_smarty_tpl->tpl_vars['anzeige']->value !== 'nichts' && (isset($_smarty_tpl->tpl_vars['Artikel']->value->oWarenlager_arr)) && count($_smarty_tpl->tpl_vars['Artikel']->value->oWarenlager_arr) > 1 && ($_smarty_tpl->tpl_vars['Artikel']->value->cLagerBeachten !== 'Y' || $_smarty_tpl->tpl_vars['Artikel']->value->cLagerKleinerNull === 'Y' || $_smarty_tpl->tpl_vars['Artikel']->value->fLagerbestand > 0 || $_smarty_tpl->tpl_vars['Artikel']->value->fZulauf > 0)) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_184481352260a38bbde1da49_40161123', 'productdetails-warehouse-detail-link', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_116386228360a38bbde261e1_77559504', 'productdetails-warehouse-modal', $this->tplIndex);
?>

    <?php }
}
}
/* {/block 'productdetails-warehouse'} */
}
