<?php
/* Smarty version 3.1.38, created on 2021-05-19 15:00:13
  from 'C:\Users\omayma\Desktop\xampp\htdocs\shop\templates\NOVA\productdetails\rating.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a50bdd3a80b4_76334847',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f743bbdb4fcfa8f72ca24922951e6e748c58d8c' => 
    array (
      0 => 'C:\\Users\\omayma\\Desktop\\xampp\\htdocs\\shop\\templates\\NOVA\\productdetails\\rating.tpl',
      1 => 1612177967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a50bdd3a80b4_76334847 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_181123534760a50bdd3869a6_60754354', 'productdetails-rating');
?>

<?php }
/* {block 'productdetails-rating-main'} */
class Block_88107345160a50bdd38e499_35556870 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ((isset($_smarty_tpl->tpl_vars['link']->value))) {?>
            <a class="rating" href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
#tab-votes" title="<?php echo $_smarty_tpl->tpl_vars['ratingLabelText']->value;?>
: <?php echo $_smarty_tpl->tpl_vars['stars']->value;?>
/5" aria-label=<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'Votes'),$_smarty_tpl ) );?>
>
        <?php } else { ?>
            <span class="rating" title="<?php echo $_smarty_tpl->tpl_vars['ratingLabelText']->value;?>
: <?php echo $_smarty_tpl->tpl_vars['stars']->value;?>
/5">
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['stars']->value >= 5) {?><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><?php } elseif ($_smarty_tpl->tpl_vars['stars']->value >= 4) {?><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><?php if ($_smarty_tpl->tpl_vars['stars']->value > 4) {?><i class="fas fa-star-half-alt"></i><?php } else { ?><i class="far fa-star"></i><?php }
} elseif ($_smarty_tpl->tpl_vars['stars']->value >= 3) {?><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><?php if ($_smarty_tpl->tpl_vars['stars']->value > 3) {?><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><?php } else { ?><i class="far fa-star"></i><i class="far fa-star"></i><?php }
} elseif ($_smarty_tpl->tpl_vars['stars']->value >= 2) {?><i class="fas fa-star"></i><i class="fas fa-star"></i><?php if ($_smarty_tpl->tpl_vars['stars']->value > 2) {?><i class="fas fa-star-half-alt"></i><i class="far fa-star-"></i><i class="far fa-star"></i><?php } else { ?><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><?php }
} elseif ($_smarty_tpl->tpl_vars['stars']->value >= 1) {?><i class="fas fa-star"></i><?php if ($_smarty_tpl->tpl_vars['stars']->value > 1) {?><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><?php } else { ?><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><?php }
} elseif ($_smarty_tpl->tpl_vars['stars']->value > 0) {?><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><?php }?>

        <?php if ((isset($_smarty_tpl->tpl_vars['link']->value))) {?>
            </a>
        <?php } else { ?>
            </span>
        <?php }?>
        <?php
}
}
/* {/block 'productdetails-rating-main'} */
/* {block 'productdetails-rating'} */
class Block_181123534760a50bdd3869a6_60754354 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'productdetails-rating' => 
  array (
    0 => 'Block_181123534760a50bdd3869a6_60754354',
  ),
  'productdetails-rating-main' => 
  array (
    0 => 'Block_88107345160a50bdd38e499_35556870',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['stars']->value > 0) {?>
        <?php if ((isset($_smarty_tpl->tpl_vars['total']->value)) && $_smarty_tpl->tpl_vars['total']->value > 1) {?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'averageProductRating','section'=>'product rating','assign'=>'ratingLabelText'),$_smarty_tpl ) );?>

        <?php } else { ?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'productRating','section'=>'product rating','assign'=>'ratingLabelText'),$_smarty_tpl ) );?>

        <?php }?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_88107345160a50bdd38e499_35556870', 'productdetails-rating-main', $this->tplIndex);
?>

    <?php }
}
}
/* {/block 'productdetails-rating'} */
}
