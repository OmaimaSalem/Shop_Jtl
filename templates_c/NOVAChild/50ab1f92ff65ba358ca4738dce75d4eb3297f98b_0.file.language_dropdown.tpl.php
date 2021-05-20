<?php
/* Smarty version 3.1.38, created on 2021-05-04 14:26:53
  from 'C:\xampp\htdocs\shop\templates\NOVA\snippets\language_dropdown.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60913d8d7e0626_09566075',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50ab1f92ff65ba358ca4738dce75d4eb3297f98b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\templates\\NOVA\\snippets\\language_dropdown.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60913d8d7e0626_09566075 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_186146505160913d8d784965_36931119', 'snippets-language-dropdown');
?>

<?php }
/* {block 'snippets-language-dropdown-text'} */
class Block_154354125860913d8d790b52_53587077 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'snippets-language-dropdown-text'} */
/* {block 'snippets-language-dropdown-item'} */
class Block_27960865860913d8d7d6c43_90064906 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_block_plugin34 = isset($_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0] : null;
if (!is_callable(array($_block_plugin34, 'render'))) {
throw new SmartyException('block tag \'dropdownitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dropdownitem', array('href'=>((string)$_smarty_tpl->tpl_vars['language']->value->cURL),'class'=>"link-lang",'data'=>array("iso"=>$_smarty_tpl->tpl_vars['language']->value->cISO),'rel'=>"nofollow",'active'=>($_smarty_tpl->tpl_vars['language']->value->kSprache == $_SESSION['kSprache'])));
$_block_repeat=true;
echo $_block_plugin34->render(array('href'=>((string)$_smarty_tpl->tpl_vars['language']->value->cURL),'class'=>"link-lang",'data'=>array("iso"=>$_smarty_tpl->tpl_vars['language']->value->cISO),'rel'=>"nofollow",'active'=>($_smarty_tpl->tpl_vars['language']->value->kSprache == $_SESSION['kSprache'])), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['language']->value->iso639, 'utf-8');?>

                    <?php $_block_repeat=false;
echo $_block_plugin34->render(array('href'=>((string)$_smarty_tpl->tpl_vars['language']->value->cURL),'class'=>"link-lang",'data'=>array("iso"=>$_smarty_tpl->tpl_vars['language']->value->cISO),'rel'=>"nofollow",'active'=>($_smarty_tpl->tpl_vars['language']->value->kSprache == $_SESSION['kSprache'])), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php
}
}
/* {/block 'snippets-language-dropdown-item'} */
/* {block 'snippets-language-dropdown'} */
class Block_186146505160913d8d784965_36931119 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-language-dropdown' => 
  array (
    0 => 'Block_186146505160913d8d784965_36931119',
  ),
  'snippets-language-dropdown-text' => 
  array (
    0 => 'Block_154354125860913d8d790b52_53587077',
  ),
  'snippets-language-dropdown-item' => 
  array (
    0 => 'Block_27960865860913d8d7d6c43_90064906',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ((isset($_SESSION['Sprachen'])) && count($_SESSION['Sprachen']) > 1) {?>
        <?php ob_start();
echo (($tmp = $_smarty_tpl->tpl_vars['dropdownClass']->value ?? null)===null||$tmp==='' ? '' : $tmp);
$_prefixVariable5=ob_get_clean();
ob_start();
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_SESSION['Sprachen'], 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
echo "
                ";
if ($_smarty_tpl->tpl_vars['language']->value->kSprache == $_SESSION['kSprache']) {
echo "
                    ";
echo "
                        ";
echo mb_strtoupper($_smarty_tpl->tpl_vars['language']->value->iso639, 'utf-8');
echo "
                    ";
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_154354125860913d8d790b52_53587077', 'snippets-language-dropdown-text', $this->tplIndex);
echo "
                ";
}
echo "
            ";
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable6=ob_get_clean();
$_block_plugin33 = isset($_smarty_tpl->smarty->registered_plugins['block']['navitemdropdown'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['navitemdropdown'][0][0] : null;
if (!is_callable(array($_block_plugin33, 'render'))) {
throw new SmartyException('block tag \'navitemdropdown\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('navitemdropdown', array('class'=>"language-dropdown ".$_prefixVariable5,'right'=>true,'text'=>"
            ".$_prefixVariable6));
$_block_repeat=true;
echo $_block_plugin33->render(array('class'=>"language-dropdown ".$_prefixVariable5,'right'=>true,'text'=>"
            ".$_prefixVariable6), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_SESSION['Sprachen'], 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27960865860913d8d7d6c43_90064906', 'snippets-language-dropdown-item', $this->tplIndex);
?>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php $_block_repeat=false;
echo $_block_plugin33->render(array('class'=>"language-dropdown ".$_prefixVariable5,'right'=>true,'text'=>"
            ".$_prefixVariable6), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php }
}
}
/* {/block 'snippets-language-dropdown'} */
}
