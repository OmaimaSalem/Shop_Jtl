<?php
/* Smarty version 3.1.38, created on 2021-05-20 15:28:47
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\admin\templates\bootstrap\tpl_inc\versandarten_uebersicht.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a6640f1bce79_40100441',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bde26ea222c6b97b50984e4d20af7f4e085454d3' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\admin\\templates\\bootstrap\\tpl_inc\\versandarten_uebersicht.tpl',
      1 => 1612177964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/seite_header.tpl' => 1,
  ),
),false)) {
function content_60a6640f1bce79_40100441 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
    
    function confirmDelete(cName) {
        return confirm('<?php echo __('deleteShippingMethod');?>
"' + cName + '"?');
    }
    
<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/seite_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cTitel'=>__('shippingmethods'),'cBeschreibung'=>__('isleListsHint'),'cDokuURL'=>__('shippingmethodsURL')), 0, false);
?>

<div id="content">
    <div class="dropdown mb-4">
        <button class="btn btn-primary" type="button" id="versandart" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="fal fa-plus mr-2"></span><?php echo __('createShippingMethod');?>

        </button>
        <div class="dropdown-menu" aria-labelledby="versandart">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['versandberechnungen']->value, 'versandberechnung');
$_smarty_tpl->tpl_vars['versandberechnung']->index = -1;
$_smarty_tpl->tpl_vars['versandberechnung']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['versandberechnung']->value) {
$_smarty_tpl->tpl_vars['versandberechnung']->do_else = false;
$_smarty_tpl->tpl_vars['versandberechnung']->index++;
$__foreach_versandberechnung_0_saved = $_smarty_tpl->tpl_vars['versandberechnung'];
?>
                <a class="dropdown-item">
                    <form name="versandart_neu" method="post" action="versandarten.php">
                        <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                        <input type="hidden" name="neu" value="1" />
                        <input type="hidden" id="l<?php echo $_smarty_tpl->tpl_vars['versandberechnung']->index;?>
" name="kVersandberechnung" value="<?php echo $_smarty_tpl->tpl_vars['versandberechnung']->value->kVersandberechnung;?>
" <?php if ($_smarty_tpl->tpl_vars['versandberechnung']->index == 0) {?>checked="checked"<?php }?> />
                        <button type="submit" class="btn btn-link p-0"><?php echo $_smarty_tpl->tpl_vars['versandberechnung']->value->cName;?>
</button>
                    </form>
                </a>
            <?php
$_smarty_tpl->tpl_vars['versandberechnung'] = $__foreach_versandberechnung_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <table class="table table-responsive table-align-top">
                <thead>
                    <tr>
                        <th><?php echo __('shippingTypeName');?>
</th>
                        <th><?php echo __('shippingclasses');?>
</th>
                        <th><?php echo __('customerclass');?>
</th>
                        <th class="min-w"><?php echo __('paymentMethods');?>
</th>
                        <th class="text-center min-w"><?php echo __('shippingPrice');?>
</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['versandarten']->value, 'versandart');
$_smarty_tpl->tpl_vars['versandart']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['versandart']->value) {
$_smarty_tpl->tpl_vars['versandart']->do_else = false;
?>
                    <tr>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['versandart']->value->cName;?>

                            <hr class="my-1">
                            <span class="d-block shipping-method-country">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['versandart']->value->countries, 'country', true);
$_smarty_tpl->tpl_vars['country']->iteration = 0;
$_smarty_tpl->tpl_vars['country']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->do_else = false;
$_smarty_tpl->tpl_vars['country']->iteration++;
$_smarty_tpl->tpl_vars['country']->last = $_smarty_tpl->tpl_vars['country']->iteration === $_smarty_tpl->tpl_vars['country']->total;
$__foreach_country_2_saved = $_smarty_tpl->tpl_vars['country'];
?>
                                    <?php if ($_smarty_tpl->tpl_vars['country']->iteration == 20) {?>
                                        <span class="collapse" aria-expanded="false" id="show-all-countries-<?php echo $_smarty_tpl->tpl_vars['versandart']->value->kVersandart;?>
">
                                        <?php $_smarty_tpl->_assignInScope('collapse', 1);?>
                                    <?php }?>
                                    <a href="versandarten.php?zuschlag=1&kVersandart=<?php echo $_smarty_tpl->tpl_vars['versandart']->value->kVersandart;?>
&cISO=<?php echo $_smarty_tpl->tpl_vars['country']->value->getISO();?>
&token=<?php echo $_SESSION['jtl_token'];?>
"data-toggle="tooltip"title="<?php echo __('isleListsDesc');?>
"><span class="small"><?php if (in_array($_smarty_tpl->tpl_vars['country']->value->getISO(),$_smarty_tpl->tpl_vars['versandart']->value->shippingSurchargeCountries)) {?><u><?php echo $_smarty_tpl->tpl_vars['country']->value->getName();?>
*</u><?php } else {
echo $_smarty_tpl->tpl_vars['country']->value->getName();
}?></span></a><?php if (!$_smarty_tpl->tpl_vars['country']->last) {?>,<?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['country']->iteration > 20 && $_smarty_tpl->tpl_vars['country']->last) {?>
                                        </span>
                                        <button class="btn btn-link float-right" data-toggle="collapse" data-target="#show-all-countries-<?php echo $_smarty_tpl->tpl_vars['versandart']->value->kVersandart;?>
">
                                            <?php echo __('showAll');?>
 <span class="far fa-chevron-down"></span>
                                        </button>
                                    <?php }?>
                                <?php
$_smarty_tpl->tpl_vars['country'] = $__foreach_country_2_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </span>
                        </td>
                        <td>
                            <ul class="list-unstyled">
                            <?php if (count($_smarty_tpl->tpl_vars['versandart']->value->versandklassen) == 1 && $_smarty_tpl->tpl_vars['versandart']->value->versandklassen[0] === 'Alle') {?>
                                <li><span class="badge badge-primary text-wrap"><?php echo __('all');?>
</span></li>
                            <?php } else { ?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['versandart']->value->versandklassen, 'versandklasse');
$_smarty_tpl->tpl_vars['versandklasse']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['versandklasse']->value) {
$_smarty_tpl->tpl_vars['versandklasse']->do_else = false;
?>
                                    <li><span class="badge badge-primary text-wrap"><?php echo $_smarty_tpl->tpl_vars['versandklasse']->value;?>
</span></li>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }?>
                            </ul>
                        </td>
                        <td>
                            <ul class="list-unstyled">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['versandart']->value->cKundengruppenName_arr, 'cKundengruppenName');
$_smarty_tpl->tpl_vars['cKundengruppenName']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cKundengruppenName']->value) {
$_smarty_tpl->tpl_vars['cKundengruppenName']->do_else = false;
?>
                                <li class="mb-1"><?php echo $_smarty_tpl->tpl_vars['cKundengruppenName']->value;?>
</li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </ul>
                        </td>
                        <td>
                            <ul class="list-unstyled">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['versandart']->value->versandartzahlungsarten, 'zahlungsart');
$_smarty_tpl->tpl_vars['zahlungsart']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['zahlungsart']->value) {
$_smarty_tpl->tpl_vars['zahlungsart']->do_else = false;
?>
                                <li class="mb-1">
                                    <?php echo $_smarty_tpl->tpl_vars['zahlungsart']->value->zahlungsart->cName;?>

                                    <?php if ((isset($_smarty_tpl->tpl_vars['zahlungsart']->value->zahlungsart->cAnbieter)) && strlen($_smarty_tpl->tpl_vars['zahlungsart']->value->zahlungsart->cAnbieter) > 0) {?>
                                        (<?php echo $_smarty_tpl->tpl_vars['zahlungsart']->value->zahlungsart->cAnbieter;?>
)
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['zahlungsart']->value->fAufpreis != 0) {?>
                                        <?php if ($_smarty_tpl->tpl_vars['zahlungsart']->value->cAufpreisTyp != "%") {?>
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getCurrencyConversionSmarty'][0], array( array('fPreisBrutto'=>$_smarty_tpl->tpl_vars['zahlungsart']->value->fAufpreis,'bSteuer'=>false),$_smarty_tpl ) );?>

                                        <?php } else { ?>
                                            <?php echo $_smarty_tpl->tpl_vars['zahlungsart']->value->fAufpreis;?>
%
                                        <?php }?>
                                    <?php }?>
                                </li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </ul>
                        </td>
                        <td class="text-center">
                            <ul class="list-unstyled">
                            <?php if ($_smarty_tpl->tpl_vars['versandart']->value->versandberechnung->cModulId === 'vm_versandberechnung_gewicht_jtl' || $_smarty_tpl->tpl_vars['versandart']->value->versandberechnung->cModulId === 'vm_versandberechnung_warenwert_jtl' || $_smarty_tpl->tpl_vars['versandart']->value->versandberechnung->cModulId === 'vm_versandberechnung_artikelanzahl_jtl') {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['versandart']->value->versandartstaffeln, 'versandartstaffel');
$_smarty_tpl->tpl_vars['versandartstaffel']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['versandartstaffel']->value) {
$_smarty_tpl->tpl_vars['versandartstaffel']->do_else = false;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['versandartstaffel']->value->fBis != 999999999) {?>
                                        <li>
                                            <?php echo __('upTo');?>
 <?php echo $_smarty_tpl->tpl_vars['versandartstaffel']->value->fBis;?>
 <?php echo $_smarty_tpl->tpl_vars['versandart']->value->einheit;?>
 <?php echo $_smarty_tpl->tpl_vars['versandartstaffel']->value->fPreis;?>

                                            <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getCurrencyConversionSmarty'][0], array( array('fPreisBrutto'=>$_smarty_tpl->tpl_vars['versandartstaffel']->value->fPreis,'bSteuer'=>false),$_smarty_tpl ) );
$_prefixVariable1=ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHelpDesc'][0], array( array('cDesc'=>$_prefixVariable1),$_smarty_tpl ) );?>

                                        </li>
                                    <?php }?>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php } elseif ($_smarty_tpl->tpl_vars['versandart']->value->versandberechnung->cModulId === 'vm_versandkosten_pauschale_jtl') {?>
                                <li>
                                    <?php echo $_smarty_tpl->tpl_vars['versandart']->value->fPreis;?>

                                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getCurrencyConversionSmarty'][0], array( array('fPreisBrutto'=>$_smarty_tpl->tpl_vars['versandart']->value->fPreis,'bSteuer'=>false),$_smarty_tpl ) );
$_prefixVariable2=ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHelpDesc'][0], array( array('cDesc'=>$_prefixVariable2),$_smarty_tpl ) );?>

                                </li>
                            <?php }?>
                            </ul>
                        </td>
                        <td>
                            <form method="post" action="versandarten.php">
                                <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                                <div class="btn-group">
                                    <button name="del"
                                            value="<?php echo $_smarty_tpl->tpl_vars['versandart']->value->kVersandart;?>
"
                                            class="btn btn-link px-2"
                                            onclick="return confirmDelete('<?php echo $_smarty_tpl->tpl_vars['versandart']->value->cName;?>
');"
                                            title="<?php echo __('delete');?>
"
                                            data-toggle="tooltip">
                                        <span class="icon-hover">
                                            <span class="fal fa-trash-alt"></span>
                                            <span class="fas fa-trash-alt"></span>
                                        </span>
                                    </button>
                                    <button name="clone"
                                            value="<?php echo $_smarty_tpl->tpl_vars['versandart']->value->kVersandart;?>
"
                                            class="btn btn-link px-2"
                                            title="<?php echo __('duplicate');?>
"
                                            data-toggle="tooltip">
                                        <span class="icon-hover">
                                            <span class="fal fa-clone"></span>
                                            <span class="fas fa-clone"></span>
                                        </span>
                                    </button>
                                    <button name="edit"
                                            value="<?php echo $_smarty_tpl->tpl_vars['versandart']->value->kVersandart;?>
"
                                            class="btn btn-link px-2"
                                            title="<?php echo __('edit');?>
"
                                            data-toggle="tooltip">
                                        <span class="icon-hover">
                                            <span class="fal fa-edit"></span>
                                            <span class="fas fa-edit"></span>
                                        </span>
                                    </button>
                                </div>
                            </form>
                        </td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php }
}
