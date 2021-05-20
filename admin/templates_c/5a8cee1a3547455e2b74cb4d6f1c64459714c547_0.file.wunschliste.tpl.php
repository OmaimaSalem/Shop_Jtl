<?php
/* Smarty version 3.1.38, created on 2021-05-04 12:23:18
  from 'C:\xampp\htdocs\shop\admin\templates\bootstrap\wunschliste.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60912096a65aa0_41379022',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a8cee1a3547455e2b74cb4d6f1c64459714c547' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\admin\\templates\\bootstrap\\wunschliste.tpl',
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
function content_60912096a65aa0_41379022 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:tpl_inc/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:tpl_inc/seite_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cTitel'=>__('wishlistName'),'cBeschreibung'=>__('wishlistDesc'),'cDokuURL'=>__('wishlistURL')), 0, false);
?>
<div id="content">
    <div class="tabs">
        <nav class="tabs-nav">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['cTab']->value === '' || $_smarty_tpl->tpl_vars['cTab']->value === 'wunschlistepos') {?> active<?php }?>" data-toggle="tab" role="tab" href="#wunschlistepos">
                        <?php echo __('wishlistTop100');?>

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'wunschlisteartikel') {?> active<?php }?>" data-toggle="tab" role="tab" href="#wunschlisteartikel">
                        <?php echo __('wishlistPosTop100');?>

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'wunschlistefreunde') {?> active<?php }?>" data-toggle="tab" role="tab" href="#wunschlistefreunde">
                        <?php echo __('wishlistSend');?>

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
            <div id="wunschlistepos" class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['cTab']->value === '' || $_smarty_tpl->tpl_vars['cTab']->value === 'wunschlistepos') {?> active show<?php }?>">
                <?php if ((isset($_smarty_tpl->tpl_vars['CWunschliste_arr']->value)) && count($_smarty_tpl->tpl_vars['CWunschliste_arr']->value) > 0) {?>
                    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['oPagiPos']->value,'cAnchor'=>'wunschlistepos'), 0, false);
?>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="text-left"><?php echo __('wishlistName');?>
</th>
                                    <th class="text-left"><?php echo __('customer');?>
</th>
                                    <th class="th-3 text-center"><?php echo __('wishlistPosCount');?>
</th>
                                    <th class="th-4 text-center"><?php echo __('date');?>
</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CWunschliste_arr']->value, 'CWunschliste');
$_smarty_tpl->tpl_vars['CWunschliste']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['CWunschliste']->value) {
$_smarty_tpl->tpl_vars['CWunschliste']->do_else = false;
?>
                                <tr>
                                    <td>
                                        <?php if ($_smarty_tpl->tpl_vars['CWunschliste']->value->nOeffentlich == 1) {?>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['shopURL']->value;?>
/index.php?wlid=<?php echo $_smarty_tpl->tpl_vars['CWunschliste']->value->cURLID;?>
" rel="external"><?php echo $_smarty_tpl->tpl_vars['CWunschliste']->value->cName;?>
</a>
                                        <?php } else { ?>
                                            <span><?php echo $_smarty_tpl->tpl_vars['CWunschliste']->value->cName;?>
</span>
                                        <?php }?>
                                    </td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['CWunschliste']->value->cVorname;?>
 <?php echo $_smarty_tpl->tpl_vars['CWunschliste']->value->cNachname;?>
</td>
                                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['CWunschliste']->value->Anzahl;?>
</td>
                                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['CWunschliste']->value->Datum;?>
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
            <div id="wunschlisteartikel" class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'wunschlisteartikel') {?> active show<?php }?>">
                <?php if ((isset($_smarty_tpl->tpl_vars['CWunschlistePos_arr']->value)) && count($_smarty_tpl->tpl_vars['CWunschlistePos_arr']->value) > 0) {?>
                    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['oPagiArtikel']->value,'cAnchor'=>'wunschlisteartikel'), 0, true);
?>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="text-left"><?php echo __('wishlistPosName');?>
</th>
                                    <th class="th-2 text-center"><?php echo __('wishlistPosCount');?>
</th>
                                    <th class="th-3 text-center"><?php echo __('wishlistLastAdded');?>
</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CWunschlistePos_arr']->value, 'CWunschlistePos');
$_smarty_tpl->tpl_vars['CWunschlistePos']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['CWunschlistePos']->value) {
$_smarty_tpl->tpl_vars['CWunschlistePos']->do_else = false;
?>
                                <tr>
                                    <td>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['shopURL']->value;?>
/index.php?a=<?php echo $_smarty_tpl->tpl_vars['CWunschlistePos']->value->kArtikel;?>
&" rel="external"><?php echo $_smarty_tpl->tpl_vars['CWunschlistePos']->value->cArtikelName;?>
</a>
                                    </td>
                                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['CWunschlistePos']->value->Anzahl;?>
</td>
                                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['CWunschlistePos']->value->Datum;?>
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
            <div id="wunschlistefreunde" class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'wunschlistefreunde') {?> active show<?php }?>">
                <?php if ($_smarty_tpl->tpl_vars['CWunschlisteVersand_arr']->value && count($_smarty_tpl->tpl_vars['CWunschlisteVersand_arr']->value) > 0) {?>
                    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['oPagiFreunde']->value,'cAnchor'=>'wunschlistefreunde'), 0, true);
?>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="text-left"><?php echo __('wishlistName');?>
</th>
                                    <th class="text-left"><?php echo __('customer');?>
</th>
                                    <th class="th-3 text-center"><?php echo __('wishlistRecipientCount');?>
</th>
                                    <th class="th-4 text-center"><?php echo __('wishlistPosCount');?>
</th>
                                    <th class="th-5 text-center"><?php echo __('date');?>
</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CWunschlisteVersand_arr']->value, 'CWunschlisteVersand');
$_smarty_tpl->tpl_vars['CWunschlisteVersand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['CWunschlisteVersand']->value) {
$_smarty_tpl->tpl_vars['CWunschlisteVersand']->do_else = false;
?>
                                <tr>
                                    <td>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['shopURL']->value;?>
/index.php?wlid=<?php echo $_smarty_tpl->tpl_vars['CWunschlisteVersand']->value->cURLID;?>
" rel="external"><?php echo $_smarty_tpl->tpl_vars['CWunschlisteVersand']->value->cName;?>
</a>
                                    </td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['CWunschlisteVersand']->value->cVorname;?>
 <?php echo $_smarty_tpl->tpl_vars['CWunschlisteVersand']->value->cNachname;?>
</td>
                                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['CWunschlisteVersand']->value->nAnzahlEmpfaenger;?>
</td>
                                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['CWunschlisteVersand']->value->nAnzahlArtikel;?>
</td>
                                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['CWunschlisteVersand']->value->Datum;?>
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
                <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/config_section.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('config'=>$_smarty_tpl->tpl_vars['oConfig_arr']->value,'name'=>'einstellen','action'=>'wunschliste.php','buttonCaption'=>__('saveWithIcon'),'title'=>__('settings'),'tab'=>'einstellungen'), 0, false);
?>
            </div>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
