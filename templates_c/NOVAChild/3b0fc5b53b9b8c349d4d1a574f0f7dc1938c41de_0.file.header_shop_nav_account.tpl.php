<?php
/* Smarty version 3.1.38, created on 2021-05-18 11:16:35
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\layout\header_shop_nav_account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a385f3f14eb7_71213082',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b0fc5b53b9b8c349d4d1a574f0f7dc1938c41de' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\layout\\header_shop_nav_account.tpl',
      1 => 1621249738,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a385f3f14eb7_71213082 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1309163660a385f3ebbca5_63947092', 'layout-header-shop-nav-account');
?>

<?php }
/* {block 'layout-header-nav-account-form-email'} */
class Block_62652664460a385f3ec8480_32344011 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'emailadress'),$_smarty_tpl ) );
$_prefixVariable32 = ob_get_clean();
$_block_plugin67 = isset($_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0] : null;
if (!is_callable(array($_block_plugin67, 'render'))) {
throw new SmartyException('block tag \'formgroup\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('formgroup', array('label-for'=>"email_quick",'label'=>$_prefixVariable32));
$_block_repeat=true;
echo $_block_plugin67->render(array('label-for'=>"email_quick",'label'=>$_prefixVariable32), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"email",'name'=>"email",'id'=>"email_quick",'size-class'=>"sm",'placeholder'=>" ",'required'=>true,'autocomplete'=>"email"),$_smarty_tpl ) );?>

                                    <?php $_block_repeat=false;
echo $_block_plugin67->render(array('label-for'=>"email_quick",'label'=>$_prefixVariable32), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php
}
}
/* {/block 'layout-header-nav-account-form-email'} */
/* {block 'layout-header-nav-account-form-password'} */
class Block_97304830860a385f3ecf027_46659334 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'password'),$_smarty_tpl ) );
$_prefixVariable33 = ob_get_clean();
$_block_plugin68 = isset($_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0] : null;
if (!is_callable(array($_block_plugin68, 'render'))) {
throw new SmartyException('block tag \'formgroup\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('formgroup', array('label-for'=>"password_quick",'label'=>$_prefixVariable33,'class'=>"account-icon-dropdown-pass"));
$_block_repeat=true;
echo $_block_plugin68->render(array('label-for'=>"password_quick",'label'=>$_prefixVariable33,'class'=>"account-icon-dropdown-pass"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"password",'name'=>"passwort",'id'=>"password_quick",'size-class'=>"sm",'required'=>true,'placeholder'=>" ",'autocomplete'=>"current-password"),$_smarty_tpl ) );?>

                                    <?php $_block_repeat=false;
echo $_block_plugin68->render(array('label-for'=>"password_quick",'label'=>$_prefixVariable33,'class'=>"account-icon-dropdown-pass"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php
}
}
/* {/block 'layout-header-nav-account-form-password'} */
/* {block 'layout-header-nav-account-form-captcha'} */
class Block_74103771660a385f3ed69f1_15780719 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php if ((isset($_smarty_tpl->tpl_vars['showLoginCaptcha']->value)) && $_smarty_tpl->tpl_vars['showLoginCaptcha']->value) {?>
                                        <?php $_block_plugin69 = isset($_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0] : null;
if (!is_callable(array($_block_plugin69, 'render'))) {
throw new SmartyException('block tag \'formgroup\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('formgroup', array('class'=>"simple-captcha-wrapper"));
$_block_repeat=true;
echo $_block_plugin69->render(array('class'=>"simple-captcha-wrapper"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['captchaMarkup'][0], array( array('getBody'=>true),$_smarty_tpl ) );?>

                                        <?php $_block_repeat=false;
echo $_block_plugin69->render(array('class'=>"simple-captcha-wrapper"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    <?php }?>
                                <?php
}
}
/* {/block 'layout-header-nav-account-form-captcha'} */
/* {block 'layout-header-shop-nav-account-form-submit'} */
class Block_113723704060a385f3edc8e5_61927971 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_block_plugin70 = isset($_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0] : null;
if (!is_callable(array($_block_plugin70, 'render'))) {
throw new SmartyException('block tag \'formgroup\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('formgroup', array());
$_block_repeat=true;
echo $_block_plugin70->render(array(), null, $_smarty_tpl, $_block_repeat);
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
                                        <?php $_block_plugin71 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin71, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('type'=>"submit",'size'=>"sm",'id'=>"submit-btn",'block'=>true,'variant'=>"primary"));
$_block_repeat=true;
echo $_block_plugin71->render(array('type'=>"submit",'size'=>"sm",'id'=>"submit-btn",'block'=>true,'variant'=>"primary"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'login'),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin71->render(array('type'=>"submit",'size'=>"sm",'id'=>"submit-btn",'block'=>true,'variant'=>"primary"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    <?php $_block_repeat=false;
echo $_block_plugin70->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php
}
}
/* {/block 'layout-header-shop-nav-account-form-submit'} */
/* {block 'layout-header-shop-nav-account-form-content'} */
class Block_101260807560a385f3ec7911_61167325 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <fieldset id="quick-login">
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_62652664460a385f3ec8480_32344011', 'layout-header-nav-account-form-email', $this->tplIndex);
?>

                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_97304830860a385f3ecf027_46659334', 'layout-header-nav-account-form-password', $this->tplIndex);
?>

                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_74103771660a385f3ed69f1_15780719', 'layout-header-nav-account-form-captcha', $this->tplIndex);
?>

                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_113723704060a385f3edc8e5_61927971', 'layout-header-shop-nav-account-form-submit', $this->tplIndex);
?>

                            </fieldset>
                        <?php
}
}
/* {/block 'layout-header-shop-nav-account-form-content'} */
/* {block 'layout-header-nav-account-link-forgot-password'} */
class Block_131087569160a385f3eef984_55876995 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'pass.php'),$_smarty_tpl ) );
$_prefixVariable34=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'forgotPassword'),$_smarty_tpl ) );
$_prefixVariable35=ob_get_clean();
$_block_plugin72 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin72, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_prefixVariable34,'rel'=>"nofollow",'title'=>$_prefixVariable35));
$_block_repeat=true;
echo $_block_plugin72->render(array('href'=>$_prefixVariable34,'rel'=>"nofollow",'title'=>$_prefixVariable35), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'forgotPassword'),$_smarty_tpl ) );?>

                        <?php $_block_repeat=false;
