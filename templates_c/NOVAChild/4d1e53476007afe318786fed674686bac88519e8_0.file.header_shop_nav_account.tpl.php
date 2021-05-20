<?php
/* Smarty version 3.1.38, created on 2021-05-17 13:09:49
  from 'C:\xampp\htdocs\shop\templates\NOVA\layout\header_shop_nav_account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a24efdbe7a31_91698561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d1e53476007afe318786fed674686bac88519e8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\templates\\NOVA\\layout\\header_shop_nav_account.tpl',
      1 => 1621249738,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a24efdbe7a31_91698561 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169994280660a24efdb95380_51253881', 'layout-header-shop-nav-account');
?>

<?php }
/* {block 'layout-header-nav-account-form-email'} */
class Block_27338961460a24efdb9e781_56460550 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'emailadress'),$_smarty_tpl ) );
$_prefixVariable21 = ob_get_clean();
$_block_plugin17 = isset($_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0] : null;
if (!is_callable(array($_block_plugin17, 'render'))) {
throw new SmartyException('block tag \'formgroup\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('formgroup', array('label-for'=>"email_quick",'label'=>$_prefixVariable21));
$_block_repeat=true;
echo $_block_plugin17->render(array('label-for'=>"email_quick",'label'=>$_prefixVariable21), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"email",'name'=>"email",'id'=>"email_quick",'size-class'=>"sm",'placeholder'=>" ",'required'=>true,'autocomplete'=>"email"),$_smarty_tpl ) );?>

                                    <?php $_block_repeat=false;
echo $_block_plugin17->render(array('label-for'=>"email_quick",'label'=>$_prefixVariable21), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php
}
}
/* {/block 'layout-header-nav-account-form-email'} */
/* {block 'layout-header-nav-account-form-password'} */
class Block_121646481560a24efdba3ba7_83451550 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'password'),$_smarty_tpl ) );
$_prefixVariable22 = ob_get_clean();
$_block_plugin18 = isset($_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0] : null;
if (!is_callable(array($_block_plugin18, 'render'))) {
throw new SmartyException('block tag \'formgroup\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('formgroup', array('label-for'=>"password_quick",'label'=>$_prefixVariable22,'class'=>"account-icon-dropdown-pass"));
$_block_repeat=true;
echo $_block_plugin18->render(array('label-for'=>"password_quick",'label'=>$_prefixVariable22,'class'=>"account-icon-dropdown-pass"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"password",'name'=>"passwort",'id'=>"password_quick",'size-class'=>"sm",'required'=>true,'placeholder'=>" ",'autocomplete'=>"current-password"),$_smarty_tpl ) );?>

                                    <?php $_block_repeat=false;
echo $_block_plugin18->render(array('label-for'=>"password_quick",'label'=>$_prefixVariable22,'class'=>"account-icon-dropdown-pass"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php
}
}
/* {/block 'layout-header-nav-account-form-password'} */
/* {block 'layout-header-nav-account-form-captcha'} */
class Block_130891666960a24efdba9708_49943354 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php if ((isset($_smarty_tpl->tpl_vars['showLoginCaptcha']->value)) && $_smarty_tpl->tpl_vars['showLoginCaptcha']->value) {?>
                                        <?php $_block_plugin19 = isset($_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0] : null;
if (!is_callable(array($_block_plugin19, 'render'))) {
throw new SmartyException('block tag \'formgroup\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('formgroup', array('class'=>"simple-captcha-wrapper"));
$_block_repeat=true;
echo $_block_plugin19->render(array('class'=>"simple-captcha-wrapper"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['captchaMarkup'][0], array( array('getBody'=>true),$_smarty_tpl ) );?>

                                        <?php $_block_repeat=false;
echo $_block_plugin19->render(array('class'=>"simple-captcha-wrapper"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    <?php }?>
                                <?php
}
}
/* {/block 'layout-header-nav-account-form-captcha'} */
/* {block 'layout-header-shop-nav-account-form-submit'} */
class Block_127818042260a24efdbb5fd2_53561248 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_block_plugin20 = isset($_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0] : null;
if (!is_callable(array($_block_plugin20, 'render'))) {
throw new SmartyException('block tag \'formgroup\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('formgroup', array());
$_block_repeat=true;
echo $_block_plugin20->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"hidden",'name'=>"login",'value'=>"1"),$_smarty_tpl ) );?>

                                        <?php if (!empty($_smarty_tpl->tpl_vars['oRedirect']->value->cURL)) {?>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oRedirect']->value->oParameter_arr, 'oParameter');
$_smarty_tpl->tpl_vars['oParameter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oParameter']->value) {
$_smarty_tpl->tpl_vars['oParameter']->do_else = false;
?>
                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"hidden",'name'=>$_smarty_tpl->tpl_vars['oParameter']->value->Name,'value'=>$_smarty_tpl->tpl_vars['oParameter']->value->Wert),$_smarty_tpl ) );?>

                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"hidden",'name'=>"r",'value'=>$_smarty_tpl->tpl_vars['oRedirect']->value->nRedirect),$_smarty_tpl ) );?>

                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"hidden",'name'=>"cURL",'value'=>$_smarty_tpl->tpl_vars['oRedirect']->value->cURL),$_smarty_tpl ) );?>

                                        <?php }?>
                                        <?php $_block_plugin21 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin21, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('type'=>"submit",'size'=>"sm",'id'=>"submit-btn",'block'=>true,'variant'=>"primary"));
