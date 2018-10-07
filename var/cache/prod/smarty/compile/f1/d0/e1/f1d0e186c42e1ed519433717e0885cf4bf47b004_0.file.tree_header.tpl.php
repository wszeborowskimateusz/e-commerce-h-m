<?php
/* Smarty version 3.1.32, created on 2018-10-07 15:47:40
  from 'C:\xampp\htdocs\admin2762mwbhm\themes\default\template\helpers\tree\tree_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bba0e7c778809_78002720',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1d0e186c42e1ed519433717e0885cf4bf47b004' => 
    array (
      0 => 'C:\\xampp\\htdocs\\admin2762mwbhm\\themes\\default\\template\\helpers\\tree\\tree_header.tpl',
      1 => 1538906760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bba0e7c778809_78002720 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl ) );
}?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {
echo $_smarty_tpl->tpl_vars['toolbar']->value;
}?>
</div>
<?php }
}
