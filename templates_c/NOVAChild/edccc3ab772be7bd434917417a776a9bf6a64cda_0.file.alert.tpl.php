<?php
/* Smarty version 3.1.38, created on 2021-05-20 10:02:56
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\snippets\alert.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a617b0483d03_27239211',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'edccc3ab772be7bd434917417a776a9bf6a64cda' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\snippets\\alert.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a617b0483d03_27239211 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_198105540660a617b0462801_79527117', 'snippets-alert');
?>

<?php }
/* {block 'snippets-alert'} */
class Block_198105540660a617b0462801_79527117 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-alert' => 
  array (
    0 => 'Block_198105540660a617b0462801_79527117',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php ob_start();
echo $_smarty_tpl->tpl_vars['alert']->value->getCssType();
$_prefixVariable13 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['alert']->value->getFadeOut();
$_prefixVariable14 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['alert']->value->getKey();
$_prefixVariable15 = ob_get_clean();
ob_start();
if ($_smarty_tpl->tpl_vars['alert']->value->getId()) {
echo (string)$_smarty_tpl->tpl_vars['alert']->value->getId();
}
$_prefixVariable16=ob_get_clean();
$_block_plugin32 = isset($_smarty_tpl->smarty->registered_plugins['block']['alert'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['alert'][0][0] : null;
if (!is_callable(array($_block_plugin32, 'render'))) {
throw new SmartyException('block tag \'alert\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('alert', array('variant'=>$_prefixVariable13,'data'=>array("fade-out"=>$_prefixVariable14,"key"=>$_prefixVariable15),'id'=>$_prefixVariable16,'class'=>"alert-wrapper"));
$_block_repeat=true;
echo $_block_plugin32->render(array('variant'=>$_prefixVariable13,'data'=>array("fade-out"=>$_prefixVariable14,"key"=>$_prefixVariable15),'id'=>$_prefixVariable16,'class'=>"alert-wrapper"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php if ($_smarty_tpl->tpl_vars['alert']->value->getIcon()) {?>
            <i class="fas fa-<?php if ($_smarty_tpl->tpl_vars['alert']->value->getIcon() === 'warning') {?>exclamation-triangle<?php } else {
echo $_smarty_tpl->tpl_vars['alert']->value->getIcon();
}?>"></i>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['alert']->value->getDismissable()) {?><div class="close">&times;</div><?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['alert']->value->getLinkHref()) && empty($_smarty_tpl->tpl_vars['alert']->value->getLinkText())) {?>
            <?php $_block_plugin33 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin33, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['alert']->value->getLinkHref()));
$_block_repeat=true;
echo $_block_plugin33->render(array('href'=>$_smarty_tpl->tpl_vars['alert']->value->getLinkHref()), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['alert']->value->getMessage();
$_block_repeat=false;
echo $_block_plugin33->render(array('href'=>$_smarty_tpl->tpl_vars['alert']->value->getLinkHref()), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php } elseif (!empty($_smarty_tpl->tpl_vars['alert']->value->getLinkHref()) && !empty($_smarty_tpl->tpl_vars['alert']->value->getLinkText())) {?>
            <?php echo $_smarty_tpl->tpl_vars['alert']->value->getMessage();?>

            <?php $_block_plugin34 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin34, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['alert']->value->getLinkHref()));
$_block_repeat=true;
echo $_block_plugin34->render(array('href'=>$_smarty_tpl->tpl_vars['alert']->value->getLinkHref()), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['alert']->value->getLinkText();
$_block_repeat=false;
echo $_block_plugin34->render(array('href'=>$_smarty_tpl->tpl_vars['alert']->value->getLinkHref()), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['alert']->value->getMessage();?>

        <?php }?>
    <?php $_block_repeat=false;
echo $_block_plugin32->render(array('variant'=>$_prefixVariable13,'data'=>array("fade-out"=>$_prefixVariable14,"key"=>$_prefixVariable15),'id'=>$_prefixVariable16,'class'=>"alert-wrapper"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'snippets-alert'} */
}
