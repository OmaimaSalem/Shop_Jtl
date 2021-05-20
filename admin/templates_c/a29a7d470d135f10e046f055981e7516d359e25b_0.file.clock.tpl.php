<?php
/* Smarty version 3.1.38, created on 2021-05-18 13:22:53
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\admin\templates\bootstrap\tpl_inc\widgets\clock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a3a38df31bf2_53094198',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a29a7d470d135f10e046f055981e7516d359e25b' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\admin\\templates\\bootstrap\\tpl_inc\\widgets\\clock.tpl',
      1 => 1612177964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a3a38df31bf2_53094198 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templateBaseURL']->value;?>
js/jquery.jclock.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    $(function ($) {
        $('#clock_time').jclock({
            format: '%H:%M:%S',
        });
    });
    
        $(document).ready(function(){
            var dateLong = new Date();
            var dateOptions = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
            $('#clock_date').html(dateLong.toLocaleDateString('<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
', dateOptions));
        });
    
<?php echo '</script'; ?>
>
<div class="widget-custom-data nospacing">
    <div class="clock">
        <p id="clock_time"></p>
        <p id="clock_date"></p>
    </div>
</div>
<?php }
}
