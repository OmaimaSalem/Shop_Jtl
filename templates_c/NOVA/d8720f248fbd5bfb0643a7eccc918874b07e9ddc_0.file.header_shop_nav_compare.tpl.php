<?php
/* Smarty version 3.1.38, created on 2021-05-04 11:46:19
  from 'C:\xampp\htdocs\shop\templates\NOVA\layout\header_shop_nav_compare.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_609117ebbd83b8_64301646',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8720f248fbd5bfb0643a7eccc918874b07e9ddc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\templates\\NOVA\\layout\\header_shop_nav_compare.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/comparelist_dropdown.tpl' => 1,
  ),
),false)) {
function content_609117ebbd83b8_64301646 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_477697971609117ebbc2bc1_84886050', 'layout-header-shop-nav-compare');
?>

<?php }
/* {block 'layout-header-shop-nav-compare-link'} */
class Block_1273496111609117ebbc80c8_46844195 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'compare'),$_smarty_tpl ) );
$_prefixVariable29 = ob_get_clean();
$_block_plugin28 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin28, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('class'=>'nav-link','data'=>array('toggle'=>'dropdown'),'aria'=>array('haspopup'=>'true','expanded'=>'false','label'=>$_prefixVariable29)));
$_block_repeat=true;
echo $_block_plugin28->render(array('class'=>'nav-link','data'=>array('toggle'=>'dropdown'),'aria'=>array('haspopup'=>'true','expanded'=>'false','label'=>$_prefixVariable29)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <i class="fas fa-list">
                    <span id="comparelist-badge" class="fa-sup"
                          title="<?php if (!empty($_SESSION['Vergleichsliste']->oArtikel_arr)) {
echo count($_SESSION['Vergleichsliste']->oArtikel_arr);
}?>">
                        <?php if (!empty($_SESSION['Vergleichsliste']->oArtikel_arr)) {
echo count($_SESSION['Vergleichsliste']->oArtikel_arr);
}?>
                    </span>
                </i>
            <?php $_block_repeat=false;
echo $_block_plugin28->render(array('class'=>'nav-link','data'=>array('toggle'=>'dropdown'),'aria'=>array('haspopup'=>'true','expanded'=>'false','label'=>$_prefixVariable29)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php
}
}
/* {/block 'layout-header-shop-nav-compare-link'} */
/* {block 'layout-header-shop-nav-compare-include-comparelist-dropdown'} */
class Block_186184351609117ebbd5da6_42229593 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:snippets/comparelist_dropdown.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php
}
}
/* {/block 'layout-header-shop-nav-compare-include-comparelist-dropdown'} */
/* {block 'layout-header-shop-nav-compare-dropdown'} */
class Block_203353069609117ebbd53c1_57342846 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="comparelist-dropdown-container" class="dropdown-menu dropdown-menu-right lg-min-w-lg">
                <div id='comparelist-dropdown-content'>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_186184351609117ebbd5da6_42229593', 'layout-header-shop-nav-compare-include-comparelist-dropdown', $this->tplIndex);
?>

                </div>
            </div>
        <?php
}
}
/* {/block 'layout-header-shop-nav-compare-dropdown'} */
/* {block 'layout-header-shop-nav-compare'} */
class Block_477697971609117ebbc2bc1_84886050 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout-header-shop-nav-compare' => 
  array (
    0 => 'Block_477697971609117ebbc2bc1_84886050',
  ),
  'layout-header-shop-nav-compare-link' => 
  array (
    0 => 'Block_1273496111609117ebbc80c8_46844195',
  ),
  'layout-header-shop-nav-compare-dropdown' => 
  array (
    0 => 'Block_203353069609117ebbd53c1_57342846',
  ),
  'layout-header-shop-nav-compare-include-comparelist-dropdown' => 
  array (
    0 => 'Block_186184351609117ebbd5da6_42229593',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <li id="shop-nav-compare"
        title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'compare'),$_smarty_tpl ) );?>
"
        class="nav-item dropdown<?php if ($_smarty_tpl->tpl_vars['nSeitenTyp']->value === (defined('PAGE_VERGLEICHSLISTE') ? constant('PAGE_VERGLEICHSLISTE') : null)) {?> active<?php }?> <?php if (empty($_SESSION['Vergleichsliste']->oArtikel_arr)) {?>d-none<?php }?>">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1273496111609117ebbc80c8_46844195', 'layout-header-shop-nav-compare-link', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_203353069609117ebbd53c1_57342846', 'layout-header-shop-nav-compare-dropdown', $this->tplIndex);
?>

    </li>
<?php
}
}
/* {/block 'layout-header-shop-nav-compare'} */
}
