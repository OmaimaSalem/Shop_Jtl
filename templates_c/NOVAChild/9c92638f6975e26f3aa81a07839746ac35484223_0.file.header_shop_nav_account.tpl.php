<?php
/* Smarty version 3.1.38, created on 2021-05-17 13:09:49
  from 'C:\xampp\htdocs\shop\templates\NOVAChild\layout\header_shop_nav_account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a24efd373ba3_00697171',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c92638f6975e26f3aa81a07839746ac35484223' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\templates\\NOVAChild\\layout\\header_shop_nav_account.tpl',
      1 => 1621249784,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a24efd373ba3_00697171 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_157526364460a24efd3084e7_68978181', 'layout-header-shop-nav-account');
?>

<?php }
/* {block 'layout-header-nav-account-form-email'} */
class Block_205972854960a24efd327c17_16464428 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'emailadress'),$_smarty_tpl ) );
$_prefixVariable3 = ob_get_clean();
$_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'render'))) {
throw new SmartyException('block tag \'formgroup\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('formgroup', array('label-for'=>"email_quick",'label'=>$_prefixVariable3));
$_block_repeat=true;
echo $_block_plugin3->render(array('label-for'=>"email_quick",'label'=>$_prefixVariable3), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"email",'name'=>"email",'id'=>"email_quick",'size-class'=>"sm",'placeholder'=>" ",'required'=>true,'autocomplete'=>"email"),$_smarty_tpl ) );?>

                                    <?php $_block_repeat=false;
echo $_block_plugin3->render(array('label-for'=>"email_quick",'label'=>$_prefixVariable3), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php
}
}
/* {/block 'layout-header-nav-account-form-email'} */
/* {block 'layout-header-nav-account-form-password'} */
class Block_187344779660a24efd32d3d8_23009513 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'password'),$_smarty_tpl ) );
$_prefixVariable4 = ob_get_clean();
$_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'render'))) {
throw new SmartyException('block tag \'formgroup\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('formgroup', array('label-for'=>"password_quick",'label'=>$_prefixVariable4,'class'=>"account-icon-dropdown-pass"));
$_block_repeat=true;
echo $_block_plugin4->render(array('label-for'=>"password_quick",'label'=>$_prefixVariable4,'class'=>"account-icon-dropdown-pass"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"password",'name'=>"passwort",'id'=>"password_quick",'size-class'=>"sm",'required'=>true,'placeholder'=>" ",'autocomplete'=>"current-password"),$_smarty_tpl ) );?>

                                    <?php $_block_repeat=false;
echo $_block_plugin4->render(array('label-for'=>"password_quick",'label'=>$_prefixVariable4,'class'=>"account-icon-dropdown-pass"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php
}
}
/* {/block 'layout-header-nav-account-form-password'} */
/* {block 'layout-header-nav-account-form-captcha'} */
class Block_136414829560a24efd332b78_74180886 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php if ((isset($_smarty_tpl->tpl_vars['showLoginCaptcha']->value)) && $_smarty_tpl->tpl_vars['showLoginCaptcha']->value) {?>
                                        <?php $_block_plugin5 = isset($_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0] : null;
if (!is_callable(array($_block_plugin5, 'render'))) {
throw new SmartyException('block tag \'formgroup\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('formgroup', array('class'=>"simple-captcha-wrapper"));
$_block_repeat=true;
echo $_block_plugin5->render(array('class'=>"simple-captcha-wrapper"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['captchaMarkup'][0], array( array('getBody'=>true),$_smarty_tpl ) );?>

                                        <?php $_block_repeat=false;
echo $_block_plugin5->render(array('class'=>"simple-captcha-wrapper"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    <?php }?>
                                <?php
}
}
/* {/block 'layout-header-nav-account-form-captcha'} */
/* {block 'layout-header-shop-nav-account-form-submit'} */
class Block_60519285360a24efd337ee5_56915479 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_block_plugin6 = isset($_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0] : null;
if (!is_callable(array($_block_plugin6, 'render'))) {
throw new SmartyException('block tag \'formgroup\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('formgroup', array());
$_block_repeat=true;
echo $_block_plugin6->render(array(), null, $_smarty_tpl, $_block_repeat);
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
                                        <?php $_block_plugin7 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin7, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('type'=>"submit",'size'=>"sm",'id'=>"submit-btn",'block'=>true,'variant'=>"primary"));
$_block_repeat=true;
echo $_block_plugin7->render(array('type'=>"submit",'size'=>"sm",'id'=>"submit-btn",'block'=>true,'variant'=>"primary"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'login'),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin7->render(array('type'=>"submit",'size'=>"sm",'id'=>"submit-btn",'block'=>true,'variant'=>"primary"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    <?php $_block_repeat=false;
echo $_block_plugin6->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php
}
}
/* {/block 'layout-header-shop-nav-account-form-submit'} */
/* {block 'layout-header-shop-nav-account-form-content'} */
class Block_205665534960a24efd3272f5_97127766 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <fieldset id="quick-login">
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205972854960a24efd327c17_16464428', 'layout-header-nav-account-form-email', $this->tplIndex);
?>

                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_187344779660a24efd32d3d8_23009513', 'layout-header-nav-account-form-password', $this->tplIndex);
?>

                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136414829560a24efd332b78_74180886', 'layout-header-nav-account-form-captcha', $this->tplIndex);
?>

                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_60519285360a24efd337ee5_56915479', 'layout-header-shop-nav-account-form-submit', $this->tplIndex);
?>

                            </fieldset>
                        <?php
}
}
/* {/block 'layout-header-shop-nav-account-form-content'} */
/* {block 'layout-header-nav-account-link-forgot-password'} */
class Block_12181036460a24efd354c24_79071902 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'pass.php'),$_smarty_tpl ) );
$_prefixVariable5=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'forgotPassword'),$_smarty_tpl ) );
$_prefixVariable6=ob_get_clean();
$_block_plugin8 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin8, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_prefixVariable5,'rel'=>"nofollow",'title'=>$_prefixVariable6));
$_block_repeat=true;
echo $_block_plugin8->render(array('href'=>$_prefixVariable5,'rel'=>"nofollow",'title'=>$_prefixVariable6), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'forgotPassword'),$_smarty_tpl ) );?>

                        <?php $_block_repeat=false;
