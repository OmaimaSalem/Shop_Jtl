<?php
/* Smarty version 3.1.38, created on 2021-05-19 15:00:32
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\productlist\productlist_actions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a50bf0433723_38765673',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d7834b4893af11781cbf339ba30b2a51f0e7871' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\productlist\\productlist_actions.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/comparelist_button.tpl' => 1,
    'file:snippets/wishlist_button.tpl' => 1,
  ),
),false)) {
function content_60a50bf0433723_38765673 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_104480533260a50bf040e113_05624038', 'productlist-productlist-actions');
?>

<?php }
/* {block 'productlist-productlist-actions-include-comparelist-button'} */
class Block_103293327760a50bf041a444_29261812 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:snippets/comparelist_button.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php
}
}
/* {/block 'productlist-productlist-actions-include-comparelist-button'} */
/* {block 'productlist-productlist-actions-include-wishlist-button'} */
class Block_55853112460a50bf0426fa9_97501159 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:snippets/wishlist_button.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php
}
}
/* {/block 'productlist-productlist-actions-include-wishlist-button'} */
/* {block 'productlist-productlist-actions-buttons'} */
class Block_16707417260a50bf0411fa7_93457966 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if (!($_smarty_tpl->tpl_vars['Artikel']->value->nIstVater && $_smarty_tpl->tpl_vars['Artikel']->value->kVaterArtikel === 0)) {?>
                <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeluebersicht']['artikeluebersicht_vergleichsliste_anzeigen'] === 'Y') {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_103293327760a50bf041a444_29261812', 'productlist-productlist-actions-include-comparelist-button', $this->tplIndex);
?>

                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_wunschliste_anzeigen'] === 'Y' && $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeluebersicht']['artikeluebersicht_wunschzettel_anzeigen'] === 'Y') {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_55853112460a50bf0426fa9_97501159', 'productlist-productlist-actions-include-wishlist-button', $this->tplIndex);
?>

                <?php }?>
            <?php }?>
        <?php
}
}
/* {/block 'productlist-productlist-actions-buttons'} */
/* {block 'productlist-productlist-actions-input-hidden'} */
class Block_175421180260a50bf042a4a6_90855156 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php ob_start();
echo $_smarty_tpl->tpl_vars['Artikel']->value->kVariKindArtikel;
$_prefixVariable40 = ob_get_clean();
ob_start();
if (!empty($_prefixVariable40)) {
echo (string)$_smarty_tpl->tpl_vars['Artikel']->value->kVariKindArtikel;
} else {
echo (string)$_smarty_tpl->tpl_vars['Artikel']->value->kArtikel;
}
$_prefixVariable41=ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"hidden",'name'=>"a",'value'=>$_prefixVariable41),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'productlist-productlist-actions-input-hidden'} */
/* {block 'productlist-productlist-actions'} */
class Block_104480533260a50bf040e113_05624038 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'productlist-productlist-actions' => 
  array (
    0 => 'Block_104480533260a50bf040e113_05624038',
  ),
  'productlist-productlist-actions-buttons' => 
  array (
    0 => 'Block_16707417260a50bf0411fa7_93457966',
  ),
  'productlist-productlist-actions-include-comparelist-button' => 
  array (
    0 => 'Block_103293327760a50bf041a444_29261812',
  ),
  'productlist-productlist-actions-include-wishlist-button' => 
  array (
    0 => 'Block_55853112460a50bf0426fa9_97501159',
  ),
  'productlist-productlist-actions-input-hidden' => 
  array (
    0 => 'Block_175421180260a50bf042a4a6_90855156',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_block_plugin87 = isset($_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0] : null;
if (!is_callable(array($_block_plugin87, 'render'))) {
throw new SmartyException('block tag \'form\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('action'=>"#",'method'=>"post",'class'=>"product-actions actions-small d-flex",'data'=>array("toggle"=>"product-actions")));
$_block_repeat=true;
echo $_block_plugin87->render(array('action'=>"#",'method'=>"post",'class'=>"product-actions actions-small d-flex",'data'=>array("toggle"=>"product-actions")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16707417260a50bf0411fa7_93457966', 'productlist-productlist-actions-buttons', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_175421180260a50bf042a4a6_90855156', 'productlist-productlist-actions-input-hidden', $this->tplIndex);
?>

    <?php $_block_repeat=false;
echo $_block_plugin87->render(array('action'=>"#",'method'=>"post",'class'=>"product-actions actions-small d-flex",'data'=>array("toggle"=>"product-actions")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'productlist-productlist-actions'} */
}
