<?php
/* Smarty version 3.1.38, created on 2021-05-04 11:46:21
  from 'C:\xampp\htdocs\shop\templates\NOVA\basket\cart_dropdown.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_609117ed5acb48_16734661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa1d0cead85a5485933e4945c8354e20061b13c8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\templates\\NOVA\\basket\\cart_dropdown.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/image.tpl' => 1,
  ),
),false)) {
function content_609117ed5acb48_16734661 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1976870382609117ed5406f1_80937336', 'basket-cart-dropdown');
?>

<?php }
/* {block 'basket-cart-dropdown-cart-item-item-image'} */
class Block_1113577111609117ed54a321_79309944 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                            <?php $_block_plugin40 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin40, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('class'=>"col-auto"));
$_block_repeat=true;
echo $_block_plugin40->render(array('class'=>"col-auto"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                                <?php $_block_plugin41 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin41, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['oPosition']->value->Artikel->cURLFull,'title'=>htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trans' ][ 0 ], array( $_smarty_tpl->tpl_vars['oPosition']->value->cName )), ENT_QUOTES, 'utf-8', true)));
$_block_repeat=true;
echo $_block_plugin41->render(array('href'=>$_smarty_tpl->tpl_vars['oPosition']->value->Artikel->cURLFull,'title'=>htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trans' ][ 0 ], array( $_smarty_tpl->tpl_vars['oPosition']->value->cName )), ENT_QUOTES, 'utf-8', true)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                                    <?php $_smarty_tpl->_subTemplateRender('file:snippets/image.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('fluid'=>false,'item'=>$_smarty_tpl->tpl_vars['oPosition']->value->Artikel,'square'=>false,'srcSize'=>'xs','sizes'=>'45px','class'=>'img-sm'), 0, true);
?>
                                                                <?php $_block_repeat=false;
echo $_block_plugin41->render(array('href'=>$_smarty_tpl->tpl_vars['oPosition']->value->Artikel->cURLFull,'title'=>htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trans' ][ 0 ], array( $_smarty_tpl->tpl_vars['oPosition']->value->cName )), ENT_QUOTES, 'utf-8', true)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                            <?php $_block_repeat=false;
echo $_block_plugin40->render(array('class'=>"col-auto"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                        <?php
}
}
/* {/block 'basket-cart-dropdown-cart-item-item-image'} */
/* {block 'basket-cart-dropdown-cart-item-item-link'} */
class Block_504041349609117ed5517d7_55552526 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                            <?php $_block_plugin42 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin42, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('class'=>"col-auto"));
$_block_repeat=true;
echo $_block_plugin42->render(array('class'=>"col-auto"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                                <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'replace_delim' ][ 0 ], array( $_smarty_tpl->tpl_vars['oPosition']->value->nAnzahl ));?>
x
                                                            <?php $_block_repeat=false;
echo $_block_plugin42->render(array('class'=>"col-auto"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                            <?php $_block_plugin43 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin43, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array());
$_block_repeat=true;
echo $_block_plugin43->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                                <?php $_block_plugin44 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin44, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['oPosition']->value->Artikel->cURLFull,'title'=>htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trans' ][ 0 ], array( $_smarty_tpl->tpl_vars['oPosition']->value->cName )), ENT_QUOTES, 'utf-8', true)));
$_block_repeat=true;
echo $_block_plugin44->render(array('href'=>$_smarty_tpl->tpl_vars['oPosition']->value->Artikel->cURLFull,'title'=>htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trans' ][ 0 ], array( $_smarty_tpl->tpl_vars['oPosition']->value->cName )), ENT_QUOTES, 'utf-8', true)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                                    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trans' ][ 0 ], array( $_smarty_tpl->tpl_vars['oPosition']->value->cName ));?>

                                                                <?php $_block_repeat=false;
echo $_block_plugin44->render(array('href'=>$_smarty_tpl->tpl_vars['oPosition']->value->Artikel->cURLFull,'title'=>htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trans' ][ 0 ], array( $_smarty_tpl->tpl_vars['oPosition']->value->cName )), ENT_QUOTES, 'utf-8', true)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                            <?php $_block_repeat=false;
echo $_block_plugin43->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                        <?php
}
}
/* {/block 'basket-cart-dropdown-cart-item-item-link'} */
/* {block 'basket-cart-dropdown-cart-item-item-price'} */
class Block_1759790325609117ed55d6d7_98984652 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                    <td class="text-right-util text-nowrap-util">
                                                        <?php if ($_smarty_tpl->tpl_vars['oPosition']->value->istKonfigVater()) {?>
                                                            <?php echo $_smarty_tpl->tpl_vars['oPosition']->value->cKonfigpreisLocalized[$_smarty_tpl->tpl_vars['NettoPreise']->value][$_SESSION['cWaehrungName']];?>

                                                        <?php } else { ?>
                                                            <?php echo $_smarty_tpl->tpl_vars['oPosition']->value->cEinzelpreisLocalized[$_smarty_tpl->tpl_vars['NettoPreise']->value][$_SESSION['cWaehrungName']];?>

                                                        <?php }?>
                                                    </td>
                                                <?php
}
}
/* {/block 'basket-cart-dropdown-cart-item-item-price'} */
/* {block 'basket-cart-dropdown-cart-item-no-item-count'} */
class Block_1090169392609117ed563ef7_35356739 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                    <td>
                                                        <?php $_block_plugin45 = isset($_smarty_tpl->smarty->registered_plugins['block']['formrow'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['formrow'][0][0] : null;
if (!is_callable(array($_block_plugin45, 'render'))) {
throw new SmartyException('block tag \'formrow\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('formrow', array());
$_block_repeat=true;
echo $_block_plugin45->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                            <?php $_block_plugin46 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin46, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('class'=>"col-auto"));
$_block_repeat=true;
echo $_block_plugin46->render(array('class'=>"col-auto"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo $_block_plugin46->render(array('class'=>"col-auto"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                            <?php $_block_plugin47 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin47, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('class'=>"col-auto"));
$_block_repeat=true;
echo $_block_plugin47->render(array('class'=>"col-auto"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                                <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'replace_delim' ][ 0 ], array( $_smarty_tpl->tpl_vars['oPosition']->value->nAnzahl ));?>
x
                                                            <?php $_block_repeat=false;
echo $_block_plugin47->render(array('class'=>"col-auto"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                            <?php $_block_plugin48 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin48, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array());
$_block_repeat=true;
echo $_block_plugin48->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                                <?php echo mb_convert_encoding(htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trans' ][ 0 ], array( $_smarty_tpl->tpl_vars['oPosition']->value->cName )), ENT_QUOTES, 'utf-8', true), "HTML-ENTITIES", 'utf-8');?>

                                                            <?php $_block_repeat=false;
echo $_block_plugin48->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                        <?php $_block_repeat=false;
echo $_block_plugin45->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                    </td>
                                                <?php
}
}
/* {/block 'basket-cart-dropdown-cart-item-no-item-count'} */
/* {block 'basket-cart-dropdown-cart-item-noitem-price'} */
class Block_836298089609117ed56c3d2_11259082 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                    <td class="text-right-util text-nowrap-util">
                                                        <?php echo $_smarty_tpl->tpl_vars['oPosition']->value->cEinzelpreisLocalized[$_smarty_tpl->tpl_vars['NettoPreise']->value][$_SESSION['cWaehrungName']];?>

                                                    </td>
                                                <?php
}
}
/* {/block 'basket-cart-dropdown-cart-item-noitem-price'} */
/* {block 'basket-cart-dropdown-cart-item'} */
class Block_2147285167609117ed543e09_78530022 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_SESSION['Warenkorb']->PositionenArr, 'oPosition');
$_smarty_tpl->tpl_vars['oPosition']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oPosition']->value) {
$_smarty_tpl->tpl_vars['oPosition']->do_else = false;
?>
                                    <?php if (!$_smarty_tpl->tpl_vars['oPosition']->value->istKonfigKind()) {?>
                                        <?php if ($_smarty_tpl->tpl_vars['oPosition']->value->nPosTyp == C_WARENKORBPOS_TYP_ARTIKEL || $_smarty_tpl->tpl_vars['oPosition']->value->nPosTyp == C_WARENKORBPOS_TYP_GRATISGESCHENK) {?>
                                            <tr>
                                                <td>
                                                    <?php $_block_plugin39 = isset($_smarty_tpl->smarty->registered_plugins['block']['formrow'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['formrow'][0][0] : null;
if (!is_callable(array($_block_plugin39, 'render'))) {
throw new SmartyException('block tag \'formrow\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('formrow', array());
$_block_repeat=true;
echo $_block_plugin39->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1113577111609117ed54a321_79309944', 'basket-cart-dropdown-cart-item-item-image', $this->tplIndex);
?>

                                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_504041349609117ed5517d7_55552526', 'basket-cart-dropdown-cart-item-item-link', $this->tplIndex);
?>

                                                    <?php $_block_repeat=false;
echo $_block_plugin39->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                </td>
                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1759790325609117ed55d6d7_98984652', 'basket-cart-dropdown-cart-item-item-price', $this->tplIndex);
?>

                                            </tr>
                                        <?php } else { ?>
                                            <tr>
                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1090169392609117ed563ef7_35356739', 'basket-cart-dropdown-cart-item-no-item-count', $this->tplIndex);
?>

                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_836298089609117ed56c3d2_11259082', 'basket-cart-dropdown-cart-item-noitem-price', $this->tplIndex);
?>

                                            </tr>
                                        <?php }?>
                                    <?php }?>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php
}
}
/* {/block 'basket-cart-dropdown-cart-item'} */
/* {block 'basket-cart-dropdown-cart-item-net'} */
class Block_510852053609117ed571ff3_75834545 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <li class="cart-dropdown-total-item">
                                        <?php if (empty($_SESSION['Versandart'])) {?>
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'subtotal','section'=>'account data'),$_smarty_tpl ) );?>

                                        <?php } else { ?>
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'totalSum'),$_smarty_tpl ) );?>

                                        <?php }?> (<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'net'),$_smarty_tpl ) );?>
) <span class="cart-dropdown-total-item-price"><?php echo $_smarty_tpl->tpl_vars['WarensummeLocalized']->value[$_smarty_tpl->tpl_vars['NettoPreise']->value];?>
</span>
                                    </li>
                                <?php
}
}
/* {/block 'basket-cart-dropdown-cart-item-net'} */
/* {block 'basket-cart-dropdown-cart-item-tax'} */
class Block_1445585722609117ed57a903_97346430 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Steuerpositionen']->value, 'Steuerposition');
$_smarty_tpl->tpl_vars['Steuerposition']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Steuerposition']->value) {
$_smarty_tpl->tpl_vars['Steuerposition']->do_else = false;
?>
                                        <li class="cart-dropdown-total-item">
                                            <?php echo $_smarty_tpl->tpl_vars['Steuerposition']->value->cName;?>

                                            <span class="cart-dropdown-total-item-price"><?php echo $_smarty_tpl->tpl_vars['Steuerposition']->value->cPreisLocalized;?>
