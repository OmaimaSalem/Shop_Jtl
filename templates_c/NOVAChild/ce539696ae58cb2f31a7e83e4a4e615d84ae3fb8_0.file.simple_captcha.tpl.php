<?php
/* Smarty version 3.1.38, created on 2021-05-18 11:41:30
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\snippets\simple_captcha.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a38bca52ea51_56534453',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce539696ae58cb2f31a7e83e4a4e615d84ae3fb8' => 
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
function content_60a38bca52ea51_56534453 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_51619946960a38bca523ae1_41830929', 'snippets-simple-captcha');
?>

<?php }
/* {block 'snippets-simple-captcha-msg'} */
class Block_179845271160a38bca529250_65852892 extends Smarty_Internal_Block
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
class Block_51619946960a38bca523ae1_41830929 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-simple-captcha' => 
  array (
    0 => 'Block_51619946960a38bca523ae1_41830929',
  ),
  'snippets-simple-captcha-msg' => 
  array (
    0 => 'Block_179845271160a38bca529250_65852892',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"hidden",'name'=>$_smarty_tpl->tpl_vars['captchaToken']->value,'value'=>$_smarty_tpl->tpl_vars['captchaCode']->value),$_smarty_tpl ) );?>

    <?php if ((isset($_smarty_tpl->tpl_vars['bAnti_spam_failed']->value)) && $_smarty_tpl->tpl_vars['bAnti_spam_failed']->value) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_179845271160a38bca529250_65852892', 'snippets-simple-captcha-msg', $this->tplIndex);
?>

    <?php }
}
}
/* {/block 'snippets-simple-captcha'} */
}
