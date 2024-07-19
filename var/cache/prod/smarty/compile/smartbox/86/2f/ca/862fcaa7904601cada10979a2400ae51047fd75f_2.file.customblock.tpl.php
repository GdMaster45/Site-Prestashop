<?php
/* Smarty version 4.3.4, created on 2024-07-18 20:32:38
  from '/home/vol15_8/infinityfree.com/if0_36915431/htdocs/modules/mpm_testimonials/views/templates/hook/customblock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6699b4264a7ed1_01180854',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '862fcaa7904601cada10979a2400ae51047fd75f' => 
    array (
      0 => '/home/vol15_8/infinityfree.com/if0_36915431/htdocs/modules/mpm_testimonials/views/templates/hook/customblock.tpl',
      1 => 1721307466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6699b4264a7ed1_01180854 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['items']->value)) && $_smarty_tpl->tpl_vars['items']->value) {?>
    <section class="testimonials">

        <div class="header_featured_slider"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Testimonials','mod'=>'mpm_testimonials'),$_smarty_tpl ) );?>
</span></div>

        <ul class="testimonials-list">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <li class="testimonials-list-item">
                    <div class="testimonials-item-img"><?php if ($_smarty_tpl->tpl_vars['item']->value['image']) {?><img alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['title'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['image'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php }?></div>
                    <div class="testimonials-item-content">
                        <div class="testimonials-item-title"><i class="material-icons">done_all</i><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['title'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</div>
                        <div class="testimonials-item-description"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['description'],'htmlall','UTF-8' ));?>
</div>
                    </div>
                </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </section>
<?php }
}
}
