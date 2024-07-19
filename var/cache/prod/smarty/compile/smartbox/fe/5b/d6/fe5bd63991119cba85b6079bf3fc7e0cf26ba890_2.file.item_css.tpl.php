<?php
/* Smarty version 4.3.4, created on 2024-07-18 20:32:37
  from '/home/vol15_8/infinityfree.com/if0_36915431/htdocs/modules/mpm_topmenu/views/templates/front/item_css.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6699b4258b4f85_46717166',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe5bd63991119cba85b6079bf3fc7e0cf26ba890' => 
    array (
      0 => '/home/vol15_8/infinityfree.com/if0_36915431/htdocs/modules/mpm_topmenu/views/templates/front/item_css.tpl',
      1 => 1721307467,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6699b4258b4f85_46717166 (Smarty_Internal_Template $_smarty_tpl) {
?><style type="text/css">

    .item_menu_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['id_topmenu'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 a.item_menu_link{

        <?php if ($_smarty_tpl->tpl_vars['value']->value['background_color_tab']) {?>
            background-color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['background_color_tab'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
        <?php } else { ?>
            background-color: transparent;
        <?php }?>


        color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['text_color_tab'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 !important;
    }
    .item_menu_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['id_topmenu'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
:hover a.item_menu_link{
        color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['text_color_hover_tab'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 !important;


            <?php if ($_smarty_tpl->tpl_vars['value']->value['background_color_hover_tab']) {?>
                background-color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['background_color_hover_tab'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
            <?php } else { ?>
                background-color: transparent;
            <?php }?>

    }

    .item_menu_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['id_topmenu'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 .subcat_menu{
        background-color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['background_color'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
        border: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['border_size'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
px solid <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['border_color'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;

        <?php if ($_smarty_tpl->tpl_vars['value']->value['width'] > 0) {?>
            width: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['width'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
px;
        <?php } else { ?>
            width: 100%;
        <?php }?>

        min-height: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['min_height'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
px;
    }
    .item_menu_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['id_topmenu'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 .categories-block-arrows i{
        color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['text_color_tab'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 !important;
    }

</style><?php }
}
