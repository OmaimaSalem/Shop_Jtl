<?php
/* Smarty version 3.1.38, created on 2021-05-19 15:00:32
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\snippets\wishlist_button.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a50bf0d9f245_43563994',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83139e825fe1ce2040759e0986ab8de623dd1acb' => 
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
function content_60a50bf0d9f245_43563994 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_140011683260a50bf0d501f6_37455342', 'snippets-wishlist-button');
?>

<?php }
/* {block 'snippets-wishlist-button-button-text'} */
class Block_106007304560a50bf0d65f46_54081798 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php ob_start();
echo (($tmp = $_smarty_tpl->tpl_vars['classes']->value ?? null)===null||$tmp==='' ? '' : $tmp);
$_prefixVariable46=ob_get_clean();
ob_start();
if ($_smarty_tpl->tpl_vars['isOnWishList']->value) {
echo "on-list";
}
$_prefixVariable47=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'addToWishlist','section'=>'productDetails'),$_smarty_tpl ) );
$_prefixVariable48 = ob_get_clean();
ob_start();
if ((isset($_smarty_tpl->tpl_vars['Artikel']->value->kVariKindArtikel))) {
echo (string)$_smarty_tpl->tpl_vars['Artikel']->value->kVariKindArtikel;
} else {
echo (string)$_smarty_tpl->tpl_vars['Artikel']->value->kArtikel;
}
$_prefixVariable49=ob_get_clean();
$_block_plugin89 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin89, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('name'=>"Wunschliste",'type'=>"submit",'variant'=>"link",'class'=>$_prefixVariable46." wishlist-button wishlist action-tip-animation-b ".$_prefixVariable47,'aria'=>array("label"=>$_prefixVariable48),'data'=>array("wl-pos"=>$_smarty_tpl->tpl_vars['wishlistPos']->value,"product-id-wl"=>$_prefixVariable49)));
$_block_repeat=true;
echo $_block_plugin89->render(array('name'=>"Wunschliste",'type'=>"submit",'variant'=>"link",'class'=>$_prefixVariable46." wishlist-button wishlist action-tip-animation-b ".$_prefixVariable47,'aria'=>array("label"=>$_prefixVariable48),'data'=>array("wl-pos"=>$_smarty_tpl->tpl_vars['wishlistPos']->value,"product-id-wl"=>$_prefixVariable49)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <span class="wishlist-button-inner">
                        <span class="<?php if ($_smarty_tpl->tpl_vars['isOnWishList']->value) {?>fas<?php } else { ?>far<?php }?> fa-heart wishlist-icon"></span>
                        <span class="wishlist-button-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'onWishlist'),$_smarty_tpl ) );?>
</span>
                    </span>
                <?php $_block_repeat=false;
echo $_block_plugin89->render(array('name'=>"Wunschliste",'type'=>"submit",'variant'=>"link",'class'=>$_prefixVariable46." wishlist-button wishlist action-tip-animation-b ".$_prefixVariable47,'aria'=>array("label"=>$_prefixVariable48),'data'=>array("wl-pos"=>$_smarty_tpl->tpl_vars['wishlistPos']->value,"product-id-wl"=>$_prefixVariable49)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
}
}
/* {/block 'snippets-wishlist-button-button-text'} */
/* {block 'snippets-wishlist-button-button'} */
class Block_27036053760a50bf0d7c268_30249966 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php ob_start();
echo (($tmp = $_smarty_tpl->tpl_vars['classes']->value ?? null)===null||$tmp==='' ? '' : $tmp);
$_prefixVariable50=ob_get_clean();
ob_start();
if ($_smarty_tpl->tpl_vars['isOnWishList']->value) {
echo "on-list";
}
$_prefixVariable51=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'addToWishlist','section'=>'productDetails'),$_smarty_tpl ) );
$_prefixVariable52 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'addToWishlist','section'=>'productDetails'),$_smarty_tpl ) );
$_prefixVariable53 = ob_get_clean();
ob_start();
if ((isset($_smarty_tpl->tpl_vars['Artikel']->value->kVariKindArtikel))) {
echo (string)$_smarty_tpl->tpl_vars['Artikel']->value->kVariKindArtikel;
} else {
echo (string)$_smarty_tpl->tpl_vars['Artikel']->value->kArtikel;
}
$_prefixVariable54=ob_get_clean();
$_block_plugin90 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin90, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('name'=>"Wunschliste",'type'=>"submit",'class'=>$_prefixVariable50." wishlist badge badge-circle-1 action-tip-animation-b ".$_prefixVariable51,'aria'=>array("label"=>$_prefixVariable52),'title'=>$_prefixVariable53,'data'=>array("wl-pos"=>$_smarty_tpl->tpl_vars['wishlistPos']->value,"product-id-wl"=>$_prefixVariable54,"toggle"=>"tooltip","trigger"=>"hover")));
$_block_repeat=true;
echo $_block_plugin90->render(array('name'=>"Wunschliste",'type'=>"submit",'class'=>$_prefixVariable50." wishlist badge badge-circle-1 action-tip-animation-b ".$_prefixVariable51,'aria'=>array("label"=>$_prefixVariable52),'title'=>$_prefixVariable53,'data'=>array("wl-pos"=>$_smarty_tpl->tpl_vars['wishlistPos']->value,"product-id-wl"=>$_prefixVariable54,"toggle"=>"tooltip","trigger"=>"hover")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <span class="far fa-heart"></span>
                <?php $_block_repeat=false;
echo $_block_plugin90->render(array('name'=>"Wunschliste",'type'=>"submit",'class'=>$_prefixVariable50." wishlist badge badge-circle-1 action-tip-animation-b ".$_prefixVariable51,'aria'=>array("label"=>$_prefixVariable52),'title'=>$_prefixVariable53,'data'=>array("wl-pos"=>$_smarty_tpl->tpl_vars['wishlistPos']->value,"product-id-wl"=>$_prefixVariable54,"toggle"=>"tooltip","trigger"=>"hover")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
}
}
/* {/block 'snippets-wishlist-button-button'} */
/* {block 'snippets-wishlist-button-hidden'} */
class Block_60066794360a50bf0d92ec7_28374956 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"hidden",'name'=>"wlPos",'value'=>$_smarty_tpl->tpl_vars['wishlistPos']->value),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'snippets-wishlist-button-hidden'} */
/* {block 'snippets-wishlist-button-main'} */
class Block_125271022660a50bf0d63147_09569636 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ((($tmp = $_smarty_tpl->tpl_vars['buttonAndText']->value ?? null)===null||$tmp==='' ? false : $tmp)) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_106007304560a50bf0d65f46_54081798', 'snippets-wishlist-button-button-text', $this->tplIndex);
?>

        <?php } else { ?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27036053760a50bf0d7c268_30249966', 'snippets-wishlist-button-button', $this->tplIndex);
?>

        <?php }?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_60066794360a50bf0d92ec7_28374956', 'snippets-wishlist-button-hidden', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'snippets-wishlist-button-main'} */
/* {block 'snippets-wishlist-button'} */
class Block_140011683260a50bf0d501f6_37455342 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-wishlist-button' => 
  array (
    0 => 'Block_140011683260a50bf0d501f6_37455342',
  ),
  'snippets-wishlist-button-main' => 
  array (
    0 => 'Block_125271022660a50bf0d63147_09569636',
  ),
  'snippets-wishlist-button-button-text' => 
  array (
    0 => 'Block_106007304560a50bf0d65f46_54081798',
  ),
  'snippets-wishlist-button-button' => 
  array (
    0 => 'Block_27036053760a50bf0d7c268_30249966',
  ),
  'snippets-wishlist-button-hidden' => 
  array (
    0 => 'Block_60066794360a50bf0d92ec7_28374956',
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125271022660a50bf0d63147_09569636', 'snippets-wishlist-button-main', $this->tplIndex);
?>

<?php
}
}
/* {/block 'snippets-wishlist-button'} */
}
