<?php
/* Smarty version 3.1.38, created on 2021-05-19 14:59:19
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\layout\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a50ba79b87f7_97923006',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6524f77a9099c237ef4064e0ee254183321e70e' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\layout\\footer.tpl',
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
function content_60a50ba79b87f7_97923006 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_160585167360a50ba7582694_71587447', 'layout-footer');
?>

<?php }
/* {block 'layout-footer-consent-manager'} */
class Block_159424264560a50ba7583ee0_30607208 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['consentmanager']['consent_manager_active'] === 'Y' && !$_smarty_tpl->tpl_vars['isAjax']->value && $_smarty_tpl->tpl_vars['consentItems']->value->isNotEmpty()) {?>
            <input id="consent-manager-show-banner" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['Einstellungen']->value['consentmanager']['consent_manager_show_banner'];?>
">
            <?php $_smarty_tpl->_subTemplateRender('file:snippets/consent_manager.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php $_block_plugin143 = isset($_smarty_tpl->smarty->registered_plugins['block']['inline_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['inline_script'][0][0] : null;
if (!is_callable(array($_block_plugin143, 'inlineScript'))) {
throw new SmartyException('block tag \'inline_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo $_block_plugin143->inlineScript(array(), null, $_smarty_tpl, $_block_repeat);
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
echo $_block_plugin143->inlineScript(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php }?>
    <?php
}
}
/* {/block 'layout-footer-consent-manager'} */
/* {block 'layout-footer-content-productlist-col-closingtag'} */
class Block_164617316860a50ba759d086_06630348 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    </div>                <?php
}
}
/* {/block 'layout-footer-content-productlist-col-closingtag'} */
/* {block 'footer-sidepanel-left-content'} */
class Block_106681715660a50ba759f1e0_05875507 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['boxes']->value['left'];
}
}
/* {/block 'footer-sidepanel-left-content'} */
/* {block 'layout-footer-sidepanel-left'} */
class Block_183767687160a50ba759e707_23738967 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <aside id="sidepanel_left" class="sidepanel-left d-print-none col-12 col-lg-4 col-xl-3 order-lg-0 dropdown-full-width">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_106681715660a50ba759f1e0_05875507', 'footer-sidepanel-left-content', $this->tplIndex);
?>

                    </aside>
                <?php
}
}
/* {/block 'layout-footer-sidepanel-left'} */
/* {block 'layout-footer-content-productlist-row-closingtag'} */
class Block_138649534160a50ba75a1777_08468336 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    </div>                <?php
}
}
/* {/block 'layout-footer-content-productlist-row-closingtag'} */
/* {block 'layout-footer-aside'} */
class Block_109144635760a50ba75936b1_31740726 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['has_boxes'][0], array( array('position'=>'left','assign'=>'hasLeftBox'),$_smarty_tpl ) );?>


            <?php if ((defined('PAGE_ARTIKELLISTE') ? constant('PAGE_ARTIKELLISTE') : null) === $_smarty_tpl->tpl_vars['nSeitenTyp']->value && !$_smarty_tpl->tpl_vars['bExclusive']->value && $_smarty_tpl->tpl_vars['hasLeftBox']->value && !empty(trim(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['boxes']->value['left'])))) {?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_164617316860a50ba759d086_06630348', 'layout-footer-content-productlist-col-closingtag', $this->tplIndex);
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_183767687160a50ba759e707_23738967', 'layout-footer-sidepanel-left', $this->tplIndex);
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_138649534160a50ba75a1777_08468336', 'layout-footer-content-productlist-row-closingtag', $this->tplIndex);
?>

            <?php }?>
        <?php
}
}
/* {/block 'layout-footer-aside'} */
/* {block 'layout-footer-content-closingtag'} */
class Block_31125143260a50ba75a3808_60721460 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_content','title'=>'Default Area','inContainer'=>false),$_smarty_tpl ) );?>

            </div>        <?php
}
}
/* {/block 'layout-footer-content-closingtag'} */
/* {block 'layout-footer-content-wrapper-closingtag'} */
class Block_138333201060a50ba76343e8_74472471 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            </div>        <?php
}
}
/* {/block 'layout-footer-content-wrapper-closingtag'} */
/* {block 'layout-footer-content-all-closingtags'} */
class Block_156127911160a50ba7592b27_30693417 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_109144635760a50ba75936b1_31740726', 'layout-footer-aside', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_31125143260a50ba75a3808_60721460', 'layout-footer-content-closingtag', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_138333201060a50ba76343e8_74472471', 'layout-footer-content-wrapper-closingtag', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'layout-footer-content-all-closingtags'} */
/* {block 'layout-footer-main-wrapper-closingtag'} */
class Block_117450077260a50ba763a7a9_86674557 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        </main>     <?php
}
}
/* {/block 'layout-footer-main-wrapper-closingtag'} */
/* {block 'layout-footer-newsletter-heading'} */
class Block_177275780960a50ba764d5f7_18913638 extends Smarty_Internal_Block
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
class Block_33656018960a50ba7652715_04476864 extends Smarty_Internal_Block
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
class Block_148111677360a50ba765ebf7_92629108 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"hidden",'name'=>"abonnieren",'value'=>"2"),$_smarty_tpl ) );?>

                                                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'emailadress'),$_smarty_tpl ) );
