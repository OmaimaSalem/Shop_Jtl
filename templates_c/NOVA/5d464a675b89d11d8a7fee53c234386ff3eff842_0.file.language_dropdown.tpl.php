<?php
/* Smarty version 3.1.38, created on 2021-05-19 14:58:53
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\snippets\language_dropdown.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a50b8d3fcab1_20318359',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d464a675b89d11d8a7fee53c234386ff3eff842' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\snippets\\language_dropdown.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a50b8d3fcab1_20318359 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_96851063060a50b8d1f0035_21197079', 'snippets-language-dropdown');
?>

<?php }
/* {block 'snippets-language-dropdown-text'} */
class Block_172991529160a50b8d2aeea3_82832297 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'snippets-language-dropdown-text'} */
/* {block 'snippets-language-dropdown-item'} */
class Block_203402714960a50b8d3ebe53_90748849 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_block_plugin40 = isset($_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0] : null;
if (!is_callable(array($_block_plugin40, 'render'))) {
throw new SmartyException('block tag \'dropdownitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dropdownitem', array('href'=>((string)$_smarty_tpl->tpl_vars['language']->value->cURL),'class'=>"link-lang",'data'=>array("iso"=>$_smarty_tpl->tpl_vars['language']->value->cISO),'rel'=>"nofollow",'active'=>($_smarty_tpl->tpl_vars['language']->value->kSprache == $_SESSION['kSprache'])));
$_block_repeat=true;
echo $_block_plugin40->render(array('href'=>((string)$_smarty_tpl->tpl_vars['language']->value->cURL),'class'=>"link-lang",'data'=>array("iso"=>$_smarty_tpl->tpl_vars['language']->value->cISO),'rel'=>"nofollow",'active'=>($_smarty_tpl->tpl_vars['language']->value->kSprache == $_SESSION['kSprache'])), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['language']->value->iso639, 'utf-8');?>

                    <?php $_block_repeat=false;
echo $_block_plugin40->render(array('href'=>((string)$_smarty_tpl->tpl_vars['language']->value->cURL),'class'=>"link-lang",'data'=>array("iso"=>$_smarty_tpl->tpl_vars['language']->value->cISO),'rel'=>"nofollow",'active'=>($_smarty_tpl->tpl_vars['language']->value->kSprache == $_SESSION['kSprache'])), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php
}
}
/* {/block 'snippets-language-dropdown-item'} */
/* {block 'snippets-language-dropdown'} */
class Block_96851063060a50b8d1f0035_21197079 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-language-dropdown' => 
  array (
    0 => 'Block_96851063060a50b8d1f0035_21197079',
  ),
  'snippets-language-dropdown-text' => 
  array (
    0 => 'Block_172991529160a50b8d2aeea3_82832297',
  ),
  'snippets-language-dropdown-item' => 
  array (
    0 => 'Block_203402714960a50b8d3ebe53_90748849',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ((isset($_SESSION['Sprachen'])) && count($_SESSION['Sprachen']) > 1) {?>
        <?php ob_start();
echo (($tmp = $_smarty_tpl->tpl_vars['dropdownClass']->value ?? null)===null||$tmp==='' ? '' : $tmp);
$_prefixVariable9=ob_get_clean();
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_172991529160a50b8d2aeea3_82832297', 'snippets-language-dropdown-text', $this->tplIndex);
echo "
                ";
}
echo "
            ";
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable10=ob_get_clean();
$_block_plugin39 = isset($_smarty_tpl->smarty->registered_plugins['block']['navitemdropdown'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['navitemdropdown'][0][0] : null;
if (!is_callable(array($_block_plugin39, 'render'))) {
throw new SmartyException('block tag \'navitemdropdown\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('navitemdropdown', array('class'=>"language-dropdown ".$_prefixVariable9,'right'=>true,'text'=>"
            ".$_prefixVariable10));
$_block_repeat=true;
echo $_block_plugin39->render(array('class'=>"language-dropdown ".$_prefixVariable9,'right'=>true,'text'=>"
            ".$_prefixVariable10), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_SESSION['Sprachen'], 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_203402714960a50b8d3ebe53_90748849', 'snippets-language-dropdown-item', $this->tplIndex);
?>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php $_block_repeat=false;
echo $_block_plugin39->render(array('class'=>"language-dropdown ".$_prefixVariable9,'right'=>true,'text'=>"
            ".$_prefixVariable10), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php }
}
}
/* {/block 'snippets-language-dropdown'} */
}
