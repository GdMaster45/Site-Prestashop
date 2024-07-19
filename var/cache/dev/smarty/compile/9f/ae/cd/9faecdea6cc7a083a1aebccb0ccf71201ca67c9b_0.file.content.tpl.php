<?php
/* Smarty version 4.3.4, created on 2024-07-18 05:26:53
  from '/home/vol15_8/infinityfree.com/if0_36915431/htdocs/admin45/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6698dfddeb16a0_65016271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9faecdea6cc7a083a1aebccb0ccf71201ca67c9b' => 
    array (
      0 => '/home/vol15_8/infinityfree.com/if0_36915431/htdocs/admin45/themes/default/template/content.tpl',
      1 => 1716302594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6698dfddeb16a0_65016271 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
