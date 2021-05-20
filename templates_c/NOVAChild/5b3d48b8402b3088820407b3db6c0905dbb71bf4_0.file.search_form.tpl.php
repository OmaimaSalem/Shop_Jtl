<?php
/* Smarty version 3.1.38, created on 2021-05-04 14:26:54
  from 'C:\xampp\htdocs\shop\templates\NOVA\snippets\search_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60913d8e6898d5_04092219',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b3d48b8402b3088820407b3db6c0905dbb71bf4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\templates\\NOVA\\snippets\\search_form.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60913d8e6898d5_04092219 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_148251752160913d8e67ca50_61957494', 'snippets-search-form');
?>

<?php }
/* {block 'snippets-search-form'} */
class Block_148251752160913d8e67ca50_61957494 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-search-form' => 
  array (
    0 => 'Block_148251752160913d8e67ca50_61957494',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="search-wrapper w-100-util">
        <?php $_block_plugin35 = isset($_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0] : null;
if (!is_callable(array($_block_plugin35, 'render'))) {
throw new SmartyException('block tag \'form\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('action'=>'index.php','method'=>'get','class'=>'main-search flex-grow-1','slide'=>true));
$_block_repeat=true;
echo $_block_plugin35->render(array('action'=>'index.php','method'=>'get','class'=>'main-search flex-grow-1','slide'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_block_plugin36 = isset($_smarty_tpl->smarty->registered_plugins['block']['inputgroup'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['inputgroup'][0][0] : null;
if (!is_callable(array($_block_plugin36, 'render'))) {
throw new SmartyException('block tag \'inputgroup\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inputgroup', array());
$_block_repeat=true;
echo $_block_plugin36->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'search'),$_smarty_tpl ) );
$_prefixVariable8=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'search'),$_smarty_tpl ) );
$_prefixVariable9=ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('id'=>((string)$_smarty_tpl->tpl_vars['id']->value),'name'=>"qs",'type'=>"text",'class'=>"ac_input",'placeholder'=>$_prefixVariable8,'autocomplete'=>"off",'aria'=>array("label"=>$_prefixVariable9)),$_smarty_tpl ) );?>

                <?php $_block_plugin37 = isset($_smarty_tpl->smarty->registered_plugins['block']['inputgroupaddon'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['inputgroupaddon'][0][0] : null;
if (!is_callable(array($_block_plugin37, 'render'))) {
throw new SmartyException('block tag \'inputgroupaddon\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inputgroupaddon', array('append'=>true));
$_block_repeat=true;
echo $_block_plugin37->render(array('append'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'search'),$_smarty_tpl ) );
$_prefixVariable10 = ob_get_clean();
$_block_plugin38 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin38, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('type'=>"submit",'name'=>"search",'variant'=>"secondary",'aria'=>array("label"=>$_prefixVariable10)));
$_block_repeat=true;
echo $_block_plugin38->render(array('type'=>"submit",'name'=>"search",'variant'=>"secondary",'aria'=>array("label"=>$_prefixVariable10)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <span class="fas fa-search"></span>
                    <?php $_block_repeat=false;
echo $_block_plugin38->render(array('type'=>"submit",'name'=>"search",'variant'=>"secondary",'aria'=>array("label"=>$_prefixVariable10)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php $_block_repeat=false;
echo $_block_plugin37->render(array('append'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <span class="form-clear d-none"><i class="fas fa-times"></i></span>
            <?php $_block_repeat=false;
echo $_block_plugin36->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php $_block_repeat=false;
echo $_block_plugin35->render(array('action'=>'index.php','method'=>'get','class'=>'main-search flex-grow-1','slide'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>
<?php
}
}
/* {/block 'snippets-search-form'} */
}
