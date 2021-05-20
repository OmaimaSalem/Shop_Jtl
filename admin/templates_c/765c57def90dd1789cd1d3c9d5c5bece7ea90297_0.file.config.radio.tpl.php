<?php
/* Smarty version 3.1.38, created on 2021-05-07 10:39:18
  from 'C:\xampp\htdocs\shop\admin\opc\tpl\config\config.radio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6094fcb60dfc41_49222763',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '765c57def90dd1789cd1d3c9d5c5bece7ea90297' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\admin\\opc\\tpl\\config\\config.radio.tpl',
      1 => 1612177965,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6094fcb60dfc41_49222763 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form-group">
    <label for="config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
"
            <?php if (!empty($_smarty_tpl->tpl_vars['propdesc']->value['desc'])) {?>
                data-toggle="tooltip" title="<?php echo (($tmp = $_smarty_tpl->tpl_vars['propdesc']->value['desc'] ?? null)===null||$tmp==='' ? '' : $tmp);?>
" data-placement="auto"
            <?php }?>>
        <?php echo $_smarty_tpl->tpl_vars['propdesc']->value['label'];?>

        <?php if (!empty($_smarty_tpl->tpl_vars['propdesc']->value['desc'])) {?>
            <i class="fas fa-info-circle fa-fw"></i>
        <?php }?>
    </label>
    <div class="radio" id="config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['propdesc']->value['options'], 'name', false, 'value');
$_smarty_tpl->tpl_vars['name']->index = -1;
$_smarty_tpl->tpl_vars['name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->do_else = false;
$_smarty_tpl->tpl_vars['name']->index++;
$__foreach_name_0_saved = $_smarty_tpl->tpl_vars['name'];
?>
            <div>
                <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" id="config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['name']->index;?>
"
                       <?php if ($_smarty_tpl->tpl_vars['propval']->value == $_smarty_tpl->tpl_vars['value']->value) {?>checked<?php }?> <?php if ($_smarty_tpl->tpl_vars['required']->value) {?>required<?php }?>>
                <label for="config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['name']->index;?>
"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</label>
            </div>
        <?php
$_smarty_tpl->tpl_vars['name'] = $__foreach_name_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div>

<?php if ((isset($_smarty_tpl->tpl_vars['propdesc']->value['childrenFor']))) {?>
    <?php echo '<script'; ?>
>
        var selectElm = $('#config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
');
        var option = selectElm.find(':checked').val();

        selectElm.on('change', function() {
            var option = selectElm.find(':checked').val();

            $('.childrenFor-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
').collapse('hide');
            $('#childrenFor-' + option + '-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
').collapse('show');
        });

        $(function() {
            $('#childrenFor-' + option + '-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
').collapse('show');
        });
    <?php echo '</script'; ?>
>
<?php }
}
}
