<?php
/* Smarty version 3.1.38, created on 2021-05-19 15:11:44
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\productdetails\question_on_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a50e90437d27_83732093',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b8a0895876fddbce3d0ce79d243033256928953' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\productdetails\\question_on_item.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/form_group_simple.tpl' => 7,
    'file:snippets/checkbox.tpl' => 2,
  ),
),false)) {
function content_60a50e90437d27_83732093 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_122193828560a50e862abb20_38718725', 'productdetails-question-on-item');
?>

<?php }
/* {block 'productdetails-question-on-item-alert'} */
class Block_22950086960a50e862b5908_53009392 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_block_plugin148 = isset($_smarty_tpl->smarty->registered_plugins['block']['alert'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['alert'][0][0] : null;
if (!is_callable(array($_block_plugin148, 'render'))) {
throw new SmartyException('block tag \'alert\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('alert', array('dismissable'=>true,'variant'=>"danger"));
$_block_repeat=true;
echo $_block_plugin148->render(array('dismissable'=>true,'variant'=>"danger"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Artikelhinweise']->value, 'Artikelhinweis');
$_smarty_tpl->tpl_vars['Artikelhinweis']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Artikelhinweis']->value) {
$_smarty_tpl->tpl_vars['Artikelhinweis']->do_else = false;
?>
                        <?php echo $_smarty_tpl->tpl_vars['Artikelhinweis']->value;?>

                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php $_block_repeat=false;
echo $_block_plugin148->render(array('dismissable'=>true,'variant'=>"danger"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
}
}
/* {/block 'productdetails-question-on-item-alert'} */
/* {block 'productdetails-question-on-item-form-legend-contact'} */
class Block_43901211360a50e862d2cd3_61702303 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <legend><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'contact'),$_smarty_tpl ) );?>
</legend>
                <?php
}
}
/* {/block 'productdetails-question-on-item-form-legend-contact'} */
/* {block 'productdetails-question-on-item-form-salutation'} */
class Block_49942111660a50e862d9256_06333791 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php $_block_plugin151 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin151, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'md'=>6));
$_block_repeat=true;
echo $_block_plugin151->render(array('cols'=>12,'md'=>6), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'salutation','section'=>'account data'),$_smarty_tpl ) );
$_prefixVariable60=ob_get_clean();
ob_start();
if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_anrede'] === 'O') {
echo "<span class='optional'> - ";
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'optional'),$_smarty_tpl ) );
echo "</span>";
}
$_prefixVariable61=ob_get_clean();
$_block_plugin152 = isset($_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0] : null;
if (!is_callable(array($_block_plugin152, 'render'))) {
throw new SmartyException('block tag \'formgroup\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('formgroup', array('label-for'=>"salutation",'label'=>$_prefixVariable60.$_prefixVariable61));
$_block_repeat=true;
echo $_block_plugin152->render(array('label-for'=>"salutation",'label'=>$_prefixVariable60.$_prefixVariable61), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'emailadress'),$_smarty_tpl ) );
$_prefixVariable62=ob_get_clean();
$_block_plugin153 = isset($_smarty_tpl->smarty->registered_plugins['block']['select'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['select'][0][0] : null;
if (!is_callable(array($_block_plugin153, 'render'))) {
throw new SmartyException('block tag \'select\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('select', array('class'=>'custom-select','name'=>"anrede",'id'=>"salutation",'placeholder'=>$_prefixVariable62,'autocomplete'=>"honorific-prefix",'required'=>($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_anrede'] === 'Y')));
$_block_repeat=true;
echo $_block_plugin153->render(array('class'=>'custom-select','name'=>"anrede",'id'=>"salutation",'placeholder'=>$_prefixVariable62,'autocomplete'=>"honorific-prefix",'required'=>($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_anrede'] === 'Y')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <option value="" <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_anrede'] === 'Y') {?>disabled<?php }?> selected>
                                            <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_anrede'] === 'Y') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'salutation','section'=>'account data'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'noSalutation'),$_smarty_tpl ) );
}?>
                                        </option>
                                        <option value="w" <?php if ((isset($_smarty_tpl->tpl_vars['Anfrage']->value->cAnrede)) && $_smarty_tpl->tpl_vars['Anfrage']->value->cAnrede === 'w') {?>selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'salutationW'),$_smarty_tpl ) );?>
