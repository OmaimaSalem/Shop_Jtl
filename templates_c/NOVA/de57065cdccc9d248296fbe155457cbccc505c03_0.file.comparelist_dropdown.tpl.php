<?php
/* Smarty version 3.1.38, created on 2021-05-04 11:46:20
  from 'C:\xampp\htdocs\shop\templates\NOVA\snippets\comparelist_dropdown.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_609117ec47ee41_56977307',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de57065cdccc9d248296fbe155457cbccc505c03' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\templates\\NOVA\\snippets\\comparelist_dropdown.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609117ec47ee41_56977307 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2046180609609117ebf2a151_16855832', 'snippets-comparelist-dropdown');
?>

<?php }
/* {block 'snippets-comparelist-dropdown-products-image'} */
class Block_1679315560609117ebf31b64_02107950 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                <?php $_block_plugin31 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin31, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['product']->value->cURLFull));
$_block_repeat=true;
echo $_block_plugin31->render(array('href'=>$_smarty_tpl->tpl_vars['product']->value->cURLFull), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0], array( array('lazy'=>true,'webp'=>true,'src'=>$_smarty_tpl->tpl_vars['product']->value->image->cURLMini,'srcset'=>((string)$_smarty_tpl->tpl_vars['product']->value->image->cURLMini)." ".((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_artikel_mini_breite'])."w,
                                                            ".((string)$_smarty_tpl->tpl_vars['product']->value->image->cURLKlein)." ".((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_artikel_klein_breite'])."w,
                                                            ".((string)$_smarty_tpl->tpl_vars['product']->value->image->cURLNormal)." ".((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_artikel_normal_breite'])."w",'sizes'=>"45px",'alt'=>$_smarty_tpl->tpl_vars['product']->value->cName,'class'=>"img-sm"),$_smarty_tpl ) );?>

                                                <?php $_block_repeat=false;
echo $_block_plugin31->render(array('href'=>$_smarty_tpl->tpl_vars['product']->value->cURLFull), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            <?php
}
}
/* {/block 'snippets-comparelist-dropdown-products-image'} */
/* {block 'snippets-comparelist-dropdown-products-title'} */
class Block_1988686195609117ebf3d245_73561700 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                <?php $_block_plugin33 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin33, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['product']->value->cURLFull));
$_block_repeat=true;
echo $_block_plugin33->render(array('href'=>$_smarty_tpl->tpl_vars['product']->value->cURLFull), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['product']->value->cName;
$_block_repeat=false;
echo $_block_plugin33->render(array('href'=>$_smarty_tpl->tpl_vars['product']->value->cURLFull), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            <?php
}
}
/* {/block 'snippets-comparelist-dropdown-products-title'} */
/* {block 'snippets-comparelist-dropdown-products-remove'} */
class Block_1660758797609117ec002e61_36280494 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('section'=>"comparelist",'key'=>"removeFromCompareList"),$_smarty_tpl ) );
$_prefixVariable30=ob_get_clean();
ob_start();?>{<?php $_prefixVariable31=ob_get_clean();
ob_start();
echo htmlspecialchars('"a"', ENT_QUOTES, 'utf-8', true);
$_prefixVariable32=ob_get_clean();
ob_start();?>}<?php $_prefixVariable33=ob_get_clean();
$_block_plugin34 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin34, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>"?vlplo=".((string)$_smarty_tpl->tpl_vars['product']->value->kArtikel),'class'=>"remove",'title'=>$_prefixVariable30,'data'=>array("name"=>"Vergleichsliste.remove","toggle"=>"product-actions","value"=>$_prefixVariable31.$_prefixVariable32.":".((string)$_smarty_tpl->tpl_vars['product']->value->kArtikel).$_prefixVariable33)));
$_block_repeat=true;
echo $_block_plugin34->render(array('href'=>"?vlplo=".((string)$_smarty_tpl->tpl_vars['product']->value->kArtikel),'class'=>"remove",'title'=>$_prefixVariable30,'data'=>array("name"=>"Vergleichsliste.remove","toggle"=>"product-actions","value"=>$_prefixVariable31.$_prefixVariable32.":".((string)$_smarty_tpl->tpl_vars['product']->value->kArtikel).$_prefixVariable33)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <i class="fas fa-times"></i>
                                        <?php $_block_repeat=false;
echo $_block_plugin34->render(array('href'=>"?vlplo=".((string)$_smarty_tpl->tpl_vars['product']->value->kArtikel),'class'=>"remove",'title'=>$_prefixVariable30,'data'=>array("name"=>"Vergleichsliste.remove","toggle"=>"product-actions","value"=>$_prefixVariable31.$_prefixVariable32.":".((string)$_smarty_tpl->tpl_vars['product']->value->kArtikel).$_prefixVariable33)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    <?php
}
}
/* {/block 'snippets-comparelist-dropdown-products-remove'} */
/* {block 'snippets-comparelist-dropdown-products-body'} */
class Block_2066621636609117ebf2f5e8_41550001 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <tr>
                                <td class="w-100-util">
                                    <?php $_block_plugin29 = isset($_smarty_tpl->smarty->registered_plugins['block']['formrow'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['formrow'][0][0] : null;
if (!is_callable(array($_block_plugin29, 'render'))) {
throw new SmartyException('block tag \'formrow\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('formrow', array('class'=>"align-items-center-util"));
$_block_repeat=true;
echo $_block_plugin29->render(array('class'=>"align-items-center-util"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php $_block_plugin30 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin30, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('class'=>"col-auto"));
$_block_repeat=true;
echo $_block_plugin30->render(array('class'=>"col-auto"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1679315560609117ebf31b64_02107950', 'snippets-comparelist-dropdown-products-image', $this->tplIndex);
?>

                                        <?php $_block_repeat=false;
echo $_block_plugin30->render(array('class'=>"col-auto"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        <?php $_block_plugin32 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin32, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array());
$_block_repeat=true;
echo $_block_plugin32->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1988686195609117ebf3d245_73561700', 'snippets-comparelist-dropdown-products-title', $this->tplIndex);
?>

                                        <?php $_block_repeat=false;
echo $_block_plugin32->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    <?php $_block_repeat=false;
echo $_block_plugin29->render(array('class'=>"align-items-center-util"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                </td>
                                <td  class="text-right-util text-nowrap-util">
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1660758797609117ec002e61_36280494', 'snippets-comparelist-dropdown-products-remove', $this->tplIndex);
?>

                                </td>
                            </tr>
                        <?php
}
}
/* {/block 'snippets-comparelist-dropdown-products-body'} */
/* {block 'snippets-comparelist-dropdown-products'} */
class Block_1442119553609117ebf2ad15_28584333 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="comparelist-dropdown-table table-responsive max-h-sm lg-max-h">
            <?php if (!empty($_SESSION['Vergleichsliste']->oArtikel_arr)) {?>
                <table class="table table-vertical-middle table-striped table-img">
                    <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_SESSION['Vergleichsliste']->oArtikel_arr, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2066621636609117ebf2f5e8_41550001', 'snippets-comparelist-dropdown-products-body', $this->tplIndex);
?>

                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
            <?php }?>
        </div>
    <?php
}
}
/* {/block 'snippets-comparelist-dropdown-products'} */
/* {block 'snippets-comparelist-dropdown-more-than-one'} */
class Block_1321114130609117ec478929_09764474 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'productNumberHint','section'=>'comparelist'),$_smarty_tpl ) );?>

                <?php
}
}
/* {/block 'snippets-comparelist-dropdown-more-than-one'} */
/* {block 'snippets-comparelist-dropdown-hint-to-compare'} */
class Block_933551341609117ec47a777_81262374 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'vergleichsliste.php'),$_smarty_tpl ) );
$_prefixVariable34=ob_get_clean();
$_block_plugin35 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin35, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('class'=>"comparelist-dropdown-table-body-button btn btn-block btn-primary btn-sm",'id'=>'nav-comparelist-goto','href'=>$_prefixVariable34));
$_block_repeat=true;
echo $_block_plugin35->render(array('class'=>"comparelist-dropdown-table-body-button btn btn-block btn-primary btn-sm",'id'=>'nav-comparelist-goto','href'=>$_prefixVariable34), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'gotToCompare'),$_smarty_tpl ) );?>

                    <?php $_block_repeat=false;
