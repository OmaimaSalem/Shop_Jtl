<?php
/* Smarty version 3.1.38, created on 2021-05-19 14:59:00
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\layout\header_shop_nav_wish.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a50b940c3899_71084377',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc1167ee48ce4a58daf2a9d098ff2e847bd09279' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\layout\\header_shop_nav_wish.tpl',
      1 => 1620131515,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/wishlist_dropdown.tpl' => 1,
  ),
),false)) {
function content_60a50b940c3899_71084377 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_143442739160a50b940a1514_40515155', 'layout-header-shop-nav-wish');
?>

<?php }
/* {block 'layout-header-shop-nav-wish-link'} */
class Block_132326884260a50b940aef97_29161552 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'wishlist'),$_smarty_tpl ) );
$_prefixVariable39 = ob_get_clean();
$_block_plugin68 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin68, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('class'=>'nav-link','aria'=>array('expanded'=>'false','label'=>$_prefixVariable39),'data'=>array('toggle'=>'dropdown')));
$_block_repeat=true;
echo $_block_plugin68->render(array('class'=>'nav-link','aria'=>array('expanded'=>'false','label'=>$_prefixVariable39),'data'=>array('toggle'=>'dropdown')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <i class="fas fa-heart">
                        <span id="badge-wl-count" class="fa-sup <?php if ($_smarty_tpl->tpl_vars['wlCount']->value === 0) {?> d-none<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['wlCount']->value;?>
">
                            <?php echo $_smarty_tpl->tpl_vars['wlCount']->value;?>

                        </span>
                    </i>
                <?php $_block_repeat=false;
echo $_block_plugin68->render(array('class'=>'nav-link','aria'=>array('expanded'=>'false','label'=>$_prefixVariable39),'data'=>array('toggle'=>'dropdown')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
}
}
/* {/block 'layout-header-shop-nav-wish-link'} */
/* {block 'layout-header-shop-nav-wish-include-wishlist-dropdown'} */
class Block_75083624260a50b940b6cc3_80515145 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php $_smarty_tpl->_subTemplateRender('file:snippets/wishlist_dropdown.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <?php
}
}
/* {/block 'layout-header-shop-nav-wish-include-wishlist-dropdown'} */
/* {block 'layout-header-shop-nav-wish-dropdown'} */
class Block_3524847360a50b940b6106_11696375 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div id="nav-wishlist-collapse" class="dropdown-menu dropdown-menu-right lg-min-w-lg">
                    <div id="wishlist-dropdown-container">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_75083624260a50b940b6cc3_80515145', 'layout-header-shop-nav-wish-include-wishlist-dropdown', $this->tplIndex);
?>

                    </div>
                </div>
            <?php
}
}
/* {/block 'layout-header-shop-nav-wish-dropdown'} */
/* {block 'layout-header-shop-nav-wish'} */
class Block_143442739160a50b940a1514_40515155 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout-header-shop-nav-wish' => 
  array (
    0 => 'Block_143442739160a50b940a1514_40515155',
  ),
  'layout-header-shop-nav-wish-link' => 
  array (
    0 => 'Block_132326884260a50b940aef97_29161552',
  ),
  'layout-header-shop-nav-wish-dropdown' => 
  array (
    0 => 'Block_3524847360a50b940b6106_11696375',
  ),
  'layout-header-shop-nav-wish-include-wishlist-dropdown' => 
  array (
    0 => 'Block_75083624260a50b940b6cc3_80515145',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (!empty($_smarty_tpl->tpl_vars['wishlists']->value) && $_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_wunschliste_anzeigen'] === 'Y') {?>
        <?php $_smarty_tpl->_assignInScope('wlCount', 0);?>
        <?php if ((isset($_SESSION['Wunschliste']->CWunschlistePos_arr))) {?>
            <?php $_smarty_tpl->_assignInScope('wlCount', count($_SESSION['Wunschliste']->CWunschlistePos_arr));?>
        <?php }?>
        <li id='shop-nav-wish'
            class="nav-item dropdown <?php if ($_smarty_tpl->tpl_vars['nSeitenTyp']->value === (defined('PAGE_WUNSCHLISTE') ? constant('PAGE_WUNSCHLISTE') : null)) {?> active<?php }?>">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132326884260a50b940aef97_29161552', 'layout-header-shop-nav-wish-link', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3524847360a50b940b6106_11696375', 'layout-header-shop-nav-wish-dropdown', $this->tplIndex);
?>

        </li>
    <?php }
}
}
/* {/block 'layout-header-shop-nav-wish'} */
}