$_block_repeat=true;
echo $_block_plugin21->render(array('type'=>"submit",'size'=>"sm",'id'=>"submit-btn",'block'=>true,'variant'=>"primary"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'login'),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin21->render(array('type'=>"submit",'size'=>"sm",'id'=>"submit-btn",'block'=>true,'variant'=>"primary"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    <?php $_block_repeat=false;
echo $_block_plugin20->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php
}
}
/* {/block 'layout-header-shop-nav-account-form-submit'} */
/* {block 'layout-header-shop-nav-account-form-content'} */
class Block_125929964960a24efdb9de68_04728348 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <fieldset id="quick-login">
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27338961460a24efdb9e781_56460550', 'layout-header-nav-account-form-email', $this->tplIndex);
?>

                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121646481560a24efdba3ba7_83451550', 'layout-header-nav-account-form-password', $this->tplIndex);
?>

                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_130891666960a24efdba9708_49943354', 'layout-header-nav-account-form-captcha', $this->tplIndex);
?>

                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_127818042260a24efdbb5fd2_53561248', 'layout-header-shop-nav-account-form-submit', $this->tplIndex);
?>

                            </fieldset>
                        <?php
}
}
/* {/block 'layout-header-shop-nav-account-form-content'} */
/* {block 'layout-header-nav-account-link-forgot-password'} */
class Block_86697703460a24efdbc6112_14933582 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'pass.php'),$_smarty_tpl ) );
$_prefixVariable23=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'forgotPassword'),$_smarty_tpl ) );
$_prefixVariable24=ob_get_clean();
$_block_plugin22 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin22, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_prefixVariable23,'rel'=>"nofollow",'title'=>$_prefixVariable24));
$_block_repeat=true;
echo $_block_plugin22->render(array('href'=>$_prefixVariable23,'rel'=>"nofollow",'title'=>$_prefixVariable24), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'forgotPassword'),$_smarty_tpl ) );?>

                        <?php $_block_repeat=false;
echo $_block_plugin22->render(array('href'=>$_prefixVariable23,'rel'=>"nofollow",'title'=>$_prefixVariable24), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php
}
}
/* {/block 'layout-header-nav-account-link-forgot-password'} */
/* {block 'layout-header-nav-account-link-register'} */
class Block_38780086960a24efdbcebd7_79596543 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="dropdown-footer">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'newHere'),$_smarty_tpl ) );?>

                        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'registrieren.php'),$_smarty_tpl ) );
$_prefixVariable25=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'registerNow'),$_smarty_tpl ) );
$_prefixVariable26=ob_get_clean();
$_block_plugin23 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin23, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_prefixVariable25,'rel'=>"nofollow",'title'=>$_prefixVariable26));
$_block_repeat=true;
echo $_block_plugin23->render(array('href'=>$_prefixVariable25,'rel'=>"nofollow",'title'=>$_prefixVariable26), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'registerNow'),$_smarty_tpl ) );?>

                        <?php $_block_repeat=false;
echo $_block_plugin23->render(array('href'=>$_prefixVariable25,'rel'=>"nofollow",'title'=>$_prefixVariable26), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    </div>
                <?php
}
}
/* {/block 'layout-header-nav-account-link-register'} */
/* {block 'layout-header-shop-nav-account-logged-out'} */
class Block_205314722260a24efdb9b0b4_72690338 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div class="dropdown-body lg-min-w-lg">
                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'jtl.php','secure'=>true),$_smarty_tpl ) );
