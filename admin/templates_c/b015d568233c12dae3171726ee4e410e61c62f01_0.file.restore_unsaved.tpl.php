<?php
/* Smarty version 3.1.38, created on 2021-05-20 10:07:07
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\admin\opc\tpl\modals\restore_unsaved.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a618ab4e53d5_90392330',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b015d568233c12dae3171726ee4e410e61c62f01' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\admin\\opc\\tpl\\modals\\restore_unsaved.tpl',
      1 => 1612177965,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a618ab4e53d5_90392330 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" tabindex="-1" id="restoreUnsavedModal" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?php echo __('restoreChanges');?>
</h5>
            </div>
            <div class="modal-body">
                <div class="alert alert-info" id="errorAlert">
                    <?php echo __('restoreUnsaved');?>

                </div>
            </div>
            <form onsubmit="opc.gui.restoreUnsaved()">
                <div class="modal-footer">
                    <button type="button" class="opc-btn-secondary opc-small-btn" data-dismiss="modal"
                            onclick="opc.gui.noRestoreUnsaved()">
                        <?php echo __('noCurrent');?>

                    </button>
                    <button type="submit" class="opc-btn-primary opc-small-btn">
                        <?php echo __('yesRestore');?>

                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php }
}
