<?php
/* Smarty version 3.1.38, created on 2021-05-04 14:27:01
  from 'C:\xampp\htdocs\shop\templates\NOVA\snippets\wishlist_dropdown.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60913d9547d4e5_41482036',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8c6e9b0ed5a04c2579ca2a314c4a8036e21544f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\templates\\NOVA\\snippets\\wishlist_dropdown.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60913d9547d4e5_41482036 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_86944840160913d9545d392_98757967', 'snippets-wishlist-dropdown');
?>

<?php }
/* {block 'snippets-wishlist-dropdown-link'} */
class Block_137638943160913d95462b44_04429288 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <?php echo $_smarty_tpl->tpl_vars['wishlist']->value->cName;?>
<br />
                                    <?php
}
}
/* {/block 'snippets-wishlist-dropdown-link'} */
/* {block 'snippets-wishlist-dropdown-punlic'} */
class Block_91996555160913d95464912_05174160 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <span data-switch-label-state="public-<?php echo $_smarty_tpl->tpl_vars['wishlist']->value->kWunschliste;?>
" class="small <?php if ($_smarty_tpl->tpl_vars['wishlist']->value->nOeffentlich != 1) {?>d-none<?php }?>">
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'public'),$_smarty_tpl ) );?>

                                        </span>
                                    <?php
}
}
/* {/block 'snippets-wishlist-dropdown-punlic'} */
/* {block 'snippets-wishlist-dropdown-private'} */
class Block_93452485260913d954684d8_28684174 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <span data-switch-label-state="private-<?php echo $_smarty_tpl->tpl_vars['wishlist']->value->kWunschliste;?>
" class="small <?php if ($_smarty_tpl->tpl_vars['wishlist']->value->nOeffentlich == 1) {?>d-none<?php }?>">
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'private'),$_smarty_tpl ) );?>

                                        </span>
                                    <?php
}
}
/* {/block 'snippets-wishlist-dropdown-private'} */
/* {block 'snippets-wishlist-dropdown-count'} */
class Block_92974854160913d9546c2c6_79313452 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <td class="text-right-util text-nowrap-util">
                                        <?php echo $_smarty_tpl->tpl_vars['wishlist']->value->productCount;?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'products'),$_smarty_tpl ) );?>

                                    </td>
                                <?php
}
}
/* {/block 'snippets-wishlist-dropdown-count'} */
/* {block 'snippets-wishlist-dropdown-wishlists'} */
class Block_37781967760913d9545f675_54213524 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="wishlist-dropdown-items table-responsive max-h-sm lg-max-h">
                <table class="table table-vertical-middle table-striped">
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wishlists']->value, 'wishlist');
$_smarty_tpl->tpl_vars['wishlist']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['wishlist']->value) {
$_smarty_tpl->tpl_vars['wishlist']->do_else = false;
?>
                            <tr class="clickable-row cursor-pointer" data-href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'wunschliste.php'),$_smarty_tpl ) );?>
?wl=<?php echo $_smarty_tpl->tpl_vars['wishlist']->value->kWunschliste;?>
">
                                <td>
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_137638943160913d95462b44_04429288', 'snippets-wishlist-dropdown-link', $this->tplIndex);
?>

                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_91996555160913d95464912_05174160', 'snippets-wishlist-dropdown-punlic', $this->tplIndex);
?>

                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_93452485260913d954684d8_28684174', 'snippets-wishlist-dropdown-private', $this->tplIndex);
?>

                                </td>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_92974854160913d9546c2c6_79313452', 'snippets-wishlist-dropdown-count', $this->tplIndex);
?>

                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
            </div>
        <?php
}
}
/* {/block 'snippets-wishlist-dropdown-wishlists'} */
/* {block 'snippets-wishlist-dropdown-new-wl-link'} */
class Block_36884821260913d954702e4_25944255 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'wunschliste.php'),$_smarty_tpl ) );
$_prefixVariable40=ob_get_clean();
$_block_plugin69 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin69, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('variant'=>"primary",'type'=>"link",'block'=>true,'size'=>"sm",'href'=>$_prefixVariable40."?newWL=1"));
$_block_repeat=true;
echo $_block_plugin69->render(array('variant'=>"primary",'type'=>"link",'block'=>true,'size'=>"sm",'href'=>$_prefixVariable40."?newWL=1"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'addNew','section'=>'wishlist'),$_smarty_tpl ) );?>

                <?php $_block_repeat=false;
echo $_block_plugin69->render(array('variant'=>"primary",'type'=>"link",'block'=>true,'size'=>"sm",'href'=>$_prefixVariable40."?newWL=1"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
}
}
/* {/block 'snippets-wishlist-dropdown-new-wl-link'} */
/* {block 'snippets-wishlist-dropdown-new-wl'} */
class Block_97804426260913d9546f9c8_99813573 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="wishlist-dropdown-footer dropdown-body">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36884821260913d954702e4_25944255', 'snippets-wishlist-dropdown-new-wl-link', $this->tplIndex);
?>

        </div>
    <?php
}
}
/* {/block 'snippets-wishlist-dropdown-new-wl'} */
/* {block 'snippets-wishlist-dropdown'} */
class Block_86944840160913d9545d392_98757967 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-wishlist-dropdown' => 
  array (
    0 => 'Block_86944840160913d9545d392_98757967',
  ),
  'snippets-wishlist-dropdown-wishlists' => 
  array (
    0 => 'Block_37781967760913d9545f675_54213524',
  ),
  'snippets-wishlist-dropdown-link' => 
  array (
    0 => 'Block_137638943160913d95462b44_04429288',
  ),
  'snippets-wishlist-dropdown-punlic' => 
  array (
    0 => 'Block_91996555160913d95464912_05174160',
  ),
  'snippets-wishlist-dropdown-private' => 
  array (
    0 => 'Block_93452485260913d954684d8_28684174',
  ),
  'snippets-wishlist-dropdown-count' => 
  array (
    0 => 'Block_92974854160913d9546c2c6_79313452',
  ),
  'snippets-wishlist-dropdown-new-wl' => 
  array (
    0 => 'Block_97804426260913d9546f9c8_99813573',
  ),
  'snippets-wishlist-dropdown-new-wl-link' => 
  array (
    0 => 'Block_36884821260913d954702e4_25944255',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['wishlists']->value->isNotEmpty()) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_37781967760913d9545f675_54213524', 'snippets-wishlist-dropdown-wishlists', $this->tplIndex);
?>

    <?php }?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_97804426260913d9546f9c8_99813573', 'snippets-wishlist-dropdown-new-wl', $this->tplIndex);
?>

<?php
}
}
/* {/block 'snippets-wishlist-dropdown'} */
}
