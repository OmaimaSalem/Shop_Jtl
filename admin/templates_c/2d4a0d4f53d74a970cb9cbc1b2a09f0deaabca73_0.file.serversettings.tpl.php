<?php
/* Smarty version 3.1.38, created on 2021-05-18 13:22:55
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\admin\templates\bootstrap\tpl_inc\widgets\serversettings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a3a38f69e399_96875465',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d4a0d4f53d74a970cb9cbc1b2a09f0deaabca73' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\admin\\templates\\bootstrap\\tpl_inc\\widgets\\serversettings.tpl',
      1 => 1612177964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a3a38f69e399_96875465 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'testfailed', null, null);?>
    <a class="label label-warning" href="systemcheck.php" title="Mehr Informationen im Systemcheck">
        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i><span class="sr-only"><?php echo __('warning');?>
</span>
    </a>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'testpassed', null, null);?>
    <span class="label label-success">
        <i class="fal fa-check text-success" aria-hidden="true"></i><span class="sr-only"><?php echo __('ok');?>
</span>
    </span>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<div class="widget-custom-data">
    <table class="table table-condensed table-hover table-blank">
        <tbody>
            <tr>
                <td><?php echo __('maxPHPExecutionTime');?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['maxExecutionTime']->value;?>
</td>
                <td class="text-right">
                    <?php if ($_smarty_tpl->tpl_vars['bMaxExecutionTime']->value) {?>
                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'testpassed');?>

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'testfailed');?>

                    <?php }?>
                </td>
            </tr>
            <tr>
                <td><?php echo __('phpMemoryLimit');?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['memoryLimit']->value;?>
</td>
                <td class="text-right">
                    <?php if ($_smarty_tpl->tpl_vars['bMemoryLimit']->value) {?>
                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'testpassed');?>

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'testfailed');?>

                    <?php }?>
                </td>
            </tr>
            <tr>
                <td><?php echo __('phpMaxTransimissionSizeFile');?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['maxFilesize']->value;?>
</td>
                <td class="text-right">
                    <?php if ($_smarty_tpl->tpl_vars['bMaxFilesize']->value) {?>
                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'testpassed');?>

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'testfailed');?>

                    <?php }?>
                </td>
            </tr>
            <tr>
                <td><?php echo __('phpMaxTransimissionSizePost');?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['postMaxSize']->value;?>
</td>
                <td class="text-right">
                    <?php if ($_smarty_tpl->tpl_vars['bPostMaxSize']->value) {?>
                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'testpassed');?>

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'testfailed');?>

                    <?php }?>
                </td>
            </tr>
            <tr>
                <td>allow_url_fopen <?php echo __('activated');?>
</td>
                <td><?php if ($_smarty_tpl->tpl_vars['bAllowUrlFopen']->value) {
echo __('yes');
} else {
echo __('no');
}?></td>
                <td class="text-right">
                    <?php if ($_smarty_tpl->tpl_vars['bAllowUrlFopen']->value) {?>
                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'testpassed');?>

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'testfailed');?>

                    <?php }?>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<?php }
}
