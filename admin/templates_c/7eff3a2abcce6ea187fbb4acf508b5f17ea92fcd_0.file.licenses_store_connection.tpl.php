<?php
/* Smarty version 3.1.38, created on 2021-05-07 11:45:44
  from 'C:\xampp\htdocs\shop\admin\templates\bootstrap\tpl_inc\licenses_store_connection.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60950c48e1d094_35430437',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7eff3a2abcce6ea187fbb4acf508b5f17ea92fcd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\admin\\templates\\bootstrap\\tpl_inc\\licenses_store_connection.tpl',
      1 => 1612177964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60950c48e1d094_35430437 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\shop\\includes\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div>
    <div class="card">
        <?php if ((isset($_smarty_tpl->tpl_vars['setToken']->value)) && $_smarty_tpl->tpl_vars['setToken']->value === true) {?>
            <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'render'))) {
throw new SmartyException('block tag \'form\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array());
$_block_repeat=true;
echo $_block_plugin1->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <input type="hidden" name="action" value="savetoken">
                <div class="card-header">
                    <div class="heading-body">
                        <?php echo __('Enter token');?>

                    </div>
                    <hr class="mb-n3">
                </div>
                <div class="card-body">
                    <div class="sub-heading">Token</div>
                    <textarea class="form-control" name="token"></textarea>
                    <div class="sub-heading">Code</div>
                    <input type="text" class="form-control" name="code" />
                </div>
                <div class="save-wrapper">
                    <button class="btn btn-primary"><i class="fa fa-save"></i> <?php echo __('save');?>
</button>
                </div>
            <?php $_block_repeat=false;
echo $_block_plugin1->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php } else { ?>
            <?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'render'))) {
throw new SmartyException('block tag \'form\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array());
$_block_repeat=true;
echo $_block_plugin2->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <div class="card-header">
                    <div class="heading-body">
                        <?php echo __('Overview');?>

                    </div>
                    <div class="heading-right">
                        <?php if ($_smarty_tpl->tpl_vars['hasAuth']->value) {?>
                            <button name="action" value="revoke" class="btn btn-default">
                                <i class="fas fa-unlink"></i> <?php echo __('unlink');?>

                            </button>
                        <?php }?>
                    </div>
                    <hr class="mb-n3">
                </div>
                <div class="card-body">
                    <div class="row">
                        <?php if ($_smarty_tpl->tpl_vars['hasAuth']->value) {?>
                            <div class="col-md-4 border-right">
                                <div class="text-center">
                                    <h2><?php echo $_smarty_tpl->tpl_vars['licenseItemUpdates']->value->count();?>
</h2>
                                    <p><?php echo __('updates available');?>
</p>
                                </div>
                            </div>
                            <div class="col-md-4 border-right">
                                <div class="text-center">
                                    <h2><?php echo $_smarty_tpl->tpl_vars['licenses']->value->count();?>
</h2>
                                    <p><?php echo __('Licensed items');?>
</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="text-center">
                                    <h2><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['lastUpdate']->value,"%d.%m.%Y %H:%M:%S");?>
</h2>
                                    <p><?php echo __('last update');?>
</p>
                                    <button class="btn btn-default btn-block" id="recheck" name="action" value="recheck">
                                        <i class="fas fa-refresh"></i> <?php echo __('Refresh');?>

                                    </button>
                                </div>
                            </div>
                        <?php } else { ?>
                            <div class="col-12">
                                <div class="alert alert-default" role="alert"><?php echo __('storeNotLinkedDesc');?>
</div>
                            </div>
                            <div class="col-sm-6 col-xl-auto mb-2">
                                <button name="action" value="redirect" class="btn btn-primary btn-block">
                                    <i class="fas fa-link"></i> <?php echo __('storeLink');?>

                                </button>
                            </div>
                            <div class="col-sm-6 col-xl-auto mb-2">
                                <button name="action" value="entertoken" class="btn btn-secondary btn-block">
                                    <?php echo __('Manually enter token');?>

                                </button>
                            </div>
                            <div class="col-sm-6 col-xl-auto ml-auto mb-2">
                                <a href="<?php echo __('extensionStoreURL');?>
" class="btn btn-outline-primary btn-block ml-auto" target="_blank">
                                    <?php echo __('btnExploreExtensionStore');?>

                                </a>
                            </div>
                        <?php }?>
                    </div>
                </div>
            <?php $_block_repeat=false;
echo $_block_plugin2->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php }?>
    </div>
</div>
<?php }
}
