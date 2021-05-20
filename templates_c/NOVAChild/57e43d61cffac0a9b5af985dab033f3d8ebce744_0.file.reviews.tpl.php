<?php
/* Smarty version 3.1.38, created on 2021-05-18 11:41:25
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\productdetails\reviews.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a38bc5441992_97224738',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57e43d61cffac0a9b5af985dab033f3d8ebce744' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\productdetails\\reviews.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:productdetails/rating.tpl' => 1,
    'file:productdetails/review_item.tpl' => 2,
    'file:snippets/pagination.tpl' => 2,
  ),
),false)) {
function content_60a38bc5441992_97224738 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_91901637160a38bc539c375_68107656', 'productdetails-reviews');
?>

<?php }
/* {block 'productdetails-reviews-heading'} */
class Block_104754374260a38bc53a3173_99282849 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <div class="card-title">
                                    <div class="subheadline">
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'averageProductRating','section'=>'product rating'),$_smarty_tpl ) );?>

                                    </div>
                                </div>
                            <?php
}
}
/* {/block 'productdetails-reviews-heading'} */
/* {block 'productdetails-reviews-include-rating'} */
class Block_59582236960a38bc53a5da5_00398502 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <?php $_smarty_tpl->_subTemplateRender('file:productdetails/rating.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('total'=>$_smarty_tpl->tpl_vars['Artikel']->value->Bewertungen->oBewertungGesamt->nAnzahl), 0, false);
?>
                                        <span>(<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->Bewertungen->oBewertungGesamt->nAnzahl;?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'Votes'),$_smarty_tpl ) );?>
)</span>
                                    <?php
}
}
/* {/block 'productdetails-reviews-include-rating'} */
/* {block 'productdetails-reviews-note-all-ratings'} */
class Block_3496880560a38bc53dc130_56880667 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                    <p>
                                                        <?php $_block_plugin133 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin133, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>((string)$_smarty_tpl->tpl_vars['Artikel']->value->cURLFull)."#tab-votes",'class'=>"btn btn-outline-primary "));
$_block_repeat=true;
echo $_block_plugin133->render(array('href'=>((string)$_smarty_tpl->tpl_vars['Artikel']->value->cURLFull)."#tab-votes",'class'=>"btn btn-outline-primary "), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'allRatings'),$_smarty_tpl ) );?>

                                                        <?php $_block_repeat=false;
echo $_block_plugin133->render(array('href'=>((string)$_smarty_tpl->tpl_vars['Artikel']->value->cURLFull)."#tab-votes",'class'=>"btn btn-outline-primary "), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                    </p>
                                                <?php
}
}
/* {/block 'productdetails-reviews-note-all-ratings'} */
/* {block 'productdetails-reviews-votes'} */
class Block_104540516060a38bc53ab191_02324231 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\includes\\vendor\\smarty\\smarty\\libs\\plugins\\function.math.php','function'=>'smarty_function_math',),));
?>

                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Artikel']->value->Bewertungen->nSterne_arr, 'nSterne', false, 'i', 'sterne', array (
));
$_smarty_tpl->tpl_vars['nSterne']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['nSterne']->value) {
$_smarty_tpl->tpl_vars['nSterne']->do_else = false;
?>
                                                <?php $_smarty_tpl->_assignInScope('int1', 5);?>
                                                <?php echo smarty_function_math(array('equation'=>'x - y','x'=>$_smarty_tpl->tpl_vars['int1']->value,'y'=>$_smarty_tpl->tpl_vars['i']->value,'assign'=>'schluessel'),$_smarty_tpl);?>

                                                <?php $_smarty_tpl->_assignInScope('int2', 100);?>
                                                <?php echo smarty_function_math(array('equation'=>'a/b*c','a'=>$_smarty_tpl->tpl_vars['nSterne']->value,'b'=>$_smarty_tpl->tpl_vars['Artikel']->value->Bewertungen->oBewertungGesamt->nAnzahl,'c'=>$_smarty_tpl->tpl_vars['int2']->value,'assign'=>'percent'),$_smarty_tpl);?>

                                                <?php $_block_plugin128 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin128, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array());
