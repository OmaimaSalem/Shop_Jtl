<?php
/* Smarty version 3.1.38, created on 2021-05-07 09:11:50
  from 'C:\xampp\htdocs\shop\admin\opc\tpl\modals\blueprint_delete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6094e836d1b440_41590870',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d19b68370364d0bfdf601d466574105974e95cc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\admin\\opc\\tpl\\modals\\blueprint_delete.tpl',
      1 => 1612177965,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6094e836d1b440_41590870 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="blueprintDeleteModal" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?php echo __('Delete Blueprint?');?>
</h5>
            </div>
            <div class="modal-body">
                <p>"<span id="blueprintDeleteTitle">FOO</span>"</p>
                <p><?php echo __('templateDeleteSure');?>
</p>
            </div>
            <form onsubmit="opc.gui.deleteBlueprint()">
                <div class="modal-footer">
                    <input type="hidden" id="blueprintDeleteId" name="id" value="">
                    <button type="button" class="opc-btn-secondary opc-small-btn" data-dismiss="modal">
                        <?php echo __('cancel');?>

                    </button>
                    <button type="submit" class="opc-btn-primary opc-small-btn">
                        <?php echo __('delete');?>

                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php }
}
