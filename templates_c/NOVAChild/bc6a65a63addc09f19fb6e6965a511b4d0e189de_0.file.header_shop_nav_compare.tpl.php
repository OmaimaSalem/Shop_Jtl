<?php
/* Smarty version 3.1.38, created on 2021-05-07 10:11:21
  from 'C:\xampp\htdocs\shop\templates\NOVA\layout\header_shop_nav_compare.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6094f6297dcfe8_43787982',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc6a65a63addc09f19fb6e6965a511b4d0e189de' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\templates\\NOVA\\layout\\header_shop_nav_compare.tpl',
      1 => 1620374512,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/comparelist_dropdown.tpl' => 1,
  ),
),false)) {
function content_6094f6297dcfe8_43787982 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12311028986094f62977d367_87406642', 'layout-header-shop-nav-compare');
?>

<?php }
/* {block 'layout-header-shop-nav-compare-link'} */
class Block_7098082296094f62979c212_40309137 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'compare'),$_smarty_tpl ) );
$_prefixVariable1 = ob_get_clean();
$_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('class'=>'nav-link','data'=>array('toggle'=>'dropdown'),'aria'=>array('haspopup'=>'true','expanded'=>'false','label'=>$_prefixVariable1)));
$_block_repeat=true;
echo $_block_plugin1->render(array('class'=>'nav-link','data'=>array('toggle'=>'dropdown'),'aria'=>array('haspopup'=>'true','expanded'=>'false','label'=>$_prefixVariable1)), null, $_smarty_tpl, $_block_repeat);
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
echo $_block_plugin1->render(array('class'=>'nav-link','data'=>array('toggle'=>'dropdown'),'aria'=>array('haspopup'=>'true','expanded'=>'false','label'=>$_prefixVariable1)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php
}
}
/* {/block 'layout-header-shop-nav-compare-link'} */
/* {block 'layout-header-shop-nav-compare-include-comparelist-dropdown'} */
class Block_1478518686094f6297d3835_66881845 extends Smarty_Internal_Block
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
class Block_14854611086094f6297bc717_92651259 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="comparelist-dropdown-container" class="dropdown-menu dropdown-menu-right lg-min-w-lg">
                <div id='comparelist-dropdown-content'>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1478518686094f6297d3835_66881845', 'layout-header-shop-nav-compare-include-comparelist-dropdown', $this->tplIndex);
?>

                </div>
            </div>
        <?php
}
}
/* {/block 'layout-header-shop-nav-compare-dropdown'} */
/* {block 'layout-header-shop-nav-compare'} */
class Block_12311028986094f62977d367_87406642 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout-header-shop-nav-compare' => 
  array (
    0 => 'Block_12311028986094f62977d367_87406642',
  ),
  'layout-header-shop-nav-compare-link' => 
  array (
    0 => 'Block_7098082296094f62979c212_40309137',
  ),
  'layout-header-shop-nav-compare-dropdown' => 
  array (
    0 => 'Block_14854611086094f6297bc717_92651259',
  ),
  'layout-header-shop-nav-compare-include-comparelist-dropdown' => 
  array (
    0 => 'Block_1478518686094f6297d3835_66881845',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <li id="shop-nav-compare"
        title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'compare'),$_smarty_tpl ) );?>
"
        class="nav-item dropdown<?php if ($_smarty_tpl->tpl_vars['nSeitenTyp']->value === (defined('PAGE_VERGLEICHSLISTE') ? constant('PAGE_VERGLEICHSLISTE') : null)) {?> active<?php }?> <?php if (empty($_SESSION['Vergleichsliste']->oArtikel_arr)) {?>d-none<?php }?>">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7098082296094f62979c212_40309137', 'layout-header-shop-nav-compare-link', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14854611086094f6297bc717_92651259', 'layout-header-shop-nav-compare-dropdown', $this->tplIndex);
?>

    </li>
<?php
}
}
/* {/block 'layout-header-shop-nav-compare'} */
}
