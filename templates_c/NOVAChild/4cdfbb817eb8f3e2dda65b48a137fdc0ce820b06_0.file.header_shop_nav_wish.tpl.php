<?php
/* Smarty version 3.1.38, created on 2021-05-04 14:35:11
  from 'C:\xampp\htdocs\shop\templates\NOVA\layout\header_shop_nav_wish.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60913f7f65c473_19167520',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4cdfbb817eb8f3e2dda65b48a137fdc0ce820b06' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\templates\\NOVA\\layout\\header_shop_nav_wish.tpl',
      1 => 1620131515,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/wishlist_dropdown.tpl' => 1,
  ),
),false)) {
function content_60913f7f65c473_19167520 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_140829453960913f7f6182f0_09762192', 'layout-header-shop-nav-wish');
?>

<?php }
/* {block 'layout-header-shop-nav-wish-link'} */
class Block_87773495460913f7f642a43_78821580 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'wishlist'),$_smarty_tpl ) );
$_prefixVariable1 = ob_get_clean();
$_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('class'=>'nav-link','aria'=>array('expanded'=>'false','label'=>$_prefixVariable1),'data'=>array('toggle'=>'dropdown')));
$_block_repeat=true;
echo $_block_plugin1->render(array('class'=>'nav-link','aria'=>array('expanded'=>'false','label'=>$_prefixVariable1),'data'=>array('toggle'=>'dropdown')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <i class="fas fa-heart">
                        <span id="badge-wl-count" class="fa-sup <?php if ($_smarty_tpl->tpl_vars['wlCount']->value === 0) {?> d-none<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['wlCount']->value;?>
">
                            <?php echo $_smarty_tpl->tpl_vars['wlCount']->value;?>

                        </span>
                    </i>
                <?php $_block_repeat=false;
echo $_block_plugin1->render(array('class'=>'nav-link','aria'=>array('expanded'=>'false','label'=>$_prefixVariable1),'data'=>array('toggle'=>'dropdown')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
}
}
/* {/block 'layout-header-shop-nav-wish-link'} */
/* {block 'layout-header-shop-nav-wish-include-wishlist-dropdown'} */
class Block_24257576160913f7f659560_26253221 extends Smarty_Internal_Block
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
class Block_2936993060913f7f658b59_11200895 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div id="nav-wishlist-collapse" class="dropdown-menu dropdown-menu-right lg-min-w-lg">
                    <div id="wishlist-dropdown-container">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_24257576160913f7f659560_26253221', 'layout-header-shop-nav-wish-include-wishlist-dropdown', $this->tplIndex);
?>

                    </div>
                </div>
            <?php
}
}
/* {/block 'layout-header-shop-nav-wish-dropdown'} */
/* {block 'layout-header-shop-nav-wish'} */
class Block_140829453960913f7f6182f0_09762192 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout-header-shop-nav-wish' => 
  array (
    0 => 'Block_140829453960913f7f6182f0_09762192',
  ),
  'layout-header-shop-nav-wish-link' => 
  array (
    0 => 'Block_87773495460913f7f642a43_78821580',
  ),
  'layout-header-shop-nav-wish-dropdown' => 
  array (
    0 => 'Block_2936993060913f7f658b59_11200895',
  ),
  'layout-header-shop-nav-wish-include-wishlist-dropdown' => 
  array (
    0 => 'Block_24257576160913f7f659560_26253221',
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_87773495460913f7f642a43_78821580', 'layout-header-shop-nav-wish-link', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2936993060913f7f658b59_11200895', 'layout-header-shop-nav-wish-dropdown', $this->tplIndex);
?>

        </li>
    <?php }
}
}
/* {/block 'layout-header-shop-nav-wish'} */
}
