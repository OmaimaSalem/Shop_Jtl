<?php
/* Smarty version 3.1.38, created on 2021-05-18 10:40:00
  from 'C:\xampp\htdocs\shop\templates\NOVAChild\layout\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a37d60eac5c2_17349103',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06497f8881e621835808547499782065857be05a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\templates\\NOVAChild\\layout\\header.tpl',
      1 => 1621327174,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/header_nav_icons.tpl' => 1,
  ),
),false)) {
function content_60a37d60eac5c2_17349103 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_67215021960a37d60e65f92_10663577', 'layout-header-header');
}
/* {block 'layout-header-branding-top-bar'} */
class Block_171361964360a37d60e6c6d7_44252157 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                
            <?php
}
}
/* {/block 'layout-header-branding-top-bar'} */
/* {block 'layout-header-navbar-toggle'} */
class Block_53183952660a37d60e77780_57417429 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <button id="burger-menu" class="burger-menu-wrapper navbar-toggler collapsed <?php if ($_smarty_tpl->tpl_vars['nSeitenTyp']->value === (defined('PAGE_BESTELLVORGANG') ? constant('PAGE_BESTELLVORGANG') : null)) {?>d-none<?php }?>" type="button" data-toggle="collapse" data-target="#mainNavigation" aria-controls="mainNavigation" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                            <?php
}
}
/* {/block 'layout-header-navbar-toggle'} */
/* {block 'layout-header-logo'} */
class Block_125797788860a37d60e7d0c1_76897853 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                
                            <?php
}
}
/* {/block 'layout-header-logo'} */
/* {block 'layout-header-search'} */
class Block_181407280460a37d60e8cc59_32877722 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                
                            <?php
}
}
/* {/block 'layout-header-search'} */
/* {block 'layout-header-secure-checkout-title'} */
class Block_194727287760a37d60e8ff54_60907596 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <i class="fas fa-lock icon-mr-2"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'secureCheckout','section'=>'checkout'),$_smarty_tpl ) );?>

                                        <?php
}
}
/* {/block 'layout-header-secure-checkout-title'} */
/* {block 'layout-header-secure-checkout'} */
class Block_105683184160a37d60e8f625_08390098 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <div class="secure-checkout-icon ml-auto-util ml-lg-0">
                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_194727287760a37d60e8ff54_60907596', 'layout-header-secure-checkout-title', $this->tplIndex);
?>

                                    </div>
                                   
                                <?php
}
}
/* {/block 'layout-header-secure-checkout'} */
/* {block 'layout-header-branding-shop-nav-include-language-dropdown'} */
class Block_13362132660a37d60e977b5_26956836 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <?php
}
}
/* {/block 'layout-header-branding-shop-nav-include-language-dropdown'} */
/* {block 'layout-header-branding-shop-nav'} */
class Block_41714876660a37d60e95762_95158006 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['nav'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['nav'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'render'))) {
throw new SmartyException('block tag \'nav\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('nav', array('id'=>"shop-nav",'right'=>true,'class'=>"nav-right order-lg-last nav-icons"));
$_block_repeat=true;
echo $_block_plugin2->render(array('id'=>"shop-nav",'right'=>true,'class'=>"nav-right order-lg-last nav-icons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13362132660a37d60e977b5_26956836', 'layout-header-branding-shop-nav-include-language-dropdown', $this->tplIndex);
?>

                                        <?php $_smarty_tpl->_subTemplateRender('file:layout/header_nav_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                    <?php $_block_repeat=false;
echo $_block_plugin2->render(array('id'=>"shop-nav",'right'=>true,'class'=>"nav-right order-lg-last nav-icons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php
}
}
/* {/block 'layout-header-branding-shop-nav'} */
/* {block 'layout-header-include-categories-mega-toggler'} */
class Block_19523855660a37d60e9caa7_27908652 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#mainNavigation" aria-controls="mainNavigation" aria-expanded="false" aria-label="Toggle navigation">
                                                                <span class="navbar-toggler-icon"></span>
                                                            </button>
                                                        <?php
}
}
/* {/block 'layout-header-include-categories-mega-toggler'} */
/* {block 'layout-header-include-categories-mega-back'} */
class Block_168076462460a37d60e9f301_17333988 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                            <?php $_block_plugin6 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin6, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>"#",'class'=>"nav-offcanvas-title d-none",'data'=>array("menu-back"=>'')));
$_block_repeat=true;
echo $_block_plugin6->render(array('href'=>"#",'class'=>"nav-offcanvas-title d-none",'data'=>array("menu-back"=>'')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                                <span class="fas fa-chevron-left icon-mr-2"></span>
                                                                <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'back'),$_smarty_tpl ) );?>
</span>
                                                            <?php $_block_repeat=false;