$_block_repeat=true;
echo $_block_plugin128->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <?php $_block_plugin129 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin129, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>4));
$_block_repeat=true;
echo $_block_plugin129->render(array('cols'=>4), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <?php if ((isset($_smarty_tpl->tpl_vars['bewertungSterneSelected']->value)) && $_smarty_tpl->tpl_vars['bewertungSterneSelected']->value === $_smarty_tpl->tpl_vars['schluessel']->value) {?>
                                                        <strong>
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['nSterne']->value > 0 && (!(isset($_smarty_tpl->tpl_vars['bewertungSterneSelected']->value)) || $_smarty_tpl->tpl_vars['bewertungSterneSelected']->value !== $_smarty_tpl->tpl_vars['schluessel']->value)) {?>
                                                        <?php $_block_plugin130 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin130, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>((string)$_smarty_tpl->tpl_vars['Artikel']->value->cURLFull)."?btgsterne=".((string)$_smarty_tpl->tpl_vars['schluessel']->value)."#tab-votes"));
$_block_repeat=true;
echo $_block_plugin130->render(array('href'=>((string)$_smarty_tpl->tpl_vars['Artikel']->value->cURLFull)."?btgsterne=".((string)$_smarty_tpl->tpl_vars['schluessel']->value)."#tab-votes"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['schluessel']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['i']->value == 4) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'starSingular','section'=>'product rating'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'starPlural','section'=>'product rating'),$_smarty_tpl ) );
}
$_block_repeat=false;
echo $_block_plugin130->render(array('href'=>((string)$_smarty_tpl->tpl_vars['Artikel']->value->cURLFull)."?btgsterne=".((string)$_smarty_tpl->tpl_vars['schluessel']->value)."#tab-votes"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                    <?php } else { ?>
                                                        <?php echo $_smarty_tpl->tpl_vars['schluessel']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['i']->value == 4) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'starSingular','section'=>'product rating'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'starPlural','section'=>'product rating'),$_smarty_tpl ) );
}?>
                                                    <?php }?>
                                                    <?php if ((isset($_smarty_tpl->tpl_vars['bewertungSterneSelected']->value)) && $_smarty_tpl->tpl_vars['bewertungSterneSelected']->value === $_smarty_tpl->tpl_vars['schluessel']->value) {?>
                                                        </strong>
                                                    <?php }?>
                                                    <?php $_block_repeat=false;
echo $_block_plugin129->render(array('cols'=>4), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                    <?php $_block_plugin131 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin131, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>6));
$_block_repeat=true;
echo $_block_plugin131->render(array('cols'=>6), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['progress'][0], array( array('now'=>round($_smarty_tpl->tpl_vars['percent']->value),'min'=>0,'max'=>100),$_smarty_tpl ) );?>

                                                    <?php $_block_repeat=false;
echo $_block_plugin131->render(array('cols'=>6), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                    <?php $_block_plugin132 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin132, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>2));
$_block_repeat=true;
echo $_block_plugin132->render(array('cols'=>2), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                        <?php if (!empty($_smarty_tpl->tpl_vars['nSterne']->value)) {
echo $_smarty_tpl->tpl_vars['nSterne']->value;
} else { ?>0<?php }?>
                                                    <?php $_block_repeat=false;
echo $_block_plugin132->render(array('cols'=>2), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                <?php $_block_repeat=false;
echo $_block_plugin128->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['bewertungSterneSelected']->value)) && $_smarty_tpl->tpl_vars['bewertungSterneSelected']->value > 0) {?>
                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3496880560a38bc53dc130_56880667', 'productdetails-reviews-note-all-ratings', $this->tplIndex);
?>

                                            <?php }?>
                                        <?php
}
}
/* {/block 'productdetails-reviews-votes'} */
/* {block 'productdetails-reviews-rating-dropdown'} */
class Block_104206510960a38bc53a52c9_32807016 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <div class="dropdown">
                                <button class="btn btn-link dropdown-toggle" type="button" id="ratingDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59582236960a38bc53a5da5_00398502', 'productdetails-reviews-include-rating', $this->tplIndex);
