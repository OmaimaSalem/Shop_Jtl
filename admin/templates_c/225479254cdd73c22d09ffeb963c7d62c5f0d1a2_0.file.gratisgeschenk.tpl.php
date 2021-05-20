<?php
/* Smarty version 3.1.38, created on 2021-05-04 12:22:11
  from 'C:\xampp\htdocs\shop\admin\templates\bootstrap\gratisgeschenk.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6091205334fac9_72638005',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '225479254cdd73c22d09ffeb963c7d62c5f0d1a2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\admin\\templates\\bootstrap\\gratisgeschenk.tpl',
      1 => 1612177964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/header.tpl' => 1,
    'file:tpl_inc/seite_header.tpl' => 1,
    'file:tpl_inc/pagination.tpl' => 3,
    'file:tpl_inc/config_section.tpl' => 1,
    'file:tpl_inc/footer.tpl' => 1,
  ),
),false)) {
function content_6091205334fac9_72638005 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:tpl_inc/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_assignInScope('cFunAttrib', $_smarty_tpl->tpl_vars['ART_ATTRIBUT_GRATISGESCHENKAB']->value);?>

<?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/seite_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cTitel'=>__('ggHeader'),'cDokuURL'=>__('ggURL')), 0, false);
?>
<div id="content">
    <div class="tabs">
        <nav class="tabs-nav">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['cTab']->value === '' || $_smarty_tpl->tpl_vars['cTab']->value === 'aktivegeschenke') {?> active<?php }?>" data-toggle="tab" role="tab" href="#aktivegeschenke">
                        <?php echo __('ggActiveProducts');?>

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'haeufigegeschenke') {?> active<?php }?>" data-toggle="tab" role="tab" href="#haeufigegeschenke">
                        <?php echo __('ggCommonBuyedProducts');?>

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'letzten100geschenke') {?> active<?php }?>" data-toggle="tab" role="tab" href="#letzten100geschenke">
                        <?php echo __('ggLast100Products');?>

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'einstellungen') {?> active<?php }?>" data-toggle="tab" role="tab" href="#einstellungen">
                        <?php echo __('settings');?>

                    </a>
                </li>
            </ul>
        </nav>
        <div class="tab-content">
            <div id="aktivegeschenke" class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['cTab']->value === '' || $_smarty_tpl->tpl_vars['cTab']->value === 'aktivegeschenke') {?> active show<?php }?>">
                <?php if ((isset($_smarty_tpl->tpl_vars['oAktiveGeschenk_arr']->value)) && count($_smarty_tpl->tpl_vars['oAktiveGeschenk_arr']->value) > 0) {?>
                    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['oPagiAktiv']->value,'cAnchor'=>'aktivegeschenke'), 0, false);
?>
                    <div class="settings table-responsive">
                        <table class="table table-striped table-align-top">
                            <thead>
                            <tr>
                                <th class="text-left"><?php echo __('productName');?>
</th>
                                <th class="th-2 text-center"><?php echo __('ggOrderValueMin');?>
</th>
                                <th class="th-3 text-center"><?php echo __('ggDate');?>
</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oAktiveGeschenk_arr']->value, 'oAktiveGeschenk');
$_smarty_tpl->tpl_vars['oAktiveGeschenk']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oAktiveGeschenk']->value) {
$_smarty_tpl->tpl_vars['oAktiveGeschenk']->do_else = false;
?>
                                <tr>
                                    <td>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['oAktiveGeschenk']->value->cURLFull;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['oAktiveGeschenk']->value->cName;?>
</a>
                                    </td>
                                    <td class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getCurrencyConversionSmarty'][0], array( array('fPreisBrutto'=>$_smarty_tpl->tpl_vars['oAktiveGeschenk']->value->FunktionsAttribute[$_smarty_tpl->tpl_vars['cFunAttrib']->value]),$_smarty_tpl ) );?>
</td>
                                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['oAktiveGeschenk']->value->dErstellt_de;?>
</td>
                                </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </tbody>
                        </table>
                    </div>
                <?php } else { ?>
                    <div class="alert alert-info" role="alert"><?php echo __('noDataAvailable');?>
</div>
                <?php }?>
            </div>
            <div id="haeufigegeschenke" class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'haeufigegeschenke') {?> active show<?php }?>">
                <?php if ((isset($_smarty_tpl->tpl_vars['oHaeufigGeschenk_arr']->value)) && count($_smarty_tpl->tpl_vars['oHaeufigGeschenk_arr']->value) > 0) {?>
                    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['oPagiHaeufig']->value,'cAnchor'=>'haeufigegeschenke'), 0, true);
?>
                    <div class="settings table-responsive">
                        <table class="table table-striped table-align-top">
                            <thead>
                            <tr>
                                <th class="text-left"><?php echo __('productName');?>
</th>
                                <th class="th-2 text-center"><?php echo __('ggOrderValueMin');?>
</th>
                                <th class="th-3 text-center"><?php echo __('ggCount');?>
</th>
                                <th class="th-3 text-center"><?php echo __('ggOrderValueAverage');?>
</th>
                                <th class="th-4 text-center"><?php echo __('gglastOrdered');?>
</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oHaeufigGeschenk_arr']->value, 'oHaeufigGeschenk');
$_smarty_tpl->tpl_vars['oHaeufigGeschenk']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oHaeufigGeschenk']->value) {
$_smarty_tpl->tpl_vars['oHaeufigGeschenk']->do_else = false;
?>
                                <tr>
                                    <td>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['oAktiveGeschenk']->value->cURLFull;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['oHaeufigGeschenk']->value->artikel->cName;?>
</a>
                                    </td>
                                    <td class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getCurrencyConversionSmarty'][0], array( array('fPreisBrutto'=>$_smarty_tpl->tpl_vars['oHaeufigGeschenk']->value->artikel->FunktionsAttribute[$_smarty_tpl->tpl_vars['cFunAttrib']->value]),$_smarty_tpl ) );?>
</td>
                                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['oHaeufigGeschenk']->value->artikel->nGGAnzahl;?>
 x</td>
                                    <td class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getCurrencyConversionSmarty'][0], array( array('fPreisBrutto'=>$_smarty_tpl->tpl_vars['oHaeufigGeschenk']->value->avgOrderValue),$_smarty_tpl ) );?>
</td>
                                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['oHaeufigGeschenk']->value->lastOrdered;?>
</td>
                                </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </tbody>
                        </table>
                    </div>
                <?php } else { ?>
                    <div class="alert alert-info" role="alert"><?php echo __('noDataAvailable');?>
</div>
                <?php }?>
            </div>
            <div id="letzten100geschenke" class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'letzten100geschenke') {?> active show<?php }?>">
                <?php if ((isset($_smarty_tpl->tpl_vars['oLetzten100Geschenk_arr']->value)) && count($_smarty_tpl->tpl_vars['oLetzten100Geschenk_arr']->value) > 0) {?>
                    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['oPagiLetzte100']->value,'cAnchor'=>'letzten100geschenke'), 0, true);
?>
                    <div class="settings table-responsive">
                        <table class="table table-striped table-align-top">
                            <thead>
                            <tr>
                                <th class="text-left"><?php echo __('productName');?>
</th>
                                <th class="th-2 text-center"><?php echo __('ggOrderValueMin');?>
</th>
                                <th class="th-4 text-center"><?php echo __('ggOrderValue');?>
</th>
                                <th class="th-4 text-center"><?php echo __('ggOrdered');?>
</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oLetzten100Geschenk_arr']->value, 'oLetzten100Geschenk');
$_smarty_tpl->tpl_vars['oLetzten100Geschenk']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oLetzten100Geschenk']->value) {
$_smarty_tpl->tpl_vars['oLetzten100Geschenk']->do_else = false;
?>
                                <tr>
                                    <td>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['oAktiveGeschenk']->value->cURLFull;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['oLetzten100Geschenk']->value->artikel->cName;?>
</a>
                                    </td>
                                    <td class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getCurrencyConversionSmarty'][0], array( array('fPreisBrutto'=>$_smarty_tpl->tpl_vars['oLetzten100Geschenk']->value->artikel->FunktionsAttribute[$_smarty_tpl->tpl_vars['cFunAttrib']->value]),$_smarty_tpl ) );?>
</td>
                                    <td class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getCurrencyConversionSmarty'][0], array( array('fPreisBrutto'=>$_smarty_tpl->tpl_vars['oLetzten100Geschenk']->value->orderValue),$_smarty_tpl ) );?>
</td>
                                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['oLetzten100Geschenk']->value->orderCreated;?>
</td>
                                </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </tbody>
                        </table>
                    </div>
                <?php } else { ?>
                    <div class="alert alert-info" role="alert"><?php echo __('noDataAvailable');?>
</div>
                <?php }?>
            </div>
            <div id="einstellungen" class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'einstellungen') {?> active show<?php }?>">
                <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/config_section.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('config'=>$_smarty_tpl->tpl_vars['oConfig_arr']->value,'name'=>'einstellen','action'=>'gratisgeschenk.php','buttonCaption'=>__('saveWithIcon'),'title'=>__('settings'),'tab'=>'einstellungen'), 0, false);
?>
            </div>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
