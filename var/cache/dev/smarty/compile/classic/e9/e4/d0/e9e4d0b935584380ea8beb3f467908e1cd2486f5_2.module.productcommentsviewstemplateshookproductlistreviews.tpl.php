<?php
/* Smarty version 4.3.4, created on 2024-07-18 05:28:14
  from 'module:productcommentsviewstemplateshookproductlistreviews.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6698e02eb30655_00531457',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9e4d0b935584380ea8beb3f467908e1cd2486f5' => 
    array (
      0 => 'module:productcommentsviewstemplateshookproductlistreviews.tpl',
      1 => 1716302596,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6698e02eb30655_00531457 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /home/vol15_8/infinityfree.com/if0_36915431/htdocs/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->

<div class="product-list-reviews" data-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['product_comment_grade_url']->value;?>
">
  <div class="grade-stars small-stars"></div>
  <div class="comments-nb"></div>
</div>
<!-- end /home/vol15_8/infinityfree.com/if0_36915431/htdocs/modules/productcomments/views/templates/hook/product-list-reviews.tpl --><?php }
}
