<?php
/* Smarty version 3.1.38, created on 2021-05-18 11:41:19
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\productdetails\basket.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a38bbfe75d87_69384553',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18aad88f8832d655b167f32855567160289a454e' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\productdetails\\basket.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a38bbfe75d87_69384553 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_152446793760a38bbfde9e57_06945289', 'productdetails-basket');
?>

<?php }
/* {block 'productdetails-basket-coming-soon'} */
class Block_23791147760a38bbfdf1ad4_60029903 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="<?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_erscheinende_kaeuflich'] === 'Y') {?>alert alert-warning coming_soon<?php }?> text-center-util">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'productAvailableFrom','section'=>'global'),$_smarty_tpl ) );?>
: <strong><?php echo $_smarty_tpl->tpl_vars['Artikel']->value->Erscheinungsdatum_de;?>
</strong>
                        <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_erscheinende_kaeuflich'] === 'Y' && $_smarty_tpl->tpl_vars['Artikel']->value->inWarenkorbLegbar == 1) {?>
                            (<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'preorderPossible','section'=>'global'),$_smarty_tpl ) );?>
)
                        <?php }?>
                    </div>
                <?php
}
}
/* {/block 'productdetails-basket-coming-soon'} */
/* {block 'productdetails-basket-alert-choose'} */
class Block_190043221460a38bbfdfcd67_99028053 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_block_plugin65 = isset($_smarty_tpl->smarty->registered_plugins['block']['alert'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['alert'][0][0] : null;
if (!is_callable(array($_block_plugin65, 'render'))) {
throw new SmartyException('block tag \'alert\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('alert', array('variation'=>"info",'class'=>"choose-variations"));
$_block_repeat=true;
echo $_block_plugin65->render(array('variation'=>"info",'class'=>"choose-variations"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'chooseVariations','section'=>'messages'),$_smarty_tpl ) );?>

                    <?php $_block_repeat=false;
echo $_block_plugin65->render(array('variation'=>"info",'class'=>"choose-variations"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php
}
}
/* {/block 'productdetails-basket-alert-choose'} */
/* {block 'productdetails-basket-quantity'} */
class Block_21149267160a38bbfe05039_14053451 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php $_block_plugin67 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin67, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'sm'=>6));
$_block_repeat=true;
echo $_block_plugin67->render(array('cols'=>12,'sm'=>6), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php $_block_plugin68 = isset($_smarty_tpl->smarty->registered_plugins['block']['inputgroup'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['inputgroup'][0][0] : null;
if (!is_callable(array($_block_plugin68, 'render'))) {
throw new SmartyException('block tag \'inputgroup\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inputgroup', array('id'=>"quantity-grp",'class'=>"form-counter choose_quantity"));
$_block_repeat=true;
echo $_block_plugin68->render(array('id'=>"quantity-grp",'class'=>"form-counter choose_quantity"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php $_block_plugin69 = isset($_smarty_tpl->smarty->registered_plugins['block']['inputgroupprepend'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['inputgroupprepend'][0][0] : null;
if (!is_callable(array($_block_plugin69, 'render'))) {
throw new SmartyException('block tag \'inputgroupprepend\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inputgroupprepend', array());
$_block_repeat=true;
echo $_block_plugin69->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'decreaseQuantity','section'=>'aria'),$_smarty_tpl ) );
$_prefixVariable30 = ob_get_clean();
$_block_plugin70 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin70, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('variant'=>'','data'=>array("count-down"=>''),'aria'=>array("label"=>$_prefixVariable30)));
$_block_repeat=true;
echo $_block_plugin70->render(array('variant'=>'','data'=>array("count-down"=>''),'aria'=>array("label"=>$_prefixVariable30)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                <span class="fas fa-minus"></span>
                                            <?php $_block_repeat=false;
echo $_block_plugin70->render(array('variant'=>'','data'=>array("count-down"=>''),'aria'=>array("label"=>$_prefixVariable30)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        <?php $_block_repeat=false;
echo $_block_plugin69->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        <?php ob_start();
if ($_smarty_tpl->tpl_vars['Artikel']->value->cTeilbar === 'Y' && $_smarty_tpl->tpl_vars['Artikel']->value->fAbnahmeintervall == 0) {
echo "text";
} else {
echo "number";
}
$_prefixVariable31=ob_get_clean();
ob_start();
if ($_smarty_tpl->tpl_vars['Artikel']->value->fMindestbestellmenge) {
echo (string)$_smarty_tpl->tpl_vars['Artikel']->value->fMindestbestellmenge;
} else {
echo "0";
}
$_prefixVariable32=ob_get_clean();
ob_start();
if ($_smarty_tpl->tpl_vars['Artikel']->value->fAbnahmeintervall > 0) {
echo (string)$_smarty_tpl->tpl_vars['Artikel']->value->fAbnahmeintervall;
}
$_prefixVariable33=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'quantity'),$_smarty_tpl ) );
$_prefixVariable34=ob_get_clean();
ob_start();
if ($_smarty_tpl->tpl_vars['Artikel']->value->fAbnahmeintervall > 0 || $_smarty_tpl->tpl_vars['Artikel']->value->fMindestbestellmenge > 1) {
if ($_smarty_tpl->tpl_vars['Artikel']->value->fMindestbestellmenge > $_smarty_tpl->tpl_vars['Artikel']->value->fAbnahmeintervall) {
echo (string)$_smarty_tpl->tpl_vars['Artikel']->value->fMindestbestellmenge;
} else {
echo (string)$_smarty_tpl->tpl_vars['Artikel']->value->fAbnahmeintervall;
}
} else {
echo "1";
}
$_prefixVariable35=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getDecimalLength'][0], array( array('quantity'=>$_smarty_tpl->tpl_vars['Artikel']->value->fAbnahmeintervall),$_smarty_tpl ) );
$_prefixVariable36 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>$_prefixVariable31,'min'=>$_prefixVariable32,'max'=>(($tmp = $_smarty_tpl->tpl_vars['Artikel']->value->FunktionsAttribute[(defined('FKT_ATTRIBUT_MAXBESTELLMENGE') ? constant('FKT_ATTRIBUT_MAXBESTELLMENGE') : null)] ?? null)===null||$tmp==='' ? '' : $tmp),'required'=>($_smarty_tpl->tpl_vars['Artikel']->value->fAbnahmeintervall > 0),'step'=>$_prefixVariable33,'id'=>"quantity",'class'=>"quantity",'name'=>"anzahl",'aria'=>array("label"=>$_prefixVariable34),'value'=>$_prefixVariable35,'data'=>array("decimals"=>$_prefixVariable36)),$_smarty_tpl ) );?>

                                        <?php $_block_plugin71 = isset($_smarty_tpl->smarty->registered_plugins['block']['inputgroupappend'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['inputgroupappend'][0][0] : null;
if (!is_callable(array($_block_plugin71, 'render'))) {
throw new SmartyException('block tag \'inputgroupappend\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inputgroupappend', array());
$_block_repeat=true;
echo $_block_plugin71->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php if ($_smarty_tpl->tpl_vars['Artikel']->value->cEinheit) {?>
                                                <?php $_block_plugin72 = isset($_smarty_tpl->smarty->registered_plugins['block']['inputgrouptext'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['inputgrouptext'][0][0] : null;
if (!is_callable(array($_block_plugin72, 'render'))) {
throw new SmartyException('block tag \'inputgrouptext\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inputgrouptext', array('class'=>"unit form-control"));
$_block_repeat=true;
echo $_block_plugin72->render(array('class'=>"unit form-control"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <?php echo $_smarty_tpl->tpl_vars['Artikel']->value->cEinheit;?>

                                                <?php $_block_repeat=false;
echo $_block_plugin72->render(array('class'=>"unit form-control"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            <?php }?>
                                            <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'increaseQuantity','section'=>'aria'),$_smarty_tpl ) );
$_prefixVariable37 = ob_get_clean();
$_block_plugin73 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin73, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('variant'=>'','data'=>array("count-up"=>''),'aria'=>array("label"=>$_prefixVariable37)));
$_block_repeat=true;
echo $_block_plugin73->render(array('variant'=>'','data'=>array("count-up"=>''),'aria'=>array("label"=>$_prefixVariable37)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                <span class="fas fa-plus"></span>
                                            <?php $_block_repeat=false;
echo $_block_plugin73->render(array('variant'=>'','data'=>array("count-up"=>''),'aria'=>array("label"=>$_prefixVariable37)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        <?php $_block_repeat=false;
echo $_block_plugin71->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    <?php $_block_repeat=false;
echo $_block_plugin68->render(array('id'=>"quantity-grp",'class'=>"form-counter choose_quantity"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php $_block_repeat=false;
echo $_block_plugin67->render(array('cols'=>12,'sm'=>6), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php
}
}
/* {/block 'productdetails-basket-quantity'} */
/* {block 'productdetails-basket-add-to-cart'} */
class Block_178532768260a38bbfe34367_63086360 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php $_block_plugin74 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin74, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'sm'=>6));
$_block_repeat=true;
echo $_block_plugin74->render(array('cols'=>12,'sm'=>6), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'addToCart'),$_smarty_tpl ) );
$_prefixVariable38=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'addToCart'),$_smarty_tpl ) );
$_prefixVariable39=ob_get_clean();
$_block_plugin75 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin75, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('aria'=>array("label"=>$_prefixVariable38),'block'=>true,'name'=>"inWarenkorb",'type'=>"submit",'value'=>$_prefixVariable39,'variant'=>"primary",'disabled'=>$_smarty_tpl->tpl_vars['Artikel']->value->bHasKonfig && !(($tmp = $_smarty_tpl->tpl_vars['isConfigCorrect']->value ?? null)===null||$tmp==='' ? false : $tmp),'class'=>"js-cfg-validate"));
$_block_repeat=true;
echo $_block_plugin75->render(array('aria'=>array("label"=>$_prefixVariable38),'block'=>true,'name'=>"inWarenkorb",'type'=>"submit",'value'=>$_prefixVariable39,'variant'=>"primary",'disabled'=>$_smarty_tpl->tpl_vars['Artikel']->value->bHasKonfig && !(($tmp = $_smarty_tpl->tpl_vars['isConfigCorrect']->value ?? null)===null||$tmp==='' ? false : $tmp),'class'=>"js-cfg-validate"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <span class="btn-basket-check">
                                            <span>
                                                <?php if ((isset($_smarty_tpl->tpl_vars['kEditKonfig']->value))) {?>
                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'applyChanges'),$_smarty_tpl ) );?>

                                                <?php } else { ?>
                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'addToCart'),$_smarty_tpl ) );?>

                                                <?php }?>
                                            </span> <i class="fas fa-shopping-cart"></i>
                                        </span>
                                        <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                            <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"/>
                                        </svg>
                                    <?php $_block_repeat=false;
echo $_block_plugin75->render(array('aria'=>array("label"=>$_prefixVariable38),'block'=>true,'name'=>"inWarenkorb",'type'=>"submit",'value'=>$_prefixVariable39,'variant'=>"primary",'disabled'=>$_smarty_tpl->tpl_vars['Artikel']->value->bHasKonfig && !(($tmp = $_smarty_tpl->tpl_vars['isConfigCorrect']->value ?? null)===null||$tmp==='' ? false : $tmp),'class'=>"js-cfg-validate"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php $_block_repeat=false;
echo $_block_plugin74->render(array('cols'=>12,'sm'=>6), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php
}
}
/* {/block 'productdetails-basket-add-to-cart'} */
/* {block 'productdetails-basket-form-inline'} */
class Block_196570007760a38bbfe03406_37700847 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_block_plugin66 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin66, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('class'=>"basket-form-inline"));
$_block_repeat=true;
echo $_block_plugin66->render(array('class'=>"basket-form-inline"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21149267160a38bbfe05039_14053451', 'productdetails-basket-quantity', $this->tplIndex);
?>

                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_178532768260a38bbfe34367_63086360', 'productdetails-basket-add-to-cart', $this->tplIndex);
?>

                        <?php $_block_repeat=false;
echo $_block_plugin66->render(array('class'=>"basket-form-inline"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php
}
}
/* {/block 'productdetails-basket-form-inline'} */
/* {block 'productdetails-basket-alert-purchase-info'} */
class Block_192757813360a38bbfe4f879_74492618 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\includes\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

                    <?php $_block_plugin76 = isset($_smarty_tpl->smarty->registered_plugins['block']['alert'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['alert'][0][0] : null;
if (!is_callable(array($_block_plugin76, 'render'))) {
throw new SmartyException('block tag \'alert\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('alert', array('variant'=>"info",'class'=>"purchase-info"));
$_block_repeat=true;
echo $_block_plugin76->render(array('variant'=>"info",'class'=>"purchase-info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php $_smarty_tpl->_assignInScope('units', $_smarty_tpl->tpl_vars['Artikel']->value->cEinheit);?>
                        <?php if (empty($_smarty_tpl->tpl_vars['Artikel']->value->cEinheit) || call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'count_characters' ][ 0 ], array( $_smarty_tpl->tpl_vars['Artikel']->value->cEinheit )) == 0) {?>
                            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'units','section'=>'productDetails','assign'=>'units'),$_smarty_tpl ) );?>
</p>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['Artikel']->value->fMindestbestellmenge > 1 || ($_smarty_tpl->tpl_vars['Artikel']->value->fMindestbestellmenge > 0 && $_smarty_tpl->tpl_vars['Artikel']->value->cTeilbar === 'Y')) {?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'minimumPurchase','section'=>'productDetails','assign'=>'minimumPurchase'),$_smarty_tpl ) );?>

                            <p><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['minimumPurchase']->value,"%d",$_smarty_tpl->tpl_vars['Artikel']->value->fMindestbestellmenge),"%s",$_smarty_tpl->tpl_vars['units']->value);?>
</p>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['Artikel']->value->fAbnahmeintervall > 0 && $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_artikelintervall_anzeigen'] === 'Y') {?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'takeHeedOfInterval','section'=>'productDetails','assign'=>'takeHeedOfInterval'),$_smarty_tpl ) );?>

                            <p><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['takeHeedOfInterval']->value,"%d",$_smarty_tpl->tpl_vars['Artikel']->value->fAbnahmeintervall),"%s",$_smarty_tpl->tpl_vars['units']->value);?>
