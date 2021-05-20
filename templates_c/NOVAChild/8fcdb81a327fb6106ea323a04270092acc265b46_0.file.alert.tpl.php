<?php
/* Smarty version 3.1.38, created on 2021-05-07 10:27:40
  from 'C:\xampp\htdocs\shop\templates\NOVA\snippets\alert.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6094f9fc449d22_35320044',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fcdb81a327fb6106ea323a04270092acc265b46' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\templates\\NOVA\\snippets\\alert.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6094f9fc449d22_35320044 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3947380226094f9fc42d446_75167755', 'snippets-alert');
?>

<?php }
/* {block 'snippets-alert'} */
class Block_3947380226094f9fc42d446_75167755 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-alert' => 
  array (
    0 => 'Block_3947380226094f9fc42d446_75167755',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php ob_start();
echo $_smarty_tpl->tpl_vars['alert']->value->getCssType();
$_prefixVariable10 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['alert']->value->getFadeOut();
$_prefixVariable11 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['alert']->value->getKey();
$_prefixVariable12 = ob_get_clean();
ob_start();
if ($_smarty_tpl->tpl_vars['alert']->value->getId()) {
echo (string)$_smarty_tpl->tpl_vars['alert']->value->getId();
}
$_prefixVariable13=ob_get_clean();
$_block_plugin25 = isset($_smarty_tpl->smarty->registered_plugins['block']['alert'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['alert'][0][0] : null;
if (!is_callable(array($_block_plugin25, 'render'))) {
throw new SmartyException('block tag \'alert\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('alert', array('variant'=>$_prefixVariable10,'data'=>array("fade-out"=>$_prefixVariable11,"key"=>$_prefixVariable12),'id'=>$_prefixVariable13,'class'=>"alert-wrapper"));
$_block_repeat=true;
echo $_block_plugin25->render(array('variant'=>$_prefixVariable10,'data'=>array("fade-out"=>$_prefixVariable11,"key"=>$_prefixVariable12),'id'=>$_prefixVariable13,'class'=>"alert-wrapper"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php if ($_smarty_tpl->tpl_vars['alert']->value->getIcon()) {?>
            <i class="fas fa-<?php if ($_smarty_tpl->tpl_vars['alert']->value->getIcon() === 'warning') {?>exclamation-triangle<?php } else {
echo $_smarty_tpl->tpl_vars['alert']->value->getIcon();
}?>"></i>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['alert']->value->getDismissable()) {?><div class="close">&times;</div><?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['alert']->value->getLinkHref()) && empty($_smarty_tpl->tpl_vars['alert']->value->getLinkText())) {?>
            <?php $_block_plugin26 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin26, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['alert']->value->getLinkHref()));
$_block_repeat=true;
echo $_block_plugin26->render(array('href'=>$_smarty_tpl->tpl_vars['alert']->value->getLinkHref()), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['alert']->value->getMessage();
$_block_repeat=false;
echo $_block_plugin26->render(array('href'=>$_smarty_tpl->tpl_vars['alert']->value->getLinkHref()), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php } elseif (!empty($_smarty_tpl->tpl_vars['alert']->value->getLinkHref()) && !empty($_smarty_tpl->tpl_vars['alert']->value->getLinkText())) {?>
            <?php echo $_smarty_tpl->tpl_vars['alert']->value->getMessage();?>

            <?php $_block_plugin27 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin27, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['alert']->value->getLinkHref()));
$_block_repeat=true;
echo $_block_plugin27->render(array('href'=>$_smarty_tpl->tpl_vars['alert']->value->getLinkHref()), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['alert']->value->getLinkText();
$_block_repeat=false;
echo $_block_plugin27->render(array('href'=>$_smarty_tpl->tpl_vars['alert']->value->getLinkHref()), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['alert']->value->getMessage();?>

        <?php }?>
    <?php $_block_repeat=false;
echo $_block_plugin25->render(array('variant'=>$_prefixVariable10,'data'=>array("fade-out"=>$_prefixVariable11,"key"=>$_prefixVariable12),'id'=>$_prefixVariable13,'class'=>"alert-wrapper"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'snippets-alert'} */
}
