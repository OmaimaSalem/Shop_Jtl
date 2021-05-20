<?php
/* Smarty version 3.1.38, created on 2021-05-04 11:46:29
  from 'C:\xampp\htdocs\shop\templates\NOVA\layout\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_609117f587a370_30360374',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb0163ac51b86e56a1e7117759c74071d1421c36' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\templates\\NOVA\\layout\\footer.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/consent_manager.tpl' => 1,
    'file:snippets/scroll_top.tpl' => 1,
  ),
),false)) {
function content_609117f587a370_30360374 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1313559238609117f5796ce2_88996542', 'layout-footer');
?>

<?php }
/* {block 'layout-footer-consent-manager'} */
class Block_157289194609117f579ce83_94520959 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['consentmanager']['consent_manager_active'] === 'Y' && !$_smarty_tpl->tpl_vars['isAjax']->value && $_smarty_tpl->tpl_vars['consentItems']->value->isNotEmpty()) {?>
            <input id="consent-manager-show-banner" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['Einstellungen']->value['consentmanager']['consent_manager_show_banner'];?>
">
            <?php $_smarty_tpl->_subTemplateRender('file:snippets/consent_manager.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php $_block_plugin111 = isset($_smarty_tpl->smarty->registered_plugins['block']['inline_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['inline_script'][0][0] : null;
if (!is_callable(array($_block_plugin111, 'inlineScript'))) {
throw new SmartyException('block tag \'inline_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo $_block_plugin111->inlineScript(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php echo '<script'; ?>
>
                    setTimeout(function() {
                        $('#consent-manager, #consent-settings-btn').removeClass('d-none');
                    }, 100)
                    const CM = new ConsentManager({
                        version: 1
                    });
                    var trigger = document.querySelectorAll('.trigger')
                    var triggerCall = function(e) {
                        e.preventDefault();
                        let type = e.target.dataset.consent;
                        if (CM.getSettings(type) === false) {
                            CM.openConfirmationModal(type, function() {
                                let data = CM._getLocalData();
                                if (data === null ) {
                                    data = { settings: {} };
                                }
                                data.settings[type] = true;
                                document.dispatchEvent(new CustomEvent('consent.updated', { detail: data.settings }));
                            });
                        }
                    }
                    for(let i = 0; i < trigger.length; ++i) {
                        trigger[i].addEventListener('click', triggerCall)
                    }
                    document.addEventListener('consent.updated', function(e) {
                        $.post('<?php echo $_smarty_tpl->tpl_vars['ShopURLSSL']->value;?>
/', {
                                'action': 'updateconsent',
                                'jtl_token': '<?php echo $_SESSION['jtl_token'];?>
',
                                'data': e.detail
                            }
                        );
                    });
                <?php echo '</script'; ?>
>
            <?php $_block_repeat=false;
echo $_block_plugin111->inlineScript(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php }?>
    <?php
}
}
/* {/block 'layout-footer-consent-manager'} */
/* {block 'layout-footer-content-productlist-col-closingtag'} */
class Block_1107933154609117f57b1e48_26457918 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    </div>                <?php
}
}
/* {/block 'layout-footer-content-productlist-col-closingtag'} */
/* {block 'footer-sidepanel-left-content'} */
class Block_319562138609117f57b3ae7_33743165 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['boxes']->value['left'];
}
}
/* {/block 'footer-sidepanel-left-content'} */
/* {block 'layout-footer-sidepanel-left'} */
class Block_700727139609117f57b31c5_66318957 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <aside id="sidepanel_left" class="sidepanel-left d-print-none col-12 col-lg-4 col-xl-3 order-lg-0 dropdown-full-width">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_319562138609117f57b3ae7_33743165', 'footer-sidepanel-left-content', $this->tplIndex);
?>

                    </aside>
                <?php
}
}
/* {/block 'layout-footer-sidepanel-left'} */
/* {block 'layout-footer-content-productlist-row-closingtag'} */
class Block_1745894738609117f57b5a26_87570105 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    </div>                <?php
}
}
/* {/block 'layout-footer-content-productlist-row-closingtag'} */
/* {block 'layout-footer-aside'} */
class Block_477345735609117f57aa453_40914921 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['has_boxes'][0], array( array('position'=>'left','assign'=>'hasLeftBox'),$_smarty_tpl ) );?>


            <?php if ((defined('PAGE_ARTIKELLISTE') ? constant('PAGE_ARTIKELLISTE') : null) === $_smarty_tpl->tpl_vars['nSeitenTyp']->value && !$_smarty_tpl->tpl_vars['bExclusive']->value && $_smarty_tpl->tpl_vars['hasLeftBox']->value && !empty(trim(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['boxes']->value['left'])))) {?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1107933154609117f57b1e48_26457918', 'layout-footer-content-productlist-col-closingtag', $this->tplIndex);
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_700727139609117f57b31c5_66318957', 'layout-footer-sidepanel-left', $this->tplIndex);
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1745894738609117f57b5a26_87570105', 'layout-footer-content-productlist-row-closingtag', $this->tplIndex);
?>

            <?php }?>
        <?php
}
}
/* {/block 'layout-footer-aside'} */
/* {block 'layout-footer-content-closingtag'} */
class Block_734444741609117f57b75c6_08790129 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_content','title'=>'Default Area','inContainer'=>false),$_smarty_tpl ) );?>

            </div>        <?php
}
}
/* {/block 'layout-footer-content-closingtag'} */
/* {block 'layout-footer-content-wrapper-closingtag'} */
class Block_746661212609117f57b9482_20111971 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            </div>        <?php
}
}
/* {/block 'layout-footer-content-wrapper-closingtag'} */
/* {block 'layout-footer-content-all-closingtags'} */
class Block_688343897609117f57a9aa6_42404438 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_477345735609117f57aa453_40914921', 'layout-footer-aside', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_734444741609117f57b75c6_08790129', 'layout-footer-content-closingtag', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_746661212609117f57b9482_20111971', 'layout-footer-content-wrapper-closingtag', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'layout-footer-content-all-closingtags'} */
/* {block 'layout-footer-main-wrapper-closingtag'} */
class Block_1904127157609117f57bab29_88703303 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        </main>     <?php
}
}
/* {/block 'layout-footer-main-wrapper-closingtag'} */
/* {block 'layout-footer-newsletter-heading'} */
class Block_386627435609117f57c4e77_28733936 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <div class="h2 newsletter-footer-heading">
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'newsletter','section'=>'newsletter'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'newsletterSendSubscribe','section'=>'newsletter'),$_smarty_tpl ) );?>

                                        </div>
                                    <?php
}
}
/* {/block 'layout-footer-newsletter-heading'} */
/* {block 'layout-footer-newsletter-info'} */
class Block_179854477609117f57c9026_25848017 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <p class="info">
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'newsletterInformedConsent','section'=>'newsletter','printf'=>$_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_DATENSCHUTZ') ? constant('LINKTYP_DATENSCHUTZ') : null)]->getURL()),$_smarty_tpl ) );?>

                                        </p>
                                    <?php
}
}
/* {/block 'layout-footer-newsletter-info'} */
/* {block 'layout-footer-form-content'} */
class Block_1396151299609117f57cf683_46457629 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"hidden",'name'=>"abonnieren",'value'=>"2"),$_smarty_tpl ) );?>

                                                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'emailadress'),$_smarty_tpl ) );