</p>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['Artikel']->value->cTeilbar === 'Y') {?>
                            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'integralQuantities','section'=>'productDetails'),$_smarty_tpl ) );?>
</p>
                        <?php }?>
                        <?php if ((($tmp = $_smarty_tpl->tpl_vars['Artikel']->value->FunktionsAttribute[(defined('FKT_ATTRIBUT_MAXBESTELLMENGE') ? constant('FKT_ATTRIBUT_MAXBESTELLMENGE') : null)] ?? null)===null||$tmp==='' ? 0 : $tmp) > 0) {?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'maximalPurchase','section'=>'productDetails','assign'=>'maximalPurchase'),$_smarty_tpl ) );?>

                            <p><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['maximalPurchase']->value,"%d",$_smarty_tpl->tpl_vars['Artikel']->value->FunktionsAttribute[(defined('FKT_ATTRIBUT_MAXBESTELLMENGE') ? constant('FKT_ATTRIBUT_MAXBESTELLMENGE') : null)]),"%s",$_smarty_tpl->tpl_vars['units']->value);?>
</p>
                        <?php }?>
                    <?php $_block_repeat=false;
echo $_block_plugin76->render(array('variant'=>"info",'class'=>"purchase-info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php
}
}
/* {/block 'productdetails-basket-alert-purchase-info'} */
/* {block 'productdetails-basket'} */
class Block_152446793760a38bbfde9e57_06945289 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'productdetails-basket' => 
  array (
    0 => 'Block_152446793760a38bbfde9e57_06945289',
  ),
  'productdetails-basket-coming-soon' => 
  array (
    0 => 'Block_23791147760a38bbfdf1ad4_60029903',
  ),
  'productdetails-basket-alert-choose' => 
  array (
    0 => 'Block_190043221460a38bbfdfcd67_99028053',
  ),
  'productdetails-basket-form-inline' => 
  array (
    0 => 'Block_196570007760a38bbfe03406_37700847',
  ),
  'productdetails-basket-quantity' => 
  array (
    0 => 'Block_21149267160a38bbfe05039_14053451',
  ),
  'productdetails-basket-add-to-cart' => 
  array (
    0 => 'Block_178532768260a38bbfe34367_63086360',
  ),
  'productdetails-basket-alert-purchase-info' => 
  array (
    0 => 'Block_192757813360a38bbfe4f879_74492618',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (($_smarty_tpl->tpl_vars['Artikel']->value->inWarenkorbLegbar == 1 || $_smarty_tpl->tpl_vars['Artikel']->value->nErscheinendesProdukt == 1) || $_smarty_tpl->tpl_vars['Artikel']->value->Variationen) {?>
        <div id="add-to-cart" class="product-buy<?php if ($_smarty_tpl->tpl_vars['Artikel']->value->nErscheinendesProdukt) {?> coming_soon<?php }?>">
            <?php if ($_smarty_tpl->tpl_vars['Artikel']->value->nErscheinendesProdukt) {?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_23791147760a38bbfdf1ad4_60029903', 'productdetails-basket-coming-soon', $this->tplIndex);
?>

            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['Artikel']->value->nIstVater && $_smarty_tpl->tpl_vars['Artikel']->value->kVaterArtikel == 0) {?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_190043221460a38bbfdfcd67_99028053', 'productdetails-basket-alert-choose', $this->tplIndex);
?>

            <?php } elseif ($_smarty_tpl->tpl_vars['Artikel']->value->inWarenkorbLegbar == 1) {?>
                <?php if (!$_smarty_tpl->tpl_vars['showMatrix']->value) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_196570007760a38bbfe03406_37700847', 'productdetails-basket-form-inline', $this->tplIndex);
?>

                <?php }?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['Artikel']->value->inWarenkorbLegbar == 1 && ($_smarty_tpl->tpl_vars['Artikel']->value->fMindestbestellmenge > 1 || ($_smarty_tpl->tpl_vars['Artikel']->value->fMindestbestellmenge > 0 && $_smarty_tpl->tpl_vars['Artikel']->value->cTeilbar === 'Y') || ($_smarty_tpl->tpl_vars['Artikel']->value->fAbnahmeintervall > 0 && $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_artikelintervall_anzeigen'] === 'Y') || $_smarty_tpl->tpl_vars['Artikel']->value->cTeilbar === 'Y' || (($tmp = $_smarty_tpl->tpl_vars['Artikel']->value->FunktionsAttribute[(defined('FKT_ATTRIBUT_MAXBESTELLMENGE') ? constant('FKT_ATTRIBUT_MAXBESTELLMENGE') : null)] ?? null)===null||$tmp==='' ? 0 : $tmp) > 0)) {?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_192757813360a38bbfe4f879_74492618', 'productdetails-basket-alert-purchase-info', $this->tplIndex);
?>

            <?php }?>
        </div>
    <?php }
}
}
/* {/block 'productdetails-basket'} */
}
