<?php
/* Smarty version 3.1.38, created on 2021-05-07 10:22:02
  from 'C:\xampp\htdocs\shop\admin\opc\tpl\config\config.checkbox.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6094f8aad4bbd8_14237521',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc656bba70ceff2459d0dc0a6d5b74ec7bcd0610' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\admin\\opc\\tpl\\config\\config.checkbox.tpl',
      1 => 1612177965,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6094f8aad4bbd8_14237521 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form-group checkbox-standalone">
    <input type="hidden" value="0" name="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
">
    <input type="checkbox" id="config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
" value="1" name="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
"
           <?php if ($_smarty_tpl->tpl_vars['propval']->value == '1') {?>checked<?php }?> <?php if ($_smarty_tpl->tpl_vars['required']->value === true) {?>required<?php }?>>
    <label for="config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
"
            <?php if (!empty($_smarty_tpl->tpl_vars['propdesc']->value['desc'])) {?>
                data-toggle="tooltip" title="<?php echo (($tmp = $_smarty_tpl->tpl_vars['propdesc']->value['desc'] ?? null)===null||$tmp==='' ? '' : $tmp);?>
"
                data-placement="auto"
            <?php }?>>
        <?php echo $_smarty_tpl->tpl_vars['propdesc']->value['label'];?>

        <?php if (!empty($_smarty_tpl->tpl_vars['propdesc']->value['desc'])) {?>
            <i class="fas fa-info-circle fa-fw"></i>
        <?php }?>
    </label>
</div>

<?php if ((isset($_smarty_tpl->tpl_vars['propdesc']->value['children']))) {?>
    <?php echo '<script'; ?>
>
        $('#config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
').on('change', function() {
            if (this.checked === true) {
                $('#children-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
').collapse('show');
            } else {
                $('#children-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
').collapse('hide');
            }
        });

        $(function() {
            <?php if ($_smarty_tpl->tpl_vars['propval']->value == '1') {?>
                $('#children-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
').collapse('show');
            <?php } else { ?>
                $('#children-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
').collapse('hide');
            <?php }?>
        });
    <?php echo '</script'; ?>
>
<?php }
}
}
