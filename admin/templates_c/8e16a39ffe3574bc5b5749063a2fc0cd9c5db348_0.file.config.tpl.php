<?php
/* Smarty version 3.1.38, created on 2021-05-07 09:11:50
  from 'C:\xampp\htdocs\shop\admin\opc\tpl\modals\config.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6094e836bbb5f0_87161894',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e16a39ffe3574bc5b5749063a2fc0cd9c5db348' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\admin\\opc\\tpl\\modals\\config.tpl',
      1 => 1612177965,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6094e836bbb5f0_87161894 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="configModal" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="configModalTitle">
                    <?php echo __('editPortletPrefix');?>

                    <span id="configPortletName"></span>
                    <?php echo __('editPortletPostfix');?>

                </h5>
                <button type="button" class="opc-header-btn" data-toggle="tooltip" data-dismiss="modal"
                        data-placement="bottom">
                    <i class="fa fas fa-times"></i>
                </button>
            </div>
            <form id="configForm" onsubmit="opc.gui.saveConfig()">
                <div class="modal-body" id="configModalBody"></div>
                <div class="modal-footer" id="stdConfigButtons">
                    <button type="button" class="opc-btn-secondary opc-small-btn" data-dismiss="modal">
                        <?php echo __('cancel');?>

                    </button>
                    <button type="submit" class="opc-btn-primary opc-small-btn" id="configSave">
                        <?php echo __('Save');?>

                    </button>
                </div>
                <div class="modal-footer" id="missingConfigButtons">
                    <button type="submit" class="opc-btn-primary opc-small-btn"  data-dismiss="modal">
                        <?php echo __('OK');?>

                    </button>
                </div>
            </form>
        </div>
    </div>
</div><?php }
}