?>

                                </button>
                                <div class="dropdown-menu min-w-lg" aria-labelledby="ratingDropdown" data-dropdown-stay>
                                    <div class="dropdown-body">
                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_104540516060a38bc53ab191_02324231', 'productdetails-reviews-votes', $this->tplIndex);
?>

                                    </div>
                                </div>
                            </div>
                            <?php
}
}
/* {/block 'productdetails-reviews-rating-dropdown'} */
/* {block 'productdetails-reviews-overview'} */
class Block_34174567360a38bc539e828_42149160 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if ($_smarty_tpl->tpl_vars['Artikel']->value->Bewertungen->oBewertungGesamt->nAnzahl > 0) {?>
                    <?php $_block_plugin126 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin126, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'md'=>6,'lg'=>4,'order'=>1,'order-md'=>0));
$_block_repeat=true;
echo $_block_plugin126->render(array('cols'=>12,'md'=>6,'lg'=>4,'order'=>1,'order-md'=>0), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php $_block_plugin127 = isset($_smarty_tpl->smarty->registered_plugins['block']['card'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['card'][0][0] : null;
if (!is_callable(array($_block_plugin127, 'render'))) {
throw new SmartyException('block tag \'card\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('card', array());
$_block_repeat=true;
echo $_block_plugin127->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_104754374260a38bc53a3173_99282849', 'productdetails-reviews-heading', $this->tplIndex);
?>

                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_104206510960a38bc53a52c9_32807016', 'productdetails-reviews-rating-dropdown', $this->tplIndex);
?>

                        <?php $_block_repeat=false;
echo $_block_plugin127->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php $_block_repeat=false;
echo $_block_plugin126->render(array('cols'=>12,'md'=>6,'lg'=>4,'order'=>1,'order-md'=>0), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php }?>
            <?php
}
}
/* {/block 'productdetails-reviews-overview'} */
/* {block 'productdetails-reviews-votes'} */
class Block_112215216960a38bc53e4262_41475846 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_block_plugin134 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin134, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'md'=>6,'lg'=>8,'order'=>0,'order-md'=>1));
$_block_repeat=true;
echo $_block_plugin134->render(array('cols'=>12,'md'=>6,'lg'=>8,'order'=>0,'order-md'=>1), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'bewertung.php'),$_smarty_tpl ) );
$_prefixVariable59=ob_get_clean();
$_block_plugin135 = isset($_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0] : null;
if (!is_callable(array($_block_plugin135, 'render'))) {
throw new SmartyException('block tag \'form\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('method'=>"post",'action'=>$_prefixVariable59."#tab-votes",'id'=>"article_rating",'slide'=>true));
$_block_repeat=true;
echo $_block_plugin135->render(array('method'=>"post",'action'=>$_prefixVariable59."#tab-votes",'id'=>"article_rating",'slide'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <div class="subheadline">
                            <?php if ($_smarty_tpl->tpl_vars['Artikel']->value->Bewertungen->oBewertungGesamt->nAnzahl == 0) {?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'firstReview'),$_smarty_tpl ) );?>

                            <?php } else { ?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'shareYourExperience','section'=>'product rating'),$_smarty_tpl ) );?>

                            <?php }?>
                        </div>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"hidden",'name'=>"bfa",'value'=>"1"),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"hidden",'name'=>"a",'value'=>$_smarty_tpl->tpl_vars['Artikel']->value->kArtikel),$_smarty_tpl ) );?>

                        <?php $_block_plugin136 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin136, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('type'=>"submit",'name'=>"bewerten",'value'=>"1",'variant'=>"outline-primary"));
$_block_repeat=true;
echo $_block_plugin136->render(array('type'=>"submit",'name'=>"bewerten",'value'=>"1",'variant'=>"outline-primary"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php if ($_smarty_tpl->tpl_vars['bereitsBewertet']->value === false) {?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'productAssess','section'=>'product rating'),$_smarty_tpl ) );?>

                            <?php } else { ?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'edit','section'=>'product rating'),$_smarty_tpl ) );?>

                            <?php }?>
                        <?php $_block_repeat=false;
