<?php
/* Smarty version 3.1.38, created on 2021-05-04 12:21:42
  from 'C:\xampp\htdocs\shop\admin\templates\bootstrap\tpl_inc\news_uebersicht.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60912036a51460_51072747',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6db971b74fd3b09f55dbd6551204e5c15b72395d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\admin\\templates\\bootstrap\\tpl_inc\\news_uebersicht.tpl',
      1 => 1612177964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/seite_header.tpl' => 1,
    'file:tpl_inc/pagination.tpl' => 3,
    'file:tpl_inc/newscategories_recursive.tpl' => 1,
  ),
),false)) {
function content_60912036a51460_51072747 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templateBaseURL']->value;?>
js/sorttable.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $(window).on('load', function(){
        $('#submitDelete').on('click', function(){
            $('#' + $(this).data('name') + ' input[data-id="loeschen"]').trigger('click');
        });

        $('#kategorien button[data-target=".delete-modal"]').on('click', function(){
            $('.modal-title').html('<?php echo __('newsDeleteCat');?>
');
            $('#submitDelete').data('name', 'kategorien');

            var itemsToDelete = '';
            $('input[name="kNewsKategorie[]"]:checked').each(function(i){
                itemsToDelete += '<li class="list-group-item list-group-item-warning">' + $(this).data('name') + '</li>';
            });
            $('.delete-modal .modal-body').html('<ul class="list-group">' + itemsToDelete + '</ul>');
        });
        $('#aktiv button[data-target=".delete-modal"]').on('click', function(){
            $('.modal-title').html('<?php echo __('newsDeleteNews');?>
');
            $('#submitDelete').data('name', 'aktiv');
        });
        $('#inaktiv button[data-target=".delete-modal"]').on('click', function(){
            $('.modal-title').html('<?php echo __('newsDeleteComment');?>
');
            $('#submitDelete').data('name', 'inaktiv');
        });

        $('#category-list i.nav-toggle').on('click', function(event) {
            event.stopPropagation();
            var tr = $(this).closest('tr');
            var td = $(this).parent();
            var currentLevel = parseInt(tr.data('level')),
                state = td.hasClass('hide-toggle-on'),
                nextEl = tr.next(),
                nextLevel = parseInt(nextEl.data('level'));
            while (currentLevel < nextLevel) {
                nextEl.toggle(state);
                nextEl = nextEl.next();
                nextLevel = parseInt(nextEl.data('level'));
            }
            td.toggleClass('hide-toggle-on');
            td.find('i.fa').toggleClass('fa-caret-right fa-caret-down');
        });
    });
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/seite_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cTitel'=>__('news'),'cBeschreibung'=>__('newsDesc'),'cDokuURL'=>__('newsURL')), 0, false);
?>
<div id="content">
    <div class="tabs">
        <nav class="tabs-nav">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['cTab']->value === '' || $_smarty_tpl->tpl_vars['cTab']->value === 'inaktiv') {?> active<?php }?>" data-toggle="tab" role="tab" href="#inaktiv">
                        <?php echo __('newsCommentActivate');?>

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'aktiv') {?> active<?php }?>" data-toggle="tab" role="tab" href="#aktiv">
                        <?php echo __('newsOverview');?>

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'kategorien') {?> active<?php }?>" data-toggle="tab" role="tab" href="#kategorien">
                        <?php echo __('newsCatOverview');?>

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
            <div id="inaktiv" class="tab-pane fade<?php if ($_smarty_tpl->tpl_vars['cTab']->value === '' || $_smarty_tpl->tpl_vars['cTab']->value === 'inaktiv') {?> active show<?php }?>">
                <?php if ($_smarty_tpl->tpl_vars['comments']->value && count($_smarty_tpl->tpl_vars['comments']->value) > 0) {?>
                    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['oPagiKommentar']->value,'cAnchor'=>'inaktiv'), 0, false);
?>
                    <form method="post" action="news.php">
                        <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                        <input type="hidden" name="news" value="1" />
                        <input type="hidden" name="newskommentar_freischalten" value="1" />
                        <input type="hidden" name="nd" value="1" />
                        <input type="hidden" name="tab" value="inaktiv" />
                        <div>
                            <div class="subheading1"><?php echo __('newsCommentActivate');?>
</div>
                            <hr class="mb-3">
                            <div class="table-responsive">
                                <table class="list table table-striped">
                                    <thead>
                                    <tr>
                                        <th class="check">&nbsp;</th>
                                        <th class="text-left"><?php echo __('visitors');?>
</th>
                                        <th class="text-left"><?php echo __('headline');?>
</th>
                                        <th class="text-left"><?php echo __('text');?>
</th>
                                        <th class="th-5 text-center"><?php echo __('newsDate');?>
</th>
                                        <th class="th-6 text-center" style="min-width: 140px;"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comments']->value, 'comment');
$_smarty_tpl->tpl_vars['comment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->do_else = false;
?>
                                        <tr>
                                            <td class="check">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" name="kNewsKommentar[]" value="<?php echo $_smarty_tpl->tpl_vars['comment']->value->getID();?>
" id="comment-<?php echo $_smarty_tpl->tpl_vars['comment']->value->getID();?>
" />
                                                    <label class="custom-control-label" for="comment-<?php echo $_smarty_tpl->tpl_vars['comment']->value->getID();?>
"></label>
                                                </div>
                                            </td>
                                            <td class="TD2">
                                                <label for="comment-<?php echo $_smarty_tpl->tpl_vars['comment']->value->getID();?>
">
                                                                                                                                                                                                        <?php echo $_smarty_tpl->tpl_vars['comment']->value->getName();?>

                                                                                                </label>
                                            </td>
                                            <td class="TD3"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value->getNewsTitle(),50,'...' ));?>
</td>
                                            <td class="TD4"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value->getText(),150,'...' ));?>
</td>
                                            <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['comment']->value->getDateCreatedCompat();?>
</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="news.php?news=1&kNews=<?php echo $_smarty_tpl->tpl_vars['comment']->value->getNewsID();?>
&kNewsKommentar=<?php echo $_smarty_tpl->tpl_vars['comment']->value->getID();?>
&nkedit=1&tab=inaktiv&token=<?php echo $_SESSION['jtl_token'];?>
"
                                                       class="btn btn-link px-2"
                                                       title="<?php echo __('modify');?>
"
                                                       data-toggle="tooltip">
                                                        <span class="icon-hover">
                                                            <span class="fal fa-edit"></span>
                                                            <span class="fas fa-edit"></span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer save-wrapper">
                                <div class="row">
                                    <div class="col-sm-6 col-xl-auto text-left">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" name="ALLMSGS" id="ALLMSGS1" type="checkbox" onclick="AllMessages(this.form);" />
                                            <label class="custom-control-label" for="ALLMSGS1"><?php echo __('globalSelectAll');?>
</label>
                                        </div>
                                    </div>
                                    <div class="ml-auto col-sm-6 col-xl-auto">
                                        <input name="kommentareloeschenSubmit" type="submit" data-id="loeschen" value="<?php echo __('delete');?>
" class="hidden-soft">
                                        <button name="kommentareloeschenSubmit" type="button" data-toggle="modal" data-target=".delete-modal" value="<?php echo __('delete');?>
" class="btn btn-danger btn-block"><i class="fas fa-trash-alt"></i> <?php echo __('delete');?>
</button>
                                    </div>
                                    <div class="col-sm-6 col-xl-auto">
                                        <button name="freischalten" type="submit" value="<?php echo __('newsActivate');?>
" class="btn btn-primary btn-block"><i class="fa fa-thumbs-up"></i> <?php echo __('newsActivate');?>
</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                <?php } else { ?>
                    <div class="alert alert-info" role="alert"><?php echo __('noDataAvailable');?>
</div>
                <?php }?>
            </div>
            <div id="aktiv" class="tab-pane fade<?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'aktiv') {?> active show<?php }?>">
                <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['oPagiNews']->value,'cAnchor'=>'aktiv'), 0, true);
?>
                <form name="news" method="post" action="news.php">
                    <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                    <input type="hidden" name="news" value="1" />
                    <input type="hidden" name="news_loeschen" value="1" />
                    <input type="hidden" name="tab" value="aktiv" />
                    <div>
                        <div class="subheading1"><?php echo __('newsOverview');?>
</div>
                        <hr class="mb-3">
                        <div class="table-responsive">
                            <table class="sortable list table table-striped">
                                <thead>
                                <tr>
                                    <th class="check"></th>
                                    <th class="text-left"><?php echo __('headline');?>
</th>
                                    <th class="text-left"><?php echo __('customerGroup');?>
</th>
                                    <th class="text-center"><?php echo __('newsValidation');?>
</th>
                                    <th class="text-center"><?php echo __('active');?>
</th>
                                    <th class="text-center"><?php echo __('newsComments');?>
</th>
                                    <th class="text-center"><?php echo __('newsCatLastUpdate');?>
</th>
                                    <th class="text-center" style="min-width: 100px;"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php if (count($_smarty_tpl->tpl_vars['oNews_arr']->value) > 0 && $_smarty_tpl->tpl_vars['oNews_arr']->value) {?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oNews_arr']->value, 'oNews');
$_smarty_tpl->tpl_vars['oNews']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oNews']->value) {
$_smarty_tpl->tpl_vars['oNews']->do_else = false;
?>
                                        <tr>
                                            <td class="check">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" name="kNews[]" value="<?php echo $_smarty_tpl->tpl_vars['oNews']->value->getID();?>
" id="news-cb-<?php echo $_smarty_tpl->tpl_vars['oNews']->value->getID();?>
" />
                                                    <label class="custom-control-label" for="news-cb-<?php echo $_smarty_tpl->tpl_vars['oNews']->value->getID();?>
"></label>
                                                </div>
                                            </td>
                                            <td class="TD2"><label for="news-cb-<?php echo $_smarty_tpl->tpl_vars['oNews']->value->getID();?>
"><?php echo $_smarty_tpl->tpl_vars['oNews']->value->getTitle();?>
</label></td>
                                            <td class="TD4">
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oNews']->value->getCustomerGroups(), 'customerGroupID', true);
$_smarty_tpl->tpl_vars['customerGroupID']->iteration = 0;
$_smarty_tpl->tpl_vars['customerGroupID']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['customerGroupID']->value) {
$_smarty_tpl->tpl_vars['customerGroupID']->do_else = false;
$_smarty_tpl->tpl_vars['customerGroupID']->iteration++;
$_smarty_tpl->tpl_vars['customerGroupID']->last = $_smarty_tpl->tpl_vars['customerGroupID']->iteration === $_smarty_tpl->tpl_vars['customerGroupID']->total;
$__foreach_customerGroupID_2_saved = $_smarty_tpl->tpl_vars['customerGroupID'];
?>
                                                    <?php if ($_smarty_tpl->tpl_vars['customerGroupID']->value === -1) {
echo __('all');
} else {
echo Kundengruppe::getNameByID($_smarty_tpl->tpl_vars['customerGroupID']->value);
}
if (!$_smarty_tpl->tpl_vars['customerGroupID']->last) {?>,<?php }?>
                                                <?php
$_smarty_tpl->tpl_vars['customerGroupID'] = $__foreach_customerGroupID_2_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </td>
                                            <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['oNews']->value->getDateValidFromLocalizedCompat();?>
</td>
                                            <td class="text-center">
                                                <i class="fal fa-<?php if ($_smarty_tpl->tpl_vars['oNews']->value->getIsActive()) {?>check text-success<?php } else { ?>times text-danger<?php }?>"></i>
                                            </td>
                                            <td class="text-center">
                                                <?php if ($_smarty_tpl->tpl_vars['oNews']->value->getCommentCount() > 0) {?>
                                                    <a href="news.php?news=1&nd=1&kNews=<?php echo $_smarty_tpl->tpl_vars['oNews']->value->getID();?>
&tab=aktiv&token=<?php echo $_SESSION['jtl_token'];?>
"><?php echo $_smarty_tpl->tpl_vars['oNews']->value->getCommentCount();?>
</a>
                                                <?php } else { ?>
                                                    <?php echo $_smarty_tpl->tpl_vars['oNews']->value->getCommentCount();?>

                                                <?php }?>
                                            </td>
                                            <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['oNews']->value->getDateCompat();?>
</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="news.php?news=1&nd=1&kNews=<?php echo $_smarty_tpl->tpl_vars['oNews']->value->getID();?>
&tab=aktiv&token=<?php echo $_SESSION['jtl_token'];?>
"
                                                       class="btn btn-link px-2"
                                                       title="<?php echo __('preview');?>
"
                                                       data-toggle="tooltip">
                                                        <span class="icon-hover">
                                                            <span class="fal fa-eye"></span>
                                                            <span class="fas fa-eye"></span>
                                                        </span>
                                                    </a>
                                                    <a href="news.php?news=1&news_editieren=1&kNews=<?php echo $_smarty_tpl->tpl_vars['oNews']->value->getID();?>
&tab=aktiv&token=<?php echo $_SESSION['jtl_token'];?>
"
                                                       class="btn btn-link px-2"
                                                       title="<?php echo __('modify');?>
"
                                                       data-toggle="tooltip">
                                                        <span class="icon-hover">
                                                            <span class="fal fa-edit"></span>
                                                            <span class="fas fa-edit"></span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php } else { ?>
                                    <tr>
                                        <td colspan="9">
                                            <div class="alert alert-info" role="alert"><?php echo __('noDataAvailable');?>
</div>
                                        </td>
                                    </tr>
                                <?php }?>
                                </tbody>
                            </table>
                        </div>
                        <input type="hidden" name="news" value="1" />
                        <input type="hidden" name="erstellen" value="1" />
                        <input type="hidden" name="tab" value="aktiv" />
                        <div class="card-footer save-wrapper">
                            <div class="row">
                                <div class="col-sm-6 col-xl-auto text-left">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" name="ALLMSGS" id="ALLMSGS2" type="checkbox" onclick="AllMessages(this.form);" />
                                        <label class="custom-control-label" for="ALLMSGS2"><?php echo __('globalSelectAll');?>
</label>
                                    </div>
                                </div>
                                <div class="ml-auto col-sm-6 col-xl-auto">
                                    <input name="loeschen" type="submit" data-id="loeschen" value="<?php echo __('delete');?>
" class="hidden-soft">
                                    <button name="loeschen" type="button" data-toggle="modal" data-target=".delete-modal" value="<?php echo __('delete');?>
" class="btn btn-danger btn-block"><i class="fas fa-trash-alt"></i> <?php echo __('delete');?>
</button>
                                </div>
                                <div class="col-sm-6 col-xl-auto">
                                    <button name="news_erstellen" type="submit" value="<?php echo __('newAdd');?>
" class="btn btn-primary btn-block"><i class="fa fa-share"></i> <?php echo __('newAdd');?>
</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="container2">
                    <form name="erstellen" method="post" action="news.php">
                        <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                    </form>
                </div>
            </div>
            <!-- #inaktiv -->
            <div id="kategorien" class="tab-pane fade<?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'kategorien') {?> active show<?php }?>">
                <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['oPagiKats']->value,'cAnchor'=>'kategorien'), 0, true);
?>
                <form name="news" method="post" action="news.php">
                    <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                    <input type="hidden" name="news" value="1" />
                    <input type="hidden" name="news_kategorie_loeschen" value="1" />
                    <input type="hidden" name="tab" value="kategorien" />
                    <div>
                        <div class="subheading1"><?php echo __('newsCatOverview');?>
</div>
                        <hr class="mb-3">
                        <div class="table-responsive">
                            <table id="category-list" class="list table table-striped">
                                <thead>
                                <tr>
                                    <th class="check"></th>
                                    <th class="text-left"><?php echo __('name');?>
</th>
                                    <th class=" text-center"><?php echo __('sorting');?>
</th>
                                    <th class="th-4 text-center"><?php echo __('active');?>
</th>
                                    <th class="th-5 text-center"><?php echo __('newsCatLastUpdate');?>
</th>
                                    <th class="th-5 text-center">&nbsp;</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php if (count($_smarty_tpl->tpl_vars['oNewsKategorie_arr']->value)) {?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oNewsKategorie_arr']->value, 'oNewsKategorie');
$_smarty_tpl->tpl_vars['oNewsKategorie']->iteration = 0;
$_smarty_tpl->tpl_vars['oNewsKategorie']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oNewsKategorie']->value) {
$_smarty_tpl->tpl_vars['oNewsKategorie']->do_else = false;
$_smarty_tpl->tpl_vars['oNewsKategorie']->iteration++;
$__foreach_oNewsKategorie_3_saved = $_smarty_tpl->tpl_vars['oNewsKategorie'];
?>
                                        <tr scope="row" class="tab_bg<?php echo $_smarty_tpl->tpl_vars['oNewsKategorie']->iteration%2;
if ($_smarty_tpl->tpl_vars['oNewsKategorie']->value->getLevel() > 1) {?> hidden-soft<?php }?>" data-level="<?php echo $_smarty_tpl->tpl_vars['oNewsKategorie']->value->getLevel();?>
">
                                            <th class="check">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" name="kNewsKategorie[]" data-name="<?php echo $_smarty_tpl->tpl_vars['oNewsKategorie']->value->getName();?>
" value="<?php echo $_smarty_tpl->tpl_vars['oNewsKategorie']->value->getID();?>
" id="newscat-<?php echo $_smarty_tpl->tpl_vars['oNewsKategorie']->value->getID();?>
" />
                                                    <label class="custom-control-label" for="newscat-<?php echo $_smarty_tpl->tpl_vars['oNewsKategorie']->value->getID();?>
"></label>
                                                </div>
                                            </th>
                                            <td class="TD2<?php if ($_smarty_tpl->tpl_vars['oNewsKategorie']->value->getLevel() === 1) {?> hide-toggle-on<?php }?>" data-name="category">
                                                <i class="fa fa-caret-right nav-toggle<?php if ($_smarty_tpl->tpl_vars['oNewsKategorie']->value->getChildren()->count() === 0) {?> hidden<?php }?> cursor-pointer"></i>
                                                <label for="newscat-<?php echo $_smarty_tpl->tpl_vars['oNewsKategorie']->value->getID();?>
"><?php echo (($tmp = $_smarty_tpl->tpl_vars['oNewsKategorie']->value->getName() ?? null)===null||$tmp==='' ? '???' : $tmp);?>
</label>
                                            </td>
                                            <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['oNewsKategorie']->value->getSort();?>
</td>
                                            <td class="text-center">
                                                <i class="fal fa-<?php if ($_smarty_tpl->tpl_vars['oNewsKategorie']->value->getIsActive()) {?>check text-success<?php } else { ?>times text-danger<?php }?>"></i>
                                            </td>
                                            <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['oNewsKategorie']->value->getDateLastModified()->format('d.m.Y H:i');?>
</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="news.php?news=1&newskategorie_editieren=1&kNewsKategorie=<?php echo $_smarty_tpl->tpl_vars['oNewsKategorie']->value->getID();?>
&tab=kategorien&token=<?php echo $_SESSION['jtl_token'];?>
"
                                                       class="btn btn-link px-2"
                                                       title="<?php echo __('modify');?>
"
                                                       data-toggle="tooltip">
                                                        <span class="icon-hover">
                                                            <span class="fal fa-edit"></span>
                                                            <span class="fas fa-edit"></span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/newscategories_recursive.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('children'=>$_smarty_tpl->tpl_vars['oNewsKategorie']->value->getChildren(),'level'=>$_smarty_tpl->tpl_vars['oNewsKategorie']->value->getLevel()), 0, true);
?>
                                    <?php
$_smarty_tpl->tpl_vars['oNewsKategorie'] = $__foreach_oNewsKategorie_3_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php } else { ?>
                                    <tr>
                                        <td colspan="6">
                                            <div class="alert alert-info" role="alert"><?php echo __('noDataAvailable');?>
</div>
                                        </td>
                                    </tr>
                                <?php }?>
                                </tbody>
                            </table>
                        </div>
                        <input type="hidden" name="news" value="1" />
                        <input type="hidden" name="erstellen" value="1" />
                        <input type="hidden" name="tab" value="kategorien" />
                        <div class="card-footer save-wrapper">
                            <div class="row">
                                <div class="col-sm-6 col-xl-auto text-left">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" name="ALLMSGS" id="ALLMSGS3" type="checkbox" onclick="AllMessages(this.form);" />
                                        <label class="custom-control-label" for="ALLMSGS3"><?php echo __('globalSelectAll');?>
</label>
                                    </div>
                                </div>
                                <div class="ml-auto col-sm-6 col-xl-auto">
                                    <input name="loeschen" type="submit" data-id="loeschen" value="<?php echo __('delete');?>
" class="hidden-soft">
                                    <button name="loeschen" type="button" data-toggle="modal" data-target=".delete-modal" value="<?php echo __('delete');?>
" class="btn btn-danger btn-block">
                                        <i class="fas fa-trash-alt"></i> <?php echo __('delete');?>

                                    </button>
                                </div>
                                <div class="col-sm-6 col-xl-auto">
                                    <button name="news_kategorie_erstellen" type="submit" value="<?php echo __('newsCatCreate');?>
" class="btn btn-primary btn-block">
                                        <i class="fa fa-share"></i> <?php echo __('newsCatCreate');?>

                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div id="einstellungen" class="tab-pane fade<?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'einstellungen') {?> active show<?php }?>">
                <form name="einstellen" method="post" action="news.php">
                    <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                    <input type="hidden" name="einstellungen" value="1" />
                    <input type="hidden" name="tab" value="einstellungen" />
                    <input type="hidden" name="news" value="1" />

                    <div class="settings">
                        <div class="subheading1">
                            <?php echo __('settings');?>

                            <hr class="mb-3">
                        </div>
                        <div>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oConfig_arr']->value, 'oConfig');
$_smarty_tpl->tpl_vars['oConfig']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oConfig']->value) {
$_smarty_tpl->tpl_vars['oConfig']->do_else = false;
?>
                                <?php if ($_smarty_tpl->tpl_vars['oConfig']->value->cConf === 'Y') {?>
                                    <div class="form-group form-row align-items-center mb-5 mb-md-3">
                                        <label class="col col-sm-4 col-form-label text-sm-right" for="<?php echo $_smarty_tpl->tpl_vars['oConfig']->value->cWertName;?>
"><?php echo $_smarty_tpl->tpl_vars['oConfig']->value->cName;?>
:</label>
                                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                                            <?php if ($_smarty_tpl->tpl_vars['oConfig']->value->cInputTyp === 'selectbox') {?>
                                                <select name="<?php echo $_smarty_tpl->tpl_vars['oConfig']->value->cWertName;?>
" id="<?php echo $_smarty_tpl->tpl_vars['oConfig']->value->cWertName;?>
" class="custom-select combo">
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oConfig']->value->ConfWerte, 'wert');
$_smarty_tpl->tpl_vars['wert']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['wert']->value) {
$_smarty_tpl->tpl_vars['wert']->do_else = false;
?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['wert']->value->cWert;?>
" <?php if ($_smarty_tpl->tpl_vars['oConfig']->value->gesetzterWert == $_smarty_tpl->tpl_vars['wert']->value->cWert) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['wert']->value->cName;?>
</option>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </select>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['oConfig']->value->cInputTyp === 'listbox') {?>
                                                <select name="<?php echo $_smarty_tpl->tpl_vars['oConfig']->value->cWertName;?>
[]"
                                                        id="<?php echo $_smarty_tpl->tpl_vars['oConfig']->value->cWertName;?>
"
                                                        multiple="multiple"
                                                        class="selectpicker custom-select"
                                                        data-selected-text-format="count > 2"
                                                        data-size="7"
                                                        data-actions-box="true">
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oConfig']->value->ConfWerte, 'wert');
$_smarty_tpl->tpl_vars['wert']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['wert']->value) {
$_smarty_tpl->tpl_vars['wert']->do_else = false;
?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['wert']->value->kKundengruppe;?>
" <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oConfig']->value->gesetzterWert, 'gesetzterWert');
$_smarty_tpl->tpl_vars['gesetzterWert']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gesetzterWert']->value) {
$_smarty_tpl->tpl_vars['gesetzterWert']->do_else = false;
if ($_smarty_tpl->tpl_vars['gesetzterWert']->value->cWert == $_smarty_tpl->tpl_vars['wert']->value->kKundengruppe) {?>selected<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>><?php echo $_smarty_tpl->tpl_vars['wert']->value->cName;?>
</option>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </select>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['oConfig']->value->cInputTyp === 'number') {?>
                                                <div class="input-group form-counter">
                                                    <div class="input-group-prepend">
                                                        <button type="button" class="btn btn-outline-secondary border-0" data-count-down>
                                                            <span class="fas fa-minus"></span>
                                                        </button>
                                                    </div>
                                                    <input class="form-control" type="number" name="<?php echo $_smarty_tpl->tpl_vars['oConfig']->value->cWertName;?>
" id="<?php echo $_smarty_tpl->tpl_vars['oConfig']->value->cWertName;?>
" value="<?php if ((isset($_smarty_tpl->tpl_vars['oConfig']->value->gesetzterWert))) {
echo $_smarty_tpl->tpl_vars['oConfig']->value->gesetzterWert;
}?>" tabindex="1" />
                                                    <div class="input-group-append">
                                                        <button type="button" class="btn btn-outline-secondary border-0" data-count-up>
                                                            <span class="fas fa-plus"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            <?php } else { ?>
                                                <input class="form-control" type="text" name="<?php echo $_smarty_tpl->tpl_vars['oConfig']->value->cWertName;?>
" id="<?php echo $_smarty_tpl->tpl_vars['oConfig']->value->cWertName;?>
" value="<?php if ((isset($_smarty_tpl->tpl_vars['oConfig']->value->gesetzterWert))) {
echo $_smarty_tpl->tpl_vars['oConfig']->value->gesetzterWert;
}?>" tabindex="1" />
                                            <?php }?>
                                        </div>
                                        <?php if ($_smarty_tpl->tpl_vars['oConfig']->value->cBeschreibung) {?>
                                            <div class="col-auto ml-sm-n4 order-2 order-sm-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHelpDesc'][0], array( array('cDesc'=>$_smarty_tpl->tpl_vars['oConfig']->value->cBeschreibung,'cID'=>$_smarty_tpl->tpl_vars['oConfig']->value->kEinstellungenConf),$_smarty_tpl ) );?>
</div>
                                        <?php }?>
                                    </div>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oNewsMonatsPraefix_arr']->value, 'oNewsMonatsPraefix');
$_smarty_tpl->tpl_vars['oNewsMonatsPraefix']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oNewsMonatsPraefix']->value) {
$_smarty_tpl->tpl_vars['oNewsMonatsPraefix']->do_else = false;
?>
                                <div class="form-group form-row align-items-center mb-5 mb-md-3">
                                    <label class="col col-sm-4 col-form-label text-sm-right" for="praefix_<?php echo $_smarty_tpl->tpl_vars['oNewsMonatsPraefix']->value->cISOSprache;?>
"><?php echo __('newsPraefix');?>
 (<?php echo $_smarty_tpl->tpl_vars['oNewsMonatsPraefix']->value->name;?>
)</label>
                                    <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                                        <input type="text" class="form-control" id="praefix_<?php echo $_smarty_tpl->tpl_vars['oNewsMonatsPraefix']->value->cISOSprache;?>
" name="praefix_<?php echo $_smarty_tpl->tpl_vars['oNewsMonatsPraefix']->value->cISOSprache;?>
" value="<?php echo $_smarty_tpl->tpl_vars['oNewsMonatsPraefix']->value->cPraefix;?>
" tabindex="1" />
                                    </div>
                                </div>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                        <div class="card-footer save-wrapper">
                            <div class="row">
                                <div class="ml-auto col-sm-6 col-xl-auto">
                                    <button type="submit" value="<?php echo __('save');?>
" class="btn btn-primary btn-block">
                                        <?php echo __('saveWithIcon');?>

                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal delete-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title"><?php echo __('deleteComment');?>
</h2>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <p><?php echo __('wantToConfirm');?>
</p>
                <div class="row">
                    <div class="ml-auto col-sm-6 col-xl-auto">
                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">
                            <?php echo __('cancelWithIcon');?>

                        </button>
                    </div>
                    <div class="col-sm-6 col-xl-auto">
                        <button type="button" id="submitDelete" data-name="" class="btn btn-danger"><?php echo __('delete');?>
</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
}
