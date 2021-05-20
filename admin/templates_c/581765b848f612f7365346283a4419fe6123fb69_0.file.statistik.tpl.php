<?php
/* Smarty version 3.1.38, created on 2021-05-04 12:22:41
  from 'C:\xampp\htdocs\shop\admin\templates\bootstrap\statistik.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60912071214cc9_38243077',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '581765b848f612f7365346283a4419fe6123fb69' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\admin\\templates\\bootstrap\\statistik.tpl',
      1 => 1612177964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/header.tpl' => 1,
    'file:tpl_inc/seite_header.tpl' => 1,
    'file:tpl_inc/statistik_suchmaschinen.tpl' => 1,
    'file:tpl_inc/linechart_inc.tpl' => 1,
    'file:tpl_inc/piechart_inc.tpl' => 1,
    'file:tpl_inc/filtertools.tpl' => 1,
    'file:tpl_inc/pagination.tpl' => 1,
    'file:tpl_inc/footer.tpl' => 1,
  ),
),false)) {
function content_60912071214cc9_38243077 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:tpl_inc/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 type="text/javascript">
    function changeStatType(elem) {
        window.location.href = "statistik.php?s=" + elem.options[elem.selectedIndex].value;
    }
<?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['nTyp']->value === (defined('STATS_ADMIN_TYPE_BESUCHER') ? constant('STATS_ADMIN_TYPE_BESUCHER') : null)) {?>
    <?php $_smarty_tpl->_assignInScope('cTitel', ((__('statisticTitle')).(': ')).(__('visitors')));?>
    <?php $_smarty_tpl->_assignInScope('cURL', __('statisticBesucherURL'));
} elseif ($_smarty_tpl->tpl_vars['nTyp']->value === (defined('STATS_ADMIN_TYPE_KUNDENHERKUNFT') ? constant('STATS_ADMIN_TYPE_KUNDENHERKUNFT') : null)) {?>
    <?php $_smarty_tpl->_assignInScope('cTitel', ((__('statisticTitle')).(': ')).(__('statisticKundenherkunft')));?>
    <?php $_smarty_tpl->_assignInScope('cURL', __('statisticKundenherkunftURL'));
} elseif ($_smarty_tpl->tpl_vars['nTyp']->value === (defined('STATS_ADMIN_TYPE_SUCHMASCHINE') ? constant('STATS_ADMIN_TYPE_SUCHMASCHINE') : null)) {?>
    <?php $_smarty_tpl->_assignInScope('cTitel', ((__('statisticTitle')).(': ')).(__('statisticSuchmaschine')));?>
    <?php $_smarty_tpl->_assignInScope('cURL', __('statisticSuchmaschineURL'));
} elseif ($_smarty_tpl->tpl_vars['nTyp']->value === (defined('STATS_ADMIN_TYPE_UMSATZ') ? constant('STATS_ADMIN_TYPE_UMSATZ') : null)) {?>
    <?php $_smarty_tpl->_assignInScope('cTitel', ((__('statisticTitle')).(': ')).(__('statisticUmsatz')));?>
    <?php $_smarty_tpl->_assignInScope('cURL', __('statisticUmsatzURL'));
} elseif ($_smarty_tpl->tpl_vars['nTyp']->value === (defined('STATS_ADMIN_TYPE_EINSTIEGSSEITEN') ? constant('STATS_ADMIN_TYPE_EINSTIEGSSEITEN') : null)) {?>
    <?php $_smarty_tpl->_assignInScope('cTitel', ((__('statisticTitle')).(': ')).(__('statisticEinstiegsseite')));?>
    <?php $_smarty_tpl->_assignInScope('cURL', __('statisticEinstiegsseiteURL'));
}?>

<?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/seite_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cTitel'=>$_smarty_tpl->tpl_vars['cTitel']->value,'cBeschreibung'=>__('statisticDesc'),'cDokuURL'=>$_smarty_tpl->tpl_vars['cURL']->value), 0, false);
?>
<div id="content">
    <?php if ($_smarty_tpl->tpl_vars['nTyp']->value === (defined('STATS_ADMIN_TYPE_SUCHMASCHINE') ? constant('STATS_ADMIN_TYPE_SUCHMASCHINE') : null)) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/statistik_suchmaschinen.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } else { ?>
        <div class="card">
            <div class="card-body">
                <div class="form-row">
                    <label class="col-sm-auto col-form-label" for="statType"><?php echo __('statisticType');?>
:</label>
                    <span class="col-sm-auto">
                        <select class="custom-select" name="statType" id="statType" onChange="changeStatType(this);">
                            <option value="<?php echo (defined('STATS_ADMIN_TYPE_BESUCHER') ? constant('STATS_ADMIN_TYPE_BESUCHER') : null);?>
"<?php if ($_smarty_tpl->tpl_vars['nTyp']->value === (defined('STATS_ADMIN_TYPE_BESUCHER') ? constant('STATS_ADMIN_TYPE_BESUCHER') : null)) {?> selected<?php }?>><?php echo __('visitors');?>
</option>
                            <option value="<?php echo (defined('STATS_ADMIN_TYPE_KUNDENHERKUNFT') ? constant('STATS_ADMIN_TYPE_KUNDENHERKUNFT') : null);?>
"<?php if ($_smarty_tpl->tpl_vars['nTyp']->value === (defined('STATS_ADMIN_TYPE_KUNDENHERKUNFT') ? constant('STATS_ADMIN_TYPE_KUNDENHERKUNFT') : null)) {?> selected<?php }?>><?php echo __('customerHeritage');?>
</option>
                            <option value="<?php echo (defined('STATS_ADMIN_TYPE_SUCHMASCHINE') ? constant('STATS_ADMIN_TYPE_SUCHMASCHINE') : null);?>
"<?php if ($_smarty_tpl->tpl_vars['nTyp']->value === (defined('STATS_ADMIN_TYPE_SUCHMASCHINE') ? constant('STATS_ADMIN_TYPE_SUCHMASCHINE') : null)) {?> selected<?php }?>><?php echo __('searchEngines');?>
</option>
                            <option value="<?php echo (defined('STATS_ADMIN_TYPE_UMSATZ') ? constant('STATS_ADMIN_TYPE_UMSATZ') : null);?>
"<?php if ($_smarty_tpl->tpl_vars['nTyp']->value === (defined('STATS_ADMIN_TYPE_UMSATZ') ? constant('STATS_ADMIN_TYPE_UMSATZ') : null)) {?> selected<?php }?>><?php echo __('sales');?>
</option>
                            <option value="<?php echo (defined('STATS_ADMIN_TYPE_EINSTIEGSSEITEN') ? constant('STATS_ADMIN_TYPE_EINSTIEGSSEITEN') : null);?>
"<?php if ($_smarty_tpl->tpl_vars['nTyp']->value === (defined('STATS_ADMIN_TYPE_EINSTIEGSSEITEN') ? constant('STATS_ADMIN_TYPE_EINSTIEGSSEITEN') : null)) {?> selected<?php }?>><?php echo __('entryPages');?>
</option>
                        </select>
                    </span>
                </div>
            </div>
        </div>

        <?php if ((isset($_smarty_tpl->tpl_vars['linechart']->value))) {?>
            <br>
            <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/linechart_inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('linechart'=>$_smarty_tpl->tpl_vars['linechart']->value,'headline'=>$_smarty_tpl->tpl_vars['headline']->value,'id'=>'linechart','width'=>'100%','height'=>'400px','ylabel'=>$_smarty_tpl->tpl_vars['ylabel']->value,'href'=>false,'legend'=>false,'ymin'=>'0','chartpad'=>'1.5rem'), 0, false);
?>
        <?php } elseif ((isset($_smarty_tpl->tpl_vars['piechart']->value))) {?>
            <br>
            <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/piechart_inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('piechart'=>$_smarty_tpl->tpl_vars['piechart']->value,'headline'=>$_smarty_tpl->tpl_vars['headline']->value,'id'=>'piechart','width'=>'100%','height'=>'400px','chartpad'=>'1.5rem'), 0, false);
?>
        <?php }?>
        <div class="card">
            <div class="card-body">
                <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/filtertools.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('oFilter'=>$_smarty_tpl->tpl_vars['oFilter']->value,'cParam_arr'=>array('s'=>$_smarty_tpl->tpl_vars['nTyp']->value)), 0, false);
?>
                <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['pagination']->value,'cParam_arr'=>array('s'=>$_smarty_tpl->tpl_vars['nTyp']->value)), 0, false);
?>
                <?php if ((isset($_smarty_tpl->tpl_vars['oStat_arr']->value)) && count($_smarty_tpl->tpl_vars['oStat_arr']->value) > 0) {?>
                    <div class="table-responsive">
                        <table class="table table-striped table-sm">
                            <thead>
                            <tr>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cMember_arr']->value[0], 'cMember');
$_smarty_tpl->tpl_vars['cMember']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cMember']->value) {
$_smarty_tpl->tpl_vars['cMember']->do_else = false;
?>
                                    <th class="text-center"><?php echo $_smarty_tpl->tpl_vars['cMember']->value[1];?>
</th>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oStat_arr']->value, 'oStat', false, 'i', 'stats', array (
));
$_smarty_tpl->tpl_vars['oStat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['oStat']->value) {
$_smarty_tpl->tpl_vars['oStat']->do_else = false;
?>
                                <?php if ($_smarty_tpl->tpl_vars['i']->value >= $_smarty_tpl->tpl_vars['nPosAb']->value && $_smarty_tpl->tpl_vars['i']->value < $_smarty_tpl->tpl_vars['nPosBis']->value) {?>
                                    <tr>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cMember_arr']->value[$_smarty_tpl->tpl_vars['i']->value], 'cMember', false, 'j', 'member', array (
));
$_smarty_tpl->tpl_vars['cMember']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['j']->value => $_smarty_tpl->tpl_vars['cMember']->value) {
$_smarty_tpl->tpl_vars['cMember']->do_else = false;
?>
                                            <?php $_smarty_tpl->_assignInScope('cMemberVar', $_smarty_tpl->tpl_vars['cMember']->value[0]);?>
                                            <td class="text-center">
                                                <?php if ($_smarty_tpl->tpl_vars['cMemberVar']->value === 'nCount' && $_smarty_tpl->tpl_vars['nTyp']->value === (defined('STATS_ADMIN_TYPE_UMSATZ') ? constant('STATS_ADMIN_TYPE_UMSATZ') : null)) {?>
                                                    <?php echo number_format($_smarty_tpl->tpl_vars['oStat']->value->{$_smarty_tpl->tpl_vars['cMemberVar']->value},2,',','.');?>
 &euro;
                                                <?php } elseif ($_smarty_tpl->tpl_vars['cMemberVar']->value === 'nCount') {?>
                                                    <?php echo number_format($_smarty_tpl->tpl_vars['oStat']->value->{$_smarty_tpl->tpl_vars['cMemberVar']->value},0,',','.');?>

                                                <?php } else { ?>
                                                    <?php echo $_smarty_tpl->tpl_vars['oStat']->value->{$_smarty_tpl->tpl_vars['cMemberVar']->value};?>

                                                <?php }?>
                                            </td>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tr>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </tbody>
                        </table>
                    </div>
                <?php } else { ?>
                    <div class="alert alert-info"><?php echo __('noData');?>
</div>
                <?php }?>
            </div>
        </div>
    <?php }?>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
