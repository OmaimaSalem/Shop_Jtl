<?php
/* Smarty version 3.1.38, created on 2021-05-18 11:41:17
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\snippets\stock_status.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a38bbd5786a9_97565313',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04f49c3e211e6f63fb7980b3c8269b9bc585f7ba' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\snippets\\stock_status.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a38bbd5786a9_97565313 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_90006351760a38bbd535ec4_32907700', 'snippets-stock-status');
?>

<?php }
/* {block 'snippets-stock-status-in-flowing'} */
class Block_10935699460a38bbd53f0c4_16315511 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <span class="status status-1"><?php echo $_smarty_tpl->tpl_vars['currentProduct']->value->getBackorderString();?>
</span>
        <?php
}
}
/* {/block 'snippets-stock-status-in-flowing'} */
/* {block 'snippets-stock-status-supllier-stock-notice'} */
class Block_205263081060a38bbd5622a2_82454849 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <span class="status status-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'supplierStockNotice','printf'=>$_smarty_tpl->tpl_vars['currentProduct']->value->fLieferzeit),$_smarty_tpl ) );?>
</span>
        <?php
}
}
/* {/block 'snippets-stock-status-supllier-stock-notice'} */
/* {block 'snippets-stock-status-exact'} */
class Block_128780897460a38bbd56ba78_39579151 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <span class="status status-<?php echo $_smarty_tpl->tpl_vars['currentProduct']->value->Lageranzeige->nStatus;?>
">
                <span class="fas fa-truck status-icon"></span><?php echo $_smarty_tpl->tpl_vars['currentProduct']->value->Lageranzeige->cLagerhinweis[$_smarty_tpl->tpl_vars['anzeige']->value];?>

            </span>
        <?php
}
}
/* {/block 'snippets-stock-status-exact'} */
/* {block 'snippets-stock-status-traffic-light'} */
class Block_67644372860a38bbd5716b6_76186191 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <span class="status status-<?php echo $_smarty_tpl->tpl_vars['currentProduct']->value->Lageranzeige->nStatus;?>
">
                <span class="fas fa-truck status-icon"></span><?php echo $_smarty_tpl->tpl_vars['currentProduct']->value->Lageranzeige->AmpelText;?>

            </span>
        <?php
}
}
/* {/block 'snippets-stock-status-traffic-light'} */
/* {block 'snippets-stock-status'} */
class Block_90006351760a38bbd535ec4_32907700 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-stock-status' => 
  array (
    0 => 'Block_90006351760a38bbd535ec4_32907700',
  ),
  'snippets-stock-status-in-flowing' => 
  array (
    0 => 'Block_10935699460a38bbd53f0c4_16315511',
  ),
  'snippets-stock-status-supllier-stock-notice' => 
  array (
    0 => 'Block_205263081060a38bbd5622a2_82454849',
  ),
  'snippets-stock-status-exact' => 
  array (
    0 => 'Block_128780897460a38bbd56ba78_39579151',
  ),
  'snippets-stock-status-traffic-light' => 
  array (
    0 => 'Block_67644372860a38bbd5716b6_76186191',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_assignInScope('anzeige', $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikel_lagerbestandsanzeige']);?>
    <?php if ($_smarty_tpl->tpl_vars['anzeige']->value !== 'nichts' && ($_smarty_tpl->tpl_vars['currentProduct']->value->cLagerKleinerNull === 'N' || $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_lieferantenbestand_anzeigen'] === 'U') && $_smarty_tpl->tpl_vars['currentProduct']->value->getBackorderString() !== '' && $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_lieferantenbestand_anzeigen'] !== 'N') {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10935699460a38bbd53f0c4_16315511', 'snippets-stock-status-in-flowing', $this->tplIndex);
?>

    <?php } elseif ($_smarty_tpl->tpl_vars['anzeige']->value !== 'nichts' && $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_lieferantenbestand_anzeigen'] !== 'N' && $_smarty_tpl->tpl_vars['currentProduct']->value->cLagerBeachten === 'Y' && $_smarty_tpl->tpl_vars['currentProduct']->value->fLagerbestand <= 0 && $_smarty_tpl->tpl_vars['currentProduct']->value->fLieferantenlagerbestand > 0 && $_smarty_tpl->tpl_vars['currentProduct']->value->fLieferzeit > 0 && ($_smarty_tpl->tpl_vars['currentProduct']->value->cLagerKleinerNull === 'N' && $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_lieferantenbestand_anzeigen'] === 'I' || $_smarty_tpl->tpl_vars['currentProduct']->value->cLagerKleinerNull === 'Y' && $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_lieferantenbestand_anzeigen'] === 'U')) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205263081060a38bbd5622a2_82454849', 'snippets-stock-status-supllier-stock-notice', $this->tplIndex);
?>

    <?php } elseif ($_smarty_tpl->tpl_vars['anzeige']->value === 'verfuegbarkeit' || $_smarty_tpl->tpl_vars['anzeige']->value === 'genau') {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_128780897460a38bbd56ba78_39579151', 'snippets-stock-status-exact', $this->tplIndex);
?>

    <?php } elseif ($_smarty_tpl->tpl_vars['anzeige']->value === 'ampel') {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_67644372860a38bbd5716b6_76186191', 'snippets-stock-status-traffic-light', $this->tplIndex);
?>

    <?php }
}
}
/* {/block 'snippets-stock-status'} */
}
