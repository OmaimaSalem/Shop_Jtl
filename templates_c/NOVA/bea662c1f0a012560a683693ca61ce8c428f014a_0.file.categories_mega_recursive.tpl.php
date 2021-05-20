<?php
/* Smarty version 3.1.38, created on 2021-05-19 14:59:08
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\snippets\categories_mega_recursive.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a50b9ca56794_43851871',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bea662c1f0a012560a683693ca61ce8c428f014a' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\snippets\\categories_mega_recursive.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/image.tpl' => 1,
    'file:snippets/categories_mega_recursive.tpl' => 2,
  ),
),false)) {
function content_60a50b9ca56794_43851871 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_210012812660a50b9c9f90f6_95552369', 'snippets-categories-mega-recursive');
?>

<?php }
/* {block 'snippets-categories-mega-recursive-max-subsub-items'} */
class Block_72630608160a50b9c9f9fb4_60502817 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php ob_start();
if ($_smarty_tpl->tpl_vars['isMobile']->value) {
echo "5";
} else {
echo "2";
}
$_prefixVariable56=ob_get_clean();
$_smarty_tpl->_assignInScope('max_subsub_items', $_prefixVariable56);?>
    <?php
}
}
/* {/block 'snippets-categories-mega-recursive-max-subsub-items'} */
/* {block 'snippets-categories-mega-recursive-main-link'} */
class Block_7452750660a50b9c9fdea8_72484637 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php ob_start();
if ($_smarty_tpl->tpl_vars['firstChild']->value) {
echo "submenu-headline submenu-headline-toplevel";
}
$_prefixVariable57=ob_get_clean();
ob_start();
if ($_smarty_tpl->tpl_vars['mainCategory']->value->hasChildren() && $_smarty_tpl->tpl_vars['subCategory']->value < $_smarty_tpl->tpl_vars['max_subsub_items']->value && $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['megamenu']['show_subcategories'] !== 'N') {
echo "nav-link dropdown-toggle";
}
$_prefixVariable58=ob_get_clean();
$_block_plugin112 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin112, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['mainCategory']->value->getURL(),'class'=>"categories-recursive-link d-lg-block ".$_prefixVariable57." ".((string)$_smarty_tpl->tpl_vars['subCategory']->value)." ".$_prefixVariable58,'aria'=>array("expanded"=>"false")));
$_block_repeat=true;
echo $_block_plugin112->render(array('href'=>$_smarty_tpl->tpl_vars['mainCategory']->value->getURL(),'class'=>"categories-recursive-link d-lg-block ".$_prefixVariable57." ".((string)$_smarty_tpl->tpl_vars['subCategory']->value)." ".$_prefixVariable58,'aria'=>array("expanded"=>"false")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php if ($_smarty_tpl->tpl_vars['firstChild']->value && $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['megamenu']['show_category_images'] !== 'N' && (!$_smarty_tpl->tpl_vars['isMobile']->value || $_smarty_tpl->tpl_vars['isTablet']->value)) {?>
                <?php $_smarty_tpl->_subTemplateRender('file:snippets/image.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class'=>'submenu-headline-image','item'=>$_smarty_tpl->tpl_vars['mainCategory']->value,'square'=>false,'srcSize'=>'sm'), 0, false);
?>
            <?php }?>
            <span class="text-truncate d-block">
                <?php echo $_smarty_tpl->tpl_vars['mainCategory']->value->getName();
if ($_smarty_tpl->tpl_vars['mainCategory']->value->hasChildren() && $_smarty_tpl->tpl_vars['subCategory']->value >= $_smarty_tpl->tpl_vars['max_subsub_items']->value) {?><span class="more-subcategories">&nbsp;(<?php echo count($_smarty_tpl->tpl_vars['mainCategory']->value->getChildren());?>
)</span><?php }?>
            </span>
        <?php $_block_repeat=false;
echo $_block_plugin112->render(array('href'=>$_smarty_tpl->tpl_vars['mainCategory']->value->getURL(),'class'=>"categories-recursive-link d-lg-block ".$_prefixVariable57." ".((string)$_smarty_tpl->tpl_vars['subCategory']->value)." ".$_prefixVariable58,'aria'=>array("expanded"=>"false")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php
}
}
/* {/block 'snippets-categories-mega-recursive-main-link'} */
/* {block 'snippets-categories-mega-recursive-child-header'} */
class Block_101452162360a50b9ca30c66_25507791 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <li class="nav-item d-lg-none">
                            <?php $_block_plugin114 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin114, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['mainCategory']->value->getURL(),'nofollow'=>true));
$_block_repeat=true;
echo $_block_plugin114->render(array('href'=>$_smarty_tpl->tpl_vars['mainCategory']->value->getURL(),'nofollow'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <strong class="nav-mobile-heading">
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'menuShow','printf'=>$_smarty_tpl->tpl_vars['mainCategory']->value->getName()),$_smarty_tpl ) );?>

                                </strong>
                            <?php $_block_repeat=false;
