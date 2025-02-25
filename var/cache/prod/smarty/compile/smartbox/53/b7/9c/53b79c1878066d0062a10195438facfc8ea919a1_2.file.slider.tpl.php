<?php
/* Smarty version 4.3.4, created on 2024-07-18 20:32:37
  from '/home/vol15_8/infinityfree.com/if0_36915431/htdocs/modules/mpm_homeslider/views/templates/hook/slider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6699b42590d304_60289170',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53b79c1878066d0062a10195438facfc8ea919a1' => 
    array (
      0 => '/home/vol15_8/infinityfree.com/if0_36915431/htdocs/modules/mpm_homeslider/views/templates/hook/slider.tpl',
      1 => 1721307466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6699b42590d304_60289170 (Smarty_Internal_Template $_smarty_tpl) {
if (count($_smarty_tpl->tpl_vars['slides']->value) > 0 && $_smarty_tpl->tpl_vars['settings']->value['active']) {?>
    <div class="carousel-container carousel-homeslider" style="max-height: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['settings']->value['height'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
px">
        <div id="carousel" >
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['slides']->value, 'slide');
$_smarty_tpl->tpl_vars['slide']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->do_else = false;
?>
                <div class="carousel-feature">
                    <a <?php if ((isset($_smarty_tpl->tpl_vars['slide']->value['url'])) && $_smarty_tpl->tpl_vars['slide']->value['url']) {?> href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['url'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" <?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['slide']->value['title'])) && $_smarty_tpl->tpl_vars['slide']->value['title']) {?> title="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['title'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" <?php }?>>
                        <img class="carousel-image" <?php if ((isset($_smarty_tpl->tpl_vars['slide']->value['caption'])) && $_smarty_tpl->tpl_vars['slide']->value['caption']) {?> alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['caption'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" <?php }?> src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['img_dir']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['image'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                    
					    <?php if ((isset($_smarty_tpl->tpl_vars['slide']->value['description'])) && $_smarty_tpl->tpl_vars['slide']->value['description']) {?>
                            <div  class="carousel-caption" data-position-desc="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['position_desc'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" style="
                                    width: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['width_desc'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
px;
                                    height: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['height_desc'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
px;
                            <?php if ($_smarty_tpl->tpl_vars['slide']->value['position_desc'] == 'top_left') {?>
                                    top:10px;
                                    left:10px;
                                    right: inherit;
                                    bottom: inherit;
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['slide']->value['position_desc'] == 'top_right') {?>
                                    top:10px;
                                    right:10px;
                                    left: inherit;
                                    bottom: inherit;
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['slide']->value['position_desc'] == 'bottom_right') {?>
                                    bottom:10px;
                                    right:10px;
                                    left: inherit;
                                    top: inherit;
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['slide']->value['position_desc'] == 'bottom_left') {?>
                                    bottom:10px;
                                    left:10px;
                                    right: inherit;
                                    top: inherit;
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['slide']->value['position_desc'] == 'center') {?>

                                    top:calc(50% - <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( ($_smarty_tpl->tpl_vars['slide']->value['height_desc']/2),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
px);
                                    left:calc(50% - <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( ($_smarty_tpl->tpl_vars['slide']->value['width_desc']/2),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
px);
                                    margin: 0 auto;

                            <?php }?>">

                                <?php if ($_smarty_tpl->tpl_vars['slide']->value['opacity_desc']) {?>
                                    <span class="carousel-caption-opacity" style=" opacity: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['opacity_desc'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;    "></span>
                                <?php }?>

                                <div class="carousel-caption-cont">
                                    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['description'],'htmlall','UTF-8' ));?>

                                </div>
                            </div>
                        <?php }?>
					
					</a>

                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
    <div style="clear: both"></div>
<?php }?>

<?php }
}
