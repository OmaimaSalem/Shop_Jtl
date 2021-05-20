<?php
/* Smarty version 3.1.38, created on 2021-05-04 11:46:15
  from 'C:\xampp\htdocs\shop\templates\NOVA\snippets\language_dropdown.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_609117e7220186_68473341',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b608772ba77386c46b954916d49688d4cd9f5c1f' => 
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
function content_609117e7220186_68473341 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_616491647609117e71325b0_01338798', 'snippets-language-dropdown');
?>

<?php }
/* {block 'snippets-language-dropdown-text'} */
class Block_1276175144609117e713c706_52433422 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'snippets-language-dropdown-text'} */
/* {block 'snippets-language-dropdown-item'} */
class Block_72780681609117e720d5a2_76387465 extends Smarty_Internal_Block
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
class Block_616491647609117e71325b0_01338798 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-language-dropdown' => 
  array (
    0 => 'Block_616491647609117e71325b0_01338798',
  ),
  'snippets-language-dropdown-text' => 
  array (
    0 => 'Block_1276175144609117e713c706_52433422',
  ),
  'snippets-language-dropdown-item' => 
  array (
    0 => 'Block_72780681609117e720d5a2_76387465',
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1276175144609117e713c706_52433422', 'snippets-language-dropdown-text', $this->tplIndex);
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_72780681609117e720d5a2_76387465', 'snippets-language-dropdown-item', $this->tplIndex);
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
