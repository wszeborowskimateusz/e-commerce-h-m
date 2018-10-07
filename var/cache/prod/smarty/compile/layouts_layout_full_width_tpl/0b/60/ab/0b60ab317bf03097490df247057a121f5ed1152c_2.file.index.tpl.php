<?php
/* Smarty version 3.1.32, created on 2018-10-07 12:52:52
  from 'C:\xampp\htdocs\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bb9e58475d9e4_97266046',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b60ab317bf03097490df247057a121f5ed1152c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\classic\\templates\\index.tpl',
      1 => 1538906774,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb9e58475d9e4_97266046 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17240281425bb9e58475a389_71498466', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_10989474025bb9e58475abd5_27285476 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_6543665955bb9e58475bee1_44857829 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_20970589435bb9e58475b777_20234478 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6543665955bb9e58475bee1_44857829', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_17240281425bb9e58475a389_71498466 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_17240281425bb9e58475a389_71498466',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_10989474025bb9e58475abd5_27285476',
  ),
  'page_content' => 
  array (
    0 => 'Block_20970589435bb9e58475b777_20234478',
  ),
  'hook_home' => 
  array (
    0 => 'Block_6543665955bb9e58475bee1_44857829',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10989474025bb9e58475abd5_27285476', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20970589435bb9e58475b777_20234478', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
