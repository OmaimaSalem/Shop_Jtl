<?php
/* Smarty version 3.1.38, created on 2021-05-19 15:00:27
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\includes\vendor\jtlshop\scc\src\scc\templates\dropdown.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a50beb7cb8b4_59003826',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f7e3f04a768ac3aa6119c7a84db45edc6720c8d' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\includes\\vendor\\jtlshop\\scc\\src\\scc\\templates\\dropdown.tpl',
      1 => 1612177977,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a50beb7cb8b4_59003826 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="dropdown <?php if ($_smarty_tpl->tpl_vars['params']->value['dropup']->getValue() === true) {?> dropup<?php }?> <?php echo $_smarty_tpl->tpl_vars['params']->value['class']->getValue();?>
"
    <?php if ($_smarty_tpl->tpl_vars['params']->value['style']->hasValue()) {?> style="<?php echo $_smarty_tpl->tpl_vars['params']->value['style']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['id']->hasValue()) {?> id="<?php echo $_smarty_tpl->tpl_vars['params']->value['id']->getValue();?>
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
    <button
        class="btn btn-<?php echo $_smarty_tpl->tpl_vars['params']->value['variant']->getValue();
if ($_smarty_tpl->tpl_vars['params']->value['size']->hasValue()) {?> btn-<?php echo $_smarty_tpl->tpl_vars['params']->value['size']->getValue();
}?> dropdown-toggle <?php echo $_smarty_tpl->tpl_vars['params']->value['toggle-class']->getValue();?>
"
        type="button"
        data-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false"
        <?php if ($_smarty_tpl->tpl_vars['params']->value['id']->hasValue()) {?> aria-labelledby="<?php echo $_smarty_tpl->tpl_vars['params']->value['id']->getValue();?>
"<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['params']->value['role']->hasValue()) {?>role="<?php echo $_smarty_tpl->tpl_vars['params']->value['role']->getValue();?>
"<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['params']->value['aria']->hasValue()) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['params']->value['aria']->getValue(), 'ariaVal', false, 'ariaKey');
$_smarty_tpl->tpl_vars['ariaVal']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ariaKey']->value => $_smarty_tpl->tpl_vars['ariaVal']->value) {
$_smarty_tpl->tpl_vars['ariaVal']->do_else = false;
?>aria-<?php echo $_smarty_tpl->tpl_vars['ariaKey']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['ariaVal']->value;?>
" <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['params']->value['data']->hasValue()) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['params']->value['data']->getValue(), 'dataVal', false, 'dataKey');
$_smarty_tpl->tpl_vars['dataVal']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dataKey']->value => $_smarty_tpl->tpl_vars['dataVal']->value) {
$_smarty_tpl->tpl_vars['dataVal']->do_else = false;
?>data-<?php echo $_smarty_tpl->tpl_vars['dataKey']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['dataVal']->value;?>
" <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> <?php }?>>
        <?php echo $_smarty_tpl->tpl_vars['params']->value['text']->getValue();?>
</button>
    <div class="dropdown-menu<?php if ($_smarty_tpl->tpl_vars['params']->value['right']->getValue() === true) {?> dropdown-menu-right<?php }?>">
        <?php echo $_smarty_tpl->tpl_vars['blockContent']->value;?>

    </div>
</div>
<?php }
}
