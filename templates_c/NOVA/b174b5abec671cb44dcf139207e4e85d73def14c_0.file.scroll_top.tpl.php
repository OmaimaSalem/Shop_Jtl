<?php
/* Smarty version 3.1.38, created on 2021-05-04 11:46:31
  from 'C:\xampp\htdocs\shop\templates\NOVA\snippets\scroll_top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_609117f7b7cda7_24099348',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b174b5abec671cb44dcf139207e4e85d73def14c' => 
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
function content_609117f7b7cda7_24099348 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_548225576609117f7b7a977_63150911', 'snippets-scroll-top');
?>

<?php }
/* {block 'snippets-scroll-top-main'} */
class Block_226429527609117f7b7b8d9_09231566 extends Smarty_Internal_Block
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
class Block_548225576609117f7b7a977_63150911 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-scroll-top' => 
  array (
    0 => 'Block_548225576609117f7b7a977_63150911',
  ),
  'snippets-scroll-top-main' => 
  array (
    0 => 'Block_226429527609117f7b7b8d9_09231566',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_226429527609117f7b7b8d9_09231566', 'snippets-scroll-top-main', $this->tplIndex);
?>

<?php
}
}
/* {/block 'snippets-scroll-top'} */
}