echo $_block_plugin136->render(array('type'=>"submit",'name'=>"bewerten",'value'=>"1",'variant'=>"outline-primary"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php $_block_repeat=false;
echo $_block_plugin135->render(array('method'=>"post",'action'=>$_prefixVariable59."#tab-votes",'id'=>"article_rating",'slide'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php $_block_repeat=false;
echo $_block_plugin134->render(array('cols'=>12,'md'=>6,'lg'=>8,'order'=>0,'order-md'=>1), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
}
}
/* {/block 'productdetails-reviews-votes'} */
/* {block 'productdetails-reviews-content'} */
class Block_158360934660a38bc539d116_92603929 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_block_plugin125 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin125, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('id'=>'reviews-overview'));
$_block_repeat=true;
echo $_block_plugin125->render(array('id'=>'reviews-overview'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_34174567360a38bc539e828_42149160', 'productdetails-reviews-overview', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_112215216960a38bc53e4262_41475846', 'productdetails-reviews-votes', $this->tplIndex);
?>

        <?php $_block_repeat=false;
echo $_block_plugin125->render(array('id'=>'reviews-overview'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php
}
}
/* {/block 'productdetails-reviews-content'} */
/* {block 'productdetails-reviews-reviews-in-lang'} */
class Block_105612241460a38bc53fda88_11693652 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if ($_smarty_tpl->tpl_vars['ratingPagination']->value->getPageItemCount() > 0 || (isset($_smarty_tpl->tpl_vars['Artikel']->value->HilfreichsteBewertung->oBewertung_arr[0]->nHilfreich)) && $_smarty_tpl->tpl_vars['Artikel']->value->HilfreichsteBewertung->oBewertung_arr[0]->nHilfreich > 0) {?>
                <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'reviewsInCurrLang','section'=>'product rating'),$_smarty_tpl ) );?>
</p>
            <?php } else { ?>
                <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'noReviewsInCurrLang','section'=>'product rating'),$_smarty_tpl ) );?>
