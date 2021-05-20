<?php
/* Smarty version 3.1.38, created on 2021-05-18 11:41:27
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\productdetails\question_on_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a38bc7aa2516_30756188',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffa9e24d9c37e5697e7a1b71666a3a3e3c93fcb4' => 
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
function content_60a38bc7aa2516_30756188 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_203515105060a38bc79cbe11_32717576', 'productdetails-question-on-item');
?>

<?php }
/* {block 'productdetails-question-on-item-alert'} */
class Block_160997298860a38bc79d2494_54824679 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_block_plugin145 = isset($_smarty_tpl->smarty->registered_plugins['block']['alert'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['alert'][0][0] : null;
if (!is_callable(array($_block_plugin145, 'render'))) {
throw new SmartyException('block tag \'alert\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('alert', array('dismissable'=>true,'variant'=>"danger"));
$_block_repeat=true;
echo $_block_plugin145->render(array('dismissable'=>true,'variant'=>"danger"), null, $_smarty_tpl, $_block_repeat);
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
echo $_block_plugin145->render(array('dismissable'=>true,'variant'=>"danger"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
}
}
/* {/block 'productdetails-question-on-item-alert'} */
/* {block 'productdetails-question-on-item-form-legend-contact'} */
class Block_21025755860a38bc79e39c3_51641238 extends Smarty_Internal_Block
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
class Block_42148991060a38bc79f09c1_59995685 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php $_block_plugin148 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin148, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'md'=>6));
$_block_repeat=true;
echo $_block_plugin148->render(array('cols'=>12,'md'=>6), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'salutation','section'=>'account data'),$_smarty_tpl ) );
$_prefixVariable65=ob_get_clean();
ob_start();
if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_anrede'] === 'O') {
echo "<span class='optional'> - ";
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'optional'),$_smarty_tpl ) );
echo "</span>";
}
$_prefixVariable66=ob_get_clean();
$_block_plugin149 = isset($_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0] : null;
if (!is_callable(array($_block_plugin149, 'render'))) {
throw new SmartyException('block tag \'formgroup\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('formgroup', array('label-for'=>"salutation",'label'=>$_prefixVariable65.$_prefixVariable66));
$_block_repeat=true;
echo $_block_plugin149->render(array('label-for'=>"salutation",'label'=>$_prefixVariable65.$_prefixVariable66), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'emailadress'),$_smarty_tpl ) );
$_prefixVariable67=ob_get_clean();
$_block_plugin150 = isset($_smarty_tpl->smarty->registered_plugins['block']['select'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['select'][0][0] : null;
if (!is_callable(array($_block_plugin150, 'render'))) {
throw new SmartyException('block tag \'select\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('select', array('class'=>'custom-select','name'=>"anrede",'id'=>"salutation",'placeholder'=>$_prefixVariable67,'autocomplete'=>"honorific-prefix",'required'=>($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_anrede'] === 'Y')));
$_block_repeat=true;
echo $_block_plugin150->render(array('class'=>'custom-select','name'=>"anrede",'id'=>"salutation",'placeholder'=>$_prefixVariable67,'autocomplete'=>"honorific-prefix",'required'=>($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_anrede'] === 'Y')), null, $_smarty_tpl, $_block_repeat);
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
echo $_block_plugin150->render(array('class'=>'custom-select','name'=>"anrede",'id'=>"salutation",'placeholder'=>$_prefixVariable67,'autocomplete'=>"honorific-prefix",'required'=>($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_anrede'] === 'Y')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php $_block_repeat=false;
echo $_block_plugin149->render(array('label-for'=>"salutation",'label'=>$_prefixVariable65.$_prefixVariable66), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php $_block_repeat=false;
echo $_block_plugin148->render(array('cols'=>12,'md'=>6), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php
}
}
/* {/block 'productdetails-question-on-item-form-salutation'} */
/* {block 'productdetails-question-on-item-form-name'} */
class Block_121162074060a38bc7a0c447_98167986 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_vorname'] !== 'N') {?>
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
echo (($tmp = $_smarty_tpl->tpl_vars['Anfrage']->value->cVorname ?? null)===null||$tmp==='' ? null : $tmp);
$_prefixVariable68 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'firstName','section'=>'account data'),$_smarty_tpl ) );
$_prefixVariable69 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:snippets/form_group_simple.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('options'=>array('text','firstName','vorname',$_prefixVariable68,$_prefixVariable69,$_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_vorname'],null,'given-name')), 0, false);
?>
                                <?php $_block_repeat=false;
echo $_block_plugin151->render(array('cols'=>12,'md'=>6), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_nachname'] !== 'N') {?>
                                <?php $_block_plugin152 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin152, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'md'=>6));
$_block_repeat=true;
echo $_block_plugin152->render(array('cols'=>12,'md'=>6), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php ob_start();
echo (($tmp = $_smarty_tpl->tpl_vars['Anfrage']->value->cNachname ?? null)===null||$tmp==='' ? null : $tmp);
$_prefixVariable70 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'lastName','section'=>'account data'),$_smarty_tpl ) );
$_prefixVariable71 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:snippets/form_group_simple.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('options'=>array('text','lastName','nachname',$_prefixVariable70,$_prefixVariable71,$_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_nachname'],null,'family-name')), 0, true);
?>
                                <?php $_block_repeat=false;
echo $_block_plugin152->render(array('cols'=>12,'md'=>6), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php }?>
                        <?php
}
}
/* {/block 'productdetails-question-on-item-form-name'} */
/* {block 'productdetails-question-on-item-form-firm'} */
class Block_20499485560a38bc7a25d33_20351369 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php $_block_plugin153 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin153, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'md'=>6));
$_block_repeat=true;
echo $_block_plugin153->render(array('cols'=>12,'md'=>6), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php ob_start();
echo (($tmp = $_smarty_tpl->tpl_vars['Anfrage']->value->cFirma ?? null)===null||$tmp==='' ? null : $tmp);
$_prefixVariable72 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'firm','section'=>'account data'),$_smarty_tpl ) );
$_prefixVariable73 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:snippets/form_group_simple.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('options'=>array('text','company','firma',$_prefixVariable72,$_prefixVariable73,$_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_firma'],null,'organization')), 0, true);
?>
                            <?php $_block_repeat=false;
echo $_block_plugin153->render(array('cols'=>12,'md'=>6), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php
}
}
/* {/block 'productdetails-question-on-item-form-firm'} */
/* {block 'productdetails-question-on-item-form-email'} */
class Block_195018922160a38bc7a35871_58872385 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_block_plugin154 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin154, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12));
$_block_repeat=true;
echo $_block_plugin154->render(array('cols'=>12), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php ob_start();
echo (($tmp = $_smarty_tpl->tpl_vars['Anfrage']->value->cMail ?? null)===null||$tmp==='' ? null : $tmp);
$_prefixVariable74 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'email','section'=>'account data'),$_smarty_tpl ) );
$_prefixVariable75 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:snippets/form_group_simple.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('options'=>array('email','question_email','email',$_prefixVariable74,$_prefixVariable75,true,null,'email')), 0, true);
?>
                        <?php $_block_repeat=false;
