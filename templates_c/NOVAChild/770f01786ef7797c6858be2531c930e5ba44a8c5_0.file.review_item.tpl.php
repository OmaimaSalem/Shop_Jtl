<?php
/* Smarty version 3.1.38, created on 2021-05-20 16:39:34
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\productdetails\review_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a674a6443913_43258080',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '770f01786ef7797c6858be2531c930e5ba44a8c5' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\productdetails\\review_item.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:productdetails/rating.tpl' => 1,
  ),
),false)) {
function content_60a674a6443913_43258080 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_186954894860a674a6149bd7_04583369', 'productdetails-review-item');
?>

<?php }
/* {block 'productdetails-review-itme-helpful'} */
class Block_79499520060a674a62bf605_19218727 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if ($_smarty_tpl->tpl_vars['oBewertung']->value->nHilfreich > 0) {?>
            <?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'class'=>"review-helpful-total"));
$_block_repeat=true;
echo $_block_plugin2->render(array('cols'=>12,'class'=>"review-helpful-total"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <small class="text-muted-util">
                    <?php if ($_smarty_tpl->tpl_vars['oBewertung']->value->nHilfreich > 0) {?>
                        <?php echo $_smarty_tpl->tpl_vars['oBewertung']->value->nHilfreich;?>

                    <?php } else { ?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'nobody','section'=>'product rating'),$_smarty_tpl ) );?>

                    <?php }?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'from','section'=>'product rating'),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['oBewertung']->value->nAnzahlHilfreich;?>

                    <?php if ($_smarty_tpl->tpl_vars['oBewertung']->value->nAnzahlHilfreich > 1) {?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'ratingHelpfulCount','section'=>'product rating'),$_smarty_tpl ) );?>

                    <?php } else { ?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'ratingHelpfulCountExt','section'=>'product rating'),$_smarty_tpl ) );?>

                    <?php }?>
                </small>
            <?php $_block_repeat=false;
echo $_block_plugin2->render(array('cols'=>12,'class'=>"review-helpful-total"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php }?>
        <?php
}
}
/* {/block 'productdetails-review-itme-helpful'} */
/* {block 'productdetails-review-item-title'} */
class Block_6866637160a674a62eb885_56452309 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <span itemprop="name" class="d-none"><?php echo $_smarty_tpl->tpl_vars['oBewertung']->value->cTitel;?>
</span>
                    <?php
}
}
/* {/block 'productdetails-review-item-title'} */
/* {block 'productdetails-review-item-include-rating'} */
class Block_47671767960a674a62f14d5_96834636 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_smarty_tpl->_subTemplateRender('file:productdetails/rating.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stars'=>$_smarty_tpl->tpl_vars['oBewertung']->value->nSterne), 0, false);
?>
                                <?php
}
}
/* {/block 'productdetails-review-item-include-rating'} */
/* {block 'productdetails-review-item-rating'} */
class Block_80502598860a674a62f0a37_32073863 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_47671767960a674a62f14d5_96834636', 'productdetails-review-item-include-rating', $this->tplIndex);
?>

                                <small class="d-none">
                                    <span itemprop="ratingValue"><?php echo $_smarty_tpl->tpl_vars['oBewertung']->value->nSterne;?>
