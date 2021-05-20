<?php
/* Smarty version 3.1.38, created on 2021-05-04 11:53:37
  from 'C:\xampp\htdocs\shop\admin\templates\bootstrap\tpl_inc\widget_selector.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_609119a1b0b770_45760432',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3739f4764c9ab872b8ef4b9cd7f74c47d8634e7f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\admin\\templates\\bootstrap\\tpl_inc\\widget_selector.tpl',
      1 => 1612177964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609119a1b0b770_45760432 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oAvailableWidget_arr']->value, 'oAvailableWidget', true);
$_smarty_tpl->tpl_vars['oAvailableWidget']->iteration = 0;
$_smarty_tpl->tpl_vars['oAvailableWidget']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oAvailableWidget']->value) {
$_smarty_tpl->tpl_vars['oAvailableWidget']->do_else = false;
$_smarty_tpl->tpl_vars['oAvailableWidget']->iteration++;
$_smarty_tpl->tpl_vars['oAvailableWidget']->last = $_smarty_tpl->tpl_vars['oAvailableWidget']->iteration === $_smarty_tpl->tpl_vars['oAvailableWidget']->total;
$__foreach_oAvailableWidget_11_saved = $_smarty_tpl->tpl_vars['oAvailableWidget'];
?>
    <a href="#" class="dropdown-item" data-widget-add="1" onclick="addWidget(<?php echo $_smarty_tpl->tpl_vars['oAvailableWidget']->value->kWidget;?>
)">
        <div class="row no-gutters">
            <div class="col col-1"><span href="#" class="fal fa-plus text-primary"></span></div>
            <div class="col col-11 font-weight-bold"><?php echo $_smarty_tpl->tpl_vars['oAvailableWidget']->value->cTitle;?>
</div>
            <div class="col col-1"></div>
            <div class="col col-11"><?php echo $_smarty_tpl->tpl_vars['oAvailableWidget']->value->cDescription;?>
</div>
        </div>
    </a>
    <?php if (!$_smarty_tpl->tpl_vars['oAvailableWidget']->last) {?>
        <div class="dropdown-divider"></div>
    <?php }
$_smarty_tpl->tpl_vars['oAvailableWidget'] = $__foreach_oAvailableWidget_11_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if (count($_smarty_tpl->tpl_vars['oAvailableWidget_arr']->value) == 0) {?>
    <span class="ml-3 font-weight-bold"><?php echo __('noMoreWidgets');?>
</span>
<?php }
}
}
