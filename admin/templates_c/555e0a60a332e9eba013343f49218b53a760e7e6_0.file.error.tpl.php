<?php
/* Smarty version 3.1.38, created on 2021-05-07 09:11:50
  from 'C:\xampp\htdocs\shop\admin\opc\tpl\modals\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6094e836ac01f9_69278712',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '555e0a60a332e9eba013343f49218b53a760e7e6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\admin\\opc\\tpl\\modals\\error.tpl',
      1 => 1612177965,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6094e836ac01f9_69278712 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="errorModal" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="errorTitle"><?php echo __('error');?>
</h5>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger" id="errorAlert">
                    <?php echo __('somethingHappend');?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php }
}
