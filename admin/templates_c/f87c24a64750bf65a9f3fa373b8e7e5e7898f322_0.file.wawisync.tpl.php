<?php
/* Smarty version 3.1.38, created on 2021-05-19 14:12:54
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\admin\templates\bootstrap\wawisync.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a500c68bd0b2_30645481',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f87c24a64750bf65a9f3fa373b8e7e5e7898f322' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\admin\\templates\\bootstrap\\wawisync.tpl',
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
function content_60a500c68bd0b2_30645481 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:tpl_inc/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:tpl_inc/seite_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cTitel'=>__('wawisync'),'cBeschreibung'=>__('wawisyncDesc'),'cDokuURL'=>__('wawisyncURL')), 0, false);
?>
<div id="content">
    <form action="wawisync.php" method="post">
        <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

        <div class="card">
            <div class="card-header">
                <div class="subheading1"><?php echo __('username');?>
/<?php echo __('password');?>
 <?php echo __('change');?>
</div>
                <hr class="mb-n3">
            </div>
            <div class="card-body">
                <div class="form-group form-row align-items-center">
                    <label class="col col-sm-4 col-form-label text-sm-right" for="wawi-user"><?php echo __('user');?>
:</label>
                    <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                        <input id="wawi-user" name="wawi-user" class="form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['wawiuser']->value;?>
" />
                    </div>
                </div>
                <div class="form-group form-row align-items-center">
                    <label class="col col-sm-4 col-form-label text-sm-right" for="wawi-pass"><?php echo __('password');?>
:</label>
                    <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                        <input id="wawi-pass" name="wawi-pass" class="form-control" type="password" value="<?php echo $_smarty_tpl->tpl_vars['wawipass']->value;?>
" />
                    </div>
                </div>
            </div>
            <div class="card-footer save-wrapper">
                <div class="row">
                    <div class="ml-auto col-sm-6 col-xl-auto">
                        <button type="submit" class="btn btn-primary btn-block">
                            <?php echo __('saveWithIcon');?>

                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
