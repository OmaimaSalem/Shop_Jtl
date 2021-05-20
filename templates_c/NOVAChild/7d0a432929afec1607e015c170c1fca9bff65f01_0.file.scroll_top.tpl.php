<?php
/* Smarty version 3.1.38, created on 2021-05-04 14:27:15
  from 'C:\xampp\htdocs\shop\templates\NOVA\snippets\scroll_top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60913da328af62_35748713',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d0a432929afec1607e015c170c1fca9bff65f01' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\templates\\NOVA\\snippets\\scroll_top.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60913da328af62_35748713 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18688823760913da3288749_89148716', 'snippets-scroll-top');
?>

<?php }
/* {block 'snippets-scroll-top-main'} */
class Block_80772485160913da3289544_52005609 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="smoothscroll-top go-to-top scroll-to-top">
            <span class="scroll-top-inner">
                <i class="fas fa-2x fa-chevron-up"></i>
            </span>
        </div>
    <?php
}
}
/* {/block 'snippets-scroll-top-main'} */
/* {block 'snippets-scroll-top'} */
class Block_18688823760913da3288749_89148716 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-scroll-top' => 
  array (
    0 => 'Block_18688823760913da3288749_89148716',
  ),
  'snippets-scroll-top-main' => 
  array (
    0 => 'Block_80772485160913da3289544_52005609',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_80772485160913da3289544_52005609', 'snippets-scroll-top-main', $this->tplIndex);
?>

<?php
}
}
/* {/block 'snippets-scroll-top'} */
}
