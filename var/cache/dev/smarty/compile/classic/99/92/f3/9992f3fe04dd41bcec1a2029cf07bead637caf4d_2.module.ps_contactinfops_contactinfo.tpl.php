<?php
/* Smarty version 4.3.4, created on 2024-07-18 05:28:15
  from 'module:ps_contactinfops_contactinfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6698e02f1cc0c5_49733287',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9992f3fe04dd41bcec1a2029cf07bead637caf4d' => 
    array (
      0 => 'module:ps_contactinfops_contactinfo.tpl',
      1 => 1716302598,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6698e02f1cc0c5_49733287 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/vol15_8/infinityfree.com/if0_36915431/htdocs/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'/home/vol15_8/infinityfree.com/if0_36915431/htdocs/vendor/smarty/smarty/libs/plugins/function.mailto.php','function'=>'smarty_function_mailto',),));
?>
<!-- begin /home/vol15_8/infinityfree.com/if0_36915431/htdocs/themes/classic/modules/ps_contactinfo/ps_contactinfo.tpl -->
<div class="block-contact col-md-3 links wrapper">
  <div class="title clearfix hidden-md-up" data-target="#contact-infos" data-toggle="collapse">
    <span class="h3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Store information','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">keyboard_arrow_down</i>
        <i class="material-icons remove">keyboard_arrow_up</i>
      </span>
    </span>
  </div>

  <p class="h4 text-uppercase block-contact-title hidden-sm-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Store information','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</p>
  <div id="contact-infos" class="collapse">
    <?php echo $_smarty_tpl->tpl_vars['contact_infos']->value['address']['formatted'];?>

    <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']) {?>
      <br>
            <?php ob_start();
echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['contact_infos']->value['phone'],' ',''), ENT_QUOTES, 'UTF-8');
$_prefixVariable2=ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Call us: [1]%phone%[/1]','sprintf'=>array('[1]'=>"<a href='tel:".$_prefixVariable2."'>",'[/1]'=>'</a>','%phone%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['phone']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['fax']) {?>
      <br>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Fax: [1]%fax%[/1]','sprintf'=>array('[1]'=>'<span>','[/1]'=>'</span>','%fax%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['fax']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['email'] && $_smarty_tpl->tpl_vars['display_email']->value) {?>
      <br>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email us:','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

        <?php echo smarty_function_mailto(array('address'=>$_smarty_tpl->tpl_vars['contact_infos']->value['email'],'encode'=>"javascript"),$_smarty_tpl);?>

    <?php }?>
  </div>
</div>
<!-- end /home/vol15_8/infinityfree.com/if0_36915431/htdocs/themes/classic/modules/ps_contactinfo/ps_contactinfo.tpl --><?php }
}
