<?php
/* Smarty version 3.1.38, created on 2021-05-04 11:53:34
  from 'C:\xampp\htdocs\shop\admin\templates\bootstrap\tpl_inc\widgets\licensedItemUpdates.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6091199e466fd7_35121176',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'faf9e7cbeeda76725a6b15149576cd2bcd27c2f4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\admin\\templates\\bootstrap\\tpl_inc\\widgets\\licensedItemUpdates.tpl',
      1 => 1612177964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6091199e466fd7_35121176 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\shop\\includes\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
    <?php if ($_smarty_tpl->tpl_vars['hasAuth']->value) {?>
        <div class="row">
            <div class="col-md-4 border-right">
                <div class="text-center">
                    <h2><?php echo $_smarty_tpl->tpl_vars['licenseItemUpdates']->value->count();
if ($_smarty_tpl->tpl_vars['securityFixes']->value > 0) {?> <i class="fa fa-warning" data-toggle="tooltip" data-placement="top" title="<?php echo sprintf(n__('Includes %d security fix','Includes %d security fixes',$_smarty_tpl->tpl_vars['securityFixes']->value),$_smarty_tpl->tpl_vars['securityFixes']->value);?>
"></i><?php }?></h2>
                    <p><?php echo n__('Update available','Updates available',$_smarty_tpl->tpl_vars['licenseItemUpdates']->value->count());?>
</p>
                </div>
            </div>
            <div class="col-md-4 border-right">
                <div class="text-center">
                    <h2><?php echo $_smarty_tpl->tpl_vars['licenses']->value->count();
if ($_smarty_tpl->tpl_vars['aboutToExpire']->value->count() > 0) {?> <i class="fa fa-warning" data-toggle="tooltip" data-placement="top" title="<?php echo sprintf(n__('%d license about to expire','%d licenses about to expire',$_smarty_tpl->tpl_vars['aboutToExpire']->value->count()),($_smarty_tpl->tpl_vars['aboutToExpire']->value->count()));?>
"></i><?php }?></h2>
                    <p><?php echo n__('Licensed item','Licensed items',$_smarty_tpl->tpl_vars['licenses']->value->count());?>
</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <h2><?php echo $_smarty_tpl->tpl_vars['expirations']->value;?>
</h2>
                    <p><?php echo n__('Expired subscription','Expired subscriptions',$_smarty_tpl->tpl_vars['expirations']->value);?>
</p>
                </div>
            </div>
        </div>

        <hr class="mb-4">

        <?php if ($_smarty_tpl->tpl_vars['lastPurchases']->value->count() > 0) {?>
            <div class="row">
                <table class="table table-condensed">
                    <thead>
                    <tr>
                        <th class="w-75"><?php echo __('Last purchases');?>
</th>
                        <th class="w-25"><?php echo __('Date');?>
</th>
                    </tr>
                    </thead>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lastPurchases']->value, 'license');
$_smarty_tpl->tpl_vars['license']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['license']->value) {
$_smarty_tpl->tpl_vars['license']->do_else = false;
?>
                        <tr>
                            <td>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;?>
/licenses.php#license-item-<?php echo $_smarty_tpl->tpl_vars['license']->value->getID();?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['license']->value->getName();?>

                                </a> <?php if ($_smarty_tpl->tpl_vars['license']->value->getLicense()->isBound()) {?><span class="badge badge-primary"><?php echo __('bound');?>
</span><?php } else { ?><span class="badge badge-secondary"><?php echo __('unbound');?>
</span><?php }?></td>
                            <td><?php echo $_smarty_tpl->tpl_vars['license']->value->getLicense()->getCreated()->format('d.m.Y');?>
</td>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </table>
            </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['aboutToExpire']->value->count() > 0) {?>
            <div class="row">
                <table class="table table-condensed">
                    <thead>
                    <tr>
                        <th class="w-75"><?php echo sprintf(n__('%d license about to expire','%d licenses about to expire',$_smarty_tpl->tpl_vars['aboutToExpire']->value->count()),($_smarty_tpl->tpl_vars['aboutToExpire']->value->count()));?>
</th>
                        <th class="w-25"><?php echo __('Expiration');?>
</th>
                    </tr>
                    </thead>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['aboutToExpire']->value, 'license');
$_smarty_tpl->tpl_vars['license']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['license']->value) {
$_smarty_tpl->tpl_vars['license']->do_else = false;
?>
                        <?php $_smarty_tpl->_assignInScope('days', $_smarty_tpl->tpl_vars['license']->value->getLicense()->getDaysRemaining());?>
                        <tr>
                            <td>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;?>
/licenses.php#license-item-<?php echo $_smarty_tpl->tpl_vars['license']->value->getID();?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['license']->value->getName();?>

                                </a><?php if ($_smarty_tpl->tpl_vars['days']->value > 0) {?> <span class="badge badge-danger"><?php echo sprintf(n__('%d day remaining','%d days remaining',$_smarty_tpl->tpl_vars['days']->value),$_smarty_tpl->tpl_vars['days']->value);?>
</span><?php }?>
                            </td>
                            <td><?php echo $_smarty_tpl->tpl_vars['license']->value->getLicense()->getValidUntil()->format('d.m.Y');?>
</td>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </table>
            </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['licenseItemUpdates']->value->count() > 0) {?>
            <div class="row">
                <table class="table table-condensed">
                    <thead>
                    <tr>
                        <th class="w-75"><?php echo n__('Update available','Updates available',$_smarty_tpl->tpl_vars['licenseItemUpdates']->value->count());?>
</th>
                        <th class="w-25"><?php echo __('Version');?>
</th>
                    </tr>
                    </thead>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['licenseItemUpdates']->value, 'license');
$_smarty_tpl->tpl_vars['license']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['license']->value) {
$_smarty_tpl->tpl_vars['license']->do_else = false;
?>
                        <?php $_smarty_tpl->_assignInScope('avail', $_smarty_tpl->tpl_vars['license']->value->getReleases()->getAvailable());?>
                        <tr>
                            <td>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;?>
/licenses.php#license-item-<?php echo $_smarty_tpl->tpl_vars['license']->value->getID();?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['license']->value->getName();?>

                                </a> <?php if ($_smarty_tpl->tpl_vars['avail']->value !== null && $_smarty_tpl->tpl_vars['avail']->value->includesSecurityFixes()) {?> <span class="badge badge-warning"><?php echo __('Security update');?>
</span> <?php }?></td>
                            <td>
                                <p class="badge badge-secondary"><?php echo $_smarty_tpl->tpl_vars['license']->value->getReferencedItem()->getInstalledVersion();?>
</p>
                                &rarr;
                                <p class="badge badge-primary"><?php echo $_smarty_tpl->tpl_vars['license']->value->getReferencedItem()->getMaxInstallableVersion();?>
</p>
                            </td>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </table>
            </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['testLicenses']->value->count() > 0) {?>
            <div class="row">
                <table class="table table-condensed">
                    <thead>
                    <tr>
                        <th class="w-75"><?php echo __('Test licenses');?>
</th>
                        <th class="w-25"><?php echo __('Expiration');?>
</th>
                    </tr>
                    </thead>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['testLicenses']->value, 'license');
$_smarty_tpl->tpl_vars['license']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['license']->value) {
$_smarty_tpl->tpl_vars['license']->do_else = false;
?>
                        <tr>
                            <td>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;?>
/licenses.php#license-item-<?php echo $_smarty_tpl->tpl_vars['license']->value->getID();?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['license']->value->getName();?>

                                </a>
                            <td><?php echo $_smarty_tpl->tpl_vars['license']->value->getLicense()->getValidUntil()->format('d.m.Y');?>
</td>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </table>
            </div>
        <?php }?>
    <?php } else { ?>
        <div class="alert alert-default" role="alert"><?php echo __('storeNotLinkedDesc');?>
</div>
    <?php }?>
<a href="<?php echo __('extensionStoreURL');?>
" class="btn btn-outline-primary btn-block my-3" target="_blank">
    <?php if ($_smarty_tpl->tpl_vars['hasAuth']->value) {
echo __('btnAdditionalExtensionStore');
} else {
echo __('btnExploreExtensionStore');
}?>
</a>
<hr class="mb-3">
<p class="text-right"><small><?php echo __('last update');?>
 <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['lastUpdate']->value,'%d.%m.%Y %H:%M:%S');?>
</small></p>
<?php }
}
