<?php
/* Smarty version 3.1.38, created on 2021-05-04 11:46:28
  from 'C:\xampp\htdocs\shop\templates\NOVA\snippets\slider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_609117f419ce27_29710718',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a1b7be952aced62febcbabdda9657090ed5a02a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\templates\\NOVA\\snippets\\slider.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609117f419ce27_29710718 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1993082022609117f414d138_47915624', 'snippets-slider');
?>

<?php }
/* {block 'snippets-slider-slide-image'} */
class Block_1380587762609117f4165fe4_11343055 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php ob_start();
if (!empty($_smarty_tpl->tpl_vars['oSlide']->value->getAbsoluteThumbnail())) {
echo (string)$_smarty_tpl->tpl_vars['oSlide']->value->getAbsoluteThumbnail();
}
$_prefixVariable65=ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0], array( array('alt'=>$_smarty_tpl->tpl_vars['oSlide']->value->getTitle(),'title'=>$_smarty_tpl->tpl_vars['slideTitle']->value,'src'=>$_smarty_tpl->tpl_vars['oSlide']->value->getAbsoluteImage(),'data'=>array("thumb"=>$_prefixVariable65)),$_smarty_tpl ) );?>

                            <?php
}
}
/* {/block 'snippets-slider-slide-image'} */
/* {block 'snippets-slider-slides'} */
class Block_1798548322609117f4158d94_17226181 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oSlider']->value->getSlides(), 'oSlide');
$_smarty_tpl->tpl_vars['oSlide']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oSlide']->value) {
$_smarty_tpl->tpl_vars['oSlide']->do_else = false;
?>
                            <?php $_smarty_tpl->_assignInScope('slideTitle', $_smarty_tpl->tpl_vars['oSlide']->value->getTitle());?>
                            <?php if (!empty($_smarty_tpl->tpl_vars['oSlide']->value->getText())) {?>
                                <?php $_smarty_tpl->_assignInScope('slideTitle', "#slide_caption_".((string)$_smarty_tpl->tpl_vars['oSlide']->value->getID()));?>
                            <?php }?>
                            <?php if (!empty($_smarty_tpl->tpl_vars['oSlide']->value->getLink())) {?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['oSlide']->value->getLink();?>
"<?php if (!empty($_smarty_tpl->tpl_vars['oSlide']->value->getText())) {?> title="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['oSlide']->value->getText());?>
"<?php }?> class="slide">
                            <?php } else { ?>
                                <div class="slide">
                            <?php }?>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1380587762609117f4165fe4_11343055', 'snippets-slider-slide-image', $this->tplIndex);