</option>
                                        <option value="m" <?php if ((isset($_smarty_tpl->tpl_vars['Anfrage']->value->cAnrede)) && $_smarty_tpl->tpl_vars['Anfrage']->value->cAnrede === 'm') {?>selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'salutationM'),$_smarty_tpl ) );?>
</option>
                                    <?php $_block_repeat=false;
echo $_block_plugin153->render(array('class'=>'custom-select','name'=>"anrede",'id'=>"salutation",'placeholder'=>$_prefixVariable62,'autocomplete'=>"honorific-prefix",'required'=>($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_anrede'] === 'Y')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php $_block_repeat=false;
echo $_block_plugin152->render(array('label-for'=>"salutation",'label'=>$_prefixVariable60.$_prefixVariable61), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php $_block_repeat=false;
echo $_block_plugin151->render(array('cols'=>12,'md'=>6), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php
}
}
/* {/block 'productdetails-question-on-item-form-salutation'} */
/* {block 'productdetails-question-on-item-form-name'} */
class Block_85129877860a50e86a12197_69735684 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_vorname'] !== 'N') {?>
                                <?php $_block_plugin154 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin154, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'md'=>6));
$_block_repeat=true;
echo $_block_plugin154->render(array('cols'=>12,'md'=>6), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php ob_start();
echo (($tmp = $_smarty_tpl->tpl_vars['Anfrage']->value->cVorname ?? null)===null||$tmp==='' ? null : $tmp);
$_prefixVariable63 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'firstName','section'=>'account data'),$_smarty_tpl ) );
$_prefixVariable64 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:snippets/form_group_simple.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('options'=>array('text','firstName','vorname',$_prefixVariable63,$_prefixVariable64,$_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_vorname'],null,'given-name')), 0, false);
?>
                                <?php $_block_repeat=false;
echo $_block_plugin154->render(array('cols'=>12,'md'=>6), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_nachname'] !== 'N') {?>
                                <?php $_block_plugin155 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin155, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'md'=>6));
$_block_repeat=true;
echo $_block_plugin155->render(array('cols'=>12,'md'=>6), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php ob_start();
echo (($tmp = $_smarty_tpl->tpl_vars['Anfrage']->value->cNachname ?? null)===null||$tmp==='' ? null : $tmp);
$_prefixVariable65 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'lastName','section'=>'account data'),$_smarty_tpl ) );
$_prefixVariable66 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:snippets/form_group_simple.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('options'=>array('text','lastName','nachname',$_prefixVariable65,$_prefixVariable66,$_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_nachname'],null,'family-name')), 0, true);
?>
                                <?php $_block_repeat=false;
echo $_block_plugin155->render(array('cols'=>12,'md'=>6), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php }?>
                        <?php
}
}
/* {/block 'productdetails-question-on-item-form-name'} */
/* {block 'productdetails-question-on-item-form-firm'} */
class Block_114999542860a50e86a30b33_19461520 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php $_block_plugin156 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin156, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'md'=>6));
$_block_repeat=true;
echo $_block_plugin156->render(array('cols'=>12,'md'=>6), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php ob_start();
echo (($tmp = $_smarty_tpl->tpl_vars['Anfrage']->value->cFirma ?? null)===null||$tmp==='' ? null : $tmp);
$_prefixVariable67 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'firm','section'=>'account data'),$_smarty_tpl ) );
$_prefixVariable68 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:snippets/form_group_simple.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('options'=>array('text','company','firma',$_prefixVariable67,$_prefixVariable68,$_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_firma'],null,'organization')), 0, true);
?>
                            <?php $_block_repeat=false;
echo $_block_plugin156->render(array('cols'=>12,'md'=>6), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php
}
}
/* {/block 'productdetails-question-on-item-form-firm'} */
/* {block 'productdetails-question-on-item-form-email'} */
class Block_5768162860a50e86e24dd6_96482872 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_block_plugin157 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin157, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12));
$_block_repeat=true;
echo $_block_plugin157->render(array('cols'=>12), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php ob_start();
echo (($tmp = $_smarty_tpl->tpl_vars['Anfrage']->value->cMail ?? null)===null||$tmp==='' ? null : $tmp);
$_prefixVariable69 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'email','section'=>'account data'),$_smarty_tpl ) );
$_prefixVariable70 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:snippets/form_group_simple.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('options'=>array('email','question_email','email',$_prefixVariable69,$_prefixVariable70,true,null,'email')), 0, true);
?>
                        <?php $_block_repeat=false;
