<?php
/* Smarty version 4.3.4, created on 2024-07-18 20:32:38
  from '/home/vol15_8/infinityfree.com/if0_36915431/htdocs/modules/mpm_brands/views/templates/hook/brands.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6699b426239c16_47391445',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbf922f1caf43503b09e6706aaa80d08793d5536' => 
    array (
      0 => '/home/vol15_8/infinityfree.com/if0_36915431/htdocs/modules/mpm_brands/views/templates/hook/brands.tpl',
      1 => 1721307465,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6699b426239c16_47391445 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['manufacturers']->value) {?>
    <section class="container_manufacturer">

        <div class="container">
            <div class="row">
                <?php if ((isset($_smarty_tpl->tpl_vars['title_block']->value)) && $_smarty_tpl->tpl_vars['title_block']->value) {?>
                    <div class="title_manufacturer_block">
                        <div class="title"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Brands','mod'=>'mpm_brands'),$_smarty_tpl ) );?>
</span></div>
                    </div>
                <?php }?>
                <div class="manufacturer-block">
                    <ul class="manufacturer-list-homepage manufacturer-slider" data-count="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( count($_smarty_tpl->tpl_vars['manufacturers']->value),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['manufacturers']->value, 'manufacturer', false, 'key');
$_smarty_tpl->tpl_vars['manufacturer']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['manufacturer']->value) {
$_smarty_tpl->tpl_vars['manufacturer']->do_else = false;
?>
                            <li class="manufacturer-item">
                                <a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['manufacturer']->value['link'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title=" ">
                            <span class="img_block_manufacturer">
                                <img src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['manufacturer']->value['image'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['manufacturer']->value['name'],40,'...',true )),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                            </span>
                                    <?php if ($_smarty_tpl->tpl_vars['title']->value) {?>
                                        <span class="title"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['manufacturer']->value['name'],40,'...',true )),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
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
