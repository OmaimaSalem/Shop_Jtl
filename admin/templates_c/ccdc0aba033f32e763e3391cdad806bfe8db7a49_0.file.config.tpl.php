<?php
/* Smarty version 3.1.38, created on 2021-05-20 10:07:07
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\admin\opc\tpl\modals\config.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a618ab0fe205_44597943',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ccdc0aba033f32e763e3391cdad806bfe8db7a49' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\admin\\opc\\tpl\\modals\\config.tpl',
      1 => 1612177965,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a618ab0fe205_44597943 (Smarty_Internal_Template $_smarty_tpl) {
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
