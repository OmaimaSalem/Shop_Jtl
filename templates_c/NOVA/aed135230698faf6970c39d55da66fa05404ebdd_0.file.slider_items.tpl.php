<?php
/* Smarty version 3.1.38, created on 2021-05-19 15:18:31
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\snippets\slider_items.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a5102708abf7_35258093',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aed135230698faf6970c39d55da66fa05404ebdd' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\snippets\\slider_items.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:productlist/item_slider.tpl' => 1,
    'file:blog/preview.tpl' => 1,
  ),
),false)) {
function content_60a5102708abf7_35258093 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_89230818160a51026e9ded5_27322293', 'snippets-slider-items');
?>

<?php }
/* {block 'snippets-slider-items-product'} */
class Block_73687355460a5102700edc8_36963270 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div class="product-wrapper product-wrapper-product text-center-util <?php if ($_smarty_tpl->tpl_vars['item']->first && $_smarty_tpl->tpl_vars['item']->last) {?> m-auto<?php } elseif ($_smarty_tpl->tpl_vars['item']->first) {?> ml-auto-util <?php } elseif ($_smarty_tpl->tpl_vars['item']->last) {?> mr-auto <?php }
if ((isset($_smarty_tpl->tpl_vars['style']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['style']->value;
}?>" <?php if ($_smarty_tpl->tpl_vars['tplscope']->value !== 'box') {
if ((isset($_smarty_tpl->tpl_vars['Link']->value)) && $_smarty_tpl->tpl_vars['Link']->value->getLinkType() === (defined('LINKTYP_STARTSEITE') ? constant('LINKTYP_STARTSEITE') : null) || $_smarty_tpl->tpl_vars['nSeitenTyp']->value === (defined('PAGE_ARTIKELLISTE') ? constant('PAGE_ARTIKELLISTE') : null)) {?>itemprop="about"<?php } else { ?>itemprop="isRelatedTo"<?php }?> itemscope itemtype="http://schema.org/Product"<?php }?>>
                    <?php $_smarty_tpl->_subTemplateRender('file:productlist/item_slider.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('Artikel'=>$_smarty_tpl->tpl_vars['item']->value,'tplscope'=>$_smarty_tpl->tpl_vars['tplscope']->value), 0, true);
?>
                </div>
            <?php
}
}
/* {/block 'snippets-slider-items-product'} */
/* {block 'snippets-slider-items-news'} */
class Block_203841541060a51027043885_81125689 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div class="product-wrapper product-wrapper-news <?php if ($_smarty_tpl->tpl_vars['item']->first && $_smarty_tpl->tpl_vars['item']->last) {?> m-auto<?php } elseif ($_smarty_tpl->tpl_vars['item']->first) {?> ml-auto-util <?php } elseif ($_smarty_tpl->tpl_vars['item']->last) {?> mr-auto <?php }?>">
                    <?php $_smarty_tpl->_subTemplateRender('file:blog/preview.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('newsItem'=>$_smarty_tpl->tpl_vars['item']->value), 0, true);
?>
                </div>
            <?php
}
}
/* {/block 'snippets-slider-items-news'} */
/* {block 'snippets-slider-items'} */
class Block_89230818160a51026e9ded5_27322293 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-slider-items' => 
  array (
    0 => 'Block_89230818160a51026e9ded5_27322293',
  ),
  'snippets-slider-items-product' => 
  array (
    0 => 'Block_73687355460a5102700edc8_36963270',
  ),
  'snippets-slider-items-news' => 
  array (
    0 => 'Block_203841541060a51027043885_81125689',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item', true);
$_smarty_tpl->tpl_vars['item']->iteration = 0;
$_smarty_tpl->tpl_vars['item']->index = -1;
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['item']->iteration++;
$_smarty_tpl->tpl_vars['item']->index++;
$_smarty_tpl->tpl_vars['item']->first = !$_smarty_tpl->tpl_vars['item']->index;
$_smarty_tpl->tpl_vars['item']->last = $_smarty_tpl->tpl_vars['item']->iteration === $_smarty_tpl->tpl_vars['item']->total;
$__foreach_item_0_saved = $_smarty_tpl->tpl_vars['item'];
?>
        <?php if ($_smarty_tpl->tpl_vars['type']->value === 'product') {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_73687355460a5102700edc8_36963270', 'snippets-slider-items-product', $this->tplIndex);
?>

        <?php } elseif ($_smarty_tpl->tpl_vars['type']->value === 'news') {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_203841541060a51027043885_81125689', 'snippets-slider-items-news', $this->tplIndex);
?>

        <?php } elseif ($_smarty_tpl->tpl_vars['type']->value === 'freegift') {?>
            <div class="product-wrapper product-wrapper-freegift <?php if ($_smarty_tpl->tpl_vars['item']->first && $_smarty_tpl->tpl_vars['item']->last) {?> m-auto <?php } elseif ($_smarty_tpl->tpl_vars['item']->first) {?> ml-auto-util <?php } elseif ($_smarty_tpl->tpl_vars['item']->last) {?> mr-auto <?php }?>freegift">
                <div class="custom-control custom-radio">
                    <input class="custom-control-input " type="radio" id="gift<?php echo $_smarty_tpl->tpl_vars['item']->value->kArtikel;?>
" name="gratisgeschenk" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->kArtikel;?>
" onclick="submit();">
                    <label for="gift<?php echo $_smarty_tpl->tpl_vars['item']->value->kArtikel;?>
" class="custom-control-label <?php if ($_smarty_tpl->tpl_vars['selectedFreegift']->value === $_smarty_tpl->tpl_vars['item']->value->kArtikel) {?>badge-check<?php }?>">
                        <?php if ($_smarty_tpl->tpl_vars['selectedFreegift']->value === $_smarty_tpl->tpl_vars['item']->value->kArtikel) {
$_block_plugin5 = isset($_smarty_tpl->smarty->registered_plugins['block']['badge'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['badge'][0][0] : null;
if (!is_callable(array($_block_plugin5, 'render'))) {
throw new SmartyException('block tag \'badge\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('badge', array('class'=>"badge-circle"));
$_block_repeat=true;
echo $_block_plugin5->render(array('class'=>"badge-circle"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><i class="fas fa-check mx-auto"></i><?php $_block_repeat=false;
echo $_block_plugin5->render(array('class'=>"badge-circle"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>
                        <div class="square square-image">
                            <div class="inner">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0], array( array('lazy'=>true,'webp'=>true,'src'=>$_smarty_tpl->tpl_vars['item']->value->Bilder[0]->cURLKlein,'fluid'=>true,'alt'=>$_smarty_tpl->tpl_vars['item']->value->cName),$_smarty_tpl ) );?>

                            </div>
                        </div>
                        <div class="caption">
                            <p class="small text-muted-util"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'freeGiftFrom1'),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value->cBestellwert;?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'freeGiftFrom2'),$_smarty_tpl ) );?>
</p>
                            <p><?php $_block_plugin6 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin6, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['item']->value->cURLFull));
$_block_repeat=true;
echo $_block_plugin6->render(array('href'=>$_smarty_tpl->tpl_vars['item']->value->cURLFull), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['item']->value->cName;
$_block_repeat=false;
echo $_block_plugin6->render(array('href'=>$_smarty_tpl->tpl_vars['item']->value->cURLFull), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></p>
                        </div>
                    </label>
                </div>
            </div>
        <?php }?>
    <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
/* {/block 'snippets-slider-items'} */
}