$_prefixVariable20=ob_get_clean();
$_block_plugin16 = isset($_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0] : null;
if (!is_callable(array($_block_plugin16, 'render'))) {
throw new SmartyException('block tag \'form\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('action'=>$_prefixVariable20,'method'=>"post",'class'=>"jtl-validate",'slide'=>true));
$_block_repeat=true;
echo $_block_plugin16->render(array('action'=>$_prefixVariable20,'method'=>"post",'class'=>"jtl-validate",'slide'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125929964960a24efdb9de68_04728348', 'layout-header-shop-nav-account-form-content', $this->tplIndex);
?>

                    <?php $_block_repeat=false;
echo $_block_plugin16->render(array('action'=>$_prefixVariable20,'method'=>"post",'class'=>"jtl-validate",'slide'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_86697703460a24efdbc6112_14933582', 'layout-header-nav-account-link-forgot-password', $this->tplIndex);
?>

                </div>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_38780086960a24efdbcebd7_79596543', 'layout-header-nav-account-link-register', $this->tplIndex);
?>

            <?php
}
}
/* {/block 'layout-header-shop-nav-account-logged-out'} */
/* {block 'layout-header-shop-nav-account-logged-in'} */
class Block_59184177660a24efdbd42a4_96379479 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'jtl.php','secure'=>true),$_smarty_tpl ) );
$_prefixVariable27=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'myAccount'),$_smarty_tpl ) );
$_prefixVariable28=ob_get_clean();
$_block_plugin24 = isset($_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0] : null;
if (!is_callable(array($_block_plugin24, 'render'))) {
throw new SmartyException('block tag \'dropdownitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dropdownitem', array('href'=>$_prefixVariable27,'rel'=>"nofollow",'title'=>$_prefixVariable28));
$_block_repeat=true;
echo $_block_plugin24->render(array('href'=>$_prefixVariable27,'rel'=>"nofollow",'title'=>$_prefixVariable28), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'myAccount'),$_smarty_tpl ) );?>

                <?php $_block_repeat=false;
echo $_block_plugin24->render(array('href'=>$_prefixVariable27,'rel'=>"nofollow",'title'=>$_prefixVariable28), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'jtl.php','secure'=>true),$_smarty_tpl ) );
$_prefixVariable29=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'myAccount'),$_smarty_tpl ) );
$_prefixVariable30=ob_get_clean();
$_block_plugin25 = isset($_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0] : null;
if (!is_callable(array($_block_plugin25, 'render'))) {
throw new SmartyException('block tag \'dropdownitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dropdownitem', array('href'=>$_prefixVariable29."?bestellungen=1",'rel'=>"nofollow",'title'=>$_prefixVariable30));
$_block_repeat=true;
echo $_block_plugin25->render(array('href'=>$_prefixVariable29."?bestellungen=1",'rel'=>"nofollow",'title'=>$_prefixVariable30), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'myOrders'),$_smarty_tpl ) );?>

                <?php $_block_repeat=false;
echo $_block_plugin25->render(array('href'=>$_prefixVariable29."?bestellungen=1",'rel'=>"nofollow",'title'=>$_prefixVariable30), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'jtl.php','secure'=>true),$_smarty_tpl ) );
$_prefixVariable31=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'myAccount'),$_smarty_tpl ) );
$_prefixVariable32=ob_get_clean();
$_block_plugin26 = isset($_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0] : null;
if (!is_callable(array($_block_plugin26, 'render'))) {
throw new SmartyException('block tag \'dropdownitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dropdownitem', array('href'=>$_prefixVariable31."?editRechnungsadresse=1",'rel'=>"nofollow",'title'=>$_prefixVariable32));
$_block_repeat=true;
echo $_block_plugin26->render(array('href'=>$_prefixVariable31."?editRechnungsadresse=1",'rel'=>"nofollow",'title'=>$_prefixVariable32), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'myPersonalData'),$_smarty_tpl ) );?>

                <?php $_block_repeat=false;
echo $_block_plugin26->render(array('href'=>$_prefixVariable31."?editRechnungsadresse=1",'rel'=>"nofollow",'title'=>$_prefixVariable32), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'jtl.php','secure'=>true),$_smarty_tpl ) );
$_prefixVariable33=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'myAccount'),$_smarty_tpl ) );
$_prefixVariable34=ob_get_clean();
$_block_plugin27 = isset($_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0] : null;
if (!is_callable(array($_block_plugin27, 'render'))) {
throw new SmartyException('block tag \'dropdownitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dropdownitem', array('href'=>$_prefixVariable33."#my-wishlists",'rel'=>"nofollow",'title'=>$_prefixVariable34));
$_block_repeat=true;
echo $_block_plugin27->render(array('href'=>$_prefixVariable33."#my-wishlists",'rel'=>"nofollow",'title'=>$_prefixVariable34), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'myWishlists'),$_smarty_tpl ) );?>

                <?php $_block_repeat=false;