echo $_block_plugin154->render(array('cols'=>12), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php
}
}
/* {/block 'productdetails-question-on-item-form-email'} */
/* {block 'productdetails-question-on-item-form-mobil'} */
class Block_31529596360a38bc7a40014_82202263 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_tel'] !== 'N') {?>
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
echo (($tmp = $_smarty_tpl->tpl_vars['Anfrage']->value->cTel ?? null)===null||$tmp==='' ? null : $tmp);
$_prefixVariable76 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'tel','section'=>'account data'),$_smarty_tpl ) );
$_prefixVariable77 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:snippets/form_group_simple.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('options'=>array('tel','tel','tel',$_prefixVariable76,$_prefixVariable77,$_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_tel'],null,'home tel')), 0, true);
?>
                                <?php $_block_repeat=false;
echo $_block_plugin155->render(array('cols'=>12,'md'=>6), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_mobil'] !== 'N') {?>
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
echo (($tmp = $_smarty_tpl->tpl_vars['Anfrage']->value->cMobil ?? null)===null||$tmp==='' ? null : $tmp);
$_prefixVariable78 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'mobile','section'=>'account data'),$_smarty_tpl ) );
$_prefixVariable79 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:snippets/form_group_simple.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('options'=>array('tel','mobile','mobil',$_prefixVariable78,$_prefixVariable79,$_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_mobil'],null,'mobile tel')), 0, true);
?>
                                <?php $_block_repeat=false;
echo $_block_plugin156->render(array('cols'=>12,'md'=>6), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php }?>
                        <?php
}
}
/* {/block 'productdetails-question-on-item-form-mobil'} */
/* {block 'productdetails-question-on-item-form-fax'} */
class Block_22734463660a38bc7a56732_88454182 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php $_block_plugin157 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin157, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('md'=>6));
$_block_repeat=true;
echo $_block_plugin157->render(array('md'=>6), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php ob_start();
echo (($tmp = $_smarty_tpl->tpl_vars['Anfrage']->value->cMobil ?? null)===null||$tmp==='' ? null : $tmp);
$_prefixVariable80 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'fax','section'=>'account data'),$_smarty_tpl ) );
$_prefixVariable81 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:snippets/form_group_simple.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('options'=>array('tel','fax','fax',$_prefixVariable80,$_prefixVariable81,$_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_fax'],null,'fax tel')), 0, true);
?>
                            <?php $_block_repeat=false;
echo $_block_plugin157->render(array('md'=>6), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php
}
}
/* {/block 'productdetails-question-on-item-form-fax'} */
/* {block 'productdetails-question-on-item-form-fieldset-contact'} */
class Block_156141381260a38bc79e2e13_11073925 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <fieldset>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21025755860a38bc79e39c3_51641238', 'productdetails-question-on-item-form-legend-contact', $this->tplIndex);
?>

                <?php $_block_plugin147 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin147, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array());
