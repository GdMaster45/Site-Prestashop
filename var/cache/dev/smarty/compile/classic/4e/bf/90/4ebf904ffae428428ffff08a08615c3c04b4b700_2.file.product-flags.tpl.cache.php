<?php
/* Smarty version 4.3.4, created on 2024-07-18 05:28:14
  from '/home/vol15_8/infinityfree.com/if0_36915431/htdocs/themes/classic/templates/catalog/_partials/product-flags.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6698e02eb3e054_92887369',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ebf904ffae428428ffff08a08615c3c04b4b700' => 
    array (
      0 => '/home/vol15_8/infinityfree.com/if0_36915431/htdocs/themes/classic/templates/catalog/_partials/product-flags.tpl',
      1 => 1716302598,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6698e02eb3e054_92887369 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '7533792886698e02eb3a7c6_01925862';
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9877552476698e02eb3c047_29667928', 'product_flags');
?>

<?php }
/* {block 'product_flags'} */
class Block_9877552476698e02eb3c047_29667928 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_flags' => 
  array (
    0 => 'Block_9877552476698e02eb3c047_29667928',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <ul class="product-flags js-product-flags">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
            <li class="product-flag <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php
}
}
/* {/block 'product_flags'} */
}
