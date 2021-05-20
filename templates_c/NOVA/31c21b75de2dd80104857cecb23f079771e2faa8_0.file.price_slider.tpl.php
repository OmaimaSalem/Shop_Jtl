<?php
/* Smarty version 3.1.38, created on 2021-05-19 15:00:11
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\snippets\filter\price_slider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a50bdbb791a2_38449748',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31c21b75de2dd80104857cecb23f079771e2faa8' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\snippets\\filter\\price_slider.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a50bdbb791a2_38449748 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_195737297560a50bdbb44016_38498841', 'snippets-filter-price-slider');
?>

<?php }
/* {block 'snippets-filter-price-slider-content'} */
class Block_148398913660a50bdbb44d48_78253145 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_block_plugin17 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin17, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('no-gutters'=>true,'class'=>"price-range-inputs"));
$_block_repeat=true;
echo $_block_plugin17->render(array('no-gutters'=>true,'class'=>"price-range-inputs"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_block_plugin18 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin18, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>5));
$_block_repeat=true;
echo $_block_plugin18->render(array('cols'=>5), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_block_plugin19 = isset($_smarty_tpl->smarty->registered_plugins['block']['inputgroup'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['inputgroup'][0][0] : null;
if (!is_callable(array($_block_plugin19, 'render'))) {
throw new SmartyException('block tag \'inputgroup\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inputgroup', array());
$_block_repeat=true;
echo $_block_plugin19->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'differentialPriceFrom','section'=>'productOverview'),$_smarty_tpl ) );
$_prefixVariable6 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('id'=>((string)$_smarty_tpl->tpl_vars['id']->value)."-from",'class'=>"price-range-input",'placeholder'=>0,'aria'=>array("label"=>$_prefixVariable6)),$_smarty_tpl ) );?>

                    <?php $_block_plugin20 = isset($_smarty_tpl->smarty->registered_plugins['block']['inputgroupaddon'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['inputgroupaddon'][0][0] : null;
if (!is_callable(array($_block_plugin20, 'render'))) {
throw new SmartyException('block tag \'inputgroupaddon\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inputgroupaddon', array('prepend'=>true));
$_block_repeat=true;
echo $_block_plugin20->render(array('prepend'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php $_block_plugin21 = isset($_smarty_tpl->smarty->registered_plugins['block']['inputgrouptext'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['inputgrouptext'][0][0] : null;
if (!is_callable(array($_block_plugin21, 'render'))) {
throw new SmartyException('block tag \'inputgrouptext\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inputgrouptext', array());
$_block_repeat=true;
echo $_block_plugin21->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php echo $_SESSION['Waehrung']->getName();?>

                        <?php $_block_repeat=false;
echo $_block_plugin21->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php $_block_repeat=false;
echo $_block_plugin20->render(array('prepend'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php $_block_repeat=false;
echo $_block_plugin19->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php $_block_repeat=false;
echo $_block_plugin18->render(array('cols'=>5), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php $_block_plugin22 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin22, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>5));
$_block_repeat=true;
echo $_block_plugin22->render(array('cols'=>5), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_block_plugin23 = isset($_smarty_tpl->smarty->registered_plugins['block']['inputgroup'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['inputgroup'][0][0] : null;
if (!is_callable(array($_block_plugin23, 'render'))) {
throw new SmartyException('block tag \'inputgroup\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inputgroup', array());
$_block_repeat=true;
echo $_block_plugin23->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'differentialPriceTo','section'=>'productOverview'),$_smarty_tpl ) );
$_prefixVariable7 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('id'=>((string)$_smarty_tpl->tpl_vars['id']->value)."-to",'class'=>"price-range-input",'placeholder'=>$_smarty_tpl->tpl_vars['priceRangeMax']->value,'aria'=>array("label"=>$_prefixVariable7)),$_smarty_tpl ) );?>

                    <?php $_block_plugin24 = isset($_smarty_tpl->smarty->registered_plugins['block']['inputgroupaddon'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['inputgroupaddon'][0][0] : null;
if (!is_callable(array($_block_plugin24, 'render'))) {
throw new SmartyException('block tag \'inputgroupaddon\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inputgroupaddon', array('prepend'=>true));
$_block_repeat=true;
echo $_block_plugin24->render(array('prepend'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php $_block_plugin25 = isset($_smarty_tpl->smarty->registered_plugins['block']['inputgrouptext'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['inputgrouptext'][0][0] : null;
if (!is_callable(array($_block_plugin25, 'render'))) {
throw new SmartyException('block tag \'inputgrouptext\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inputgrouptext', array());
$_block_repeat=true;
echo $_block_plugin25->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php echo $_SESSION['Waehrung']->getName();?>

                        <?php $_block_repeat=false;
echo $_block_plugin25->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php $_block_repeat=false;
echo $_block_plugin24->render(array('prepend'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php $_block_repeat=false;
echo $_block_plugin23->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php $_block_repeat=false;
echo $_block_plugin22->render(array('cols'=>5), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php $_block_repeat=false;
echo $_block_plugin17->render(array('no-gutters'=>true,'class'=>"price-range-inputs"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('data'=>array('id'=>'js-price-range'),'type'=>"hidden",'value'=>((string)$_smarty_tpl->tpl_vars['priceRange']->value)),$_smarty_tpl ) );?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('data'=>array('id'=>'js-price-range-max'),'type'=>"hidden",'value'=>((string)$_smarty_tpl->tpl_vars['priceRangeMax']->value)),$_smarty_tpl ) );?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('data'=>array('id'=>'js-price-range-id'),'type'=>"hidden",'value'=>((string)$_smarty_tpl->tpl_vars['id']->value)),$_smarty_tpl ) );?>

        <div id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="price-range-slide"></div>
    <?php
}
}
/* {/block 'snippets-filter-price-slider-content'} */
/* {block 'snippets-filter-price-slider-script'} */
class Block_156831158660a50bdbb698f7_25105064 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_block_plugin26 = isset($_smarty_tpl->smarty->registered_plugins['block']['inline_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['inline_script'][0][0] : null;
if (!is_callable(array($_block_plugin26, 'inlineScript'))) {
throw new SmartyException('block tag \'inline_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo $_block_plugin26->inlineScript(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
            $(window).on('load', function() {
                $.evo.initPriceSlider($('.js-price-range-box'), $('#js-price-redirect').val() != 1);
            });
        <?php echo '</script'; ?>
><?php $_block_repeat=false;
echo $_block_plugin26->inlineScript(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php
}
}
/* {/block 'snippets-filter-price-slider-script'} */
/* {block 'snippets-filter-price-slider'} */
class Block_195737297560a50bdbb44016_38498841 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-filter-price-slider' => 
  array (
    0 => 'Block_195737297560a50bdbb44016_38498841',
  ),
  'snippets-filter-price-slider-content' => 
  array (
    0 => 'Block_148398913660a50bdbb44d48_78253145',
  ),
  'snippets-filter-price-slider-script' => 
  array (
    0 => 'Block_156831158660a50bdbb698f7_25105064',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_148398913660a50bdbb44d48_78253145', 'snippets-filter-price-slider-content', $this->tplIndex);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_156831158660a50bdbb698f7_25105064', 'snippets-filter-price-slider-script', $this->tplIndex);
?>

<?php
}
}
/* {/block 'snippets-filter-price-slider'} */
}
