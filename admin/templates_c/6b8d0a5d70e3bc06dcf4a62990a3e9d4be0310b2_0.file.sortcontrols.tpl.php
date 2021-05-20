<?php
/* Smarty version 3.1.38, created on 2021-05-04 12:22:04
  from 'C:\xampp\htdocs\shop\admin\templates\bootstrap\tpl_inc\sortcontrols.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6091204c9dfcc2_03482404',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b8d0a5d70e3bc06dcf4a62990a3e9d4be0310b2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\admin\\templates\\bootstrap\\tpl_inc\\sortcontrols.tpl',
      1 => 1612177964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6091204c9dfcc2_03482404 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'sortControls' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\shop\\admin\\templates_c\\6b8d0a5d70e3bc06dcf4a62990a3e9d4be0310b2_0.file.sortcontrols.tpl.php',
    'uid' => '6b8d0a5d70e3bc06dcf4a62990a3e9d4be0310b2',
    'call_name' => 'smarty_template_function_sortControls_2172738986091204c92c040_51776696',
  ),
));
echo '<script'; ?>
>
    function pagiResort (pagiId, nSortBy, nSortDir)
    {
        $('#' + pagiId + '_nSortByDir').val(nSortBy * 2 + nSortDir);
        $('form#' + pagiId).submit();
        return false;
    }
<?php echo '</script'; ?>
>


<?php }
/* smarty_template_function_sortControls_2172738986091204c92c040_51776696 */
if (!function_exists('smarty_template_function_sortControls_2172738986091204c92c040_51776696')) {
function smarty_template_function_sortControls_2172738986091204c92c040_51776696(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    <?php if ($_smarty_tpl->tpl_vars['pagination']->value->getSortBy() !== $_smarty_tpl->tpl_vars['nSortBy']->value) {?>
        <a href="#" onclick="return pagiResort('<?php echo $_smarty_tpl->tpl_vars['pagination']->value->getId();?>
', <?php echo $_smarty_tpl->tpl_vars['nSortBy']->value;?>
, 0);"><i class="fa fa-unsorted"></i></a>
    <?php } elseif ($_smarty_tpl->tpl_vars['pagination']->value->getSortDirSpecifier() === 'DESC') {?>
        <a href="#" onclick="return pagiResort('<?php echo $_smarty_tpl->tpl_vars['pagination']->value->getId();?>
', <?php echo $_smarty_tpl->tpl_vars['nSortBy']->value;?>
, 0);"><i class="fa fa-sort-desc"></i></a>
    <?php } elseif ($_smarty_tpl->tpl_vars['pagination']->value->getSortDirSpecifier() === 'ASC') {?>
        <a href="#" onclick="return pagiResort('<?php echo $_smarty_tpl->tpl_vars['pagination']->value->getId();?>
', <?php echo $_smarty_tpl->tpl_vars['nSortBy']->value;?>
, 1);"><i class="fa fa-sort-asc"></i></a>
    <?php }
}}
/*/ smarty_template_function_sortControls_2172738986091204c92c040_51776696 */
}
