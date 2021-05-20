<?php
/* Smarty version 3.1.38, created on 2021-05-07 10:22:01
  from 'C:\xampp\htdocs\shop\admin\opc\tpl\config\config.color.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6094f8a96351c6_12614965',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52dbd1efcd96ead54900bff4e9eb542ef3de6b0a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\admin\\opc\\tpl\\config\\config.color.tpl',
      1 => 1612177965,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6094f8a96351c6_12614965 (Smarty_Internal_Template $_smarty_tpl) {
if (!(isset($_smarty_tpl->tpl_vars['propid']->value))) {?>
    <?php $_smarty_tpl->_assignInScope('propid', $_smarty_tpl->tpl_vars['propname']->value);
}?>
<div class="form-group no-pb">
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
    <div class="input-group" id="config-<?php echo $_smarty_tpl->tpl_vars['propid']->value;?>
-group">
        <input type="text" class="form-control colorpicker-input" name="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['propval']->value, ENT_QUOTES, 'utf-8', true);?>
"
               <?php if ($_smarty_tpl->tpl_vars['required']->value) {?>required<?php }?> id="config-<?php echo $_smarty_tpl->tpl_vars['propid']->value;?>
" autocomplete="off"
               placeholder="<?php echo __('Default colour');?>
">
        <span class="input-group-append">
            <span class="input-group-text colorpicker-input-addon"><i></i></span>
        </span>
    </div>
    <?php echo '<script'; ?>
>
        $('#config-<?php echo $_smarty_tpl->tpl_vars['propid']->value;?>
-group').colorpicker({
            format: '<?php echo (($tmp = $_smarty_tpl->tpl_vars['propdesc']->value['colorFormat'] ?? null)===null||$tmp==='' ? 'rgba' : $tmp);?>
',
            fallbackColor: 'rgba(0,0,0,1.0)',
            extensions: [
                {
                    name: 'swatches',
                    options: {
                        colors: {
                            'green': '#098B1B',
                            'red': '#B90000',
                            'orange': '#F39932',
                            'yellow': '#F8BF00',
                            'darkgrey': '#525252',
                            'grey': '#707070',
                            'mediumgrey': '#9b9b9b',
                            'sand': '#EBEBEB',

                            'lightgreen': '#CDE1D6',
                            'lightred': '#E8CCD2',
                            'lightorange': '#F9F2DC',
                            'lightyellow': '#f8edc7',
                            'lightgrey': '#F5F7FA',
                            'coolwhite': '#F8F8F8',
                        },
                        namesAsValues: true
                    }
                }
            ]
        });
    <?php echo '</script'; ?>
>
</div><?php }
}
