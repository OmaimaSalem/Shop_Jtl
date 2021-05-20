<?php
/* Smarty version 3.1.38, created on 2021-05-19 17:01:12
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\admin\templates\bootstrap\tpl_inc\language_switcher.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a52838dbef39_16691745',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '131af2c7bb9b1a2a2b2d7e7f4264b4e7aab04bbc' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\admin\\templates\\bootstrap\\tpl_inc\\language_switcher.tpl',
      1 => 1612177964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a52838dbef39_16691745 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('onchange', (($tmp = $_smarty_tpl->tpl_vars['onchange']->value ?? null)===null||$tmp==='' ? true : $tmp));
$_smarty_tpl->_assignInScope('id', (($tmp = $_smarty_tpl->tpl_vars['id']->value ?? null)===null||$tmp==='' ? 'lang-switcher' : $tmp));?>
<form name="sprache" method="post" action="<?php echo (($tmp = $_smarty_tpl->tpl_vars['action']->value ?? null)===null||$tmp==='' ? '' : $tmp);?>
" class="inline_block">
    <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

    <input type="hidden" name="sprachwechsel" value="1" />
    <div class="form-row">
        <label class="col-sm-auto col-form-label" for="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo __('changeLanguage');?>
:</label>
        <span class="col-sm-auto">
            <select id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" name="kSprache" class="custom-select selectBox"<?php if ($_smarty_tpl->tpl_vars['onchange']->value) {?> onchange="document.sprache.submit();"<?php }?>>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['availableLanguages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['language']->value->getId();?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value->getId() === $_SESSION['editLanguageID']) {
$_smarty_tpl->_assignInScope('currentLanguage', $_smarty_tpl->tpl_vars['language']->value->getLocalizedName());?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['language']->value->getLocalizedName();?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </span>
    </div>
</form>
<?php }
}