echo $_block_plugin72->render(array('href'=>$_prefixVariable34,'rel'=>"nofollow",'title'=>$_prefixVariable35), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php
}
}
/* {/block 'layout-header-nav-account-link-forgot-password'} */
/* {block 'layout-header-nav-account-link-register'} */
class Block_57046318160a385f3ef4d08_96533740 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="dropdown-footer">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'newHere'),$_smarty_tpl ) );?>

                        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'registrieren.php'),$_smarty_tpl ) );
$_prefixVariable36=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'registerNow'),$_smarty_tpl ) );
$_prefixVariable37=ob_get_clean();
$_block_plugin73 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin73, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_prefixVariable36,'rel'=>"nofollow",'title'=>$_prefixVariable37));
$_block_repeat=true;
echo $_block_plugin73->render(array('href'=>$_prefixVariable36,'rel'=>"nofollow",'title'=>$_prefixVariable37), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'registerNow'),$_smarty_tpl ) );?>

                        <?php $_block_repeat=false;
echo $_block_plugin73->render(array('href'=>$_prefixVariable36,'rel'=>"nofollow",'title'=>$_prefixVariable37), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    </div>
                <?php
}
}
/* {/block 'layout-header-nav-account-link-register'} */
/* {block 'layout-header-shop-nav-account-logged-out'} */
class Block_55635913860a385f3ec3dd4_55042675 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div class="dropdown-body lg-min-w-lg">
                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'jtl.php','secure'=>true),$_smarty_tpl ) );
