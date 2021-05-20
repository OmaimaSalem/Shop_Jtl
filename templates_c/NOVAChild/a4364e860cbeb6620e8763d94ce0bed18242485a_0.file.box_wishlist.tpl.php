<?php
/* Smarty version 3.1.38, created on 2021-05-20 10:02:53
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\boxes\box_wishlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a617ad1541c1_70113380',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4364e860cbeb6620e8763d94ce0bed18242485a' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\boxes\\box_wishlist.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/image.tpl' => 1,
  ),
),false)) {
function content_60a617ad1541c1_70113380 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_86979058960a617acafed56_95707244', 'boxes-box-wishlist');
?>

<?php }
/* {block 'boxes-box-wishlist-toggle-title'} */
class Block_31985207860a617acc85c17_09778831 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_block_plugin13 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin13, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('id'=>"crd-hdr-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'href'=>"#crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'data'=>array("toggle"=>"collapse"),'role'=>"button",'aria'=>array("expanded"=>"false","controls"=>"crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID())),'class'=>"box-normal-link dropdown-toggle"));
$_block_repeat=true;
echo $_block_plugin13->render(array('id'=>"crd-hdr-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'href'=>"#crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'data'=>array("toggle"=>"collapse"),'role'=>"button",'aria'=>array("expanded"=>"false","controls"=>"crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID())),'class'=>"box-normal-link dropdown-toggle"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'wishlist'),$_smarty_tpl ) );?>

                    <?php $_block_repeat=false;
echo $_block_plugin13->render(array('id'=>"crd-hdr-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'href'=>"#crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'data'=>array("toggle"=>"collapse"),'role'=>"button",'aria'=>array("expanded"=>"false","controls"=>"crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID())),'class'=>"box-normal-link dropdown-toggle"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php
}
}
/* {/block 'boxes-box-wishlist-toggle-title'} */
/* {block 'boxes-box-wishlist-title'} */
class Block_203401392460a617acc92328_12837519 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="productlist-filter-headline align-items-center-util d-none d-md-flex">
                        <i class='fa fa-heart icon-mr-2'></i>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'wishlist'),$_smarty_tpl ) );?>

                    </div>
                <?php
}
}
/* {/block 'boxes-box-wishlist-title'} */
/* {block 'boxes-box-wishlist-dropdown-products-image'} */
class Block_148681975360a617acd50b64_13437383 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                                <?php $_block_plugin17 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin17, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['wishlistItem']->value->Artikel->cURLFull,'title'=>preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['wishlistItem']->value->cArtikelName)));
$_block_repeat=true;
echo $_block_plugin17->render(array('href'=>$_smarty_tpl->tpl_vars['wishlistItem']->value->Artikel->cURLFull,'title'=>preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['wishlistItem']->value->cArtikelName)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                                    <?php $_smarty_tpl->_subTemplateRender('file:snippets/image.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('item'=>$_smarty_tpl->tpl_vars['wishlistItem']->value->Artikel,'square'=>false,'srcSize'=>'xs','sizes'=>'24px'), 0, true);
?>
                                                                <?php $_block_repeat=false;
echo $_block_plugin17->render(array('href'=>$_smarty_tpl->tpl_vars['wishlistItem']->value->Artikel->cURLFull,'title'=>preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['wishlistItem']->value->cArtikelName)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                            <?php
}
}
/* {/block 'boxes-box-wishlist-dropdown-products-image'} */
/* {block 'boxes-box-wishlist-dropdown-products-title'} */
class Block_105676448660a617ad127781_49045225 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                            <?php $_block_plugin19 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin19, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['wishlistItem']->value->Artikel->cURLFull,'title'=>preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['wishlistItem']->value->cArtikelName)));
$_block_repeat=true;
echo $_block_plugin19->render(array('href'=>$_smarty_tpl->tpl_vars['wishlistItem']->value->Artikel->cURLFull,'title'=>preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['wishlistItem']->value->cArtikelName)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                                <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'replace_delim' ][ 0 ], array( $_smarty_tpl->tpl_vars['wishlistItem']->value->fAnzahl ));?>
 &times; <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['wishlistItem']->value->cArtikelName,40,"..." ));?>

                                                            <?php $_block_repeat=false;
