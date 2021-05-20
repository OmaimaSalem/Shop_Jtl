<?php
/* Smarty version 3.1.38, created on 2021-05-20 10:07:06
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\admin\opc\tpl\modals\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a618aae96211_32219839',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dfc0252bd744f24c75aba60b8abf2e9178014cd3' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\admin\\opc\\tpl\\modals\\error.tpl',
      1 => 1612177965,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a618aae96211_32219839 (Smarty_Internal_Template $_smarty_tpl) {
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
