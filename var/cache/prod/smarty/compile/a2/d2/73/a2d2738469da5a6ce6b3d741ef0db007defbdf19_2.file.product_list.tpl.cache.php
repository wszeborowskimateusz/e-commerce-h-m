<?php
/* Smarty version 3.1.32, created on 2018-10-07 12:52:52
  from 'C:\xampp\htdocs\modules\revws\views\templates\hook\product_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bb9e5843c1c34_58323476',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2d2738469da5a6ce6b3d741ef0db007defbdf19' => 
    array (
      0 => 'C:\\xampp\\htdocs\\modules\\revws\\views\\templates\\hook\\product_list.tpl',
      1 => 1538909523,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/revws/views/templates/widgets/grading/grading.tpl' => 1,
  ),
),false)) {
function content_5bb9e5843c1c34_58323476 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2670812495bb9e5843ba2c3_97712219';
if ($_smarty_tpl->tpl_vars['reviewCount']->value > 0 || !$_smarty_tpl->tpl_vars['omitEmpty']->value) {?>
<div class="revws-product-list<?php if ($_smarty_tpl->tpl_vars['reviewCount']->value == 0) {?> revws-product-list-empty<?php }?>">
  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['reviewsUrl']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php $_smarty_tpl->_subTemplateRender('file:modules/revws/views/templates/widgets/grading/grading.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('grade'=>$_smarty_tpl->tpl_vars['grade']->value,'shape'=>$_smarty_tpl->tpl_vars['shape']->value,'type'=>'list'), 0, false);
?>
    <div class="revws-count-text">
      <?php if ($_smarty_tpl->tpl_vars['reviewCount']->value == 1) {?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'one review','mod'=>'revws'),$_smarty_tpl ) );?>

      <?php } else { ?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%1$d reviews','sprintf'=>array($_smarty_tpl->tpl_vars['reviewCount']->value),'mod'=>'revws'),$_smarty_tpl ) );?>

      <?php }?>
    </div>
  </a>
</div>
<?php }
}
}
