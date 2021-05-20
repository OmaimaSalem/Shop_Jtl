<?php
/* Smarty version 3.1.38, created on 2021-05-04 12:22:59
  from 'C:\xampp\htdocs\shop\admin\templates\bootstrap\favs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_609120830c8ca9_79804625',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c97dbc42f410001c53b770c279b891b78422f961' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\admin\\templates\\bootstrap\\favs.tpl',
      1 => 1612177964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/header.tpl' => 1,
    'file:tpl_inc/seite_header.tpl' => 1,
    'file:tpl_inc/footer.tpl' => 1,
  ),
),false)) {
function content_609120830c8ca9_79804625 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'fav_item' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\shop\\admin\\templates_c\\c97dbc42f410001c53b770c279b891b78422f961_0.file.favs.tpl.php',
    'uid' => 'c97dbc42f410001c53b770c279b891b78422f961',
    'call_name' => 'smarty_template_function_fav_item_56519662660912082e10680_80745684',
  ),
));
$_smarty_tpl->_subTemplateRender('file:tpl_inc/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:tpl_inc/seite_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cTitel'=>__('favorites'),'cBeschreibung'=>__('manageFavorites')), 0, false);
?>

<?php echo '<script'; ?>
 type="text/javascript">
    function addItem() {
        var last = $("#favs tbody tr:last-child");
        var title = last.find('input[name="title[]"]').val();
        var url = last.find('input[name="url[]"]').val();
        if (title.length > 0 || url.length > 0) {
            var next = last.clone();
            next.find('input').val('');
            $("#favs tbody").append(next);
        }
    }

    $(function() {
        $("#favs tbody").sortable({
            placeholder: "ui-state-highlight"
        });

        $("#favs tbody").disableSelection();

        $("body").on('click', "#favs tbody button.btn-remove", function() {
            var cnt = $("#favs tbody tr").length;
            if (cnt > 1) {
                $(this)
                    .closest('tr')
                    .remove();
            }
            else {
                $(this)
                    .closest('tr')
                    .find('input')
                    .val('');
            }
        });

        $("body").on('change keyup', "#favs tbody input", function() {
            addItem();
        });

        addItem();
    });
<?php echo '</script'; ?>
>



<div id="content">
    <form method="post">
        <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

        <div class="card">
            <div class="table-responsive card-body">
                <table class="list table table-hover" id="favs">
                    <thead>
                    <tr>
                        <th class="text-left"><?php echo __('title');?>
</th>
                        <th class="text-left"><?php echo __('link');?>
</th>
                        <th width="30"></th>
                        <th width="50"></th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['favorites']->value, 'favorite');
$_smarty_tpl->tpl_vars['favorite']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['favorite']->value) {
$_smarty_tpl->tpl_vars['favorite']->do_else = false;
?>
                            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'fav_item', array('title'=>$_smarty_tpl->tpl_vars['favorite']->value->cTitel,'url'=>$_smarty_tpl->tpl_vars['favorite']->value->cUrl), true);?>

                        <?php
}
if ($_smarty_tpl->tpl_vars['favorite']->do_else) {
?>
                            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'fav_item', array('title'=>'','url'=>''), true);?>

                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
            </div>
            <div class="card-footer save-wrapper">
                <div class="row">
                    <div class="ml-auto col-sm-6 col-xl-auto">
                        <button type="submit" name="action" value="save" class="btn btn-primary btn-block">
                        <?php echo __('saveWithIcon');?>

                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* smarty_template_function_fav_item_56519662660912082e10680_80745684 */
if (!function_exists('smarty_template_function_fav_item_56519662660912082e10680_80745684')) {
function smarty_template_function_fav_item_56519662660912082e10680_80745684(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('title'=>'','url'=>''), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    <tr class="text-vcenter">
        <td class="text-left">
            <input class="form-control" type="text" name="title[]" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
">
        </td>
        <td class="text-left">
            <input class="form-control" type="text" name="url[]" value="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">
        </td>
        <th class="text-muted text-center" scope="row">
            <i class="fal fa-arrows-v" aria-hidden="true"></i>
        </th>
        <td class="text-center">
            <button type="button" class="btn btn-link btn-remove" data-toggle="tooltip" title="<?php echo __('delete');?>
">
                <span class="icon-hover">
                    <span class="fal fa-trash-alt"></span>
                    <span class="fas fa-trash-alt"></span>
                </span>
            </button>
        </td>
    </tr>
<?php
}}
/*/ smarty_template_function_fav_item_56519662660912082e10680_80745684 */
}
