<?php
/* Smarty version 4.3.4, created on 2024-07-18 20:32:37
  from '/home/vol15_8/infinityfree.com/if0_36915431/htdocs/modules/mpm_topmenu/views/templates/front/menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6699b4258d7749_20362729',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '227437a8461d2aaf108a4b3a57e7873c31b5a61e' => 
    array (
      0 => '/home/vol15_8/infinityfree.com/if0_36915431/htdocs/modules/mpm_topmenu/views/templates/front/menu.tpl',
      1 => 1721307467,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6699b4258d7749_20362729 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['menu_items']->value)) && $_smarty_tpl->tpl_vars['menu_items']->value) {?>
    <div class="topMenuBlock desktop">
        <ul class="topmenu">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu_items']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                <li data-id="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['id_topmenu'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="item_menu item_menu_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['id_topmenu'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['value']->value['width'] > 0) {?> narrow_item<?php }?>">
                                        <a class="item_menu_link" <?php if ((isset($_smarty_tpl->tpl_vars['value']->value['open_new_window'])) && $_smarty_tpl->tpl_vars['value']->value['open_new_window']) {?> target="_blank" <?php }?>  <?php if ((isset($_smarty_tpl->tpl_vars['value']->value['link'])) && $_smarty_tpl->tpl_vars['value']->value['link']) {?> href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['link'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" <?php }?>><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['title'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a>
                    <?php if ($_smarty_tpl->tpl_vars['value']->value['columns'] || $_smarty_tpl->tpl_vars['value']->value['description_before'] || $_smarty_tpl->tpl_vars['value']->value['description_after']) {?>
                        <div class="subcat_menu subcat_menu_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['id_topmenu'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                            <?php if ((isset($_smarty_tpl->tpl_vars['value']->value['description_before'])) && $_smarty_tpl->tpl_vars['value']->value['description_before']) {?> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['description_before'],'htmlall','UTF-8' ));?>
 <?php }?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['value']->value['columns'])) && $_smarty_tpl->tpl_vars['value']->value['columns']) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['columns'],'htmlall','UTF-8' ));?>
 <?php }?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['value']->value['description_after'])) && $_smarty_tpl->tpl_vars['value']->value['description_after']) {?> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['description_after'],'htmlall','UTF-8' ));?>
 <?php }?>
                        </div>

                        <div class="categories-block-arrows">
                            <span class="column-arrows-add active"  onclick=""><i class="material-icons">add</i></span>
                            <span class="column-arrows-remove"  onclick=""><i class="material-icons">remove</i></span>
                        </div>

                    <?php }?>
                </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
        <div onclick="" class="topmenu_mobile"><i class="material-icons">menu</i></div>
    </div>
<?php }
}
}