?>

                            <?php if (!empty($_smarty_tpl->tpl_vars['oSlide']->value->getLink())) {?>
                                </a>
                            <?php } else { ?>
                                </div>
                            <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php
}
}
/* {/block 'snippets-slider-slides'} */
/* {block 'snippets-slider-slide-captions-title'} */
class Block_1337914904609117f4174d86_17477726 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <strong class="title"><?php echo $_smarty_tpl->tpl_vars['oSlide']->value->getTitle();?>
</strong>
                                    <?php
}
}
/* {/block 'snippets-slider-slide-captions-title'} */
/* {block 'snippets-slider-slide-captions-desc'} */
class Block_733631824609117f4176f51_13538046 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <p class="desc"><?php echo $_smarty_tpl->tpl_vars['oSlide']->value->getText();?>
</p>
                                <?php
}
}
/* {/block 'snippets-slider-slide-captions-desc'} */
/* {block 'snippets-slider-slide-captions'} */
class Block_931218376609117f416f3f7_42991726 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oSlider']->value->getSlides(), 'oSlide');
$_smarty_tpl->tpl_vars['oSlide']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oSlide']->value) {
$_smarty_tpl->tpl_vars['oSlide']->do_else = false;
?>
                        <?php if (!empty($_smarty_tpl->tpl_vars['oSlide']->value->getText())) {?>
                            <div id="slide_caption_<?php echo $_smarty_tpl->tpl_vars['oSlide']->value->getID();?>
" class="htmlcaption d-none">
                                <?php if ((($_smarty_tpl->tpl_vars['oSlide']->value->getTitle() !== null ))) {?>
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1337914904609117f4174d86_17477726', 'snippets-slider-slide-captions-title', $this->tplIndex);
?>

                                <?php }?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_733631824609117f4176f51_13538046', 'snippets-slider-slide-captions-desc', $this->tplIndex);
?>

                            </div>
                        <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php
}
}
/* {/block 'snippets-slider-slide-captions'} */
/* {block 'snippets-slider-script'} */
class Block_704960371609117f417a0f9_51398542 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\shop\\includes\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

            <?php $_block_plugin105 = isset($_smarty_tpl->smarty->registered_plugins['block']['inline_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['inline_script'][0][0] : null;
if (!is_callable(array($_block_plugin105, 'inlineScript'))) {
throw new SmartyException('block tag \'inline_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo $_block_plugin105->inlineScript(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
                <?php if ($_smarty_tpl->tpl_vars['oSlider']->value->getUseKB() === false) {?>
                    $(function () {
                        var slider = $('#slider-<?php echo $_smarty_tpl->tpl_vars['oSlider']->value->getID();?>
');
                        $('a.slide').on('click', function () {
                            if (!this.href.match(new RegExp('^' + location.protocol + '\\/\\/' + location.host))) {
                                this.target = '_blank';
                                }
                            });
                        slider.nivoSlider({
                            effect: '<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['oSlider']->value->getEffects(),';',',');?>
',
                            animSpeed: <?php echo $_smarty_tpl->tpl_vars['oSlider']->value->getAnimationSpeed();?>
,
                            pauseTime: <?php echo $_smarty_tpl->tpl_vars['oSlider']->value->getPauseTime();?>
,
                            directionNav: <?php if ($_smarty_tpl->tpl_vars['oSlider']->value->getDirectionNav()) {?>true<?php } else { ?>false<?php }?>,
                            controlNav: <?php if ($_smarty_tpl->tpl_vars['oSlider']->value->getControlNav()) {?>true<?php } else { ?>false<?php }?>,
                            controlNavThumbs: <?php if ($_smarty_tpl->tpl_vars['oSlider']->value->getThumbnail()) {?>true<?php } else { ?>false<?php }?>,
                            pauseOnHover: <?php if ($_smarty_tpl->tpl_vars['oSlider']->value->getPauseOnHover()) {?>true<?php } else { ?>false<?php }?>,
                            prevText: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'sliderPrev','section'=>'media'),$_smarty_tpl ) );?>
',
                            nextText: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'sliderNext','section'=>'media'),$_smarty_tpl ) );?>
',
                            randomStart: <?php if ($_smarty_tpl->tpl_vars['oSlider']->value->getRandomStart()) {?>true<?php } else { ?>false<?php }?>,
                            afterLoad: function () {
                                slider.addClass('loaded');
                            }
                        });
                    });
                <?php } else { ?>
                    var pauseTime = <?php echo $_smarty_tpl->tpl_vars['oSlider']->value->getPauseTime();?>
,
                        animSpeed = <?php echo $_smarty_tpl->tpl_vars['oSlider']->value->getAnimationSpeed();?>
,
                        zoomFactor = 30,
                        durationFactor = 1.25;

                    function KBInit () {
                        $('.nivoSlider img').css('visibility', 'hidden');
                        $('.nivoSlider .nivo-nextNav').trigger('click');
                        $('.nivoSlider, .nivo-control').css('opacity',1);
                        setTimeout (function(){
                            $('.nivoSlider, .nivo-control').animate({ opacity: 1 },animSpeed);
                        },0);
                        $('.nivo-control').on('click', function() {
                            setTimeout (function(){
                                $('.nivo-main-image').css('opacity',0);
                            },0);
                            durationFactor = 1.25;
                        });
                        $('.nivo-prevNav, .nivo-nextNav').on('click', function() {
                            setTimeout (function(){
                                $('.nivo-main-image').css('opacity',0);
                            },20);
                            durationFactor = 1.25;
                        });
                    }

                    function NivoKenBurns () {
                        $('.nivo-main-image').css('opacity',1);
                        setTimeout (function(){
                            $('.nivoSlider .nivo-slice img').css('width',100+zoomFactor+'%');
                        },10);
                        setTimeout (function(){
                            var nivoWidth=$('.nivoSlider').width(), nivoHeight=$('.nivoSlider').height();
                            var xScope=nivoWidth*zoomFactor/100, yScope=nivoHeight*zoomFactor/105;
                            var xStart=-xScope*Math.floor(Math.random()*2);
                            var yStart=-yScope*Math.floor(Math.random()*2);
                            $('.nivoSlider .nivo-slice img')
                                .css('left',xStart)
                                .css('top',yStart)
                                .animate({ width:'100%', left:0, top:0 },pauseTime*durationFactor);
                            durationFactor=1.02;
                            $('.nivo-main-image').css('cssText','left:0 !important;top:0 !important;');
                        },10);
                    }

                    $(function () {
                        var slider = $('#slider-<?php echo $_smarty_tpl->tpl_vars['oSlider']->value->getID();?>
');
                        var endSlide=$('.nivoSlider img').length-1;
                        $('a.slide').click(function() {
                            if (!this.href.match(new RegExp('^'+location.protocol+'\\/\\/'+location.host))) {
                                this.target = '_blank';
                            }
                        });
                        slider.nivoSlider( {
                            effect: 'fade',
                            animSpeed: animSpeed,
                            pauseTime: pauseTime,
                            directionNav: true,
                            controlNav: false,
                            controlNavThumbs: false,
                            pauseOnHover: false,
                            prevText: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'sliderPrev','section'=>'media'),$_smarty_tpl ) );?>
',
                            nextText: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'sliderNext','section'=>'media'),$_smarty_tpl ) );?>
