<?php
/* Smarty version 3.1.32, created on 2018-10-07 12:52:55
  from 'C:\xampp\htdocs\modules\revws\views\templates\hook\product_tab_content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bb9e5870ec738_25566359',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ce3831023ee49a75cf91ec3086825294844e547' => 
    array (
      0 => 'C:\\xampp\\htdocs\\modules\\revws\\views\\templates\\hook\\product_tab_content.tpl',
      1 => 1538909523,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/revws/views/templates/widgets/product-reviews/product-reviews.tpl' => 1,
  ),
),false)) {
function content_5bb9e5870ec738_25566359 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="idTabRevws">
  <?php $_smarty_tpl->_subTemplateRender('file:modules/revws/views/templates/widgets/product-reviews/product-reviews.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('reviewList'=>$_smarty_tpl->tpl_vars['reviewList']->value,'productId'=>$_smarty_tpl->tpl_vars['productId']->value,'visitor'=>$_smarty_tpl->tpl_vars['visitor']->value,'reviewsData'=>$_smarty_tpl->tpl_vars['reviewsData']->value), 0, false);
?>
</div>
<?php }
}
