<?php
/* Smarty version 3.1.38, created on 2021-05-07 09:11:50
  from 'C:\xampp\htdocs\shop\admin\opc\tpl\modals\restore_unsaved.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6094e836ec1456_18541038',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '426f183b49d67c9b49abac7e1e1b40d39c58e283' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\admin\\opc\\tpl\\modals\\restore_unsaved.tpl',
      1 => 1612177965,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6094e836ec1456_18541038 (Smarty_Internal_Template $_smarty_tpl) {
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
