<?php
/* Smarty version 3.1.38, created on 2021-05-04 14:27:01
  from 'C:\xampp\htdocs\shop\templates\NOVA\basket\cart_dropdown_label.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60913d95987232_37926336',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9f17340456258896d0ab642db836c49e246fbb9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\templates\\NOVA\\basket\\cart_dropdown_label.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:basket/cart_dropdown.tpl' => 1,
  ),
),false)) {
function content_60913d95987232_37926336 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_63522727360913d9597ac10_87536801', 'basket-cart-dropdown-label');
?>

<?php }
/* {block 'basket-cart-dropdown-label-count'} */
class Block_78367230860913d9597fee6_34765489 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <i class='fas fa-shopping-cart cart-icon-dropdown-icon'>
                        <?php if ($_smarty_tpl->tpl_vars['WarenkorbArtikelPositionenanzahl']->value >= 1) {?>
                        <span class="fa-sup" title="<?php echo $_smarty_tpl->tpl_vars['WarenkorbArtikelPositionenanzahl']->value;?>
">
                            <?php echo $_smarty_tpl->tpl_vars['WarenkorbArtikelPositionenanzahl']->value;?>

                        </span>
                        <?php }?>
                    </i>
                <?php
}
}
/* {/block 'basket-cart-dropdown-label-count'} */
/* {block 'basket-cart-dropdown-labelprice'} */
class Block_11517709360913d95982945_81595997 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <span class="cart-icon-dropdown-price"><?php echo $_smarty_tpl->tpl_vars['WarensummeLocalized']->value[0];?>
</span>
                <?php
}
}
/* {/block 'basket-cart-dropdown-labelprice'} */
/* {block 'basket-cart-dropdown-label-link'} */
class Block_55324526860913d9597cad6_27255225 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'basket'),$_smarty_tpl ) );
$_prefixVariable41 = ob_get_clean();
$_block_plugin70 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin70, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('class'=>'nav-link','aria'=>array('expanded'=>'false','label'=>$_prefixVariable41),'data'=>array('toggle'=>'dropdown')));
$_block_repeat=true;
echo $_block_plugin70->render(array('class'=>'nav-link','aria'=>array('expanded'=>'false','label'=>$_prefixVariable41),'data'=>array('toggle'=>'dropdown')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_78367230860913d9597fee6_34765489', 'basket-cart-dropdown-label-count', $this->tplIndex);
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11517709360913d95982945_81595997', 'basket-cart-dropdown-labelprice', $this->tplIndex);
?>

            <?php $_block_repeat=false;
echo $_block_plugin70->render(array('class'=>'nav-link','aria'=>array('expanded'=>'false','label'=>$_prefixVariable41),'data'=>array('toggle'=>'dropdown')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php
}
}
/* {/block 'basket-cart-dropdown-label-link'} */
/* {block 'basket-cart-dropdown-label-include-cart-dropdown'} */
class Block_53902391360913d959852e5_68799262 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:basket/cart_dropdown.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'basket-cart-dropdown-label-include-cart-dropdown'} */
/* {block 'basket-cart-dropdown-label'} */
class Block_63522727360913d9597ac10_87536801 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'basket-cart-dropdown-label' => 
  array (
    0 => 'Block_63522727360913d9597ac10_87536801',
  ),
  'basket-cart-dropdown-label-link' => 
  array (
    0 => 'Block_55324526860913d9597cad6_27255225',
  ),
  'basket-cart-dropdown-label-count' => 
  array (
    0 => 'Block_78367230860913d9597fee6_34765489',
  ),
  'basket-cart-dropdown-labelprice' => 
  array (
    0 => 'Block_11517709360913d95982945_81595997',
  ),
  'basket-cart-dropdown-label-include-cart-dropdown' => 
  array (
    0 => 'Block_53902391360913d959852e5_68799262',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <li class="cart-icon-dropdown nav-item dropdown <?php if ($_smarty_tpl->tpl_vars['WarenkorbArtikelPositionenanzahl']->value != 0) {?>not-empty<?php }?>">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_55324526860913d9597cad6_27255225', 'basket-cart-dropdown-label-link', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_53902391360913d959852e5_68799262', 'basket-cart-dropdown-label-include-cart-dropdown', $this->tplIndex);
?>

    </li>
<?php
}
}
/* {/block 'basket-cart-dropdown-label'} */
}