echo $_block_plugin114->render(array('href'=>$_smarty_tpl->tpl_vars['mainCategory']->value->getURL(),'nofollow'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        </li>
                    <?php
}
}
/* {/block 'snippets-categories-mega-recursive-child-header'} */
/* {block 'snippets-categories-mega-recursive-child-category-child'} */
class Block_107143651160a50b9ca40984_47233825 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <li class="nav-item dropdown">
                                        <?php $_smarty_tpl->_subTemplateRender('file:snippets/categories_mega_recursive.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('mainCategory'=>$_smarty_tpl->tpl_vars['category']->value,'firstChild'=>false,'subCategory'=>$_smarty_tpl->tpl_vars['subCategory']->value+1), 0, true);
?>
                                    </li>
                                <?php
}
}
/* {/block 'snippets-categories-mega-recursive-child-category-child'} */
/* {block 'snippets-categories-mega-recursivechild-category-no-child'} */
class Block_22536913260a50b9ca4bbd5_58339274 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_block_plugin115 = isset($_smarty_tpl->smarty->registered_plugins['block']['navitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['navitem'][0][0] : null;
if (!is_callable(array($_block_plugin115, 'render'))) {
throw new SmartyException('block tag \'navitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('navitem', array('href'=>$_smarty_tpl->tpl_vars['category']->value->getURL()));
$_block_repeat=true;
echo $_block_plugin115->render(array('href'=>$_smarty_tpl->tpl_vars['category']->value->getURL()), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <span class="text-truncate d-block">
                                            <?php echo $_smarty_tpl->tpl_vars['category']->value->getName();
if ($_smarty_tpl->tpl_vars['category']->value->hasChildren()) {?><span class="more-subcategories">&nbsp;(<?php echo count($_smarty_tpl->tpl_vars['category']->value->getChildren());?>
)</span><?php }?>
                                        </span>
                                    <?php $_block_repeat=false;
echo $_block_plugin115->render(array('href'=>$_smarty_tpl->tpl_vars['category']->value->getURL()), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php
}
}
/* {/block 'snippets-categories-mega-recursivechild-category-no-child'} */
/* {block 'snippets-categories-mega-recursive-child-categories'} */
class Block_201127839460a50b9ca35501_56161624 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mainCategory']->value->getChildren(), 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                            <?php if ($_smarty_tpl->tpl_vars['category']->value->hasChildren() && $_smarty_tpl->tpl_vars['subCategory']->value+1 < $_smarty_tpl->tpl_vars['max_subsub_items']->value) {?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_107143651160a50b9ca40984_47233825', 'snippets-categories-mega-recursive-child-category-child', $this->tplIndex);
?>

                            <?php } else { ?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_22536913260a50b9ca4bbd5_58339274', 'snippets-categories-mega-recursivechild-category-no-child', $this->tplIndex);
?>

                            <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php
}
}
/* {/block 'snippets-categories-mega-recursive-child-categories'} */
/* {block 'snippets-categories-mega-recursive-child-content'} */
class Block_92343678260a50b9ca2fa17_23163411 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="categories-recursive-dropdown dropdown-menu">
                <?php $_block_plugin113 = isset($_smarty_tpl->smarty->registered_plugins['block']['nav'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['nav'][0][0] : null;
if (!is_callable(array($_block_plugin113, 'render'))) {
throw new SmartyException('block tag \'nav\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('nav', array());
$_block_repeat=true;
echo $_block_plugin113->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_101452162360a50b9ca30c66_25507791', 'snippets-categories-mega-recursive-child-header', $this->tplIndex);
?>

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_201127839460a50b9ca35501_56161624', 'snippets-categories-mega-recursive-child-categories', $this->tplIndex);
?>

                <?php $_block_repeat=false;
echo $_block_plugin113->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            </div>
        <?php
}
}
/* {/block 'snippets-categories-mega-recursive-child-content'} */
/* {block 'snippets-categories-mega-recursive'} */
class Block_210012812660a50b9c9f90f6_95552369 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-categories-mega-recursive' => 
  array (
    0 => 'Block_210012812660a50b9c9f90f6_95552369',
  ),
  'snippets-categories-mega-recursive-max-subsub-items' => 
  array (
    0 => 'Block_72630608160a50b9c9f9fb4_60502817',
  ),
  'snippets-categories-mega-recursive-main-link' => 
  array (
    0 => 'Block_7452750660a50b9c9fdea8_72484637',
  ),
  'snippets-categories-mega-recursive-child-content' => 
  array (
    0 => 'Block_92343678260a50b9ca2fa17_23163411',
  ),
  'snippets-categories-mega-recursive-child-header' => 
  array (
    0 => 'Block_101452162360a50b9ca30c66_25507791',
  ),
  'snippets-categories-mega-recursive-child-categories' => 
  array (
    0 => 'Block_201127839460a50b9ca35501_56161624',
  ),
  'snippets-categories-mega-recursive-child-category-child' => 
  array (
    0 => 'Block_107143651160a50b9ca40984_47233825',
  ),
  'snippets-categories-mega-recursivechild-category-no-child' => 
  array (
    0 => 'Block_22536913260a50b9ca4bbd5_58339274',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_72630608160a50b9c9f9fb4_60502817', 'snippets-categories-mega-recursive-max-subsub-items', $this->tplIndex);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7452750660a50b9c9fdea8_72484637', 'snippets-categories-mega-recursive-main-link', $this->tplIndex);
?>

    <?php if ($_smarty_tpl->tpl_vars['mainCategory']->value->hasChildren() && $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['megamenu']['show_subcategories'] !== 'N' && $_smarty_tpl->tpl_vars['subCategory']->value < $_smarty_tpl->tpl_vars['max_subsub_items']->value) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_92343678260a50b9ca2fa17_23163411', 'snippets-categories-mega-recursive-child-content', $this->tplIndex);
?>

    <?php }
}
}
/* {/block 'snippets-categories-mega-recursive'} */
}
