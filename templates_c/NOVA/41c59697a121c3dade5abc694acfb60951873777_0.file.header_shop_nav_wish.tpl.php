<?php
/* Smarty version 3.1.38, created on 2021-05-04 11:46:20
  from 'C:\xampp\htdocs\shop\templates\NOVA\layout\header_shop_nav_wish.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_609117ec950600_43105975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41c59697a121c3dade5abc694acfb60951873777' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\templates\\NOVA\\layout\\header_shop_nav_wish.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/wishlist_dropdown.tpl' => 1,
  ),
),false)) {
function content_609117ec950600_43105975 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1948338807609117ec93c6d1_69738796', 'layout-header-shop-nav-wish');
?>

<?php }
/* {block 'layout-header-shop-nav-wish-link'} */
class Block_1115273932609117ec9468f6_64475501 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'wishlist'),$_smarty_tpl ) );
$_prefixVariable35 = ob_get_clean();
$_block_plugin36 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin36, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('class'=>'nav-link','aria'=>array('expanded'=>'false','label'=>$_prefixVariable35),'data'=>array('toggle'=>'dropdown')));
$_block_repeat=true;
echo $_block_plugin36->render(array('class'=>'nav-link','aria'=>array('expanded'=>'false','label'=>$_prefixVariable35),'data'=>array('toggle'=>'dropdown')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <i class="fas fa-heart">
                        <span id="badge-wl-count" class="fa-sup <?php if ($_smarty_tpl->tpl_vars['wlCount']->value === 0) {?> d-none<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['wlCount']->value;?>
">
                            <?php echo $_smarty_tpl->tpl_vars['wlCount']->value;?>

                        </span>
                    </i>
                <?php $_block_repeat=false;
echo $_block_plugin36->render(array('class'=>'nav-link','aria'=>array('expanded'=>'false','label'=>$_prefixVariable35),'data'=>array('toggle'=>'dropdown')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
}
}
/* {/block 'layout-header-shop-nav-wish-link'} */
/* {block 'layout-header-shop-nav-wish-include-wishlist-dropdown'} */
class Block_43428672609117ec94dc40_92313139 extends Smarty_Internal_Block
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
class Block_1983329927609117ec94d233_14706037 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div id="nav-wishlist-collapse" class="dropdown-menu dropdown-menu-right lg-min-w-lg">
                    <div id="wishlist-dropdown-container">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_43428672609117ec94dc40_92313139', 'layout-header-shop-nav-wish-include-wishlist-dropdown', $this->tplIndex);
?>

                    </div>
                </div>
            <?php
}
}
/* {/block 'layout-header-shop-nav-wish-dropdown'} */
/* {block 'layout-header-shop-nav-wish'} */
class Block_1948338807609117ec93c6d1_69738796 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout-header-shop-nav-wish' => 
  array (
    0 => 'Block_1948338807609117ec93c6d1_69738796',
  ),
  'layout-header-shop-nav-wish-link' => 
  array (
    0 => 'Block_1115273932609117ec9468f6_64475501',
  ),
  'layout-header-shop-nav-wish-dropdown' => 
  array (
    0 => 'Block_1983329927609117ec94d233_14706037',
  ),
  'layout-header-shop-nav-wish-include-wishlist-dropdown' => 
  array (
    0 => 'Block_43428672609117ec94dc40_92313139',
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1115273932609117ec9468f6_64475501', 'layout-header-shop-nav-wish-link', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1983329927609117ec94d233_14706037', 'layout-header-shop-nav-wish-dropdown', $this->tplIndex);
?>

        </li>
    <?php }
}
}
/* {/block 'layout-header-shop-nav-wish'} */
}
