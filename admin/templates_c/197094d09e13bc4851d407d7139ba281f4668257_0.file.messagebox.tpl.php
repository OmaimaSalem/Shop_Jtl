<?php
/* Smarty version 3.1.38, created on 2021-05-07 09:11:51
  from 'C:\xampp\htdocs\shop\admin\opc\tpl\modals\messagebox.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6094e837060786_31890316',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '197094d09e13bc4851d407d7139ba281f4668257' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\admin\\opc\\tpl\\modals\\messagebox.tpl',
      1 => 1612177965,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6094e837060786_31890316 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" tabindex="-1" id="messageboxModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
            </div>
            <div class="modal-body">
                <div class="alert alert-info" id="messageboxAlert"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="opc-btn-primary opc-small-btn" data-dismiss="modal">
                    <?php echo __('OK');?>

                </button>
            </div>
        </div>
    </div>
</div>
<?php }
}
