<?php
/* Smarty version 3.1.38, created on 2021-05-18 13:22:56
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\admin\templates\bootstrap\tpl_inc\widgets\serverinfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a3a39088d6d0_71594095',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd58f5b7035d19802bd9e207f499a26af1d04286' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\admin\\templates\\bootstrap\\tpl_inc\\widgets\\serverinfo.tpl',
      1 => 1612177964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a3a39088d6d0_71594095 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="widget-custom-data table-responsive">
    <table class="table table-condensed table-hover table-blank">
        <tbody>
            <tr>
                <td><?php echo __('domain');?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['cShopHost']->value;?>
</td>
                <td></td>
            </tr>
            <tr>
                <td><?php echo __('host');?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['serverHTTPHost']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['serverAddress']->value;?>
)</td>
                <td></td>
            </tr>
            <tr>
                <td><?php echo __('system');?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['phpOS']->value;?>
</td>
                <td></td>
            </tr>
            <tr>
                <td><?php echo __('phpVersion');?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['phpVersion']->value;?>
</td>
                <td></td>
            </tr>
            <?php if ((isset($_smarty_tpl->tpl_vars['mySQLStats']->value)) && $_smarty_tpl->tpl_vars['mySQLStats']->value !== '-') {?>
                <tr>
                    <td class="nowrap"><?php echo __('mysqlStatistic');?>
</td>
                    <td class="small"><?php echo $_smarty_tpl->tpl_vars['mySQLStats']->value;?>
</td>
                    <td></td>
                </tr>
            <?php }?>
            <tr>
                <td class="nowrap"><?php echo __('mysqlVersion');?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['mySQLVersion']->value;?>
</td>
                <td class="text-right">
                    <?php if ($_smarty_tpl->tpl_vars['mySQLVersion']->value < 5) {?>
                        <a class="label label-warning" href="status.php" title="<?php echo __('moreInfo');?>
">
                            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i><span class="sr-only"><?php echo __('warning');?>
</span>
                        </a>
                    <?php }?>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<?php }
}