</p>
            <?php }?>
        <?php
}
}
/* {/block 'productdetails-reviews-reviews-in-lang'} */
/* {block 'productdetails-reviews-most-helpful-header'} */
class Block_165306600260a38bc540ccd8_51517295 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_block_plugin138 = isset($_smarty_tpl->smarty->registered_plugins['block']['cardheader'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['cardheader'][0][0] : null;
if (!is_callable(array($_block_plugin138, 'render'))) {
throw new SmartyException('block tag \'cardheader\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('cardheader', array());
$_block_repeat=true;
echo $_block_plugin138->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <span class="h3">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'theMostUsefulRating','section'=>'product rating'),$_smarty_tpl ) );?>

                            </span>
                        <?php $_block_repeat=false;
echo $_block_plugin138->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php
}
}
/* {/block 'productdetails-reviews-most-helpful-header'} */
/* {block 'productdetails-reviews-form-most-useful-include-review-item'} */
class Block_56715207560a38bc541f705_54283181 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <?php $_smarty_tpl->_subTemplateRender('file:productdetails/review_item.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('oBewertung'=>$_smarty_tpl->tpl_vars['oBewertung']->value,'bMostUseful'=>true), 0, true);
?>
                                        <?php
}
}
/* {/block 'productdetails-reviews-form-most-useful-include-review-item'} */
/* {block 'productdetails-reviews-most-helpful-body'} */
class Block_52258116860a38bc541b5b0_82677333 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php $_block_plugin140 = isset($_smarty_tpl->smarty->registered_plugins['block']['cardbody'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['cardbody'][0][0] : null;
if (!is_callable(array($_block_plugin140, 'render'))) {
throw new SmartyException('block tag \'cardbody\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('cardbody', array('class'=>"review"));
$_block_repeat=true;
echo $_block_plugin140->render(array('class'=>"review"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Artikel']->value->HilfreichsteBewertung->oBewertung_arr, 'oBewertung', true);
$_smarty_tpl->tpl_vars['oBewertung']->iteration = 0;
$_smarty_tpl->tpl_vars['oBewertung']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oBewertung']->value) {
$_smarty_tpl->tpl_vars['oBewertung']->do_else = false;
$_smarty_tpl->tpl_vars['oBewertung']->iteration++;
$_smarty_tpl->tpl_vars['oBewertung']->last = $_smarty_tpl->tpl_vars['oBewertung']->iteration === $_smarty_tpl->tpl_vars['oBewertung']->total;
$__foreach_oBewertung_48_saved = $_smarty_tpl->tpl_vars['oBewertung'];
?>
                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_56715207560a38bc541f705_54283181', 'productdetails-reviews-form-most-useful-include-review-item', $this->tplIndex);
?>

                                    <?php
$_smarty_tpl->tpl_vars['oBewertung'] = $__foreach_oBewertung_48_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php $_block_repeat=false;
echo $_block_plugin140->render(array('class'=>"review"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php
}
}
/* {/block 'productdetails-reviews-most-helpful-body'} */
/* {block 'productdetails-reviews-most-helpful'} */
class Block_59303060660a38bc540f796_58406857 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'bewertung.php'),$_smarty_tpl ) );
$_prefixVariable60=ob_get_clean();
$_block_plugin139 = isset($_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0] : null;
if (!is_callable(array($_block_plugin139, 'render'))) {
throw new SmartyException('block tag \'form\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('method'=>"post",'action'=>$_prefixVariable60."#tab-votes",'slide'=>true));
$_block_repeat=true;
echo $_block_plugin139->render(array('method'=>"post",'action'=>$_prefixVariable60."#tab-votes",'slide'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"hidden",'name'=>"bhjn",'value'=>"1"),$_smarty_tpl ) );?>

                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"hidden",'name'=>"a",'value'=>$_smarty_tpl->tpl_vars['Artikel']->value->kArtikel),$_smarty_tpl ) );?>

                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"hidden",'name'=>"btgsterne",'value'=>$_smarty_tpl->tpl_vars['BlaetterNavi']->value->nSterne),$_smarty_tpl ) );?>

                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"hidden",'name'=>"btgseite",'value'=>$_smarty_tpl->tpl_vars['BlaetterNavi']->value->nAktuelleSeite),$_smarty_tpl ) );?>


                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_52258116860a38bc541b5b0_82677333', 'productdetails-reviews-most-helpful-body', $this->tplIndex);
?>

                        <?php $_block_repeat=false;