</span>
                                        </li>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php
}
}
/* {/block 'basket-cart-dropdown-cart-item-tax'} */
/* {block 'basket-cart-dropdown-cart-item-total'} */
class Block_2098080860609117ed57fa54_02802305 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <li class="font-weight-bold-util">
                                    <?php if (empty($_SESSION['Versandart'])) {?>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'subtotal','section'=>'account data'),$_smarty_tpl ) );?>

                                    <?php } else { ?>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'totalSum'),$_smarty_tpl ) );?>

                                    <?php }?>: <span class="cart-dropdown-total-item-price"><?php echo $_smarty_tpl->tpl_vars['WarensummeLocalized']->value[0];?>
</span>
                                </li>
                            <?php
}
}
/* {/block 'basket-cart-dropdown-cart-item-total'} */
/* {block 'basket-cart-dropdown-cart-item-favourable-shipping'} */
class Block_1406672139609117ed584be9_65845742 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php if ($_smarty_tpl->tpl_vars['favourableShippingString']->value !== '') {?>
                                    <li class="cart-dropdown-total-item"><?php echo $_smarty_tpl->tpl_vars['favourableShippingString']->value;?>
</li>
                                <?php }?>
                            <?php
}
}
/* {/block 'basket-cart-dropdown-cart-item-favourable-shipping'} */
/* {block 'basket-cart-dropdown-total'} */
class Block_833080856609117ed570d17_41699565 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <ul class="list-unstyled">
                            <?php if ($_smarty_tpl->tpl_vars['NettoPreise']->value) {?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_510852053609117ed571ff3_75834545', 'basket-cart-dropdown-cart-item-net', $this->tplIndex);
?>

                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_steuerpos_anzeigen'] !== 'N' && (isset($_smarty_tpl->tpl_vars['Steuerpositionen']->value)) && count($_smarty_tpl->tpl_vars['Steuerpositionen']->value) > 0) {?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1445585722609117ed57a903_97346430', 'basket-cart-dropdown-cart-item-tax', $this->tplIndex);