$_block_repeat=true;
echo $_block_plugin147->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_anrede'] !== 'N') {?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_42148991060a38bc79f09c1_59995685', 'productdetails-question-on-item-form-salutation', $this->tplIndex);
?>

                        <div class="w-100-util"></div>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_vorname'] !== 'N' || $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_nachname'] !== 'N') {?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121162074060a38bc7a0c447_98167986', 'productdetails-question-on-item-form-name', $this->tplIndex);
?>

                        <div class="w-100-util"></div>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_firma'] !== 'N') {?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20499485560a38bc7a25d33_20351369', 'productdetails-question-on-item-form-firm', $this->tplIndex);
?>

                    <?php }?>

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_195018922160a38bc7a35871_58872385', 'productdetails-question-on-item-form-email', $this->tplIndex);
?>

                    <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_tel'] !== 'N' || $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_mobil'] !== 'N') {?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_31529596360a38bc7a40014_82202263', 'productdetails-question-on-item-form-mobil', $this->tplIndex);
?>

                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_fax'] !== 'N') {?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_22734463660a38bc7a56732_88454182', 'productdetails-question-on-item-form-fax', $this->tplIndex);
?>

                    <?php }?>
                <?php $_block_repeat=false;
echo $_block_plugin147->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            </fieldset>
        <?php
}
}
/* {/block 'productdetails-question-on-item-form-fieldset-contact'} */
/* {block 'productdetails-question-on-item-form-legend-product-question'} */
class Block_77997520360a38bc7a61116_20476831 extends Smarty_Internal_Block
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
class Block_141047406860a38bc7a63067_25876995 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'question','section'=>'productDetails'),$_smarty_tpl ) );
$_prefixVariable82=ob_get_clean();
$_block_plugin158 = isset($_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0] : null;
if (!is_callable(array($_block_plugin158, 'render'))) {
throw new SmartyException('block tag \'formgroup\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('formgroup', array('label-for'=>"question",'label'=>$_prefixVariable82));
$_block_repeat=true;
echo $_block_plugin158->render(array('label-for'=>"question",'label'=>$_prefixVariable82), null, $_smarty_tpl, $_block_repeat);
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
$_prefixVariable83=ob_get_clean();
$_block_plugin159 = isset($_smarty_tpl->smarty->registered_plugins['block']['textarea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['textarea'][0][0] : null;
if (!is_callable(array($_block_plugin159, 'render'))) {
throw new SmartyException('block tag \'textarea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('textarea', array('name'=>"nachricht",'id'=>"question",'rows'=>"8",'required'=>true,'placeholder'=>" ",'class'=>$_prefixVariable83));
$_block_repeat=true;
echo $_block_plugin159->render(array('name'=>"nachricht",'id'=>"question",'rows'=>"8",'required'=>true,'placeholder'=>" ",'class'=>$_prefixVariable83), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ((isset($_smarty_tpl->tpl_vars['Anfrage']->value))) {
echo $_smarty_tpl->tpl_vars['Anfrage']->value->cNachricht;
}
$_block_repeat=false;
echo $_block_plugin159->render(array('name'=>"nachricht",'id'=>"question",'rows'=>"8",'required'=>true,'placeholder'=>" ",'class'=>$_prefixVariable83), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php $_block_repeat=false;
echo $_block_plugin158->render(array('label-for'=>"question",'label'=>$_prefixVariable82), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
}
}
/* {/block 'productdetails-question-on-item-form-textarea'} */
/* {block 'productdetails-question-on-item-form-include-checkbox'} */
class Block_89660185360a38bc7a744b3_77711081 extends Smarty_Internal_Block
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
class Block_206588717960a38bc7a60619_11259558 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <fieldset>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_77997520360a38bc7a61116_20476831', 'productdetails-question-on-item-form-legend-product-question', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_141047406860a38bc7a63067_25876995', 'productdetails-question-on-item-form-textarea', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_89660185360a38bc7a744b3_77711081', 'productdetails-question-on-item-form-include-checkbox', $this->tplIndex);
?>


        </fieldset>
        <?php
}
}
/* {/block 'productdetails-question-on-item-form-fieldset-product-question'} */
/* {block 'productdetails-question-on-item-form-captcha'} */
class Block_205244713660a38bc7a82b95_71304385 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_block_plugin160 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin160, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array());
$_block_repeat=true;
echo $_block_plugin160->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php ob_start();
if (!empty($_smarty_tpl->tpl_vars['fehlendeAngaben_fragezumprodukt']->value['captcha'])) {
echo "has-error";
}
$_prefixVariable84=ob_get_clean();
$_block_plugin161 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin161, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('class'=>$_prefixVariable84));
$_block_repeat=true;
echo $_block_plugin161->render(array('class'=>$_prefixVariable84), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['captchaMarkup'][0], array( array('getBody'=>true),$_smarty_tpl ) );?>

                    <?php $_block_repeat=false;
echo $_block_plugin161->render(array('class'=>$_prefixVariable84), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php $_block_repeat=false;
echo $_block_plugin160->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
}
}
/* {/block 'productdetails-question-on-item-form-captcha'} */
/* {block 'productdetails-question-on-item-form-privacy'} */
class Block_147963183260a38bc7a8bcc5_90021189 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <p class="privacy text-muted-util small">
                    <?php $_block_plugin162 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin162, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_DATENSCHUTZ') ? constant('LINKTYP_DATENSCHUTZ') : null)]->getURL(),'class'=>"popup"));
$_block_repeat=true;
echo $_block_plugin162->render(array('href'=>$_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_DATENSCHUTZ') ? constant('LINKTYP_DATENSCHUTZ') : null)]->getURL(),'class'=>"popup"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'privacyNotice'),$_smarty_tpl ) );?>

                    <?php $_block_repeat=false;
echo $_block_plugin162->render(array('href'=>$_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_DATENSCHUTZ') ? constant('LINKTYP_DATENSCHUTZ') : null)]->getURL(),'class'=>"popup"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                </p>
            <?php
}
}
/* {/block 'productdetails-question-on-item-form-privacy'} */
/* {block 'productdetails-question-on-item-form-submit'} */
class Block_208114329960a38bc7a90c61_68036908 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"hidden",'name'=>"a",'value'=>$_smarty_tpl->tpl_vars['Artikel']->value->kArtikel),$_smarty_tpl ) );?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"hidden",'name'=>"show",'value'=>"1"),$_smarty_tpl ) );?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"hidden",'name'=>"fragezumprodukt",'value'=>"1"),$_smarty_tpl ) );?>

            <?php $_block_plugin163 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin163, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array());
