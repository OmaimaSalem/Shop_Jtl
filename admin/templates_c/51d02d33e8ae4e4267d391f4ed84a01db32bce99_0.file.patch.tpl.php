<?php
/* Smarty version 3.1.38, created on 2021-05-18 13:22:53
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\admin\templates\bootstrap\tpl_inc\widgets\patch.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a3a38d99e226_89025497',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51d02d33e8ae4e4267d391f4ed84a01db32bce99' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\admin\\templates\\bootstrap\\tpl_inc\\widgets\\patch.tpl',
      1 => 1612177964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a3a38d99e226_89025497 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function () {
        ioCall(
            'getRemoteData',
            ['<?php echo (defined('JTLURL_GET_SHOPPATCH') ? constant('JTLURL_GET_SHOPPATCH') : null);?>
?vf=<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
',
                'oPatch_arr',
                'widgets/patch_data.tpl',
                'patch_data_wrapper'],
            undefined,
            undefined,
            undefined,
            true
        );
    });
<?php echo '</script'; ?>
>

<div class="widget-custom-data widget-patch">
    <div id="patch_data_wrapper">
        <p class="ajax_preloader"><?php echo __('loading');?>
</p>
    </div>
</div><?php }
}
