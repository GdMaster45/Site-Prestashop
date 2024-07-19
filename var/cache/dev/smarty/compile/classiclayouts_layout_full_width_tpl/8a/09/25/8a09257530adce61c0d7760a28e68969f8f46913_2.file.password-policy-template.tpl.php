<?php
/* Smarty version 4.3.4, created on 2024-07-18 05:28:15
  from '/home/vol15_8/infinityfree.com/if0_36915431/htdocs/themes/classic/templates/_partials/password-policy-template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6698e02f232d76_87761186',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a09257530adce61c0d7760a28e68969f8f46913' => 
    array (
      0 => '/home/vol15_8/infinityfree.com/if0_36915431/htdocs/themes/classic/templates/_partials/password-policy-template.tpl',
      1 => 1716302598,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6698e02f232d76_87761186 (Smarty_Internal_Template $_smarty_tpl) {
?>

<template id="password-feedback">
  <div
    class="password-strength-feedback mt-1"
    style="display: none;"
  >
    <div class="progress-container">
      <div class="progress mb-1">
        <div class="progress-bar" role="progressbar" value="50" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
    </div>
    <?php echo '<script'; ?>
 type="text/javascript" class="js-hint-password">
      <?php if (!empty($_smarty_tpl->tpl_vars['page']->value['password-policy']['feedbacks'])) {?>
        <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['password-policy']['feedbacks'] ));?>

      <?php }?>
    <?php echo '</script'; ?>
>

    <div class="password-strength-text"></div>
    <div class="password-requirements">
      <p class="password-requirements-length" data-translation="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter a password between %s and %s characters','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
">
        <i class="material-icons">check_circle</i>
        <span></span>
      </p>
      <p class="password-requirements-score" data-translation="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The minimum score must be: %s','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
">
        <i class="material-icons">check_circle</i>
        <span></span>
      </p>
    </div>
  </div>
</template>
<?php }
}
