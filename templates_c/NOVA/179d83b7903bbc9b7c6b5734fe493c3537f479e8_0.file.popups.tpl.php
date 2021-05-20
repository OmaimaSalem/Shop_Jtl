<?php
/* Smarty version 3.1.38, created on 2021-05-19 15:11:26
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\productdetails\popups.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a50e7ea5b358_18703835',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '179d83b7903bbc9b7c6b5734fe493c3537f479e8' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\productdetails\\popups.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:productdetails/question_on_item.tpl' => 1,
    'file:productdetails/pushed.tpl' => 1,
  ),
),false)) {
function content_60a50e7ea5b358_18703835 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_173258135760a50e7e9fd8e6_18125084', 'productdetails-popups');
?>

<?php }
/* {block 'productdetails-popups-include-question-on-item'} */
class Block_46637599460a50e7ea10d29_91685763 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'productQuestion','section'=>'productDetails'),$_smarty_tpl ) );
$_prefixVariable58 = ob_get_clean();
$_block_plugin146 = isset($_smarty_tpl->smarty->registered_plugins['block']['modal'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['modal'][0][0] : null;
if (!is_callable(array($_block_plugin146, 'render'))) {
throw new SmartyException('block tag \'modal\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('modal', array('id'=>"question-popup-".((string)$_smarty_tpl->tpl_vars['kArtikel']->value),'title'=>$_prefixVariable58));
$_block_repeat=true;
echo $_block_plugin146->render(array('id'=>"question-popup-".((string)$_smarty_tpl->tpl_vars['kArtikel']->value),'title'=>$_prefixVariable58), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_smarty_tpl->_subTemplateRender('file:productdetails/question_on_item.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('position'=>'popup'), 0, false);
?>
            <?php $_block_repeat=false;
echo $_block_plugin146->render(array('id'=>"question-popup-".((string)$_smarty_tpl->tpl_vars['kArtikel']->value),'title'=>$_prefixVariable58), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php
}
}
/* {/block 'productdetails-popups-include-question-on-item'} */
/* {block 'productdetails-popups-include-pushed'} */
class Block_69103542960a50e7ea3eb77_24301746 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="popupa<?php echo $_smarty_tpl->tpl_vars['kArtikel']->value;?>
" class="product-popup">
                <?php $_smarty_tpl->_subTemplateRender('file:productdetails/pushed.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('oArtikel'=>$_smarty_tpl->tpl_vars['Artikel']->value,'fAnzahl'=>$_smarty_tpl->tpl_vars['bWarenkorbAnzahl']->value), 0, false);
?>
            </div>
        <?php
}
}
/* {/block 'productdetails-popups-include-pushed'} */
/* {block 'productdetails-popups-script'} */
class Block_28582881160a50e7ea44839_16889248 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_block_plugin147 = isset($_smarty_tpl->smarty->registered_plugins['block']['inline_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['inline_script'][0][0] : null;
if (!is_callable(array($_block_plugin147, 'inlineScript'))) {
throw new SmartyException('block tag \'inline_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo $_block_plugin147->inlineScript(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
            $(function() {
                <?php if ((isset($_smarty_tpl->tpl_vars['fehlendeAngaben_benachrichtigung']->value)) && count($_smarty_tpl->tpl_vars['fehlendeAngaben_benachrichtigung']->value) > 0 && ($_smarty_tpl->tpl_vars['verfuegbarkeitsBenachrichtigung']->value == 2 || $_smarty_tpl->tpl_vars['verfuegbarkeitsBenachrichtigung']->value == 3)) {?>
                    show_popup('n<?php echo $_smarty_tpl->tpl_vars['kArtikel']->value;?>
', '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'requestNotification'),$_smarty_tpl ) );?>
');
                <?php }?>

                <?php if ((isset($_smarty_tpl->tpl_vars['fehlendeAngaben_fragezumprodukt']->value)) && count($_smarty_tpl->tpl_vars['fehlendeAngaben_fragezumprodukt']->value) > 0 && $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_fragezumprodukt_anzeigen'] === 'P') {?>
                    $('#question-popup-<?php echo $_smarty_tpl->tpl_vars['kArtikel']->value;?>
').modal('show');
                <?php }?>
            });

            function show_popup(item, title) {
                var html = $('#popup' + item).html();
                if (typeof title === 'undefined' || title.length === 0) {
                    title = $(html).find('h3').text();
                }
                eModal.alert({
                    message: html,
                    title: title
                });
            }
        <?php echo '</script'; ?>
><?php $_block_repeat=false;
echo $_block_plugin147->inlineScript(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php
}
}
/* {/block 'productdetails-popups-script'} */
/* {block 'productdetails-popups'} */
class Block_173258135760a50e7e9fd8e6_18125084 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'productdetails-popups' => 
  array (
    0 => 'Block_173258135760a50e7e9fd8e6_18125084',
  ),
  'productdetails-popups-include-question-on-item' => 
  array (
    0 => 'Block_46637599460a50e7ea10d29_91685763',
  ),
  'productdetails-popups-include-pushed' => 
  array (
    0 => 'Block_69103542960a50e7ea3eb77_24301746',
  ),
  'productdetails-popups-script' => 
  array (
    0 => 'Block_28582881160a50e7ea44839_16889248',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_assignInScope('kArtikel', $_smarty_tpl->tpl_vars['Artikel']->value->kArtikel);?>
    <?php if ($_smarty_tpl->tpl_vars['Artikel']->value->kArtikelVariKombi > 0) {?>
        <?php $_smarty_tpl->_assignInScope('kArtikel', $_smarty_tpl->tpl_vars['Artikel']->value->kArtikelVariKombi);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_fragezumprodukt_anzeigen'] === 'P') {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_46637599460a50e7ea10d29_91685763', 'productdetails-popups-include-question-on-item', $this->tplIndex);
?>

    <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['bWarenkorbHinzugefuegt']->value)) && $_smarty_tpl->tpl_vars['bWarenkorbHinzugefuegt']->value) {?>
        <?php if (!(isset($_smarty_tpl->tpl_vars['kArtikel']->value))) {?>
            <?php $_smarty_tpl->_assignInScope('kArtikel', $_smarty_tpl->tpl_vars['Artikel']->value->kArtikel);?>
            <?php if ($_smarty_tpl->tpl_vars['Artikel']->value->kArtikelVariKombi > 0) {?>
                <?php $_smarty_tpl->_assignInScope('kArtikel', $_smarty_tpl->tpl_vars['Artikel']->value->kArtikelVariKombi);?>
            <?php }?>
        <?php }?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_69103542960a50e7ea3eb77_24301746', 'productdetails-popups-include-pushed', $this->tplIndex);
?>

    <?php }?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_28582881160a50e7ea44839_16889248', 'productdetails-popups-script', $this->tplIndex);
?>

<?php
}
}
/* {/block 'productdetails-popups'} */
}
