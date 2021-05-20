<?php
/* Smarty version 3.1.38, created on 2021-05-18 11:41:22
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\productdetails\tabs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a38bc20f7af9_32720974',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2b55881950599ad678877de29e5196717c63111' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\productdetails\\tabs.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:productdetails/mediafile.tpl' => 4,
    'file:productdetails/attributes.tpl' => 2,
    'file:productdetails/download.tpl' => 2,
    'file:productdetails/reviews.tpl' => 2,
    'file:productdetails/question_on_item.tpl' => 2,
    'file:productdetails/price_history.tpl' => 2,
    'file:productdetails/availability_notification_form.tpl' => 2,
  ),
),false)) {
function content_60a38bc20f7af9_32720974 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_157586506360a38bc1de6956_77898270', 'productdetails-tabs');
?>

<?php }
/* {block 'productdetails-tabs-settings'} */
class Block_210582794560a38bc1de76c3_25594276 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\includes\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

        <?php $_smarty_tpl->_assignInScope('tabanzeige', $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_tabs_nutzen'] !== 'N');?>
        <?php $_smarty_tpl->_assignInScope('showProductWeight', false);?>
        <?php $_smarty_tpl->_assignInScope('showShippingWeight', false);?>
        <?php if ((isset($_smarty_tpl->tpl_vars['Artikel']->value->cArtikelgewicht)) && $_smarty_tpl->tpl_vars['Artikel']->value->fArtikelgewicht > 0 && $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_artikelgewicht_anzeigen'] === 'Y') {?>
            <?php $_smarty_tpl->_assignInScope('showProductWeight', true);?>
        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['Artikel']->value->cGewicht)) && $_smarty_tpl->tpl_vars['Artikel']->value->fGewicht > 0 && $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_gewicht_anzeigen'] === 'Y') {?>
            <?php $_smarty_tpl->_assignInScope('showShippingWeight', true);?>
        <?php }?>
        <?php $_smarty_tpl->_assignInScope('dimension', $_smarty_tpl->tpl_vars['Artikel']->value->getDimension());?>
        <?php $_smarty_tpl->_assignInScope('funcAttr', (($tmp = $_smarty_tpl->tpl_vars['Artikel']->value->FunktionsAttribute[(defined('FKT_ATTRIBUT_ATTRIBUTEANHAENGEN') ? constant('FKT_ATTRIBUT_ATTRIBUTEANHAENGEN') : null)] ?? null)===null||$tmp==='' ? 0 : $tmp));?>
        <?php $_smarty_tpl->_assignInScope('showAttributesTable', ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['merkmale_anzeigen'] === 'Y' && !empty($_smarty_tpl->tpl_vars['Artikel']->value->oMerkmale_arr) || $_smarty_tpl->tpl_vars['showProductWeight']->value || $_smarty_tpl->tpl_vars['showShippingWeight']->value || $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_abmessungen_anzeigen'] === 'Y' && (!empty($_smarty_tpl->tpl_vars['dimension']->value['length']) || !empty($_smarty_tpl->tpl_vars['dimension']->value['width']) || !empty($_smarty_tpl->tpl_vars['dimension']->value['height'])) || (isset($_smarty_tpl->tpl_vars['Artikel']->value->cMasseinheitName)) && (isset($_smarty_tpl->tpl_vars['Artikel']->value->fMassMenge)) && $_smarty_tpl->tpl_vars['Artikel']->value->fMassMenge > 0 && $_smarty_tpl->tpl_vars['Artikel']->value->cTeilbar !== 'Y' && ($_smarty_tpl->tpl_vars['Artikel']->value->fAbnahmeintervall == 0 || $_smarty_tpl->tpl_vars['Artikel']->value->fAbnahmeintervall == 1) || ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_attribute_anhaengen'] === 'Y' || $_smarty_tpl->tpl_vars['funcAttr']->value == 1) && !empty($_smarty_tpl->tpl_vars['Artikel']->value->Attribute)));?>
        <?php $_smarty_tpl->_assignInScope('useDescriptionWithMediaGroup', ((($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['mediendatei_anzeigen'] === 'YA' && $_smarty_tpl->tpl_vars['Artikel']->value->cMedienDateiAnzeige !== 'tab') || $_smarty_tpl->tpl_vars['Artikel']->value->cMedienDateiAnzeige === 'beschreibung') && !empty($_smarty_tpl->tpl_vars['Artikel']->value->getMediaTypes())));?>
        <?php $_smarty_tpl->_assignInScope('useDescription', ((strlen($_smarty_tpl->tpl_vars['Artikel']->value->cBeschreibung) > 0) || $_smarty_tpl->tpl_vars['useDescriptionWithMediaGroup']->value || $_smarty_tpl->tpl_vars['showAttributesTable']->value));?>
        <?php $_smarty_tpl->_assignInScope('useDownloads', ((isset($_smarty_tpl->tpl_vars['Artikel']->value->oDownload_arr)) && count($_smarty_tpl->tpl_vars['Artikel']->value->oDownload_arr) > 0));?>
        <?php $_smarty_tpl->_assignInScope('useVotes', $_smarty_tpl->tpl_vars['Einstellungen']->value['bewertung']['bewertung_anzeigen'] === 'Y');?>
        <?php $_smarty_tpl->_assignInScope('useQuestionOnItem', $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_fragezumprodukt_anzeigen'] === 'Y');?>
        <?php $_smarty_tpl->_assignInScope('usePriceFlow', ($_smarty_tpl->tpl_vars['Einstellungen']->value['preisverlauf']['preisverlauf_anzeigen'] === 'Y' && $_smarty_tpl->tpl_vars['bPreisverlauf']->value));?>
        <?php $_smarty_tpl->_assignInScope('useAvailabilityNotification', ($_smarty_tpl->tpl_vars['verfuegbarkeitsBenachrichtigung']->value !== 0));?>
        <?php $_smarty_tpl->_assignInScope('useMediaGroup', ((($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['mediendatei_anzeigen'] === 'YM' && $_smarty_tpl->tpl_vars['Artikel']->value->cMedienDateiAnzeige !== 'beschreibung') || $_smarty_tpl->tpl_vars['Artikel']->value->cMedienDateiAnzeige === 'tab') && !empty($_smarty_tpl->tpl_vars['Artikel']->value->getMediaTypes())));?>
        <?php $_smarty_tpl->_assignInScope('hasVotesHash', (isset($_GET['ratings_nPage'])) || (isset($_GET['bewertung_anzeigen'])) || (isset($_GET['ratings_nItemsPerPage'])) || (isset($_GET['ratings_nSortByDir'])) || (isset($_GET['btgsterne'])));?>
        <?php
$_smarty_tpl->tpl_vars['__smarty_section_iterator'] = new Smarty_Variable(array());
if (true) {
for ($__section_iterator_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_iterator']->value['index'] = 1; $__section_iterator_0_iteration <= 9; $__section_iterator_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_iterator']->value['index']++){
?>
            <?php $_smarty_tpl->_assignInScope('tab', 'tab');?>
            <?php $_smarty_tpl->_assignInScope('tabname', (($_smarty_tpl->tpl_vars['tab']->value).((isset($_smarty_tpl->tpl_vars['__smarty_section_iterator']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_iterator']->value['index'] : null))).(" name"));?>
            <?php $_smarty_tpl->_assignInScope('tabinhalt', (($_smarty_tpl->tpl_vars['tab']->value).((isset($_smarty_tpl->tpl_vars['__smarty_section_iterator']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_iterator']->value['index'] : null))).(" inhalt"));?>
            <?php if ((isset($_smarty_tpl->tpl_vars['Artikel']->value->AttributeAssoc[$_smarty_tpl->tpl_vars['tabname']->value])) && $_smarty_tpl->tpl_vars['Artikel']->value->AttributeAssoc[$_smarty_tpl->tpl_vars['tabname']->value] && $_smarty_tpl->tpl_vars['Artikel']->value->AttributeAssoc[$_smarty_tpl->tpl_vars['tabinhalt']->value]) {?>
                <?php ob_start();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['tabname']->value,' ','-');
$_prefixVariable40 = ob_get_clean();
ob_start();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['tabname']->value,' ','-');
$_prefixVariable41 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['Artikel']->value->AttributeAssoc[$_smarty_tpl->tpl_vars['tabname']->value];
$_prefixVariable42 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['Artikel']->value->AttributeAssoc[$_smarty_tpl->tpl_vars['tabinhalt']->value];
$_prefixVariable43 = ob_get_clean();
$_tmp_array = isset($_smarty_tpl->tpl_vars['separatedTabs']) ? $_smarty_tpl->tpl_vars['separatedTabs']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_prefixVariable40] = array('id'=>$_prefixVariable41,'name'=>$_prefixVariable42,'content'=>$_prefixVariable43);
$_smarty_tpl->_assignInScope('separatedTabs', $_tmp_array);?>
            <?php }?>
        <?php
}
}
?>
        <?php $_smarty_tpl->_assignInScope('setActiveClass', array('description'=>(!$_smarty_tpl->tpl_vars['hasVotesHash']->value),'downloads'=>(!$_smarty_tpl->tpl_vars['hasVotesHash']->value && !$_smarty_tpl->tpl_vars['useDescription']->value),'separatedTabs'=>(!$_smarty_tpl->tpl_vars['hasVotesHash']->value && !$_smarty_tpl->tpl_vars['useDescription']->value && !$_smarty_tpl->tpl_vars['useDownloads']->value),'votes'=>($_smarty_tpl->tpl_vars['hasVotesHash']->value || !$_smarty_tpl->tpl_vars['useDescription']->value && !$_smarty_tpl->tpl_vars['useDownloads']->value && empty($_smarty_tpl->tpl_vars['separatedTabs']->value)),'questionOnItem'=>(!$_smarty_tpl->tpl_vars['hasVotesHash']->value && !$_smarty_tpl->tpl_vars['useDescription']->value && !$_smarty_tpl->tpl_vars['useDownloads']->value && empty($_smarty_tpl->tpl_vars['separatedTabs']->value) && !$_smarty_tpl->tpl_vars['useVotes']->value),'priceFlow'=>(!$_smarty_tpl->tpl_vars['useVotes']->value && !$_smarty_tpl->tpl_vars['hasVotesHash']->value && !$_smarty_tpl->tpl_vars['useDescription']->value && !$_smarty_tpl->tpl_vars['useDownloads']->value && empty($_smarty_tpl->tpl_vars['separatedTabs']->value) && !$_smarty_tpl->tpl_vars['useQuestionOnItem']->value),'availabilityNotification'=>(!$_smarty_tpl->tpl_vars['useVotes']->value && !$_smarty_tpl->tpl_vars['hasVotesHash']->value && !$_smarty_tpl->tpl_vars['useDescription']->value && !$_smarty_tpl->tpl_vars['useDownloads']->value && empty($_smarty_tpl->tpl_vars['separatedTabs']->value) && !$_smarty_tpl->tpl_vars['useQuestionOnItem']->value && !$_smarty_tpl->tpl_vars['usePriceFlow']->value),'mediaGroup'=>(!$_smarty_tpl->tpl_vars['useVotes']->value && !$_smarty_tpl->tpl_vars['hasVotesHash']->value && !$_smarty_tpl->tpl_vars['useDescription']->value && !$_smarty_tpl->tpl_vars['useDownloads']->value && empty($_smarty_tpl->tpl_vars['separatedTabs']->value) && !$_smarty_tpl->tpl_vars['useQuestionOnItem']->value && !$_smarty_tpl->tpl_vars['usePriceFlow']->value && !$_smarty_tpl->tpl_vars['useAvailabilityNotification']->value)));?>
    <?php
}
}
/* {/block 'productdetails-tabs-settings'} */
/* {block 'tab-description-media-types'} */
class Block_49245564460a38bc1f23638_01034596 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_desc'),$_smarty_tpl ) );?>

                                            <div class="desc">
                                                <p><?php echo $_smarty_tpl->tpl_vars['Artikel']->value->cBeschreibung;?>
</p>
                                                <?php if ($_smarty_tpl->tpl_vars['useDescriptionWithMediaGroup']->value) {?>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Artikel']->value->getMediaTypes(), 'mediaType');
$_smarty_tpl->tpl_vars['mediaType']->index = -1;
$_smarty_tpl->tpl_vars['mediaType']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mediaType']->value) {
$_smarty_tpl->tpl_vars['mediaType']->do_else = false;
$_smarty_tpl->tpl_vars['mediaType']->index++;
$_smarty_tpl->tpl_vars['mediaType']->first = !$_smarty_tpl->tpl_vars['mediaType']->index;
$__foreach_mediaType_34_saved = $_smarty_tpl->tpl_vars['mediaType'];
?>
                                                        <div class="h3"><?php echo $_smarty_tpl->tpl_vars['mediaType']->value->name;?>
</div>
                                                        <div class="media">
                                                            <?php $_smarty_tpl->_subTemplateRender('file:productdetails/mediafile.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                                        </div>
                                                    <?php
$_smarty_tpl->tpl_vars['mediaType'] = $__foreach_mediaType_34_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                <?php }?>
                                            </div>
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_after_desc'),$_smarty_tpl ) );?>

                                        <?php
}
}
/* {/block 'tab-description-media-types'} */
/* {block 'productdetails-tabs-tab-description-include-attributes'} */
class Block_128888799860a38bc1f2f7a8_65392936 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <?php $_smarty_tpl->_subTemplateRender('file:productdetails/attributes.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tplscope'=>'details','showProductWeight'=>$_smarty_tpl->tpl_vars['showProductWeight']->value,'showShippingWeight'=>$_smarty_tpl->tpl_vars['showShippingWeight']->value,'dimension'=>$_smarty_tpl->tpl_vars['dimension']->value,'showAttributesTable'=>$_smarty_tpl->tpl_vars['showAttributesTable']->value), 0, false);
?>
                                        <?php
}
}
/* {/block 'productdetails-tabs-tab-description-include-attributes'} */
/* {block 'productdetails-tabs-tab-content'} */
class Block_92748621760a38bc1f22b93_78874130 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_49245564460a38bc1f23638_01034596', 'tab-description-media-types', $this->tplIndex);
?>

                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_128888799860a38bc1f2f7a8_65392936', 'productdetails-tabs-tab-description-include-attributes', $this->tplIndex);
?>

                                    <?php
}
}
/* {/block 'productdetails-tabs-tab-content'} */
/* {block 'productdetails-tabs-tab-description'} */
class Block_43603836960a38bc1f1edb4_05397668 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"description",'section'=>"productDetails"),$_smarty_tpl ) );
$_prefixVariable44=ob_get_clean();
$_block_plugin81 = isset($_smarty_tpl->smarty->registered_plugins['block']['tab'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['tab'][0][0] : null;
if (!is_callable(array($_block_plugin81, 'render'))) {
throw new SmartyException('block tag \'tab\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('title'=>$_prefixVariable44,'active'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['description'],'id'=>"description"));
$_block_repeat=true;
echo $_block_plugin81->render(array('title'=>$_prefixVariable44,'active'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['description'],'id'=>"description"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_92748621760a38bc1f22b93_78874130', 'productdetails-tabs-tab-content', $this->tplIndex);
?>

                                <?php $_block_repeat=false;
echo $_block_plugin81->render(array('title'=>$_prefixVariable44,'active'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['description'],'id'=>"description"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php
}
}
/* {/block 'productdetails-tabs-tab-description'} */
/* {block 'productdetails-tabs-tab-downloads'} */
class Block_170863222760a38bc1f34fc3_41981546 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('section'=>"productDownloads",'key'=>"downloadSection"),$_smarty_tpl ) );
$_prefixVariable45=ob_get_clean();
$_block_plugin82 = isset($_smarty_tpl->smarty->registered_plugins['block']['tab'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['tab'][0][0] : null;
if (!is_callable(array($_block_plugin82, 'render'))) {
throw new SmartyException('block tag \'tab\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('title'=>$_prefixVariable45,'active'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['downloads'],'id'=>"downloads"));
$_block_repeat=true;
echo $_block_plugin82->render(array('title'=>$_prefixVariable45,'active'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['downloads'],'id'=>"downloads"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php $_smarty_tpl->_subTemplateRender('file:productdetails/download.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                <?php $_block_repeat=false;
echo $_block_plugin82->render(array('title'=>$_prefixVariable45,'active'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['downloads'],'id'=>"downloads"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php
}
}
/* {/block 'productdetails-tabs-tab-downloads'} */
/* {block 'productdetails-tabs-tab-separated-tabs'} */
class Block_193227721260a38bc1f3bd67_14823205 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['separatedTabs']->value, 'separatedTab');
$_smarty_tpl->tpl_vars['separatedTab']->index = -1;
$_smarty_tpl->tpl_vars['separatedTab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['separatedTab']->value) {
$_smarty_tpl->tpl_vars['separatedTab']->do_else = false;
$_smarty_tpl->tpl_vars['separatedTab']->index++;
$_smarty_tpl->tpl_vars['separatedTab']->first = !$_smarty_tpl->tpl_vars['separatedTab']->index;
$__foreach_separatedTab_35_saved = $_smarty_tpl->tpl_vars['separatedTab'];
?>
                                    <?php ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'seofy' ][ 0 ], array( $_smarty_tpl->tpl_vars['separatedTab']->value['name'] ));
$_prefixVariable46=ob_get_clean();
$_block_plugin83 = isset($_smarty_tpl->smarty->registered_plugins['block']['tab'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['tab'][0][0] : null;
if (!is_callable(array($_block_plugin83, 'render'))) {
throw new SmartyException('block tag \'tab\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('title'=>$_smarty_tpl->tpl_vars['separatedTab']->value['name'],'active'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['separatedTabs'] && $_smarty_tpl->tpl_vars['separatedTab']->first,'id'=>$_prefixVariable46));
$_block_repeat=true;
echo $_block_plugin83->render(array('title'=>$_smarty_tpl->tpl_vars['separatedTab']->value['name'],'active'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['separatedTabs'] && $_smarty_tpl->tpl_vars['separatedTab']->first,'id'=>$_prefixVariable46), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php echo $_smarty_tpl->tpl_vars['separatedTab']->value['content'];?>

                                    <?php $_block_repeat=false;
echo $_block_plugin83->render(array('title'=>$_smarty_tpl->tpl_vars['separatedTab']->value['name'],'active'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['separatedTabs'] && $_smarty_tpl->tpl_vars['separatedTab']->first,'id'=>$_prefixVariable46), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php
$_smarty_tpl->tpl_vars['separatedTab'] = $__foreach_separatedTab_35_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php
}
}
/* {/block 'productdetails-tabs-tab-separated-tabs'} */
/* {block 'productdetails-tabs-tab-votes'} */
class Block_1610567760a38bc2003174_06213316 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'Votes'),$_smarty_tpl ) );
$_prefixVariable47=ob_get_clean();
$_block_plugin84 = isset($_smarty_tpl->smarty->registered_plugins['block']['tab'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['tab'][0][0] : null;
if (!is_callable(array($_block_plugin84, 'render'))) {
throw new SmartyException('block tag \'tab\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('title'=>$_prefixVariable47,'active'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['votes'],'id'=>"votes"));
$_block_repeat=true;
echo $_block_plugin84->render(array('title'=>$_prefixVariable47,'active'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['votes'],'id'=>"votes"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php $_smarty_tpl->_subTemplateRender('file:productdetails/reviews.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stars'=>$_smarty_tpl->tpl_vars['Artikel']->value->Bewertungen->oBewertungGesamt->fDurchschnitt), 0, false);
?>
                                <?php $_block_repeat=false;
echo $_block_plugin84->render(array('title'=>$_prefixVariable47,'active'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['votes'],'id'=>"votes"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php
}
}
/* {/block 'productdetails-tabs-tab-votes'} */
/* {block 'productdetails-tabs-tab-question-on-item'} */
class Block_36305840360a38bc200b678_86922981 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"productQuestion",'section'=>"productDetails"),$_smarty_tpl ) );
$_prefixVariable48=ob_get_clean();
$_block_plugin85 = isset($_smarty_tpl->smarty->registered_plugins['block']['tab'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['tab'][0][0] : null;
if (!is_callable(array($_block_plugin85, 'render'))) {
throw new SmartyException('block tag \'tab\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('title'=>$_prefixVariable48,'active'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['questionOnItem'],'id'=>"questionOnItem"));
$_block_repeat=true;
echo $_block_plugin85->render(array('title'=>$_prefixVariable48,'active'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['questionOnItem'],'id'=>"questionOnItem"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php $_smarty_tpl->_subTemplateRender('file:productdetails/question_on_item.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('position'=>"tab"), 0, false);
?>
                                <?php $_block_repeat=false;
echo $_block_plugin85->render(array('title'=>$_prefixVariable48,'active'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['questionOnItem'],'id'=>"questionOnItem"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php
}
}
/* {/block 'productdetails-tabs-tab-question-on-item'} */
/* {block 'productdetails-tabs-tab-price-flow'} */
class Block_174622767760a38bc2012218_59644885 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'priceFlow','section'=>'productDetails'),$_smarty_tpl ) );
$_prefixVariable49=ob_get_clean();
$_block_plugin86 = isset($_smarty_tpl->smarty->registered_plugins['block']['tab'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['tab'][0][0] : null;
if (!is_callable(array($_block_plugin86, 'render'))) {
throw new SmartyException('block tag \'tab\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('title'=>$_prefixVariable49,'active'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['priceFlow'],'id'=>"priceFlow"));
$_block_repeat=true;
echo $_block_plugin86->render(array('title'=>$_prefixVariable49,'active'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['priceFlow'],'id'=>"priceFlow"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php $_smarty_tpl->_subTemplateRender('file:productdetails/price_history.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                <?php $_block_repeat=false;
echo $_block_plugin86->render(array('title'=>$_prefixVariable49,'active'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['priceFlow'],'id'=>"priceFlow"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php
}
}
/* {/block 'productdetails-tabs-tab-price-flow'} */
/* {block 'productdetails-tabs-tab-availability-notification'} */
class Block_75561501860a38bc2017c36_70420054 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'notifyMeWhenProductAvailableAgain'),$_smarty_tpl ) );
$_prefixVariable50=ob_get_clean();
$_block_plugin87 = isset($_smarty_tpl->smarty->registered_plugins['block']['tab'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['tab'][0][0] : null;
if (!is_callable(array($_block_plugin87, 'render'))) {
throw new SmartyException('block tag \'tab\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('title'=>$_prefixVariable50,'active'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['availabilityNotification'],'id'=>"tab-availabilityNotification"));
$_block_repeat=true;
echo $_block_plugin87->render(array('title'=>$_prefixVariable50,'active'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['availabilityNotification'],'id'=>"tab-availabilityNotification"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php $_smarty_tpl->_subTemplateRender('file:productdetails/availability_notification_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('position'=>'tab','tplscope'=>'artikeldetails'), 0, false);
?>
                                <?php $_block_repeat=false;
echo $_block_plugin87->render(array('title'=>$_prefixVariable50,'active'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['availabilityNotification'],'id'=>"tab-availabilityNotification"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php
}
}
/* {/block 'productdetails-tabs-tab-availability-notification'} */
/* {block 'productdetails-tabs-tab-mediagroup'} */
class Block_8760293160a38bc201dad9_05414687 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Artikel']->value->getMediaTypes(), 'mediaType');
$_smarty_tpl->tpl_vars['mediaType']->index = -1;
$_smarty_tpl->tpl_vars['mediaType']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mediaType']->value) {
$_smarty_tpl->tpl_vars['mediaType']->do_else = false;
$_smarty_tpl->tpl_vars['mediaType']->index++;
$_smarty_tpl->tpl_vars['mediaType']->first = !$_smarty_tpl->tpl_vars['mediaType']->index;
$__foreach_mediaType_36_saved = $_smarty_tpl->tpl_vars['mediaType'];
?>
                                    <?php $_smarty_tpl->_assignInScope('cMedienTypId', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'seofy' ][ 0 ], array( $_smarty_tpl->tpl_vars['mediaType']->value->name )));?>
                                    <?php $_block_plugin88 = isset($_smarty_tpl->smarty->registered_plugins['block']['tab'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['tab'][0][0] : null;
if (!is_callable(array($_block_plugin88, 'render'))) {
throw new SmartyException('block tag \'tab\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('title'=>((string)$_smarty_tpl->tpl_vars['mediaType']->value->name)." (".((string)$_smarty_tpl->tpl_vars['mediaType']->value->count).")",'active'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['mediaGroup'] && $_smarty_tpl->tpl_vars['mediaType']->first,'id'=>((string)$_smarty_tpl->tpl_vars['cMedienTypId']->value)));
$_block_repeat=true;
echo $_block_plugin88->render(array('title'=>((string)$_smarty_tpl->tpl_vars['mediaType']->value->name)." (".((string)$_smarty_tpl->tpl_vars['mediaType']->value->count).")",'active'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['mediaGroup'] && $_smarty_tpl->tpl_vars['mediaType']->first,'id'=>((string)$_smarty_tpl->tpl_vars['cMedienTypId']->value)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php $_smarty_tpl->_subTemplateRender('file:productdetails/mediafile.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                    <?php $_block_repeat=false;
echo $_block_plugin88->render(array('title'=>((string)$_smarty_tpl->tpl_vars['mediaType']->value->name)." (".((string)$_smarty_tpl->tpl_vars['mediaType']->value->count).")",'active'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['mediaGroup'] && $_smarty_tpl->tpl_vars['mediaType']->first,'id'=>((string)$_smarty_tpl->tpl_vars['cMedienTypId']->value)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php
$_smarty_tpl->tpl_vars['mediaType'] = $__foreach_mediaType_36_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php
}
}
/* {/block 'productdetails-tabs-tab-mediagroup'} */
/* {block 'productdetails-tabs-tabs'} */
class Block_78487735960a38bc1f1b437_73829382 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_tabs','inContainer'=>false),$_smarty_tpl ) );?>

                    <?php $_block_plugin79 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin79, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array());
$_block_repeat=true;
echo $_block_plugin79->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <nav class="tab-navigation">
                        <?php $_block_plugin80 = isset($_smarty_tpl->smarty->registered_plugins['block']['tabs'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['tabs'][0][0] : null;
if (!is_callable(array($_block_plugin80, 'render'))) {
throw new SmartyException('block tag \'tabs\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tabs', array('id'=>"product-tabs"));
$_block_repeat=true;
echo $_block_plugin80->render(array('id'=>"product-tabs"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php if ($_smarty_tpl->tpl_vars['useDescription']->value) {?>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_43603836960a38bc1f1edb4_05397668', 'productdetails-tabs-tab-description', $this->tplIndex);
?>

                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['useDownloads']->value) {?>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_170863222760a38bc1f34fc3_41981546', 'productdetails-tabs-tab-downloads', $this->tplIndex);
?>

                        <?php }?>

                        <?php if (!empty($_smarty_tpl->tpl_vars['separatedTabs']->value)) {?>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_193227721260a38bc1f3bd67_14823205', 'productdetails-tabs-tab-separated-tabs', $this->tplIndex);
?>

                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['useVotes']->value) {?>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1610567760a38bc2003174_06213316', 'productdetails-tabs-tab-votes', $this->tplIndex);
?>

                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['useQuestionOnItem']->value) {?>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36305840360a38bc200b678_86922981', 'productdetails-tabs-tab-question-on-item', $this->tplIndex);
?>

                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['usePriceFlow']->value) {?>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_174622767760a38bc2012218_59644885', 'productdetails-tabs-tab-price-flow', $this->tplIndex);
?>

                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['useAvailabilityNotification']->value) {?>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_75561501860a38bc2017c36_70420054', 'productdetails-tabs-tab-availability-notification', $this->tplIndex);
?>

                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['useMediaGroup']->value) {?>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8760293160a38bc201dad9_05414687', 'productdetails-tabs-tab-mediagroup', $this->tplIndex);
?>

                        <?php }?>
                        <?php $_block_repeat=false;
echo $_block_plugin80->render(array('id'=>"product-tabs"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        </nav>
                    <?php $_block_repeat=false;
echo $_block_plugin79->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php
}
}
/* {/block 'productdetails-tabs-tabs'} */
/* {block 'productdetails-tabs-description-include-mediafile'} */
class Block_4327261060a38bc2046551_76613529 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                                            <?php $_smarty_tpl->_subTemplateRender('file:productdetails/mediafile.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                                                        <?php
}
}
/* {/block 'productdetails-tabs-description-include-mediafile'} */
/* {block 'productdetails-tabs-card-description-content'} */
class Block_102761030860a38bc203d992_79406212 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_desc'),$_smarty_tpl ) );?>

                                                        <div class="desc">
                                                            <?php echo $_smarty_tpl->tpl_vars['Artikel']->value->cBeschreibung;?>

                                                            <?php if ($_smarty_tpl->tpl_vars['useDescriptionWithMediaGroup']->value) {?>
                                                                <?php if (strlen($_smarty_tpl->tpl_vars['Artikel']->value->cBeschreibung) > 0) {?>
                                                                    <hr>
                                                                <?php }?>
                                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Artikel']->value->getMediaTypes(), 'mediaType');
$_smarty_tpl->tpl_vars['mediaType']->index = -1;
$_smarty_tpl->tpl_vars['mediaType']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mediaType']->value) {
$_smarty_tpl->tpl_vars['mediaType']->do_else = false;
$_smarty_tpl->tpl_vars['mediaType']->index++;
$_smarty_tpl->tpl_vars['mediaType']->first = !$_smarty_tpl->tpl_vars['mediaType']->index;
$__foreach_mediaType_37_saved = $_smarty_tpl->tpl_vars['mediaType'];
?>
                                                                    <div class="media">
                                                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4327261060a38bc2046551_76613529', 'productdetails-tabs-description-include-mediafile', $this->tplIndex);
?>

                                                                    </div>
                                                                <?php
$_smarty_tpl->tpl_vars['mediaType'] = $__foreach_mediaType_37_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                            <?php }?>
                                                        </div>
                                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_after_desc'),$_smarty_tpl ) );?>

                                                    <?php
}
}
/* {/block 'productdetails-tabs-card-description-content'} */
/* {block 'productdetails-tabs-include-attributes'} */
class Block_207248889160a38bc204b350_34499945 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                            <?php $_smarty_tpl->_subTemplateRender('file:productdetails/attributes.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tplscope'=>'details','showProductWeight'=>$_smarty_tpl->tpl_vars['showProductWeight']->value,'showShippingWeight'=>$_smarty_tpl->tpl_vars['showShippingWeight']->value,'dimension'=>$_smarty_tpl->tpl_vars['dimension']->value,'showAttributesTable'=>$_smarty_tpl->tpl_vars['showAttributesTable']->value), 0, true);
?>
                                                        <?php
}
}
/* {/block 'productdetails-tabs-include-attributes'} */
/* {block 'productdetails-tabs-card-description-attributes'} */
class Block_11298211560a38bc204a7f7_81856699 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_207248889160a38bc204b350_34499945', 'productdetails-tabs-include-attributes', $this->tplIndex);
?>

                                                    <?php
}
}
/* {/block 'productdetails-tabs-card-description-attributes'} */
/* {block 'productdetails-tabs-card-description'} */
class Block_133726582760a38bc203cd43_02300054 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_102761030860a38bc203d992_79406212', 'productdetails-tabs-card-description-content', $this->tplIndex);
?>

                                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11298211560a38bc204a7f7_81856699', 'productdetails-tabs-card-description-attributes', $this->tplIndex);
?>

                                                <?php
}
}
/* {/block 'productdetails-tabs-card-description'} */
/* {block 'productdetails-tabs-description'} */
class Block_65180298060a38bc202c107_66981468 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_block_plugin90 = isset($_smarty_tpl->smarty->registered_plugins['block']['card'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['card'][0][0] : null;
if (!is_callable(array($_block_plugin90, 'render'))) {
throw new SmartyException('block tag \'card\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('card', array('no-body'=>true));
$_block_repeat=true;
echo $_block_plugin90->render(array('no-body'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php ob_start();
if ($_smarty_tpl->tpl_vars['setActiveClass']->value['description']) {
echo "true";
} else {
echo "false";
}
$_prefixVariable51=ob_get_clean();
$_block_plugin91 = isset($_smarty_tpl->smarty->registered_plugins['block']['cardheader'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['cardheader'][0][0] : null;
if (!is_callable(array($_block_plugin91, 'render'))) {
throw new SmartyException('block tag \'cardheader\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('cardheader', array('id'=>"tab-description-head",'data'=>array("toggle"=>"collapse","target"=>"#tab-description"),'aria'=>array("expanded"=>$_prefixVariable51,"controls"=>"tab-description")));
$_block_repeat=true;
echo $_block_plugin91->render(array('id'=>"tab-description-head",'data'=>array("toggle"=>"collapse","target"=>"#tab-description"),'aria'=>array("expanded"=>$_prefixVariable51,"controls"=>"tab-description")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'description','section'=>'productDetails'),$_smarty_tpl ) );?>

                                        <?php $_block_repeat=false;
echo $_block_plugin91->render(array('id'=>"tab-description-head",'data'=>array("toggle"=>"collapse","target"=>"#tab-description"),'aria'=>array("expanded"=>$_prefixVariable51,"controls"=>"tab-description")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        <?php $_block_plugin92 = isset($_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0] : null;
if (!is_callable(array($_block_plugin92, 'render'))) {
throw new SmartyException('block tag \'collapse\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('collapse', array('id'=>"tab-description",'visible'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['description'],'data'=>array("parent"=>"#tabAccordion"),'aria'=>array("labelledby"=>"tab-description-head")));
$_block_repeat=true;
echo $_block_plugin92->render(array('id'=>"tab-description",'visible'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['description'],'data'=>array("parent"=>"#tabAccordion"),'aria'=>array("labelledby"=>"tab-description-head")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php $_block_plugin93 = isset($_smarty_tpl->smarty->registered_plugins['block']['cardbody'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['cardbody'][0][0] : null;
if (!is_callable(array($_block_plugin93, 'render'))) {
throw new SmartyException('block tag \'cardbody\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('cardbody', array());
$_block_repeat=true;
echo $_block_plugin93->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_133726582760a38bc203cd43_02300054', 'productdetails-tabs-card-description', $this->tplIndex);
?>

                                            <?php $_block_repeat=false;
echo $_block_plugin93->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        <?php $_block_repeat=false;
echo $_block_plugin92->render(array('id'=>"tab-description",'visible'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['description'],'data'=>array("parent"=>"#tabAccordion"),'aria'=>array("labelledby"=>"tab-description-head")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    <?php $_block_repeat=false;
echo $_block_plugin90->render(array('no-body'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php
}
}
/* {/block 'productdetails-tabs-description'} */
/* {block 'productdetails-tabs-include-download'} */
class Block_160234883360a38bc206a259_49573288 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                    <?php $_smarty_tpl->_subTemplateRender('file:productdetails/download.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                                <?php
}
}
/* {/block 'productdetails-tabs-include-download'} */
/* {block 'productdetails-tabs-downloads'} */
class Block_42279838260a38bc2052203_68671436 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_block_plugin94 = isset($_smarty_tpl->smarty->registered_plugins['block']['card'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['card'][0][0] : null;
if (!is_callable(array($_block_plugin94, 'render'))) {
throw new SmartyException('block tag \'card\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('card', array('no-body'=>true));
$_block_repeat=true;
echo $_block_plugin94->render(array('no-body'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php ob_start();
if ($_smarty_tpl->tpl_vars['setActiveClass']->value['downloads']) {
echo "true";
} else {
echo "false";
}
$_prefixVariable52=ob_get_clean();
$_block_plugin95 = isset($_smarty_tpl->smarty->registered_plugins['block']['cardheader'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['cardheader'][0][0] : null;
if (!is_callable(array($_block_plugin95, 'render'))) {
throw new SmartyException('block tag \'cardheader\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('cardheader', array('id'=>"tab-downloads-head",'data'=>array("toggle"=>"collapse","target"=>"#tab-downloads"),'aria'=>array("expanded"=>$_prefixVariable52,"controls"=>"tab-downloads")));
$_block_repeat=true;
echo $_block_plugin95->render(array('id'=>"tab-downloads-head",'data'=>array("toggle"=>"collapse","target"=>"#tab-downloads"),'aria'=>array("expanded"=>$_prefixVariable52,"controls"=>"tab-downloads")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('section'=>'productDownloads','key'=>'downloadSection'),$_smarty_tpl ) );?>

                                        <?php $_block_repeat=false;
echo $_block_plugin95->render(array('id'=>"tab-downloads-head",'data'=>array("toggle"=>"collapse","target"=>"#tab-downloads"),'aria'=>array("expanded"=>$_prefixVariable52,"controls"=>"tab-downloads")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        <?php $_block_plugin96 = isset($_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0] : null;
if (!is_callable(array($_block_plugin96, 'render'))) {
throw new SmartyException('block tag \'collapse\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('collapse', array('id'=>"tab-downloads",'visible'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['downloads'],'data'=>array("parent"=>"#tabAccordion"),'aria'=>array("labelledby"=>"tab-downloads-head")));
$_block_repeat=true;
echo $_block_plugin96->render(array('id'=>"tab-downloads",'visible'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['downloads'],'data'=>array("parent"=>"#tabAccordion"),'aria'=>array("labelledby"=>"tab-downloads-head")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php $_block_plugin97 = isset($_smarty_tpl->smarty->registered_plugins['block']['cardbody'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['cardbody'][0][0] : null;
if (!is_callable(array($_block_plugin97, 'render'))) {
throw new SmartyException('block tag \'cardbody\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('cardbody', array());
$_block_repeat=true;
echo $_block_plugin97->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_160234883360a38bc206a259_49573288', 'productdetails-tabs-include-download', $this->tplIndex);
?>

                                            <?php $_block_repeat=false;
echo $_block_plugin97->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        <?php $_block_repeat=false;
echo $_block_plugin96->render(array('id'=>"tab-downloads",'visible'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['downloads'],'data'=>array("parent"=>"#tabAccordion"),'aria'=>array("labelledby"=>"tab-downloads-head")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    <?php $_block_repeat=false;
echo $_block_plugin94->render(array('no-body'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php
}
}
/* {/block 'productdetails-tabs-downloads'} */
/* {block 'productdetails-tabs-separated-tabs'} */
class Block_58288629660a38bc2072012_04800263 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['separatedTabs']->value, 'separatedTab');
$_smarty_tpl->tpl_vars['separatedTab']->index = -1;
$_smarty_tpl->tpl_vars['separatedTab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['separatedTab']->value) {
$_smarty_tpl->tpl_vars['separatedTab']->do_else = false;
$_smarty_tpl->tpl_vars['separatedTab']->index++;
$_smarty_tpl->tpl_vars['separatedTab']->first = !$_smarty_tpl->tpl_vars['separatedTab']->index;
$__foreach_separatedTab_38_saved = $_smarty_tpl->tpl_vars['separatedTab'];
?>
                                        <?php $_smarty_tpl->_assignInScope('separatedTabId', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'seofy' ][ 0 ], array( $_smarty_tpl->tpl_vars['separatedTab']->value['name'] )));?>
                                        <?php $_block_plugin98 = isset($_smarty_tpl->smarty->registered_plugins['block']['card'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['card'][0][0] : null;
if (!is_callable(array($_block_plugin98, 'render'))) {
throw new SmartyException('block tag \'card\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('card', array('no-body'=>true));
$_block_repeat=true;
echo $_block_plugin98->render(array('no-body'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php ob_start();
if ($_smarty_tpl->tpl_vars['setActiveClass']->value['separatedTabs'] && $_smarty_tpl->tpl_vars['separatedTab']->first) {
echo "true";
} else {
echo "false";
}
$_prefixVariable53=ob_get_clean();
$_block_plugin99 = isset($_smarty_tpl->smarty->registered_plugins['block']['cardheader'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['cardheader'][0][0] : null;
if (!is_callable(array($_block_plugin99, 'render'))) {
throw new SmartyException('block tag \'cardheader\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('cardheader', array('id'=>"tab-".((string)$_smarty_tpl->tpl_vars['separatedTabId']->value)."-head",'data'=>array("toggle"=>"collapse","target"=>"#tab-".((string)$_smarty_tpl->tpl_vars['separatedTabId']->value)),'aria'=>array("expanded"=>$_prefixVariable53,"controls"=>"tab-".((string)$_smarty_tpl->tpl_vars['separatedTabId']->value))));
$_block_repeat=true;
echo $_block_plugin99->render(array('id'=>"tab-".((string)$_smarty_tpl->tpl_vars['separatedTabId']->value)."-head",'data'=>array("toggle"=>"collapse","target"=>"#tab-".((string)$_smarty_tpl->tpl_vars['separatedTabId']->value)),'aria'=>array("expanded"=>$_prefixVariable53,"controls"=>"tab-".((string)$_smarty_tpl->tpl_vars['separatedTabId']->value))), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                <?php echo $_smarty_tpl->tpl_vars['separatedTab']->value['name'];?>

                                            <?php $_block_repeat=false;
echo $_block_plugin99->render(array('id'=>"tab-".((string)$_smarty_tpl->tpl_vars['separatedTabId']->value)."-head",'data'=>array("toggle"=>"collapse","target"=>"#tab-".((string)$_smarty_tpl->tpl_vars['separatedTabId']->value)),'aria'=>array("expanded"=>$_prefixVariable53,"controls"=>"tab-".((string)$_smarty_tpl->tpl_vars['separatedTabId']->value))), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            <?php $_block_plugin100 = isset($_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0] : null;
if (!is_callable(array($_block_plugin100, 'render'))) {
throw new SmartyException('block tag \'collapse\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('collapse', array('id'=>"tab-".((string)$_smarty_tpl->tpl_vars['separatedTabId']->value),'visible'=>($_smarty_tpl->tpl_vars['setActiveClass']->value['separatedTabs'] && $_smarty_tpl->tpl_vars['separatedTab']->first),'data'=>array("parent"=>"#tabAccordion"),'aria'=>array("labelledby"=>"tab-".((string)$_smarty_tpl->tpl_vars['separatedTabId']->value)."-head")));
$_block_repeat=true;
echo $_block_plugin100->render(array('id'=>"tab-".((string)$_smarty_tpl->tpl_vars['separatedTabId']->value),'visible'=>($_smarty_tpl->tpl_vars['setActiveClass']->value['separatedTabs'] && $_smarty_tpl->tpl_vars['separatedTab']->first),'data'=>array("parent"=>"#tabAccordion"),'aria'=>array("labelledby"=>"tab-".((string)$_smarty_tpl->tpl_vars['separatedTabId']->value)."-head")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                <?php $_block_plugin101 = isset($_smarty_tpl->smarty->registered_plugins['block']['cardbody'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['cardbody'][0][0] : null;
if (!is_callable(array($_block_plugin101, 'render'))) {
throw new SmartyException('block tag \'cardbody\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('cardbody', array());
$_block_repeat=true;
echo $_block_plugin101->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <?php echo $_smarty_tpl->tpl_vars['separatedTab']->value['content'];?>

                                                <?php $_block_repeat=false;
echo $_block_plugin101->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            <?php $_block_repeat=false;
echo $_block_plugin100->render(array('id'=>"tab-".((string)$_smarty_tpl->tpl_vars['separatedTabId']->value),'visible'=>($_smarty_tpl->tpl_vars['setActiveClass']->value['separatedTabs'] && $_smarty_tpl->tpl_vars['separatedTab']->first),'data'=>array("parent"=>"#tabAccordion"),'aria'=>array("labelledby"=>"tab-".((string)$_smarty_tpl->tpl_vars['separatedTabId']->value)."-head")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        <?php $_block_repeat=false;
echo $_block_plugin98->render(array('no-body'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    <?php
$_smarty_tpl->tpl_vars['separatedTab'] = $__foreach_separatedTab_38_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php
}
}
/* {/block 'productdetails-tabs-separated-tabs'} */
/* {block 'productdetails-tabs-include-reviews'} */
class Block_121538355960a38bc2098ff7_25783885 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                    <?php $_smarty_tpl->_subTemplateRender('file:productdetails/reviews.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stars'=>$_smarty_tpl->tpl_vars['Artikel']->value->Bewertungen->oBewertungGesamt->fDurchschnitt), 0, true);
?>
                                                <?php
}
}
/* {/block 'productdetails-tabs-include-reviews'} */
/* {block 'productdetails-tabs-votes'} */
class Block_128967562860a38bc208bb93_09400397 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_block_plugin102 = isset($_smarty_tpl->smarty->registered_plugins['block']['card'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['card'][0][0] : null;
if (!is_callable(array($_block_plugin102, 'render'))) {
throw new SmartyException('block tag \'card\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('card', array('no-body'=>true));
$_block_repeat=true;
echo $_block_plugin102->render(array('no-body'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php ob_start();
if ($_smarty_tpl->tpl_vars['setActiveClass']->value['votes']) {
echo "true";
} else {
echo "false";
}
$_prefixVariable54=ob_get_clean();
$_block_plugin103 = isset($_smarty_tpl->smarty->registered_plugins['block']['cardheader'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['cardheader'][0][0] : null;
if (!is_callable(array($_block_plugin103, 'render'))) {
throw new SmartyException('block tag \'cardheader\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('cardheader', array('id'=>"tab-votes-head",'data'=>array("toggle"=>"collapse","target"=>"#tab-votes"),'aria'=>array("expanded"=>$_prefixVariable54,"controls"=>"tab-votes")));
$_block_repeat=true;
echo $_block_plugin103->render(array('id'=>"tab-votes-head",'data'=>array("toggle"=>"collapse","target"=>"#tab-votes"),'aria'=>array("expanded"=>$_prefixVariable54,"controls"=>"tab-votes")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'Votes'),$_smarty_tpl ) );?>

                                        <?php $_block_repeat=false;
echo $_block_plugin103->render(array('id'=>"tab-votes-head",'data'=>array("toggle"=>"collapse","target"=>"#tab-votes"),'aria'=>array("expanded"=>$_prefixVariable54,"controls"=>"tab-votes")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        <?php $_block_plugin104 = isset($_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0] : null;
if (!is_callable(array($_block_plugin104, 'render'))) {
throw new SmartyException('block tag \'collapse\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('collapse', array('id'=>"tab-votes",'visible'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['votes'],'data'=>array("parent"=>"#tabAccordion"),'aria'=>array("labelledby"=>"tab-votes-head")));
$_block_repeat=true;
echo $_block_plugin104->render(array('id'=>"tab-votes",'visible'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['votes'],'data'=>array("parent"=>"#tabAccordion"),'aria'=>array("labelledby"=>"tab-votes-head")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php $_block_plugin105 = isset($_smarty_tpl->smarty->registered_plugins['block']['cardbody'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['cardbody'][0][0] : null;
if (!is_callable(array($_block_plugin105, 'render'))) {
throw new SmartyException('block tag \'cardbody\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('cardbody', array());
$_block_repeat=true;
echo $_block_plugin105->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121538355960a38bc2098ff7_25783885', 'productdetails-tabs-include-reviews', $this->tplIndex);
?>

                                            <?php $_block_repeat=false;
echo $_block_plugin105->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        <?php $_block_repeat=false;
echo $_block_plugin104->render(array('id'=>"tab-votes",'visible'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['votes'],'data'=>array("parent"=>"#tabAccordion"),'aria'=>array("labelledby"=>"tab-votes-head")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    <?php $_block_repeat=false;
echo $_block_plugin102->render(array('no-body'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php
}
}
/* {/block 'productdetails-tabs-votes'} */
/* {block 'productdetails-tabs-include-question-on-item'} */
class Block_175445559260a38bc20acf64_90965428 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                    <?php $_smarty_tpl->_subTemplateRender('file:productdetails/question_on_item.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('position'=>"tab"), 0, true);
?>
                                                <?php
}
}
/* {/block 'productdetails-tabs-include-question-on-item'} */
/* {block 'productdetails-tabs-question-on-item'} */
class Block_7861617260a38bc209e791_20448421 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_block_plugin106 = isset($_smarty_tpl->smarty->registered_plugins['block']['card'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['card'][0][0] : null;
if (!is_callable(array($_block_plugin106, 'render'))) {
throw new SmartyException('block tag \'card\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('card', array('no-body'=>true));
$_block_repeat=true;
echo $_block_plugin106->render(array('no-body'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php ob_start();
if ($_smarty_tpl->tpl_vars['setActiveClass']->value['questionOnItem']) {
echo "true";
} else {
echo "false";
}
$_prefixVariable55=ob_get_clean();
$_block_plugin107 = isset($_smarty_tpl->smarty->registered_plugins['block']['cardheader'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['cardheader'][0][0] : null;
if (!is_callable(array($_block_plugin107, 'render'))) {
throw new SmartyException('block tag \'cardheader\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('cardheader', array('id'=>"tab-question-head",'data'=>array("toggle"=>"collapse","target"=>"#tab-question"),'aria'=>array("expanded"=>$_prefixVariable55,"controls"=>"tab-question")));
$_block_repeat=true;
echo $_block_plugin107->render(array('id'=>"tab-question-head",'data'=>array("toggle"=>"collapse","target"=>"#tab-question"),'aria'=>array("expanded"=>$_prefixVariable55,"controls"=>"tab-question")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'productQuestion','section'=>'productDetails'),$_smarty_tpl ) );?>

                                        <?php $_block_repeat=false;
echo $_block_plugin107->render(array('id'=>"tab-question-head",'data'=>array("toggle"=>"collapse","target"=>"#tab-question"),'aria'=>array("expanded"=>$_prefixVariable55,"controls"=>"tab-question")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        <?php $_block_plugin108 = isset($_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0] : null;
if (!is_callable(array($_block_plugin108, 'render'))) {
throw new SmartyException('block tag \'collapse\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('collapse', array('id'=>"tab-question",'visible'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['questionOnItem'],'data'=>array("parent"=>"#tabAccordion"),'aria'=>array("labelledby"=>"tab-question-head")));
$_block_repeat=true;
echo $_block_plugin108->render(array('id'=>"tab-question",'visible'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['questionOnItem'],'data'=>array("parent"=>"#tabAccordion"),'aria'=>array("labelledby"=>"tab-question-head")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php $_block_plugin109 = isset($_smarty_tpl->smarty->registered_plugins['block']['cardbody'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['cardbody'][0][0] : null;
if (!is_callable(array($_block_plugin109, 'render'))) {
throw new SmartyException('block tag \'cardbody\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('cardbody', array());
$_block_repeat=true;
echo $_block_plugin109->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_175445559260a38bc20acf64_90965428', 'productdetails-tabs-include-question-on-item', $this->tplIndex);
?>

                                            <?php $_block_repeat=false;
echo $_block_plugin109->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        <?php $_block_repeat=false;
echo $_block_plugin108->render(array('id'=>"tab-question",'visible'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['questionOnItem'],'data'=>array("parent"=>"#tabAccordion"),'aria'=>array("labelledby"=>"tab-question-head")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    <?php $_block_repeat=false;
echo $_block_plugin106->render(array('no-body'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php
}
}
/* {/block 'productdetails-tabs-question-on-item'} */
/* {block 'productdetails-tabs-include-price-history'} */
class Block_8710269260a38bc20c1a89_49117971 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                    <?php $_smarty_tpl->_subTemplateRender('file:productdetails/price_history.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                                <?php
}
}
/* {/block 'productdetails-tabs-include-price-history'} */
/* {block 'productdetails-tabs-price-flow'} */
class Block_21616901660a38bc20b3c70_65604132 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_block_plugin110 = isset($_smarty_tpl->smarty->registered_plugins['block']['card'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['card'][0][0] : null;
if (!is_callable(array($_block_plugin110, 'render'))) {
throw new SmartyException('block tag \'card\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('card', array('no-body'=>true));
$_block_repeat=true;
echo $_block_plugin110->render(array('no-body'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php ob_start();
if ($_smarty_tpl->tpl_vars['setActiveClass']->value['priceFlow']) {
echo "true";
} else {
echo "false";
}
$_prefixVariable56=ob_get_clean();
$_block_plugin111 = isset($_smarty_tpl->smarty->registered_plugins['block']['cardheader'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['cardheader'][0][0] : null;
if (!is_callable(array($_block_plugin111, 'render'))) {
throw new SmartyException('block tag \'cardheader\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('cardheader', array('id'=>"tab-priceFlow-head",'data'=>array("toggle"=>"collapse","target"=>"#tab-priceFlow"),'aria'=>array("expanded"=>$_prefixVariable56,"controls"=>"tab-priceFlow")));
$_block_repeat=true;
echo $_block_plugin111->render(array('id'=>"tab-priceFlow-head",'data'=>array("toggle"=>"collapse","target"=>"#tab-priceFlow"),'aria'=>array("expanded"=>$_prefixVariable56,"controls"=>"tab-priceFlow")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'priceFlow','section'=>'productDetails'),$_smarty_tpl ) );?>

                                        <?php $_block_repeat=false;
echo $_block_plugin111->render(array('id'=>"tab-priceFlow-head",'data'=>array("toggle"=>"collapse","target"=>"#tab-priceFlow"),'aria'=>array("expanded"=>$_prefixVariable56,"controls"=>"tab-priceFlow")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        <?php $_block_plugin112 = isset($_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0] : null;
if (!is_callable(array($_block_plugin112, 'render'))) {
throw new SmartyException('block tag \'collapse\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('collapse', array('id'=>"tab-priceFlow",'visible'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['priceFlow'],'data'=>array("parent"=>"#tabAccordion"),'aria'=>array("labelledby"=>"tab-priceFlow-head")));
$_block_repeat=true;
echo $_block_plugin112->render(array('id'=>"tab-priceFlow",'visible'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['priceFlow'],'data'=>array("parent"=>"#tabAccordion"),'aria'=>array("labelledby"=>"tab-priceFlow-head")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php $_block_plugin113 = isset($_smarty_tpl->smarty->registered_plugins['block']['cardbody'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['cardbody'][0][0] : null;
if (!is_callable(array($_block_plugin113, 'render'))) {
throw new SmartyException('block tag \'cardbody\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('cardbody', array());
$_block_repeat=true;
echo $_block_plugin113->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8710269260a38bc20c1a89_49117971', 'productdetails-tabs-include-price-history', $this->tplIndex);
?>

                                            <?php $_block_repeat=false;
echo $_block_plugin113->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        <?php $_block_repeat=false;
echo $_block_plugin112->render(array('id'=>"tab-priceFlow",'visible'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['priceFlow'],'data'=>array("parent"=>"#tabAccordion"),'aria'=>array("labelledby"=>"tab-priceFlow-head")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    <?php $_block_repeat=false;
echo $_block_plugin110->render(array('no-body'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php
}
}
/* {/block 'productdetails-tabs-price-flow'} */
/* {block 'productdetails-tabs-include-availability-notification-form'} */
class Block_166592758860a38bc20d6c99_58645343 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                    <?php $_smarty_tpl->_subTemplateRender('file:productdetails/availability_notification_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('position'=>'tab','tplscope'=>'artikeldetails'), 0, true);
?>
                                                <?php
}
}
/* {/block 'productdetails-tabs-include-availability-notification-form'} */
/* {block 'productdetails-tabs-availability-notification'} */
class Block_68377570760a38bc20c63d6_92413822 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_block_plugin114 = isset($_smarty_tpl->smarty->registered_plugins['block']['card'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['card'][0][0] : null;
if (!is_callable(array($_block_plugin114, 'render'))) {
throw new SmartyException('block tag \'card\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('card', array('no-body'=>true));
$_block_repeat=true;
echo $_block_plugin114->render(array('no-body'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php ob_start();
if ($_smarty_tpl->tpl_vars['setActiveClass']->value['availabilityNotification']) {
echo "true";
} else {
echo "false";
}
$_prefixVariable57=ob_get_clean();
$_block_plugin115 = isset($_smarty_tpl->smarty->registered_plugins['block']['cardheader'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['cardheader'][0][0] : null;
if (!is_callable(array($_block_plugin115, 'render'))) {
throw new SmartyException('block tag \'cardheader\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('cardheader', array('id'=>"tab-availabilityNotification-head",'data'=>array("toggle"=>"collapse","target"=>"#tab-availabilityNotification"),'aria'=>array("expanded"=>$_prefixVariable57,"controls"=>"tab-availabilityNotification")));
$_block_repeat=true;
echo $_block_plugin115->render(array('id'=>"tab-availabilityNotification-head",'data'=>array("toggle"=>"collapse","target"=>"#tab-availabilityNotification"),'aria'=>array("expanded"=>$_prefixVariable57,"controls"=>"tab-availabilityNotification")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'notifyMeWhenProductAvailableAgain'),$_smarty_tpl ) );?>

                                        <?php $_block_repeat=false;
echo $_block_plugin115->render(array('id'=>"tab-availabilityNotification-head",'data'=>array("toggle"=>"collapse","target"=>"#tab-availabilityNotification"),'aria'=>array("expanded"=>$_prefixVariable57,"controls"=>"tab-availabilityNotification")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        <?php $_block_plugin116 = isset($_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0] : null;
if (!is_callable(array($_block_plugin116, 'render'))) {
throw new SmartyException('block tag \'collapse\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('collapse', array('id'=>"tab-availabilityNotification",'visible'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['availabilityNotification'],'data'=>array("parent"=>"#tabAccordion"),'aria'=>array("labelledby"=>"tab-availabilityNotification-head")));
$_block_repeat=true;
echo $_block_plugin116->render(array('id'=>"tab-availabilityNotification",'visible'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['availabilityNotification'],'data'=>array("parent"=>"#tabAccordion"),'aria'=>array("labelledby"=>"tab-availabilityNotification-head")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php $_block_plugin117 = isset($_smarty_tpl->smarty->registered_plugins['block']['cardbody'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['cardbody'][0][0] : null;
if (!is_callable(array($_block_plugin117, 'render'))) {
throw new SmartyException('block tag \'cardbody\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('cardbody', array());
$_block_repeat=true;
echo $_block_plugin117->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_166592758860a38bc20d6c99_58645343', 'productdetails-tabs-include-availability-notification-form', $this->tplIndex);
?>

                                            <?php $_block_repeat=false;
echo $_block_plugin117->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        <?php $_block_repeat=false;
echo $_block_plugin116->render(array('id'=>"tab-availabilityNotification",'visible'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['availabilityNotification'],'data'=>array("parent"=>"#tabAccordion"),'aria'=>array("labelledby"=>"tab-availabilityNotification-head")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    <?php $_block_repeat=false;
echo $_block_plugin114->render(array('no-body'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php
}
}
/* {/block 'productdetails-tabs-availability-notification'} */
/* {block 'productdetails-tabs-include-mediafile'} */
class Block_207037561260a38bc20f0343_08343274 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                        <?php $_smarty_tpl->_subTemplateRender('file:productdetails/mediafile.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                                    <?php
}
}
/* {/block 'productdetails-tabs-include-mediafile'} */
/* {block 'productdetails-tabs-media-gorup'} */
class Block_197836710360a38bc20dbca3_54966902 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Artikel']->value->getMediaTypes(), 'mediaType');
$_smarty_tpl->tpl_vars['mediaType']->index = -1;
$_smarty_tpl->tpl_vars['mediaType']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mediaType']->value) {
$_smarty_tpl->tpl_vars['mediaType']->do_else = false;
$_smarty_tpl->tpl_vars['mediaType']->index++;
$_smarty_tpl->tpl_vars['mediaType']->first = !$_smarty_tpl->tpl_vars['mediaType']->index;
$__foreach_mediaType_39_saved = $_smarty_tpl->tpl_vars['mediaType'];
?>
                                        <?php $_smarty_tpl->_assignInScope('cMedienTypId', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'seofy' ][ 0 ], array( $_smarty_tpl->tpl_vars['mediaType']->value->name )));?>
                                        <?php $_block_plugin118 = isset($_smarty_tpl->smarty->registered_plugins['block']['card'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['card'][0][0] : null;
if (!is_callable(array($_block_plugin118, 'render'))) {
throw new SmartyException('block tag \'card\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('card', array('no-body'=>true));
$_block_repeat=true;
echo $_block_plugin118->render(array('no-body'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php ob_start();
if ($_smarty_tpl->tpl_vars['setActiveClass']->value['mediaGroup'] && $_smarty_tpl->tpl_vars['mediaType']->first) {
echo "true";
} else {
echo "false";
}
$_prefixVariable58=ob_get_clean();
$_block_plugin119 = isset($_smarty_tpl->smarty->registered_plugins['block']['cardheader'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['cardheader'][0][0] : null;
if (!is_callable(array($_block_plugin119, 'render'))) {
throw new SmartyException('block tag \'cardheader\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('cardheader', array('id'=>"tab-".((string)$_smarty_tpl->tpl_vars['cMedienTypId']->value)."-head",'data'=>array("toggle"=>"collapse","target"=>"#tab-".((string)$_smarty_tpl->tpl_vars['cMedienTypId']->value)),'aria'=>array("expanded"=>$_prefixVariable58,"controls"=>"tab-".((string)$_smarty_tpl->tpl_vars['cMedienTypId']->value))));
$_block_repeat=true;
echo $_block_plugin119->render(array('id'=>"tab-".((string)$_smarty_tpl->tpl_vars['cMedienTypId']->value)."-head",'data'=>array("toggle"=>"collapse","target"=>"#tab-".((string)$_smarty_tpl->tpl_vars['cMedienTypId']->value)),'aria'=>array("expanded"=>$_prefixVariable58,"controls"=>"tab-".((string)$_smarty_tpl->tpl_vars['cMedienTypId']->value))), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                <?php echo $_smarty_tpl->tpl_vars['mediaType']->value->name;?>

                                            <?php $_block_repeat=false;
echo $_block_plugin119->render(array('id'=>"tab-".((string)$_smarty_tpl->tpl_vars['cMedienTypId']->value)."-head",'data'=>array("toggle"=>"collapse","target"=>"#tab-".((string)$_smarty_tpl->tpl_vars['cMedienTypId']->value)),'aria'=>array("expanded"=>$_prefixVariable58,"controls"=>"tab-".((string)$_smarty_tpl->tpl_vars['cMedienTypId']->value))), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            <?php $_block_plugin120 = isset($_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0] : null;
if (!is_callable(array($_block_plugin120, 'render'))) {
throw new SmartyException('block tag \'collapse\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('collapse', array('id'=>"tab-".((string)$_smarty_tpl->tpl_vars['cMedienTypId']->value),'visible'=>($_smarty_tpl->tpl_vars['setActiveClass']->value['mediaGroup'] && $_smarty_tpl->tpl_vars['mediaType']->first),'data'=>array("parent"=>"#tabAccordion"),'aria'=>array("labelledby"=>"tab-".((string)$_smarty_tpl->tpl_vars['cMedienTypId']->value)."-head")));
$_block_repeat=true;
echo $_block_plugin120->render(array('id'=>"tab-".((string)$_smarty_tpl->tpl_vars['cMedienTypId']->value),'visible'=>($_smarty_tpl->tpl_vars['setActiveClass']->value['mediaGroup'] && $_smarty_tpl->tpl_vars['mediaType']->first),'data'=>array("parent"=>"#tabAccordion"),'aria'=>array("labelledby"=>"tab-".((string)$_smarty_tpl->tpl_vars['cMedienTypId']->value)."-head")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                <?php $_block_plugin121 = isset($_smarty_tpl->smarty->registered_plugins['block']['cardbody'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['cardbody'][0][0] : null;
if (!is_callable(array($_block_plugin121, 'render'))) {
throw new SmartyException('block tag \'cardbody\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('cardbody', array());
$_block_repeat=true;
echo $_block_plugin121->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_207037561260a38bc20f0343_08343274', 'productdetails-tabs-include-mediafile', $this->tplIndex);
?>

                                                <?php $_block_repeat=false;
echo $_block_plugin121->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            <?php $_block_repeat=false;
echo $_block_plugin120->render(array('id'=>"tab-".((string)$_smarty_tpl->tpl_vars['cMedienTypId']->value),'visible'=>($_smarty_tpl->tpl_vars['setActiveClass']->value['mediaGroup'] && $_smarty_tpl->tpl_vars['mediaType']->first),'data'=>array("parent"=>"#tabAccordion"),'aria'=>array("labelledby"=>"tab-".((string)$_smarty_tpl->tpl_vars['cMedienTypId']->value)."-head")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        <?php $_block_repeat=false;
echo $_block_plugin118->render(array('no-body'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    <?php
$_smarty_tpl->tpl_vars['mediaType'] = $__foreach_mediaType_39_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php
}
}
/* {/block 'productdetails-tabs-media-gorup'} */
/* {block 'productdetails-tabs-no-tabs'} */
class Block_165731802460a38bc202a6a6_34011770 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_block_plugin89 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin89, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array());
$_block_repeat=true;
echo $_block_plugin89->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <div class="accordion" id="tabAccordion">
                            <?php if ($_smarty_tpl->tpl_vars['useDescription']->value) {?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_65180298060a38bc202c107_66981468', 'productdetails-tabs-description', $this->tplIndex);
?>

                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['useDownloads']->value) {?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_42279838260a38bc2052203_68671436', 'productdetails-tabs-downloads', $this->tplIndex);
?>

                            <?php }?>

                            <?php if (!empty($_smarty_tpl->tpl_vars['separatedTabs']->value)) {?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_58288629660a38bc2072012_04800263', 'productdetails-tabs-separated-tabs', $this->tplIndex);
?>

                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['useVotes']->value) {?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_128967562860a38bc208bb93_09400397', 'productdetails-tabs-votes', $this->tplIndex);
?>

                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['useQuestionOnItem']->value) {?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7861617260a38bc209e791_20448421', 'productdetails-tabs-question-on-item', $this->tplIndex);
?>

                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['usePriceFlow']->value) {?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21616901660a38bc20b3c70_65604132', 'productdetails-tabs-price-flow', $this->tplIndex);
?>

                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['useAvailabilityNotification']->value) {?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_68377570760a38bc20c63d6_92413822', 'productdetails-tabs-availability-notification', $this->tplIndex);
?>

                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['useMediaGroup']->value) {?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_197836710360a38bc20dbca3_54966902', 'productdetails-tabs-media-gorup', $this->tplIndex);
?>

                            <?php }?>
                        </div>
                    <?php $_block_repeat=false;
echo $_block_plugin89->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php
}
}
/* {/block 'productdetails-tabs-no-tabs'} */
/* {block 'productdetails-tabs-content'} */
class Block_158166889060a38bc1f15610_73822941 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ('useDescription' || $_smarty_tpl->tpl_vars['useDownloads']->value || $_smarty_tpl->tpl_vars['useDescriptionWithMediaGroup']->value || $_smarty_tpl->tpl_vars['useVotes']->value || $_smarty_tpl->tpl_vars['useQuestionOnItem']->value || $_smarty_tpl->tpl_vars['usePriceFlow']->value || $_smarty_tpl->tpl_vars['useAvailabilityNotification']->value || $_smarty_tpl->tpl_vars['useMediaGroup']->value || !empty($_smarty_tpl->tpl_vars['separatedTabs']->value)) {?>
            <?php if ($_smarty_tpl->tpl_vars['tabanzeige']->value && !$_smarty_tpl->tpl_vars['isMobile']->value) {?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_78487735960a38bc1f1b437_73829382', 'productdetails-tabs-tabs', $this->tplIndex);
?>

            <?php } else { ?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_165731802460a38bc202a6a6_34011770', 'productdetails-tabs-no-tabs', $this->tplIndex);
?>

            <?php }?>
        <?php }?>
    <?php
}
}
/* {/block 'productdetails-tabs-content'} */
/* {block 'productdetails-tabs'} */
class Block_157586506360a38bc1de6956_77898270 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'productdetails-tabs' => 
  array (
    0 => 'Block_157586506360a38bc1de6956_77898270',
  ),
  'productdetails-tabs-settings' => 
  array (
    0 => 'Block_210582794560a38bc1de76c3_25594276',
  ),
  'productdetails-tabs-content' => 
  array (
    0 => 'Block_158166889060a38bc1f15610_73822941',
  ),
  'productdetails-tabs-tabs' => 
  array (
    0 => 'Block_78487735960a38bc1f1b437_73829382',
  ),
  'productdetails-tabs-tab-description' => 
  array (
    0 => 'Block_43603836960a38bc1f1edb4_05397668',
  ),
  'productdetails-tabs-tab-content' => 
  array (
    0 => 'Block_92748621760a38bc1f22b93_78874130',
  ),
  'tab-description-media-types' => 
  array (
    0 => 'Block_49245564460a38bc1f23638_01034596',
  ),
  'productdetails-tabs-tab-description-include-attributes' => 
  array (
    0 => 'Block_128888799860a38bc1f2f7a8_65392936',
  ),
  'productdetails-tabs-tab-downloads' => 
  array (
    0 => 'Block_170863222760a38bc1f34fc3_41981546',
  ),
  'productdetails-tabs-tab-separated-tabs' => 
  array (
    0 => 'Block_193227721260a38bc1f3bd67_14823205',
  ),
  'productdetails-tabs-tab-votes' => 
  array (
    0 => 'Block_1610567760a38bc2003174_06213316',
  ),
  'productdetails-tabs-tab-question-on-item' => 
  array (
    0 => 'Block_36305840360a38bc200b678_86922981',
  ),
  'productdetails-tabs-tab-price-flow' => 
  array (
    0 => 'Block_174622767760a38bc2012218_59644885',
  ),
  'productdetails-tabs-tab-availability-notification' => 
  array (
    0 => 'Block_75561501860a38bc2017c36_70420054',
  ),
  'productdetails-tabs-tab-mediagroup' => 
  array (
    0 => 'Block_8760293160a38bc201dad9_05414687',
  ),
  'productdetails-tabs-no-tabs' => 
  array (
    0 => 'Block_165731802460a38bc202a6a6_34011770',
  ),
  'productdetails-tabs-description' => 
  array (
    0 => 'Block_65180298060a38bc202c107_66981468',
  ),
  'productdetails-tabs-card-description' => 
  array (
    0 => 'Block_133726582760a38bc203cd43_02300054',
  ),
  'productdetails-tabs-card-description-content' => 
  array (
    0 => 'Block_102761030860a38bc203d992_79406212',
  ),
  'productdetails-tabs-description-include-mediafile' => 
  array (
    0 => 'Block_4327261060a38bc2046551_76613529',
  ),
  'productdetails-tabs-card-description-attributes' => 
  array (
    0 => 'Block_11298211560a38bc204a7f7_81856699',
  ),
  'productdetails-tabs-include-attributes' => 
  array (
    0 => 'Block_207248889160a38bc204b350_34499945',
  ),
  'productdetails-tabs-downloads' => 
  array (
    0 => 'Block_42279838260a38bc2052203_68671436',
  ),
  'productdetails-tabs-include-download' => 
  array (
    0 => 'Block_160234883360a38bc206a259_49573288',
  ),
  'productdetails-tabs-separated-tabs' => 
  array (
    0 => 'Block_58288629660a38bc2072012_04800263',
  ),
  'productdetails-tabs-votes' => 
  array (
    0 => 'Block_128967562860a38bc208bb93_09400397',
  ),
  'productdetails-tabs-include-reviews' => 
  array (
    0 => 'Block_121538355960a38bc2098ff7_25783885',
  ),
  'productdetails-tabs-question-on-item' => 
  array (
    0 => 'Block_7861617260a38bc209e791_20448421',
  ),
  'productdetails-tabs-include-question-on-item' => 
  array (
    0 => 'Block_175445559260a38bc20acf64_90965428',
  ),
  'productdetails-tabs-price-flow' => 
  array (
    0 => 'Block_21616901660a38bc20b3c70_65604132',
  ),
  'productdetails-tabs-include-price-history' => 
  array (
    0 => 'Block_8710269260a38bc20c1a89_49117971',
  ),
  'productdetails-tabs-availability-notification' => 
  array (
    0 => 'Block_68377570760a38bc20c63d6_92413822',
  ),
  'productdetails-tabs-include-availability-notification-form' => 
  array (
    0 => 'Block_166592758860a38bc20d6c99_58645343',
  ),
  'productdetails-tabs-media-gorup' => 
  array (
    0 => 'Block_197836710360a38bc20dbca3_54966902',
  ),
  'productdetails-tabs-include-mediafile' => 
  array (
    0 => 'Block_207037561260a38bc20f0343_08343274',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_210582794560a38bc1de76c3_25594276', 'productdetails-tabs-settings', $this->tplIndex);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_158166889060a38bc1f15610_73822941', 'productdetails-tabs-content', $this->tplIndex);
?>

<?php
}
}
/* {/block 'productdetails-tabs'} */
}
