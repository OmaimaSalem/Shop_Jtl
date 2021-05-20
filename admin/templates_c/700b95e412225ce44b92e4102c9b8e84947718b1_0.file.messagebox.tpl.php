<?php
/* Smarty version 3.1.38, created on 2021-05-20 10:07:07
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\admin\opc\tpl\modals\messagebox.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a618ab5ac476_23770923',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '700b95e412225ce44b92e4102c9b8e84947718b1' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\admin\\opc\\tpl\\modals\\messagebox.tpl',
      1 => 1612177965,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a618ab5ac476_23770923 (Smarty_Internal_Template $_smarty_tpl) {
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