$_block_repeat=true;
echo $_block_plugin163->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_block_plugin164 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin164, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('md'=>'auto','class'=>"ml-auto-util"));
$_block_repeat=true;
echo $_block_plugin164->render(array('md'=>'auto','class'=>"ml-auto-util"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php $_block_plugin165 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin165, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('type'=>"submit",'value'=>"1",'variant'=>"primary",'block'=>true));
$_block_repeat=true;
echo $_block_plugin165->render(array('type'=>"submit",'value'=>"1",'variant'=>"primary",'block'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'sendQuestion','section'=>'productDetails'),$_smarty_tpl ) );?>

                    <?php $_block_repeat=false;
echo $_block_plugin165->render(array('type'=>"submit",'value'=>"1",'variant'=>"primary",'block'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php $_block_repeat=false;
echo $_block_plugin164->render(array('md'=>'auto','class'=>"ml-auto-util"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php $_block_repeat=false;
echo $_block_plugin163->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php
}
}
/* {/block 'productdetails-question-on-item-form-submit'} */
/* {block 'productdetails-question-on-item-form'} */
class Block_71307631660a38bc79d92d2_73518552 extends Smarty_Internal_Block
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
$_prefixVariable64=ob_get_clean();
$_block_plugin146 = isset($_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0] : null;
if (!is_callable(array($_block_plugin146, 'render'))) {
throw new SmartyException('block tag \'form\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('action'=>$_prefixVariable64,'method'=>"post",'id'=>"article_question",'class'=>"jtl-validate",'slide'=>true));
$_block_repeat=true;
echo $_block_plugin146->render(array('action'=>$_prefixVariable64,'method'=>"post",'id'=>"article_question",'class'=>"jtl-validate",'slide'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_156141381260a38bc79e2e13_11073925', 'productdetails-question-on-item-form-fieldset-contact', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_206588717960a38bc7a60619_11259558', 'productdetails-question-on-item-form-fieldset-product-question', $this->tplIndex);
?>

        <?php if ((!(isset($_SESSION['bAnti_spam_already_checked'])) || $_SESSION['bAnti_spam_already_checked'] !== true) && (isset($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_captcha'])) && $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_captcha'] !== 'N' && empty($_SESSION['Kunde']->kKunde)) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205244713660a38bc7a82b95_71304385', 'productdetails-question-on-item-form-captcha', $this->tplIndex);
?>

        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_fragezumprodukt_anzeigen'] === 'P' && (isset($_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_DATENSCHUTZ') ? constant('LINKTYP_DATENSCHUTZ') : null)]))) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_147963183260a38bc7a8bcc5_90021189', 'productdetails-question-on-item-form-privacy', $this->tplIndex);
