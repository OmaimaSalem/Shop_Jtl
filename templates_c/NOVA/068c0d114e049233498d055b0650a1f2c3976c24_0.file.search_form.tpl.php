<?php
/* Smarty version 3.1.38, created on 2021-05-19 14:58:47
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\snippets\search_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a50b875bf502_77454631',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '068c0d114e049233498d055b0650a1f2c3976c24' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\snippets\\search_form.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a50b875bf502_77454631 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_201260522560a50b8758d691_27736101', 'snippets-search-form');
?>

<?php }
/* {block 'snippets-search-form'} */
class Block_201260522560a50b8758d691_27736101 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-search-form' => 
  array (
    0 => 'Block_201260522560a50b8758d691_27736101',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="search-wrapper w-100-util">
        <?php $_block_plugin33 = isset($_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0] : null;
if (!is_callable(array($_block_plugin33, 'render'))) {
throw new SmartyException('block tag \'form\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('action'=>'index.php','method'=>'get','class'=>'main-search flex-grow-1','slide'=>true));
$_block_repeat=true;
echo $_block_plugin33->render(array('action'=>'index.php','method'=>'get','class'=>'main-search flex-grow-1','slide'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_block_plugin34 = isset($_smarty_tpl->smarty->registered_plugins['block']['inputgroup'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['inputgroup'][0][0] : null;
if (!is_callable(array($_block_plugin34, 'render'))) {
throw new SmartyException('block tag \'inputgroup\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inputgroup', array());
$_block_repeat=true;
echo $_block_plugin34->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'search'),$_smarty_tpl ) );
$_prefixVariable6=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'search'),$_smarty_tpl ) );
$_prefixVariable7=ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('id'=>((string)$_smarty_tpl->tpl_vars['id']->value),'name'=>"qs",'type'=>"text",'class'=>"ac_input",'placeholder'=>$_prefixVariable6,'autocomplete'=>"off",'aria'=>array("label"=>$_prefixVariable7)),$_smarty_tpl ) );?>

                <?php $_block_plugin35 = isset($_smarty_tpl->smarty->registered_plugins['block']['inputgroupaddon'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['inputgroupaddon'][0][0] : null;
if (!is_callable(array($_block_plugin35, 'render'))) {
throw new SmartyException('block tag \'inputgroupaddon\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inputgroupaddon', array('append'=>true));
$_block_repeat=true;
echo $_block_plugin35->render(array('append'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'search'),$_smarty_tpl ) );
$_prefixVariable8 = ob_get_clean();
$_block_plugin36 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin36, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('type'=>"submit",'name'=>"search",'variant'=>"secondary",'aria'=>array("label"=>$_prefixVariable8)));
$_block_repeat=true;
echo $_block_plugin36->render(array('type'=>"submit",'name'=>"search",'variant'=>"secondary",'aria'=>array("label"=>$_prefixVariable8)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <span class="fas fa-search"></span>
                    <?php $_block_repeat=false;
echo $_block_plugin36->render(array('type'=>"submit",'name'=>"search",'variant'=>"secondary",'aria'=>array("label"=>$_prefixVariable8)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php $_block_repeat=false;
echo $_block_plugin35->render(array('append'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <span class="form-clear d-none"><i class="fas fa-times"></i></span>
            <?php $_block_repeat=false;
echo $_block_plugin34->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php $_block_repeat=false;
echo $_block_plugin33->render(array('action'=>'index.php','method'=>'get','class'=>'main-search flex-grow-1','slide'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>
<?php
}
}
/* {/block 'snippets-search-form'} */
}
