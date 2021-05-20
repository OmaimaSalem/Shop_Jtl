<?php
/* Smarty version 3.1.38, created on 2021-05-19 15:00:31
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\snippets\ribbon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a50bef286ce2_65372339',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17fb05dbaa40ffbcbf87e79ecd58f884a14e7028' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\snippets\\ribbon.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a50bef286ce2_65372339 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_64154512660a50bef263019_63496812', 'snippets-ribbon');
?>

<?php }
/* {block 'snippets-ribbon-content'} */
class Block_174845087560a50bef26dd19_30405170 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>('ribbon-').($_smarty_tpl->tpl_vars['Artikel']->value->oSuchspecialBild->getType()),'section'=>'productOverview','printf'=>((($tmp = $_smarty_tpl->tpl_vars['sale']->value ?? null)===null||$tmp==='' ? '' : $tmp)).('%')),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'snippets-ribbon-content'} */
/* {block 'snippets-ribbon-main'} */
class Block_151082872660a50bef268f11_50659518 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="ribbon
            ribbon-<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->oSuchspecialBild->getType();?>
 productbox-ribbon">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_174845087560a50bef26dd19_30405170', 'snippets-ribbon-content', $this->tplIndex);
?>

        </div>
    <?php
}
}
/* {/block 'snippets-ribbon-main'} */
/* {block 'snippets-ribbon'} */
class Block_64154512660a50bef263019_63496812 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-ribbon' => 
  array (
    0 => 'Block_64154512660a50bef263019_63496812',
  ),
  'snippets-ribbon-main' => 
  array (
    0 => 'Block_151082872660a50bef268f11_50659518',
  ),
  'snippets-ribbon-content' => 
  array (
    0 => 'Block_174845087560a50bef26dd19_30405170',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (!empty($_smarty_tpl->tpl_vars['Artikel']->value->Preise->Sonderpreis_aktiv)) {?>
        <?php $_smarty_tpl->_assignInScope('sale', $_smarty_tpl->tpl_vars['Artikel']->value->Preise->discountPercentage);?>
    <?php }?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_151082872660a50bef268f11_50659518', 'snippets-ribbon-main', $this->tplIndex);
?>

<?php
}
}
/* {/block 'snippets-ribbon'} */
}