$_prefixVariable68=ob_get_clean();
$_block_plugin117 = isset($_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0] : null;
if (!is_callable(array($_block_plugin117, 'render'))) {
throw new SmartyException('block tag \'formgroup\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('formgroup', array('label-sr-only'=>$_prefixVariable68,'class'=>"newsletter-email-wrapper"));
$_block_repeat=true;
echo $_block_plugin117->render(array('label-sr-only'=>$_prefixVariable68,'class'=>"newsletter-email-wrapper"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <?php $_block_plugin118 = isset($_smarty_tpl->smarty->registered_plugins['block']['inputgroup'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['inputgroup'][0][0] : null;
if (!is_callable(array($_block_plugin118, 'render'))) {
throw new SmartyException('block tag \'inputgroup\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inputgroup', array());
$_block_repeat=true;
echo $_block_plugin118->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'emailadress'),$_smarty_tpl ) );
$_prefixVariable69=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'emailadress'),$_smarty_tpl ) );
$_prefixVariable70 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"email",'name'=>"cEmail",'id'=>"newsletter_email",'placeholder'=>$_prefixVariable69,'aria'=>array('label'=>$_prefixVariable70)),$_smarty_tpl ) );?>

                                                        <?php $_block_plugin119 = isset($_smarty_tpl->smarty->registered_plugins['block']['inputgroupaddon'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['inputgroupaddon'][0][0] : null;
if (!is_callable(array($_block_plugin119, 'render'))) {
throw new SmartyException('block tag \'inputgroupaddon\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inputgroupaddon', array('append'=>true));
$_block_repeat=true;
echo $_block_plugin119->render(array('append'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                            <?php $_block_plugin120 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin120, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('type'=>'submit','variant'=>'secondary','class'=>'min-w-sm'));
$_block_repeat=true;
echo $_block_plugin120->render(array('type'=>'submit','variant'=>'secondary','class'=>'min-w-sm'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'newsletterSendSubscribe','section'=>'newsletter'),$_smarty_tpl ) );?>

                                                            <?php $_block_repeat=false;
echo $_block_plugin120->render(array('type'=>'submit','variant'=>'secondary','class'=>'min-w-sm'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                        <?php $_block_repeat=false;
echo $_block_plugin119->render(array('append'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                    <?php $_block_repeat=false;
echo $_block_plugin118->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                <?php $_block_repeat=false;
echo $_block_plugin117->render(array('label-sr-only'=>$_prefixVariable68,'class'=>"newsletter-email-wrapper"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            <?php
}
}
/* {/block 'layout-footer-form-content'} */
/* {block 'layout-footer-form-captcha'} */
class Block_1754893135609117f57ddb21_88367615 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                <div class="d-none form-group<?php if (!empty($_smarty_tpl->tpl_vars['plausiArr']->value['captcha']) && $_smarty_tpl->tpl_vars['plausiArr']->value['captcha'] === true) {?> has-error<?php }?>">
                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['captchaMarkup'][0], array( array('getBody'=>true),$_smarty_tpl ) );?>

                                                </div>
                                            <?php
}
}
/* {/block 'layout-footer-form-captcha'} */
/* {block 'layout-footer-form'} */
class Block_2000129752609117f57cd412_88108716 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'newsletter.php'),$_smarty_tpl ) );
$_prefixVariable67=ob_get_clean();
$_block_plugin116 = isset($_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0] : null;
if (!is_callable(array($_block_plugin116, 'render'))) {
throw new SmartyException('block tag \'form\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('methopd'=>"post",'action'=>$_prefixVariable67));
$_block_repeat=true;
echo $_block_plugin116->render(array('methopd'=>"post",'action'=>$_prefixVariable67), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1396151299609117f57cf683_46457629', 'layout-footer-form-content', $this->tplIndex);
?>

                                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1754893135609117f57ddb21_88367615', 'layout-footer-form-captcha', $this->tplIndex);
?>

                                        <?php $_block_repeat=false;
echo $_block_plugin116->render(array('methopd'=>"post",'action'=>$_prefixVariable67), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    <?php
}
}
/* {/block 'layout-footer-form'} */
/* {block 'layout-footer-newsletter'} */
class Block_463807538609117f57c2c96_21286861 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php $_block_plugin113 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin113, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('class'=>"newsletter-footer"));
$_block_repeat=true;
echo $_block_plugin113->render(array('class'=>"newsletter-footer"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php $_block_plugin114 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin114, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'lg'=>6));
$_block_repeat=true;
echo $_block_plugin114->render(array('cols'=>12,'lg'=>6), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_386627435609117f57c4e77_28733936', 'layout-footer-newsletter-heading', $this->tplIndex);
?>

                                    <?php if ((isset($_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_DATENSCHUTZ') ? constant('LINKTYP_DATENSCHUTZ') : null)]))) {?>
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_179854477609117f57c9026_25848017', 'layout-footer-newsletter-info', $this->tplIndex);
?>

                                    <?php }?>
                                <?php $_block_repeat=false;
echo $_block_plugin114->render(array('cols'=>12,'lg'=>6), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php $_block_plugin115 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin115, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'lg'=>6));
$_block_repeat=true;
echo $_block_plugin115->render(array('cols'=>12,'lg'=>6), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2000129752609117f57cd412_88108716', 'layout-footer-form', $this->tplIndex);
?>

                                <?php $_block_repeat=false;
echo $_block_plugin115->render(array('cols'=>12,'lg'=>6), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php $_block_repeat=false;
echo $_block_plugin113->render(array('class'=>"newsletter-footer"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <hr>
                        <?php
}
}
/* {/block 'layout-footer-newsletter'} */
/* {block 'layout-footer-boxes'} */
class Block_739696403609117f57e3df2_93189236 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getBoxesByPosition'][0], array( array('position'=>'bottom','assign'=>'footerBoxes'),$_smarty_tpl ) );?>

                        <?php if ((isset($_smarty_tpl->tpl_vars['footerBoxes']->value)) && count($_smarty_tpl->tpl_vars['footerBoxes']->value) > 0) {?>
                            <?php $_block_plugin121 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin121, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('id'=>'footer-boxes'));
$_block_repeat=true;
echo $_block_plugin121->render(array('id'=>'footer-boxes'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['footerBoxes']->value, 'box');
$_smarty_tpl->tpl_vars['box']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['box']->value) {
$_smarty_tpl->tpl_vars['box']->do_else = false;
?>
                                    <?php $_block_plugin122 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin122, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'sm'=>6,'md'=>4,'lg'=>3));
$_block_repeat=true;
echo $_block_plugin122->render(array('cols'=>12,'sm'=>6,'md'=>4,'lg'=>3), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php echo $_smarty_tpl->tpl_vars['box']->value->getRenderedContent();?>

                                    <?php $_block_repeat=false;
echo $_block_plugin122->render(array('cols'=>12,'sm'=>6,'md'=>4,'lg'=>3), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php $_block_repeat=false;
echo $_block_plugin121->render(array('id'=>'footer-boxes'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php }?>
                    <?php
}
}
/* {/block 'layout-footer-boxes'} */
/* {block 'layout-footer-socialmedia'} */
class Block_1913105970609117f57f26b7_78408997 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_block_plugin124 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin124, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'class'=>"footer-additional-wrapper col-auto mx-auto"));
$_block_repeat=true;
echo $_block_plugin124->render(array('cols'=>12,'class'=>"footer-additional-wrapper col-auto mx-auto"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <ul class="list-unstyled">
                                        <?php if (!empty($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['facebook'])) {?>
                                            <li>
                                                <?php ob_start();
if (strpos($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['facebook'],'http') !== 0) {
echo "https://";
}
$_prefixVariable71=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'visit_us_on','section'=>'aria','printf'=>'Facebook'),$_smarty_tpl ) );
$_prefixVariable72=ob_get_clean();
$_block_plugin125 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin125, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_prefixVariable71.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['facebook']),'class'=>"btn-icon-secondary btn-facebook btn btn-sm",'aria'=>array('label'=>$_prefixVariable72),'title'=>"Facebook",'target'=>"_blank",'rel'=>"noopener"));
$_block_repeat=true;
echo $_block_plugin125->render(array('href'=>$_prefixVariable71.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['facebook']),'class'=>"btn-icon-secondary btn-facebook btn btn-sm",'aria'=>array('label'=>$_prefixVariable72),'title'=>"Facebook",'target'=>"_blank",'rel'=>"noopener"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <span class="fab fa-facebook-f fa-fw fa-lg"></span>
                                                <?php $_block_repeat=false;
echo $_block_plugin125->render(array('href'=>$_prefixVariable71.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['facebook']),'class'=>"btn-icon-secondary btn-facebook btn btn-sm",'aria'=>array('label'=>$_prefixVariable72),'title'=>"Facebook",'target'=>"_blank",'rel'=>"noopener"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            </li>
                                        <?php }?>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['twitter'])) {?>
                                            <li>
                                                <?php ob_start();
if (strpos($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['twitter'],'http') !== 0) {
echo "https://";
}
$_prefixVariable73=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'visit_us_on','section'=>'aria','printf'=>'Twitter'),$_smarty_tpl ) );
$_prefixVariable74=ob_get_clean();
$_block_plugin126 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin126, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_prefixVariable73.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['twitter']),'class'=>"btn-icon-secondary btn-twitter btn btn-sm",'aria'=>array('label'=>$_prefixVariable74),'title'=>"Twitter",'target'=>"_blank",'rel'=>"noopener"));
$_block_repeat=true;
echo $_block_plugin126->render(array('href'=>$_prefixVariable73.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['twitter']),'class'=>"btn-icon-secondary btn-twitter btn btn-sm",'aria'=>array('label'=>$_prefixVariable74),'title'=>"Twitter",'target'=>"_blank",'rel'=>"noopener"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <i class="fab fa-twitter fa-fw fa-lg"></i>
                                                <?php $_block_repeat=false;
echo $_block_plugin126->render(array('href'=>$_prefixVariable73.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['twitter']),'class'=>"btn-icon-secondary btn-twitter btn btn-sm",'aria'=>array('label'=>$_prefixVariable74),'title'=>"Twitter",'target'=>"_blank",'rel'=>"noopener"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            </li>
                                        <?php }?>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['youtube'])) {?>
                                            <li>
                                                <?php ob_start();
if (strpos($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['youtube'],'http') !== 0) {
echo "https://";
}
$_prefixVariable75=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'visit_us_on','section'=>'aria','printf'=>'YouTube'),$_smarty_tpl ) );
$_prefixVariable76=ob_get_clean();
$_block_plugin127 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin127, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_prefixVariable75.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['youtube']),'class'=>"btn-icon-secondary btn-youtube btn btn-sm",'aria'=>array('label'=>$_prefixVariable76),'title'=>"YouTube",'target'=>"_blank",'rel'=>"noopener"));
$_block_repeat=true;
echo $_block_plugin127->render(array('href'=>$_prefixVariable75.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['youtube']),'class'=>"btn-icon-secondary btn-youtube btn btn-sm",'aria'=>array('label'=>$_prefixVariable76),'title'=>"YouTube",'target'=>"_blank",'rel'=>"noopener"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <i class="fab fa-youtube fa-fw fa-lg"></i>
                                                <?php $_block_repeat=false;
echo $_block_plugin127->render(array('href'=>$_prefixVariable75.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['youtube']),'class'=>"btn-icon-secondary btn-youtube btn btn-sm",'aria'=>array('label'=>$_prefixVariable76),'title'=>"YouTube",'target'=>"_blank",'rel'=>"noopener"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            </li>
                                        <?php }?>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['vimeo'])) {?>
                                            <li>
                                                <?php ob_start();
if (strpos($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['vimeo'],'http') !== 0) {
echo "https://";
}
$_prefixVariable77=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'visit_us_on','section'=>'aria','printf'=>'Vimeo'),$_smarty_tpl ) );
$_prefixVariable78=ob_get_clean();
$_block_plugin128 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin128, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_prefixVariable77.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['vimeo']),'class'=>"btn-icon-secondary btn-vimeo btn btn-sm",'aria'=>array('label'=>$_prefixVariable78),'title'=>"Vimeo",'target'=>"_blank",'rel'=>"noopener"));
$_block_repeat=true;
echo $_block_plugin128->render(array('href'=>$_prefixVariable77.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['vimeo']),'class'=>"btn-icon-secondary btn-vimeo btn btn-sm",'aria'=>array('label'=>$_prefixVariable78),'title'=>"Vimeo",'target'=>"_blank",'rel'=>"noopener"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <i class="fab fa-vimeo-v fa-fw fa-lg"></i>
                                                <?php $_block_repeat=false;
echo $_block_plugin128->render(array('href'=>$_prefixVariable77.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['vimeo']),'class'=>"btn-icon-secondary btn-vimeo btn btn-sm",'aria'=>array('label'=>$_prefixVariable78),'title'=>"Vimeo",'target'=>"_blank",'rel'=>"noopener"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            </li>
                                        <?php }?>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['pinterest'])) {?>
                                            <li>
                                                <?php ob_start();
if (strpos($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['pinterest'],'http') !== 0) {
echo "https://";
}
$_prefixVariable79=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'visit_us_on','section'=>'aria','printf'=>'Pinterest'),$_smarty_tpl ) );
$_prefixVariable80=ob_get_clean();
$_block_plugin129 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin129, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_prefixVariable79.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['pinterest']),'class'=>"btn-icon-secondary btn-pinterest btn btn-sm",'aria'=>array('label'=>$_prefixVariable80),'title'=>"Pinterest",'target'=>"_blank",'rel'=>"noopener"));
$_block_repeat=true;
echo $_block_plugin129->render(array('href'=>$_prefixVariable79.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['pinterest']),'class'=>"btn-icon-secondary btn-pinterest btn btn-sm",'aria'=>array('label'=>$_prefixVariable80),'title'=>"Pinterest",'target'=>"_blank",'rel'=>"noopener"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <i class="fab fa-pinterest-p fa-fw fa-lg"></i>
                                                <?php $_block_repeat=false;
echo $_block_plugin129->render(array('href'=>$_prefixVariable79.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['pinterest']),'class'=>"btn-icon-secondary btn-pinterest btn btn-sm",'aria'=>array('label'=>$_prefixVariable80),'title'=>"Pinterest",'target'=>"_blank",'rel'=>"noopener"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            </li>
                                        <?php }?>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['instagram'])) {?>
                                            <li>
                                                <?php ob_start();
if (strpos($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['instagram'],'http') !== 0) {
echo "https://";
}
$_prefixVariable81=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'visit_us_on','section'=>'aria','printf'=>'Instagram'),$_smarty_tpl ) );
$_prefixVariable82=ob_get_clean();
$_block_plugin130 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin130, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_prefixVariable81.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['instagram']),'class'=>"btn-icon-secondary btn-instagram btn btn-sm",'aria'=>array('label'=>$_prefixVariable82),'title'=>"Instagram",'target'=>"_blank",'rel'=>"noopener"));
$_block_repeat=true;
echo $_block_plugin130->render(array('href'=>$_prefixVariable81.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['instagram']),'class'=>"btn-icon-secondary btn-instagram btn btn-sm",'aria'=>array('label'=>$_prefixVariable82),'title'=>"Instagram",'target'=>"_blank",'rel'=>"noopener"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <i class="fab fa-instagram fa-fw fa-lg"></i>
                                                <?php $_block_repeat=false;
echo $_block_plugin130->render(array('href'=>$_prefixVariable81.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['instagram']),'class'=>"btn-icon-secondary btn-instagram btn btn-sm",'aria'=>array('label'=>$_prefixVariable82),'title'=>"Instagram",'target'=>"_blank",'rel'=>"noopener"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            </li>
                                        <?php }?>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['skype'])) {?>
                                            <li>
                                                <?php ob_start();
if (strpos($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['skype'],'http') !== 0) {
echo "https://";
}
$_prefixVariable83=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'visit_us_on','section'=>'aria','printf'=>'Skype'),$_smarty_tpl ) );
$_prefixVariable84=ob_get_clean();
$_block_plugin131 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin131, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_prefixVariable83.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['skype']),'class'=>"btn-icon-secondary btn-skype btn btn-sm",'aria'=>array('label'=>$_prefixVariable84),'title'=>"Skype",'target'=>"_blank",'rel'=>"noopener"));
$_block_repeat=true;
echo $_block_plugin131->render(array('href'=>$_prefixVariable83.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['skype']),'class'=>"btn-icon-secondary btn-skype btn btn-sm",'aria'=>array('label'=>$_prefixVariable84),'title'=>"Skype",'target'=>"_blank",'rel'=>"noopener"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <i class="fab fa-skype fa-fw fa-lg"></i>
                                                <?php $_block_repeat=false;
echo $_block_plugin131->render(array('href'=>$_prefixVariable83.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['skype']),'class'=>"btn-icon-secondary btn-skype btn btn-sm",'aria'=>array('label'=>$_prefixVariable84),'title'=>"Skype",'target'=>"_blank",'rel'=>"noopener"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            </li>
                                        <?php }?>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['xing'])) {?>
                                            <li>
                                                <?php ob_start();
if (strpos($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['xing'],'http') !== 0) {
echo "https://";
}
$_prefixVariable85=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'visit_us_on','section'=>'aria','printf'=>'Xing'),$_smarty_tpl ) );
$_prefixVariable86=ob_get_clean();
$_block_plugin132 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin132, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_prefixVariable85.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['xing']),'class'=>"btn-icon-secondary btn-xing btn btn-sm",'aria'=>array('label'=>$_prefixVariable86),'title'=>"Xing",'target'=>"_blank",'rel'=>"noopener"));
$_block_repeat=true;
echo $_block_plugin132->render(array('href'=>$_prefixVariable85.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['xing']),'class'=>"btn-icon-secondary btn-xing btn btn-sm",'aria'=>array('label'=>$_prefixVariable86),'title'=>"Xing",'target'=>"_blank",'rel'=>"noopener"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <i class="fab fa-xing fa-fw fa-lg"></i>
                                                <?php $_block_repeat=false;
echo $_block_plugin132->render(array('href'=>$_prefixVariable85.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['xing']),'class'=>"btn-icon-secondary btn-xing btn btn-sm",'aria'=>array('label'=>$_prefixVariable86),'title'=>"Xing",'target'=>"_blank",'rel'=>"noopener"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            </li>
                                        <?php }?>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['linkedin'])) {?>
                                            <li>
                                                <?php ob_start();
if (strpos($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['linkedin'],'http') !== 0) {
echo "https://";
}
$_prefixVariable87=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'visit_us_on','section'=>'aria','printf'=>'Linkedin'),$_smarty_tpl ) );
$_prefixVariable88=ob_get_clean();
$_block_plugin133 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin133, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_prefixVariable87.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['linkedin']),'class'=>"btn-icon-secondary btn-linkedin btn btn-sm",'aria'=>array('label'=>$_prefixVariable88),'title'=>"Linkedin",'target'=>"_blank",'rel'=>"noopener"));
$_block_repeat=true;
echo $_block_plugin133->render(array('href'=>$_prefixVariable87.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['linkedin']),'class'=>"btn-icon-secondary btn-linkedin btn btn-sm",'aria'=>array('label'=>$_prefixVariable88),'title'=>"Linkedin",'target'=>"_blank",'rel'=>"noopener"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <i class="fab fa-linkedin-in fa-fw fa-lg"></i>
                                                <?php $_block_repeat=false;
echo $_block_plugin133->render(array('href'=>$_prefixVariable87.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['linkedin']),'class'=>"btn-icon-secondary btn-linkedin btn btn-sm",'aria'=>array('label'=>$_prefixVariable88),'title'=>"Linkedin",'target'=>"_blank",'rel'=>"noopener"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            </li>
                                        <?php }?>
                                        </ul>
                                    <?php $_block_repeat=false;
echo $_block_plugin124->render(array('cols'=>12,'class'=>"footer-additional-wrapper col-auto mx-auto"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php
}
}
/* {/block 'layout-footer-socialmedia'} */
/* {block 'layout-footer-additional'} */
class Block_1435065757609117f57ef644_13605769 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['socialmedia_footer'] === 'Y') {?>
                            <?php $_block_plugin123 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin123, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('class'=>"footer-social-media"));
