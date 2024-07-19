<?php
/* Smarty version 4.3.4, created on 2024-07-18 05:28:14
  from '/home/vol15_8/infinityfree.com/if0_36915431/htdocs/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6698e02ee57ec9_66385715',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb4d7532e3efaa6f92a6d5fa1e1b7c0f81ea66b5' => 
    array (
      0 => '/home/vol15_8/infinityfree.com/if0_36915431/htdocs/themes/classic/templates/_partials/helpers.tpl',
      1 => 1716302598,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6698e02ee57ec9_66385715 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/home/vol15_8/infinityfree.com/if0_36915431/htdocs/var/cache/dev/smarty/compile/classiclayouts_layout_full_width_tpl/eb/4d/75/eb4d7532e3efaa6f92a6d5fa1e1b7c0f81ea66b5_2.file.helpers.tpl.php',
    'uid' => 'eb4d7532e3efaa6f92a6d5fa1e1b7c0f81ea66b5',
    'call_name' => 'smarty_template_function_renderLogo_15524545306698e02ee4fbd0_68234370',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_15524545306698e02ee4fbd0_68234370 */
if (!function_exists('smarty_template_function_renderLogo_15524545306698e02ee4fbd0_68234370')) {
function smarty_template_function_renderLogo_15524545306698e02ee4fbd0_68234370(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_15524545306698e02ee4fbd0_68234370 */
}
