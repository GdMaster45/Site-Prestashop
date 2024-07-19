<?php
/* Smarty version 4.3.4, created on 2024-07-18 20:32:38
  from '/home/vol15_8/infinityfree.com/if0_36915431/htdocs/modules/mpm_footer/views/templates/hook/footer_block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6699b4264cfc43_49830264',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35b4e25e3c5fcd6e8c01eaa038a56115ff193227' => 
    array (
      0 => '/home/vol15_8/infinityfree.com/if0_36915431/htdocs/modules/mpm_footer/views/templates/hook/footer_block.tpl',
      1 => 1721307465,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6699b4264cfc43_49830264 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="displayFooterBefore">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>

</div>
<div class="footer-container">
    <div class="container">

        <div class="row">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

        </div>
        <div class="row">

        </div>

    </div>

</div>
<div class="displayFooterAfter">
    <div class="container">

        <div class="row">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>

        </div>

    </div>

</div>

<style>
    <?php if ((isset($_smarty_tpl->tpl_vars['image']->value)) && $_smarty_tpl->tpl_vars['image']->value) {?>
    .footer-container{
        background: url("<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['image']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
");
    }
    <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['background_color']->value)) && $_smarty_tpl->tpl_vars['background_color']->value) {?>
        .footer-container{
            background-color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['background_color']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
            color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
        }
    <?php }?>

    .footer-container h1,
    .footer-container h2,
    .footer-container h3,
    .footer-container h4,
    .footer-container h5,
    .footer-container div,
    .footer-container p,
    .footer-container li a,
    .footer-container a{

    <?php if ((isset($_smarty_tpl->tpl_vars['color']->value)) && $_smarty_tpl->tpl_vars['color']->value) {?>
        color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 !important;
     <?php } else { ?>
        color: #ffffff !important;
    <?php }?>
    }
    .footer-container li a:hover{
        <?php if ((isset($_smarty_tpl->tpl_vars['hover']->value)) && $_smarty_tpl->tpl_vars['hover']->value) {?>
            color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['hover']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 !important;
        <?php } else { ?>
            color: #3498db !important;
        <?php }?>
    }

    .container-footer-info{
        <?php if ((isset($_smarty_tpl->tpl_vars['color']->value)) && $_smarty_tpl->tpl_vars['color']->value) {?>
          border-color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 !important;
        <?php }?>
    }


</style><?php }
}