$_block_repeat=true;
echo $_block_plugin123->render(array('class'=>"footer-social-media"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1913105970609117f57f26b7_78408997', 'layout-footer-socialmedia', $this->tplIndex);
?>

                            <?php $_block_repeat=false;
echo $_block_plugin123->render(array('class'=>"footer-social-media"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>                        <?php }?>
                    <?php
}
}
/* {/block 'layout-footer-additional'} */
/* {block 'footer-vat-notice'} */
class Block_1943778323609117f5853922_64467839 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <span class="small">* <?php echo $_smarty_tpl->tpl_vars['footnoteVat']->value;
if ((isset($_smarty_tpl->tpl_vars['footnoteShipping']->value))) {
echo $_smarty_tpl->tpl_vars['footnoteShipping']->value;
}?></span>
                        <?php
}
}
/* {/block 'footer-vat-notice'} */
/* {block 'layout-footer-copyright-copyright'} */
class Block_1046934762609117f5858c19_58439048 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_block_plugin136 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin136, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array());
$_block_repeat=true;
echo $_block_plugin136->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['meta_copyright']->value)) {?>
                                            <span class="icon-mr-2" itemprop="copyrightHolder">&copy; <?php echo $_smarty_tpl->tpl_vars['meta_copyright']->value;?>
</span>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_zaehler_anzeigen'] === 'Y') {?>
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'counter'),$_smarty_tpl ) );?>
: <?php echo $_smarty_tpl->tpl_vars['Besucherzaehler']->value;?>

                                        <?php }?>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_fusszeilehinweis'])) {?>
                                            <span class="ml-2"><?php echo $_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_fusszeilehinweis'];?>
