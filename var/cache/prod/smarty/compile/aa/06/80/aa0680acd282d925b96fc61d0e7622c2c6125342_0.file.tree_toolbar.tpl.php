<?php
/* Smarty version 3.1.32, created on 2018-10-07 15:47:40
  from 'C:\xampp\htdocs\admin2762mwbhm\themes\default\template\helpers\tree\tree_toolbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bba0e7c709785_13230008',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa0680acd282d925b96fc61d0e7622c2c6125342' => 
    array (
      0 => 'C:\\xampp\\htdocs\\admin2762mwbhm\\themes\\default\\template\\helpers\\tree\\tree_toolbar.tpl',
      1 => 1538906760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bba0e7c709785_13230008 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['actions']->value, 'action');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['action']->value) {
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }?>
</div>
<?php }
}
