<?php
/* Smarty version 3.1.38, created on 2021-05-20 16:41:05
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\productdetails\pushed.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a67501e20452_33993033',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60bd187058858b8f7f9b9ace51823c149316a4e9' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\productdetails\\pushed.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:productdetails/pushed_success.tpl' => 1,
  ),
),false)) {
function content_60a67501e20452_33993033 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_30416547360a67501e095e9_03754180', 'productdetails-pushed');
?>

<?php }
/* {block 'productdetails-pushed'} */
class Block_30416547360a67501e095e9_03754180 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'productdetails-pushed' => 
  array (
    0 => 'Block_30416547360a67501e095e9_03754180',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['nSeitenTyp']->value !== (defined('PAGE_ARTIKEL') ? constant('PAGE_ARTIKEL') : null)) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:productdetails/pushed_success.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('Artikel'=>$_smarty_tpl->tpl_vars['zuletztInWarenkorbGelegterArtikel']->value,'card'=>false), 0, false);
?>
    <?php }
}
}
/* {/block 'productdetails-pushed'} */
}
