<?php
/* Smarty version 3.1.38, created on 2021-05-07 10:22:00
  from 'C:\xampp\htdocs\shop\admin\opc\tpl\config\autoconfig-panel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6094f8a80e7d84_23314173',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8a6f5b2269adc0e279c6296849e17c6bb710e64' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\admin\\opc\\tpl\\config\\autoconfig-panel.tpl',
      1 => 1612177965,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./autoconfig-props.tpl' => 1,
  ),
),false)) {
function content_6094f8a80e7d84_23314173 (Smarty_Internal_Template $_smarty_tpl) {
?><ul class="nav nav-tabs">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabs']->value, 'tab', false, 'tabname');
$_smarty_tpl->tpl_vars['tab']->index = -1;
$_smarty_tpl->tpl_vars['tab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tabname']->value => $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->do_else = false;
$_smarty_tpl->tpl_vars['tab']->index++;
$__foreach_tab_0_saved = $_smarty_tpl->tpl_vars['tab'];
?>
        <?php $_smarty_tpl->_assignInScope('tabId', ('conftab').($_smarty_tpl->tpl_vars['tab']->index));?>

        <li class="nav-item">
            <a href="#<?php echo $_smarty_tpl->tpl_vars['tabId']->value;?>
" data-toggle="tab" class="nav-link <?php if ($_smarty_tpl->tpl_vars['tab']->index === 0) {?>active<?php }?>">
                <?php echo $_smarty_tpl->tpl_vars['tabname']->value;?>

            </a>
        </li>
    <?php
$_smarty_tpl->tpl_vars['tab'] = $__foreach_tab_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

<div class="tab-content">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabs']->value, 'tab', false, 'tabname');
$_smarty_tpl->tpl_vars['tab']->index = -1;
$_smarty_tpl->tpl_vars['tab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tabname']->value => $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->do_else = false;
$_smarty_tpl->tpl_vars['tab']->index++;
$__foreach_tab_1_saved = $_smarty_tpl->tpl_vars['tab'];
?>
        <?php $_smarty_tpl->_assignInScope('tabId', ('conftab').($_smarty_tpl->tpl_vars['tab']->index));?>

        <div class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['tab']->index === 0) {?>show active<?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['tabId']->value;?>
">
            <div class="row">
                <?php $_smarty_tpl->_assignInScope('rowWidthAccu', 0);?>
                <?php $_smarty_tpl->_subTemplateRender('file:./autoconfig-props.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('props'=>$_smarty_tpl->tpl_vars['tab']->value), 0, true);
?>
            </div>
        </div>
    <?php
$_smarty_tpl->tpl_vars['tab'] = $__foreach_tab_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div><?php }
}