echo $_block_plugin157->render(array('cols'=>12), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php
}
}
/* {/block 'productdetails-question-on-item-form-email'} */
/* {block 'productdetails-question-on-item-form-mobil'} */
class Block_191470065260a50e8a925143_64470876 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_tel'] !== 'N') {?>
                                <?php $_block_plugin158 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin158, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'md'=>6));
$_block_repeat=true;
echo $_block_plugin158->render(array('cols'=>12,'md'=>6), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php ob_start();
echo (($tmp = $_smarty_tpl->tpl_vars['Anfrage']->value->cTel ?? null)===null||$tmp==='' ? null : $tmp);
$_prefixVariable71 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'tel','section'=>'account data'),$_smarty_tpl ) );
$_prefixVariable72 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:snippets/form_group_simple.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('options'=>array('tel','tel','tel',$_prefixVariable71,$_prefixVariable72,$_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_tel'],null,'home tel')), 0, true);
?>
                                <?php $_block_repeat=false;
echo $_block_plugin158->render(array('cols'=>12,'md'=>6), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_mobil'] !== 'N') {?>
                                <?php $_block_plugin159 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin159, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'md'=>6));
$_block_repeat=true;
echo $_block_plugin159->render(array('cols'=>12,'md'=>6), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php ob_start();
echo (($tmp = $_smarty_tpl->tpl_vars['Anfrage']->value->cMobil ?? null)===null||$tmp==='' ? null : $tmp);
$_prefixVariable73 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'mobile','section'=>'account data'),$_smarty_tpl ) );
$_prefixVariable74 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:snippets/form_group_simple.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('options'=>array('tel','mobile','mobil',$_prefixVariable73,$_prefixVariable74,$_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_mobil'],null,'mobile tel')), 0, true);
?>
                                <?php $_block_repeat=false;
echo $_block_plugin159->render(array('cols'=>12,'md'=>6), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php }?>
                        <?php
}
}
/* {/block 'productdetails-question-on-item-form-mobil'} */
/* {block 'productdetails-question-on-item-form-fax'} */
class Block_163419850960a50e8a964e88_95656526 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php $_block_plugin160 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin160, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('md'=>6));
$_block_repeat=true;
echo $_block_plugin160->render(array('md'=>6), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php ob_start();
echo (($tmp = $_smarty_tpl->tpl_vars['Anfrage']->value->cMobil ?? null)===null||$tmp==='' ? null : $tmp);
$_prefixVariable75 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'fax','section'=>'account data'),$_smarty_tpl ) );
$_prefixVariable76 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:snippets/form_group_simple.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('options'=>array('tel','fax','fax',$_prefixVariable75,$_prefixVariable76,$_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_fax'],null,'fax tel')), 0, true);
?>
                            <?php $_block_repeat=false;
echo $_block_plugin160->render(array('md'=>6), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php
}
}
/* {/block 'productdetails-question-on-item-form-fax'} */
/* {block 'productdetails-question-on-item-form-fieldset-contact'} */
class Block_204340900360a50e862d1da1_22417212 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <fieldset>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_43901211360a50e862d2cd3_61702303', 'productdetails-question-on-item-form-legend-contact', $this->tplIndex);
?>

                <?php $_block_plugin150 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin150, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array());