?>

        <?php }?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_208114329960a38bc7a90c61_68036908', 'productdetails-question-on-item-form-submit', $this->tplIndex);
?>

    <?php $_block_repeat=false;
echo $_block_plugin146->render(array('action'=>$_prefixVariable64,'method'=>"post",'id'=>"article_question",'class'=>"jtl-validate",'slide'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php
}
}
/* {/block 'productdetails-question-on-item-form'} */
/* {block 'productdetails-question-on-item'} */
class Block_203515105060a38bc79cbe11_32717576 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'productdetails-question-on-item' => 
  array (
    0 => 'Block_203515105060a38bc79cbe11_32717576',
  ),
  'productdetails-question-on-item-alert' => 
  array (
    0 => 'Block_160997298860a38bc79d2494_54824679',
  ),
  'productdetails-question-on-item-form' => 
  array (
    0 => 'Block_71307631660a38bc79d92d2_73518552',
  ),
  'productdetails-question-on-item-form-fieldset-contact' => 
  array (
    0 => 'Block_156141381260a38bc79e2e13_11073925',
  ),
  'productdetails-question-on-item-form-legend-contact' => 
  array (
    0 => 'Block_21025755860a38bc79e39c3_51641238',
  ),
  'productdetails-question-on-item-form-salutation' => 
  array (
    0 => 'Block_42148991060a38bc79f09c1_59995685',
  ),
  'productdetails-question-on-item-form-name' => 
  array (
    0 => 'Block_121162074060a38bc7a0c447_98167986',
  ),
  'productdetails-question-on-item-form-firm' => 
  array (
    0 => 'Block_20499485560a38bc7a25d33_20351369',
  ),
  'productdetails-question-on-item-form-email' => 
  array (
    0 => 'Block_195018922160a38bc7a35871_58872385',
  ),
  'productdetails-question-on-item-form-mobil' => 
  array (
    0 => 'Block_31529596360a38bc7a40014_82202263',
  ),
  'productdetails-question-on-item-form-fax' => 
  array (
    0 => 'Block_22734463660a38bc7a56732_88454182',
  ),
  'productdetails-question-on-item-form-fieldset-product-question' => 
  array (
    0 => 'Block_206588717960a38bc7a60619_11259558',
  ),
  'productdetails-question-on-item-form-legend-product-question' => 
  array (
    0 => 'Block_77997520360a38bc7a61116_20476831',
  ),
  'productdetails-question-on-item-form-textarea' => 
  array (
    0 => 'Block_141047406860a38bc7a63067_25876995',
  ),
  'productdetails-question-on-item-form-include-checkbox' => 
  array (
    0 => 'Block_89660185360a38bc7a744b3_77711081',
  ),
  'productdetails-question-on-item-form-captcha' => 
  array (
    0 => 'Block_205244713660a38bc7a82b95_71304385',
  ),
  'productdetails-question-on-item-form-privacy' => 
  array (
    0 => 'Block_147963183260a38bc7a8bcc5_90021189',
  ),
  'productdetails-question-on-item-form-submit' => 
  array (
    0 => 'Block_208114329960a38bc7a90c61_68036908',
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_160997298860a38bc79d2494_54824679', 'productdetails-question-on-item-alert', $this->tplIndex);
?>

        <?php }?>
    <?php }?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_71307631660a38bc79d92d2_73518552', 'productdetails-question-on-item-form', $this->tplIndex);
?>

<?php
}
}
/* {/block 'productdetails-question-on-item'} */
}
