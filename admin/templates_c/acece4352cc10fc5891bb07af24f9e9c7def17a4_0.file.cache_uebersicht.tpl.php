<?php
/* Smarty version 3.1.38, created on 2021-05-19 17:01:28
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\admin\templates\bootstrap\tpl_inc\cache_uebersicht.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a52848afb6b5_27780165',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'acece4352cc10fc5891bb07af24f9e9c7def17a4' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\admin\\templates\\bootstrap\\tpl_inc\\cache_uebersicht.tpl',
      1 => 1612177964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/seite_header.tpl' => 1,
  ),
),false)) {
function content_60a52848afb6b5_27780165 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:tpl_inc/seite_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cTitel'=>__('cache'),'cBeschreibung'=>__('objectcacheDesc'),'cDokuURL'=>__('cacheURL')), 0, false);
echo '<script'; ?>
 type="text/javascript">
    var disabledMethods      = <?php echo $_smarty_tpl->tpl_vars['non_available_methods']->value;?>
,
        disFunctionalMethods = <?php echo $_smarty_tpl->tpl_vars['disfunctional_methods']->value;?>
;
    jQuery(document).ready(function ($) {
        var elem,
            methods = $('#caching_method option');
        if (methods) {
            methods.each(function () {
                elem = $(this);
                if (disabledMethods.indexOf(elem.val()) >= 0) {
                    elem.attr('disabled', 'disabled');
                } else if (disFunctionalMethods.indexOf(elem.val()) >= 0) {
                    elem.text(elem.text() + ' <?php echo __('configurationError');?>
');
                }
            });
        }
        $('#massaction-main-switch').on('click', function () {
            var checkboxes = $('.massaction-checkbox'),
                checked = $(this).prop('checked');
            checkboxes.prop('checked', checked);
        });

        $('#btn_toggle_cache').on('click', function () {
            $("#row_toggle_cache").slideToggle('slow', 'linear');
        });
    });
<?php echo '</script'; ?>
>
<div id="content">
    <div class="tabs">
        <nav class="tabs-nav">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link <?php if (!(isset($_smarty_tpl->tpl_vars['tab']->value)) || $_smarty_tpl->tpl_vars['tab']->value === 'massaction' || $_smarty_tpl->tpl_vars['tab']->value === 'uebersicht') {?> active<?php }?>" data-toggle="tab" role="tab" href="#massaction">
                        <?php echo __('management');?>

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ((isset($_smarty_tpl->tpl_vars['tab']->value)) && $_smarty_tpl->tpl_vars['tab']->value === 'stats') {?> active<?php }?>" data-toggle="tab" role="tab" href="#stats">
                        <?php echo __('stats');?>

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ((isset($_smarty_tpl->tpl_vars['tab']->value)) && $_smarty_tpl->tpl_vars['tab']->value === 'benchmark') {?> active<?php }?>" data-toggle="tab" role="tab" href="#benchmark">
                        <?php echo __('benchmark');?>

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ((isset($_smarty_tpl->tpl_vars['tab']->value)) && $_smarty_tpl->tpl_vars['tab']->value === 'settings') {?> active<?php }?>" data-toggle="tab" role="tab" href="#settings">
                        <?php echo __('settings');?>

                    </a>
                </li>
            </ul>
        </nav>
        <div class="tab-content">
            <div id="massaction" class="tab-pane fade <?php if (!(isset($_smarty_tpl->tpl_vars['tab']->value)) || $_smarty_tpl->tpl_vars['tab']->value === 'massaction' || $_smarty_tpl->tpl_vars['tab']->value === 'uebersicht') {?> active show<?php }?>">
                <form method="post" action="cache.php">
                    <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                    <div>
                        <div class="subheading1"><?php echo __('management');?>
</div>
                        <hr class="mb-3">
                        <div class="table-responsive">
                        <table id="cache-type-status" class="table table-striped">
                            <thead>
                            <tr>
                                <th class="text-left"></th>
                                <th class="text-left"><label style="margin-bottom:0;" for="massaction-main-switch"><?php echo __('type');?>
</label></th>
                                <th class="text-left"><?php echo __('description');?>
</th>
                                <th class="text-center"><?php echo __('entries');?>
</th>
                                <th class="text-center"><?php echo __('active');?>
</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['caching_groups']->value, 'cg');
$_smarty_tpl->tpl_vars['cg']->index = -1;
$_smarty_tpl->tpl_vars['cg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cg']->value) {
$_smarty_tpl->tpl_vars['cg']->do_else = false;
$_smarty_tpl->tpl_vars['cg']->index++;
$__foreach_cg_0_saved = $_smarty_tpl->tpl_vars['cg'];
?>
                                <tr class="<?php if (($_smarty_tpl->tpl_vars['cg']->index%2) === 0) {?>even<?php } else { ?>odd<?php }?>">
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input massaction-checkbox" value="<?php echo $_smarty_tpl->tpl_vars['cg']->value['value'];?>
" name="cache-types[]" id="group-cb-<?php echo $_smarty_tpl->tpl_vars['cg']->index;?>
">
                                            <label class="custom-control-label" for="group-cb-<?php echo $_smarty_tpl->tpl_vars['cg']->index;?>
"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <?php $_smarty_tpl->_assignInScope('nicename', $_smarty_tpl->tpl_vars['cg']->value['nicename']);?>
                                        <label for="group-cb-<?php echo $_smarty_tpl->tpl_vars['cg']->index;?>
"><?php echo __($_smarty_tpl->tpl_vars['nicename']->value);?>
</label>
                                    </td>
                                    <td>
                                        <?php $_smarty_tpl->_assignInScope('description', $_smarty_tpl->tpl_vars['cg']->value['description']);?>
                                        <?php echo __($_smarty_tpl->tpl_vars['description']->value);?>

                                    </td>
                                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['cg']->value['key_count'];?>
</td>
                                    <td class="text-center">
                                        <?php if ($_smarty_tpl->tpl_vars['cache_enabled']->value === false || in_array($_smarty_tpl->tpl_vars['cg']->value['value'],$_smarty_tpl->tpl_vars['disabled_caches']->value)) {?>
                                            <span class="fal fa-times text-danger"></span>
                                        <?php } else { ?>
                                            <span class="fal fa-check text-success"></span>
                                        <?php }?>
                                    </td>
                                </tr>
                            <?php
$_smarty_tpl->tpl_vars['cg'] = $__foreach_cg_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </tbody>
                        </table>
                        </div>
                        <div class="card-footer save-wrapper">
                            <div class="row">
                                <div class="col-sm-6 col-xl-auto text-left">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="massaction-checkbox custom-control-input" id="massaction-main-switch" />
                                        <label class="custom-control-label" for="massaction-main-switch"><?php echo __('globalSelectAll');?>
</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xl-auto">
                                    <div class="input-group">
                                        <span class="input-group-addon d-none d-md-block">
                                            <label for="cache-action"><?php echo __('action');?>
:</label>
                                        </span>
                                        <select class="custom-select" name="cache-action" id="cache-action">
                                            <option name="flush" value="flush"><?php echo __('empty');?>
</option>
                                            <option name="deaktivieren" value="deactivate"><?php echo __('deactivate');?>
</option>
                                            <option name="aktivieren" value="activate"><?php echo __('activate');?>
</option>
                                        </select>
                                        <span class="input-group-btn ml-1">
                                            <button type="submit" value="<?php echo __('submit');?>
" class="btn btn-primary"><?php echo __('submit');?>
</button>
                                        </span>
                                    </div>
                                    <input name="a" type="hidden" value="cacheMassAction" />
                                </div>
                                <form method="post" action="cache.php" class="submit-form">
                                    <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                                    <div class="ml-auto col-sm-6 col-xl-auto">
                                        <button name="a" type="submit" value="flush_object_cache" class="btn btn-outline-primary btn-block delete"<?php if (!$_smarty_tpl->tpl_vars['cache_enabled']->value) {?> disabled="disabled"<?php }?>>
                                            <i class="fas fa-trash-alt"></i>&nbsp;<?php echo __('clearObjectCache');?>

                                        </button>
                                    </div>
                                    <div class="col-sm-6 col-xl-auto">
                                        <button name="a" type="submit" value="flush_template_cache" class="btn btn-outline-primary btn-block delete">
                                            <i class="fas fa-trash-alt"></i>&nbsp;<?php echo __('clearTemplateCache');?>

                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div id="stats" class="tab-pane fade <?php if ((isset($_smarty_tpl->tpl_vars['tab']->value)) && $_smarty_tpl->tpl_vars['tab']->value === 'stats') {?> active show<?php }?>">
                <?php if (is_array($_smarty_tpl->tpl_vars['stats']->value) && count($_smarty_tpl->tpl_vars['stats']->value) > 0) {?>
                    <div>
                        <div class="subheading1 mb-3"><?php echo __('objectcache');?>
</div>
                        <div>
                            <table class="table">
                                <?php if ((isset($_smarty_tpl->tpl_vars['stats']->value['uptime_h'])) && $_smarty_tpl->tpl_vars['stats']->value['uptime_h'] !== null) {?>
                                    <tr class="cache-row">
                                        <td><?php echo __('uptime');?>
:</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['stats']->value['uptime_h'];?>
</td>
                                    </tr>
                                <?php }?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['stats']->value['mem'])) && $_smarty_tpl->tpl_vars['stats']->value['mem'] !== null) {?>
                                    <tr class="cache-row">
                                        <td><?php echo __('fullSize');?>
:</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['stats']->value['mem'];?>
 Bytes<?php if (strpos($_smarty_tpl->tpl_vars['stats']->value['mem'],'/') === false) {?> (<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'string_format' ][ 0 ], array( ($_smarty_tpl->tpl_vars['stats']->value['mem']/1024/1024),'%.2f' ));?>
 MB)<?php }?></td>
                                    </tr>
                                <?php }?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['stats']->value['entries'])) && $_smarty_tpl->tpl_vars['stats']->value['entries'] !== null) {?>
                                    <tr class="cache-row">
                                        <td><?php echo __('entriesCount');?>
:</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['stats']->value['entries'];?>
</td>
                                    </tr>
                                <?php }?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['stats']->value['misses'])) && $_smarty_tpl->tpl_vars['stats']->value['misses'] !== null) {?>
                                    <tr class="cache-row">
                                        <td><?php echo __('misses');?>
:</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['stats']->value['misses'];?>

                                            <?php if ((isset($_smarty_tpl->tpl_vars['stats']->value['mps'])) && $_smarty_tpl->tpl_vars['stats']->value['mps'] !== null && strpos($_smarty_tpl->tpl_vars['stats']->value['mps'],'/') === false) {?>
                                                <span class="inline"> (<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'string_format' ][ 0 ], array( $_smarty_tpl->tpl_vars['stats']->value['mps'],'%.2f' ));?>
 <?php echo __('misses');?>
/s)</span>
                                            <?php }?>
                                        </td>
                                    </tr>
                                <?php }?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['stats']->value['hits'])) && $_smarty_tpl->tpl_vars['stats']->value['hits'] !== null) {?>
                                    <tr class="cache-row">
                                        <td>Hits:</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['stats']->value['hits'];?>

                                            <?php if ((isset($_smarty_tpl->tpl_vars['stats']->value['hps'])) && $_smarty_tpl->tpl_vars['stats']->value['hps'] !== null && strpos($_smarty_tpl->tpl_vars['stats']->value['hps'],'/') === false) {?>
                                                <span class="inline"> (<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'string_format' ][ 0 ], array( $_smarty_tpl->tpl_vars['stats']->value['hps'],'%.2f' ));?>
 <?php echo __('hits');?>
/s)</span>
                                            <?php }?>
                                        </td>
                                    </tr>
                                <?php }?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['stats']->value['inserts'])) && $_smarty_tpl->tpl_vars['stats']->value['inserts'] !== null) {?>
                                    <tr class="cache-row">
                                        <td><?php echo __('inserts');?>
:</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['stats']->value['inserts'];?>
</td>
                                    </tr>
                                <?php }?>
                            </table>
                        </div>
                    </div>
                    <?php if ((isset($_smarty_tpl->tpl_vars['stats']->value['slow'])) && is_array($_smarty_tpl->tpl_vars['stats']->value['slow'])) {?>
                        <div>
                            <div class="subheading1 mt-5 mb-3"><?php echo __('slowlog');?>
</div>
                            <div>
                            <?php if (count($_smarty_tpl->tpl_vars['stats']->value['slow']) > 0) {?>
                                <table class="table">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stats']->value['slow'], 'slow');
$_smarty_tpl->tpl_vars['slow']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['slow']->value) {
$_smarty_tpl->tpl_vars['slow']->do_else = false;
?>
                                        <tr>
                                            <td><?php echo $_smarty_tpl->tpl_vars['slow']->value['date'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['slow']->value['cmd'];?>
 (<?php echo $_smarty_tpl->tpl_vars['slow']->value['exec_time'];?>
s)</td>
                                        </tr>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </table>
                            <?php } else { ?>
                                <div class="alert alert-info" role="alert"><?php echo __('noDataAvailable');?>
</div>
                            <?php }?>
                            </div>
                        </div>
                    <?php }?>
                <?php } else { ?>
                    <div class="alert alert-info" role="alert"><?php echo __('noDataAvailable');?>
</div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['opcache_stats']->value !== null) {?>
                    <div>
                        <div class="subheading1 mt-5 mb-3">OpCache</div>
                        <div>
                            <table class="table cache-stats" id="opcache-stats">
                                <tr class="cache-row">
                                    <td><?php echo __('activated');?>
:</td>
                                    <td class="value"><?php if ($_smarty_tpl->tpl_vars['opcache_stats']->value->enabled === true) {?>ja<?php } else { ?>nein<?php }?></td>
                                </tr>
                                <tr class="cache-row">
                                    <td><?php echo __('busySpace');?>
:</td>
                                    <td class="value"><?php echo $_smarty_tpl->tpl_vars['opcache_stats']->value->memoryUsed;?>
 MB</td>
                                </tr>
                                <tr class="cache-row">
                                    <td><?php echo __('emptySpace');?>
:</td>
                                    <td class="value"><?php echo $_smarty_tpl->tpl_vars['opcache_stats']->value->memoryFree;?>
 MB</td>
                                </tr>
                                <tr class="cache-row">
                                    <td><?php echo __('scriptCountInCache');?>
:</td>
                                    <td class="value"><?php echo $_smarty_tpl->tpl_vars['opcache_stats']->value->numberScrips;?>
</td>
                                </tr>
                                <tr class="cache-row">
                                    <td><?php echo __('keyCountInCache');?>
:</td>
                                    <td class="value"><?php echo $_smarty_tpl->tpl_vars['opcache_stats']->value->numberKeys;?>
</td>
                                </tr>
                                <tr class="cache-row">
                                    <td><?php echo __('hits');?>
:</td>
                                    <td class="value"><?php echo $_smarty_tpl->tpl_vars['opcache_stats']->value->hits;?>
</td>
                                </tr>
                                <tr class="cache-row">
                                    <td><?php echo __('misses');?>
:</td>
                                    <td class="value"><?php echo $_smarty_tpl->tpl_vars['opcache_stats']->value->misses;?>
</td>
                                </tr>
                                <tr class="cache-row collapsed clickable" data-toggle="collapse" data-target="#hitRateDetail" style="cursor: pointer">
                                    <td><?php echo __('hitRate');?>
:</td>
                                    <td class="value">
                                        <?php echo $_smarty_tpl->tpl_vars['opcache_stats']->value->hitRate;?>
%&nbsp;<span class="fal fa-chevron-circle-down rotate-180 font-size-lg float-right"></span>
                                    </td>
                                </tr>
                                <tr class="cache-row">
                                    <td colspan="2" style="padding: 0">
                                        <div id="hitRateDetail" class=" collapse">
                                            <table class="table cache-stats">
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['opcache_stats']->value->scripts, 'script');
$_smarty_tpl->tpl_vars['script']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['script']->value) {
$_smarty_tpl->tpl_vars['script']->do_else = false;
?>
                                                    <tr class="cache-row">
                                                        <td class="file-path"><?php echo $_smarty_tpl->tpl_vars['script']->value['full_path'];?>
</td>
                                                        <td class="value"><?php echo $_smarty_tpl->tpl_vars['script']->value['hits'];?>
 Hits</td>
                                                    </tr>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['tplcacheStats']->value !== null) {?>
                    <div>
                        <div class="subheading1 mt-5 mb-3"><?php echo __('templateCache');?>
</div>
                        <div>
                            <table class="table cache-stats" id="tplcache-stats">
                                <tr class="cache-row collapsed clickable" data-toggle="collapse" data-target="#cachefilesFrontendDetail" style="cursor: pointer">
                                    <td><?php echo __('files');?>
 <?php echo __('frontend');?>
</td>
                                    <td class="value">
                                        <?php echo count($_smarty_tpl->tpl_vars['tplcacheStats']->value->frontend);?>
&nbsp;<span class="fal fa-chevron-circle-down rotate-180 font-size-lg float-right"></span>
                                    </td>
                                </tr>
                                <?php if (count($_smarty_tpl->tpl_vars['tplcacheStats']->value->frontend) > 0) {?>
                                <tr class="cache-row">
                                    <td colspan="2" style="padding: 0">
                                        <div id="cachefilesFrontendDetail" class=" collapse">
                                            <table class="table cache-stats">
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tplcacheStats']->value->frontend, 'file');
$_smarty_tpl->tpl_vars['file']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->do_else = false;
?>
                                                    <tr class="cache-row">
                                                        <td class="file-path"><?php echo $_smarty_tpl->tpl_vars['file']->value->fullname;?>
</td>
                                                    </tr>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                                <?php }?>
                                <tr class="cache-row collapsed clickable" data-toggle="collapse" data-target="#cachefilesBackendDetail" style="cursor: pointer">
                                    <td><?php echo __('files');?>
 <?php echo __('backend');?>
</td>
                                    <td class="value">
                                        <?php echo count($_smarty_tpl->tpl_vars['tplcacheStats']->value->backend);?>
&nbsp;<span class="fal fa-chevron-circle-down rotate-180 font-size-lg float-right"></span>
                                    </td>
                                </tr>
                                <?php if (count($_smarty_tpl->tpl_vars['tplcacheStats']->value->backend) > 0) {?>
                                <tr class="cache-row">
                                    <td colspan="2" style="padding: 0">
                                        <div id="cachefilesBackendDetail" class=" collapse">
                                            <table class="table cache-stats">
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tplcacheStats']->value->backend, 'file');
$_smarty_tpl->tpl_vars['file']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->do_else = false;
?>
                                                    <tr class="cache-row">
                                                        <td class="file-path"><?php echo $_smarty_tpl->tpl_vars['file']->value->fullname;?>
</td>
                                                    </tr>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                                <?php }?>
                            </table>
                        </div>
                    </div>
                <?php }?>
            </div>
            <div id="benchmark" class="tab-pane fade <?php if ((isset($_smarty_tpl->tpl_vars['tab']->value)) && $_smarty_tpl->tpl_vars['tab']->value === 'benchmark') {?> active show<?php }?>">
                <?php if (!empty($_smarty_tpl->tpl_vars['all_methods']->value) && count($_smarty_tpl->tpl_vars['all_methods']->value) > 0) {?>
                    <div class="settings">
                        <div class="subheading1"><?php echo __('settings');?>
</div>
                        <hr class="mb-3">
                        <form method="post" action="cache.php">
                            <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                            <div>
                                <div class="form-group form-row align-items-center">
                                    <label class="col col-sm-4 col-form-label text-sm-right" for="runcount"><?php echo __('runs');?>
:</label>
                                    <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                                        <div class="input-group form-counter">
                                            <div class="input-group-prepend">
                                                <button type="button" class="btn btn-outline-secondary border-0" data-count-down>
                                                    <span class="fas fa-minus"></span>
                                                </button>
                                            </div>
                                            <input class="form-control" type="number" name="runcount" id="runcount" value="<?php if ((isset($_POST['runcount'])) && is_numeric($_POST['runcount'])) {
echo $_POST['runcount'];
} else { ?>1000<?php }?>" size="5" />
                                            <div class="input-group-append">
                                                <button type="button" class="btn btn-outline-secondary border-0" data-count-up>
                                                    <span class="fas fa-plus"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-row align-items-center">
                                    <label class="col col-sm-4 col-form-label text-sm-right" for="repeat"><?php echo __('repeats');?>
:</label>
                                    <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                                        <div class="input-group form-counter">
                                            <div class="input-group-prepend">
                                                <button type="button" class="btn btn-outline-secondary border-0" data-count-down>
                                                    <span class="fas fa-minus"></span>
                                                </button>
                                            </div>
                                            <input class="form-control" type="number" name="repeat" id="repeat" value="<?php if ((isset($_POST['repeat'])) && is_numeric($_POST['repeat'])) {
echo $_POST['repeat'];
} else { ?>1<?php }?>" size="5" />
                                            <div class="input-group-append">
                                                <button type="button" class="btn btn-outline-secondary border-0" data-count-up>
                                                    <span class="fas fa-plus"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-row align-items-center">
                                    <label class="col col-sm-4 col-form-label text-sm-right" for="testdata"><?php echo __('testData');?>
:</label>
                                    <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                                        <select class="custom-select" name="testdata" id="testdata">
                                            <option value="array"<?php if ((isset($_POST['testdata'])) && $_POST['testdata'] === 'array') {?> selected<?php }?>><?php echo __('typeArray');?>
</option>
                                            <option value="object"<?php if ((isset($_POST['testdata'])) && $_POST['testdata'] === 'object') {?> selected<?php }?>><?php echo __('typeObject');?>
</option>
                                            <option value="string"<?php if ((isset($_POST['testdata'])) && $_POST['testdata'] === 'string') {?> selected<?php }?>><?php echo __('typeString');?>
</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group form-row align-items-center">
                                    <label class="col col-sm-4 col-form-label text-sm-right" for="methods"><?php echo __('methods');?>
:</label>
                                    <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                                        <select class="selectpicker custom-select"
                                                name="methods[]"
                                                id="methods"
                                                multiple="multiple"
                                                data-selected-text-format="count > 2"
                                                data-size="7"
                                                data-actions-box="true">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_methods']->value, 'method');
$_smarty_tpl->tpl_vars['method']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['method']->value) {
$_smarty_tpl->tpl_vars['method']->do_else = false;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
"<?php if (!empty($_POST['methods']) && in_array($_smarty_tpl->tpl_vars['method']->value,$_POST['methods'])) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['method']->value;?>
</option>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </select>
                                    </div>
                                </div>
                                <input name="a" type="hidden" value="benchmark" />
                            </div>
                            <div class="save-wrapper">
                                <div class="row">
                                    <div class="ml-auto col-sm-6 col-xl-auto">
                                        <button name="submit" type="submit" value="Benchmark starten" class="btn btn-primary btn-block">
                                            <?php echo __('startBenchmark');?>

                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <?php if ((isset($_smarty_tpl->tpl_vars['bench_results']->value))) {?>
                        <?php if (is_array($_smarty_tpl->tpl_vars['bench_results']->value)) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bench_results']->value, 'result', false, 'resultsKey');
$_smarty_tpl->tpl_vars['result']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['resultsKey']->value => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->do_else = false;
?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['result']->value['method']))) {?>
                                    <div class="bench-result">
                                        <div class="subheading1"><?php echo $_smarty_tpl->tpl_vars['result']->value['method'];?>
</div>
                                        <hr class="mb-3">
                                        <div>
                                            <p><span class="opt"><?php echo __('status');?>
: </span> <span class="label <?php if ($_smarty_tpl->tpl_vars['result']->value['status'] === 'ok') {?>label-success<?php } else { ?>label-danger<?php }?>"><?php echo $_smarty_tpl->tpl_vars['result']->value['status'];?>
</span></p>
                                            <p><span class="opt"><?php echo __('time');?>
 get: </span>
                                                <?php if ($_smarty_tpl->tpl_vars['result']->value['status'] !== 'failed' && $_smarty_tpl->tpl_vars['result']->value['status'] !== 'invalid') {?>
                                                    <span class="text"><?php echo $_smarty_tpl->tpl_vars['result']->value['timings']['get'];?>
s</span>
                                                    <span class="text">(<?php echo $_smarty_tpl->tpl_vars['result']->value['rps']['get'];?>
 <?php echo __('entries');?>
/s)</span>
                                                <?php } else { ?>
                                                    <span class="text">-</span>
                                                <?php }?>
                                            </p>

                                            <p><span class="opt"><?php echo __('time');?>
 set: </span>
                                                <?php if ($_smarty_tpl->tpl_vars['result']->value['status'] !== 'failed' && $_smarty_tpl->tpl_vars['result']->value['status'] !== 'invalid') {?>
                                                    <span class="text"><?php echo $_smarty_tpl->tpl_vars['result']->value['timings']['set'];?>
s</span>
                                                    <span class="text">(<?php echo $_smarty_tpl->tpl_vars['result']->value['rps']['set'];?>
 <?php echo __('entries');?>
/s)</span>
                                                <?php } else { ?>
                                                    <span class="text">-</span>
                                                <?php }?>
                                            </p>
                                        </div>
                                    </div>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php } else { ?>
                            <div class="alert alert-warning"><?php echo __('errorBenchmark');?>
</div>
                        <?php }?>
                    <?php }?>
                <?php } else { ?>
                    <div class="alert alert-warning"><?php echo __('errorMethodNotFound');?>
</div>
                <?php }?>
            </div>
            <div id="settings" class="tab-pane fade <?php if ((isset($_smarty_tpl->tpl_vars['tab']->value)) && $_smarty_tpl->tpl_vars['tab']->value === 'settings') {?> active show<?php }?>">
                <form method="post" action="cache.php">
                    <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                    <input type="hidden" name="a" value="settings" />
                    <input name="tab" type="hidden" value="settings" />

                    <div>
                        <div class="subheading1"><?php echo __('general');?>
</div>
                        <hr class="mb-3">
                        <div>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['settings']->value, 'setting');
$_smarty_tpl->tpl_vars['setting']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['setting']->value) {
$_smarty_tpl->tpl_vars['setting']->do_else = false;
?>
                                <?php if ($_smarty_tpl->tpl_vars['setting']->value->cConf === 'Y') {?>
                                    <div class="form-group form-row align-items-center">
                                        <label class="col col-sm-4 col-form-label text-sm-right" for="<?php echo $_smarty_tpl->tpl_vars['setting']->value->cWertName;?>
"><?php echo $_smarty_tpl->tpl_vars['setting']->value->cName;?>
:</label>
                                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                                            <?php if ($_smarty_tpl->tpl_vars['setting']->value->cInputTyp === 'selectbox') {?>
                                                <select name="<?php echo $_smarty_tpl->tpl_vars['setting']->value->cWertName;?>
" id="<?php echo $_smarty_tpl->tpl_vars['setting']->value->cWertName;?>
" class="custom-select">
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['setting']->value->ConfWerte, 'wert');
$_smarty_tpl->tpl_vars['wert']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['wert']->value) {
$_smarty_tpl->tpl_vars['wert']->do_else = false;
?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['wert']->value->cWert;?>
" <?php if ((isset($_smarty_tpl->tpl_vars['setting']->value->gesetzterWert)) && $_smarty_tpl->tpl_vars['setting']->value->gesetzterWert == $_smarty_tpl->tpl_vars['wert']->value->cWert) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['wert']->value->cName;?>
</option>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </select>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['setting']->value->cInputTyp === 'number') {?>
                                                <div class="input-group form-counter">
                                                    <div class="input-group-prepend">
                                                        <button type="button" class="btn btn-outline-secondary border-0" data-count-down>
                                                            <span class="fas fa-minus"></span>
                                                        </button>
                                                    </div>
                                                    <input class="form-control" type="number" name="<?php echo $_smarty_tpl->tpl_vars['setting']->value->cWertName;?>
" id="<?php echo $_smarty_tpl->tpl_vars['setting']->value->cWertName;?>
" value="<?php if ((isset($_smarty_tpl->tpl_vars['setting']->value->gesetzterWert))) {
echo $_smarty_tpl->tpl_vars['setting']->value->gesetzterWert;
}?>" tabindex="1" />
                                                    <div class="input-group-append">
                                                        <button type="button" class="btn btn-outline-secondary border-0" data-count-up>
                                                            <span class="fas fa-plus"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            <?php } else { ?>
                                                <input class="form-control" type="text" name="<?php echo $_smarty_tpl->tpl_vars['setting']->value->cWertName;?>
" id="<?php echo $_smarty_tpl->tpl_vars['setting']->value->cWertName;?>
" value="<?php if ((isset($_smarty_tpl->tpl_vars['setting']->value->gesetzterWert))) {
echo $_smarty_tpl->tpl_vars['setting']->value->gesetzterWert;
}?>" tabindex="1" />
                                            <?php }?>
                                        </div>
                                        <?php if ($_smarty_tpl->tpl_vars['setting']->value->cBeschreibung) {?>
                                            <div class="col-auto ml-sm-n4 order-2 order-sm-3">
                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHelpDesc'][0], array( array('cDesc'=>$_smarty_tpl->tpl_vars['setting']->value->cBeschreibung),$_smarty_tpl ) );?>

                                            </div>
                                        <?php }?>
                                    </div>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    </div>

                    <div id="row_toggle_cache" style="display: none;">
                        <div>
                            <div class="subheading1"><?php echo __('extended');?>
</div>
                            <hr class="mb-3">
                            <div>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['advanced_settings']->value, 'setting');
$_smarty_tpl->tpl_vars['setting']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['setting']->value) {
$_smarty_tpl->tpl_vars['setting']->do_else = false;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['setting']->value->cConf === 'Y') {?>
                                        <div class="form-group form-row align-items-center">
                                            <label class="col col-sm-4 col-form-label text-sm-right" for="<?php echo $_smarty_tpl->tpl_vars['setting']->value->cWertName;?>
"><?php echo $_smarty_tpl->tpl_vars['setting']->value->cName;?>
:</label>
                                            <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                                                <?php if ($_smarty_tpl->tpl_vars['setting']->value->cInputTyp === 'selectbox') {?>
                                                    <select name="<?php echo $_smarty_tpl->tpl_vars['setting']->value->cWertName;?>
" id="<?php echo $_smarty_tpl->tpl_vars['setting']->value->cWertName;?>
" class="custom-select">
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['setting']->value->ConfWerte, 'wert');
$_smarty_tpl->tpl_vars['wert']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['wert']->value) {
$_smarty_tpl->tpl_vars['wert']->do_else = false;
?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['wert']->value->cWert;?>
" <?php if ((isset($_smarty_tpl->tpl_vars['setting']->value->gesetzterWert)) && $_smarty_tpl->tpl_vars['setting']->value->gesetzterWert == $_smarty_tpl->tpl_vars['wert']->value->cWert) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['wert']->value->cName;?>
</option>
                                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                    </select>
                                                <?php } elseif ($_smarty_tpl->tpl_vars['setting']->value->cInputTyp === 'number') {?>
                                                    <div class="input-group form-counter">
                                                        <div class="input-group-prepend">
                                                            <button type="button" class="btn btn-outline-secondary border-0" data-count-down>
                                                                <span class="fas fa-minus"></span>
                                                            </button>
                                                        </div>
                                                        <input class="form-control" type="number" name="<?php echo $_smarty_tpl->tpl_vars['setting']->value->cWertName;?>
" id="<?php echo $_smarty_tpl->tpl_vars['setting']->value->cWertName;?>
" value="<?php if ((isset($_smarty_tpl->tpl_vars['setting']->value->gesetzterWert))) {
echo $_smarty_tpl->tpl_vars['setting']->value->gesetzterWert;
}?>" tabindex="1" />
                                                        <div class="input-group-append">
                                                            <button type="button" class="btn btn-outline-secondary border-0" data-count-up>
                                                                <span class="fas fa-plus"></span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                <?php } elseif ($_smarty_tpl->tpl_vars['setting']->value->cInputTyp === 'pass') {?>
                                                    <input class="form-control" type="password" name="<?php echo $_smarty_tpl->tpl_vars['setting']->value->cWertName;?>
" id="<?php echo $_smarty_tpl->tpl_vars['setting']->value->cWertName;?>
" value="<?php if ((isset($_smarty_tpl->tpl_vars['setting']->value->gesetzterWert))) {
echo $_smarty_tpl->tpl_vars['setting']->value->gesetzterWert;
}?>" tabindex="1" />
                                                <?php } else { ?>
                                                    <input class="form-control" type="text" name="<?php echo $_smarty_tpl->tpl_vars['setting']->value->cWertName;?>
" id="<?php echo $_smarty_tpl->tpl_vars['setting']->value->cWertName;?>
" value="<?php if ((isset($_smarty_tpl->tpl_vars['setting']->value->gesetzterWert))) {
echo $_smarty_tpl->tpl_vars['setting']->value->gesetzterWert;
}?>" tabindex="1" />
                                                <?php }?>
                                            </div>
                                            <?php if ($_smarty_tpl->tpl_vars['setting']->value->cBeschreibung) {?>
                                                <div class="col-auto ml-sm-n4 order-2 order-sm-3">
                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHelpDesc'][0], array( array('cDesc'=>$_smarty_tpl->tpl_vars['setting']->value->cBeschreibung),$_smarty_tpl ) );?>

                                                </div>
                                            <?php }?>
                                        </div>
                                    <?php }?>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                        </div>
                    </div>
                    <div class="save-wrapper submit">
                        <div class="row">
                            <div class="col-sm-6 col-xl-auto">
                                <a id="btn_toggle_cache" class="btn btn-outline-primary btn-block down"><?php echo __('showAdvanced');?>
</a>
                            </div>
                            <div class="ml-auto col-sm-6 col-xl-auto">
                                <button name="speichern" type="submit" value="<?php echo __('save');?>
" class="btn btn-primary btn-block">
                                    <?php echo __('saveWithIcon');?>

                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php }
}
