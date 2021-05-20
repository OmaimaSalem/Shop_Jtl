<?php
/* Smarty version 3.1.38, created on 2021-05-20 10:02:56
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\page\404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a617b0e841f7_57482891',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf27c5f10d4b03df4e345e0ea55a3bc7c3b44b04' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\page\\404.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:page/sitemap.tpl' => 1,
  ),
),false)) {
function content_60a617b0e841f7_57482891 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_39330528560a617b0e81202_14107777', 'page-404');
?>

<?php }
/* {block 'page-404-include-sitemap'} */
class Block_2579227960a617b0e81fc3_40302074 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:page/sitemap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'page-404-include-sitemap'} */
/* {block 'page-404'} */
class Block_39330528560a617b0e81202_14107777 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page-404' => 
  array (
    0 => 'Block_39330528560a617b0e81202_14107777',
  ),
  'page-404-include-sitemap' => 
  array (
    0 => 'Block_2579227960a617b0e81fc3_40302074',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="page-not-found">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2579227960a617b0e81fc3_40302074', 'page-404-include-sitemap', $this->tplIndex);
?>

    </div>
<?php
}
}
/* {/block 'page-404'} */
}
