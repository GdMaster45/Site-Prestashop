<?php
/* Smarty version 4.3.4, created on 2024-07-18 20:32:37
  from '/home/vol15_8/infinityfree.com/if0_36915431/htdocs/themes/smartbox/templates/catalog/_partials/miniatures/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6699b425d3b5a8_13828259',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e120361e4b6fe2c0d0762703d513dad52dc4fae3' => 
    array (
      0 => '/home/vol15_8/infinityfree.com/if0_36915431/htdocs/themes/smartbox/templates/catalog/_partials/miniatures/product.tpl',
      1 => 1721307468,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/variant-links.tpl' => 1,
  ),
),false)) {
function content_6699b425d3b5a8_13828259 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4108218626699b425d26a49_94535319', 'product_miniature_item');
?>

<?php }
/* {block 'product_flags'} */
class Block_7890039616699b425d29ce2_60810040 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <ul class="product-flags-list">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
                                <?php if ($_smarty_tpl->tpl_vars['flag']->value['type'] !== 'discount') {?>
                                    <li class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
                                <?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
                                    <li class="discount"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
</li>
                                <?php }?>
                            <?php }?>
                        </ul>
                    <?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_thumbnail'} */
class Block_7971079676699b425d27dd3_71189688 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


                <div class="product_thumbnail_content">

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayImagesList','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

                    <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
                        <img src = "<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt = "<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" data-full-size-image-url = "<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
" >
                    </a>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7890039616699b425d29ce2_60810040', 'product_flags', $this->tplIndex);
?>

                    <?php ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');
$_prefixVariable2 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRatingProduct','id_product'=>$_prefixVariable2,'type'=>'category'),$_smarty_tpl ) );?>

                </div>
            <?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_name'} */
class Block_2184515066699b425d2e8e1_94120697 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <h1 class="h3 product-title"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8');?>
</a></h1>
                    <?php
}
}
/* {/block 'product_name'} */
/* {block 'product_description'} */
class Block_6472047566699b425d2fdf7_18568125 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div class="description-informations">
                            <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['description'],300,'...' ));?>

                        </div>
                    <?php
}
}
/* {/block 'product_description'} */
/* {block 'product_variants'} */
class Block_8390530296699b425d31130_63013092 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants']) {?>
                            <div class="product_variants">
                                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/variant-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('variants'=>$_smarty_tpl->tpl_vars['product']->value['main_variants']), 0, false);
?>
                            </div>
                        <?php }?>
                    <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_price_and_shipping'} */
class Block_4871953136699b425d32575_73856806 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
                            <div class="product-price-and-shipping">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>

                                <span class="price  <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>has_discount<?php }?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>

                                <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>

                                    <span class="regular-price"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
                                <?php }?>

                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>

                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

                            </div>
                        <?php }?>
                    <?php
}
}
/* {/block 'product_price_and_shipping'} */
/* {block 'product_reviews'} */
class Block_9971124936699b425d36202_24825619 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

                    <?php
}
}
/* {/block 'product_reviews'} */
/* {block 'add_to_cart'} */
class Block_13640972146699b425d36ef6_10176911 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div class="product-add-to-cart">
                            <form action="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( Context::getContext()->link->getPageLink('cart',true),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" method="post" class="add-to-cart-or-refresh">
                                <input type="hidden" name="token" value="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( Tools::getToken(false),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                                <input type="hidden" name="id_product" value="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="product_page_product_id">
                                <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                <button class="btn add-to-cart btn-primary" <?php if ($_smarty_tpl->tpl_vars['product']->value['available_for_order'] && $_smarty_tpl->tpl_vars['product']->value['minimal_quantity'] > $_smarty_tpl->tpl_vars['product']->value['quantity']) {?>disabled<?php }?> data-button-action="add-to-cart" type="submit" >
                                    <i class="material-icons">shopping_cart</i>
                                    <span class="add_to_cart_tittle"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','mod'=>'mpm_bestbanners'),$_smarty_tpl ) );?>
 </span>
                                </button>
                            </form>
                        </div>
                    <?php
}
}
/* {/block 'add_to_cart'} */
/* {block 'quick_view'} */
class Block_19845246626699b425d3ab06_03651056 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <a class="quick-view" href="#" data-link-action="quickview">
                            <i class="material-icons search">&#xE8B6;</i>
                        </a>
                    <?php
}
}
/* {/block 'quick_view'} */
/* {block 'product_miniature_item'} */
class Block_4108218626699b425d26a49_94535319 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature_item' => 
  array (
    0 => 'Block_4108218626699b425d26a49_94535319',
  ),
  'product_thumbnail' => 
  array (
    0 => 'Block_7971079676699b425d27dd3_71189688',
  ),
  'product_flags' => 
  array (
    0 => 'Block_7890039616699b425d29ce2_60810040',
  ),
  'product_name' => 
  array (
    0 => 'Block_2184515066699b425d2e8e1_94120697',
  ),
  'product_description' => 
  array (
    0 => 'Block_6472047566699b425d2fdf7_18568125',
  ),
  'product_variants' => 
  array (
    0 => 'Block_8390530296699b425d31130_63013092',
  ),
  'product_price_and_shipping' => 
  array (
    0 => 'Block_4871953136699b425d32575_73856806',
  ),
  'product_reviews' => 
  array (
    0 => 'Block_9971124936699b425d36202_24825619',
  ),
  'add_to_cart' => 
  array (
    0 => 'Block_13640972146699b425d36ef6_10176911',
  ),
  'quick_view' => 
  array (
    0 => 'Block_19845246626699b425d3ab06_03651056',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <article class="product-miniature js-product-miniature product-miniature-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
">
        <div class="thumbnail-container">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7971079676699b425d27dd3_71189688', 'product_thumbnail', $this->tplIndex);
?>





            <div class="highlighted-informations">
                <div class="product-description">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2184515066699b425d2e8e1_94120697', 'product_name', $this->tplIndex);
?>

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6472047566699b425d2fdf7_18568125', 'product_description', $this->tplIndex);
?>


                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8390530296699b425d31130_63013092', 'product_variants', $this->tplIndex);
?>


                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4871953136699b425d32575_73856806', 'product_price_and_shipping', $this->tplIndex);
?>

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9971124936699b425d36202_24825619', 'product_reviews', $this->tplIndex);
?>

                </div>

                <div class="button_block_prtoduct_list">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13640972146699b425d36ef6_10176911', 'add_to_cart', $this->tplIndex);
?>

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19845246626699b425d3ab06_03651056', 'quick_view', $this->tplIndex);
?>

                </div>

            </div>
            <div style="clear: both"></div>
        </div>
    </article>
<?php
}
}
/* {/block 'product_miniature_item'} */
}