echo $_block_plugin19->render(array('href'=>$_smarty_tpl->tpl_vars['wishlistItem']->value->Artikel->cURLFull,'title'=>preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['wishlistItem']->value->cArtikelName)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                        <?php
}
}
/* {/block 'boxes-box-wishlist-dropdown-products-title'} */
/* {block 'boxes-box-wishlist-dropdown-products-image-title'} */
class Block_57151743560a617acd4c9c5_95283139 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                <?php $_block_plugin15 = isset($_smarty_tpl->smarty->registered_plugins['block']['formrow'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['formrow'][0][0] : null;
if (!is_callable(array($_block_plugin15, 'render'))) {
throw new SmartyException('block tag \'formrow\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('formrow', array('class'=>"align-items-center-util"));
$_block_repeat=true;
echo $_block_plugin15->render(array('class'=>"align-items-center-util"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <?php if ($_smarty_tpl->tpl_vars['oBox']->value->getShowImages()) {?>
                                                        <?php $_block_plugin16 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin16, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('class'=>"col-auto"));
$_block_repeat=true;
echo $_block_plugin16->render(array('class'=>"col-auto"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_148681975360a617acd50b64_13437383', 'boxes-box-wishlist-dropdown-products-image', $this->tplIndex);
?>

                                                        <?php $_block_repeat=false;
echo $_block_plugin16->render(array('class'=>"col-auto"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                    <?php }?>
                                                    <?php $_block_plugin18 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin18, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array());
$_block_repeat=true;
echo $_block_plugin18->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_105676448660a617ad127781_49045225', 'boxes-box-wishlist-dropdown-products-title', $this->tplIndex);
?>

                                                    <?php $_block_repeat=false;
echo $_block_plugin18->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                <?php $_block_repeat=false;
echo $_block_plugin15->render(array('class'=>"align-items-center-util"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            <?php
}
}
/* {/block 'boxes-box-wishlist-dropdown-products-image-title'} */
/* {block 'snippets-wishlist-dropdown-products-remove'} */
class Block_73799333360a617ad131478_37034301 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('section'=>'login','key'=>'wishlistremoveItem'),$_smarty_tpl ) );
$_prefixVariable4=ob_get_clean();
$_block_plugin20 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin20, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('class'=>"remove",'href'=>$_smarty_tpl->tpl_vars['wishlistItem']->value->cURL,'data'=>array("name"=>"Wunschliste.remove","toggle"=>"product-actions","value"=>htmlspecialchars(json_encode(array('a'=>$_smarty_tpl->tpl_vars['wishlistItem']->value->kWunschlistePos)), ENT_QUOTES, 'utf-8', true)),'aria'=>array("label"=>$_prefixVariable4)));
$_block_repeat=true;
echo $_block_plugin20->render(array('class'=>"remove",'href'=>$_smarty_tpl->tpl_vars['wishlistItem']->value->cURL,'data'=>array("name"=>"Wunschliste.remove","toggle"=>"product-actions","value"=>htmlspecialchars(json_encode(array('a'=>$_smarty_tpl->tpl_vars['wishlistItem']->value->kWunschlistePos)), ENT_QUOTES, 'utf-8', true)),'aria'=>array("label"=>$_prefixVariable4)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <span class="fas fa-times"></span>
                                                <?php $_block_repeat=false;
echo $_block_plugin20->render(array('class'=>"remove",'href'=>$_smarty_tpl->tpl_vars['wishlistItem']->value->cURL,'data'=>array("name"=>"Wunschliste.remove","toggle"=>"product-actions","value"=>htmlspecialchars(json_encode(array('a'=>$_smarty_tpl->tpl_vars['wishlistItem']->value->kWunschlistePos)), ENT_QUOTES, 'utf-8', true)),'aria'=>array("label"=>$_prefixVariable4)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            <?php
}
}
/* {/block 'snippets-wishlist-dropdown-products-remove'} */
/* {block 'boxes-box-wishlist-wishlist-items'} */
class Block_47645174460a617acc9dd79_10556580 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oBox']->value->getItems(), 'wishlistItem');
$_smarty_tpl->tpl_vars['wishlistItem']->iteration = 0;
$_smarty_tpl->tpl_vars['wishlistItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['wishlistItem']->value) {
$_smarty_tpl->tpl_vars['wishlistItem']->do_else = false;
$_smarty_tpl->tpl_vars['wishlistItem']->iteration++;
$__foreach_wishlistItem_1_saved = $_smarty_tpl->tpl_vars['wishlistItem'];
?>
                                        <?php if ($_smarty_tpl->tpl_vars['wishlistItem']->iteration > $_smarty_tpl->tpl_vars['maxItems']->value) {
break 1;
}?>
                                    <tr>
                                        <td class="w-100-util" data-id=<?php echo $_smarty_tpl->tpl_vars['wishlistItem']->value->kArtikel;?>
>
                                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_57151743560a617acd4c9c5_95283139', 'boxes-box-wishlist-dropdown-products-image-title', $this->tplIndex);
?>

                                        </td>
                                        <td class="box-delete-button">
                                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_73799333360a617ad131478_37034301', 'snippets-wishlist-dropdown-products-remove', $this->tplIndex);
?>

                                        </td>
                                <?php
$_smarty_tpl->tpl_vars['wishlistItem'] = $__foreach_wishlistItem_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php
}
}
/* {/block 'boxes-box-wishlist-wishlist-items'} */
/* {block 'boxes-box-wishlist-actions'} */
class Block_65768134160a617ad147457_89757687 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <hr class="hr-no-top">
                            <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'wunschliste.php'),$_smarty_tpl ) );
$_prefixVariable5=ob_get_clean();
$_block_plugin21 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin21, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_prefixVariable5."?wl=".((string)$_smarty_tpl->tpl_vars['oBox']->value->getWishListID()),'class'=>"btn btn-outline-primary btn-block btn-sm"));
$_block_repeat=true;
echo $_block_plugin21->render(array('href'=>$_prefixVariable5."?wl=".((string)$_smarty_tpl->tpl_vars['oBox']->value->getWishListID()),'class'=>"btn btn-outline-primary btn-block btn-sm"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'goToWishlist'),$_smarty_tpl ) );?>

                            <?php $_block_repeat=false;
