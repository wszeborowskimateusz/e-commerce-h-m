<?php
/* Smarty version 3.1.32, created on 2018-10-07 12:52:55
  from 'C:\xampp\htdocs\themes\classic\templates\catalog\_partials\product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bb9e587549c58_08164646',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1abdf3c22db4baff46bc8d4e7eaa66e2e6a63213' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\classic\\templates\\catalog\\_partials\\product-additional-info.tpl',
      1 => 1538906774,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb9e587549c58_08164646 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
