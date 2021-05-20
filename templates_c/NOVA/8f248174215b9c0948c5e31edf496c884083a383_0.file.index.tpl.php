<?php
/* Smarty version 3.1.38, created on 2021-05-19 15:09:57
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\productdetails\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a50e25a4a832_39805731',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f248174215b9c0948c5e31edf496c884083a383' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\productdetails\\index.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/header.tpl' => 1,
    'file:productlist/item_list.tpl' => 1,
    'file:productlist/item_box.tpl' => 1,
    'file:snippets/extension.tpl' => 1,
    'file:productdetails/details.tpl' => 1,
    'file:layout/footer.tpl' => 1,
  ),
),false)) {
function content_60a50e25a4a832_39805731 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169250444760a50e258da412_74352210', 'productdetails-index');
?>

<?php }
/* {block 'productdetails-index-include-header'} */
class Block_39489654060a50e258f7e02_45591825 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if (!(isset($_smarty_tpl->tpl_vars['bAjaxRequest']->value)) || !$_smarty_tpl->tpl_vars['bAjaxRequest']->value) {?>
            <?php $_smarty_tpl->_subTemplateRender('file:layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>
    <?php
}
}
/* {/block 'productdetails-index-include-header'} */
/* {block 'productdetails-index-include-item-list'} */
class Block_46255086460a50e259c8c03_61021000 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:productlist/item_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php
}
}
/* {/block 'productdetails-index-include-item-list'} */
/* {block 'productdetails-index-include'} */
class Block_17089508260a50e259d04d9_66632880 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:productlist/item_box.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php
}
}
/* {/block 'productdetails-index-include'} */
/* {block 'productdetails-index-include-extension'} */
class Block_125443653960a50e25a1e0c2_88476288 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:snippets/extension.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php
}
}
/* {/block 'productdetails-index-include-extension'} */
/* {block 'productdetails-index-include-details'} */
class Block_92412330560a50e25a20139_35161058 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:productdetails/details.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php
}
}
/* {/block 'productdetails-index-include-details'} */
/* {block 'productdetails-index-result-wrapper'} */
class Block_196280309260a50e259d9e84_92342103 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div id="result-wrapper" data-wrapper="true" itemprop="mainEntity" itemscope itemtype="http://schema.org/Product">
                    <meta itemprop="url" content="<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->cURLFull;?>
">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125443653960a50e25a1e0c2_88476288', 'productdetails-index-include-extension', $this->tplIndex);
?>

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_92412330560a50e25a20139_35161058', 'productdetails-index-include-details', $this->tplIndex);
?>

                </div>
            <?php
}
}
/* {/block 'productdetails-index-result-wrapper'} */
/* {block 'productdetails-index-content'} */
class Block_654900960a50e259682b7_09120706 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ((isset($_smarty_tpl->tpl_vars['bAjaxRequest']->value)) && $_smarty_tpl->tpl_vars['bAjaxRequest']->value && (isset($_smarty_tpl->tpl_vars['listStyle']->value)) && ($_smarty_tpl->tpl_vars['listStyle']->value === 'list' || $_smarty_tpl->tpl_vars['listStyle']->value === 'gallery')) {?>
            <?php if ($_smarty_tpl->tpl_vars['listStyle']->value === 'list') {?>
                <?php $_smarty_tpl->_assignInScope('tplscope', 'list');?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_46255086460a50e259c8c03_61021000', 'productdetails-index-include-item-list', $this->tplIndex);
?>

            <?php } elseif ($_smarty_tpl->tpl_vars['listStyle']->value === 'gallery') {?>
                <?php $_smarty_tpl->_assignInScope('tplscope', 'gallery');?>
                <?php $_smarty_tpl->_assignInScope('class', 'thumbnail');?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17089508260a50e259d04d9_66632880', 'productdetails-index-include', $this->tplIndex);
?>

            <?php }?>
        <?php } else { ?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_196280309260a50e259d9e84_92342103', 'productdetails-index-result-wrapper', $this->tplIndex);
?>

        <?php }?>
    <?php
}
}
/* {/block 'productdetails-index-content'} */
/* {block 'productdetails-include-footer'} */
class Block_37999355860a50e25a37863_34575857 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if (!(isset($_smarty_tpl->tpl_vars['bAjaxRequest']->value)) || !$_smarty_tpl->tpl_vars['bAjaxRequest']->value) {?>
            <?php $_smarty_tpl->_subTemplateRender('file:layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>
    <?php
}
}
/* {/block 'productdetails-include-footer'} */
/* {block 'productdetails-index'} */
class Block_169250444760a50e258da412_74352210 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'productdetails-index' => 
  array (
    0 => 'Block_169250444760a50e258da412_74352210',
  ),
  'productdetails-index-include-header' => 
  array (
    0 => 'Block_39489654060a50e258f7e02_45591825',
  ),
  'productdetails-index-content' => 
  array (
    0 => 'Block_654900960a50e259682b7_09120706',
  ),
  'productdetails-index-include-item-list' => 
  array (
    0 => 'Block_46255086460a50e259c8c03_61021000',
  ),
  'productdetails-index-include' => 
  array (
    0 => 'Block_17089508260a50e259d04d9_66632880',
  ),
  'productdetails-index-result-wrapper' => 
  array (
    0 => 'Block_196280309260a50e259d9e84_92342103',
  ),
  'productdetails-index-include-extension' => 
  array (
    0 => 'Block_125443653960a50e25a1e0c2_88476288',
  ),
  'productdetails-index-include-details' => 
  array (
    0 => 'Block_92412330560a50e25a20139_35161058',
  ),
  'productdetails-include-footer' => 
  array (
    0 => 'Block_37999355860a50e25a37863_34575857',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_39489654060a50e258f7e02_45591825', 'productdetails-index-include-header', $this->tplIndex);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_654900960a50e259682b7_09120706', 'productdetails-index-content', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_37999355860a50e25a37863_34575857', 'productdetails-include-footer', $this->tplIndex);
?>

<?php
}
}
/* {/block 'productdetails-index'} */
}
