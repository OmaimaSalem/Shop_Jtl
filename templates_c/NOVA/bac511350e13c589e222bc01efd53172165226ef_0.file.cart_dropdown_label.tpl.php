<?php
/* Smarty version 3.1.38, created on 2021-05-19 14:59:01
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\basket\cart_dropdown_label.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a50b950ea900_68074486',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bac511350e13c589e222bc01efd53172165226ef' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\basket\\cart_dropdown_label.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:basket/cart_dropdown.tpl' => 1,
  ),
),false)) {
function content_60a50b950ea900_68074486 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_158900134560a50b950d6f19_07881827', 'basket-cart-dropdown-label');
?>

<?php }
/* {block 'basket-cart-dropdown-label-count'} */
class Block_90527515260a50b950dfb62_19450038 extends Smarty_Internal_Block
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
class Block_47288039460a50b950e3958_35058873 extends Smarty_Internal_Block
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
class Block_90865709660a50b950d9219_05850298 extends Smarty_Internal_Block
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_90527515260a50b950dfb62_19450038', 'basket-cart-dropdown-label-count', $this->tplIndex);
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_47288039460a50b950e3958_35058873', 'basket-cart-dropdown-labelprice', $this->tplIndex);
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
class Block_13208755160a50b950e6981_59290223 extends Smarty_Internal_Block
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
class Block_158900134560a50b950d6f19_07881827 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'basket-cart-dropdown-label' => 
  array (
    0 => 'Block_158900134560a50b950d6f19_07881827',
  ),
  'basket-cart-dropdown-label-link' => 
  array (
    0 => 'Block_90865709660a50b950d9219_05850298',
  ),
  'basket-cart-dropdown-label-count' => 
  array (
    0 => 'Block_90527515260a50b950dfb62_19450038',
  ),
  'basket-cart-dropdown-labelprice' => 
  array (
    0 => 'Block_47288039460a50b950e3958_35058873',
  ),
  'basket-cart-dropdown-label-include-cart-dropdown' => 
  array (
    0 => 'Block_13208755160a50b950e6981_59290223',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <li class="cart-icon-dropdown nav-item dropdown <?php if ($_smarty_tpl->tpl_vars['WarenkorbArtikelPositionenanzahl']->value != 0) {?>not-empty<?php }?>">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_90865709660a50b950d9219_05850298', 'basket-cart-dropdown-label-link', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13208755160a50b950e6981_59290223', 'basket-cart-dropdown-label-include-cart-dropdown', $this->tplIndex);
?>

    </li>
<?php
}
}
/* {/block 'basket-cart-dropdown-label'} */
}