$_prefixVariable31=ob_get_clean();
$_block_plugin66 = isset($_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0] : null;
if (!is_callable(array($_block_plugin66, 'render'))) {
throw new SmartyException('block tag \'form\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('action'=>$_prefixVariable31,'method'=>"post",'class'=>"jtl-validate",'slide'=>true));
$_block_repeat=true;
echo $_block_plugin66->render(array('action'=>$_prefixVariable31,'method'=>"post",'class'=>"jtl-validate",'slide'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_101260807560a385f3ec7911_61167325', 'layout-header-shop-nav-account-form-content', $this->tplIndex);
?>

                    <?php $_block_repeat=false;
echo $_block_plugin66->render(array('action'=>$_prefixVariable31,'method'=>"post",'class'=>"jtl-validate",'slide'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_131087569160a385f3eef984_55876995', 'layout-header-nav-account-link-forgot-password', $this->tplIndex);
?>

                </div>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_57046318160a385f3ef4d08_96533740', 'layout-header-nav-account-link-register', $this->tplIndex);
?>

            <?php
}
}
/* {/block 'layout-header-shop-nav-account-logged-out'} */
/* {block 'layout-header-shop-nav-account-logged-in'} */
class Block_60607105060a385f3efb768_24233914 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'jtl.php','secure'=>true),$_smarty_tpl ) );
$_prefixVariable38=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'myAccount'),$_smarty_tpl ) );
$_prefixVariable39=ob_get_clean();
$_block_plugin74 = isset($_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0] : null;
if (!is_callable(array($_block_plugin74, 'render'))) {
throw new SmartyException('block tag \'dropdownitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dropdownitem', array('href'=>$_prefixVariable38,'rel'=>"nofollow",'title'=>$_prefixVariable39));
$_block_repeat=true;
echo $_block_plugin74->render(array('href'=>$_prefixVariable38,'rel'=>"nofollow",'title'=>$_prefixVariable39), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'myAccount'),$_smarty_tpl ) );?>

                <?php $_block_repeat=false;
echo $_block_plugin74->render(array('href'=>$_prefixVariable38,'rel'=>"nofollow",'title'=>$_prefixVariable39), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'jtl.php','secure'=>true),$_smarty_tpl ) );
$_prefixVariable40=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'myAccount'),$_smarty_tpl ) );
$_prefixVariable41=ob_get_clean();
$_block_plugin75 = isset($_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0] : null;
if (!is_callable(array($_block_plugin75, 'render'))) {
throw new SmartyException('block tag \'dropdownitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dropdownitem', array('href'=>$_prefixVariable40."?bestellungen=1",'rel'=>"nofollow",'title'=>$_prefixVariable41));
$_block_repeat=true;
echo $_block_plugin75->render(array('href'=>$_prefixVariable40."?bestellungen=1",'rel'=>"nofollow",'title'=>$_prefixVariable41), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'myOrders'),$_smarty_tpl ) );?>

                <?php $_block_repeat=false;
echo $_block_plugin75->render(array('href'=>$_prefixVariable40."?bestellungen=1",'rel'=>"nofollow",'title'=>$_prefixVariable41), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'jtl.php','secure'=>true),$_smarty_tpl ) );
$_prefixVariable42=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'myAccount'),$_smarty_tpl ) );
$_prefixVariable43=ob_get_clean();
$_block_plugin76 = isset($_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0] : null;
if (!is_callable(array($_block_plugin76, 'render'))) {
throw new SmartyException('block tag \'dropdownitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dropdownitem', array('href'=>$_prefixVariable42."?editRechnungsadresse=1",'rel'=>"nofollow",'title'=>$_prefixVariable43));
$_block_repeat=true;
echo $_block_plugin76->render(array('href'=>$_prefixVariable42."?editRechnungsadresse=1",'rel'=>"nofollow",'title'=>$_prefixVariable43), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'myPersonalData'),$_smarty_tpl ) );?>

                <?php $_block_repeat=false;
echo $_block_plugin76->render(array('href'=>$_prefixVariable42."?editRechnungsadresse=1",'rel'=>"nofollow",'title'=>$_prefixVariable43), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'jtl.php','secure'=>true),$_smarty_tpl ) );
$_prefixVariable44=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'myAccount'),$_smarty_tpl ) );
$_prefixVariable45=ob_get_clean();
$_block_plugin77 = isset($_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0] : null;
if (!is_callable(array($_block_plugin77, 'render'))) {
throw new SmartyException('block tag \'dropdownitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dropdownitem', array('href'=>$_prefixVariable44."#my-wishlists",'rel'=>"nofollow",'title'=>$_prefixVariable45));
$_block_repeat=true;
echo $_block_plugin77->render(array('href'=>$_prefixVariable44."#my-wishlists",'rel'=>"nofollow",'title'=>$_prefixVariable45), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'myWishlists'),$_smarty_tpl ) );?>

                <?php $_block_repeat=false;
echo $_block_plugin77->render(array('href'=>$_prefixVariable44."#my-wishlists",'rel'=>"nofollow",'title'=>$_prefixVariable45), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dropdowndivider'][0], array( array(),$_smarty_tpl ) );?>

                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'jtl.php','secure'=>true),$_smarty_tpl ) );