echo $_block_plugin139->render(array('method'=>"post",'action'=>$_prefixVariable60."#tab-votes",'slide'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php
}
}
/* {/block 'productdetails-reviews-most-helpful'} */
/* {block 'productdetails-reviews-form-most-useful'} */
class Block_57561821160a38bc540ae84_24806486 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_block_plugin137 = isset($_smarty_tpl->smarty->registered_plugins['block']['card'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['card'][0][0] : null;
if (!is_callable(array($_block_plugin137, 'render'))) {
throw new SmartyException('block tag \'card\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('card', array('class'=>"reviews-mosthelpful",'no-body'=>true));
$_block_repeat=true;
echo $_block_plugin137->render(array('class'=>"reviews-mosthelpful",'no-body'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_165306600260a38bc540ccd8_51517295', 'productdetails-reviews-most-helpful-header', $this->tplIndex);
?>

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59303060660a38bc540f796_58406857', 'productdetails-reviews-most-helpful', $this->tplIndex);
?>

                <?php $_block_repeat=false;
echo $_block_plugin137->render(array('class'=>"reviews-mosthelpful",'no-body'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
}
}
/* {/block 'productdetails-reviews-form-most-useful'} */
/* {block 'productdetails-reviews-include-pagination-bottom'} */
class Block_152674511460a38bc54269d9_07983130 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:snippets/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('oPagination'=>$_smarty_tpl->tpl_vars['ratingPagination']->value,'cThisUrl'=>$_smarty_tpl->tpl_vars['Artikel']->value->cURLFull,'cAnchor'=>'tab-votes'), 0, false);
?>
            <?php
}
}
/* {/block 'productdetails-reviews-include-pagination-bottom'} */
/* {block 'productdetails-reviews-form-include-review-item'} */
class Block_40623818060a38bc5436ed5_77036408 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php ob_start();
if ($_smarty_tpl->tpl_vars['oBewertung']->last) {
echo "last";
}
$_prefixVariable62=ob_get_clean();
$_block_plugin142 = isset($_smarty_tpl->smarty->registered_plugins['block']['card'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['card'][0][0] : null;
if (!is_callable(array($_block_plugin142, 'render'))) {
throw new SmartyException('block tag \'card\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('card', array('class'=>"review ".$_prefixVariable62));
$_block_repeat=true;
echo $_block_plugin142->render(array('class'=>"review ".$_prefixVariable62), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php $_smarty_tpl->_subTemplateRender('file:productdetails/review_item.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('oBewertung'=>$_smarty_tpl->tpl_vars['oBewertung']->value), 0, true);
?>
                            <?php $_block_repeat=false;
echo $_block_plugin142->render(array('class'=>"review ".$_prefixVariable62), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php
}
}
/* {/block 'productdetails-reviews-form-include-review-item'} */
/* {block 'productdetails-reviews-form'} */
class Block_184578679160a38bc5429bf6_10578585 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'bewertung.php'),$_smarty_tpl ) );
$_prefixVariable61=ob_get_clean();
$_block_plugin141 = isset($_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0] : null;
if (!is_callable(array($_block_plugin141, 'render'))) {
throw new SmartyException('block tag \'form\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('id'=>"reviews-list",'method'=>"post",'action'=>$_prefixVariable61."#tab-votes",'class'=>"reviews-list",'slide'=>true));
$_block_repeat=true;
echo $_block_plugin141->render(array('id'=>"reviews-list",'method'=>"post",'action'=>$_prefixVariable61."#tab-votes",'class'=>"reviews-list",'slide'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"hidden",'name'=>"bhjn",'value'=>"1"),$_smarty_tpl ) );?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"hidden",'name'=>"a",'value'=>$_smarty_tpl->tpl_vars['Artikel']->value->kArtikel),$_smarty_tpl ) );?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"hidden",'name'=>"btgsterne",'value'=>$_smarty_tpl->tpl_vars['BlaetterNavi']->value->nSterne),$_smarty_tpl ) );?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"hidden",'name'=>"btgseite",'value'=>$_smarty_tpl->tpl_vars['BlaetterNavi']->value->nAktuelleSeite),$_smarty_tpl ) );?>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ratingPagination']->value->getPageItems(), 'oBewertung', true);
$_smarty_tpl->tpl_vars['oBewertung']->iteration = 0;
$_smarty_tpl->tpl_vars['oBewertung']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oBewertung']->value) {
$_smarty_tpl->tpl_vars['oBewertung']->do_else = false;
$_smarty_tpl->tpl_vars['oBewertung']->iteration++;
$_smarty_tpl->tpl_vars['oBewertung']->last = $_smarty_tpl->tpl_vars['oBewertung']->iteration === $_smarty_tpl->tpl_vars['oBewertung']->total;
$__foreach_oBewertung_49_saved = $_smarty_tpl->tpl_vars['oBewertung'];
?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_40623818060a38bc5436ed5_77036408', 'productdetails-reviews-form-include-review-item', $this->tplIndex);
?>

                    <?php
