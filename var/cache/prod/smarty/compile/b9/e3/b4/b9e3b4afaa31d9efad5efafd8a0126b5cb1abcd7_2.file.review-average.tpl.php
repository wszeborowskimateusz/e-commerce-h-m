<?php
/* Smarty version 3.1.32, created on 2018-10-07 12:52:55
  from 'C:\xampp\htdocs\modules\revws\views\templates\hook\review-average.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bb9e587632db3_82957096',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9e3b4afaa31d9efad5efafd8a0126b5cb1abcd7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\modules\\revws\\views\\templates\\hook\\review-average.tpl',
      1 => 1538909523,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/revws/views/templates/widgets/grading/grading.tpl' => 1,
  ),
),false)) {
function content_5bb9e587632db3_82957096 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="revws-product-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['placement']->value, ENT_QUOTES, 'UTF-8');?>
">
  <b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Rating','mod'=>'revws'),$_smarty_tpl ) );?>
:</b>
  <?php if ($_smarty_tpl->tpl_vars['reviewCount']->value > 0) {?>
    <a class="revws-product-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['placement']->value, ENT_QUOTES, 'UTF-8');?>
-link" href="#idTabRevws">
      <?php $_smarty_tpl->_subTemplateRender('file:modules/revws/views/templates/widgets/grading/grading.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('grade'=>$_smarty_tpl->tpl_vars['grade']->value,'shape'=>$_smarty_tpl->tpl_vars['shape']->value,'type'=>'product'), 0, false);
?>
      <div class="revws-count-text">
        <?php if ($_smarty_tpl->tpl_vars['reviewCount']->value == 1) {?>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(read one review)','mod'=>'revws'),$_smarty_tpl ) );?>

        <?php } else { ?>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(read %1$d reviews)','sprintf'=>array($_smarty_tpl->tpl_vars['reviewCount']->value),'mod'=>'revws'),$_smarty_tpl ) );?>

        <?php }?>
      </div>
    </a>
  <?php } else { ?>
    <?php if ($_smarty_tpl->tpl_vars['canReview']->value) {?>
      <a class="revws-product-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['placement']->value, ENT_QUOTES, 'UTF-8');?>
-link" href="#" data-revws-create-trigger="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productId']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Be the first to write a review!','mod'=>'revws'),$_smarty_tpl ) );?>

      </a>
    <?php } else { ?>
      <?php if ($_smarty_tpl->tpl_vars['hasReviewed']->value) {?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Your review hasn't been approved yet",'mod'=>'revws'),$_smarty_tpl ) );?>

      <?php } elseif ($_smarty_tpl->tpl_vars['isGuest']->value && $_smarty_tpl->tpl_vars['showSignInButton']->value) {?>
        <a class="revws-product-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['placement']->value, ENT_QUOTES, 'UTF-8');?>
-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['loginLink']->value, ENT_QUOTES, 'UTF-8');?>
">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in to write a review','mod'=>'revws'),$_smarty_tpl ) );?>

        </a>
      <?php } else { ?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No customer reviews for the moment.','mod'=>'revws'),$_smarty_tpl ) );?>

      <?php }?>
    <?php }?>
  <?php }?>
</div>
<?php }
}
