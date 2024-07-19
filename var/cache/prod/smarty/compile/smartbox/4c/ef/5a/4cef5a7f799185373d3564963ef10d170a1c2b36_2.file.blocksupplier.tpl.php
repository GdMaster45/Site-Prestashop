<?php
/* Smarty version 4.3.4, created on 2024-07-18 22:10:45
  from '/home/vol15_8/infinityfree.com/if0_36915431/htdocs/modules/mpm_suppliers/views/templates/hook/blocksupplier.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6699cb25448305_22319529',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4cef5a7f799185373d3564963ef10d170a1c2b36' => 
    array (
      0 => '/home/vol15_8/infinityfree.com/if0_36915431/htdocs/modules/mpm_suppliers/views/templates/hook/blocksupplier.tpl',
      1 => 1721307466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6699cb25448305_22319529 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="suppliers_block_left" class="block blocksupplier block-left-column">
	<div onclick="" class="title_block title-block-left-column">
		<a class="title_left_column" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Suppliers','mod'=>'mpm_suppliers'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Suppliers','mod'=>'mpm_suppliers'),$_smarty_tpl ) );?>
</a>
	</div>
	<div class="left-column-arrows">
		<span class="column-arrows-add active"  onclick=""><i class="material-icons">add</i></span>
		<span class="column-arrows-remove"  onclick=""><i class="material-icons">remove</i></span>
	</div>
	<div class="block_content list-block content-block-left-column">
	<?php if ($_smarty_tpl->tpl_vars['suppliers']->value) {?>
		<ul class="bullet">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['suppliers']->value, 'supplier');
$_smarty_tpl->tpl_vars['supplier']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['supplier']->value) {
$_smarty_tpl->tpl_vars['supplier']->do_else = false;
?>
				<li class="item_supplie">
					<a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['supplier']->value['link'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'More about','mod'=>'mpm_suppliers'),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['supplier']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
						<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['supplier']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

					</a>
				</li>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
	<?php }?>
	</div>
</div>

<?php }
}
