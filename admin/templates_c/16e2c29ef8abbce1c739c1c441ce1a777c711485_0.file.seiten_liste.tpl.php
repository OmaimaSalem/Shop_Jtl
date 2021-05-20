<?php
/* Smarty version 3.1.38, created on 2021-05-04 12:24:30
  from 'C:\xampp\htdocs\shop\admin\templates\bootstrap\tpl_inc\seiten_liste.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_609120de8ca3f4_38754923',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16e2c29ef8abbce1c739c1c441ce1a777c711485' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\admin\\templates\\bootstrap\\tpl_inc\\seiten_liste.tpl',
      1 => 1612177964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609120de8ca3f4_38754923 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['validPageTypes']->value, 'validPagetype');
$_smarty_tpl->tpl_vars['validPagetype']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['validPagetype']->value) {
$_smarty_tpl->tpl_vars['validPagetype']->do_else = false;
?>
    <option value="<?php echo $_smarty_tpl->tpl_vars['validPagetype']->value['pageID'];?>
" <?php ob_start();
echo $_smarty_tpl->tpl_vars['validPagetype']->value['pageID'];
$_prefixVariable1 = ob_get_clean();
if ($_smarty_tpl->tpl_vars['nPage']->value == $_prefixVariable1) {?>selected="selected"<?php }?>>
        <?php if ($_smarty_tpl->tpl_vars['validPagetype']->value['pageID'] === 0) {?>
            <?php echo __('allPages');?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['validPagetype']->value['pageName'];?>

        <?php }?>
    </option>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