?>

                            <?php }?>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2098080860609117ed57fa54_02802305', 'basket-cart-dropdown-cart-item-total', $this->tplIndex);
?>

                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1406672139609117ed584be9_65845742', 'basket-cart-dropdown-cart-item-favourable-shipping', $this->tplIndex);
?>

                        </ul>
                    <?php
}
}
/* {/block 'basket-cart-dropdown-total'} */
/* {block 'basket-cart-dropdown-buttons'} */
class Block_1004076372609117ed587e80_54116172 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_block_plugin49 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin49, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('class'=>"cart-dropdown-buttons"));
$_block_repeat=true;
echo $_block_plugin49->render(array('class'=>"cart-dropdown-buttons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php $_block_plugin50 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin50, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'lg'=>6));
$_block_repeat=true;
echo $_block_plugin50->render(array('cols'=>12,'lg'=>6), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'bestellvorgang.php'),$_smarty_tpl ) );
$_prefixVariable38=ob_get_clean();
$_block_plugin51 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin51, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('variant'=>"outline-primary",'type'=>"link",'block'=>true,'size'=>"sm",'href'=>$_prefixVariable38."?wk=1",'class'=>"cart-dropdown-next"));
$_block_repeat=true;
echo $_block_plugin51->render(array('variant'=>"outline-primary",'type'=>"link",'block'=>true,'size'=>"sm",'href'=>$_prefixVariable38."?wk=1",'class'=>"cart-dropdown-next"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'nextStepCheckout','section'=>'checkout'),$_smarty_tpl ) );?>

                                <?php $_block_repeat=false;
