<?php
/* Smarty version 3.1.38, created on 2021-05-20 10:07:07
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\admin\opc\tpl\modals\blueprint.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a618ab1d1069_94847693',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '107d672d0cb3f6f319b6d0ff12cacb50cc20016b' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\admin\\opc\\tpl\\modals\\blueprint.tpl',
      1 => 1612177965,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a618ab1d1069_94847693 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="blueprintModal" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?php echo __('Save this Portlet as a blueprint');?>
</h5>
            </div>
            <form onsubmit="opc.gui.createBlueprint()">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="blueprintName"><?php echo __('Blueprint name');?>
</label>
                        <input type="text" class="form-control" id="blueprintName" name="blueprintName"
                               value="Neue Vorlage">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="opc-btn-secondary opc-small-btn" data-dismiss="modal">
                        <?php echo __('cancel');?>

                    </button>
                    <button type="submit" class="opc-btn-primary opc-small-btn" id="btnBlueprintSave">
                        <?php echo __('Save');?>

                    </button>
                </div>
            </form>
        </div>
    </div>
</div><?php }
}
