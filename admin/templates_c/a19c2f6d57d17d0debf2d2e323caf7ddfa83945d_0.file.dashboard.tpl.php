<?php
/* Smarty version 3.1.38, created on 2021-05-04 11:53:35
  from 'C:\xampp\htdocs\shop\admin\templates\bootstrap\dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6091199fe58cc1_47351983',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a19c2f6d57d17d0debf2d2e323caf7ddfa83945d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\admin\\templates\\bootstrap\\dashboard.tpl',
      1 => 1612177964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/header.tpl' => 1,
    'file:tpl_inc/widget_selector.tpl' => 1,
    'file:tpl_inc/widget_container.tpl' => 3,
    'file:tpl_inc/seite_header.tpl' => 1,
    'file:tpl_inc/footer.tpl' => 1,
  ),
),false)) {
function content_6091199fe58cc1_47351983 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:tpl_inc/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'permission' ][ 0 ], array( 'DASHBOARD_VIEW' ))) {?>
    <?php echo '<script'; ?>
 type="text/javascript">

    function addWidget(kWidget) {
        ioCall(
            'addWidget', [kWidget], function () {
                window.location.href='index.php?kWidget=' + kWidget;
            }
        );
    }

    $(function() {
        ioCall('truncateJtllog', undefined, undefined, undefined, undefined, true);
    });
    <?php echo '</script'; ?>
>

    <div id="content">
        <div class="row p-2">
            <div class="col">
                <h1 class="content-header-headline"><?php echo __('dashboard');?>
</h1>
            </div>
            <div class="col-auto ml-auto">
                <div class="dropleft d-inline-block">
                    <button class="btn btn-link btn-lg p-0" type="button" id="helpcenter" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="icon-hover">
                            <span class="fal fa-cog"></span>
                            <span class="fas fa-cog"></span>
                        </span>
                    </button>
                    <div id="available-widgets" class="dropdown-menu dropdown-menu-right min-w-lg" aria-labelledby="helpcenter">
                        <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/widget_selector.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('oAvailableWidget_arr'=>$_smarty_tpl->tpl_vars['oAvailableWidget_arr']->value), 0, false);
?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/widget_container.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('eContainer'=>'left'), 0, false);
?>
            <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/widget_container.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('eContainer'=>'center'), 0, true);
?>
            <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/widget_container.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('eContainer'=>'right'), 0, true);
?>
        </div>
    </div>
<?php } else { ?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/seite_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cTitel'=>__('dashboard')), 0, false);
?>
    <div class="alert alert-success">
        <strong><?php echo __('noMoreInfo');?>
</strong>
    </div>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