echo $_block_plugin51->render(array('variant'=>"outline-primary",'type'=>"link",'block'=>true,'size'=>"sm",'href'=>$_prefixVariable38."?wk=1",'class'=>"cart-dropdown-next"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php $_block_repeat=false;
echo $_block_plugin50->render(array('cols'=>12,'lg'=>6), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php $_block_plugin52 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin52, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'lg'=>6));
$_block_repeat=true;
echo $_block_plugin52->render(array('cols'=>12,'lg'=>6), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'gotoBasket'),$_smarty_tpl ) );
$_prefixVariable39=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'warenkorb.php'),$_smarty_tpl ) );
$_prefixVariable40=ob_get_clean();
$_block_plugin53 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin53, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('variant'=>"primary",'type'=>"link",'block'=>true,'size'=>"sm",'title'=>$_prefixVariable39,'href'=>$_prefixVariable40));
$_block_repeat=true;
echo $_block_plugin53->render(array('variant'=>"primary",'type'=>"link",'block'=>true,'size'=>"sm",'title'=>$_prefixVariable39,'href'=>$_prefixVariable40), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'gotoBasket'),$_smarty_tpl ) );?>

                                <?php $_block_repeat=false;
echo $_block_plugin53->render(array('variant'=>"primary",'type'=>"link",'block'=>true,'size'=>"sm",'title'=>$_prefixVariable39,'href'=>$_prefixVariable40), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php $_block_repeat=false;
echo $_block_plugin52->render(array('cols'=>12,'lg'=>6), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php $_block_repeat=false;
echo $_block_plugin49->render(array('class'=>"cart-dropdown-buttons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php
}
}
/* {/block 'basket-cart-dropdown-buttons'} */
/* {block 'basket-cart-dropdown-shipping-free-hint'} */
class Block_1601600391609117ed59c301_70604629 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <hr>
                            <ul class="cart-dropdown-shipping-notice list-icons font-size-sm">
                                <li>
                                    <a class="popup"
                                       href="<?php if (!empty($_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value) && (isset($_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_VERSAND') ? constant('LINKTYP_VERSAND') : null)]))) {
echo $_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_VERSAND') ? constant('LINKTYP_VERSAND') : null)]->getURL();
} else { ?>#<?php }?>"
                                       data-toggle="tooltip"
                                       data-placement="bottom"
                                       title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'shippingInfo','section'=>'login'),$_smarty_tpl ) );?>
">
                                        <i class="fa fa-info-circle"></i>
                                    </a>
                                    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['WarenkorbVersandkostenfreiHinweis']->value,160,"..." ));?>

                                </li>
                            </ul>
                        <?php
}
}
/* {/block 'basket-cart-dropdown-shipping-free-hint'} */
/* {block 'basket-cart-dropdown-cart-items-content'} */
class Block_1603749299609117ed5434a7_18576516 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div class="table-responsive max-h-sm lg-max-h">
                    <table class="table table-striped dropdown-cart-items">
                        <tbody>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2147285167609117ed543e09_78530022', 'basket-cart-dropdown-cart-item', $this->tplIndex);
?>

                        </tbody>
                    </table>
                </div>
                <div class="dropdown-body">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_833080856609117ed570d17_41699565', 'basket-cart-dropdown-total', $this->tplIndex);
