<?php
/* Smarty version 3.1.38, created on 2021-05-19 15:12:38
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\snippets\form_group_simple.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a50ec616ab36_32448954',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18d99c9584e231f7b15ea80e64839203947ab763' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\snippets\\form_group_simple.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a50ec616ab36_32448954 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_107041174060a50ec60a79a7_01554847', 'snippets-form-group-simple');
?>

<?php }
/* {block 'snippets-form-group-simple-error'} */
class Block_192216124060a50ec6137fd8_25790567 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if ($_smarty_tpl->tpl_vars['hasError']->value) {?>
                <div class="form-error-msg"><?php echo $_smarty_tpl->tpl_vars['invalidReason']->value;?>
</div>
            <?php }?>
        <?php
}
}
/* {/block 'snippets-form-group-simple-error'} */
/* {block 'snippets-form-group-simple-input-number'} */
class Block_155912849760a50ec6141a22_92089134 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_block_plugin170 = isset($_smarty_tpl->smarty->registered_plugins['block']['inputgroup'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['inputgroup'][0][0] : null;
if (!is_callable(array($_block_plugin170, 'render'))) {
throw new SmartyException('block tag \'inputgroup\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inputgroup', array());
$_block_repeat=true;
echo $_block_plugin170->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php $_block_plugin171 = isset($_smarty_tpl->smarty->registered_plugins['block']['inputgroupaddon'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['inputgroupaddon'][0][0] : null;
if (!is_callable(array($_block_plugin171, 'render'))) {
throw new SmartyException('block tag \'inputgroupaddon\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inputgroupaddon', array('append'=>false,'data'=>array("type"=>"minus","field"=>"quant[1]")));
$_block_repeat=true;
echo $_block_plugin171->render(array('append'=>false,'data'=>array("type"=>"minus","field"=>"quant[1]")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        -
                    <?php $_block_repeat=false;
echo $_block_plugin171->render(array('append'=>false,'data'=>array("type"=>"minus","field"=>"quant[1]")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php ob_start();
if ((isset($_smarty_tpl->tpl_vars['placeholder']->value))) {
echo (string)$_smarty_tpl->tpl_vars['placeholder']->value;
} else {
echo (string)$_smarty_tpl->tpl_vars['label']->value;
}
$_prefixVariable82=ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>$_smarty_tpl->tpl_vars['inputType']->value,'name'=>$_smarty_tpl->tpl_vars['inputName']->value,'value'=>$_smarty_tpl->tpl_vars['inputValue']->value,'id'=>$_smarty_tpl->tpl_vars['inputId']->value,'placeholder'=>$_prefixVariable82,'required'=>$_smarty_tpl->tpl_vars['isRequired']->value,'autocomplete'=>$_smarty_tpl->tpl_vars['autocomplete']->value),$_smarty_tpl ) );?>

                    <?php $_block_plugin172 = isset($_smarty_tpl->smarty->registered_plugins['block']['inputgroupaddon'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['inputgroupaddon'][0][0] : null;
if (!is_callable(array($_block_plugin172, 'render'))) {
throw new SmartyException('block tag \'inputgroupaddon\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inputgroupaddon', array('append'=>true,'data'=>array("type"=>"minus","field"=>"quant[1]")));
$_block_repeat=true;
echo $_block_plugin172->render(array('append'=>true,'data'=>array("type"=>"minus","field"=>"quant[1]")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        +
                    <?php $_block_repeat=false;
echo $_block_plugin172->render(array('append'=>true,'data'=>array("type"=>"minus","field"=>"quant[1]")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php $_block_repeat=false;
echo $_block_plugin170->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
}
}
/* {/block 'snippets-form-group-simple-input-number'} */
/* {block 'snippets-form-group-simple-input-other'} */
class Block_41016691860a50ec615cba7_05728579 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php ob_start();
if ((isset($_smarty_tpl->tpl_vars['inputType']->value))) {
echo (string)$_smarty_tpl->tpl_vars['inputType']->value;
} else {
echo "text";
}
$_prefixVariable83=ob_get_clean();
ob_start();
if ((isset($_smarty_tpl->tpl_vars['placeholder']->value))) {
echo (string)$_smarty_tpl->tpl_vars['placeholder']->value;
} else {
echo " ";
}
$_prefixVariable84=ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>$_prefixVariable83,'name'=>$_smarty_tpl->tpl_vars['inputName']->value,'value'=>$_smarty_tpl->tpl_vars['inputValue']->value,'id'=>$_smarty_tpl->tpl_vars['inputId']->value,'placeholder'=>$_prefixVariable84,'required'=>$_smarty_tpl->tpl_vars['isRequired']->value,'autocomplete'=>$_smarty_tpl->tpl_vars['autocomplete']->value,'size'=>$_smarty_tpl->tpl_vars['size']->value),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'snippets-form-group-simple-input-other'} */
/* {block 'snippets-form-group-simple'} */
class Block_107041174060a50ec60a79a7_01554847 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-form-group-simple' => 
  array (
    0 => 'Block_107041174060a50ec60a79a7_01554847',
  ),
  'snippets-form-group-simple-error' => 
  array (
    0 => 'Block_192216124060a50ec6137fd8_25790567',
  ),
  'snippets-form-group-simple-input-number' => 
  array (
    0 => 'Block_155912849760a50ec6141a22_92089134',
  ),
  'snippets-form-group-simple-input-other' => 
  array (
    0 => 'Block_41016691860a50ec615cba7_05728579',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\includes\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

    <?php $_smarty_tpl->_assignInScope('inputType', $_smarty_tpl->tpl_vars['options']->value[0]);?>
    <?php $_smarty_tpl->_assignInScope('inputId', $_smarty_tpl->tpl_vars['options']->value[1]);?>
    <?php $_smarty_tpl->_assignInScope('inputName', $_smarty_tpl->tpl_vars['options']->value[2]);?>
    <?php $_smarty_tpl->_assignInScope('inputValue', $_smarty_tpl->tpl_vars['options']->value[3]);?>
    <?php $_smarty_tpl->_assignInScope('label', $_smarty_tpl->tpl_vars['options']->value[4]);?>
    <?php $_smarty_tpl->_assignInScope('invalidReason', (($tmp = $_smarty_tpl->tpl_vars['options']->value[6] ?? null)===null||$tmp==='' ? '' : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('autocomplete', (($tmp = $_smarty_tpl->tpl_vars['options']->value[7] ?? null)===null||$tmp==='' ? '' : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('size', (($tmp = $_smarty_tpl->tpl_vars['options']->value[8] ?? null)===null||$tmp==='' ? '' : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('isRequired', !empty($_smarty_tpl->tpl_vars['options']->value[5]) && ($_smarty_tpl->tpl_vars['options']->value[5] === 'Y' || $_smarty_tpl->tpl_vars['options']->value[5] === true));?>
    <?php $_smarty_tpl->_assignInScope('inputNameTmp', smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['inputName']->value,"register[shipping_address][",''),"]",''));?>

    <?php if ($_smarty_tpl->tpl_vars['invalidReason']->value !== '') {?>
        <?php $_smarty_tpl->_assignInScope('hasError', true);?>
    <?php } elseif (!empty($_smarty_tpl->tpl_vars['fehlendeAngaben']->value) && (isset($_smarty_tpl->tpl_vars['fehlendeAngaben']->value[$_smarty_tpl->tpl_vars['inputNameTmp']->value]))) {?>
        <?php $_smarty_tpl->_assignInScope('errCode', $_smarty_tpl->tpl_vars['fehlendeAngaben']->value[$_smarty_tpl->tpl_vars['inputNameTmp']->value]);?>
        <?php $_smarty_tpl->_assignInScope('hasError', true);?>
        <?php if ($_smarty_tpl->tpl_vars['inputNameTmp']->value === 'email') {?>
            <?php if ($_smarty_tpl->tpl_vars['errCode']->value == 1) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('assign'=>'invalidReason','key'=>'fillOut'),$_smarty_tpl ) );?>

            <?php } elseif ($_smarty_tpl->tpl_vars['errCode']->value == 2) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('assign'=>'invalidReason','key'=>'invalidEmail'),$_smarty_tpl ) );?>

            <?php } elseif ($_smarty_tpl->tpl_vars['errCode']->value == 3) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('assign'=>'invalidReason','key'=>'blockedEmail'),$_smarty_tpl ) );?>

            <?php } elseif ($_smarty_tpl->tpl_vars['errCode']->value == 4) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('assign'=>'invalidReason','key'=>'noDnsEmail','section'=>'account data'),$_smarty_tpl ) );?>

            <?php } elseif ($_smarty_tpl->tpl_vars['errCode']->value == 5) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('assign'=>'invalidReason','key'=>'emailNotAvailable','section'=>'account data'),$_smarty_tpl ) );?>

            <?php }?>
        <?php } elseif ($_smarty_tpl->tpl_vars['inputNameTmp']->value === 'mobil' || $_smarty_tpl->tpl_vars['inputNameTmp']->value === 'tel' || $_smarty_tpl->tpl_vars['inputNameTmp']->value === 'fax') {?>
            <?php if ($_smarty_tpl->tpl_vars['errCode']->value == 1) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('assign'=>'invalidReason','key'=>'fillOut'),$_smarty_tpl ) );?>

            <?php } elseif ($_smarty_tpl->tpl_vars['errCode']->value == 2) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('assign'=>'invalidReason','key'=>'invalidTel'),$_smarty_tpl ) );?>

            <?php }?>
        <?php } elseif ($_smarty_tpl->tpl_vars['inputNameTmp']->value === 'vorname') {?>
            <?php if ($_smarty_tpl->tpl_vars['errCode']->value == 1) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('assign'=>'invalidReason','key'=>'fillOut'),$_smarty_tpl ) );?>

            <?php } elseif ($_smarty_tpl->tpl_vars['errCode']->value == 2) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('assign'=>'invalidReason','key'=>'firstNameNotNumeric','section'=>'account data'),$_smarty_tpl ) );?>

            <?php }?>
        <?php } elseif ($_smarty_tpl->tpl_vars['inputNameTmp']->value === 'nachname') {?>
            <?php if ($_smarty_tpl->tpl_vars['errCode']->value == 1) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('assign'=>'invalidReason','key'=>'fillOut'),$_smarty_tpl ) );?>

            <?php } elseif ($_smarty_tpl->tpl_vars['errCode']->value == 2) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('assign'=>'invalidReason','key'=>'lastNameNotNumeric','section'=>'account data'),$_smarty_tpl ) );?>

            <?php }?>
        <?php } elseif ($_smarty_tpl->tpl_vars['inputNameTmp']->value === 'geburtstag') {?>
            <?php if ($_smarty_tpl->tpl_vars['errCode']->value == 1) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('assign'=>'invalidReason','key'=>'fillOut'),$_smarty_tpl ) );?>

            <?php } elseif ($_smarty_tpl->tpl_vars['errCode']->value == 2) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('assign'=>'invalidReason','key'=>'invalidDateformat'),$_smarty_tpl ) );?>

            <?php } elseif ($_smarty_tpl->tpl_vars['errCode']->value == 3) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('assign'=>'invalidReason','key'=>'invalidDate'),$_smarty_tpl ) );?>

            <?php }?>
        <?php } elseif ($_smarty_tpl->tpl_vars['inputNameTmp']->value === 'www') {?>
            <?php if ($_smarty_tpl->tpl_vars['errCode']->value == 1) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('assign'=>'invalidReason','key'=>'fillOut'),$_smarty_tpl ) );?>

            <?php } elseif ($_smarty_tpl->tpl_vars['errCode']->value == 2) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('assign'=>'invalidReason','key'=>'invalidURL'),$_smarty_tpl ) );?>

            <?php }?>
        <?php } else { ?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('assign'=>'invalidReason','key'=>'fillOut'),$_smarty_tpl ) );?>

        <?php }?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('hasError', false);?>
    <?php }?>

    <?php ob_start();
