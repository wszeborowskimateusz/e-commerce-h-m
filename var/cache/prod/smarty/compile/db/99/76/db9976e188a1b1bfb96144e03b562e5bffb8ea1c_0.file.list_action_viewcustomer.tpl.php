<?php
/* Smarty version 3.1.32, created on 2018-10-07 15:21:34
  from 'C:\xampp\htdocs\modules\ps_emailsubscription\views\templates\admin\list_action_viewcustomer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bba085eb3bfc1_02946565',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db9976e188a1b1bfb96144e03b562e5bffb8ea1c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\modules\\ps_emailsubscription\\views\\templates\\admin\\list_action_viewcustomer.tpl',
      1 => 1538906770,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bba085eb3bfc1_02946565 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['href']->value,'html','UTF-8' ));?>
" class="edit btn btn-default <?php if ($_smarty_tpl->tpl_vars['disable']->value) {?>disabled<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" >
	<i class="icon-search-plus"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }
}
