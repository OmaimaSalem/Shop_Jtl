<?php
/* Smarty version 3.1.38, created on 2021-05-04 11:53:34
  from 'C:\xampp\htdocs\shop\admin\templates\bootstrap\tpl_inc\widgets\patch.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6091199edb6bd4_25843649',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '968798f3ffec090a3e02bcdc6b541acd46b81fca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\admin\\templates\\bootstrap\\tpl_inc\\widgets\\patch.tpl',
      1 => 1612177964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6091199edb6bd4_25843649 (Smarty_Internal_Template $_smarty_tpl) {
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
