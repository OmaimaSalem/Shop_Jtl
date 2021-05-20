<?php
/* Smarty version 3.1.38, created on 2021-05-04 11:46:16
  from 'C:\xampp\htdocs\shop\templates\NOVA\snippets\search_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_609117e83d74c7_65912999',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d23f3fd3b4b0c017003f08c71f075166463d296' => 
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
function content_609117e83d74c7_65912999 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1993685690609117e83c48a6_56652074', 'snippets-search-form');
?>

<?php }
/* {block 'snippets-search-form'} */
class Block_1993685690609117e83c48a6_56652074 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-search-form' => 
  array (
    0 => 'Block_1993685690609117e83c48a6_56652074',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="search-wrapper w-100-util">
        <?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'render'))) {
throw new SmartyException('block tag \'form\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('action'=>'index.php','method'=>'get','class'=>'main-search flex-grow-1','slide'=>true));
$_block_repeat=true;
echo $_block_plugin3->render(array('action'=>'index.php','method'=>'get','class'=>'main-search flex-grow-1','slide'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['inputgroup'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['inputgroup'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'render'))) {
throw new SmartyException('block tag \'inputgroup\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inputgroup', array());
$_block_repeat=true;
echo $_block_plugin4->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'search'),$_smarty_tpl ) );
$_prefixVariable4=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'search'),$_smarty_tpl ) );
$_prefixVariable5=ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('id'=>((string)$_smarty_tpl->tpl_vars['id']->value),'name'=>"qs",'type'=>"text",'class'=>"ac_input",'placeholder'=>$_prefixVariable4,'autocomplete'=>"off",'aria'=>array("label"=>$_prefixVariable5)),$_smarty_tpl ) );?>

                <?php $_block_plugin5 = isset($_smarty_tpl->smarty->registered_plugins['block']['inputgroupaddon'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['inputgroupaddon'][0][0] : null;
if (!is_callable(array($_block_plugin5, 'render'))) {
throw new SmartyException('block tag \'inputgroupaddon\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inputgroupaddon', array('append'=>true));
$_block_repeat=true;
echo $_block_plugin5->render(array('append'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'search'),$_smarty_tpl ) );
$_prefixVariable6 = ob_get_clean();
$_block_plugin6 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin6, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('type'=>"submit",'name'=>"search",'variant'=>"secondary",'aria'=>array("label"=>$_prefixVariable6)));
$_block_repeat=true;
echo $_block_plugin6->render(array('type'=>"submit",'name'=>"search",'variant'=>"secondary",'aria'=>array("label"=>$_prefixVariable6)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <span class="fas fa-search"></span>
                    <?php $_block_repeat=false;
echo $_block_plugin6->render(array('type'=>"submit",'name'=>"search",'variant'=>"secondary",'aria'=>array("label"=>$_prefixVariable6)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php $_block_repeat=false;
echo $_block_plugin5->render(array('append'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <span class="form-clear d-none"><i class="fas fa-times"></i></span>
            <?php $_block_repeat=false;
echo $_block_plugin4->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php $_block_repeat=false;
echo $_block_plugin3->render(array('action'=>'index.php','method'=>'get','class'=>'main-search flex-grow-1','slide'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>
<?php
}
}
/* {/block 'snippets-search-form'} */
}
