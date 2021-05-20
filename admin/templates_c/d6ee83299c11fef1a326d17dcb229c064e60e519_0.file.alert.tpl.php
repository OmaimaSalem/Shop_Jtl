<?php
/* Smarty version 3.1.38, created on 2021-05-18 13:34:15
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\admin\templates\bootstrap\snippets\alert.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a3a637ec2e65_91912812',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6ee83299c11fef1a326d17dcb229c064e60e519' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\admin\\templates\\bootstrap\\snippets\\alert.tpl',
      1 => 1612177964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a3a637ec2e65_91912812 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['alert']->value->getCssType();?>
 align-items-center"
    data-fade-out="<?php echo $_smarty_tpl->tpl_vars['alert']->value->getFadeOut();?>
"
    data-key="<?php echo $_smarty_tpl->tpl_vars['alert']->value->getKey();?>
"
    <?php if ($_smarty_tpl->tpl_vars['alert']->value->getId()) {?>id="<?php echo $_smarty_tpl->tpl_vars['alert']->value->getId();?>
"<?php }?>
>
    <?php if ($_smarty_tpl->tpl_vars['alert']->value->getIcon() === 'danger' || $_smarty_tpl->tpl_vars['alert']->value->getIcon() === 'warning') {?>
        <?php $_smarty_tpl->_assignInScope('icon', 'exclamation-triangle');?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('icon', $_smarty_tpl->tpl_vars['alert']->value->getIcon());?>
    <?php }?>
    <div class="row">
        <div class="col">
            <?php if ($_smarty_tpl->tpl_vars['alert']->value->getIcon()) {?><i class="fal fa-<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
 mr-2"></i><?php }?>
            <?php if (!empty($_smarty_tpl->tpl_vars['alert']->value->getLinkHref()) && empty($_smarty_tpl->tpl_vars['alert']->value->getLinkText())) {?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['alert']->value->getLinkHref();?>
"><?php echo $_smarty_tpl->tpl_vars['alert']->value->getMessage();?>
</a>
            <?php } elseif (!empty($_smarty_tpl->tpl_vars['alert']->value->getLinkHref()) && !empty($_smarty_tpl->tpl_vars['alert']->value->getLinkText())) {?>
                <?php echo $_smarty_tpl->tpl_vars['alert']->value->getMessage();?>

                <a href="<?php echo $_smarty_tpl->tpl_vars['alert']->value->getLinkHref();?>
"><?php echo $_smarty_tpl->tpl_vars['alert']->value->getLinkText();?>
</a>
            <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['alert']->value->getMessage();?>

            <?php }?>
        </div>
        <div class="col-auto ml-auto">
            <?php if ($_smarty_tpl->tpl_vars['alert']->value->getDismissable()) {?><div class="close">&times;</div><?php }?>
        </div>
    </div>
</div>
<?php }
}