',
                            manualAdvance: false,
                            randomStart: false,
                            startSlide: endSlide,
                            slices: 1,
                            beforeChange: function (){ NivoKenBurns(); },
                            afterLoad: function (){
                                KBInit();
                                slider.addClass('loaded');
                            }
                        });
                    });
                <?php }?>
            <?php echo '</script'; ?>
><?php $_block_repeat=false;
echo $_block_plugin105->inlineScript(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php
}
}
/* {/block 'snippets-slider-script'} */
/* {block 'snippets-slider'} */
class Block_1993082022609117f414d138_47915624 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-slider' => 
  array (
    0 => 'Block_1993082022609117f414d138_47915624',
  ),
  'snippets-slider-slides' => 
  array (
    0 => 'Block_1798548322609117f4158d94_17226181',
  ),
  'snippets-slider-slide-image' => 
  array (
    0 => 'Block_1380587762609117f4165fe4_11343055',
  ),
  'snippets-slider-slide-captions' => 
  array (
    0 => 'Block_931218376609117f416f3f7_42991726',
  ),
  'snippets-slider-slide-captions-title' => 
  array (
    0 => 'Block_1337914904609117f4174d86_17477726',
  ),
  'snippets-slider-slide-captions-desc' => 
  array (
    0 => 'Block_733631824609117f4176f51_13538046',
  ),
  'snippets-slider-script' => 
  array (
    0 => 'Block_704960371609117f417a0f9_51398542',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ((isset($_smarty_tpl->tpl_vars['oSlider']->value)) && count($_smarty_tpl->tpl_vars['oSlider']->value->getSlides()) > 0) {?>
        <?php $_block_plugin104 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin104, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array('fluid'=>$_smarty_tpl->tpl_vars['isFluid']->value));
$_block_repeat=true;
echo $_block_plugin104->render(array('fluid'=>$_smarty_tpl->tpl_vars['isFluid']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_slider'),$_smarty_tpl ) );?>

            <div class="slider-wrapper theme-<?php echo $_smarty_tpl->tpl_vars['oSlider']->value->getTheme();
if ($_smarty_tpl->tpl_vars['oSlider']->value->getControlNav()) {?> control-nav<?php }
if ($_smarty_tpl->tpl_vars['oSlider']->value->getDirectionNav()) {?> direction-nav<?php }
if ($_smarty_tpl->tpl_vars['oSlider']->value->getThumbnail()) {?> thumbnail-nav<?php }?>">
                <div id="slider-<?php echo $_smarty_tpl->tpl_vars['oSlider']->value->getID();?>
" class="nivoSlider">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1798548322609117f4158d94_17226181', 'snippets-slider-slides', $this->tplIndex);
?>

                </div>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_931218376609117f416f3f7_42991726', 'snippets-slider-slide-captions', $this->tplIndex);
?>

            </div>
        <?php $_block_repeat=false;
echo $_block_plugin104->render(array('fluid'=>$_smarty_tpl->tpl_vars['isFluid']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_704960371609117f417a0f9_51398542', 'snippets-slider-script', $this->tplIndex);
?>

    <?php }
}
}
/* {/block 'snippets-slider'} */
}
