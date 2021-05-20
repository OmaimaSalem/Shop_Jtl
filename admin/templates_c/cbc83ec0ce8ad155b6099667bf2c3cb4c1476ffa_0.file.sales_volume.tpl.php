<?php
/* Smarty version 3.1.38, created on 2021-05-04 11:53:33
  from 'C:\xampp\htdocs\shop\admin\templates\bootstrap\tpl_inc\widgets\sales_volume.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6091199dedb1e7_83273203',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbc83ec0ce8ad155b6099667bf2c3cb4c1476ffa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\admin\\templates\\bootstrap\\tpl_inc\\widgets\\sales_volume.tpl',
      1 => 1612177964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/linechart_inc.tpl' => 1,
  ),
),false)) {
function content_6091199dedb1e7_83273203 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="widget-custom-data">
    <div class="widget-custom-data">
        <?php if ($_smarty_tpl->tpl_vars['linechart']->value) {?>
            <?php ob_start();
echo __('sales');
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:tpl_inc/linechart_inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('linechart'=>$_smarty_tpl->tpl_vars['linechart']->value,'headline'=>'','id'=>'linechart_sales_volume','width'=>'100%','height'=>'320px','ylabel'=>$_prefixVariable2,'href'=>false,'ymin'=>0,'legend'=>false), 0, false);
?>
        <?php } else { ?>
            <div class="widget-container"><div class="alert alert-info"><?php echo __('noStatisticsThisMonth');?>
</div></div>
        <?php }?>
    </div>
</div>
<?php }
}