$_prefixVariable73=ob_get_clean();
$_block_plugin149 = isset($_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0] : null;
if (!is_callable(array($_block_plugin149, 'render'))) {
throw new SmartyException('block tag \'formgroup\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('formgroup', array('label-sr-only'=>$_prefixVariable73,'class'=>"newsletter-email-wrapper"));
$_block_repeat=true;
echo $_block_plugin149->render(array('label-sr-only'=>$_prefixVariable73,'class'=>"newsletter-email-wrapper"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <?php $_block_plugin150 = isset($_smarty_tpl->smarty->registered_plugins['block']['inputgroup'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['inputgroup'][0][0] : null;
if (!is_callable(array($_block_plugin150, 'render'))) {
throw new SmartyException('block tag \'inputgroup\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inputgroup', array());
$_block_repeat=true;
echo $_block_plugin150->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'emailadress'),$_smarty_tpl ) );
$_prefixVariable74=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'emailadress'),$_smarty_tpl ) );
$_prefixVariable75 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"email",'name'=>"cEmail",'id'=>"newsletter_email",'placeholder'=>$_prefixVariable74,'aria'=>array('label'=>$_prefixVariable75)),$_smarty_tpl ) );?>

                                                        <?php $_block_plugin151 = isset($_smarty_tpl->smarty->registered_plugins['block']['inputgroupaddon'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['inputgroupaddon'][0][0] : null;
if (!is_callable(array($_block_plugin151, 'render'))) {
throw new SmartyException('block tag \'inputgroupaddon\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inputgroupaddon', array('append'=>true));
$_block_repeat=true;
echo $_block_plugin151->render(array('append'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                            <?php $_block_plugin152 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin152, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('type'=>'submit','variant'=>'secondary','class'=>'min-w-sm'));
$_block_repeat=true;
echo $_block_plugin152->render(array('type'=>'submit','variant'=>'secondary','class'=>'min-w-sm'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'newsletterSendSubscribe','section'=>'newsletter'),$_smarty_tpl ) );?>

                                                            <?php $_block_repeat=false;
echo $_block_plugin152->render(array('type'=>'submit','variant'=>'secondary','class'=>'min-w-sm'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                        <?php $_block_repeat=false;
echo $_block_plugin151->render(array('append'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                    <?php $_block_repeat=false;
echo $_block_plugin150->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                <?php $_block_repeat=false;
echo $_block_plugin149->render(array('label-sr-only'=>$_prefixVariable73,'class'=>"newsletter-email-wrapper"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            <?php
}
}
/* {/block 'layout-footer-form-content'} */
/* {block 'layout-footer-form-captcha'} */
class Block_121685170660a50ba76851a3_07899810 extends Smarty_Internal_Block
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
class Block_74892092960a50ba765c1c7_56429079 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'newsletter.php'),$_smarty_tpl ) );
$_prefixVariable72=ob_get_clean();
$_block_plugin148 = isset($_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0] : null;
if (!is_callable(array($_block_plugin148, 'render'))) {
throw new SmartyException('block tag \'form\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('methopd'=>"post",'action'=>$_prefixVariable72));
$_block_repeat=true;
echo $_block_plugin148->render(array('methopd'=>"post",'action'=>$_prefixVariable72), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_148111677360a50ba765ebf7_92629108', 'layout-footer-form-content', $this->tplIndex);
?>

                                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121685170660a50ba76851a3_07899810', 'layout-footer-form-captcha', $this->tplIndex);
?>

                                        <?php $_block_repeat=false;
echo $_block_plugin148->render(array('methopd'=>"post",'action'=>$_prefixVariable72), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    <?php
}
}
/* {/block 'layout-footer-form'} */
/* {block 'layout-footer-newsletter'} */
class Block_8407946660a50ba764a854_40172576 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php $_block_plugin145 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin145, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('class'=>"newsletter-footer"));
$_block_repeat=true;
echo $_block_plugin145->render(array('class'=>"newsletter-footer"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php $_block_plugin146 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin146, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'lg'=>6));
$_block_repeat=true;
echo $_block_plugin146->render(array('cols'=>12,'lg'=>6), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_177275780960a50ba764d5f7_18913638', 'layout-footer-newsletter-heading', $this->tplIndex);
?>

                                    <?php if ((isset($_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_DATENSCHUTZ') ? constant('LINKTYP_DATENSCHUTZ') : null)]))) {?>
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_33656018960a50ba7652715_04476864', 'layout-footer-newsletter-info', $this->tplIndex);
?>

                                    <?php }?>
                                <?php $_block_repeat=false;
echo $_block_plugin146->render(array('cols'=>12,'lg'=>6), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php $_block_plugin147 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin147, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'lg'=>6));
$_block_repeat=true;
echo $_block_plugin147->render(array('cols'=>12,'lg'=>6), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_74892092960a50ba765c1c7_56429079', 'layout-footer-form', $this->tplIndex);
?>

                                <?php $_block_repeat=false;
echo $_block_plugin147->render(array('cols'=>12,'lg'=>6), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php $_block_repeat=false;
echo $_block_plugin145->render(array('class'=>"newsletter-footer"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <hr>
                        <?php
}
}
/* {/block 'layout-footer-newsletter'} */
/* {block 'layout-footer-boxes'} */
class Block_164641045960a50ba768ce49_15651971 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getBoxesByPosition'][0], array( array('position'=>'bottom','assign'=>'footerBoxes'),$_smarty_tpl ) );?>

                        <?php if ((isset($_smarty_tpl->tpl_vars['footerBoxes']->value)) && count($_smarty_tpl->tpl_vars['footerBoxes']->value) > 0) {?>
                            <?php $_block_plugin153 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin153, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('id'=>'footer-boxes'));
$_block_repeat=true;
echo $_block_plugin153->render(array('id'=>'footer-boxes'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['footerBoxes']->value, 'box');
$_smarty_tpl->tpl_vars['box']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['box']->value) {
$_smarty_tpl->tpl_vars['box']->do_else = false;
?>
                                    <?php $_block_plugin154 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin154, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'sm'=>6,'md'=>4,'lg'=>3));
$_block_repeat=true;
echo $_block_plugin154->render(array('cols'=>12,'sm'=>6,'md'=>4,'lg'=>3), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php echo $_smarty_tpl->tpl_vars['box']->value->getRenderedContent();?>

                                    <?php $_block_repeat=false;
echo $_block_plugin154->render(array('cols'=>12,'sm'=>6,'md'=>4,'lg'=>3), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php $_block_repeat=false;
echo $_block_plugin153->render(array('id'=>'footer-boxes'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php }?>
                    <?php
}
}
/* {/block 'layout-footer-boxes'} */
/* {block 'layout-footer-socialmedia'} */
class Block_74839545860a50ba7787a92_01412853 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_block_plugin156 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin156, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'class'=>"footer-additional-wrapper col-auto mx-auto"));
$_block_repeat=true;
echo $_block_plugin156->render(array('cols'=>12,'class'=>"footer-additional-wrapper col-auto mx-auto"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <ul class="list-unstyled">
                                        <?php if (!empty($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['facebook'])) {?>
                                            <li>
                                                <?php ob_start();
if (strpos($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['facebook'],'http') !== 0) {
echo "https://";
}
$_prefixVariable76=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'visit_us_on','section'=>'aria','printf'=>'Facebook'),$_smarty_tpl ) );
$_prefixVariable77=ob_get_clean();
$_block_plugin157 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin157, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_prefixVariable76.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['facebook']),'class'=>"btn-icon-secondary btn-facebook btn btn-sm",'aria'=>array('label'=>$_prefixVariable77),'title'=>"Facebook",'target'=>"_blank",'rel'=>"noopener"));
$_block_repeat=true;
echo $_block_plugin157->render(array('href'=>$_prefixVariable76.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['facebook']),'class'=>"btn-icon-secondary btn-facebook btn btn-sm",'aria'=>array('label'=>$_prefixVariable77),'title'=>"Facebook",'target'=>"_blank",'rel'=>"noopener"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <span class="fab fa-facebook-f fa-fw fa-lg"></span>
                                                <?php $_block_repeat=false;
echo $_block_plugin157->render(array('href'=>$_prefixVariable76.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['facebook']),'class'=>"btn-icon-secondary btn-facebook btn btn-sm",'aria'=>array('label'=>$_prefixVariable77),'title'=>"Facebook",'target'=>"_blank",'rel'=>"noopener"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
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
$_prefixVariable78=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'visit_us_on','section'=>'aria','printf'=>'Twitter'),$_smarty_tpl ) );
$_prefixVariable79=ob_get_clean();
$_block_plugin158 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin158, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_prefixVariable78.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['twitter']),'class'=>"btn-icon-secondary btn-twitter btn btn-sm",'aria'=>array('label'=>$_prefixVariable79),'title'=>"Twitter",'target'=>"_blank",'rel'=>"noopener"));
$_block_repeat=true;
echo $_block_plugin158->render(array('href'=>$_prefixVariable78.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['twitter']),'class'=>"btn-icon-secondary btn-twitter btn btn-sm",'aria'=>array('label'=>$_prefixVariable79),'title'=>"Twitter",'target'=>"_blank",'rel'=>"noopener"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <i class="fab fa-twitter fa-fw fa-lg"></i>
                                                <?php $_block_repeat=false;
echo $_block_plugin158->render(array('href'=>$_prefixVariable78.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['twitter']),'class'=>"btn-icon-secondary btn-twitter btn btn-sm",'aria'=>array('label'=>$_prefixVariable79),'title'=>"Twitter",'target'=>"_blank",'rel'=>"noopener"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
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
$_prefixVariable80=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'visit_us_on','section'=>'aria','printf'=>'YouTube'),$_smarty_tpl ) );
$_prefixVariable81=ob_get_clean();
$_block_plugin159 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin159, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_prefixVariable80.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['youtube']),'class'=>"btn-icon-secondary btn-youtube btn btn-sm",'aria'=>array('label'=>$_prefixVariable81),'title'=>"YouTube",'target'=>"_blank",'rel'=>"noopener"));
$_block_repeat=true;
echo $_block_plugin159->render(array('href'=>$_prefixVariable80.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['youtube']),'class'=>"btn-icon-secondary btn-youtube btn btn-sm",'aria'=>array('label'=>$_prefixVariable81),'title'=>"YouTube",'target'=>"_blank",'rel'=>"noopener"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <i class="fab fa-youtube fa-fw fa-lg"></i>
                                                <?php $_block_repeat=false;
echo $_block_plugin159->render(array('href'=>$_prefixVariable80.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['youtube']),'class'=>"btn-icon-secondary btn-youtube btn btn-sm",'aria'=>array('label'=>$_prefixVariable81),'title'=>"YouTube",'target'=>"_blank",'rel'=>"noopener"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
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
$_prefixVariable82=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'visit_us_on','section'=>'aria','printf'=>'Vimeo'),$_smarty_tpl ) );
$_prefixVariable83=ob_get_clean();
$_block_plugin160 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin160, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_prefixVariable82.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['vimeo']),'class'=>"btn-icon-secondary btn-vimeo btn btn-sm",'aria'=>array('label'=>$_prefixVariable83),'title'=>"Vimeo",'target'=>"_blank",'rel'=>"noopener"));
$_block_repeat=true;
echo $_block_plugin160->render(array('href'=>$_prefixVariable82.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['vimeo']),'class'=>"btn-icon-secondary btn-vimeo btn btn-sm",'aria'=>array('label'=>$_prefixVariable83),'title'=>"Vimeo",'target'=>"_blank",'rel'=>"noopener"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <i class="fab fa-vimeo-v fa-fw fa-lg"></i>
                                                <?php $_block_repeat=false;
echo $_block_plugin160->render(array('href'=>$_prefixVariable82.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['vimeo']),'class'=>"btn-icon-secondary btn-vimeo btn btn-sm",'aria'=>array('label'=>$_prefixVariable83),'title'=>"Vimeo",'target'=>"_blank",'rel'=>"noopener"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
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
$_prefixVariable84=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'visit_us_on','section'=>'aria','printf'=>'Pinterest'),$_smarty_tpl ) );
$_prefixVariable85=ob_get_clean();
$_block_plugin161 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin161, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_prefixVariable84.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['pinterest']),'class'=>"btn-icon-secondary btn-pinterest btn btn-sm",'aria'=>array('label'=>$_prefixVariable85),'title'=>"Pinterest",'target'=>"_blank",'rel'=>"noopener"));
$_block_repeat=true;
echo $_block_plugin161->render(array('href'=>$_prefixVariable84.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['pinterest']),'class'=>"btn-icon-secondary btn-pinterest btn btn-sm",'aria'=>array('label'=>$_prefixVariable85),'title'=>"Pinterest",'target'=>"_blank",'rel'=>"noopener"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <i class="fab fa-pinterest-p fa-fw fa-lg"></i>
                                                <?php $_block_repeat=false;
echo $_block_plugin161->render(array('href'=>$_prefixVariable84.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['pinterest']),'class'=>"btn-icon-secondary btn-pinterest btn btn-sm",'aria'=>array('label'=>$_prefixVariable85),'title'=>"Pinterest",'target'=>"_blank",'rel'=>"noopener"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
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
$_prefixVariable86=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'visit_us_on','section'=>'aria','printf'=>'Instagram'),$_smarty_tpl ) );
$_prefixVariable87=ob_get_clean();
$_block_plugin162 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin162, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_prefixVariable86.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['instagram']),'class'=>"btn-icon-secondary btn-instagram btn btn-sm",'aria'=>array('label'=>$_prefixVariable87),'title'=>"Instagram",'target'=>"_blank",'rel'=>"noopener"));
$_block_repeat=true;
echo $_block_plugin162->render(array('href'=>$_prefixVariable86.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['instagram']),'class'=>"btn-icon-secondary btn-instagram btn btn-sm",'aria'=>array('label'=>$_prefixVariable87),'title'=>"Instagram",'target'=>"_blank",'rel'=>"noopener"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <i class="fab fa-instagram fa-fw fa-lg"></i>
                                                <?php $_block_repeat=false;
echo $_block_plugin162->render(array('href'=>$_prefixVariable86.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['instagram']),'class'=>"btn-icon-secondary btn-instagram btn btn-sm",'aria'=>array('label'=>$_prefixVariable87),'title'=>"Instagram",'target'=>"_blank",'rel'=>"noopener"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
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
$_prefixVariable88=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'visit_us_on','section'=>'aria','printf'=>'Skype'),$_smarty_tpl ) );
$_prefixVariable89=ob_get_clean();
$_block_plugin163 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin163, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_prefixVariable88.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['skype']),'class'=>"btn-icon-secondary btn-skype btn btn-sm",'aria'=>array('label'=>$_prefixVariable89),'title'=>"Skype",'target'=>"_blank",'rel'=>"noopener"));
$_block_repeat=true;
echo $_block_plugin163->render(array('href'=>$_prefixVariable88.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['skype']),'class'=>"btn-icon-secondary btn-skype btn btn-sm",'aria'=>array('label'=>$_prefixVariable89),'title'=>"Skype",'target'=>"_blank",'rel'=>"noopener"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <i class="fab fa-skype fa-fw fa-lg"></i>
                                                <?php $_block_repeat=false;
echo $_block_plugin163->render(array('href'=>$_prefixVariable88.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['skype']),'class'=>"btn-icon-secondary btn-skype btn btn-sm",'aria'=>array('label'=>$_prefixVariable89),'title'=>"Skype",'target'=>"_blank",'rel'=>"noopener"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
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
$_prefixVariable90=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'visit_us_on','section'=>'aria','printf'=>'Xing'),$_smarty_tpl ) );
$_prefixVariable91=ob_get_clean();
$_block_plugin164 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin164, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_prefixVariable90.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['xing']),'class'=>"btn-icon-secondary btn-xing btn btn-sm",'aria'=>array('label'=>$_prefixVariable91),'title'=>"Xing",'target'=>"_blank",'rel'=>"noopener"));
$_block_repeat=true;
echo $_block_plugin164->render(array('href'=>$_prefixVariable90.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['xing']),'class'=>"btn-icon-secondary btn-xing btn btn-sm",'aria'=>array('label'=>$_prefixVariable91),'title'=>"Xing",'target'=>"_blank",'rel'=>"noopener"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <i class="fab fa-xing fa-fw fa-lg"></i>
                                                <?php $_block_repeat=false;
echo $_block_plugin164->render(array('href'=>$_prefixVariable90.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['xing']),'class'=>"btn-icon-secondary btn-xing btn btn-sm",'aria'=>array('label'=>$_prefixVariable91),'title'=>"Xing",'target'=>"_blank",'rel'=>"noopener"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
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
$_prefixVariable92=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'visit_us_on','section'=>'aria','printf'=>'Linkedin'),$_smarty_tpl ) );
$_prefixVariable93=ob_get_clean();
$_block_plugin165 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin165, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_prefixVariable92.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['linkedin']),'class'=>"btn-icon-secondary btn-linkedin btn btn-sm",'aria'=>array('label'=>$_prefixVariable93),'title'=>"Linkedin",'target'=>"_blank",'rel'=>"noopener"));
$_block_repeat=true;
echo $_block_plugin165->render(array('href'=>$_prefixVariable92.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['linkedin']),'class'=>"btn-icon-secondary btn-linkedin btn btn-sm",'aria'=>array('label'=>$_prefixVariable93),'title'=>"Linkedin",'target'=>"_blank",'rel'=>"noopener"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <i class="fab fa-linkedin-in fa-fw fa-lg"></i>
                                                <?php $_block_repeat=false;
echo $_block_plugin165->render(array('href'=>$_prefixVariable92.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['linkedin']),'class'=>"btn-icon-secondary btn-linkedin btn btn-sm",'aria'=>array('label'=>$_prefixVariable93),'title'=>"Linkedin",'target'=>"_blank",'rel'=>"noopener"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            </li>
                                        <?php }?>
                                        </ul>
                                    <?php $_block_repeat=false;
echo $_block_plugin156->render(array('cols'=>12,'class'=>"footer-additional-wrapper col-auto mx-auto"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php
}
}
/* {/block 'layout-footer-socialmedia'} */
/* {block 'layout-footer-additional'} */
class Block_99296234660a50ba7784289_46387972 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['socialmedia_footer'] === 'Y') {?>
                            <?php $_block_plugin155 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin155, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('class'=>"footer-social-media"));