</span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'from'),$_smarty_tpl ) );?>

                                    <span itemprop="bestRating">5</span>
                                    <meta itemprop="worstRating" content="1">
                                </small>
                            <?php
}
}
/* {/block 'productdetails-review-item-rating'} */
/* {block 'productdetails-review-item-buttons'} */
class Block_174661624560a674a630b421_70232763 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <?php $_block_plugin6 = isset($_smarty_tpl->smarty->registered_plugins['block']['formrow'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['formrow'][0][0] : null;
if (!is_callable(array($_block_plugin6, 'render'))) {
throw new SmartyException('block tag \'formrow\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('formrow', array('class'=>"review-helpful",'id'=>"help".((string)$_smarty_tpl->tpl_vars['oBewertung']->value->kBewertung)));
$_block_repeat=true;
echo $_block_plugin6->render(array('class'=>"review-helpful",'id'=>"help".((string)$_smarty_tpl->tpl_vars['oBewertung']->value->kBewertung)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php $_block_plugin7 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin7, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array());
$_block_repeat=true;
echo $_block_plugin7->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                <?php ob_start();
if ((int)$_smarty_tpl->tpl_vars['oBewertung']->value->rated === 1) {
echo "on-list";
}
$_prefixVariable3=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'yes'),$_smarty_tpl ) );
$_prefixVariable4=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['oBewertung']->value->kBewertung;
$_prefixVariable5 = ob_get_clean();
$_block_plugin8 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin8, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('size'=>"sm",'class'=>"btn-icon btn-icon-primary js-helpful badge-circle-1 badge-circle-no-sizes ".$_prefixVariable3,'title'=>$_prefixVariable4,'name'=>"hilfreich_".((string)$_smarty_tpl->tpl_vars['oBewertung']->value->kBewertung),'type'=>"submit",'variant'=>"icon-primary",'data'=>array("review-id"=>$_prefixVariable5)));
$_block_repeat=true;
echo $_block_plugin8->render(array('size'=>"sm",'class'=>"btn-icon btn-icon-primary js-helpful badge-circle-1 badge-circle-no-sizes ".$_prefixVariable3,'title'=>$_prefixVariable4,'name'=>"hilfreich_".((string)$_smarty_tpl->tpl_vars['oBewertung']->value->kBewertung),'type'=>"submit",'variant'=>"icon-primary",'data'=>array("review-id"=>$_prefixVariable5)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <i class="far fa-thumbs-up"></i>
                                                <?php $_block_repeat=false;
echo $_block_plugin8->render(array('size'=>"sm",'class'=>"btn-icon btn-icon-primary js-helpful badge-circle-1 badge-circle-no-sizes ".$_prefixVariable3,'title'=>$_prefixVariable4,'name'=>"hilfreich_".((string)$_smarty_tpl->tpl_vars['oBewertung']->value->kBewertung),'type'=>"submit",'variant'=>"icon-primary",'data'=>array("review-id"=>$_prefixVariable5)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                <b><span class="d-block" data-review-count-id="hilfreich_<?php echo $_smarty_tpl->tpl_vars['oBewertung']->value->kBewertung;?>
"><?php echo $_smarty_tpl->tpl_vars['oBewertung']->value->nHilfreich;?>
</span></b>
                                            <?php $_block_repeat=false;
echo $_block_plugin7->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            <?php $_block_plugin9 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin9, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array());
$_block_repeat=true;
echo $_block_plugin9->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                <?php ob_start();
if ($_smarty_tpl->tpl_vars['oBewertung']->value->rated !== null && (int)$_smarty_tpl->tpl_vars['oBewertung']->value->rated === 0) {
echo "on-list";
}
$_prefixVariable6=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'no'),$_smarty_tpl ) );
$_prefixVariable7=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['oBewertung']->value->kBewertung;
$_prefixVariable8 = ob_get_clean();
$_block_plugin10 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin10, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('size'=>"sm",'class'=>"btn-icon js-helpful badge-circle-1 badge-circle-no-sizes ".$_prefixVariable6,'title'=>$_prefixVariable7,'name'=>"nichthilfreich_".((string)$_smarty_tpl->tpl_vars['oBewertung']->value->kBewertung),'type'=>"submit",'variant'=>"icon-primary",'data'=>array("review-id"=>$_prefixVariable8)));
$_block_repeat=true;
echo $_block_plugin10->render(array('size'=>"sm",'class'=>"btn-icon js-helpful badge-circle-1 badge-circle-no-sizes ".$_prefixVariable6,'title'=>$_prefixVariable7,'name'=>"nichthilfreich_".((string)$_smarty_tpl->tpl_vars['oBewertung']->value->kBewertung),'type'=>"submit",'variant'=>"icon-primary",'data'=>array("review-id"=>$_prefixVariable8)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <i class="far fa-thumbs-down"></i>
                                                <?php $_block_repeat=false;
echo $_block_plugin10->render(array('size'=>"sm",'class'=>"btn-icon js-helpful badge-circle-1 badge-circle-no-sizes ".$_prefixVariable6,'title'=>$_prefixVariable7,'name'=>"nichthilfreich_".((string)$_smarty_tpl->tpl_vars['oBewertung']->value->kBewertung),'type'=>"submit",'variant'=>"icon-primary",'data'=>array("review-id"=>$_prefixVariable8)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                <b><span class="d-block" data-review-count-id="nichthilfreich_<?php echo $_smarty_tpl->tpl_vars['oBewertung']->value->kBewertung;?>
"><?php echo $_smarty_tpl->tpl_vars['oBewertung']->value->nNichtHilfreich;?>
</span></b>
                                            <?php $_block_repeat=false;
echo $_block_plugin9->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        <?php $_block_repeat=false;
echo $_block_plugin6->render(array('class'=>"review-helpful",'id'=>"help".((string)$_smarty_tpl->tpl_vars['oBewertung']->value->kBewertung)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    <?php
}
}
/* {/block 'productdetails-review-item-buttons'} */
/* {block 'productdetails-review-item-review'} */
class Block_142300928560a674a62ee065_56848102 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_block_plugin5 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin5, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('class'=>"col-auto text-center-util",'itemprop'=>"reviewRating",'itemscope'=>true,'itemtype'=>"http://schema.org/Rating"));
$_block_repeat=true;
echo $_block_plugin5->render(array('class'=>"col-auto text-center-util",'itemprop'=>"reviewRating",'itemscope'=>true,'itemtype'=>"http://schema.org/Rating"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_80502598860a674a62f0a37_32073863', 'productdetails-review-item-rating', $this->tplIndex);
?>

                            <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['bewertung']['bewertung_hilfreich_anzeigen'] === 'Y') {?>
                                <?php if ((isset($_SESSION['Kunde'])) && $_SESSION['Kunde']->kKunde > 0 && $_SESSION['Kunde']->kKunde != $_smarty_tpl->tpl_vars['oBewertung']->value->kKunde) {?>
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_174661624560a674a630b421_70232763', 'productdetails-review-item-buttons', $this->tplIndex);
?>

                                <?php }?>
                            <?php }?>
                        <?php $_block_repeat=false;
echo $_block_plugin5->render(array('class'=>"col-auto text-center-util",'itemprop'=>"reviewRating",'itemscope'=>true,'itemtype'=>"http://schema.org/Rating"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php
}
}
/* {/block 'productdetails-review-item-review'} */
/* {block 'productdetails-review-item-details'} */
class Block_116494824760a674a63d7596_85435665 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_block_plugin11 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin11, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array());
$_block_repeat=true;
echo $_block_plugin11->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <blockquote>
                                <span class="subheadline"><?php echo $_smarty_tpl->tpl_vars['oBewertung']->value->cTitel;?>
</span>
                                <p itemprop="reviewBody"><?php echo nl2br($_smarty_tpl->tpl_vars['oBewertung']->value->cText);?>
</p>
                                <div class="blockquote-footer">
                                    <span itemprop="author" itemscope=true itemtype="http://schema.org/Person">
                                        <span itemprop="name"><?php echo $_smarty_tpl->tpl_vars['oBewertung']->value->cName;?>
</span>
                                    </span>,
                                    <meta itemprop="datePublished" content="<?php echo $_smarty_tpl->tpl_vars['oBewertung']->value->dDatum;?>
" /><?php echo $_smarty_tpl->tpl_vars['oBewertung']->value->Datum;?>

                                </div>
                            </blockquote>
                            <meta itemprop="thumbnailURL" content="<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->cVorschaubildURL;?>
">
                            <?php if (!empty($_smarty_tpl->tpl_vars['oBewertung']->value->cAntwort)) {?>
                                <div class="review-reply">
                                    <span class="subheadline"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'reply','section'=>'product rating'),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['cShopName']->value;?>
:</span>
                                    <blockquote>
                                        <p><?php echo $_smarty_tpl->tpl_vars['oBewertung']->value->cAntwort;?>
</p>
                                        <div class="blockquote-footer"><?php echo $_smarty_tpl->tpl_vars['oBewertung']->value->AntwortDatum;?>
</div>
                                    </blockquote>
                                </div>
                            <?php }?>
                        <?php $_block_repeat=false;
echo $_block_plugin11->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php
}
}
/* {/block 'productdetails-review-item-details'} */
/* {block 'productdetails-review-item-content'} */
class Block_178402742160a674a62e86b4_21102839 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12));
$_block_repeat=true;
echo $_block_plugin3->render(array('cols'=>12), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('itemprop'=>"review",'itemscope'=>true,'itemtype'=>"http://schema.org/Review"));
$_block_repeat=true;
echo $_block_plugin4->render(array('itemprop'=>"review",'itemscope'=>true,'itemtype'=>"http://schema.org/Review"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6866637160a674a62eb885_56452309', 'productdetails-review-item-title', $this->tplIndex);
?>

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_142300928560a674a62ee065_56848102', 'productdetails-review-item-review', $this->tplIndex);
?>

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_116494824760a674a63d7596_85435665', 'productdetails-review-item-details', $this->tplIndex);
?>

                <?php $_block_repeat=false;
echo $_block_plugin4->render(array('itemprop'=>"review",'itemscope'=>true,'itemtype'=>"http://schema.org/Review"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php $_block_repeat=false;
echo $_block_plugin3->render(array('cols'=>12), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php
}
}
/* {/block 'productdetails-review-item-content'} */
/* {block 'productdetails-review-item'} */
class Block_186954894860a674a6149bd7_04583369 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'productdetails-review-item' => 
  array (
    0 => 'Block_186954894860a674a6149bd7_04583369',
  ),
  'productdetails-review-itme-helpful' => 
  array (
    0 => 'Block_79499520060a674a62bf605_19218727',
  ),
  'productdetails-review-item-content' => 
  array (
    0 => 'Block_178402742160a674a62e86b4_21102839',
  ),
  'productdetails-review-item-title' => 
  array (
    0 => 'Block_6866637160a674a62eb885_56452309',
  ),
  'productdetails-review-item-review' => 
  array (
    0 => 'Block_142300928560a674a62ee065_56848102',
  ),
  'productdetails-review-item-rating' => 
  array (
    0 => 'Block_80502598860a674a62f0a37_32073863',
  ),
  'productdetails-review-item-include-rating' => 
  array (
    0 => 'Block_47671767960a674a62f14d5_96834636',
  ),
  'productdetails-review-item-buttons' => 
  array (
    0 => 'Block_174661624560a674a630b421_70232763',
  ),
  'productdetails-review-item-details' => 
  array (
    0 => 'Block_116494824760a674a63d7596_85435665',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php ob_start();
if ($_smarty_tpl->tpl_vars['Einstellungen']->value['bewertung']['bewertung_hilfreich_anzeigen'] === 'Y' && (isset($_SESSION['Kunde']->kKunde)) && $_SESSION['Kunde']->kKunde > 0 && $_SESSION['Kunde']->kKunde != $_smarty_tpl->tpl_vars['oBewertung']->value->kKunde) {
echo "use_helpful";
}
$_prefixVariable1=ob_get_clean();
ob_start();
if ((isset($_smarty_tpl->tpl_vars['bMostUseful']->value)) && $_smarty_tpl->tpl_vars['bMostUseful']->value) {
echo "most_useful";
}
$_prefixVariable2=ob_get_clean();
$_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('id'=>"comment".((string)$_smarty_tpl->tpl_vars['oBewertung']->value->kBewertung),'class'=>"review-comment ".$_prefixVariable1." ".$_prefixVariable2));
$_block_repeat=true;
echo $_block_plugin1->render(array('id'=>"comment".((string)$_smarty_tpl->tpl_vars['oBewertung']->value->kBewertung),'class'=>"review-comment ".$_prefixVariable1." ".$_prefixVariable2), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_79499520060a674a62bf605_19218727', 'productdetails-review-itme-helpful', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_178402742160a674a62e86b4_21102839', 'productdetails-review-item-content', $this->tplIndex);
?>

    <?php $_block_repeat=false;
echo $_block_plugin1->render(array('id'=>"comment".((string)$_smarty_tpl->tpl_vars['oBewertung']->value->kBewertung),'class'=>"review-comment ".$_prefixVariable1." ".$_prefixVariable2), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'productdetails-review-item'} */
}
