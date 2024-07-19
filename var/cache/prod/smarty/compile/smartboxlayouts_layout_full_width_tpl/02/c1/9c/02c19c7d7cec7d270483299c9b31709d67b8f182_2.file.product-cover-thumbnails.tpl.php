<?php
/* Smarty version 4.3.4, created on 2024-07-18 22:10:33
  from '/home/vol15_8/infinityfree.com/if0_36915431/htdocs/themes/smartbox/templates/catalog/_partials/product-cover-thumbnails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6699cb1975fd29_19866385',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02c19c7d7cec7d270483299c9b31709d67b8f182' => 
    array (
      0 => '/home/vol15_8/infinityfree.com/if0_36915431/htdocs/themes/smartbox/templates/catalog/_partials/product-cover-thumbnails.tpl',
      1 => 1721307468,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6699cb1975fd29_19866385 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="images-container">


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6447571456699cb197561c4_01987105', 'product_images');
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8969380936699cb1975b2c2_44681054', 'product_cover');
?>


</div>
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterProductThumbs'),$_smarty_tpl ) );?>


<?php echo '<script'; ?>
 type="text/javascript">

  setTimeout(function () {

    if($('.quickview  .product_images_block .product-images').length>0){
      productsImageSlider($('.quickview .product_images_block .product-images'), 2);
    }

    if($('#product .page-content .product_images_block .product-images').length>0){
      productsImageSlider($('#product .page-content .product_images_block .product-images'), 3);
    }

  }, 1000);

<?php echo '</script'; ?>
>
<?php }
/* {block 'product_images'} */
class Block_6447571456699cb197561c4_01987105 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_images' => 
  array (
    0 => 'Block_6447571456699cb197561c4_01987105',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="product_images_block">
      <ul class="product-images" id="gallery_09">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
          <li class="thumb-container-img <?php if ($_smarty_tpl->tpl_vars['image']->value['id_image'] == $_smarty_tpl->tpl_vars['product']->value['cover']['id_image']) {?> selected <?php }?>">


            <img class="thumb_item <?php if ($_smarty_tpl->tpl_vars['image']->value['id_image'] == $_smarty_tpl->tpl_vars['product']->value['cover']['id_image']) {?> selected <?php }?>"
                 data-image-medium-src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize']['medium_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                 data-image-large-src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                 src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize']['cart_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                 alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
                 title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
                 itemprop="image"
            >
          </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    </div>
  <?php
}
}
/* {/block 'product_images'} */
/* {block 'product_flags'} */
class Block_12374984366699cb1975cff2_75371893 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <ul class="product-flags">
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
        </ul>
      <?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_cover'} */
class Block_8969380936699cb1975b2c2_44681054 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_cover' => 
  array (
    0 => 'Block_8969380936699cb1975b2c2_44681054',
  ),
  'product_flags' => 
  array (
    0 => 'Block_12374984366699cb1975cff2_75371893',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="product-cover">

      <div class="product-cover-img">
        <img data-zoom-image="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
" id="zoom_mw"  class="js-qv-product-cover" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['medium_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" style="max-width:100%;">
        <div class="layer hidden-sm-down" data-toggle="modal" data-target="#product-modal">
        </div>
      </div>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12374984366699cb1975cff2_75371893', 'product_flags', $this->tplIndex);
?>


    </div>
  <?php
}
}
/* {/block 'product_cover'} */
}