$_block_repeat=true;
echo $_block_plugin155->render(array('class'=>"footer-social-media"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_74839545860a50ba7787a92_01412853', 'layout-footer-socialmedia', $this->tplIndex);
?>

                            <?php $_block_repeat=false;
echo $_block_plugin155->render(array('class'=>"footer-social-media"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>                        <?php }?>
                    <?php
}
}
/* {/block 'layout-footer-additional'} */
/* {block 'footer-vat-notice'} */
class Block_107567818160a50ba79770b3_87529931 extends Smarty_Internal_Block
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
class Block_143084732660a50ba7982f91_16782756 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_block_plugin168 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin168, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array());
$_block_repeat=true;
echo $_block_plugin168->render(array(), null, $_smarty_tpl, $_block_repeat);
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
echo $_block_plugin168->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php
}
}
/* {/block 'layout-footer-copyright-copyright'} */
/* {block 'layout-footer-copyright-brand'} */
class Block_195601852860a50ba7994197_24537238 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <?php ob_start();
if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['button_scroll_top'] === 'Y') {
echo " pr-8";
}
$_prefixVariable94=ob_get_clean();
$_block_plugin169 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin169, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('class'=>"col-auto ml-auto-util".$_prefixVariable94,'id'=>"system-credits"));
$_block_repeat=true;
echo $_block_plugin169->render(array('class'=>"col-auto ml-auto-util".$_prefixVariable94,'id'=>"system-credits"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            Powered by <?php $_block_plugin170 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin170, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>"https://jtl-url.de/jtlshop",'class'=>"text-white text-decoration-underline",'title'=>"JTL-Shop",'target'=>"_blank",'rel'=>"noopener nofollow"));
$_block_repeat=true;
echo $_block_plugin170->render(array('href'=>"https://jtl-url.de/jtlshop",'class'=>"text-white text-decoration-underline",'title'=>"JTL-Shop",'target'=>"_blank",'rel'=>"noopener nofollow"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>JTL-Shop<?php $_block_repeat=false;
echo $_block_plugin170->render(array('href'=>"https://jtl-url.de/jtlshop",'class'=>"text-white text-decoration-underline",'title'=>"JTL-Shop",'target'=>"_blank",'rel'=>"noopener nofollow"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        <?php $_block_repeat=false;
echo $_block_plugin169->render(array('class'=>"col-auto ml-auto-util".$_prefixVariable94,'id'=>"system-credits"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    <?php
}
}
/* {/block 'layout-footer-copyright-brand'} */
/* {block 'layout-footer-copyright'} */
class Block_73397218560a50ba797f408_08046300 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div id="copyright">
                        <?php $_block_plugin166 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin166, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array('fluid'=>true));
$_block_repeat=true;
echo $_block_plugin166->render(array('fluid'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php $_block_plugin167 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin167, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array());
$_block_repeat=true;
echo $_block_plugin167->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php $_smarty_tpl->_assignInScope('isBrandFree', JTL\Shop::isBrandfree());?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_143084732660a50ba7982f91_16782756', 'layout-footer-copyright-copyright', $this->tplIndex);
?>

                                <?php if (!$_smarty_tpl->tpl_vars['isBrandFree']->value) {?>
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_195601852860a50ba7994197_24537238', 'layout-footer-copyright-brand', $this->tplIndex);
?>

                                <?php }?>
                            <?php $_block_repeat=false;
echo $_block_plugin167->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php $_block_repeat=false;
echo $_block_plugin166->render(array('fluid'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    </div>
                <?php
}
}
/* {/block 'layout-footer-copyright'} */
/* {block 'layout-footer-scroll-top'} */
class Block_161854761660a50ba79a6b55_94823139 extends Smarty_Internal_Block
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
class Block_72945578860a50ba763e685_11039482 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if (!$_smarty_tpl->tpl_vars['bExclusive']->value) {?>
            <?php $_smarty_tpl->_assignInScope('newsletterActive', $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['newsletter_footer'] === 'Y' && $_smarty_tpl->tpl_vars['Einstellungen']->value['newsletter']['newsletter_active'] === 'Y');?>
            <footer id="footer" <?php if ($_smarty_tpl->tpl_vars['newsletterActive']->value) {?>class="newsletter-active"<?php }?>>
                <?php $_block_plugin144 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin144, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array('class'=>"d-print-none"));
$_block_repeat=true;
echo $_block_plugin144->render(array('class'=>"d-print-none"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php if ($_smarty_tpl->tpl_vars['newsletterActive']->value) {?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8407946660a50ba764a854_40172576', 'layout-footer-newsletter', $this->tplIndex);
?>

                    <?php }?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_164641045960a50ba768ce49_15651971', 'layout-footer-boxes', $this->tplIndex);
?>


                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_99296234660a50ba7784289_46387972', 'layout-footer-additional', $this->tplIndex);
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_107567818160a50ba79770b3_87529931', 'footer-vat-notice', $this->tplIndex);
?>

                    </div>
                <?php $_block_repeat=false;
echo $_block_plugin144->render(array('class'=>"d-print-none"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_73397218560a50ba797f408_08046300', 'layout-footer-copyright', $this->tplIndex);
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_161854761660a50ba79a6b55_94823139', 'layout-footer-scroll-top', $this->tplIndex);
?>

            </footer>
        <?php }?>
    <?php
}
}
/* {/block 'layout-footer-content'} */
/* {block 'layout-footer-io-path'} */
class Block_25548021860a50ba79af235_69838112 extends Smarty_Internal_Block
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
class Block_30957260a50ba79b2a74_24707608 extends Smarty_Internal_Block
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
class Block_160585167360a50ba7582694_71587447 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout-footer' => 
  array (
    0 => 'Block_160585167360a50ba7582694_71587447',
  ),
  'layout-footer-consent-manager' => 
  array (
    0 => 'Block_159424264560a50ba7583ee0_30607208',
  ),
  'layout-footer-content-all-closingtags' => 
  array (
    0 => 'Block_156127911160a50ba7592b27_30693417',
  ),
  'layout-footer-aside' => 
  array (
    0 => 'Block_109144635760a50ba75936b1_31740726',
  ),
  'layout-footer-content-productlist-col-closingtag' => 
  array (
    0 => 'Block_164617316860a50ba759d086_06630348',
  ),
  'layout-footer-sidepanel-left' => 
  array (
    0 => 'Block_183767687160a50ba759e707_23738967',
  ),
  'footer-sidepanel-left-content' => 
  array (
    0 => 'Block_106681715660a50ba759f1e0_05875507',
  ),
  'layout-footer-content-productlist-row-closingtag' => 
  array (
    0 => 'Block_138649534160a50ba75a1777_08468336',
  ),
  'layout-footer-content-closingtag' => 
  array (
    0 => 'Block_31125143260a50ba75a3808_60721460',
  ),
  'layout-footer-content-wrapper-closingtag' => 
  array (
    0 => 'Block_138333201060a50ba76343e8_74472471',
  ),
  'layout-footer-main-wrapper-closingtag' => 
  array (
    0 => 'Block_117450077260a50ba763a7a9_86674557',
  ),
  'layout-footer-content' => 
  array (
    0 => 'Block_72945578860a50ba763e685_11039482',
  ),
  'layout-footer-newsletter' => 
  array (
    0 => 'Block_8407946660a50ba764a854_40172576',
  ),
  'layout-footer-newsletter-heading' => 
  array (
    0 => 'Block_177275780960a50ba764d5f7_18913638',
  ),
  'layout-footer-newsletter-info' => 
  array (
    0 => 'Block_33656018960a50ba7652715_04476864',
  ),
  'layout-footer-form' => 
  array (
    0 => 'Block_74892092960a50ba765c1c7_56429079',
  ),
  'layout-footer-form-content' => 
  array (
    0 => 'Block_148111677360a50ba765ebf7_92629108',
  ),
  'layout-footer-form-captcha' => 
  array (
    0 => 'Block_121685170660a50ba76851a3_07899810',
  ),
  'layout-footer-boxes' => 
  array (
    0 => 'Block_164641045960a50ba768ce49_15651971',
  ),
  'layout-footer-additional' => 
  array (
    0 => 'Block_99296234660a50ba7784289_46387972',
  ),
  'layout-footer-socialmedia' => 
  array (
    0 => 'Block_74839545860a50ba7787a92_01412853',
  ),
  'footer-vat-notice' => 
  array (
    0 => 'Block_107567818160a50ba79770b3_87529931',
  ),
  'layout-footer-copyright' => 
  array (
    0 => 'Block_73397218560a50ba797f408_08046300',
  ),
  'layout-footer-copyright-copyright' => 
  array (
    0 => 'Block_143084732660a50ba7982f91_16782756',
  ),
  'layout-footer-copyright-brand' => 
  array (
    0 => 'Block_195601852860a50ba7994197_24537238',
  ),
  'layout-footer-scroll-top' => 
  array (
    0 => 'Block_161854761660a50ba79a6b55_94823139',
  ),
  'layout-footer-io-path' => 
  array (
    0 => 'Block_25548021860a50ba79af235_69838112',
  ),
  'layout-footer-js' => 
  array (
    0 => 'Block_30957260a50ba79b2a74_24707608',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_159424264560a50ba7583ee0_30607208', 'layout-footer-consent-manager', $this->tplIndex);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_156127911160a50ba7592b27_30693417', 'layout-footer-content-all-closingtags', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_117450077260a50ba763a7a9_86674557', 'layout-footer-main-wrapper-closingtag', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_72945578860a50ba763e685_11039482', 'layout-footer-content', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_25548021860a50ba79af235_69838112', 'layout-footer-io-path', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_30957260a50ba79b2a74_24707608', 'layout-footer-js', $this->tplIndex);
?>

    </body>
    </html>
<?php
}
}
/* {/block 'layout-footer'} */
}
