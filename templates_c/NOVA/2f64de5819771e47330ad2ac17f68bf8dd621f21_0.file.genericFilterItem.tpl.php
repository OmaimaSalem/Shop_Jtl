<?php
/* Smarty version 3.1.38, created on 2021-05-19 15:00:07
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\snippets\filter\genericFilterItem.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a50bd7561f05_42767487',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f64de5819771e47330ad2ac17f68bf8dd621f21' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\snippets\\filter\\genericFilterItem.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:productdetails/rating.tpl' => 1,
  ),
),false)) {
function content_60a50bd7561f05_42767487 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_67109828660a50bd7507389_94941654', 'snippets-filter-genericFilterItem');
?>

<?php }
/* {block 'snippets-filter-genericFilterItem-more-top'} */
class Block_37334755760a50bd75151e6_98903417 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div class="collapse <?php if ($_smarty_tpl->tpl_vars['filter']->value->isActive()) {?> show<?php }?>" id="box-collps-filter<?php echo $_smarty_tpl->tpl_vars['filter']->value->getNiceName();?>
" aria-expanded="false" role="button">
                            <?php $_smarty_tpl->_assignInScope('collapseInit', true);?>
                    <?php
}
}
/* {/block 'snippets-filter-genericFilterItem-more-top'} */
/* {block 'snippets-filter-genericFilterItem-include-rating-nav'} */
class Block_88555423560a50bd7537624_27441543 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <span class="snippets-filter-item-icon-right"><?php $_smarty_tpl->_subTemplateRender('file:productdetails/rating.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stars'=>$_smarty_tpl->tpl_vars['filterOption']->value->getValue()), 0, true);
?></span>
                                <?php
}
}
/* {/block 'snippets-filter-genericFilterItem-include-rating-nav'} */
/* {block 'snippets-filter-genericFilterItem-nav-main'} */
class Block_19060291560a50bd751fab8_32551347 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php ob_start();
if ($_smarty_tpl->tpl_vars['filterIsActive']->value === true) {
echo "active";
}
$_prefixVariable4=ob_get_clean();
ob_start();
if ($_smarty_tpl->tpl_vars['filterOption']->value->isActive()) {
echo (string)$_smarty_tpl->tpl_vars['filter']->value->getUnsetFilterURL($_smarty_tpl->tpl_vars['filterOption']->value->getValue());
} else {
echo (string)$_smarty_tpl->tpl_vars['filterOption']->value->getURL();
}
$_prefixVariable5=ob_get_clean();
$_block_plugin10 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin10, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('class'=>"filter-item ".$_prefixVariable4,'href'=>$_prefixVariable5,'nofollow'=>true));
$_block_repeat=true;
echo $_block_plugin10->render(array('class'=>"filter-item ".$_prefixVariable4,'href'=>$_prefixVariable5,'nofollow'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <div class="box-link-wrapper">
                            <?php if ($_smarty_tpl->tpl_vars['filter']->value->getIcon() !== null) {?>
                                <i class="fa <?php echo $_smarty_tpl->tpl_vars['filter']->value->getIcon();?>
 snippets-filter-item-icon-right"></i>
                            <?php } else { ?>
                                <i class="far fa-<?php if ($_smarty_tpl->tpl_vars['filterIsActive']->value === true) {?>check-<?php }?>square snippets-filter-item-icon-right"></i>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['filter']->value->getNiceName() === 'Rating') {?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_88555423560a50bd7537624_27441543', 'snippets-filter-genericFilterItem-include-rating-nav', $this->tplIndex);
?>

                            <?php }?>
                            <span class="word-break"><?php echo $_smarty_tpl->tpl_vars['filterOption']->value->getName();?>
</span>
                            <?php $_block_plugin11 = isset($_smarty_tpl->smarty->registered_plugins['block']['badge'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['badge'][0][0] : null;
if (!is_callable(array($_block_plugin11, 'render'))) {
throw new SmartyException('block tag \'badge\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('badge', array('variant'=>"outline-secondary"));
$_block_repeat=true;
echo $_block_plugin11->render(array('variant'=>"outline-secondary"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['filterOption']->value->getCount();
$_block_repeat=false;
echo $_block_plugin11->render(array('variant'=>"outline-secondary"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        </div>
                    <?php $_block_repeat=false;
echo $_block_plugin10->render(array('class'=>"filter-item ".$_prefixVariable4,'href'=>$_prefixVariable5,'nofollow'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php
}
}
/* {/block 'snippets-filter-genericFilterItem-nav-main'} */
/* {block 'snippets-filter-genericFilterItem-more-bottom'} */
class Block_209536712060a50bd7555657_12327153 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    </div>
                    <div class="snippets-filter-show-all">
                        <?php $_block_plugin12 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin12, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('variant'=>"link",'role'=>"button",'data'=>array("toggle"=>"collapse","target"=>"#box-collps-filter".((string)$_smarty_tpl->tpl_vars['filter']->value->getNiceName()))));
$_block_repeat=true;
echo $_block_plugin12->render(array('variant'=>"link",'role'=>"button",'data'=>array("toggle"=>"collapse","target"=>"#box-collps-filter".((string)$_smarty_tpl->tpl_vars['filter']->value->getNiceName()))), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'showAll'),$_smarty_tpl ) );?>

                        <?php $_block_repeat=false;
echo $_block_plugin12->render(array('variant'=>"link",'role'=>"button",'data'=>array("toggle"=>"collapse","target"=>"#box-collps-filter".((string)$_smarty_tpl->tpl_vars['filter']->value->getNiceName()))), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    </div>
                <?php
}
}
/* {/block 'snippets-filter-genericFilterItem-more-bottom'} */
/* {block 'snippets-filter-genericFilterItem-nav'} */
class Block_183988515960a50bd7508139_35115252 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_assignInScope('limit', $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['productlist']['filter_max_options']);?>
        <?php $_smarty_tpl->_assignInScope('collapseInit', false);?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filter']->value->getOptions(), 'filterOption');
$_smarty_tpl->tpl_vars['filterOption']->iteration = 0;
$_smarty_tpl->tpl_vars['filterOption']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filterOption']->value) {
$_smarty_tpl->tpl_vars['filterOption']->do_else = false;
$_smarty_tpl->tpl_vars['filterOption']->iteration++;
$__foreach_filterOption_1_saved = $_smarty_tpl->tpl_vars['filterOption'];
?>
                <?php if ($_smarty_tpl->tpl_vars['limit']->value != -1 && $_smarty_tpl->tpl_vars['filterOption']->iteration > $_smarty_tpl->tpl_vars['limit']->value && !$_smarty_tpl->tpl_vars['collapseInit']->value) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_37334755760a50bd75151e6_98903417', 'snippets-filter-genericFilterItem-more-top', $this->tplIndex);
?>

                <?php }?>
                <?php $_smarty_tpl->_assignInScope('filterIsActive', $_smarty_tpl->tpl_vars['filterOption']->value->isActive() || $_smarty_tpl->tpl_vars['NaviFilter']->value->getFilterValue($_smarty_tpl->tpl_vars['filter']->value->getClassName()) === $_smarty_tpl->tpl_vars['filterOption']->value->getValue());?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19060291560a50bd751fab8_32551347', 'snippets-filter-genericFilterItem-nav-main', $this->tplIndex);
?>

            <?php
$_smarty_tpl->tpl_vars['filterOption'] = $__foreach_filterOption_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php if ($_smarty_tpl->tpl_vars['limit']->value != -1 && count($_smarty_tpl->tpl_vars['filter']->value->getOptions()) > $_smarty_tpl->tpl_vars['limit']->value) {?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_209536712060a50bd7555657_12327153', 'snippets-filter-genericFilterItem-more-bottom', $this->tplIndex);
?>

            <?php }?>
    <?php
}
}
/* {/block 'snippets-filter-genericFilterItem-nav'} */
/* {block 'snippets-filter-genericFilterItem'} */
class Block_67109828660a50bd7507389_94941654 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-filter-genericFilterItem' => 
  array (
    0 => 'Block_67109828660a50bd7507389_94941654',
  ),
  'snippets-filter-genericFilterItem-nav' => 
  array (
    0 => 'Block_183988515960a50bd7508139_35115252',
  ),
  'snippets-filter-genericFilterItem-more-top' => 
  array (
    0 => 'Block_37334755760a50bd75151e6_98903417',
  ),
  'snippets-filter-genericFilterItem-nav-main' => 
  array (
    0 => 'Block_19060291560a50bd751fab8_32551347',
  ),
  'snippets-filter-genericFilterItem-include-rating-nav' => 
  array (
    0 => 'Block_88555423560a50bd7537624_27441543',
  ),
  'snippets-filter-genericFilterItem-more-bottom' => 
  array (
    0 => 'Block_209536712060a50bd7555657_12327153',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_183988515960a50bd7508139_35115252', 'snippets-filter-genericFilterItem-nav', $this->tplIndex);
?>

<?php
}
}
/* {/block 'snippets-filter-genericFilterItem'} */
}
