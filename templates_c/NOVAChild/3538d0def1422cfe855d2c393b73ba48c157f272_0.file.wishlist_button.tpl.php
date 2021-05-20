<?php
/* Smarty version 3.1.38, created on 2021-05-18 11:41:14
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\snippets\wishlist_button.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a38bba5e73c3_81230563',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3538d0def1422cfe855d2c393b73ba48c157f272' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\snippets\\wishlist_button.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a38bba5e73c3_81230563 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_110162000260a38bba5af6b4_19488403', 'snippets-wishlist-button');
?>

<?php }
/* {block 'snippets-wishlist-button-button-text'} */
class Block_123137015360a38bba5c3ab9_33564920 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php ob_start();
echo (($tmp = $_smarty_tpl->tpl_vars['classes']->value ?? null)===null||$tmp==='' ? '' : $tmp);
$_prefixVariable9=ob_get_clean();
ob_start();
if ($_smarty_tpl->tpl_vars['isOnWishList']->value) {
echo "on-list";
}
$_prefixVariable10=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'addToWishlist','section'=>'productDetails'),$_smarty_tpl ) );
$_prefixVariable11 = ob_get_clean();
ob_start();
if ((isset($_smarty_tpl->tpl_vars['Artikel']->value->kVariKindArtikel))) {
echo (string)$_smarty_tpl->tpl_vars['Artikel']->value->kVariKindArtikel;
} else {
echo (string)$_smarty_tpl->tpl_vars['Artikel']->value->kArtikel;
}
$_prefixVariable12=ob_get_clean();
$_block_plugin28 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin28, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('name'=>"Wunschliste",'type'=>"submit",'variant'=>"link",'class'=>$_prefixVariable9." wishlist-button wishlist action-tip-animation-b ".$_prefixVariable10,'aria'=>array("label"=>$_prefixVariable11),'data'=>array("wl-pos"=>$_smarty_tpl->tpl_vars['wishlistPos']->value,"product-id-wl"=>$_prefixVariable12)));
$_block_repeat=true;
echo $_block_plugin28->render(array('name'=>"Wunschliste",'type'=>"submit",'variant'=>"link",'class'=>$_prefixVariable9." wishlist-button wishlist action-tip-animation-b ".$_prefixVariable10,'aria'=>array("label"=>$_prefixVariable11),'data'=>array("wl-pos"=>$_smarty_tpl->tpl_vars['wishlistPos']->value,"product-id-wl"=>$_prefixVariable12)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <span class="wishlist-button-inner">
                        <span class="<?php if ($_smarty_tpl->tpl_vars['isOnWishList']->value) {?>fas<?php } else { ?>far<?php }?> fa-heart wishlist-icon"></span>
                        <span class="wishlist-button-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'onWishlist'),$_smarty_tpl ) );?>
</span>
                    </span>
                <?php $_block_repeat=false;
echo $_block_plugin28->render(array('name'=>"Wunschliste",'type'=>"submit",'variant'=>"link",'class'=>$_prefixVariable9." wishlist-button wishlist action-tip-animation-b ".$_prefixVariable10,'aria'=>array("label"=>$_prefixVariable11),'data'=>array("wl-pos"=>$_smarty_tpl->tpl_vars['wishlistPos']->value,"product-id-wl"=>$_prefixVariable12)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
}
}
/* {/block 'snippets-wishlist-button-button-text'} */
/* {block 'snippets-wishlist-button-button'} */
class Block_113637588160a38bba5d3897_12468355 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php ob_start();
echo (($tmp = $_smarty_tpl->tpl_vars['classes']->value ?? null)===null||$tmp==='' ? '' : $tmp);
$_prefixVariable13=ob_get_clean();
ob_start();
if ($_smarty_tpl->tpl_vars['isOnWishList']->value) {
echo "on-list";
}
$_prefixVariable14=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'addToWishlist','section'=>'productDetails'),$_smarty_tpl ) );
$_prefixVariable15 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'addToWishlist','section'=>'productDetails'),$_smarty_tpl ) );
$_prefixVariable16 = ob_get_clean();
ob_start();
if ((isset($_smarty_tpl->tpl_vars['Artikel']->value->kVariKindArtikel))) {
echo (string)$_smarty_tpl->tpl_vars['Artikel']->value->kVariKindArtikel;
} else {
echo (string)$_smarty_tpl->tpl_vars['Artikel']->value->kArtikel;
}
$_prefixVariable17=ob_get_clean();
$_block_plugin29 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin29, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('name'=>"Wunschliste",'type'=>"submit",'class'=>$_prefixVariable13." wishlist badge badge-circle-1 action-tip-animation-b ".$_prefixVariable14,'aria'=>array("label"=>$_prefixVariable15),'title'=>$_prefixVariable16,'data'=>array("wl-pos"=>$_smarty_tpl->tpl_vars['wishlistPos']->value,"product-id-wl"=>$_prefixVariable17,"toggle"=>"tooltip","trigger"=>"hover")));
$_block_repeat=true;
echo $_block_plugin29->render(array('name'=>"Wunschliste",'type'=>"submit",'class'=>$_prefixVariable13." wishlist badge badge-circle-1 action-tip-animation-b ".$_prefixVariable14,'aria'=>array("label"=>$_prefixVariable15),'title'=>$_prefixVariable16,'data'=>array("wl-pos"=>$_smarty_tpl->tpl_vars['wishlistPos']->value,"product-id-wl"=>$_prefixVariable17,"toggle"=>"tooltip","trigger"=>"hover")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <span class="far fa-heart"></span>
                <?php $_block_repeat=false;
echo $_block_plugin29->render(array('name'=>"Wunschliste",'type'=>"submit",'class'=>$_prefixVariable13." wishlist badge badge-circle-1 action-tip-animation-b ".$_prefixVariable14,'aria'=>array("label"=>$_prefixVariable15),'title'=>$_prefixVariable16,'data'=>array("wl-pos"=>$_smarty_tpl->tpl_vars['wishlistPos']->value,"product-id-wl"=>$_prefixVariable17,"toggle"=>"tooltip","trigger"=>"hover")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
}
}
/* {/block 'snippets-wishlist-button-button'} */
/* {block 'snippets-wishlist-button-hidden'} */
class Block_144487881960a38bba5e35a3_79609135 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"hidden",'name'=>"wlPos",'value'=>$_smarty_tpl->tpl_vars['wishlistPos']->value),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'snippets-wishlist-button-hidden'} */
/* {block 'snippets-wishlist-button-main'} */
class Block_171378830260a38bba5c17f7_23882475 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ((($tmp = $_smarty_tpl->tpl_vars['buttonAndText']->value ?? null)===null||$tmp==='' ? false : $tmp)) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_123137015360a38bba5c3ab9_33564920', 'snippets-wishlist-button-button-text', $this->tplIndex);
?>

        <?php } else { ?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_113637588160a38bba5d3897_12468355', 'snippets-wishlist-button-button', $this->tplIndex);
?>

        <?php }?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_144487881960a38bba5e35a3_79609135', 'snippets-wishlist-button-hidden', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'snippets-wishlist-button-main'} */