$_block_repeat=true;
echo $_block_plugin150->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_anrede'] !== 'N') {?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_49942111660a50e862d9256_06333791', 'productdetails-question-on-item-form-salutation', $this->tplIndex);
?>

                        <div class="w-100-util"></div>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_vorname'] !== 'N' || $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_nachname'] !== 'N') {?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_85129877860a50e86a12197_69735684', 'productdetails-question-on-item-form-name', $this->tplIndex);
?>

                        <div class="w-100-util"></div>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_firma'] !== 'N') {?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_114999542860a50e86a30b33_19461520', 'productdetails-question-on-item-form-firm', $this->tplIndex);
?>

                    <?php }?>

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5768162860a50e86e24dd6_96482872', 'productdetails-question-on-item-form-email', $this->tplIndex);
?>

                    <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_tel'] !== 'N' || $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_mobil'] !== 'N') {?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_191470065260a50e8a925143_64470876', 'productdetails-question-on-item-form-mobil', $this->tplIndex);
?>

                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_fax'] !== 'N') {?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_163419850960a50e8a964e88_95656526', 'productdetails-question-on-item-form-fax', $this->tplIndex);
?>

                    <?php }?>
                <?php $_block_repeat=false;
echo $_block_plugin150->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            </fieldset>
        <?php
}
}
/* {/block 'productdetails-question-on-item-form-fieldset-contact'} */
/* {block 'productdetails-question-on-item-form-legend-product-question'} */
class Block_1104614060a50e8aa4eb08_00039766 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <legend><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'productQuestion','section'=>'productDetails'),$_smarty_tpl ) );?>
</legend>
            <?php
}
}
/* {/block 'productdetails-question-on-item-form-legend-product-question'} */
/* {block 'productdetails-question-on-item-form-textarea'} */
class Block_166241248960a50e8aa50a34_28013681 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'question','section'=>'productDetails'),$_smarty_tpl ) );
$_prefixVariable77=ob_get_clean();
$_block_plugin161 = isset($_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0] : null;
if (!is_callable(array($_block_plugin161, 'render'))) {
throw new SmartyException('block tag \'formgroup\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('formgroup', array('label-for'=>"question",'label'=>$_prefixVariable77));
$_block_repeat=true;
echo $_block_plugin161->render(array('label-for'=>"question",'label'=>$_prefixVariable77), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['fehlendeAngaben_fragezumprodukt']->value['nachricht'])) && $_smarty_tpl->tpl_vars['fehlendeAngaben_fragezumprodukt']->value['nachricht'] > 0) {?>
                        <div class="form-error-msg"><i class="fas fa-exclamation-triangle"></i> <?php if ($_smarty_tpl->tpl_vars['fehlendeAngaben_fragezumprodukt']->value['nachricht'] > 0) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'fillOut'),$_smarty_tpl ) );
}?></div>
                    <?php }?>
                    <?php ob_start();