$_prefixVariable46=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'logOut'),$_smarty_tpl ) );
$_prefixVariable47=ob_get_clean();
$_block_plugin78 = isset($_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0] : null;
if (!is_callable(array($_block_plugin78, 'render'))) {
throw new SmartyException('block tag \'dropdownitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dropdownitem', array('href'=>$_prefixVariable46."?logout=1",'rel'=>"nofollow",'title'=>$_prefixVariable47,'class'=>"account-icon-dropdown-logout"));
$_block_repeat=true;
echo $_block_plugin78->render(array('href'=>$_prefixVariable46."?logout=1",'rel'=>"nofollow",'title'=>$_prefixVariable47,'class'=>"account-icon-dropdown-logout"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'logOut'),$_smarty_tpl ) );?>

                <?php $_block_repeat=false;
echo $_block_plugin78->render(array('href'=>$_prefixVariable46."?logout=1",'rel'=>"nofollow",'title'=>$_prefixVariable47,'class'=>"account-icon-dropdown-logout"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
}
}
/* {/block 'layout-header-shop-nav-account-logged-in'} */
/* {block 'layout-header-shop-nav-account'} */
class Block_1309163660a385f3ebbca5_63947092 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout-header-shop-nav-account' => 
  array (
    0 => 'Block_1309163660a385f3ebbca5_63947092',
  ),
  'layout-header-shop-nav-account-logged-out' => 
  array (
    0 => 'Block_55635913860a385f3ec3dd4_55042675',
  ),
  'layout-header-shop-nav-account-form-content' => 
  array (
    0 => 'Block_101260807560a385f3ec7911_61167325',
  ),
  'layout-header-nav-account-form-email' => 
  array (
    0 => 'Block_62652664460a385f3ec8480_32344011',
  ),
  'layout-header-nav-account-form-password' => 
  array (
    0 => 'Block_97304830860a385f3ecf027_46659334',
  ),
  'layout-header-nav-account-form-captcha' => 
  array (
    0 => 'Block_74103771660a385f3ed69f1_15780719',
  ),
  'layout-header-shop-nav-account-form-submit' => 
  array (
    0 => 'Block_113723704060a385f3edc8e5_61927971',
  ),
  'layout-header-nav-account-link-forgot-password' => 
  array (
    0 => 'Block_131087569160a385f3eef984_55876995',
  ),
  'layout-header-nav-account-link-register' => 
  array (
    0 => 'Block_57046318160a385f3ef4d08_96533740',
  ),
  'layout-header-shop-nav-account-logged-in' => 
  array (
    0 => 'Block_60607105060a385f3efb768_24233914',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'myAccount'),$_smarty_tpl ) );
$_prefixVariable30 = ob_get_clean();
$_block_plugin65 = isset($_smarty_tpl->smarty->registered_plugins['block']['navitemdropdown'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['navitemdropdown'][0][0] : null;
if (!is_callable(array($_block_plugin65, 'render'))) {
throw new SmartyException('block tag \'navitemdropdown\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('navitemdropdown', array('tag'=>"li",'aria'=>array('expanded'=>'false'),'router-aria'=>array('label'=>$_prefixVariable30),'no-caret'=>true,'right'=>true,'text'=>'<span class="fas fa-user"></span>','class'=>"account-icon-dropdown"));
$_block_repeat=true;
echo $_block_plugin65->render(array('tag'=>"li",'aria'=>array('expanded'=>'false'),'router-aria'=>array('label'=>$_prefixVariable30),'no-caret'=>true,'right'=>true,'text'=>'<span class="fas fa-user"></span>','class'=>"account-icon-dropdown"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php if (empty($_SESSION['Kunde']->kKunde)) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_55635913860a385f3ec3dd4_55042675', 'layout-header-shop-nav-account-logged-out', $this->tplIndex);
?>

        <?php } else { ?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_60607105060a385f3efb768_24233914', 'layout-header-shop-nav-account-logged-in', $this->tplIndex);
?>

        <?php }?>
    <?php $_block_repeat=false;
echo $_block_plugin65->render(array('tag'=>"li",'aria'=>array('expanded'=>'false'),'router-aria'=>array('label'=>$_prefixVariable30),'no-caret'=>true,'right'=>true,'text'=>'<span class="fas fa-user"></span>','class'=>"account-icon-dropdown"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'layout-header-shop-nav-account'} */
}
