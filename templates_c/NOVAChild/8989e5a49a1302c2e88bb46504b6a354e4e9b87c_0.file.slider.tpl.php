<?php
/* Smarty version 3.1.38, created on 2021-05-18 11:16:41
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\snippets\slider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a385f9327788_24067849',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8989e5a49a1302c2e88bb46504b6a354e4e9b87c' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\snippets\\slider.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a385f9327788_24067849 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_58368916960a385f9248554_18731745', 'snippets-slider');
?>

<?php }
/* {block 'snippets-slider-slide-image'} */
class Block_72597249960a385f926aa10_11249646 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php ob_start();
if (!empty($_smarty_tpl->tpl_vars['oSlide']->value->getAbsoluteThumbnail())) {
echo (string)$_smarty_tpl->tpl_vars['oSlide']->value->getAbsoluteThumbnail();
}
$_prefixVariable56=ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0], array( array('alt'=>$_smarty_tpl->tpl_vars['oSlide']->value->getTitle(),'title'=>$_smarty_tpl->tpl_vars['slideTitle']->value,'src'=>$_smarty_tpl->tpl_vars['oSlide']->value->getAbsoluteImage(),'data'=>array("thumb"=>$_prefixVariable56)),$_smarty_tpl ) );?>

                            <?php
}
}
/* {/block 'snippets-slider-slide-image'} */
/* {block 'snippets-slider-slides'} */
class Block_121907717360a385f9258b75_41801959 extends Smarty_Internal_Block
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_72597249960a385f926aa10_11249646', 'snippets-slider-slide-image', $this->tplIndex);
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
class Block_210610259760a385f927ebc8_17985771 extends Smarty_Internal_Block
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
class Block_53436552160a385f9281816_01610887 extends Smarty_Internal_Block
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
class Block_34076569160a385f9276d12_01122122 extends Smarty_Internal_Block
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_210610259760a385f927ebc8_17985771', 'snippets-slider-slide-captions-title', $this->tplIndex);
?>

                                <?php }?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_53436552160a385f9281816_01610887', 'snippets-slider-slide-captions-desc', $this->tplIndex);
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
class Block_58799291860a385f9286610_93168045 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\includes\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

            <?php $_block_plugin92 = isset($_smarty_tpl->smarty->registered_plugins['block']['inline_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['inline_script'][0][0] : null;
if (!is_callable(array($_block_plugin92, 'inlineScript'))) {
throw new SmartyException('block tag \'inline_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo $_block_plugin92->inlineScript(array(), null, $_smarty_tpl, $_block_repeat);
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
echo $_block_plugin92->inlineScript(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php
}
}
/* {/block 'snippets-slider-script'} */
/* {block 'snippets-slider'} */
class Block_58368916960a385f9248554_18731745 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-slider' => 
  array (
    0 => 'Block_58368916960a385f9248554_18731745',
  ),
  'snippets-slider-slides' => 
  array (
    0 => 'Block_121907717360a385f9258b75_41801959',
  ),
  'snippets-slider-slide-image' => 
  array (
    0 => 'Block_72597249960a385f926aa10_11249646',
  ),
  'snippets-slider-slide-captions' => 
  array (
    0 => 'Block_34076569160a385f9276d12_01122122',
  ),
  'snippets-slider-slide-captions-title' => 
  array (
    0 => 'Block_210610259760a385f927ebc8_17985771',
  ),
  'snippets-slider-slide-captions-desc' => 
  array (
    0 => 'Block_53436552160a385f9281816_01610887',
  ),
  'snippets-slider-script' => 
  array (
    0 => 'Block_58799291860a385f9286610_93168045',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ((isset($_smarty_tpl->tpl_vars['oSlider']->value)) && count($_smarty_tpl->tpl_vars['oSlider']->value->getSlides()) > 0) {?>
        <?php $_block_plugin91 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin91, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array('fluid'=>$_smarty_tpl->tpl_vars['isFluid']->value));
$_block_repeat=true;
echo $_block_plugin91->render(array('fluid'=>$_smarty_tpl->tpl_vars['isFluid']->value), null, $_smarty_tpl, $_block_repeat);
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121907717360a385f9258b75_41801959', 'snippets-slider-slides', $this->tplIndex);
?>

                </div>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_34076569160a385f9276d12_01122122', 'snippets-slider-slide-captions', $this->tplIndex);
?>

            </div>
        <?php $_block_repeat=false;
echo $_block_plugin91->render(array('fluid'=>$_smarty_tpl->tpl_vars['isFluid']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_58799291860a385f9286610_93168045', 'snippets-slider-script', $this->tplIndex);
?>

    <?php }
}
}
/* {/block 'snippets-slider'} */
}
