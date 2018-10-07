<?php
/* Smarty version 3.1.32, created on 2018-10-07 18:45:33
  from 'C:\xampp\htdocs\prestashop\modules\revws\views\templates\front\my-account-block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bba382d083a92_88557606',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca4dfc594777100d6bc64593aef58c739d8dc39f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\revws\\views\\templates\\front\\my-account-block.tpl',
      1 => 1538909523,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bba382d083a92_88557606 (Smarty_Internal_Template $_smarty_tpl) {
?><li>
  <a id="revws-link" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('revws','MyReviews',array(),true),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My reviews','mod'=>'revws'),$_smarty_tpl ) );?>

  </a>
</li>
<?php }
}
