<?php
/* Smarty version 3.1.38, created on 2021-05-18 11:41:21
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\productdetails\matrix.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a38bc1b9ff55_37916633',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9389df8d027933dd62b4916f04a81f97bb902e66' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\productdetails\\matrix.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:productdetails/matrix_list.tpl' => 1,
    'file:productdetails/matrix_classic.tpl' => 1,
  ),
),false)) {
function content_60a38bc1b9ff55_37916633 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20298517860a38bc1b94481_29852047', 'productdetails-matrix');
?>

<?php }
/* {block 'productdetails-index-include-matrix-list'} */
class Block_135491630460a38bc1b9a071_04126554 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:productdetails/matrix_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php
}
}
/* {/block 'productdetails-index-include-matrix-list'} */
/* {block 'productdetails-index-include-matrix-classic'} */
class Block_19352317960a38bc1b9c418_47433083 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:productdetails/matrix_classic.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php
}
}
/* {/block 'productdetails-index-include-matrix-classic'} */
/* {block 'productdetails-matrix'} */
class Block_20298517860a38bc1b94481_29852047 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'productdetails-matrix' => 
  array (
    0 => 'Block_20298517860a38bc1b94481_29852047',
  ),
  'productdetails-index-include-matrix-list' => 
  array (
    0 => 'Block_135491630460a38bc1b9a071_04126554',
  ),
  'productdetails-index-include-matrix-classic' => 
  array (
    0 => 'Block_19352317960a38bc1b9c418_47433083',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['showMatrix']->value) {?>
        <div class="product-matrix clearfix">
            <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_warenkorbmatrix_anzeigeformat'] === 'L' && $_smarty_tpl->tpl_vars['Artikel']->value->nIstVater == 1 && count($_smarty_tpl->tpl_vars['Artikel']->value->oVariationKombiKinderAssoc_arr) > 0) {?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_135491630460a38bc1b9a071_04126554', 'productdetails-index-include-matrix-list', $this->tplIndex);
?>

            <?php } else { ?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19352317960a38bc1b9c418_47433083', 'productdetails-index-include-matrix-classic', $this->tplIndex);
?>

            <?php }?>
         </div>
    <?php }
}
}
/* {/block 'productdetails-matrix'} */
}
