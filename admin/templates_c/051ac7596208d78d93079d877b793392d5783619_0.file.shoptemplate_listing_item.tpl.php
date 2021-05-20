<?php
/* Smarty version 3.1.38, created on 2021-05-04 14:18:18
  from 'C:\xampp\htdocs\shop\admin\templates\bootstrap\tpl_inc\shoptemplate_listing_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60913b8a4b5cc7_73493664',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '051ac7596208d78d93079d877b793392d5783619' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\admin\\templates\\bootstrap\\tpl_inc\\shoptemplate_listing_item.tpl',
      1 => 1612177964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60913b8a4b5cc7_73493664 (Smarty_Internal_Template $_smarty_tpl) {
?><tr>
    <td class="text-vcenter text-center" width="140">
        <div class="thumb-box thumb-sm">
            <div class="thumb" style="background-image:url(<?php if (strlen($_smarty_tpl->tpl_vars['listingItem']->value->getPreview()) > 0) {
echo $_smarty_tpl->tpl_vars['shopURL']->value;?>
/<?php echo (defined('PFAD_TEMPLATES') ? constant('PFAD_TEMPLATES') : null);
echo $_smarty_tpl->tpl_vars['listingItem']->value->getDir();?>
/<?php echo $_smarty_tpl->tpl_vars['listingItem']->value->getPreview();
} else {
echo $_smarty_tpl->tpl_vars['shopURL']->value;?>
/gfx/keinBild.gif<?php }?>)"></div>
        </div>
    </td>
    <td>
        <ul class="list-unstyled">
            <li>
                <h3 style="margin:0"><?php echo $_smarty_tpl->tpl_vars['listingItem']->value->getName();?>
</h3>
                <?php if (!empty($_smarty_tpl->tpl_vars['listingItem']->value->getDescription())) {?>
                    <div class="small"><?php echo $_smarty_tpl->tpl_vars['listingItem']->value->getDescription();?>
</div>
                <?php }?>
                <span class="badge badge-default">
                    <i class="far fa-folder" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['listingItem']->value->getDir();?>

                </span>
                <?php if ($_smarty_tpl->tpl_vars['listingItem']->value->isChild() === true) {?><span class="label label-info"><i class="fa fa-level-up" aria-hidden="true"></i> <abbr title="<?php ob_start();
echo __('inheritsFrom');
$_prefixVariable2 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['listingItem']->value->getParent();
$_prefixVariable3 = ob_get_clean();
echo sprintf($_prefixVariable2,$_prefixVariable3);?>
"><?php echo $_smarty_tpl->tpl_vars['listingItem']->value->getParent();?>
</abbr></span><?php }?>

                <?php if ((isset($_smarty_tpl->tpl_vars['oStoredTemplate_arr']->value[$_smarty_tpl->tpl_vars['listingItem']->value->getDir()]))) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oStoredTemplate_arr']->value[$_smarty_tpl->tpl_vars['listingItem']->value->getDir()], 'oStored');
$_smarty_tpl->tpl_vars['oStored']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oStored']->value) {
$_smarty_tpl->tpl_vars['oStored']->do_else = false;
?>
                        <span class="badge badge-warning"><i class="fal fa-info-circle" aria-hidden="true"></i> <abbr title="<?php echo __('originalExists');?>
 (<?php echo $_smarty_tpl->tpl_vars['oStored']->value->cVersion;?>
)"><?php echo $_smarty_tpl->tpl_vars['oStored']->value->cVersion;?>
</abbr></span>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
                <div class="font-size-sm">
                    <?php if (!empty($_smarty_tpl->tpl_vars['listingItem']->value->getURL())) {?><a href="<?php echo $_smarty_tpl->tpl_vars['listingItem']->value->getURL();?>
" rel="noopener" target="_blank"> <i class="fas fa-external-link"></i> <?php }?>
                        <?php echo $_smarty_tpl->tpl_vars['listingItem']->value->getAuthor();?>

                        <?php if (!empty($_smarty_tpl->tpl_vars['listingItem']->value->getURL())) {?></a><?php }?>
                </div>
            </li>
        </ul>
    </td>
    <td class="text-vcenter text-center">
        <?php if ($_smarty_tpl->tpl_vars['listingItem']->value->hasError() === true) {?>
            <h4 class="label-wrap">
                <span class="badge badge-danger"><?php echo __('faulty');?>
</span>
            </h4>
        <?php } elseif ($_smarty_tpl->tpl_vars['listingItem']->value->isActive()) {?>
            <h4 class="label-wrap">
                <span class="badge badge-success"><?php echo __('activated');?>
</span>
            </h4>
        <?php }?>
        <?php $_smarty_tpl->_assignInScope('check', $_smarty_tpl->tpl_vars['listingItem']->value->getChecksums());?>
        <?php if ($_smarty_tpl->tpl_vars['check']->value !== null) {?>
            <?php if ($_smarty_tpl->tpl_vars['check']->value === true) {?>
                <span class="badge badge-success"><?php echo __('unmodified');?>
</span>
            <?php } else { ?>
                <span class="badge badge-warning cursor-pointer" title="<?php echo __('tplChecksums');?>
"
                      data-toggle="modal" data-target="#tplModal<?php echo $_smarty_tpl->tpl_vars['listingItem']->value->getName();?>
"><?php echo __('modified');?>
</span>
                <div class="modal fade" id="tplModal<?php echo $_smarty_tpl->tpl_vars['listingItem']->value->getName();?>
" tabindex="-1" role="dialog"
                     aria-labelledby="tplModal<?php echo $_smarty_tpl->tpl_vars['listingItem']->value->getName();?>
Label" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="tplModal<?php echo $_smarty_tpl->tpl_vars['listingItem']->value->getName();?>
Label">
                                    <?php echo $_smarty_tpl->tpl_vars['listingItem']->value->getName();?>
 – <?php echo __('modifiedFiles');?>
 (<?php echo count($_smarty_tpl->tpl_vars['check']->value);?>
)
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="table-responsive table-">
                                    <table class="table table-sm table-borderless">
                                        <thead>
                                        <tr>
                                            <th class="text-left"><?php echo __('file');?>
</th>
                                            <th class="text-right"><?php echo __('lastModified');?>
</th>
                                        </tr>
                                        </thead>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['check']->value, 'file');
$_smarty_tpl->tpl_vars['file']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->do_else = false;
?>
                                            <tr>
                                                <td class="text-left"><?php echo $_smarty_tpl->tpl_vars['file']->value->name;?>
</td>
                                                <td class="text-right">
                                                    <small class="text-muted"><?php echo $_smarty_tpl->tpl_vars['file']->value->lastModified;?>
</small>
                                                </td>
                                            </tr>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer text-right">
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo __('close');?>
</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }?>
        <?php }?>
    </td>
    <td class="text-vcenter text-center">
        <?php echo $_smarty_tpl->tpl_vars['listingItem']->value->getVersion();?>

    </td>
    <td class="text-vcenter text-center">
        <?php echo $_smarty_tpl->tpl_vars['listingItem']->value->displayVersionRange();?>

    </td>
    <td class="text-vcenter text-center">
        <?php if ($_smarty_tpl->tpl_vars['listingItem']->value->hasError()) {?>
            <span class="error"><strong><?php echo __('error');?>
:</strong><br />
                <?php echo $_smarty_tpl->tpl_vars['listingItem']->value->getErrorMessage();?>

            </span>
        <?php } elseif ($_smarty_tpl->tpl_vars['listingItem']->value->isAvailable()) {?>
            <?php if ($_smarty_tpl->tpl_vars['listingItem']->value->getMinShopVersion()->greaterThan($_smarty_tpl->tpl_vars['shopVersion']->value)) {?>
                <span title="<?php echo __('dangerMinShopVersion');?>
" class="label text-danger" data-toggle="tooltip">
                    <span class="icon-hover">
                        <span class="fal fa-exclamation-triangle"></span>
                        <span class="fas fa-exclamation-triangle"></span>
                    </span>
                </span>
            <?php } elseif ($_smarty_tpl->tpl_vars['listingItem']->value->getMaxShopVersion()->greaterThan('0.0.0') && $_smarty_tpl->tpl_vars['listingItem']->value->getMaxShopVersion()->smallerThan($_smarty_tpl->tpl_vars['shopVersion']->value)) {?>
                <span title="<?php echo __('dangerMaxShopVersion');?>
" class="label text-danger" data-toggle="tooltip">
                    <span class="icon-hover">
                        <span class="fal fa-exclamation-triangle"></span>
                        <span class="fas fa-exclamation-triangle"></span>
                    </span>
                </span>
            <?php }?>
            <?php if (!$_smarty_tpl->tpl_vars['listingItem']->value->isActive()) {?>
                <a class="btn btn-primary" href="shoptemplate.php?action=switch&dir=<?php echo $_smarty_tpl->tpl_vars['listingItem']->value->getDir();
if ($_smarty_tpl->tpl_vars['listingItem']->value->getOptionsCount() > 0) {?>&config=1<?php }?>&token=<?php echo $_SESSION['jtl_token'];?>
"><i class="fal fa-share"></i> <?php echo __('activate');?>
</a>
            <?php } else { ?>
                <?php if ($_smarty_tpl->tpl_vars['listingItem']->value->getOptionsCount() > 0) {?>
                    <a class="btn btn-outline-primary" href="shoptemplate.php?action=config&dir=<?php echo $_smarty_tpl->tpl_vars['listingItem']->value->getDir();?>
&token=<?php echo $_SESSION['jtl_token'];?>
"><i class="fal fa-edit"></i> <?php echo __('settings');?>
</a>
                <?php }?>
            <?php }?>
        <?php }?>
    </td>
</tr>
<?php }
}