?>

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1004076372609117ed587e80_54116172', 'basket-cart-dropdown-buttons', $this->tplIndex);
?>

                    <?php if (!empty($_smarty_tpl->tpl_vars['WarenkorbVersandkostenfreiHinweis']->value)) {?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1601600391609117ed59c301_70604629', 'basket-cart-dropdown-shipping-free-hint', $this->tplIndex);
?>

                    <?php }?>
                </div>
            <?php
}
}
/* {/block 'basket-cart-dropdown-cart-items-content'} */
/* {block 'basket-cart-dropdown-hint-empty'} */
class Block_687702537609117ed5a6d46_74821331 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'warenkorb.php'),$_smarty_tpl ) );
$_prefixVariable41 = ob_get_clean();
ob_start();
echo $_prefixVariable41;
$_prefixVariable42=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('section'=>'checkout','key'=>'emptybasket'),$_smarty_tpl ) );
$_prefixVariable43=ob_get_clean();
$_block_plugin54 = isset($_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0] : null;
if (!is_callable(array($_block_plugin54, 'render'))) {
throw new SmartyException('block tag \'dropdownitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dropdownitem', array('class'=>"cart-dropdown-empty",'href'=>$_prefixVariable42,'rel'=>"nofollow",'title'=>$_prefixVariable43));
$_block_repeat=true;
echo $_block_plugin54->render(array('class'=>"cart-dropdown-empty",'href'=>$_prefixVariable42,'rel'=>"nofollow",'title'=>$_prefixVariable43), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('section'=>'checkout','key'=>'emptybasket'),$_smarty_tpl ) );?>

                <?php $_block_repeat=false;
echo $_block_plugin54->render(array('class'=>"cart-dropdown-empty",'href'=>$_prefixVariable42,'rel'=>"nofollow",'title'=>$_prefixVariable43), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
}
}
/* {/block 'basket-cart-dropdown-hint-empty'} */
/* {block 'basket-cart-dropdown'} */
class Block_1976870382609117ed5406f1_80937336 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'basket-cart-dropdown' => 
  array (
    0 => 'Block_1976870382609117ed5406f1_80937336',
  ),
  'basket-cart-dropdown-cart-items-content' => 
  array (
    0 => 'Block_1603749299609117ed5434a7_18576516',
  ),
  'basket-cart-dropdown-cart-item' => 
  array (
    0 => 'Block_2147285167609117ed543e09_78530022',
  ),
  'basket-cart-dropdown-cart-item-item-image' => 
  array (
    0 => 'Block_1113577111609117ed54a321_79309944',
  ),
  'basket-cart-dropdown-cart-item-item-link' => 
  array (
    0 => 'Block_504041349609117ed5517d7_55552526',
  ),
  'basket-cart-dropdown-cart-item-item-price' => 
  array (
    0 => 'Block_1759790325609117ed55d6d7_98984652',
  ),
  'basket-cart-dropdown-cart-item-no-item-count' => 
  array (
    0 => 'Block_1090169392609117ed563ef7_35356739',
  ),
  'basket-cart-dropdown-cart-item-noitem-price' => 
  array (
    0 => 'Block_836298089609117ed56c3d2_11259082',
  ),
  'basket-cart-dropdown-total' => 
  array (
    0 => 'Block_833080856609117ed570d17_41699565',
  ),
  'basket-cart-dropdown-cart-item-net' => 
  array (
    0 => 'Block_510852053609117ed571ff3_75834545',
  ),
  'basket-cart-dropdown-cart-item-tax' => 
  array (
    0 => 'Block_1445585722609117ed57a903_97346430',
  ),
  'basket-cart-dropdown-cart-item-total' => 
  array (
    0 => 'Block_2098080860609117ed57fa54_02802305',
  ),
  'basket-cart-dropdown-cart-item-favourable-shipping' => 
  array (
    0 => 'Block_1406672139609117ed584be9_65845742',
  ),
  'basket-cart-dropdown-buttons' => 
  array (
    0 => 'Block_1004076372609117ed587e80_54116172',
  ),
  'basket-cart-dropdown-shipping-free-hint' => 
  array (
    0 => 'Block_1601600391609117ed59c301_70604629',
  ),
  'basket-cart-dropdown-hint-empty' => 
  array (
    0 => 'Block_687702537609117ed5a6d46_74821331',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="cart-dropdown dropdown-menu dropdown-menu-right lg-min-w-lg">
        <?php if (count($_SESSION['Warenkorb']->PositionenArr) > 0) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1603749299609117ed5434a7_18576516', 'basket-cart-dropdown-cart-items-content', $this->tplIndex);
?>

        <?php } else { ?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_687702537609117ed5a6d46_74821331', 'basket-cart-dropdown-hint-empty', $this->tplIndex);
?>

        <?php }?>
    </div>
<?php
}
}
/* {/block 'basket-cart-dropdown'} */
}