echo $_block_plugin8->render(array('href'=>$_prefixVariable5,'rel'=>"nofollow",'title'=>$_prefixVariable6), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php
}
}
/* {/block 'layout-header-nav-account-link-forgot-password'} */
/* {block 'layout-header-nav-account-link-register'} */
class Block_52664644860a24efd358f67_82114220 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="dropdown-footer">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'newHere'),$_smarty_tpl ) );?>

                        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'registrieren.php'),$_smarty_tpl ) );
$_prefixVariable7=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'registerNow'),$_smarty_tpl ) );
$_prefixVariable8=ob_get_clean();
$_block_plugin9 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin9, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_prefixVariable7,'rel'=>"nofollow",'title'=>$_prefixVariable8));
$_block_repeat=true;
echo $_block_plugin9->render(array('href'=>$_prefixVariable7,'rel'=>"nofollow",'title'=>$_prefixVariable8), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'registerNow'),$_smarty_tpl ) );?>

                        <?php $_block_repeat=false;
echo $_block_plugin9->render(array('href'=>$_prefixVariable7,'rel'=>"nofollow",'title'=>$_prefixVariable8), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    </div>
                <?php
}
}
/* {/block 'layout-header-nav-account-link-register'} */
/* {block 'layout-header-shop-nav-account-logged-out'} */
class Block_51389172760a24efd323f87_10199700 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div class="dropdown-body lg-min-w-lg">
                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'jtl.php','secure'=>true),$_smarty_tpl ) );
