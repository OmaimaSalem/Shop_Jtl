<?php
/* Smarty version 3.1.38, created on 2021-05-04 11:53:35
  from 'C:\xampp\htdocs\shop\admin\templates\bootstrap\tpl_inc\widgets\shopinfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6091199f22d171_65566697',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '456a9739963ce6c2f1f641b00fff40363e5db790' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\admin\\templates\\bootstrap\\tpl_inc\\widgets\\shopinfo.tpl',
      1 => 1612177964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6091199f22d171_65566697 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="widget-custom-data">
    <table class="table table-condensed table-hover table-blank">
        <tbody>
        <tr>
            <td width="50%"><?php echo __('shopVersion');?>
</td>
            <td width="50%" id="current_shop_version"><?php echo $_smarty_tpl->tpl_vars['strFileVersion']->value;?>
 <?php if (!empty($_smarty_tpl->tpl_vars['strMinorVersion']->value)) {?>(Build: <?php echo $_smarty_tpl->tpl_vars['strMinorVersion']->value;?>
)<?php }?></td>
        </tr>
        <tr>
            <td width="50%"><?php echo __('templateVersion');?>
</td>
            <td width="50%" id="current_tpl_version"><?php echo $_smarty_tpl->tpl_vars['strTplVersion']->value;?>
</td>
        </tr>
        <tr>
            <td width="50%"><?php echo __('dbVersion');?>
</td>
            <td width="50%"><?php echo $_smarty_tpl->tpl_vars['strDBVersion']->value;?>
</td>
        </tr>
        <tr>
            <td width="50%"><?php echo __('dbLastUpdate');?>
</td>
            <td width="50%"><?php echo $_smarty_tpl->tpl_vars['strUpdated']->value;?>
</td>
        </tr>
        </tbody>
    </table>
    <div id="version_data_wrapper">
        <p class="text-center ajax_preloader update"><i class="fa fas fa-spinner fa-spin"></i> <?php echo __('loading');?>
</p>
    </div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function () {
        ioCall(
            'getShopInfo',
            ['widgets/shopinfo_version.tpl', 'version_data_wrapper'],
            undefined,
            undefined,
            undefined,
            true
        );
    });
<?php echo '</script'; ?>
>
<?php }
}
