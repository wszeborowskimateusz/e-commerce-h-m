<?php
/* Smarty version 3.1.32, created on 2018-10-06 23:23:25
  from 'C:\xampp\htdocs\prestashop\admin2762mwbhm\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bb927cdbf5557_88029043',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86051f4e90cde4481e9d2239c5beab86aa9b8f05' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin2762mwbhm\\themes\\default\\template\\content.tpl',
      1 => 1537364655,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb927cdbf5557_88029043 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