echo $_block_plugin21->render(array('href'=>$_prefixVariable5."?wl=".((string)$_smarty_tpl->tpl_vars['oBox']->value->getWishListID()),'class'=>"btn btn-outline-primary btn-block btn-sm"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php
}
}
/* {/block 'boxes-box-wishlist-actions'} */
/* {block 'boxes-box-wishlist-collapse'} */
class Block_163237810560a617acc94234_69855814 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_block_plugin14 = isset($_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0] : null;
if (!is_callable(array($_block_plugin14, 'render'))) {
throw new SmartyException('block tag \'collapse\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('collapse', array('class'=>"d-md-block",'visible'=>false,'id'=>"crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'aria'=>array("labelledby"=>"crd-hdr-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()))));
$_block_repeat=true;
echo $_block_plugin14->render(array('class'=>"d-md-block",'visible'=>false,'id'=>"crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'aria'=>array("labelledby"=>"crd-hdr-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()))), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php $_smarty_tpl->_assignInScope('maxItems', $_smarty_tpl->tpl_vars['oBox']->value->getItemCount());?>
                        <table class="table table-vertical-middle table-striped table-img">
                            <tbody>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_47645174460a617acc9dd79_10556580', 'boxes-box-wishlist-wishlist-items', $this->tplIndex);
?>

                            </tbody>
                        </table>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_65768134160a617ad147457_89757687', 'boxes-box-wishlist-actions', $this->tplIndex);
?>

                    <?php $_block_repeat=false;
echo $_block_plugin14->render(array('class'=>"d-md-block",'visible'=>false,'id'=>"crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'aria'=>array("labelledby"=>"crd-hdr-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()))), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php
}
}
/* {/block 'boxes-box-wishlist-collapse'} */
/* {block 'boxes-box-wishlist-content'} */
class Block_171009729360a617acc84169_33632232 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_31985207860a617acc85c17_09778831', 'boxes-box-wishlist-toggle-title', $this->tplIndex);
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_203401392460a617acc92328_12837519', 'boxes-box-wishlist-title', $this->tplIndex);
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_163237810560a617acc94234_69855814', 'boxes-box-wishlist-collapse', $this->tplIndex);
?>

            <?php
}
}
/* {/block 'boxes-box-wishlist-content'} */
/* {block 'boxes-box-wishlist-hr-end'} */
class Block_194020071560a617ad14f628_70283849 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <hr class="box-normal-hr">
            <?php
}
}
/* {/block 'boxes-box-wishlist-hr-end'} */
/* {block 'boxes-box-wishlist-no-items'} */
class Block_38950810760a617ad151158_87422959 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <section class="d-none box-wishlist" id="sidebox<?php echo $_smarty_tpl->tpl_vars['oBox']->value->getID();?>
"></section>
        <?php
}
}
/* {/block 'boxes-box-wishlist-no-items'} */
/* {block 'boxes-box-wishlist'} */
class Block_86979058960a617acafed56_95707244 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'boxes-box-wishlist' => 
  array (
    0 => 'Block_86979058960a617acafed56_95707244',
  ),
  'boxes-box-wishlist-content' => 
  array (
    0 => 'Block_171009729360a617acc84169_33632232',
  ),
  'boxes-box-wishlist-toggle-title' => 
  array (
    0 => 'Block_31985207860a617acc85c17_09778831',
  ),
  'boxes-box-wishlist-title' => 
  array (
    0 => 'Block_203401392460a617acc92328_12837519',
  ),
  'boxes-box-wishlist-collapse' => 
  array (
    0 => 'Block_163237810560a617acc94234_69855814',
  ),
  'boxes-box-wishlist-wishlist-items' => 
  array (
    0 => 'Block_47645174460a617acc9dd79_10556580',
  ),
  'boxes-box-wishlist-dropdown-products-image-title' => 
  array (
    0 => 'Block_57151743560a617acd4c9c5_95283139',
  ),
  'boxes-box-wishlist-dropdown-products-image' => 
  array (
    0 => 'Block_148681975360a617acd50b64_13437383',
  ),
  'boxes-box-wishlist-dropdown-products-title' => 
  array (
    0 => 'Block_105676448660a617ad127781_49045225',
  ),
  'snippets-wishlist-dropdown-products-remove' => 
  array (
    0 => 'Block_73799333360a617ad131478_37034301',
  ),
  'boxes-box-wishlist-actions' => 
  array (
    0 => 'Block_65768134160a617ad147457_89757687',
  ),
  'boxes-box-wishlist-hr-end' => 
  array (
    0 => 'Block_194020071560a617ad14f628_70283849',
  ),
  'boxes-box-wishlist-no-items' => 
  array (
    0 => 'Block_38950810760a617ad151158_87422959',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (count($_smarty_tpl->tpl_vars['oBox']->value->getItems()) > 0) {?>
        <?php $_block_plugin12 = isset($_smarty_tpl->smarty->registered_plugins['block']['card'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['card'][0][0] : null;
if (!is_callable(array($_block_plugin12, 'render'))) {
throw new SmartyException('block tag \'card\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('card', array('class'=>"box box-wishlist box-normal",'id'=>"sidebox".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID())));
$_block_repeat=true;
echo $_block_plugin12->render(array('class'=>"box box-wishlist box-normal",'id'=>"sidebox".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID())), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_171009729360a617acc84169_33632232', 'boxes-box-wishlist-content', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_194020071560a617ad14f628_70283849', 'boxes-box-wishlist-hr-end', $this->tplIndex);
?>

        <?php $_block_repeat=false;
echo $_block_plugin12->render(array('class'=>"box box-wishlist box-normal",'id'=>"sidebox".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID())), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php } else { ?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_38950810760a617ad151158_87422959', 'boxes-box-wishlist-no-items', $this->tplIndex);
?>

    <?php }
}
}
/* {/block 'boxes-box-wishlist'} */
}
