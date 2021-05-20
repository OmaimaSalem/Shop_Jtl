<?php
/* Smarty version 3.1.38, created on 2021-05-18 13:23:06
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\admin\templates\bootstrap\tpl_inc\widget_container.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a3a39a5d9760_79674115',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '074cd1343fde2901e693b768e0c08a68968d547b' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\admin\\templates\\bootstrap\\tpl_inc\\widget_container.tpl',
      1 => 1612177964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a3a39a5d9760_79674115 (Smarty_Internal_Template $_smarty_tpl) {
?><ul id="<?php echo $_smarty_tpl->tpl_vars['eContainer']->value;?>
" class="dashboard-col  col-12 col-xl-6 col-xxl-4 sortable">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oActiveWidget_arr']->value, 'oWidget');
$_smarty_tpl->tpl_vars['oWidget']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oWidget']->value) {
$_smarty_tpl->tpl_vars['oWidget']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['oWidget']->value->eContainer === $_smarty_tpl->tpl_vars['eContainer']->value) {?>
            <li id="widget-<?php echo $_smarty_tpl->tpl_vars['oWidget']->value->cClass;?>
" class="widget sortitem card mb-4" ref="<?php echo $_smarty_tpl->tpl_vars['oWidget']->value->kWidget;?>
">
                <div class="widget-head card-header">
                    <span class="widget-title"><?php echo $_smarty_tpl->tpl_vars['oWidget']->value->cTitle;?>
</span>
                    <span class="options"></span>
                    <hr class="mb-n3">
                </div>
                <div class="widget-content<?php if ($_smarty_tpl->tpl_vars['oWidget']->value->hasBody === true) {?> card-body<?php }
if (!$_smarty_tpl->tpl_vars['oWidget']->value->bExpanded) {?> widget-hidden<?php }?>">
                    <?php echo $_smarty_tpl->tpl_vars['oWidget']->value->cContent;?>

                </div>
            </li>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php }
}
