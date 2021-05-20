<?php
/* Smarty version 3.1.38, created on 2021-05-20 15:31:09
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\admin\templates\bootstrap\tpl_inc\sprache_newvar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a6649d17ee47_26209598',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd025be496a6ee74562af16efeb09cd5da5cf99e6' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\admin\\templates\\bootstrap\\tpl_inc\\sprache_newvar.tpl',
      1 => 1612177964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/seite_header.tpl' => 1,
  ),
),false)) {
function content_60a6649d17ee47_26209598 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:tpl_inc/seite_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cTitel'=>__('lang'),'cBeschreibung'=>__('langDesc'),'cDokuURL'=>__('langURL')), 0, false);
?>
<div id="content">
    <div class="card settings">
        <div class="card-header">
            <div class="subheading1"><?php echo __('newLangVar');?>
</div>
            <hr class="mb-n3">
        </div>
        <form action="sprache.php" method="post">
            <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

            <input type="hidden" name="tab" value="<?php echo $_smarty_tpl->tpl_vars['tab']->value;?>
">
            <div class="card-body">
                <div class="form-group form-row align-items-center">
                    <label class="col col-sm-4 col-form-label text-sm-right" for="kSprachsektion"><?php echo __('langSection');?>
:</label>
                    <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                        <select class="custom-select" name="kSprachsektion" id="kSprachsektion">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oSektion_arr']->value, 'oSektion');
$_smarty_tpl->tpl_vars['oSektion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oSektion']->value) {
$_smarty_tpl->tpl_vars['oSektion']->do_else = false;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['oSektion']->value->kSprachsektion;?>
"
                                        <?php if ($_smarty_tpl->tpl_vars['oVariable']->value->kSprachsektion === (int)$_smarty_tpl->tpl_vars['oSektion']->value->kSprachsektion) {?>selected<?php }?>>
                                    <?php echo $_smarty_tpl->tpl_vars['oSektion']->value->cName;?>

                                </option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                </div>
                <div class="form-group form-row align-items-center">
                    <label class="col col-sm-4 col-form-label text-sm-right" for="cName"><?php echo __('variableName');?>
:</label>
                    <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                        <input type="text" class="form-control" name="cName" id="cName" value="<?php echo $_smarty_tpl->tpl_vars['oVariable']->value->cName;?>
">
                    </div>
                </div>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oSprache_arr']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                    <?php $_smarty_tpl->_assignInScope('langCode', $_smarty_tpl->tpl_vars['language']->value->getIso());?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['oVariable']->value->cWertAlt_arr[$_smarty_tpl->tpl_vars['langCode']->value]))) {?>
                        <div class="form-group form-row align-items-center">
                            <label class="col col-sm-4 col-form-label text-sm-right" for="bOverwrite_<?php echo $_smarty_tpl->tpl_vars['langCode']->value;?>
_yes">
                                <input type="radio" id="bOverwrite_<?php echo $_smarty_tpl->tpl_vars['langCode']->value;?>
_yes"
                                       name="bOverwrite_arr[<?php echo $_smarty_tpl->tpl_vars['langCode']->value;?>
]" value="1">
                                <?php echo $_smarty_tpl->tpl_vars['language']->value->getLocalizedName();?>
 (<?php echo __('new');?>
):
                            </label>
                            <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                                <input type="text" class="form-control" name="cWert_arr[<?php echo $_smarty_tpl->tpl_vars['langCode']->value;?>
]"
                                       id="cWert_<?php echo $_smarty_tpl->tpl_vars['langCode']->value;?>
" value="<?php if (!empty($_smarty_tpl->tpl_vars['oVariable']->value->cWert_arr[$_smarty_tpl->tpl_vars['langCode']->value])) {
echo $_smarty_tpl->tpl_vars['oVariable']->value->cWert_arr[$_smarty_tpl->tpl_vars['langCode']->value];
}?>">
                            </div>
                        </div>
                        <div class="form-group form-row align-items-center">
                                <label class="col col-sm-4 col-form-label text-sm-right" for="bOverwrite_<?php echo $_smarty_tpl->tpl_vars['langCode']->value;?>
_no">
                                    <input type="radio" id="bOverwrite_<?php echo $_smarty_tpl->tpl_vars['langCode']->value;?>
_no"
                                           name="bOverwrite_arr[<?php echo $_smarty_tpl->tpl_vars['langCode']->value;?>
]" value="0" checked>
                                    <?php echo $_smarty_tpl->tpl_vars['language']->value->getLocalizedName();?>
 (<?php echo __('current');?>
):
                                </label>
                                <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                                <input type="text" class="form-control" name="cWertAlt_arr[<?php echo $_smarty_tpl->tpl_vars['langCode']->value;?>
]" disabled
                                       id="cWertAlt_<?php echo $_smarty_tpl->tpl_vars['langCode']->value;?>
"
                                       value="<?php if (!empty($_smarty_tpl->tpl_vars['oVariable']->value->cWertAlt_arr[$_smarty_tpl->tpl_vars['langCode']->value])) {
echo $_smarty_tpl->tpl_vars['oVariable']->value->cWertAlt_arr[$_smarty_tpl->tpl_vars['langCode']->value];
}?>">
                            </div>
                        </div>
                    <?php } else { ?>
                        <div class="form-group form-row align-items-center">
                                <label class="col col-sm-4 col-form-label text-sm-right" for="cWert_<?php echo $_smarty_tpl->tpl_vars['langCode']->value;?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['language']->value->getLocalizedName();?>
:
                                </label>
                            <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                                <input type="text" class="form-control" name="cWert_arr[<?php echo $_smarty_tpl->tpl_vars['langCode']->value;?>
]"
                                       id="cWert_<?php echo $_smarty_tpl->tpl_vars['langCode']->value;?>
" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['oVariable']->value->cWert_arr[$_smarty_tpl->tpl_vars['langCode']->value] ?? null)===null||$tmp==='' ? '' : $tmp);?>
">
                            </div>
                        </div>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            <div class="card-footer save-wrapper">
                <div class="row">
                    <div class="ml-auto col-sm-6 col-xl-auto">
                        <a href="sprache.php?tab=<?php echo $_smarty_tpl->tpl_vars['tab']->value;?>
" class="btn btn-outline-primary btn-block"><?php echo __('cancelWithIcon');?>
</a>
                    </div>
                    <div class="col-sm-6 col-xl-auto">
                        <button type="submit" class="btn btn-primary btn-block" name="action" value="savevar">
                            <i class="fa fa-save"></i>
                            <?php echo __('save');?>

                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php }
}
