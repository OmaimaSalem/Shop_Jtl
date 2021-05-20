<?php
/* Smarty version 3.1.38, created on 2021-05-20 16:01:34
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\admin\templates\bootstrap\shopzuruecksetzen.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a66bbe90b541_55927607',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd360e767437ad99278e5df6ee76bf7f873985a74' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\admin\\templates\\bootstrap\\shopzuruecksetzen.tpl',
      1 => 1612177964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/header.tpl' => 1,
    'file:tpl_inc/seite_header.tpl' => 1,
    'file:tpl_inc/footer.tpl' => 1,
  ),
),false)) {
function content_60a66bbe90b541_55927607 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:tpl_inc/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:tpl_inc/seite_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cTitel'=>__('shopResetTitle'),'cBeschreibung'=>__('shopResetDesc'),'cDokuURL'=>__('shopResetURL')), 0, false);
?>

    <?php echo '<script'; ?>
>
        $(document).ready(function(){
            $('input[type="checkbox"]').on('change', function(){
                var itemsChecked = '';
                $('input[type="checkbox"]:checked').next().each(function(i){
                    itemsChecked += $(this).prev().val();
                });
                if (itemsChecked === 'artikel'
                    || itemsChecked === 'steuern'
                    || itemsChecked === 'artikelsteuern'
                    || itemsChecked === ''
                ) {
                    $('#warningZuruecksetzen, #messageDataGetsLost').addClass('d-none');
                    $('button[data-target=".zuruecksetzen-modal"]').prop('disabled', itemsChecked === '');
                    $('#backupDone').closest('div.checkbox').addClass('d-none');
                } else {
                    $('#warningZuruecksetzen, #messageDataGetsLost').removeClass('d-none');
                    $('#backupDone').closest('div.checkbox').removeClass('d-none');
                    $('button[data-target=".zuruecksetzen-modal"]').prop('disabled', !$("#backupDone").is(':checked'));
                }
            });
            $('#backupDone').on('change', function(){
                if (this.checked) {
                    $('button[data-target=".zuruecksetzen-modal"]').prop('disabled', false);
                } else {
                    $('button[data-target=".zuruecksetzen-modal"]').prop('disabled', true);
                }
            });
            $('#submitZuruecksetzen').on('click', function(){
                $('#formZuruecksetzen').submit();
            });
            $('button[data-target=".zuruecksetzen-modal"]').on('click', function(){
                var itemsToDelete = '';
                $('#shopzuruecksetzen-items input[type="checkbox"]:checked').next().each(function(i){
                    itemsToDelete += '<li class="list-group-item list-group-item-warning">' + $(this).text() + '</li>';
                });
                $('.zuruecksetzen-modal .modal-body').html('<ul class="list-group">' + itemsToDelete + '</ul>');
            });
        });
    <?php echo '</script'; ?>
>

<div id="warningZuruecksetzen" class="alert alert-warning d-none" >
    <h3><?php echo __('dangerStrong');?>
</h3>
    <p><?php echo __('warningDeleteNotRestoreableData');?>
</p>
</div>
<div id="content" class="container-fluid settings">
    <form id="formZuruecksetzen" name="login" method="post" action="shopzuruecksetzen.php">
        <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

        <input type="hidden" name="zuruecksetzen" value="1" />

        <div id="shopzuruecksetzen-items">
            <div class="card">
                <div class="card-header">
                    <div class="subheading1"><?php echo __('shopContent');?>
</div>
                    <hr class="mb-n3">
                </div>
                <div class="card-body">
                    <div class="item">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" name="cOption_arr[]" value="artikel" tabindex="3" id="Artikel" />
                            <label class="custom-control-label" for="Artikel"><?php echo __('deleteProductCategory');?>
</label>
                        </div>
                    </div>
                    <div class="item">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" name="cOption_arr[]" value="steuern"
                                   tabindex="3" id="Steuern">
                            <label class="custom-control-label" for="Steuern"><?php echo __('deleteTax');?>
</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" name="cOption_arr[]" value="news"
                                   tabindex="4" id="News">
                            <label class="custom-control-label" for="News"><?php echo __('deleteNews');?>
</label>
                        </div>
                    </div>
                    <div class="item">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" name="cOption_arr[]" value="bestseller" tabindex="5" id="Bestseller" />
                            <label class="custom-control-label" for="Bestseller"><?php echo __('deleteBestseller');?>
</label>
                        </div>
                    </div>
                    <div class="item">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" name="cOption_arr[]" value="besucherstatistiken" tabindex="6" id="Besucherstatistiken" />
                            <label class="custom-control-label" for="Besucherstatistiken"><?php echo __('deleteVisitorStatistics');?>
</label>
                        </div>
                    </div>
                    <div class="item">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" name="cOption_arr[]" value="preisverlaeufe" tabindex="8" id="Preisverlaufe" />
                            <label class="custom-control-label" for="Preisverlaufe"><?php echo __('deletePriceStatistics');?>
</label>
                        </div>
                    </div>
                    <div class="item">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" name="cOption_arr[]" value="verfuegbarkeitsbenachrichtigungen" tabindex="10" id="Verfugbarkeitsbenachrichtigungen" />
                            <label class="custom-control-label" for="Verfugbarkeitsbenachrichtigungen"><?php echo __('deleteAvailabilityNotifications');?>
</label>
                        </div>
                    </div>
                    <div class="item">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" name="cOption_arr[]" value="revisions" tabindex="11" id="Revisions" />
                            <label class="custom-control-label" for="Revisions"><?php echo __('deleteRevisions');?>
</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <div class="subheading1"><?php echo __('userGeneratedContent');?>
</div>
                    <hr class="mb-n3">
                </div>
                <div class="card-body">
                    <div class="item">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" name="cOption_arr[]" value="suchanfragen" tabindex="11" id="Suchanfragen" />
                            <label class="custom-control-label" for="Suchanfragen"><?php echo __('deleteSearch');?>
</label>
                        </div>
                    </div>
                    <div class="item">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" name="cOption_arr[]" value="bewertungen" tabindex="13" id="Bewertungen" />
                            <label class="custom-control-label" for="Bewertungen"><?php echo __('deleteRatings');?>
</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <div class="subheading1"><?php echo __('customersOrdersCoupons');?>
</div>
                    <hr class="mb-n3">
                </div>
                <div class="card-body">
                    <div class="item">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" name="cOption_arr[]" value="shopkunden" tabindex="14" id="Shopkunden" />
                            <label class="custom-control-label" for="Shopkunden"><?php echo __('deleteCustomers');?>
</label>
                        </div>
                    </div>
                    <div class="item">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" name="cOption_arr[]" value="bestellungen" tabindex="15" id="Bestellungen" />
                            <label class="custom-control-label" for="Bestellungen"><?php echo __('deleteOrders');?>
</label>
                        </div>
                    </div>
                    <div class="item">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" name="cOption_arr[]" value="kupons" tabindex="15" id="Kupons" />
                            <label class="custom-control-label" for="Kupons"><?php echo __('deleteCoupons');?>
</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="save-wrapper">
            <div class="row align-items-center">
                <div class="col-sm-6 col-xl-auto">
                    <div class="checkbox d-none">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="backupDone" type="checkbox" value="" />
                            <label class="custom-control-label" for="backupDone"><?php echo __('yesBackupDone');?>
</label>
                        </div>
                    </div>
                </div>
                <div class="ml-auto col-sm-6 col-xl-auto">
                    <button disabled="true" type="button" value="<?php echo __('shopResetButton');?>
" data-toggle="modal" data-target=".zuruecksetzen-modal" class="btn btn-danger btn-block">
                        <i class="fa fa-exclamation-triangle"></i> <?php echo __('shopResetButton');?>

                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
<div class="modal zuruecksetzen-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title"><?php echo __('followingWillBeDeleted');?>
</h2>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <p><?php echo __('sureContinue');?>
</p>
                <div class="row">
                    <div class="ml-auto col-sm-6 col-xl-auto mb-2">
                        <button type="button" class="btn btn-outline-primary btn-block" data-dismiss="modal"><?php echo __('cancelWithIcon');?>
</button>
                    </div>
                    <div class="col-sm-6 col-xl-auto">
                        <button type="button" id="submitZuruecksetzen" class="btn btn-danger btn-block"><?php echo __('shopResetButton');?>
</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
