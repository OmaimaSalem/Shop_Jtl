<?php
/* Smarty version 3.1.38, created on 2021-05-19 15:12:42
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\snippets\simple_captcha.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a50eca9b32e9_38703344',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '597ffb92471bcfd713ed0fadf9d4a95b4eccb001' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\snippets\\simple_captcha.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a50eca9b32e9_38703344 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_31108173560a50eca993cb3_94484900', 'snippets-simple-captcha');
?>

<?php }
/* {block 'snippets-simple-captcha-msg'} */
class Block_198869835560a50eca9a4391_33681909 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="simple-captcha form-error-msg">
                <i class="fas fa-exclamation-triangle"></i>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'invalidToken'),$_smarty_tpl ) );?>

            </div>
        <?php
}
}
/* {/block 'snippets-simple-captcha-msg'} */
/* {block 'snippets-simple-captcha'} */
class Block_31108173560a50eca993cb3_94484900 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-simple-captcha' => 
  array (
    0 => 'Block_31108173560a50eca993cb3_94484900',
  ),
  'snippets-simple-captcha-msg' => 
  array (
    0 => 'Block_198869835560a50eca9a4391_33681909',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"hidden",'name'=>$_smarty_tpl->tpl_vars['captchaToken']->value,'value'=>$_smarty_tpl->tpl_vars['captchaCode']->value),$_smarty_tpl ) );?>

    <?php if ((isset($_smarty_tpl->tpl_vars['bAnti_spam_failed']->value)) && $_smarty_tpl->tpl_vars['bAnti_spam_failed']->value) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_198869835560a50eca9a4391_33681909', 'snippets-simple-captcha-msg', $this->tplIndex);
?>

    <?php }
}
}
/* {/block 'snippets-simple-captcha'} */
}
