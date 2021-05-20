<?php
/* Smarty version 3.1.38, created on 2021-05-19 15:10:25
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\productdetails\matrix.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a50e41db4397_83607357',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9530aaa46bf13033ab48b85e6c862d926d8cbf4' => 
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
function content_60a50e41db4397_83607357 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_93071111660a50e41d98a03_53915490', 'productdetails-matrix');
?>

<?php }
/* {block 'productdetails-index-include-matrix-list'} */
class Block_133810172560a50e41dab332_81296056 extends Smarty_Internal_Block
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
class Block_191235310160a50e41dadbf9_56108031 extends Smarty_Internal_Block
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
class Block_93071111660a50e41d98a03_53915490 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'productdetails-matrix' => 
  array (
    0 => 'Block_93071111660a50e41d98a03_53915490',
  ),
  'productdetails-index-include-matrix-list' => 
  array (
    0 => 'Block_133810172560a50e41dab332_81296056',
  ),
  'productdetails-index-include-matrix-classic' => 
  array (
    0 => 'Block_191235310160a50e41dadbf9_56108031',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['showMatrix']->value) {?>
        <div class="product-matrix clearfix">
            <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_warenkorbmatrix_anzeigeformat'] === 'L' && $_smarty_tpl->tpl_vars['Artikel']->value->nIstVater == 1 && count($_smarty_tpl->tpl_vars['Artikel']->value->oVariationKombiKinderAssoc_arr) > 0) {?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_133810172560a50e41dab332_81296056', 'productdetails-index-include-matrix-list', $this->tplIndex);
?>

            <?php } else { ?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_191235310160a50e41dadbf9_56108031', 'productdetails-index-include-matrix-classic', $this->tplIndex);
?>

            <?php }?>
         </div>
    <?php }
}
}
/* {/block 'productdetails-matrix'} */
}