if ((isset($_smarty_tpl->tpl_vars['fehlendeAngaben_fragezumprodukt']->value['nachricht'])) && $_smarty_tpl->tpl_vars['fehlendeAngaben_fragezumprodukt']->value['nachricht'] > 0) {
echo "has-error";
}
$_prefixVariable78=ob_get_clean();
$_block_plugin162 = isset($_smarty_tpl->smarty->registered_plugins['block']['textarea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['textarea'][0][0] : null;
if (!is_callable(array($_block_plugin162, 'render'))) {
throw new SmartyException('block tag \'textarea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('textarea', array('name'=>"nachricht",'id'=>"question",'rows'=>"8",'required'=>true,'placeholder'=>" ",'class'=>$_prefixVariable78));
$_block_repeat=true;
echo $_block_plugin162->render(array('name'=>"nachricht",'id'=>"question",'rows'=>"8",'required'=>true,'placeholder'=>" ",'class'=>$_prefixVariable78), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ((isset($_smarty_tpl->tpl_vars['Anfrage']->value))) {
echo $_smarty_tpl->tpl_vars['Anfrage']->value->cNachricht;
}
$_block_repeat=false;
echo $_block_plugin162->render(array('name'=>"nachricht",'id'=>"question",'rows'=>"8",'required'=>true,'placeholder'=>" ",'class'=>$_prefixVariable78), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php $_block_repeat=false;
echo $_block_plugin161->render(array('label-for'=>"question",'label'=>$_prefixVariable77), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
}
}
/* {/block 'productdetails-question-on-item-form-textarea'} */
/* {block 'productdetails-question-on-item-form-include-checkbox'} */
class Block_75431347960a50e8ab9f818_70294203 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if ((isset($_smarty_tpl->tpl_vars['fehlendeAngaben_fragezumprodukt']->value))) {?>
                    <?php $_smarty_tpl->_subTemplateRender('file:snippets/checkbox.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('nAnzeigeOrt'=>(defined('CHECKBOX_ORT_FRAGE_ZUM_PRODUKT') ? constant('CHECKBOX_ORT_FRAGE_ZUM_PRODUKT') : null),'cPlausi_arr'=>$_smarty_tpl->tpl_vars['fehlendeAngaben_fragezumprodukt']->value,'cPost_arr'=>null), 0, false);
?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_subTemplateRender('file:snippets/checkbox.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('nAnzeigeOrt'=>(defined('CHECKBOX_ORT_FRAGE_ZUM_PRODUKT') ? constant('CHECKBOX_ORT_FRAGE_ZUM_PRODUKT') : null),'cPlausi_arr'=>null,'cPost_arr'=>null), 0, true);
?>
                <?php }?>
            <?php
}
}
/* {/block 'productdetails-question-on-item-form-include-checkbox'} */
/* {block 'productdetails-question-on-item-form-fieldset-product-question'} */
class Block_111755741760a50e8aa4d5d8_62478160 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <fieldset>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1104614060a50e8aa4eb08_00039766', 'productdetails-question-on-item-form-legend-product-question', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_166241248960a50e8aa50a34_28013681', 'productdetails-question-on-item-form-textarea', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_75431347960a50e8ab9f818_70294203', 'productdetails-question-on-item-form-include-checkbox', $this->tplIndex);
?>


        </fieldset>
        <?php
}
}
/* {/block 'productdetails-question-on-item-form-fieldset-product-question'} */
/* {block 'productdetails-question-on-item-form-captcha'} */
class Block_61335053860a50e8acad258_12720921 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_block_plugin163 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin163, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array());
$_block_repeat=true;
echo $_block_plugin163->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php ob_start();
if (!empty($_smarty_tpl->tpl_vars['fehlendeAngaben_fragezumprodukt']->value['captcha'])) {
echo "has-error";
}
$_prefixVariable79=ob_get_clean();
$_block_plugin164 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin164, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('class'=>$_prefixVariable79));
$_block_repeat=true;
echo $_block_plugin164->render(array('class'=>$_prefixVariable79), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['captchaMarkup'][0], array( array('getBody'=>true),$_smarty_tpl ) );?>

                    <?php $_block_repeat=false;
echo $_block_plugin164->render(array('class'=>$_prefixVariable79), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php $_block_repeat=false;
echo $_block_plugin163->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
}
}
/* {/block 'productdetails-question-on-item-form-captcha'} */
/* {block 'productdetails-question-on-item-form-privacy'} */
class Block_202789260360a50e8b03d894_86125598 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <p class="privacy text-muted-util small">
                    <?php $_block_plugin165 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin165, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_DATENSCHUTZ') ? constant('LINKTYP_DATENSCHUTZ') : null)]->getURL(),'class'=>"popup"));
