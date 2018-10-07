<?php
/* Smarty version 3.1.32, created on 2018-10-07 19:12:48
  from 'C:\xampp\htdocs\prestashop\admin2762mwbhm\themes\default\template\helpers\list\list_action_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bba3e9050d852_76837296',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6419dd5230ddb6c4c3ca24f8b6435ce9ca76603d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin2762mwbhm\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1538906760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bba3e9050d852_76837296 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['href']->value,'html','UTF-8' ));?>
" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>

</a>
<?php }
}