$_prefixVariable2=ob_get_clean();
$_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'render'))) {
throw new SmartyException('block tag \'form\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('action'=>$_prefixVariable2,'method'=>"post",'class'=>"jtl-validate",'slide'=>true));
$_block_repeat=true;
echo $_block_plugin2->render(array('action'=>$_prefixVariable2,'method'=>"post",'class'=>"jtl-validate",'slide'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205665534960a24efd3272f5_97127766', 'layout-header-shop-nav-account-form-content', $this->tplIndex);
?>

                    <?php $_block_repeat=false;
echo $_block_plugin2->render(array('action'=>$_prefixVariable2,'method'=>"post",'class'=>"jtl-validate",'slide'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12181036460a24efd354c24_79071902', 'layout-header-nav-account-link-forgot-password', $this->tplIndex);
?>

                </div>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_52664644860a24efd358f67_82114220', 'layout-header-nav-account-link-register', $this->tplIndex);
?>

            <?php
}
}
/* {/block 'layout-header-shop-nav-account-logged-out'} */
/* {block 'layout-header-shop-nav-account-logged-in'} */
class Block_16993083860a24efd35ec34_92257493 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'jtl.php','secure'=>true),$_smarty_tpl ) );
$_prefixVariable9=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'myAccount'),$_smarty_tpl ) );
$_prefixVariable10=ob_get_clean();
$_block_plugin10 = isset($_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0] : null;
if (!is_callable(array($_block_plugin10, 'render'))) {
throw new SmartyException('block tag \'dropdownitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dropdownitem', array('href'=>$_prefixVariable9,'rel'=>"nofollow",'title'=>$_prefixVariable10));
$_block_repeat=true;
echo $_block_plugin10->render(array('href'=>$_prefixVariable9,'rel'=>"nofollow",'title'=>$_prefixVariable10), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'myAccount'),$_smarty_tpl ) );?>

                <?php $_block_repeat=false;
echo $_block_plugin10->render(array('href'=>$_prefixVariable9,'rel'=>"nofollow",'title'=>$_prefixVariable10), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'jtl.php','secure'=>true),$_smarty_tpl ) );
$_prefixVariable11=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'myAccount'),$_smarty_tpl ) );
$_prefixVariable12=ob_get_clean();
$_block_plugin11 = isset($_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0] : null;
if (!is_callable(array($_block_plugin11, 'render'))) {
throw new SmartyException('block tag \'dropdownitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dropdownitem', array('href'=>$_prefixVariable11."?bestellungen=1",'rel'=>"nofollow",'title'=>$_prefixVariable12));
$_block_repeat=true;
echo $_block_plugin11->render(array('href'=>$_prefixVariable11."?bestellungen=1",'rel'=>"nofollow",'title'=>$_prefixVariable12), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'myOrders'),$_smarty_tpl ) );?>

                <?php $_block_repeat=false;
echo $_block_plugin11->render(array('href'=>$_prefixVariable11."?bestellungen=1",'rel'=>"nofollow",'title'=>$_prefixVariable12), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'jtl.php','secure'=>true),$_smarty_tpl ) );
$_prefixVariable13=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'myAccount'),$_smarty_tpl ) );
$_prefixVariable14=ob_get_clean();
$_block_plugin12 = isset($_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0] : null;
if (!is_callable(array($_block_plugin12, 'render'))) {
throw new SmartyException('block tag \'dropdownitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dropdownitem', array('href'=>$_prefixVariable13."?editRechnungsadresse=1",'rel'=>"nofollow",'title'=>$_prefixVariable14));
$_block_repeat=true;
echo $_block_plugin12->render(array('href'=>$_prefixVariable13."?editRechnungsadresse=1",'rel'=>"nofollow",'title'=>$_prefixVariable14), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'myPersonalData'),$_smarty_tpl ) );?>

                <?php $_block_repeat=false;
echo $_block_plugin12->render(array('href'=>$_prefixVariable13."?editRechnungsadresse=1",'rel'=>"nofollow",'title'=>$_prefixVariable14), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'jtl.php','secure'=>true),$_smarty_tpl ) );
$_prefixVariable15=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'myAccount'),$_smarty_tpl ) );
$_prefixVariable16=ob_get_clean();
$_block_plugin13 = isset($_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0] : null;
if (!is_callable(array($_block_plugin13, 'render'))) {
throw new SmartyException('block tag \'dropdownitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dropdownitem', array('href'=>$_prefixVariable15."#my-wishlists",'rel'=>"nofollow",'title'=>$_prefixVariable16));
$_block_repeat=true;
echo $_block_plugin13->render(array('href'=>$_prefixVariable15."#my-wishlists",'rel'=>"nofollow",'title'=>$_prefixVariable16), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'myWishlists'),$_smarty_tpl ) );?>

                <?php $_block_repeat=false;
echo $_block_plugin13->render(array('href'=>$_prefixVariable15."#my-wishlists",'rel'=>"nofollow",'title'=>$_prefixVariable16), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dropdowndivider'][0], array( array(),$_smarty_tpl ) );?>

                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'jtl.php','secure'=>true),$_smarty_tpl ) );