echo $_block_plugin6->render(array('href'=>"#",'class'=>"nav-offcanvas-title d-none",'data'=>array("menu-back"=>'')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                        <?php
}
}
/* {/block 'layout-header-include-categories-mega-back'} */
/* {block 'layout-header-include-include-categories-header'} */
class Block_164015119460a37d60e9a7a8_04859220 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <div class="nav-mobile-header d-lg-none">
                                                <?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('class'=>"align-items-center-util"));
$_block_repeat=true;
echo $_block_plugin3->render(array('class'=>"align-items-center-util"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <?php $_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('class'=>"nav-mobile-header-toggler"));
$_block_repeat=true;
echo $_block_plugin4->render(array('class'=>"nav-mobile-header-toggler"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19523855660a37d60e9caa7_27908652', 'layout-header-include-categories-mega-toggler', $this->tplIndex);
?>

                                                    <?php $_block_repeat=false;
echo $_block_plugin4->render(array('class'=>"nav-mobile-header-toggler"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                    <?php $_block_plugin5 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin5, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('class'=>"col-auto nav-mobile-header-name ml-auto-util"));
$_block_repeat=true;
echo $_block_plugin5->render(array('class'=>"col-auto nav-mobile-header-name ml-auto-util"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                        <span class="nav-offcanvas-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'menuName'),$_smarty_tpl ) );?>
</span>
                                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_168076462460a37d60e9f301_17333988', 'layout-header-include-categories-mega-back', $this->tplIndex);
?>

                                                    <?php $_block_repeat=false;
echo $_block_plugin5->render(array('class'=>"col-auto nav-mobile-header-name ml-auto-util"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                <?php $_block_repeat=false;
echo $_block_plugin3->render(array('class'=>"align-items-center-util"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                <hr class="nav-mobile-header-hr" />
                                            </div>
                                        <?php
}
}
/* {/block 'layout-header-include-include-categories-header'} */
/* {block 'layout-header-include-include-categories-mega'} */
class Block_136706151560a37d60ea5b29_43899610 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                    <?php
}
}
/* {/block 'layout-header-include-include-categories-mega'} */
/* {block 'layout-header-include-include-categories-body'} */
class Block_39531997460a37d60ea44f1_37435876 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <div class="nav-mobile-body">
                                                <?php $_block_plugin7 = isset($_smarty_tpl->smarty->registered_plugins['block']['navbarnav'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['navbarnav'][0][0] : null;
if (!is_callable(array($_block_plugin7, 'render'))) {
throw new SmartyException('block tag \'navbarnav\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('navbarnav', array('class'=>"nav-scrollbar-inner mr-auto"));
$_block_repeat=true;
echo $_block_plugin7->render(array('class'=>"nav-scrollbar-inner mr-auto"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136706151560a37d60ea5b29_43899610', 'layout-header-include-include-categories-mega', $this->tplIndex);
?>

                                                <?php $_block_repeat=false;
echo $_block_plugin7->render(array('class'=>"nav-scrollbar-inner mr-auto"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            </div>
                                        <?php
}
}
/* {/block 'layout-header-include-include-categories-body'} */
/* {block 'layout-header-include-categories-mega'} */
class Block_31787312560a37d60e99e85_85420258 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <div id="mainNavigation" class="collapse navbar-collapse nav-scrollbar">
                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_164015119460a37d60e9a7a8_04859220', 'layout-header-include-include-categories-header', $this->tplIndex);
?>

                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_39531997460a37d60ea44f1_37435876', 'layout-header-include-include-categories-body', $this->tplIndex);
?>

                                    </div>
                                <?php
}
}
/* {/block 'layout-header-include-categories-mega'} */
/* {block 'layout-header-category-nav'} */
class Block_153341570360a37d60e76e60_79612778 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div class="toggler-logo-wrapper">
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_53183952660a37d60e77780_57417429', 'layout-header-navbar-toggle', $this->tplIndex);
?>


                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125797788860a37d60e7d0c1_76897853', 'layout-header-logo', $this->tplIndex);
?>

                        </div>
                        <?php ob_start();
if ($_smarty_tpl->tpl_vars['nSeitenTyp']->value === (defined('PAGE_BESTELLVORGANG') ? constant('PAGE_BESTELLVORGANG') : null)) {
echo "align-items-center-util";
} else {
echo "align-items-lg-end";
}
$_prefixVariable1=ob_get_clean();
$_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['navbar'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['navbar'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'render'))) {
throw new SmartyException('block tag \'navbar\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('navbar', array('toggleable'=>true,'fill'=>true,'type'=>"expand-lg",'class'=>"justify-content-start ".$_prefixVariable1));
$_block_repeat=true;
echo $_block_plugin1->render(array('toggleable'=>true,'fill'=>true,'type'=>"expand-lg",'class'=>"justify-content-start ".$_prefixVariable1), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                           <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_181407280460a37d60e8cc59_32877722', 'layout-header-search', $this->tplIndex);
?>


                            <?php if ($_smarty_tpl->tpl_vars['nSeitenTyp']->value === (defined('PAGE_BESTELLVORGANG') ? constant('PAGE_BESTELLVORGANG') : null)) {?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_105683184160a37d60e8f625_08390098', 'layout-header-secure-checkout', $this->tplIndex);
?>

                            <?php } else { ?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_41714876660a37d60e95762_95158006', 'layout-header-branding-shop-nav', $this->tplIndex);
?>


                                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_31787312560a37d60e99e85_85420258', 'layout-header-include-categories-mega', $this->tplIndex);
?>

                            <?php }?>
                        <?php $_block_repeat=false;
echo $_block_plugin1->render(array('toggleable'=>true,'fill'=>true,'type'=>"expand-lg",'class'=>"justify-content-start ".$_prefixVariable1), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php
}
}
/* {/block 'layout-header-category-nav'} */
/* {block 'layout-header-container-inner'} */
class Block_123261430860a37d60e749d3_88701409 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="container-fluid <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['megamenu']['header_full_width'] === 'N') {?>container-fluid-xl<?php }?>" id="head">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_153341570360a37d60e76e60_79612778', 'layout-header-category-nav', $this->tplIndex);
?>

                    </div>
                <?php
}
}
/* {/block 'layout-header-container-inner'} */
/* {block 'layout-header-search-fixed'} */
class Block_60566574960a37d60ea9293_62568019 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['mobile_search_type'] === 'fixed' && $_smarty_tpl->tpl_vars['isMobile']->value) {?>
                    <div class="container-fluid container-fluid-xl fixed-search fixed-top smoothscroll-top-search d-lg-none d-none">
                    <h1>hhhe</h1>
                    </div>
                <?php }?>
            <?php
}
}
/* {/block 'layout-header-search-fixed'} */
/* {block 'layout-header-header'} */
class Block_67215021960a37d60e65f92_10663577 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout-header-header' => 
  array (
    0 => 'Block_67215021960a37d60e65f92_10663577',
  ),
  'layout-header-branding-top-bar' => 
  array (
    0 => 'Block_171361964360a37d60e6c6d7_44252157',
  ),
  'layout-header-container-inner' => 
  array (
    0 => 'Block_123261430860a37d60e749d3_88701409',
  ),
  'layout-header-category-nav' => 
  array (
    0 => 'Block_153341570360a37d60e76e60_79612778',
  ),
  'layout-header-navbar-toggle' => 
  array (
    0 => 'Block_53183952660a37d60e77780_57417429',
  ),
  'layout-header-logo' => 
  array (
    0 => 'Block_125797788860a37d60e7d0c1_76897853',
  ),
  'layout-header-search' => 
  array (
    0 => 'Block_181407280460a37d60e8cc59_32877722',
  ),
  'layout-header-secure-checkout' => 
  array (
    0 => 'Block_105683184160a37d60e8f625_08390098',
  ),
  'layout-header-secure-checkout-title' => 
  array (
    0 => 'Block_194727287760a37d60e8ff54_60907596',
  ),
  'layout-header-branding-shop-nav' => 
  array (
    0 => 'Block_41714876660a37d60e95762_95158006',
  ),
  'layout-header-branding-shop-nav-include-language-dropdown' => 
  array (
    0 => 'Block_13362132660a37d60e977b5_26956836',
  ),
  'layout-header-include-categories-mega' => 
  array (
    0 => 'Block_31787312560a37d60e99e85_85420258',
  ),
  'layout-header-include-include-categories-header' => 
  array (
    0 => 'Block_164015119460a37d60e9a7a8_04859220',
  ),
  'layout-header-include-categories-mega-toggler' => 
  array (
    0 => 'Block_19523855660a37d60e9caa7_27908652',
  ),
  'layout-header-include-categories-mega-back' => 
  array (
    0 => 'Block_168076462460a37d60e9f301_17333988',
  ),
  'layout-header-include-include-categories-body' => 
  array (
    0 => 'Block_39531997460a37d60ea44f1_37435876',
  ),
  'layout-header-include-include-categories-mega' => 
  array (
    0 => 'Block_136706151560a37d60ea5b29_43899610',
  ),
  'layout-header-search-fixed' => 
  array (
    0 => 'Block_60566574960a37d60ea9293_62568019',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_171361964360a37d60e6c6d7_44252157', 'layout-header-branding-top-bar', $this->tplIndex);
?>

            <header class="d-print-none <?php if (!$_smarty_tpl->tpl_vars['isMobile']->value || $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['mobile_search_type'] !== 'fixed') {?>sticky-top<?php }?> fixed-navbar" id="jtl-nav-wrapper">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_123261430860a37d60e749d3_88701409', 'layout-header-container-inner', $this->tplIndex);
?>

                <div class="navbar navbar-expand-lg navbar-dark .bg-dark.bg-gradient">
                    <div class="container-fluid">
                        
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                All Categories
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                            </li>
                        </ul>
                        </div>
                    </div>
                </div>
            </header>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_60566574960a37d60ea9293_62568019', 'layout-header-search-fixed', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'layout-header-header'} */
}
