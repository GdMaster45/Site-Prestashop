<?php
/* Smarty version 4.3.4, created on 2024-07-18 22:10:45
  from '/home/vol15_8/infinityfree.com/if0_36915431/htdocs/modules/mpm_brands/views/templates/hook/blockmanufacturer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6699cb25427c99_80621101',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0618d5233e4da5fb037145ee81afe28280491e08' => 
    array (
      0 => '/home/vol15_8/infinityfree.com/if0_36915431/htdocs/modules/mpm_brands/views/templates/hook/blockmanufacturer.tpl',
      1 => 1721307465,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6699cb25427c99_80621101 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="manufacturers_block_left" class="block blockmanufacturer block-left-column">

	<div onclick="" class="title_block title-block-left-column"> <a class="title_left_column" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Brands','mod'=>'mpm_brands'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Brands','mod'=>'mpm_brands'),$_smarty_tpl ) );?>
</a> </div>
	<div class="left-column-arrows">
		<span class="column-arrows-add active"  onclick=""><i class="material-icons">add</i></span>
		<span class="column-arrows-remove"  onclick=""><i class="material-icons">remove</i></span>
	</div>
	<div class="block_content list-block content-block-left-column">
		<?php if ($_smarty_tpl->tpl_vars['manufacturers']->value) {?>
			<ul class="bullet ">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['manufacturers']->value, 'manufacturer');
$_smarty_tpl->tpl_vars['manufacturer']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['manufacturer']->value) {
$_smarty_tpl->tpl_vars['manufacturer']->do_else = false;
?>
					<li class="manufacturer_item">
						<a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['manufacturer']->value['link'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'More about %s','sprintf'=>array(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['manufacturer']->value['name'],'htmlall','UTF-8' ))),'mod'=>'mpm_brands'),$_smarty_tpl ) );?>
">
							<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['manufacturer']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

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
