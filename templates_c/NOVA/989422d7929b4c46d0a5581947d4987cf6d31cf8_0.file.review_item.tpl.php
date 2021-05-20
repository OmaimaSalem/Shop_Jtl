<?php
/* Smarty version 3.1.38, created on 2021-05-19 15:11:17
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\productdetails\review_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a50e759a0646_43717092',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '989422d7929b4c46d0a5581947d4987cf6d31cf8' => 
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
function content_60a50e759a0646_43717092 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_62622249960a50e7591a2b2_42327608', 'productdetails-review-item');
?>

<?php }
/* {block 'productdetails-review-itme-helpful'} */
class Block_36431128260a50e75927672_70420558 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if ($_smarty_tpl->tpl_vars['oBewertung']->value->nHilfreich > 0) {?>
            <?php $_block_plugin136 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin136, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'class'=>"review-helpful-total"));
$_block_repeat=true;
echo $_block_plugin136->render(array('cols'=>12,'class'=>"review-helpful-total"), null, $_smarty_tpl, $_block_repeat);
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
echo $_block_plugin136->render(array('cols'=>12,'class'=>"review-helpful-total"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php }?>
        <?php
}
}
/* {/block 'productdetails-review-itme-helpful'} */
/* {block 'productdetails-review-item-title'} */
class Block_207302491660a50e75939e76_72179967 extends Smarty_Internal_Block
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
class Block_31118030260a50e75942a65_24065321 extends Smarty_Internal_Block
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
class Block_120887943360a50e75941f36_16559277 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_31118030260a50e75942a65_24065321', 'productdetails-review-item-include-rating', $this->tplIndex);
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
class Block_52454596660a50e7594faa2_12685102 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <?php $_block_plugin140 = isset($_smarty_tpl->smarty->registered_plugins['block']['formrow'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['formrow'][0][0] : null;
if (!is_callable(array($_block_plugin140, 'render'))) {
throw new SmartyException('block tag \'formrow\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('formrow', array('class'=>"review-helpful",'id'=>"help".((string)$_smarty_tpl->tpl_vars['oBewertung']->value->kBewertung)));
$_block_repeat=true;
echo $_block_plugin140->render(array('class'=>"review-helpful",'id'=>"help".((string)$_smarty_tpl->tpl_vars['oBewertung']->value->kBewertung)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php $_block_plugin141 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin141, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array());
$_block_repeat=true;
echo $_block_plugin141->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                <?php ob_start();
if ((int)$_smarty_tpl->tpl_vars['oBewertung']->value->rated === 1) {
echo "on-list";
}
$_prefixVariable52=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'yes'),$_smarty_tpl ) );
$_prefixVariable53=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['oBewertung']->value->kBewertung;
$_prefixVariable54 = ob_get_clean();
$_block_plugin142 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin142, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('size'=>"sm",'class'=>"btn-icon btn-icon-primary js-helpful badge-circle-1 badge-circle-no-sizes ".$_prefixVariable52,'title'=>$_prefixVariable53,'name'=>"hilfreich_".((string)$_smarty_tpl->tpl_vars['oBewertung']->value->kBewertung),'type'=>"submit",'variant'=>"icon-primary",'data'=>array("review-id"=>$_prefixVariable54)));
$_block_repeat=true;
echo $_block_plugin142->render(array('size'=>"sm",'class'=>"btn-icon btn-icon-primary js-helpful badge-circle-1 badge-circle-no-sizes ".$_prefixVariable52,'title'=>$_prefixVariable53,'name'=>"hilfreich_".((string)$_smarty_tpl->tpl_vars['oBewertung']->value->kBewertung),'type'=>"submit",'variant'=>"icon-primary",'data'=>array("review-id"=>$_prefixVariable54)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <i class="far fa-thumbs-up"></i>
                                                <?php $_block_repeat=false;
echo $_block_plugin142->render(array('size'=>"sm",'class'=>"btn-icon btn-icon-primary js-helpful badge-circle-1 badge-circle-no-sizes ".$_prefixVariable52,'title'=>$_prefixVariable53,'name'=>"hilfreich_".((string)$_smarty_tpl->tpl_vars['oBewertung']->value->kBewertung),'type'=>"submit",'variant'=>"icon-primary",'data'=>array("review-id"=>$_prefixVariable54)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                <b><span class="d-block" data-review-count-id="hilfreich_<?php echo $_smarty_tpl->tpl_vars['oBewertung']->value->kBewertung;?>
"><?php echo $_smarty_tpl->tpl_vars['oBewertung']->value->nHilfreich;?>
</span></b>
                                            <?php $_block_repeat=false;
echo $_block_plugin141->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            <?php $_block_plugin143 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin143, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array());
$_block_repeat=true;
echo $_block_plugin143->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                <?php ob_start();
if ($_smarty_tpl->tpl_vars['oBewertung']->value->rated !== null && (int)$_smarty_tpl->tpl_vars['oBewertung']->value->rated === 0) {
echo "on-list";
}
$_prefixVariable55=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'no'),$_smarty_tpl ) );
$_prefixVariable56=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['oBewertung']->value->kBewertung;
$_prefixVariable57 = ob_get_clean();
$_block_plugin144 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin144, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('size'=>"sm",'class'=>"btn-icon js-helpful badge-circle-1 badge-circle-no-sizes ".$_prefixVariable55,'title'=>$_prefixVariable56,'name'=>"nichthilfreich_".((string)$_smarty_tpl->tpl_vars['oBewertung']->value->kBewertung),'type'=>"submit",'variant'=>"icon-primary",'data'=>array("review-id"=>$_prefixVariable57)));
$_block_repeat=true;
echo $_block_plugin144->render(array('size'=>"sm",'class'=>"btn-icon js-helpful badge-circle-1 badge-circle-no-sizes ".$_prefixVariable55,'title'=>$_prefixVariable56,'name'=>"nichthilfreich_".((string)$_smarty_tpl->tpl_vars['oBewertung']->value->kBewertung),'type'=>"submit",'variant'=>"icon-primary",'data'=>array("review-id"=>$_prefixVariable57)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <i class="far fa-thumbs-down"></i>
                                                <?php $_block_repeat=false;
echo $_block_plugin144->render(array('size'=>"sm",'class'=>"btn-icon js-helpful badge-circle-1 badge-circle-no-sizes ".$_prefixVariable55,'title'=>$_prefixVariable56,'name'=>"nichthilfreich_".((string)$_smarty_tpl->tpl_vars['oBewertung']->value->kBewertung),'type'=>"submit",'variant'=>"icon-primary",'data'=>array("review-id"=>$_prefixVariable57)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                <b><span class="d-block" data-review-count-id="nichthilfreich_<?php echo $_smarty_tpl->tpl_vars['oBewertung']->value->kBewertung;?>
"><?php echo $_smarty_tpl->tpl_vars['oBewertung']->value->nNichtHilfreich;?>
</span></b>
                                            <?php $_block_repeat=false;
echo $_block_plugin143->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        <?php $_block_repeat=false;
echo $_block_plugin140->render(array('class'=>"review-helpful",'id'=>"help".((string)$_smarty_tpl->tpl_vars['oBewertung']->value->kBewertung)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    <?php
}
}
/* {/block 'productdetails-review-item-buttons'} */
/* {block 'productdetails-review-item-review'} */
class Block_168853580360a50e7593efc1_49217889 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_block_plugin139 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin139, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('class'=>"col-auto text-center-util",'itemprop'=>"reviewRating",'itemscope'=>true,'itemtype'=>"http://schema.org/Rating"));
$_block_repeat=true;
echo $_block_plugin139->render(array('class'=>"col-auto text-center-util",'itemprop'=>"reviewRating",'itemscope'=>true,'itemtype'=>"http://schema.org/Rating"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_120887943360a50e75941f36_16559277', 'productdetails-review-item-rating', $this->tplIndex);
?>

                            <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['bewertung']['bewertung_hilfreich_anzeigen'] === 'Y') {?>
                                <?php if ((isset($_SESSION['Kunde'])) && $_SESSION['Kunde']->kKunde > 0 && $_SESSION['Kunde']->kKunde != $_smarty_tpl->tpl_vars['oBewertung']->value->kKunde) {?>
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_52454596660a50e7594faa2_12685102', 'productdetails-review-item-buttons', $this->tplIndex);
?>

                                <?php }?>
                            <?php }?>
                        <?php $_block_repeat=false;
echo $_block_plugin139->render(array('class'=>"col-auto text-center-util",'itemprop'=>"reviewRating",'itemscope'=>true,'itemtype'=>"http://schema.org/Rating"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php
}
}
/* {/block 'productdetails-review-item-review'} */
/* {block 'productdetails-review-item-details'} */
class Block_41097153960a50e759769f8_43996397 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_block_plugin145 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin145, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array());
$_block_repeat=true;
echo $_block_plugin145->render(array(), null, $_smarty_tpl, $_block_repeat);
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
echo $_block_plugin145->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php
}
}
/* {/block 'productdetails-review-item-details'} */
/* {block 'productdetails-review-item-content'} */
class Block_154472670160a50e75935db9_06161598 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_block_plugin137 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin137, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12));
$_block_repeat=true;
echo $_block_plugin137->render(array('cols'=>12), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_block_plugin138 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin138, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('itemprop'=>"review",'itemscope'=>true,'itemtype'=>"http://schema.org/Review"));
$_block_repeat=true;
echo $_block_plugin138->render(array('itemprop'=>"review",'itemscope'=>true,'itemtype'=>"http://schema.org/Review"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_207302491660a50e75939e76_72179967', 'productdetails-review-item-title', $this->tplIndex);
?>

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_168853580360a50e7593efc1_49217889', 'productdetails-review-item-review', $this->tplIndex);
?>

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_41097153960a50e759769f8_43996397', 'productdetails-review-item-details', $this->tplIndex);
?>

                <?php $_block_repeat=false;
echo $_block_plugin138->render(array('itemprop'=>"review",'itemscope'=>true,'itemtype'=>"http://schema.org/Review"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php $_block_repeat=false;
echo $_block_plugin137->render(array('cols'=>12), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php
}
}
/* {/block 'productdetails-review-item-content'} */
/* {block 'productdetails-review-item'} */
class Block_62622249960a50e7591a2b2_42327608 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'productdetails-review-item' => 
  array (
    0 => 'Block_62622249960a50e7591a2b2_42327608',
  ),
  'productdetails-review-itme-helpful' => 
  array (
    0 => 'Block_36431128260a50e75927672_70420558',
  ),
  'productdetails-review-item-content' => 
  array (
    0 => 'Block_154472670160a50e75935db9_06161598',
  ),
  'productdetails-review-item-title' => 
  array (
    0 => 'Block_207302491660a50e75939e76_72179967',
  ),
  'productdetails-review-item-review' => 
  array (
    0 => 'Block_168853580360a50e7593efc1_49217889',
  ),
  'productdetails-review-item-rating' => 
  array (
    0 => 'Block_120887943360a50e75941f36_16559277',
  ),
  'productdetails-review-item-include-rating' => 
  array (
    0 => 'Block_31118030260a50e75942a65_24065321',
  ),
  'productdetails-review-item-buttons' => 
  array (
    0 => 'Block_52454596660a50e7594faa2_12685102',
  ),
  'productdetails-review-item-details' => 
  array (
    0 => 'Block_41097153960a50e759769f8_43996397',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php ob_start();
if ($_smarty_tpl->tpl_vars['Einstellungen']->value['bewertung']['bewertung_hilfreich_anzeigen'] === 'Y' && (isset($_SESSION['Kunde']->kKunde)) && $_SESSION['Kunde']->kKunde > 0 && $_SESSION['Kunde']->kKunde != $_smarty_tpl->tpl_vars['oBewertung']->value->kKunde) {
echo "use_helpful";
}
$_prefixVariable50=ob_get_clean();
ob_start();
if ((isset($_smarty_tpl->tpl_vars['bMostUseful']->value)) && $_smarty_tpl->tpl_vars['bMostUseful']->value) {
echo "most_useful";
}
$_prefixVariable51=ob_get_clean();
$_block_plugin135 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin135, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('id'=>"comment".((string)$_smarty_tpl->tpl_vars['oBewertung']->value->kBewertung),'class'=>"review-comment ".$_prefixVariable50." ".$_prefixVariable51));
$_block_repeat=true;
echo $_block_plugin135->render(array('id'=>"comment".((string)$_smarty_tpl->tpl_vars['oBewertung']->value->kBewertung),'class'=>"review-comment ".$_prefixVariable50." ".$_prefixVariable51), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36431128260a50e75927672_70420558', 'productdetails-review-itme-helpful', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_154472670160a50e75935db9_06161598', 'productdetails-review-item-content', $this->tplIndex);
?>

    <?php $_block_repeat=false;
echo $_block_plugin135->render(array('id'=>"comment".((string)$_smarty_tpl->tpl_vars['oBewertung']->value->kBewertung),'class'=>"review-comment ".$_prefixVariable50." ".$_prefixVariable51), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'productdetails-review-item'} */
}
