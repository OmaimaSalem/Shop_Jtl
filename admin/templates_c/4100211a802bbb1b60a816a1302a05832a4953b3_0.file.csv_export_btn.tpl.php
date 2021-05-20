<?php
/* Smarty version 3.1.38, created on 2021-05-20 15:30:14
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\admin\templates\bootstrap\tpl_inc\csv_export_btn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a66466410362_50464803',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4100211a802bbb1b60a816a1302a05832a4953b3' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\admin\\templates\\bootstrap\\tpl_inc\\csv_export_btn.tpl',
      1 => 1612177964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a66466410362_50464803 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
    function onClickCsvExport_<?php echo $_smarty_tpl->tpl_vars['exporterId']->value;?>
 ()
    {
        window.location = window.location.pathname + '?exportcsv=<?php echo $_smarty_tpl->tpl_vars['exporterId']->value;?>
&token=<?php echo $_SESSION['jtl_token'];?>
';
    }
<?php echo '</script'; ?>
>
<button type="button" class="btn btn-outline-primary btn-block" onclick="onClickCsvExport_<?php echo $_smarty_tpl->tpl_vars['exporterId']->value;?>
()">
    <i class="fa fa-download"></i> <?php echo __('exportCsv');?>

</button><?php }
}
