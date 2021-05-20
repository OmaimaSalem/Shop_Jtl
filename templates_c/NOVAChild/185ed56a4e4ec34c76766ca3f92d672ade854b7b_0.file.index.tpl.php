<?php
/* Smarty version 3.1.38, created on 2021-05-18 11:41:09
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\productdetails\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a38bb59f09f3_36054539',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '185ed56a4e4ec34c76766ca3f92d672ade854b7b' => 
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
function content_60a38bb59f09f3_36054539 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_45699656960a38bb59ab7b1_86480267', 'productdetails-index');
?>

<?php }
/* {block 'productdetails-index-include-header'} */
class Block_70697557260a38bb59b17e5_40464893 extends Smarty_Internal_Block
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
class Block_64137466660a38bb59d4df6_76341453 extends Smarty_Internal_Block
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
class Block_115014996760a38bb59da357_56299919 extends Smarty_Internal_Block
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
class Block_58711802160a38bb59e33e0_19292191 extends Smarty_Internal_Block
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
class Block_180734605960a38bb59e5543_20854367 extends Smarty_Internal_Block
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
class Block_40339076760a38bb59dd474_62247988 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div id="result-wrapper" data-wrapper="true" itemprop="mainEntity" itemscope itemtype="http://schema.org/Product">
                    <meta itemprop="url" content="<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->cURLFull;?>
">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_58711802160a38bb59e33e0_19292191', 'productdetails-index-include-extension', $this->tplIndex);
?>

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_180734605960a38bb59e5543_20854367', 'productdetails-index-include-details', $this->tplIndex);
?>

                </div>
            <?php
}
}
/* {/block 'productdetails-index-result-wrapper'} */
/* {block 'productdetails-index-content'} */
class Block_43542490660a38bb59c1732_34984345 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ((isset($_smarty_tpl->tpl_vars['bAjaxRequest']->value)) && $_smarty_tpl->tpl_vars['bAjaxRequest']->value && (isset($_smarty_tpl->tpl_vars['listStyle']->value)) && ($_smarty_tpl->tpl_vars['listStyle']->value === 'list' || $_smarty_tpl->tpl_vars['listStyle']->value === 'gallery')) {?>
            <?php if ($_smarty_tpl->tpl_vars['listStyle']->value === 'list') {?>
                <?php $_smarty_tpl->_assignInScope('tplscope', 'list');?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_64137466660a38bb59d4df6_76341453', 'productdetails-index-include-item-list', $this->tplIndex);
?>

            <?php } elseif ($_smarty_tpl->tpl_vars['listStyle']->value === 'gallery') {?>
                <?php $_smarty_tpl->_assignInScope('tplscope', 'gallery');?>
                <?php $_smarty_tpl->_assignInScope('class', 'thumbnail');?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_115014996760a38bb59da357_56299919', 'productdetails-index-include', $this->tplIndex);
?>

            <?php }?>
        <?php } else { ?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_40339076760a38bb59dd474_62247988', 'productdetails-index-result-wrapper', $this->tplIndex);
?>

        <?php }?>
    <?php
}
}
/* {/block 'productdetails-index-content'} */
/* {block 'productdetails-include-footer'} */
class Block_79169418660a38bb59eb6c9_27781552 extends Smarty_Internal_Block
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
class Block_45699656960a38bb59ab7b1_86480267 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'productdetails-index' => 
  array (
    0 => 'Block_45699656960a38bb59ab7b1_86480267',
  ),
  'productdetails-index-include-header' => 
  array (
    0 => 'Block_70697557260a38bb59b17e5_40464893',
  ),
  'productdetails-index-content' => 
  array (
    0 => 'Block_43542490660a38bb59c1732_34984345',
  ),
  'productdetails-index-include-item-list' => 
  array (
    0 => 'Block_64137466660a38bb59d4df6_76341453',
  ),
  'productdetails-index-include' => 
  array (
    0 => 'Block_115014996760a38bb59da357_56299919',
  ),
  'productdetails-index-result-wrapper' => 
  array (
    0 => 'Block_40339076760a38bb59dd474_62247988',
  ),
  'productdetails-index-include-extension' => 
  array (
    0 => 'Block_58711802160a38bb59e33e0_19292191',
  ),
  'productdetails-index-include-details' => 
  array (
    0 => 'Block_180734605960a38bb59e5543_20854367',
  ),
  'productdetails-include-footer' => 
  array (
    0 => 'Block_79169418660a38bb59eb6c9_27781552',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_70697557260a38bb59b17e5_40464893', 'productdetails-index-include-header', $this->tplIndex);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_43542490660a38bb59c1732_34984345', 'productdetails-index-content', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_79169418660a38bb59eb6c9_27781552', 'productdetails-include-footer', $this->tplIndex);
?>

<?php
}
}
/* {/block 'productdetails-index'} */
}
