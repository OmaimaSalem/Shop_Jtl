<?php
/* Smarty version 3.1.38, created on 2021-05-18 11:16:48
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\snippets\scroll_top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a38600b13726_04167273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95924b5700506033e7341bb7eee4ed22f7edbb28' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\snippets\\scroll_top.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a38600b13726_04167273 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_138800895460a38600b11345_34275669', 'snippets-scroll-top');
?>

<?php }
/* {block 'snippets-scroll-top-main'} */
class Block_130345032160a38600b120d9_86864468 extends Smarty_Internal_Block
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
class Block_138800895460a38600b11345_34275669 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-scroll-top' => 
  array (
    0 => 'Block_138800895460a38600b11345_34275669',
  ),
  'snippets-scroll-top-main' => 
  array (
    0 => 'Block_130345032160a38600b120d9_86864468',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_130345032160a38600b120d9_86864468', 'snippets-scroll-top-main', $this->tplIndex);
?>

<?php
}
}
/* {/block 'snippets-scroll-top'} */
}
