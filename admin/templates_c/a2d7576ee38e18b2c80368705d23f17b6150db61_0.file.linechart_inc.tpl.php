<?php
/* Smarty version 3.1.38, created on 2021-05-18 13:22:46
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\admin\templates\bootstrap\tpl_inc\linechart_inc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a3a386db6362_59755647',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2d7576ee38e18b2c80368705d23f17b6150db61' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\admin\\templates\\bootstrap\\tpl_inc\\linechart_inc.tpl',
      1 => 1612177964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a3a386db6362_59755647 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['linechart']->value->getActive()) {?>
    <div id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" style="background: <?php echo (($tmp = $_smarty_tpl->tpl_vars['chartbg']->value ?? null)===null||$tmp==='' ? '#fff' : $tmp);?>
; width: <?php echo $_smarty_tpl->tpl_vars['width']->value;?>
; height: <?php echo $_smarty_tpl->tpl_vars['height']->value;?>
; padding: <?php echo (($tmp = $_smarty_tpl->tpl_vars['chartpad']->value ?? null)===null||$tmp==='' ? '0' : $tmp);?>
;"></div>
    
    <?php echo '<script'; ?>
 type="text/javascript">
        var chart;

        $(document).ready(function() {
            chart = new Highcharts.Chart({
                chart: {
                    renderTo: '<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
',
                    defaultSeriesType: 'area',
                    marginRight: 15,
                    marginBottom: 50,
                    spacingBottom: 25,
                    borderColor: '#CCC',
                    borderWidth: 0
                },
                title: {
                    style: {
                        color: '#435a6b'
                    },
                    text: '<?php echo $_smarty_tpl->tpl_vars['headline']->value;?>
',
                    align: 'left'
                },
                plotOptions: {
                    series: {
                        cursor: 'pointer',
                        marker: {
                            fillColor: '#FFFFFF',
                            lineWidth: 2,
                            lineColor: null
                        },
                        <?php if ($_smarty_tpl->tpl_vars['href']->value) {?>
                        point: {
                            events: {
                                click: function() {
                                    location.href = this.options.url;
                                }
                            }
                        }
                        <?php }?>
                    }
                },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'top',
                    x: -10,
                    y: 100,
                    borderWidth: 0,
                    enabled: <?php if ($_smarty_tpl->tpl_vars['legend']->value) {?>true<?php } else { ?>false<?php }?>,
                },
                xAxis: <?php echo $_smarty_tpl->tpl_vars['linechart']->value->getAxisJSON();?>
,
                yAxis: {
                    title: {
                        style: {
                            color: '#5cbcf6'
                        },
                        text: '<?php echo $_smarty_tpl->tpl_vars['ylabel']->value;?>
'
                    },
                    labels: {
                        style: {
                            color: '#5cbcf6'
                        }
                    },
                    plotLines: [{
                        value: 0,
                        width: 2,
                        color: '#ddd'
                    }],
                    <?php if ((isset($_smarty_tpl->tpl_vars['ymin']->value)) && call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'count_characters' ][ 0 ], array( $_smarty_tpl->tpl_vars['ymin']->value )) > 0) {?>
                        min: <?php echo $_smarty_tpl->tpl_vars['ymin']->value;?>

                    <?php }?>
                },
                series: <?php echo $_smarty_tpl->tpl_vars['linechart']->value->getSeriesJSON();?>

            });
        });
    <?php echo '</script'; ?>
>
<?php } else { ?>
    <div class="alert alert-info" role="alert"><?php echo __('statisticNoData');?>
</div>
<?php }
}
}