$_block_repeat=true;
echo $_block_plugin165->render(array('href'=>$_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_DATENSCHUTZ') ? constant('LINKTYP_DATENSCHUTZ') : null)]->getURL(),'class'=>"popup"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'privacyNotice'),$_smarty_tpl ) );?>

                    <?php $_block_repeat=false;
echo $_block_plugin165->render(array('href'=>$_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_DATENSCHUTZ') ? constant('LINKTYP_DATENSCHUTZ') : null)]->getURL(),'class'=>"popup"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                </p>
            <?php
}
}
/* {/block 'productdetails-question-on-item-form-privacy'} */
/* {block 'productdetails-question-on-item-form-submit'} */
class Block_4273478460a50e8b0870f6_90069853 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"hidden",'name'=>"a",'value'=>$_smarty_tpl->tpl_vars['Artikel']->value->kArtikel),$_smarty_tpl ) );?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"hidden",'name'=>"show",'value'=>"1"),$_smarty_tpl ) );?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"hidden",'name'=>"fragezumprodukt",'value'=>"1"),$_smarty_tpl ) );?>

            <?php $_block_plugin166 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin166, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array());
$_block_repeat=true;
echo $_block_plugin166->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_block_plugin167 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin167, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('md'=>'auto','class'=>"ml-auto-util"));
$_block_repeat=true;
echo $_block_plugin167->render(array('md'=>'auto','class'=>"ml-auto-util"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php $_block_plugin168 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin168, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('type'=>"submit",'value'=>"1",'variant'=>"primary",'block'=>true));
$_block_repeat=true;
echo $_block_plugin168->render(array('type'=>"submit",'value'=>"1",'variant'=>"primary",'block'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'sendQuestion','section'=>'productDetails'),$_smarty_tpl ) );?>

                    <?php $_block_repeat=false;
echo $_block_plugin168->render(array('type'=>"submit",'value'=>"1",'variant'=>"primary",'block'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php $_block_repeat=false;
echo $_block_plugin167->render(array('md'=>'auto','class'=>"ml-auto-util"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php $_block_repeat=false;
echo $_block_plugin166->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php
}
}
/* {/block 'productdetails-question-on-item-form-submit'} */
/* {block 'productdetails-question-on-item-form'} */
class Block_170635689560a50e862bb7b7_45366272 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php ob_start();
if (!empty($_smarty_tpl->tpl_vars['Artikel']->value->cURLFull)) {
echo (string)$_smarty_tpl->tpl_vars['Artikel']->value->cURLFull;
if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_fragezumprodukt_anzeigen'] === 'Y') {
echo "#tab-questionOnItem";
}
} else {
echo (string)$_smarty_tpl->tpl_vars['ShopURL']->value;
echo "/";
}
$_prefixVariable59=ob_get_clean();
$_block_plugin149 = isset($_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0] : null;
if (!is_callable(array($_block_plugin149, 'render'))) {
throw new SmartyException('block tag \'form\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('action'=>$_prefixVariable59,'method'=>"post",'id'=>"article_question",'class'=>"jtl-validate",'slide'=>true));
$_block_repeat=true;
echo $_block_plugin149->render(array('action'=>$_prefixVariable59,'method'=>"post",'id'=>"article_question",'class'=>"jtl-validate",'slide'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_204340900360a50e862d1da1_22417212', 'productdetails-question-on-item-form-fieldset-contact', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_111755741760a50e8aa4d5d8_62478160', 'productdetails-question-on-item-form-fieldset-product-question', $this->tplIndex);
?>

        <?php if ((!(isset($_SESSION['bAnti_spam_already_checked'])) || $_SESSION['bAnti_spam_already_checked'] !== true) && (isset($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_captcha'])) && $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_captcha'] !== 'N' && empty($_SESSION['Kunde']->kKunde)) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_61335053860a50e8acad258_12720921', 'productdetails-question-on-item-form-captcha', $this->tplIndex);
?>

        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_fragezumprodukt_anzeigen'] === 'P' && (isset($_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_DATENSCHUTZ') ? constant('LINKTYP_DATENSCHUTZ') : null)]))) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_202789260360a50e8b03d894_86125598', 'productdetails-question-on-item-form-privacy', $this->tplIndex);
