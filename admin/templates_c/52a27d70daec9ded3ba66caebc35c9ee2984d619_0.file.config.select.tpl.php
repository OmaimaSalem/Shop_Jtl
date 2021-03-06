<?php
/* Smarty version 3.1.38, created on 2021-05-07 10:22:02
  from 'C:\xampp\htdocs\shop\admin\opc\tpl\config\config.select.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6094f8aa299443_58809113',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52a27d70daec9ded3ba66caebc35c9ee2984d619' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\admin\\opc\\tpl\\config\\config.select.tpl',
      1 => 1612177965,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6094f8aa299443_58809113 (Smarty_Internal_Template $_smarty_tpl) {
if (!(isset($_smarty_tpl->tpl_vars['propid']->value))) {?>
    <?php $_smarty_tpl->_assignInScope('propid', $_smarty_tpl->tpl_vars['propname']->value);
}?>
<div class="form-group">
    <label for="config-<?php echo $_smarty_tpl->tpl_vars['propid']->value;?>
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
    <div class="select-wrapper">
        <select class="form-control" id="config-<?php echo $_smarty_tpl->tpl_vars['propid']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['required']->value === true) {?>required<?php }?>>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['propdesc']->value['options'], 'label', false, 'value');
$_smarty_tpl->tpl_vars['label']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->do_else = false;
?>
                <?php if (is_string($_smarty_tpl->tpl_vars['label']->value)) {?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['propval']->value) {?>selected<?php }?>>
                        <?php echo $_smarty_tpl->tpl_vars['label']->value;?>

                    </option>
                <?php } else { ?>
                    <?php $_smarty_tpl->_assignInScope('subgroup', $_smarty_tpl->tpl_vars['label']->value);?>

                    <optgroup label="<?php echo $_smarty_tpl->tpl_vars['subgroup']->value['label'];?>
">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subgroup']->value['options'], 'label', false, 'value');
$_smarty_tpl->tpl_vars['label']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->do_else = false;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['propval']->value) {?>selected<?php }?>>
                                <?php echo $_smarty_tpl->tpl_vars['label']->value;?>

                            </option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </optgroup>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
    </div>
</div>

<?php if ((isset($_smarty_tpl->tpl_vars['propdesc']->value['childrenFor']))) {?>
    <?php echo '<script'; ?>
>
        (function() {
            let selectElm = $('#config-<?php echo $_smarty_tpl->tpl_vars['propid']->value;?>
');
            let option = selectElm.find(':selected').val();

            selectElm.on('change', () => {
                let option = selectElm.find(':selected').val();

                $('.childrenFor-<?php echo $_smarty_tpl->tpl_vars['propid']->value;?>
').collapse('hide');
                $('#childrenFor-' + option + '-<?php echo $_smarty_tpl->tpl_vars['propid']->value;?>
').collapse('show');
            });

            $(() => {
                $('#childrenFor-' + option + '-<?php echo $_smarty_tpl->tpl_vars['propid']->value;?>
').collapse('show');
            });
        })();
    <?php echo '</script'; ?>
>
<?php }
}
}