/* {block 'snippets-wishlist-button'} */
class Block_110162000260a38bba5af6b4_19488403 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-wishlist-button' => 
  array (
    0 => 'Block_110162000260a38bba5af6b4_19488403',
  ),
  'snippets-wishlist-button-main' => 
  array (
    0 => 'Block_171378830260a38bba5c17f7_23882475',
  ),
  'snippets-wishlist-button-button-text' => 
  array (
    0 => 'Block_123137015360a38bba5c3ab9_33564920',
  ),
  'snippets-wishlist-button-button' => 
  array (
    0 => 'Block_113637588160a38bba5d3897_12468355',
  ),
  'snippets-wishlist-button-hidden' => 
  array (
    0 => 'Block_144487881960a38bba5e35a3_79609135',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_assignInScope('isOnWishList', false);?>
    <?php $_smarty_tpl->_assignInScope('wishlistPos', 0);?>
    <?php $_smarty_tpl->_assignInScope('isVariationItem', !empty($_smarty_tpl->tpl_vars['Artikel']->value->Variationen) && empty($_smarty_tpl->tpl_vars['Artikel']->value->kVariKindArtikel));?>
    <?php if ((isset($_SESSION['Wunschliste'])) && !$_smarty_tpl->tpl_vars['isVariationItem']->value) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_SESSION['Wunschliste']->CWunschlistePos_arr, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['product']->value->kArtikel === $_smarty_tpl->tpl_vars['Artikel']->value->kArtikel || $_smarty_tpl->tpl_vars['product']->value->kArtikel === $_smarty_tpl->tpl_vars['Artikel']->value->kVariKindArtikel) {?>
                <?php $_smarty_tpl->_assignInScope('isOnWishList', true);?>
                <?php $_smarty_tpl->_assignInScope('wishlistPos', $_smarty_tpl->tpl_vars['product']->value->kWunschlistePos);?>
                <?php break 1;?>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_171378830260a38bba5c17f7_23882475', 'snippets-wishlist-button-main', $this->tplIndex);
?>

<?php
}
}
/* {/block 'snippets-wishlist-button'} */
}
