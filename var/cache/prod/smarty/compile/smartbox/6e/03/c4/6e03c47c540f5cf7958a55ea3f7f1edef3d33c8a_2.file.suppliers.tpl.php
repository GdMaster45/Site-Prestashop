<?php
/* Smarty version 4.3.4, created on 2024-07-18 20:32:38
  from '/home/vol15_8/infinityfree.com/if0_36915431/htdocs/modules/mpm_suppliers/views/templates/hook/suppliers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6699b42648f250_51728083',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e03c47c540f5cf7958a55ea3f7f1edef3d33c8a' => 
    array (
      0 => '/home/vol15_8/infinityfree.com/if0_36915431/htdocs/modules/mpm_suppliers/views/templates/hook/suppliers.tpl',
      1 => 1721307466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6699b42648f250_51728083 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['suppliers']->value) {?>
    <section class="container_supplier">

        <div class="container">
            <div class="row">
                <?php if ((isset($_smarty_tpl->tpl_vars['title_block']->value)) && $_smarty_tpl->tpl_vars['title_block']->value) {?>
                    <div class="title_supplier_block">
                        <div class="title"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Suppliers','mod'=>'mpm_suppliers'),$_smarty_tpl ) );?>
</span></div>
                    </div>
                <?php }?>
                <div class="supplier-block">
                    <ul class="supplier-list-homepage supplier-slider" data-count="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( count($_smarty_tpl->tpl_vars['suppliers']->value),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['suppliers']->value, 'supplier', false, 'key');
$_smarty_tpl->tpl_vars['supplier']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['supplier']->value) {
$_smarty_tpl->tpl_vars['supplier']->do_else = false;
?>
                            <li class="supplier-item">
                                <a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['supplier']->value['link'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title=" ">
                            <span class="img_block_supplier">
                                <img src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['supplier']->value['image'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['supplier']->value['name'],40,'...',true )),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                            </span>
                                    <?php if ($_smarty_tpl->tpl_vars['title']->value) {?>
                                        <span class="title"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['supplier']->value['name'],40,'...',true )),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
                                    <?php }?>
                                </a>
                            </li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
<?php }
}
}