echo $_block_plugin35->render(array('class'=>"comparelist-dropdown-table-body-button btn btn-block btn-primary btn-sm",'id'=>'nav-comparelist-goto','href'=>$_prefixVariable34), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php
}
}
/* {/block 'snippets-comparelist-dropdown-hint-to-compare'} */
/* {block 'snippets-comparelist-dropdown-hint'} */
class Block_1041686709609117ec474633_30916298 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="comparelist-dropdown-table-body dropdown-body">
            <?php if (!empty($_SESSION['Vergleichsliste']->oArtikel_arr) && count($_SESSION['Vergleichsliste']->oArtikel_arr) <= 1) {?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1321114130609117ec478929_09764474', 'snippets-comparelist-dropdown-more-than-one', $this->tplIndex);
?>

            <?php } else { ?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_933551341609117ec47a777_81262374', 'snippets-comparelist-dropdown-hint-to-compare', $this->tplIndex);
?>

            <?php }?>
        </div>
    <?php
}
}
/* {/block 'snippets-comparelist-dropdown-hint'} */
/* {block 'snippets-comparelist-dropdown'} */
class Block_2046180609609117ebf2a151_16855832 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-comparelist-dropdown' => 
  array (
    0 => 'Block_2046180609609117ebf2a151_16855832',
  ),
  'snippets-comparelist-dropdown-products' => 
  array (
    0 => 'Block_1442119553609117ebf2ad15_28584333',
  ),
  'snippets-comparelist-dropdown-products-body' => 
  array (
    0 => 'Block_2066621636609117ebf2f5e8_41550001',
  ),
  'snippets-comparelist-dropdown-products-image' => 
  array (
    0 => 'Block_1679315560609117ebf31b64_02107950',
  ),
  'snippets-comparelist-dropdown-products-title' => 
  array (
    0 => 'Block_1988686195609117ebf3d245_73561700',
  ),
  'snippets-comparelist-dropdown-products-remove' => 
  array (
    0 => 'Block_1660758797609117ec002e61_36280494',
  ),
  'snippets-comparelist-dropdown-hint' => 
  array (
    0 => 'Block_1041686709609117ec474633_30916298',
  ),
  'snippets-comparelist-dropdown-more-than-one' => 
  array (
    0 => 'Block_1321114130609117ec478929_09764474',
  ),
  'snippets-comparelist-dropdown-hint-to-compare' => 
  array (
    0 => 'Block_933551341609117ec47a777_81262374',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1442119553609117ebf2ad15_28584333', 'snippets-comparelist-dropdown-products', $this->tplIndex);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1041686709609117ec474633_30916298', 'snippets-comparelist-dropdown-hint', $this->tplIndex);
?>

<?php
}
}
/* {/block 'snippets-comparelist-dropdown'} */
}
