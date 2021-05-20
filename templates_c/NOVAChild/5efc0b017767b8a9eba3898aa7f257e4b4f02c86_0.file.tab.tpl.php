<?php
/* Smarty version 3.1.38, created on 2021-05-18 11:41:24
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\includes\vendor\jtlshop\scc\src\scc\templates\tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a38bc4f09dd1_31309358',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5efc0b017767b8a9eba3898aa7f257e4b4f02c86' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\includes\\vendor\\jtlshop\\scc\\src\\scc\\templates\\tab.tpl',
      1 => 1612177977,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a38bc4f09dd1_31309358 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('id', (($tmp = $_smarty_tpl->tpl_vars['params']->value['id']->getValue() ?? null)===null||$tmp==='' ? uniqid() : $tmp));?>

<<?php echo $_smarty_tpl->tpl_vars['params']->value['tag'];?>
 class="nav-item <?php echo $_smarty_tpl->tpl_vars['params']->value['class']->getValue();?>
"
    <?php if ($_smarty_tpl->tpl_vars['params']->value['id']->hasValue()) {?>id="label-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['style']->hasValue()) {?>style="<?php echo $_smarty_tpl->tpl_vars['params']->value['style']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['itemprop']->hasValue()) {?>itemprop="<?php echo $_smarty_tpl->tpl_vars['params']->value['itemprop']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['itemscope']->getValue() === true) {?>itemscope <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['itemtype']->hasValue()) {?>itemtype="<?php echo $_smarty_tpl->tpl_vars['params']->value['itemtype']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['itemid']->hasValue()) {?>itemid="<?php echo $_smarty_tpl->tpl_vars['params']->value['itemid']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['title']->hasValue()) {?> title="<?php echo $_smarty_tpl->tpl_vars['params']->value['title']->getValue();?>
"<?php }?>
    role="<?php if ($_smarty_tpl->tpl_vars['params']->value['role']->hasValue()) {
echo $_smarty_tpl->tpl_vars['params']->value['role']->getValue();
} else { ?>presentation<?php }?>"
    <?php if ($_smarty_tpl->tpl_vars['params']->value['aria']->hasValue()) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['params']->value['aria']->getValue(), 'ariaVal', false, 'ariaKey');
$_smarty_tpl->tpl_vars['ariaVal']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ariaKey']->value => $_smarty_tpl->tpl_vars['ariaVal']->value) {
$_smarty_tpl->tpl_vars['ariaVal']->do_else = false;
?>aria-<?php echo $_smarty_tpl->tpl_vars['ariaKey']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['ariaVal']->value;?>
" <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['data']->hasValue()) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['params']->value['data']->getValue(), 'dataVal', false, 'dataKey');
$_smarty_tpl->tpl_vars['dataVal']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dataKey']->value => $_smarty_tpl->tpl_vars['dataVal']->value) {
$_smarty_tpl->tpl_vars['dataVal']->do_else = false;
?>data-<?php echo $_smarty_tpl->tpl_vars['dataKey']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['dataVal']->value;?>
" <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
>
           <a class="nav-link<?php if ($_smarty_tpl->tpl_vars['params']->value['active']->getValue() === true) {?> active<?php }
if ($_smarty_tpl->tpl_vars['params']->value['disabled']->getValue() === true) {?> disabled<?php }?>"
           href="#tab-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
           data-toggle="tab"
           role="tab"
           aria-controls="tab-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
           id="tab-link-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
        >
            <?php echo $_smarty_tpl->tpl_vars['params']->value['title']->getValue();?>

        </a>
    </<?php echo $_smarty_tpl->tpl_vars['params']->value['tag'];?>
>

<?php $_smarty_tpl->_assignInScope('tmp', (($tmp = $_smarty_tpl->tpl_vars['parentSmarty']->value->getTemplateVars('tabContents') ?? null)===null||$tmp==='' ? array() : $tmp));
$_tmp_array = isset($_smarty_tpl->tpl_vars['tmp']) ? $_smarty_tpl->tpl_vars['tmp']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->tpl_vars['blockContent']->value;
$_smarty_tpl->_assignInScope('tmp', $_tmp_array);
$_smarty_tpl->_assignInScope('x', $_smarty_tpl->tpl_vars['parentSmarty']->value->assign('tabContents',$_smarty_tpl->tpl_vars['tmp']->value));
$_smarty_tpl->_assignInScope('tmp', (($tmp = $_smarty_tpl->tpl_vars['parentSmarty']->value->getTemplateVars('tabIDs') ?? null)===null||$tmp==='' ? array() : $tmp));
$_tmp_array = isset($_smarty_tpl->tpl_vars['tmp']) ? $_smarty_tpl->tpl_vars['tmp']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->tpl_vars['id']->value;
$_smarty_tpl->_assignInScope('tmp', $_tmp_array);
$_smarty_tpl->_assignInScope('x', $_smarty_tpl->tpl_vars['parentSmarty']->value->assign('tabIDs',$_smarty_tpl->tpl_vars['tmp']->value));
if ($_smarty_tpl->tpl_vars['params']->value['active']->getValue() === true) {?>
    <?php $_smarty_tpl->_assignInScope('x', $_smarty_tpl->tpl_vars['parentSmarty']->value->assign('activeTabID',$_smarty_tpl->tpl_vars['id']->value));
}
}
}
