<?php
/* Smarty version 3.1.38, created on 2021-05-20 10:07:07
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\admin\opc\tpl\tutorials.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a618ab691155_70672722',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc4746505a8a69983cdc71c51684d9d8abc64e7d' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\admin\\opc\\tpl\\tutorials.tpl',
      1 => 1612177965,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a618ab691155_70672722 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="tutorials">
    <div id="tutBackdrop"></div>
    <div id="tutBackdrop2"></div>
    <div id="tutBackdrop3"></div>
    <div id="tutBox">
        <div id="tutboxHeader" class="modal-header">
            <h5 id="tutboxTitle">Hello</h5>
            <button type="button" class="opc-header-btn" onclick="opc.tutorial.stopTutorial()">
                <i class="fa fas fa-times"></i>
            </button>
        </div>
        <div id="tutboxContent">Text</div>
        <div id="tutboxFooter">
            <button type="button" id="tutboxNext" class="opc-btn-primary opc-mini-btn opc-float-right"
                    onclick="opc.tutorial.goNextStep()">
                <span id="tutboxNextLabel">
                    <?php echo __('Next');?>

                    <i class="fas fa-chevron-right"></i>
                </span>
                <span id="tutboxDoneLabel" style="display: none">
                    <i class="fas fa-check"></i>
                    <?php echo __('Done');?>

                </span>
            </button>
            <button type="button" id="tutboxPrev" class="opc-btn-secondary opc-mini-btn opc-float-right"
                    onclick="opc.tutorial.goPrevStep()">
                <i class="fas fa-chevron-left"></i>
                <?php echo __('Back');?>

            </button>
        </div>
    </div>
</div><?php }
}
