<?php
/* Smarty version 3.1.38, created on 2021-05-07 11:45:44
  from 'C:\xampp\htdocs\shop\admin\templates\bootstrap\licenses.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60950c489d2414_64046540',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc5707cf14ba9bffe70dff6e451c132820bf0807' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\admin\\templates\\bootstrap\\licenses.tpl',
      1 => 1612177964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/header.tpl' => 1,
    'file:tpl_inc/seite_header.tpl' => 1,
    'file:tpl_inc/licenses_store_connection.tpl' => 1,
    'file:tpl_inc/licenses_bound.tpl' => 1,
    'file:tpl_inc/licenses_unbound.tpl' => 1,
    'file:tpl_inc/licenses_scripts.tpl' => 1,
    'file:tpl_inc/footer.tpl' => 1,
  ),
),false)) {
function content_60950c489d2414_64046540 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:tpl_inc/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/seite_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cTitel'=>__('My purchases'),'cBeschreibung'=>__('pageDesc'),'cDokuURL'=>__('https://www.jtl-software.de')), 0, false);
if ((defined('SAFE_MODE') ? constant('SAFE_MODE') : null) === false) {?>
    <div id="content">
        <div id="error-placeholder" class="alert alert-danger d-none"></div>
        <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/licenses_store_connection.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php if ($_smarty_tpl->tpl_vars['hasAuth']->value) {?>
            <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/licenses_bound.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('licenses'=>$_smarty_tpl->tpl_vars['licenses']->value), 0, false);
?>
            <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/licenses_unbound.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('licenses'=>$_smarty_tpl->tpl_vars['licenses']->value), 0, false);
?>
            <?php if ((isset($_GET['debug']))) {?>
                <h3>AuthToken</h3>
                <pre><?php echo $_smarty_tpl->tpl_vars['authToken']->value;?>
</pre>
                <h3>Bound licenses</h3>
                <pre><?php echo dump($_smarty_tpl->tpl_vars['licenses']->value->getBound());?>
</pre>
                <h3>Raw data</h3>
                <pre><?php echo var_dump($_smarty_tpl->tpl_vars['rawData']->value);?>
</pre>
            <?php }?>
        <?php }?>
    </div>

    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/licenses_scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} else { ?>
    <div class="alert alert-warning fade show" role="alert">
        <i class="fal fa-exclamation-triangle mr-2"></i>
        <?php echo __('Safe mode enabled.');?>
 - <?php echo __('My purchases');?>

    </div>
<?php }
$_smarty_tpl->_subTemplateRender('file:tpl_inc/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