?>

        <?php }?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4273478460a50e8b0870f6_90069853', 'productdetails-question-on-item-form-submit', $this->tplIndex);
?>

    <?php $_block_repeat=false;
echo $_block_plugin149->render(array('action'=>$_prefixVariable59,'method'=>"post",'id'=>"article_question",'class'=>"jtl-validate",'slide'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php
}
}
/* {/block 'productdetails-question-on-item-form'} */
/* {block 'productdetails-question-on-item'} */
class Block_122193828560a50e862abb20_38718725 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'productdetails-question-on-item' => 
  array (
    0 => 'Block_122193828560a50e862abb20_38718725',
  ),
  'productdetails-question-on-item-alert' => 
  array (
    0 => 'Block_22950086960a50e862b5908_53009392',
  ),
  'productdetails-question-on-item-form' => 
  array (
    0 => 'Block_170635689560a50e862bb7b7_45366272',
  ),
  'productdetails-question-on-item-form-fieldset-contact' => 
  array (
    0 => 'Block_204340900360a50e862d1da1_22417212',
  ),
  'productdetails-question-on-item-form-legend-contact' => 
  array (
    0 => 'Block_43901211360a50e862d2cd3_61702303',
  ),
  'productdetails-question-on-item-form-salutation' => 
  array (
    0 => 'Block_49942111660a50e862d9256_06333791',
  ),
  'productdetails-question-on-item-form-name' => 
  array (
    0 => 'Block_85129877860a50e86a12197_69735684',
  ),
  'productdetails-question-on-item-form-firm' => 
  array (
    0 => 'Block_114999542860a50e86a30b33_19461520',
  ),
  'productdetails-question-on-item-form-email' => 
  array (
    0 => 'Block_5768162860a50e86e24dd6_96482872',
  ),
  'productdetails-question-on-item-form-mobil' => 
  array (
    0 => 'Block_191470065260a50e8a925143_64470876',
  ),
  'productdetails-question-on-item-form-fax' => 
  array (
    0 => 'Block_163419850960a50e8a964e88_95656526',
  ),
  'productdetails-question-on-item-form-fieldset-product-question' => 
  array (
    0 => 'Block_111755741760a50e8aa4d5d8_62478160',
  ),
  'productdetails-question-on-item-form-legend-product-question' => 
  array (
    0 => 'Block_1104614060a50e8aa4eb08_00039766',
  ),
  'productdetails-question-on-item-form-textarea' => 
  array (
    0 => 'Block_166241248960a50e8aa50a34_28013681',
  ),
  'productdetails-question-on-item-form-include-checkbox' => 
  array (
    0 => 'Block_75431347960a50e8ab9f818_70294203',
  ),
  'productdetails-question-on-item-form-captcha' => 
  array (
    0 => 'Block_61335053860a50e8acad258_12720921',
  ),
  'productdetails-question-on-item-form-privacy' => 
  array (
    0 => 'Block_202789260360a50e8b03d894_86125598',
  ),
  'productdetails-question-on-item-form-submit' => 
  array (
    0 => 'Block_4273478460a50e8b0870f6_90069853',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ((isset($_smarty_tpl->tpl_vars['fehlendeAngaben_fragezumprodukt']->value))) {?>
        <?php $_smarty_tpl->_assignInScope('fehlendeAngaben', $_smarty_tpl->tpl_vars['fehlendeAngaben_fragezumprodukt']->value);?>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['position']->value)) && $_smarty_tpl->tpl_vars['position']->value === 'popup') {?>
        <?php if (count($_smarty_tpl->tpl_vars['Artikelhinweise']->value) > 0) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_22950086960a50e862b5908_53009392', 'productdetails-question-on-item-alert', $this->tplIndex);
?>

        <?php }?>
    <?php }?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_170635689560a50e862bb7b7_45366272', 'productdetails-question-on-item-form', $this->tplIndex);
?>

<?php
}
}
/* {/block 'productdetails-question-on-item'} */
}
