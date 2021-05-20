<?php
/* Smarty version 3.1.38, created on 2021-05-19 14:54:13
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\admin\templates\bootstrap\tpl_inc\shoptemplate_overview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a50a75572e69_49923830',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41686bbbb964a28189f9870016ddfec11697affc' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\admin\\templates\\bootstrap\\tpl_inc\\shoptemplate_overview.tpl',
      1 => 1612177964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/shoptemplate_listing_item.tpl' => 1,
  ),
),false)) {
function content_60a50a75572e69_49923830 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="shoptemplate-overview">
    <div class="alerts">
        <div class="alert alert-danger" id="alert-upload-error" style="display:none"></div>
        <div class="alert alert-success" id="alert-upload-success" style="display:none"></div>
    </div>
    <div class="card">
        <div class="table-responsive card-body">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th></th>
                    <th><?php echo __('Name');?>
</th>
                    <th class="text-center"><?php echo __('status');?>
</th>
                    <th class="text-center"><?php echo __('version');?>
</th>
                    <th class="text-center"><?php echo __('shopversion');?>
</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listingItems']->value, 'listingItem');
$_smarty_tpl->tpl_vars['listingItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['listingItem']->value) {
$_smarty_tpl->tpl_vars['listingItem']->do_else = false;
?>
                    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/shoptemplate_listing_item.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
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
