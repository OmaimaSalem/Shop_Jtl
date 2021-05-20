<?php
/* Smarty version 3.1.38, created on 2021-05-19 14:59:13
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\snippets\alert_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a50ba17f5f48_60575681',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '955fc27361a77550f6974d7f1740962c24f789ab' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\snippets\\alert_list.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a50ba17f5f48_60575681 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_163626764260a50ba17ea564_99844649', 'snippets-alert-list');
?>

<?php }
/* {block 'snippets-alert-list'} */
class Block_163626764260a50ba17ea564_99844649 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-alert-list' => 
  array (
    0 => 'Block_163626764260a50ba17ea564_99844649',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (count($_smarty_tpl->tpl_vars['alertList']->value->getAlertlist()) > 0) {?>
        <div id="alert-list" class="<?php if ((($tmp = $_smarty_tpl->tpl_vars['container']->value ?? null)===null||$tmp==='' ? true : $tmp)) {?>container<?php }?>">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['alertList']->value->getAlertlist(), 'alert');
$_smarty_tpl->tpl_vars['alert']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['alert']->value) {
$_smarty_tpl->tpl_vars['alert']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['alert']->value->getShowInAlertListTemplate()) {?>
                    <?php echo $_smarty_tpl->tpl_vars['alert']->value->display();?>

                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    <?php }
}
}
/* {/block 'snippets-alert-list'} */
}
