<?php
/* Smarty version 4.3.4, created on 2024-07-18 20:32:00
  from '/home/vol15_8/infinityfree.com/if0_36915431/htdocs/modules/mpm_homeslider/views/templates/admin/home_slider/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6699b4008d38d4_62775785',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed11c6a8999f6512ba60691c7ee4e34d6e3a6f11' => 
    array (
      0 => '/home/vol15_8/infinityfree.com/if0_36915431/htdocs/modules/mpm_homeslider/views/templates/admin/home_slider/helpers/list/list_header.tpl',
      1 => 1721307466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6699b4008d38d4_62775785 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8273404796699b4008d1905_92116588', 'leadin');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'leadin'} */
class Block_8273404796699b4008d1905_92116588 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_8273404796699b4008d1905_92116588',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ((isset($_smarty_tpl->tpl_vars['form']->value)) && $_smarty_tpl->tpl_vars['form']->value) {?>
        <?php echo html_entity_decode(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['form']->value,'htmlall','UTF-8' )));?>

    <?php }
}
}
/* {/block 'leadin'} */
}
