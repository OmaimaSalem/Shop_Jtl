<?php
/* Smarty version 3.1.38, created on 2021-05-20 10:07:07
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\admin\opc\tpl\modals\blueprint_delete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a618ab327346_78243970',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b6dd2d7254bd4b523e0b167aac8a540cfa7b7d5' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\admin\\opc\\tpl\\modals\\blueprint_delete.tpl',
      1 => 1612177965,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a618ab327346_78243970 (Smarty_Internal_Template $_smarty_tpl) {
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