$_prefixVariable17=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'logOut'),$_smarty_tpl ) );
$_prefixVariable18=ob_get_clean();
$_block_plugin14 = isset($_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0] : null;
if (!is_callable(array($_block_plugin14, 'render'))) {
throw new SmartyException('block tag \'dropdownitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dropdownitem', array('href'=>$_prefixVariable17."?logout=1",'rel'=>"nofollow",'title'=>$_prefixVariable18,'class'=>"account-icon-dropdown-logout"));
$_block_repeat=true;
echo $_block_plugin14->render(array('href'=>$_prefixVariable17."?logout=1",'rel'=>"nofollow",'title'=>$_prefixVariable18,'class'=>"account-icon-dropdown-logout"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'logOut'),$_smarty_tpl ) );?>

                <?php $_block_repeat=false;
echo $_block_plugin14->render(array('href'=>$_prefixVariable17."?logout=1",'rel'=>"nofollow",'title'=>$_prefixVariable18,'class'=>"account-icon-dropdown-logout"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
}
}
/* {/block 'layout-header-shop-nav-account-logged-in'} */
/* {block 'layout-header-shop-nav-account'} */
class Block_157526364460a24efd3084e7_68978181 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout-header-shop-nav-account' => 
  array (
    0 => 'Block_157526364460a24efd3084e7_68978181',
  ),
  'layout-header-shop-nav-account-logged-out' => 
  array (
    0 => 'Block_51389172760a24efd323f87_10199700',
  ),
  'layout-header-shop-nav-account-form-content' => 
  array (
    0 => 'Block_205665534960a24efd3272f5_97127766',
  ),
  'layout-header-nav-account-form-email' => 
  array (
    0 => 'Block_205972854960a24efd327c17_16464428',
  ),
  'layout-header-nav-account-form-password' => 
  array (
    0 => 'Block_187344779660a24efd32d3d8_23009513',
  ),
  'layout-header-nav-account-form-captcha' => 
  array (
    0 => 'Block_136414829560a24efd332b78_74180886',
  ),
  'layout-header-shop-nav-account-form-submit' => 
  array (
    0 => 'Block_60519285360a24efd337ee5_56915479',
  ),
  'layout-header-nav-account-link-forgot-password' => 
  array (
    0 => 'Block_12181036460a24efd354c24_79071902',
  ),
  'layout-header-nav-account-link-register' => 
  array (
    0 => 'Block_52664644860a24efd358f67_82114220',
  ),
  'layout-header-shop-nav-account-logged-in' => 
  array (
    0 => 'Block_16993083860a24efd35ec34_92257493',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'myAccount'),$_smarty_tpl ) );
$_prefixVariable1 = ob_get_clean();
$_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['navitemdropdown'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['navitemdropdown'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'render'))) {
throw new SmartyException('block tag \'navitemdropdown\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('navitemdropdown', array('tag'=>"li",'aria'=>array('expanded'=>'false'),'router-aria'=>array('label'=>$_prefixVariable1),'no-caret'=>true,'right'=>true,'text'=>'<span class="fas fa-user"></span> LOG IN','class'=>"account-icon-dropdown"));
$_block_repeat=true;
echo $_block_plugin1->render(array('tag'=>"li",'aria'=>array('expanded'=>'false'),'router-aria'=>array('label'=>$_prefixVariable1),'no-caret'=>true,'right'=>true,'text'=>'<span class="fas fa-user"></span> LOG IN','class'=>"account-icon-dropdown"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php if (empty($_SESSION['Kunde']->kKunde)) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_51389172760a24efd323f87_10199700', 'layout-header-shop-nav-account-logged-out', $this->tplIndex);
?>

        <?php } else { ?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16993083860a24efd35ec34_92257493', 'layout-header-shop-nav-account-logged-in', $this->tplIndex);
?>

        <?php }?>
    <?php $_block_repeat=false;
echo $_block_plugin1->render(array('tag'=>"li",'aria'=>array('expanded'=>'false'),'router-aria'=>array('label'=>$_prefixVariable1),'no-caret'=>true,'right'=>true,'text'=>'<span class="fas fa-user"></span> LOG IN','class'=>"account-icon-dropdown"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'layout-header-shop-nav-account'} */
}
