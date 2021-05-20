<?php
/* Smarty version 3.1.38, created on 2021-05-04 11:53:45
  from 'C:\xampp\htdocs\shop\admin\templates\bootstrap\tpl_inc\widgets\shopinfo_version.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_609119a9c935b9_47902686',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '797211d0fe9c74ee76bcbfd04728f3fb0e74582b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\admin\\templates\\bootstrap\\tpl_inc\\widgets\\shopinfo_version.tpl',
      1 => 1612177964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609119a9c935b9_47902686 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['oSubscription']->value || $_smarty_tpl->tpl_vars['oVersion']->value) {?>
    <table class="table table-condensed table-hover table-blank">
        <tbody>
            <?php if ($_smarty_tpl->tpl_vars['oSubscription']->value) {?>
                <tr>
                    <td width="50%"><?php echo __('subscriptionValidUntil');?>
</td>
                    <td width="50%" id="subscription">
                        <?php if ($_smarty_tpl->tpl_vars['oSubscription']->value->nDayDiff < 0) {?>
                            <a href="https://jtl-url.de/subscription" target="_blank"><?php echo __('expired');?>
</a>
                        <?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['oSubscription']->value->dDownloadBis_DE;?>

                        <?php }?>
                    </td>
                </tr>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['oVersion']->value) {?>
                <tr>
                    <td width="50%"></td>
                    <td width="50%" id="version">
                        <?php if ($_smarty_tpl->tpl_vars['bUpdateAvailable']->value) {?>
                            <span class="label label-info"><?php echo __('version');?>
 <?php echo $_smarty_tpl->tpl_vars['strLatestVersion']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['oVersion']->value->build > 0) {?>(<?php echo __('build');?>
: <?php echo $_smarty_tpl->tpl_vars['oVersion']->value->build;?>
)<?php }?> <?php echo __('available');?>
.</span>
                        <?php } else { ?>
                            <span class="label label-success"><?php echo __('shopVersionUpToDate');?>
</span>
                        <?php }?>
                    </td>
                </tr>
            <?php }?>
        </tbody>
    </table>
<?php }
}
}
