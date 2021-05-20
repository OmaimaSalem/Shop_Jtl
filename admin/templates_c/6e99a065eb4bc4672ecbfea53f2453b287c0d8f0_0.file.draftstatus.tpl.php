<?php
/* Smarty version 3.1.38, created on 2021-05-07 09:11:50
  from 'C:\xampp\htdocs\shop\admin\opc\tpl\draftstatus.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6094e8367fe6d0_60913338',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e99a065eb4bc4672ecbfea53f2453b287c0d8f0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\admin\\opc\\tpl\\draftstatus.tpl',
      1 => 1612177965,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6094e8367fe6d0_60913338 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\shop\\includes\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_assignInScope('draftStatus', $_smarty_tpl->tpl_vars['page']->value->getStatus(0));
if ($_smarty_tpl->tpl_vars['draftStatus']->value === 0) {?>
    <?php if ($_smarty_tpl->tpl_vars['page']->value->getPublishTo() === null) {?>
        <span class="opc-public"><?php echo __('activeSince');?>
</span>
        <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['page']->value->getPublishFrom(),'%d.%m.%Y - %H:%M');?>

    <?php } else { ?>
        <span class="opc-public"><?php echo __('activeUntil');?>
</span>
        <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['page']->value->getPublishTo(),'%d.%m.%Y - %H:%M');?>

    <?php }
} elseif ($_smarty_tpl->tpl_vars['draftStatus']->value === 1) {?>
    <span class="opc-planned"><?php echo __('scheduledFor');?>
</span>
    <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['page']->value->getPublishFrom(),'%d.%m.%Y - %H:%M');?>

<?php } elseif ($_smarty_tpl->tpl_vars['draftStatus']->value === 2) {?>
    <span class="opc-status-draft"><?php echo __('notScheduled');?>
</span>
<?php } elseif ($_smarty_tpl->tpl_vars['draftStatus']->value === 3) {?>
    <span class="opc-backdate"><?php echo __('expiredOn');?>
</span>
    <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['page']->value->getPublishTo(),'%d.%m.%Y - %H:%M');?>

<?php }
}
}
