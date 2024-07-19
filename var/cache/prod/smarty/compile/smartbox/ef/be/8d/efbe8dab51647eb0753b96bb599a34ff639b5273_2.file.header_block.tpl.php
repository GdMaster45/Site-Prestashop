<?php
/* Smarty version 4.3.4, created on 2024-07-18 20:32:37
  from '/home/vol15_8/infinityfree.com/if0_36915431/htdocs/modules/mpm_header/views/templates/hook/header_block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6699b425824873_57382006',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'efbe8dab51647eb0753b96bb599a34ff639b5273' => 
    array (
      0 => '/home/vol15_8/infinityfree.com/if0_36915431/htdocs/modules/mpm_header/views/templates/hook/header_block.tpl',
      1 => 1721307465,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6699b425824873_57382006 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19207082816699b42581b9a3_59635129', 'header_min');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9190316386699b42581c663_30008167', 'header_banner');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19825409996699b42581d235_12908319', 'header_nav');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7650857436699b4258208c5_14899106', 'header_top');
?>


<?php }
/* {block 'header_min'} */
class Block_19207082816699b42581b9a3_59635129 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_min' => 
  array (
    0 => 'Block_19207082816699b42581b9a3_59635129',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayMinHeader'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'header_min'} */
/* {block 'header_banner'} */
class Block_9190316386699b42581c663_30008167 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_banner' => 
  array (
    0 => 'Block_9190316386699b42581c663_30008167',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="header-banner">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBanner'),$_smarty_tpl ) );?>

    </div>
<?php
}
}
/* {/block 'header_banner'} */
/* {block 'header_nav'} */
class Block_19825409996699b42581d235_12908319 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_19825409996699b42581d235_12908319',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <nav class="header-nav">
        <div class="container">

        <div class="_desktop_header_selector">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"ps_languageselector"),$_smarty_tpl ) );?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"ps_currencyselector"),$_smarty_tpl ) );?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"ps_contactinfo",'hook'=>"displayNav1"),$_smarty_tpl ) );?>

        </div>

        <div class="_desktop_header">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"ps_customersignin",'hook'=>"displayNav1"),$_smarty_tpl ) );?>

        </div>

        </div>
    </nav>
<?php
}
}
/* {/block 'header_nav'} */
/* {block 'header_top'} */
class Block_7650857436699b4258208c5_14899106 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_7650857436699b4258208c5_14899106',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="header-top">
        <div class="container">
            <div class="row">

                <div class="_desktop_header_block">
                    <div class="_desktop_logo" id="_desktop_logo">
                        <a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['urls']->value['base_url'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                            <img class="logo img-responsive" src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['shop']->value['logo'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['shop']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                        </a>
                    </div>

                    <div class="_desktop_right_block">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"ps_shoppingcart"),$_smarty_tpl ) );?>

                        <div id="search-button">	<i class="material-icons search">&#xE8B6;</i></div>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"ps_searchbar"),$_smarty_tpl ) );?>

                        <div class="displayTopMenu">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTopMenu'),$_smarty_tpl ) );?>

                        </div>
                    </div>

                </div>


                <div class="col-md-10 col-sm-12 position-static">
                    <div class="row">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop'),$_smarty_tpl ) );?>

                        <div class="clearfix"></div>
                    </div>
                </div>
                <div style="clear: both"></div>
            </div>
            <div id="mobile_top_menu_wrapper" class="row hidden-md-up" style="display:none;">
                <div class="js-top-menu mobile" id="_mobile_top_menu"></div>
                <div class="js-top-menu-bottom">
                    <div id="_mobile_currency_selector"></div>
                    <div id="_mobile_language_selector"></div>
                    <div id="_mobile_contact_link"></div>
                </div>
            </div>
        </div>
    </div>


    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySubcategories'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'header_top'} */
}