$_smarty_tpl->tpl_vars['oBewertung'] = $__foreach_oBewertung_49_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php $_block_repeat=false;
echo $_block_plugin141->render(array('id'=>"reviews-list",'method'=>"post",'action'=>$_prefixVariable61."#tab-votes",'class'=>"reviews-list",'slide'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
}
}
/* {/block 'productdetails-reviews-form'} */
/* {block 'productdetails-reviews-include-pagination-bottom'} */
class Block_100066562860a38bc543d6c3_12902185 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:snippets/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('oPagination'=>$_smarty_tpl->tpl_vars['ratingPagination']->value,'cThisUrl'=>$_smarty_tpl->tpl_vars['Artikel']->value->cURLFull,'cAnchor'=>'tab-votes','showFilter'=>false), 0, true);
?>
            <?php
}
}
/* {/block 'productdetails-reviews-include-pagination-bottom'} */
/* {block 'productdetails-reviews'} */
class Block_91901637160a38bc539c375_68107656 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'productdetails-reviews' => 
  array (
    0 => 'Block_91901637160a38bc539c375_68107656',
  ),
  'productdetails-reviews-content' => 
  array (
    0 => 'Block_158360934660a38bc539d116_92603929',
  ),
  'productdetails-reviews-overview' => 
  array (
    0 => 'Block_34174567360a38bc539e828_42149160',
  ),
  'productdetails-reviews-heading' => 
  array (
    0 => 'Block_104754374260a38bc53a3173_99282849',
  ),
  'productdetails-reviews-rating-dropdown' => 
  array (
    0 => 'Block_104206510960a38bc53a52c9_32807016',
  ),
  'productdetails-reviews-include-rating' => 
  array (
    0 => 'Block_59582236960a38bc53a5da5_00398502',
  ),
  'productdetails-reviews-votes' => 
  array (
    0 => 'Block_104540516060a38bc53ab191_02324231',
    1 => 'Block_112215216960a38bc53e4262_41475846',
  ),
  'productdetails-reviews-note-all-ratings' => 
  array (
    0 => 'Block_3496880560a38bc53dc130_56880667',
  ),
  'productdetails-reviews-reviews-in-lang' => 
  array (
    0 => 'Block_105612241460a38bc53fda88_11693652',
  ),
  'productdetails-reviews-form-most-useful' => 
  array (
    0 => 'Block_57561821160a38bc540ae84_24806486',
  ),
  'productdetails-reviews-most-helpful-header' => 
  array (
    0 => 'Block_165306600260a38bc540ccd8_51517295',
  ),
  'productdetails-reviews-most-helpful' => 
  array (
    0 => 'Block_59303060660a38bc540f796_58406857',
  ),
  'productdetails-reviews-most-helpful-body' => 
  array (
    0 => 'Block_52258116860a38bc541b5b0_82677333',
  ),
  'productdetails-reviews-form-most-useful-include-review-item' => 
  array (
    0 => 'Block_56715207560a38bc541f705_54283181',
  ),
  'productdetails-reviews-include-pagination-bottom' => 
  array (
    0 => 'Block_152674511460a38bc54269d9_07983130',
    1 => 'Block_100066562860a38bc543d6c3_12902185',
  ),
  'productdetails-reviews-form' => 
  array (
    0 => 'Block_184578679160a38bc5429bf6_10578585',
  ),
  'productdetails-reviews-form-include-review-item' => 
  array (
    0 => 'Block_40623818060a38bc5436ed5_77036408',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="reviews">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_158360934660a38bc539d116_92603929', 'productdetails-reviews-content', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_105612241460a38bc53fda88_11693652', 'productdetails-reviews-reviews-in-lang', $this->tplIndex);
?>

        <?php if ((isset($_smarty_tpl->tpl_vars['Artikel']->value->HilfreichsteBewertung->oBewertung_arr[0]->nHilfreich)) && $_smarty_tpl->tpl_vars['Artikel']->value->HilfreichsteBewertung->oBewertung_arr[0]->nHilfreich > 0) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_57561821160a38bc540ae84_24806486', 'productdetails-reviews-form-most-useful', $this->tplIndex);
?>

        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['ratingPagination']->value->getPageItemCount() > 0) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_152674511460a38bc54269d9_07983130', 'productdetails-reviews-include-pagination-bottom', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_184578679160a38bc5429bf6_10578585', 'productdetails-reviews-form', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_100066562860a38bc543d6c3_12902185', 'productdetails-reviews-include-pagination-bottom', $this->tplIndex);
?>

        <?php }?>
    </div>
<?php
}
}
/* {/block 'productdetails-reviews'} */
}
