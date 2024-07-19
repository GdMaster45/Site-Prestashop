<?php
/* Smarty version 4.3.4, created on 2024-07-18 20:32:37
  from '/home/vol15_8/infinityfree.com/if0_36915431/htdocs/modules/mpm_homeblocks/views/templates/hook/banners.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6699b425e3c354_55078922',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a08f572b8a842f69d9591e5dba69cec0cb51707' => 
    array (
      0 => '/home/vol15_8/infinityfree.com/if0_36915431/htdocs/modules/mpm_homeblocks/views/templates/hook/banners.tpl',
      1 => 1721307465,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6699b425e3c354_55078922 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="homeBanner">
    <ul class="homeBannerContent" >
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['settings']->value, 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
            <li data-position="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['position_description'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="item_block_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['id_homeblocks'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" style=' width: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['width'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
%;'>
                <div class="item_block_img">
                    <a <?php if ((isset($_smarty_tpl->tpl_vars['value']->value['link'])) && $_smarty_tpl->tpl_vars['value']->value['link']) {?>href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['link'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" <?php }?>><img alt=" " src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['image'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"></a>
                </div>
                <div class="item_block_content">
                    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['description'],'htmlall','UTF-8' ));?>

                </div>
            </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>

</section><?php }
}
