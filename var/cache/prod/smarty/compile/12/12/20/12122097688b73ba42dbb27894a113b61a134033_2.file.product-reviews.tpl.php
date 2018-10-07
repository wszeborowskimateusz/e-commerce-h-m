<?php
/* Smarty version 3.1.32, created on 2018-10-07 12:52:55
  from 'C:\xampp\htdocs\modules\revws\views\templates\widgets\product-reviews\product-reviews.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bb9e58716aa59_09247202',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12122097688b73ba42dbb27894a113b61a134033' => 
    array (
      0 => 'C:\\xampp\\htdocs\\modules\\revws\\views\\templates\\widgets\\product-reviews\\product-reviews.tpl',
      1 => 1538909523,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/revws/views/templates/widgets/list/list.tpl' => 1,
  ),
),false)) {
function content_5bb9e58716aa59_09247202 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['reviewsData']->value['preferences']['microdata'] && $_smarty_tpl->tpl_vars['reviewCount']->value > 0 && $_smarty_tpl->tpl_vars['avgGrade']->value > 0) {?><div class="revws-hidden" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">Rated <span itemprop="ratingValue"><?php echo htmlspecialchars(sprintf("%.2f",$_smarty_tpl->tpl_vars['avgGrade']->value), ENT_QUOTES, 'UTF-8');?>
</span> on the scale <span itemProp="worstRating">1</span> - <span itemprop="bestRating">5</span> based on <span itemprop="reviewCount"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['reviewCount']->value, ENT_QUOTES, 'UTF-8');?>
</span> customer reviews</div><?php }?><div id="revws-portal-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['reviewList']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->_assignInScope('hasReviewed', in_array($_smarty_tpl->tpl_vars['productId']->value,$_smarty_tpl->tpl_vars['visitor']->value['reviewedProducts']));
$_smarty_tpl->_assignInScope('canReview', !($_smarty_tpl->tpl_vars['visitor']->value['type'] === 'guest' && !$_smarty_tpl->tpl_vars['reviewsData']->value['preferences']['allowGuestReviews']) && !$_smarty_tpl->tpl_vars['hasReviewed']->value);
if ($_smarty_tpl->tpl_vars['reviewList']->value['total'] > 0) {
$_smarty_tpl->_subTemplateRender('file:modules/revws/views/templates/widgets/list/list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('reviewStyle'=>'item','reviewList'=>$_smarty_tpl->tpl_vars['reviewList']->value,'reviewsData'=>$_smarty_tpl->tpl_vars['reviewsData']->value,'shopName'=>$_smarty_tpl->tpl_vars['reviewsData']->value['shopName'],'shape'=>$_smarty_tpl->tpl_vars['reviewsData']->value['theme']['shape'],'criteria'=>$_smarty_tpl->tpl_vars['reviewsData']->value['criteria'],'displayCriteria'=>$_smarty_tpl->tpl_vars['reviewsData']->value['preferences']['displayCriteria'],'microdata'=>$_smarty_tpl->tpl_vars['reviewsData']->value['preferences']['microdata'],'allowPaging'=>true), 0, false);
if (!$_smarty_tpl->tpl_vars['hasReviewed']->value) {
if ($_smarty_tpl->tpl_vars['canReview']->value) {?><div class="form-group"><a class="btn btn-primary" data-revws-create-trigger="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productId']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Write your review!','mod'=>'revws'),$_smarty_tpl ) );?>
</a></div><?php } else {
if ($_smarty_tpl->tpl_vars['visitor']->value['type'] === 'guest') {?><div class="form-group"><a class="btn btn-primary" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['reviewsData']->value['loginUrl'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in to write a review','mod'=>'revws'),$_smarty_tpl ) );?>
</a></div><?php }
}
}
} else {
if (!$_smarty_tpl->tpl_vars['hasReviewed']->value) {
if ($_smarty_tpl->tpl_vars['canReview']->value) {?><div class="form-group"><a class="btn btn-primary" data-revws-create-trigger="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productId']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Be the first to write a review!','mod'=>'revws'),$_smarty_tpl ) );?>
</a></div><?php } else {
if ($_smarty_tpl->tpl_vars['visitor']->value['type'] === 'guest' && $_smarty_tpl->tpl_vars['reviewsData']->value['preferences']['showSignInButton']) {?><div class="form-group"><a class="btn btn-primary" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['reviewsData']->value['loginUrl'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in to write a review','mod'=>'revws'),$_smarty_tpl ) );?>
</a></div><?php } else { ?><div class="form-group"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No customer reviews for the moment.','mod'=>'revws'),$_smarty_tpl ) );?>
</div><?php }
}
}
}?></div><div class="revws-hidden"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['allReviewsUrl']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reviews','mod'=>'revws'),$_smarty_tpl ) );?>
</a></div>
<?php }
}