if (!$_smarty_tpl->tpl_vars['isRequired']->value) {
echo "<span class='optional'> - ";
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'optional'),$_smarty_tpl ) );
echo "</span>";
}
$_prefixVariable80=ob_get_clean();
ob_start();
if ($_smarty_tpl->tpl_vars['hasError']->value) {
echo "has-error";
}
$_prefixVariable81=ob_get_clean();
$_block_plugin169 = isset($_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0] : null;
if (!is_callable(array($_block_plugin169, 'render'))) {
throw new SmartyException('block tag \'formgroup\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('formgroup', array('label-for'=>$_smarty_tpl->tpl_vars['inputId']->value,'label'=>((string)$_smarty_tpl->tpl_vars['label']->value).$_prefixVariable80,'class'=>$_prefixVariable81));
$_block_repeat=true;
echo $_block_plugin169->render(array('label-for'=>$_smarty_tpl->tpl_vars['inputId']->value,'label'=>((string)$_smarty_tpl->tpl_vars['label']->value).$_prefixVariable80,'class'=>$_prefixVariable81), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_192216124060a50ec6137fd8_25790567', 'snippets-form-group-simple-error', $this->tplIndex);
?>

        <?php if ((isset($_smarty_tpl->tpl_vars['inputType']->value)) && $_smarty_tpl->tpl_vars['inputType']->value === 'number') {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_155912849760a50ec6141a22_92089134', 'snippets-form-group-simple-input-number', $this->tplIndex);
?>

        <?php } else { ?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_41016691860a50ec615cba7_05728579', 'snippets-form-group-simple-input-other', $this->tplIndex);
?>

        <?php }?>
    <?php $_block_repeat=false;
echo $_block_plugin169->render(array('label-for'=>$_smarty_tpl->tpl_vars['inputId']->value,'label'=>((string)$_smarty_tpl->tpl_vars['label']->value).$_prefixVariable80,'class'=>$_prefixVariable81), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'snippets-form-group-simple'} */
}