echo $_block_plugin27->render(array('href'=>$_prefixVariable33."#my-wishlists",'rel'=>"nofollow",'title'=>$_prefixVariable34), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dropdowndivider'][0], array( array(),$_smarty_tpl ) );?>

                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'jtl.php','secure'=>true),$_smarty_tpl ) );
$_prefixVariable35=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'logOut'),$_smarty_tpl ) );
$_prefixVariable36=ob_get_clean();
$_block_plugin28 = isset($_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0] : null;
if (!is_callable(array($_block_plugin28, 'render'))) {
throw new SmartyException('block tag \'dropdownitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dropdownitem', array('href'=>$_prefixVariable35."?logout=1",'rel'=>"nofollow",'title'=>$_prefixVariable36,'class'=>"account-icon-dropdown-logout"));
$_block_repeat=true;
echo $_block_plugin28->render(array('href'=>$_prefixVariable35."?logout=1",'rel'=>"nofollow",'title'=>$_prefixVariable36,'class'=>"account-icon-dropdown-logout"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'logOut'),$_smarty_tpl ) );?>

                <?php $_block_repeat=false;
echo $_block_plugin28->render(array('href'=>$_prefixVariable35."?logout=1",'rel'=>"nofollow",'title'=>$_prefixVariable36,'class'=>"account-icon-dropdown-logout"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
}
}
/* {/block 'layout-header-shop-nav-account-logged-in'} */
/* {block 'layout-header-shop-nav-account'} */
class Block_169994280660a24efdb95380_51253881 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout-header-shop-nav-account' => 
  array (
    0 => 'Block_169994280660a24efdb95380_51253881',
  ),
  'layout-header-shop-nav-account-logged-out' => 
  array (
    0 => 'Block_205314722260a24efdb9b0b4_72690338',
  ),
  'layout-header-shop-nav-account-form-content' => 
  array (
    0 => 'Block_125929964960a24efdb9de68_04728348',
  ),
  'layout-header-nav-account-form-email' => 
  array (
    0 => 'Block_27338961460a24efdb9e781_56460550',
  ),
  'layout-header-nav-account-form-password' => 
  array (
    0 => 'Block_121646481560a24efdba3ba7_83451550',
  ),
  'layout-header-nav-account-form-captcha' => 
  array (
    0 => 'Block_130891666960a24efdba9708_49943354',
  ),
  'layout-header-shop-nav-account-form-submit' => 
  array (
    0 => 'Block_127818042260a24efdbb5fd2_53561248',
  ),
  'layout-header-nav-account-link-forgot-password' => 
  array (
    0 => 'Block_86697703460a24efdbc6112_14933582',
  ),
  'layout-header-nav-account-link-register' => 
  array (
    0 => 'Block_38780086960a24efdbcebd7_79596543',
  ),
  'layout-header-shop-nav-account-logged-in' => 
  array (
    0 => 'Block_59184177660a24efdbd42a4_96379479',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'myAccount'),$_smarty_tpl ) );
$_prefixVariable19 = ob_get_clean();
$_block_plugin15 = isset($_smarty_tpl->smarty->registered_plugins['block']['navitemdropdown'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['navitemdropdown'][0][0] : null;
if (!is_callable(array($_block_plugin15, 'render'))) {
throw new SmartyException('block tag \'navitemdropdown\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('navitemdropdown', array('tag'=>"li",'aria'=>array('expanded'=>'false'),'router-aria'=>array('label'=>$_prefixVariable19),'no-caret'=>true,'right'=>true,'text'=>'<span class="fas fa-user"></span>','class'=>"account-icon-dropdown"));
$_block_repeat=true;
echo $_block_plugin15->render(array('tag'=>"li",'aria'=>array('expanded'=>'false'),'router-aria'=>array('label'=>$_prefixVariable19),'no-caret'=>true,'right'=>true,'text'=>'<span class="fas fa-user"></span>','class'=>"account-icon-dropdown"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php if (empty($_SESSION['Kunde']->kKunde)) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205314722260a24efdb9b0b4_72690338', 'layout-header-shop-nav-account-logged-out', $this->tplIndex);
?>

        <?php } else { ?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59184177660a24efdbd42a4_96379479', 'layout-header-shop-nav-account-logged-in', $this->tplIndex);
?>

        <?php }?>
    <?php $_block_repeat=false;
echo $_block_plugin15->render(array('tag'=>"li",'aria'=>array('expanded'=>'false'),'router-aria'=>array('label'=>$_prefixVariable19),'no-caret'=>true,'right'=>true,'text'=>'<span class="fas fa-user"></span>','class'=>"account-icon-dropdown"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'layout-header-shop-nav-account'} */
}
