<?php
/* Smarty version 3.1.32, created on 2018-10-07 15:47:40
  from 'C:\xampp\htdocs\admin2762mwbhm\themes\default\template\controllers\categories\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bba0e7cb25584_21050899',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42024e03f5e65e6f7aa0ed6c4669319014ca07e7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\admin2762mwbhm\\themes\\default\\template\\controllers\\categories\\helpers\\form\\form.tpl',
      1 => 1538906759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bba0e7cb25584_21050899 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18569624255bba0e7cb0afd9_84462561', "script");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2133061685bba0e7cb0c2c1_85671200', "input");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8154719475bba0e7cb1e933_82372208', "description");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16853154365bba0e7cb23311_60925922', "input_row");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "script"} */
class Block_18569624255bba0e7cb0afd9_84462561 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_18569624255bba0e7cb0afd9_84462561',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	var ps_force_friendly_product = false;
<?php
}
}
/* {/block "script"} */
/* {block "input"} */
class Block_2133061685bba0e7cb0c2c1_85671200 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_2133061685bba0e7cb0c2c1_85671200',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == "link_rewrite") {?>
		<?php echo '<script'; ?>
 type="text/javascript">
		<?php if (isset($_smarty_tpl->tpl_vars['PS_ALLOW_ACCENTED_CHARS_URL']->value) && $_smarty_tpl->tpl_vars['PS_ALLOW_ACCENTED_CHARS_URL']->value) {?>
			var PS_ALLOW_ACCENTED_CHARS_URL = 1;
		<?php } else { ?>
			var PS_ALLOW_ACCENTED_CHARS_URL = 0;
		<?php }?>
		<?php echo '</script'; ?>
>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }?>
	<?php if (($_smarty_tpl->tpl_vars['input']->value['name'] == 'active')) {?>
		<div class="col-lg-12">
			<div class="help-block">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you want a category to appear in the menu of your shop, go to [1]Modules > Modules & Services > Installed modules.[/1] Then, configure your menu module.','sprintf'=>array('[1]'=>"<a href=\"".((string)$_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModulesSf'))."\" class=\"_blank\">",'[/1]'=>'</a>'),'d'=>'Admin.Catalog.Help'),$_smarty_tpl ) );?>

			</div>
		</div>
	<?php }?>
	<?php if (in_array($_smarty_tpl->tpl_vars['input']->value['name'],array('image','thumb'))) {?>
		<div class="col-lg-6">
			<div class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Recommended dimensions (for the default theme): %1spx x %2spx','sprintf'=>array($_smarty_tpl->tpl_vars['input']->value['format']['width'],$_smarty_tpl->tpl_vars['input']->value['format']['height']),'d'=>'Admin.Catalog.Help'),$_smarty_tpl ) );?>

			</div>
		</div>
	<?php }
}
}
/* {/block "input"} */
/* {block "description"} */
class Block_8154719475bba0e7cb1e933_82372208 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'description' => 
  array (
    0 => 'Block_8154719475bba0e7cb1e933_82372208',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php if (($_smarty_tpl->tpl_vars['input']->value['name'] == 'groupBox')) {?>
		<div class="alert alert-info">
			<h4><?php echo $_smarty_tpl->tpl_vars['input']->value['info_introduction'];?>
</h4>
			<p><?php echo $_smarty_tpl->tpl_vars['input']->value['unidentified'];?>
<br />
			<?php echo $_smarty_tpl->tpl_vars['input']->value['guest'];?>
<br />
			<?php echo $_smarty_tpl->tpl_vars['input']->value['customer'];?>
</p>
		</div>
	<?php }
}
}
/* {/block "description"} */
/* {block "input_row"} */
class Block_16853154365bba0e7cb23311_60925922 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input_row' => 
  array (
    0 => 'Block_16853154365bba0e7cb23311_60925922',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php if (($_smarty_tpl->tpl_vars['input']->value['name'] == 'thumbnail')) {?>
		<?php echo $_smarty_tpl->tpl_vars['displayBackOfficeCategory']->value;?>

	<?php }
}
}
/* {/block "input_row"} */
}
