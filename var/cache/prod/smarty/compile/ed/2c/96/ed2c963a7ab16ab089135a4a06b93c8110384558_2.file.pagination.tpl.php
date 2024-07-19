<?php
/* Smarty version 4.3.4, created on 2024-07-18 22:10:51
  from '/home/vol15_8/infinityfree.com/if0_36915431/htdocs/themes/smartbox/templates/_partials/pagination.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6699cb2b65a759_25092494',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed2c963a7ab16ab089135a4a06b93c8110384558' => 
    array (
      0 => '/home/vol15_8/infinityfree.com/if0_36915431/htdocs/themes/smartbox/templates/_partials/pagination.tpl',
      1 => 1721307469,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6699cb2b65a759_25092494 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<nav class="pagination">
    <div class="pagination-cont">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3199224846699cb2b6528f3_40062162', 'pagination_page_list');
?>

    </div>

</nav>
<?php }
/* {block 'pagination_page_list'} */
class Block_3199224846699cb2b6528f3_40062162 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination_page_list' => 
  array (
    0 => 'Block_3199224846699cb2b6528f3_40062162',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <ul class="page-list clearfix text-xs-center">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pagination']->value['pages'], 'page');
$_smarty_tpl->tpl_vars['page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->do_else = false;
?>
                    <li <?php if ($_smarty_tpl->tpl_vars['page']->value['current']) {?> class="current" <?php }?> <?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'spacer') {?>class="spacer_li"<?php }?>>
                        <?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'spacer') {?>
                            <span class="spacer">&hellip;</span>
                        <?php } else { ?>
                            <a
                                    rel="<?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'previous') {?>prev<?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type'] === 'next') {?>next<?php } else { ?>nofollow<?php }?>"
                                    href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
                                    class="<?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'previous') {?>previous <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type'] === 'next') {?>next <?php }
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('disabled'=>!$_smarty_tpl->tpl_vars['page']->value['clickable'],'js-search-link'=>true) )), ENT_QUOTES, 'UTF-8');?>
"
                            >
                                <?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'previous') {?>
                                    <i class="material-icons">&#xE314;</i>
                                <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type'] === 'next') {?>
                                    <i class="material-icons">&#xE315;</i>
                                <?php } else { ?>
                                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>

                                <?php }?>
                            </a>
                        <?php }?>
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        <?php
}
}
/* {/block 'pagination_page_list'} */
}
