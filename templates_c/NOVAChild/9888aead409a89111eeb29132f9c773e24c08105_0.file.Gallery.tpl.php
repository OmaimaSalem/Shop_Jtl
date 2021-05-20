<?php
/* Smarty version 3.1.38, created on 2021-05-07 10:21:57
  from 'C:\xampp\htdocs\shop\includes\src\OPC\Portlets\Gallery\Gallery.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6094f8a583f269_56033385',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9888aead409a89111eeb29132f9c773e24c08105' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\includes\\src\\OPC\\Portlets\\Gallery\\Gallery.tpl',
      1 => 1612177966,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6094f8a583f269_56033385 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('galleryStyle', $_smarty_tpl->tpl_vars['instance']->value->getProperty('galleryStyle'));
$_smarty_tpl->_assignInScope('images', $_smarty_tpl->tpl_vars['instance']->value->getProperty('images'));?>

<?php if ($_smarty_tpl->tpl_vars['isPreview']->value && empty($_smarty_tpl->tpl_vars['images']->value)) {?>
    <div class="opc-Gallery-preview" style="<?php echo $_smarty_tpl->tpl_vars['instance']->value->getStyleString();?>
">
        <div>
            <?php echo file_get_contents(($_smarty_tpl->tpl_vars['portlet']->value->getBasePath()).('icon.svg'));?>

            <span><?php echo __('Gallery');?>
</span>
        </div>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['galleryStyle']->value === 'columns') {?>
    <div class="opc-Gallery-columns <?php echo $_smarty_tpl->tpl_vars['instance']->value->getStyleClasses();?>
"
         id="<?php echo $_smarty_tpl->tpl_vars['instance']->value->getUid();?>
" style="<?php echo $_smarty_tpl->tpl_vars['instance']->value->getStyleString();?>
"
         data-colcade="columns: .opc-Gallery-column, items: .opc-Gallery-btn">
        <div class="opc-Gallery-column opc-Gallery-column-1"></div>
        <div class="opc-Gallery-column opc-Gallery-column-2"></div>
        <div class="opc-Gallery-column opc-Gallery-column-3"></div>
        <div class="opc-Gallery-column opc-Gallery-column-4"></div>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image', true, 'key');
$_smarty_tpl->tpl_vars['image']->iteration = 0;
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
$_smarty_tpl->tpl_vars['image']->iteration++;
$_smarty_tpl->tpl_vars['image']->last = $_smarty_tpl->tpl_vars['image']->iteration === $_smarty_tpl->tpl_vars['image']->total;
$__foreach_image_0_saved = $_smarty_tpl->tpl_vars['image'];
?>
            <?php $_smarty_tpl->_assignInScope('imgAttribs', $_smarty_tpl->tpl_vars['instance']->value->getImageAttributes($_smarty_tpl->tpl_vars['image']->value['url'],$_smarty_tpl->tpl_vars['image']->value['alt'],''));?>
            <a <?php if ($_smarty_tpl->tpl_vars['isPreview']->value === false) {?>
                    <?php if ($_smarty_tpl->tpl_vars['image']->value['action'] === 'link') {?>
                        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['link'], ENT_QUOTES, 'utf-8', true);?>
"
                    <?php } elseif ($_smarty_tpl->tpl_vars['image']->value['action'] === 'lightbox') {?>
                        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['imgAttribs']->value['src'], ENT_QUOTES, 'utf-8', true);?>
"
                    <?php }?>
               <?php }?> class="opc-Gallery-btn <?php if ($_smarty_tpl->tpl_vars['image']->value['action'] === 'lightbox') {?>opc-Gallery-active-btn<?php }?>"
               data-caption="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['desc'], ENT_QUOTES, 'utf-8', true);?>
">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0], array( array('class'=>'opc-Gallery-img','srcset'=>$_smarty_tpl->tpl_vars['imgAttribs']->value['srcset'],'sizes'=>$_smarty_tpl->tpl_vars['imgAttribs']->value['srcsizes'],'src'=>$_smarty_tpl->tpl_vars['imgAttribs']->value['src'],'alt'=>htmlspecialchars($_smarty_tpl->tpl_vars['imgAttribs']->value['alt'], ENT_QUOTES, 'utf-8', true),'title'=>$_smarty_tpl->tpl_vars['imgAttribs']->value['title']),$_smarty_tpl ) );?>

                <?php if ($_smarty_tpl->tpl_vars['image']->value['action'] === 'lightbox') {?>
                    <i class="opc-Gallery-zoom fa fa-search fa-2x"></i>
                <?php }?>
            </a>
        <?php
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php if ($_smarty_tpl->tpl_vars['isPreview']->value) {?>
            <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['inline_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['inline_script'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'inlineScript'))) {
throw new SmartyException('block tag \'inline_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo $_block_plugin1->inlineScript(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
                $('#<?php echo $_smarty_tpl->tpl_vars['instance']->value->getUid();?>
').colcade({
                    columns: '.opc-Gallery-column',
                    items: '.opc-Gallery-btn'
                })
            <?php echo '</script'; ?>
><?php $_block_repeat=false;
echo $_block_plugin1->inlineScript(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php }?>
    </div>
<?php } else { ?>
    <?php if ($_smarty_tpl->tpl_vars['inContainer']->value === false) {?>
        <div class="container-fluid">
    <?php }?>
    <?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('id'=>$_smarty_tpl->tpl_vars['instance']->value->getUid(),'class'=>((('opc-Gallery opc-Gallery-').($_smarty_tpl->tpl_vars['galleryStyle']->value)).(' ')).($_smarty_tpl->tpl_vars['instance']->value->getStyleClasses()),'style'=>$_smarty_tpl->tpl_vars['instance']->value->getStyleString()));
$_block_repeat=true;
echo $_block_plugin2->render(array('id'=>$_smarty_tpl->tpl_vars['instance']->value->getUid(),'class'=>((('opc-Gallery opc-Gallery-').($_smarty_tpl->tpl_vars['galleryStyle']->value)).(' ')).($_smarty_tpl->tpl_vars['instance']->value->getStyleClasses()),'style'=>$_smarty_tpl->tpl_vars['instance']->value->getStyleString()), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_smarty_tpl->_assignInScope('xsSum', 0);?>
        <?php $_smarty_tpl->_assignInScope('smSum', 0);?>
        <?php $_smarty_tpl->_assignInScope('mdSum', 0);?>
        <?php $_smarty_tpl->_assignInScope('xlSum', 0);?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image', true, 'key');
$_smarty_tpl->tpl_vars['image']->iteration = 0;
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
$_smarty_tpl->tpl_vars['image']->iteration++;
$_smarty_tpl->tpl_vars['image']->last = $_smarty_tpl->tpl_vars['image']->iteration === $_smarty_tpl->tpl_vars['image']->total;
$__foreach_image_1_saved = $_smarty_tpl->tpl_vars['image'];
?>
            <?php if ($_smarty_tpl->tpl_vars['galleryStyle']->value === 'alternate') {?>
                <?php if ($_smarty_tpl->tpl_vars['image']->last) {?>
                    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['image']) ? $_smarty_tpl->tpl_vars['image']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['xs'] = 12-$_smarty_tpl->tpl_vars['xsSum']->value%12;
$_smarty_tpl->_assignInScope('image', $_tmp_array);?>
                    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['image']) ? $_smarty_tpl->tpl_vars['image']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['sm'] = 12-$_smarty_tpl->tpl_vars['smSum']->value%12;
$_smarty_tpl->_assignInScope('image', $_tmp_array);?>
                    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['image']) ? $_smarty_tpl->tpl_vars['image']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['md'] = 12-$_smarty_tpl->tpl_vars['mdSum']->value%12;
$_smarty_tpl->_assignInScope('image', $_tmp_array);?>
                    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['image']) ? $_smarty_tpl->tpl_vars['image']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['xl'] = 12-$_smarty_tpl->tpl_vars['xlSum']->value%12;
$_smarty_tpl->_assignInScope('image', $_tmp_array);?>
                <?php } else { ?>
                    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['image']) ? $_smarty_tpl->tpl_vars['image']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['xs'] = 6;
$_smarty_tpl->_assignInScope('image', $_tmp_array);?>
                    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['image']) ? $_smarty_tpl->tpl_vars['image']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['sm'] = 5;
$_smarty_tpl->_assignInScope('image', $_tmp_array);?>
                    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['image']) ? $_smarty_tpl->tpl_vars['image']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['md'] = 3;
$_smarty_tpl->_assignInScope('image', $_tmp_array);?>
                    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['image']) ? $_smarty_tpl->tpl_vars['image']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['xl'] = 3;
$_smarty_tpl->_assignInScope('image', $_tmp_array);?>
                    <?php if ($_smarty_tpl->tpl_vars['key']->value%3 === 0) {?>
                        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['image']) ? $_smarty_tpl->tpl_vars['image']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['xs'] = 12;
$_smarty_tpl->_assignInScope('image', $_tmp_array);?>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['key']->value%4 === 0 || $_smarty_tpl->tpl_vars['key']->value%4 === 3) {?>
                        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['image']) ? $_smarty_tpl->tpl_vars['image']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['sm'] = 7;
$_smarty_tpl->_assignInScope('image', $_tmp_array);?>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['key']->value%6 === 0 || $_smarty_tpl->tpl_vars['key']->value%6 === 5) {?>
                        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['image']) ? $_smarty_tpl->tpl_vars['image']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['md'] = 5;
$_smarty_tpl->_assignInScope('image', $_tmp_array);?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['key']->value%6 === 1 || $_smarty_tpl->tpl_vars['key']->value%6 === 4) {?>
                        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['image']) ? $_smarty_tpl->tpl_vars['image']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['md'] = 4;
$_smarty_tpl->_assignInScope('image', $_tmp_array);?>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['key']->value%8 === 0 || $_smarty_tpl->tpl_vars['key']->value%8 === 7) {?>
                        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['image']) ? $_smarty_tpl->tpl_vars['image']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['xl'] = 4;
$_smarty_tpl->_assignInScope('image', $_tmp_array);?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['key']->value%8 === 1 || $_smarty_tpl->tpl_vars['key']->value%8 === 5) {?>
                        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['image']) ? $_smarty_tpl->tpl_vars['image']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['xl'] = 2;
$_smarty_tpl->_assignInScope('image', $_tmp_array);?>
                    <?php }?>
                <?php }?>
                <?php $_smarty_tpl->_assignInScope('xsSum', $_smarty_tpl->tpl_vars['xsSum']->value+$_smarty_tpl->tpl_vars['image']->value['xs']);?>
                <?php $_smarty_tpl->_assignInScope('smSum', $_smarty_tpl->tpl_vars['smSum']->value+$_smarty_tpl->tpl_vars['image']->value['sm']);?>
                <?php $_smarty_tpl->_assignInScope('mdSum', $_smarty_tpl->tpl_vars['mdSum']->value+$_smarty_tpl->tpl_vars['image']->value['md']);?>
                <?php $_smarty_tpl->_assignInScope('xlSum', $_smarty_tpl->tpl_vars['xlSum']->value+$_smarty_tpl->tpl_vars['image']->value['xl']);?>
            <?php } elseif ($_smarty_tpl->tpl_vars['galleryStyle']->value === 'grid') {?>
                <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['image']) ? $_smarty_tpl->tpl_vars['image']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['xs'] = 6;
$_smarty_tpl->_assignInScope('image', $_tmp_array);?>
                <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['image']) ? $_smarty_tpl->tpl_vars['image']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['sm'] = 4;
$_smarty_tpl->_assignInScope('image', $_tmp_array);?>
                <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['image']) ? $_smarty_tpl->tpl_vars['image']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['md'] = 3;
$_smarty_tpl->_assignInScope('image', $_tmp_array);?>
                <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['image']) ? $_smarty_tpl->tpl_vars['image']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['xl'] = 2;
$_smarty_tpl->_assignInScope('image', $_tmp_array);?>
            <?php }?>

            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['image']) ? $_smarty_tpl->tpl_vars['image']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['lg'] = $_smarty_tpl->tpl_vars['image']->value['md'];
$_smarty_tpl->_assignInScope('image', $_tmp_array);?>

            <?php $_smarty_tpl->_assignInScope('imgAttribs', $_smarty_tpl->tpl_vars['instance']->value->getImageAttributes($_smarty_tpl->tpl_vars['image']->value['url'],$_smarty_tpl->tpl_vars['image']->value['alt'],'',array('xs'=>$_smarty_tpl->tpl_vars['image']->value['xs'],'sm'=>$_smarty_tpl->tpl_vars['image']->value['sm'],'md'=>$_smarty_tpl->tpl_vars['image']->value['md'],'lg'=>$_smarty_tpl->tpl_vars['image']->value['lg'],'xl'=>$_smarty_tpl->tpl_vars['image']->value['xl'])));?>
            <?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>$_smarty_tpl->tpl_vars['image']->value['xs'],'sm'=>$_smarty_tpl->tpl_vars['image']->value['sm'],'md'=>$_smarty_tpl->tpl_vars['image']->value['md'],'lg'=>$_smarty_tpl->tpl_vars['image']->value['lg'],'xl'=>$_smarty_tpl->tpl_vars['image']->value['xl'],'class'=>"opc-Gallery-item"));
$_block_repeat=true;
echo $_block_plugin3->render(array('cols'=>$_smarty_tpl->tpl_vars['image']->value['xs'],'sm'=>$_smarty_tpl->tpl_vars['image']->value['sm'],'md'=>$_smarty_tpl->tpl_vars['image']->value['md'],'lg'=>$_smarty_tpl->tpl_vars['image']->value['lg'],'xl'=>$_smarty_tpl->tpl_vars['image']->value['xl'],'class'=>"opc-Gallery-item"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <a <?php if ($_smarty_tpl->tpl_vars['isPreview']->value === false) {?>
                        <?php if ($_smarty_tpl->tpl_vars['image']->value['action'] === 'link') {?>
                            href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['link'], ENT_QUOTES, 'utf-8', true);?>
"
                        <?php } elseif ($_smarty_tpl->tpl_vars['image']->value['action'] === 'lightbox') {?>
                            href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['imgAttribs']->value['src'], ENT_QUOTES, 'utf-8', true);?>
"
                        <?php }?>
                    <?php }?>
                   class="opc-Gallery-btn <?php if ($_smarty_tpl->tpl_vars['image']->value['action'] === 'lightbox') {?>opc-Gallery-active-btn<?php }?>"
                   data-caption="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['desc'], ENT_QUOTES, 'utf-8', true);?>
"
                   aria-label="<?php echo $_smarty_tpl->tpl_vars['image']->value['alt'];?>
"
                >
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0], array( array('class'=>'opc-Gallery-img','srcset'=>$_smarty_tpl->tpl_vars['imgAttribs']->value['srcset'],'sizes'=>$_smarty_tpl->tpl_vars['imgAttribs']->value['srcsizes'],'src'=>$_smarty_tpl->tpl_vars['imgAttribs']->value['src'],'alt'=>htmlspecialchars($_smarty_tpl->tpl_vars['imgAttribs']->value['alt'], ENT_QUOTES, 'utf-8', true),'title'=>$_smarty_tpl->tpl_vars['imgAttribs']->value['title']),$_smarty_tpl ) );?>

                    <?php if ($_smarty_tpl->tpl_vars['image']->value['action'] === 'lightbox') {?>
                        <i class="opc-Gallery-zoom fa fa-search fa-2x"></i>
                    <?php }?>
                </a>
            <?php $_block_repeat=false;
echo $_block_plugin3->render(array('cols'=>$_smarty_tpl->tpl_vars['image']->value['xs'],'sm'=>$_smarty_tpl->tpl_vars['image']->value['sm'],'md'=>$_smarty_tpl->tpl_vars['image']->value['md'],'lg'=>$_smarty_tpl->tpl_vars['image']->value['lg'],'xl'=>$_smarty_tpl->tpl_vars['image']->value['xl'],'class'=>"opc-Gallery-item"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php $_block_repeat=false;
echo $_block_plugin2->render(array('id'=>$_smarty_tpl->tpl_vars['instance']->value->getUid(),'class'=>((('opc-Gallery opc-Gallery-').($_smarty_tpl->tpl_vars['galleryStyle']->value)).(' ')).($_smarty_tpl->tpl_vars['instance']->value->getStyleClasses()),'style'=>$_smarty_tpl->tpl_vars['instance']->value->getStyleString()), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php if ($_smarty_tpl->tpl_vars['inContainer']->value === false) {?>
        </div>
    <?php }
}?>

<?php if ($_smarty_tpl->tpl_vars['isPreview']->value === false) {?>
    <?php $_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['inline_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['inline_script'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'inlineScript'))) {
throw new SmartyException('block tag \'inline_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo $_block_plugin4->inlineScript(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
        var initGallery = function() {
            $('#<?php echo $_smarty_tpl->tpl_vars['instance']->value->getUid();?>
').slickLightbox({
                itemSelector: '.opc-Gallery-active-btn',
                caption: 'caption',
                lazy: true,
            });
        };

        $(initGallery);
    <?php echo '</script'; ?>
><?php $_block_repeat=false;
echo $_block_plugin4->inlineScript(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