</span>
                                        <?php }?>
                                    <?php $_block_repeat=false;
echo $_block_plugin136->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php
}
}
/* {/block 'layout-footer-copyright-copyright'} */
/* {block 'layout-footer-copyright-brand'} */
class Block_1026152948609117f586a570_03402762 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <?php ob_start();
if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['button_scroll_top'] === 'Y') {
echo " pr-8";
}
$_prefixVariable89=ob_get_clean();
$_block_plugin137 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin137, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('class'=>"col-auto ml-auto-util".$_prefixVariable89,'id'=>"system-credits"));
$_block_repeat=true;
echo $_block_plugin137->render(array('class'=>"col-auto ml-auto-util".$_prefixVariable89,'id'=>"system-credits"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            Powered by <?php $_block_plugin138 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin138, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>"https://jtl-url.de/jtlshop",'class'=>"text-white text-decoration-underline",'title'=>"JTL-Shop",'target'=>"_blank",'rel'=>"noopener nofollow"));
$_block_repeat=true;
echo $_block_plugin138->render(array('href'=>"https://jtl-url.de/jtlshop",'class'=>"text-white text-decoration-underline",'title'=>"JTL-Shop",'target'=>"_blank",'rel'=>"noopener nofollow"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>JTL-Shop<?php $_block_repeat=false;
echo $_block_plugin138->render(array('href'=>"https://jtl-url.de/jtlshop",'class'=>"text-white text-decoration-underline",'title'=>"JTL-Shop",'target'=>"_blank",'rel'=>"noopener nofollow"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        <?php $_block_repeat=false;
echo $_block_plugin137->render(array('class'=>"col-auto ml-auto-util".$_prefixVariable89,'id'=>"system-credits"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    <?php
}
}
/* {/block 'layout-footer-copyright-brand'} */
/* {block 'layout-footer-copyright'} */
class Block_63476733609117f58563a7_95560855 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div id="copyright">
                        <?php $_block_plugin134 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin134, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array('fluid'=>true));
$_block_repeat=true;
echo $_block_plugin134->render(array('fluid'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php $_block_plugin135 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin135, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array());
$_block_repeat=true;
echo $_block_plugin135->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php $_smarty_tpl->_assignInScope('isBrandFree', JTL\Shop::isBrandfree());?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1046934762609117f5858c19_58439048', 'layout-footer-copyright-copyright', $this->tplIndex);
?>

                                <?php if (!$_smarty_tpl->tpl_vars['isBrandFree']->value) {?>
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1026152948609117f586a570_03402762', 'layout-footer-copyright-brand', $this->tplIndex);
?>

                                <?php }?>
                            <?php $_block_repeat=false;
echo $_block_plugin135->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php $_block_repeat=false;
echo $_block_plugin134->render(array('fluid'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    </div>
                <?php
}
}
/* {/block 'layout-footer-copyright'} */
/* {block 'layout-footer-scroll-top'} */
class Block_915248207609117f58722b7_52127308 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['button_scroll_top'] === 'Y') {?>
                        <?php $_smarty_tpl->_subTemplateRender('file:snippets/scroll_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php }?>
                <?php
}
}
/* {/block 'layout-footer-scroll-top'} */
/* {block 'layout-footer-content'} */
class Block_130789652609117f57bbb87_74258661 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if (!$_smarty_tpl->tpl_vars['bExclusive']->value) {?>
            <?php $_smarty_tpl->_assignInScope('newsletterActive', $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['newsletter_footer'] === 'Y' && $_smarty_tpl->tpl_vars['Einstellungen']->value['newsletter']['newsletter_active'] === 'Y');?>
            <footer id="footer" <?php if ($_smarty_tpl->tpl_vars['newsletterActive']->value) {?>class="newsletter-active"<?php }?>>
                <?php $_block_plugin112 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin112, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array('class'=>"d-print-none"));
$_block_repeat=true;
echo $_block_plugin112->render(array('class'=>"d-print-none"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php if ($_smarty_tpl->tpl_vars['newsletterActive']->value) {?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_463807538609117f57c2c96_21286861', 'layout-footer-newsletter', $this->tplIndex);
?>

                    <?php }?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_739696403609117f57e3df2_93189236', 'layout-footer-boxes', $this->tplIndex);
?>


                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1435065757609117f57ef644_13605769', 'layout-footer-additional', $this->tplIndex);
?>
                    <div class="footnote-vat">
                        <?php if ($_smarty_tpl->tpl_vars['NettoPreise']->value == 1) {?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'footnoteExclusiveVat','assign'=>'footnoteVat'),$_smarty_tpl ) );?>

                        <?php } else { ?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'footnoteInclusiveVat','assign'=>'footnoteVat'),$_smarty_tpl ) );?>

                        <?php }?>
                        <?php if ((isset($_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_VERSAND') ? constant('LINKTYP_VERSAND') : null)]))) {?>
                            <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_versandhinweis'] === 'zzgl') {?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'footnoteExclusiveShipping','printf'=>$_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_VERSAND') ? constant('LINKTYP_VERSAND') : null)]->getURL(),'assign'=>'footnoteShipping'),$_smarty_tpl ) );?>

                            <?php } elseif ($_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_versandhinweis'] === 'inkl') {?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'footnoteInclusiveShipping','printf'=>$_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_VERSAND') ? constant('LINKTYP_VERSAND') : null)]->getURL(),'assign'=>'footnoteShipping'),$_smarty_tpl ) );?>

                            <?php }?>
                        <?php }?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1943778323609117f5853922_64467839', 'footer-vat-notice', $this->tplIndex);
