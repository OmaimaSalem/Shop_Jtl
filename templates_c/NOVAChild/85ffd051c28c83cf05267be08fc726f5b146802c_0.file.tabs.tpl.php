<?php
/* Smarty version 3.1.38, created on 2021-05-18 11:41:27
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\includes\vendor\jtlshop\scc\src\scc\templates\tabs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a38bc7299603_08956668',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85ffd051c28c83cf05267be08fc726f5b146802c' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\includes\\vendor\\jtlshop\\scc\\src\\scc\\templates\\tabs.tpl',
      1 => 1612177977,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a38bc7299603_08956668 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('x', $_smarty_tpl->tpl_vars['parentSmarty']->value->assign('tabIDs',array()));
$_smarty_tpl->_assignInScope('x', $_smarty_tpl->tpl_vars['parentSmarty']->value->assign('tabContents',array()));
$_smarty_tpl->_assignInScope('x', $_smarty_tpl->tpl_vars['parentSmarty']->value->assign('activeTabID',''));?>

<<?php echo $_smarty_tpl->tpl_vars['params']->value['tag'];?>

    class="nav nav-tabs <?php echo $_smarty_tpl->tpl_vars['params']->value['class']->getValue();
if ($_smarty_tpl->tpl_vars['params']->value['pills']->getValue() === true) {?> nav-pills<?php }?>"
    role="tablist"    <?php if ($_smarty_tpl->tpl_vars['params']->value['id']->hasValue()) {?>id="<?php echo $_smarty_tpl->tpl_vars['params']->value['id']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['style']->hasValue()) {?>style="<?php echo $_smarty_tpl->tpl_vars['params']->value['style'];?>
"<?php }?>
>
    <?php echo $_smarty_tpl->tpl_vars['blockContent']->value;?>

</<?php echo $_smarty_tpl->tpl_vars['params']->value['tag'];?>
>
<div class="tab-content"<?php if ($_smarty_tpl->tpl_vars['params']->value['id']->hasValue()) {?> id="tab-content-<?php echo $_smarty_tpl->tpl_vars['params']->value['id']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['itemprop']->hasValue()) {?>itemprop="<?php echo $_smarty_tpl->tpl_vars['params']->value['itemprop']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['itemscope']->getValue() === true) {?>itemscope <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['title']->hasValue()) {?> title="<?php echo $_smarty_tpl->tpl_vars['params']->value['title']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['itemtype']->hasValue()) {?>itemtype="<?php echo $_smarty_tpl->tpl_vars['params']->value['itemtype']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['itemid']->hasValue()) {?>itemid="<?php echo $_smarty_tpl->tpl_vars['params']->value['itemid']->getValue();?>
"<?php }?>
>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabContents']->value, 'tab', false, 'i');
$_smarty_tpl->tpl_vars['tab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->do_else = false;
?>
                    <div class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['activeTabID']->value === $_smarty_tpl->tpl_vars['tabIDs']->value[$_smarty_tpl->tpl_vars['i']->value]) {?> show active<?php }?>"
                 id="tab-<?php echo $_smarty_tpl->tpl_vars['tabIDs']->value[$_smarty_tpl->tpl_vars['i']->value];?>
"
                 role="tabpanel"
                 aria-labelledby="tab-link-<?php echo $_smarty_tpl->tpl_vars['tabIDs']->value[$_smarty_tpl->tpl_vars['i']->value];?>
">
                <?php echo $_smarty_tpl->tpl_vars['tab']->value;?>

            </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }
}
