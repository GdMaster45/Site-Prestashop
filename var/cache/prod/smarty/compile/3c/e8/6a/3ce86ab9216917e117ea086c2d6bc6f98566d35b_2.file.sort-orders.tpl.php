<?php
/* Smarty version 4.3.4, created on 2024-07-18 22:10:51
  from '/home/vol15_8/infinityfree.com/if0_36915431/htdocs/themes/smartbox/templates/catalog/_partials/sort-orders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6699cb2b57ad78_98422189',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ce86ab9216917e117ea086c2d6bc6f98566d35b' => 
    array (
      0 => '/home/vol15_8/infinityfree.com/if0_36915431/htdocs/themes/smartbox/templates/catalog/_partials/sort-orders.tpl',
      1 => 1721307468,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6699cb2b57ad78_98422189 (Smarty_Internal_Template $_smarty_tpl) {
?><span class="col-sm-3 col-md-3 hidden-sm-down sort-by"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sort by:','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</span>
<div class="<?php if (!empty($_smarty_tpl->tpl_vars['listing']->value['rendered_facets'])) {?>col-sm-9 col-xs-8<?php } else { ?>col-sm-12 col-xs-12<?php }?> col-md-9 products-sort-order dropdown">
  <a class="select-title" rel="nofollow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <?php if ((isset($_smarty_tpl->tpl_vars['listing']->value['sort_selected']))) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['listing']->value['sort_selected'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );
}?>
    <i class="material-icons pull-xs-right">&#xE5C5;</i>
  </a>
  <div class="dropdown-menu">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listing']->value['sort_orders'], 'sort_order');
$_smarty_tpl->tpl_vars['sort_order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sort_order']->value) {
$_smarty_tpl->tpl_vars['sort_order']->do_else = false;
?>
      <a
        rel="nofollow"
        href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sort_order']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
        class="select-list <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('current'=>$_smarty_tpl->tpl_vars['sort_order']->value['current'],'js-search-link'=>true) )), ENT_QUOTES, 'UTF-8');?>
"
      >
        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sort_order']->value['label'], ENT_QUOTES, 'UTF-8');?>

      </a>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
</div>
<?php }
}