?>

                    </div>
                <?php $_block_repeat=false;
echo $_block_plugin112->render(array('class'=>"d-print-none"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_63476733609117f58563a7_95560855', 'layout-footer-copyright', $this->tplIndex);
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_915248207609117f58722b7_52127308', 'layout-footer-scroll-top', $this->tplIndex);
?>

            </footer>
        <?php }?>
    <?php
}
}
/* {/block 'layout-footer-content'} */
/* {block 'layout-footer-io-path'} */
class Block_335601283609117f5876971_49685336 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div id="jtl-io-path" data-path="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
" class="d-none"></div>
    <?php
}
}
/* {/block 'layout-footer-io-path'} */
/* {block 'layout-footer-js'} */
class Block_1318691406609117f5877ec3_60229753 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo $_smarty_tpl->tpl_vars['dbgBarBody']->value;?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['captchaMarkup'][0], array( array('getBody'=>false),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'layout-footer-js'} */
/* {block 'layout-footer'} */
class Block_1313559238609117f5796ce2_88996542 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout-footer' => 
  array (
    0 => 'Block_1313559238609117f5796ce2_88996542',
  ),
  'layout-footer-consent-manager' => 
  array (
    0 => 'Block_157289194609117f579ce83_94520959',
  ),
  'layout-footer-content-all-closingtags' => 
  array (
    0 => 'Block_688343897609117f57a9aa6_42404438',
  ),
  'layout-footer-aside' => 
  array (
    0 => 'Block_477345735609117f57aa453_40914921',
  ),
  'layout-footer-content-productlist-col-closingtag' => 
  array (
    0 => 'Block_1107933154609117f57b1e48_26457918',
  ),
  'layout-footer-sidepanel-left' => 
  array (
    0 => 'Block_700727139609117f57b31c5_66318957',
  ),
  'footer-sidepanel-left-content' => 
  array (
    0 => 'Block_319562138609117f57b3ae7_33743165',
  ),
  'layout-footer-content-productlist-row-closingtag' => 
  array (
    0 => 'Block_1745894738609117f57b5a26_87570105',
  ),
  'layout-footer-content-closingtag' => 
  array (
    0 => 'Block_734444741609117f57b75c6_08790129',
  ),
  'layout-footer-content-wrapper-closingtag' => 
  array (
    0 => 'Block_746661212609117f57b9482_20111971',
  ),
  'layout-footer-main-wrapper-closingtag' => 
  array (
    0 => 'Block_1904127157609117f57bab29_88703303',
  ),
  'layout-footer-content' => 
  array (
    0 => 'Block_130789652609117f57bbb87_74258661',
  ),
  'layout-footer-newsletter' => 
  array (
    0 => 'Block_463807538609117f57c2c96_21286861',
  ),
  'layout-footer-newsletter-heading' => 
  array (
    0 => 'Block_386627435609117f57c4e77_28733936',
  ),
  'layout-footer-newsletter-info' => 
  array (
    0 => 'Block_179854477609117f57c9026_25848017',
  ),
  'layout-footer-form' => 
  array (
    0 => 'Block_2000129752609117f57cd412_88108716',
  ),
  'layout-footer-form-content' => 
  array (
    0 => 'Block_1396151299609117f57cf683_46457629',
  ),
  'layout-footer-form-captcha' => 
  array (
    0 => 'Block_1754893135609117f57ddb21_88367615',
  ),
  'layout-footer-boxes' => 
  array (
    0 => 'Block_739696403609117f57e3df2_93189236',
  ),
  'layout-footer-additional' => 
  array (
    0 => 'Block_1435065757609117f57ef644_13605769',
  ),
  'layout-footer-socialmedia' => 
  array (
    0 => 'Block_1913105970609117f57f26b7_78408997',
  ),
  'footer-vat-notice' => 
  array (
    0 => 'Block_1943778323609117f5853922_64467839',
  ),
  'layout-footer-copyright' => 
  array (
    0 => 'Block_63476733609117f58563a7_95560855',
  ),
  'layout-footer-copyright-copyright' => 
  array (
    0 => 'Block_1046934762609117f5858c19_58439048',
  ),
  'layout-footer-copyright-brand' => 
  array (
    0 => 'Block_1026152948609117f586a570_03402762',
  ),
  'layout-footer-scroll-top' => 
  array (
    0 => 'Block_915248207609117f58722b7_52127308',
  ),
  'layout-footer-io-path' => 
  array (
    0 => 'Block_335601283609117f5876971_49685336',
  ),
  'layout-footer-js' => 
  array (
    0 => 'Block_1318691406609117f5877ec3_60229753',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_157289194609117f579ce83_94520959', 'layout-footer-consent-manager', $this->tplIndex);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_688343897609117f57a9aa6_42404438', 'layout-footer-content-all-closingtags', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1904127157609117f57bab29_88703303', 'layout-footer-main-wrapper-closingtag', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_130789652609117f57bbb87_74258661', 'layout-footer-content', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_335601283609117f5876971_49685336', 'layout-footer-io-path', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1318691406609117f5877ec3_60229753', 'layout-footer-js', $this->tplIndex);
?>

    </body>
    </html>
<?php
}
}
/* {/block 'layout-footer'} */
}
